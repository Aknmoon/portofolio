

<?php

session_start();

include "../classes/product.php";

$product_obj = new Product;

foreach ($_SESSION['cart'] as $id => $quantity) {
    // echo "$id $quantity";

    $product_details = $product_obj->displaySpecificBedProduct($id);

    echo "Product Name: ".$product_details['product_name'] ."<br>";
    echo "Product price: ".$product_details['price']." <br>";
    // echo "<img src='../images/".$product_details['photo']."'> <br>";
    echo "Quantity: $quantity <br>";

   echo "<a href='remove-cart.php?id=$id'>Remove</a>";

}



?>




<?php
                    while($product_details = $product_list->fetch_assoc()){
                    ?>

    
                    <div class="iloom-bed-items">
                        <?php
                        echo "<img src='../images/" .$product_details['photo'] . "' alt='' class='card-img-bottom'>";
                        ?>


                        <h6><?php
                        echo "<a href='../sales-view/bed-items/view-bed.php?product_id=".$product_details['id']."' alt=''>".$product_details['product_name']."</a>";
                        ?></h6>
                        <span>*****</span>
                        <p>$<?= $product_details['price']?>.00</p>
                    
                    </div>


                    <?php
                    }
                
                    ?>