    <?php
$idproduto=$_GET['produto'];

$con=new mysqli("localhost", "root", "", "papatualizada");

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
<link rel="stylesheet" type="text/css" href="style.css">


<style>



* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0;color: black}
.col-md-6 {font-weight: 900}
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
               echo "<a href='produtos.php?subcat=".$resultado['idsubcat']."'>".$resultado['subcat']."</a>";
               echo "<br>";
  
            }
            $stm->close();
            ?>
            
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
                echo "<a href='produtos.php?subcat=".$resultado['idsubcat']."'>".$resultado['subcat']."</a>";
               echo "<br>";
  
            }
             $stm->close();
            ?>
            <!--
                  <a href="monitores.html">Monitores de Estudio</a><br>
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
                 <a href="beginner.html">Curso DJ Begginer</a>
                 <a href="master.html">Curso DJ Master</a>
                 <a href="produtor.html">Curso Produtor</a>
                 <a href="scratch.html">Curso Scratch</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
<!--NavBar fim -->


<br>


 <?php

            $stm = $con->prepare ('SELECT * FROM produtos WHERE idproduto= ?');
            $stm->bind_param('i',$idproduto);
            $stm->execute();
            $res=$stm->get_result();
 
 ?>
 <div class="container">
    <div class="row">
      <div class="col-md-12"><h5 align="center"><b>
        
      </b></h5></div>
          
        
      <br>
      <br>
  </div>
      <div class="row">   
        <?php
            while($resultado1 = $res->fetch_assoc()) {
            ?>
            

<div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
              <?php
              echo '<a href="#"><img src="fotos/'.$resultado1['imagem'].'" class="img-fluid"/>';
              ?>

              </a>

                  </div>


  

<div class="col-md-6"> 
 <a href="#"> 
  <h5><?php echo $resultado1['marca']?></a></h5>
                
                 <h5><b> <?php echo $resultado1['modelo']?></b></h5>
                <h5><?php echo $resultado1['preco']?>€</h5><br><br>
<h5><?php echo $resultado1['caracteristicas']?></h5>


</div>

              <div class="card-body">
                <h4 class="card-title">

                 </h4>
                <?php echo $resultado1['video']?><p><br>

              <h5><li><b>Descrição do Produto</b><p><p></h5>
               <span class="txtc2"><?php echo $resultado1['caracteristicas2']?></span>
               <div class="row">
                
</div>




  





              </div>
              
            </div>
      
          
        </div>  
      <?php


  
            }
            $stm->close();
            ?>
     <!--   <div class="col-md-3 col-sm-6">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/djm.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6><b>DJM 750 MK2</b></h6>
                <h5>1049€</h5>
             <p class="card-text"><b>Mesa de mistura Profissional de 4 canais<br><br>
Processador de sinal digital de : 96kHz/64-bit com qualidade de estudio<br><br>
14 efeitos integrados por canal e frequencias / Equalizacao de 3 bandas<br><br>
Software Rekordbox DJ incluido</b></p>

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>  
        




         <div class="col-md-3 col-sm-6">
            

              
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/96.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Allen & Heath</a>
                </h4>
                 <h6><b>XONE 96</b></h6>
                <h5>1528€</h5>

               <p class="card-text"><b>Mesa Mistura DJ 6 + 2 canais<br><br>
Interface USB dual 32 bit (24 canais @ 96 kHz)<br><br>
Filtros Xone VCF c/CRUNCH distrocao harmonica<br><br>
2 CUE independentes, Certificacao Traktor</b><br>

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">


          
              </div>
            </div>
        </div>  





 <div class="col-md-3 col-sm-6">
            

              
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/rmx90.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Reloop</a>
                </h4>
                 <h6><b>RMX90</b></h6>
                <h5>799€</h5>
               <p class="card-text"><b>Mesa de Mistura de 4+1 canal<br><br>
Mixer preparado para Serato Pro<br><br>
Processador de efeitos com 12 efeitos incluidos<br><br>
Placa de som incorporada</b></p><br>

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
             
                
              </div>
            </div>
        </div>  




 <div class="col-md-3 col-sm-6">
            

              
              <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/m2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Numark</a>
                </h4>
                 <h6>M2</h6>
                <h5>107.0€</h5>
             <p class="card-text"><b>Mesa de mistura Scratch DJ<br><br>
Processamento audio a 24bit<br><br>
2x input phono/line<br><br>
EQ de 3 bandas</b></p>

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>    




 <div class="col-md-3 col-sm-6">
            

              
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/denon1850.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Denon </a>
                </h4>
                 <h6>X1850 Prime</h6>
                <h5>1199.00€</h5>
                <p class="card-text"><b>Mesa de mistura pro 4 canais<br><br>
24 bits / 96kHz para qualidade de audio<br><br>
16 BPM FX de nivel profissional<br><br>
Hub de LAN de 5 portas para conectividade de rede</b><p>

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  



<div class="col-md-3 col-sm-6">
            

    <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/xone92.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Allen & Heath</a>
                </h4>
                 <h6>Xone 92</h6>
                <h5>1125.00€</h5>
                <p class="card-text"><b>Mesa de mistura profissional<br><br>
4phono/line, 2mono/mic ins<br><br>
LFO p/ modulacao de filtros<br><br>
EQ de 4 bandas</b></p>

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  




<div class="col-md-3 col-sm-6">
            

              
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/djm350.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer </a>
                </h4>
                 <h6>DJM 350</h6>
                <h5>499.00€</h5>
                <p class="card-text"><b>Mesa de mistura Profissional de 2 canais<br><br>
Processador de sinal digital de : 48kHz/24-bit <br><br>
4 efeitos integrados / Equalização de 3 bandas<br><br>
Gravação directa para um dispositivo USB com possibilidade de adição de marcadores<br><br>
Canal Extra : MIC/AUX</b><br>

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  


<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/djmv10.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>DJM V10</h6>
                <h5>2925.00€</h5>
            <p class="card-text"><b>Mesa de mistura DJ PRO 6 canais<br><br>
Processamento de mistura de 64-bit com qualidade de estudio, conversores de alta qualidade de 32-bit A/D e D/A.<br><br>
Equalizador De 4 Bandas E Compressor<br><br>
A secção expandida Send/Return permite-lhe adicionar FX externos ou ate combina-los com FX integrados.</b></p>

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>  




<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/m4.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Numark</a>
                </h4>
                 <h6>M4 </h6>
                <h5>170.00€</h5>
               <p class="card-text"><b>Mesa Mistura DJ c/ 3 Canais<br><br>
Inputs: 2 Phono/Line, 4 Line, 1 Mic<br><br>
Outputs: Master (RCA), Phones<br><br>
EQ 3 Bandas c/ Kill + Gain p/Canal
Crossfader Substituível</b></p>

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>  





<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/s7.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>DJM S7</h6>
                <h5>1400.00€</h5>
                <p class="card-text"><b>Mesa de Mistura 2 Canais DJ / Scratching<br><br>
Magvel Fader Pro aperfeiçoado<br><br>
8 pads ful RGB /Entrada audio via Bluetooth<br><br>
Compativbel com Serato DJ PRO e Rekordbox</b>

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

    </div>
</div>
   </div>  


   <div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/4d.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Allen & Heath</a>
                </h4>
                 <h6>Xone:4D</h6>
                <h5>1780.00€</h5>
                <p class="card-text"><b>Mixer/Controlador/Interface<br><br>
4 Canais Multi-Input Stereo<br><br>
20 Canais Áudio (USB)<br><br></b>

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

    </div>
</div>
   </div>  


<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/33i.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Reloop</a>
                </h4>
                 <h6>RMX 33i</h6>
                <h5>299.00€</h5>
                <p class="card-text"><b>Mixer de 3+1 canal<br><br>
Arquitetura totalmente digital para um som excelente<br><br>
iPad áudio / tablet / smartphones split-entrada<br><br></b>

              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

    </div>
</div>
   </div>  



-->




































<ul class="pagination">
                            















<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="magicslideshow/magicslideshow.js" type="text/javascript"></script>
</body>
</html>