<?php
require_once "config.php";
require_once "./produtos/Produto.php";

$produto = new Produto();
$id_produto = $_GET['id'];
$produto->excluir($id_produto);
// print_r($produtos);
?>