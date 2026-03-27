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
<style>
/* Fundo geral do sistema */
body {
    background: linear-gradient(135deg, #4263a1, #2a5298);
}

/* Área do conteúdo */
.content-wrapper {
    background: transparent !important;
}

/* Caixa do conteúdo */
.content-wrapper > * {
    background: white;
    padding: 20px;
    border-radius: 10px;
}

/* Sidebar mais bonita */
.main-sidebar {
    background: #1a1a2e !important;
}

/* Navbar */
.navbar {
    background: #16213e !important;
}
</style>
<?php
include("../conexao.php");

$sql = "SELECT imovel.*, pessoa.nome 
FROM imovel
JOIN pessoa ON imovel.pessoa_id = pessoa.id";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Imóveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2 class="mb-4">Lista de Imóveis</h2>

<a href="cadastrar.php" class="btn btn-primary mb-3">Novo Imóvel</a>

<table class="table table-bordered table-striped">
<tr>
    <th>Logradouro</th>
    <th>Número</th>
    <th>Bairro</th>
    <th>Proprietário</th>
    <th>Ações</th>
</tr>

<?php while($i = $result->fetch_assoc()) { ?>
<tr>
    <td><?= $i['logradouro'] ?></td>
    <td><?= $i['numero'] ?></td>
    <td><?= $i['bairro'] ?></td>
    <td><?= $i['nome'] ?></td>
    <td>
        <a href="editar.php?id=<?= $i['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
        <a href="excluir.php?id=<?= $i['id'] ?>" class="btn btn-danger btn-sm">Excluir</a>
    </td>
</tr>
<?php } ?>
</table>

</body>
</html>