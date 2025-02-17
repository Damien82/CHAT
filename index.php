<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8;', 'root', '');
if(!$_SESSION['pseudo']){
    header('Location: php/connec.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Page d'acceuil de chat et yamo</title>
</head>
<body>
<header>
        <a href="#" class="logo" ><span>C</span>hat-<span>E</span>t-<span>Y</span>amo</a>
        <div class="menutoggle" onclick="toggleMenu();"></div>
        <ul class="navbar">
            <li><a href="index.php" onclick="toggleMenu();">Acceuil</a></li>
            <li><a href="php/Users.php" onclick="toggleMenu();">Utilisateurs et conversations</a></li>
            <li><a href="#apropos" onclick="toggleMenu();">A propos</a></li>
            <li><a href="#menu" class="btn1"id="btn1" onclick="toggleMenu();">Mon compte</a></li>
            <li><a href="php/deconnexion.php" id="btn1" onclick="toggleMenu();">Deconnexion</a><li>
            
        </ul>
    </header>
    <section class="banniere" id="banniere">
        <div class="contenu">
            <h2>La messagerie à la Camerounaise</h2>
            <p>Bienvenu <span class="name_index"><?php echo $_SESSION['pseudo']?></span> sur Chat et yamo l'appli de messagerie 100% camerounaise</p>
            <a href="#menu" class="btn1">Mon compte</a>
        </div>
    </section>




    <script type="text/javascript">
        window.addEventListener('scroll', function(){
            const header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 0);
        });

        function toggleMenu(){
            const menutoggle =document.querySelector('.menutoggle');
            const navbar =document.querySelector('.navbar');
            menutoggle.classList.toggle('active');
            navbar.classList.toggle('active');
        }
    </script>
</body>
</html>