<?php include_once("header.html");?>
<!--BODY-->
    <?php
        include_once("./cp/clases/producto.php");
        $producto = new producto();
        $productos = $producto -> listar_productos_activos();
    ?>
<!--<div id="pagepiling">-->
<style>
    <?php 
        foreach ($productos as $producto_tmp){
            echo "#p".$producto_tmp["id_producto"]."{background-image: url(./imgProductos/".$producto_tmp["img_principal"].");position:relative;}";
        }
    ?>
</style>
        <a href="#" id="menu_a" style="display:block; position:fixed;z-index:1000;" onclick="display_menu()">
            <div class="menu-toggle"></div>
            <div class="text_toggle">
                <h5>MENÚ</h5>
            </div>
        </a>

        <?php 
            foreach ($productos as $producto_tmp){
               echo '<div id="p'.$producto_tmp["id_producto"].'" class="parallax" data-background-speed-y="0" data-parallax-align="top">
                       <div class="background_black"></div>
                       <div id="triangleWrapper">
                            <div class="triangle-img"></div>
                            <div class="cart-wish-container pull-right">
                                <p class="title-shirt">'.$producto_tmp["titulo_esp"].'</p>
                                <a href="#" class="sidebar" onclick="showProductoInfo('.$producto_tmp["id_producto"].')" data-action="open" data-side="left">
                                    <i class=" sc_icon fa fa-shopping-cart fa-2x"></i> 
                                </a>                          
                                <i class="wl_icon fa fa-heart-o fa-2x sb-open-left"></i>
                            </div>
                        </div>
                    </div>';
            }
        ?>
</div><!-- /.container-fluid -->


<!--Login Slidebar-->
<?php include_once("login_register.html");?>

<!--Cart Slidebar-->
<?php include_once("cart.html");?>

<!--Product Slidebar-->
<?php include_once("product_info.html");?>

<!--Product Slidebar-->
<?php include_once("wishlist.html");?>

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

             $(fullscreenParallax);
           

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
