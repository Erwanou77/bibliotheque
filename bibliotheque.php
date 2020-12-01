<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
.bibliotheque{
	background: url("img/parchemin_fond.jpg");
		background-size: 100%; 
	max-width: 1600px;
	padding-top: 170px;
	cursor: url("img/book_close.png"), pointer;
	margin: 0 auto;
}
.container{	
	display: flex;
	flex-flow: row wrap;
	justify-content: center;
	text-align: center;
}
.desktop{
	display: flex;
	margin: 50px 20px;
	justify-content: space-between;
}
.desktop a{
	text-decoration: none;
	color: black;
}
.position{
	width: 340px;
	height: 340px;
	border-radius: 6px;
	transition: .5s;
	overflow: hidden;
}
.position:hover{
	background: white;
	cursor: url("img/livre_ouvert.png"), pointer;
}
.position img{
	width: 340px;
	height: 340px;
	transition: .5s;
}
.position:hover img{
	width: 120px;
	height: 120px;
	background: none;
	margin: 0 0 30px 0;
}

dl{
	display: flex;
	justify-content: space-between;
	padding: 0 30px;
}
dt{
	font-size: 18px;
	padding-bottom: 20px;
	font-weight: bold;
}
@media screen and (max-width: 800px){
	.bibliotheque{
		padding-top: 360px;
	}
}
</style>

</head>
<body>
	<?php require('header/header.php');?>
	<main class="bibliotheque">
		<div class="container">
			<div class="desktop">
				<a href="livres/2265096490.php">
					<div class="position">
						<img src="img/couvertures/juste_une_ombre.png" alt="Couverture du livre juste une ombre">
						<dl>
							<dt>Titre :</dt>
							<dd>Juste une ombre</dd>
						</dl>
						<dl>
							<dt>Auteurs :</dt>
							<dd>Karine Giebel</dd>
						</dl>
						<dl>
							<dt>Editeurs :</dt>
							<dd>Fleuve &#233;ditions</dd>
						</dl>
						<dl>
							<dt>Date de publication :</dt>
							<dd>08/03/2012</dd>
						</dl>
						<dl>
							<dt>ISBN :</dt>
							<dd>2265096490</dd>
						</dl>
					</div>
				</a>
			</div>
			<div class="desktop">
				<a href="livres/2266243004.php">
					<div class="position">
						<img src="img/couvertures/Maitres_du_jeu.png" alt="Couverture du livre Maitres du jeu">
						<dl>
							<dt>Titre :</dt>
							<dd>Maîtres du jeu</dd>
						</dl>
						<dl>
							<dt>Auteurs :</dt>
							<dd>Karine Giebel</dd>
						</dl>
						<dl>
							<dt>Editeurs :</dt>
							<dd>Pocket</dd>
						</dl>
						<dl>
							<dt>Date de publication :</dt>
							<dd>12/09/2013</dd>
						</dl>
						<dl>
							<dt>ISBN :</dt>
							<dd>2266243004</dd>
						</dl>
					</div>
				</a>
			</div>
			<div class="desktop">
				<a href="livres/2266258656.php">
					<div class="position">
						<img src="img/couvertures/Satan_etait_un_ange.png" alt="Couverture du livre Satan etait un ange">
						<dl>
							<dt>Titre :</dt>
							<dd>Satan &#233;tait un ange</dd>
						</dl>
						<dl>
							<dt>Auteurs :</dt>
							<dd>Karine Giebel</dd>
						</dl>
						<dl>
							<dt>Editeurs :</dt>
							<dd>Pocket</dd>
						</dl>
						<dl>
							<dt>Date de publication :</dt>
							<dd>12/11/2015</dd>
						</dl>
						<dl>
							<dt>ISBN :</dt>
							<dd>2266258656</dd>
						</dl>
					</div>
				</a>
			</div>
			<div class="desktop">
				<a href="livres/2878582853.php">
					<div class="position">
						<img src="img/couvertures/un_lieu_incertain.png" alt="Couverture du livre un lieu incertain">
						<dl>
							<dt>Titre :</dt>
							<dd>Un lieu incertain</dd>
						</dl>
						<dl>
							<dt>Auteurs :</dt>
							<dd>Fred Vargas</dd>
						</dl>
						<dl>
							<dt>Editeurs :</dt>
							<dd>Viviane hamy</dd>
						</dl>
						<dl>
							<dt>Date de publication :</dt>
							<dd>10/07/2008</dd>
						</dl>
						<dl>
							<dt>ISBN :</dt>
							<dd>2878582853</dd>
						</dl>
					</div>
				</a>
			</div>
			<div class="desktop">
				<a href="livres/2290120332.php">
					<div class="position">
						<img src="img/couvertures/Temps_glaciaires.png" alt="Couverture du livre Temps glaciaires">
						<dl>
							<dt>Titre :</dt>
							<dd>Temps glaciaires</dd>
						</dl>
						<dl>
							<dt>Auteurs :</dt>
							<dd>Fred Vargas</dd>
						</dl>
						<dl>
							<dt>Editeurs :</dt>
							<dd>J'ai Lu</dd>
						</dl>
						<dl>
							<dt>Date de publication :</dt>
							<dd>20/04/2016</dd>
						</dl>
						<dl>
							<dt>ISBN :</dt>
							<dd>2290120332</dd>
						</dl>
					</div>
				</a>
			</div>
			<div class="desktop">
				<a href="livres/2226319468.php">
					<div class="position">
						<img src="img/couvertures/Promesse.png" alt="Couverture du livre Promesse">
						<dl>
							<dt>Titre :</dt>
							<dd>Promesse</dd>
						</dl>
						<dl>
							<dt>Auteurs :</dt>
							<dd>Jussi Adler-Olsen</dd>
						</dl>
						<dl>
							<dt>Editeurs :</dt>
							<dd>Albin Michel</dd>
						</dl>
						<dl>
							<dt>Date de publication :</dt>
							<dd>04/01/2016</dd>
						</dl>
						<dl>
							<dt>ISBN :</dt>
							<dd>2226319468</dd>
						</dl>
					</div>
				</a>
			</div>
			<div class="desktop">
				<a href="livres/2253184381.php">
					<div class="position">
						<img src="img/couvertures/Delivrance.png" alt="Couverture du livre Delivrance">
						<dl>
							<dt>Titre :</dt>
							<dd>D&#233;livrance</dd>
						</dl>
						<dl>
							<dt>Auteurs :</dt>
							<dd>Jussi Adler-Olsen</dd>
						</dl>
						<dl>
							<dt>Editeurs :</dt>
							<dd>Lgf</dd>
						</dl>
						<dl>
							<dt>Date de publication :</dt>
							<dd>02/01/2015</dd>
						</dl>
						<dl>
							<dt>ISBN :</dt>
							<dd>2253184381</dd>
						</dl>
					</div>
				</a>
			</div>
			<div class="desktop">
				<a href="livres/9781786486202.php">
					<div class="position">
						<img src="img/couvertures/Victim_2117.png" alt="Couverture du livre Victim 2117">
						<dl>
							<dt>Titre :</dt>
							<dd>Victim 2117</dd>
						</dl>
						<dl>
							<dt>Auteurs :</dt>
							<dd>Jussi Adler-Olsen</dd>
						</dl>
						<dl>
							<dt>Editeurs :</dt>
							<dd>Quercus</dd>
						</dl>
						<dl>
							<dt>Date de publication :</dt>
							<dd>03/03/2020</dd>
						</dl>
						<dl>
							<dt>ISBN :</dt>
							<dd>9781786486202</dd>
						</dl>
					</div>
				</a>
			</div>
			<div class="desktop">
				<a href="livres/2266283782.php">
					<div class="position">
						<img src="img/couvertures/Nuit.png" alt="Couverture du livre Nuit">
						<dl>
							<dt>Titre :</dt>
							<dd>Nuit</dd>
						</dl>
						<dl>
							<dt>Auteurs :</dt>
							<dd>Bernard Minier</dd>
						</dl>
						<dl>
							<dt>Editeurs :</dt>
							<dd>Pocket</dd>
						</dl>
						<dl>
							<dt>Date de publication :</dt>
							<dd>08/02/2018</dd>
						</dl>
						<dl>
							<dt>ISBN :</dt>
							<dd>2266283782</dd>
						</dl>
					</div>
				</a>
			</div>
			<div class="desktop">
				<a href="livres/2374481905.php">
					<div class="position">
						<img src="img/couvertures/La_Vallee.png" alt="Couverture du livre La vallee">
						<dl>
							<dt>Titre :</dt>
							<dd>La Vall&#233;e</dd>
						</dl>
						<dl>
							<dt>Auteurs :</dt>
							<dd>Bernard Minier</dd>
						</dl>
						<dl>
							<dt>Editeurs :</dt>
							<dd>Xo</dd>
						</dl>
						<dl>
							<dt>Date de publication :</dt>
							<dd>20/05/2020</dd>
						</dl>
						<dl>
							<dt>ISBN :</dt>
							<dd>2374481905</dd>
						</dl>
					</div>
				</a>
			</div>
		</div>
	</main>
	<?php require ("Footer/footer.php");?>
</body>
</html>

