<?php
if (!empty($_GET["codido_id"]))
 {
    include_once("config.php");

$id = $_GET ["codido_id"];

$sqlSelect = "SELECT * FROM utilizador WHERE id=$id";

$result = $conexao->query($sqlSelect);

if($result->num_rows >0)

{
    while($user_data =mysqli_fetch_assoc($result))
    {
        $nome = $user_data["nome"];
        $apelido = $user_data["apelido"];
        $email = $user_data["email"];
        $telemovel = $user_data["telemovel"];
        $sexo = $user_data["sexo"];

    }
    
}
else{
  header("location: utilizadores.php");
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


.title{
font-family: Matemasie;
font-size:40px;
color: #35a43d;
}



.btn-second{
 background-color: #35a43d ;
 border: 1px solid #35a43d;
 border-radius: 15px;
text-transform: uppercase;
 font-size: 15px;
  padding: 10px 50px;
  cursor: pointer;
  margin-left: 50px;
}
.btn-second:hover{
    background-color: white;
    border: 1px solid #35a43d;
    color: #35a43d;
}

    
.forma{
    display: flex;
    flex-direction: column;
    margin-right: 200px;
    flex-direction: column;
}
.forma input {
    height: 30px;
    width: 300px;
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
    
        <div class="second-column">
  <h2 class="title">Editar dados</h2>
  <form class="forma" method="GET" action="editar-dados.php" onsubmit="return validarchave(this)">
    
  <input type="text" name="nome" value="<?php echo $nome?>" placeholder="Nome" required>
  <input type="text" name="apelido" value="<?php echo $apelido?>" placeholder="Apelido" required>

  <input type="email" name="email" id="email" value="<?php echo $email?>" placeholder="Email" required>
  <input type="number" name="telemovel" id="telemovel" value="<?php echo $telemovel?>" placeholder="Telemóvel" required>
  <select name="sexo" id="sexo" class ="forma" required>
            <option value="" disabled selected>Género</option>
            <option value="feminino" <?php echo ($sexo =="feminino") ? "selected" :"";?> >Feminino</option>
            <option value="masculino" <?php echo ($sexo =="masculino") ? "selected" :"";?>>Masculino</option>   
   </select>

  <input type="submit"  name="submit" class="btn-second" value="Atualizar">
  </form>
 
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
            


    </script>
</body>
</html>

