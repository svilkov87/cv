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
    <title>Главная</title>
    <?php include("include/head.php"); ?>
    <script src="libs/jquery/jquery-1.11.1.min.js"></script>
    <script src="libs/jquery.bxslider/jquery.bxslider.min.js"></script>
    <link href="libs/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
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
            });
        });
</script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>frontend-developer VSN</title>
    <meta name="description" content="cv" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="libs/jquery/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/main-5aa193045e.css">
    <script src="libs/jquery.bxslider/jquery.bxslider.min.js"></script>
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
    <link href="libs/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
</head>
<body>
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div id="object"></div>
        </div>
    </div>
</div>
<i class="fa fa-chevron-up" aria-hidden="true" id="top"></i>
<div class="side_menu">
    <div class="head_items">
        <img src="img/me.jpg" alt="alt" class="image_profile">
        <div class="block_name_proff">
            <p class="name">Вилков Сергей</p>
            <p class="proff">Верстальщик/Фронтенд-разработчик</p>
        </div>
    </div>
    <div class="side_list">
        <ul class="ul_side">
            <li class="li_side"><a href="#">Главная</a></li>
            <li class="li_side"><a href="#">Обо мне</a></li>
            <li class="li_side"><a href="#">Навыки</a></li>
            <li class="li_side"><a href="#">Примеры работ</a></li>
            <li class="li_side"><a href="#">Контакты</a></li>
        </ul>
    </div>
</div>
<section class="head"></section>

<!--[if lt IE 9]-->
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<!--[endif]-->
<script src="libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="libs/main.js"></script>
<script type="text/javascript" src="libs/wow.min.js"></script>
<script type="text/javascript">
    new WOW().init();
</script>

<!--[if lt IE 9]-->
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<!--[endif]-->
<script src="libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="libs/main.js"></script>
<script type="text/javascript" src="libs/wow.min.js"></script>
<script type="text/javascript">
    new WOW().init();
</script>
</body>
</html>

</body>
</html>
