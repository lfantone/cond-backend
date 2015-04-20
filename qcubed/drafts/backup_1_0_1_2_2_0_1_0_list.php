<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Backup10122010 class.  It uses the code-generated
	 * Backup10122010DataGrid control which has meta-methods to help with
	 * easily creating/defining Backup10122010 columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both backup_1_0_1_2_2_0_1_0_list.php AND
	 * backup_1_0_1_2_2_0_1_0_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class Backup10122010ListForm extends QForm {
		// Local instance of the Meta DataGrid to list Backup10122010s
		protected $dtgBackup10122010s;

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
			$this->dtgBackup10122010s = new Backup10122010DataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgBackup10122010s->CssClass = 'datagrid';
			$this->dtgBackup10122010s->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgBackup10122010s->Paginator = new QPaginator($this->dtgBackup10122010s);
			$this->dtgBackup10122010s->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/backup10122010_edit.php';
			$this->dtgBackup10122010s->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for backup10122010's properties, or you
			// can traverse down QQN::backup10122010() to display fields that are down the hierarchy)
			$this->dtgBackup10122010s->MetaAddColumn('IdModelo');
			$this->dtgBackup10122010s->MetaAddColumn('Nombre');
			$this->dtgBackup10122010s->MetaAddColumn('IdMarca');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// backup_1_0_1_2_2_0_1_0_list.tpl.php as the included HTML template file
	Backup10122010ListForm::Run('Backup10122010ListForm');
?>