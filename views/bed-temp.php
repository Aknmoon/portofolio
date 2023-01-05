<?php


include "../classes/product.php";

$product_obj = new Product;

$product_list = $product_obj->displayAllBedProducts();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BED</title>
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

        <div class="iloom-bed" id="iloom-bed">
            <div class="iloom-bed-header">
                <span>iloom</span>
                <h2>iloom Bed Products</h2>
                <hr>
            </div>

            <?php
            while($product_details = $product_list->fetch_assoc()){
            ?>

                <div class="iloom-bed-gallery">
                    <div class="iloom-bed-items">
                        <img src="../images/bed1.png" alt="">
                        <h6><a href="../sales-view/bed-items/Dransfield.php"><?= $product_details['product_name']?></a></h6>
                        <span>*****</span>
                        <p>$<?= $product_details['price']?>.00</p>
                    </div>

                    <div class="iloom-bed-items">
                        <img src="../images/bed4.png" alt="">
                        <h6><a href="../sales-view/bed-items/Brendon.php">Brendon</a></h6>
                        <span>*****</span>
                        <p>$170.00</p>
                    </div>

                    <div class="iloom-bed-items">
                        <img src="../images/bed5.png" alt="">
                        <h6><a href="../sales-view/bed-items/Marlon.php">Marlon</a></h6>
                        <span>*****</span>
                        <p>$180.00</p>
                    </div>

                    <div class="iloom-bed-items">
                        <img src="../images/bed3.png" alt="">
                        <h6><a href="../sales-view/bed-items/Gilmour.php">Gilmour</a></h6>
                        <span>*****</span>
                        <p>$100.00</p>
                    </div>

                    <div class="iloom-bed-items">
                        <img src="../images/bed8.png" alt="">
                        <h6><a href="../sales-view/bed-items/Runchman.php">Runchman</a></h6>
                        <span>*****</span>
                        <p>$110.00</p>
                    </div>

                    <div class="iloom-bed-items">
                        <img src="../images/bed6.png" alt="">
                        <h6><a href="../sales-view/bed-items/McSorley.php">McSorley</a></h6>
                        <span>*****</span>
                        <p>$195.00</p>
                    </div>

                    <div class="iloom-bed-items">
                        <img src="../images/bed9.png" alt="">
                        <h6><a href="../sales-view/bed-items/Beaumont.php">Beaumont</a></h6>
                        <span>*****</span>
                        <p>$120.00</p>
                    </div>

                    <div class="iloom-bed-items">
                        <img src="../images/bed2.png" alt="">
                        <h6><a href="../sales-view/bed-items/Reading.php">Reading</a></h6>
                        <span>*****</span>
                        <p>115.00</p>
                    </div>
                </div>

                <?php
                }
                        
                ?>
        </div>

        <!--  -->

        



        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </div>

    
</body>
</html>