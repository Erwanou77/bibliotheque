<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
.karine{
	background: url("../img/parchemin_fond.jpg");
	background-size: 100%; 
	max-width: 1600px;
	padding: 200px 0 70px 0;
}
.retour p{
	text-align: center;
	font-size: 15px;
	background: white;
	width: 25%;
	border-radius: 0 20px 20px 0;
}
.retour p a{
	color: black;
	font-size: 20px;
	text-decoration: underline;
}
.position{
	background: white;
	width: 80%;
	border-radius: 10px;
	margin: 40px auto;
}
.portrait{
	border-bottom: 2px solid #f2f2f2;
	display: flex;
	align-items: center;
	padding: 40px;
	margin-bottom: 20px;
}
.portrait img{
	transition: .3s;
}
.portrait img:hover{
	transition: .3s;
	transform: scale(1.2);
}
.texte{
	margin: 0 auto;
	font-size: 20px;
}
.texte h4{
	font-weight: normal;
}
.texte h1,h2,h4,p{
	padding: 20px 0;
	text-align: center;
}
.biographie{
	padding: 0 20px 20px 20px;
	border-bottom: 2px solid #f2f2f2;
	margin-bottom: 20px; 
}
h2{
	text-align: center;
}
.bibliographie{
	padding: 0 40px;
}
.bibliographie ul{
	padding: 30px;
}
.bibliographie ul li{
	padding: 10px 0;
	line-height: 25px;
}
@media screen and (max-width: 800px){
	.karine{
		padding: 300px 0 70px 0;
	}
	.portrait{
		flex-direction: column-reverse;
	}
	.texte{
		padding-top: 20px;
	}
}
</style>
</head>
<body>
<?php require('../header/header.php');?>
<main class="karine">
	<div class="retour">
		<p><a href="../auteur.php">Auteurs&nbsp;</a><span>&gt;</span>&nbsp;Karine Gi&#233;bel</p>
	</div>
	<div class="position">
		<div class="portrait">
			<div class="texte">
				<h1>Informations sur l'auteur</h1>
				<h2>Karine Gi&#233;bel</h2>
				<h4>04 juin 1971 <br> La Seyne-sur-Mer, Var, France</h4>
				<p>Roman policier</p>
			</div>
			<img src="../img/Auteurs/karine_giebel.jpg" alt="Portrait Karine Giebel">
		</div>
		<div class="biographie">
			<h2>Biographie</h2>
			<p>Après avoir obtenu une licence de droit, Karine Giébel occupe pendant un moment des emplois variés (surveillante d’externat, pigiste et photographe pour un petit journal local, saisonnière pour un Parc National, équipière chez McDonald). Puis elle intègre la fonction publique territoriale, où elle est actuellement juriste, s'occupant des marchés publics pour une communauté d'agglomération1.<br><br>Elle publie ses deux premiers romans dans la collection « Rail noir » (éditions La Vie du Rail) en 2004 et 2006. Elle poursuit son travail d'écrivain aux éditions Fleuve noir puis Belfond.<br><br>Avec ses huit romans, elle s'est fait une place à part dans le thriller psychologique. Ses romans, souvent primés, sont traduits en neuf langues : allemand, italien, néerlandais, russe, espagnol, tchèque, polonais, vietnamien et coréen2.</p>
		</div>
		<div class="bibliographie">
			<h2>Bibliographie</h2>
			<ul>
				<li>Terminus Elicius, La Vie du rail, 2004 (réédition&nbsp;: Belfond, 2016).</li>
				<li>Meurtres pour rédemption, La Vie du rail, 2006 (réédition&nbsp;: Fleuve noir, 2010).</li>
				<li>Les Morsures de l'ombre, Fleuve noir, 2007.</li>
				<li>Chiens de sang, Fleuve noir, 2008.</li>
				<li>Jusqu'à ce que la mort nous unisse, Fleuve noir, 2009. Le téléfilm Jusqu'à ce que la mort nous unisse, qui a reçu le Grand Prix 2018 du Film francophone de télévision au Festival Polar de Cognac, a  été diffusé pour la première fois sur France 3 le 27 novembre 2018.</li>
				<li>Juste une ombre, Fleuve noir, 2012.</li>
				<li>Purgatoire des innocents, Fleuve noir, 2013.</li>
				<li>Post  Mortem, 12-21, 2013</li>
				<li>Satan était un ange, Fleuve noir, 2014.</li>
				<li>De force, Belfond, mars 2016.</li>
				<li>Toutes blessent la dernière tue, Belfond, 2018.</li>
				<li>Ce que tu as fait de moi, Belfond, 2019</li>
			</ul>
		</div>
	</div>
</main>
<?php require ("../Footer/footer.php");?>
</body>
</html>