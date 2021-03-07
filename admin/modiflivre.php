<?php require"../admin.php";
	require '../bdd/detailslivres.php';
	$erreur = "Entrez vos modifications";	
	$reslivre = $pdostat->fetch();
	if (isset($_POST['submit'])) {
		$titre = stripslashes(htmlspecialchars($_POST['titre']));
		$editeur = stripslashes(htmlspecialchars($_POST['editeur']));
		$annee = stripslashes(htmlspecialchars($_POST['annee']));
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
		}elseif (empty($langue)) {
			$erreur = "Vous devez choisir une langue";
		}elseif (empty($genres)) {
			$erreur = "Vous devez choisir un genre";
		}elseif (empty($auteur)) {
			$erreur = "Vous devez choisir un auteur";
		}elseif (empty($nbpage)) {
			$erreur = "Vous devez mettre le nombre de page";
		}else{
			$insert=$bdd->prepare("UPDATE livre SET titre = :titre,annee = :annee,langue = :langue,genre = :genre,editeur = :editeur,idPersonne = :auteur,nbpages = :nbpage WHERE isbn =". $_GET['isbn']);
        	$insert->bindParam(':titre', $titre);
        	$insert->bindParam(':annee', $annee);
        	$insert->bindParam(':langue', $langue);
        	$insert->bindParam(':genre', $genres);
        	$insert->bindParam(':auteur', $auteur);
        	$insert->bindParam(':editeur', $editeur);
        	$insert->bindParam(':nbpage', $nbpage);
			$insert->execute();
			$erreur = "Votre livre a bien été modifié";
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
						<input type="text" class="pres-input" name="titre" value="<?php echo $reslivre['titre']; ?>">
					</div>
					<div class="form-input">
						<label>Editeur : <span>*</span></label>
						<select class="pres-input" name="editeur">
							<option value="<?php echo $reslivre['editeur']; ?>"><?php echo $reslivre['editeurs']; ?></option>
							<?php foreach ($resedit as $edits) {
									if ($reslivre['editeur'] != $edits['id']) { ?>
								<option value="<?php echo $edits['id'] ?>"><?php echo $edits['libelle'] ?></option>
								<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="form-input">
						<label>Année : <span>*</span></label>
						<input type="number" class="pres-input" name="annee" min="0" max="2500" value="<?php echo $reslivre['annee']; ?>">
					</div>					
					<div class="form-input">
						<label>Langue : <span>*</span></label>
						<select class="pres-input" name="langue">
							<option value="<?php echo $reslivre['langue']; ?>"><?php echo $reslivre['langues']; ?></option>
							<?php foreach ($reslangs as $langs) {
									if ($reslivre['langue'] != $langs['id']) { ?>
								<option value="<?php echo $langs['id'] ?>"><?php echo $langs['libelle'] ?></option>
								<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="form-input">
						<label>Genre : <span>*</span></label>
						<select class="pres-input" name="genres">
							<option value="<?php echo $reslivre['genre']; ?>"><?php echo $reslivre['genres']; ?></option>
							<?php foreach ($resgenres as $genres) { 
									if ($reslivre['genre'] != $genres['id']) { ?>	
								<option value="<?php echo $genres['id'] ?>"><?php echo $genres['libelle'] ?></option>
								<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="form-input">
						<label>Auteur : <span>*</span></label>
						<select class="pres-input" name="auteur">
							<option value="<?php echo $reslivre['idPersonne']; ?>"><?php echo $reslivre['nom'] . " " . $reslivre['prenom']; ?></option>
							<?php foreach ($resperso as $respersos) { 
									if ($reslivre['idPersonne'] != $respersos['id']) { ?>			
									<option value="<?php echo $respersos['id'] ?>"><?php echo $respersos['nom'] . " " . $respersos['prenom']; ?></option>
								<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="form-input">
						<label>Nombre de page : <span>*</span></label>
						<input type="number" class="pres-input" name="nbpage" min="0" max="2500" value="<?php echo $reslivre['nbpages']; ?>">
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