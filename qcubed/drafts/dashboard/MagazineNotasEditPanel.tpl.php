<?php
	// This is the HTML template include file (.tpl.php) for magazine_notasEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->txtTitulo->RenderWithName(); ?>

		<?php $_CONTROL->txtSubtitulo->RenderWithName(); ?>

		<?php $_CONTROL->txtCopete->RenderWithName(); ?>

		<?php $_CONTROL->txtContenido->RenderWithName(); ?>

		<?php $_CONTROL->calFechaCreada->RenderWithName(); ?>

		<?php $_CONTROL->calFechaPublicada->RenderWithName(); ?>

		<?php $_CONTROL->txtVisitas->RenderWithName(); ?>

		<?php $_CONTROL->txtIdAutor->RenderWithName(); ?>

		<?php $_CONTROL->txtEstado->RenderWithName(); ?>

		<?php $_CONTROL->calFechaAPublicar->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
