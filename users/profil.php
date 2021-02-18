<?php
	require"../bdd/profilreq.php";
	require"listeinfo.php";
?>
<link rel="stylesheet" type="text/css" href="../css/profil.css">
		<div class="menudroit">
			<div class="centre">
				<h2>Vos informations</h2>
				<form action="" method="POST">
					<div class="flex">
						<div class="input">
							<label>Nom :</label>
							<input class="form-control" type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>" disabled>
						</div>
						<div class="input">
							<label>Pr&#233;nom :</label>
							<input class="form-control" type="text" name="prenom" value="<?php echo $_SESSION['prenom']; ?>" disabled>
						</div>

					</div>
					<div class="flex">
						<div class="input">
							<label>Mail :</label>
							<input class="form-control" type="mail" name="mail" value="<?php echo $_SESSION['email']; ?>" disabled>
						</div>
						<div class="input">
							<label>Mot de passe:</label>
							<input class="form-control" type="password" name="mdp">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
<?php require ("../Footer/footer.php");?>
