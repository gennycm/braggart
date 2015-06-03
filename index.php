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
        <a href="#" id="menu_a" style="display:block; position:fixed;z-index:1000;" onclick="display_menu()">
            <div class="menu-toggle"></div>
            <div class="text_toggle">
                <h5 id = "menu">MENÚ</h5>
            </div>
        </a>       
       
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
        
        <!--<div id="us" class="parallax" data-background-speed-y="0" data-parallax-align="top">
                <a style="display:block;" href="store.php">
                    <div class="background_black"></div>
                    <h1>LA TIENDA</h1>
                </a>
        </div>-->
        <?php echo ''; ?>
        <div id="us" class="parallax" data-background-speed-y="0" data-parallax-align="top">
            <div class="background_black"></div>
            <a style="display:block;" href="store.php">
                <h1><div id="title">LA TIENDA</div></h1>
            </a>
            <p class="decoration scrollflow -slide-top" data-scrollflow-start="0" data-scrollflow-distance="15" data-scrollflow-amount="30">U------------q(Q-----------u</p>


        </div>

        <div id="shirts" class="parallax" data-background-speed-y="0" data-parallax-align="top">
            <div class="background_black"></div>
            <a style="display:block;" href="shirts.php">
                <h1 id = "fly-it">CAMISAS</h1>
            </a>
        </div>
        
        <!--<div id="shirts" class="parallax" data-background-speed-y="0" data-parallax-align="top">
             <a style="display:block;" href="shirts.php">
                <div class="background_black"></div>
                <h1>CAMISAS</h1>
            </a>
        </div>-->
        
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

<!--BODY-->
<?php include_once("footer.html");?>
<script>
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

      $.slidebars();

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


    });


/*Password placeholder , so the placeholder actually shows, and not just dots*/
    $(function() {
    // Invoke the plugin
    $('input, textarea').placeholder({customClass:'my-placeholder'});
    // That’s it, really.
    });
       
    /*2nd slidebar*/

    // All sides
    var sides = ["left", "top", "right", "bottom"];

    // Initialize sidebars
    for (var i = 0; i < sides.length; ++i) {
        var cSide = sides[i];
        $(".sidebar." + cSide).sidebar({side: cSide}).hide().trigger("sidebar:close").on("sidebar:closed", function () {
            $(this).show();
        });
    }

    // Click handlers
    $(".sidebar").on("click", function () {
        var $this = $(this);
        var action = $this.attr("data-action");
        var side = $this.attr("data-side");
        $(".sidebar." + side).trigger("sidebar:" + action);
        return false;
    });
        
   
    </script>
