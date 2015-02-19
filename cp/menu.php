
<!--wrapper es el que contiene a toda la pagina-->
    <div id="wrapper" class="wrapper-movil">
        <!-- Sidebar Seccion del menu -->
        <?php $page = basename($_SERVER["SCRIPT_FILENAME"]);?>
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">               
                <li <?php if ($page == "listslide.php" or $page == "formslide.php"){ echo "class='active'";} ?>><a href="listslide.php">Slider</a>
                </li>
                <hr class="hrmenu">
                <li <?php if ($page =="listproducto.php"  or $page == "formproducto.php"){ echo "class='active'";} ?>><a href="listproducto.php">Productos</a>
                </li>
                <hr class="hrmenu">
                <li <?php if ($page =="listmarca.php"  or $page == "formmarca.php"){ echo "class='active'";} ?>><a href="listmarca.php">Marcas</a>
                </li>
                 <hr class="hrmenu">
                <li <?php if ($page =="listatributo.php"  or $page == "formatributo.php"){ echo "class='active'";} ?>><a href="listatributo.php">Atributos y Valores</a>
                </li>
                <hr class="hrmenu">
                <li <?php if ($page == "listimpuesto.php" or $page == "formimpuesto.php"){ echo "class='active'";} ?>><a href="listimpuesto.php">Impuestos</a>
                </li>
                <hr class="hrmenu">
                <li <?php if ($page == "listtransporte.php" or $page == "formtransporte.php"){ echo "class='active'";} ?>><a href="listtransporte.php">Transportes</a>
                </li>
                <hr class="hrmenu">
                <li <?php if ( $page == "listOrden.php" or $page == "formOrden.php"){ echo "class='active'";} ?>><a href="listOrden.php">Ventas</a>
                </li>
                <hr class="hrmenu">
            </ul>
        </div>
