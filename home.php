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
        <a class="navbar-brand" href="home.php">DJ Store</a>
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
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Registar</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
    </ul>
      </nav>
<!--NavBar fim -->


<br>



<div class="container-fluid">
<div class="row">
<div class="col-md-12">

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="fotos/ericaboxx.jpg" style="width:35%">
  <div class="text">Erica Synths III</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="fotos/krk.png" style="width:35%">
  <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
      <img src="fotos/tr8s.jpg" style="width:35%">
  <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
 
      <img src="fotos/xz.jpg" style="width:35%">
  <div class="text"></div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>
</div>
</div>
</div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
  setInterval(plusSlides, 2000, 1); // call plusSlider, with 1 as parameter

</script>

<!--Galeria fim -->
<!--
<div class="MagicSlideshow" data-options="autoplay: true;">
    <img src="img/adam1.jpg"/>
    <img src="img/korg.jpg"/>
    <img src="img/x10.jpg"/>
</div>
-->

<br>
<br>
<br>

<!--Cards-->
<h5 align="center"><b>Produtos em Destaque</b></h5>

<br>



<br>



<!--Nao apagar-->
        <div class="row">
<!--Cards item -->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="fotos/dreadbox.jpg" alt=""></a>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#">Dreadbox</a>
                </h55>
                 <h5>Hypnosis</h5>
                <h5>489.0€</h5>  
                

              </div>
             <a href="http://localhost/produtosshow.php?produto=209" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
            
              </div>
            </div>
          </div>
<!--Cards item-->
          <div class="col-lg-3  col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="fotos/hd25.jpg" alt=""></a>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#">Sennheiser</a>
                </h5>
                 <h5>HD-25</h5>
                <h5>149.0€</h5>
                
<br>
<br>
<br>

</p>
              </div>
              <a href="http://localhost/produtosshow.php?produto=145" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

              </div>
            </div>
          </div>
<!--Cards item-->
          <div class="col-lg-3  col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="fotos/nimk2.jpg" alt=""></a>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#">Native Instruments</a>
                </h5>
                 <h5>Komplete Kontrol S49 MKII</h5>
                <h5>444.99€</h5>
 
<br>
<br>

</p>
              </div>
              <a href="http://localhost/produtosshow.php?produto=183" target="blank" class="btn btn-primary">Saber Mais</a>

              <div class="card-footer">
          
              </div>
            </div>
          </div>
<!--Cards item-->
          <div class="col-lg-3  col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="fotos/xz.jpg" alt=""></a>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#">Pioneer</a>
                </h5>
                 <h5>XDJ-XZ</h5>
                <h5>1999.00€</h5>
         
<br>
<br>

  </p>
  </div>
  <a href="http://localhost/produtosshow.php?produto=170" target="blank" class="btn btn-primary">Saber Mais</a>

              <div class="card-footer">


 
            
            
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->
<!--cards fim -->







<html lang="en">
  <head>
    <meta charset="UTF-8" />
      <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DJ Store</title>
  </head>
  <body>
    


<main>
 
      <section class="section parallax bg2">
         <h2>Queres tornar-te DJ/Produtor(a)?</h2>
      </section>
       <a class="btn btn-lg btn-primary" href="cursos.php">Cursos</a>
   </main>








  </body>
</html>





<img align="center" src="fotos/marcas.jpg">







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="magicslideshow/magicslideshow.js" type="text/javascript"></script>
</body>
</html>




