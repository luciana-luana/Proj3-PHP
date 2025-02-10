<?php


// if (isset($_POST["submit"])) {
    
//     print_r($_GET["nome"]); 
//     print_r($_POST["apelido"]);
//     // print_r($_POST["sexo"]);
//     print_r($_POST["email"]);

//     echo 'Olá bem‐vindo/a '.$_POST['nome'].' com morada em 
//     '.$_POST['apelido'].', com '.$_POST['email'].' anos'; 
      
    
    include_once("config.php");


    if (isset($_POST["submit"])) {
        //include_once("config.php");
        //if (isset($_POST["nome"], $_POST["apelido"], $_POST["sexo"], $_POST["email"], $_POST["password"], $_POST["nivel-acesso"])) {
            print_r($_POST["nome"]);
            print_r($_POST["apelido"]);
            print_r($_POST["telemovel"]);
           // print_r($_POST["email"]);
            //print_r($_POST["telemovel"]);
            //print_r($_POST["password"]);
            //print_r($_POST["nivel-acesso"]);
        } //else {
            //echo "Por favor, preencha todos os campos.";
       // if ($conexao->connect_error) {
    //     die("Falha na conexão: " . $conexao->connect_error); 
//}
?>

        