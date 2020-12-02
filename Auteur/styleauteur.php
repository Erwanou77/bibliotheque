<style type="text/css">
.auteur{
	background: url("../img/parchemin_fond.jpg");
	background-size: 100%; 
	max-width: 1600px;
	padding: 200px 0 70px 0;
	margin: 0 auto;
}
.retour p{
	text-align: center;
	font-size: 15px;
	background: white;
	width: 350px;
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
	.auteur{
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