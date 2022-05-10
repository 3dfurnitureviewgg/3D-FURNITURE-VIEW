<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dent</title>
    <link rel="stylesheet" href="CSS/navbar.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    <script>
    $(function() {
    $(".toggle").on("click", function() {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
        } else {
            $(".item").addClass("active");
        }
    });
});
    </script>
</head>
<body>
    <nav>
        <ul class="menu">
            <li class="logo"><h1><img src="MEDIA/IMG/Logg2.png" alt="sit" class="logo2"></h1></li>
            <li class="item"><a href=INDEX.php class="a1">Acasă</a></li>
            <li class="item"><a href=despre.php class="a1">Despre</a></li>
            <li class="item"><a href=# class="a1">Coș</a></li>
            <?php
            if (isset($_SESSION['idl'])){
                
                echo '<li class="item"><a href="INCLUDES/logout.inc.php" class="a1">Deconecteaza-te</a></li>', 
                
                '<li class="item button"><a href="login.php" class="a1">' .$_SESSION['username'].'</a></li>;';
                    }else{
                echo"<li class='item button'><a href='login.php' class='a1'>Autentificare</a></li>;";
            }
            ?>
            <li class="toggle"><button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                </button></li>
        </ul>
    </nav>
     <script src="SCRIPT/script.js"></script>
</body>
</html>