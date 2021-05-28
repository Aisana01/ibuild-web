<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="description" content="Key Slova do 200 slov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>

    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-firestore.js"></script>
    <script src="javascript/authentication.js"></script>
    <script src="javascript/jquery-3.1.0.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="javascript/animate_plugin/animate.css">
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />

</head>

<body>
    <div class="block_img_container">
        <section class="section_log">
            <div class="container">
                <div class="cards_log">
                    <!-- <img src="image/template_index.png"
                    width="200px;"><!-->    
                        <div class="card_log-item">
                            <h5 class="card_log-item--title">
                                Восстановление доступа к странице
                            </h5>
                            <div class="form-group">
                                <form class="ps-form--subscribe-offer" action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
                                    <h6>Введите адрес электронной почты</h6><input class="form_log-control" type="email" name="login" placeholder="Еmail...">
                                    <p><input type="submit" value="Отправить" name="doGo"></p>
                                </form>
                                <!-- <button type="submit" class="btn">Отправить</button> -->
                                <p class="login-footer_log">
                                    <a class="link_style source source-1" href="#">Отмена</a> <br>
                                </p>
                            </div>

                        </div>
                   
                </div>
            </div>
        </section>
        <footer style="max-width: 1350px;margin: auto;">
            <div class="content_blog">
                <div class="top_footer">
                    <div class="introduction">
                        <p class="footer_big_title">iBuild</p>
                        <p class="introduction_words"> Сервис расчета и покупки строительных материалов</p>
                    </div>
                    <div class="navigation">
                        <p class="footer_title">Навигация</p>

                        <a href="">О системе</a><br>
                        <a href="">Контакты</a><br>
                        <a href="">Бренды</a><br>
                        <a href="">Карта сайта</a><br>
                        <a href="">Статьи и советы</a>
                    </div>
                    <div class="contacts">
                        <p class="footer_title">Контакты</p>

                        <a href="">8 707 520 16 99</a><br>
                        <a href="">yelaman.ui@gmail.com</a><br>
                    </div>
                    <div class="subscribtion">
                        <p class="footer_title">Подписка на рассылку</p>

                        <input class="mailing_input" type="text" name="" placeholder="Email">
                        <input class="mailing_input" type="text" name="" placeholder="Ваше имя">
                        <br>
                        <button class="mailing_button">Подписаться</button>
                    </div>
                </div>
                <div class="bottom_footer">
                    <p>© 2020 - iBuild. Все права защищены</p>
                </div>

            </div>
        </footer>
    </div>
</body>

<script>
    $('.toggle-password').on('click', function() {
        $(this).toggleClass('fa-eye fa-eye-slash');
        var input = document.getElementById('password');
       console.log(input);
       console.log(input.type);
        if (input.type == 'password') {
            input.type = 'text';
        } else {
            input.type = 'password';
        }
        console.log(input);
    });
</script>
<script src="javascript/animate_plugin/animate-css.js"></script>
<script src="javascript/common.js"></script>

</html>




<?php
// Подключаем к БД
require_once 'db.php';

// Проверяем нажата ли кнопка отправки формы
if (isset($_REQUEST['doGo'])) {
// Проверка что email введён
if ($_REQUEST['email']) {
$email = $_REQUEST['email'];

// хешируем хеш, который состоит из email и времени
$hash = md5($email . time());

// Переменная $headers нужна для Email заголовка
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "To: <$email>\r\n";
    $headers .= "From: <mail@example.com>\r\n";
        // Сообщение для Email
        $message = '
        <html>

        <head>
            <title>Подтвердите Email</title>
        </head>

        <body>
            <p>Что бы восстановить пароль перейдите по <a href="http://example.com/newpass.php?hash=' . $hash . '">ссылка</a></p>
        </body>

        </html>
        ';

        // Меняем хеш в БД
        mysqli_query($db, "UPDATE `user` SET hash='$hash' WHERE email='$email'");
        // проверка отправилась ли почта
        if (mail($email, "Восстановление пароля через Email", $message, $headers)) {
        // Если да, то выводит сообщение
        echo 'Ссылка для восстановления пароля отправленная на вашу почту';
        } else {
        echo 'Произошла какая то ошибка, письмо отправилось';
        }
        } else {
        // Если ошибка есть, то выводить её
        echo "Вы не ввели Email";
        }
        }
        ?>