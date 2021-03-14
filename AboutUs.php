<?php
/* include "config/db.php" ;
   include "config/config.php" ;
   session_start();
   if(isset($_SESSION["user_id"])){
   	$id = $_SESSION["user_id"];
   	$query = $db->query("SELECT * FROM ibuild_users WHERE id=$id");
   
   	if($query->num_rows>0){
   		$user = $query->fetch_object();   */

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="description" content="Kluchevie slova, do 200 simvolov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/all.css">
</head>

<body class="about">
    <header>
        <div class="top_header">
            <div class="header_right">
                <div class="logo">
                    <a href="index.php" class="logo_link">iBuild</a>
                </div>
                <div class="search_field">
                    <div class="field_in">
                        <input type="text" name="search_text" placeholder="Поиск..." style="padding-left: 10px;">
                    </div>
                </div>
                <div class="basket">
                    <a href="" class="basket_link">Закупки</a>
                </div>
            </div>
            <div class="header_left">
                <div class="icons">
                    <a class="messages_href" href="conversation_page.php">Сообщения</a>
                </div>
                <div class="auth_button_about">
                    <a href="Log.php" class="btn_SignIn"><?php //echo $user->full_name; 
                                                            ?></a>
                </div>
            </div>
        </div>
        <div class="bottom_header">
            <div class="bottom_header_in">
                <a href="shop.php" class="categories">Фундамент</a>
                <a href="shop.php" class="categories">Электрика</a>
                <a href="shop.php" class="categories">Кровля</a>
                <a href="shop.php" class="categories">Теплотехника</a>
                <a href="shop.php" class="categories">Стены</a>
                <a href="shop.php" class="categories">Матералы</a>
                <a href="shop.php" class="categories">Заборы</a>
                <a href="AboutUs.php" class="categories">О Нас</a>
            </div>
        </div>
    </header>
    <section class="landing_blog">
        <div class="landing_contaner">
            <div class="landing_text">
                <p>Строй самостоятельно</p>
                <p class="middle_landing_text">Выбирай лучшее! Нанимай лучших! Создай лучшее!</p>
                <p class="small_landing_text">Производители загружают каталоги,<br>продавцы добавляют цены и остатки на
                    складе,<br>а покупатели выбирают лучшие предложения.</p>
            </div>
            <div class="transition_img">
                <img class="layer_wrap_transition" src="image/house2.png">
            </div>
        </div>
    </section>

    <!-- <section class="carousel" aria-label="Gallery">
        <ol class="carousel__viewport">
            <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                <div class="carousel__snapper">
                    <a href="#carousel__slide3" class="carousel__prev">Go to last slide</a>
                    <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                </div>
                <div class="container_block_landing">
                    <div class="landing_main">
                        <div class="landing_large">IBUILD – <b>Cтроительный калькулятор онлайн №1</b>
                        </div>
                        <div class="landing_small">
                            <h6>Мы направляем все возможные усилия, чтобы конструкции получались прочными,
                                надежными и безопасными!</h6>
                        </div>
                        <div class="landing_large_img">

                            <div class="img_figure"><img src="image/index-5-533x362.jpg" alt="" width="533" height="362">
                            </div>

                        </div>
                    </div>

                    <div class="landing_main_left">
                        <div class="landing_container">
                            <div class="landing_block_left">
                                <div class="icon_block">
                                    <div class="icon"> <img src="image/icon/building.png" alt="" width="50px" height="50px">
                                        <div class="box_icon"></div>
                                    </div>
                                    <h6 class="icon_text">Архитектура</h6>
                                </div>
                                <div class="landing_content">
                                    <p>
                                        Архитектура постоянно развивается на основе изменений в нашей культуре, обществе и
                                        окружающей среде.
                                    </p>
                                </div>
                            </div>
                            <div class="landing_block_left">
                                <div class="icon_block">
                                    <div class="icon"><img src="image/icon/blueprint.png" alt="" width="50px" height="50px">
                                        <div class="box_icon"></div>
                                    </div>
                                    <h6 class="icon_text">Конструкции</h6>
                                </div>
                                <div class="landing_content">
                                    <p>
                                        Просматривая наши недавние впечатляющие проекты, мы решили узнать мнение архитекторов.
                                    </p>
                                </div>
                            </div>
                            <div class="landing_block_left">
                                <div class="icon_block">
                                    <div class="icon"> <img src="image/icon/crane.png" alt="" width="50px" height="50px">
                                        <div class="box_icon"></div>
                                    </div>
                                    <h6 class="icon_text">Матералы</h6>
                                </div>
                                <div class="landing_content">
                                    <p>
                                        В процессе строительства, эксплуатации и ремонта зданий и сооружений строительные
                                        изделия и конструкции, из которых они возводятся, подвергаются различным
                                        физико-механическим, физическим и технологическим воздействиям.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                <div class="carousel__snapper">
                    <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
                </div>
                <div class="our_team_block">
                    <h3 class="our_team_title" style="visibility: visible; animation-name: fadeInLeft;">Наша Команда</h3>
                    <h6 class="title-style-1 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">Люди, стоящие за нашим успехом</h6>
                    <div class="container_block_landing">
                        <div class="card">
                        </div>
                        <div class="card">
                        </div>
                        <div class="card">
                        </div>
                    </div>
                </div>

            </li>
            <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                <div class="carousel__snapper">
                    <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide1" class="carousel__next">Go to next slide</a>
                </div>
            </li>
        </ol>

    </section> -->

    <div class="slider">
        <div class="slider__wrapper">
            <div class="slider__items">
                <div class="slider__item">
                    <div style="height: 650px; background: white;">
                        <div class="container_block_landing">
                            <div class="landing_main">
                                <div class="landing_large">IBUILD – <b>Cтроительный калькулятор онлайн №1</b>
                                </div>
                                <div class="landing_small">
                                    <h6>Мы направляем все возможные усилия, чтобы конструкции получались прочными,
                                        надежными и безопасными!</h6>
                                </div>
                                <div class="landing_large_img">

                                    <div class="img_figure"><img src="image/index-5-533x362.jpg" alt="" width="533" height="362">
                                    </div>

                                </div>
                            </div>

                            <div class="landing_main_left">
                                <div class="landing_container">
                                    <div class="landing_block_left">
                                        <div class="icon_block">
                                            <div class="icon"> <img src="image/icon/building.png" alt="" width="50px" height="50px">
                                                <div class="box_icon"></div>
                                            </div>
                                            <h6 class="icon_text">Архитектура</h6>
                                        </div>
                                        <div class="landing_content">
                                            <p>
                                                Архитектура постоянно развивается на основе изменений в нашей культуре, обществе и
                                                окружающей среде.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="landing_block_left">
                                        <div class="icon_block">
                                            <div class="icon"><img src="image/icon/blueprint.png" alt="" width="50px" height="50px">
                                                <div class="box_icon"></div>
                                            </div>
                                            <h6 class="icon_text">Конструкции</h6>
                                        </div>
                                        <div class="landing_content">
                                            <p>
                                                Просматривая наши недавние впечатляющие проекты, мы решили узнать мнение архитекторов.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="landing_block_left">
                                        <div class="icon_block">
                                            <div class="icon"> <img src="image/icon/crane.png" alt="" width="50px" height="50px">
                                                <div class="box_icon"></div>
                                            </div>
                                            <h6 class="icon_text">Матералы</h6>
                                        </div>
                                        <div class="landing_content">
                                            <p>
                                                В процессе строительства, эксплуатации и ремонта зданий и сооружений строительные
                                                изделия и конструкции, из которых они возводятся, подвергаются различным
                                                физико-механическим, физическим и технологическим воздействиям.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__item">
                    <div style="height: 650px; background: #DDE7DC;">
                        <div class="our_team_block">
                            <h3 class="our_team_title">Наша Команда</h3>
                            <h6 class="title-style-1 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">Люди, стоящие за нашим успехом</h6>
                            <div class="container_block_landing_about">
                            <div class="card_item_about">   
                                <div class="card">
                                    <img src="image/team1.jpg" alt="">
                                    <h5 class="team-classic-name"><a href="#">Olpan Aisana</a></h5>
                                </div>
                            </div> 
                            <div class="card_item_about">   
                                <div class="card">
                                    <img src="image/team2.jpg" alt="">
                                </div>
                            </div> 
                            <div class="card_item_about">   
                                <div class="card">
                                    <img src="image/team3.jpg" alt="">
                                </div>
                            </div> 
                            </div>
                        </div>
                    </div>

                </div>
                <div class="slider__item">
                    <div style="height: 650px; background: violet;"></div>
                </div>
                <div class="slider__item">
                    <div style="height: 650px; background: coral;"></div>
                </div>
            </div>
        </div>
        <a class="slider__control slider__control_prev" href="#" role="button"></a>
        <a class="slider__control slider__control_next" href="#" role="button"></a>
    </div>

    <footer class="content_blog_footer_about">
        <div class="content_footer_container">
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
        </div>
    </footer>

    <script>
        'use strict';
        var slideShow = (function() {
            return function(selector, config) {
                var
                    _slider = document.querySelector(selector), // основный элемент блока
                    _sliderContainer = _slider.querySelector('.slider__items'), // контейнер для .slider-item
                    _sliderItems = _slider.querySelectorAll('.slider__item'), // коллекция .slider-item
                    _sliderControls = _slider.querySelectorAll('.slider__control'), // элементы управления
                    _currentPosition = 0, // позиция левого активного элемента
                    _transformValue = 0, // значение транфсофрмации .slider_wrapper
                    _transformStep = 100, // величина шага (для трансформации)
                    _itemsArray = [], // массив элементов
                    _timerId,
                    _indicatorItems,
                    _indicatorIndex = 0,
                    _indicatorIndexMax = _sliderItems.length - 1,
                    _stepTouch = 50,
                    _config = {
                        isAutoplay: false, // автоматическая смена слайдов
                        directionAutoplay: 'next', // направление смены слайдов
                        delayAutoplay: 5000, // интервал между автоматической сменой слайдов
                        isPauseOnHover: true // устанавливать ли паузу при поднесении курсора к слайдеру
                    };

                // настройка конфигурации слайдера в зависимости от полученных ключей
                for (var key in config) {
                    if (key in _config) {
                        _config[key] = config[key];
                    }
                }

                // наполнение массива _itemsArray
                for (var i = 0, length = _sliderItems.length; i < length; i++) {
                    _itemsArray.push({
                        item: _sliderItems[i],
                        position: i,
                        transform: 0
                    });
                }

                // переменная position содержит методы с помощью которой можно получить минимальный и максимальный индекс элемента, а также соответствующему этому индексу позицию
                var position = {
                    getItemIndex: function(mode) {
                        var index = 0;
                        for (var i = 0, length = _itemsArray.length; i < length; i++) {
                            if ((_itemsArray[i].position < _itemsArray[index].position && mode === 'min') || (_itemsArray[i].position > _itemsArray[index].position && mode === 'max')) {
                                index = i;
                            }
                        }
                        return index;
                    },
                    getItemPosition: function(mode) {
                        return _itemsArray[position.getItemIndex(mode)].position;
                    }
                };

                // функция, выполняющая смену слайда в указанном направлении
                var _move = function(direction) {
                    var nextItem, currentIndicator = _indicatorIndex;;
                    if (direction === 'next') {
                        _currentPosition++;
                        if (_currentPosition > position.getItemPosition('max')) {
                            nextItem = position.getItemIndex('min');
                            _itemsArray[nextItem].position = position.getItemPosition('max') + 1;
                            _itemsArray[nextItem].transform += _itemsArray.length * 100;
                            _itemsArray[nextItem].item.style.transform = 'translateX(' + _itemsArray[nextItem].transform + '%)';
                        }
                        _transformValue -= _transformStep;
                        _indicatorIndex = _indicatorIndex + 1;
                        if (_indicatorIndex > _indicatorIndexMax) {
                            _indicatorIndex = 0;
                        }
                    } else {
                        _currentPosition--;
                        if (_currentPosition < position.getItemPosition('min')) {
                            nextItem = position.getItemIndex('max');
                            _itemsArray[nextItem].position = position.getItemPosition('min') - 1;
                            _itemsArray[nextItem].transform -= _itemsArray.length * 100;
                            _itemsArray[nextItem].item.style.transform = 'translateX(' + _itemsArray[nextItem].transform + '%)';
                        }
                        _transformValue += _transformStep;
                        _indicatorIndex = _indicatorIndex - 1;
                        if (_indicatorIndex < 0) {
                            _indicatorIndex = _indicatorIndexMax;
                        }
                    }
                    _sliderContainer.style.transform = 'translateX(' + _transformValue + '%)';
                    _indicatorItems[currentIndicator].classList.remove('active');
                    _indicatorItems[_indicatorIndex].classList.add('active');
                };

                // функция, осуществляющая переход к слайду по его порядковому номеру
                var _moveTo = function(index) {
                    var i = 0,
                        direction = (index > _indicatorIndex) ? 'next' : 'prev';
                    while (index !== _indicatorIndex && i <= _indicatorIndexMax) {
                        _move(direction);
                        i++;
                    }
                };

                // функция для запуска автоматической смены слайдов через промежутки времени
                var _startAutoplay = function() {
                    if (!_config.isAutoplay) {
                        return;
                    }
                    _stopAutoplay();
                    _timerId = setInterval(function() {
                        _move(_config.directionAutoplay);
                    }, _config.delayAutoplay);
                };

                // функция, отключающая автоматическую смену слайдов
                var _stopAutoplay = function() {
                    clearInterval(_timerId);
                };

                // функция, добавляющая индикаторы к слайдеру
                var _addIndicators = function() {
                    var indicatorsContainer = document.createElement('ol');
                    indicatorsContainer.classList.add('slider__indicators');
                    for (var i = 0, length = _sliderItems.length; i < length; i++) {
                        var sliderIndicatorsItem = document.createElement('li');
                        if (i === 0) {
                            sliderIndicatorsItem.classList.add('active');
                        }
                        sliderIndicatorsItem.setAttribute("data-slide-to", i);
                        indicatorsContainer.appendChild(sliderIndicatorsItem);
                    }
                    _slider.appendChild(indicatorsContainer);
                    _indicatorItems = _slider.querySelectorAll('.slider__indicators > li')
                };

                var _isTouchDevice = function() {
                    return !!('ontouchstart' in window || navigator.maxTouchPoints);
                };

                // функция, осуществляющая установку обработчиков для событий 
                var _setUpListeners = function() {
                    var _startX = 0;
                    if (_isTouchDevice()) {
                        _slider.addEventListener('touchstart', function(e) {
                            _startX = e.changedTouches[0].clientX;
                            _startAutoplay();
                        });
                        _slider.addEventListener('touchend', function(e) {
                            var
                                _endX = e.changedTouches[0].clientX,
                                _deltaX = _endX - _startX;
                            if (_deltaX > _stepTouch) {
                                _move('prev');
                            } else if (_deltaX < -_stepTouch) {
                                _move('next');
                            }
                            _startAutoplay();
                        });
                    } else {
                        for (var i = 0, length = _sliderControls.length; i < length; i++) {
                            _sliderControls[i].classList.add('slider__control_show');
                        }
                    }
                    _slider.addEventListener('click', function(e) {
                        if (e.target.classList.contains('slider__control')) {
                            e.preventDefault();
                            _move(e.target.classList.contains('slider__control_next') ? 'next' : 'prev');
                            _startAutoplay();
                        } else if (e.target.getAttribute('data-slide-to')) {
                            e.preventDefault();
                            _moveTo(parseInt(e.target.getAttribute('data-slide-to')));
                            _startAutoplay();
                        }
                    });
                    document.addEventListener('visibilitychange', function() {
                        if (document.visibilityState === "hidden") {
                            _stopAutoplay();
                        } else {
                            _startAutoplay();
                        }
                    }, false);
                    if (_config.isPauseOnHover && _config.isAutoplay) {
                        _slider.addEventListener('mouseenter', function() {
                            _stopAutoplay();
                        });
                        _slider.addEventListener('mouseleave', function() {
                            _startAutoplay();
                        });
                    }
                };

                // добавляем индикаторы к слайдеру
                _addIndicators();
                // установливаем обработчики для событий
                _setUpListeners();
                // запускаем автоматическую смену слайдов, если установлен соответствующий ключ
                _startAutoplay();

                return {
                    // метод слайдера для перехода к следующему слайду
                    next: function() {
                        _move('next');
                    },
                    // метод слайдера для перехода к предыдущему слайду          
                    left: function() {
                        _move('prev');
                    },
                    // метод отключающий автоматическую смену слайдов
                    stop: function() {
                        _config.isAutoplay = false;
                        _stopAutoplay();
                    },
                    // метод запускающий автоматическую смену слайдов
                    cycle: function() {
                        _config.isAutoplay = true;
                        _startAutoplay();
                    }
                }
            }
        }());

        slideShow('.slider', {
            isAutoplay: true
        });
    </script>

</body>

</html>
<?php
/*  } else {
   	header("Location:$base_url/Log.php?error=4");
   } 
   
   }else{
   	header("Location:$base_url/Log.php?error=5");
   }*/ ?>