<?php

require '../controllers/RequestController.php';

$productController = new ProductController();
$products = $productController->all();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Red+Hat+Display&display=swap" rel="stylesheet">
    <title>Food</title>
</head>
<body>

    <header>
        <nav>
            Surinaams lekkernij
        </nav>
    </header>

    <section>
        <h4>Bestellen</h4>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea quod eveniet possimus accusamus officia cum dolor porro qui aliquam quibusdam id atque, eos, placeat fuga nostrum odit cupiditate saepe enim?</p>
    </section>

    <section>
        <h4>Catering</h4>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea quod eveniet possimus accusamus officia cum dolor porro qui aliquam quibusdam id atque, eos, placeat fuga nostrum odit cupiditate saepe enim?</p>
    </section>

    <section>
        <h4>Afhalen</h4>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea quod eveniet possimus accusamus officia cum dolor porro qui aliquam quibusdam id atque, eos, placeat fuga nostrum odit cupiditate saepe enim?</p>
    </section>

    <?php foreach ($products as $product) { ?>
    <div class="container">
        <img src="../src/kip.jpeg" alt="">
        <strong class="txt"><?php echo $product->name; ?></strong>
        <strong class="txt">€ <?php echo $product->price; ?></strong>
        <p id="desc" class="txt"><?php echo $product->description; ?></p>
    </div>
    <?php } ?>
</body>
</html>


<style>

body {
    background-color: black;
    margin: 0;
    background: url("../src/wood.jpg");
  background-size: 50% 20%;
}

@media (max-width:480px) {

    * {
        font-family: 'Indie Flower', cursive;
    }

    nav {
        background: black;
        text-align: center;
        height: 60px;
        font-size: 2em;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Indie Flower', cursive;
    }

    .container {
        width: 250px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 50px;
        margin-left: auto;
        margin-right: auto;
        background: lightgrey;
    }

    section {
        width: 250px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: stretch;
        margin: auto;
        background: white;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    section > p {
        margin: 30px;
    }


    h4 {
        margin: 0;
        text-align: center;
        background: black;
        color: white;
        height: 45px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        font-size: 25px;
        padding-left: 20px;
    }

    img {
        max-width: 250px;
    }


    .txt {
        width: 90%;
        color: black;
        font-weight: normal;
        font-size: 1.5em;
        text-align: left;
        padding: 5px;
    }

    #desc {
        margin: 0;
        font-size: 1em;
    }
}


</style>