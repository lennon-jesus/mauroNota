<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h2>Cadastrar notas</h2>
    <form action="recebenota.php">
        <label for="nota">Nota: </label>
        <input type="number" id="nota" name="nota" min=0 max=10>
        <label for="turma">Turma: </label>
        <select name="turma" id="turma">
<?php
    include 'conexao.php';
    $comandoSQL = 'SELECT * FROM `turmas`';

    foreach($conexao->query($comandoSQL) as $linha)
        echo "\n<option value='{$linha['id']}'>{$linha['nome']}</option>";

?>
    </select>
    <label for="aluno">Aluno: </label>
    <select name="aluno" id="aluno">
<?php
    $comandoSQL2 = "SELECT * FROM `alunos`";

    foreach($conexao->query($comandoSQL2) as $linha2)
        echo "\n<option value='{$linha2['id']}'>{$linha2['nome']}</option>";

?>
    </select>
    <input type="submit">

    </form>
</body>
</html>
