<?php
session_start();
// if((!isset($_SESSION["email"]) == true) and (!isset($_session["senha"]) ==true))
//  {
//  unset($_SESSION["email"]);
// unset($_SESSION["senha"]);
//  header("location: tela-login2.php");
//  }
//$logado = $_session ["email"];


if (isset($_POST["submit"])) {

    include_once("config.php");
  

  $email = $_POST["email"];
  $telemovel = $_POST["telemovel"];
  $datatime = $_POST["datatime"];
  
  $opcoes = ['cost' => 12];
  
  $sqlUtilizador = $conexao->prepare("SELECT * FROM consultas WHERE email = ? or telemovel =?");
  $sqlUtilizador->bind_param("ss", $email, $telemovel);
  $sqlUtilizador->execute();
  $sqlUtilizador->store_result(); 
  
  if ($sqlUtilizador->num_rows == 1) {
      echo "<script>alert('O email ou telemovel já existe. Volte a tentar');</script>";
  
  }else{$result = mysqli_query($conexao, "INSERT INTO consultas(email, telemovel, datatime) 
  VALUES('$email', '$telemovel', '$datatime')");
  
  }
  }

?>  

<!doctype html>

<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/CasopraticoPHP.css">
    <meta name="description" content="pagina-utilizador">
    <meta name="author" content="Luciana da Cruz">
    <title>Pagina-Utilizador</title>

<style>
form{
    text-align: center; 
    
}
</style>
</head>


<body>
<div class="logo">
    <img src="IMG/logo.png" style="width: 400px; height: 120px; margin-top: 3px;" alt="logotipo">
   </div>

    <div class="navbar">
        <a href="index.html">Logout</a>
   

    </div>
   

    <header class="topo" style= "margin-left: 250px;height: 350px; padding-top: 220px;">
        <div class="interface">
         <div class="flex">
            <div class="img-topo-site">
                <img src="img/web-development.png" alt="logo" style="width: 350px; height: 350px;">
        
            </div>   

         <div class="text-topo-site" style="margin-left: 50px; margin-top: 50px;">
          
         <br><h1 style="font-size: 40px;">INNOVA WEB</h1>
         <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 20px;">Transformando ideias em experiências digitais</p>   
       <div class="btn-contato">
             
         </a>
       </div>
     </div>    
        
         </div>
        </div>
        
    </header>


<div class="corpo" style="height:500px; padding-top: 30px;">

<h1 style="text-align: center;">Seja Ben-vindo!</h2>

<form class="forma" method="Post" action="clientes.php">
    <h1 style="text-align:center">Tem um projeto em mente? <br>
    Escolhe um dia para falar conosco</h1><br>
    <label for="dataTempo">Escolha a data e hora:</label><br><br>
        <input type="datetime-local" id="datatime" name="datatime" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
  <input type="number" name="telemovel"  placeholder="Telemóvel" required>
    <br><br><input type="submit" name="submit" id="submit" style=" width:150px; height:40px; background-color: #35a43d; color:white; cursor: pointer;border-radius: 15px;" value="Registrar">
  
  </form>

</div>
</body>
<footer>
        <div class="redes sociais">
        <div class="logosfundo">
            <img src="IMG/logo-removebg-preview.png" style="width: 400px; height: 200px; margin-top: 30px; alt="logosemfundo">
        <div class="redes-sociais" style="margin-bottom: 30px; margin-left: 130px;">
            <a href="#instagram"><i class="fa-brands fa-facebook"style="color: #35a43d"></i></a>
            <a href="#facebook"><i class="fa-brands fa-instagram" style="color: #35a43d"></i></a>
            <a href="#linkedin"><i class="fa-brands fa-linkedin"style="color: #35a43d"></i></a>
            <a href="#twiter"><i class="fa-brands fa-twitter"style="color: #35a43d"></i></a>
            <p style="font-family: fantasy; padding-bottom: 60px; color:#35a43d;">Luciana da Cruz</p>
        </div>
        </div>
        </div>
        <div class="contatos-empresa" style="margin-left: 500px; padding-bottom: 10px;">
            <ul>
                <li style="font-family: fantasy; color:#35a43d"><i class="fa-sharp fa-solid fa-phone fa-shake" style="color: #35a43d;"></i>(+351) 912649938</li>
                <li style="font-family: fantasy; color: #35a43d;"><i class="fa-solid fa-envelope" style="color: #35a43d;"></i>lucianadacruz.unicv@gmail.com</li>
            </ul>
    </div>
       
    </footer>

</html>