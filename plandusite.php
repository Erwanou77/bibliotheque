<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
.plandusite{
	background: url("img/parchemin_fond.jpg");
	background-size: 100%; 
	max-width: 1600px;
	padding: 200px 0 70px 0;
}
.position{
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}
.position h1{
	margin-bottom: 20px;
}
.position ul{
	text-decoration: none;
	list-style: none;
}
.position ul li a{
	color: black;
	font-size: 20px;
}
.position ul ul{
	line-height: 35px;
	margin-left: 40px;
}
.position ul ul ul{
	margin-left: 40px;
}
@media screen and (max-width: 800px){
	.plandusite{
		padding: 300px 0 70px 0;
	}
}
</style>

</head>
<body>
<?php require('header/header.php');?>
<main class="plandusite">
	<div class="position">
		<h1>Plan du site : </h1>
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="auteur.php">Auteurs</a>
				<ul>
					<li><a href="#"><span>&gt;</span> Karine Gi&#233;bel</a></li>
					<li><a href="#"><span>&gt;</span> Fred Vargas</a></li>
					<li><a href="#"><span>&gt;</span> Jussi Adler-Olsen</a></li>
					<li><a href="#"><span>&gt;</span> Bernard Minier</a></li>
				</ul>
			</li>
			<li><a href="bibliotheque.php">Biblioth&#232;que</a>
				<ul>
					<li><a href="livres/2265096490.php"><span>&gt;</span> Juste une Ombre</a></li>
					<li><a href="livres/2266243004.php"><span>&gt;</span> Maîtres du jeu</a></li>
					<li><a href="livres/2266258656.php"><span>&gt;</span> Satan &#233;tait un ange</a></li>
					<li><a href="livres/2878582853.php"><span>&gt;</span> Un lieu incertain</a></li>
					<li><a href="livres/2290120332.php"><span>&gt;</span> Temps glaciaires</a></li>
					<li><a href="livres/2226319468.php"><span>&gt;</span> Promesse</a></li>
					<li><a href="livres/2253184381.php"><span>&gt;</span> D&#233;livrance</a></li>
					<li><a href="livres/9781786486202.php"><span>&gt;</span> Victim 2117</a></li>
					<li><a href="livres/2266283782.php"><span>&gt;</span> Nuit</a></li>
					<li><a href="livres/2374481905.php"><span>&gt;</span> La Vall&#233;e</a></li>
				</ul>
			</li>
		</ul>
	</div>
</main>
<?php require ("Footer/footer.php");?>
</body>
</html>