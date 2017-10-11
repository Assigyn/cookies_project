<?php

error_reporting(E_ALL);

require 'inc/head.php';

if(isset($_GET['add_to_cart'])){

    switch ($_GET['add_to_cart']) {
        case 46:
            $productInfo = array('Title'=>'Pecan','Img'=>'product-46.jpeg','Cook'=>'Penny');
            break;
        case 36:
            $productInfo = array('Title'=>'Chocolate Chips','Img'=>'product-36.jpeg','Cook'=>'Bernadette');
            break;
        case 58:
            $productInfo = array('Title'=>'Chocolate Cookies','Img'=>'product-58.jpeg','Cook'=>'Bernadette');
            break;

        case 32:
            $productInfo = array('Title'=>"M&M's cookies",'Img'=>'product-32.jpeg','Cook'=>'Penny');
            break;
    }

    $cookie_data = array();

    if(isset($_COOKIE['cart']) && !empty($_COOKIE['cart']))
    {
        $cookie_data = (array)json_decode($_COOKIE['cart']);
    }

    array_push($cookie_data, $productInfo);

    setcookie('cart', json_encode($cookie_data), time() + 365*24*3600, null, null, false, true);
}

?>

<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpeg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=46" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpeg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=36" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpeg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=58" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpeg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=32" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
