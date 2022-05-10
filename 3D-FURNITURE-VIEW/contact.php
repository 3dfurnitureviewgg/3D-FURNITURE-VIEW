<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/contact.css">
</head>
<body>
  <?php
    include 'navbar.php';
    ?>
   <img src="MEDIA/IMG/Logg2.png" class="imagg12" alt="logo">
    <form action="https://formsubmit.co/6346861923e10462f1a2dcd782f89f6c" method="POST">      
  <input name="name" type="text" class="feedback-input" placeholder="Name" required />   
  <input name="email" type="email" class="feedback-input" placeholder="Email" required/>
  <textarea name="Message" class="feedback-input" placeholder="Comment" required></textarea>
  <input type="submit" value="SUBMIT"/>
</form>
</body>
</html>