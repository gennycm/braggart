<?php include_once("header.html");?>
<!--BODY-->

<div>
        <a href="#" style="display:block; position:fixed;z-index:1000;" onclick="display_menu()">
            <div class="menu-toggle"></div>
            <div class="text_toggle">
                <h5>MENÚ</h5>
            </div>
        </a>       
       
        <div class="background_pay">
            <div class="background_black"></div>
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