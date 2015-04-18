<?php
function __autoload($ClassName){
    include('clases/'.$ClassName.".php");
}

	$seguridad = new seguridad();
	$seguridad->candado();
	
    $id = 1;
    $latienda = new latienda($id);
    $latienda -> obtener_latienda();
    $palabra = "Descripciones: La Tienda";
    $operacion = "modificarlatienda";

?>

<?php
include 'head.html';//contiene los estilos y los metas
?>
	<title>Formulario De La Tienda</title>
<?php
include'header.html';//contiene las barras de arriba y los menus.
include'menu.php';//Contiene a todo el menu.
?> 
        <!-- Page content Sección del contenido de la pagina-->
        <div id="page-content-wrapper">
            
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row rowedit">
                	<!--Seccion del titulo y el boton de agregar-->
                	 <div class='notifications bottom-right'></div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p class="titulo"><?=$palabra?></p>
                    </div>
                    <form id="form-validation" style="display: inline" name="form1" action="operaciones.php" method="post" onsubmit="return validar_campos()" enctype="multipart/form-data">
                    	<input type="hidden" name="id_producto" value="<?=$latienda->id_latienda?>"/>
                    
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        		<button type="submit" <?php if($seguridad->valida_permiso_usuario($_SESSION['idusuario'],$clave)==0) echo ' disabled ';?> name="operaciones" value="<?=$operacion?>" class="buttonguardar">Guardar y Publicar</button>
                        </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<hr class="hrmenu">
                    </div>
                    
                    <div class="clearfix"></div>
                    <!--Seccion de los forms
                    ---------------------------------------------------------------------------------
                    	En esta sección esta para editar el titulo y la descripcion
                    -------------------------------------------------------------------------------->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<div class='notifications top-right'></div>
                    </div>
                    <p class="col-lg-12" style="color:red;">Los campos con * son obligatorios. </p>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#esp" role="tab" data-toggle="tab">Información</a></li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="esp">
                                    <span class="textHelper">Ingrese la descripción #1 *:</span>
                                    <textarea name="descripcion1" id="summernote1"><?=$latienda->descripcion1;?></textarea>
                                    <br>
                                    <br>
                                    <span class="textHelper">Ingrese la descripción #2 *:</span>
                                    <textarea name="descripcion2" id="summernote2"><?=$latienda->descripcion2;?></textarea>
                                    <br>
                                    <br>
                                    <span class="textHelper">Ingrese la descripción #3 *:</span>
                                    <textarea name="descripcion3" id="summernote3"><?=$latienda->descripcion3;?></textarea>
                                    <br>
                                </div>
                            </div>
                        <br>
                    	
                        <!--Aquí es donde se previsualiza la imagen-->
                                           
                    </div><!--Div de cierre col-lg-9-->
                    <!--------------------------------------------
                    	En esta sección es del subtitulo y la imagen principal
                    ---------------------------------------------->
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">

                    	                 
                    </div><!--Div de cierre col-lg-5-->
                    
                    <div class="clearfix"></div>
                    <!--------------------------------------------
                    Aqui es la sección para subir las imágenes secundarias
                    ---------------------------------------------->
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                    	
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                    	
                    </div>
                    <!--Sección del lado izquierdo-->
                    
                    <div class="clearfix"></div>
                    <div id="division" style="margin: 0px 0 20px 0" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <hr class="hrmenu">
                    </div>
                   
                    
                    <!--Este div contiene la barra inferior-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<hr class="hrmenu">
                    </div>
                    <!--Este div contiene al boton inferior-->
                    <div class="clearfix"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    		<button type="submit" <?php if($seguridad->valida_permiso_usuario($_SESSION['idusuario'],$clave)==0) echo ' disabled ';?> name="operaciones" value="<?=$operacion?>" class="buttonguardar">Guardar y Publicar</button>
                    	</form>
                    </div>
                    
                    <!--Sección del pie de pagina-->
                    <footer id="footer">
                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        	Derechos Reservados a Locker Agencia Creativa S.A. de C.V.
                            <br>
                            soporte@locker.com.mx
                            <br>
                            www.locker.com.mx
                    	</div>
                    </footer>
                </div><!--Div de cierre del row-->
            </div><!--Div de cierre de page-content inset-->
        </div><!--Div de cierre de page-content-wrapper-->
    </div><!--Div de cierre de id Wrapper-->

<?php
include 'javascripts.html';
?>
 
	<script>
        jQuery(document).ready(function() {
            jQuery('#summernote1').summernote({
                height: 200,
                toolbar: [
                            //[groupname, [button list]]
                            ['style', ['bold', 'italic', 'underline', 'clear']],
                            ['Misc', ['fullscreen']],
                        ],
                onpaste: function(e) {
                    //alert('entre');
                    var thisNote = $(this);
                    //alert(thisNote);
                    var updatePastedText = function(someNote){
                        var original = someNote.code();
                        //alert(original);
                        var cleaned = CleanPastedHTML(original); //this is where to call whatever clean function you want. I have mine in a different file, called CleanPastedHTML.
                        someNote.code('').html(cleaned); //this sets the displayed content editor to the cleaned pasted code.
                    };
                    setTimeout(function () {
                        //this kinda sucks, but if you don't do a setTimeout, 
                        //the function is called before the text is really pasted.
                        updatePastedText(thisNote);
                    }, 10);
        
        
                }
            });

  			jQuery('#summernote2').summernote({
  				height: 200,
				toolbar: [
    						//[groupname, [button list]]
    						['style', ['bold', 'italic', 'underline', 'clear']],
							['Misc', ['fullscreen']],
 		 				],
				onpaste: function(e) {
					//alert('entre');
					var thisNote = $(this);
					//alert(thisNote);
					var updatePastedText = function(someNote){
						var original = someNote.code();
						//alert(original);
						var cleaned = CleanPastedHTML(original); //this is where to call whatever clean function you want. I have mine in a different file, called CleanPastedHTML.
						someNote.code('').html(cleaned); //this sets the displayed content editor to the cleaned pasted code.
					};
					setTimeout(function () {
						//this kinda sucks, but if you don't do a setTimeout, 
						//the function is called before the text is really pasted.
						updatePastedText(thisNote);
					}, 10);
		
		
				}
  			});
            jQuery('#summernote3').summernote({
                height: 200,
                toolbar: [
                            //[groupname, [button list]]
                            ['style', ['bold', 'italic', 'underline', 'clear']],
                            ['Misc', ['fullscreen']],
                        ],
                onpaste: function(e) {
                    //alert('entre');
                    var thisNote = $(this);
                    //alert(thisNote);
                    var updatePastedText = function(someNote){
                        var original = someNote.code();
                        //alert(original);
                        var cleaned = CleanPastedHTML(original); //this is where to call whatever clean function you want. I have mine in a different file, called CleanPastedHTML.
                        someNote.code('').html(cleaned); //this sets the displayed content editor to the cleaned pasted code.
                    };
                    setTimeout(function () {
                        //this kinda sucks, but if you don't do a setTimeout, 
                        //the function is called before the text is really pasted.
                        updatePastedText(thisNote);
                    }, 10);
                }
            });
  			$('#form-validation').on('submit', function (e) {
       			 var content = $('textarea[name="descripcion1"]').html($('#summernote1').code());
     		 });
            $('#form-validation').on('submit', function (e) {
                 var content = $('textarea[name="descripcion2"]').html($('#summernote2').code());
             });
            $('#form-validation').on('submit', function (e) {
                 var content = $('textarea[name="descripcion3"]').html($('#summernote3').code());
             });
		});
		
		/*DESCRIPCION DE USO:
		 #summernote: es el id que tenga tu textarea
		 #form-validation: es el id que como se llame tu form
		 textarea[name="descripcion"]: es el nombre del textarea
		 estos datos los cambias por como llamaste a los tuyos*/
		 function CleanPastedHTML(input) {
			  // 1. remove line breaks / Mso classes
			  var stringStripper = /(\n|\r| class=(")?Mso[a-zA-Z]+(")?)/g;
			  var output = input.replace(stringStripper, ' ');
			  // 2. strip Word generated HTML comments
			  var commentSripper = new RegExp('<!--(.*?)-->','g');
			  var output = output.replace(commentSripper, '');
			  var tagStripper = new RegExp('<(/)*(meta|link|span|\\?xml:|st1:|o:|font)(.*?)>','gi');
			  // 3. remove tags leave content if any
			  output = output.replace(tagStripper, '');
			  // 4. Remove everything in between and including tags '<style(.)style(.)>'
			  var badTags = ['style', 'script','applet','embed','noframes','noscript'];
			
			  for (var i=0; i< badTags.length; i++) {
				tagStripper = new RegExp('<'+badTags[i]+'.*?'+badTags[i]+'(.*?)>', 'gi');
				output = output.replace(tagStripper, '');
			  }
			  // 5. remove attributes ' style="..."'
			  var badAttributes = ['style', 'start'];
			  for (var i=0; i< badAttributes.length; i++) {
				var attributeStripper = new RegExp(' ' + badAttributes[i] + '="(.*?)"','gi');
				output = output.replace(attributeStripper, '');
			  }
			  return output;
		}
	</script>
    <!--Script que permite previsualizar la imagen primaria-->
    <!--Previsualizar imagenes 2-->
	
 <!--Script que sirve para validar-->
	<script>
	function validar_campos(){
		var val = $("#files").val();
        var pdf = $("#adjunto").val();
        var titulo_esp = $('input[name="titulo_esp"]').val();
        var descripcion1 = $('textarea[name="descripcion_esp"]').html($('#summernote2').code()).val();

        if(jQuery(descripcion_esp).text() == '' ){
            $('#summernote2').focus();
            $('#descripcion_esp').removeClass("form-group").addClass("form-group has-error");
            $('.top-right').notify({
                message: { text: 'El campo de descripción en Español esta vacío, para poder continuar llene la descripción.' },
                type:'blackgloss',
            }).show();
            return false;
            }
        else{
            $('#descripcion_esp').removeClass("form-group has-error").addClass("form-group has-success");
        }

	}
	</script>

<script>
$(function() {
    $('#titulo').tooltip(
	{
		placement: "top",
        title: "Este campo es requerido"
	});
	$('#subtitulo').tooltip(
	{
		placement: "top",
        title: "Ingrese el subtitulo de la noticia aquí."
	});
	
	$('#imgprin').tooltip(
	{
		placement: "top",
        title: "Campo Requerido. Agregue la imagen principal de esta noticia, solo se aceptan imágenes con formato .jpg, .png y .gif ."
	});
	$('#imgsecu').tooltip(
	{
		placement: "top",
        title: "Agregue las imagenes secundarias de esta noticia, solo se aceptan imágenes con formato .jpg, .png y .gif ."
	});
});
</script>
</html>
