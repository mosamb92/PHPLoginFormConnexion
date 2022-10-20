<?php
session_start();
    require 'dbconnexion.php';
    $login = trim($_POST['login']);
    $pass = trim($_POST['pswd']);
    $req = $conn->prepare("SELECT * FROM users WHERE login = ? LIMIT 1");
    $req->execute(array($login));
    $tab = $req->fetchAll();
    if(count($tab) > 0) {
        if (password_verify($pass, $tab[0]['password'])) {
            $_SESSION['username'] = $tab[0]['login'];
            $_SESSION['profil'] = $tab[0]['profil'];
            header('Location: ../accueil.php');
        }
        else {
            $_GET['error'] = "Nom d'utilisateur et/ou mot de passe incorrect!";
            header('Location: ../login.php?error=1');
        }
    }
    else {
        $_GET['error'] = "Nom d'utilisateur et/ou mot de passe incorrect!";
        header('Location: ../login.php?error=1');
    }