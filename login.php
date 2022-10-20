<?php 
require 'elements/header.php';
if(!empty($_SESSION)):
    header('Location: accueil.php');
endif;
/*if(isset($_POST['seconnecter']))    {
    $login = trim($_POST['login']);
    $pass = trim($_POST['pswd']);
    $req = $conn->prepare("SELECT * FROM users WHERE login = ? LIMIT 1");
    $req->execute(array($login));
    $tab = $req->fetchAll();
    if(count($tab) > 0) {
        if (password_verify($pass, $tab[0]['password'])) {
            $_SESSION['username'] = $tab[0]['login'];
            $_SESSION['profil'] = $tab[0]['profil'];
            header('Location: accueil.php');
        }
        else {
            $erreur="Nom d'utilisateur et/ou mot de passe incorrect!";
        }
    }
    else {
        $erreur="Nom d'utilisateur et/ou mot de passe incorrect!";
    }
}*/
?>
        <br>
        <hr>
            <div class="card col-md-7">
                <h5 class="card-header">Authentification - <i class="fa fa-lock"></i></h5>
                <div class="card-body">
                    <h5 class="card-title">Entrer vos identifiants - <i class="fa fa-address-card"></i></h5>
                    <form action="traitements/login.php" method="POST">
                        <?php echo isset($_GET['error']) ? '<div class="alert alert-danger" role="alert">Nom d\'utilisateur et/ou mot de passe incorrect!</div>' : ''; ?>
                        <div class="mb-3 mt-3">
                            <label for="login" class="form-label"><i class="fa fa-user"></i> - Nom d'utilisateur:</label>
                            <input type="text" autocomplete="off"  required class="form-control" id="login" placeholder="Entrer votre login" name="login">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label"><i class="fa fa-key"></i> - Mot de passe:</label>
                            <input type="password" required class="form-control" id="pwd" placeholder="Entrer votre password" name="pswd">
                        </div>
                        <button type="submit" name="seconnecter" class="btn btn-primary">Se connecter |<i class="fa fa-sign-in"></i></button>
                    </form>
                </div>
            </div>
<?php require 'elements/footer.php'; ?>