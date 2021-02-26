<?php
	session_start();
	require 'controller/DB.php';
	$db = new Database();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="sources/css/styles.css">
        <title>Главная</title>
</head>
<body>
    <header>
        <div class="profile">
            <div class="logoBlock">
            <a href="/">
                <img src="sources/images/profileUser.png" class="profile-icon" alt="">
            </a>
            </div>
            <div class="profile-info">
                <p><?= $db -> select('users',"`id`={$_SESSION['user']}")[0]['login'];?></p>
                <p><?= $db -> select('users',"`id`={$_SESSION['user']}")[0]['balance']?></p>
            </div>
        </div>

        <div class="navBlock">
            <nav>
                <a href="/" class="navbar-link">Главная</a>
                <a href="/cabinet.php" class="navbar-link">Мой кабинет</a>
                <a href="/market.php" class="navbar-link">Маркет</a>
                <a href="/blog.php" class="navbar-link">Блог</a>
            </nav>
        </div>
    </header>
