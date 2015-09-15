<?php
/*24/06/2015
*Théophile MARCADÉ & Léopold QUILLIEN
*theophile.marcade@proservia-obs.fr
*leopold.quillien@proservia-obs.fr
*Stagiaire PROSERVIA 15/06/2015 - 31/08/2015
*edition.php
*/


session_start();
//inclusion des fichiers php
include "fonctions.php";
include "formulaires.php";
		
date_default_timezone_set('Europe/Paris'); 								//Définition du Time Zone
$bdd = connexionBDD();
$token = 'false';

if(isset($_COOKIE['token'])&& !empty($_COOKIE['token'])) $token = $_COOKIE['token'];											//Récupération des Cookies ou Sessions	

$token = $token;													//Protections SQL
$login_q = $bdd->prepare("SELECT * FROM users WHERE token = :token AND valid = '1'");
$login_q->execute(array(
	'token' => $token
	));

if($login_q->fetchColumn() == 0)									//Si login pass et valid NOK
{
	header('Location: connexion.php');								//Redirection vers page de connexion
	
	exit();
}
/******************************************INSERTION D'IMAGE**********************************************/
if (isset($_POST['env']) && !empty($_POST['env']) && isset($_FILES['image']) && !empty($_FILES['image']) && isset($_POST['MAX_FILE_SIZE']) && !empty($_POST['MAX_FILE_SIZE'])){				
	insertionImages($_FILES['image'],$_POST['env'],$_POST['MAX_FILE_SIZE']);
}

if(isset($_GET['delete']) && !empty($_GET['delete']) && isset($_GET['page']) && !empty($_GET['page'])){				//Si le paramètre delete est spécifié dans l'URL

	if($_GET['page']=="dbg"){
		$idDbg = $_GET['delete'];											//Protection SQL
		$delete_q = $bdd->prepare("UPDATE debugs SET valid = '0' WHERE id_debugs = :idDbg");
		$delete_q->execute(array(
			'idDbg' => $idDbg
		));
	}else if ($_GET['page']=="csg"){
		$idCsg = $_GET['delete'];											//Protection SQL
		$delete_q = $bdd->prepare("UPDATE consignes SET valid = '0' WHERE id_consignes = :idCsg");
		$delete_q->execute(array(
		'idCsg' => $idCsg
		));
	}
}
	

if(isset($_POST['titre'], $_POST['desc'], $_POST['id_pages_csg'])){		//Création d'une consignes ou modification
	if(!empty($_POST['titre']) && !empty($_POST['desc']) && !empty($_POST['id_pages_csg'])){

	
		if($_POST['update']==1){									//Dans le cas d'une modification de consigne
			
			$title = $_POST['titre'];
			$text = $_POST['desc'];
			$id_csg = $_POST['id_csg'];

			$update_q = $bdd->prepare("UPDATE consignes SET title = :title , text = :text, date = NOW() WHERE id_consignes = :id_csg");	//Mise à jour d'une consignes
			
			
			$update_q->execute(array(
				'title' => $title,
				'text' => $text,
				'id_csg' => $id_csg
			));
		}else{														//Dans le cas d'une nouvelle consigne
			$title = $_POST['titre'];
			$text = $_POST['desc'];
			$idPagesCsg = $_POST['id_pages_csg'];
				
			$insert_q = $bdd->prepare("INSERT INTO consignes VALUES ('', :title, :text, NOW(), '1', :idPagesCsg)");	//Insertion d'une nouvelle consignes
			$insert_q->execute(array(
				'text' => $text,
				'title' => $title,
				'idPagesCsg' => $idPagesCsg
			));
		}
	}
}

if(isset($_POST['desc'], $_POST['id_pages_debugs'])){		//Création d'un débug ou modification
	if(!empty($_POST['desc']) && !empty($_POST['id_pages_debugs'])){


		if($_POST['update']==1){									//Dans le cas d'une modification d'un debugs


			$text = $_POST['desc'];
			$id_dbg = $_POST['id_dbg'];

			$update_q = $bdd->prepare("UPDATE debugs SET  text = :text, date = NOW() WHERE id_debugs = :id_dbg");	//Mise à jour d'un debugs
			
			$update_q->execute(array(

				'text' => $text,
				'id_dbg' => $id_dbg
			));
		}else{														//Dans le cas d'un nouveau debugs
			$text = $_POST['desc'];
			$idPagesDbg = $_POST['id_pages_debugs'];
				
			$insert_q = $bdd->prepare("INSERT INTO debugs VALUES ('',  :text, NOW(), '1', :idPagesDbg)");	//Insertion d'un nouveau debugs
			$insert_q->execute(array(
				'text' => $text,
				'idPagesDbg' => $idPagesDbg
			));
		}
	}
}

$debugs = array();
$consignes = array();

if(isset($_POST['offre']) && !empty($_POST['offre'])){			//On passe L'ID offre en SESSION afin de ne pas la perdre en cas de rechargement de page
	$_SESSION['offre'] = $_POST['offre'];
	$_SESSION['client'] = "";

}


if(isset($_POST['client']) && !empty($_POST['client'])){			//On passe L'ID client en SESSION afin de ne pas la perdre en cas de rechargement de page
	$_SESSION['client'] = $_POST['client'];
	$_SESSION['offre'] = "";

}

if(isset($_SESSION['client']) && !empty($_SESSION['client'])){		//Si un client à été saisi

	$client = $_SESSION['client'];									//Protection SQL
		
	$selectAll_q = $bdd->prepare("SELECT 
								consignes.id_pages_consignes ,
								consignes.id_consignes,
								title,
								text,
								DATE_FORMAT(date, '%b') AS date_b,
								DATE_FORMAT(date, '%d') AS date_d,
								DATE_FORMAT(date, '%Y') AS date_Y ,
								consignes.valid 
								FROM consignes 
								INNER JOIN pages_consignes ON consignes.id_pages_consignes = pages_consignes.id_pages_consignes 
								INNER JOIN client ON pages_consignes.id_client = client.ID_Client 
								WHERE client.ID_Client = :client AND consignes.valid ='1' 
								ORDER BY consignes.id_consignes ");
								
	$selectAll_q->execute(array(
		'client' => $client
	));
		
	while($result = $selectAll_q->fetch(PDO::FETCH_ASSOC))
	{
		$consignes[] = $result; 												//Remplissage du tableau avec ces valeurs
	}
		
} 

if(isset($_SESSION['offre']) && !empty($_SESSION['offre'])){		//Si un offre à été saisi

	$offre = $_SESSION['offre'];									//Protection SQL
		
	$selectAll_q = $bdd->prepare("SELECT 
								pages_debugs.name ,
								debugs.id_pages_debugs ,
								debugs.id_debugs,
								debugs.text,
								DATE_FORMAT(date, '%b') AS date_b, 
								DATE_FORMAT(date, '%d') AS date_d,
								DATE_FORMAT(date, '%Y') AS date_Y , 
								debugs.valid 
								FROM debugs 
								INNER JOIN pages_debugs ON debugs.id_pages_debugs = pages_debugs.id_pages_debugs 
								INNER JOIN offre ON pages_debugs.id_offre = offre.ID_Offre 
								WHERE offre.ID_Offre = :offre AND debugs.valid ='1' ORDER BY debugs.id_debugs ");
								
	$selectAll_q->execute(array(
		'offre' => $offre
	));
		
	while($result = $selectAll_q->fetch(PDO::FETCH_ASSOC))
	{
		$debugs[] = $result; 												//Remplissage du tableau avec ces valeurs
	}
		
} 

?>

<!DOCTYPE html>
<html>
<head>
	<!--Inclusion du fichier CSS-->
	<link rel="stylesheet" href="Style/master_Style.css" type="text/css" media="screen" />
	
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="Style/ie8.css" type="text/css" media="screen" /><![endif]-->
	<!--[if lte IE 7]>
	<link rel="stylesheet" href="Style/ie8.css" type="text/css" media="screen" />
	<script src="js/IE8.js" type="text/javascript"></script>
	<![endif]-->
    
	<title>Edition</title>
</head>

<body>
	<!--conteneur qui contient l'ensemble de la page-->
	<div id="container">
		<!--conteneur qui contient le titre-->
		<div id="topbar">
			<h1 >Edition offre</h1>
		</div>
		<!--conteneur qui contient la partie navigation de la page-->
		<div id="navbar"> 
		<?php
			formEdition();
		?>
		</div>

		<!--conteneur qui contient la partie principale de la page-->
		<div id="main">
			<?php

			//Si l'utilisateur à cliqué sur un des liens hypertexte de la navigation
			if(!empty($_GET) && isset($_GET['action']) && $_GET['action']!=""){
			
				//On vérifie quel lien à été cliqué
				switch($_GET['action']){
					/**************************************************************************************************************************/
					case 'insertion_bdd' :
						?>
						<!--conteneur de la partie gauche de la page-->
						<div id="column_left"> 
						<?php
							//Affichage du formulaire d'insertion
							formInsertion();
					
							//Si l'utilisateur veut inserer une nouvelle offre
							if(!empty($_POST) && isset($_POST['nom_New_Offre']) && $_POST['nom_New_Offre']!=""){
								if(!insertionOffre($_POST['nom_New_Offre'])){
									echo "L'insertion ne s'est pas effectuée correctement";
								}else{
									echo '<p id ="msg_offre">Insertion réussie les fichiers à modifier seront dans : C:\\xampp\\htdocs\\CIDRE\Offre\\'.$_POST['nom_New_Offre'].'</p>';
								}

							}								
							if(!empty($_POST) && isset($_POST['nom_New_Client']) && $_POST['nom_New_Client']!=""){
								if(!insertionClient($_POST['nom_New_Client'])){
									echo "L'insertion ne s'est pas effectuée correctement";
								}else{
									echo '<p id ="msg_client"> Insertion réussie</p>';
								}
							}

							//Si l'utilisateur veut inserer un nouveau débug
							if(!empty($_POST) && isset($_POST['offre']) && $_POST['offre']!="" && isset($_POST['nom_New_Debug']) && $_POST['nom_New_Debug']!=""){
								if(!insertionPagesDebugs($_POST['nom_New_Debug'],$_POST['offre'])){
									echo "L'insertion ne s'est pas effectuée correctement";
								}else{
									echo '<p id ="msg_debug">Insertion réussie</p>';
								}
							}
							?>
						</div>
						<!--conteneur qui contient la partie droite de la page-->
						<div id="column_right"> 
							<?php
							//Affichage des tableaux client et offre
							afficheListeClient();
							afficheListeOffre();
							?>
						</div>	
						<?php
						break;
					/**************************************************************************************************************************/
					case 'suppression_bdd' :
						?>
						<!--conteneur de la partie gauche de la page-->
						<div id="column_left"> 
						<?php
						//Si l'utilisateur veut supprimer une offre
						if(!empty($_POST) && isset($_POST['supp_offre']) && $_POST['supp_offre']!="" && $_POST['supp_offre']!="Selectionner"){
							if(!suppressionOffre($_POST['supp_offre'])){
								echo "La suppression ne s'est pas effectuée correctement";
							}else{
								echo "Suppression réussie";
							}
						}
						if(!empty($_POST) && isset($_POST['supp_client']) && $_POST['supp_client']!="" && $_POST['supp_client']!="Selectionner"){
							if(!suppressionClient($_POST['supp_client'])){
								echo "La suppression ne s'est pas effectuée correctement";
							}else{
								echo "Suppression réussie";
							}
						}
						
						if(!empty($_POST) && isset($_POST['supp_debug']) && $_POST['supp_debug']!="" && $_POST['supp_debug']!="Selectionner"){
							if(!suppressionDebug($_POST['supp_debug'])){
								echo "La suppression ne s'est pas effectuée correctement";
							}else{
								echo "Suppression réussie";
							}
						}
						//Affichage du formulaire de suppression (en dessous des fonctions de suppression pour que l'affichage soit correct)
						formSuppression();
						?>
						</div>
						<!--conteneur qui contient la partie droite de la page-->
						<div id="column_right"> 
							<?php
							//Affichage des tableaux client et offre
							afficheListeClient();
							afficheListeOffre();
							?>
						</div>	
						<?php												
						break;
															
						case 'edition_page_csg' :
							formClientSearch();
							if(isset($_SESSION['client']) && !empty($_SESSION['client'])){	//Si un client à été choisi

								?>
								
								<div id="AjoutConsignes">		
									<?php
										formInsertionImage($_GET['action']);
										formEditionConsignes();									//On affiche le formulaire d'ajout/modification de consignes
									?>
								</div>
								<!--Zone d'affichage des consignes déjà publiées-->
								<div id = "article">
								<fieldset class= "fieldset">

									<h2 >Consignes déjà publiées</h2>
									<ul id="consignes">
									<?php
									if(empty($consignes)) echo "<p class='paragraphe'>Il n'y a pas de consignes actuellement pour ce client</p>";	//Si pas de consignes
										foreach ($consignes as $csg){						//Boucle qui affiche les consignes
											
											echo '
											<div id ="'.$csg['title'].'">
												<li>
													<h3 id = "title">'.$csg['title'].'</h3>
													<time datetime="2015-06-19" pubdate>'.$csg['date_d'].'<span> '.$csg['date_b'].'</span><span> '.$csg['date_Y'].'</span></time> 		<!--L\'attribut booléen pubdate signifie que le "time" spécifié est bien celui de l\'article au cas ou il y aurait plusieurs <date> dedans-->
													<p id = "paragraphe">'.$csg['text'].'</p>			
													<p><a href="edition.php?action=edition_page_csg&update='.$csg['id_consignes'].'&page=csg"> Modifier la consigne</a></p>
													<p><a href="edition.php?action=edition_page_csg&delete='.$csg['id_consignes'].'&page=csg">Supprimer</a></p>									
												</li>
											</div>
													';										//ECHO qui affiche les consignes
										}
									?>
									</ul>
								</fieldset>
								</div>		
							<?php
							}
						
							break;
			
						case 'edition_page_dbg' :
							
							formOffreSearch();
							if(isset($_SESSION['offre']) && !empty($_SESSION['offre'])){	//Si l'utilisateur choisit d'éditez un débug
								?>	
								<div id="AjoutDebugs">		
									<?php								
									formInsertionImage($_GET['action']);
									formEditionDebugs();									//On affiche le formulaire d'ajout d'une page de débug
									?>
								</div>
								<!--Zone d'affichage des consignes déjà publiées-->
								<div id = "article">
									<fieldset class= "fieldset">
		
									<h2 >Débugs déjà publiées</h2>
									<ul id="debugs">
									<?php
									if(empty($debugs)) echo "<p class='paragraphe'>Il n'y a pas de debugs actuellement pour cette offre</p>";	//Si pas de debugs
										foreach ($debugs as $dbg){						//Boucle qui affiche les consignes
												
											echo '
											<div id ="'.$dbg['name'].'">
												<li>
													<h3 id = "title">'.$dbg['name'].'</h3>
													<time datetime="2015-06-19" pubdate>'.$dbg['date_d'].'<span> '.$dbg['date_b'].'</span><span> '.$dbg['date_Y'].'</span></time> 		<!--L\'attribut booléen pubdate signifie que le "time" spécifié est bien celui de l\'article au cas ou il y aurait plusieurs <date> dedans-->
													<p id = "paragraphe">'.$dbg['text'].'</p>			
													<p><a href="edition.php?action=edition_page_dbg&update='.$dbg['id_debugs'].'&page=dbg"> Modifier la consigne</a></p>
													<p><a href="edition.php?action=edition_page_dbg&delete='.$dbg['id_debugs'].'&page=dbg">Supprimer</a></p>									
												</li>
											</div>
											';										//ECHO qui affiche les consignes
									}
									?>
									</ul>
									</fieldset>
								</div>	
								<?php
							}
							break;
				}
			}
			?>	
		</div>
	</div>




	<script >
		//Fonction javascript appelé lors de l'envoie d'une demande d'insertion
		//On applique une expression régulière sur le nom mis pour vérifier qu'il ne possède pas de caractères interdit
		function valider(form){
			
			var msg;
			var text;
			var regex = /^([a-zA-Z0-9_\-]*)+[a-zA-Z0-9_]{1,}$/;
			var msgOffre;
			var msgClient;
			var msgDebug;
			
			var retour = false;
			
			if(form.name =="formInsertOffre"){
				msg = document.getElementById("InsertOffreMsg");
				text = document.getElementById("Offre_new");
			
			}else if (form.name =="formInsertClient"){
				msg = document.getElementById("InsertClientMsg");
				text = document.getElementById("Client_new");
			
			}else if (form.name =="formInsertDebug"){
				msg = document.getElementById("InsertDebugMsg");
				text = document.getElementById("Debug_new");

			}

			if(regex.test(text.value)){
			
				retour = true;
			}else{
				msg.innerHTML = "Nom invalide, un nom ne peut contenir que les caractères suivants : [ a-z ] [ A-Z ] [ 0-9 ] [ _ ] [ - ]";

				msgOffre = document.getElementById("msg_offre");
				if(msgOffre != null){
					msgOffre.innerHTML = "";
				}
				
				msgClient = document.getElementById("msg_client");
				if(msgClient != null){
					msgClient.innerHTML = "";
				}
				
				msgDebug = document.getElementById("msg_debug");
				if(msgDebug != null){
					msgDebug.innerHTML = "";
				}
				
				retour = false;
			}

			return retour;
			
		}
	

	</script>
</body>
</html>