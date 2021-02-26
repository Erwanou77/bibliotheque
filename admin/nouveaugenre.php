<?php require"../admin.php";
	if (isset($_POST['submit'])) {
		$genres = stripslashes(htmlspecialchars($_POST['genres']));
		if (empty($genres)) {
			header('location:nouveaugenre.php');
		}else{
			$insert = $bdd->prepare('INSERT INTO genre (libelle) VALUES (:genre)');
			$insert->bindParam(':genre', $genres);
			$insert->execute();
		}
	}
?>
		<div class="droit">
			<h2>Entrez votre nouveau genre</h2>
			<form method="POST" class="update">
				<div class="group-input">
					<div class="form-input">
						<label for="genres">Genre :</label>
						<input type="text" class="pres-input" name="genres">
					</div>
					<div class="form-input">
						<input type="submit" name="submit">
					</div>
					<table>
						<thead>
							<th>Genre</th>
						</thead>
						<tbody>
							<?php foreach ($resgenres as $ligne) {?>
							<tr>
								<td><?php echo $ligne['libelle'] ?></td>
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
