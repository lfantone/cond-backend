<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NotasMarcas class.  It uses the code-generated
	 * NotasMarcasDataGrid control which has meta-methods to help with
	 * easily creating/defining NotasMarcas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both notas_marcas_list.php AND
	 * notas_marcas_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class NotasMarcasListForm extends QForm {
		// Local instance of the Meta DataGrid to list NotasMarcases
		protected $dtgNotasMarcases;

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
			$this->dtgNotasMarcases = new NotasMarcasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNotasMarcases->CssClass = 'datagrid';
			$this->dtgNotasMarcases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNotasMarcases->Paginator = new QPaginator($this->dtgNotasMarcases);
			$this->dtgNotasMarcases->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/notas_marcas_edit.php';
			$this->dtgNotasMarcases->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for notas_marcas's properties, or you
			// can traverse down QQN::notas_marcas() to display fields that are down the hierarchy)
			$this->dtgNotasMarcases->MetaAddColumn('Id');
			$this->dtgNotasMarcases->MetaAddColumn('IdNota');
			$this->dtgNotasMarcases->MetaAddColumn('IdMarca');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// notas_marcas_list.tpl.php as the included HTML template file
	NotasMarcasListForm::Run('NotasMarcasListForm');
?>