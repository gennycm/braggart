<?php include_once("header.html");?>
<!--BODY-->

<div id="pagepiling">
        <a href="#" style="display:block; position:fixed;z-index:1000;" onclick="display_menu()">
            <div class="menu-toggle"></div>
            <div class="text_toggle">
                <h5>MENÚ</h5>
            </div>
        </a>       
       
        <div class="section shirt" id="shirt1" style="background-image:url(./img_product/img_4.jpg);">
            <div class="background_black"></div>
               <div id="triangleWrapper">
                    <div class="triangle-img"></div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="#" class="sidebar" data-action="open" data-side="left">
                                <i class=" sc_icon fa fa-shopping-cart fa-2x"></i> 
                            </a>                          
                            <i class="wl_icon fa fa-heart-o fa-2x sb-open-left"></i>
                        </div>

                    </div>
                </div>
        </div>
        
        <div class="section shirt" id="shirt2" style="background-image:url(./img_product/img_6.jpg);">
            <div class="background_black"></div>
            <div id="triangleWrapper">
                    <div class="triangle-img"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="#" class="sidebar" data-action="open" data-side="left">
                                <i class=" sc_icon fa fa-shopping-cart fa-2x"></i> 
                            </a>                          
                            <i class="wl_icon fa fa-heart-o fa-2x sb-open-left"></i>
                        </div>

                    </div>
                </div>
            
        </div>
        
        <div class="section shirt" id="shirt3" style="background-image:url(./img_product/img_3.jpg);">
            <div class="background_black"></div>
            <div id="triangleWrapper">
                    <div class="triangle-img"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="#" class="sidebar" data-action="open" data-side="left">
                                <i class=" sc_icon fa fa-shopping-cart fa-2x"></i> 
                            </a>                          
                            <i class="wl_icon fa fa-heart-o fa-2x sb-open-left"></i>
                        </div>

                    </div>
                </div>
            
        </div>
         
        <div class="section shirt" id="shirt4" style="background-image:url(./img_product/img_5.jpg);">
            <div class="background_black"></div>
            <div id="triangleWrapper">
                    <div class="triangle-img"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="#" class="sidebar" data-action="open" data-side="left">
                                <i class=" sc_icon fa fa-shopping-cart fa-2x"></i> 
                            </a>                          
                            <i class="wl_icon fa fa-heart-o fa-2x sb-open-left"></i>
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

            $('#full-width-slider_shirt').royalSlider({
                loop:true,
                keyboardNavEnabled: true,
                imageScaleMode: "fill",
                controlNavigation: "none",
                navigateByClick: true,
                usePreloader: true,
                sliderDrag: false
            });
            setTimeout(function(){
                 var slider = $(".royalSlider").data('royalSlider');
                slider.updateSliderSize();
            }, 1000);
           

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
