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
  include_once("cp/clases/orden.php");
  include_once("cp/clases/detalle_orden.php");
  include_once("cp/clases/transporte.php");
  include_once("cp/clases/rango_transporte.php");

  $ordenes = new orden();
  $ordenes -> iduserend = $_SESSION["braggart_id_user"];

  $pedidos = $ordenes -> listar_ordenes_por_usuario();
?>
        <div class="full_background deliver">
            <div class="background_black"></div>
        </div>    
        <a href="#" id="menu_a" style="display:block; position:fixed;z-index:1000;" onclick="display_menu()">
            <div class="menu-toggle"></div>
            <div class="text_toggle">
                <h5>MENÚ</h5>
            </div>
        </a>       
                
<div class="container" style="margin-top:150px;">
    <div class="col-lg-12 pedidos-container">
        <div class="pedidos-background"></div>
         <div class="col-lg-12 col-md-12 col-sm-12" style="position:relative;z-index:999;overflow:auto; ">
          <table class="pedidos">
            <thead>
                <tr>
                    <td># Pedido</td>
                    <td>Total Productos</td>
                    <td>Transporte</td>
                    <td>Estado</td>
                    <td>Fecha</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($pedidos as $pedido) {
                        $transporte = new transporte($pedido["id_transporte"]);
                        $transporte -> obtener_transporte();
                        $rango_transporte = new rango_transporte($pedido["id_rango_transporte"]);
                        $rango_transporte -> obtener_rango_transporte();
                 ?>
                <tr>
                    <td><a href="pedido.php?id=<?=$pedido["idorden"];?>"><?=$pedido["idorden"];?></a></td>
                    <td><?=$pedido["total_productos"];?></td>
                    <td><?=$rango_transporte -> cargo_por_envio?></td>
                    <td><?=$pedido["estatus"];?></td>
                    <td><?=$pedido["fecha"];?></td>
                </tr>
                 <?php                            
                    }
                 ?>
            </tbody>
          </table>
        </div>
    </div>
</div>        


<!--Login Slidebar-->
<?php include_once("login_register.html");?>

<!--Cart Slidebar-->
<?php include_once("cart.html");?>

<!--BODY-->
<?php include_once("footer.html");?>
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
