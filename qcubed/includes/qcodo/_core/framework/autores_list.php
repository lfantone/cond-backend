<?php
	// Load the QCubed Development Framework
	require('qcubed/includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Autores class.  It uses the code-generated
	 * AutoresDataGrid control which has meta-methods to help with
	 * easily creating/defining Autores columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both autores_list.php AND
	 * autores_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class AutoresListForm extends QForm {
		// Local instance of the Meta DataGrid to list Autoreses
		protected $dtgAutoreses;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
                        if (!$_SESSION["admin_superadmin"]) {
                            QApplication::Redirect("/backend/denegado.php");
                        }
		}

		protected function Form_Create() {
			// Instantiate the Meta DataGrid
			$this->dtgAutoreses = new AutoresDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgAutoreses->CssClass = 'datagrid';
			$this->dtgAutoreses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgAutoreses->Paginator = new QPaginator($this->dtgAutoreses);
			$this->dtgAutoreses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __BACKEND_DIR__ . '/autores_edit.php';
			$this->dtgAutoreses->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Editar'),  QApplication::Translate('Editar'), QMetaControlArgumentType::QueryString);

			// Create the Other Columns (note that you can use strings for autores's properties, or you
			// can traverse down QQN::autores() to display fields that are down the hierarchy)
			$this->dtgAutoreses->MetaAddColumn('Id');
			$this->dtgAutoreses->MetaAddColumn('Nombre');
			$this->dtgAutoreses->MetaAddColumn('Email');
			$this->dtgAutoreses->MetaAddColumn('IdGrupo');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// autores_list.tpl.php as the included HTML template file
	AutoresListForm::Run('AutoresListForm');
?>