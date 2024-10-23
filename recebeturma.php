<?php
include 'conexao.php';

echo "Recebido: <br>";
echo $_GET['nome'];
echo "<br>";

$codigoSQL = "INSERT INTO `turmas` (`id`, `nome`) VALUES (NULL, :nm)";

try {
    if ($_GET['nome']==""){
        echo "Por favor preencha o nome";
    }else{
        $comando = $conexao->prepare($codigoSQL);

        $resultado = $comando->execute(array('nm' => $_GET['nome']));

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