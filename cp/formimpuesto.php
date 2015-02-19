<?php
function __autoload($ClassName){
    include('clases/'.$ClassName.".php");
}

	$seguridad = new seguridad();
	$seguridad->candado();
	
if(isset($_REQUEST['id_impuesto'])){
	$id=$_REQUEST['id_impuesto'];
	$operacion='modificarimpuesto';
	$palabra='Editar Impuesto';
	$temporal = new impuesto($id);
	$temporal -> obtener_impuesto();
	
}
else{
	$id=0;
	$operacion='agregarimpuesto';
	$palabra='Nuevo Impuesto';
	$img='';
	$temporal = new impuesto($id);
}
$clave = 'ModImp';
?>

<?php
include 'head.html';//contiene los estilos y los metas
?>
	<title>Formulario De Impuesto</title>
<?php
include'header.html';//contiene las barras de arriba y los menus.
include'menu.php';//Contiene a todo el menu.
?> 
   		<style>
			.note-editor-error {
				border: 1px solid #F00;
				width: 100% !important;
				}
			.note-editor-success {
				border: 1px solid #6C0;
				width: 100% !important;
				}	
        </style>
        <!-- Page content Sección del contenido de la pagina-->
        <div id="page-content-wrapper">
            
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row rowedit">
                	<!--Seccion del titulo y el boton de agregar-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p class="titulo"><?=$palabra?></p>
                    </div>
                    <form id="form-validation" style="display: inline" name="form1" action="operaciones.php" method="post" onsubmit="return validar_campos()" enctype="multipart/form-data">
                    		<input type="hidden" name="id_impuesto" value="<?=$temporal->id_impuesto?>"/>        
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
                    <p style="color:red;">Los campos con * son obligatorios</p><br>
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    	<div id="titulo" class="input-group espacios">
                        	<span class="input-group-addon es">Nombre*</span>
                        	<input type="text"  name="nombre" class="form-control" placeholder="Ingrese el nombre aquí..." value="<?=$temporal->nombre?>">
                        </div>
                        <div id="link" class="input-group espacios">
                        	<span class="input-group-addon es">Porcentaje* <i class="fa fa-link"></i></span>
                    		<input type="text" name="porcentaje" class="form-control" placeholder="16, 15, 21... números enteros" value="<?=$temporal->porcentaje?>">
                    	</div>
                       
                    </div><!--Div de cierre col-lg-9-->
                    <div class="clearfix"></div>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="myModalLabel" aria-hidden="false">
  <div class="modal-dialog">
  	<div class="modal-content">
  	  <div class="modal-body">	
    	<div class="progress progress-striped active" style="margin-top: 50px">
			<div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
				<span class="sr-only">45% Complete</span>
			</div>
		</div>
	</div>
	<div class="modal-footer">
        	Esto puede tomar unos minutos, porfavor no cierres la ventana..
   	</div>
   </div>
  </div>
</div>
<?php
include 'javascripts.html';
?>
 <!--Scripts Especificos para los formularios
    ----------------------------------------------
    Script que inicia el summernote-->
	
    <!--Script que permite previsualizar la imagen primaria-->
    
 <!--Script que permite previsualizar la imagen Secundaria-->
	
 <!--Script que sirve para validar-->
	<script>
	function validar_campos(){
		if (form1.nombre.value == ''){
			form1.nombre.focus();
			$('#nombre').removeClass("form-group").addClass("form-group has-error");
			$('.top-right').notify({
    			message: { text: 'El Campo del nombre esta vacío, para poder continuar asigne un nombre al impuesto' },
    			type:'blackgloss',
  			}).show();
			return false;
			}
		else{
			$('#nombre').removeClass("form-group has-error").addClass("form-group has-success");
		}
		if (form1.porcentaje.value == ''){
			form1.porcentaje.focus();
			$('#porcentaje').removeClass("form-group").addClass("form-group has-error");
			$('.top-right').notify({
    			message: { text: 'El Campo del porcentaje esta vacío, para poder continuar asigne un porcentaje al impuesto' },
    			type:'blackgloss',
  			}).show();
			return false;
			}
		else{
			$('#porcentaje').removeClass("form-group has-error").addClass("form-group has-success");
		}
		
	}
	$(document).ready(function () {
	    $(".buttonguardar").click(function () {
	        if (validar_campos()!= false){
	        	$("#myModal").modal("show");
	        }
	    });
	});
	</script>


<script>
$(function() {
    $('#nombre').tooltip(
	{
		placement: "top",
        title: "Este campo es requerido"
	});
	$('#porcentaje').tooltip(
	{
		placement: "top",
        title: "Ingrese un porcentaje en número entero. Ejemplo: 16, 18, 21."
	});
});
</script>
</html>
