<?php
$con=new mysqli("localhost", "root", "", "loja");

    if($con->connect_errno!=0){
        echo "Ocorreu um erro no acesso à base de dados " . $con->connect_error;
        exit;
    }

    //falta validação do login e inicio da sessão 


?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="magicslideshow/magicslideshow.css"/>

<link rel="stylesheet" type="text/css" href="nav.css">



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
</style>
</head>
<body>


<!--NavBar -->

        
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.html">MusicPlanet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.html">Sobre Nos</a>
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
               echo "<a href='produtos.php'>".$resultado['subcat']."</a>";
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
               echo "<a href='produtos.php'>".$resultado['subcat']."</a>";
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
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cursos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                 <a href="cursodjbeginner.php">Curso DJ Begginer</a>
                 <a href="cursodjmaster.php">Curso DJ Master</a>
                 <a href="produtor.html">Curso Produtor</a>
                 <a href="scratch.html">Curso Scratch</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
<!--NavBar fim -->




<div style="text-align:center">

<img src="fotos/producao.jpg" alt="teste" width="1350" height="600"><br><br>
<a href="{{route('')}}" target="blank" class="btn btn-primary">Comprar Curso</a>
<br><br>  


<h5>Todas as bases necessárias ao conhecimento e desempenho em hardwares e softwares de produção. Desde a edição digital de áudio, acústica, monição, conexões, sintese, efeitos captação de áudio, etc; até à mistura e masterização final dos teus temas. Inclui provas práticas, avaliação teórica e exame final. </h5><p><br>



<p><b>Duração do Curso:&nbsp;</b> Individual: 20h+20h (estúdio)&nbsp;&nbsp;&nbsp;&nbsp;</p>
<hr>
<body>
  <font face="Times New Roman " color="grey" size="5"> Programa </font> <br/><p>
  <p><b> 1- Teoria Geral do Áudio:</b><p>
Introdução | O que é o Som? | Processo Físico de Audição | Percepção Auditiva<p>
Características de uma forma de Onda
<hr>
<p><b>2-MIDI:</b><p>
<p>Introdução e definição de MIDI | Ligações, Portas, Canais e Mensagens<p> 
  Electronic Musical Instruments | Mistura em ambiente MIDI
 <p>
<hr>
<p><b>3-Sequenciação / Parte I:</b><p>
<p>Introdução aos Sequenciadores em Software | Desenvolvimento de um projecto musical<p>
Áudio/MIDI | Instrumentos Virtuais | Efeitos, Automatizações, Mistura<p>
 <p>
<hr>
<p><b>4-Sequenciação / Parte II:</b><p>
	<p>Definições e noções sobre a DAW | Criar e desenvolver um Projecto | Gravação MIDI<p>
		<p>Processamento de Áudio | Processamento de MIDI<p>
<hr>
<p><b>5-Mistura e Masterização:</b><p>
  <p>Introdução à Mistura e Masterização | Etapas | Mastering do Projecto Final de Curso<p>
    <p>Comunicação MIDI em mesas digitais<p>
      
  <hr>
<font face="Times New Roman " color="#4169E1 " size="5"> Equipamentos no Estúdio: </font> <br/><p>
  <p><b>4 Computadores Apple Imac 21" i5<p><b>
  <p><b>  4 Controladores Novation LaunchKey 25 SL MKII<p><b>
<p><b> 4 Interfaces Novation NIO 2/4 <p><b>
  <p><b>4 Gira discos Technics 1210 MKII<p><b>
<p><b> 2 Monitores Focal Alpha 65 | <p><b>
<p><b>4 Auscultadores AKG K99<p><b>


  <p>
<font face="Times New Roman " color="#4169E1 " size="5"> Software Sala de Formação: </font> <br/><p>
  <p><b>Ableton Live<p><b>
<p><b>Logic PRO<p><b>
  <p><b>Sound Studio<p><b>







</body>









<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="magicslideshow/magicslideshow.js" type="text/javascript"></script>
</body>
</html>