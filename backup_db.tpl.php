<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->RenderBegin();
$this->RenderEnd();
ob_end_clean();
$file = dirname(__FILE__).'/../db_files/db_last.sql';
header('Content-disposition: attachment; filename=backup_db_'.date('Y_m_d').'.sql');
header("Content-type: application/octet-stream; charset=utf-8");
header('Content-Length: ' . filesize($file));
readfile($file);
exit;
?>
