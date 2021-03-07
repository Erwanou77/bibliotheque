<?php
session_start();
$CONFIG = array("root_path"=>"/bibliotheque");
function actualiser_session(){
	if (isset($_SESSION['time'])){
		$tempsMaxSession = 360;                            
		if(($_SESSION['time'] + $tempsMaxSession) >= time())
			$_SESSION['time'] = time();
		else
			session_destroy();
	}
}
actualiser_session();
?>
<!DOCTYPE html>
<html>
<head>
	<title>OpenVia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" type="text/css" href="<?php echo $CONFIG['root_path']; ?>/css/headerstyle.css">
	<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<link rel="shortcut icon" href="<?php echo $CONFIG['root_path']; ?>/img/logo1.ico" type="image/x-icon">
	<style type="text/css">
	footer,.select button,.navbar{
		background:url('<?php echo $CONFIG['root_path']; ?>/img/fond_cuir.jpg')no-repeat;
		background-size: 100% 100%;
	}
	.principal{
		background: url("<?php echo $CONFIG['root_path']; ?>/img/parchemin_fond.jpg") no-repeat;
		background-size: 100% 100%;
	}
	</style>
</head>
<body>
<header>
	<button onclick="window.scrollTo({top: 0, behavior: 'smooth'});" id="top"><i class="fas fa-arrow-alt-circle-up"></i></button>

	<nav class="navbar" id="navbar">
		<div class="max-width">
			<div class="resplogo">
				<a href="<?php echo $CONFIG['root_path']; ?>">
					<img src="<?php echo $CONFIG['root_path']; ?>/img/logo1.png" alt="Logo du site" width="150px">
				</a>
				<h1>OpenVia</h1>
			</div>
			<div class="respsearch">
				<form method="GET" class="search">
					<input type="search" id="searchs" placeholder="Recherchez votre livre...">
					<button type="submit" class="fas fa-search" name="submit"></button>
					<div class="complet" id="resultat" style="font-size: 18px">

					</div>
				</form>
				<div class="menu-btn">
  					<i class="fas fa-bars"></i>
				</div>
			</div>
		</div>
		<ul class="menu">
			<li><a href="<?php echo $CONFIG['root_path']; ?>">Accueil</a></li>
			<li><a href="<?php echo $CONFIG['root_path']; ?>/auteur.php">Auteurs</a></li>
			<li><a href="<?php echo $CONFIG['root_path']; ?>/bibliotheque.php">Biblioth&#232;que</a></li>
			<?php 
			if (isset($_SESSION['connecter']) && $_SESSION['admin'] == 1) { ?>
				<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/nouveaulivre.php">Admin</a></li>
				<li><a href="<?php echo $CONFIG['root_path']; ?>/bdd/logout.php">Se déconnecter</a></li>
			<?php
			}elseif(isset($_SESSION['connecter']) && $_SESSION['admin'] == 0){
			?>
			<li><a href="<?php echo $CONFIG['root_path']; ?>/utilisateurs/profil.php">Votre espace</a></li>
			<li><a href="<?php echo $CONFIG['root_path']; ?>/bdd/logout.php">Se déconnecter</a></li>
		<?php }else{?>
			<li><a href="<?php echo $CONFIG['root_path']; ?>/accueil/accueil.php">Se connecter</a></li><?php } ?>
			<li><a href="<?php echo $CONFIG['root_path']; ?>/contact.php">Contact</a></li>
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
			$('#searchs').keyup(function() {
				$('#resultat').html('');
				var personne = $(this).val();
				if (personne != "") {
					$.ajax({
						type: 'GET',
						url: '<?php echo $CONFIG['root_path']; ?>/bdd/search.php',
						data:'personne=' + encodeURIComponent(personne),
						success: function(data){
							if (data != "") {
								$('#resultat').append(data);
							}else{
								document.getElementById('resultat').innerHTML = "<p>Aucun livres trouvé</p>";
							}
						}
					});
				}
			});
  		});
	</script>
</header>
