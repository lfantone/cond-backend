<?php
	// This is the HTML template include file (.tpl.php) for itemEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblIdItem->RenderWithName(); ?>

		<?php $_CONTROL->txtNombre->RenderWithName(); ?>

		<?php $_CONTROL->txtDescripcion->RenderWithName(); ?>

		<?php $_CONTROL->txtSeccion->RenderWithName(); ?>

		<?php $_CONTROL->txtOrdenSeccion->RenderWithName(); ?>

		<?php $_CONTROL->lstIdTipoDatoTypeObject->RenderWithName(); ?>

		<?php $_CONTROL->lstIdPaisObject->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
