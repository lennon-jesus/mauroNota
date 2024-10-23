<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra aluno</title>
</head>
<body>
    <?php
    include 'conexao.php';

    $id = $_GET['id'];
    $comandoSQL = "SELECT * FROM `alunos`  WHERE  `id_turma` = $id";

    foreach($conexao->query($comandoSQL) as $linha)
        $nome = $linha['nome'];
        echo "$nome <br>";
    ?>
</body>
</html>