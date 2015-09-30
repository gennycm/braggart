<?php include_once("header.html");?>
<!--BODY-->
<?php
    include_once("./cp/clases/latienda.php");
    $latienda = new latienda(1);
    $latienda ->  obtener_latienda();
?>   
    <div class="parallax" data-background-speed-y="0" data-parallax-align="bottom" id="history">
        <div class="background_black"></div>
        <div class="centered_abs">
            <div class="row">
                <div id="logo_anim">
                </div>
            </div>
            <div class="row historia scrollflow -slide-left">
                <?=$latienda -> historia;?>
            </div>
        </div>
    </div>

    <div class="parallax" data-background-speed-y="0" data-parallax-align="top" id="us">
        <div class="background_black"></div>
        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:10%;position:relative;z-index:999; ">
            <div class="col-lg-4 col-md-4 col-sm-4 store-section">
                <div class="col-lg-12">
                    <div class="icon-container fabric"></div>
                    <div class="icon-p">
                        <?=$latienda -> descripcion1;?>
                    <!--BRAGGART  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 store-section">
               <div class="col-lg-12">
                    <div class="icon-container delivery"></div>
                    <div class="icon-p">
                        <?=$latienda -> descripcion2;?>
                        <!--Se hacen envíos a la república mexicana por el servicio de paquetería XYZ.-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 store-section">
                <div class="col-lg-12">
                    <div class="icon-container payment"></div>
                    <div class="icon-p">
                        <?=$latienda -> descripcion3;?>
                    <!--Los pagos se realizan a través de la plataforma Conekta. Puede ser por tarjeta de crédito, pago en ventanilla o pago en el OXXO.-->
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- /.container-fluid -->


<!--Login Slidebar-->
<?php include_once("login_register.html");?>
<!--Cart Slidebar-->
<?php include_once("cart.html");?>
<!--Product Slidebar-->
<?php include_once("wishlist.html");?>
<!--BODY-->
<?php include_once("footer.html");?>
<!-- SVGs -->
<?php include_once("svg/svg_store.html"); ?>
<script>

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
    

 

    /*Parallax scrolling*/
    var deleteLog = false;
    var paths, icons, descriptions, pathsDmnd;

    jQuery(document).ready(function($) {
      $(fullscreenParallax);

      //effects

      var controller = $.superscrollorama();
      // individual element tween examples
      controller.addTween('#title', TweenMax.fromTo( $('#title'), .50, {css:{opacity:0, 'letter-spacing':'30px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, 'letter-spacing':'-10px'}, ease:Quad.easeInOut}), 0, 10); // 100 px offset for better timing
      controller.addTween('#fly-it', TweenMax.from( $('#fly-it'), .25, {css:{right:'1000px'}, ease:Quad.easeInOut}));
     

       if (BrowserDetect.browser == "Explorer") {
            $("#logo_anim").append(document.getElementById("main_logo_ie").innerHTML);
       }else{
            $("#logo_anim").append(document.getElementById("main_logo_div").innerHTML);
       }

       /*HANDWRITING STUFF*/
        // Store a reference to our paths, excluding our clip path
        paths = $('#historia_svg path:not(defs path)');
        icons= $(".icon-container");
        descriptions = $(".icon-p");
        pathsDmnd = $('#diamond_little path');

        // For each path, set the stroke-dasharray and stroke-dashoffset
        // equal to the path's total length, hence rendering it invisible
        paths.each(function(i, e) {
            e.style.strokeDasharray = e.style.strokeDashoffset = e.getTotalLength();
        });

        pathsDmnd.each(function(i, e) {
            e.style.strokeDasharray = e.style.strokeDashoffset = e.getTotalLength();
        });



 
    }); //End jquery

/*Password placeholder , so the placeholder actually shows, and not just dots*/
    $(function() {
    // Invoke the plugin
    $('input, textarea').placeholder({customClass:'my-placeholder'});
    // That’s it, really.
    });

         $(function() {
     var tlServ  = new TimelineLite();
     var tlHist = new TimelineLite();
     var tlLoadDmnd  = new TimelineMax();


     var histCounter = 0;
     var usCounter= 0;

        $('#history').waypoint(function() {
        histCounter++;
         console.log("historia " + histCounter);
            if (histCounter == 1) {
                if (BrowserDetect.browser == "Explorer") {
                    $('#braggart_txt').animate({
                        'stroke-dashoffset':'0',
                        'fill-opacity': '1'
                        },4000);
                    $('#made_for_me_txt').animate({
                        'stroke-dashoffset':'0',
                        'fill-opacity': '1'
                        },4000);
                    tlHist.add([
                    //La tienda front letters
                        TweenLite.to(paths.eq(0), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(1), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(2), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(3), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(4), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(5), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(6), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(7), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(8), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(9), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(10), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(11), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(12), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(13), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(14), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(15), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(16), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(17), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(18), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(19), 5, {strokeDashoffset: 0, delay: 0.3}),
                        TweenLite.to(paths.eq(20), 5, {strokeDashoffset: 0, delay: 0.3}),    
                    ]);

                }else{
                    tlHist.add([
                    //La tienda front letters
                    TweenLite.to(paths.eq(0), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(1), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(2), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(3), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(4), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(5), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(6), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(7), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(8), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(9), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(10), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(11), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(12), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(13), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(14), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(15), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(16), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(17), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(18), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(19), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(20), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(21), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(22), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(23), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(24), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(25), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(26), 5, {strokeDashoffset: 0, delay: 0.3}),

                    TweenLite.to(paths.eq(27), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(28), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(29), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(30), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(31), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(32), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(33), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(34), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(35), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(36), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(37), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(38), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(39), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(40), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(41), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(42), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(43), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(44), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(45), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(46), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(47), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(48), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(49), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(50), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(51), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(52), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(53), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(54), 5, {strokeDashoffset: 0, delay: 0.3}),         
                    TweenLite.to(paths.eq(55), 5, {strokeDashoffset: 0, delay: 0.3}),         
                    TweenLite.to(paths.eq(56), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(57), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(58), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(59), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(60), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(61), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(62), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(63), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(64), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(65), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(66), 5, {strokeDashoffset: 0, delay: 0.3}),
                    TweenLite.to(paths.eq(67), 5, {strokeDashoffset: 0, delay: 0.3}), 

                    ]);

                   /* tlLoadDmnd.add([
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
            }
         });
      
       $('#us').waypoint(function() {
        histCounter++;
         console.log("ushome" + histCounter);
         if (histCounter == 1) {
            }else{
                if (histCounter%2!=0) {
                    if (BrowserDetect.browser == "Explorer") {
                        resetAnimTxt( $('#braggart_txt'));
                        resetAnimTxt( $('#made_for_me_txt'));
                        tlHist.restart();
                    }else{
                        tlHist.restart();
                      //  tlLoadDmnd.restart(); 
                    }
                    
                }
            }
         }, {
           offset: '99%'
         });

       $('.historia').waypoint(function() {
        usCounter++;
         console.log("us" + usCounter);
         if (usCounter == 1) {
            tlServ.add("stagger", "+=0.5");
            tlServ.staggerFrom(icons, 0.5, {scale:0, autoAlpha:0}, 0.1, "stagger");
            tlServ.play("stagger");
            tlServ.from(descriptions, 0.5, {left:100, autoAlpha:0}, "-=0.25");
            }else{
                tlServ.restart();
            }
         }, {
           offset: '60%'
         });

       
    });
                
</script>
