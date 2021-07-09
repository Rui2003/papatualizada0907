<?php 

/*session_start();
if (!isset($_SESSION['login'])) {
	$_SESSION['login']="incorreto";
}
if($_SESSION['login']=="correto"&& isset($_SESSION['login'])){
	//conteúdo
*/



if ($_SERVER['REQUEST_METHOD']=="POST") {
	$marca="";
	$preco="";
	$descricao="";
	$modelo="";
	$idsubcat="";
	$imagem="";
	$novo_nome="";

	if (isset($_POST['marca'])) {
		$marca=$_POST['marca'];
	}
	else{
		echo "<script>alert('É obrigatorio o preenchimento da marca.');</script>";
	}
	if (isset($_POST['preco'])) {
		$preco=$_POST['preco'];	
	}
	if (isset($_POST['descricao'])) {
		$descricao=$_POST['descricao'];
		
	}
	if (isset($_POST['modelo'])) {
		$modelo=$_POST['modelo'];		
	}
	if (isset($_POST['idsubcat'])) {
		$idsubcat=$_POST['idsubcat'];	
	}

	if(isset($_FILES['imagem'])){
            date_default_timezone_set('Europe/London'); //timezone local para adicional ao nome da imagem
            $ext=strtolower(substr($_FILES['imagem']['name'], -4)); //extensão da imagem
            $novo_nome=date("Y.m.d-H.i.s").$ext; //atribuir novo nome à imagem
            $dir='fotos/';
            move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$novo_nome); //upload do ficheiro
        }
        $imagem=$novo_nome;



	$con=new mysqli("localhost","root","","papatualizada");
	if ($con->connect_errno!=0) {
		echo "Ocorreu um erro no acesso á base de dados.<br>".$con->connect_erro;
		exit;
	}
	else{
		$sql='insert into produtos (marca, preco, descricao, modelo, idsubcat, imagem) values (?,?,?,?,?,?)';
		$stm=$con->prepare($sql);
		if ($stm!=false) {
			$stm->bind_param('sissis',$marca,$preco,$descricao,$modelo,$idsubcat, $imagem);
			$stm->execute();
			$stm->close();

			echo "<script>alert('Produto adicionado com sucesso')</script>";

			echo "Aguarde um momento. A reencaminhar pagina";

			header("refresh:5; url=mesas.php");
		}
		else{
			echo ($con->error);
			echo "Aguarde um momento. A reencaminhar página";
			header("refresh:5; url=mesas.php");
		} 
	} //end if
} //if
else{
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Produto</title>
</head>
<body>
<h1>Adicionar Produto</h1>
<form action="produtoscreate.php" method="post" enctype="multipart/form-data">
	<label>Marca</label><input type="text" name="marca" required><br>
	<label>Preço</label><input type="numeric" name="preco" required><br>
	<label>Descrição</label><input type="text" name="descricao" required><br>
	<label>Modelo</label><input type="text" name="modelo" required><br>
<label>ID Sub Categoria</label><input type="numeric" name="idsubcat" required><br>
<label>imagem</label><input type="file" name="imagem" required><br>




	
	<input type="submit" name="enviar">
</form>
</body>
</html>


<?php  
}


//}

 //else{
	//echo "Para entrar nesta página necessita de efetuar <a href='login.php'>login</a>";
	//header('refresh:2;url=login.php');
//}
?>
