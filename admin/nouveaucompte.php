<?php require "../admin.php"; 
function genPassword($size){
    $caractere = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "&", "{", "(", "[", "|", "@", ")", "]", "}", "+", "=");
    $password = 0;
    for($i=1;$i<$size;$i++){
        $password .= ($i%2)?strtoupper($caractere[array_rand($caractere)]):$caractere[array_rand($caractere)];
    }		
    return $password;
}
$monMotDePasse = genPassword(10);

	$randclient = rand(10000000,99999999);
	$erreur = "Entrez vos informations";
	if (isset($_POST['submit'])) {
		$idclient = stripslashes(htmlspecialchars($_POST['idclient']));
		$mdp = stripslashes(htmlspecialchars($_POST['password']));
		if (empty($idclient)) {
			$erreur = "Vous devez mettre un identifiant";
		}elseif (empty($mdp)){
			$erreur = "Vous devez mettre un mot de passe";
		}else{
			$insert = $bdd->prepare('INSERT INTO utilisateur (idClient,mdp) VALUES (:idClient,:mdp)');
			$insert->bindParam(':idClient',$idclient);
			$insert->bindParam(':mdp',$mdp);
			$insert->execute();
			$erreur = "Les identifiants ont bien été créé";
			header('location:nouveaulivre.php');
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
						<label for="idclient">Identifiant client : <span>*</span></label>
						<input type="text" class="pres-input" name="idclient" value="<?php echo $randclient; ?>">
					</div>					
					<div class="form-input">
						<label for="password">Mot de passe : <span>*</span></label>
						<input type="text" class="pres-input" name="password" value="<?php echo $monMotDePasse; ?>">
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
