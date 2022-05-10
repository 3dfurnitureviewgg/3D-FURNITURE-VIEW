<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
<?php
    include 'navbar.php';
    ?>
    <form action="INCLUDES/login.inc.php" method="post">
        <div class="form">
      <div class="title">Bine ai revenit!</div>
      <div class="subtitle">Suntem bucuroși să te revedem! 😎</div>
     
     
     
      <div class="input-container ic2 ic3">
        <input id="email" class="input" type="text" name="email" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</label>
      </div>
            
            
            
             <div class="input-container ic2">
        <input id="password" class="input" type="password" name="password" placeholder=" " />
        <div class="cut"></div>
        <label for="password" class="placeholder">Parolă</label>
      </div>
        
         <?php 
    if (isset($_GET['info']) && $_GET['info'] == 'gresit') {
         echo '<p class="err">Parola este gresita!</p>';
    }
    ?>
      
      
      <button type="submit" class="submit">Autentifică-te</button>
      <a href="signup.php" class="register">Nu ai încă un cont?</a>
    </div>
        </form>
     
</body>
</html>