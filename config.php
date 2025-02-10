<?php
$hostname = "localhost";
$username  = "root";
$password = "";
$dbName = "formulario";

$conexao = new mysqli($hostname, $username, $password,$dbName); 


//if($conexao->connect_errno)
// {
    //echo "Erro na conexão: ";
//} else {
    echo "Conexão efetuada com sucesso";
//}

?>

