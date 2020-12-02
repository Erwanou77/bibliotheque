<style type="text/css">
*{
	margin: 0;
	padding: 0;
	text-decoration: none;
	outline: none;
}
h1,h2,h3,h4,h5,h6,dt{
	font-family: Bernard MT Condensed;
}
p,a,em,dd,li{
	font-family: Book Antiqua;
}
/* style du header */

.navbar{
	margin: 0 auto;
  	width: 100%;
  	background:url('https://cdn.discordapp.com/attachments/636213120087621632/778223387238858802/fond-texture-cuir-noir_123766-92.jpg')no-repeat;
  	background-size: 100%;  	
  	left: 0;
	right: 0;
  	max-width: 1600px;
	position: fixed;
  	padding: 10px 0;
  	transition: .3s;
  	z-index: 1;
}
#top {
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 2;
  font-size: 20px;
  border: none;
  transition: .5s;
  outline: none;
  background-color: white;
  color: black;
  cursor: pointer;
  padding: 15px;
  border-radius: 50%;
}
/* Position des éléments dans le header */

.navbar .max-width{
  	display: flex;
  	align-items: center;
	padding: 0 20px;
}
.navbar .resplogo{
	display: flex;
	flex-direction: row;
	align-items: center;
	width: 100%;
}
.navbar .respsearch{
	display: flex;
	flex-direction: row;
	align-items: center;
	width: 100%;
}
/* Logo du site */

.navbar img{
  	border-radius: 50%;
  	width: 150px;
  	margin: 0 40px 0 0;
  	display: flex;
}
.navbar img[alt]{
	color: white;
}
.navbar h1{
	color: white;
	text-align: center;
}

/* Barre de recherche */

.search{
	width: 100%;
	text-align: center;
}
input[type="search"]{
	padding: 20px;
	width: 80%;
	border-radius: 20px;
	height: 40px;
	border: none;
}
input[type="search"]:focus{
	box-shadow: inset 0px 0px 8px 0px #000000;
}
.fa-search{
	background: none;
	border: none;
	cursor: pointer;
	position: relative;
	left: -45px;
}
.fa-search:hover{
	transform: scale(1.5);
}

/* Bouton sticky */

.navbar .menu-btn{
	color: white;
  	font-size: 23px;
  	cursor: pointer;
}
.navbar .menu-btn i.active:before{
    content: "\f00d";
}
.navbar .menu.active{
	display: block;
}

/* Menu du site */

.navbar .menu{
	display: none;
	text-align: right;
	margin:20px 0; 
}
.navbar .menu li{
  	list-style: none;
  	display: inline-block;
}
.navbar .menu li a{
  	color: white;
	font-size:20px;
	padding: 10px 50px;
	border-right:1px solid #ddd; 
}
.navbar .menu li:last-child a{
	border: none;
}
@media screen and (max-width: 600px){
	.navbar{
		background-size: 100% 100%;
	}
	.navbar .max-width{
		justify-content: center;
		flex-direction: column;
	}
	.navbar .resplogo{
		flex-direction: column;
	}
	.navbar img{
		margin: 10px auto;
	}
	.search{
		margin: 15px 0;
	}
	.navbar .menu{
		text-align: center;
	}
	.navbar .menu li{
		display: block;
	}
	.navbar .menu li a{
		display: block;
		border: none;
		padding: 10px 0;
	}
	.navbar .menu li a:hover{
		text-decoration: underline;
	}
}
@media (min-width: 601px) and (max-width: 800px){
	.navbar{
		background-size: 100% 100%;
	}
	.navbar .max-width{
		justify-content: center;
		flex-direction: column;
	}
	.navbar .resplogo{
		flex-direction: column;
	}
	.navbar img{
		margin: 10px auto;
	}
	.search{
		margin: 15px 0;
	}
	.navbar .menu{
		text-align: center;
	}
	.navbar .menu li a{
		padding: 0 30px;
	}
}
</style>