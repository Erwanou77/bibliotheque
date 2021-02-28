<?php require"../admin.php";
	$modiflivre = $bdd->query('SELECT *, e.libelle AS editeurs, g.libelle AS genres, la.libelle AS langues FROM livre l JOIN editeur e ON l.editeur = e.id JOIN genre g ON l.genre = g.id JOIN langue la ON l.langue = la.id');
	$modiflivre->setFetchMode(PDO::FETCH_ASSOC);
	if (isset($_POST['submit'])) {
		$titre = stripslashes(htmlspecialchars($_POST['titre']));
		$editeur = stripslashes(htmlspecialchars($_POST['editeur']));
		$annee = stripslashes(htmlspecialchars($_POST['annee']));
		$isbn = stripslashes(htmlspecialchars($_POST['isbn']));
		$langue = stripslashes(htmlspecialchars($_POST['langue']));
		$genres = stripslashes(htmlspecialchars($_POST['genres']));

		if (empty($titre)) {
			$erreur = "Vous devez mettre un titre";
		}elseif (empty($editeur)) {
			$erreur = "Vous devez mettre un editeur";
		}elseif (empty($annee)) {
			$erreur = "Vous devez mettre une année";
		}elseif (empty($isbn)) {
			$erreur = "Vous devez mettre un isbn";
		}elseif (empty($langue)) {
			$erreur = "Vous devez mettre un genre";
		}elseif (empty($genre)) {
			$erreur = "Vous devez mettre un genre";
		}else{
			$insert=$bdd->prepare("UPDATE livre SET isbn = :isbn,titre = :titre, annee = :annee, langue = :langue, genre = :genre, editeur = :editeur WHERE");
			$insert->bindParam(':isbn', $isbn);
        	$insert->bindParam(':titre', $titre);
        	$insert->bindParam(':annee', $annee);
        	$insert->bindParam(':langue', $langue);
        	$insert->bindParam(':genre', $genres);
        	$insert->bindParam(':editeur', $editeur);
			$insert->execute();
		}
	}
 ?>
		<div class="droit">
			<h2>Entrez les informations de votre livre</h2>
			<div class="form">
				<form method="POST" class="update">
					<div class="group-input">
						<div class="form-input">
							<label>Titre :</label>
							<select class="pres-input" name="titre">
								<?php foreach ($modiflivre as $modifs) { ?>
								<option><?php echo $modifs['titre']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-input">
							<label>Editeur :</label>
							<select class="pres-input" name="editeur">
								<option>Editeur</option>
								<?php foreach ($resedit as $edits) { ?>
									<option value="<?php echo $edits['id'] ?>"><?php echo $edits['libelle'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-input">
							<label>Année :</label>
							<input type="text" class="pres-input" name="annee">
						</div>
						<div class="form-input">
							<label>ISBN :</label>
							<input type="text" class="pres-input" name="isbn">
						</div>
						<div class="form-input">
							<select class="pres-input" name="langue">
								<option value="">Langue</option>
								<?php foreach ($reslangs as $langs) { ?>
									<option value="<?php echo $langs['id'] ?>"><?php echo $langs['libelle'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-input">
							<select class="pres-input" name="genres">
								<option value="">Genre</option>
								<?php foreach ($resgenres as $genres) { ?>
									<option value="<?php echo $genres['id'] ?>"><?php echo $genres['libelle'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-input">
							<input type="submit" name="submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
<?php require "../Footer/footer.php"; ?>