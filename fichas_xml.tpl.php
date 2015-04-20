<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->RenderBegin();
$this->RenderEnd();
ob_end_clean();
header('Content-disposition: attachment; filename=ficha'.$this->intIdFichas.'.xml');
header("content-type: text/xml; charset=utf-8");
$this->objXmlPanel->Render();
exit;
?>
