<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="description" content="Key Slova do 200 slov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>

    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-firestore.js"></script>
    <script src="javascript/jquery-3.1.0.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="javascript/animate_plugin/animate.css">
    <script src="javascript/authentication.js"></script>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link
        href='https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap'
        rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
    <div class="block_img_container">
    
        <section class="section_log">
            <div class="container">
                <div class="cards_log">
                    <!--<img src="image/kisspng-architectural-plan-architecture-house-the-modern-huizhou-architecture-5aecf8d09d9096.3484312215254796326454.png"
                    width="200px;"><!-->
                    <div class="card_log-item">
                        <h5 class="card_log-item--title">
                            Завести аккаунт
                        </h5>
                        <div class="alert_block">
                            <h6 class="alert_text">Уже есть аккаунт?</h6>
                            <a class="link_style" href="Log.php">Войти</a>
                        </div>
                        <div class="form-group">
                            <form class="form_contact">
                                <input class="form_log-control form_rec" type="text" id="name" placeholder="Имя">
                                <input class="form_log-control form_rec" type="text" id="last_name" placeholder="Фамилия">
                                <input class="form_log-control form_rec" type="text" id="login" placeholder="Email...">
                                <div class="passw_block">
                                <input class="form_log-password form_rec" type="password" id="password" placeholder="Пароль...">
                                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                </div>
                                <div class="passw_block">
                                <input class="form_log-password form_rec" type="password" id="password2"placeholder="Повторите пароль...">
                                        <span toggle="#password2" class="fa fa-fw fa-eye field-icon toggle-password2"></span>

                                </div>
                            </form>
                            <button onclick="registration()" class="btn">Регистрация</button>
                        </div>
                        <p class="login-footer_log">
                        </p>
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
    </div>
</body>
<script src="javascript/toogle_btn.js"></script>
<script src="javascript/animate_plugin/animate-css.js"></script>
<script src="javascript/common.js"></script>
</html>