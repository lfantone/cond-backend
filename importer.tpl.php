<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - <?php echo $strPageTitle = 'Fichas' . ' - ' . 'Todas'; ?></title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
</head>
<body>
<style>
    table.datagrid td {
        border:1px solid #AAAAFF;
        min-width:100px;
        padding:5px;
    }
    table.datagrid th {
        border:1px solid #FFFFFF;
        min-width:100px;
        padding:5px;
    }
</style>
<?
include("header.php");
?>
<div class="container">
  <div class="content">
<?php
    $strPageTitle = 'Fichas' . ' - ' . 'Todas';
    require(__INCLUDES__ . '/header.inc.php');
?>

    <?php $this->RenderBegin() ?>
    <?php
    $this->txtFile->RenderWithName();
    $this->txtDelim->RenderWithName();
    $this->btnImport->Render();
    print "<br />Debug messages = ".(int)count($this->strMsgs)."<br />";
    print implode("<br />", $this->strMsgs);
    ?>

    <?php $this->RenderEnd() ?>
   </div>
</div>

<?php require(__INCLUDES__ . '/footer.inc.php'); ?>