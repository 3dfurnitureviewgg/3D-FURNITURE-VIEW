<?php

$num_products_on_each_page = 4;
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY id ASC LIMIT ?, ?;');
$stmt->bindValue(1,($current_page - 1)* $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();

$products = $stmt ->fetchALL(PDO::FETCH_ASSOC);
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
$pdo = NULL;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/obiectetest.css">
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    

    <title></title>
</head>
  <body>
    <?php
    include 'navbar.php';
    ?>
    <?php
    include 'bg.php';
    ?>  
    
    <div id="container">
        
    <div id="main">
       
       <h1 class="orez" id="obj">Produse</h1>
        <div class="row">
     <?php foreach ( $products as $product):?>
 <div class="container ctn1">
   <div class="card">
      
    <div class="imgBx">
      <img src="./images/<?=$product['img1']?>" class="<?=$product['class']?>">
      </div>
    <div class="contentBx">
      <h2><?=$product['name']?></h2>
      <div class="color">
        <h3>Color :</h3>
        <span><button class="btnspa btn1" onclick="<?=$product['change']?>(this)">
             <img src="./images/<?=$product['img1']?>" class="hood">
            </button></span>
        <span><button class="btnspa btn2" onclick="<?=$product['change']?>(this)"><img src="./images/<?=$product['img2']?>" class="hood"></button></span>
        <span><button class="btnspa btn3" onclick="<?=$product['change']?>(this)"><img src="./images/<?=$product['img3']?>" class="hood"></button></span>
      </div>
      <a href="INDEX.php?page=product&id=<?=$product['id']?>">More details</a>
    </div>
  </div>
</div>
    
    
     <?php endforeach; ?>
      </div>
      
      <div class="buttons">
        <?php if ($current_page > 1): ?>
        <div class="schema1"><a href="index.php?page=home&p=<?=$current_page-1?>" class="prev">Prev</a></div>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <div class="schema1"><a href="index.php?page=home&p=<?=$current_page+1?>" class="next" >Next</a></div>
        <?php endif; ?>
    </div>
      
       <script>
    function changeImage1(event){
    document.querySelector(".pro-img1").src=(event.children[0].src)
}
        function changeImage2(event){
    document.querySelector(".pro-img2").src=(event.children[0].src)
}
        function changeImage3(event){
    document.querySelector(".pro-img3").src=(event.children[0].src)
}
        function changeImage4(event){
    document.querySelector(".pro-img4").src=(event.children[0].src)
}
        function changeImage5(event){
    document.querySelector(".pro-img5").src=(event.children[0].src)
}
           function changeImage6(event){
    document.querySelector(".pro-img6").src=(event.children[0].src)
}
           function changeImage7(event){
    document.querySelector(".pro-img7").src=(event.children[0].src)
}
           function changeImage8(event){
    document.querySelector(".pro-img8").src=(event.children[0].src)
}
           function changeImage9(event){
    document.querySelector(".pro-img9").src=(event.children[0].src)
}
    </script>
     </div>
      </div>
         <?php
    include 'footer.php';
    ?>
  
    </body>
</html>
    
     
    
