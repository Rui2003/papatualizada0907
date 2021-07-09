<?php

if($_SERVER['REQUEST_METHOD']='POST'){
    $marca="";
    $preco="";
    $descricao="";
    $modelo="";
    $idsubcat="";
    $imagem="";
    $id="";
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
    if (isset($_GET['id'])){
        $id=$_GET['id'];
    }


    if(isset($_FILES['imagem'])){
            date_default_timezone_set('Europe/London'); //timezone local para adicional ao nome da imagem
            $ext=strtolower(substr($_FILES['imagem']['name'], -4)); //extensão da imagem
            $novo_nome=date("Y.m.d-H.i.s").$ext; //atribuir novo nome à imagem
            $dir='fotos/';
            move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$novo_nome); //upload do ficheiro
        }
        $imagem=$novo_nome;


$con = new mysqli("localhost","root","","papatualizada");

if($con->connect_errno!=0){
    echo "Ocorreu um erro no acesso à base de dados.<br>". $con->connect_error;
    exit;
}
else{
    $sql="update produtos set marca =? , preco =? , descricao =?, modelo=?, idsubcat=?, imagem =? where id=?       ";
    $stm = $con->prepare ($sql);

    if($stm!=false){
        $stm->bind_param('sissisi',$marca,$preco,$descricao,$modelo,$idsubcat, $imagem,$id);
        $stm->execute();
        $stm->execute();
        $stm->close();

        echo '<script>alert("Produto alterado com sucesso!!");</script>';
        echo "Aguarde um momento.A reencaminhar página";
        header('refresh:5;url=index.php');

    }
    else{
}
    }
}
else{
    echo "<h1>Houve um erro ao processar o seu pedido! <br>Irá ser reencaminhado!</h1>";
    header("refresh:5; url=index.php");
}
