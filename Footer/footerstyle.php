<style type="text/css">
*{
	margin: 0;
	padding:0;
}
footer{
	background:url('https://cdn.discordapp.com/attachments/636213120087621632/778223387238858802/fond-texture-cuir-noir_123766-92.jpg')no-repeat;
	background-size: 100%;
	width: 100%;
	display: flex;
	justify-content: space-around;
	max-width: 1600px;
	margin: 0 auto;
}
.contact{
	display: flex;
	flex-direction: column;
	text-align: center;
}
.contact h3{
	color: white;
	text-align: center;
	padding-bottom: 10px;
}
.contact h4{
	color: white;
	padding-top: 10px;
}
.contact a,h5{
	margin: 10px auto;
	color: white;
	font-size: 18px;
}
.contact a:hover{
	text-decoration: underline;
}
@media screen and (max-width: 800px) {
	footer{
		flex-direction: column;
		background-size: 100% 100%; 
	}
	.contact{
		padding: 30px 0;
	}
}
</style>