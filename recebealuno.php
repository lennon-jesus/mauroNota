<?php
include 'conexao.php';

echo "Recebido: <br>";
echo $_GET['nome'];
echo $_GET['turma'];
echo "<br>";

$codigoSQL = "INSERT INTO `alunos` (`id`, `nome`, `id_turma`) VALUES (NULL, :nm, :tr)";

try {
    $comandoSQL2 = 'SELECT `id` FROM `turmas`';
    $result = $conexao->query($comandoSQL2);
    $validador = $result->fetchAll();
    if ($_GET['nome']=="" || (in_array($_GET['turma'],$validador))==false){
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