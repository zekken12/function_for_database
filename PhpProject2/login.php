<?php 

$username = $_POST['username'];
$pass = $_POST['password'];
$erreur = "";
$success = "";
if(!empty($_POST['username']) && !empty($_POST['password']))
{
    if ($username === "admin" && $pass=== "mo") {
    }
}
if(isset($_POST['submit'])) {
    if ($username === "admin") {
        if($pass === "password") {
            $erreur = "";
            $success = "Bienvenue";
            header("index.php");

        
        }
        else {
            $erreur = "Identifiant incorrect";
            $success = "";
        }
        
    } else {
        $erreur = "Mot de passe incorrect";
        $success = "";
    }
}



?>

<?php if ($erreur): ?>
<div class="alert alert-danger">
    <?= $erreur ?>
</div>
<?php endif ?>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            <p class ="erreur"><?php echo $erreur; ?></p><p class ="success"><?php echo $success; ?></p>
            <form action="" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input class="form-control" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input class="form-control" type="password" placeholder="Entrer le mot de passe" name="pass" required>

                <input type="submit" name ="submit " value='LOGIN' >
                <a href='change-password.php'>Forget Password</a>
                ?>
            </form>
        </div>
    </body>
</html>