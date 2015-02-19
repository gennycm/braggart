<?php
function __autoload($ClassName){
    include('clases/'.$ClassName.".php");
}

	$seguridad = new seguridad();
	$seguridad->candado();
	
	$id = 1;
	$operacion='modificar_faq';
	$palabra='Editar Preguntas Frecuentes';
	$temporal = new faq($id);
	$temporal -> obtener_faq();


?>

<?php
include 'head.html';//contiene los estilos y los metas
?>
	<title>Formulario De Preguntas Frecuentes</title>
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
                        <p class="titulo"><?php echo $palabra;?></p>
                    </div>
                    <form id="form-validation" style="display: inline" name="form1" action="operaciones.php" method="post" onsubmit="return validar_campos()" enctype="multipart/form-data">
                    		<input type="hidden" name="id_faq" value="<?php echo $temporal->id_faq ;?>"/>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    		<button type="submit" <?php if($seguridad->valida_permiso_usuario($_SESSION['idusuario'],$clave)==0) echo 'disabled';?> name="operaciones" value="<?php echo $operacion; ?>" class="buttonguardar">Guardar y Publicar</button>
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
                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                         <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#esp" role="tab" data-toggle="tab">Español</a></li>
                            <li><a href="#eng" role="tab" data-toggle="tab">English</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="esp">
                                <span class="textHelper" style="margin-top:50px;">Ingrese el contenido de preguntas frecuentes en Español:</span>
                                <textarea name="contenido_esp" class="col-lg-12" id="summernote2"><?php echo $temporal->contenido_esp;?></textarea>
                                <br>
                            </div>
                            <div class="tab-pane" id="eng">
                                <span class="textHelper" style="margin-top:50px;">Ingrese el contenido de preguntas frecuentes en Inglés:</span>
                                <textarea name="contenido_eng" class="col-lg-12" id="summernote3"><?php echo $temporal->contenido_eng;?></textarea>
                                <br>  
                            </div>
                        </div>
                    	
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
 <!--Scripts Especificos para los formularios
    ----------------------------------------------
    Script que inicia el summernote-->
	
   
	
 <!--Script que sirve para validar-->
	<script>
    jQuery(document).ready(function() {
            jQuery('#summernote2').summernote({
                height: 400,
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
                height: 400,
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
                 var content = $('textarea[name="descripcion_esp"]').html($('#summernote2').code());
             });
            $('#form-validation').on('submit', function (e) {
                 var content = $('textarea[name="descripcion_eng"]').html($('#summernote3').code());
             });
        });
	function validar_campos(){
		var val = $("#files").val();
		
		if (form1.correo.value == ''){
			form1.correo.focus();
			$('#correo').removeClass("form-group").addClass("form-group has-error");
			$('.top-right').notify({
    			message: { text: 'El Campo del correo esta vacío, para poder continuar asigne un corre al boletín' },
    			type:'blackgloss',
  			}).show();
			return false;
			}
		else{
			$('#correo').removeClass("form-group has-error").addClass("form-group has-success");
		}	
		<?=$validator?>
	}
	</script>


<script>
$(function() {
    $('#correo').tooltip(
	{
		placement: "top",
        title: "Este campo es requerido"
	});
});
</script>
</html>
