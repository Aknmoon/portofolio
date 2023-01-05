<?php


include "../classes/product.php";

$product_obj = new Product;

$product_list = $product_obj->displayAllChairProducts();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chair</title>
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

        <div class="iloom-chair" id="iloom-chair">
            <div class="iloom-chair-header">
                <span>iloom</span>
                <h2>iloom Chair Products</h2>
                <hr>
            </div>

            <div class="iloom-chair-gallery">
                <?php
                while($product_details = $product_list->fetch_assoc()){
                ?>

                    <div class="iloom-chair-items">
                        <?php
                        echo "<img src='../images/" .$product_details['photo'] . "' alt='' class='card-img-bottom'>";
                        ?>

                        <!-- koko -->
                        <!-- a href  bedにしてる -->
                        <!-- 
                            "<a href='../sales-view/bed-items/view-bed.php?product_id="
                            から
                            <a href='../sales-view/view-items.php?product_id="
                            から
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
                <!-- <div class="iloom-chair-items">
                    <img src="../images/chair1.png" alt="">
                    <h6><a href="../sales-view/bed-items/Dransfield.php">Dra</a></h6>
                    <span>*****</span>
                    <p>$90.00</p>
                </div>

                <div class="iloom-chair-items">
                    <img src="../images/chair8.png" alt="">
                    <h6><a href="../sales-view/bed-items/Brendon.php">Bren</a></h6>
                    <span>*****</span>
                    <p>$70.00</p>
                </div>

                <div class="iloom-chair-items">
                    <img src="../images/chair9.png" alt="">
                    <h6><a href="../sales-view/bed-items/Marlon.php">Ma</a></h6>
                    <span>*****</span>
                    <p>$80.00</p>
                </div>

                <div class="iloom-chair-items">
                    <img src="../images/chair11.png" alt="">
                    <h6><a href="../sales-view/bed-items/Gilmour.php">Gilr</a></h6>
                    <span>*****</span>
                    <p>$100.00</p>
                </div>

                <div class="iloom-chair-items">
                    <img src="../images/chair19.png" alt="">
                    <h6><a href="../sales-view/bed-items/Runchman.php">Ruman</a></h6>
                    <span>*****</span>
                    <p>$110.00</p>
                </div>

                <div class="iloom-chair-items">
                    <img src="../images/chair4.png" alt="">
                    <h6><a href="../sales-view/bed-items/McSorley.php">Mcey</a></h6>
                    <span>*****</span>
                    <p>$95.00</p>
                </div>

                <div class="iloom-chair-items">
                    <img src="../images/chair3.png" alt="">
                    <h6><a href="../sales-view/bed-items/Beaumont.php">Bent</a></h6>
                    <span>*****</span>
                    <p>$120.00</p>
                </div>

                <div class="iloom-chair-items">
                    <img src="../images/chair6.png" alt="">
                    <h6><a href="../sales-view/bed-items/Reading.php">Reang</a></h6>
                    <span>*****</span>
                    <p>115.00</p>
                </div> -->
            </div>
        </div>

        <!--  -->

        



        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </div>

    
</body>
</html>