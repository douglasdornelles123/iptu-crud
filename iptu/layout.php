<!DOCTYPE html>
<html>
<head>
    <title>Sistema IPTU</title>

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <!-- Font Awesome (ícones) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

<body class="hold-transition sidebar-mini">

<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Sistema IPTU</a>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="/iptu" class="brand-link text-center">
            <span class="brand-text font-weight-light">IPTU</span>
        </a>

        <div class="sidebar">
            <nav>
                <ul class="nav nav-pills nav-sidebar flex-column">

                    <li class="nav-item">
                        <a href="/iptu" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/iptu/pessoa/listar.php" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Pessoas</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/iptu/imovel/listar.php" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
                            <p>Imóveis</p>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>

    <!-- Conteúdo -->
    <div class="content-wrapper p-4">