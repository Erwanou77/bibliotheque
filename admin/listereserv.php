		<?php 	
		require"../admin.php";
		$pdostat = $bdd->query('SELECT *, editeur.libelle AS editeurs, utilisateur.nom AS noms, utilisateur.prenom AS prenoms FROM utilisateur JOIN livre ON utilisateur.idUtilisateur = livre.utilisateur JOIN editeur ON livre.editeur = editeur.id JOIN auteur ON livre.isbn = auteur.idLivre JOIN personne ON auteur.idPersonne = personne.id WHERE livre.utilisateur IS NOT NULL');
		$pdostat->setFetchMode(PDO::FETCH_ASSOC);
		$resliste = $pdostat->fetchALL();
		?>
		<div class="droit">
			<h1>Liste des livres réservés :</h1>					
			<div class="container">
				<?php if (empty($resliste)) {?>
					<h1>Il n'y a aucun livre de réservé</h1>
				<?php }else{ ?>
				<?php foreach ($resliste as $ligne) {?>
					<?php $images = "../img/couvertures/".$ligne['isbn'].".png";?>
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
						<table>
							<tr>
								<th style="background-color: black; color:white;">Réservé par :</th>
								<td><?php echo $ligne['noms'] . " " . $ligne['prenoms']; ?></td>
							</tr>
						</table>
					</div>
				<?php } ?>
			<?php } ?>
			</div>
		</div>
	</div>
</div>
</main>
<?php require "../Footer/footer.php"; ?>
