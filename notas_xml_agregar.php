<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

$id_archivo = $_POST['id_archivo'];

if ($_POST['id_empresa']) {
  $id_empresa = $_POST['id_empresa'];
  switch ($_POST['pais']) {
    case 1:
      $pais = 'INT';
    break;
    case 2:
      $pais = 'ARG';
    break;
    case 3:
      $pais = 'MEX';
    break;
    case 4:
      $pais = 'EEUU';
    break;
    case 5:
      $pais = 'CHI';
    break;
  }
  $cargar_archivo_xml = $database->insert("archivos_xml","id_empresa = $id_empresa, fecha = NOW(), estado = 2");
  $id = $database->insert_id();
  switch ($id_empresa) {
    case 2:
      $nombre = 'ML_'.$pais.'_'.date('Ymd').sprintf('%06d', $id);
    break;
    case 1:
    default:
      $nombre = 'NOTA'.$pais.'_'.date('Ymd').sprintf('%06d',$id);
    break;
  }
  #$nombre = 'NOTA'.$pais.'_'.date('Ymd').sprintf('%06d',$id);
  $database->update("archivos_xml", "nombre = '$nombre'", "id = $id");
  if (isset($_POST['id_nota']) && is_array($_POST['id_nota'])) {
    foreach($_POST['id_nota'] as $nota){
      $buscar = $database->list_assoc("SELECT * FROM notas_archivos WHERE notas_archivos.id_nota = $nota AND notas_archivos.id_archivo = ".$id);
      if(!$buscar){
        $database->insert("notas_archivos","id_nota = $nota, id_archivo = ".$id);
      }
    }
  } elseif (!isset($_POST['id_nota']) && isset($id_empresa)) {
    print ('<script type="text/Javascript">alert("Se debe elegir al menos una nota"); window.location="http://conduciendo.com/backend/notas.php"</script>');
    exit;
  }
  //var_dump($_POST);
  //var_dump($nombre);
  //var_dump($id);
  header('Location: /backend/archivos_xml_generar.php?id='.$id.'&target='.$id_empresa.'&pais_id='.$_POST['pais']);
  exit;
} elseif($_POST['id_nota']){
  foreach($_POST['id_nota'] as $nota){
    $buscar = $database->list_assoc("SELECT * FROM notas_archivos WHERE notas_archivos.id_nota = $nota AND notas_archivos.id_archivo = $id_archivo");
    if(!$buscar){
      $database->insert("notas_archivos","id_nota = $nota, id_archivo = $id_archivo");
    }
  }
}
header("Location: $referer");
?>
