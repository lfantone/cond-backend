<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the FichasItemValor class.  It uses the code-generated
	 * FichasItemValorDataGrid control which has meta-methods to help with
	 * easily creating/defining FichasItemValor columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_item_valor_list.php AND
	 * fichas_item_valor_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FichasItemValorListForm extends QForm {
		// Local instance of the Meta DataGrid to list FichasItemValors
		protected $dtgFichasItemValors;

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
			$this->dtgFichasItemValors = new FichasItemValorDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFichasItemValors->CssClass = 'datagrid';
			$this->dtgFichasItemValors->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFichasItemValors->Paginator = new QPaginator($this->dtgFichasItemValors);
			$this->dtgFichasItemValors->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/fichas_item_valor_edit.php';
			$this->dtgFichasItemValors->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for fichas_item_valor's properties, or you
			// can traverse down QQN::fichas_item_valor() to display fields that are down the hierarchy)
			$this->dtgFichasItemValors->MetaAddColumn(QQN::FichasItemValor()->IdFichasObject);
			$this->dtgFichasItemValors->MetaAddColumn(QQN::FichasItemValor()->IdItemObject);
			$this->dtgFichasItemValors->MetaAddColumn('Valor');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// fichas_item_valor_list.tpl.php as the included HTML template file
	FichasItemValorListForm::Run('FichasItemValorListForm');
?>