		<?php require "../users.php";
		$resliste = $pdostat->fetchALL();
		$erreur = "";
		$datefmt = new IntlDateFormatter('fr_FR', NULL, NULL, NULL, NULL, 'dd MMMM yyyy');
		if (isset($_POST['submit'])) {
			$renouvel = stripslashes(htmlspecialchars($_POST['renouvel']));
			if (empty($renouvel)) {
				header('location:voslivres.php');
			}else{	
				$renouvelle = 1;		
		        $insert=$bdd->prepare("UPDATE livre SET date_retour = date_retour + INTERVAL 15 DAY, renouvellement = :renouvel WHERE isbn=".$renouvel);
		        $insert->bindParam(':renouvel', $renouvelle);
				$insert->execute();
				$erreur = "Votre renouvellement a été effectué";
			}
		}
		?>
		<div class="droit">
			<h2>Liste des livres réservés :</h2>
			<?php if (!empty($resliste)) { ?>
			<form method="POST" class="erreur post">
				<div class="erreur">
					<h3><?php echo $erreur; ?></h3>
				</div>
				<p>Appuyez sur <b>Envoyer</b> pour effectuer votre unique renouvellement de 15 jours<br></p>
				<select name="renouvel" class="pres-input">	
				<option value="">-- Choisissez votre livre --</option>				
				<?php 
					foreach ($resliste as $ligne) {						
					if ($ligne['renouvellement'] == 0) {?>
					<option value="<?php echo $ligne['isbn']; ?>"><?php echo $ligne['titre']; ?></option>
					<?php }?>
				<?php } ?>
				</select>
				<input type="submit" name="submit">
			</form>
			<?php } ?>	
			<div class="container">
				<?php if (empty($resliste)) {?>
					<h1>Il n'y a aucun livre de réservé</h1>
				<?php }else{ ?>
				<?php foreach ($resliste as $ligne) {?>
				<?php
					$date1 = date_create($ligne['date_retour']);
					$date2 = date_create(date('d-m-Y'));
					$interval = date_diff($date2,$date1);
					$images = "../img/couvertures/".$ligne['isbn'].".png";?>
					<div class="desktop">
						<a href="../livres/details.php?isbn=<?php echo $ligne['isbn'];?>">
							<div class="position">
								<img src="<?php echo $images ?>" alt="Image de couvertures">
								<dl>
									<dt>Titre :</dt>
									<dd><?php echo $ligne['titre']; ?></dd>
								</dl>
								<dl>
									<dt>Auteurs :</dt>
									<dd><?php echo $ligne['nom'] . " " . $ligne['prenom']; ?></dd>
								</dl>
								<dl>
									<dt>Editeurs :</dt>
									<dd><?php echo $ligne['editeurs']; ?></dd>
								</dl>
								<dl>
									<dt>Année de publication :</dt>
									<dd><?php echo $ligne['annee']; ?></dd>
								</dl>
								<dl>
									<dt>ISBN :</dt>
									<dd><?php echo $ligne['isbn']; ?></dd>
								</dl>
							</div>
						</a>
						<div class="renouvel">
							<table>
								<tr>
									<th style="background-color: black; color:white;">Temps restant :</th>
									<?php if ($interval->format('%a') <= 3) { ?>
										<td style="color: red;"><?php echo $interval->format('%a ') . 'jours'; ?></td>
									<?php }else{ ?>
									<td><?php echo $interval->format('%a ') . 'jours'; ?></td>
									<?php } ?>
								</tr>
							</table>						
							<p>Vous avez jusqu'au <b><?php echo $datefmt->format($date1); ?></b> pour lire votre livre</p>												
						</div>
					</div>
				<?php } ?>
			<?php } ?>
			</div>
		</div>
	</div>
</div>
</main>
<?php require "../Footer/footer.php"; ?>

