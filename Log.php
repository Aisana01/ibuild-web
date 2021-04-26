<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="description" content="Key Slova do 200 slov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/all.css">

    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
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
                    <div class="target target-1" id="">
                        <div class="card_log-item">
                            <h5 class="card_log-item--title">
                                Войти
                            </h5>
                            <div class="alert_block">
                                <h6 class="alert_text">Впервые в Ibuild?</h6>
                                <a class="link_style" href="Register.php">Завести аккаунт</a>
                            </div>
                            <div class="form-group">
                                <form class="ps-form--subscribe-offer" action="api/authentication/sign_in.php" method="POST">
                                    <h6>Имя пользователя или адрес электронной почты</h6><input class="form_log-control" type="text" id="login" placeholder="Еmail...">
                                    <h6>Пароль</h6><input class="form_log-password" type="password" id="password" placeholder="Пароль...">
                                </form>
                                <button onclick="login()" class="btn">Вход</button>
                            </div>
                            <p class="login-footer_log">
                                <a class="link_style source source-2" href="#">Забыли пароль?</a> <br>

                            </p>
                        </div>
                    </div>
                    <div class="target target-2" id="">
                        <div class="card_log-item">
                            <h5 class="card_log-item--title">
                                Восстановление доступа к странице
                            </h5>
                            <div class="form-group">
                                <form class="ps-form--subscribe-offer" action="api/authentication/sign_in.php" method="POST">
                                    <h6>Введите адрес электронной почты</h6><input class="form_log-control" type="text" name="login" placeholder="Еmail...">
                                </form>
                                <button type="submit" class="btn">Отправить</button>
                                <p class="login-footer_log">
                                    <a class="link_style source source-1" href="#">Отмена</a> <br>
                                </p>
                            </div>

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
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
    var HIDDEN_CLASS_NAME = 'hidden'
    var TARGET_CLASS_NAME = 'target'
    var SOURCE_CLASS_NAME = 'source'

    var targetIdToShow = 1

    function main() {
        var targets = getElements(TARGET_CLASS_NAME)
        var sources = getElements(SOURCE_CLASS_NAME)
        sources.forEach(function(sourceNode) {
            var sourceNodeId = extractId(sourceNode, SOURCE_CLASS_NAME)
            sourceNode.addEventListener('click', function() {
                showTarget(targets, sourceNodeId)
            })
        })
        showTarget(targets, targetIdToShow)
    }

    function getElements(type) {
        return [].slice.call(document.querySelectorAll('.' + type)).sort(function(targetNode1, targetNode2) {
            var target1Num = extractId(targetNode1, TARGET_CLASS_NAME)
            var target2Num = extractId(targetNode2, TARGET_CLASS_NAME)
            return target1Num > target2Num
        })
    }

    function extractId(targetNode, baseClass) {
        var currentClassIndex = targetNode.classList.length
        while (currentClassIndex--) {
            var currentClass = targetNode.classList.item(currentClassIndex)
            var maybeIdNum = parseInt(currentClass.split('-')[1])
            if (isNaN(maybeIdNum)) {
                continue
            }
            var classStrinToValidate = baseClass + '-' + maybeIdNum
            if (classStrinToValidate === currentClass) {
                return maybeIdNum
            }
        }
    }

    function showTarget(targets, targetId) {
        targets.forEach(function(targetNode, targetIndex) {
            var currentTargetNodeId = extractId(targetNode, TARGET_CLASS_NAME)
            if (currentTargetNodeId === targetId) {
                targetNode.classList.remove(HIDDEN_CLASS_NAME)
            } else {
                targetNode.classList.add(HIDDEN_CLASS_NAME)
            }
        })
    }

    main()
</script>
<script src="javascript/animate_plugin/animate-css.js"></script>
<script src="javascript/common.js"></script>

</html>