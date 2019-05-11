<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
    function d($array) {
        echo '<pre>';
        print_r ($array);
        echo '<pre>';
    }

    
    d($_FILES);

    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

        if (!empty($_POST)) {

            if (!empty($_FILES)) {
                copy( $_FILES['pic']['tmp_name'], '../../images/' . $_POST['sku'] . '-' . $_FILES['pic']['name'] );
            }

            $active = (isset($_POST['active'])) ?  1  : 0 ;

            $query = "INSERT INTO `products` (
                                            `name`, 
                                            `sku`, 
                                            `description`, 
                                            `price`, 
                                            `photo`, 
                                            `active`, 
                                            `sale`) 
                                    VALUES ('{$_POST['product_name']}', 
                                            '{$_POST['sku']}', 
                                            '{$_POST['description']}', 
                                            '{$_POST['price']}', 
                                            '1.jpg', 
                                            '{$active}', 
                                            '{$_POST['discount']}')
                                        ";
            $result = mysqli_query($db, $query);

            if ( $result ) {
                echo 'Супер! Товар добавлен';
            } else {
                echo 'Что-то пошло не так. Попробуйте еще раз!';
            }

        } else {
            echo 'Необходимые данные не указаны';
        }

    } else {
        echo 'А-та-та';
    }

?>