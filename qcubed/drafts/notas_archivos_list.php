<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NotasArchivos class.  It uses the code-generated
	 * NotasArchivosDataGrid control which has meta-methods to help with
	 * easily creating/defining NotasArchivos columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both notas_archivos_list.php AND
	 * notas_archivos_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class NotasArchivosListForm extends QForm {
		// Local instance of the Meta DataGrid to list NotasArchivoses
		protected $dtgNotasArchivoses;

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
			$this->dtgNotasArchivoses = new NotasArchivosDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNotasArchivoses->CssClass = 'datagrid';
			$this->dtgNotasArchivoses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNotasArchivoses->Paginator = new QPaginator($this->dtgNotasArchivoses);
			$this->dtgNotasArchivoses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/notas_archivos_edit.php';
			$this->dtgNotasArchivoses->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for notas_archivos's properties, or you
			// can traverse down QQN::notas_archivos() to display fields that are down the hierarchy)
			$this->dtgNotasArchivoses->MetaAddColumn('Id');
			$this->dtgNotasArchivoses->MetaAddColumn('IdNota');
			$this->dtgNotasArchivoses->MetaAddColumn('IdArchivo');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// notas_archivos_list.tpl.php as the included HTML template file
	NotasArchivosListForm::Run('NotasArchivosListForm');
?>