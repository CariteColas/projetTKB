<?php
/*24/06/2015
*Théophile MARCADÉ & Léopold QUILLIEN
*theophile.marcade@proservia-obs.fr
*leopold.quillien@proservia-obs.fr
*Stagiaire PROSERVIA 15/06/2015 - 31/08/2015
*formulaires.php
*/


/*formNavigation()
*-	Formulaire de navigation de la page index.php
*/
function formNavigation(){
?>
	<?php
	$bdd = connexionBDD();
	$requete = "SELECT * FROM Offre";
	$resultat = $bdd->query($requete);
	$tableau_assoc = $resultat->fetchAll(PDO::FETCH_ASSOC);

	$requeteClient = "SELECT * FROM `client` ORDER BY `client`.`nom_Client` ASC ";
	$resultatClient = $bdd->query($requeteClient);
	$tableau_assocClient = $resultatClient->fetchAll(PDO::FETCH_ASSOC);

	
	?>
	<form method="get" action="">
		<fieldset class ="fieldset_nav">
		<legend class="legend_nav">Navigation</legend>
		
		<a href="index.php"  class ="lien_bouton" >RAZ</a>

		<label>Offre : </label>
		<select name="offre" id="select">
			<?php
			if(isset($_GET["offre"]) && $_GET["offre"]=="Aucun"){?>
				<option value="Aucun" selected ='selected' >Aucun</option>
			<?php
			}else{?>
				<option value="Aucun" >Aucun</option>
			<?php
			}?>
			
			<?php
			foreach ($tableau_assoc as $tableau){
				if(isset($_GET["offre"]) && $_GET["offre"]==$tableau['nom_Offre']){
					echo "<option value=".$tableau['nom_Offre']." selected>".$tableau['nom_Offre']."</option>";
				}else{
					echo "<option value=".$tableau['nom_Offre'].">".$tableau['nom_Offre']."</option>";
				}
			}
		?>
		</select>

		<label>Client : </label>
		<select name="client">
			<?php
			if(isset($_GET["client"]) && $_GET["client"]=="Aucun"){?>
				<option value="Aucun" selected ='selected' >Aucun</option>
			<?php
			}else{?>
				<option value="Aucun" >Aucun</option>
			<?php
			}?>
			
			<?php
			if(isset($_GET["client"]) && $_GET["client"]=="Generique"){?>
				<option value="Generique" selected ='selected' >Générique</option>
			<?php
			}else{?>
				<option value="Generique" >Générique</option>
			<?php
			}?>
			
			<?php
			foreach ($tableau_assocClient as $tableauClient){
				if(isset($_GET["client"]) && $_GET["client"]==$tableauClient['nom_Client']){
					echo "<option value=".$tableauClient['nom_Client']." selected >".$tableauClient['nom_Client']."</option>";
				}else{
					echo "<option value=".$tableauClient['nom_Client'].">".$tableauClient['nom_Client']."</option>";
				}
			}?>
		</select>

		<input type="submit" value="Rechercher" />
	
		<a href="edition.php"  class ="lien_bouton" >Edition</a>
		</fieldset>
	</form>

<?php

}


/*formEdition()
*-	Formulaire de navigation de la page d'édition
*/
function formEdition(){
?>
		<fieldset class ="fieldset_nav">
			<legend class="legend_nav">Navigation</legend>
			<a href="index.php"  class ="lien_bouton">Retour à l'acceuil</a>
			<a href="?action=insertion_bdd" class ="lien_bouton" >Insertion</a>
			<a href="?action=suppression_bdd" class ="lien_bouton" >Suppression</a>
			<a href="?action=edition_page_dbg" class ="lien_bouton" >Édition des pages de débugs</a>
			<a href="?action=edition_page_csg" class ="lien_bouton" >Édition des pages de consignes</a>
			<a href="inscription.php" class ="lien_bouton" >Insertion d'un nouvel utilisateur</a>

			<a id="deconnexion" href="logout.php">Se déconnecter</a>

			
		</fieldset>



<?php
}


/*formSuppression()
*-	Formulaire de suppression d'un client ou d'une offre
*/
function formSuppression(){
?>
	<?php
	$bdd = connexionBDD();
	$requeteOffre = "SELECT * FROM Offre";
	$resultatOffre = $bdd->query($requeteOffre);
	$tableau_assocOffre = $resultatOffre->fetchAll(PDO::FETCH_ASSOC);

	$requeteClient = "SELECT * FROM `client` ORDER BY `client`.`nom_Client` ASC ";
	$resultatClient = $bdd->query($requeteClient);
	$tableau_assocClient = $resultatClient->fetchAll(PDO::FETCH_ASSOC);
	
	$requeteDebug = "SELECT 
					pages_debugs.name,
					offre.nom_Offre,
					pages_debugs.id_pages_debugs
					FROM pages_debugs 
					INNER JOIN offre ON pages_debugs.id_offre = offre.ID_Offre 
					ORDER BY `offre`.`nom_Offre` ASC
					";	//selection des informations du débug
								
	$resultatDebug = $bdd->query($requeteDebug);
	$tableau_assocDebug = $resultatDebug->fetchAll(PDO::FETCH_ASSOC);

	

	?>
	<form method="post" action="">
		<fieldset class ="fieldset_nav">
		<legend class="legend_nav">Suppression d'une offre</legend>
		<label>Offre : </label>
		<select name="supp_offre">
		<option value="Selectionner" selected ='selected' >Selectionner</option>
		<?php
		
		foreach ($tableau_assocOffre as $tableauOffre){
			echo "<option value=".$tableauOffre['nom_Offre'].">".$tableauOffre['nom_Offre']."</option>";

		}
		?>
		</select>
		<input type="submit" value="Supprimer" />

	</fieldset>

	</form>

	<form method="post" action="">
		<fieldset class ="fieldset_nav">
		<legend class="legend_nav">Suppression d'un client</legend>
		<label>Client : </label>
		<select name="supp_client">
		<option value="Selectionner" selected ='selected' >Selectionner</option>

			<?php
			foreach ($tableau_assocClient as $tableauClient){
					echo "<option value=".$tableauClient['nom_Client'].">".$tableauClient['nom_Client']."</option>";
			}
		?>
		</select>

		<input type="submit" value="Supprimer" />
	
		</fieldset>
	</form>
	
	
	<form method="post" action="">
		<fieldset class ="fieldset_nav">
		<legend class="legend_nav">Suppression d'un débug</legend>
		<label>débug : </label>
		<select name="supp_debug">
		<option value="Selectionner" selected ='selected' >Selectionner</option>

			<?php
			foreach ($tableau_assocDebug as $tableauDebug){

					echo "<option value=".$tableauDebug['id_pages_debugs'].">".$tableauDebug['nom_Offre']." ".$tableauDebug['name']."</option>";
			}
		?>
		</select>

		<input type="submit" value="Supprimer" />
	
		</fieldset>
	</form>


<?php
}

/*formInsertion()
*-	Formulaire d'insertion d'un client ou d'une offre ou un débug
*/
function formInsertion(){

	$bdd = connexionBDD();
	$selectAll_q = $bdd->prepare("SELECT * FROM `offre` ORDER BY `offre`.`nom_Offre` ASC ");
	$selectAll_q->execute();
	$tableau_assocOffre = $selectAll_q->fetchAll(PDO::FETCH_ASSOC);
?>
	<form method="post" name="formInsertOffre" action="" onsubmit="return valider(this)">
		<fieldset class ="fieldset_nav">
			<legend class="legend_nav">Insertion d'une offre</legend>
			<label>Nouvelle offre : </label>
			<input type="text" id="Offre_new" name ="nom_New_Offre" />
			<input type="submit" value="Inserer" />
		</fieldset>
	</form>
	<p id = "InsertOffreMsg"></p>

	<form method="post" name="formInsertClient" action="" onsubmit="return valider(this)">
		<fieldset class ="fieldset_nav">
			<legend class="legend_nav">Insertion d'un client</legend>
			<label>Nouveau client : </label>
			<input type="text" id="Client_new" name ="nom_New_Client" />
			<input type="submit" value="Inserer" />	
		</fieldset>
	</form>
	<p id = "InsertClientMsg"></p>
	
	<form method="post" name="formInsertDebug" action="" onsubmit="return valider(this)">
	<fieldset class ="fieldset_nav">
	<legend class="legend_nav">Insertion d'une page de débug</legend>
	<label>Offre : </label>
		<select name="offre">
			<?php
			foreach ($tableau_assocOffre as $tableauOffre){
				if(isset($_POST["offre"]) && $_POST["offre"]==$tableauOffre['ID_Offre']){
					echo "<option value=".$tableauOffre['ID_Offre']." selected >".$tableauOffre['nom_Offre']."</option>";
				}else{
					echo "<option value=".$tableauOffre['ID_Offre'].">".$tableauOffre['nom_Offre']."</option>";
				}
			}?>
		</select>
			<label>Nouveau débug : </label>
			<input type="text" id="Debug_new" name ="nom_New_Debug" />
			<input type="submit" value="Inserer" />	
		</fieldset>
	</form>
	<p id = "InsertDebugMsg"></p>

<?php
}


/*formClientSearch()
*-	Formulaire de recherche d'un client
*/
function formClientSearch(){
	
	$bdd = connexionBDD();
	$selectAll_q = $bdd->prepare("SELECT * FROM `client` ORDER BY `client`.`nom_Client` ASC ");
	$selectAll_q->execute();
	$tableau_assocClient = $selectAll_q->fetchAll(PDO::FETCH_ASSOC);
	?>
	<form method="post" action="">
	<fieldset class ="fieldset_nav">
	<label>Client : </label>
		<select name="client">
			<?php
			foreach ($tableau_assocClient as $tableauClient){
				if(isset($_SESSION["client"]) && $_SESSION["client"]==$tableauClient['ID_Client']){
					echo "<option value=".$tableauClient['ID_Client']." selected >".$tableauClient['nom_Client']."</option>";
				}else{
					echo "<option value=".$tableauClient['ID_Client'].">".$tableauClient['nom_Client']."</option>";
				}
			}?>
		</select>
		<input type="submit" value="Rechercher" />	
		</fieldset>
	</form>
<?php
}

/*formEditionConsignes()
*-	Formulaire d'edition des consignes d'un client
*/
function formEditionConsignes(){
	
	$bdd = connexionBDD();
	$selectAll_q = $bdd->prepare("SELECT id_pages_consignes FROM pages_consignes WHERE id_client =".$_SESSION['client']);					//Selection de la page associé au client
	$selectAll_q->execute();
	$id_pages_csg = $selectAll_q->fetchAll(PDO::FETCH_ASSOC);
	
	if(isset($_GET['update']) && !empty($_GET['update'])){				//Si le paramètre update est spécifié dans l'URL
	
		$id_csg = $_GET['update'];											//Protection SQL
		$selectUpdate_q = $bdd->prepare("SELECT id_consignes, title, text , valid FROM consignes WHERE id_consignes = :idCsg");				//Selection de la consignes à update dans la base de donnée
		$selectUpdate_q->execute(array(
		'idCsg' => $id_csg
		));
		
		while($resultUpdate = $selectUpdate_q->fetch(PDO::FETCH_ASSOC))
		{
			$update[] = $resultUpdate; 												//Remplissage du tableau avec ces valeurs
		}

	}
	
	if(isset($id_pages_csg) && !empty($id_pages_csg)){										//Si une page est associé au client demandé
		echo '<form method="post" action="edition.php?action=edition_page_csg&client='.$_SESSION['client'].'" >';		//formulaire d'ajout/modification de consigne
		?>
			<fieldset class ="fieldset_nav">
			<?php if(isset($update) && !empty($update))echo '<legend class="legend_nav">Modification de consigne</legend> ';else echo '<legend class="legend_nav">Ajout de nouvelle consigne</legend>'; ?>
			<br/>
			<label for="titre">Titre de la consigne</label><br/>
			<input id="titre" name="titre" type="text"  <?php if(isset($update) && !empty($update))echo 'value="'.$update[0]['title'].'"';?> required />	<!--Titre automatiquement rempli dans le cas d'une modification-->
			<br/>
			<label for="desc">Description</label><br/>
			<textarea id = "desc" name ="desc" rows = "8" cols = "158"   ><?php if(isset($update) && !empty($update))echo $update[0]['text'];?></textarea> <!--Zone de texte automatiquement rempli dans le cas d'une modification-->
			<br/>
			<?php
			
			if(isset($update) && !empty($update)){													//Dans le cas d'une modification
				echo "<input type='hidden' name='id_csg' value=".$update[0]['id_consignes']."></input>";		//On passe l'identifiant de la consigne à modifier
				echo "<input type='hidden' name='update' value='1'></input>";						//On met l'attribut update à 1
			}																						//SINON
			else echo "<input type='hidden' name='update' value='0'></input>";						//On met l'attribut update à 0
			
			
			echo "<input type='hidden' name='id_pages_csg' value=".$id_pages_csg[0]['id_pages_consignes']."></input>";		//On passe l'id de la page associé à ce client
			?>
			<input type="submit" <?php if(isset($update) && !empty($update))echo 'value="Modifier la consigne"';else echo 'value="Inserer la consigne" '; ?> />
			</fieldset>
		</form>
	<?php
	}
	else{
		echo '<p class="paragraphe"> Attention, le client que vous demandez n\'est pas associé à une page dans la base de donnée</p>';
	}
}

/*formClientSearch()
*-	Formulaire de recherche des offres
*/
function formOffreSearch(){
	
	$bdd = connexionBDD();
	$selectAll_q = $bdd->prepare("SELECT * FROM `offre` ORDER BY `offre`.`nom_Offre` ASC ");
	$selectAll_q->execute();
	$tableau_assocOffre = $selectAll_q->fetchAll(PDO::FETCH_ASSOC);

	?>
	<form method="post" action="">
	<fieldset class ="fieldset_nav">
	<label>Offre : </label>
		<select name="offre">
			<?php
			foreach ($tableau_assocOffre as $tableauOffre){
				if(isset($_SESSION["offre"]) && $_SESSION["offre"]==$tableauOffre['ID_Offre']){
					echo "<option value=".$tableauOffre['ID_Offre']." selected >".$tableauOffre['nom_Offre']."</option>";
				}else{
					echo "<option value=".$tableauOffre['ID_Offre'].">".$tableauOffre['nom_Offre']."</option>";
				}
			}?>
		</select>
		<input type="submit" value="Rechercher" />	
		</fieldset>
	</form>
<?php
}


/*formEditionDebugs()
*-	Formulaire d'edition des debugs d'une offre
*/
function formEditionDebugs(){
	
	$bdd = connexionBDD();
	$selectAll_q = $bdd->prepare("SELECT id_pages_debugs , name FROM pages_debugs WHERE id_offre =".$_SESSION['offre']);					//Selection de la page associé au offre
	$selectAll_q->execute();
	$id_pages_dbg = $selectAll_q->fetchAll(PDO::FETCH_ASSOC);


	if(isset($_GET['update']) && !empty($_GET['update'])){				//Si le paramètre update est spécifié dans l'URL
	
		$id_dbg = $_GET['update'];											//Protection SQL
		$selectUpdate_q = $bdd->prepare("SELECT id_pages_debugs, id_debugs, text , valid FROM debugs WHERE id_debugs = :idDbg");				//Selection de la debugs à update dans la base de donnée
		$selectUpdate_q->execute(array(
		'idDbg' => $id_dbg
		));
		
		while($resultUpdate = $selectUpdate_q->fetch(PDO::FETCH_ASSOC))
		{
			$update[] = $resultUpdate; 												//Remplissage du tableau avec ces valeurs
		}
	}
	
	if(isset($id_pages_dbg) && !empty($id_pages_dbg)){										//Si une page est associé a l'offre demandé
		echo '<form method="post" action="edition.php?action=edition_page_dbg&client='.$_SESSION['offre'].'">';		//formulaire d'ajout/modification de debugs
		?>
			<fieldset class ="fieldset_nav">
			<?php if(isset($update) && !empty($update))echo '<legend class="legend_nav">Modification du débug</legend> ';else echo '<legend class="legend_nav">Ajout du débug</legend>'; ?>
			<br/>
			<label>Débug : </label>
			<select name="id_pages_debugs">
				<?php
				if(isset($update) && !empty($update)){													//Dans le cas d'une modification
					foreach ($id_pages_dbg as $idPageDbg){
						if(isset($update[0]["id_pages_debugs"]) && $update[0]["id_pages_debugs"]==$idPageDbg['id_pages_debugs']){
							echo "<option value=".$idPageDbg['id_pages_debugs']." selected >".$idPageDbg['name']."</option>";
						}else{
							echo "<option value=".$idPageDbg['id_pages_debugs'].">".$idPageDbg['name']."</option>";
						}
					}
				}
				else {
					foreach ($id_pages_dbg as $idPageDbg){
						if(isset($_POST["id_pages_debugs"]) && $_POST["id_pages_debugs"]==$idPageDbg['id_pages_debugs']){
							echo "<option value=".$idPageDbg['id_pages_debugs']." selected >".$idPageDbg['name']."</option>";
						}else{
							echo "<option value=".$idPageDbg['id_pages_debugs'].">".$idPageDbg['name']."</option>";
						}
					}
				}?>
			</select>
			<br/>
			<label for="desc">Description :</label><br/>
			<textarea id = "desc" name ="desc" rows = "8" cols = "158"   ><?php if(isset($update) && !empty($update))echo $update[0]['text'];?></textarea> <!--Zone de texte automatiquement rempli dans le cas d'une modification-->
			<br/>
			<?php
			
			if(isset($update) && !empty($update)){													//Dans le cas d'une modification
				echo "<input type='hidden' name='id_dbg' value=".$update[0]['id_debugs']."></input>";		//On passe l'identifiant de la consigne à modifier
				echo "<input type='hidden' name='update' value='1'></input>";						//On met l'attribut update à 1
			}																						//SINON
			else echo "<input type='hidden' name='update' value='0'></input>";						//On met l'attribut update à 0
			
			?>
			<input type="submit" <?php if(isset($update) && !empty($update))echo 'value="Modifier le débug"';else echo 'value="Inserer le débug" '; ?> />
			</fieldset>
		</form>
	<?php
	}
	else{
		echo '<p class="paragraphe"> Attention, l\'offre que vous demandez n\'est pas associé à une page dans la base de donnée</p>';
	}
}

/*formInsertionImage()
*-	Formulaire d'edition d'image
*/
function formInsertionImage($env){

	if($env=="edition_page_dbg"){
		echo '<form method="post" action="edition.php?action=edition_page_dbg&client='.$_SESSION['offre'].'" enctype="multipart/form-data">';		//formulaire d'ajout d'image pour les débugs
	}else if ($env=="edition_page_csg"){
		echo '<form method="post" action="edition.php?action=edition_page_csg&client='.$_SESSION['client'].'" enctype="multipart/form-data">';		//formulaire d'ajout d'image pour les consignes
	}
	?>
		<fieldset class ="fieldset_nav">
		<input type="hidden" name ="MAX_FILE_SIZE" value = "100000"/>
		<label for="image">Image :</label>
		<input type="file" name="image"/>
		<?php
		if($env=="edition_page_dbg"){
			echo '<input type="hidden" name ="env" value = "dbg"/>';		//formulaire d'ajout d'image pour les débugs
		}else if ($env=="edition_page_csg"){
			echo '<input type="hidden" name ="env" value = "csg"/>';		//formulaire d'ajout d'image pour les consignes
		}
		
		?>
		<input type="submit" value="Inserer une image"/>
		</fieldset>
	</form>

<?php
}
?>
			
			