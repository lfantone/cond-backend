<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the ModeloBackup class.  It uses the code-generated
	 * ModeloBackupDataGrid control which has meta-methods to help with
	 * easily creating/defining ModeloBackup columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both modelo_backup_list.php AND
	 * modelo_backup_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ModeloBackupListForm extends QForm {
		// Local instance of the Meta DataGrid to list ModeloBackups
		protected $dtgModeloBackups;

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
			$this->dtgModeloBackups = new ModeloBackupDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgModeloBackups->CssClass = 'datagrid';
			$this->dtgModeloBackups->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgModeloBackups->Paginator = new QPaginator($this->dtgModeloBackups);
			$this->dtgModeloBackups->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/modelo_backup_edit.php';
			$this->dtgModeloBackups->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for modelo_backup's properties, or you
			// can traverse down QQN::modelo_backup() to display fields that are down the hierarchy)
			$this->dtgModeloBackups->MetaAddColumn('IdModelo');
			$this->dtgModeloBackups->MetaAddColumn('Nombre');
			$this->dtgModeloBackups->MetaAddColumn('IdMarca');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// modelo_backup_list.tpl.php as the included HTML template file
	ModeloBackupListForm::Run('ModeloBackupListForm');
?>