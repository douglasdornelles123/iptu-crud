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
$pessoas = $conn->query("SELECT * FROM pessoa");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Novo Imóvel</title>
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

<h2>Novo Imóvel</h2>

<form action="salvar.php" method="POST">

    <div class="mb-3">
        <label>Logradouro</label>
        <input type="text" name="logradouro" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Número</label>
        <input type="text" name="numero" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Bairro</label>
        <input type="text" name="bairro" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Complemento</label>
        <input type="text" name="complemento" class="form-control">
    </div>

    <div class="mb-3">
        <label>Proprietário</label>
        <select name="pessoa_id" class="form-control">
            <?php while($p = $pessoas->fetch_assoc()) { ?>
                <option value="<?= $p['id'] ?>">
                    <?= $p['nome'] ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <button class="btn btn-success">Salvar</button>
    <a href="listar.php" class="btn btn-secondary">Voltar</a>

</form>

</body>
</html>