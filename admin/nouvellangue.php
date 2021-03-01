<?php require"../admin.php";
	$erreur = "Entrez votre langue";
	if (isset($_POST['submit'])) {
		$langue = stripslashes(htmlspecialchars($_POST['langue']));
		if (empty($langue)) {
			$erreur = "Vous devez mettre une langue";
		}else{
			$insert = $bdd->prepare('INSERT INTO langue (libelle) VALUES (:langue)');
			$insert->bindParam(':langue', $langue);
			$insert->execute();
			$erreur = "Votre langue a bien été enregistré";
		}
	}
?>
		<div class="droit">
			<h2>Entrez votre nouvelle langue</h2>
			<form method="POST" class="update">
				<div class="group-input">
					<p><span>Eléments obligatoires : *</span></p>
					<div class="erreur">
						<h3><?php echo $erreur; ?></h3>
					</div>
					<div class="form-input">
						<label for="langue">Langue : <span>*</span></label>
						<input type="text" class="pres-input" name="langue">
					</div>
					<div class="form-input">
						<input type="submit" name="submit">
					</div>
					<table>
						<thead>
							<th>Langues</th>
						</thead>
						<tbody>
							<?php foreach ($reslangs as $reslang) {?>
							<tr>
								<td><?php echo $reslang['libelle'] ?></td>
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
