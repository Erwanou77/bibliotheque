		<?php require "../users.php";
		$resliste = $pdostat->fetchALL();
		$datefmt = new IntlDateFormatter('fr_FR', NULL, NULL, NULL, NULL, 'dd MMMM yyyy');
		?>
		<div class="droit">
			<h1>Liste des livres réservés :</h1>					
			<div class="container">
				<?php if (empty($resliste)) {?>
					<h1>Il n'y a aucun livre de réservé</h1>
				<?php }else{ ?>
				<?php foreach ($resliste as $ligne) {?>
				<?php
					$date1 = date_create($ligne['date_retour']);
					$date2 = date_create(date('d-m-Y'));	
					$interval = date_diff($date2,$date1);
					$renouvel = 1;
					$retour = date('Y-m-d',strtotime($ligne['date_retour'] . '+15days'));
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
							<p><?php echo $retour; ?></p>
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
							<hr>
							<label>Appuyez sur <b>Envoyer</b> pour effectuer votre unique renouvellement de 15 jours<br></label>
							<form method="POST">
								<input type="submit" name="submit">
							</form>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
			<?php
			if (isset($_POST['submit'])) {
			require'../bdd/config.php';			
	        $select=$bdd->prepare("UPDATE livre SET date_retour = :retour, renouvellement = :renouvel WHERE isbn=".$ligne['isbn']);
	        $select->bindParam(':retour', $retour);
	        $select->bindParam(':renouvel', $renouvel);
			$select->execute();
		}?>
			</div>
		</div>
	</div>
</div>
</main>
<?php require "../Footer/footer.php"; ?>

