
// loader start
// loader end

$(document).ready(function(){

    //loader
     $(window).load(function() {
     $("#object").fadeOut();
     $("#loading").delay(100).fadeOut("slow");
     });


    // prigress bar
    $('.skillbar').each(function(){
        jQuery(this).find('.skillbar-bar').animate({
            width:jQuery(this).attr('data-percent')
        },2000);
    });




    // серый фон при скролле
    $(window).scroll(function () {
        var st = $(this).scrollTop();

        // console.log(st);
        $("#head").css({
          "filter": "grayscale(" + st / 100 + ")"
          // "bottom" : "translate3d(0px, " + st/ 100  + "%, .01px)"
          // "-webkit-transform" : "translate3d(0px, " + st/ 100  + "%, .01px)"
        });
    });

    //параллакс фона
    $(window).scroll(function () {
        var movement = -parseInt($(this).scrollTop() / 2);
        $('#head').css({
            backgroundPosition: 'center ' + movement + 'px'
        });
    });




    //меню справа
    $("#show_side").click(function () {
        $(".side_fixed").toggleClass('fixed_go_left');
        $(this).toggleClass('rotate_down_side');
        $(".filter_bg").toggleClass('filter_blur');
        // $(".filter_bg").css({
        //     'filter': 'blur(3px)',
        //     '-webkit-filter': 'blur(3px)',
        //     '-moz-filter': 'blur(3px)',
        //     '-o-filter': 'blur(3px)',
        //     '-ms-filter': 'blur(3px)'
        // });
    });

    //скролл side главная страница
    $(window).scroll(function () {
        var $sections = $('.cv_sections');
        $sections.each(function (i, el) {
            var top = $(el).offset().top - 100;
            var bottom = top + $(el).height();
            var scroll = $(window).scrollTop();
            var id = $(el).attr('id');
            if (scroll > top && scroll < bottom) {
                $('a.active').removeClass('active');
                $('a[href="#' + id + '"]').addClass('active');

            }
        })
    });

    var sScroll = $(".ul_side");
    $(this).on("click", "a", function (event) {
        // исключаем стандартную реакцию браузера
        event.preventDefault();

        // получем идентификатор блока из атрибута href
        var id = $(this).attr('href'),

        // находим высоту, на которой расположен блок
            top = $(id).offset().top;

        // анимируем переход к блоку, время: 800 мс
        $('body,html').animate({scrollTop: top}, 800);
    });

//test
$(window).scroll(function(){
  var wHeight = $(window).scrollTop(),
    elHeight = $('#about_company').offset().top;
    haftEl = elHeight/1.5;

    if (wHeight >= haftEl) {
      sScroll.fadeIn(1000);
    }
    else{
      sScroll.fadeOut();
    }
  console.log(elHeight);
});

  


    //gradient animations
    var colors = new Array(
        [62,35,255],
        [60,255,60],
        [255,35,98],
        [45,175,230],
        [255,0,255],
        [255,128,0]);

    var step = 0;
//color table indices for:
// current color left
// next color left
// current color right

// next color right
    var colorIndices = [0,1,2,3];

//transition speed
    var gradientSpeed = 0.002;

    function updateGradient()
    {

        if ( $===undefined ) return;

        var c0_0 = colors[colorIndices[0]];
        var c0_1 = colors[colorIndices[1]];
        var c1_0 = colors[colorIndices[2]];
        var c1_1 = colors[colorIndices[3]];

        var istep = 1 - step;
        var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
        var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
        var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
        var color1 = "rgb("+r1+","+g1+","+b1+")";

        var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
        var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
        var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
        var color2 = "rgb("+r2+","+g2+","+b2+")";

        $('.wrapp_advantages').css({
            background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
            background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});

        step += gradientSpeed;
        if ( step >= 1 )
        {
            step %= 1;
            colorIndices[0] = colorIndices[1];
            colorIndices[2] = colorIndices[3];

            //pick two new target color indices
            //do not pick the same as the current one
            colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
            colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;

        }
    }

    setInterval(updateGradient,10);


    //выпадающий доп меню в лк (навигация)
  $("#showNav").click(function(){
    $(".ul_child").slideToggle(100);
  });

  //убрать садбар
    $("#close_sb").click(function(){
    $(".sidebar").toggleClass('close');
    $(".wrapp_content").toggleClass('wr_left');
  });

// выпадающее меню
  $("#justify_nav").click(function(){
    $(".menu").fadeToggle(500);
  });


    // форма отправки заказа
    $('.btn_modal').click(function(e){
        e.preventDefault();
        var name = $('#name').val(),
            s_name = $('#s_name').val(),
            field = $('#modal_field').val();

        if( name == "" || s_name == "" || field == ""){
            $('.err_block').css("display" , "block");
        }
        else {
            $('.err_block').css("display" , "none");
            $.ajax({
                url: "../../ajax/upload.php",
                type: "POST",
                data: $('.myform').serialize(),
                dataType: "html"
            }).done(function(){
                // $('#myModlal').css("display" , "none");
                $('.modal_forms').css("display" , "none");
                $('.modal_confirm').css("display" , "block");
                // alert('data');
            });
        }
        $('#name, #s_name, #modal_field').focus(function(){
            $('.err_block').css("display" , "none");
        });
    });

    //Плавный скролл до блока .div по клику на .scroll
  //Документация: https://github.com/flesler/jquery.scrollTo
  $(".button_go").click(function() {
    $.scrollTo($("#about_me"), 800, {
      offset: 0
    });
  });



  // показать кнопку наверх
  $(window).scroll(function() {
    if ($(this).scrollTop() > 250){
      $('#top').fadeIn(100);
    }
    else{
      $('#top').fadeOut(100);
    }
  });



  //Кнопка "Наверх"
  //Документация:
  //http://api.jquery.com/scrolltop/
  //http://api.jquery.com/animate/
  $("#top").click(function () {
    $("body, html").animate({
      scrollTop: 0
    }, 800);
    return false;
  });

    //фиксированный нав
    $(window).scroll(function() {
        if ($(this).scrollTop() > 150){
            $('.nav').addClass("fixed");
        }
        else{
            $('.nav').removeClass("fixed");
        }
    });

});

