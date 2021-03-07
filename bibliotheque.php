<?php
	require('bdd/biblioreq.php');
	require('header/header.php');
?>
<link rel="stylesheet" type="text/css" href="css/stylebiblio.css">
<main class="principal">
	<form method="POST" class="select">
		<select name="trie">
			<option value="">Trier par :</option>
			<option value="titre">titre</option>
			<option value="nom">auteur</option>
			<option value="annee">date</option>
			<option value="reserv">réservation</option>		
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
				<?php if (isset($_SESSION['connecter']) && $_SESSION['admin'] == 1) { ?>
				<div class="icons">
					<a href="admin/modiflivre.php?isbn=<?php echo $ligne['isbn'];?>"><i class="fas fa-edit"></i></a>
					<a href="admin/reservation.php?isbn=<?php echo $ligne['isbn'];?>"><i class="fas fa-clock"></i></a>
					<a href=""><i class="fas fa-trash-alt"></i></a>
				</div>
				<?php } ?>
			<?php } ?>
			</div>
		<?php } ?>
	</div>
</main>
<?php require ("Footer/footer.php");?>
