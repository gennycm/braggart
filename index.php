<?php include_once("header.html");?>
<?php
    function __autoload($nombre_clase) {
        include 'cp/clases/'.$nombre_clase .'.php';
    }
    $temporal = new slide();
    $listaTemporal = $temporal -> listarslideActivas();

    $notify_login = false;

    if(isset($_GET["ac"]) && $_GET["ac"] == "login"){
        $notify_login = true;
        if(isset($_SESSION["braggart_id_user"])){
            $notify_login = false;            
        }
    }

    $verify_token = false;

    if(isset($_GET["rp"]) && $_GET["rp"] == "invalidtoken"){
        $verify_token = true;
    }
?>

<!--BODY-->

<!--<div id="pagepiling">-->
            
        <div id="home" class="parallax " data-background-speed-y="0" data-parallax-align="bottom">
            <div class="background_black"></div>
            <div id="logo_div" style="bottom:0;width:100%;overflow:hidden;">
               
            </div>
            <div id="full-width-slider" class="royalSlider heroSlider rsMinW" style="width:100%;">
            <?php 
                foreach($listaTemporal as $elementoTemporal){
                    echo '<div class="rsContent">
                            <img class="rsImg" src="slide/'.$elementoTemporal["ruta"].'" alt=""/>
                          </div>';
                            }
            ?>  
            </div>
        </div>
        
        <div id="us" class="parallax " data-background-speed-y="0" data-parallax-align="top">
            <div class="background_black"></div>
            <a  style="display:block;" href="store.php">
                <div id="us_animation"></div>
                <svg  id="tienda_hex" class="tienda_hex" xmlns="http://www.w3.org/2000/svg" width="800px" height="600px" viewBox="0 0 800 600">
                    <polygon opacity="0.2" fill="#FFFFFF" points="376.5,265.656 337,252.719 337,237.194 376.389,224.594 416,237.306 416,252.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="304.5,265.656 265,252.719 265,237.193 304.389,224.594 344,237.307 344,252.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="338,243.156 299,230.219 299,214.694 337.889,202.094 377,214.806 377,230.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="266,243.156 227,230.219 227,214.694 265.889,202.094 305,214.806 305,230.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="379,308.406 340,295.469 340,279.943 378.889,267.344 418,280.057 418,295.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="412.5,285.906 373,272.969 373,257.444 412.389,244.844 452,257.556 452,272.969 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="340.5,285.906 301,272.969 301,257.444 340.389,244.844 380,257.556 380,272.969 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="237,265.656 197,252.719 197,237.194 236.889,224.594 277,237.306 277,252.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="275,288.156 236,275.219 236,259.694 274.889,247.094 314,259.806 314,275.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="277.5,330.906 238,317.969 238,302.443 277.389,289.844 317,302.557 317,317.969 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="311,308.406 272,295.469 272,279.944 310.889,267.344 350,280.056 350,295.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="239,308.406 200,295.469 200,279.944 238.889,267.344 278,280.056 278,295.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="237,351.156 197,338.219 197,322.693 236.889,310.094 277,322.807 277,338.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="309,351.156 269,338.219 269,322.693 308.889,310.094 349,322.807 349,338.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="345,371.406 305,358.469 305,342.943 344.889,330.344 385,343.057 385,358.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="273,371.406 233,358.469 233,342.943 272.889,330.344 313,343.057 313,358.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="478,243.156 439,230.219 439,214.693 477.889,202.094 517,214.807 517,230.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="514,263.406 475,250.469 475,234.944 513.889,222.344 553,235.056 553,250.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="410,243.156 371,230.219 371,214.694 409.889,202.094 449,214.806 449,230.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="448.5,265.656 409,252.719 409,237.194 448.389,224.594 488,237.306 488,252.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="451,308.406 412,295.469 412,279.943 450.889,267.344 490,280.057 490,295.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="484.5,285.906 445,272.969 445,257.444 484.389,244.844 524,257.556 524,272.969 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="376.5,351.156 337,338.219 337,322.693 376.389,310.094 416,322.807 416,338.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="410,328.656 371,315.719 371,300.193 409.889,287.594 449,300.307 449,315.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="338,328.656 299,315.719 299,300.193 337.889,287.594 377,300.307 377,315.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="482,328.656 443,315.719 443,300.193 481.889,287.594 521,300.307 521,315.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="484.5,371.406 445,358.469 445,342.943 484.389,330.344 524,343.057 524,358.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="518,348.906 479,335.969 479,320.443 517.889,307.844 557,320.557 557,335.969 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="446,348.906 407,335.969 407,320.443 445.889,307.844 485,320.557 485,335.969 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="415,371.406 376,358.469 376,342.943 414.889,330.344 454,343.057 454,358.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="518,306.156 479,293.219 479,277.693 517.889,265.094 557,277.807 557,293.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="557.5,369.406 518,356.469 518,340.943 557.389,328.344 597,341.057 597,356.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="557.5,327.406 518,314.469 518,298.943 557.389,286.344 597,299.057 597,314.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="556.5,284.406 517,271.469 517,255.943 556.389,243.344 596,256.057 596,271.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="556.5,245.406 517,232.469 517,216.943 556.389,204.344 596,217.057 596,232.469 "/>
                </svg>
            </a>   
        </div>

        <div id="shirts" class="parallax" data-background-speed-y="0" data-parallax-align="top">
            <div class="background_black"></div>
            <a style="display:block" href="shirts.php">
                <div id="shirts_animation"></div>
                <svg id="hexagons" class="hexagons" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="800px" height="600px" viewBox="0 0 800 600">
                    <polygon opacity="0.2" fill="#ffffff" points="376.5,265.656 337,252.719 337,237.194 376.389,224.594 416,237.306 416,252.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="304.5,265.656 265,252.719 265,237.193 304.389,224.594 344,237.307 344,252.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="338,243.156 299,230.219 299,214.694 337.889,202.094 377,214.806 377,230.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="266,243.156 227,230.219 227,214.694 265.889,202.094 305,214.806 305,230.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="379,308.406 340,295.469 340,279.943 378.889,267.344 418,280.057 418,295.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="412.5,285.906 373,272.969 373,257.444 412.389,244.844 452,257.556 452,272.969 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="340.5,285.906 301,272.969 301,257.444 340.389,244.844 380,257.556 380,272.969 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="237,265.656 197,252.719 197,237.194 236.889,224.594 277,237.306 277,252.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="275,288.156 236,275.219 236,259.694 274.889,247.094 314,259.806 314,275.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="277.5,330.906 238,317.969 238,302.443 277.389,289.844 317,302.557 317,317.969 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="311,308.406 272,295.469 272,279.944 310.889,267.344 350,280.056 350,295.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="239,308.406 200,295.469 200,279.944 238.889,267.344 278,280.056 278,295.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="237,351.156 197,338.219 197,322.693 236.889,310.094 277,322.807 277,338.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="309,351.156 269,338.219 269,322.693 308.889,310.094 349,322.807 349,338.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="345,371.406 305,358.469 305,342.943 344.889,330.344 385,343.057 385,358.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="273,371.406 233,358.469 233,342.943 272.889,330.344 313,343.057 313,358.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="478,243.156 439,230.219 439,214.693 477.889,202.094 517,214.807 517,230.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="514,263.406 475,250.469 475,234.944 513.889,222.344 553,235.056 553,250.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="410,243.156 371,230.219 371,214.694 409.889,202.094 449,214.806 449,230.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="448.5,265.656 409,252.719 409,237.194 448.389,224.594 488,237.306 488,252.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="451,308.406 412,295.469 412,279.943 450.889,267.344 490,280.057 490,295.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="484.5,285.906 445,272.969 445,257.444 484.389,244.844 524,257.556 524,272.969 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="376.5,351.156 337,338.219 337,322.693 376.389,310.094 416,322.807 416,338.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="410,328.656 371,315.719 371,300.193 409.889,287.594 449,300.307 449,315.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="338,328.656 299,315.719 299,300.193 337.889,287.594 377,300.307 377,315.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="482,328.656 443,315.719 443,300.193 481.889,287.594 521,300.307 521,315.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="484.5,371.406 445,358.469 445,342.943 484.389,330.344 524,343.057 524,358.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="518,348.906 479,335.969 479,320.443 517.889,307.844 557,320.557 557,335.969 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="446,348.906 407,335.969 407,320.443 445.889,307.844 485,320.557 485,335.969 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="415,371.406 376,358.469 376,342.943 414.889,330.344 454,343.057 454,358.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="518,306.156 479,293.219 479,277.693 517.889,265.094 557,277.807 557,293.219 "/>
                </svg>
            </a>
        </div>

        <div id="contact" class="parallax" data-background-speed-y="0" data-parallax-align="top">
            <div class="background_black"></div>
            <div class="col-xs-12 centered_div">
                <div class="col-lg-6 col-md-6 col-sm-6"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <table class="contact" >
                        <tr>
                            <td colspan="2">
                                <svg id="ctUp" class="decoration_svg deco_top" version="1.1"  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="118px" height="30px" viewBox="0 0 118 30">
                                <path fill="none" stroke="#ffffff" stroke-width="1" stroke-miterlimit="10" d="M22.795,22.535h74.333"/>
                                <path fill="none" stroke="#ffffff" stroke-width="1" stroke-miterlimit="10" d="M3.312,25.535h113.301"/>

                                    <path fill="none" stroke="#ffffff" stroke-width="1" stroke-miterlimit="10" d="M52.192,8.518l10.216,9.811"/>
                                    <path fill="none" stroke="#ffffff" stroke-width="1" stroke-miterlimit="10" d="M62.424,8.534l-10.249,9.778"/>

                                    <path fill="none" stroke="#ffffff" stroke-width="1" stroke-miterlimit="10" d="M59.83,8.518l10.217,9.811"/>
                                    <path fill="none" stroke="#ffffff" stroke-width="1" stroke-miterlimit="10" d="M70.063,8.534l-10.248,9.778"/>

                                </svg>
                            </td>
                        </tr> 
                        <tr>
                            <td class="icon"><p class="scrollflow -slide-left" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"><i class="fa fa-phone fa-lg"></i></p></td>
                            <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30">(999) 9 48 30 46</p> </td>
                        </tr>
                        <tr>
                            <td class="icon"><p class="scrollflow -slide-left" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"><i class="fa fa-envelope fa-lg"></i></p></td>
                            <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30">contacto@braggart.com</p> </td>
                        </tr>
                        <tr>
                            <td class="icon"><p class="scrollflow -slide-left" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"><i class="fa fa-facebook-official fa-lg"></i></p></td>
                            <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30">Tienda <span class="braggart_txt">BRAGGART</span></p></td>
                        </tr>
                        <tr>
                            <td class="icon"><p class="scrollflow -slide-left" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"><i class="fa fa-insta-official fa-lg"></i></p></td>
                            <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"> @BraggartMX </p></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                               <svg id="ctDown" class="decoration_svg deco_bottom" version="1.1"  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="118px" height="30px" viewBox="0 0 118 30">
                                    <path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M97.128,11.518H22.795"/>
                                    <path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M116.613,8.518H3.312"/>
                                    <path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M62.408,15.724l-10.216,9.812"/>
                                    <path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M52.175,15.74l10.249,9.778"/>
                                    <path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M70.047,15.724L59.83,25.535"/>
                                    <path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M59.814,15.74l10.248,9.778"/>
                                </svg>
                            </td>
                        </tr>   
                    </table>
                </div>
            </div>
        </div>
    <!--</div>-->
</div><!--Container-->
<!--</div>-->

<!--Login Slidebar-->
<?php include_once("login_register.html");?>
<!--Cart Slidebar-->
<?php include_once("cart.html");?>
<!--Product Slidebar-->
<?php include_once("wishlist.html");?>
<!-- SVGs -->
<?php include_once("svg/svg_index.html"); ?>
<!--BODY-->

<?php include_once("footer.html");?>
<script type="text/javascript">
    var notify_login = <?php echo json_encode($notify_login); ?>;
    if(notify_login){
        showMessage("Debes iniciar sesión", "Iniciar Sesión");
    }

    var verify_token = <?php echo json_encode($verify_token); ?>;
    if(verify_token){
        showMessage("Token invalido o expirado, realiza el proceso de renovación de contraseña de nuevo", "Reiniciar Contraseña");
    }
</script>
<script>
    /*Fix para el parallax en Chrome*/
    var isChrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
    if (isChrome)
    {

        var itemArr = $('.parallax');

        $(window).scroll(function()
        {
            var pos = $(window).scrollTop();
            var wh = window.innerHeight;

            $(itemArr).each(function(i, item){

                var p = $(item).position();
                var h = $(item).height();
                if (p.top + h > pos && p.top < pos+wh)
                {
                    // items ir redzams
                    var prc = (p.top - pos +h)/wh ;
                    //console.log(prc);
                    $(item).css({'background-position':'center '+prc+'%'});
                }

            });
        });

    }
    /*Diamantito*/ 
 

 

    /*Parallax scrolling*/
    var deleteLog = false;
    var homePath, usPath, usShadowPath, shirtsPath, shirtsShadowPath, hexagons, tienda_hex, ctUpPath,ctDownPath, pathsDmnd;

    if (BrowserDetect.browser == "Explorer") {
        $("#us_animation").attr('class','centered_abs_div');
        $("#us_animation").append(document.getElementById("us_svg_ie").innerHTML);
        $("#shirts_animation").attr('class','centered_abs_div');
        $("#shirts_animation").append(document.getElementById("shirts_svg_ie").innerHTML);
        $("#logo_div").append(document.getElementById("main_logo_svg_ie").innerHTML);

    }else{
        $("#us_animation").append(document.getElementById("us_svg_div").innerHTML);
        $("#shirts_animation").append(document.getElementById("shirts_svg_div").innerHTML);
        $("#logo_div").append(document.getElementById("main_logo_svg_div").innerHTML)

    }

    jQuery(document).ready(function($) {
      $('#full-width-slider').royalSlider({
        loop:true,
        keyboardNavEnabled: true,
        imageScaleMode: "fill",
        controlNavigation: "none",
        navigateByClick: true,
        usePreloader: true,
        sliderDrag: false
      });


      $(fullscreenParallax);
          


      setInterval(function(){
        var slider = $(".royalSlider").data('royalSlider');
        slider.next();  // next slide
    }, 4500);



      var width = $(window).width();
      var height = $(window).height();

      $('#full-width-slider').css({width: width+"px", height:height+"px"});
    
        
        /*HANDWRITING STUFF*/
        
        // Store a reference to our paths, excluding our clip path
        homePath = $('#logo_svg path:not(defs path)');
        usPath = $('#us_svg path:not(defs path)');
        usShadowPath = $('#usShadow_svg path:not(defs path)');
        shirtsPath = $('#shirts_svg path:not(defs path)');
        shirtsShadowPath = $('#shirtsShadow_svg path:not(defs path)');
        ctUpPath = $('#ctUp path:not(defs path)');
        ctDownPath = $('#ctDown path:not(defs path)');
        hexagons= $(".hexagons polygon");
        tienda_hex =$(".tienda_hex polygon");
        pathsDmnd = $('#diamond_little path');




        // For each path, set the stroke-dasharray and stroke-dashoffset
        // equal to the path's total length, hence rendering it invisible
        homePath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        });    
        usPath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        }); 

        usShadowPath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        });

        shirtsPath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        });

        shirtsShadowPath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        });

        ctUpPath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        });

        ctDownPath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        });

        pathsDmnd.each(function(i, e) {
            e.style.strokeDasharray = e.style.strokeDashoffset = e.getTotalLength();
        });





 
    }); //End jquery

    
    $(window).load(function() {      //Do the code in the {}s when the window has loaded 
      $("#containerSvg").fadeOut("fast");  //Fade out the #loader div
    });

/*Password placeholder , so the placeholder actually shows, and not just dots*/
    $(function() {
    // Invoke the plugin
        $('input, textarea').placeholder({customClass:'my-placeholder'});
    // That’s it, really.
    });
    
  
 $(function() {
     var tlTienda  = new TimelineMax();
     var tlCamisasHex  = new TimelineMax();
     var tlCamisas = new TimelineMax();
     var tlHome = new TimelineMax();
     var tlContact = new TimelineMax();
     var tlTiendaHex = new TimelineMax();
    var tlLoadDmnd  = new TimelineMax();
       

     var homeCounter = 0;
     var usCounter= 0;

        $('#home').waypoint(function() {
            homeCounter++;
             console.log("home " + homeCounter);
             if (homeCounter == 1) {
                if (BrowserDetect.browser == "Explorer") {
                    $('#braggart_txt').animate({
                        'stroke-dashoffset':'0',
                        'fill-opacity': '1'
                        },8000);
                    $('#made_for_me_txt').animate({
                        'stroke-dashoffset':'0',
                        'fill-opacity': '1'
                        },8000);
                    tlHome.add([
                        TweenMax.to(homePath.eq(0), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(1), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(2), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(3), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(4), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(5), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(6), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(7), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(8), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(9), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(10), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(11), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(12), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(13), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(14), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(15), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(16), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(17), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(18), 5, {strokeDashoffset: 0, delay: 0.0}),     
                        TweenMax.to(homePath.eq(19), 5, {strokeDashoffset: 0, delay: 0.0}),     
                        TweenMax.to(homePath.eq(20), 5, {strokeDashoffset: 0, delay: 0.0}),     
                ]);
     

                }else{
                    tlHome.add([
                        TweenMax.to(homePath.eq(0), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(1), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(2), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(3), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(4), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(5), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(6), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(7), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(8), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(9), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(10), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(11), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(12), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(13), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(14), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(15), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(16), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(17), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(18), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(19), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(20), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(21), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(22), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(23), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(24), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(25), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(26), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(27), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(28), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(29), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(30), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(31), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(32), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(33), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(34), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(35), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(36), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(37), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(38), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(39), 5, {strokeDashoffset: 0, delay: 0.0}),

                        TweenMax.to(homePath.eq(40), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(41), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(42), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(43), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(44), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(45), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(46), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(47), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(48), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(49), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(50), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(51), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(52), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(53), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(54), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(55), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(56), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(57), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(58), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(59), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(60), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(61), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(62), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(63), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(64), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(65), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(66), 5, {strokeDashoffset: 0, delay: 0.0}),
                        TweenMax.to(homePath.eq(67), 5, {strokeDashoffset: 0, delay: 0.0}),         

                ]);

                }

                
        /*    tlLoadDmnd.add([
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
            ]);*/

                }
             });

       $('#us').waypoint(function() {
        usCounter++;
         console.log("us" + usCounter);
        if (usCounter == 1) {
            document.getElementById("tienda_hex").style.visibility = "visible";
            tlTiendaHex.add("stagger", "+=0.5");
            tlTiendaHex.staggerFrom(tienda_hex, 0.2, {scale:0, autoAlpha:0}, 0.16, "stagger");
            tlTiendaHex.play("stagger");
            if (BrowserDetect.browser == "Explorer") {
                    $('#us_text').animate({
                        'stroke-dashoffset':'0',
                        'fill-opacity': '1'
                        },8000);
                    $('#shadows').animate({
                        'fill-opacity': '1'
                        },8000);
            }else{
                tlTienda.add([
                    //La tienda front letters
                    TweenMax.to(usPath.eq(0), 0.3, {strokeDashoffset: 0, delay: 0.0}), //L
                    TweenMax.to(usPath.eq(1), 0.3, {strokeDashoffset: 0, delay: 0.3}), //A
                    TweenMax.to(usPath.eq(2), 0.3, {strokeDashoffset: 0, delay: 0.6}), //-
                    TweenMax.to(usPath.eq(3), 0.3, {strokeDashoffset: 0, delay: 0.9}),
                    TweenMax.to(usPath.eq(4), 0.3, {strokeDashoffset: 0, delay: 1.2}),
                    TweenMax.to(usPath.eq(5), 0.3, {strokeDashoffset: 0, delay: 1.5}),
                    TweenMax.to(usPath.eq(6), 0.3, {strokeDashoffset: 0, delay: 1.8}),
                    TweenMax.to(usPath.eq(7), 0.3, {strokeDashoffset: 0, delay: 2.1}),
                    TweenMax.to(usPath.eq(8), 0.3, {strokeDashoffset: 0, delay: 2.4}),
                    TweenMax.to(usPath.eq(9), 0.3, {strokeDashoffset: 0, delay: 2.7}),
                    TweenMax.to(usPath.eq(10), 0.3, {strokeDashoffset: 0, delay: 3.0}),
                    TweenMax.to(usPath.eq(11), 0.3, {strokeDashoffset: 0, delay: 3.3}),
                    TweenMax.to(usPath.eq(12), 0.3, {strokeDashoffset: 0, delay: 3.6}),
                    TweenMax.to(usPath.eq(13), 0.3, {strokeDashoffset: 0, delay: 3.9}),
                    TweenMax.to(usPath.eq(14), 0.3, {strokeDashoffset: 0, delay: 4.1}),
                    TweenMax.to(usPath.eq(15), 0.3, {strokeDashoffset: 0, delay: 4.4}),
                    TweenMax.to(usPath.eq(16), 0.3, {strokeDashoffset: 0, delay: 4.7}),
                    TweenMax.to(usPath.eq(17), 0.3, {strokeDashoffset: 0, delay: 5.0}),
                    TweenMax.to(usPath.eq(18), 0.3, {strokeDashoffset: 0, delay: 5.3}),
                    TweenMax.to(usPath.eq(19), 0.3, {strokeDashoffset: 0, delay: 5.6}),
                    TweenMax.to(usPath.eq(20), 0.3, {strokeDashoffset: 0, delay: 5.9}),

                    //La tienda shadow
                    TweenMax.to(usShadowPath.eq(0), 0.3, {strokeDashoffset: 0, delay: 0.0}),
                    TweenMax.to(usShadowPath.eq(1), 0.3, {strokeDashoffset: 0, delay: 0.3}), //A
                    TweenMax.to(usShadowPath.eq(2), 0.3, {strokeDashoffset: 0, delay: 0.6}), //-
                    TweenMax.to(usShadowPath.eq(3), 0.3, {strokeDashoffset: 0, delay: 0.9}),
                    TweenMax.to(usShadowPath.eq(4), 0.3, {strokeDashoffset: 0, delay: 1.2}),
                    TweenMax.to(usShadowPath.eq(5), 0.3, {strokeDashoffset: 0, delay: 1.5}),
                    TweenMax.to(usShadowPath.eq(6), 0.3, {strokeDashoffset: 0, delay: 1.8}),
                    TweenMax.to(usShadowPath.eq(7), 0.3, {strokeDashoffset: 0, delay: 2.1}),
                    TweenMax.to(usShadowPath.eq(8), 0.3, {strokeDashoffset: 0, delay: 2.4}),
                    TweenMax.to(usShadowPath.eq(9), 0.3, {strokeDashoffset: 0, delay: 2.7}),
                    TweenMax.to(usShadowPath.eq(10), 0.3, {strokeDashoffset: 0, delay: 3.0}),
                    TweenMax.to(usShadowPath.eq(11), 0.3, {strokeDashoffset: 0, delay: 3.3}),
                    TweenMax.to(usShadowPath.eq(12), 0.3, {strokeDashoffset: 0, delay: 3.6}),
                    TweenMax.to(usShadowPath.eq(13), 0.3, {strokeDashoffset: 0, delay: 3.9}),
                    TweenMax.to(usShadowPath.eq(14), 0.3, {strokeDashoffset: 0, delay: 4.1}),
                    TweenMax.to(usShadowPath.eq(15), 0.3, {strokeDashoffset: 0, delay: 4.4}),
                    TweenMax.to(usShadowPath.eq(16), 0.3, {strokeDashoffset: 0, delay: 4.7}),
                    TweenMax.to(usShadowPath.eq(17), 0.3, {strokeDashoffset: 0, delay: 5.0}),
                    TweenMax.to(usShadowPath.eq(18), 0.3, {strokeDashoffset: 0, delay: 5.3}),
                    TweenMax.to(usShadowPath.eq(19), 0.3, {strokeDashoffset: 0, delay: 5.6}),
                    TweenMax.to(usShadowPath.eq(20), 0.3, {strokeDashoffset: 0, delay: 5.9}),          


                ]);

                    tlTienda.restart();
            }

        }else{
            if (BrowserDetect.browser == "Explorer") {
                resetAnimTxt( $('#us_text'));
                resetShadow($('#shadows'));
                tlTiendaHex.restart();
            }else{
                tlTienda.restart();
                tlTiendaHex.restart();
            }        
        }
         }, {
           offset: '60%'
         });

      
       $('#us').waypoint(function() {
        homeCounter++;
         console.log("ushome" + homeCounter);
         if (homeCounter == 1) {
            }else{
                if (homeCounter%2!=0) {
                    tlHome.restart();
                    tlLoadDmnd.restart();
                }
            }
         }, {
           offset: '99%'
         });


        var shirtsCounter= 0;
       $('#shirts').waypoint(function() {
        shirtsCounter++;
         console.log("shirts" + shirtsCounter);
         if (shirtsCounter == 1) {
            document.getElementById("hexagons").style.visibility = "visible";
            tlCamisasHex.add("stagger", "+=0.5");
            tlCamisasHex.staggerFrom(hexagons, 0.2, {scale:0, autoAlpha:0}, 0.15, "stagger");
            tlCamisasHex.play("stagger");
            if (BrowserDetect.browser == "Explorer") {
                    $('#shirts_text').animate({
                        'stroke-dashoffset':'0',
                        'fill-opacity': '1'
                        },8000);
                    $('#shirts_shadow').animate({
                        'fill-opacity': '1'
                        },8000);
            }else{
                tlCamisas.add([
                            //C
                        TweenMax.to(shirtsPath.eq(0), 0.3, {strokeDashoffset: 0, delay: 0.0}),
                            //A
                        TweenMax.to(shirtsPath.eq(1), 0.3, {strokeDashoffset: 0, delay: 0.2}),
                        TweenMax.to(shirtsPath.eq(2), 0.3, {strokeDashoffset: 0, delay: 0.4}),
                        TweenMax.to(shirtsPath.eq(3), 0.3, {strokeDashoffset: 0, delay: 0.5}),
                        TweenMax.to(shirtsPath.eq(4), 0.3, {strokeDashoffset: 0, delay: 0.8}),
                            //M
                        TweenMax.to(shirtsPath.eq(5), 0.3, {strokeDashoffset: 0, delay: 1.2}),
                        TweenMax.to(shirtsPath.eq(6), 0.3, {strokeDashoffset: 0, delay: 1.5}),
                        TweenMax.to(shirtsPath.eq(7), 0.3, {strokeDashoffset: 0, delay: 1.8}),
                        TweenMax.to(shirtsPath.eq(8), 0.3, {strokeDashoffset: 0, delay: 2.1}),
                        //I
                        TweenMax.to(shirtsPath.eq(9), 0.3, {strokeDashoffset: 0, delay: 2.4}),
                        //S
                        TweenMax.to(shirtsPath.eq(10), 0.3, {strokeDashoffset: 0, delay: 2.7}),
                        TweenMax.to(shirtsPath.eq(11), 0.3, {strokeDashoffset: 0, delay: 2.9}),
                        TweenMax.to(shirtsPath.eq(12), 0.3, {strokeDashoffset: 0, delay: 3.2}),
                        //A
                        TweenMax.to(shirtsPath.eq(13), 0.3, {strokeDashoffset: 0, delay: 3.5}),
                        TweenMax.to(shirtsPath.eq(14), 0.3, {strokeDashoffset: 0, delay: 3.7}),
                        TweenMax.to(shirtsPath.eq(15), 0.3, {strokeDashoffset: 0, delay: 4.0}),
                        TweenMax.to(shirtsPath.eq(16), 0.3, {strokeDashoffset: 0, delay: 4.3}),
                        //S
                        TweenMax.to(shirtsPath.eq(17), 0.3, {strokeDashoffset: 0, delay: 4.6}),
                        TweenMax.to(shirtsPath.eq(18), 0.3, {strokeDashoffset: 0, delay: 4.9}),
                        TweenMax.to(shirtsPath.eq(19), 0.3, {strokeDashoffset: 0, delay: 5.1}),


                        //camisas shadow
                            //C
                        TweenMax.to(shirtsShadowPath.eq(0), 0.3, {strokeDashoffset: 0, delay: 0.0}),
                            //A
                        TweenMax.to(shirtsShadowPath.eq(1), 0.3, {strokeDashoffset: 0, delay: 0.2}),
                        TweenMax.to(shirtsShadowPath.eq(2), 0.3, {strokeDashoffset: 0, delay: 0.4}),
                        TweenMax.to(shirtsShadowPath.eq(3), 0.3, {strokeDashoffset: 0, delay: 0.5}),
                        TweenMax.to(shirtsShadowPath.eq(4), 0.3, {strokeDashoffset: 0, delay: 0.8}),
                            //M
                        TweenMax.to(shirtsShadowPath.eq(5), 0.3, {strokeDashoffset: 0, delay: 1.2}),
                        TweenMax.to(shirtsShadowPath.eq(6), 0.3, {strokeDashoffset: 0, delay: 1.5}),
                        TweenMax.to(shirtsShadowPath.eq(7), 0.3, {strokeDashoffset: 0, delay: 1.8}),
                        TweenMax.to(shirtsShadowPath.eq(8), 0.3, {strokeDashoffset: 0, delay: 2.1}),
                        //I
                        TweenMax.to(shirtsShadowPath.eq(9), 0.3, {strokeDashoffset: 0, delay: 2.4}),
                        //S
                        TweenMax.to(shirtsShadowPath.eq(10), 0.3, {strokeDashoffset: 0, delay: 2.7}),
                        TweenMax.to(shirtsShadowPath.eq(11), 0.3, {strokeDashoffset: 0, delay: 2.9}),
                        TweenMax.to(shirtsShadowPath.eq(12), 0.3, {strokeDashoffset: 0, delay: 3.2}),
                        //A
                        TweenMax.to(shirtsShadowPath.eq(13), 0.3, {strokeDashoffset: 0, delay: 3.5}),
                        TweenMax.to(shirtsShadowPath.eq(14), 0.3, {strokeDashoffset: 0, delay: 3.7}),
                        TweenMax.to(shirtsShadowPath.eq(15), 0.3, {strokeDashoffset: 0, delay: 4.0}),
                        TweenMax.to(shirtsShadowPath.eq(16), 0.3, {strokeDashoffset: 0, delay: 4.3}),
                        //S
                        TweenMax.to(shirtsShadowPath.eq(17), 0.3, {strokeDashoffset: 0, delay: 4.6}),
                        TweenMax.to(shirtsShadowPath.eq(18), 0.3, {strokeDashoffset: 0, delay: 4.9}),
                        TweenMax.to(shirtsShadowPath.eq(19), 0.3, {strokeDashoffset: 0, delay: 5.1}),     

                ]);
                tlCamisas.restart();
            }
        }else{ 
            if (BrowserDetect.browser == "Explorer") {
                resetAnimTxt( $('#shirts_text'));
                resetShadow($('#shirts_shadow'));
                tlCamisasHex.restart();
            }else{
                tlCamisas.restart();
                tlCamisasHex.restart();
            }
        }
         }, {
           offset: '50%'
         });


       $('#shirts').waypoint(function() {
        usCounter++;
         console.log("shirt us" + usCounter);
         if (usCounter == 1) {
            }else{
                if (usCounter%2!=0) {
                    if (BrowserDetect.browser == "Explorer") {
                        resetAnimTxt( $('#us_text'));
                        resetShadow($('#shadows'));
                        tlTiendaHex.restart();
                    }else{
                        tlTienda.restart();
                        tlTiendaHex.restart();
                    }
                }
            }
         }, {
           offset: '80%'
         });

        var contactCounter = 0;
       $('#contact').waypoint(function() {
         console.log("contact");
         contactCounter++;
             if (contactCounter == 1) {
                tlContact.add([
                            TweenMax.to(ctUpPath.eq(0), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctUpPath.eq(1), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctUpPath.eq(2), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctUpPath.eq(3), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctUpPath.eq(4), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctUpPath.eq(5), 1, {strokeDashoffset: 0, delay: 0.0}),

                            TweenMax.to(ctDownPath.eq(0), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctDownPath.eq(1), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctDownPath.eq(2), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctDownPath.eq(3), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctDownPath.eq(4), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctDownPath.eq(5), 1, {strokeDashoffset: 0, delay: 0.0}),
                           
                ]);
                tlContact.restart();
             }else{
                tlContact.restart();
             }
         }, {
           offset: '50%'
         });

       $('#contact').waypoint(function() {
        shirtsCounter++;
         console.log("contact shirts" + shirtsCounter);
         if (shirtsCounter == 1) {
            }else{
                if (shirtsCounter%2!=0) {
                    if (BrowserDetect.browser == "Explorer") {
                        resetAnimTxt( $('#shirts_text'));
                        resetShadow($('#shirts_shadow'));
                        tlCamisasHex.restart();
                    }else{
                        tlCamisas.restart();
                        tlCamisasHex.restart();
                    }
                }
            }
         }, {
           offset: '80%'
         });

    });
   
</script>
