<?php


// require_once "../classes/cart.php";

// $cart_obj = new Cart;

// if(isset($_POST['buy_product'])){ 
//     session_start();

//     $id = $_GET['product_id'];
//     $qty = $_POST['buy_quantity'];
//     $user_id = $_SESSION['id'];

//     //echo "$id, $qty, $user_id";
//     $cart_obj->addToCart($user_id, $id, $qty);
// }



?>

<?php
// session_start();

// require_once "../classes/cart.php";
// require_once "../classes/database.php";

// include "../classes/product.php";

// $product_obj = new Product;

// $product_details = $product_obj->displaySpecificBedProduct($_GET['product_id'])



// $id = $_GET['product_id'];
// $qty = $_POST['buy_quantity'];
// $user_id = $_SESSION['id'];

// $cart_obj = new Cart;

// $cart_obj->addToCart($user_id, $id, $qty);

?>


<?php


    include "../classes/product.php";

    include "../classes/cart.php";

    // include "../sales-view/bed-items/view-bed.php";






    $product_obj = new Product;
   

    $product_obj->displaySpecificBedProduct($_GET['product_id']);

    if(isset($_POST['buy_product'])){ 
       
        session_start();

       
   

        $id = $_GET['product_id'];
        $qty = $_POST['buy_quantity'];
        $user_id = $_SESSION['user_id'];

        $cart_obj = new Cart;

        //echo "$id, $qty, $user_id";
        $cart_obj->addToCart($user_id, $id, $qty);



    }
?>



<!-- <form action="../../actions/cart-actions.php" method="post"> -->


