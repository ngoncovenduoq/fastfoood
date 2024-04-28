<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="menu">
        <nav>
            <label class="logo">
            <img src="images/Logo.jpg" alt="Menu Image" class="menu-image">
            </label>

            <ul>
                <li><a href="index.php" class="active">Trang Chủ</a></li>
                <li><a href="#">Đặt Hàng</a></li>
                <?php
                if(!empty($_SESSION["user_id"]))
                {
                  echo  '<li><a href="#">Your Orders</a></li>';
                  echo  '<li><a href="logout.php">Logout</a></li>';
                }
                else
                {
                  echo '<li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>';
                }
                ?>
                <li><a href="cart.php" class="text-decoration-none text-dark"><i class="fas fa-shopping-cart"></i></a></li>
                <li><a href="" class="text-decoration-none text-dark"><i class="fa-solid fa-user icon-unchanged"></i></a></li>
                <?php
                if (isset($_SESSION['cart'])) {
                  $count = count($_SESSION['cart']);
                  echo '<div class="position-absolute rounded-circle cart"><span id="cart_count">' . $count . '</span></div>';
                } else {
                  echo '<div class="position-absolute rounded-circle cart"><span id="cart_count">0</span></div>';
                }
                ?>
            </ul>
        </nav>
</div>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/8b0381ba24.js" crossorigin="anonymous"></script>
</body>
</html>