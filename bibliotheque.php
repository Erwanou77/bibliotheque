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
		<?php if (isset($_SESSION['connecter']) && $_SESSION['admin'] == 1) {?>
			<div class="desktop">
				<a href="nouveaulivre.php">
					<div class="nouveau">
						<p>+</p>
					</div>
				</a>
			</div>
		<?php }?>
		<?php foreach ($pdostat as $ligne) {?>
			<?php $images = "img/couvertures/".$ligne['isbn'].".png";?>
			<div class="desktop">
				<a href="livres/details.php?isbn=<?php echo $ligne['isbn'];?>">
					<div class="position">
						<img src="<?php echo $images ?>" alt="Image de couvertures">
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
			</div>
		<?php } ?>
	</div>
</main>
<?php require ("Footer/footer.php");?>
