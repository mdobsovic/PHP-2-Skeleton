<?php
    require __DIR__ . '/funkcie.php';
?>
<!doctype html>
<html>
<head>
    <title><?= isset($_title) ? $_title : 'Moja webstránka v PHP'; ?></title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="navbarNav" aria-expanded="false" aria-label="Menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img alt="IT LEARNING SLOVAKIA" src="img/it-learning.png">
            </a>

            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link<?= nazov_suboru() === 'index.php' ? ' active' : ''; ?>" href="index.php">Hlavná stránka</a></li>
                    <li class="nav-item"><a class="nav-link<?= nazov_suboru() === 'kto-som.php' ? ' active' : ''; ?>" href="kto-som.php">Kto som?</a></li>
                    <li class="nav-item"><a class="nav-link<?= nazov_suboru() === 'subory.php' ? ' active' : ''; ?>" href="subory.php">Súbory</a></li>
                    <li class="nav-item"><a class="nav-link<?= nazov_suboru() === 'galeria.php' ? ' active' : ''; ?>" href="galeria.php">Galéria</a></li>
                    <li class="nav-item"><a class="nav-link<?= nazov_suboru() === 'email.php' ? ' active' : ''; ?>" href="email.php">E-mail</a></li>
                    <li class="nav-item"><a class="nav-link<?= nazov_suboru() === 'pdf.php' ? ' active' : ''; ?>" href="pdf.php">PDF</a></li>
                    <li class="nav-item"><a class="nav-link<?= nazov_suboru() === 'databaza.php' ? ' active' : ''; ?>" href="databaza.php">Databáza</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>