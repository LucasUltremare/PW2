<!DOCTYPE html>

<html>

    <head>
        <title>Votos </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>

    <body>
        
        <?php

            $conn = pg_connect("host=localhost dbname=voto11 user=aluno password=3T3K3Q");
            
            if( !$conn ) {
                die( "Erro de conexão com o banco de dados");
            }
        
        ?>

        <table border = '1'>

            <tr>
                <th>Nomes</th>
                <th>Votos</th>
            </tr>

            <?php

                $result = pg_query($conn, "SELECT * FROM eleicao order by votos desc");

                    while ($row = pg_fetch_assoc($result)) {

                        echo "<tr>";
                        echo "<td> <a href='lab22.php?id=".$row['id']."'>".htmlspecialchars($row['nome'])."</a> </td>";
                        echo "<td> <a href='lab22.php?id=".$row['id']."'>".htmlspecialchars($row['votos'])."</a> </td>";
                        echo "</tr>";

                    }

                pg_close($conn);

            ?>

        </table>

    </body>
</html>