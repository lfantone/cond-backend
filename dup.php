<?php 

$conn = mysql_connect('localhost','conduciendo_prod','m4sticoN1010');
mysql_select_db('conduciendo_prod', $conn);


$arrcount = mysql_fetch_array( mysql_query( 'select count(*) from modelo ' ) );
print "Cantidad ahora = ".$arrcount[0]."\n\n";


$r = mysql_query( 'select id_modelo, nombre, id_marca from modelo order by nombre, id_marca');
while ($row = mysql_fetch_assoc($r)) {
    $arr[$row['id_modelo']]['id_marca'] = $row["id_marca"];
    $arr[$row['id_modelo']]['nombre'] = $row["nombre"];
}

$arrDel = array();

foreach ($arr as $id_modelo => $arrInfo) {
  foreach ($arr as $id_modelo2 => $arrInfo2) {
    if ($arrInfo['id_marca'] == $arrInfo2['id_marca'] && $arrInfo['nombre'] == $arrInfo2['nombre']) {
      if ($id_modelo > $id_modelo2) {
       if (!in_array($id_modelo, $arrDel)) {
          array_push($arrDel, $id_modelo);
          print ($q = "delete from modelo where id_modelo = $id_modelo\n\n");
          mysql_query("delete from modelo where id_modelo = $id_modelo");
          print ("dejando $id_modelo2\n\n");
         }else{
          print "Ya borramos $id_modelo\n\n";
        }
      } elseif ($id_modelo2 > $id_modelo) {
        if (!in_array($id_modelo2, $arrDel)) {
          array_push($arrDel, $id_modelo2);
          print ($q = "delete from modelo where id_modelo = $id_modelo2\n\n");
          mysql_query( "delete from modelo where id_modelo = $id_modelo2");
          print ("dejando $id_modelo\n\n");
        }else{
          print "Ya borramos $id_modelo\n\n";
        }
      }
    }
  }
}

$arrcount = mysql_fetch_array( mysql_query( 'select count(*) from modelo ' ) );
print "Cantidad ahora = ".$arrcount[0]."\n\n";


