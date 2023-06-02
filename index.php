<?php
include "php/database.php";


$result = mysqli_query($link, "SELECT * FROM `message` WHERE 1");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header_wrapper">
                <div class="header_wrapper-item">
                    <div class="hamb menu catalog">
                        <div class="hamb__field" id="hamb">
                            <span class="bar"></span> <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>
                    <div class="header_logo">
                        <a href="#"><img src="img/LOGO.svg" alt="LOGO"></a>
                    </div>
                    <div class="header_adress">
                        <p> <img src="img/map.svg" alt=""> <span class="strong"> Ростов-на-Дону</span> ул. Ленина, 2Б</p>
                    </div>
                </div>
                <div class="header_wrapper-item">
                    <div class="header_number">
                        <a href="#"> <img src="img/whatsapp 1.png" alt="">+7(863) 000 00 00 <span class="header_number-mobile">Ростов-на-Дону</span> </a>
                    </div>
                    <div class="header_record">
                        <button>Записаться на прием</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
    <div class="messages">
            <div class="messages_wrapper">
                <div class="form-close">
                    
                </div>
                <form class="messages_wrapper-form" action="php/sandmail.php" method="POST">
                    <input class="message-text" type="text" placeholder="Введите ваше Ф.И.О" maxlength="50" name="message" required>
                    <input class="message-text" type="number" name="number" placeholder="Ваш возраст" required>
                    <input class="message-text" type="email" name="email" placeholder="Введите ваш email" maxlength="50" required>                    
                    <input class="message-sumbit" type="submit" value="Отправить письмо">
                </form>
            </div>
        </div>
        <div class="header_menu">
            <div class="container">
                <nav class="menu">
                    <ul>
                        <li><a href="#">О клинике</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Специалисты</a></li>
                        <li><a href="#">Цены</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                    <div class="header_record header_record-mobile">
                        <button>Записаться на прием</button>
                    </div>
                </nav>
            </div>
        </div>
        <div class="welcome">
            <div class="welcome_content">
                <div class="container">
                    <div class="welcome_body">
                        <div class="welcome_text">
                            <h2>Многопрофильная клиника для детей и взрослых</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome_image">
                <img src="img/welcome.jpg" alt="">
            </div>
        </div>
        <!-- <div class="container">
            <div class="slider">
                <div class="slider-line">
                    <img src="img/doctor-working-table 1.jpg" alt="">
                    <img src="img/doctor-working-table 1.jpg" alt="">
                    <img src="img/doctor-working-table 1.jpg" alt="">
                    <img src="img/doctor-working-table 1.jpg" alt="">
                    <img src="img/doctor-working-table 1.jpg" alt="">
                </div>
            </div>
            <button class="button slider-prev">Prev</button>
            <button class="button slider-next">Next</button>

        </div> -->
        <!-- <div class="checkup">
            <div class="container">
                <div class="checkup_wrapper">
                    <div class="slider">
                        <div class="slider-line">
                            <div class="slider-item">
                                <div class="checkup_men">
                                    <h5 class="checkup_men-title">Check-UP </h5>
                                    <h6>для мужчин</h6>
                                    <p><span class="service">Гормональный скрининг1</span></p>
                                    <p><span class="service">Тестостерон</span></p>
                                    <p><span class="service">Свободный тестостерон</span></p>
                                    <p><span class="service">Глобулин, связывающий половые гормоны</span></p>
                                    <div class="sale"> <span class="price">Всего 2800₽ <s class="damn"> 3500₽</s> </span> </div>
                                    <div class="checkup_men-btn">
                                        <button class="checkup_men-btn-record">Записаться</button>
                                        <button class="checkup_men-btn-more">Подробнее</button>
                                    </div>
                                </div>
                                <div class="checkup_img">
                                    <img src="img/doctor-working-table 1.jpg" alt="">
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="checkup_men">
                                    <h5 class="checkup_men-title">Check-UP </h5>
                                    <h6>для мужчин</h6>
                                    <p><span class="service">Гормональный скрининг1</span></p>
                                    <p><span class="service">Тестостерон</span></p>
                                    <p><span class="service">Свободный тестостерон</span></p>
                                    <p><span class="service">Глобулин, связывающий половые гормоны</span></p>
                                    <div class="sale"> <span class="price">Всего 2800₽ <s class="damn"> 3500₽</s> </span> </div>
                                    <div class="checkup_men-btn">
                                        <button class="checkup_men-btn-record">Записаться</button>
                                        <button class="checkup_men-btn-more">Подробнее</button>
                                    </div>
                                </div>
                                <div class="checkup_img">
                                    <img src="img/doctor-working-table 1.jpg" alt="">
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="checkup_men">
                                    <h5 class="checkup_men-title">Check-UP </h5>
                                    <h6>для мужчин</h6>
                                    <p><span class="service">Гормональный скрининг1</span></p>
                                    <p><span class="service">Тестостерон</span></p>
                                    <p><span class="service">Свободный тестостерон</span></p>
                                    <p><span class="service">Глобулин, связывающий половые гормоны</span></p>
                                    <div class="sale"> <span class="price">Всего 2800₽ <s class="damn"> 3500₽</s> </span> </div>
                                    <div class="checkup_men-btn">
                                        <button class="checkup_men-btn-record">Записаться</button>
                                        <button class="checkup_men-btn-more">Подробнее</button>
                                    </div>
                                </div>
                                <div class="checkup_img">
                                    <img src="img/doctor-working-table 1.jpg" alt="">
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="checkup_men">
                                    <h5 class="checkup_men-title">Check-UP </h5>
                                    <h6>для мужчин</h6>
                                    <p><span class="service">Гормональный скрининг1</span></p>
                                    <p><span class="service">Тестостерон</span></p>
                                    <p><span class="service">Свободный тестостерон</span></p>
                                    <p><span class="service">Глобулин, связывающий половые гормоны</span></p>
                                    <div class="sale"> <span class="price">Всего 2800₽ <s class="damn"> 3500₽</s> </span> </div>
                                    <div class="checkup_men-btn">
                                        <button class="checkup_men-btn-record">Записаться</button>
                                        <button class="checkup_men-btn-more">Подробнее</button>
                                    </div>
                                </div>
                                <div class="checkup_img">
                                    <img src="img/doctor-working-table 1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="buttons">
                            <button class="button slider-prev">&larr;</button>
                            <p> <span class="value-left">1</span>/4</p>
                            <button class="button slider-next">&rarr;</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="checkup">
            <div class="container">
                <div class="checkup_wrapper">
                    <div class="slider">
                        <div class="slider-line">
                        <?php
                         while($messages = mysqli_fetch_assoc($result))
                         {
                            ?> 
                            <div class="slider-item">
                                <div class="slider-item_left">
                                    <h5 class="checkup_men-title">Check-UP </h5>
                                    <h6>для мужчин</h6>
                                    <p><span class="service"> <?php echo $messages['p1'] ?></span></p>
                                    <p><span class="service"> <?php echo $messages['p2'] ?></span></p>
                                    <p><span class="service"> <?php echo $messages['p3'] ?></span></p>
                                    <p><span class="service"> <?php echo $messages['p4'] ?></span></p>
                                    <div class="sale"> <span class="price">Всего 2800₽ <s class="damn"> 3500₽</s> </span> </div>
                                    <div class="checkup_men-btn">
                                        <button class="checkup_men-btn-record">Записаться</button>
                                        <button class="checkup_men-btn-more">Подробнее</button>
                                    </div>
                                </div>
                                <div class="slider-item_right">
                                    <img src="img/doctor-working-table 1.jpg" alt="">
                                </div>
                            </div>

                            <?php
                         }
                        ?>
                            <!-- <div class="slider-item">
                                <div class="slider-item_left">
                                    <h5 class="checkup_men-title">Check-UP </h5>
                                    <h6>для мужчин</h6>
                                    <p><span class="service">Гормональный скрининг</span></p>
                                    <p><span class="service">Тестостерон</span></p>
                                    <p><span class="service">Свободный тестостерон</span></p>
                                    <p><span class="service">Глобулин, связывающий половые гормоны</span></p>
                                    <div class="sale"> <span class="price">Всего 2800₽ <s class="damn"> 3500₽</s> </span> </div>
                                    <div class="checkup_men-btn">
                                        <button class="checkup_men-btn-record">Записаться</button>
                                        <button class="checkup_men-btn-more">Подробнее</button>
                                    </div>
                                </div>
                                <div class="slider-item_right">
                                    <img src="img/doctor-working-table 1.jpg" alt="">
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="slider-item_left">
                                    <h5 class="checkup_men-title">Check-UP </h5>
                                    <h6>для мужчин</h6>
                                    <p><span class="service">Гормональный скрининг</span></p>
                                    <p><span class="service">Тестостерон</span></p>
                                    <p><span class="service">Свободный тестостерон</span></p>
                                    <p><span class="service">Глобулин, связывающий половые гормоны</span></p>
                                    <div class="sale"> <span class="price">Всего 2800₽ <s class="damn"> 3500₽</s> </span> </div>
                                    <div class="checkup_men-btn">
                                        <button class="checkup_men-btn-record">Записаться</button>
                                        <button class="checkup_men-btn-more">Подробнее</button>
                                    </div>
                                </div>
                                <div class="slider-item_right">
                                    <img src="img/doctor-working-table 1.jpg" alt="">
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="slider-item_left">
                                    <h5 class="checkup_men-title">Check-UP </h5>
                                    <h6>для мужчин</h6>
                                    <p><span class="service">Гормональный скрининг</span></p>
                                    <p><span class="service">Тестостерон</span></p>
                                    <p><span class="service">Свободный тестостерон</span></p>
                                    <p><span class="service">Глобулин, связывающий половые гормоны</span></p>
                                    <div class="sale"> <span class="price">Всего 2800₽ <s class="damn"> 3500₽</s> </span> </div>
                                    <div class="checkup_men-btn">
                                        <button class="checkup_men-btn-record">Записаться</button>
                                        <button class="checkup_men-btn-more">Подробнее</button>
                                    </div>
                                </div>
                                <div class="slider-item_right">
                                    <img src="img/doctor-working-table 1.jpg" alt="">
                                </div>
                            </div> -->
                        </div>
                        <div class="buttons">
                            <button class="button slider-prev">&larr;</button>
                            <p> <span class="value-left">1</span>/4</p>
                            <button class="button slider-next">&rarr;</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer_wrapper">
                <div class="footer_wrapper-logo">
                    <a href=""><img src="img/logoFoter.png" alt=""></a>
                </div>
                <div class="footer_wrapper-nav">
                    <nav class="nav">
                        <ul>
                            <li><a href="#">О клинике</a></li>
                            <li><a href="#">Услуги</a></li>
                            <li><a href="#">Специалисты  </a></li>
                            <li><a href="#">Цены</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="footer_wrapper-message">
                    <div class="nav">
                        <ul>
                            <li>
                                <a href="#"> <img src="img/instagram 4 1.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/whatsapp 1 1.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"> <img src="img/telegram 1.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/slider.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/form.js"></script>
</body>

</html>