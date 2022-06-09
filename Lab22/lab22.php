<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="">
    <title>Lab22</title>

<!-- Estilo da tabela -->

    <style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
     
    th,
    td {
        padding: 20px;
    }
     
    th {
        text-align: center;
    }
    </style>

<!-- Fim estilo da tabela -->

</head>
<body>

<?php

// getTable 

$conn=pg_connect("host=localhost dbname=voto11 user=aluno password=3T3K3Q");



$select=pg_query($conn, "SELECT * FROM eleicao");

   while ($getTable= pg_fetch_assoc($select)){

// Fim getTable

// Tabela

       echo "<table>";

       echo "<tr>";

       echo "<td> <a href='lab22.php?id=".$getTable['id']."'> ".$getTable['nome']."|".$getTable['votos']."</a></td>"; 

       echo "</tr>";

       echo "</table>";

   }

// Fim tabela   


?>

<?php

// Update Votos

if (isset($_GET ['id'])) {



    $id=$_GET['id'];

    

$update=pg_query($conn, "UPDATE eleicao SET votos=votos+1 WHERE id=$id");

  

}

// Fim update votos

?>

</body>
</html>
