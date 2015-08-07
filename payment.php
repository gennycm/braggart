<?php 
  session_start();
  if(!isset($_SESSION["braggart_id_user"])){
    header("Location: index.php?ac=login");
  }
?>
<?php include_once("header.html");?>
<!--BODY-->
<?php
  include_once("cp/clases/userend.php");

  if(isset($_SESSION["braggar_payment_data"])){
    $payment_data = $_SESSION["braggar_payment_data"];
    $nombre = $payment_data["nombre"];
    $calle = $payment_data["calle"];
    $numExt = $payment_data["numExt"];
    $numInt = $payment_data["numInt"];
    $codP = $payment_data["codP"];
    $colFracc = $payment_data["colFracc"];
    $municipio = $payment_data["municipio"];
    $ciudad = $payment_data["ciudad"];
    $estado = $payment_data["estado"];
  }
  else{
    $user = new userend($_SESSION["braggart_id_user"]);
    $user -> obten_userend();    
    $nombre = $user -> nombre;
    $calle = $user -> calle;
    $numExt = $user -> numExt;
    $numInt = $user -> numInt;
    $codP = $user -> codP;
    $colFracc = $user -> colFracc;
    $municipio = $user -> municipio;
    $ciudad = $user -> ciudad;
    $estado = $user -> estado;
  }
?>
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
                        <p id="paso1_title" class="center" style="width:100%; font-size:18pt; font-weight:bold;">PASO 1</p>
                        <svg id="paso1_deco" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="123px" height="15px" viewBox="0 0 123 15">
                            <path fill="none" stroke="#231F20" stroke-width="0.6868" stroke-miterlimit="10" d="M0.5,1.335h122"/>
                            <path fill="none" stroke="#231F20" stroke-width="1.085" stroke-miterlimit="10" d="M63.615,8.319l-5.104,5.592L53.16,9.026
                                l5.103-5.591L63.615,8.319z"/>
                            <path fill="none" stroke="#231F20" stroke-width="1.085" stroke-miterlimit="10" d="M68.842,8.026l-5.103,5.591l-5.353-4.886
                                L63.49,3.14L68.842,8.026z"/>
                        </svg>
                        <p class="left_align" style="width:100%; font-size:15pt; font-weight:bold;">DATOS DE ENV&Iacute;O</p>
                        <table class="payment">
                            <thead>
                                <th ></th>
                            </thead>
                            <tr>
                                <td>
                                      <p class="form"><label><i class="fa fa-user fa-lg"></i></label><input name="nombre" value="<?=$nombre?>" type="text" class="text" placeholder=" NOMBRE COMPLETO"  ></p>
                                      <p class="form"><label><i class="fa fa-map-marker fa-lg"></i></label><input name="numCalle" value="<?=$calle?>" type="text" class="text" placeholder=" N&Uacute;MERO DE CALLE" ></p>
                                      <p class="form"><label></label><input name="numExt" value="<?=$numExt?>" type="text" class="text" placeholder=" N&Uacute;MERO EXTERIOR" ></p>
                                      <p class="form"><label></label><input name="numInt" value="<?=$numInt?>" type="text" class="text" placeholder=" N&Uacute;MERO INTERIOR" ></p>
                                      <p class="form"><label></label><input name="codP" value="<?=$codP?>" type="text" class="text" placeholder=" C&Oacute;DIGO POSTAL" ></p>
                                      <p class="form"><label></label><input name="colFracc" value="<?=$colFracc?>" type="text" class="text" placeholder=" COLONIA O FRACCIONAMIENTO" ></p>
                                      <p class="form"><label></label><input name="municipio" value="<?=$municipio?>" type="text" class="text" placeholder=" MUNICIPIO" ></p>
                                      <p class="form"><label></label><input name="ciudad" value="<?=$ciudad?>" type="text" class="text" placeholder=" CIUDAD" ></p>
                                      <p class="form"><label></label><input name="estado" value="<?=$estado?>" type="text" class="text" placeholder=" ESTADO" ></p>
                                </td>
                            </tr>                          
                            <tfoot></tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 center">
                    <div class="white_block">
                        <p id="paso2_title" class="center" style="width:100%; font-size:18pt; font-weight:bold;">PASO 2</p>
                        <svg id="paso2_deco" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="123px" height="15px" viewBox="0 0 123 15">
                            <path fill="none" stroke="#231F20" stroke-width="0.6868" stroke-miterlimit="10" d="M0.5,1.335h122"/>
                            <path fill="none" stroke="#231F20" stroke-width="1.085" stroke-miterlimit="10" d="M63.615,8.319l-5.104,5.592L53.16,9.026
                                l5.103-5.591L63.615,8.319z"/>
                            <path fill="none" stroke="#231F20" stroke-width="1.085" stroke-miterlimit="10" d="M68.842,8.026l-5.103,5.591l-5.353-4.886
                                L63.49,3.14L68.842,8.026z"/>
                        </svg>
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
                                          <p class="form"><label><i class="fa fa-key fa-lg"></i></label><input size="4" data-conekta="card[cvc]" type="password" class="text" placeholder=" C&Oacute;DIGO DE SEGURIDAD" ></p>
                                          <p class="form"><label><i class="fa fa-calendar fa-lg"></i></label><input size="2" data-conekta="card[exp_month]" type="text" class="text" placeholder=" MES DE EXPIRACI&Oacute;N 01, 02, 10" ></p>
                                          <p class="form"><label><i class="fa fa-calendar fa-lg"></i></label><input size="4" data-conekta="card[exp_year]" type="text" class="text" placeholder=" AÑO DE EXPIRACI&Oacute;N 2016, 2017, 2020" ></p>
                                          <p class="form" style="border:none"><button type="submit">LISTO</button></p>
                                          <input type="hidden" name="operaciones" value="rp">
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

  jQuery(document).ready(function($) {
          /*Svg Painter*/
     $('#diamond_little').lazylinepainter( 
         {
            "svgData": diamondSvg,
            "strokeWidth": 2,
            "strokeColor": "#FFFFFF",
            "responsive": "true"
        }).lazylinepainter('paint');

        var paths = $('#paso1_deco path');
        var title = $('#paso1_title');
  

        // For each path, set the stroke-dasharray and stroke-dashoffset
        // equal to the path's total length, hence rendering it invisible
        paths.each(function(i, e) {
            e.style.strokeDasharray = e.style.strokeDashoffset = e.getTotalLength();
        }); 
        var tlTitle = new TimelineLite(); 
        tlTitle.add("stagger", "+=0.5");
        tlTitle.staggerFrom(title, 1.5, {scale:0, autoAlpha:0}, 1, "stagger");
        tlTitle.play("stagger");
        var tlCart  = new TimelineLite();
        tlCart.add([
            TweenLite.to(paths.eq(0), 1.5, {strokeDashoffset: 0, delay: 1}),
            TweenLite.to(paths.eq(1), 1.5, {strokeDashoffset: 0, delay: 1}),
            TweenLite.to(paths.eq(2), 1.5, {strokeDashoffset: 0, delay: 1}),  
        ]);
        tlCart.restart();

        var title2 = $('#paso2_title');
        var tlTitle2 = new TimelineLite(); 
        tlTitle2.add("stagger", "+=0.5");
        tlTitle2.staggerFrom(title2, 1.5, {scale:0, autoAlpha:0}, 1, "stagger");
        tlTitle2.play("stagger");

                var paths2 = $('#paso2_deco path');
                 paths2.each(function(i, e) {
            e.style.strokeDasharray = e.style.strokeDashoffset = e.getTotalLength();
        }); 
                console.log(paths2);
      var tlCart2  = new TimelineLite();
        tlCart2.add([
            TweenLite.to(paths2.eq(0), 1.5, {strokeDashoffset: 0, delay: 1}),
            TweenLite.to(paths2.eq(1), 1.5, {strokeDashoffset: 0, delay: 1}),
            TweenLite.to(paths2.eq(2), 1.5, {strokeDashoffset: 0, delay: 1}),  
        ]);
        tlCart2.restart();
        
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
