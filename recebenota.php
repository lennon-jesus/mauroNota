<?php
include 'conexao.php';

echo "Recebido: <br>";
echo $_GET['nota'];
echo $_GET['turma'];
echo $_GET['aluno'];
echo "<br>";

$codigoSQL = "INSERT INTO `notas` (`id`, `valor`, `id_aluno`, `id_turma`) VALUES (NULL, :vl, :ia, :it)";

$comandoTurma = 'SELECT `id` FROM `turmas`';
$result = $conexao->query($comandoTurma);
$validador = $result->fetchAll();

$comandoAluno = 'SELECT `id` FROM `alunos`';
$resultal = $conexao->query($comandoAluno);
$validadoral = $resultal->fetchAll();


try {    
    if ($_GET['nota']<0 || $_GET['nota']>10 || $_GET['nota']==""){
        echo "Por favor preencha os campos corretamente";
    }else{
        $comando = $conexao->prepare($codigoSQL);

        $resultado = $comando->execute(array('vl' => $_GET['nota'], 'ia' => $_GET['aluno'], 'it' => $_GET['turma']));

        if($resultado) {
        echo "Comando executado!";
        } else{
        echo "Erro ao executar o comando!";
        }
    }
    } catch (Exception $e) {
        echo "Erro $e";
    }

$conexao = null;

?>