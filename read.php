<?php

    include "conection.php";

    $select = "SELECT * FROM produtos";

    $resultado = $conn->query($select);


?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização</title>
</head>
<body>

    <table>
        <thead>
            <th>#</th> <th>Nome do Produto</th> <th>Valor</th>
        </thead>

        <tbody>
        <?php
        while($loja = $resultado->fetch_object()){
            echo "<tr>";

                echo "<td>$loja->id</td> <td>$loja->nome</td> <td>$loja->valor</td>";



            echo "</tr>";
        }
    ?>
        </tbody>
    </table>
</body>
</html>