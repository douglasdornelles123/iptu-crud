<?php
include("conexao.php");

$totalPessoas = $conn->query("SELECT COUNT(*) as total FROM pessoa")->fetch_assoc()['total'];
$totalImoveis = $conn->query("SELECT COUNT(*) as total FROM imovel")->fetch_assoc()['total'];

include("layout.php");
?>

<h2>Dashboard</h2>

<div class="row">

    <div class="col-lg-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $totalPessoas ?></h3>
                <p>Pessoas</p>
            </div>
            <div class="icon">
                <i class="fas fa-user"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= $totalImoveis ?></h3>
                <p>Imóveis</p>
            </div>
            <div class="icon">
                <i class="fas fa-building"></i>
            </div>
        </div>
    </div>

</div>
