<?php
	require('bdd/biblioreq.php');
	require('header/header.php');
?>
<link rel="stylesheet" type="text/css" href="css/stylebiblio.css">
<main class="principal">
	<form method="POST" class="select">
		<select name="trie">
			<option value="">Trier par :</option>
			<option value="annee">Trier par date</option>
			<option value="nom">Trier par auteur</option>
		</select>
		<button type="submit">Rafra&#238;chir</button>
	</form>
	<div class="container">
		<?php foreach ($pdostat as $ligne) {?>
			<?php $images = "img/couvertures/".$ligne['isbn'].".png";?>
			<div class="desktop">
				<a href="livres/details.php?isbn=<?php echo $ligne['isbn'];?>">
					<div class="position">
						<img src="<?php echo $images ?>" alt="Image de couvertures">
						<dl>
							<dt>Titre :</dt>
							<dd><?php echo $ligne['titre']; ?></dd>
						</dl>
						<dl>
							<dt>Auteurs :</dt>
							<dd>
								<?php echo $ligne['nom'] . " " . $ligne['prenom']; ?>
							</dd>
						</dl>
						<dl>
							<dt>Editeurs :</dt>
							<dd><?php echo $ligne['editeur']; ?></dd>
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
			</div>
		<?php } ?>
	</div>
</main>
<?php require ("Footer/footer.php");?>
