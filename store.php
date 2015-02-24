<?php include_once("header.html");?>
<!--BODY-->

<div id="pagepiling">
    <a href="#" style="display:block; position:fixed;z-index:1000;" onclick="display_menu()">
        <div class="menu-toggle"></div>
        <div class="text_toggle">
            <h5>MENÚ</h5>
        </div>
    </a>       
    <div class="section" id="us">
        <div class="background_black"></div>
        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:-150px;position:absolute;z-index:999;">
            <div class="col-lg-4 col-md-4 col-sm-4 store-section">
                <div class="col-lg-12">
                    <div class="icon-container fabric"></div>
                    <p class="icon-p">BRAGGART  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 store-section">
               <div class="col-lg-12">
                    <div class="icon-container delivery"></div>
                    <p class="icon-p">Se hacen envíos a la república mexicana por el servicio de paquetería XYZ.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 store-section">
                <div class="col-lg-12">
                    <div class="icon-container payment"></div>
                    <p class="icon-p">Los pagos se realizan a través de la plataforma Conekta. Puede ser por tarjeta de crédito, pago en ventanilla o pago en el OXXO.</p>
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
        var deleteLog = false;
        $(document).ready(function() {
            $('#pagepiling').pagepiling({
                menu: false,
                anchors: ['us'],
                navigation: {
                    'textColor': '#f2f2f2',
                    'bulletsColor': '#ccc',
                    'position': 'right',
                    'tooltips': ['LA TIENDA']
                }

            });
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
