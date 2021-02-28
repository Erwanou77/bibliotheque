<?php require "../users.php"; 
	$erreur = "";
	if (isset($_POST['submit'])) {
		$nom = stripslashes(htmlspecialchars($_POST['nom']));
		$prenom = stripslashes(htmlspecialchars($_POST['prenom']));
		$email = stripslashes(htmlspecialchars($_POST['email']));
		if (empty($nom) || empty($prenom) || empty($email)) {
			$erreur = "Vous devez remplir les champs";
		}else{
			$update = $bdd->prepare('UPDATE utilisateur SET nom = :nom,prenom = :prenom, email = :email WHERE idUtilisateur=' . $_SESSION["idUtilisateur"]);
			$update->bindParam(':nom',$nom);
			$update->bindParam(':prenom',$prenom);
			$update->bindParam(':email',$email);
			$update->execute();
			$erreur = "Vos informations ont bien été envoyées";
		}
	}
?>
		<div class="droit">
			<h2>Entrez vos informations</h2>
			<form method="POST" class="update">
				<div class="group-input">
					<p style="text-align: center;"><?php echo $erreur;?></p>
					<div class="form-input">
						<label for="nom">Nom :</label>
						<input type="text" class="pres-input" name="nom" value="<?php echo $_SESSION["nom"] ?>">
					</div>
					<div class="form-input">
						<label for="prenom">Pr&#233;nom :</label>
						<input type="text" class="pres-input" name="prenom" value="<?php echo $_SESSION["prenom"] ?>">
					</div>
					<div class="form-input">
						<label for="mail">Mail :</label>
						<input type="email" class="pres-input" name="email" value="<?php echo $_SESSION["email"] ?>">
					</div>
					<div class="form-input">
						<input type="submit" name="submit">
					</div>
				</div>
			</form>
			<!-- Entrez les modifs ici -->
		</div>
	</div>
</main>
<?php require "../Footer/footer.php"; ?>
