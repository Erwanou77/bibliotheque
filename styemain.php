<style type="text/css">

*{
	margin : 0;
	padding : 0;
	}
	.accueil{
		padding-top: 170px;
	}
	.index{
	display :flex;
	align-items : center;
	width : 100%;
	justify-content : space-around;
	background : url("pagebg.jpg") no-repeat;
	background-size : 100%;
	}
	.index .style{
	text-align:center;
	width : 40%;
	margin: 0 auto;
	}
	.index .style h1{
	font-size : 22px;
	}
.index .img{
	display: flex;
}
@media screen and (max-width: 800px){
	.index{
		flex-direction: column-reverse;
		background-size : 100% 100%;
	}
	.index .style{
		width: 80%;
		padding: 20px 0;
	}
	.index .img{
		margin-top: 180px; 
	}
}
</style>