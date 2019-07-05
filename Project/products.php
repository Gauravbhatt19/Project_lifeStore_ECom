<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container" id="content">
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>

            </div>
            <hr>
            <div class="row text-center" id="cameras">
                <?php 
                $qry= "SELECT * FROM items";
                $result = mysqli_query($con, $qry) or die(mysqli_error($con));
                while($resultset=mysqli_fetch_assoc($result)){
                   $id=$resultset['id'];
                    echo "
                <div class='col-md-3 col-sm-6 home-feature'>
                    <div class='thumbnail'>
                        <img src='img/".$id.".jpg' alt='".$resultset['name']." '>
                        <div class='caption'>
                            <h3>".$resultset['name']. "</h3>
                            <p>Price: Rs. ".$resultset['price'].".00 </p>";
                            ?>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href='login.php' role='button' class='btn btn-primary btn-block'>Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart($id)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                      <a <?php echo 'href="cart-add.php?id='.$id.'"'; ?> name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            
                        echo "</div>
                    </div>
                </div>";
            if($id==4) break;}
                ?>
            </div>
 <div class="row text-center" id="watches">
                <?php 
                while($resultset=mysqli_fetch_assoc($result)){
                    $id=$resultset['id'];
                    echo "
                <div class='col-md-3 col-sm-6 home-feature'>
                    <div class='thumbnail'>
                        <img src='img/".$id.".jpg' alt='".$resultset['name']." '>
                        <div class='caption'>
                            <h3>".$resultset['name']. "</h3>
                            <p>Price: Rs. ".$resultset['price'].".00 </p>";
                            ?>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href='login.php' role='button' class='btn btn-primary btn-block'>Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart($id)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a <?php echo 'href="cart-add.php?id='.$id.'"'; ?> name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            
                       echo "</div>
                    </div>
                </div>";
            if($id==8) break;}
                ?>
            </div>

             <div class="row text-center" id="shirts">
                <?php 
                while($resultset=mysqli_fetch_assoc($result)){
                    $id=$resultset['id'];
                    echo "
                <div class='col-md-3 col-sm-6 home-feature'>
                    <div class='thumbnail'>
                        <img src='img/".$id.".jpg' alt='".$resultset['name']." '>
                        <div class='caption'>
                            <h3>".$resultset['name']. "</h3>
                            <p>Price: Rs. ".$resultset['price'].".00 </p>";
                            ?>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href='login.php' role='button' class='btn btn-primary btn-block'>Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart($id)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                   <a <?php echo 'href="cart-add.php?id='.$id.'"'; ?> name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                              echo "</div>
                    </div>
                </div>";
            if($id==12) break;}
                ?>
            </div>
            <hr>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>

</html>
