<?php require "../admin.php"; 
	$erreur = "Entrez vos informations";
	if (isset($_POST['submit'])) {
		$nom = stripslashes(htmlspecialchars($_POST['nom']));
		$prenom = stripslashes(htmlspecialchars($_POST['prenom']));
		$email = stripslashes(htmlspecialchars($_POST['email']));
		$mdp = stripslashes(htmlspecialchars(md5($_POST['password'])));
		if (empty($nom)) {
			$erreur = "Vous devez mettre un nom";
		}elseif (empty($nom)){
			$erreur = "Vous devez mettre un prénom";
		}elseif (empty($email)){
			$erreur = "Vous devez mettre un mail";
		}elseif (empty($mdp)){
			$erreur = "Vous devez mettre un mot de passe";
		}else{
			$insert = $bdd->prepare('INSERT INTO utilisateur (nom,prenom,email,mdp) VALUES (:nom,:prenom,:email,:mdp)');
			$insert->bindParam(':nom',$nom);
			$insert->bindParam(':prenom',$prenom);
			$insert->bindParam(':email',$email);
			$insert->bindParam(':mdp',$mdp);
			$insert->execute();
			$erreur = "Vos informations ont bien été envoyées, reconnectez-vous pour voir les modifications";
		}
	}
?>
		<div class="droit">
			<h2>Ajoutez un utilisateur</h2>
			<form method="POST">
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
						<label for="prenom">Pr&#233;nom : <span>*</span></label>
						<input type="text" class="pres-input" name="prenom">
					</div>
					<div class="form-input">
						<label for="mail">Mail : <span>*</span></label>
						<input type="email" class="pres-input" name="email">
					</div>
					<div class="form-input">
						<label for="password">Mot de passe : <span>*</span></label>
						<input type="password" class="pres-input" name="password">
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
