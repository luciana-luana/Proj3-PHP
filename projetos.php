<?php
include("config.php");
 
$sql="SELECT projetos_id, titulo, descricao, tecnologia, tempo_conclusao from projetos";
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
    <h1>Projetos</h1>
    <table class="table table-striped mt-4" style="text-align: center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Tecnologia</th>
                <th>Tempo de Conclusão</th>
            </tr>
        </thead>
        <tbody> 

        <?php
         if ($result->num_rows > 0){
        while ($row = $result ->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["projetos_id"]. "</td>";
            echo "<td>". $row["titulo"]. "</td>";
            echo "<td>". $row["descricao"]. "</td>";
            echo "<td>". $row["tecnologia"]. "</td>";
            echo "<td>". $row["tempo_conclusao"]. "</td>";

            echo "</tr>";

        }
      }else{ 
        echo "<tr><td colspan='5'>Nenhum projeto encontrado</td></tr>";
      }
      
      $conexao->close();
        ?>
    </tbody>
    </table>
    </div>
</body>

</html>