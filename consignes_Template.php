<?php
/*24/06/2015
*Théophile MARCADÉ & Léopold QUILLIEN
*theophile.marcade@proservia-obs.fr
*leopold.quillien@proservia-obs.fr
*Stagiaire PROSERVIA 15/06/2015 - 31/08/2015
*consignes_NOM_CLIENT.php
*/


	try{
		$serveur ='localhost';
		$nom_base = 'cidhd';
		$login = 'root';
		$pwd ='root';
		//Connexion
		$bdd = new PDO('mysql:host=localhost;dbname='.$nom_base.';charset=utf8',$login,$pwd);
		
	}catch (Exeption $e){
		die('Erreur : '.e.getMessage());
	}
	
	//Récupération de l'ID de la page et du client
	$path = $_SERVER['PHP_SELF'];
	$selectID_q = $bdd->prepare("SELECT id_pages_consignes, id_client FROM pages_consignes WHERE path = :path ");
	$selectID_q->execute(array(
		'path' => $path
	));
	$resultID = $selectID_q->fetch(PDO::FETCH_ASSOC);
	$id_pages_csg = $resultID['id_pages_consignes'];
	$id_client = $resultID['id_client'];
	
	//Récupération des informations du client
	$selectClient_q = $bdd->prepare("SELECT nom_Client FROM client WHERE ID_Client = :idclient ");
	$selectClient_q->execute(array(
		'idclient' => $id_client
	));
	$resultClient = $selectClient_q->fetch(PDO::FETCH_ASSOC);
	$client = $resultClient['nom_Client'];
	
	
	//Récupération des consignes dans la base de données
	$consignes = array();
	$selectAll_q = $bdd->prepare("SELECT 
								id_consignes,
								title,
								text,
								DATE_FORMAT(date, '%b') AS date_b,
								DATE_FORMAT(date, '%d') AS date_d,
								DATE_FORMAT(date, '%Y') AS date_Y,
								DATE_FORMAT(date, '%T') AS date_T,
								valid FROM consignes 
								WHERE valid = '1' AND id_pages_consignes = :idPagesCsg 
								ORDER BY id_consignes");
								
	$selectAll_q->execute(array(
		'idPagesCsg' => $id_pages_csg
	));

	while($result = $selectAll_q->fetch(PDO::FETCH_ASSOC))
	{
		$consignes[] = $result; 												//Remplissage du tableau avec ces valeurs
	}
	

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="Style/style.css" />
        <title><?php echo $client; ?></title>
    </head>
    <body>
	<div id="container">
	
		<h1 class = "title">Consignes <?php echo $client; ?></h1>

		<fieldset class= "fieldset">

		<div id = "nav">

			<h3 id = "title_sommaire">Sommaire</h3>
			<ol id="sommaire">
			<?php
			foreach ($consignes as $csg){						//Boucle qui affiche les titres

				echo '
				<li>
					<a href="#'.$csg['title'].'">'.$csg['title'].'</a>	
				</li>';				
			}
			?>
			</ol>
		</div>
		
		<div id = "article">
			<ul id="consignes">
			<?php
			foreach ($consignes as $csg){						//Boucle qui affiche les news
				
				echo '
				<div id ="'.$csg['title'].'">
					<li>
						<h2 class="title_news" >'.$csg['title'].'</h2>
						<p class="paragraphe"><em>Dernière modif le : <time datetime="2015-06-19" pubdate>'.$csg['date_d'].'<span> '.$csg['date_b'].'</span><span> '.$csg['date_Y'].'</span><span> '.$csg['date_T'].'</span></time></em></p> 		<!--L\'attribut booléen pubdate signifie que le "time" spécifié est bien celui de l\'article au cas ou il y aurait plusieurs <date> dedans-->
						<p id = "paragraphe">'.$csg['text'].'</p>					
					</li>
				</div>
				';										//ECHO qui affiche la new
			}
			?>
			</ul>
		</div>
		</fieldset>
    </div>
	</body>
</html>