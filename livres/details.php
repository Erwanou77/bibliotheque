<?php
require"../bdd/detailslivres.php";
include("../bbcode.php");
require("../header/header.php")?>
<link rel="stylesheet" type="text/css" href="../css/stylelivres.css">
<section class="principal">
	<?php foreach ($pdostat as $ligne) {?>
	<?php $images = "../img/couvertures/".$ligne['isbn'].".png";?>
	<div class="retour">
		<p><a href="../bibliotheque.php">Biblioth&#232;que&nbsp;</a><span>&gt;</span>&nbsp;<?php echo htmlspecialchars($ligne['titre']); ?></p>
	</div>
	<div class="all">
		<div class="centrage">
			<img src="<?php echo htmlspecialchars($images); ?>" alt="Couverture du livre">
			<div class="tableau">
				<h2>Caract&#233;ristiques d&#233;taill&#233;es</h2>
				<dl>
					<dt>Titre :</dt>
					<dd><?php echo htmlspecialchars($ligne['titre']); ?></dd>
				</dl>
				<dl>
					<dt>Auteurs :</dt>
					<dd><?php echo htmlspecialchars($ligne['auteur']); ?></dd>
				</dl>
				<dl>
					<dt>Editeurs :</dt>
					<dd><?php echo htmlspecialchars($ligne['editeur']); ?></dd>
				</dl>
				<dl>
					<dt>Date de publication :</dt>
					<dd><?php echo htmlspecialchars($ligne['date']); ?></dd>
				</dl>
				<dl>
					<dt>ISBN :</dt>
					<dd><?php echo htmlspecialchars($ligne['isbn']); ?></dd>
				</dl>
				<dl>
					<dt>Genre :</dt>
					<dd><?php echo htmlspecialchars($ligne['genre']); ?></dd>
				</dl>
				<dl>
					<dt>Nombre de pages :</dt>
					<dd><?php echo htmlspecialchars($ligne['nbpage']); ?></dd>
				</dl>
			</div>
		</div>
		<div class="resume">
			<h2>Synopsis</h2>
			<p><?php echo bbcode(htmlspecialchars($ligne['synopsis']));?></p>
		</div>
	</div>
<?php } ?>
</section>
<?php require ("../Footer/footer.php");?>
