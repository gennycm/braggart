<?php
function __autoload($ClassName){
    include('clases/'.$ClassName.".php");
}

	$seguridad = new seguridad();
	$seguridad->candado();
	
if(isset($_REQUEST['id_producto'])){
	$id=$_REQUEST['id_producto'];
	$operacion='modificarproducto';
	$palabra='Editar Producto';
	$temporal = new producto($id);
	$temporal -> obtener_producto();
	
	if($temporal->img_principal != '')
		$img_principal = '<img src="../imgProductos/'.$temporal->img_principal.'" width="auto" height="221"/>';
	else 
		$img_principal='';
	if($temporal->img_principal != ''){
		$validator='';
	}
	else{
		$validator='if (!val.match(/(?:gif|jpg|png)$/)) {
    		$("#imgprin").removeClass("form-group").addClass("form-group has-error"); 
			$(".top-right").notify({
    			message: { text: "El tipo de archivo que intenta subir no es admitido, solo se aceptan imágenes con formato .jpg .png .gif. Verifique que haya seleccionado una imagen principal." },
    			type:"blackgloss",
    			delay: 6000,
  			}).show(); 
			return false; 
		}';
	}
	$validator2='';
}
else{
	$id=0;
	$operacion='agregarproducto';
	$palabra='Nuevo Producto';
	$img_principal='';
	$temporal = new producto($id);
	$validator='if (!val.match(/(?:gif|jpg|png)$/)) {
    		$("#imgprin").removeClass("btn-default").addClass("btn-danger"); 
			$(".top-right").notify({
    			message: { text: "Agregue la imagen principal para poder continuar y solo se aceptan imágenes con formato .jpg .png .gif" },
    			type:"blackgloss",
    			delay: 10000,
  			}).show(); 
			return false; 
		}
		else{
			$("#imgprin").removeClass("btn-danger").addClass("btn-success"); 
		}';
}
$clave = 'ModPro';
$clave2='SortImgPro';
$sort='imgproducto';
$handle = "";
if($seguridad->valida_permiso_usuario($_SESSION['idusuario'],$clave2)==0){
  $handle = "";
}else{
  $handle = 'handle sortimg';
} 

$categoria = new categoria();
$categorias_productos = $categoria -> listar_categorias();

$transporte = new transporte();
$transportes = $transporte -> listar_transportes();

$impuesto = new impuesto();
$impuestos_productos = $impuesto -> listar_impuestos();

$marca = new marca();
$marcas = $marca -> listar_marcas();



$ids_categorias_asocidas = array();
$ids_transportes_asociados = array();

if($id != 0){

    $ids_categorias_asocidas = $temporal -> listar_ids_categorias_asociadas();
    $ids_transportes_asociados = $temporal -> listar_ids_transportes_asociados();
    $combinacion = new combinacion(0, $id);
    $combinaciones = $combinacion -> listar_combinaciones_por_producto();
    $atributo = new atributo();
    $atributos = $atributo -> listar_atributos_activos();
}

?>

<?php
include 'head.html';//contiene los estilos y los metas
?>
	<title>Formulario De Productos</title>
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
                    		<input type="hidden" name="MAX_FILE_SIZE" value="600000000"/>
                    		<input type="hidden" name="id_producto" value="<?=$temporal->id_producto?>"/>
                    		<input type="hidden" name="mostrar" value="<?=$temporal->mostrar?>"/>	        
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
                    <p class="col-lg-12" style="color:red;">Los campos con * son obligatorios. </p>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#esp" role="tab" data-toggle="tab">Información</a></li>
                                <!--<li><a href="#eng" role="tab" data-toggle="tab">English</a></li>-->
                                <li><a href="#imp" role="tab" data-toggle="tab">Precio</a></li>
                                <!--<li><a href="#aso" role="tab" data-toggle="tab">Asociaciones</a></li>-->
                                <!--<li><a href="#marc" role="tab" data-toggle="tab">Marcas</a></li>-->
                                <li><a href="#comb" role="tab" data-toggle="tab">Combinaciones</a></li>
                                <li><a href="#img" role="tab" data-toggle="tab">Imágenes</a></li>
                                <!--<li><a href="#adj" role="tab" data-toggle="tab">Adjuntos</a></li>-->
                                <li><a href="#trans" role="tab" data-toggle="tab">Transportes</a></li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="esp">
                                    <div id="titulo_esp" class="input-group espacios">
                                        <span class="input-group-addon es">Nombre del Producto*</span>
                                        <input type="text"  name="titulo_esp" class="form-control" placeholder="Ingrese el nombre aquí..." value="<?=$temporal->titulo_esp?>">
                                    </div>
                                    <span class="textHelper">Ingrese la descripción del producto aquí*:</span>
                                    <textarea name="descripcion_esp" id="summernote2"><?=$temporal->descripcion_esp;?></textarea>
                                    <br>
                                    <div id="clave" class="input-group espacios">
                                        <span class="input-group-addon es">Modelo del Producto*</span>
                                        <input type="text"  name="clave" class="form-control" placeholder="Ingrese la clave aquí..." value="<?=$temporal->clave?>">
                                    </div>
                                    <div id="peso" class="input-group espacios">
                                        <span class="input-group-addon es">Peso máximo del producto*</span>
                                        <input type="text"  name="peso" class="form-control" placeholder="Ingrese el peso en kilogramos aquí..." value="<?=$temporal->peso?>">
                                    </div>
                                    <div id="clave" class="input-group espacios">
                                        <span class="input-group-addon es">Stock General del Producto*</span>
                                        <input type="text"  name="stock_general" class="form-control" placeholder="Ingrese el stock aquí..." value="<?=$temporal->stock_general?>">
                                    </div>
                                    <div id="meta_titulo" class="input-group espacios">
                                        <span class="input-group-addon es">Meta Título (70 caracteres máximo.)*</span>
                                        <input type="text" name="meta_titulo_esp" id="meta_titulo_input" maxlength="70" value="<?=$temporal -> meta_titulo_esp;?>"/>
                                    </div>
                                    <div id="clave" class="input-group espacios">
                                        <span class="input-group-addon es">Meta Descripción (160 caracteres máximo.)*</span>
                                    <textarea name="meta_descripcion_esp" class="col-lg-12" rows="5" maxlength="160" style="resize:none;"><?=$temporal -> meta_descripcion_esp;?></textarea>
                                    </div>
                                    <div id="clave" class="input-group espacios">
                                        <span class="input-group-addon es">Tags de Búsqueda*</span>
                                        <input type="text" name="tags_esp" id="tags_esp" value="<?=$temporal -> tags_esp;?>"/>
                                    </div>
                                </div>

                                <div class="tab-pane" id="eng">
                                   <div id="titulo_eng" class="input-group espacios">
                                        <span class="input-group-addon es">Product's Name</span>
                                        <input type="text"  name="titulo_eng" class="form-control" placeholder="Write the product's name here..." value="<?=$temporal->titulo_eng?>">
                                    </div>
                                    <span class="textHelper">Write the product's description here:</span>
                                    <textarea name="descripcion_eng" id="summernote3"><?=$temporal->descripcion_eng;?></textarea>
                                    <br>
                                     <div id="meta_titulo" class="input-group espacios">
                                        <span class="input-group-addon es">Meta Title (70 chars maximum.)</span>
                                        <input type="text" name="meta_titulo_eng" id="meta_titulo_input_esp" maxlength="70" value="<?=$temporal -> meta_titulo_eng;?>"/>
                                    </div>
                                    <div id="clave" class="input-group espacios">
                                        <span class="input-group-addon es">Meta Description (160 chars maximum.)</span>
                                    <textarea name="meta_descripcion_eng" class="col-lg-12" rows="5" maxlength="160" style="resize:none;"><?=$temporal->meta_descripcion_eng;?></textarea>
                                    </div>
                                    <div id="clave" class="input-group espacios">
                                        <span class="input-group-addon es">Search Tags</span>
                                        <input type="text" name="tags_eng" id="tags_eng" value="<?=$temporal -> tags_eng?>"/>
                                    </div>
                                </div>

                                <div class="tab-pane" id="imp">
                                    <br>
                                    <p style="font-size:14px;color:red;">El formato del precio acepta hasta dos decimales.</p>
                                    <div id="precio_mxn" class="input-group espacios">
                                        <span class="input-group-addon es">Precio en Moneda Mexicana (Sin I.V.A)*</span>
                                        <input type="text"  name="precio_mxn" class="form-control" placeholder="13.00 100.75 200.50" value="<?=$temporal->precio_mxn?>">
                                    </div>
                                     <div id="precio_usd" class="input-group espacios" style="display:none;">
                                        <span class="input-group-addon es">Price in US dollars (Without I.V.A)</span>
                                        <input type="text"  name="precio_usd" class="form-control" placeholder="5.95 10.00 59.99" value="<?=$temporal->precio_usd?>">
                                    </div>
                                    <select id="impuesto" class="select-picker" name="impuesto" title='Seleccione el % de impuesto*' >
                                       <?php
                                            foreach ($impuestos_productos as $una_impuesto) {
                                                if($temporal->impuesto == $una_impuesto["porcentaje"]){
                                                    echo " <option selected value=\"".$una_impuesto["porcentaje"]."\">".$una_impuesto["nombre"]." ".$una_impuesto["porcentaje"]."%</option>";
                                                }
                                                else{
                                                    echo " <option value=\"".$una_impuesto["porcentaje"]."\">".$una_impuesto["nombre"]." ".$una_impuesto["porcentaje"]."%</option>";
                                                }
                                                
                                            }
                                        ?>
                                    </select>
                                    <br>
                                    <span>
                                        Precio Final MXN: $<span id="final_mxn">0.00</span> MXN
                                    </span>
                                    <br>
                                    <span style="display:none;">
                                        Precio Final USD: $<span id="final_usd">0.00</span> USD
                                    </span>
                                </div>

                                <div class="tab-pane" id="aso">
                                    <div class="col-lg-12" style="margin-top:20px;">
                                        <select id="categorias_productos" name="categorias[]" class="select-picker col-lg-12" multiple title='Seleccione las categorías del producto' >
                                            <?php
                                                foreach ($categorias_productos as $una_categoria) {
                                                    if(in_array($una_categoria["id_categoria"], $ids_categorias_asocidas)){
                                                        echo " <option selected value=\"".$una_categoria["id_categoria"]."\">".$una_categoria["nombre"]."</option>";
                                                    }
                                                    else{
                                                        echo " <option value=\"".$una_categoria["id_categoria"]."\">".$una_categoria["nombre"]."</option>";
                                                    }
                                                    
                                                }
                                            ?>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-pane" id="marc">
                                    <div class="col-lg-12" style="margin-top:20px;">
                                        <select id="marcas_productos" name="marca" class="select-picker col-lg-12" title='Seleccione la marca del producto' >
                                            <option selected value="0">Selecciona la marca del producto</option>
                                            <?php
                                                foreach ($marcas as $una_marca) {
                                                    if($una_marca["id_marca"] == $temporal -> id_marca){
                                                        echo " <option selected value=\"".$una_marca["id_marca"]."\">".$una_marca["nombre"]."</option>";
                                                    }
                                                    else{
                                                        echo " <option value=\"".$una_marca["id_marca"]."\">".$una_marca["nombre"]."</option>";
                                                    }
                                                    
                                                }
                                            ?>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-pane" id="comb">
                                    <div class="col-lg-12" style="margin-top:20px;">
                                        <?php 
                                            if($id == 0){
                                                echo '<p style="color:red;">Guarda el producto para que puedas agregar combinaciones.</p><br>';
                                            }
                                            else{
                                                echo '<p>Puedes generar combinaciones para tu producto. Selecciona nueva combinación y dale un color, tamaño y selecciona imágenes para esta combinación en particular.</p><br>';
                                            }

                                        ?>
                                    	
                                    	<table id="table_" class="table table-hover table-striped tablesorter">
                                            <thead class="styled-thead">
                                              <tr>
                                                <th>Nombre</th>
                                                <th>Stock</th>
                                                <th class="text-center visible-lg visible-md">Activar</th>
                                                <th class="text-center visible-lg visible-md">Eliminar</th>
                                              </tr>
                                            </thead>
                                            <tbody class="styled-tbody" id="sortable">
                                            <?php 
                                                if($id != 0){
                                                    foreach ($combinaciones as $una_combinacion) {
                                                        echo "<tr id='".$una_combinacion["id_combinacion"]."'>
                                                                <td style=\"color:#000;cursor:pointer;\" onclick=\"verCombinacion(".$una_combinacion["id_combinacion"].")\">".$una_combinacion["nombre"]."</td>
                                                                <td>".$una_combinacion["stock"]."</td>";
                                                        if($una_combinacion["status"] == 1 ){
                                                            $img='img/visible.png';
                                                            $funcion='Desactivar('.$una_combinacion["id_combinacion"].')';
                                                            $class = 'nover';

                                                        }
                                                        else{
                                                            $img='img/invisible.png';
                                                            $funcion='Activar('.$una_combinacion["id_combinacion"].')';
                                                            $class = 'ver';
                                                        }
                                                        echo '<td class="text-center visible-lg visible-md"><img class="manita '.$class.'" onclick="'.$funcion.'" id="temp'.$una_combinacion["id_combinacion"].'" src="'.$img.'"></td>
                                                              <td class="text-center visible-lg visible-md" style="color:#000;"><!--<i class="fa fa-trash fa-2x " onclick="eliminarCombinacion('.$una_combinacion["id_combinacion"].')"></i>--></td>
                                                            <tr>';
                                                    }
                                                }
                                            ?> 
                                            </tbody>
                                            <tfoot class="styled-tfoot">
                                               <tr>
                                                <th>Nombre</th>
                                                <th>Stock</th>
                                                <th class="text-center visible-lg visible-md">Activar</th>
                                                <th class="text-center visible-lg visible-md">Eliminar</th>
                                              </tr>
                                            </tfoot>
                                        </table>
                                        <?php if($id != 0){?>
                                        <button type="button" id="boton_collapse" class=" button_transporte" data-toggle="collapse" data-target="#demo" aria-expanded="false" aria-controls="demo">
                                          Nueva Combinaci&oacute;n
                                        </button>
                                        <div class="clearfix"></div>
                                        <div id="demo" class="collapse">
                                            <div id="nombre_combinacion" class="input-group espacios">
                                                <span class="input-group-addon es">Nombre*</span>
                                                <input type="text" name="nombre_combinacion" class="form-control" placeholder="Ingrese el nombre aquí..." >
                                            </div>
                                            <div id="stock_combinacion" class="input-group espacios">
                                                <span class="input-group-addon es">Stock*</span>
                                                <input type="text" name="stock_combinacion" class="form-control" placeholder="Ingrese el stock de esta combinación aquí...">
                                            </div>
                                            <input type="hidden" value="1" name="status"/>
                                            <?php 
                                                foreach ($atributos as $un_atributo) {
                                                    $valor_tmp = new valor(0,$un_atributo["id_atributo"]);
                                                    $valores_tmp = $valor_tmp -> listar_valores_por_atributo();

                                                    echo '<select class="select-picker col-lg-12" data-atributo="'.$un_atributo["id_atributo"].'" style="padding-left:0;padding-right:0;" name="'./*strtolower($un_atributo["nombre_esp"])*/"atributo".'" value="0" title="">';
                                                            echo "<option value=\"0\">".$un_atributo["nombre_esp"]."</option>";
                                                            foreach ($valores_tmp as $un_valor) {
                                                                echo "<option  value=\"".$un_valor["id_valor"]."\">".$un_valor["nombre_esp"]."</option>";
                                                            }
                                                    echo  '</select><div class="clearfix"></div>';
                                                }
                                            ?>
                                            <p>Si deseas puedes seleccionar imágenes que ya hayas subido que sean especificamente para este producto. Si algunas imágenes no aparecen guarda el producto y vuelve a entrar en él.</p>
                                            <div class="clearfix"></div>
                                            <div>
                                                <?php
                                                    if($id != 0){
                                                            $temporal->listar_img_secundarias_producto();
                                                            foreach ($temporal->lista_imagenes_secundarias as $elementoImgS) {  
                                                ?>
                                                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12" id="img2<?=$elementoImgS['id_img_producto']?>">
                                                        <div class="image-wrapper" style="width:100%;">
                                                            <input type="checkbox" id="check<?=$elementoImgS['id_img_producto']?>" name="id_imagen[]" value="<?=$elementoImgS['id_img_producto']?>">
                                                            <label for="check<?=$elementoImgS['id_img_producto']?>"><span></span></label>
                                                            <div id="imgedit<?=$elementoImgS['id_img_producto']?>" class="<?=$handle?>" >
                                                                <img style="margin: 0 0 20px 0" width="100%" height="250px" src="../imgProductos/secundarias/<?=$elementoImgS['ruta']?>"/>
                                                            </div>
                                                        </div>                                              
                                                    </div>          
                                                <?php
                                                            }
                                                    }else{
                                                        echo '';
                                                    }
                                                ?>
                                            </div>
                                            <div class="clearfix"></div>
                                            <button type="button" id="boton_combinacion" class=" button_transporte" onclick="agregarCombinacion()">
                                                Guardar Combinaci&oacute;n
                                            </button>
                                        </div>

                                         <?php }?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="img">
                                    <div class="espacios">
                                        <span class="textHelper">Previsualizar:</span>
                                        <br>
                                        <output align="center" id="list"><?=$img_principal?></output>
                                        <br>
                                        <center>
                                           
                                            <input id="files" name="archivo" type="file" class="upload"/>
                                        </center>
                                        <br>
                                        <div class="text-center textHelper">
                                            Tipo de archivos permitidos: jpg, jpeg, png, gif.
                                            <br>
                                            Tamaño máximo de archivo: 4MB.
                                        </div>
                                        <br>
                                    </div>

                                    <br>
                                    <br>
                                    <center>
                                        
                                        <input id="files2" name="archivo2[]" type="file" class="upload" multiple/>
                                    </center>
                                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 textHelper">
                                        Tipo de archivos permitidos: jpg, jpeg, png, gif.
                                        <br>
                                        Tamaño máximo de archivo: 10MB.
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <span class="textHelper">Previsualizar:</span>
                                    </div>
                                    <br>
                                    <!--Aquí es donde se previsualiza las imágenes secundarias-->
                                    <div class="col-lg-12 col-md-12" id="list2">
                                        
                                    </div>
                                    
                                    <div id="sortableImg">
                                    <?php
                                        if($id != 0){
                                                $temporal->listar_img_secundarias_producto();
                                                foreach ($temporal->lista_imagenes_secundarias as $elementoImgS) {  
                                    ?>
                                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12" id="img2<?=$elementoImgS['id_img_producto']?>">
                                            <div class="image-wrapper">
                                                <span class="image-options">
                                                    <ul class="ulmenuoptions">
                                                        <li onclick="deleteIMG2(<?=$elementoImgS['id_img_producto']?>)"  class="limenuoptions manita">
                                                            <span class="inputUploadFont fontOptionsImg">Eliminar <i class="fa fa-times"></i></span>
                                                        </li>   
                                                        <li class="limenuoptions manita">
                                                            <div class="fileUpload" style="width:100%; border-color: none important!">
                                                                <input type="hidden" name="idimgnoticia[]" value="<?=$elementoImgS['id_img_producto']?>"/>
                                                                <input type="hidden" class="idorden" name="idorden[]" value="<?=$elementoImgS['id_img_producto']?>"/>
                                                                <span class="inputUploadFont fontOptionsImg manita">Editar <i class="fa fa-pencil"></i></span>
                                                                <input name="archivo3[]" type="file" onchange="showMyImage('imgedit<?=$elementoImgS['id_img_producto']?>',this)" class="upload manita"/>
                                                            </div>
                                                        </li>   
                                                    </ul>
                                                </span>
                                              
                                                <div id="imgedit<?=$elementoImgS['id_img_producto']?>" class="<?=$handle?>" >
                                                    <img style="margin: 0 0 20px 0" widht="100%" height="250px" src="../imgProductos/secundarias/<?=$elementoImgS['ruta']?>"/>
                                                </div>
                                            </div>                                              
                                        </div>          
                                    <?php
                                                }
                                        }else{
                                            echo '';
                                        }
                                    ?>
                                    </div>

                                </div>


                                <div class="tab-pane" id="adj">
                                    <center style="margin-top:50px;">
                                        <input id="adjuntos" name="adjunto" type="file" class="upload"/>
                                    </center>
                                    <br>
                                    <div class="text-center textHelper">
                                        Tipo de archivos permitidos: pdf.
                                        <br>
                                        Tamaño máximo de archivo: 4MB.
                                    </div>
                                    <?php if($temporal -> pdf_adjunto != ""){?>
                                    <div class="col-xs-1"></div>
                                    <object style="height:500px;border:solid 1px #000;" class="col-xs-10" data="<?php echo "http://clientes.locker.com.mx/notmonday/pdfProductos/".$temporal -> pdf_adjunto; ?>" type="application/pdf">
                                        <embed class="col-xs-12" src="<?php echo "http://clientes.locker.com.mx/notmonday/pdfProductos/".$temporal -> pdf_adjunto; ?>" type="application/pdf" />
                                    </object>
                                    <?php }?>
                                </div>
                                <div class="tab-pane" id="trans">
                                    <p style="color:red;">Si no seleccionas un transporte se tomarán todos los transportes disponibles para este producto.</p><br>
                                    <div class="col-lg-12" style="margin-top:20px;">
                                        <select id="transportes" name="transportes[]" class="select-picker col-lg-12" multiple title='Seleccione los transportes disponibles' >
                                            <?php
                                                foreach ($transportes as $un_transporte) {
                                                    if(in_array($un_transporte["id_transporte"], $ids_transportes_asociados)){
                                                        echo " <option selected value=\"".$un_transporte["id_transporte"]."\">".$un_transporte["nombre"]."</option>";
                                                    }
                                                    else{
                                                        echo " <option value=\"".$un_transporte["id_transporte"]."\">".$un_transporte["nombre"]."</option>";
                                                    }
                                                    
                                                }
                                            ?>
                                           
                                        </select>
                                    </div>
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
 <!--Scripts Especificos para los formularios
    ----------------------------------------------
    Script que inicia el summernote-->
	<script>
		jQuery(document).ready(function() {
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
       			 var content = $('textarea[name="descripcion_esp"]').html($('#summernote2').code());
     		 });
            $('#form-validation').on('submit', function (e) {
                 var content = $('textarea[name="descripcion_eng"]').html($('#summernote3').code());
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
	
	  document.getElementById('files').addEventListener('change', handleFileSelect, false);
	</script>
    <!--Previsualizar imagenes 2-->
	<script>
    	function showMyImage(id,fileInput) {
		//var files = evt.target.files; // FileList object 
        var files = fileInput.files;
		// Loop through the FileList and render image files as thumbnails.
		for (var x = 0, f; f = files[x]; x++) {
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
			  $("#"+id).empty();
			  document.getElementById(id).insertBefore(span, null);
			};
		  })(f);
		  // Read in the image file as a data URL.
		  reader.readAsDataURL(f);
		}    
    }
    </script>
    <!--Script que permite previsualizar la imagen Secundaria-->
    <script>
	  function handleFileSelect(evt) {
		var files2 = evt.target.files; // FileList object
		$("#list2").empty();
		 var div = document.createElement('div');
        div.className = "col-lg-12 col-md-12 col-sm-12 col-xs-12";
        div.innerHTML = ['<p class="titulo">Imágenes Nuevas</p><br/>'].join('');
        document.getElementById('list2').insertBefore(div, null);  
		// Loop through the FileList and render image files as thumbnails.
		for (var i = 0, f; f = files2[i]; i++) {
	
		  // Only process image files.
		  if (!f.type.match('image.*')) {
			continue;
		  }
	
		  var reader = new FileReader();
	
		  // Closure to capture the file information.
		  reader.onload = (function(theFile) {
			return function(e) {
			  // Render thumbnail.
			  var span = document.createElement('div');
			  span.className = "col-lg-3 col-md-4 col-sm-12 col-xs-12";
			  span.innerHTML = ['<img style="margin: 0 0 20px 0" class="img-responsive" src="', e.target.result,
								'" title="', escape(theFile.name), '"/>'].join('');
			  document.getElementById('list2').insertBefore(span, null);
			};
		  })(f);
	
		  // Read in the image file as a data URL.
		  reader.readAsDataURL(f);
		}
	  }
	
	  document.getElementById('files2').addEventListener('change', handleFileSelect, false);
	</script>
	
 <!--Script que sirve para validar-->
	<script>
	function validar_campos(){
		var val = $("#files").val();
        var pdf = $("#adjunto").val();
        var titulo_esp = $('input[name="titulo_esp"]').val();
        var descripcion_esp = $('textarea[name="descripcion_esp"]').html($('#summernote2').code()).val();
        var clave = $('input[name="clave"]').val();
        var peso = $('input[name="peso"]').val();
        var stock_general = $('input[name="stock_general"]').val();
        var meta_titulo_esp = $('input[name="meta_titulo_esp"]').val();
        var meta_descripcion_esp = $('textarea[name="meta_descripcion_esp"]').val();
        var tags_esp = $('input[name="tags_esp"]').val();
        var precio_mxn = $('input[name="precio_mxn"]').val();
		
		if (titulo_esp == ''){
			$('input[name="titulo_esp"]').focus();
			$('#descripcion_esp').removeClass("form-group").addClass("form-group has-error");
			$('.top-right').notify({
    			message: { text: 'El campo de nombre en Español esta vacío, para poder continuar asigne un nombre.' },
    			type:'blackgloss',
  			}).show();
			return false;
			}
		else{
			$('#titulo').removeClass("form-group has-error").addClass("form-group has-success");
		}

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

        if(clave == '' ){
            $('input[name="clave"]').focus();
            $('#clave').removeClass("form-group").addClass("form-group has-error");
            $('.top-right').notify({
                message: { text: 'El campo de modelo en Español esta vacío, para poder continuar llene el modelo.' },
                type:'blackgloss',
            }).show();
            return false;
            }
        else{
            $('#clave').removeClass("form-group has-error").addClass("form-group has-success");
        }

        if(peso == '' ){
            $('input[name="peso"]').focus();
            $('#peso').removeClass("form-group").addClass("form-group has-error");
            $('.top-right').notify({
                message: { text: 'El campo de peso en Español esta vacío, para poder continuar llene el peso.' },
                type:'blackgloss',
            }).show();
            return false;
            }
        else{
            $('#peso').removeClass("form-group has-error").addClass("form-group has-success");
        }

        if(stock_general == '' ){
            $('input[name="stock_general"]').focus();
            $('#stock_general').removeClass("form-group").addClass("form-group has-error");
            $('.top-right').notify({
                message: { text: 'El campo de stock en Español esta vacío, para poder continuar llene el stock.' },
                type:'blackgloss',
            }).show();
            return false;
            }
        else{
            $('#stock_general').removeClass("form-group has-error").addClass("form-group has-success");
        }

        if(meta_titulo_esp == '' ){
            $('input[name="meta_titulo_esp"]').focus();
            $('#meta_titulo_esp').removeClass("form-group").addClass("form-group has-error");
            $('.top-right').notify({
                message: { text: 'El campo de meta-título en Español esta vacío, para poder continuar llene el meta-título.' },
                type:'blackgloss',
            }).show();
            return false;
            }
        else{
            $('#meta_titulo_esp').removeClass("form-group has-error").addClass("form-group has-success");
        }
        
        if(meta_descripcion_esp == '' ){
            $('textarea[name="meta_descripcion_esp"]').focus();
            $('#meta_descripcion_esp').removeClass("form-group").addClass("form-group has-error");
            $('.top-right').notify({
                message: { text: 'El campo de meta-descripción en Español esta vacío, para poder continuar llene el meta-descripción.' },
                type:'blackgloss',
            }).show();
            return false;
            }
        else{
            $('#meta_descripcion_esp').removeClass("form-group has-error").addClass("form-group has-success");
        }

        if(tags_esp == '' ){
            $('input[name="tags_esp"]').focus();
            $('#tags_esp').removeClass("form-group").addClass("form-group has-error");
            $('.top-right').notify({
                message: { text: 'El campo de tags de búsqueda en Español esta vacío, para poder continuar llene los tags de búsqueda.' },
                type:'blackgloss',
            }).show();
            return false;
            }
        else{
            $('#tags_esp').removeClass("form-group has-error").addClass("form-group has-success");
        }

        if(precio_mxn == '' && precio_mxn != "0" ){
            $('input[name="precio_mxn"]').focus();
            $('#precio_mxn').removeClass("form-group").addClass("form-group has-error");
            $('.top-right').notify({
                message: { text: 'El campo de precio en Moneda Mexicana esta vacío, para poder continuar llene el precio en Moneda Mexicana.' },
                type:'blackgloss',
            }).show();
            return false;
            }
        else{
            $('#precio_mxn').removeClass("form-group has-error").addClass("form-group has-success");
        }

		<?=$validator?>
	}
	</script>

<script>
	function deleteIMG2(id){
		$.ajaxSetup({ cache: false });
		$.ajax({
			async:true,
			type: "POST",
			dataType: "html",
			contentType: "application/x-www-form-urlencoded",
			url:"operaciones.php",
			data:"idImg2="+id+"&operaciones=eliminarImgNoticia",
			success:function(data){	
				// console.log(data)			
				$("#img2"+id).fadeOut('slow');			
			},
			cache:false
		});		
	}

    $('#impuesto').selectpicker();
    $('#categorias_productos').selectpicker();
    $('#transportes').selectpicker();

    $('.select-picker').selectpicker();

    $("#impuesto").change(function(){
        var impuesto = $(this).val();
        calcularPrecioFinal(impuesto);
    });

    //$( "#sortableImg" ).sortable({tolerance:"pointer", cancel:".manita,.limenuoptions, img", cursor:"move",  placeholder: "fa-bars"});



    calcularPrecioFinal($("#impuesto").val());
    function calcularPrecioFinal(impuesto){
        var precioMXN = $("input[name='precio_mxn']").val();
        var precioUSD = $("input[name='precio_usd']").val();
        var porcentaje = 1 + (impuesto / 100);

        if(precioMXN != ""){
            var precioFinalMXN = (precioMXN * porcentaje).toFixed(2);
            $("#final_mxn").html(precioFinalMXN);
        }
        if(precioUSD != ""){
            var precioFinalUSD = (precioUSD * porcentaje).toFixed(2);
            $("#final_usd").html(precioFinalUSD);
        }
        
    }

    $("input[name='precio_mxn']").focusout(function(){
    	if($("input[name='precio_mxn']").val() != ""){
    		NumAndTwoDecimals($(this));
        	var impuesto = $("#impuesto").val();
        	calcularPrecioFinal(impuesto);
    	}        
    });
    $("input[name='precio_usd']").focusout(function(){
    	if($("input[name='precio_usd']").val() != ""){
    		 NumAndTwoDecimals($(this));
        	var impuesto = $("#impuesto").val();
        	calcularPrecioFinal(impuesto);
    	}
       
    });

    function NumAndTwoDecimals(field) {
        var val = field.val();
        var re = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)$/g;
        var re1 = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)/g;
        if (re.test(val)) {
            console.log(val);

        } else {
            val = re1.exec(val);
            if (val) {
                field.val(val[0]);
            } else {
               alert(field.val() + " No es un precio válido.");
               field.focus();
               field.val("");
            }
        }
    }

     $('#tags_esp').tagsInput({
         'defaultText':'AÑADE+',
         'width':'100%'
        });
     $('#tags_eng').tagsInput({
         'defaultText':'ADD+',
         'width':'100%'
        });

    function agregarCombinacion(){
        var data = new FormData();
        var nombre_combinacion = $("input[name='nombre_combinacion']").val();
        var stock_combinacion = $("input[name='stock_combinacion']").val();
        var checkboxes_imagenes = $("input[name='id_imagen[]']");
        var atributos_selects = $("select[name='atributo']");
        var status = $("input[name='status']").val();

        var nombre_stock_llenos = false;
        var ids_imagenes_asociadas = new Array();
        var ids_atributos_valores = new Array();

        if(nombre_combinacion != "" && stock_combinacion != ""){
            nombre_stock_llenos = true;
        }
        else{
            if(nombre_combinacion == ""){
               $("input[name='nombre_combinacion']").focus();
               $('.top-right').notify({
                message: { text: 'El campo de nombre de combinación esta vacío.' },
                type:'blackgloss',
                }).show(); 
               return;
            }

            if(stock_combinacion == ""){
                $("input[name='stock_combinacion']").focus();
                $('.top-right').notify({
                    message: { text: 'El campo de nombre de combinación esta vacío.' },
                    type:'blackgloss',
                }).show(); 
                return;
            }
            
        }

        //Verificar y obtener los ids de las imágenes que se van a asociar a la combinación.

        for(var i = 0; i < $(checkboxes_imagenes).size(); i++){
            var checkbox_tmp = $(checkboxes_imagenes)[i];
            if($(checkbox_tmp).is(":checked")){
                var id_imagen = $(checkbox_tmp).val();
                data.append("ids_imagenes_asociadas[]", id_imagen);
                //ids_imagenes_asociadas.push(id_imagen);
            }
            
        }

        for(var i = 0; i < $(atributos_selects).size(); i++){
            var select_tmp = $(atributos_selects)[i];
            if($(select_tmp).val() != 0){
                var id_valor = $(select_tmp).val();
                var id_atributo = $(select_tmp).attr("data-atributo");
                 data.append("ids_atributos_valores[]", id_atributo);
                  data.append("ids_atributos_valores[]", id_valor);
                //ids_atributos_valores.push(id_atributo);
                //ids_atributos_valores.push(id_valor);
            }
        }
        if(nombre_stock_llenos){
            data.append("operaciones", "agregar_combinacion");
            data.append("nombre_combinacion", nombre_combinacion);
            data.append("stock_combinacion", stock_combinacion);
            data.append("id_producto", <?php echo json_encode($id); ?>);
            data.append("status", status)

            $.ajax({
                async : false,
                type : "POST",
                dataType : "html",
                contentType : false,
                processData: false,
                url: "operaciones.php",
                data: data,
                success: function(data) {
                    //console.log(data);
                    if(data != "0"){
                        var html = "<tr id='"+data+"''>"
                                        +"<td onclick='verCombinacion("+data+")'>"+nombre_combinacion+"</td>"
                                        +"<td>"+stock_combinacion+"</td>"
                                        +"<td class=\"text-center visible-lg visible-md\"><img class=\"manita nover\" onclick=\"Desactivar("+data+")\" id=\"temp"+data+"\" src=\"img/visible.png\"></td>"
                                        +"<td class=\"text-center visible-lg visible-md\" style=\"color:#000;cursor:pointer;\"><i class=\"fa fa-trash fa-2x\" onclick=\"eliminarCombinacion("+data+")\"></i></td>"
                                    +"<tr>";
                        $("#sortable").append(html);
                        $("input[name='nombre_combinacion']").val("");
                        $("input[name='stock_combinacion']").val("");
                        $("input[name='id_imagen[]']").prop('checked',false);
                        $("select[name='atributo']").prop('selectedIndex',0);
                        $("select[name='atributo']").selectpicker('refresh');
                        $("#boton_collapse").trigger( "click" );
                        alert("Se ha agregado la combinacion.");
                        console.log(data);
                    }
                    else{
                        console.log(data);
                        alert("No se pudo guardar la combinación, intentalo de nuevo.");
                    }
                }
            }); 
        }
            
    }

    function modificarCombinacion(id_combinacion,status){
        var data = new FormData();
        var nombre_combinacion = $("input[name='nombre_combinacion']").val();
        var stock_combinacion = $("input[name='stock_combinacion']").val();
        var checkboxes_imagenes = $("input[name='id_imagen[]']");
        var atributos_selects = $("select[name='atributo']");
        var status = $("input[name='status']").val();


        var nombre_stock_llenos = false;
        var ids_imagenes_asociadas = new Array();
        var ids_atributos_valores = new Array();

        if(nombre_combinacion != "" && stock_combinacion != ""){
            nombre_stock_llenos = true;
        }
        else{
            alert("Llena al menos el nombre de la combinación y el stock para la combinación que estas modificando.");
            return;
        }

        //Verificar y obtener los ids de las imágenes que se van a asociar a la combinación.

        for(var i = 0; i < $(checkboxes_imagenes).size(); i++){
            var checkbox_tmp = $(checkboxes_imagenes)[i];
            if($(checkbox_tmp).is(":checked")){
                var id_imagen = $(checkbox_tmp).val();
                data.append("ids_imagenes_asociadas[]", id_imagen);
                //ids_imagenes_asociadas.push(id_imagen);
            }
            
        }

        for(var i = 0; i < $(atributos_selects).size(); i++){
            var select_tmp = $(atributos_selects)[i];
            if($(select_tmp).val() != 0){
                var id_valor = $(select_tmp).val();
                var id_atributo = $(select_tmp).attr("data-atributo");
                 data.append("ids_atributos_valores[]", id_atributo);
                  data.append("ids_atributos_valores[]", id_valor);
                //ids_atributos_valores.push(id_atributo);
                //ids_atributos_valores.push(id_valor);
            }
        }
        if(nombre_stock_llenos){
            data.append("operaciones", "modificar_combinacion");
            data.append("nombre_combinacion", nombre_combinacion);
            data.append("stock_combinacion", stock_combinacion);
            data.append("id_producto", <?php echo json_encode($id); ?>);
            data.append("id_combinacion", id_combinacion);
            data.append("status", status);

            $.ajax({
                async : false,
                type : "POST",
                dataType : "html",
                contentType : false,
                processData: false,
                url: "operaciones.php",
                data: data,
                success: function(data) {
                    //console.log(data);
                    if(data != "0"){
                        $("tr[id='"+id_combinacion+"'] td:first-child").text(nombre_combinacion);
                        $("tr[id='"+id_combinacion+"'] td:nth-child(2)").text(stock_combinacion);
                        $("input[name='nombre_combinacion']").val("");
                        $("input[name='stock_combinacion']").val("");
                        $("input[name='id_imagen[]']").prop('checked',false);
                        $("select[name='atributo']").prop('selectedIndex',0);
                        $("select[name='atributo']").selectpicker('refresh');
                        $("#boton_collapse").trigger( "click" );
                        $("#boton_combinacion").attr("onclick","agregarCombinacion()");
                        alert("Se ha modificador la combinacion.");
                        console.log(data);
                    }
                    else{
                        console.log(data);
                        alert("No se pudo guardar la combinación, intentalo de nuevo.");
                    }
                }
            }); 
        }
            
    }

    function eliminarCombinacion(id_combinacion){
        console.log(id_combinacion);
        var data = new FormData();
        data.append("operaciones", "eliminar_combinacion");
        data.append("id_combinacion", id_combinacion);
        if(confirm("¿Seguro que deseas eliminar la combinación?")){
             $.ajax({
                async : false,
                type : "POST",
                dataType : "html",
                contentType : false,
                processData: false,
                url: "operaciones.php",
                data: data,
                success: function(data) {
                    //console.log(data);
                    if((data.indexOf("true") > -1)){
                        $("#"+id_combinacion).remove();
                        alert("Se ha eliminado la combinacion.");
                        console.log(data);
                    }
                    else{
                        console.log(data);
                        alert("No se pudo eliminar la combinación, intentalo de nuevo.");
                    }
                }
            }); 
        }
    }

    function verCombinacion(id_combinacion){
        console.log(id_combinacion);
        var data = new FormData();
        data.append("operaciones", "obtener_combinacion_por_ajax");
        data.append("id_combinacion", id_combinacion);
        $.ajax({
            async : false,
            type : "POST",
            dataType : "html",
            contentType : false,
            processData: false,
            url: "operaciones.php",
            data: data,
            success: function(data) {
                //console.log(data);
                if((data != "0")){
                    data = JSON.parse(data);
                    console.log(data);
                    var nombre_combinacion = data[0].nombre;
                    $("input[name='nombre_combinacion']").val(nombre_combinacion);
                    var stock_combinacion = data[0].stock;
                    $("input[name='stock_combinacion']").val(stock_combinacion);
                    var atributos_valores = data[0].atributos_valores;
                    var ids_imagenes_asociadas = data[0].imagenes;
                    var status = data[0].status;
                    $("input[name='status']").val(status);

                    for(var i = 0; i < $(atributos_valores).size(); i++){
                        var atributo = atributos_valores[i];
                        var valor = atributos_valores[i + 1];
                        var option = $("select[data-atributo='"+atributo+"'] option[value='"+valor+"'] ").index();
                        $("select[data-atributo='"+atributo+"']").prop('selectedIndex',option);
                        $("select[data-atributo='"+atributo+"']").selectpicker('refresh');
                        i++;
                    }
                    for(var i = 0; i < $(ids_imagenes_asociadas).size(); i++){
                         var id_imagen = ids_imagenes_asociadas[i];
                         $("input[value='"+id_imagen+"']").prop('checked',true);
                    }

                    if(!$("#demo").hasClass("in")){
                        $("#boton_collapse").trigger("click");
                    }

                    $("#boton_combinacion").attr("onclick","modificarCombinacion("+data[0].id_combinacion+", "+data[0].status+")");

                }
                else{
                    console.log(data);
                    alert("No se pudo obtener la combinación, intentalo de nuevo.");
                }
            }
        }); 
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
            data:"id_combinacion="+id+"&operaciones=activar_combinacion",
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
            data:"id_combinacion="+id+"&operaciones=desactivar_combinacion",
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
