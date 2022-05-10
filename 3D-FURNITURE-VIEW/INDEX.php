<?php

include 'ESTORE/configRR/dbconnection.php';
include 'ESTORE/modeleRR/functions.php';

$pdo = pdo_connect_mysql();

$page = isset($_GET['page']) && file_exists($_GET['page']).'.php' ? $_GET['page'] : 'home';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
   <body onLoad="smoothscroll()"></body>

    <?php

     include $page . '.php';
    ?>
    
    <script>
function smoothscroll() {
  document.documentElement.style.scrollBehavior = "smooth";
}
</script>
</body>
</html>