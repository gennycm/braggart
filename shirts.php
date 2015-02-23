<?php include_once("header.html");?>
<!--BODY-->

<div id="pagepiling">
        <a href="#" style="display:block; position:fixed;z-index:1000;" onclick="display_menu()">
            <div class="menu-toggle"></div>
            <div class="text_toggle">
                <h5>MENÚ</h5>
            </div>
        </a>       
       
        <div class="section shirt" id="shirt1" style="background-image:url(./img_product/img_4.jpg);">
               <div id="triangleWrapper">
                    <div  class="segmentTriangle">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
<a href="#" class="sidebar" data-action="open" data-side="right"><i class=" sc_icon fa fa-shopping-cart fa-3x"></i></a>                            
                            <i class="wl_icon fa fa-heart-o fa-3x"></i>
                        </div>

                    </div>
                </div>
        </div>
        
        <div class="section shirt" id="shirt2" style="background-image:url(./img_product/img_6.jpg);">
            <div class="background_black"></div>
            
        </div>
        
        <div class="section shirt" id="shirt3" style="background-image:url(./img_product/img_3.jpg);">
            <div class="background_black"></div>
            
        </div>
         
        <div class="section shirt" id="shirt4" style="background-image:url(./img_product/img_5.jpg);">
            <div class="background_black"></div>
           
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
      <input type="submit" class="hvr-sweep-to-right" value="REGISTRARSE" >
    </form>
    <p style="height:30%"></p>

    <form class="login-form"  method="post" onsubmit="" action="">
      <p><label><i class="fa fa-envelope fa-lg"></i></label><input name="username" type="text" class="text" placeholder=" CORREO ELECTR&Oacute;NICO" ></p>
      <p><label><i class="fa fa-key fa-lg"></i></label><input name="iniPassword" type="password" class="text" placeholder=" CONTRASE&Ntilde;A" ></p>
      <input type="submit" class="hvr-sweep-to-right" value="ENTRAR" >
    </form>
</div>

<!--Cart Slidebar-->
  <div class="sidebar right">
     <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4"></div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <h3>CARRITO DE COMPRAS</h3>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <a href="#" class="sidebar" data-action="close" data-side="right">
                <i class="fa fa-times fa-lg"></i>
             </a>
        </div>
      </div>
    <div class="row"></div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4"></div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <h3 class="decoration">U++-++-4$+-+-++u</h3>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
        </div>
      </div>
      <div class="row">
         <div class="col-md-4">
            <div class="col-xs-4">
                <div class="square"></div>
            </div>
                <div class="shirt_mini"></div>
            
         </div>
        <div class="col-md-4"><div class="square"></div></div>


      </div>
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
