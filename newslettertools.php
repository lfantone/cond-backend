<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");
require_once 'classes/MCAPI/MCAPI.class.php';
require_once 'classes/MCAPI/config.inc.php'; //contains apikey

$database = new db_mysql();
$database->connect();

$mode = $_REQUEST['mode'];
$pagina = $_REQUEST['pagina'];
$action=$_REQUEST["action"];

if($_POST){
	//$cargar_nota = $database->update("notas","titulo = '$titulo', subtitulo = '$subtitulo', copete = '$copete', contenido = '$contenido', contenido_rtf='$contenido_rtf', estado = $estado, fecha_a_publicar = '$fecha_a_publicar', fecha_publicada = NOW()", "id = $id");
	//$database->insert("notas_videos","id_video = $video, id_nota = $id");
}
switch($mode){
	case "envios":
		function getMailDir($mail){
			if(strstr($mail,"<")){
				return preg_replace("/.*?<([^>]+)>.*?/","$1",$mail);
			}else{
				return $mail;
			}
		}
		function getMailName($mail){
			if(strstr($mail,"<")){
				return preg_replace("/(.*?)<([^>]+)>(.*?)/","$1$3",$mail);
			}else{
				return "";
			}
		}
		$ok=$_REQUEST["ok"];
		$modedesc="/ Realizar Envío";
		$mailfrom=$_REQUEST["mailfrom"];
		$mailreply=$_REQUEST["mailreply"];
		$mailsubject=$_REQUEST["mailsubject"];
		$mailbcc=""; //despues poner info@conduciendo.com
		if($ok){
			$filehtml_error=$_FILES["filehtml"]["error"];
			$fallo_mensaje="";
			if(!$mailsubject){
				$fallo_mensaje.="El 'Subject' es obligatorio.<br/>\n";
			}
			if(!$mailfrom){
				$fallo_mensaje.="El 'From' es obligatorio.<br/>\n";
			}
			if(!$mailreply){
				$fallo_mensaje.="El 'Reply' es obligatorio.<br/>\n";
			}
			if(!$filehtml_error){
				$filehtml_name=$_FILES["filehtml"]["name"];
				$filehtml_type=$_FILES["filehtml"]["type"];
				$filehtml_size=$_FILES["filehtml"]["size"];
				if(preg_match("/\.html?$/i",$filehtml_name)){
					if(file_exists($_FILES["filehtml"]["tmp_name"])){
						$filehtml_path=$_FILES["filehtml"]["tmp_name"];
					}
				}else{
					$fallo_mensaje.="Archivo .html con extension inválida.<br/>\n";
				}
			}else{
				$fallo_mensaje.="Ha ocurrido un error al recibir el Archivo '.html' ($filehtml_error).<br/>\n";
			}
			if($filehtml_path){
				$mailhtml=implode("",file($filehtml_path));
				$mailhtml=str_replace("{@campaign}","default".date("dmY",time()),$mailhtml);
				$mailtxt=strip_tags($mailhtml);
				$mime_boundary = "----RCBasicSender----".md5(time());

				$contador_ok=0;
				$contador_fallido=0;
   				require_once('classes/phpmailer/class.phpmailer.php');
				if($mailbcc){
					try{
						$mail = new PHPMailer(true);
						$mail->SetFrom(getMailDir($mailfrom),getMailName($mailfrom));
						$mail->AddAddress(getMailDir($mailbcc),getMailName($mailbcc));
						$mail->AddReplyTo(getMailDir($mailreply),getMailName($mailreply));
						$mail->Subject = $mailsubject;
						$mail->MsgHTML(str_replace("{@email}",getMailDir($mailbcc),$mailhtml));
						//$mail->AltBody= str_replace("{@email}",getMailDir($mailbcc),$mailtxt);
						$mail->WordWrap = 50;
						$mail->Send();
					}catch(phpmailerException $pe){

					}catch(Exception $e){

					}
				}

				/*
				 * Envio html mailchimp
				 */
				$api = new MCAPI($apikey);

				$type = 'regular';

				$opts['list_id'] = $listId;
				$opts['subject'] = $mailsubject;
				$opts['from_email'] = getMailDir($mailfrom); 
				$opts['from_name'] = getMailName($mailfrom);
				$opts['auto_footer'] = false; 

				$opts['tracking']=array('opens' => true, 'html_clicks' => true, 'text_clicks' => false);

				$opts['authenticate'] = true;
				//$opts['analytics'] = array('google'=>'my_google_analytics_key');
				$opts['title'] = $mailsubject;

				$content = array('html'=>$mailhtml);

				$campaignId = $api->campaignCreate($type, $opts, $content);

				if ($api->errorCode){
					$mc_send_success = 0;
					$mc_error_code = $api->errorCode;
					$mc_error_message = $api->errorMessage;
				} else {
					$mc_send_success = 1;
					$mc_campaign_id =  $campaignId;
					
					// ENVIAR YA!
					$retval = $api->campaignSendNow($campaignId);

					if ($api->errorCode){
						$mc_send_success = 0;
						$mc_error_code = $api->errorCode;
						$mc_error_message = $api->errorMessage;
					} 
				}

			}else{
				$fallo_mensaje="Ha ocurrido un error al procesar los archivos: [<br/>\n$fallo_mensaje<br/>\n]";
			}
		}
	break;
	case "html":
		if(!$pagina){
			$pagina = 1;
		}
		$keyword=$_REQUEST["keyword"];
		$notascount_sql = "
			SELECT count(id) cantidad
			FROM notas
			WHERE estado = 3
			  AND titulo LIKE '%$keyword%'
		";
		$notascount = $database->row_assoc($notascount_sql);
		$cantidad=$notascount ["cantidad"];
		$modedesc="/ Pieza Html (&asymp; $cantidad notas disponibles)";
		$cantidadporpagina=10;
		$paginas = round($cantidad/$cantidadporpagina);
		$extremo_izquierdo = $pagina-5;
		if($extremo_izquierdo<5){
			$extremo_izquierdo = 1;
		}
		$extremo_derecho = $pagina+5;
		if($extremo_derecho>$paginas){
			$extremo_derecho = $paginas;
		}
		if(!$pagina or ($pagina>$paginas or $pagina<0)){
			$desde = 0;
		} else {
			$desde = ($pagina-1)*$cantidadporpagina;
		}
		$notas_sql="SELECT notas.fecha_publicada,notas.id, notas.titulo, estados.nombre estado FROM notas INNER JOIN estados ON estados.id = notas.estado WHERE notas.titulo LIKE '%$keyword%' AND notas.estado = 3 ORDER BY notas.id DESC LIMIT $desde,$cantidadporpagina";
		$notas = $database->list_assoc($notas_sql);
		$notasmultiple_sql="SELECT notas.fecha_publicada,notas.id, notas.titulo, estados.nombre estado FROM notas INNER JOIN estados ON estados.id = notas.estado WHERE notas.titulo LIKE '%$keyword%' AND notas.estado = 3 ORDER BY notas.id DESC LIMIT 0,200";
		$notasmultiple=$database->list_assoc($notasmultiple_sql);
	break;
	case "aperturas":
		$campaign=$_REQUEST["campaign"];
		if($campaign){
			if(!$pagina){
				$pagina = 1;
			}
			$mailsbasecount_sql = "
				SELECT count(DISTINCT email) cantidad
				FROM newsletter_aperturas
				WHERE email like '%@%'
				  AND campaign='$campaign'
			";
			$mailsbasecount = $database->row_assoc($mailsbasecount_sql);
			$cantidad=$mailsbasecount["cantidad"];
			$modedesc="/ Seguimiento (envío $campaign &asymp; $cantidad emails abiertos)";
			$cantidadporpagina=20;
			if($action=="download"){
				$cantidadporpagina=$cantidad+100;
			}
			$paginas = round($cantidad/$cantidadporpagina);
			$extremo_izquierdo = $pagina-5;
			if($extremo_izquierdo<5){
				$extremo_izquierdo = 1;
			}
			$extremo_derecho = $pagina+5;
			if($extremo_derecho>$paginas){
				$extremo_derecho = $paginas;
			}
			if(!$pagina or ($pagina>$paginas or $pagina<0)){
				$desde = 0;
			} else {
				$desde = ($pagina-1)*$cantidadporpagina;
			}
			//$nota = $database->row_assoc("SELECT * FROM notas WHERE id = $id");
			//$imagenes_relacionadas = $database->list_assoc("SELECT notas_imagenes.id id_relacion, notas_imagenes.id_imagen, imagenes.titulo, notas_imagenes.predeterminada FROM notas_imagenes INNER JOIN imagenes ON imagenes.id = notas_imagenes.id_imagen AND imagenes.estado = 3 AND notas_imagenes.id_nota = $id");


			$mailsbase_sql = "
				SELECT email,min(fecha) fecha
				FROM newsletter_aperturas
				WHERE email like '%@%'
				  AND campaign='$campaign'
				GROUP BY email
				ORDER BY email ASC
				LIMIT $desde,$cantidadporpagina
			";

			$mailsbase = $database->list_assoc($mailsbase_sql);
			if($action=="download"){
				$fecha=date("dmY",time());
				header('Content-type: text/csv');
				header('Content-Disposition: attachment; filename="Conduciendo_Aperturas_'.preg_replace("/[^a-zA-Z0-9_-]/","",$campaign)."_".$fecha.'.csv"');
				if($mailsbase){
					foreach($mailsbase as $mail){
						print $mail["email"]."\n";
						ob_flush();
						flush();
					}
				}
				exit(1);
			}
		}else{
			$mailscampaign_sql = "
				SELECT campaign,min(fecha) fecha,min(fecha) fecha_min,max(fecha) fecha_max,count(distinct email) cantidad_aperturas
				FROM newsletter_aperturas
				WHERE email like '%@%'
				GROUP BY campaign
				ORDER BY campaign ASC
			";
			$mailscampaign = $database->list_assoc($mailscampaign_sql);
			$cantidad=count($mailscampaign);
			$modedesc="/ Seguimiento ( &asymp; $cantidad envíos)";
		}
	break;
	case "bases":
		$reenvio=$_REQUEST["reenvio"];
		if(!$pagina){
			$pagina = 1;
		}
		$mailsbasecount_sql = "
			SELECT count(DISTINCT email) cantidad
			FROM newsletter
			WHERE email like '%@%'
			  AND estado=0
		".
		(($reenvio)?" AND last_campaign is not null":"").
		"";
		$mailsbasecount = $database->row_assoc($mailsbasecount_sql);
		$cantidad=$mailsbasecount["cantidad"];
		$modedesc="/ Listado de emails (&asymp; $cantidad direcciones de emails)";
		$cantidadporpagina=20;
		if($action=="download"){
			$cantidadporpagina=$cantidad+100;
		}
		$paginas = round($cantidad/$cantidadporpagina);
		$extremo_izquierdo = $pagina-5;
		if($extremo_izquierdo<5){
			$extremo_izquierdo = 1;
		}
		$extremo_derecho = $pagina+5;
		if($extremo_derecho>$paginas){
			$extremo_derecho = $paginas;
		}
		if(!$pagina or ($pagina>$paginas or $pagina<0)){
			$desde = 0;
		} else {
			$desde = ($pagina-1)*$cantidadporpagina;
		}
		//$nota = $database->row_assoc("SELECT * FROM notas WHERE id = $id");
		//$imagenes_relacionadas = $database->list_assoc("SELECT notas_imagenes.id id_relacion, notas_imagenes.id_imagen, imagenes.titulo, notas_imagenes.predeterminada FROM notas_imagenes INNER JOIN imagenes ON imagenes.id = notas_imagenes.id_imagen AND imagenes.estado = 3 AND notas_imagenes.id_nota = $id");


		$mailsbase_sql = "
			SELECT email,min(fecha) fecha,min(last_campaignfecha) last_campaignfecha,min(last_campaign) last_campaign
			FROM newsletter
			WHERE email like '%@%'
			  AND estado=0 ".
		(($reenvio)?" AND last_campaign is not null":"").
		"
			GROUP BY email
			ORDER BY email ASC
			LIMIT $desde,$cantidadporpagina
		";

		$mailsbase = $database->list_assoc($mailsbase_sql);
		if($action=="download"){
			$fecha=date("dmY",time());
			header('Content-type: text/csv');
			if($reenvio){
			header('Content-Disposition: attachment; filename="Conduciendo_Base_Reenvio_'.$fecha.'.csv"');
			}else{
			header('Content-Disposition: attachment; filename="Conduciendo_Base_'.$fecha.'.csv"');
			}
			if($mailsbase){
				foreach($mailsbase as $mail){
					if($reenvio){
						print $mail["email"].";".$mail["last_campaign"].";".$mail["last_campaignfecha"]."\n";
					}else{
						print $mail["email"]."\n";
					}
					ob_flush();
					flush();
				}
			}
			exit(1);
		}

	break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>conduciendo - Newsletter</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<style type="text/css">@import url(assets/scripts/calendar/calendar-win2k-1.css);</style>
<script type="text/javascript" src="/assets/scripts/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript" src="assets/scripts/calendar/calendar.js"></script>
<script type="text/javascript" src="assets/scripts/calendar/lang/calendar-en.js"></script>
<script type="text/javascript" src="assets/scripts/calendar/calendar-setup.js"></script>
<script language="javascript" type="text/javascript" src="assets/scripts/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
function newsletter_basesdownload(){
	window.location="/backend/newslettertools.php?mode=bases";
}
function html_download(download){
	var modelohtml=jQuery("#modelohtml").val();
	var campaign=jQuery("#campaign").val();
	var idnota=jQuery("input:checked").val();
	var url="/"+modelohtml+"?campaign="+campaign;
	if(idnota){
		url+="&id_nota="+idnota;
	}
	jQuery("#ids_notas :selected").each(function(){
		url+="&ids_notas[]="+jQuery(this).val();
	});
	if(download){
		url+="&action=download";
		window.location=url;
	}
	else {
		window.open(url, 'conduciendo - Previsualizacion Newsletter');
	}
}
function html_pagina(i){
	var url="/backend/newslettertools.php?mode=html&pagina="+i;
	var modelohtml=jQuery("#modelohtml").val();
	var campaign=jQuery("#campaign").val();
	if(campaign) url+="&campaign="+campaign;
	if(modelohtml) url+="&modelohtml="+modelohtml;
	window.location=url;
}
function templateCheckAttrib(el){
	if(!el) return;
	switch(jQuery(el.options[el.selectedIndex]).attr("nota")){
		case "none":
			jQuery(".nota-one").hide();
			jQuery(".nota-multiple").hide();
			jQuery("input:checked").removeAttr("checked");
		break;
		case "one":
			jQuery(".nota-one").show();
			jQuery(".nota-multiple").hide();
			jQuery(".field-idnota").first().attr("checked","checked");
		break;
		case "multiple":
			jQuery(".nota-one").show();
			jQuery(".nota-multiple").show();
			jQuery(".field-idnota").first().attr("checked","checked");
		break;
	}

}
jQuery(document).ready(function (){
	templateCheckAttrib(jQuery("#modelohtml")[0]);
});
function aperturas_seleccionar(){
	var url="/backend/newslettertools.php?mode=aperturas";
	var campaign=jQuery("#campaign").val();
	if(campaign){
		url+="&campaign="+campaign;
		window.location=url;
	}
}
function regresar_envios(){
	window.location="/backend/newslettertools.php?mode=envios&mailsubject=<?=$_REQUEST["mailsubject"];?>&mailfrom=<?=$_REQUEST["mailfrom"];?>&mailreply=<?=$_REQUEST["mailreply"];?>";
}
</script>
</head>
<body>
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1>Newsletter <?=$modedesc;?></h1>
		<div class="options" style="height:25px">
			<div style="float:left">
			<ul>
				<li><a href="/backend/newslettertools.php?mode=html" class="button" title="Generar y Exportar Pieza Html"><img width="21" src="/backend/assets/images/newsletter_step1.gif" border="0" align="ABSMIDDLE"/>&nbsp;<span style="<?=($mode=="html"?"text-decoration: underline;":"");?>">Pieza Html</span></a></li>
				<li><a href="/backend/newslettertools.php?mode=envios" class="button" title="Enviar newsletter con sistema externo o realizar pequeños envíos con sistema interno"><img width="21"  src="/backend/assets/images/newsletter_step2.gif" border="0" align="ABSMIDDLE"/>&nbsp;<span style="<?=($mode=="envios"?"text-decoration: underline;":"");?>">Realizar Envío</span></a></li>
				<!-- li><a href="/backend/newslettertools.php?mode=aperturas" class="button" title="Consultar y  Exportar el seguimiento de Aperturas de emails"><img width="21" src="/backend/assets/images/newsletter_step4.gif" border="0" align="ABSMIDDLE"/>&nbsp;<span style="<?=($mode=="aperturas"?"text-decoration: underline;":"");?>">Seguimiento</span></a></li -->
			</ul>
			</div>
			
			<div style="float:right">
			<a href="/backend/newslettertools.php?mode=bases" class="button" title="Consultar y Exportar Bases de emails"><img width="21"  src="/backend/assets/images/newsletter_bases.gif" border="0" align="ABSMIDDLE"/>&nbsp;<span style="<?=($mode=="bases"?"text-decoration: underline;":"");?>">Listado de Emails</span></a>
			</div>
			
		</div>

		<div class="options" id="newsletterAyuda">
			<?switch($mode){
				case "html":?>
				<p>Desde esta opción usted puede generar y descargar con diferentes plantillas la pieza "html" del newsletter.</p>
				<p>La pieza "html" del newsletter puede ser enviada desde el sistema de envíos interno, o desde un sistema de enviós externo.
				   En caso de utilizar un sistema externo, por favor recuerde que dentro de la pieza "html" descargarda, existe un metatag <b>"*|UNSUB|*"</b> que debera ser reemplazado por el sistema externo con la url para desuscripcion.</p>
				<p>El objetivo de la existencia de un metatag "*|UNSUB|*" dentro de la pieza "html", es permitir el correcto formato de envio para permitir desuscripcion y que el mail no sea considerado SPAM.</p>
				<?break;?>
				<?case "bases":?>
				<p>Desde esta opción usted puede consultar y descargar el listado de direcciones de emails que se han suscripto al newsletter del site.</p>
				<?break;?>
				<?case "envios":?>
				<img src="/backend/assets/images/Connected-Logo-Freddie_Light-Background.png" border="0" align="left"/>
				<p>Desde esta opción usted puede realizar el envio del newsletter utilizando el sistema Mailchimp de enviós de mails, para esto debe utilizar una pieza ".html" previamente generada.</p><br/><br/><br/><br/><br/><br/><br/><br/>
				<?break;?>
				<?case "aperturas":?>
				<p>Desde esta opción usted puede consultar y descargar el listado de direcciones de emails que han abierto la pieza ".html" envíada.</p>
				<p>Solo se podra consultar o descargar de aquellas piezas en las cuales al menos exista un destinatario que haya abierto la pieza ".html".</p>
				<p>Recuerde que para que el sistema detecte la apertura de la pieza el destinatario debe abrir la pieza ".html" con permiso de "ver imagenes" y/o hacer click en cualquiera de los vínculos incluidos en la pieza ".html".</p>
				<?break;?>
				<?default:?>
				<p>Seleccione una opcion o paso para comenzar.</p>
				<?break;?>
			<?}?>
		</div>

	</div>
	<?if($mode=="html"){?>
	<div class="grid" style="margin:0 auto 0 auto; width:700px;text-align:center;">
		<table width="100%" border="0" cellspacing="0" cellpadding="6">
			<tr><th colspan="4">Configuración</th></tr>
			<tr>
				<td colspan="2">
					Plantilla del Html:
				</td>
				<td colspan="2">
					<select name="modelohtml" id="modelohtml" onchange="templateCheckAttrib(this);">
						<option value="newsletter_modeloautomatico.php" nota="none" <?=(($_REQUEST["modelohtml"]=="newsletter_modeloautomatico.php")?"selected='selected'":"");?>>Modelo 'Newsletter Automatico'</option>
						<option value="newsletter_modelonotadestacada.php" nota="one" <?=(($_REQUEST["modelohtml"]=="newsletter_modelonotadestacada.php")?"selected='selected'":"");?>>Modelo 'Newsletter Nota destacada'</option>
						<option value="newsletter_modelonotasdestacadasfull.php" nota="multiple" min="1" max="5" <?=(($_REQUEST["modelohtml"]=="newsletter_modelonotasdestacadasfull.php")?"selected='selected'":"");?>>Modelo 'Newsletter Nota destacada + Relacionadas'</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					Nombre de Campaña:
				</td>
				<td colspan="2">
					<input type="text" name="campaign" id="campaign" value="<?=(($_REQUEST["campaign"])?$_REQUEST["campaign"]:"default".date("dmY",time()));?>"/>
				</td>
			</tr>
			<tr class="nota-one"><th colspan="4">Seleccione la nota que desea relacionar al newsletter</th></tr>
			<tr class="nota-one">
				<td width="5%">&nbsp;</th>
				<td width="60%"><b>Titulo</b></th>
				<td width="30%"><b>Fecha</b></th>
				<td width="5%">&nbsp;</th>
			</tr>

			<? if($notas){ ?>
				<? $i=0;foreach($notas as $nota){ ?>
				<tr class="nota-one">
					<td><input class="field-idnota" name="id_nota" type="radio" id="id_nota" value="<?=$nota['id'];?>" <?=($i?"":"checked='checked'");?>/></td>
					<td><?=$nota["titulo"];?></td>
					<td><span title="<?=$nota["fecha_publicada"];?>"><?=$nota['estado'];?></span></td>
					<td>&nbsp;</td>
				</tr>
				<?$i++;}?>
				<tr class="nota-one">
					<td colspan="4" align="center">
						<div class="paginate">
							<a href="javascript:html_pagina(1);void('');">primera p&aacute;gina</a>
							<? for($i=$extremo_izquierdo;$i<=$extremo_derecho;$i++){?>
								<? if($pagina==$i){ ?>
									<a class="active" href="javascript:html_pagina(<?=$i;?>);void('');"><?=$i;?></a>
								<? } else { ?>
									<a href="javascript:html_pagina(<?=$i;?>);void('');"><?=$i;?></a>
								<? } ?>
							<? } ?>
							<a href="javascript:html_pagina(<?=$paginas;?>);void('');">ultima p&aacute;gina</a>
						</div>
					</td>
				</tr>
			<?}?>
			<tr class="nota-multiple"><th colspan="4">Seleccione las notas que desea destacar como relacionadas en el newsletter manteniendo CTRL presionado </th></tr>
			<?if($notasmultiple){?>
			<tr class="nota-multiple"><td colspan="4"><select name="ids_notas" id="ids_notas" multiple="multiple">
				<? $i=0;foreach($notasmultiple as $nota){ ?>
				<option value="<?=$nota['id'];?>">(<?=$nota['id'];?>)-<?=$nota["titulo"];?> [<?=$nota['estado'];?>]</option>
				<?$i++;}?>
			</select></td></tr>
			<?}?>
			<tr>
				<td colspan="4">&nbsp;</td>
			</tr>
			<tr><td colspan="4" style="text-align: center;">
				<button onclick="html_download(0);" style="width:300px;background-color:#356B91;font-weight: bold;color: #FFFFFF;border:1px medium;cursor:pointer;">Previsualizar Html</button>
				<button onclick="html_download(1);" style="width:300px;background-color:#356B91;font-weight: bold;color: #FFFFFF;border:1px medium;cursor:pointer;">Descargar Html</button>
				</td>
			</tr>
		</table>
		<br/>
		<br/>
	</div>
	<br/>
	<?}?>
	<?if($mode=="bases"){?>
	<div class="grid" style="margin:0 auto 0 auto; width:700px;text-align:center;">
		<table width="100%" border="0" cellspacing="0" cellpadding="6">
			<tr>
				<th width="5%"><a href="/backend/newslettertools.php?mode=bases&reenvio=<?=$reenvio;?>&action=download" title="Descargar listado completo en CSV"><img src="/backend/assets/images/excel.gif" width="20" height="23" border="0" /></a></th>
				<th width="60%">Email</th>
				<th width="30%">Fecha de Alta</th>
				<th width="5%">&nbsp;</th>
			</tr>
			<? if($mailsbase){ ?>
				<? foreach($mailsbase as $mail){ ?>
				<tr>
					<td>&nbsp;</td>
					<td><?=$mail["email"];?></td>
					<td><?=$mail["fecha"];?></td>
					<td>&nbsp;</td>
				</tr>
				<?}?>
				<tr>
					<td colspan="4" align="center">
						<div class="paginate">
							<a href="/backend/newslettertools.php?mode=bases&reenvio=<?=$reenvio;?>&pagina=1">primera p&aacute;gina</a>
							<? for($i=$extremo_izquierdo;$i<=$extremo_derecho;$i++){?>
								<? if($pagina==$i){ ?>
									<a class="active" href="/backend/newslettertools.php?mode=bases&reenvio=<?=$reenvio;?>&pagina=<?=$i;?>"><?=$i;?></a>
								<? } else { ?>
									<a href="/backend/newslettertools.php?mode=bases&reenvio=<?=$reenvio;?>&pagina=<?=$i;?>"><?=$i;?></a>
								<? } ?>
							<? } ?>
							<a href="/backend/newslettertools.php?mode=bases&reenvio=<?=$reenvio;?>&pagina=<?=$paginas;?>">ultima p&aacute;gina</a>
						</div>
					</td>
				</tr>
			<?}?>
		</table>
	</div>
	<?}?>
	<?if($mode=="aperturas"&&$campaign){?>
	<div class="grid" style="margin:0 auto 0 auto; width:700px;text-align:center;">
		<table width="100%" border="0" cellspacing="0" cellpadding="6">
			<tr>
				<th width="5%"><a href="/backend/newslettertools.php?mode=aperturas&campaign=<?=$campaign;?>&action=download" title="Descargar listado completo en CSV"><img src="/backend/assets/images/excel.gif" width="20" height="23" border="0" /></a></th>
				<th width="60%">Email</th>
				<th width="30%">Fecha de Alta</th>
				<th width="5%">&nbsp;</th>
			</tr>
			<? if($mailsbase){ ?>
				<? foreach($mailsbase as $mail){ ?>
				<tr>
					<td>&nbsp;</td>
					<td><?=$mail["email"];?></td>
					<td><?=$mail["fecha"];?></td>
					<td>&nbsp;</td>
				</tr>
				<?}?>
				<tr>
					<td colspan="4" align="center">
						<div class="paginate">
							<a href="/backend/newslettertools.php?mode=aperturas">seleccionar otro envío</a>
							<a href="/backend/newslettertools.php?mode=aperturas&campaign=<?=$campaign;?>&pagina=1">primera p&aacute;gina</a>
							<? for($i=$extremo_izquierdo;$i<=$extremo_derecho;$i++){?>
								<? if($pagina==$i){ ?>
									<a class="active" href="/backend/newslettertools.php?mode=aperturas&campaign=<?=$campaign;?>&pagina=<?=$i;?>"><?=$i;?></a>
								<? } else { ?>
									<a href="/backend/newslettertools.php?mode=aperturas&campaign=<?=$campaign;?>&pagina=<?=$i;?>"><?=$i;?></a>
								<? } ?>
							<? } ?>
							<a href="/backend/newslettertools.php?mode=aperturas&campaign=<?=$campaign;?>&pagina=<?=$paginas;?>">ultima p&aacute;gina</a>
						</div>
					</td>
				</tr>
			<?}?>
		</table>
	</div>
	<?}?>
	<?if($mode=="aperturas"&&!$campaign){?>
	<div class="grid" style="margin:0 auto 0 auto; width:700px;text-align:center;">
		<table width="100%" border="0" cellspacing="0" cellpadding="6">
			<tr>
				<th colspan="4">Seleccione:</th>
			</tr>
			<tr>
				<td>
					Nombre del envío:
				</td>
				<td colspan="2">
				<?php
					print "<select id='campaign'>\n";
					foreach($mailscampaign as $campaign){
						$campaignd=preg_replace("/['<>]/","",$campaign["campaign"]);
						print "<option value='$campaignd'>$campaignd (".$campaign["cantidad_aperturas"].($campaign["cantidad_aperturas"]==1?" mail abierto":" mails abiertos").")</option>\n";
					}
					print "</select>\n";
				?>
				</td>
				<td>
				<button onclick="aperturas_seleccionar();">Continuar</button>
				</td>
			</tr>
		</table>
	</div>
	<?}?>
	<?if($mode=="envios"&&$ok){?>
	<div class="grid" style="margin:0 auto 0 auto; width:700px;text-align:center;">
		<?if(!$fallo_mensaje){?>
		<table width="100%" border="0" cellspacing="0" cellpadding="6">
			<tr>
				<th colspan="4">Resultado del envío (<?=($mc_send_success)?"Sin Errores":"Con Errores";?>)</th>
			</tr>
			<?php
			if($mc_send_success){
			?>
			<tr>
				<td colspan="2">ID generado de campaña en Mailchimp</td>
				<td colspan="2"><?=$mc_campaign_id;?></td>
			</tr>			
			<?php	
			}
			else{
			?>
			<tr>
				<td colspan="2">Codigo de Error de Mailchimp</td>
				<td colspan="2"><span style="color: red;"><?=$mc_error_code;?></span></td>
			</tr>
			<tr>
				<td colspan="2">Descripcion de Error</td>
				<td colspan="2"><span style="color: red;"><?=$mc_error_message;?></span></td>
			</tr>

			<?php
			}
			?>
			<tr>
				<td colspan="4" align="right"><button onclick="regresar_envios();">Regresar</button></td>
			</tr>
		</table>
		<?}else{?>
		<table width="100%" border="0" cellspacing="0" cellpadding="6">
			<tr>
				<th colspan="4">Resultado del envío (Con Errores)</th>
			</tr>
			<tr>
				<td colspan="4" align="right"><?=$fallo_mensaje;?></td>
			</tr>
			<tr>
				<td colspan="4" align="right"><button onclick="regresar_envios();">Regresar</button></td>
			</tr>
		</table>
		<?}?>
	</div>
	<?}?>
	<?if($mode=="envios"&&!$ok){?>
	<div class="grid" style="margin:0 auto 0 auto; width:700px;text-align:center;">
		<form action="/backend/newslettertools.php?mode=envios" method="post" enctype="multipart/form-data">
		<table width="100%" border="0" cellspacing="0" cellpadding="6">
			<tr>
				<th colspan="4">Complete los datos del envío:</th>
			</tr>
			<tr>
				<td colspan="2">
					<label for="filehtml">Archivo .html:</label>
				</td>
				<td colspan="2">
					<input type="file" name="filehtml" id="filehtml" size="60"/>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<label for="filecsv">Subject:</label>
				</td>
				<td colspan="2">
					<input type="text" name="mailsubject" id="mailsubject" value="<?=($_REQUEST["mailsubject"])?$_REQUEST["mailsubject"]:"Conduciendo.com / Newsletter";?>" size="60"/>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<label for="filecsv">From:</label>
				</td>
				<td colspan="2">
					<input type="text" name="mailfrom" id="mailfrom" value="<?=($_REQUEST["mailfrom"])?$_REQUEST["mailfrom"]:"Conduciendo.com &lt;info@conduciendo.com&gt;";?>" size="60"/>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<label for="filecsv">Reply:</label>
				</td>
				<td colspan="2">
					<input type="text" name="mailreply" id="mailreply" value="<?=($_REQUEST["mailreply"])?$_REQUEST["mailreply"]:"Conduciendo.com &lt;info@conduciendo.com&gt;";?>" size="60"/>
				</td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<input type="submit" name="ok" id="ok" value="Enviar" />
				</td>
			</tr>
		</table>
		</form>
	</div>
	<?}?>
</div>
</body>
</html>
