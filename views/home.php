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
    <title>Food</title>
</head>
<body>
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
    margin: 0;
}

@media (max-width:480px) {
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

    img {
        max-width: 250px;
    }


    .txt {
        width: 90%;
        color: black;
        font-weight: normal;
        font-size: 2em;
        text-align: left;
        padding: 5px;
    }

    #desc {
        margin: 0;
        font-size: 1em;
    }
}


</style>