<?php
	// Load the QCubed Development Framework
	require('qcubed/includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Modelo class.  It uses the code-generated
	 * ModeloDataGrid control which has meta-methods to help with
	 * easily creating/defining Modelo columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both modelo_list.php AND
	 * modelo_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ModeloListForm extends QForm {
		// Local instance of the Meta DataGrid to list Modelos
		protected $dtgModelos;

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
			$this->dtgModelos = new ModeloDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgModelos->CssClass = 'datagrid';
			$this->dtgModelos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgModelos->Paginator = new QPaginator($this->dtgModelos);
			$this->dtgModelos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __BACKEND_DIR__ . '/modelo_edit.php';
			$this->dtgModelos->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'), QMetaControlArgumentType::QueryString);

			// Create the Other Columns (note that you can use strings for modelo's properties, or you
			// can traverse down QQN::modelo() to display fields that are down the hierarchy)
			$this->dtgModelos->MetaAddColumn('IdModelo');
			$this->dtgModelos->MetaAddColumn('Nombre');
			$this->dtgModelos->MetaAddColumn(QQN::Modelo()->IdMarcaObject->Nombre)->Name = 'Marca';			
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// modelo_list.tpl.php as the included HTML template file
	ModeloListForm::Run('ModeloListForm');
?>