<?php
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

$notas_a_reparar_sql = "
	SELECT * FROM `notas` where contenido_rtf is not null and (contenido like '%<%' or contenido like '%&%') and char_length(contenido_rtf)>0 order by fecha_creada desc
";

function strip_content($contenido){
		$contenido=preg_replace("/<\/p>/","\n",$contenido);
		$contenido=preg_replace("/<[^>]+>/", "",$contenido);
		$contenido=preg_replace("/&nbsp;\r?\n/","\n",$contenido);
		$contenido=preg_replace("/&nbsp;\r?\n$/","\n",$contenido);
		$contenido=preg_replace("/&ntilde;/","ñ",$contenido);
		$contenido=preg_replace("/&Ntilde;/","Ñ",$contenido);
		$contenido=preg_replace("/&aacute;/","á",$contenido);
		$contenido=preg_replace("/&Aacute;/","Á",$contenido);
		$contenido=preg_replace("/&eacute;/","é",$contenido);
		$contenido=preg_replace("/&Eacute;/","É",$contenido);
		$contenido=preg_replace("/&iacute;/","í",$contenido);
		$contenido=preg_replace("/&Iacute;/","Í",$contenido);
		$contenido=preg_replace("/&oacute;/","ó",$contenido);
		$contenido=preg_replace("/&Oacute;/","Ó",$contenido);
		$contenido=preg_replace("/&uacute;/","ú",$contenido);
		$contenido=preg_replace("/&Uacute;/","Ú",$contenido);
		$contenido=preg_replace("/&ldquo;/","\"",$contenido);
		$contenido=preg_replace("/&lt;/","<",$contenido);
		$contenido=preg_replace("/&gt;/",">",$contenido);
		$contenido=preg_replace("/&amp;/","&",$contenido);
		$contenido=strip_tags($contenido);
		$contenido=html_entity_decode($contenido);
		return $contenido;
}
$notas_a_reparar = $database->list_assoc($notas_a_reparar_sql);
print "Cantidad de Notas a reparar:".count($notas_a_reparar)."<br>\n<br>\n";
if(count($notas_a_reparar)){
	foreach($notas_a_reparar as $nota){
		$id=$nota["id"];
		$contenido=strip_content($nota["contenido_rtf"]);
		print "<hr></hr><br>\n";
		print "NotaId:".$id."<br>\n";
		print "<pre>".$nota["contenido"]."</pre>\n<br>";
		print "=><br>\n";
		print "<pre>$contenido</pre>\n<br>";
		if($_GET["update"]=="yes") $actualizar_nota = $database->update("notas","contenido = '$contenido'", "id = $id");
	}
}
