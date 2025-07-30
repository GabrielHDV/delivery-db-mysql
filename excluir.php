<?php
include 'config.php';

$idProduto = $_GET['id'];


//$sql = "DELETE FROM produto WHERE produto = $idProduto";

$sql = 'DELETE FROM `produto` WHERE `produto`.`idProduto` = '.$idProduto.'';


if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();