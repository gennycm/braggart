<?php include_once("header.html");?>
<!--BODY-->
    <?php
        include_once("./cp/clases/producto.php");
        if(isset($_REQUEST["s"]) && $_REQUEST["s"] != ""){
          $producto = new producto();
          $productos = $producto -> listar_productos_activos_por_busqueda($_REQUEST["s"]);
        }
        else{
           $producto = new producto();
           $productos = $producto -> listar_productos_activos();
        }
       
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
                                <h1 id="title-shirt" class="title-shirt scrollflow -slide-left">'.$producto_tmp["titulo_esp"].'</h1>
                                <a href="#" class="sidebar" onclick="showProductoInfo('.$producto_tmp["id_producto"].')">
                                    <i class="sc_icon fa fa-shopping-cart fa-2x scrollflow -slide-top "  data-scrollflow-start="0" data-scrollflow-distance="15" data-scrollflow-amount="30"></i> 
                                </a>                          
                                <i onclick="addWishlist('.$producto_tmp["id_producto"].')" class="wl_icon fa fa-heart-o fa-2x sb-open-left scrollflow -slide-bottom"  data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"></i>
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
    jQuery(document).ready(function($) {

       $(fullscreenParallax);
      //effects

      var controller = $.superscrollorama();
      // individual element tween examples
      controller.addTween('#title', TweenMax.fromTo( $('#title'), .50, {css:{opacity:0, 'letter-spacing':'30px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, 'letter-spacing':'-10px'}, ease:Quad.easeInOut}), 0, 10); // 100 px offset for better timing
      controller.addTween('#title-shirt', TweenMax.from( $('#fly-it'), .25, {css:{right:'1000px'}, ease:Quad.easeInOut}));
     // controller.addTween('#menu', TweenMax.fromTo( $('#scale-it'), .25, {css:{opacity:0, fontSize:'20px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'240px'}, ease:Quad.easeInOut}),10,0);


  //   $.slidebars()

      

    });

/*Password placeholder , so the placeholder actually shows, and not just dots*/
    $(function() {
    // Invoke the plugin
    $('input, textarea').placeholder({customClass:'my-placeholder'});
    // That’s it, really.
    });
    

                
</script>
