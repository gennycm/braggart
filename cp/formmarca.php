<?php
function __autoload($ClassName){
    include('clases/'.$ClassName.".php");
}

    $seguridad = new seguridad();
    $seguridad->candado();
    
if(isset($_REQUEST['id_marca'])){
    $id=$_REQUEST['id_marca'];
    $operacion='modificar_marca';
    $palabra='Editar Marca';
    $temporal = new marca($id);
    $temporal -> obtener_marca();
    if($temporal->img_principal != '')
        $img = '<img src="../imgMarcas/'.$temporal->img_principal.'" width="auto" height="221"/>';
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
}
else{
    $id=0;
    $operacion='agregar_marca';
    $palabra='Nueva Marca';
    $img='';
    $temporal = new marca($id);

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
$clave = 'ModMarca';
?>

<?php
include 'head.html';//contiene los estilos y los metas
?>
    <title>Formulario de la Marca</title>
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
                            <input type="hidden" name="id_marca" value="<?=$temporal->id_marca?>"/>        

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
                        </ul>

                         <div class="tab-content">
                            <div class="tab-pane active" id="info">
                                <div id="nombre" class="input-group espacios">
                                    <span class="input-group-addon es">Nombre de la marca*</span>
                                    <input type="text"  name="nombre" class="form-control" placeholder="Ingrese el nombre aquí..." value="<?=$temporal->nombre?>">
                                </div>
                                <span class="textHelper">Ingrese la descripción de la marca aquí:</span>
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
    $('#imgprin').tooltip(
    {
        placement: "top",
        title: "Campo Requerido. Agregue la imagen del logo de este transporte, solo se aceptan imágenes con formato .jpg, .png y .gif ."
    });
});
</script>


</html>
