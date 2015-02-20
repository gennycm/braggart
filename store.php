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
        <div class="col-lg-12" style="margin-top:-150px;">
            <div class="col-lg-4 store-section">
                <div class="col-lg-12">
                    <div class="icon-container fabric"></div>
                </div>
            </div>
            <div class="col-lg-4 store-section">
               <div class="col-lg-12">
                    <div class="icon-container delivery"></div>
                </div>
            </div>
            <div class="col-lg-4 store-section">
                <div class="col-lg-12">
                    <div class="icon-container payment"></div>
                </div>
            </div>
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
