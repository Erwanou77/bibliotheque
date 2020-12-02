<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
*{
    margin : 0;
    padding : 0;
}
.accueil{
    background : url("img/parchemin_fond.jpg") no-repeat;
    background-size : 100%;
    max-width: 1600px;
    padding: 200px 0 70px 0;
    margin: 0 auto;
}
.index{
    display :flex;
    align-items : center;
    width : 100%;
    justify-content : space-around;
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
</head>
<body>
    <?php include('header/header.php');?>
        <main class="accueil">
            <div class="index">
                <div class="style">
                    <h1>What is "The Unknown Authors Library" ?</h1>
                    <p>
                        Sed (saepe enim redeo ad Scipionem, cuius omnis sermo erat de
                        amicitia) querebatur, quod omnibus in rebus homines diligentiores
                        essent; capras et oves quot quisque haberet, dicere posse, amicos
                        quot haberet, non posse dicere et in illis quidem parandis adhibere
                        curam, in amicis eligendis neglegentis esse nec habere quasi signa
                        quaedam et notas, quibus eos qui ad amicitias essent idonei,
                        iudicarent.Sed (saepe enim redeo ad Scipionem, cuius omnis sermo
                        erat de amicitia) querebatur, quod omnibus in rebus homines
                        diligentiores essent; capras et oves quot quisque haberet
                    </p>
                </div>
                <div class="img">
                    <img src="img/fond.jpg" width="100%" />
                </div>
            </div>
        </main>
    <?php include('Footer/footer.php');?>
</body>
</html>
