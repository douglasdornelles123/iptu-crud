<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/iptu">IPTU</a>
        <div>
            <a href="/iptu/pessoa/listar.php" class="btn btn-outline-light">Pessoas</a>
            <a href="/iptu/imovel/listar.php" class="btn btn-outline-light">Imóveis</a>
        </div>
    </div>
</nav>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
include("../conexao.php");

$conn->query("UPDATE imovel SET
logradouro='{$_POST['logradouro']}',
numero='{$_POST['numero']}',
bairro='{$_POST['bairro']}',
complemento='{$_POST['complemento']}',
pessoa_id='{$_POST['pessoa_id']}'
WHERE id={$_POST['id']}");

header("Location: listar.php");
?>