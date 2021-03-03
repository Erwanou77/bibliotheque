<?php
	require('bdd/biblioreq.php');
	require('header/header.php');
?>
<link rel="stylesheet" type="text/css" href="css/stylebiblio.css">
<main class="principal">
	<form method="POST" class="select">
		<select name="trie">
			<option value="">Trier par :</option>
			<option value="titre">Trier par titre</option>
			<option value="nom">Trier par auteur</option>
			<option value="annee">Trier par date</option>			
		</select>
		<button type="submit">Rafra&#238;chir</button>
	</form>
	<div class="container">
		<?php foreach ($pdostat as $ligne) {?>
			<?php $images = "img/couvertures/".$ligne['isbn'].".png";
				$defaut = "img/couvertures/defaut.png";
			?>
			<div class="desktop">
				<?php if ($ligne['utilisateur'] != NULL) { ?>
				<a href="livres/details.php?isbn=<?php echo $ligne['isbn'];?>">
					<div class="position reserve">
						<?php if (file_exists($images)) { ?>
						<img src="<?php echo $images ?>" alt="Image de couvertures">
						<?php }else{ ?>
						<img src="<?php echo $defaut ?>" alt="Image de couvertures">
						<?php } ?>
						<dl>
							<dt>Titre :</dt>
							<?php if (isset($_POST['trie']) && $_POST['trie'] == 'titre') {?>
								<dd style="color: red;"><?php echo $ligne['titre']; ?></dd>
							<?php }else{ ?>
							<dd><?php echo $ligne['titre']; ?></dd><?php } ?>
						</dl>
						<dl>
							<dt>Auteurs :</dt>
							<?php if (isset($_POST['trie']) && $_POST['trie'] == 'nom') {?>
								<dd style="color: red;"><?php echo $ligne['nom'] . " " . $ligne['prenom']; ?></dd>
							<?php }else{ ?>
							<dd><?php echo $ligne['nom'] . " " . $ligne['prenom']; ?></dd><?php } ?>
						</dl>
						<dl>
							<dt>Editeurs :</dt>
							<dd><?php echo $ligne['editeurs']; ?></dd>
						</dl>
						<dl>
							<dt>Année de publication :</dt>
							<?php if (isset($_POST['trie']) && $_POST['trie'] == 'annee') {?>
								<dd style="color: red;"><?php echo $ligne['annee']; ?></dd>
							<?php }else{ ?>
							<dd><?php echo $ligne['annee']; ?></dd><?php } ?>
						</dl>
						<dl>
							<dt>ISBN :</dt>
							<dd><?php echo $ligne['isbn']; ?></dd>
						</dl>
					</div>
				</a>
				<h3>Livre réservé</h3>
				<?php }else{ ?>
				<a href="livres/details.php?isbn=<?php echo $ligne['isbn'];?>">
					<div class="position">
						<?php if (file_exists($images)) { ?>
						<img src="<?php echo $images ?>" alt="Image de couvertures">
						<?php }else{ ?>
						<img src="<?php echo $defaut ?>" alt="Image de couvertures">
						<?php } ?>
						<dl>
							<dt>Titre :</dt>
							<?php if (isset($_POST['trie']) && $_POST['trie'] == 'titre') {?>
								<dd style="color: red;"><?php echo $ligne['titre']; ?></dd>
							<?php }else{ ?>
							<dd><?php echo $ligne['titre']; ?></dd><?php } ?>
						</dl>
						<dl>
							<dt>Auteurs :</dt>
							<?php if (isset($_POST['trie']) && $_POST['trie'] == 'nom') {?>
								<dd style="color: red;"><?php echo $ligne['nom'] . " " . $ligne['prenom']; ?></dd>
							<?php }else{ ?>
							<dd><?php echo $ligne['nom'] . " " . $ligne['prenom']; ?></dd><?php } ?>
						</dl>
						<dl>
							<dt>Editeurs :</dt>
							<dd><?php echo $ligne['editeurs']; ?></dd>
						</dl>
						<dl>
							<dt>Année de publication :</dt>
							<?php if (isset($_POST['trie']) && $_POST['trie'] == 'annee') {?>
								<dd style="color: red;"><?php echo $ligne['annee']; ?></dd>
							<?php }else{ ?>
							<dd><?php echo $ligne['annee']; ?></dd><?php } ?>
						</dl>
						<dl>
							<dt>ISBN :</dt>
							<dd><?php echo $ligne['isbn']; ?></dd>
						</dl>
					</div>
				</a>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</main>
<?php require ("Footer/footer.php");?>
