<?php require"../admin.php"; 
	$datefmt = new IntlDateFormatter('fr_FR', NULL, NULL, NULL, NULL, 'dd MMMM yyyy');
	$erreur = "Entrez les informations de l'auteur";
	if (isset($_POST['submit'])) {
		$nom = stripslashes(htmlspecialchars($_POST['nom']));
		$prenom = stripslashes(htmlspecialchars($_POST['prenom']));
		$date_naiss = stripslashes(htmlspecialchars($_POST['date']));
		if (empty($nom)) {
			$erreur = "Vous devez mettre un nom";
		}elseif (empty($prenom)) {
			$erreur = "Vous devez mettre un prénom";
		}elseif (empty($date_naiss)) {
			$erreur = "Vous devez mettre la date d'anniversaire";
		}else{
			$insert=$bdd->prepare("INSERT INTO personne (nom,prenom,date_naiss) VALUES (:nom,:prenom,:date_naiss)");
			$insert->bindParam(':nom', $nom);
        	$insert->bindParam(':prenom', $prenom);
        	$insert->bindParam(':date_naiss', $date_naiss);
			$insert->execute();
			$erreur = "Votre auteur a bien été enregistré";
		}
	}

?>
		<div class="droit">
			<h2>Entrez votre auteur</h2>
			<form method="POST" class="update">
				<div class="group-input">
					<p><span>Eléments obligatoires : *</span></p>
					<div class="erreur">
						<h3><?php echo $erreur; ?></h3>
					</div>
					<div class="form-input">
						<label for="nom">Nom : <span>*</span></label>
						<input type="text" class="pres-input" name="nom">
					</div>
					<div class="form-input">
						<label for="prenom">Prenom : <span>*</span></label>
						<input type="text" class="pres-input" name="prenom">
					</div>
					<div class="form-input">
						<label for="date">Date : <span>*</span></label>
						<input type="date" class="pres-input" name="date">
					</div>
					<div class="form-input">
						<input type="submit" name="submit">
					</div>
					<table>
						<thead>
							<th>Nom</th>
							<th>Prénom</th>
							<th>Date de naissance</th>
						</thead>
						<tbody>
							<?php foreach ($resperso as $ligne) {?>
							<tr>
								<?php $date1 = date_create($ligne['date_naiss']); ?>
								<td><?php echo $ligne['nom'] ?></td>
								<td><?php echo $ligne['prenom'] ?></td>
								<?php if (isset($ligne['date_naiss']) == NULL) { ?>
									<td><?php echo "" ?></td>
								<?php }else{ ?>
								<td><?php echo $datefmt->format($date1) ?></td>
								<?php } ?>
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
