<!DOCTYPE html>
<html>
<head>
	<title>The Unknown Authors Library</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" type="text/css" href="/bibliotheque/css/headerstyle.css">
	<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link rel="shortcut icon" href="/bibliotheque/img/logo1.ico" type="image/x-icon">
</head>
<body>
<header>
	<button onclick="window.scrollTo({top: 0, behavior: 'smooth'});" id="top"><i class="fas fa-arrow-alt-circle-up"></i></button>
	<nav class="navbar" id="navbar">
			<div class="max-width">
			<div class="resplogo">
				<img src="/bibliotheque/img/logo1.png" alt="Logo du site">
				<h1>The Unknown Authors Library</h1>
			</div>
			<div class="respsearch">
				<form method="POST" class="search">
					<input type="search" placeholder="Recherchez...">
					<button type="submit" class="fas fa-search" name="submit"></button>
				</form>
				<div class="menu-btn">
  					<i class="fas fa-bars"></i>
				</div>
			</div>
		</div>
		<ul class="menu">
			<li><a href="/bibliotheque/index.php">Accueil</a></li>
			<li><a href="/bibliotheque/auteur.php">Auteurs</a></li>
			<li><a href="/bibliotheque/bibliotheque.php">Biblioth&#232;que</a></li>
			<li><a href="/bibliotheque/contact.php">Contact</a></li>
		</ul>
	</nav>
	<script type="text/javascript">
		var haut = document.getElementById("top");
		var avposcourant = window.pageYOffset;
		window.onscroll = function() {
			if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    			haut.style.display = "block";
  			} else {
    			haut.style.display = "none";
  			}
			var poscourant = window.pageYOffset;
  			if (avposcourant > poscourant) {
    			document.getElementById("navbar").style.top = "0";
  			} else {
    			document.getElementById("navbar").style.top = "-170px";
  			}
  			avposcourant = poscourant;
		}
		$(document).ready(function() {
		$('.menu-btn').click(function() {
      		$('.navbar .menu').toggleClass("active");
      		$('.menu-btn i').toggleClass("active");
    		});
  		});
	</script>
</header>