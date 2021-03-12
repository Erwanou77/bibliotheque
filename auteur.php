<?php
	require('bdd/listautreq.php');
	require('header/header.php');
	require("bbcode.php");
?>
<link rel="stylesheet" type="text/css" href="css/auteurstyle.css">
<main class="principal">
	<?php foreach ($pdostate as $ligne) {?>
	<?php 
	$datefmt = new IntlDateFormatter('fr_FR', NULL, NULL, NULL, NULL, 'dd MMMM yyyy');
	$date1 = date_create($ligne['date_naiss']);
	$images = "img/Auteurs/".$ligne['id'].".jpg";?>
	<div class="position">
		<a href="Auteur/autlist.php?id=<?php echo $ligne['id'];?>">
			<div class="centre">
				<img src="<?php echo $images; ?>" alt="Portrait <?php echo bbcode(htmlspecialchars($ligne['nom'])) . " " . bbcode(htmlspecialchars($ligne['prenom']));?>">
				<div class="texte">
					<h1>Informations sur l'auteur</h1>
					<h2><?php echo bbcode(htmlspecialchars($ligne['nom'])) . " " . bbcode(htmlspecialchars($ligne['prenom']));?></h2>
					<h4><?php if($ligne['date_naiss'] != NULL) echo bbcode(htmlspecialchars($datefmt->format($date1))); ?> <br> <?php echo bbcode(htmlspecialchars($ligne['ville_naiss'])) ?></h4>
					<p><?php echo bbcode(htmlspecialchars($ligne['genre']))?></p>
				</div>
			</div>
		</a>
	</div>
	<?php }?>
	<div class="pagination">
		<?php if($_GET['page'] > $nbPages){
			header("location:auteur.php?page=1");
		}?>
		<div class="page">
			<?php if ($page > 1):?>
				<a href="?page=<?php echo $page - 1; ?>">&#60;</a>
			<?php endif; ?>
			<?php for ($i = 1; $i <= $nbPages; $i++):?>
				<?php if ($_GET['page'] == $i) { ?>
					<a href="?page=<?php echo $i; ?>" style="color: red;"><?php echo $i; ?></a>
				<?php }else{ ?>
					<a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
				<?php } ?>
			<?php endfor; ?>
			<?php if ($page < $nbPages):?>
				<a href="?page=<?php echo $page + 1; ?>">&#62;</a>
			<?php endif; ?>
		</div>
	</div>
</main>
<?php require ("Footer/footer.php");?>