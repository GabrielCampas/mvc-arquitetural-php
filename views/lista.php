<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>E-mail</th>
        </tr>
        <?php
            // retorna a matriz como $dado, que é um vetor
            // o 'foreach' "pega" a linha toda e coloca ela dentro de '$dado'
            foreach($retorno as $dado){
                echo "<tr>";
                    // mostrando o elemento no indice 0 (nome)
                    echo "<td>{$dado[0]}</td>";
                    // mostrando o elemento no indice 1 (cpf)
                    echo "<td>{$dado[1]}</td>";
                    // mostrnado o elemento no inde 2 (email)
                    echo "<td>{$dado[2]}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>