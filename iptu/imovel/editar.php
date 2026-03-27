<?php
include("../conexao.php");

// pegar ID do imóvel
$id = $_GET['id'];

// buscar imóvel
$imovel = $conn->query("SELECT * FROM imovel WHERE id=$id")->fetch_assoc();

// buscar pessoas para o select
$pessoas = $conn->query("SELECT * FROM pessoa");
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Editar Imóvel</title>
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

<h2 class="mb-4">Editar Imóvel</h2>

<form action="atualizar.php" method="POST">

    <input type="hidden" name="id" value="<?= $imovel['id'] ?>">

    <div class="mb-3">
        <label>Logradouro</label>
        <input type="text" name="logradouro" class="form-control" value="<?= $imovel['logradouro'] ?>" required>
    </div>

    <div class="mb-3">
        <label>Número</label>
        <input type="text" name="numero" class="form-control" value="<?= $imovel['numero'] ?>" required>
    </div>

    <div class="mb-3">
        <label>Bairro</label>
        <input type="text" name="bairro" class="form-control" value="<?= $imovel['bairro'] ?>" required>
    </div>

    <div class="mb-3">
        <label>Complemento</label>
        <input type="text" name="complemento" class="form-control" value="<?= $imovel['complemento'] ?>">
    </div>

    <div class="mb-3">
        <label>Proprietário</label>
        <select name="pessoa_id" class="form-control" required>
            <?php while($p = $pessoas->fetch_assoc()) { ?>
                <option value="<?= $p['id'] ?>"
                    <?= ($p['id'] == $imovel['pessoa_id']) ? 'selected' : '' ?>>
                    <?= $p['nome'] ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Atualizar</button>
    <a href="listar.php" class="btn btn-secondary">Voltar</a>

</form>

</body>
</html>