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
      <model-viewer src="GLB/scaunTEXTURA.glb" seamless-poster shadow-intensity="1"  enable-pan camera-controls auto-rotate id="ProductImg" class="pro-img" ></model-viewer>
      </div>
    <div class="contentBx">
      <div class="color">
        <button class="btnspa btn1" onclick="changeImage(this)"><model-viewer src="GLB/scaunTEXTURA.glb" seamless-poster shadow-intensity="1"  enable-pan camera-controls auto-rotate id="ProductImg" class="imggg"></model-viewer>
            </button>
        <span><button class="btnspa btn2" onclick="changeImage(this)"> <model-viewer src="GLB/masa2.glb" seamless-poster shadow-intensity="1"  enable-pan camera-controls auto-rotate id="ProductImg" class="wait" ></model-viewer></button></span>
        <span><button class="btnspa btn3" onclick="changeImage(this)"><model-viewer src="GLB/masa3.glb" seamless-poster shadow-intensity="1"  enable-pan camera-controls auto-rotate id="ProductImg" class="wait" ></model-viewer></button></span>
      </div>
    </div>
  </div>
        <div class="col-2">
            <p>Products / Table</p>
            <h1>Table by Haz chungus</h1>
            <h2>$39.99</h2>
            <select>
                <option>
                  Select SIZE  
                </option>
                <option>80-100cm</option>
                <option>100-120cm</option>
                <option>120-140cm</option>
            </select>
            <input type="number" value="1"  min="1" max="100">
            <a href="" class="btn4">Add to Cart</a>
            <h3>Product Details</h3>
            <br>
            <p>Ad de malis ipsum ipsum ubi aut qui amet culpa nulla. Incididunt philosophari 
                ita iudicem, mandaremus si varias ad hic labore irure ea probant do malis 
                ingeniis ita sempiternum. Incididunt aute ita commodo coniunctione de si lorem 
                deserunt concursionibus, se ab exquisitaque est ab lorem amet est laboris. 
                Laboris nisi qui deserunt coniunctione, ingeniis irure aliqua pariatur dolore te 
                doctrina iis quis quamquam de eu varias varias quorum mandaremus. Ab do anim 
                arbitror, iis quem est ipsum, non quae anim quo ullamco </p>
        </div>
    </div></div> 
   </div>
    <script>
    function changeImage(event){
    document.querySelector(".pro-img").src=(event.children[0].src)
}
    
    </script>
    <?php 
    include 'footer.php';
    ?>
</body>
</html>