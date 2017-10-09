<?php require 'inc/head.php';

if (!$_SESSION) {
    header('location: login.php');
}

?>
<section class="cookies container-fluid">

    <div class="row">

        <?php

        if ($_COOKIE['product']) {

            $data = $_COOKIE['product'];
            $data= html_entity_decode($data);
            $myProductArray= unserialize($data);
            ?>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/<?php echo $myProductArray['Img']; ?>" alt="<?php echo $myProductArray['Title']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?php echo $myProductArray['Title']; ?></h3>
                        <p>Cooked by <?php echo $myProductArray['Cook']; ?> !</p>
                        <a href="?add_to_cart=36" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>


        <?php }

        else{

            ?>

            <div class="container">
                <div class="col-xs-12 text-center">
                    <h2>Sorry, your cart is empty (for now...)</h2>
                </div>
            </div>

            <?php

        }

        ?>

    </div>

</section>
<?php require 'inc/foot.php'; ?>
