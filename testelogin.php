
<?php
session_start();

if (isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["senha"])) 
{
    //Acessa
    include_once("config.php");
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $hash = password_hash($senha, PASSWORD_BCRYPT);

    $sql = "SELECT * FROM utilizador WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        header("location: tela-login2.php");


    } else {
        unset($acesso);
        $row = $result->fetch_assoc();
        $acesso = $row["acesso"];
        $hash = $row["senha"];

       $_SESSION["email"] = $email;
       $_SESSION["senha"] = $senha;

        if ($acesso == 'User') {
            header("location:clientes.php");
        } else if ($acesso == 'Administrador') {
            header("location:pagina-administrador.php");
        }
    }
} else {
    header("location: tela-login2.php");
}
          
?>       