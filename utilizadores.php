<?php
include("config.php");
 
$sql="SELECT codido_id, Nome, Apelido, Email, telemovel, sexo from utilizador";
$result = $conexao->query($sql);
?>

<!doctype html>

<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="utilizadores">
    <meta name="author" content="Luciana da Cruz">
    <title>Utilizadores</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.btn-custom{
    margin: 10px;
}
</style>

</head>

<body>
<div class="container text-center mt-5">
    <h1>Gestão de utilizadores</h1>
    <div class ="row justify-content-center mt-4">
        <div class="col-md-3">
    <button type="button" class="btn btn-primary btn-custom">Utilizadores</button>
</div>
<div class="col-md-3">
<button type="button" class="btn btn-secondary btn-custom">Mensagens</button>
 
</div>
</div>
</div>

<div class="container text-center mt-5">
    <h1>Lista de utilizadores</h1>
    <table class="table table-striped mt-4" style="text-align: center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Email</th>
                <th>Telemovel</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody> 

        <?php
         if ($result->num_rows > 0){
        

        while ($user_data = $result ->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $user_data["codido_id"]. "</td>";
            echo "<td>". $user_data["Nome"]. "</td>";
            echo "<td>". $user_data ["Apelido"]. "</td>";
            echo "<td>". $user_data["Email"]. "</td>";
            echo "<td>". $user_data["telemovel"]. "</td>";
            echo "<td>". $user_data["sexo"]. "</td>";

 
        echo "<td>

      <a class='btn btn-sn btn-primary' href='editar-dados.php?id=$user_data[codido_id]'>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
</svg>
</a>
        </td>";

           

     echo "</tr>";
        }
      }else{ 
        echo "<tr><td colspan='6'>Nenhum utilizador encontrado</td></tr>";
      }
      
      $conexao->close();
        ?>
    </tbody>
    </table>
    </div>
</body>

</html>