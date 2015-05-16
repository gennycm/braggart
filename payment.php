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
            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:10%;position:relative;z-index:999;overflow:auto; ">
                <form class="payment-form"  method="post" id="card-form" action="controller.php">
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
                                      <p class="form"><label><i class="fa fa-user fa-lg"></i></label><input name="nombre" type="text" class="text" placeholder=" NOMBRE COMPLETO" ></p>
                                      <p class="form"><label><i class="fa fa-map-marker fa-lg"></i></label><input name="numCalle" type="text" class="text" placeholder=" N&Uacute;MERO DE CALLE" ></p>
                                      <p class="form"><label></label><input name="numExt" type="text" class="text" placeholder=" N&Uacute;MERO EXTERIOR" ></p>
                                      <p class="form"><label></label><input name="numInt" type="text" class="text" placeholder=" N&Uacute;MERO INTERIOR" ></p>
                                      <p class="form"><label></label><input name="codP" type="text" class="text" placeholder=" C&Oacute;DIGO POSTAL" ></p>
                                      <p class="form"><label></label><input name="colFracc" type="text" class="text" placeholder=" COLONIA O FRACCIONAMIENTO" ></p>
                                      <p class="form"><label></label><input name="municipio" type="text" class="text" placeholder=" MUNICIPIO" ></p>
                                      <p class="form"><label></label><input name="ciudad" type="text" class="text" placeholder=" CIUDAD" ></p>
                                      <p class="form"><label></label><input name="estado" type="text" class="text" placeholder=" ESTADO" ></p>
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
                                 <!--<form class="payment-form"  method="post" onsubmit="" action="#">
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
                                       <p style="border:none"><button>LISTO</button></p> -->
                                       <!--<form action="controller" method="POST" id="card-form">-->
                                          <span class="card-errors"></span>
                                          <p class="form"><label><i class="fa fa-user fa-lg"></i></label><input size="20" data-conekta="card[name]" type="text" class="text" placeholder="NOMBRE DEL TARJETAHABIENTE" ></p>
                                          <p class="form"><label><i class="fa fa-credit-card fa-md"></i></label><input size="20" type="text" data-conekta="card[number]" class="text" placeholder=" # DE TARJETA" ></p>
                                          <p class="form"><label><i class="fa fa-key fa-lg"></i></label><input size="4" data-conekta="card[cvc]" type="text" class="text" placeholder=" C&Oacute;DIGO DE SEGURIDAD" ></p>
                                          <p class="form"><label><i class="fa fa-calendar fa-lg"></i></label><input size="2" data-conekta="card[exp_month]" type="text" class="text" placeholder=" MES DE EXPIRACI&Oacute;N 01, 02, 10" ></p>
                                          <p class="form"><label><i class="fa fa-calendar fa-lg"></i></label><input size="4" data-conekta="card[exp_year]" type="text" class="text" placeholder=" AÑO DE EXPIRACI&Oacute;N 2016, 2017, 2020" ></p>
                                          <p class="form" style="border:none"><button type="submit">LISTO</button></p>
                                          <input type="hidden" name="op" value="rp">
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
<script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
<script type="text/javascript">
   Conekta.setPublishableKey('key_PEQaseCZ5q7iDZDWVSy11Rg');
   jQuery(function($) {
      $("#card-form").submit(function(event) {
        var $form;
        $form = $(this);
        $form.find("button").prop("disabled", true);
        Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
        return false;
      });

        var conektaSuccessResponseHandler;
        conektaSuccessResponseHandler = function(token) {
          var $form;
          $form = $("#card-form");          
          $form.append($("<input type=\"hidden\" name=\"conektaTokenId\" />").val(token.id));
          $form.get(0).submit();
        };

        var conektaErrorResponseHandler;
        conektaErrorResponseHandler = function(response) {
          var $form;
          $form = $("#card-form");
          $form.find(".card-errors").text(response.message);
          $form.find("button").prop("disabled", false);
        };
    });
</script>
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
