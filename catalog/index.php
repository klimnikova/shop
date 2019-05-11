<?php
    $pageConfig = [
        'title'=>'Каталог',
        'cssFiles'=>[
            '/css/catalog.css'    
        ],
        'jsFiles'=>[
            '/js/script.js',
            '/js/catalog.js'   
        ]
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>
        <main>
            <h1 class="main-header">Мужчинам</h1>
            <div class="catalog">
                
            </div>
            <div class="pagination"></div>
        </main>
    </div>
<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?> 
