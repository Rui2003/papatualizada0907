<?php

$con=new mysqli("localhost", "root", "", "papatualizada");

    if($con->connect_errno!=0){
        echo "Ocorreu um erro no acesso à base de dados " . $con->connect_error;
        exit;
    }

    //falta validação do login e inicio da sessão 


?>


<!DOCTYPE html>
<body bgcolor="black">
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="style.css" />
   <link rel="stylesheet" type="styles2.css" href="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="magicslideshow/magicslideshow.css"/>

<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="style.css">


<style>



* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px; 
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

.slideshow-container {
  max-width: 100% !important;
    background-color: #000;
}
</style>
</head>


<!--NavBar -->

      
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.html">DJ Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.php">Sobre Nos</a>
            </li>
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DJ
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <?php

            $stm = $con->prepare ('SELECT * FROM subcategorias WHERE idcategoria= 1');
            $stm->execute();
            $res=$stm->get_result();
 
            while($resultado = $res->fetch_assoc()) {
               echo '<a href="produtos.php?subcat='.$resultado['idsubcat'].'">'.$resultado['subcat']."</a>";
               echo "<br>";
  
            }
            $stm->close();
            ?>
              <!--  <a href="mesas.php">Mesas de Mistura</a>
                  <a href="gd.php">Gira Discos</a><br>
                  <a href="controladoras.php">Controladoras</a>
                  <a href="headphones.php">Head Phones</a>
                  <a href="leitores.php">Leitores[XDJ & CDJ]</a>
                -->
              </div>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Estudio
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                 <?php

            $stm = $con->prepare ('SELECT * FROM subcategorias WHERE idcategoria= 2');
            $stm->execute();
            $res=$stm->get_result();
 
            while($resultado = $res->fetch_assoc()) {
                echo '<a href="produtos.php?subcat='.$resultado['idsubcat'].'">'.$resultado['subcat']."</a>";
               echo "<br>";
  
            }

            $stm->close();
            ?>
<!--
                  <a href="monitores.html">Monitores de Estudio</a>
                  <a href="samplers.html">Samplers & Efeitos</a>
                  <a href="sintetizadores.html">Sintetizadores</a>
                  <a href="teclados.html">Teclados</a>
                  <a href="controladores.html">Controladores MIDI</a>
                -->
              </div>
            </li>
             
            </li>
            <li><a href="cursos.php">Cursos</a></li>
          </ul>
        </div>

         <ul class="nav navbar-nav navbar-right">
      <li><a href="registar.php"><span class="glyphicon glyphicon-user"></span> Registar</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
    </ul>
      </nav>
<!--NavBar fim -->


<br>

<p>







  <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h3>Onde Estamos</h3>
            </div>
          </div>
          <div class="col-md-8">


            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2994.5685883103515!2d-8.404358584711206!3d41.36172987926659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd24f40f1e92d5ef%3A0x64490ccdc607362e!2sEscola%20Secund%C3%A1ria%20Dom%20Afonso%20Henriques!5e0!3m2!1spt-PT!2spt!4v1620996334358!5m2!1spt-PT!2spt" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
              <p>
                
                  
              <br>
              <p>
              
              <div class="col-sm-5" style="margin-top:81px; padding-left:20px; font-size:15px"> <span style="font-size: 19px;font-weight: 400;line-height: 22px;color: #3b3b53;font-weight: bold;letter-spacing: 0.8px;"> MORADA</span> <div style="height: 10px"></div><i class="fa fa-home" style="color: #e57a12;font-size: 19px;     margin-top: 2px;   float: left;
    margin-right: 25px; margin-bottom: 50px"></i>DJ Store<br>R. Dom Afonso Henriques, nº11<br>  4795-058 Vila das Aves <br>Portugal
<br><br><br>
<span style="font-size: 19px;font-weight: 400;line-height: 22px;color: #3b3b53;font-weight: bold;letter-spacing: 0.8px;"> HORÁRIO</span><div style="height: 10px"></div><i class="fa fa-clock-o" style="color: #e57a12;font-size: 19px;    float: left;
    margin-right: 25px; margin-bottom: 50px;    margin-top: 2px;"></i> 09h30–18h30
(Segunda a Sexta)
<br> 09h30–13h00
(Sábado)
<br><br><br>
<span style="font-size: 19px;font-weight: 400;line-height: 22px;color: #3b3b53;font-weight: bold;letter-spacing: 0.8px;"> TELEFONE</span> <div style="height: 10px"></div><i class="fa fa-phone" style="color: #e57a12;font-size: 19px;    float: left;    margin-top: 2px;
    margin-right: 25px;"></i> 252 272 094<br><br><br><span style="font-size: 19px;font-weight: 400;line-height: 22px;color: #3b3b53;font-weight: bold;letter-spacing: 0.8px;"> EMAIL</span><div style="height: 10px"></div><i class="fa fa-envelope" style="color: #e57a12;font-size: 19px;     margin-top: 2px;   float: left;
    margin-right: 25px;"></i> <a href="mailto:djstore@gmail.com">djstore@gmail.com</a><br><br><br>
</div>
<p>
  <p><br>










<div class="col-md-12"><h5 class="hlimpo" style="font-size: 30px; ">Quem Somos?</h5><div class="clear15" style="margin-top: 50px;"></div>
<div style="float:right; margin-left:20px; text-align:center">

<br>

</div>Criada a 07 de Abril de 2021 em Vila Das Aves, a DJ Store é um site que se dedica á exposição de Produtos para DJ's e Produtores <br>
Fundada por Rui Abreu Esta ideia surgiu pelo facto do nosso Projeto Final de Aptidão Profissional e pelo gosto sobre toda a área que abordamos neste web site. Nesta loja também disponibilizamos toda a informação sobre as características de um determinado produto e o seu respetivo Preço. <p></p>
<p>
Também temos os nossos cursos de Formação para as pessoas que quiserem aprender mais sobre a área de DJ e Produtor Musical.
<p>
<p>Os nossos produtos  são das maiores marcas como a Pioneer DJ, Allen & Heath, Roland, AKG, Native Instruments, Numark, Magma e muitas mais.
</p>
</div>
<img src="fotos/djstore.jpg">






































            </div>
          </div>


  <br>















<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="magicslideshow/magicslideshow.js" type="text/javascript"></script>
</body>
</html>


