<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop</title>
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

        <link rel="stylesheet" href="/database_project/beforelogin/style.css">
    </head>

    <body>
        <section id="header">
            <a href="afterlogin.html" class="headerlogo">ARHERELEE</a>
            
            <div>
                <ul id="navbar-after">
                    <li><a href="afterlogin.php">HOME</a></li>
                    <li><a class="active" href="afshop.php">SHOP</a></li>
                    <li><a href="table.php">TABLE</a></li>
                    <!-- <li><a href="blog.php">BLOG</a></li> -->
                    <li><a href="/beforelogin/index.php">LOGOUT</a></li>
                    <li><a href="accountsetting.php">ACCOUNT SETTING</a></li>
                    <li id="lg-bag"><a href="/afterlogin/afcart.php"><i class='bx bx-shopping-bag'></i></a></li>
                    <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="cart.php"><i class='bx bx-shopping-bag'></i></a>
                <i id="bar" class="fas fa-outdent"></i>
                
            </div>
        </section>

        <section id="page-header">
            
            <!-- <h2>AR-HERE-LEE</h2>
            
            <p>เอนจอยค้าบโผม</p> -->
            
        </section>

        <section id="product1" class="section-p1">
            <h2>MENU ARHERELEE</h2>
            <div class="pro-container">
                <div class="pro" onclick="window.location.href='afsproduct.php';">
                    <img src="/database_project/img/products/burger.jpg" alt="">
                    <div class="des">
                        <span>Fast food</span>
                        <h5>Burger คำโตๆ</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>79 บาท</h4>
                    </div>
                    <a href="afsproduct.php"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct2.php';">
                    <img src="/database_project/img/products/กะเพราหมูกรอบ.jpg" alt="">
                    <div class="des">
                        <span>Thai Food</span>
                        <h5>กระเพราะหมูกรอบ</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>70 บาท</h4>
                    </div>
                    <a href="afsproduct2.php"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct3.php';">
                    <img src="/database_project/img/products/ขนมจีบกุ้ง.jpg" alt="">
                    <div class="des">
                        <span>Chinese Food</span>
                        <h5>ขนมจีบกุ้ง</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>25 บาท</h4>
                    </div>
                    <a href="#"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro"onclick="window.location.href='afsproduct4.php';">
                    <img src="/database_project/img/products/ข้าวผัดปู.jpg" alt="">
                    <div class="des">
                        <span>Thai Food</span>
                        <h5>ข้าวผัดปู</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>80 บาท</h4>
                    </div>
                    <a href="#"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct5.php';">
                    <img src="/database_project/img/products/ซาลาเปาหมูสับไข่เค็ม.jpg" alt="">
                    <div class="des">
                        <span>Chinese Food</span>
                        <h5>ซาลาเปาหมูสับไข่เค็ม</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>30 บาท</h4>
                    </div>
                    <a href="#"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct6.php';">
                    <img src="/database_project/img/products/ต้มยำกุ้ง.jpg" alt="">
                    <div class="des">
                        <span>Thai Food</span>
                        <h5>ต้มยำกุ้ง</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>80 บาท</h4>
                    </div>
                    <a href="#"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct7.php';">
                    <img src="/database_project/img/products/บัวลอยไข่หวาน.jpg" alt="">
                    <div class="des">
                        <span>Dessert</span>
                        <h5>บัวลอยไข่หวาน</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>25 บาท</h4>
                    </div>
                    <a href="#"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct8.php';">
                    <img src="/database_project/img/products/ผัดไทยทะเล.jpeg" alt="">
                    <div class="des">
                        <span>Thai Food</span>
                        <h5>ผัดไททะเล</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>70 บาท</h4>
                    </div>
                    <a href="#"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct9.php';">
                    <img src="/database_project/img/products/ส้มตำไทย.jpg" alt="">
                    <div class="des">
                        <span>Thai Food</span>
                        <h5>ส้มตำไทย</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>50 บาท</h4>
                    </div>
                    <a href="#"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct10.php';">
                    <img src="/database_project/img/products/เป็ดปักกิ่งง.jpg" alt="">
                    <div class="des">
                        <span>Chinese Food</span>
                        <h5>เป็ดปักกิ่ง</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>109 บาท</h4>
                    </div>
                    <a href="#"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct11.php';">
                    <img src="/database_project/img/products/แกงส้มกุ้ง.jpeg" alt="">
                    <div class="des">
                        <span>Thai Food</span>
                        <h5>แกงส้มกุ้ง</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>70 บาท</h4>
                    </div>
                    <a href="#"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct12.php';">
                    <img src="/database_project/img/products/โกโก้ปั่น.jpg" alt="">
                    <div class="des">
                        <span>Drink</span>
                        <h5>โกโก้ปั่น</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>30 บาท</h4>
                    </div>
                    <a href="#"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct13.php';">
                    <img src="/database_project/img/products/โกโก้เย็น.jpg" alt="">
                    <div class="des">
                        <span>Drink</span>
                        <h5>โกโก้เย็น</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>25 บาท</h4>
                    </div>
                    <a href="#"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct14.php';">
                    <img src="/database_project/img/products/pepsi 550ml.jpg" alt="">
                    <div class="des">
                        <span>Drink</span>
                        <h5>เป๊ปซี่</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>20 บาท</h4>
                    </div>
                    <a href="#"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct15.php';">
                    <img src="/database_project/img/products/sprite.jpg" alt="">
                    <div class="des">
                        <span>Drink</span>
                        <h5>สไปร์ท</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>20 บาท</h4>
                    </div>
                    <a href="#"><i class='bx bx-cart cartbuy'></i></a>
                </div>
                <div class="pro" onclick="window.location.href='afsproduct16.php';">
                    <img src="/database_project/img/products/น้ำแร่.jpg" alt="">
                    <div class="des">
                        <span>Drink</span>
                        <h5>น้ำแร่</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>15 บาท</h4>
                    </div>
                    <a href="sproduct16.php"><i class='bx bx-cart cartbuy'></i></a>
                </div>
            </div>
        </section>

        <section id="pagination" class="section-p1">
            <a href="/database_project/afterlogin/afshop.php">1</a>
            <a href="/database_project/afterlogin/afshop2.php">2</a>
            <a href="/database_project/afterlogin/afshop2.php"><i class="fa-solid fa-arrow-right"></i></a>
        </section>
        
        <script src="/beforelogin/script.js"></script>
        <script src="https://kit.fontawesome.com/10876e5229.js" crossorigin="anonymous"></script>
    </body>

</html>