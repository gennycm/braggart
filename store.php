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
<div class="sb-slidebar sb-right sb-style-overlay">
    <i class="fa fa-times fa-2x sb-close"></i>
    <form class="register-form"  method="post" onsubmit="" action="">
      <p><label><i class="fa fa-envelope fa-lg"></i></label><input name="username" type="text" class="text" placeholder=" CORREO ELECTR&Oacute;NICO" ></p>
      <p><label><i class="fa fa-key fa-lg"></i></label><input name="regPassword" type="password" class="text" placeholder=" CONTRASE&Ntilde;A" ></p>
      <p><label><i class="fa fa-key fa-lg"></i></label><input name="confPassword" type="password" class="text" placeholder=" CONFIRMA CONTRASE&Ntilde;A" ></p>
      <input type="submit" class="hvr-sweep-to-right" value="REGISTRARSE" >
    </form>
    <p style="height:30%"></p>

    <form class="login-form"  method="post" onsubmit="" action="">
      <p><label><i class="fa fa-envelope fa-lg"></i></label><input name="username" type="text" class="text" placeholder=" CORREO ELECTR&Oacute;NICO" ></p>
      <p><label><i class="fa fa-key fa-lg"></i></label><input name="iniPassword" type="password" class="text" placeholder=" CONTRASE&Ntilde;A" ></p>
      <input type="submit" class="hvr-sweep-to-right" value="ENTRAR" >
    </form>
</div>

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

    </script>
