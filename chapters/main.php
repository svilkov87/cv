<?php
include("include/connection.php");
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//    echo "<pre>";
//    var_dump($_SESSION);
//    echo "</pre>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>frontend-developer VSN</title>
    <meta name="description" content="cv" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="app/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="app/css/bootstrap.min.css">
    <link rel="stylesheet" href="app/css/animate.css">
    <script src="app/libs/jquery/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="app/css/main-44a921988e.css">
    <script src="app/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.bx_head').bxSlider({
                mode: 'horizontal',           // тип перехода между слайдами может быть 'horizontal', 'vertical', 'fade'
                captions: true,         // отображение title
                easing: 'easeInOutQuad', // анимация слайда
                controls: false,         // отображение стрелки - вперед, назад
                startSlide: 0,          // Показ начнется с заданного слайда
                infiniteLoop: true,     // показывать первый слайд за последним
                auto: true,             // сделать автоматический переход
                pager: false,
                pause: 4200,            // время между сменой слайдов в м-сек
                speed: 500           // длительность перехода слайда в м-сек
//                useCSS: false           // CSS переходы
            });
        });
    </script>
    <link href="app/libs/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
</head>
<body>
<div class="main">
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div id="object"></div>
            </div>
        </div>
    </div>
    <i class="fa fa-chevron-up" aria-hidden="true" id="top"></i>
    <i class="fa fa-bars" id="menu_toggle" aria-hidden="true"></i>
    <div class="side_menu">
        <div class="side_top">
            <i class="fa fa-chevron-left" id="show_side" aria-hidden="true"></i>
        </div>
        <div class="head_items">
            <img src="../app/img/me.jpg" alt="alt" class="image_profile">
            <div class="block_name_proff">
                <p class="name">Вилков Сергей</p>
                <p class="proff">Верстальщик/Фронтенд-разработчик</p>
            </div>
        </div>
        <div class="side_list">
            <ul class="ul_side">
                <li class="li_side">
                    <a href="#head" class="active">Главная</a>
                </li>
                <li class="li_side">
                    <a href="#about_me">Обо мне</a>
                </li>
                <li class="li_side"><a href="#ui">UI-elements</a></li>
                <li class="li_side"><a href="#">Примеры работ</a></li>
                <li class="li_side write_me"><a href="#">Контакты</a></li>
            </ul>
        </div>
    </div>
    <section class="cv_sections" id="head">
        <div class="col-md-12">
            <div class="row">
                <div class="head_block">
                    <div class="head_header">
                        <h4 class="wow fadeIn" data-wow-delay=".3s">Вилков Сергей</h4>
                        <p class="p wow fadeIn" data-wow-delay=".5s">резюме на позицию html-верстальщик /
                            frontend-разработчик</p>
                        <div class="button_go wow fadeIn" data-wow-delay=".7s">
                            <p class="go_about">узнать больше</p>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cv_sections" id="about_me">
        <div class="col-md-12">
            <div class="row">
                <div class="about_title">
                    <h2>Обо мне</h2>
                </div>
                <div class="content_section">
                    <div class="story">
                        Меня зовут <span class="story_name">Вилков Сергей.</span> Я являюсь кандидатом на позицию
                        html-верстальщик/frontend-разработчик.
                        На сегодняшний день мой профессиональный опыт в данной сфере составляет 2 года.
                        Разрешите предложить Вам свою кандидатуру и позвольте презентовать себя настоящим резюме.
                    </div>
                    <div class="items_profile">
                        <div class="col-md-6">
                            <ul class="ul_info">
                                <li class="li_info"><span>Возраст:</span> 30лет</li>
                                <li class="li_info"><span>Локация:</span> Нижний Новгород</li>
                                <li class="li_info"><span>Электронный адрес:</span> svilkov87@mail.ru</li>
                                <li class="li_info"><span>Контактный телефон:</span> +7 953 551 2834</li>
                                <li class="li_info"><span>github:</span> <a href="https://github.com/svilkov87">github.com/svilkov87</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="main_wr wow fadeIn" data-wow-delay=".8s">
                                    <div class="skills_wrapp">
                                        <div class="sk_top">
                                            <span>В ближайшей перспективе - Pug</span>
                                        </div>
                                        <div class="sk_bottom">
                                            <span>HTML5</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_wr wow fadeIn" data-wow-delay="1s">
                                    <div class="skills_wrapp">
                                        <div class="sk_top">
                                            <span>Использую препроцессор SCSS</span>
                                        </div>
                                        <div class="sk_bottom">
                                            <span>CSS3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_wr wow fadeIn" data-wow-delay="1.1s">
                                    <div class="skills_wrapp">
                                        <div class="sk_top">
                                            <span>Изучение нативного JS +(Angular,React)</span>
                                        </div>
                                        <div class="sk_bottom">
                                            <span>JS(JQUERY/AJAX)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_wr wow fadeIn" data-wow-delay="1.3s">
                                    <div class="skills_wrapp">
                                        <div class="sk_top">
                                            <span>Процедурный стиль</span>
                                        </div>
                                        <div class="sk_bottom">
                                            <span>PHP</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_wr wow fadeIn" data-wow-delay="1.5s">
                                    <div class="skills_wrapp">
                                        <div class="sk_top">
                                            <span>Сборка проекта</span>
                                        </div>
                                        <div class="sk_bottom">
                                            <span>GULP</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_wr wow fadeIn" data-wow-delay="1.7s">
                                    <div class="skills_wrapp">
                                        <div class="sk_top">
                                            <span><a href="https://github.com/svilkov87">Мой аккаунт</a></span>
                                        </div>
                                        <div class="sk_bottom">
                                            <span>GIT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cv_sections" id="ui">
        <div class="about_ul">
            <h2>UI</h2>
            <p class="ui_desc">В данном разделе представлены элементы интерфейса, а так же эффекты, которые я могу использовать в работе. Условно:</p>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="op">
                        <img src="../app/img/Cute-Girlnbspfond-ecran-hd3.jpg"/>
                        <div class="top">
                            <p class="he">item</p>
                        </div>
                        <div class="fade"></div>
                        <div class="bottom">
                            <p class="bott">description</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ot">
                        <img src="../app/img/Cute-Girlnbspfond-ecran-hd3.jpg"/>
                        <div class="top">
                            <p class="he">item</p>
                        </div>
                        <div class="fade"></div>
                        <div class="bottom">
                            <p class="bott">description</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="three">
                        <img src="app/img/Cute-Girlnbspfond-ecran-hd3.jpg"/>
                        <div class="top">
                        </div>
                        <div class="fade">
                            test
                        </div>
                        <div class="bottom">
                            <p class="bott">description</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="four">
                        <div class="nav_wrapp">
                            <span class="menu_touch">menu</span>
                        </div>
                        <div class="menu_down">
                            <ul class="ul_four">
                                <li class="li li_four">one</li>
                                <li class="li li_four">two</li>
                                <li class="li li_four">three</li>
                                <li class="li li_four">four</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--[if lt IE 9]-->
<script src="app/libs/html5shiv/es5-shim.min.js"></script>
<script src="app/libs/html5shiv/html5shiv.min.js"></script>
<script src="app/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="app/libs/respond/respond.min.js"></script>
<!--[endif]-->
<script src="app/libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="app/libs/main.js"></script>
<script type="text/javascript" src="app/libs/wow.min.js"></script>
<script type="text/javascript">
    new WOW().init();
</script>
</body>
</html>
