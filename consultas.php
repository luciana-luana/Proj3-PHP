<?php
include("config.php");
 
$sql="SELECT consulta_id, email, telemovel, datatime from consultas";
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
    <h1>Marcações</h1>
    <table class="table table-striped mt-4" style="text-align: center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Telemóvel</th>
                <th>Data da consulta</th>
            </tr>
        </thead>
        <tbody> 

        <?php
         if ($result->num_rows > 0){
        while ($row = $result ->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["consulta_id"]. "</td>";
            echo "<td>". $row["email"]. "</td>";
            echo "<td>". $row["telemovel"]. "</td>";
            echo "<td>". $row["datatime"]. "</td>";

            echo "<td>
            
              </td>";
           
           
            echo "</tr>";

          
                 

        }
      }else{ 
        echo "<tr><td colspan='3'>Nenhuma consulta agendada</td></tr>";
      }
      
      $conexao->close();
        ?>
    </tbody>
    </table>
    </div>
</body>

</html>