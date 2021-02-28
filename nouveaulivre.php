<?php
include("bbcode.php");
require("header/header.php");
require'bdd/config.php';
$reqgenre = $bdd->query('SELECT * FROM genre');
$reqgenre->setFetchMode(PDO::FETCH_ASSOC);
$resgenres = $reqgenre->fetchALL();

$reqedit = $bdd->query('SELECT * FROM editeur');
$reqedit->setFetchMode(PDO::FETCH_ASSOC);
$resedit = $reqedit->fetchALL();
$erreur = "Entrez vos informations";
	if (isset($_POST['submit'])) {
		$titre = stripslashes(htmlspecialchars($_POST['titre']));
		$editeur = stripslashes(htmlspecialchars($_POST['editeur']));
		$annee = stripslashes(htmlspecialchars($_POST['annee']));
		$isbn = stripslashes(htmlspecialchars($_POST['isbn']));
		$genre = stripslashes(htmlspecialchars($_POST['genre']));
		$nbpage = stripslashes(htmlspecialchars($_POST['nbpage']));
		if(empty($titre)) {
			$erreur = "Vous devez mettre un titre";
		}elseif (empty($editeur)) {
			$erreur = "Vous devez mettre un éditeur";
		}elseif (empty($annee)) {
			$erreur = "Vous devez mettre un année";
		}elseif (empty($isbn)) {
			$erreur = "Vous devez mettre un isbn";
		}elseif (empty($genre)) {
			$erreur = "Vous devez mettre un genre";
		}elseif (empty($nbpage)) {
			$erreur = "Vous devez mettre le nombre de pages";
		}else{		
	        $select=$bdd->prepare("INSERT INTO livre (titre,editeur,annee,isbn,genre,nbpages) VALUES (:titre,:editeur,:annee,:isbn,:genre,:nbpages)");
	        $select->bindParam(':titre', $titre);
	        $select->bindParam(':editeur', $editeur);
	        $select->bindParam(':annee', $annee);
	        $select->bindParam(':isbn', $isbn);
	        $select->bindParam(':genre', $genre);
	        $select->bindParam(':nbpage', $nbpage);
			$select->execute();
			$erreur = "Votre livre a bien été enregistré";
		}
	}
?>
<link rel="stylesheet" type="text/css" href="css/stylelivres.css">
<section class="principal">
	<div class="retour">
		<p><a href="bibliotheque.php">Biblioth&#232;que&nbsp;</a><span>&gt;</span>&nbsp;</p>
	</div>
	<div class="all">
		<form method="POST">
			<div class="centrage">
				<img src="" alt="Couverture du livre">
				<div class="tableau">
					<h2>Caract&#233;ristiques d&#233;taill&#233;es</h2>
					<p><span>Eléments obligatoires : *</span></p>
					<div class="erreur">
						<h3><?php echo $erreur; ?></h3>
					</div>
					<dl>
						<dt>Titre : <span>*</span></dt>
						<dd><input type="text" name="titre" placeholder="Ecrivez un titre"></dd>
					</dl>
					<dl>
						<dt>Editeurs : <span>*</span></dt>
						<dd>
							<select name="editeur">
								<option value="">Editeurs</option>
								<?php foreach ($resedit as $resedits) {?>
								<option value="<?php echo $resedits['id']; ?>"><?php echo $resedits['libelle']; ?></option>
								<?php } ?>
							</select>
						</dd>
					</dl>
					<dl>
						<dt>Année de publication : <span>*</span></dt>
						<dd><input type="number" name="annee" max="2050" placeholder="Ecrivez une année"></dd>
					</dl>
					<dl>
						<dt>ISBN : <span>*</span></dt>
						<dd><input type="text" name="isbn" placeholder="Ecrivez un ISBN"></dd>
					</dl>
					<dl>
						<dt>Genre : <span>*</span></dt>
						<dd>
							<select name="genre">
								<option value="">Genre</option>
								<?php foreach ($resgenres as $resgenre) {?>
								<option value="<?php echo $resgenre['id']; ?>"><?php echo $resgenre['libelle']; ?></option>
								<?php } ?>
							</select>
						</dd>
					</dl>
					<dl>
						<dt>Nombre de pages : <span>*</span></dt>
						<dd><input type="number" name="nbpage" min="0" max="2500"></dd>
					</dl>
					<input type="submit" name="submit">
				</div>
			</div>
		</form>
	</div>
</section>
<?php require ("Footer/footer.php");?>
