<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h2>Cadastrar aluno</h2>
    <form action="recebealuno.php">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome">
        <label for="turma">Turma: </label>
        <select name="turma" id="turma">
<?php
    include 'conexao.php';
    $comandoSQL = 'SELECT * FROM `turmas`';

    foreach($conexao->query($comandoSQL) as $linha)
        echo "\n<option value='{$linha['id']}'>{$linha['nome']}</option>";

?>
    <input type="submit">

    </form>
</body>
</html>
