<?php include_once("header.html");?>
<!--BODY-->
<?php 
      include_once("cp/clases/transporte.php");
      $transporte = new Transporte();
      $transportes = $transporte -> listar_transportes_activos();
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
                        <p class="center" style="width:100%; font-size:18pt; font-weight:bold;">PASO 3</p>
                        <p class="Foglihten center" style="font-size:20pt;">P1+{}+!p</p>
                        <p class="left_align" style="width:100%; font-size:15pt; font-weight:bold;">SELECCIONA UN TRANSPORTE</p>
                        <table class="payment">
                            <tr>
                                <td>
                                  <p class="form">
                                    <label><i class="fa fa-user fa-lg"></i></label>
                                    <input name="nombre" type="text" class="text" placeholder=" NOMBRE COMPLETO" >
                                  </p>
                                  <p class="form" style="border:none"><button type="submit">LISTO</button></p>
                                  <input type="hidden" name="op" value="cht">
                                </td>
                            </tr>                          
                            <tfoot></tfoot>
                        </table>
                    </div>
                  </div>
                </form>

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
