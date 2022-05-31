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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
</head>
<body>
     <?php foreach ($products as $product) { ?>
        <div class="container">
        <h2><?php echo $product->name; ?></h2>
        <h2>$ <?php echo $product->price; ?></h2>
        <p><?php echo $product->description;?></p>
        <form method="post" action="../controllers/RequestController.php">
        <input type="hidden" name="class" value="product">
        <input type="hidden" name="method" value="edit">
        <input type="submit" value="bewerken">
        </form>
        <form method="post" action="../controllers/RequestController.php">
        <input type="hidden" name="class" value="product">
        <input type="hidden" name="method" value="delete">
        <input type="submit" style="background:pink;" value="verwijderen">
        </form>
        </div>
        <? } ?>
        <div id="add" class="container">
        <form method="post" action="../controllers/RequestController.php">
        <label for="text">Naam:</label>
        <input type="text">
        <label for="text">Prijs:</label>
        <input type="number">
        <label for="text">Beschrijving:</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <input type="hidden" name="class" value="product">
        <input type="hidden" name="method" value="add">
        <input type="submit" style="background:lightgreen;" value="toevoegen">
        </form>
        </div>
</body>
</html>

<script>



</script>

<style>



.container {
    display: flex;
    flex-direction: row;
    align-items: center;
}

div {
    margin: 5px;
    background: white;
    padding: 1em;
    border: 1px solid grey;
}

input {
    padding: 1em;
}

input, h2 {
    margin: 10px;
    font-weight: normal;
}

#add {
    justify-content: flex-start;
    flex-direction: row;
    background: lightgrey;
}

#add > form {
        width: 400px;
    display: flex;
    flex-direction: column;
}

</style>