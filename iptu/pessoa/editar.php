<?php
include("../conexao.php");

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM pessoa WHERE id=$id");
$p = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Pessoa</title>
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

<h2 class="mb-4">Editar Pessoa</h2>

<form action="atualizar.php" method="POST">

    <input type="hidden" name="id" value="<?= $p['id'] ?>">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?= $p['nome'] ?>" required>
    </div>

    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nascimento" class="form-control" value="<?= $p['data_nascimento'] ?>" required>
    </div>

    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" class="form-control" value="<?= $p['cpf'] ?>" required>
    </div>

    <div class="mb-3">
        <label>Sexo</label>
        <select name="sexo" class="form-control" required>
            <option value="M" <?= ($p['sexo'] == 'M') ? 'selected' : '' ?>>Masculino</option>
            <option value="F" <?= ($p['sexo'] == 'F') ? 'selected' : '' ?>>Feminino</option>
            <option value="Outro" <?= ($p['sexo'] == 'Outro') ? 'selected' : '' ?>>Outro</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" class="form-control" value="<?= $p['telefone'] ?>">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= $p['email'] ?>">
    </div>

    <button type="submit" class="btn btn-success">Atualizar</button>
    <a href="listar.php" class="btn btn-secondary">Voltar</a>

</form>

</body>
</html>