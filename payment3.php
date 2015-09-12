<?php include_once("header.html");?>
<!--BODY-->
<?php 
      include_once("cp/clases/transporte.php");
      include_once("cp/clases/producto.php");
      include_once("cp/clases/rango_transporte.php");

      
      if(isset($_SESSION["braggart_transport_token"])){

        $transporte_token = explode("/", $_SESSION["braggart_transport_token"]);
        $transporte = new transporte($transporte_token[1]);
        $transporte -> obtener_transporte();
        $rango_transporte = new rango_transporte($transporte_token[0]);
        $rango_transporte -> obtener_rango_transporte();
      }
      $cart = $_SESSION["braggart_cart"];
      $precio_total = 0;
      foreach ($cart as $producto) {
        $precio_total += $producto["price"] * $producto["amount"];
      }

      $total = $precio_total + $rango_transporte -> cargo_por_envio;
      $_SESSION["braggart_total_shop"] = $total;

      $id_cart_producto_agotado = 0;
      if(isset($_GET["msg"])){
        $msg = $_GET["msg"];
        switch ($msg) {
            case '3':
                if(isset($_GET["cpa"])){
                    $id_cart_producto_agotado = $_GET["cpa"];
                    
                }
                break;
            default:
                # code...
                break;
        }
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
                        <p id="paso4_title" class="center" style="width:100%; font-size:18pt; font-weight:bold;">PASO 4</p>
                        <svg id="paso4_deco" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="123px" height="15px" viewBox="0 0 123 15">
                            <path fill="none" stroke="#231F20" stroke-width="0.6868" stroke-miterlimit="10" d="M0.5,1.335h122"/>
                            <path fill="none" stroke="#231F20" stroke-width="1.085" stroke-miterlimit="10" d="M63.615,8.319l-5.104,5.592L53.16,9.026
                                l5.103-5.591L63.615,8.319z"/>
                            <path fill="none" stroke="#231F20" stroke-width="1.085" stroke-miterlimit="10" d="M68.842,8.026l-5.103,5.591l-5.353-4.886
                                L63.49,3.14L68.842,8.026z"/>
                        </svg>
                        <p class="left_align" style="width:100%; font-size:15pt; font-weight:bold;">FINALIZAR COMPRA</p>
                        <table class="payment">
                            <tr>
                                <td>
                                  <p class="form">
                                      Camisas: $ <?=$precio_total?> MXN<br><br>
                                      Transporte: $ <?=$rango_transporte -> cargo_por_envio?> MXN<br><br>
                                      Total: $ <?=$total?>  MXN
                                  </p>
                                  <p class="form" style="border:none"><button type="submit">PAGAR</button></p>
                                  <input type="hidden" name="operaciones" value="ccc">
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

    var pathsDmnd;
     pathsDmnd = $('#diamond_little path');
     pathsDmnd.each(function(i, e) {
            e.style.strokeDasharray = e.style.strokeDashoffset = e.getTotalLength();
        });
     var tlLoadDmnd  = new TimelineMax();
     tlLoadDmnd.add([
            TweenLite.to(pathsDmnd.eq(0), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(1), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(2), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(3), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(4), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(5), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(6), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(7), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(8), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(9), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(10), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(11), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(12), 2, {strokeDashoffset: 0, delay: 0.0}),    
        ]);

       var paths = $('#paso4_deco path');
        var title = $('#paso4_title');
  

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
