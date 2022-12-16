<?php
include '_config.php';
require_once 'isLogin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Bela Negara</title>
	<link rel="shortcut icon" href="https://cdn4.iconfinder.com/data/icons/meBaze-Freebies/512/setting.png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="assets/kvn.css">
	<style>
	.dropdown-menu-right {
		right: 0;
		left: auto;
	}
	</style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light prevent-select">
        <a class="navbar-brand" style="cursor: pointer;">Bangkitkan Semangat Indonesia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" style="cursor: pointer;" onclick="javascript: window.location.replace('index.php')">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="cursor: pointer;" onclick="javascript: window.location.replace('page_kategori.php')">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="cursor: pointer;" onclick="javascript: window.location.replace('page_artikel.php')">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="cursor: pointer;" onclick="javascript: window.location.replace('page_gallery.php')">Gallery</a>
                </li>
            </ul>
			<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php $name = $_SESSION['nama_user']; echo "<a>$name</a>";?>
				</button>
				<div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" style="cursor: pointer;" onclick="javascript: window.location.replace('page_user.php')">Account Management</a>
					<a class="dropdown-item" style="cursor: pointer;" onclick="javascript: window.location.replace('user_edit.php?id=<?= $_SESSION['id'] ?>')">Account Setting</a>
					<a class="dropdown-item" style="cursor: pointer;" onclick="javascript: window.location.replace('logout.php')">Logout</a>
				</div>
			</div>
        </div>
    </nav>
    <!-- ./navbar -->