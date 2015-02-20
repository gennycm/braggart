<?php include_once("header.html");?>
<!--BODY-->

<div id="pagepiling">
        <a href="#" style="display:block; position:fixed;z-index:1000;" onclick="display_menu()">
            <div class="menu-toggle"></div>
            <div class="text_toggle">
                <h5>MENÚ</h5>
            </div>
        </a>       
       
        <div class="section" id="home">
            <div class="background_black"></div>
            <div class="logo-slide">
                <img src="./img/logo-slide.png" alt="">
            </div>
            <div id="full-width-slider" class="royalSlider heroSlider rsMinW" style="width:100%;">
              <div class="rsContent">
                <img class="rsImg" src="img_product/img_1.png" alt="">
              </div>
              <div class="rsContent">
                <img class="rsImg" src="img_product/img_2.jpg" alt="">
              </div>
             <div class="rsContent">
                <img class="rsImg" src="img_product/img_3.jpg" alt="">
              </div>
              <div class="rsContent">
                <img class="rsImg" src="img_product/img_4.jpg" alt="">
              </div>
            </div>
                
        </div>
        
        <div class="section" id="us">
            <a style="display:block;" href="store.php">
                <div class="background_black"></div>
                <h1>LA TIENDA</h1>
            </a>
        </div>
        
        <div class="section" id="shirts">
             <a style="display:block;" href="shirts.php">
                <div class="background_black"></div>
                <h1>CAMISAS</h1>
            </a>
        </div>
        
        <div class="section" id="contact">
            <div class="background_black"></div>
            <table class="contact">
                <tr>
                    <td colspan="2" class="decoration">
                        U+-'"-+u
                    </td>
                </tr>
                <tr>
                    <td class="icon"><i class="fa fa-phone fa-lg"></i></td>
                    <td class="text">(999) 9 48 30 46 </td>
                </tr>
                <tr>
                    <td class="icon"><i class="fa fa-envelope fa-lg"></i></td>
                    <td class="text">contacto@braggart.com </td>
                </tr>
                <tr>
                    <td class="icon"><i class="fa fa-facebook-official fa-lg"></i></td>
                    <td class="text">Tienda Braggart</td>
                </tr>
                <tr>
                    <td class="icon"><i class="fa fa-insta-official fa-lg"></i></td>
                    <td class="text">@BraggartMX </td>
                </tr>
                <tr>
                    <td colspan="2" class="decoration">
                        U+-'"-+u
                    </td>
                </tr>   
            </table>
            </div>
        </div>
    </div>
</div><!-- /.container-fluid -->

<!--Login Slidebar-->
<div class="sb-slidebar sb-right sb-style-overlay">
    <i class="fa fa-times fa-2x sb-close"></i>
    <form class="register-form"  method="post" onsubmit="" action="">
      <p><label><i class="fa fa-envelope fa-lg"></i></label><input name="username" type="text" class="text" placeholder=" CORREO ELECTR&Oacute;NICO" ></p>
      <p><label><i class="fa fa-key fa-lg"></i></label><input name="regPassword" type="password" class="text" placeholder=" CONTRASE&Ntilde;A" ></p>
      <p><label><i class="fa fa-key fa-lg"></i></label><input name="confPassword" type="password" class="text" placeholder=" CONFIRMA CONTRASE&Ntilde;A" ></p>
      <input type="submit" value="REGISTRARSE" >
    </form>
    <p style="height:30%"></p>

    <form class="login-form"  method="post" onsubmit="" action="">
      <p><label><i class="fa fa-envelope fa-lg"></i></label><input name="username" type="text" class="text" placeholder=" CORREO ELECTR&Oacute;NICO" ></p>
      <p><label><i class="fa fa-key fa-lg"></i></label><input name="iniPassword" type="password" class="text" placeholder=" CONTRASE&Ntilde;A" ></p>
      <input type="submit" value="ENTRAR" >
    </form>
</div>

<!--BODY-->
<?php include_once("footer.html");?>
<script>
    /*Parallax scrolling*/
        var deleteLog = false;
        $(document).ready(function() {
            $('#pagepiling').pagepiling({
                menu: false,
                anchors: ['home', 'us', 'shirts', 'contact'],
                navigation: {
                    'textColor': '#f2f2f2',
                    'bulletsColor': '#ccc',
                    'position': 'right',
                    'tooltips': ['INICIO', 'LA TIENDA', 'CAMISAS', 'CONTACTO']
                }

            });
        });

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

      setInterval(function(){
        var slider = $(".royalSlider").data('royalSlider');
        slider.next();  // next slide
    }, 4500);

      var width = $(window).width();
      var height = $(window).height();

      $('#full-width-slider').css({width: width+"px", height:height+"px"})

    });

    /*Slidebar*/
    (function($) {
        $(document).ready(function() {
            $.slidebars();
        });
    }) (jQuery);

/*Password placeholder , so the placeholder actually shows, and not just dots*/
    $(function() {
    // Invoke the plugin
    $('input, textarea').placeholder({customClass:'my-placeholder'});
    // That’s it, really.
    });
    
    /*$(document).ready(function() {
        $('#fullpage').fullpage({
        //Navigation
        menu: false,
        anchors:['firstSlide', 'secondSlide'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Slide', 'La Tienda', 'Camisas', 'Contacto'],
        slidesNavigation: false,
        slidesNavPosition: 'bottom',

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        scrollBar: false,
        easing: 'easeInQuart',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: false,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
        resize : true,
        sectionsColor : ['#ccc', '#fff'],
        fixedElements: '#header, .footer',
        responsive: 0,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){},
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction){}
    });
    });*/
    </script>
