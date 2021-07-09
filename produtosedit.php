<?php

/*
session_start();
if (!isset($_SESSION['login'])) {
	$_SESSION['login']="incorreto";
}
if($_SESSION['login']=="correto"&& isset($_SESSION['login'])){
	//conteúdo

*/

if ($_SERVER['REQUEST_METHOD']=="GET") {
	if (isset($_GET['prod'])&& is_numeric($_GET['prod'])) {
		$id_produto=$_GET['prod'];
		$con=new mysqli("localhost","root","","papatualizada");

		if ($con->connect_errno!=0) {
				echo "<h1>Ocorreu um erro no acesso a base de dados.<br>".$connect_error."</h1>";
				exit();
		}
		$sql="Select * from produtos where idproduto=?";
		$stm=$con->prepare($sql);
		if ($stm!=false) {
				$stm->bind_param("i",$id_produto);
				$stm->execute();
				$res=$stm->get_result();
				$produto=$res->fetch_assoc();
				$stm->close();
		}
	
				  ?>
	  <!DOCTYPE html>
	  <html>
	  <head>
	  	<title>Editar Produto</title>
	  </head>
	  <body>
	  <h1>Editar Produto</h1>




	 <?php  echo ' <form action="produtosupdate.php?id='.$produto['idproduto'].'" method="post">';?>
	 <?php  echo ' <label>Marca</label><input type="text" name="marca" required value="'.$produto['marca'].'"><br>';?>
	 <?php  echo ' <label>Preco</label><input type="text" name="preco" value="'.$produto['preco'].'"><br>';?>
	 <?php  echo ' <label>Descricao</label><input type="text" name="descricao" value="'.$produto['descricao'].'"><br>';?>
	 <?php  echo ' <label>Modelo</label><input type="text" name="modelo" value="'.$produto['modelo'].'"><br>';?>
	 <?php  echo ' <label>ID Sub Categoria</label><input type="text" name="idsubcat" value="'.$produto['idsubcat'].'"><br>';?>
	 <?php  echo ' <label>Imagem</label><input type="text" name="imagem" value="'.$produto['imagem'].'"><br>';?>






	
	<input type="submit" name="enviar">
</form>


	  </body>
	  </html>
	  <?php
	}	
else{
	echo ("<h1>houve um erro ao precessar o seu pedido.<br> Dentro de segundos sera reencaminhado!</h1>");
	header("refresh:5; url=index.php");
	}
	
	}


/*}


else{
	echo "Para entrar nesta página necessita de efetuar <a href='login.php'>login</a>";
	header('refresh:2;url=login.php');
}
	
*/

?>