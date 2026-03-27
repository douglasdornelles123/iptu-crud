<?php
include("../conexao.php");

$result = $conn->query("SELECT * FROM pessoa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Pessoas</title>
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
</head>
<body class="container mt-4">
    <?php include("../menu.php"); ?>

<h2 class="mb-4">Lista de Pessoas</h2>

<a href="cadastrar.php" class="btn btn-primary mb-3">Nova Pessoa</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Sexo</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
    <?php while($p = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $p['nome'] ?></td>
            <td><?= $p['cpf'] ?></td>
            <td><?= $p['sexo'] ?></td>
            <td>
                <a href="editar.php?id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                <a href="excluir.php?id=<?= $p['id'] ?>" class="btn btn-danger btn-sm">Excluir</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>

</table>

</body>
</html>