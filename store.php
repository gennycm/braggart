<?php include_once("header.html");?>
<!--BODY-->
<?php
    include_once("./cp/clases/latienda.php");
    $latienda = new latienda(1);
    $latienda ->  obtener_latienda();
?>   
    <div class="parallax" data-background-speed-y="0" data-parallax-align="bottom" id="history">
        <div class="background_black"></div>
        <div class="historia-container col-lg-12 col-md-12 col-sm-12 align-center" style="position:relative;z-index:800;">
            <img src="img/logo-slide.png" width="30%">
            <div class="historia scrollflow -slide-left">
                <?=$latienda -> historia;?>
            </div>
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

    /*Slidebar*/
    (function($) {
        $(document).ready(function() {
            var deleteLog = false;

            $(fullscreenParallax);
           
    var controller = $.superscrollorama();
      // individual element tween examples
      controller.addTween('#title', TweenMax.fromTo( $('#title'), .50, {css:{opacity:0, 'letter-spacing':'30px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, 'letter-spacing':'-10px'}, ease:Quad.easeInOut}), 0, 10); // 100 px offset for better timing
      controller.addTween('#fly-it', TweenMax.from( $('#fly-it'), .50, {css:{right:'1000px'}, ease:Quad.easeInOut}));




/*Svg Painter*/

     $('#diamond_little').lazylinepainter( 
     {
        "svgData": diamondSvg,
        "strokeWidth": 2,
        "strokeColor": "#FFFFFF",
        "responsive": "true"
    }).lazylinepainter('paint');

        });
    }) (jQuery);

/*Password placeholder , so the placeholder actually shows, and not just dots*/
    $(function() {
    // Invoke the plugin
    $('input, textarea').placeholder({customClass:'my-placeholder'});
    // That’s it, really.
    });
                
</script>
