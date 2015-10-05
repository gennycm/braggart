<?php include_once("header.html");?>
<!--BODY-->
<?php 
      include_once("cp/clases/transporte.php");
      include_once("cp/clases/producto.php");
      include_once("cp/clases/rango_transporte.php");

      
      if(!isset($_SESSION["braggart_total_shop"])){
        header("Location: payment.php?status=failed");
      }

?>
<div>       
        <div class="full_background pay">
            <div class="background_black"></div>
            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:10%;position:relative;z-index:999;overflow:auto; ">
                 <div class="col-lg-6 col-md-6 col-sm-6 center">
                    <div class="white_block">
                        <p class="center" style="width:100%; font-size:18pt; font-weight:bold;">PASO 5</p>
                        <p class="Foglihten center" style="font-size:20pt;">P1+{}+!p</p>
                        <p class="left_align" style="width:100%; font-size:15pt; font-weight:bold;">COMPRA EXITOSA</p>
                        <table class="payment">
                            <tr>
                                <td>
                                  <p class="form">
                                      Se cobro a tu tarjeta la siguiente cantidad.<br><br>
                                      Tu compra se esta procesando, cuando sea revisada se te enviará un correo con los datos para que puedas rastrear tu paquete.<br><br>
                                      Total: $ <?=$_SESSION["braggart_total_shop"]?>  MXN

                                  </p>
                                  <p class="form" style="border:none"><a href="mis_pedidos.php"><button type="submit" class="button">MIS PEDIDOS</button></a></p>
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
