<?php

if (isset($_POST["submit"])) {

  include_once("config.php");

$nome = $_POST["nome"];
$apelido = $_POST["apelido"];
$sexo = $_POST["sexo"];
$email = $_POST["email"];
$telemovel = $_POST["telemovel"];
$senha = $_POST["senha"];
$acesso = $_POST["acesso"];

$opcoes = ['cost' => 12];
$senha = password_hash('senha', PASSWORD_BCRYPT, $opcoes);

$sqlUtilizador = $conexao->prepare("SELECT * FROM utilizador WHERE email = ? or telemovel =?");
$sqlUtilizador->bind_param("ss", $email, $telemovel);
$sqlUtilizador->execute();
$sqlUtilizador->store_result(); 

if ($sqlUtilizador->num_rows == 1) {
    echo "<script>alert('O email ou telemovel já existe. Volte a tentar');</script>";

}else{$result = mysqli_query($conexao, "INSERT INTO utilizador(nome, apelido, email, telemovel, sexo, senha, acesso) 
VALUES('$nome', '$apelido', '$email', '$telemovel', '$sexo', '$senha','$acesso')");

}
}
?>

<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="casopratico">
    <meta name="author" content="Luciana da Cruz">
<style>
@import url('https://fonts.googleapis.com/css2?family=Matemasie&display=swap');
.{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.conteudos{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100%;
    background-color: #30304f;

}
.first-content{
  display: flex;
  display: none;
} 

.content{ 
background-color: white;
 width: 80%;
height: 80%;
border-radius: 20px;
display: flex;
justify-content: space-between;
align-items: center;
position: relative;
}
.content::before{
    content: "";
    position: absolute;
    background-color: #35a43d;
    height: 100%;
    width: 40%;
}

.forma{
    display: flex;
    flex-direction: column;
}
.first-column{
    margin-left: 60px;
    flex: 1 0 auto;
    z-index: 10;
}

.title{
text-transform: capitalize;
font-family: Matemasie;
}
.title-primary{
    font-size:28px;
    color: white;
}
.title-second{
   color: #35a43d;
}
.btn{
    border-radius: 15px;
    text-transform: uppercase;
    color: white;
    font-size: 15px;
    padding: 10px 50px;
    cursor: pointer;
    margin-left: 50px;
   
}
.btn-primary{
 background-color: transparent;
 border: 1px solid white;
}

.btn-primary:hover{
    background-color: white;
    border: 1px solid #35a43d;
    color: #35a43d;
}
.forma{
    display: flex;
    flex-direction: column;
    margin-right: 200px;
}
.forma input {
    height: 25px;
    border: none;
    background-color: #f0f0f0;
    margin: 8px;
}

.forma select{
    height: 25px;
    border: none;
    background-color: #f0f0f0;
    margin: 8px;
}



</style>

</head>
<body>
    <div class="conteudos">
        <div class="content first-content">
       <div class="first-column">
   <h2 class="title title-primary">Seja bem-vindo!</h2>
   <a href="tela-login2.php"><button class="btn btn-primary">Entrar</button></a>
 <br><br><a href="#" style=" margin-left:53px;">Esqueceu a sua senha?</a>
       </div>
    
        <div class="second-column">
  <h2 class="title title-second">Crie uma conta</h2>
  <form class="forma" method="Post" action="tela-login.php" onsubmit="return validarchave(this)">
  <input type="text" name="nome" id="nome" placeholder="Nome" required>
  <input type="text" name="apelido" id="apelido" placeholder="Apelido" required>
  <select name="sexo" id="sexo" class ="forma" required>
            <option value="" disabled selected>Género</option>
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>   
   </select>

  <input type="email" name="email" id="email" placeholder="Email" required>
  <input type="number" name="telemovel" id="telemovel" placeholder="Telemóvel" required>
  <input type="password" name="senha" id="senha"  placeholder="Password" required>
  <select name="acesso" id="acesso" class ="forma" required>
            <option value="" disabled selected>Nivel de acesso</option>
            <option value="Utilizador">User</option>  
   </select>

  <input type="submit"  name="submit" id="submit" class="btn" style="height:40px; background-color: #35a43d; color:white" value="Registrar">
  </form>
 
</div>
  
</div>
    
         
    </div>

    <script>
     function validarchave(form) {
    let mensagem = "";
    let valido = "s";
 

    if (!validarTelemovel()) {

        valido = "n";
        mensagem += "O número de telemóvel deve conter exatamente 9 dígito\n";

    }
    
    if (!validarSenha()) {

       valido = "n";
       mensagem += "A senha deve conter pelo menos 8 caracteres, incluindo uma letra maiúscula, uma letra minúscula, um número e um caractere especial.';\n";

}


    if (valido === "n") {
        alert(mensagem);
        return false;
    }


    return true;

}

function validarTelemovel(){
    const telemovel = document.getElementById('telemovel').value; 
    const telemovelPattern = /^\d{9}$/;
    return telemovelPattern.test(telemovel);
}    
            
 function validarSenha() {
    const senha = document.getElementById('senha').value;
    const senhaPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    return senhaPattern.test(senha);

        }

    </script>
</body>
</html>