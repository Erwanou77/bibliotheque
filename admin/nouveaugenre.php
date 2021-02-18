<?php require"../admin.php";
	$genres = stripslashes(htmlspecialchars($_POST['genres']));
	if (isset($_POST['submit'])) {
		if (empty($genres)) {
			header('location:nouveaugenre.php');
		}else{
			$update = $bdd->prepare('UPDATE livre SET genre = $genres');
			$update->execute();
		}
	}
?>
		<div class="droit">
			<h2>Entrez votre genre</h2>
			<form method="POST" class="update">
				<div class="group-input">
					<div class="form-input">
						<label for="genres">genre :</label>
						<input type="text" class="pres-input" name="genres">
					</div>
					<div class="form-input">
						<button type="submit">Envoyer</button>
					</div>
					<table>
						<thead>
							<th>Genre</th>
						</thead>
						<tbody>
							<?php foreach ($pdostat2 as $ligne) {?>
							<tr>
								<td><?php echo $ligne['genre'] ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</form>
		</div>

</main>
<?php require "../Footer/footer.php"; ?>
