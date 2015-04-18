<?php include_once("header.html");?>
<!--BODY-->

<div>
        <a href="#" id="menu_a" style="display:block; position:fixed;z-index:1000;" onclick="display_menu()">
            <div class="menu-toggle"></div>
            <div class="text_toggle">
                <h5>MENÚ</h5>
            </div>
        </a>       
        <div class="full_background pay">
            <div class="background_black"></div>
            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:10%;position:relative;z-index:999; ">
                 <div class="col-lg-6 col-md-6 col-sm-6 center">
                    <div class="white_block">
                        <p class="center" style="width:100%; font-size:18pt; font-weight:bold;">PASO 1</p>
                        <p class="Foglihten center" style="font-size:20pt;">P1+{}+!p</p>
                        <p class="left_align" style="width:100%; font-size:15pt; font-weight:bold;">DATOS DE ENV&Iacute;O</p>
                        <table class="payment">
                            <thead>
                                <th ></th>
                            </thead>
                            <tr>
                                <td>
                                 <form class="payment-form"  method="post" onsubmit="" action="#">
                                      <p><label><i class="fa fa-user fa-lg"></i></label><input name="nombre" type="text" class="text" placeholder=" NOMBRE COMPLETO" ></p>
                                      <p><label><i class="fa fa-map-marker fa-lg"></i></label><input name="numCalle" type="text" class="text" placeholder=" N&Uacute;MERO DE CALLE" ></p>
                                      <p><label></label><input name="numExt" type="text" class="text" placeholder=" N&Uacute;MERO EXTERIOR" ></p>
                                      <p><label></label><input name="numExt" type="text" class="text" placeholder=" N&Uacute;MERO INTERIOR" ></p>
                                      <p><label></label><input name="codP" type="text" class="text" placeholder=" C&Oacute;DIGO POSTAL" ></p>
                                      <p><label></label><input name="colFracc" type="text" class="text" placeholder=" COLONIA O FRACCIONAMIENTO" ></p>
                                      <p>
                                        <label class="select">
                                            <select class="state">
                                                <option selected>AGUASCALIENTES</option>
                                                <option>YUCAT&Aacute;N</option>
                                                <option>ZACATECAS</option>
                                            </select>
                                        </label>
                                     </form>
                                      </p>      
                                </td>
                            </tr>                          
                            <tfoot></tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 center">
                    <div class="white_block">
                        <p class="center" style="width:100%; font-size:18pt; font-weight:bold;">PASO 2</p>
                        <p class="Foglihten center" style="font-size:20pt;">P1+{}+!p</p>
                        <p></p>
                        <table class="payment">
                            <thead>
                                <th ></th>
                            </thead>
                            <tr>
                                <td>
                                 <form class="payment-form"  method="post" onsubmit="" action="#">
                                    <p>
                                        <label class="select">
                                            <select class="formPago">
                                                <option selected>TARJETA DE CR&Eacute;DITO</option>
                                                <option>TARJETA DE D&Eacute;BITO</option>
                                            </select>
                                        </label>
                                      </p> 
                                      <p>
                                        <label class="select">
                                            <select class="formPago">
                                                <option selected>MASTERCARD</option>
                                                <option>VISA</option>
                                            </select>
                                        </label>
                                      </p> 
                                      <p><label><i class="fa fa-credit-card fa-lg"></i></label><input name="numTarj" type="text" class="text" placeholder=" N&Uacute;MERO DE TARJETA" ></p>
                                      <p><label><i class="fa fa-calendar fa-lg"></i></label><input name="expDt" type="text" class="text" placeholder=" FECHA DE EXPIRACI&Oacute;N" ></p>
                                      <p><label><i class="fa fa-key fa-lg"></i></label><input name="segCod" type="text" class="text" placeholder=" C&Oacute;DIGO DE SEGURIDAD" ></p>
                                       <p style="border:none"><button>LISTO</button></p> 
                                      </form>
     
                                </td>
                            </tr>                          
                            <tfoot></tfoot>
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
        

    /*Slidebar*/
    (function($) {
        $(document).ready(function() {
            $.slidebars();
            var deleteLog = false;
            /*$('#pagepiling').pagepiling({
                menu: false,
                anchors: ['camisa-sport-ajustada', 'camisa-elegante-ajustada', 'camisa-oficina-ajustada', 'camisa-casual-ajustada'],
                navigation: {
                    'textColor': '#f2f2f2',
                    'bulletsColor': '#ccc',
                    'position': 'right',
                    'tooltips': ['SPORT AJUSTADA', 'ELEGANTE AJUSTADA', 'OFICINA AJUSTADA', 'CASUAL AJUSTADA']
                }

            });*/

            $('#full-width-slider_shirt').royalSlider({
                loop:true,
                keyboardNavEnabled: true,
                imageScaleMode: "fill",
                controlNavigation: "none",
                navigateByClick: true,
                usePreloader: true,
                sliderDrag: false
            });
            setTimeout(function(){
                 var slider = $(".royalSlider").data('royalSlider');
                slider.updateSliderSize();
            }, 1000);
           

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
