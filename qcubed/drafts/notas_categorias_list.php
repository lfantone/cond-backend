<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NotasCategorias class.  It uses the code-generated
	 * NotasCategoriasDataGrid control which has meta-methods to help with
	 * easily creating/defining NotasCategorias columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both notas_categorias_list.php AND
	 * notas_categorias_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class NotasCategoriasListForm extends QForm {
		// Local instance of the Meta DataGrid to list NotasCategoriases
		protected $dtgNotasCategoriases;

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
			$this->dtgNotasCategoriases = new NotasCategoriasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNotasCategoriases->CssClass = 'datagrid';
			$this->dtgNotasCategoriases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNotasCategoriases->Paginator = new QPaginator($this->dtgNotasCategoriases);
			$this->dtgNotasCategoriases->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/notas_categorias_edit.php';
			$this->dtgNotasCategoriases->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for notas_categorias's properties, or you
			// can traverse down QQN::notas_categorias() to display fields that are down the hierarchy)
			$this->dtgNotasCategoriases->MetaAddColumn('Id');
			$this->dtgNotasCategoriases->MetaAddColumn('IdNota');
			$this->dtgNotasCategoriases->MetaAddColumn(QQN::NotasCategorias()->IdCategoriaObject);
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// notas_categorias_list.tpl.php as the included HTML template file
	NotasCategoriasListForm::Run('NotasCategoriasListForm');
?>