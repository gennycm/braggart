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
            <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    </div>
                   <div class="col-lg-6 col-md-6 col-sm-6">
                        <div>
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
            </div>
        </div>
    </div>
</div><!-- /.container-fluid -->

<!--Login Slidebar-->
<?php include_once("login_register.html");?>
<!--Cart Slidebar-->
<?php include_once("cart.html");?>

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
