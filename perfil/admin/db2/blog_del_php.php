<?php
    include("../db0/connection.php");
    session_start(); 
    if (!isset($_SESSION["Cod_Cliente"])) {
        header("Location: /123folhas/index.php");
        exit();
    }
    if ($_SESSION["Cod_Cliente"] > 13) {
        header("Location: ../db0/erro.php");
        exit();
    }

    $id = $_GET["Cod_blog"];
    
    try {
        $sql = "DELETE FROM Blog WHERE Cod_blog = $id";
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Operação concluída com sucesso."); window.location.href = "blog_lst.php";</script>';
            exit;
        } else {
            throw new Exception('Ocorreu um erro ao executar a operação.');
        }
    } catch (Exception $e) {
        echo '<script>alert("'.$e->getMessage().'"); history.go(-1);</script>';
        exit;
    }
?>