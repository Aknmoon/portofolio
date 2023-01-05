<?php


include "../classes/product.php";

$product_obj = new Product;

$product_list = $product_obj->displayAllCandleProducts();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANDLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/main-styles.css">
    <link rel="stylesheet" href="../assets/footer.css">

    <link rel="stylesheet" href="../assets/products.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <?php include "menu.php"; ?>
        </header>

        <div class="iloom-candle" id="iloom-candle">
            <div class="iloom-candle-header">
                <span>iloom</span>
                <h2>iloom Candle Products</h2>
                <hr>
            </div>

            <div class="iloom-candle-gallery">
            
                <?php
                while($product_details = $product_list->fetch_assoc()){
                ?>

                    <div class="iloom-candle-items">
                        <?php
                        echo "<img src='../images/" .$product_details['photo'] . "' alt='' class='card-img-bottom'>";
                        ?>

                        <!-- koko -->
                        <!-- a href  bedにしてる -->
                        <!-- a href  bedにしてる -->
                        <!-- 
                            "<a href='../sales-view/bed-items/view-bed.php?product_id="
                            から
                            <a href='../sales-view/view-items.php?product_id="

                            "<a href='view-each-items.php?product_id="
                            に変えた
                         -->
                        <h6><?php
                        echo "<a href='view-each-items.php?product_id=".$product_details['id']."' alt=''>".$product_details['product_name']."</a>";
                        ?></h6>
                        <span>*****</span>
                        <p>$<?= $product_details['price']?>.00</p>
                    
                    </div>                   

                <?php
                }
            
                ?>
                
            </div>

        </div>

        <!--  -->

        



        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </div>

    
</body>
</html>