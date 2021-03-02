<?php require"../admin.php";
	$erreur = "Entrez votre éditeur";
	if (isset($_POST['submit'])) {
		$editeur = stripslashes(htmlspecialchars($_POST['editeur']));
		if (empty($editeur)) {
			$erreur = "Vous devez mettre un éditeur";
		}else{
			$insert = $bdd->prepare('INSERT INTO editeur (libelle) VALUES (:editeur)');
			$insert->bindParam(':editeur', $editeur);
			$insert->execute();
			$erreur = "Votre éditeur a bien été enregistré";
		}
	}
?>
		<div class="droit">
			<h2>Entrez votre nouvel editeur</h2>
			<form method="POST" class="update">
				<div class="group-input">
					<p><span>Eléments obligatoires : *</span></p>
					<div class="erreur">
						<h3><?php echo $erreur; ?></h3>
					</div>
					<div class="form-input">
						<label for="editeur">Editeurs : <span>*</span></label>
						<input type="text" class="pres-input" name="editeur">
					</div>
					<div class="form-input">
						<input type="submit" name="submit">
					</div>
					<table>
						<thead>
							<th>Editeurs</th>
						</thead>
						<tbody>
							<?php foreach ($resedit as $resediteur) {?>
							<tr>
								<td><?php echo $resediteur['libelle'] ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</form>
			<!-- Entrez les modifs ici -->
		</div>
	</div>
</main>
<?php require "../Footer/footer.php"; ?>
