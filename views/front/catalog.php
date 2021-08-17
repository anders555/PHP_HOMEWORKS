<?php
/**
 * @var $connection mysqli
 */
$sql = "SELECT * FROM products";
$res = mysqli_query($connection, $sql);
$products = mysqli_fetch_all($res, MYSQLI_ASSOC);
// debug($products);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Homepage - List of articles</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/assets/css/styles_php.css" rel="stylesheet"/>
</head>

<body>

<?php include_once __DIR__ . "/../partials/main_menu.php" ?>
<!--<?php include_once __DIR__ . "/../partials/header.php" ?> -->
<div class="container">
    <h2>Каталог товаров</h2>
</div>
<div class="container">
<?php foreach($products as $product):?>
    <div class="product-item">
        <?php  
        if (!empty($product['image'])){
            $image = $product['image'];
        } else {
            $image = 'data:image/webp;base64,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';
        }
        ?>
        <img src="<?=$image?>" alt="<?= $product['name']?>">
        <div class="product-list">
            <h3><a href="/product?id=<?= $product['id']?>"><?= $product['name']?></a></h3>
            <span class="price"><?= $product['price']?></span>
            <span class="button">В корзину</span>
        </div>
    </div>
    <?php endforeach; ?>
 

</div>


<section class="pagination">
    <p class="pagination-num">1</p>
    <p class="pagination-num">2</p>
    <p class="pagination-num">3</p>
    <p class="pagination-num">4</p>
    <p class="pagination-num">5</p>
</section>
<?php include_once __DIR__ . '/../partials/footer.php' ?>
</body>

</html>