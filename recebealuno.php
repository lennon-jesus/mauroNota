<?php
include 'conexao.php';

echo "Recebido: <br>";
$nomeVar = $_GET['nome'];
$turmaVar = $_GET['turma'];
echo $nomeVar;
echo '<br>' . $turmaVar;
echo "<br>";

$codigoSQL = "INSERT INTO `alunos` (`id`, `nome`, `id_turma`) VALUES (NULL, :nm, :tr)";

$comandoSQL2 = 'SELECT `id` FROM `turmas`';
$result = $conexao->query($comandoSQL2);
$validador = $result->fetchAll();
var_dump($validador);
echo (in_array($turmaVar,$validador));

try {

    if ($nomeVar==""){
        echo "Por favor preencha os campos corretamente";
    }else{
        $comando = $conexao->prepare($codigoSQL);

        $resultado = $comando->execute(array('nm' => $_GET['nome'],'tr' => $_GET['turma']));

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