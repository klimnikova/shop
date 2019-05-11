<?php
    $pageConfig = [
        'title'=>'Карточка товара',
        'cssFiles'=>[
            '/css/catalog.css'    
        ],
        'jsFiles'=>[
            '/js/script.js',
            '/js/product.js'
        ]
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

    $template = [
        'product'=>[],
        'sizes'=>[]
    ];

    if( isset($_GET['id']) ){
        $product_id = $_GET['id'];

        $sql = "SELECT * FROM products WHERE id={$product_id}";

        $result = mysqli_query($db, $sql);

        $template['product']= mysqli_fetch_assoc($result);
        
        $sql_sizes = "SELECT * FROM product_sizes WHERE product_id = {$product_id}";
        $result_sizes = mysqli_query($db, $sql_sizes);

        while( $row = mysqli_fetch_assoc($result_sizes) ){
            $template['sizes'][] = $row;     
        }

        echo "<pre>";
        print_r($template['sizes']);
        echo "</pre>";
    }
?>

<h1><?=$template['product']['name']?></h1>
<img src='<?=$template['product']['photo']?>'>
<p><?=$template['product']['price']?> руб.</p>

<div>
    <?php foreach($template['sizes'] as $size): ?>
        <span><?=$size['size']?></span>
    <?php endforeach; ?>
</div>

<button class='add-to-basket' data-product-id='<?=$template['product']['id']?>'>Добавить в корзину</button>
<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?> 