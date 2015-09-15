<?php
/*24/06/2015
*Théophile MARCADÉ & Léopold QUILLIEN
*theophile.marcade@proservia-obs.fr
*leopold.quillien@proservia-obs.fr
*Stagiaire PROSERVIA 15/06/2015 - 31/08/2015
*fonctions.php
*/

/*function mapping()
*-	fonction qui permet le mapping des logigrammes contenus dans le dossier C:\xampp\htdocs\CIDRE\Images
*-	l'utilisation de cette fonction est décrit dans la documentation.
*-	Cette fonction ne prend aucun argument
*-	Cette fonction ne renvoie rien
*/
function mapping(){
?>
	<!--**********************************************MAPPING IP/ADSL************************************************-->
	<map name="IPADSL" id="IPADSL" >
		<area shape="poly" id="Index_Adsl" coords="227,8,281,8,281,34,227,34" onclick="clickzone(this)"   alt="Index" />

	
		<area shape="poly" id="ping_ADSL" coords="40,0,67,25,39,50,12,25" onclick="clickzone(this)"   alt="Ping" />
		
		<area shape="poly" id="synchro_ADSL" coords="110,86,138,111,110,135,83,111" onclick="clickzone(this)"  alt="Synchro" />
		<area shape="poly" id="session_BAS" coords="110,158,137,182,110,206,83,181" onclick="clickzone(this)"  alt="Session_BAS" />
		<area shape="poly" id="usurpation_IP_Admin" coords="74,339,146,339,146,367,74,367" onclick="clickzone(this)"  alt="Usurpation_IP_Admin" />
		
		<area shape="poly" id="SACRE" coords="205,200,233,224,205,248,178,224" onclick="clickzone(this)"  alt="SACRE" />
		<area shape="poly" id="conf_routeur" coords="167,274,243,274,243,305,167,305" onclick="clickzone(this)"  alt="Conf_Routeur" />
		<area shape="poly" id="ping_ADSL_2" coords="205,332,233,356,205,380,178,356" onclick="clickzone(this)"  alt="Ping" />
		<area shape="poly" id="support_ADSL" coords="242,400,317,400,317,432,242,432" onclick="clickzone(this)"  alt="Support" />
		
		<area shape="poly" id="bas_GE" coords="326,256,401,256,401,283,326,283" onclick="clickzone(this)"  alt="Bas_GE" />
		<area shape="poly" id="user_ID" coords="326,292,401,292,401,318,326,318" onclick="clickzone(this)"  alt="User_ID" />
		<area shape="poly" id="mot_de_passe" coords="326,327,401,327,401,352,326,352" onclick="clickzone(this)"  alt="Mot_De_Passe" />
		<area shape="poly" id="IP_accroche" coords="326,361,401,361,401,387,326,387" onclick="clickzone(this)"  alt="IP_Accroche" />
		<area shape="poly" id="num_de_liaison" coords="326,395,401,395,401,420,326,420" onclick="clickzone(this)"  alt="Num_De_Liaison" />
		<area shape="poly" id="ping_ADSL_3" coords="365,448,392,472,365,496,338,472" onclick="clickzone(this)"  alt="Ping" />
		
		<area shape="poly" id="MODEM" coords="478,182,507,206,477,230,449,207" onclick="clickzone(this)"  alt="MODEM" />
		<area shape="poly" id="ligne_HS" coords="510,251,585,250,585,282,510,282" onclick="clickzone(this)"  alt="Ligne_HS" />
		<area shape="poly" id="routeur_HS_ADSL" coords="478,295,515,325,478,354,442,325" onclick="clickzone(this)"  alt="Routeur_HS" />
		<area shape="poly" id="support_ADSL_2" coords="517,353,578,353,578,375,517,374" onclick="clickzone(this)"  alt="Support" />
		<area shape="poly" id="ping_ADSL_4" coords="478,371,505,395,478,419,450,395" onclick="clickzone(this)"  alt="Ping" />
		<area shape="poly" id="service_DHD" coords="0,672,77,672,77,697,0,697" onclick="clickzone(this)"  alt="Service_DHD" />

	
	</map>
	
		<!--**********************************************MAPPING SDSL************************************************-->
		<map name="SDSL" id="SDSL" >
		<area shape="poly" id="Index_SDSL" coords="284,8,351,8,351,34,284,33" onclick="clickzone(this)"   alt="Index" />
	
		<area shape="poly" id="ping_SDSL" coords="49,1,83,25,49,49,14,25" onclick="clickzone(this)"   alt="Ping" />

		<area shape="poly" id="synchro_SDSL" coords="138,86,172,111,138,135,104,111" onclick="clickzone(this)"  alt="Synchro" />
		<area shape="poly" id="verif_OAT" coords="137,158,172,182,137,207,104,182" onclick="clickzone(this)"  alt="Verif_OAT" />
		<area shape="poly" id="PE" coords="92,239,181,239,181,267,92,267" onclick="clickzone(this)"  alt="PE" />
		<area shape="poly" id="nortel" coords="137,346,172,370,137,395,102,370" onclick="clickzone(this)"  alt="Nortel" />
		
		<area shape="poly" id="appel_OAT" coords="238,203,332,203,332,234,238,234" onclick="clickzone(this)"  alt="Appel_OAT" />
		<area shape="poly" id="ping_SDSL_2" coords="286,256,319,281,286,306,251,281" onclick="clickzone(this)"  alt="Ping" />
		
		<area shape="poly" id="MODEM" coords="459,132,493,156,459,179,423,156" onclick="clickzone(this)"  alt="MODEM" />
		<area shape="poly" id="Ligne_HS_SDSL" coords="504,244,598,244,598,274,504,274" onclick="clickzone(this)"  alt="Ligne_HS" />
		
		<area shape="poly" id="prog_nortel" coords="175,403,264,405,263,433,175,433" onclick="clickzone(this)"  alt="Prog_Nortel" />
		<area shape="poly" id="ping_SDSL_3" coords="219,485,253,508,219,533,184,508" onclick="clickzone(this)"  alt="Ping" />
		
		<area shape="poly" id="conf_routeur" coords="263,525,357,525,357,550,263,550" onclick="clickzone(this)"  alt="Conf_Routeur" />
		<area shape="poly" id="ping_SDSL_4" coords="311,578,345,603,311,628,276,603" onclick="clickzone(this)"  alt="Ping" />
		<area shape="poly" id="support_SDSL" coords="342,635,436,634,436,665,342,665" onclick="clickzone(this)"  alt="Support" />
		<area shape="poly" id="support_SDSL_2" coords="88,455,182,453,185,486,88,486" onclick="clickzone(this)"  alt="Support" />
		
		<area shape="poly" id="service_DHD" coords="1,673,96,673,96,696,1,696" onclick="clickzone(this)"  alt="Service_DHD" />

	</map>

	<!--**********************************************MAPPING C2E************************************************-->
	<map name="C2E" id="C2E" >
		<area shape="poly" id="Index_C2E" coords="303,10,375,10,375,44,304,44" onclick="clickzone(this)"  alt="Index" />
	
		<area shape="poly" id="ping_C2E" coords="52,2,91,34,53,67,16,34" onclick="clickzone(this)"   alt="Ping" />
		<area shape="poly" id="verif_PE" coords="147,213,183,244,147,277,109,244" onclick="clickzone(this)"  alt="Verif_PE" />
		<area shape="poly" id="NE-NM" coords="147,303,184,334,147,367,111,334" onclick="clickzone(this)"  alt="NE-NM" />
		<area shape="poly" id="synchro" coords="147,81,186,111,147,142,107,111" onclick="clickzone(this)"  alt="Synchro" />
		<area shape="poly" id="verif_CE" coords="100,449,195,451,193,487,99,487" onclick="clickzone(this)"  alt="Verif_CE" />
		
		<area shape="poly" id="ping_C2E_2" coords="147,519,184,551,147,583,109,551" onclick="clickzone(this)"  alt="Ping" />
		<area shape="poly" id="support_C2E" coords="194,588,295,589,296,631,196,630" onclick="clickzone(this)"  alt="Support" />
		<area shape="poly" id="service_DHD" coords="1,663,103,663,103,697,1,697" onclick="clickzone(this)"  alt="Service_DHD" />
		<area shape="poly" id="conf_PE" coords=",263,272,365,272,366,316,265,316" onclick="clickzone(this)"  alt="Conf_PE" />
		<area shape="poly" id="ping_C2E_3" coords="316,346,352,375,315,411,278,377" onclick="clickzone(this)"  alt="Ping" />
		<area shape="poly" id="TSC-GRR" coords="172,377,274,375,272,418,173,419" onclick="clickzone(this)"  alt="TSC-GRR" />
		
		<area shape="poly" id="branchement_LA210" coords="450,174,510,223,449,275,390,225" onclick="clickzone(this)"  alt="Branchement_LA210" />
		<area shape="poly" id="routeur_HS" coords="399,339,498,339,499,380,399,380" onclick="clickzone(this)"  alt="Routeur_HS" />
		<area shape="poly" id="ligne_HS" coords="495,277,596,277,597,320,495,320" onclick="clickzone(this)"  alt="Ligne_HS" />
		
		
	</map>

	<!--**********************************************MAPPING CN2************************************************-->
	<map name="CN2" id="CN2" >
		<area shape="poly" id="Index_CN2" coords="302,8,374,8,375,34,302,34" onclick="clickzone(this)"  alt="Index" />
		
		<area shape="poly" id="ping_CN2" coords="52,1,89,25,52,50,16,25" onclick="clickzone(this)"   alt="Ping" />
		
		<area shape="poly" id="synchro_CN2" coords="146,87,185,111,146,135,110,111" onclick="clickzone(this)"  alt="Synchro" />
		<area shape="poly" id="verif_OAT_CN2" coords="146,158,182,182,146,207,110,182" onclick="clickzone(this)"  alt="Verif_OAT" />
		<area shape="poly" id="PE_CN2" coords="99,239,193,239,193,267,99,267" onclick="clickzone(this)"  alt="PE" />
		<area shape="poly" id="nortel_CN2" coords="146,347,183,371,146,395,109,371" onclick="clickzone(this)"  alt="Nortel" />
		<area shape="poly" id="support_CN2" coords="96,448,196,449,195,479,96,480" onclick="clickzone(this)"  alt="Support" />
		
		<area shape="poly" id="appel_OAT_CN2" coords="254,203,353,202,353,234,254,234" onclick="clickzone(this)"  alt="Appel_OAT" />
		<area shape="poly" id="ping_CN2_2" coords="304,257,341,281,304,306,267,281" onclick="clickzone(this)"  alt="Ping" />
		
		<area shape="poly" id="branchement_LA110_CN2" coords="448,128,506,166,447,204,386,167" onclick="clickzone(this)"  alt="Branchement_LA110" />
		<area shape="poly" id="MODEM_CN2" coords="448,227,484,252,447,277,411,252" onclick="clickzone(this)"  alt="MODEM" />
		<area shape="poly" id="LA110_HS_CN2" coords="396,328,497,328,497,359,396,360" onclick="clickzone(this)"  alt="LA110_HS" />
		
		<area shape="poly" id="cablage_CN2" coords="496,196,596,196,596,227,496,228" onclick="clickzone(this)"  alt="Cablage" />
		<area shape="poly" id="ligne_HS_CN2" coords="498,282,598,281,598,313,498,313" onclick="clickzone(this)"  alt="Ligne_HS" />
		
		<area shape="poly" id="prog_nortel_CN2" coords="233,393,282,422,233,453,186,422" onclick="clickzone(this)"  alt="Prog_Nortel" />
		<area shape="poly" id="ping_CN2_3" coords="233,484,269,509,233,533,196,509" onclick="clickzone(this)"  alt="Ping" />
		
		<area shape="poly" id="conf_routeur_CN2" coords="280,525,380,525,380,551,280,551" onclick="clickzone(this)"  alt="Conf_Routeur" />
		<area shape="poly" id="ping_CN2_4" coords="331,579,367,603,331,627,294,603" onclick="clickzone(this)"  alt="Ping" />
	
		<area shape="poly" id="support_CN2_2" coords="364,635,464,635,464,665,364,665" onclick="clickzone(this)"  alt="Support" />

		<area shape="poly" id="service_DHD_CN2" coords="0,672,103,672,103,697,0,697" onclick="clickzone(this)"  alt="Service_DHD" />

	</map>
	

	<!--**********************************************MAPPING INTERLAN************************************************-->
	<map name="INTERLAN" id="INTERLAN" >
	
		<area shape="poly" id="index_INTERLAN" coords="303,1,410,1,410,39,303,39" onclick="clickzone(this)"   alt="Index" />
		
		<area shape="poly" id="ping_INTERLAN" coords="53,1,93,32,54,65,11,33" onclick="clickzone(this)"  alt="Ping" />
		<area shape="poly" id="PE_FAV" coords="244,60,285,93,244,124,203,92" onclick="clickzone(this)"  alt="PE_FAV" />
		<area shape="poly" id="fibre_direct" coords="84,161,192,161,193,196,85,196" onclick="clickzone(this)"  alt="Fibre_Direct" />
		
		<area shape="poly" id="OS_904" coords="291,162,398,162,398,196,290,197" onclick="clickzone(this)"  alt="OS_904" />
		<area shape="poly" id="conf_routeur" coords="85,230,193,229,193,266,85,265" onclick="clickzone(this)"  alt="Conf_Routeur" />
		<area shape="poly" id="cablage" coords="291,230,397,230,397,266,290,266" onclick="clickzone(this)"  alt="Cablage" />
		<area shape="poly" id="ping_INTRELAN_2" coords="139,294,181,326,139,358,96,326" onclick="clickzone(this)"  alt="Ping" />
		
		<area shape="poly" id="conf_routeur_2" coords="289,294,396,295,396,331,289,331" onclick="clickzone(this)"  alt="Conf_Routeur" />
		<area shape="poly" id="probleme_phys" coords="156,390,263,390,263,425,156,425" onclick="clickzone(this)"  alt="Probleme_Phys" />
		<area shape="poly" id="ping_INTERLAN_3" coords="343,428,385,459,343,492,302,459" onclick="clickzone(this)"  alt="Ping" />
		<area shape="poly" id="probleme_phys_2" coords="390,519,496,518,496,555,388,555" onclick="clickzone(this)"  alt="Probleme_Phys" />
		
		<area shape="poly" id="conf_OS_904" coords="288,360,398,361,398,396,289,396" onclick="clickzone(this)"  alt="Conf_OS_904" />
		<area shape="poly" id="conf_PE_FAV" coords="481,336,588,337,588,373,481,373" onclick="clickzone(this)"  alt="Conf_PE_FAV" />
		<area shape="poly" id="ping_INTERLAN_4" coords="536,560,578,591,536,622,494,591" onclick="clickzone(this)"  alt="Ping" />
		<area shape="poly" id="service_DHD" coords="1,659,107,660,107,696,1,696" onclick="clickzone(this)"  alt="Service_DHD" />
	</map>
	
	<!--**********************************************MAPPING CE2O************************************************-->
	<map name="CE2O" id="CE2O" >

		<area shape="poly" id="Index_CE2O" coords="259,1,322,1,322,26,259,26" onclick="clickzone(this)"  alt="Index" />
	
		<area shape="poly" id="ping_CE2O_1" coords="46,31,78,55,46,80,14,55" onclick="clickzone(this)"   alt="Ping" />
		
		<area shape="poly" id="synchro_CE2O_1" coords="127,74,159,97,127,123,95,98" onclick="clickzone(this)"  alt="Synchro" />
		<area shape="poly" id="PE_FAV_CE2O" coords="127,167,160,192,127,218,96,192" onclick="clickzone(this)"  alt="PE_FAV" />
		<area shape="poly" id="OAT_CE2O" coords="127,256,160,280,128,304,95,280" onclick="clickzone(this)"  alt="OAT" />
		<area shape="poly" id="verif_routeur_cablage_CE2O" coords="83,342,172,343,172,374,83,374" onclick="clickzone(this)"  alt="Verif_Routeur_Cablage" />
		<area shape="poly" id="ping_CE2O_2" coords="127,429,160,453,127,478,95,453" onclick="clickzone(this)"  alt="Ping" />
		
		<area shape="poly" id="support_CE2O" coords="139,499,229,499,228,525,139,519" onclick="clickzone(this)"  alt="Support" />
		
		<area shape="poly" id="appel_OAT_CE2O" coords="206,309,293,309,293,341,206,340" onclick="clickzone(this)"  alt="Appel_OAT" />
		<area shape="poly" id="ping_CE2O_3" coords="250,364,282,388,250,412,218,388" onclick="clickzone(this)"  alt="Ping" />
		
		<area shape="poly" id="prog_PE_CE2O" coords="335,212,422,211,423,243,335,242" onclick="clickzone(this)"  alt="Prog_PE" />
		<area shape="poly" id="ping_CE2O_4" coords="379,274,411,298,379,324,346,299" onclick="clickzone(this)"  alt="Ping" />
		
		<area shape="poly" id="RAD_CE2O" coords="480,247,512,271,480,296,448,271" onclick="clickzone(this)"  alt="RAD" />
		<area shape="poly" id="verif_CE_CE2O" coords="447,337,511,337,511,361,447,361" onclick="clickzone(this)"  alt="Verif_CE" />
		<area shape="poly" id="synchro_CE2O_2" coords="481,384,512,408,481,434,449,408" onclick="clickzone(this)"  alt="Synchro" />
		<area shape="poly" id="routeur_HS_CE2O" coords="447,463,517,463,517,485,447,485" onclick="clickzone(this)"  alt="Routeur_HS" />
		
		<area shape="poly" id="ligne_HS_CE2O" coords="511,307,584,307,584,329,511,328" onclick="clickzone(this)"  alt="Ligne_HS" />

		<area shape="poly" id="Service_DHD_CE2O" coords="0,674,89,674,90,698,0,698" onclick="clickzone(this)"  alt="Service_DHD" />

	</map>
	
	<!--**********************************************MAPPING LL2048K************************************************-->
	<map name="LL2048K" id="LL2048K" >

		<area shape="poly" id="Index_LL2048K" coords="244,48,315,48,315,73,244,73" onclick="clickzone(this)"  alt="Index" />
		
		<area shape="poly" id="ping_LL2048K_1" coords="51,1,87,25,51,51,15,26" onclick="clickzone(this)"   alt="Ping" />
		
		<area shape="poly" id="cablage_routeur_LL2048K" coords="143,87,180,111,144,136,107,111" onclick="clickzone(this)"  alt="Cablage_Routeur" />
		<area shape="poly" id="cablage_NTU_LL2048K" coords="143,158,180,183,144,207,106,183" onclick="clickzone(this)"  alt="Cablage_NTU" />
		<area shape="poly" id="prod_FAV_PE_LL2048K" coords="143,228,179,253,143,277,108,253" onclick="clickzone(this)"  alt="Prod_FAV_PE" />
		<area shape="poly" id="etat_interface_FAV_LL2048K" coords="143,300,187,331,143,362,101,331" onclick="clickzone(this)"  alt="Etat_Interface_FAV" />
		<area shape="poly" id="conf_routeur_LL2048K" coords="143,386,180,410,143,435,107,410" onclick="clickzone(this)"  alt="Conf_Routeur" />
		<area shape="poly" id="ping_LL2048K_2" coords="143,522,179,546,144,572,108,546" onclick="clickzone(this)"  alt="Ping" />
		
		<area shape="poly" id="intervention_tech_LL2048K" coords="213,199,310,199,311,230,213,230" onclick="clickzone(this)"  alt="Intervention_Tech" />
		<area shape="poly" id="raccord_FAV_LL2048K" coords="198,357,295,357,295,383,198,383" onclick="clickzone(this)"  alt="Raccord_FAV" />
		<area shape="poly" id="module_SFP_LL2048K" coords="256,432,292,457,256,481,219,457" onclick="clickzone(this)"  alt="Module_SFP" />
		<area shape="poly" id="fibre_HS_LL2048K" coords="207,498,305,498,305,528,207,528" onclick="clickzone(this)"  alt="Fibre_HS" />
		<area shape="poly" id="support_LL2048K_1" coords="179,556,277,555,277,586,179,587" onclick="clickzone(this)"  alt="Support" />
		
		<area shape="poly" id="ping_LL2048K_3" coords="330,524,367,548,330,572,295,549" onclick="clickzone(this)"  alt="Ping" />
		<area shape="poly" id="support_LL2048K_2" coords="359,557,457,556,457,587,359,587" onclick="clickzone(this)"  alt="Support" />
		
		<area shape="poly" id="prog_FAV_PE_LL2048K" coords="411,296,509,296,508,322,411,322" onclick="clickzone(this)"  alt="Prog_FAV_PE" />
		<area shape="poly" id="ping_LL2048K_4" coords="461,348,497,372,467,397,425,372" onclick="clickzone(this)"  alt="Ping" />
		<area shape="poly" id="support_LL2048K_3" coords="499,402,597,402,597,432,499,433" onclick="clickzone(this)"  alt="Support" />
		
		<area shape="poly" id="service_DHD_LL2048K" coords="0,673,101,673,101,697,0,697" onclick="clickzone(this)"  alt="Service_DHD" />
		</map>


<?php
}?>

<?php

/*function connexionBDD()
*-	fonction de connexion à la BDD
*-	Cette fonction ne prend aucun argument
*-	Cette fonction renvoie l'objet de la connexion à la bdd 
*/
function connexionBDD(){
	try{
		$serveur ='localhost';
		$nom_base = 'cidhd';
		$login = 'root';
		$pwd ='root';
		//Connexion
		$bdd = new PDO('mysql:host=localhost;dbname='.$nom_base.';charset=utf8',$login,$pwd);

		return $bdd;
		
	}catch (Exeption $e){
		die('Erreur : '.e.getMessage());
	}
}?>


<?php
/*afficheListeClient()
*-	Fonction d'affichage de la liste des clients
*-	Affiche la liste des clients récuperés depuis la BDD sous la forme d'un tableau, 
*-	Pour des raisons d'affichage un nouveau tableau est crée tout les 20cases.
*-	Cette fonction ne prend aucun argument
*-	Cette fonction ne renvoie rien
*/
function afficheListeClient(){
	try{
		$bdd = connexionBDD();
		$requete = "SELECT * FROM `client` ORDER BY `client`.`nom_Client` ASC ";
		$resultat = $bdd->query($requete);
		$tableau_assoc = $resultat->fetchAll(PDO::FETCH_ASSOC);
		$numero = 1;
		$x = 1;
		?>
		<table class="mytable" cellspacing="0" > 

			<tr>
			<th>n°</th>
			<th>Client</th>
			</tr>
			<?php
			foreach($tableau_assoc as $tableau){

				if($numero %2 == 0){
					
					echo "<tr>";
						
					echo "<td class = 'alt'>".$numero."</td>";
					echo "<td class = 'alt'>".$tableau['nom_Client']."</td>";

					echo "</tr>";

				}
				else{
					echo "<tr>";
					echo "<td>".$numero."</td>";
					echo "<td>".$tableau['nom_Client']."</td>";
					echo "</tr>";
				}

				if ($numero == ($x*20)){
					$x = $x +1;
					?>
					</table>
					<table class="mytable" cellspacing="0"> 
					<tr>
					<th>n°</th>
					<th>Client</th>
					</tr>
				
				<?php
				}
				$numero = $numero + 1;
			}
?>
		</table>
		<?php

	}catch (Exeption $e){
		die('Erreur : '.e.getMessage());
	}
}

/*afficheListeOffre()
*-	Fonction d'affichage de la liste des offres
*-	Affiche la liste des offres récuperées depuis la BDD sous la forme d'un tableau, 
*-	Pour des raisons d'affichage un nouveau tableau est crée tout les 20cases.
*-	Cette fonction ne prend aucun argument
*-	Cette fonction ne renvoie rien
*/
function afficheListeOffre(){
	try{
		$bdd = connexionBDD();
		$requete = "SELECT * FROM `offre` ORDER BY `offre`.`nom_Offre` ASC ";
		$resultat = $bdd->query($requete);
		$tableau_assoc = $resultat->fetchAll(PDO::FETCH_ASSOC);
		$numero = 1;
		$x = 1;
		?>
		<table class="mytable" cellspacing="0" > 

			<tr>
			<th>n°</th>
			<th>Offre</th>
			</tr>
			<?php
			foreach($tableau_assoc as $tableau){

				if($numero %2 == 0){
					
					echo "<tr>";
						
					echo "<td class = 'alt'>".$numero."</td>";
					echo "<td class = 'alt'>".$tableau['nom_Offre']."</td>";

					echo "</tr>";

				}
				else{
					echo "<tr>";
					echo "<td>".$numero."</td>";
					echo "<td>".$tableau['nom_Offre']."</td>";
					echo "</tr>";
				}

				if ($numero == ($x*20)){
					$x = $x +1;
					?>
					</table>
					<table class="mytable" cellspacing="0"> 
					<tr>
					<th>n°</th>
					<th>Offre</th>
					</tr>
				
				<?php
				}
				$numero = $numero + 1;
			}
?>
		</table>
		<?php

	}catch (Exeption $e){
		die('Erreur : '.e.getMessage());
	}
}

/*insertionClient($nomNewClient)
*-	Fonction d'insertion de client dans la base de donnée
*-	Insère les clients dans la base de données et créée les répertoires associés,
*-	Cela implique également la copie (et renommage) des fichiers de template dans les nouveaux dossiers crées 
*-	Cette fonction prend le nom du client à inserer en paramètre
*-	Cette fonction renvoie true si elle c'est bien effectuée et false si il y a eu une erreur.
*/
function insertionClient($nomNewClient){
	try{
		$retour = true;
		//Chemin du dossier contenant les clients
		$path ="C:\\xampp\\htdocs\\CIDRE\\Client\\";
		$bdd = connexionBDD();
		
		$requeteSELECT = "SELECT * FROM `client` WHERE nom_Client='".$nomNewClient."'";
		$resultat = $bdd->query($requeteSELECT);
		$tableau_assoc = $resultat->fetchAll(PDO::FETCH_ASSOC);

		if(empty($tableau_assoc)){
			$requete = "INSERT INTO client (nom_Client) VALUES (".$bdd->quote($nomNewClient).");";
			
			if(!$bdd->exec($requete)){
				$retour = false;
			}
			
			
			$path_web_consigne = "/CIDRE/Client/".$nomNewClient."/consignes_".$nomNewClient.".php"  ;
			
			//Insertion de la page dans la base de données
			$select_idclient = $bdd->prepare("SELECT ID_Client FROM `client` WHERE nom_Client= :nomClient ");	//select de l'id client
			$select_idclient->execute(array(
				'nomClient' => $nomNewClient
			));

			$tableau_idClient = $select_idclient->fetchAll(PDO::FETCH_ASSOC);
			$idclient = $tableau_idClient[0]['ID_Client'];

			
			$insert_q = $bdd->prepare("INSERT INTO pages_consignes VALUES ('', :path, :idclient,'1')");	//Insertion d'une nouvelle page
			$insert_q->execute(array(
				'path' => $path_web_consigne,
				'idclient' => $idclient,
			));
			

			if(!mmkDir($path,$nomNewClient))
			{
				$retour = false;
			}
		}else{
			$retour = false;
			echo "Insertion impossible le client existe déjà dans la base de donnée <br/>";
		}
	
	}catch (Exeption $e){
		die('Erreur : '.e.getMessage());
	}

	return $retour;
}

/*suppressionClient($nomClient)
*-	Fonction de suppression de client dans la base de donnée
*-	Supprime également tous les fichiers et répertoires associés au client.
*-	Cette fonction prend le nom du client à supprimer en paramètre
*-	Cette fonction renvoie true si elle c'est bien effectuée et false si il y a eu une erreur.
*/
function suppressionClient($nomClient){
	try{
		$bdd = connexionBDD();
		$retour = true;
		//Chemin du dossier client à supprimer
		$path = "C:\\xampp\\htdocs\\CIDRE\\Client\\".$nomClient;
		$requete = "SELECT ID_Client FROM `client` WHERE nom_Client='".$nomClient."';";

		$resultat = $bdd->query($requete);
		$tableau_assoc = $resultat->fetchAll(PDO::FETCH_ASSOC);
		$id_client = $tableau_assoc[0]['ID_Client'];
		
		//Récupération des informations de la page
		$selectClient_q = $bdd->prepare("SELECT id_pages_consignes, id_client FROM pages_consignes WHERE ID_Client = :idclient ");
		$selectClient_q->execute(array(
			'idclient' => $id_client
		));
		$resultClient = $selectClient_q->fetch(PDO::FETCH_ASSOC);
		$idPagesCsg = $resultClient['id_pages_consignes'];
		
		//Suppression de la page
		$deletePageCsg_q = $bdd->prepare("DELETE FROM pages_consignes WHERE id_pages_consignes = :idPagesCsg ");
		$deletePageCsg_q->execute(array(
			'idPagesCsg' => $idPagesCsg
		));
	
		//Suppression des consignes
		$deleteCsg_q = $bdd->prepare("DELETE FROM consignes WHERE id_pages_consignes = :idPagesCsg ");
		$deleteCsg_q->execute(array(
			'idPagesCsg' => $idPagesCsg
		));
		
		//Suppression du client dans la base de donnée
		$requeteSuppression = "DELETE FROM client WHERE ID_Client =".$bdd->quote($id_client).";";
		if(!$bdd->exec($requeteSuppression)){
			$retour = false;
			echo "erreur de la suppression du client dans la base de données";
		}
		
		rrmdir($path);

	
	}catch (Exeption $e){
		die('Erreur : '.e.getMessage());
	}
	
	return $retour;

}


/*insertionOffre($nomNewOffre)
*-	Fonction d'insertion des offres dans la base de donnée
*-	Insère les offres dans la base de données et créée les répertoires associés,
*-	Cela implique également la copie (et renommage) des fichiers de template dans les nouveaux dossiers crées 
*-	Cette fonction prend le nom de l'offre à inserer en paramètre
*-	Cette fonction renvoie true si elle c'est bien effectuée et false si il y a eu une erreur.
*/
function insertionOffre($nomNewOffre){
	try{
		$bdd = connexionBDD();
		$retour = true;
		$requeteSELECT = "SELECT * FROM `offre` WHERE nom_Offre='".$nomNewOffre."'";
		$resultat = $bdd->query($requeteSELECT);
		$tableau_assoc = $resultat->fetchAll(PDO::FETCH_ASSOC);

		if(empty($tableau_assoc)){
		
			//Chemin du dossier contenant les offres
			$path = "C:\\xampp\\htdocs\\CIDRE\Offre\\";
			
			/*Insertion de l'offre dans la base de données*/
			$requete = "INSERT INTO offre (nom_Offre) VALUES (".$bdd->quote($nomNewOffre).");";
			
			if(!$bdd->exec($requete)){
				$retour = false;
			}
			
			//Insertion de la page d'index (commune à toutes les offres) dans la base de données 
			$selectIDOffre_q = $bdd->prepare("SELECT ID_Offre FROM `offre` WHERE nom_Offre = :nomOffre");	//selection de l'id de l'offre
			$selectIDOffre_q->execute(array(
				'nomOffre' => $nomNewOffre
			));
			$resultIDOffre = $selectIDOffre_q->fetch(PDO::FETCH_ASSOC);
			$idOffre = $resultIDOffre['ID_Offre'];				
			
			$path_web_index = "/CIDRE/Offre/".$nomNewOffre."/index_".$nomNewOffre.".php";

			$verifPath_q = $bdd->prepare("SELECT * FROM pages_debugs WHERE path= :path");	//On vérifie qu'une page n'existe pas déjà dans la base
			$verifPath_q->execute(array(
				'path' => $path_web_index
			));
			
			$tableauTest = $verifPath_q->fetchAll(PDO::FETCH_ASSOC);
			if(!empty($tableauTest)){														//Si il en existe une, on la supprime 
				//Suppression de la page
				$deletePageDbg_q = $bdd->prepare("DELETE FROM pages_debugs WHERE path = :path ");
				$deletePageDbg_q->execute(array(
					'path' => $path_web_index
				));
				echo "Il existait une page similaire dans la base de données";
			}
			
			//Insertion de la page d'index dans la base de données
			$insert_q = $bdd->prepare("INSERT INTO pages_debugs VALUES ('',  'index', :path, :idOffre, '1')");	
			$insert_q->execute(array(
				'path' => $path_web_index,
				'idOffre' => $idOffre
			));
			
			/*Création des dossiers/fichiers sur l'espace disque*/
			if(!mmkDir($path,$nomNewOffre)){
				$retour = false;
			}
		}else{
			$retour = false;
			echo "Insertion impossible l'offre existe déjà dans la base de donnée <br/>";
		}
	}catch (Exeption $e){
		die('Erreur : '.e.getMessage());
	}

	return $retour;
}

/*insertionPagesDebugs($nomNewPages,offre)
*-	Fonction d'insertion de pages de débugs dans la base de données
*-	Insère les Pages dans la base de données
*-	Cela implique également la copie (et renommage) des fichiers de template
*-	Cette fonction prend le nom de la page de débugs à inserer et l'offre associé en paramètre
*-	Cette fonction renvoie true si elle c'est bien effectuée et false si il y a eu une erreur.
*/
function insertionPagesDebugs($nomNewPage,$idOffre){
	try{
		$bdd = connexionBDD();
		$retour = true;
		$requeteSELECT = "SELECT * FROM `pages_debugs` WHERE name='".$nomNewPage."' AND id_offre ='".$idOffre."'";
		$resultat = $bdd->query($requeteSELECT);
		$tableau_assoc = $resultat->fetchAll(PDO::FETCH_ASSOC);

		if(empty($tableau_assoc)){
						
			$selectNomOffre_q = $bdd->prepare("SELECT nom_Offre FROM `offre` WHERE ID_Offre= :idOffre");	//selection du nom de l'offre
			$selectNomOffre_q->execute(array(
				'idOffre' => $idOffre
			));
			$resultNomOffre = $selectNomOffre_q->fetch(PDO::FETCH_ASSOC);
			$nomOffre = $resultNomOffre['nom_Offre'];	
						
			$path_web_debugs = "/CIDRE/Offre/".$nomOffre."/".$nomOffre."_".$nomNewPage.".php";
			$path = "C:\\xampp\\htdocs\\CIDRE\\Offre\\";
			$path_Template = $path."Template";
			$pathOffre = $path.$nomOffre;
			
			$verifPath_q = $bdd->prepare("SELECT * FROM pages_debugs WHERE path= :path");	//On vérifie qu'une page n'existe pas déjà
			$verifPath_q->execute(array(
				'path' => $path_web_debugs
			));
			$tableauTest = $verifPath_q->fetchAll(PDO::FETCH_ASSOC);
			if(!empty($tableauTest)){
				//Suppression de la page
				$deletePageDbg_q = $bdd->prepare("DELETE FROM pages_debugs WHERE path = :path ");
				$deletePageDbg_q->execute(array(
					'path' => $path_web_debugs
				));
				echo "Il existait une page similaire dans la base de données";
			}
			
			$insert_q = $bdd->prepare("INSERT INTO pages_debugs VALUES ('',  :name, :path, :idOffre, '1')");	//Insertion d'une nouvelle page débugs
			$insert_q->execute(array(
				'name' => $nomNewPage,
				'path' => $path_web_debugs,
				'idOffre' => $idOffre
			));
			
			if(!CheckExist($pathOffre,$nomOffre."_".$nomNewPage.".php")){
				copy($path_Template."\\Template.php", $pathOffre."\\".$nomOffre."_".$nomNewPage.".php");
			}

		
		}else{
			$retour = false;
			echo "Insertion impossible la page existe déjà dans la base de donnée <br/>";
		}
	}catch (Exeption $e){
		die('Erreur : '.e.getMessage());
	}

	return $retour;
}


/*suppressionOffre($nomOffre)
*-	Fonction de suppression de l'offre dans la base de donnée
*-	Supprime également tous les fichiers et répertoires associés a l'offre.
*-	Cette fonction prend le nom de l'offre à supprimer en paramètre
*-	Cette fonction renvoie true si elle c'est bien effectuée et false si il y a eu une erreur.
*/
function suppressionOffre($nomOffre){
	try{
		$bdd = connexionBDD();
		$retour = true;
		//Chemin du dossier du client
		$path = "C:\\xampp\htdocs\\CIDRE\Offre\\".$nomOffre;
		$requete = "SELECT ID_Offre FROM `offre` WHERE nom_Offre='".$nomOffre."';";
		
		$resultat = $bdd->query($requete);
		$tableau_assoc = $resultat->fetchAll(PDO::FETCH_ASSOC);

		$requeteSuppression = "DELETE FROM offre WHERE ID_Offre =".$bdd->quote($tableau_assoc[0]['ID_Offre']).";";
		
		if(!$retour = $bdd->exec($requeteSuppression)){
			$retour = false;
			echo "erreur de la suppression de l'offre dans la base de donnée <br/>";
		}
		
		//Suppression de la page
		$deletePageDbg_q = $bdd->prepare("DELETE FROM pages_debugs WHERE id_offre = :IDOffre ");
		$deletePageDbg_q->execute(array(
			'IDOffre' => $tableau_assoc[0]['ID_Offre']
		));
		
		//Suppression des debugs 
		$deleteCsg_q = $bdd->prepare("DELETE d 
										FROM debugs d 
										INNER JOIN pages_debugs p 
										ON d.id_pages_debugs = p.id_pages_debugs
										WHERE p.id_offre = :idOffre ");
		$deleteCsg_q->execute(array(
			'idOffre' => $tableau_assoc[0]['ID_Offre']
		));

		rrmdir($path);

		
		//Si l'image existe alors on la supprime
		if(CheckExist("C:\\xampp\\htdocs\\CIDRE\\Images","Logigramme_".$nomOffre.".png")){
			if(unlink("C:\\xampp\\htdocs\\CIDRE\\Images\\Logigramme_".$nomOffre.".png")){
				echo "Suppression logigramme OK <br/>";
			}
		}
	
	}catch (Exeption $e){
		die('Erreur : '.e.getMessage());
	}	
		
	return $retour;

}

/*suppressionDebug($idDebug)
*-	Fonction de suppression du debug dans la base de donnée
*-	Supprime également tous les fichiers et répertoires associés au débug.
*-	Cette fonction prend l'id du débug à supprimer en paramètre
*-	Cette fonction renvoie true si elle c'est bien effectuée et false si il y a eu une erreur.
*/
function suppressionDebug($idPagesDebug){
	try{
		$bdd = connexionBDD();
		$retour = true;
		$selectInfoDebug_q = $bdd->prepare("SELECT 
											pages_debugs.name,
											offre.nom_Offre
											FROM pages_debugs
											INNER JOIN offre ON pages_debugs.id_offre = offre.ID_Offre 
											WHERE pages_debugs.id_pages_debugs= :idPagesDebug");	//selection des informations du débugs
		$selectInfoDebug_q->execute(array(
			'idPagesDebug' => $idPagesDebug
		));
		$resultInfo = $selectInfoDebug_q->fetch(PDO::FETCH_ASSOC);
		$nomOffre = $resultInfo['nom_Offre'];	
		$nameDebug = $resultInfo['name'];	
		$path = "C:\\xampp\htdocs\\CIDRE\Offre\\".$nomOffre;

		//Suppression de la page
		$deletePageDbg_q = $bdd->prepare("DELETE FROM pages_debugs WHERE id_pages_debugs = :idPageDebug ");
		$deletePageDbg_q->execute(array(
			'idPageDebug' => $idPagesDebug
		));
		
		//Suppression des debugs
		$deleteCsg_q = $bdd->prepare("DELETE FROM debugs WHERE id_pages_debugs = :idPagesDebug ");
		$deleteCsg_q->execute(array(
			'idPagesDebug' => $idPagesDebug
		));
		
		
		//Si le débug existe alors on le supprime
		if(CheckExist($path,$nomOffre."_".$nameDebug.".php")){
			if(unlink($path."\\".$nomOffre."_".$nameDebug.".php")){
				echo "Suppression débug OK <br/>";
			}
		}
		
	}catch (Exeption $e){
		die('Erreur : '.e.getMessage());
	}	
		
	return $retour;

}


/*mmkDir($path,$nom)
*-	Fonction de création des fichiers et dossiers associés à un(e) client/offre.
*-	On vérifie si il s'agit d'un client ou d'une offre en fonction du chemin reçu,
*-	On copie les fichiers de template en les renommants (si les fichiers existe déjà ils ne sont pas écrasés).
*-	Cette fonction prend le chemin du dossiers dans lequel il faut créer et le nom de l'offre/client en paramètre
*-	Cette fonction renvoie true si elle c'est bien effectuée et false si il y a eu une erreur.
*/
function mmkDir($path,$nom){


	try{

		$retour = false;
		
		//Si il s'agit d'un client
		if($path =="C:\\xampp\\htdocs\\CIDRE\\Client\\"){
		
			$path_Template = $path."Template";
			$pathClient = $path.$nom;
 
			if(!is_dir($pathClient)){
				mkdir($pathClient);
			}else echo "Attention, il existe déjà un dossier ".$pathClient."<br/>";
			
			if(!is_dir($pathClient."\\Style")){
				mkdir($pathClient."\\Style");
			}else echo "Attention, il existe déjà un dossier ".$pathClient."\\Style <br/>";
			
			if(!is_dir($pathClient."\\Images")){
				mkdir($pathClient."\\Images");
			}else echo "Attention, il existe déjà un dossier ".$pathClient."\\Images <br/>";

			//Lecture du dossier de création, on vérifie que les fichiers que l'on va copier n'existe pas déjà, 
			//si c'est le cas on copie les fichiers de template. 
			if(!CheckExist($pathClient,"consignes_".$nom.".php")){
				copy($path_Template."\\consignes_Template.php", $pathClient."\\consignes_".$nom.".php");
			}else echo "Copie annulée<br/>";
			if(!CheckExist($pathClient,"logo.jpg")){
				copy($path_Template."\\logo.jpg", $pathClient."\\logo.jpg");
			}else echo "Copie annulée<br/>";
			if(!CheckExist($pathClient."\\Style","style.css")){
				copy($path_Template."\\Style\\style.css", $pathClient."\\Style\\style.css");
			}else echo "Copie annulée<br/>";
			if(!CheckExist($pathClient."\\Style","th.jpg")){
				copy($path_Template."\\Style\\th.jpg", $pathClient."\\Style\\th.jpg");
			}else echo "Copie annulée<br/>";
			
			$retour = true;
		
		//Si il s'agit d'une offre
		}elseif($path == "C:\\xampp\\htdocs\\CIDRE\\Offre\\"){

			$path_Template = $path."Template";
			$pathOffre = $path.$nom;

			if(!is_dir($pathOffre)){
				mkdir($pathOffre);
			}else echo "Attention, il existe déjà un dossier ".$pathOffre."<br/>";
			
			if(!is_dir($pathOffre."\\Style")){
				mkdir($pathOffre."\\Style");
			}else echo "Attention, il existe déjà un dossier ".$pathOffre."\\Style <br/>";
			
			if(!is_dir($pathOffre."\\Images")){
				mkdir($pathOffre."\\Images");
			}else echo "Attention, il existe déjà un dossier ".$pathOffre."\\Images <br/>";
			
			//Lecture du dossier de création, on vérifie que les fichiers que l'on va copier n'existe pas déjà, 
			//si c'est le cas on copie les fichiers de template. 
			if(!CheckExist($pathOffre,"index_".$nom.".php")){
				copy($path_Template."\\index_Template.php", $pathOffre."\\index_".$nom.".php");
			}else echo "Copie annulée<br/>";
			
			//Même action que précédemment mais pour le dossier Style
			if(!CheckExist($pathOffre."\\Style","style.css")){
				copy($path_Template."\\Style\\style.css", $pathOffre."\\Style\\style.css");
			}else echo "Copie annulée<br/>";

			//Même action que précédemment mais pour le dossier Images
			if(!CheckExist($pathOffre."\\Images","DHD.jpg")){
				copy($path_Template."\\Images\DHD.jpg", $pathOffre."\\Images\\DHD.jpg");
			}else echo "Copie annulée<br/>";
		
			if(!CheckExist($pathOffre."\\Images","image-support.jpg")){
				copy($path_Template."\\Images\\image-support.jpg", $pathOffre."\\Images\\image-support.jpg");
			}else echo "Copie annulée<br/>";
			
			//Même action que précédemment mais pour le logigramme
			if(!CheckExist("C:\\xampp\\htdocs\\CIDRE\\Images","Logigramme_".$nom.".png")){
				copy($path_Template."\\Images\\Logigramme_Template.png", "C:\\xampp\\htdocs\\CIDRE\\Images\\Logigramme_".$nom.".png");
			}else echo "Copie annulée<br/>";
			
			$retour = true;
		}
		
	}catch (Exeption $e){
		die('Erreur : '.e.getMessage());
	}	
	
	return $retour;
}

/*CheckExist($path,$nom)
*-	Fonction qui vérifie l'existence d'un fichier
*-	Cette fonction prend le chemin du dossier et le nom du fichier à vérifier en paramètre
*-	Cette fonction renvoie true si il existe le fichier et false si le fichier n'existe pas.
*/
 function CheckExist($path,$nom) {
	$retour = false;
	$objects = scandir($path);
		foreach ($objects as $object) {
			if ($object == $nom) {
				echo "Attention, il existe un fichier ".$path."\\".$nom."<br/>";
				$retour = true;
			}
		} 
	return $retour;
}
 
/*rrmdir($path)
*-	Fonction qui suppprime d'integralité d'un dossiers et de son contenu si il existe
*-	Cette fonction prend le chemin du dossier en paramètre
*-	Cette fonction ne renvoie rien
*/
 function rrmdir($path) {
	
	if (is_dir($path)) {
		$objects = scandir($path);
		foreach ($objects as $object) {
		if ($object != "." && $object != "..") {
			if (filetype($path."\\".$object) == "dir"){
				rrmdir($path."\\".$object);
			}
			else unlink($path."\\".$object);
		}
	}
    reset($objects);
    rmdir($path);
	}
}


/*insertionImages($path)
*-	Fonction qui upload une image dans les dossiers concerné et insère dans la base de donnée
*-	Cette fonction prend  en paramètre
*-	Cette fonction renvoie true si ça c'est bien passée, false sinon
*/
 function insertionImages($img,$env,$taille_max) {
	
	$bdd = connexionBDD();
	$dossier = "Images/";
	$fichier = basename($img['name']);
	$taille = filesize($img['tmp_name']);					//Récuperation de la taille de l'image
	$extensions = array('.png', '.gif', '.jpg', '.jpeg');			//extensions disponible
	$extension = strrchr($img['name'], '.'); 			//extension du fichier récuperé 
	$imgSpec = $img;
	
	if($env == "csg"){
	
		$selectNomClient_q = $bdd->prepare("SELECT nom_Client FROM `client` WHERE ID_Client= :idClient");	//selection du nom de l'offre
		$selectNomClient_q->execute(array(
			'idClient' => $_SESSION['client']
		));
		$resultNomClient = $selectNomClient_q->fetch(PDO::FETCH_ASSOC);
		$nomClient = $resultNomClient['nom_Client'];	
		$dossierSpec = "Client/".$nomClient."/Images/";
	
	}else if ($env=="dbg"){
		
		$selectNomOffre_q = $bdd->prepare("SELECT nom_Offre FROM `offre` WHERE ID_Offre= :idOffre");	//selection du nom de l'offre
		$selectNomOffre_q->execute(array(
			'idOffre' => $_SESSION['offre']
		));
		$resultNomOffre = $selectNomOffre_q->fetch(PDO::FETCH_ASSOC);
		$nomOffre = $resultNomOffre['nom_Offre'];	
		$dossierSpec = "Offre/".$nomOffre."/Images/";
	
	}
	else {
		$erreur = "Il n'y a pas d'environnement spécifié";
		$dossierSpec = "";
	}

	//Vérifications nécéssaires
	if(!in_array($extension, $extensions)){
	//Si l'extension n'est pas dans le tableau
		$erreur = "Vous devez uploader un fichier  de type png, gif ou jpeg";
	}
	if($taille > $taille_max){
		$erreur = "Le fichier est trop gros";
	}
	
	//Si pas d'erreur On upload
	if(!isset($erreur)){
	//On formate le nom du fichier 
		$fichier = strtr($fichier,
			'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
			'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
		$fichier = preg_replace('/([^.a-z0-9]+)/i', '_', $fichier);

		
		if(move_uploaded_file($img['tmp_name'], $dossier.$fichier))
		//Si la fonction renvoie TRUE, c'est que ça a fonctionné...
		{
			//Insertion du chemin du fichier dans la base
			$req = $bdd->prepare('INSERT INTO image VALUES("" , :path)');
			$req->execute(array(
			'path' => $dossier.$fichier
			));
			$req->closeCursor();
		}
		else
		{
				  echo 'Echec de l\'upload !';
		}
		
		//Même action que précédemment mais pour le logigramme
		if(!CheckExist($dossierSpec,$fichier)){
			copy( $dossier.$fichier, $dossierSpec.$fichier);
			//Insertion du chemin du fichier dans la base
			$req = $bdd->prepare('INSERT INTO image VALUES("" , :path)');
			$req->execute(array(
				'path' => $dossierSpec.$fichier
			));
			$req->closeCursor();
			
		}else echo "Copie annulée<br/>";

		
	}else{
		echo $erreur;
	}

}

?>