
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid navbar-light bg-light">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Shopping Cart</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <li>
        <?php
        if(!empty($_SESSION["shopping_cart"])) {
        $cart_count = count(array_keys($_SESSION["shopping_cart"]));
        ?>
        <div class="cart_div">
        <a href="cart.php">
        <img src="cart-icon.png"/>Cart
        <span><?php echo $cart_count; ?></span></a>
        </div>
        <?php
        }
        ?>
    </li>
    </ul>
</nav>
</header>






