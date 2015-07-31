<?php include_once("header.html");?>
<!--BODY-->
<?php 
      include_once("cp/clases/transporte.php");
      include_once("cp/clases/producto.php");

      $transporte = new transporte();
      $transportes = $transporte -> listar_transportes_activos();
      $cart = $_SESSION["braggart_cart"];
      $peso_total = 0;
      foreach ($cart as $producto) {
        $product = new producto($producto["id"]);
        $product -> obtener_producto();
        $peso_total += $product -> peso * $producto["amount"];
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
                        <p class="center" style="width:100%; font-size:18pt; font-weight:bold;">PASO 3</p>
                        <p class="Foglihten center" style="font-size:20pt;">P1+{}+!p</p>
                        <p class="left_align" style="width:100%; font-size:15pt; font-weight:bold;">SELECCIONA UN TRANSPORTE</p>
                        <table class="payment">
                            <tr>
                                <td>
                                  <p class="form">
                                    <label class="pull-left"><i class="fa fa-truck fa-lg"></i></label>
                                    <select name="transporte">
                                      <option value="0" style="width:100%;">Selecciona un transporte</option>
                                      <?php
                                        foreach ($transportes as $transporte) {
                                          foreach ($transporte["rangos_transporte"] as $rango_transporte) {
                                            if($peso_total >= $rango_transporte["peso_minimo"] && $peso_total < $rango_transporte["peso_maximo"] ){
                                               echo "<option value='".$rango_transporte["id_rango_transporte"]."/".$transporte["id_transporte"]."'>".$transporte["nombre"]." - $".$rango_transporte["cargo_por_envio"]." MXN - ".$transporte["tiempo_transito"]." d&iacute;as</option>";
                                               break;
                                            }
                                          }
                                        }
                                      ?>
                                    </select>
                                  </p>
                                  <p class="form" style="border:none"><button type="submit">LISTO</button></p>
                                  <input type="hidden" name="operaciones" value="cht">
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

<script>

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
