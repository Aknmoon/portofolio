<?php

session_start();

include "../classes/product.php";

include "../classes/cart.php";

$cart_obj = new Cart;

$cart_details=$cart_obj->displayAllCartProducts($_SESSION['user_id']);



$product_obj = new Product;





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
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="../assets/checkout.css">
    <!-- <link rel="stylesheet" href="../assets/main-styles.css"> -->

    <link rel="stylesheet" href="../assets/footer.css">
    <link rel="stylesheet" href="../assets/products.css">

    <link rel="stylesheet" href="../assets/login.css">


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
                <!-- <hr> -->
            </div>

            <div class="iloom-cart-gallery">
            
                <div class="row gx-3">
                    <div class="col-9">
                        
                        <div class="w-75 mx-auto">
                            <form action="order-recieved.php" class="checkout">
                                <h5>DELIVERY ADDRESS</h5>
                                <hr>
                                
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <label for="first-name" class="form-label">First Name <span>*</span></label>
                                        <input type="text" name="first_name" class="form-control" id="first_name" required autofocus>
                                    </div>
                                    <div class="col-6">
                                        <label for="last-name" class="form-label">Last Name <span>*</span></label>
                                        <input type="text" name="last_name" class="form-control" id="last-name" required>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-6">
                                        <label for="postcode" class="form-label">Postcode <span>*</span></label>
                                        <input type="number" name="postcode" id="postcode" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label for="prefecture" class="form-label">Prefecture <span>*</span></label>
                                        <input type="text" name="prefecture" class="form-control" id="prefecture" required>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-6">
                                        <label for="city" class="form-label">City <span>*</span></label>
                                        <input type="text" name="city" class="form-control" id="city" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="addressLines" class="form-label">Town/ Number Apartment's name <span>*</span></label>
                                        <input type="text" name="addressLines" class="form-control" id="addressLines" required>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-6">
                                        <label for="tel" class="form-label">Telephone <span>*</span></label>
                                        <input type="tel" name="tel" class="form-control" id="tel" required>
                                    </div>
                                    
                                </div>


                                <h5 class="payment-details">PAYMENT DETAILS</h5>
                                <hr>

                                <div class="card-icons"> <img src="../images/card.png" alt=""></div>



                                <h6>PAYMENT CARD DETAILS</h6>

                                <div class="row mb-2">
                                    <div class="col-6">
                                        <label for="card-number" class="form-label">Card number <span>*</span></label>
                                        <input type="text" name="card-number" class="form-control" id="card-number" required autofocus>
                                    </div>
                                    <!-- <div class="col-6">
                                        <i class="fas fa-credit-card fa-10x icon-size"></i>
                                    </div> -->
                                </div>

                                <div class="row mb-2">
                                    <div class="col-6">
                                        <label for="name-on-card" class="form-label">Name on card <span>*</span></label>
                                        <input type="text" name="name-on-card" class="form-control" id="name-on-card" required>
                                    </div>
                                    <!-- <div class="col-6">
                                        
                                    </div> -->
                                </div>

                                <div class="row mb-2">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-8">
                                                <p class="card-date">Expiry Date</p>
                                            </div>
                                            <div class="col-4">
                                                <p class="card-date">Security code</p>
                                            </div>


                                        </div>
                                    </div>
                                    <!-- <div class="col-6">
                                        
                                    </div> -->
                                </div>

                                <div class="row mb-2">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <!-- <label for="mm" class="form-label">MM <span>*</span></label> -->
                                                <input type="text" name="mm" class="form-control" id="mm" placeholder="MM*" required>
                                            </div>
                                            <div class="col-4">
                                                <!-- <label for="yy" class="form-label">YY <span>*</span></label> -->
                                                <input type="text" name="yy" class="form-control" id="yy" placeholder="YY*" required>
                                            </div>
                                            <div class="col-4">
                                                <!-- <label for="cvv" class="form-label">CVV <span>*</span></label> -->
                                                <input type="text" name="cvv" class="form-control" id="cvv" placeholder="CVV*" required>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-6">
                                        
                                    </div> -->
                                </div>









                                
                            </form>
                        </div>
                        
                        
                    </div>

                    <div class="col-3">
                        <h4>ITEMS</h4>
                        <hr>
                        <p class="cart-text">Total items including tax: <span>$<?=$total_price?>.00</span></p>

                        <h5 class="cart-text mb-5"> Total:<span>$<?=$total_price?>.00</span></h5>

                        <!-- <button href="checkout.php" type="submit" class="btn btn-dark w-100 mt-5" name="process_order">PROCESS ORDER</button> -->
                        <a href="order-recieved.php" class="btn btn-dark w-100 mt-5">Continue</a>
                        
                    </div>

                </div>
                
            </div>

        </div>

        <!--  -->

        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </div>
    

</body>
</html>





<!-- <div class="reservation" id="Reservation">
        <div class="section-header">
            <h2>Check out</h2>
            <hr>
        </div>

        <div class="row">

            <form action="" method="post">
                <div class="col-6">

                    <label for="fullname">Full Name</label>
                    <input type="text" name="fullname" id="fullname" placeholder="Last Name, First Name" required>

                    <label for="email-address">Email Address:</label>
                    <input type="email" name="email-address"
                    id="email-address" placeholder="mail@mail.com" required>

                    <label for="Phone">Phone Number</label>
                    <input type="telephone" name="Phone"
                    id="Phone" placeholder="(+63)912345678" required>

                    
                    
                </div>
                <div class="col-6">
                    <label for="request">Additional Request</label>
                    <textarea name="request" id="request" cols="30" rows="10" required></textarea>

                    <h3>Payments</h3>
                    <div class="icons"> <img src="assets/images/reservation-cards.png" alt=""></div>

                    <p>Payment Accepted Cards</p>
                    <label for="name-card">Full Name</label>
                    <input type="text" id="name-card" name="name-card" placeholder="John Doe" required>

                    <label for="cc-num">Credit Card Number</label>
                    <input type="number" id="cc-num" name="cc-num" placeholder="123456789" required>

                    <div class="res-agreement">
                        <input type="checkbox" id="agree" name="agree">
                        <label for="agree">I agree in the terms and conditions.</label>
                    </div>

                    <input type="submit" name="submit" value="send">


                </div>

                
            </form>
        </div>
    </div> -->