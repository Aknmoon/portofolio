<?php

session_start();

include "../classes/product.php";
include "../classes/cart.php";

$cart_obj = new Cart;

$cart_details=$cart_obj->displayAllCartProducts($_SESSION['user_id']);


//print_r($cart_details);

$product_obj = new Product;

// print_r($_SESSION['cart']);

//$product_details = $product_obj->displaySpecificProduct($id);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
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

        <div class="iloom-cart" id="iloom-cart">
            <div class="iloom-cart-header">
                <!-- <span>iloom</span>
                <h2>iloom Bed Products</h2> -->
                <hr>
            </div>

            <div class="iloom-cart-gallery">
            
                <div class="row gx-3">
                    <div class="col-9">
                        <?php
                            $total_price=0;

                            while($cart_list = $cart_details->fetch_assoc()){
                            
                            $id=$cart_list['product_id'];
                            $quantity=$cart_list['quantity'];
                            // foreach ($_SESSION['cart'] as $id => $quantity){

                            //echo "$id, $quantity";
                            $product_details = $product_obj->displaySpecificBedProduct($id);

                            $price=$product_details['price'];

                            $total=$price*$quantity;
                            $total_price+=$total;
                        ?>

                        <div class="iloom-cart-items">
                            <?php
                            echo "<img src='../images/" .$product_details['photo'] . "' alt='' class='card-img-bottom'>";
                            ?>


                            <!-- 
                            "<a href='../sales-view/bed-items/view-bed.php?product_id="
                            から
                            <a href='../sales-view/view-items.php?product_id="

                            "<a href='view-each-items.php?product_id="
                            に変えた
                         -->
                            <h6 class="mb-2"><?php
                            echo "<a href='view-each-items.php?product_id=".$product_details['id']."' alt=''>".$product_details['product_name']."</a>";
                            ?></h6>

                            <div class="row mb-2">
                                <div class="col-10 mt-2">
                                    <p>$<?= $price?>.00</p>
                                </div>
                                <!--  -->
                                <div class="col-2">
                                    <a href="../actions/delete-product.php?product_id=<?= $product_details['id'] ?>" class="btn btn-dark text-white btn-sm" title="Delete Product"><i class="fa-solid fa-trash fa-sm"></i></a>
                                </div>
                            <!--  -->
                            </div>


                            <p>Quantity:<?= $quantity?></p>
                            <p>Total:$<?= $total?>.00</p>
                        
                        </div>

                        <?php
                        }
                    
                        ?>
                    </div>

                    <div class="col-3">
                        <h4>ITEMS</h4>
                        <hr>
                        <p class="cart-text">Total items including tax: <span>$<?=$total_price?>.00</span></p>

                        <h5 class="cart-text mb-5"> Total:<span>$<?=$total_price?>.00</span></h5>

                        <!-- <button href="checkout.php" type="submit" class="btn btn-dark w-100 mt-5" name="process_order">PROCESS ORDER</button> -->
                        <a href="checkout.php" class="btn btn-dark w-100 mt-5">Process Order</a>

                    </div>

                </div>
                
            </div>

        </div>

        <!--  -->

        



        <footer>
            <?php include "footer.php"; ?>
        </footer>

    
</body>
</html>