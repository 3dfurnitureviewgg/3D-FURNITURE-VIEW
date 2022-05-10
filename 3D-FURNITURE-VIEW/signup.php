
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="CSS/signup.css">
</head>
<body>
<?php
    include_once 'navbar.php';
    ?>
    <form  method="post" action="INCLUDES/signup.inc.php">
     <div class="form">
      <div class="title">Salut!👋</div>
      <div class="subtitle">Creează-ți un cont!</div>
      <div class="input-container ic1">
        <input type="text" id="firstname" class="input" name="username" placeholder=" " />
        
        
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Nume Utilizator</label>
      </div>
      
      
      <div class="input-container ic2">
        <input type="text" id="email" class="input" name="email" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</label>
      </div>
        
        
         <div class="input-container ic2">
        <input id="password" class="input" type="password" name="password" placeholder=" " />
        <div class="cut"></div>
        <label for="password" class="placeholder">Parolă</label>
      </div> 
        
        
         <input type="submit" class="submit" onclick="checkPassword()" value="Creează Cont"/>
             <?php 
    if (isset($_GET['info']) && $_GET['info'] == 'ok'){
        echo '<p class="ok">Contul a fost creat!</p>';
    } else if (isset($_GET['info']) && $_GET['info'] == 'eroare'){
        echo '<p class="err">A aparut o eroare!</p>';
    }else if (isset($_GET['info']) && $_GET['info'] == 'exista'){
         echo '<p class="err">Usernameul exista deja!</p>';
    }
    ?>
    </div>
        </form>
    
</body>
</html>