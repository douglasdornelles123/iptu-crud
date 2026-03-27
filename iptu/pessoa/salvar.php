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
    background: linear-gradient(135deg, #1e3c72, #2a5298);
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

// pegar dados do formulário
$nome = $_POST['nome'];
$data = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

// montar SQL
$sql = "INSERT INTO pessoa 
(nome, data_nascimento, cpf, sexo, telefone, email)
VALUES 
('$nome', '$data', '$cpf', '$sexo', '$telefone', '$email')";

// executar e verificar
if ($conn->query($sql) === TRUE) {
    header("Location: listar.php");
} else {
    echo "Erro ao salvar: " . $conn->error;
}
?>