<?php include_once("header.html");?>
<!--BODY-->
<?php
    include_once("./cp/clases/latienda.php");
    $latienda = new latienda(1);
    $latienda ->  obtener_latienda();
?>

    <a href="#" style="display:block; position:fixed;z-index:1000;" onclick="display_menu()">
        <div class="menu-toggle"></div>
        <div class="text_toggle">
            <h5>MENÚ</h5>
        </div>
    </a>       
    <div class="parallax" data-background-speed-y="0" data-parallax-align="bottom" id="history">
        <div class="background_black"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 align-center" style="position:relative;z-index:800;">
            <img src="img/logo-slide.png" width="30%">
            <p class="history  scrollflow -slide-left" style="filter: opacity(1); transform: translate3d(0px, 50px, 0px) scale(0.8); transition: all 800ms ease-out 0s;">
                BRAGGART es una marca orgullosamente yucateca con sede en la ciudad de Mérida. 
                <br/>Nace en 2015 con el objetivo de crear camisas para caballero de alta calidad.
            </p>
        </div>
    </div>

    <div class="parallax" data-background-speed-y="0" data-parallax-align="top" id="us">
        <div class="background_black"></div>
        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:10%;position:relative;z-index:999; ">
            <div class="col-lg-4 col-md-4 col-sm-4 store-section">
                <div class="col-lg-12">
                    <div class="icon-container fabric"></div>
                    <div class="icon-p">
                        <?=$latienda -> descripcion1;?>
                    <!--BRAGGART  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 store-section">
               <div class="col-lg-12">
                    <div class="icon-container delivery"></div>
                    <div class="icon-p">
                        <?=$latienda -> descripcion2;?>
                        <!--Se hacen envíos a la república mexicana por el servicio de paquetería XYZ.-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 store-section">
                <div class="col-lg-12">
                    <div class="icon-container payment"></div>
                    <div class="icon-p">
                        <?=$latienda -> descripcion3;?>
                    <!--Los pagos se realizan a través de la plataforma Conekta. Puede ser por tarjeta de crédito, pago en ventanilla o pago en el OXXO.-->
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- /.container-fluid -->


<!--Login Slidebar-->
<?php include_once("login_register.html");?>
<!--Cart Slidebar-->
<?php include_once("cart.html");?>
<!--Product Slidebar-->
<?php include_once("wishlist.html");?>
<!--BODY-->
<?php include_once("footer.html");?>
<script>
    /*Parallax scrolling*/
        

    /*Slidebar*/
    (function($) {
        $(document).ready(function() {
            var deleteLog = false;

            $(fullscreenParallax);
           
    var controller = $.superscrollorama();
      // individual element tween examples
      controller.addTween('#title', TweenMax.fromTo( $('#title'), .50, {css:{opacity:0, 'letter-spacing':'30px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, 'letter-spacing':'-10px'}, ease:Quad.easeInOut}), 0, 10); // 100 px offset for better timing
      controller.addTween('#fly-it', TweenMax.from( $('#fly-it'), .50, {css:{right:'1000px'}, ease:Quad.easeInOut}));

        });
    }) (jQuery);

/*Password placeholder , so the placeholder actually shows, and not just dots*/
    $(function() {
    // Invoke the plugin
    $('input, textarea').placeholder({customClass:'my-placeholder'});
    // That’s it, really.
    });
                
</script>
