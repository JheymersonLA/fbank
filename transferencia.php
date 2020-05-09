<?php
require('banco.php');
if (!empty($_POST)) {

    $pagador1 = $_POST['pagador'];
    $favorecido1 = $_POST['favorecido'];
    $valor1 = $_POST['valor'];
    
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql ="CALL transferencia('$pagador1','$favorecido1', '$valor1')";
        $q = $pdo->prepare($sql);
        $q->execute(array($pagador1, $favorecido1, $valor1));
        Banco::desconectar();
        header("Location: index.php");
}
?>