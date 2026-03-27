<?php
include("../conexao.php");

$id = $_GET['id'];

$conn->query("DELETE FROM imovel WHERE id=$id");

header("Location: listar.php");
?>