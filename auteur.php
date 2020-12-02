<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
.auteur{
	background: url("img/parchemin_fond.jpg");
	background-size: 100%; 
	max-width: 1600px;
	padding: 200px 0 70px 0;
	margin: 0 auto;
}
.position{
	background: white;
	width: 80%;
	margin: 40px auto;
}
.position a{
	color: black;
}
.centre{
	display: flex;
	align-items: center;
	padding: 20px;
}
.centre img{
	transition: .3s;
}
.centre img:hover{
	transform: scale(1.2);
	transition: .3s;
}
.texte{
	margin: 0 auto;
	font-size: 20px;
}
.texte h1{
	text-align: center;
}
.texte h4{
	font-weight: normal;
}
.texte h2,h4,p{
	padding: 20px 0;
}	
@media screen and (max-width: 800px){
	.auteur{
		padding: 300px 0 70px 0;
	}
	.centre{
		flex-direction: column;
		text-align: center;
	}
	.texte{
		padding-top: 20px;
	}
}


</style>

</head>
<body>
<?php require('header/header.php');?>
<main class="auteur">
	<div class="position">
		<a href="Auteur/karine_giebel.php">
			<div class="centre">
				<img src="img/Auteurs/karine_giebel.jpg" alt="Portrait Karine Giebel">
				<div class="texte">
					<h1>Informations sur l'auteur</h1>
					<h2>Karine Gi&#233;bel</h2>
					<h4>04 juin 1971 <br> La Seyne-sur-Mer, Var, France</h4>
					<p>Roman policier</p>
				</div>
			</div>
		</a>
	</div>
	<div class="position">
		<a href="#">
			<div class="centre">
				<img src="img/Auteurs/fred_vargas.jpg" alt="Portrait Fred Vargas">
				<div class="texte">
					<h1>Informations sur l'auteur</h1>
					<h2>Fred Vargas</h2>
					<h4>07 juin 1957<br> Paris, France</h4>
					<p>Roman policier</p>
				</div>
			</div>
		</a>
	</div>
	<div class="position">
		<a href="#">
			<div class="centre">
				<img src="img/Auteurs/jussi_adler_olsen.jpg" alt="Portrait Jussi Adler-Olsen">
				<div class="texte">
					<h1>Informations sur l'auteur</h1>
					<h2>Jussi Adler-Olsen</h2>
					<h4>02 août 1950<br> Copenhague, Danemark</h4>
					<p>Roman policier</p>
				</div>
			</div>
		</a>
	</div>
	<div class="position">
		<a href="#">
			<div class="centre">
				<img src="img/Auteurs/bernard_minier.jpg" alt="Portrait Bernard Minier">
				<div class="texte">
					<h1>Informations sur l'auteur</h1>
					<h2>Bernard Minier</h2>
					<h4>26 août 1960<br> Béziers, Hérault, France</h4>
					<p>Roman policier</p>
				</div>
			</div>
		</a>
	</div>
</main>
<?php require ("Footer/footer.php");?>
</body>
</html>