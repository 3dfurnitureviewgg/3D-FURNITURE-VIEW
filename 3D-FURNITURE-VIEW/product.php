<?php
if (isset($_GET['id'])) {

    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);

    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {

        exit('Product does not exist!');
    }
} else {

    exit('Product does not exist!');
}

$pdo = NULL;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/obiect.css">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    
</head>
<body class="corp">
 <?php
    include 'navbar.php';
    ?>

    
 <div id="container">
<div class="small-container single-product">
    <div class="row">
       <div class="col-2">
      
    <div class="imgBx">
      <model-viewer src="GLB/<?=$product['glb1']?>" seamless-poster autoplay="true" enable-pan camera-controls auto-rotate id="ProductImg" class="<?=$product['class']?>" 
          
      ios-src="<?=$product['usdz']?>" shadow-intensity="3.0" shadow-softness="1.2" auto-rotate-delay="0"     ></model-viewer>
      </div>
    <div class="contentBx">
      <div class="color">
        <button class="btnspa <?=$product['color1']?>" style=" background: url(./images/<?=$product['img1']?>);  background-size: 85px; background-repeat: no-repeat;" onclick="<?=$product['change']?>(this)"><model-viewer src="GLB/<?=$product['glb1']?>" seamless-poster autoplay="true"  shadow-intensity="3.0" shadow-softness="1.2" auto-rotate-delay="0"    enable-pan camera-controls auto-rotate id="ProductImg" class="imggg" ios-src="<?=$product['usdz']?>" ></model-viewer>
            </button>
        <span><button class="btnspa <?=$product['color2']?>"  style=" background: url(./images/<?=$product['img2']?>);  background-size: 85px; background-repeat: no-repeat;" onclick="<?=$product['change']?>(this)"> <model-viewer src="GLB/<?=$product['glb2']?>" seamless-poster autoplay="true"  shadow-intensity="3.0" shadow-softness="1.2" auto-rotate-delay="0"    enable-pan camera-controls auto-rotate id="ProductImg" class="wait" ios-src="<?=$product['usdz']?>" ></model-viewer></button></span>
        
        <span><button class="btnspa <?=$product['color3']?>"  style=" background: url(./images/<?=$product['img3']?>);  background-size: 85px; background-repeat: no-repeat;" onclick="<?=$product['change']?>(this)"><model-viewer src="GLB/<?=$product['glb3']?>" seamless-poster autoplay="true"  shadow-intensity="3.0" shadow-softness="1.2" auto-rotate-delay="0"  enable-pan camera-controls auto-rotate id="ProductImg" class="wait" ios-src="<?=$product['usdz']?>" ></model-viewer></button></span>
      </div>
    </div>
  </div>
        <div class="col-2">
            <h1><?=$product['name']?></h1>
            <h2>$<?=$product['price']?></h2>
            <select>
                <option>
                  Select SIZE  
                </option>
                <option>80-100cm</option>
                <option>100-120cm</option>
                <option>120-140cm</option>
            </select>
            <form action="INDEX.php?page=cart" method="post">
            <input type="number" name="quantity" value="1"  min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required class="norocos">
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" class="btn4" value="Add to Cart">
            </form>
            <h3>Product Details</h3>
            <br>
            <p><?=$product['desc']?> </p>
        </div>
    </div></div> 
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
    </script>
    
<?php
    include 'footer.php';
    ?>
    
</body>
</html>
    