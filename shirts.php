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
        </div>
        
        <div class="section shirt" id="shirt2" style="background-image:url(./img_product/img_6.jpg);">
            <div class="background_black"></div>
            
        </div>
        
        <div class="section shirt" id="shirt3" style="background-image:url(./img_product/img_3.jpg);">
            <div class="background_black"></div>
            
        </div>
         
        <div class="section shirt" id="shirt4" style="background-image:url(./img_product/img_5.jpg);">
            <div class="background_black"></div>
           
        </div>
    </div>
</div><!-- /.container-fluid -->

<!--BODY-->
<?php include_once("footer.html");?>
<script>
    /*Parallax scrolling*/
        var deleteLog = false;
        $(document).ready(function() {
            $('#pagepiling').pagepiling({
                menu: false,
                anchors: ['elegante-ajustada', 'business-ajustada', 'office-ajustada', 'casual-ajustada'],
                navigation: {
                    'textColor': '#f2f2f2',
                    'bulletsColor': '#ccc',
                    'position': 'right',
                    'tooltips': ['ELEGANTE AJUSTADA', 'BUSINESS AJUSTADA', 'OFFICE AJUSTADA', 'CASUAL AJUSTADA']
                }

            });
        });

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

      var width = $(window).width();
      var height = $(window).height();

      $('#full-width-slider').css({width: width+"px", height:height+"px"})

    });

    /*$(document).ready(function() {
        $('#fullpage').fullpage({
        //Navigation
        menu: false,
        anchors:['firstSlide', 'secondSlide'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Slide', 'La Tienda', 'Camisas', 'Contacto'],
        slidesNavigation: false,
        slidesNavPosition: 'bottom',

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        scrollBar: false,
        easing: 'easeInQuart',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: false,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
        resize : true,
        sectionsColor : ['#ccc', '#fff'],
        fixedElements: '#header, .footer',
        responsive: 0,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){},
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction){}
    });
    });*/
    </script>
