<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Encuestas class.  It uses the code-generated
	 * EncuestasDataGrid control which has meta-methods to help with
	 * easily creating/defining Encuestas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both encuestas_list.php AND
	 * encuestas_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class EncuestasListForm extends QForm {
		// Local instance of the Meta DataGrid to list Encuestases
		protected $dtgEncuestases;

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
			$this->dtgEncuestases = new EncuestasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgEncuestases->CssClass = 'datagrid';
			$this->dtgEncuestases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgEncuestases->Paginator = new QPaginator($this->dtgEncuestases);
			$this->dtgEncuestases->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/encuestas_edit.php';
			$this->dtgEncuestases->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for encuestas's properties, or you
			// can traverse down QQN::encuestas() to display fields that are down the hierarchy)
			$this->dtgEncuestases->MetaAddColumn('Id');
			$this->dtgEncuestases->MetaAddColumn('Titulo');
			$this->dtgEncuestases->MetaAddColumn('Opcion1');
			$this->dtgEncuestases->MetaAddColumn('Opcion2');
			$this->dtgEncuestases->MetaAddColumn('Opcion3');
			$this->dtgEncuestases->MetaAddColumn('Opcion4');
			$this->dtgEncuestases->MetaAddColumn('Opcion5');
			$this->dtgEncuestases->MetaAddColumn('Opcion6');
			$this->dtgEncuestases->MetaAddColumn('Valor1');
			$this->dtgEncuestases->MetaAddColumn('Valor2');
			$this->dtgEncuestases->MetaAddColumn('Valor3');
			$this->dtgEncuestases->MetaAddColumn('Valor4');
			$this->dtgEncuestases->MetaAddColumn('Valor5');
			$this->dtgEncuestases->MetaAddColumn('Valor6');
			$this->dtgEncuestases->MetaAddColumn('Estado');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// encuestas_list.tpl.php as the included HTML template file
	EncuestasListForm::Run('EncuestasListForm');
?>