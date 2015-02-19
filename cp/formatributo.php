<?php
function __autoload($ClassName){
    include('clases/'.$ClassName.".php");
}

	$seguridad = new seguridad();
	$seguridad->candado();
	
if(isset($_REQUEST['id_atributo'])){
	$id=$_REQUEST['id_atributo'];
	$operacion='modificaratributo';
	$palabra='Editar Atributo';
	$temporal = new atributo($id);
	$temporal -> obtener_atributo();
	$temporal_valor = new valor(0, $id);
    $valores = $temporal_valor -> listar_valores();
}
else{
	$id=0;
	$operacion='agregaratributo';
	$palabra='Nuevo Atributo';
	$temporal = new atributo($id);
}
$clave = 'ModAtr';
?>

<?php
include 'head.html';//contiene los estilos y los metas
?>
	<title>Formulario De Atributo</title>
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
                    		<input type="hidden" name="id_atributo" value="<?=$temporal->id_atributo;?>"/>        
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    		<button type="submit" <?php if($seguridad->valida_permiso_usuario($_SESSION['idusuario'],$clave)==0) echo ' disabled ';?> name="operaciones" value="<?=$operacion?>" class="buttonguardar">Guardar y Publicar</button>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p style="color:red;">Los campos con * son obligatorios</p><br>
                    	<hr class="hrmenu">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#info" role="tab" data-toggle="tab">Informaci&oacute;n</a></li>
                            <li><a href="#vals" role="tab" data-toggle="tab">Valores</a></li>
                        </ul>
                         <div class="tab-content">
                             <div class="tab-pane active" id="info">
                                 <div id="nombre_esp" class="input-group espacios">
                                    <span class="input-group-addon es">Nombre en Español*</span>
                                    <input type="text"  name="nombre_esp" class="form-control" placeholder="Ingrese el nombre aquí..." value="<?=$temporal->nombre_esp?>">
                                </div>
                                <div id="nombre_eng" class="input-group espacios">
                                    <span class="input-group-addon es">Nombre en Ingl&eacute;s*</span>
                                    <input type="text"  name="nombre_eng" class="form-control" placeholder="Ingrese el nombre aquí..." value="<?=$temporal->nombre_eng?>">
                                </div>
                             </div>
                              <div class="tab-pane" id="vals">
                                     <?php 
                                            if($id == 0){
                                                echo '<p style="color:red;">Guarda el atributo para que puedas agregar valores.</p><br>';
                                            }
                                            else{
                                                echo '<p>Puedes generar valores para tu atributo. Selecciona nueva nuevo valor y dale un nombre</p><br>';
                                            }

                                        ?>
                                        
                                  <table id="table_" class="table table-hover table-striped tablesorter">
                                    <thead class="styled-thead">
                                      <tr>
                                        <th>Nombre Español</th>
                                        <th>Nombre Ingl&eacute;s</th>
                                        <th class="text-center visible-lg visible-md">Activar</th>
                                        <th class="text-center visible-lg visible-md">Eliminar</th>
                                      </tr>
                                    </thead>
                                    <tbody class="styled-tbody" id="sortable">
                                    <?php 
                                        if($id != 0){
                                            foreach ($valores as $valor) {
                                                echo "<tr id='".$valor["id_valor"]."'>
                                                        <td>".$valor["nombre_esp"]."</td>
                                                        <td>".$valor["nombre_eng"]."</td>";
                                                if($valor["status"] == 1 ){
                                                    $img='img/visible.png';
                                                    $funcion='Desactivar('.$valor["id_valor"].')';
                                                    $class = 'nover';

                                                }
                                                else{
                                                    $img='img/invisible.png';
                                                    $funcion='Activar('.$valor["id_valor"].')';
                                                    $class = 'ver';
                                                }
                                                echo '<td class="text-center visible-lg visible-md"><img class="manita '.$class.'" onclick="'.$funcion.'" id="temp'.$valor["id_valor"].'" src="'.$img.'"></td>
                                                      <td class="text-center visible-lg visible-md" style="color:#000;cursor:pointer;"><i class="fa fa-trash fa-2x " onclick="eliminarValor('.$valor["id_valor"].')"></i></td>
                                                    <tr>';
                                            }
                                        }
                                    ?> 
                                    </tbody>
                                    <tfoot class="styled-tfoot">
                                       <tr>
                                        <th>Nombre Español</th>
                                        <th>Nombre Ingl&eacute;s</th>
                                        <th class="text-center visible-lg visible-md">Activar</th>
                                        <th class="text-center visible-lg visible-md">Eliminar</th>
                                      </tr>
                                    </tfoot>
                                </table>
                                <?php if($id != 0){?>
                                <button type="button" id="boton_collapse" class=" button_transporte" data-toggle="collapse" data-target="#demo" aria-expanded="false" aria-controls="demo">
                                  Nuevo Valor
                                </button>
                                <div id="demo" class="collapse">
                                    <div id="valor_nombre_esp" class="input-group espacios">
                                        <span class="input-group-addon es">Nombre en Espa&ntilde;ol*</span>
                                        <input type="text" name="valor_nombre_esp" class="form-control" placeholder="Ingrese el nombre aquí..." >
                                    </div>
                                    <div id="valor_nombre_eng" class="input-group espacios">
                                        <span class="input-group-addon es">Nombre en Ingl&eacute;s*</span>
                                        <input type="text" name="valor_nombre_eng" class="form-control" placeholder="Ingrese el nombre aquí...">
                                    </div>
                                    <button type="button" class=" button_transporte" onclick="agregarValor()">
                                        Guardar
                                    </button>
                                </div>
                                 <?php }?>
                              </div>
                         </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    <!--Seccion de los forms
                    ---------------------------------------------------------------------------------
                    	En esta sección esta para editar el titulo y la descripcion
                    -------------------------------------------------------------------------------->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<div class='notifications top-right'></div>
                    </div>
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
    var id_atributo = <?php echo $id;?>;
	function validar_campos(){
		if (form1.nombre_esp.value == ''){
			form1.nombre_esp.focus();
			$('#nombre_esp').removeClass("form-group").addClass("form-group has-error");
			$('.top-right').notify({
    			message: { text: 'El campo del nombre del atributo en Español esta vacío, para poder continuar asigne un nombre al atributo.' },
    			type:'blackgloss',
  			}).show();
			return false;
			}
		else{
			$('#nombre_esp').removeClass("form-group has-error").addClass("form-group has-success");
		}

        if (form1.nombre_eng.value == ''){
            form1.nombre_eng.focus();
            $('#nombre_eng').removeClass("form-group").addClass("form-group has-error");
            $('.top-right').notify({
                message: { text: 'El campo del nombre del atributo en Inglés esta vacío, para poder continuar asigne un nombre al atributo.' },
                type:'blackgloss',
            }).show();
            return false;
            }
        else{
            $('#nombre_eng').removeClass("form-group has-error").addClass("form-group has-success");
        }
		
	}
	$(document).ready(function () {
	    $(".buttonguardar").click(function () {
	        if (validar_campos()!= false){
	        	$("#myModal").modal("show");
	        }
	    });
	});

    function agregarValor(){
        var nombre_esp =  $("input[name='valor_nombre_esp']").val();
        var nombre_eng =  $("input[name='valor_nombre_eng']").val();

        if(nombre_esp != "" && nombre_eng != ""){
            $.ajax({
                async : false,
                type : "POST",
                dataType : "html",
                contentType : "application/x-www-form-urlencoded",
                url: "operaciones.php",
                data: {"operaciones":"agregar_valor","nombre_esp": nombre_esp,"nombre_eng": nombre_eng, "id_atributo": <?php echo json_encode($id); ?>},
                success: function(data) {
                    //console.log(data);
                    if(data != "0"){
                        var html = "<tr id='"+data+"''>"
                                        +"<td>"+nombre_esp+"</td>"
                                        +"<td>"+nombre_eng+"</td>"
                                        +"<td class=\"text-center visible-lg visible-md\"><img class=\"manita nover\" onclick=\"Desactivar("+data+")\" id=\"temp"+data+"\" src=\"img/visible.png\"></td>"
                                        +"<td class=\"text-center visible-lg visible-md\" style=\"color:#000;cursor:pointer;\"><i class=\"fa fa-trash fa-2x\" onclick=\"eliminarValor("+data+")\"></i></td>"
                                    +"<tr>";
                        $("#sortable").append(html);
                        $("input[name='valor_nombre_eng']").val("");
                        $("input[name='valor_nombre_eng']").val("");
                    }
                    else{
                        console.log(data);
                        alert("No se pudo guardar el rango, intentalo de nuevo.");
                    }
                }
            }); 
        }
        else{
            if (nombre_esp == ''){
            $("input[name='valor_nombre_esp']").focus();
            $('#valor_nombre_esp').removeClass("form-group").addClass("form-group has-error");
            $('.top-right').notify({
                message: { text: 'El campo del nombre del valor en Español esta vacío, para poder continuar asigne un nombre al valor.' },
                type:'blackgloss',
            }).show();
            return false;
            }
        else{
            $('#valor_nombre_esp').removeClass("form-group has-error").addClass("form-group has-success");
        }

        if (nombre_eng == ''){
            $("input[name='valor_nombre_eng']").focus();
            $('#valor_nombre_eng').removeClass("form-group").addClass("form-group has-error");
            $('.top-right').notify({
                message: { text: 'El campo del nombre del valor en Inglés esta vacío, para poder continuar asigne un nombre al valor.' },
                type:'blackgloss',
            }).show();
            return false;
            }
        else{
            $('#valor_nombre_eng').removeClass("form-group has-error").addClass("form-group has-success");
        }
        }

        
    }

    function eliminarValor(id){
        if(confirm("¿Seguro que deseas eliminar el valor?")){
            
            $.ajax({
                async : false,
                type : "POST",
                dataType : "html",
                contentType : "application/x-www-form-urlencoded",
                url: "operaciones.php",
                data: {"operaciones":"eliminar_valor", "id_valor":id, "id_atributo":id_atributo},
                success: function(data) {
                    //console.log(data);
                    if(data == "true"){
                        $("#"+id).remove();
                        console.log(data);
                    }
                    else{
                        console.log(data);
                        alert("No se pudo eliminar el valor, intentalo de nuevo.");
                    }
                }
            }); 
        }
        
    }
</script>


<script>
$(function() {
    $('#nombre_esp').tooltip(
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
<script>
    function Activar(id){
        $.ajaxSetup({ cache: false });
        $.ajax({
            async:true,
            type: "POST",
            dataType: "html",
            contentType: "application/x-www-form-urlencoded",
            url:"operaciones.php",
            data:"id="+id+"&operaciones=activar_valor",
            success:function(data){
                    $("#temp"+id).attr("src", "img/visible.png");
                    $("#temp"+id).attr("onclick", "Desactivar("+id+")");    
                    $("#temp"+id).tooltip('hide');      
                    $("#temp"+id).data('bs.tooltip').options.title = 'Ocultar';
                    $("#temp"+id).tooltip('show');                                          
            },
            cache:false
        });         
    }
    
    function Desactivar(id){
        $.ajaxSetup({ cache: false });
        $.ajax({
            async:true,
            type: "POST",
            dataType: "html",
            contentType: "application/x-www-form-urlencoded",
            url:"operaciones.php",
            data:"id="+id+"&operaciones=desactivar_valor",
            success:function(data){             
                $("#temp"+id).attr("src", "img/invisible.png");
                $("#temp"+id).attr("onclick", "Activar("+id+")");   
                $("#temp"+id).tooltip('hide');
                $("#temp"+id).data('bs.tooltip').options.title = 'Mostrar';
                $("#temp"+id).tooltip('show');      
            },
            cache:false
        });         
    }   
</script> 
</html>