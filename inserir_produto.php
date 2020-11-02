<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto']; //Recebe o valor do atributo
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria','$quantidade','$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>