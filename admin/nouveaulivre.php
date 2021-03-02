<?php require"../admin.php";
	$erreur = "Entrez vos informations";
	if (isset($_POST['submit'])) {
		$titre = stripslashes(htmlspecialchars($_POST['titre']));
		$editeur = stripslashes(htmlspecialchars($_POST['editeur']));
		$annee = stripslashes(htmlspecialchars($_POST['annee']));
		$isbn = stripslashes(htmlspecialchars($_POST['isbn']));
		$langue = stripslashes(htmlspecialchars($_POST['langue']));
		$genres = stripslashes(htmlspecialchars($_POST['genres']));
		$auteur = stripslashes(htmlspecialchars($_POST['auteur']));
		$nbpage = stripslashes(htmlspecialchars($_POST['nbpage']));

		if (empty($titre)) {
			$erreur = "Vous devez mettre un titre";
		}elseif (empty($editeur)) {
			$erreur = "Vous devez choisir un editeur";
		}elseif (empty($annee)) {
			$erreur = "Vous devez mettre une année";
		}elseif (empty($isbn)) {
			$erreur = "Vous devez mettre un isbn";
		}elseif (empty($langue)) {
			$erreur = "Vous devez choisir une langue";
		}elseif (empty($genres)) {
			$erreur = "Vous devez choisir un genre";
		}elseif (empty($auteur)) {
			$erreur = "Vous devez choisir un auteur";
		}elseif (empty($nbpage)) {
			$erreur = "Vous devez mettre le nombre de page";
		}else{
			$insert=$bdd->prepare("INSERT INTO livre (isbn,titre,annee,langue,genre,editeur,idPersonne,nbpages) VALUES (:isbn,:titre,:annee,:langue,:genre,:auteur,:editeur,:nbpage)");
			$insert->bindParam(':isbn', $isbn);
        	$insert->bindParam(':titre', $titre);
        	$insert->bindParam(':annee', $annee);
        	$insert->bindParam(':langue', $langue);
        	$insert->bindParam(':genre', $genres);
        	$insert->bindParam(':auteur', $auteur);
        	$insert->bindParam(':editeur', $editeur);
        	$insert->bindParam(':nbpage', $nbpage);
			$insert->execute();
			$erreur = "Votre livre a bien été enregistré";
		}
	}
?>
		<div class="droit">
			<h2>Entrez les informations de votre livre</h2>
			<form method="POST" class="update">
				<div class="group-input">
					<p><span>Eléments obligatoires : *</span></p>
					<div class="erreur">
						<h3><?php echo $erreur; ?></h3>
					</div>
					<div class="form-input">
						<label>Titre : <span>*</span></label>
						<input type="text" class="pres-input" name="titre">
					</div>
					<div class="form-input">
						<label>Editeur : <span>*</span></label>
						<select class="pres-input" name="editeur">
							<option value="" selected>Editeur</option>
							<?php foreach ($resedit as $edits) { ?>
								<option value="<?php echo $edits['id'] ?>"><?php echo $edits['libelle'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-input">
						<label>Année : <span>*</span></label>
						<input type="number" class="pres-input" name="annee" min="0" max="2500">
					</div>
					<div class="form-input">
						<label>ISBN : <span>*</span></label>
						<input type="text" class="pres-input" name="isbn">
					</div>
					<div class="form-input">
						<label>Langue : <span>*</span></label>
						<select class="pres-input" name="langue">
							<option value="" selected>Langue</option>
							<?php foreach ($reslangs as $langs) { ?>
								<option value="<?php echo $langs['id'] ?>"><?php echo $langs['libelle'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-input">
						<label>Genre : <span>*</span></label>
						<select class="pres-input" name="genres">
							<option value="">Genre</option>
							<?php foreach ($resgenres as $genres) { ?>
								<option value="<?php echo $genres['id'] ?>"><?php echo $genres['libelle'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-input">
						<label>Auteur : <span>*</span></label>
						<select class="pres-input" name="auteur">
							<option value="">Auteur</option>
							<?php foreach ($resperso as $respersos) { ?>
								<option value="<?php echo $respersos['id'] ?>"><?php echo $respersos['nom'] . " " . $respersos['prenom']; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-input">
						<label>Nombre de page : <span>*</span></label>
						<input type="number" class="pres-input" name="nbpage" min="0" max="2500">
					</div>
					<div class="form-input">
						<input type="submit" name="submit">
					</div>
				</div>
			</form>
		</div>
	</div>
</main>
<?php require "../Footer/footer.php"; ?>