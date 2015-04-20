<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NotasArchivosOld class.  It uses the code-generated
	 * NotasArchivosOldDataGrid control which has meta-methods to help with
	 * easily creating/defining NotasArchivosOld columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both notas_archivos_old_list.php AND
	 * notas_archivos_old_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class NotasArchivosOldListForm extends QForm {
		// Local instance of the Meta DataGrid to list NotasArchivosOlds
		protected $dtgNotasArchivosOlds;

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
			$this->dtgNotasArchivosOlds = new NotasArchivosOldDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNotasArchivosOlds->CssClass = 'datagrid';
			$this->dtgNotasArchivosOlds->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNotasArchivosOlds->Paginator = new QPaginator($this->dtgNotasArchivosOlds);
			$this->dtgNotasArchivosOlds->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/notas_archivos_old_edit.php';
			$this->dtgNotasArchivosOlds->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for notas_archivos_old's properties, or you
			// can traverse down QQN::notas_archivos_old() to display fields that are down the hierarchy)
			$this->dtgNotasArchivosOlds->MetaAddColumn('Id');
			$this->dtgNotasArchivosOlds->MetaAddColumn('IdNota');
			$this->dtgNotasArchivosOlds->MetaAddColumn('IdArchivo');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// notas_archivos_old_list.tpl.php as the included HTML template file
	NotasArchivosOldListForm::Run('NotasArchivosOldListForm');
?>