<?php
include("classes/mysql.php");

$database = new db_mysql();
$database->connect();

$comentarios_sql = "
  SELECT count(*) as cantidad FROM comentarios WHERE status IS NULL OR status = 0
";
$count_comentarios = $database->list_assoc($comentarios_sql);



?>
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script src="assets/scripts/Menu.js" type="text/javascript"></script>
<script type="text/javascript">
  if(window.Menu) Menu.init("menu");
</script>
<style type="text/css">
  /* reset default styles */
  #menu,
  #menu ul { margin: 0; padding: 0; height:40px;}
  #menu li { list-style-type: none; }

  /* first level */
  #menu li { border-left:1px solid #326A8B;
             border-right:1px solid #326A8B;}
  #menu li,
  #menu a { float: left; width: 92px; }
  #menu a { display: block; /*background: #EEE;*/ }
  #menu a:hover,
  #menu a.menu_open { background: #DDD; }

  /* second level and up */
  #menu ul { visibility: hidden; position: absolute; width: 100px; }
  #menu ul a { background: #DDD; }
  #menu ul a:hover,
  #menu ul a.menu_open { background: #CCC; }

  /* third level (colors) */
  #menu ul ul a { background: #CCC; }
  #menu ul ul a:hover { background: #BBB; }
</style>
<div class="top">
  <div class="inner">
    <div class="account"><span>Usuario: <?php echo $_SESSION["admin_nombre"]; ?> (<?php echo $_SESSION["admin_email"]; ?>)</span>&nbsp;<a href="/signout">cerrar sesi&oacute;n</a> </div>
    <img src="assets/images/logo.gif" /></div>
</div>
<div class="header">
  <div class="inner">
    <div class="navigation">
      <ul id="menu">
        <li>
          <a href="notas.php" <? if (in_array($current_script, array('/backend/notas.php', '/backend/notas_editar.php'))) {
  echo " class=\"active\"";
} ?> >Notas <span style="color:#DF013A;font-size: 9px">(<?=$count_comentarios[0]['cantidad']?>)</span></a>
          <ul>
            <li><a href="comentarios.php">Comentarios</a></li>
          </ul>
        </li>
        <li>
     <a href="javascript: void(0);">Multimedia</a>
          <ul>
      <li><a href="imagenes.php" <? if (in_array($current_script, array('/backend/imagenes.php', '/backend/imagenes_editar.php'))) { echo " class=\"active\"";} ?> >Imagenes</a></li>
          <li><a href="videos.php" <? if (in_array($current_script, array('/backend/videos.php', '/backend/videos_editar.php'))) {  echo " class=\"active\"";} ?> >Videos</a>
          <li><a href="wallpapers.php" <? if (in_array($current_script, array('/backend/wallpapers.php', '/backend/wallpapers_editar.php'))) {  echo " class=\"active\"";} ?> >Wallpapers</a></li>
          <li><a href="galeria.php" <? if (in_array($current_script, array('/backend/galeria.php'))) {  echo " class=\"active\"";} ?> >Galeria</a></li>
          </ul>
        </li>
        <li><a href="encuestas.php" <? if (in_array($current_script, array('/backend/encuestas.php', '/backend/encuestas_editar.php'))) {  echo " class=\"active\"";} ?> >Encuestas</a></li>
        <li><a href="marcas.php" <? if (in_array($current_script, array('/backend/marcas.php', '/backend/marcas_editar.php'))) {  echo " class=\"active\"";} ?> >Marcas</a></li>
<!--                <li><a href="modelo_list.php" <? if (in_array($current_script, array('/backend/marcas.php', '/backend/marcas_editar.php'))) {  echo " class=\"active\"";} ?> >Modelo</a></li>
        <li><a href="version_list.php" <? if (in_array($current_script, array('/backend/marcas.php', '/backend/marcas_editar.php'))) {  echo " class=\"active\"";} ?> >Version</a></li>-->
        <li><a href="tipos.php" <? if (in_array($current_script, array('/backend/tipos.php', '/backend/tipos_editar.php'))) {  echo " class=\"active\"";} ?> >Tipos</a></li>
        <li>
          <a href="javascript: void(0);"  >Fichas</a>
          <ul>
            <li>
              <a href="javascript: void(0);">Argentina</a>
              <ul>
                <li><a href="/backend/fichas_list.php?id_pais=2">Fichas</a></li>
                <li><a href="/backend/item_list.php?id_pais=2">Items</a></li>
                <li><a href="/backend/modelo_list.php?id_pais=2">Modelos</a></li>
                <li><a href="/backend/version_list.php?id_pais=2">Versiones</a></li>
                <li><a href="/backend/precios.php?id_pais=2">Precios</a></li>
                <li><a href="/backend/seguros.php?id_pais=2">Seguros</a></li>
              </ul>
            </li>
            <li>
              <a href="javascript: void(0);">Colombia</a>
              <ul>
                <li><a href="/backend/fichas_list.php?id_pais=6">Fichas</a></li>
                <li><a href="/backend/item_list.php?id_pais=6">Items</a></li>
                <li><a href="/backend/modelo_list.php?id_pais=6">Modelos</a></li>
                <li><a href="/backend/version_list.php?id_pais=6">Versiones</a></li>
                <li><a href="/backend/precios.php?id_pais=6">Precios</a></li>
                <li><a href="/backend/seguros.php?id_pais=6">Seguros</a></li>
              </ul>
            </li>
            <li>
              <a href="javascript: void(0);">Mexico</a>
              <ul>
                <li><a href="/backend/fichas_list.php?id_pais=3">Fichas</a></li>
                <li><a href="/backend/item_list.php?id_pais=3">Items</a></li>
                <li><a href="/backend/modelo_list.php?id_pais=3">Modelos</a></li>
                <li><a href="/backend/version_list.php?id_pais=3">Versiones</a></li>
                <li><a href="/backend/precios.php?id_pais=3">Precios</a></li>
                <li><a href="/backend/seguros.php?id_pais=3">Seguros</a></li>
              </ul>

            </li>
            <li>
              <a href="/backend/backup_db.php">Descargar Db</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="servicios.php"  >Servicios</a>
          <ul>
            <li><a href="tareas.php">Tareas</a></li>
            <li><a href="kilometros.php">Kil&oacute;metros</a></li>
          </ul>
        </li>

        <!-- <li><a href="item_list.php" <? if (in_array($current_script, array('/backend/item_list.php'))) {  echo " class=\"active\"";} ?> >Items</a></li> -->
        <li>
          <a href="archivos_xml.php" <? if (in_array($current_script, array('/backend/archivos_xml.php', '/backend/archivos_xml_editar.php'))) {  echo " class=\"active\"";} ?> >XML</a>
        </li>
        <?php if ($_SESSION['admin_superadmin']) { ?>
        <li>
          <a href="autores_list.php" <? if (in_array($current_script, array('/backend/autores_list.php'))) {    echo " class=\"active\"";  } ?> >Autores</a>
        </li>
        <?php } ?>
        <!-- <li><a href="precios.php" <? if (in_array($current_script, array('/backend/precios.php'))) {  echo " class=\"active\"";} ?> >Precios</a></li> -->
        <li>
          <a href="magazine_notas.php" <? if (in_array($current_script, array('/backend/magazine_notas.php', '/backend/magazine_notas_editar.php'))) {  echo " class=\"active\"";} ?> >Vida Metro</a>
        </li>
        <li>
          <a href="/backend/newslettertools.php" <? if (in_array($current_script, array('/backend/newslettertools.php'))) {  echo " class=\"active\"";} ?> >Newsletter</a>
        </li>
        <li>
          <a href="/banner" <? if (in_array($current_script, array('/redirect.php'))) {  echo " class=\"active\"";} ?> >Banners</a>
        </li>
      </ul>
    </div>
  </div>
</div>
