<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the VersionBackup class.  It uses the code-generated
	 * VersionBackupDataGrid control which has meta-methods to help with
	 * easily creating/defining VersionBackup columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both version_backup_list.php AND
	 * version_backup_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class VersionBackupListForm extends QForm {
		// Local instance of the Meta DataGrid to list VersionBackups
		protected $dtgVersionBackups;

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
			$this->dtgVersionBackups = new VersionBackupDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgVersionBackups->CssClass = 'datagrid';
			$this->dtgVersionBackups->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgVersionBackups->Paginator = new QPaginator($this->dtgVersionBackups);
			$this->dtgVersionBackups->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/version_backup_edit.php';
			$this->dtgVersionBackups->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for version_backup's properties, or you
			// can traverse down QQN::version_backup() to display fields that are down the hierarchy)
			$this->dtgVersionBackups->MetaAddColumn('IdVersion');
			$this->dtgVersionBackups->MetaAddColumn('Nombre');
			$this->dtgVersionBackups->MetaAddColumn('IdModelo');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// version_backup_list.tpl.php as the included HTML template file
	VersionBackupListForm::Run('VersionBackupListForm');
?>