<?php
function __autoload($ClassName){
    include('clases/'.$ClassName.".php");
}

	$seguridad = new seguridad();
	$seguridad->candado();
	
if(isset($_REQUEST['id_transporte'])){
	$id=$_REQUEST['id_transporte'];
	$operacion='modificartransporte';
	$palabra='Editar Transporte';
	$temporal = new transporte($id);
	$temporal -> obtener_transporte();
	if($temporal->img_principal != '')
		$img = '<img src="../imgTransportes/'.$temporal->img_principal.'" width="auto" height="221"/>';
	else 
		$img='';
	if($temporal->img_principal != ''){
		$validator='';
	}
	else{
		$validator='if (!val.match(/(?:gif|jpg|png)$/)) {
    		$("#logo_transporte").removeClass("form-group").addClass("form-group has-error"); 
			$(".top-right").notify({
    			message: { text: "El tipo de archivo que intenta subir no es admitido, solo se aceptan imágenes con formato .jpg .png .gif" },
    			type:"blackgloss",
    			delay: 6000,
  			}).show(); 
			return false; 
		}';
	}
	$validator2='';
	$rango_transporte = new rango_transporte();
	$rango_transporte -> id_transporte = $id;
	$rangos_transporte = $rango_transporte -> listar_rangos_transporte();
}
else{
	$id=0;
	$operacion='agregartransporte';
	$palabra='Nuevo Transporte';
	$img='';
	$temporal = new transporte($id);

	$validator='if (!val.match(/(?:gif|jpg|png)$/)) {
    		$("#logo_transporte").removeClass("btn-default").addClass("btn-danger"); 
			$(".top-right").notify({
    			message: { text: "Agregue el logo para poder continuar y solo se aceptan imágenes con formato .jpg .png .gif" },
    			type:"blackgloss",
    			delay: 10000,
  			}).show(); 
			return false; 
		}
		else{
			$("#logo_transporte").removeClass("btn-danger").addClass("btn-success"); 
		}';
}
$clave = 'ModTrans';
?>

<?php
include 'head.html';//contiene los estilos y los metas
?>
	<title>Formulario Del Transporte</title>
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
                    		<input type="hidden" name="id_transporte" value="<?=$temporal->id_transporte?>"/>        
                    		<input type="hidden" name="status" value="<?=$temporal->status?>"/>	                    		
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

                    	<ul class="nav nav-tabs" role="tablist">
	                        <li class="active"><a href="#info" role="tab" data-toggle="tab">Informaci&oacute;n</a></li>
	                        <li><a href="#price" role="tab" data-toggle="tab">Gastos de Env&iacute;o</a></li>
                        </ul>

                         <div class="tab-content">
                            <div class="tab-pane active" id="info">
                            	<div id="nombre" class="input-group espacios">
		                        	<span class="input-group-addon es">Nombre del Transportista*</span>
		                        	<input type="text"  name="nombre" class="form-control" placeholder="Ingrese el nombre aquí..." value="<?=$temporal->nombre?>">
		                        </div>
		                        <div id="tiempo_transito" class="input-group espacios">
		                        	<span class="input-group-addon es">Tiempo de tránsito*</span>
		                    		<input type="text" name="tiempo_transito" class="form-control" placeholder="Número de diás de tránsito..." value="<?=$temporal->tiempo_transito?>">
		                    	</div>
		                        <span class="textHelper">Ingrese la descripción del transportista aquí:</span>
		                        <div id="node" class="nada">
		                        <textarea name="descripcion" id="summernote"><?=$temporal->descripcion?></textarea>
		                        </div>
		                        <br>       
		                        <div class="espacios">
		                    		<span class="textHelper">Previsualizar:</span>
		                    	</div>
		                        
		                        <br>
		                        <output align="center" id="list"><?=$img?></output>
		                        <br>
		                    	<center>
		                            <input id="logo_transporte" name="archivo" type="file" class="upload"/>
		                        </center>
		                        <br>
		                        <div class="text-center textHelper">
		                        	Tipo de archivos permitidos: jpg, jpeg, png, gif.
		                            <br>
		                            Tamaño máximo de archivo: 4MB.
		                        </div>
		                        <br>            
                            </div>
                            <div class="tab-pane" id="price">
                            	<table id="table_" class="table table-hover table-striped tablesorter">
		                            <thead class="styled-thead">
		                              <tr>
		                                <th>Peso &gt;=</th>
		                                <th>Peso &lt;</th>
		                                <th>Gastos de Env&iacute;o</th>                               
		                                <th class="text-center visible-lg visible-md">Activar</th>
		                                <th class="text-center visible-lg visible-md">Eliminar</th>
		                              </tr>
		                            </thead>
		                            <tbody class="styled-tbody" id="sortable">
		                           	<?php 
		                           		if($id != 0){

			                           		foreach ($rangos_transporte as $rango) {
				                           		echo "<tr id='".$rango["id_rango_transporte"]."'>
						  								<td>".$rango["peso_minimo"]."</td>
						  								<td>".$rango["peso_maximo"]."</td>
						  								<td>".$rango["cargo_por_envio"]."</td>";
				  								if($rango["status"] == 1 ){
													$img='img/visible.png';
													$funcion='Desactivar('.$rango["id_rango_transporte"].')';
													$class = 'nover';

												}
												else{
											  		$img='img/invisible.png';
													$funcion='Activar('.$rango["id_rango_transporte"].')';
													$class = 'ver';
											   	}
											   	echo '<td class="text-center visible-lg visible-md"><img class="manita '.$class.'" onclick="'.$funcion.'" id="temp'.$rango["id_rango_transporte"].'" src="'.$img.'"></td>
											   		  <td class="text-center visible-lg visible-md" style="color:#000;cursor:pointer;"><i class="fa fa-trash fa-2x " onclick="eliminarRango('.$rango["id_rango_transporte"].')"></i></td>
											   		<tr>';
						  					}
					  					}
		                           	?> 
		                           	<?php ?> 
		                            </tbody>
		                            <tfoot class="styled-tfoot">
		                              <tr>
		                                <th>Peso &gt;=</th>
		                                <th>Peso &lt;</th>
		                                <th>Gastos de Env&iacute;o</th>                               
		                                <th class="text-center visible-lg visible-md">Activar</th>
		                                <th class="text-center visible-lg visible-md">Eliminar</th>
		                              </tr>
		                            </tfoot>
                          		</table>
                          		<?php if($id != 0){?>
                          		<button type="button" id="boton_collapse" class=" button_transporte" data-toggle="collapse" data-target="#demo" aria-expanded="false" aria-controls="demo">
								  Nuevo Rango
								</button>
								<div id="demo" class="collapse">
									<div id="peso_minimo" class="input-group espacios">
		                        		<span class="input-group-addon es">Peso es &gt;= *</span>
		                    			<input type="text" name="peso_minimo" class="form-control" placeholder="Ingrese el peso mínimo en kilogramos aquí... Ejemplo: 3.00" value="<?=$temporal->peso_minimo?>">
		                    		</div>
		                    		<div id="peso_maximo" class="input-group espacios">
		                        		<span class="input-group-addon es">Peso es &lt; *</span>
		                    			<input type="text" name="peso_maximo" class="form-control" placeholder="Ingrese el peso máximo en kilogramos aquí... Ejemplo: 5.00" value="<?=$temporal->peso_maximo?>">
		                    		</div>
		                    		<div id="cargo_por_envio" class="input-group espacios">
		                        		<span class="input-group-addon es">Cargo por env&iacute;o * (Moneda Mexicana MXN)</span>
		                    			<input type="text" name="cargo_por_envio" class="form-control" placeholder="Ingrese el cargo por env&iacute;o aquí..." value="<?=$temporal->cargo_por_envio?>">
		                    		</div>
		                    		<button type="button" class=" button_transporte" onclick="agregarRango()">
								  		Guardar
									</button>
								</div>
								<?php }
									else{
										echo "<p>Para agregar rangos de cargo por envío guarda el transporte primero.</p>";
									}
								?>
                            </div>
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
	<script>
		jQuery(document).ready(function() {
  			jQuery('#summernote').summernote({
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
       			 //var content = $('textarea[name="descripcion"]').html($('#summernote').code());
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
    <script>
	  function handleFileSelect(evt) {
		var files = evt.target.files; // FileList object
	
		// Loop through the FileList and render image files as thumbnails.
		for (var i = 0, f; f = files[i]; i++) {
	
		  // Only process image files.
		  if (!f.type.match('image.*')) {
			continue;
		  }
	
		  var reader = new FileReader();
	
		  // Closure to capture the file information.
		  reader.onload = (function(theFile) {
			return function(e) {
			  // Render thumbnail.
			  var span = document.createElement('span');
			  span.innerHTML = ['<img width="auto" height="221" src="', e.target.result,
								'" title="', escape(theFile.name), '"/>'].join('');
			  $("#list").empty();
			  document.getElementById('list').insertBefore(span, null);
			};
		  })(f);
	
		  // Read in the image file as a data URL.
		  reader.readAsDataURL(f);
		}
	  }
	
	  document.getElementById('logo_transporte').addEventListener('change', handleFileSelect, false);
	</script>
 <!--Script que permite previsualizar la imagen Secundaria-->
	
 <!--Script que sirve para validar-->
	<script>
	function validar_campos(){
		var val = $("#logo_transporte").val();
		var sHTML = $('#summernote').eq(0).code();

		if (form1.nombre.value == ''){
			form1.nombre.focus();
			$('#nombre').removeClass("form-group").addClass("form-group has-error");
			$('.top-right').notify({
    			message: { text: 'El campo del nombre esta vacío, para poder continuar asigne un nombre al transportista.' },
    			type:'blackgloss',
  			}).show();
			return false;
			}
		else{
			$('#nombre').removeClass("form-group has-error").addClass("form-group has-success");
		}

		if (form1.tiempo_transito.value == ''){
			form1.tiempo_transito.focus();
			$('#tiempo_transito').removeClass("form-group").addClass("form-group has-error");
			$('.top-right').notify({
    			message: { text: 'El campo del tiempo de tránsito vacío, para poder continuar ponga le número de días que le toma al transportista llegar a su destino.' },
    			type:'blackgloss',
  			}).show();
			return false;
			}
		else{
			$('#tiempo_transito').removeClass("form-group has-error").addClass("form-group has-success");
		}

		<?=$validator?>
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
	$('#tiempo_transito').tooltip(
	{
		placement: "top",
        title: "Este campo es requerido."
	});
	$('#imgprin').tooltip(
	{
		placement: "top",
        title: "Campo Requerido. Agregue la imagen del logo de este transporte, solo se aceptan imágenes con formato .jpg, .png y .gif ."
	});
});
</script>
<script>
	function agregarRango(){
		var peso_minimo =  $("input[name='peso_minimo']").val();
		var peso_maximo =  $("input[name='peso_maximo']").val();
		var cargo_por_envio = $("input[name='cargo_por_envio']").val();

		if(peso_minimo == "")
		{
			$("input[name='peso_minimo']").focus();
			$('#peso_minimo').removeClass("form-group").addClass("form-group has-error");
			$('.top-right').notify({
    			message: { text: 'El campo del peso mínimo, para poder continuar ponga el peso mínimo.' },
    			type:'blackgloss',
  			}).show();
			return false;
		}
		else
		{
			$('#peso_minimo').removeClass("form-group has-error").addClass("form-group has-success");
		}
		if(peso_maximo == "")
		{
			$("input[name='peso_maximo']").focus();
			$('#peso_maximo').removeClass("form-group").addClass("form-group has-error");
			$('.top-right').notify({
    			message: { text: 'El campo del peso máximo, para poder continuar ponga el peso máximo.' },
    			type:'blackgloss',
  			}).show();
			return false;
		}
		else
		{
			$('#peso_maximo').removeClass("form-group has-error").addClass("form-group has-success");
		}
		if(cargo_por_envio == "")
		{
			$("input[name='cargo_por_envio']").focus();
			$('#cargo_por_envio').removeClass("form-group").addClass("form-group has-error");
			$('.top-right').notify({
    			message: { text: 'El cargo por envío esta vacío, agrega un cargo por envío, o pon 0 para envío gratuito.' },
    			type:'blackgloss',
  			}).show();
			return false;
		}
		else
		{
			$('#cargo_por_envio').removeClass("form-group has-error").addClass("form-group has-success");
		}

		peso_minimo = (peso_minimo * 1 / 1 ).toFixed(2);
		peso_maximo = (peso_maximo * 1 / 1).toFixed(2);
		cargo_por_envio = (cargo_por_envio * 1 / 1).toFixed(2);

		var pesos_validos = false;
		var cargo_por_envio_valido = false;

		if(NumAndTwoDecimals(peso_minimo) &&  NumAndTwoDecimals(peso_maximo)){
			if(Number(peso_minimo) < Number(peso_maximo)){
				pesos_validos = true;
			}
			else{
				$('.top-right').notify({
    				message: { text: 'Los pesos no concuerdan. Verifica que el peso mínimo sea menor que el peso máximo.' },
    				type:'blackgloss',
  				}).show();
			}
		}
		else{
			$('.top-right').notify({
    				message: { text: 'Los pesos no concuerdan. Verifica que el formato del peso sea como en el ejemplo.' },
    				type:'blackgloss',
  				}).show();
		}
		

		if(NumAndTwoDecimals(cargo_por_envio)){
			cargo_por_envio_valido = true;
		}
		else{
			$('.top-right').notify({
    				message: { text: 'Revisa que el cargo sea un precio válido.' },
    				type:'blackgloss',
  				}).show();
		}

		if(pesos_validos && cargo_por_envio_valido){
			$.ajax({
	            async : false,
				type : "POST",
				dataType : "html",
				contentType : "application/x-www-form-urlencoded",
	            url: "operaciones.php",
	            data: {"operaciones":"agregar_rango","peso_minimo": peso_minimo,"peso_maximo": peso_maximo,"cargo_por_envio":cargo_por_envio, "id_transporte": <?php echo json_encode($id); ?>},
	            success: function(data) {
	            	//console.log(data);
		  			if(data != "0"){
		  				var html = "<tr id='"+data+"''>"
		  								+"<td>"+peso_minimo+"</td>"
		  								+"<td>"+peso_maximo+"</td>"
		  								+"<td>"+cargo_por_envio+"</td>"
		  								+"<td class=\"text-center visible-lg visible-md\"><img class=\"manita nover\" onclick=\"Desactivar("+data+")\" id=\"temp"+data+"\" src=\"img/visible.png\"></td>"
		  								+"<td class=\"text-center visible-lg visible-md\" style=\"color:#000;cursor:pointer;\"><i class=\"fa fa-trash fa-2x\" onclick=\"eliminarRango("+data+")\"></i></td>"
		  							+"<tr>";
						$("#sortable").append(html);
						$("input[name='peso_minimo']").val("");
						$("input[name='peso_maximo']").val("");
						$("input[name='cargo_por_envio']").val("");

		  			}
		  			else{
		  				console.log(data);
		  				$('.top-right').notify({
		    				message: { text: 'No se pudo guardar el rango, intentalo de nuevo.' },
		    				type:'blackgloss',
		  				}).show();
		  			}
	            }
	        });	
		}

		
	}

	function NumAndTwoDecimals(number) {
        var val = number;
        var re = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)$/g;
        var re1 = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)/g;
        if (re.test(val)) {
        	return true;
        } else {
            val = re1.exec(val);
            if (val) {
            	return false;
            } else {
               	return false;
            }
        }
    }

    function eliminarRango(id){
    	if(confirm("¿Seguro que deseas eliminar el rango?")){
    		$.ajax({
	            async : false,
				type : "POST",
				dataType : "html",
				contentType : "application/x-www-form-urlencoded",
	            url: "operaciones.php",
	            data: {"operaciones":"eliminar_rango", "id_rango_transporte":id},
	            success: function(data) {
	            	//console.log(data);
		  			if(data == "true"){
		  				$("#"+id).remove();
		  			}
		  			else{
		  				console.log(data);
		  				alert("No se pudo eliminar el rango, intentalo de nuevo.");
		  			}
	            }
	        });	
    	}
    	
    }
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
			data:"id_rango_transporte="+id+"&operaciones=activar_rango",
			success:function(data){
					console.log(data);
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
			data:"id_rango_transporte="+id+"&operaciones=desactivar_rango",
			success:function(data){
				console.log(data);
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
