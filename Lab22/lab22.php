<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="">
    <title>Lab22</title>
</head>
<body>

<?php

$conn=pg_connect("host=localhost dbname=voto11 user=aluno password=3T3K3Q");



$select=pg_query($conn, "SELECT * FROM eleicao");

   while ($pegarTabela = pg_fetch_assoc($select)){



       echo "<table>";

       echo "<tr>";

       echo "<td> <a href='lab22.php?id=".$pegarTabela['id']."'> ".$pegarTabela['nome']."|".$pegarTabela['votos']."</a></td>"; 

       echo "</tr>";

       echo "</table>";

   }


?>

<?php

if (isset($_GET ['id'])) {



    $id=$_GET['id'];

    

$update=pg_query($conn, "UPDATE eleicao SET votos=votos+1 WHERE id=$id");

  

}

?>

</body>
</html>
