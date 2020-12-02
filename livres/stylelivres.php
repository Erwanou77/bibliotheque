<style type="text/css">
.livres{
	background: url("../img/parchemin_fond.jpg");
	background-size: 100%;
	padding: 200px 0 70px 0;
	max-width: 1600px;
	margin: 0 auto;
}
.retour p{
	text-align: center;
	font-size: 15px;
	background: white;
	width: 350px;
	padding: 20px 0;
	border-radius: 0 20px 20px 0;
}
.retour p a{
	color: black;
	font-size: 20px;
	text-decoration: underline;
}
.all{
	background: white;
	border-radius: 10px;
	width: 90%;	
	margin: 40px auto 0 auto;
	padding: 20px 0;
}
.centrage{
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding-bottom: 20px;
	border-bottom: 4px solid #f2f2f2; 
}
.centrage img{
	transition: .3s;
}
.centrage img:hover{
	transform: scale(1.1);
	transition: .3s;
}
.tableau{
	margin: 0 auto;
	width: 40%;
}
.tableau h2{
	text-transform: uppercase;
	text-align: center; 
	padding-bottom: 20px;
}
dl{
	display: flex;
	justify-content: space-between;
	flex-direction: row;
	padding-top: 20px;
	border-bottom: 2px solid #f2f2f2; 
}
.tableau dl a{
	color: black;
	text-decoration: underline;
}
.resume{
	width: 60%;
	margin: 0 auto;
	text-align: left;
	line-height: 25px;
}
.resume h2{
	text-align: center;
	margin: 30px 0;
}

@media screen and (max-width: 800px){
	.livres{
		padding: 300px 0 70px 0;
	}
	.centrage{
		flex-direction: column;
	}
	.tableau{
		margin-top: 40px;
		width: 80%;
	}
	.resume{
		width: 90%;
	}
}
</style>