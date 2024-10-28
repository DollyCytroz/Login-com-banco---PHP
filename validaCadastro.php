<?php


$nome = $_POST['nome_usuario'];
$senha = $_POST['senha'];
$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "login";
$conexao  = mysqli_connect($host, $user, $pass, $base);
$sql = "select * from usuario where nome_usuario = '$nome' and senha_usuario = '$senha'"; 
$resultado = mysqli_query($conexao, $sql); 

if (mysqli_num_rows($resultado) > 0)

{

    echo "Acesso Liberado"; 
} 

else 

{
    echo "Acesso Negado"; 
}





?> 