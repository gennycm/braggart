<?php include_once("header.html");?>
<?php
    function __autoload($nombre_clase) {
        include 'cp/clases/'.$nombre_clase .'.php';
    }
    $temporal = new slide();
    $listaTemporal = $temporal -> listarslideActivas();
?>

<!--BODY-->

<!--<div id="pagepiling">-->
     
       
        <div id="home" class="parallax" data-background-speed-y="0" data-parallax-align="bottom">
            <div class="background_black"></div>
            <div class="logo-slide">
                <img id="logo" src="./img/logo-slide.png" alt="">
            </div>
            <div id="full-width-slider" class="royalSlider heroSlider rsMinW" style="width:100%;">
            <?php 
                foreach($listaTemporal as $elementoTemporal){
                    echo '<div class="rsContent">
                            <img class="rsImg" src="slide/'.$elementoTemporal["ruta"].'" alt=""/>
                          </div>';
                            }
            ?>  
            </div>
        </div>
        

        <?php echo ''; ?>
        <div id="us" class="parallax" data-background-speed-y="0" data-parallax-align="top">
            <div class="background_black"></div>
            <a style="display:block;" href="store.php">
            <div class="demo-drawing">
            <div id="main" class="main">
            <figure>
                    <div class="drawings mac">
                        <img class="illustration" src="img/latienda.png" alt="La Tienda" />
                        <svg class="line-drawing" id="mac" width="100%" height="600" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="2 -218 600 600">
                            <g transform="translate(0.000000,169.000000) scale(0.100000,-0.100000)"
                            fill="none" stroke="#000000">
                            <path d="M1840 1395 l0 -75 110 0 110 0 0 -455 0 -455 70 0 70 0 0 455 0 455
                            110 0 110 0 0 75 0 75 -290 0 -290 0 0 -75z"/>
                            <path d="M2960 940 l0 -530 270 0 270 0 0 70 0 70 -200 0 -200 0 0 140 0 140
                            170 0 170 0 0 70 0 70 -170 0 -170 0 0 175 0 175 200 0 200 0 0 75 0 75 -270
                            0 -270 0 0 -530z"/>
                            <path d="M4600 940 l0 -530 170 0 c146 0 177 3 224 21 153 57 236 234 236 504
                            0 255 -74 427 -214 494 -53 26 -158 40 -303 41 l-113 0 0 -530z m337 359 c81
                            -39 129 -132 142 -278 15 -166 -11 -309 -69 -390 -44 -60 -93 -81 -190 -81
                            l-80 0 0 385 0 385 77 0 c57 0 88 -5 120 -21z"/>
                            <path d="M120 935 l0 -525 250 0 250 0 0 70 0 70 -180 0 -180 0 0 455 0 455
                            -70 0 -70 0 0 -525z"/>
                            <path d="M945 1448 c-10 -28 -265 -1014 -265 -1026 0 -10 19 -12 77 -10 l78 3
                            23 103 24 102 144 0 143 0 10 -37 c6 -21 17 -68 27 -105 l16 -68 79 0 c44 0
                            79 1 79 3 0 1 -61 235 -135 521 -74 285 -135 520 -135 522 0 2 -36 4 -80 4
                            -55 0 -82 -4 -85 -12z m140 -467 c30 -122 55 -224 55 -226 0 -3 -51 -5 -114
                            -5 l-113 0 56 229 c31 126 57 228 58 227 2 -1 28 -102 58 -225z"/>
                            <path d="M2570 930 l0 -530 70 0 70 0 0 530 0 530 -70 0 -70 0 0 -530z"/>
                            <path d="M3720 930 l0 -530 65 0 65 0 1 378 0 377 190 -377 189 -378 65 0 65
                            0 0 530 0 530 -65 0 -65 0 0 -366 0 -365 -184 363 -185 363 -70 3 -71 3 0
                            -531z"/>
                            <path d="M5595 1448 c-10 -28 -265 -1014 -265 -1026 0 -10 19 -12 77 -10 l78
                            3 23 103 24 102 144 0 143 0 10 -37 c6 -21 17 -68 27 -105 l16 -68 79 0 c44 0
                            79 1 79 3 0 1 -61 235 -135 521 -74 285 -135 520 -135 522 0 2 -36 4 -80 4
                            -55 0 -82 -4 -85 -12z m140 -467 c30 -122 55 -224 55 -226 0 -3 -51 -5 -114
                            -5 l-113 0 56 229 c31 126 57 228 58 227 2 -1 28 -102 58 -225z"/>
                            </g>
                        </svg>
                    </div>
                </figure>   
            </div>
        </div>
            </a>
            <div id="deco"></div>
        



        </div>

        <div id="shirts" class="parallax" data-background-speed-y="0" data-parallax-align="top">
            <div class="background_black"></div>
            <a style="display:block;" href="shirts.php">
                <h1 id = "title">CAMISAS</h1>
            </a>
        </div>

        <div id="contact" class="parallax" data-background-speed-y="0" data-parallax-align="top">
            <div class="background_black"></div>
            <div class="col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6"></div>
                <div class="col-lg-6 col-md-6 col-sm-6"><div>
                <table class="contact" >
                    <tr>
                        <td colspan="2" class="decoration">
                            <p class="scrollflow -slide-top" data-scrollflow-start="0" data-scrollflow-distance="15" data-scrollflow-amount="30">U+-'"-+u</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="icon"><p class="scrollflow -slide-left" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"><i class="fa fa-phone fa-lg"></i></p></td>
                        <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30">(999) 9 48 30 46</p> </td>
                    </tr>
                    <tr>
                        <td class="icon"><p class="scrollflow -slide-left" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"><i class="fa fa-envelope fa-lg"></i></p></td>
                        <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30">contacto@braggart.com</p> </td>
                    </tr>
                    <tr>
                        <td class="icon"><p class="scrollflow -slide-left" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"><i class="fa fa-facebook-official fa-lg"></i></p></td>
                        <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30">Tienda Braggart</p></td>
                    </tr>
                    <tr>
                        <td class="icon"><p class="scrollflow -slide-left" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"><i class="fa fa-insta-official fa-lg"></i></p></td>
                        <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"> @BraggartMX </p></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="decoration">
                            <p class="scrollflow -slide-bottom" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30">U+-'"-+u</p>
                        </td>
                    </tr>   
                </table>
            </div>
        </div>
    <!--</div>-->
</div>
</div><!--Container-->

<!--Login Slidebar-->
<?php include_once("login_register.html");?>
<!--Cart Slidebar-->
<?php include_once("cart.html");?>
<!--Product Slidebar-->
<?php include_once("wishlist.html");?>
<!--BODY-->
<?php include_once("footer.html");?>
<script>
    /*Fix para el parallax en Chrome*/

    var isChrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
    if (isChrome)
    {

        var itemArr = $('.parallax');

        $(window).scroll(function()
        {
            var pos = $(window).scrollTop();
            var wh = window.innerHeight;

            $(itemArr).each(function(i, item){

                var p = $(item).position();
                var h = $(item).height();
                if (p.top + h > pos && p.top < pos+wh)
                {
                    // items ir redzams
                    var prc = (p.top - pos +h)/wh ;
                    //console.log(prc);
                    $(item).css({'background-position':'center '+prc+'%'});
                }

            });
        });

    }
    /*Diamantito*/

/* 
 * Lazy Line Painter - Path Object 
 * Generated using 'SVG to Lazy Line Converter'
 * 
 * http://lazylinepainter.info 
 * Copyright 2013, Cam O'Connell  
 *  
 */ 
 
var diamondSvg = {
    "diamond_little": {
        "strokepath": [
            {
                "path": "M 37.521 18.512 L 37.521 49.847",
                "duration": 300
            },
            {
                "path": "M 37.576 18.621 L 53.416 41.372",
                "duration": 300
            },
            {
                "path": "M 37.521 18.512 L 21.854 42.012",
                "duration": 300
            },
            {
                "path": "M 21.854 42.012 L 37.521 49.847",
                "duration": 300
            },
            {
                "path": "M 37.521 49.847 L 53.588 41.725",
                "duration": 300
            },
            {
                "path": "M 21.854 42.012 L 21.854 26.805",
                "duration": 300
            },
            {
                "path": "M 21.854 26.805 L 37.521 32.164",
                "duration": 300
            },
            {
                "path": "M 37.521 32.164 L 53.416 26.519",
                "duration": 300
            },
            {
                "path": "M 37.521 32.164 L 21.854 42.012",
                "duration": 300
            },
            {
                "path": "M 21.854 26.805 L 37.521 49.847",
                "duration": 300
            },
            {
                "path": "M 37.521 49.847 L 53.416 26.805",
                "duration": 300
            },
            {
                "path": "M 37.521 32.164 L 53.016 41.372",
                "duration": 300
            },
            {
                "path": "M 53.588 26.519 L 53.588 41.372",
                "duration": 300
            }
        ],
        "dimensions": {
            "width": 75,
            "height": 90
        }
    }
}; 
 
var decoSvg = {
    "deco": {
        "strokepath": [
            {
                "path": "M367.25,265.75L361,336v-35H78 M364,301h120.945  L488,258.5V302h122v-34l4.233,71.625L618.972,300H884 M586,320h-86l-5,40.875l-6-43.125l-90,5.75",
                "duration": 800
            }
        ],
        "dimensions": {
            "width": 960,
            "height": 560
        }
    }
}; 
 

    /*Parallax scrolling*/
    var deleteLog = false;

    jQuery(document).ready(function($) {
      $('#full-width-slider').royalSlider({
        loop:true,
        keyboardNavEnabled: true,
        imageScaleMode: "fill",
        controlNavigation: "none",
        navigateByClick: true,
        usePreloader: true,
        sliderDrag: false
      });


      $(fullscreenParallax);
      


      setInterval(function(){
        var slider = $(".royalSlider").data('royalSlider');
        slider.next();  // next slide
    }, 4500);



      var width = $(window).width();
      var height = $(window).height();

      $('#full-width-slider').css({width: width+"px", height:height+"px"});

      //effects

      var controller = $.superscrollorama();
      // individual element tween examples
      controller.addTween('#title', TweenMax.fromTo( $('#title'), .50, {css:{opacity:0, 'letter-spacing':'30px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, 'letter-spacing':'-10px'}, ease:Quad.easeInOut}), 0, 10); // 100 px offset for better timing
      controller.addTween('#fly-it', TweenMax.from( $('#fly-it'), .25, {css:{right:'1000px'}, ease:Quad.easeInOut}));
     
      /*Svg Painter*/



     $('#diamond_little').lazylinepainter( 
     {
        "svgData": diamondSvg,
        "strokeWidth": 2,
        "strokeColor": "#FFFFFF",
        "responsive": "true"
    }).lazylinepainter('paint');




    });


/*Password placeholder , so the placeholder actually shows, and not just dots*/
    $(function() {
    // Invoke the plugin
    $('input, textarea').placeholder({customClass:'my-placeholder'});
    // That’s it, really.
    });


    /*Scrolling firing event*/

    $(window).scroll(function() {
    var y_scroll_pos = window.pageYOffset;
    var scroll_pos_test = 150;             
    // set to whatever you want it to be

    if (y_scroll_pos == 900) {
        console.log("firing la tienda");
            $('#deco').lazylinepainter( 
             {
                "svgData": decoSvg,
                "strokeWidth": 2,
                "strokeColor": "#FFFFFF",
                "responsive": "true"
            }).lazylinepainter('paint');
            var scroll_pos_menu = $("nav").offsetBottom;
    console.log("scroll_pos_menu: "+ scroll_pos_menu);  
        if (y_scroll_pos > scroll_pos_menu+100) {
            console.log("Esconder menu.");
        }; 
    }else{
        if (y_scroll_pos == 1800 || y_scroll_pos < 400 ) {
            $('#deco').lazylinepainter('erase');
        }
    }

    if(y_scroll_pos > scroll_pos_test) {
     //  console.log("offset:" + y_scroll_pos);
    }
    else
    {
      //  console.log("goodbye");
    }
    var scroll_pos_menu = $("nav").offset().top;
    console.log("scroll_pos_menu: "+ scroll_pos_menu);            


    //Menu



});
 
   
    </script>
