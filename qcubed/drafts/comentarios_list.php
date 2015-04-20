<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Comentarios class.  It uses the code-generated
	 * ComentariosDataGrid control which has meta-methods to help with
	 * easily creating/defining Comentarios columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both comentarios_list.php AND
	 * comentarios_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ComentariosListForm extends QForm {
		// Local instance of the Meta DataGrid to list Comentarioses
		protected $dtgComentarioses;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			// Instantiate the Meta DataGrid
			$this->dtgComentarioses = new ComentariosDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgComentarioses->CssClass = 'datagrid';
			$this->dtgComentarioses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgComentarioses->Paginator = new QPaginator($this->dtgComentarioses);
			$this->dtgComentarioses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/comentarios_edit.php';
			$this->dtgComentarioses->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for comentarios's properties, or you
			// can traverse down QQN::comentarios() to display fields that are down the hierarchy)
			$this->dtgComentarioses->MetaAddColumn('Id');
			$this->dtgComentarioses->MetaAddColumn('Nombre');
			$this->dtgComentarioses->MetaAddColumn('Email');
			$this->dtgComentarioses->MetaAddColumn('Comentarios');
			$this->dtgComentarioses->MetaAddColumn('IdNota');
			$this->dtgComentarioses->MetaAddColumn('Fecha');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// comentarios_list.tpl.php as the included HTML template file
	ComentariosListForm::Run('ComentariosListForm');
?>