<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["judul"]; ?> PusYuk</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
<div class="p-3 mb-2 bg-secondary text-dark">
<img src="<?= BASEURL; ?>/image/logo.jfif" alt="PusYuk" width="120" class="rounded mx-auto d-block">  
<nav class="navbar navbar-expand-lg navbar-light"  style="background-color:dimgrey">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL; ?>">PusYuk</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="<?= BASEURL; ?>/library">Library</a>
        <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
        </div>
    </div>
  </div>
</nav>
</div>