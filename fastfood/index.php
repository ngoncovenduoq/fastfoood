<?php
  session_start();
  require_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FastFood</title>
    <!-- CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="style.css">
</head>
<style>
</style>
<body>
    <!-- Menu -->
    <div class="menu">
        <nav>
            <label class="logo">
            <img src="images/Logo.jpg" alt="Menu Image" class="menu-image">
            </label>

            <ul>
                <li><a href="index.php" class="active">Trang Chủ</a></li>
                <li><a href="#order">Đặt Hàng</a></li>
                <?php
                if(!empty($_SESSION["user_id"]))
                {
                  echo  '<li><a href="your_orders.php">Your Orders</a></li>';
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
    <!-- End Menu -->
   <!-- Hero Section -->
   <div class="section flex" id="hero-section">
        <div class="text">
            <h1 class="primary">
                Chào Mừng Bạn!</span>
            </h1>

            <p class="tertiary">
            Lotteria là chuỗi nhà hàng thức ăn nhanh trực thuộc tập đoàn Lotte -
            một trong năm tập đoàn lớn nhất Hàn Quốc. Suốt 7 năm liền đứng vị trí số 1 về “Brand Power”,
            được cấp bởi “ Korea Management Association”, và được chọn là vị trí số 1 về năng lực cạnh tranh thương hiệu với danh hiệu
                 “Brand Stock” của cơ quan đánh giá giá trị thương hiệu.
            <a href="#Đặt hàng" class="order-btn">Đặt Hàng Ngay</a>
            </p>
        </div>
        <div class="visual">
            <img src="./images/baner_home.jpg" alt="" />
        </div>
    </div>
    <!-- End Hero Section -->
     <!-- Order -->
     <div class="section" id="order">
        <div class="txt">
            <h1>Đặt Hàng</h1>
        </div>

        <div class="container flex">
    <div class="box" id="burger">
        <img src="images/bg.jpg" alt="">
        <h3>Burger</h3>
        <p>Mang đến một trải nghiệm ẩm thực đa dạng và ngon miệng!</p>
    </div>

    <div class="box active" id="drink">
    <img src="images/nuoc.png" alt="">
        <h3>Drink</h3>
        <p>Thực đơn giúp khách hàng dễ dàng lựa chọn những gì để thưởng thức?</p>
    </div>

    <div class="box" id="abv">
    <img src="images/ga.png" alt="">
        <h3>Chicken</h3>
        <p>Đặt hàng nhanh chóng tiện lợi sau vài bước đơn giản?</p>
    </div>
</div>
    <!-- End How It Works -->

    <!-- Footer -->
    <div class="footer">
        <div class="container flex">
            <div class="footer-about">
                <h2>Về Chúng Tôi</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                    aspernatur sit deleniti enim voluptas voluptatum incidunt rerum,
                    exercitationem voluptate nemo quo impedit ad perspiciatis tempore
                    nulla dolore fugit, fuga eos.
                </p>
            </div>
            <div class="footer-category">
                <h2>Menu</h2>

                <ul>
                    <li><a href="order.php">Burger</a></li>
                    <li><a href="order.php">Gà</a></li>
                    <li><a href="order.php">Pizza</a></li>
                    <li><a href="order.php">Nước Uống</a></li>
                </ul>
            </div>

            <div class="quick-links">
                <h2>Thông Tin</h2>

                <ul>
                    <li><a href="#">Câu Chuyện</li>
                    <li><a href="#">Khuyến Mãi</li>
                    <li><a href="https://www.youtube.com/@MrBeast">Youtube</li>
                    <li><a href="https://www.facebook.com/tonducthanguniversity">Facebook</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/8b0381ba24.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script>
    document.querySelectorAll('.box').forEach(box => {
        box.addEventListener('click', function() {

            const boxId = this.id;
            if (boxId === 'burger') {
                window.location.href = 'dishes.php?category=1';
            } else if (boxId === 'drink') {
                window.location.href = 'dishes.php?category=2';
            } else if (boxId === 'abv') {
                window.location.href = 'dishes.php?category=3';
            }
        });
    });
 
    document.querySelector('a[href="#order"]').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default anchor behavior
        var targetElement = document.getElementById('order');
        targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });

</script>
</body>

</html>