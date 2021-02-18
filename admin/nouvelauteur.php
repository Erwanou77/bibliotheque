<?php require"../admin.php";
	$nom = stripslashes(htmlspecialchars($_POST['nom']));
	$prenom = stripslashes(htmlspecialchars($_POST['prenom']));
	if (isset($_POST['submit'])) {
		if (empty($nom)) {
			echo "Vous n'avez pas renseignez de nom";
		}elseif (empty($prenom)) {
			echo "Vous n'avez pas renseignez de prenom";
		}
		else{
			$update = $bdd->prepare('UPDATE auteur SET nom = $nom, prenom = $prenom');
			$update->execute();
		}
	}

?>
		<div class="droit">
			<h2>Entrez votre auteur</h2>
			<form method="POST" class="update">
				<div class="group-input">
					<div class="form-input">
						<label for="nom">Nom :</label>
						<input type="text" class="pres-input" name="nom">
					</div>
					<div class="form-input">
						<label for="prenom">Prenom :</label>
						<input type="text" class="pres-input" name="prenom">
					</div>
					<div class="form-input">
						<button type="submit">Envoyer</button>
					</div>
					<table>
						<thead>
							<th>Nom</th>
							<th>Prénom</th>
						</thead>
						<tbody>
							<?php foreach ($pdostat1 as $ligne) {?>
							<tr>
								<td><?php echo $ligne['nom'] ?></td>
								<td><?php echo $ligne['prenom'] ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</form>
		</div>
	</div>
</main>
<?php require "../Footer/footer.php"; ?>
