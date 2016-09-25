<?php
    require __DIR__ . '/funkcie.php';
?>
<!doctype html>
<html>
<head>
    <title><?= isset($_title) ? $_title : 'Moja webstránka v PHP'; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img alt="IT LEARNING SLOVAKIA" src="img/it-learning.png">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="nav navbar-nav">
                    <li<?= nazov_suboru() === 'index.php' ? ' class="active"' : ''; ?>><a href="index.php">Hlavná stránka</a></li>
                    <li<?= nazov_suboru() === 'kto-som.php' ? ' class="active"' : ''; ?>><a href="kto-som.php">Kto som?</a></li>
                    <li<?= nazov_suboru() === 'subory.php' ? ' class="active"' : ''; ?>><a href="subory.php">Súbory</a></li>
                    <li<?= nazov_suboru() === 'galeria.php' ? ' class="active"' : ''; ?>><a href="galeria.php">Galéria</a></li>
                    <li<?= nazov_suboru() === 'email.php' ? ' class="active"' : ''; ?>><a href="email.php">E-mail</a></li>
                    <li<?= nazov_suboru() === 'pdf.php' ? ' class="active"' : ''; ?>><a href="pdf.php">PDF</a></li>
                    <li<?= nazov_suboru() === 'databaza.php' ? ' class="active"' : ''; ?>><a href="databaza.php">Databáza</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>