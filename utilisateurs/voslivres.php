		<?php require "../users.php";
		$resliste = $pdostat->fetchALL();
		$datefmt = new IntlDateFormatter('fr_FR', NULL, NULL, NULL, NULL, 'dd MMMM yyyy');
		if (isset($_POST['submit'])) {
			$renouvel = stripslashes(htmlspecialchars($_POST['renouvel']));
			$reslistes = $pdostat->fetch();			
			$renouvelle = 1;		
	        $select=$bdd->prepare("UPDATE livre SET date_retour = :retour, renouvellement = :renouvel WHERE isbn=".$renouvel);
	        $select->bindParam(':retour', $retour);
	        $select->bindParam(':renouvel', $renouvelle);
			$select->execute();
		}
		?>
		<div class="droit">
			<h1>Liste des livres réservés :</h1>			
			<form method="POST">
				<select name="renouvel">
				<?php 
					foreach ($resliste as $ligne) {						
						if ($ligne['renouvellement'] == 0) {?>
					<option value="<?php echo $ligne['isbn']; ?>"><?php echo $ligne['titre']; ?></option>
					<?php } ?>
				<?php } ?>
				</select>
				<input type="submit" name="submit">
			</form>				
			<div class="container">
				<?php if (empty($resliste)) {?>
					<h1>Il n'y a aucun livre de réservé</h1>
				<?php }else{ ?>
				<?php foreach ($resliste as $ligne) {?>
				<?php
					$date1 = date_create($ligne['date_retour']);
					$date2 = date_create(date('d-m-Y'));
					$retour = date('Y-m-d',strtotime($ligne['date_retour'] . '+15days'));
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

