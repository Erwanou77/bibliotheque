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
							<input class="form-control" type="text" name="nom">
						</div>
						<div class="input">
							<label>Pr&#233;nom :</label>
							<input class="form-control" type="text" name="prenom">
						</div>
														
					</div>
					<div class="flex">
						<div class="input">
							<label>Mail :</label>
							<input class="form-control" type="mail" name="mail">
						</div>
						<div class="input">
							<label>Mot de passe:</label>
							<input class="form-control" type="password" name="mdp">
						</div>				
					</div>
					<button type="submit">Envoyer</button>
				</form>
			</div>
		</div>
	</div>
</main>
<?php require ("../Footer/footer.php");?>