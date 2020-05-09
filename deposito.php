<?php
require('banco.php');
if (!empty($_POST)) {

    $conta = $_POST['conta'];
    $valor = $_POST['valor'];
    
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql ="CALL deposito('$conta','$valor')";
        $q = $pdo->prepare($sql);
        $q->execute(array($conta, $valor));
        Banco::desconectar();
        header("Location: index.php");
}
?>