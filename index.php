<?php 
    $pageConfig = [
        'title'=>'Главная',
        'cssFiles'=>[
            '/css/catalog.css'    
        ],
        'jsFiles'=>[
            '/js/script.js'
        ]
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>

<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?> 
