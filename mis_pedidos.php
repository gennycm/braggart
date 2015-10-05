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
                
<div class="container" style="margin-top:150px;margin-bottom:50px;">
    <div class="col-lg-12 pedidos-container">
        <div class="pedidos-background"></div>
         <div class="col-lg-12 col-md-12 col-sm-12" style="position:relative;z-index:999;overflow:auto; ">
          <table class="pedidos">
            <thead>
                <tr>
                    <td>No. de Pedido</td>
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
                    <td><a href="pedido.php?id=<?=$pedido["idorden"];?>">Pedido No. <?=$pedido["idorden"]?></a></td>
                    <td>$<?=$pedido["total_productos"];?> MXN</td>
                    <td>$<?=$rango_transporte -> cargo_por_envio?> MXN</td>
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


  jQuery(document).ready(function($) {
    /*Svg Painter*/
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
