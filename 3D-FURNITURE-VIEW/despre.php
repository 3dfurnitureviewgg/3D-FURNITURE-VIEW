
<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Document</title>
     <link rel="stylesheet" href="CSS/despre.css">
   
</head>
<body>
  
   <body onLoad="smoothscroll()"></body>
    <?php
    include 'navbar.php';
    ?>
    <div id="container">
          <h1 class="despre">Despre proiectul nostru</h1>
          <h1 class="noi">👱🍀👦</h1>
    <div id="main">
   
     
      <div class="iframe-container">
       <iframe width="1000" height="563" src="https://www.youtube.com/embed/QWWq1aHW-lM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div> 
    </div>
     <h2 class="slogan"><br><br>Vi s-a întâmplat vreodată să vă doriți să cumpărați mobilier și să nu vă dați seama din imagini și descriere dacă este potrivit pentru dumneavoastră? <br><br>Ei bine, 3D Furniture-View este soluția!<br><br></h2>
<h2 class="slogan">
Probabil vă întrebați "Ce face acest site mai exact?"
Ei bine, 3D Furniture-View este un magazin online ce permite utilizatorului să vadă obiectul 3D pe site, sau chiar cum ar arăta acesta în realitate înainte de a-l cumpăra cu ajutorul tehnologiei AR.</h2>
     <h1 class="slogan">
      <br>
      <br><br>
       Ce am învățat din acest proiect? 🕮
       <br>
      <br>
   </h1>
   <ol class="slogan">
     <li><h3>Să lucrăm în echipă 🍃</h3></li>  
     <li><h3>Să scriem cod într-un mod cât mai eficient și simplu ✍🏻</h3></li>  
     <li><h3>Să utilizăm baze de date 🗄️</h3></li>
     <li><h3>Să modelăm obiecte 3D 😎</h3></li>  
     <li><h3>Să avem multă răbdare</h3></li> 
     <li><h3>Și...să ne utilizam eficient timpul! ⏰<br><br><br></h3></li>  
   </ol>
   <?php
    include 'prez.php';
    ?>
    </div>
    
    
    <?php
    include 'footer.php';
    ?>
    <script>
function smoothscroll() {
  document.documentElement.style.scrollBehavior  = "smooth";
}
</script>
</body>
</html>