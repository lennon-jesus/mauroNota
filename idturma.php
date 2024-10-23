<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleciona turma</title>
</head>
<body>
    <?php
    $comandoSQL = "SELECT * FROM `turmas`";

    include 'conexao.php';

    foreach($conexao->query($comandoSQL) as $linha) {
        $id = $linha['id'];
        $nome = $linha['nome'];
        echo "<a href='mostraaluno.php?id=$id'>$nome</a><br>";
    }

    ?>
</body>
</html>