<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the FichasInfo class.  It uses the code-generated
	 * FichasInfoDataGrid control which has meta-methods to help with
	 * easily creating/defining FichasInfo columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_info_list.php AND
	 * fichas_info_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FichasInfoListForm extends QForm {
		// Local instance of the Meta DataGrid to list FichasInfos
		protected $dtgFichasInfos;

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
			$this->dtgFichasInfos = new FichasInfoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFichasInfos->CssClass = 'datagrid';
			$this->dtgFichasInfos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFichasInfos->Paginator = new QPaginator($this->dtgFichasInfos);
			$this->dtgFichasInfos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/fichas_info_edit.php';
			$this->dtgFichasInfos->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for fichas_info's properties, or you
			// can traverse down QQN::fichas_info() to display fields that are down the hierarchy)
			$this->dtgFichasInfos->MetaAddColumn('IdFichasInfo');
			$this->dtgFichasInfos->MetaAddColumn(QQN::FichasInfo()->IdFichasObject);
			$this->dtgFichasInfos->MetaAddColumn('Fecha');
			$this->dtgFichasInfos->MetaAddColumn('Accion');
			$this->dtgFichasInfos->MetaAddColumn('Notas');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// fichas_info_list.tpl.php as the included HTML template file
	FichasInfoListForm::Run('FichasInfoListForm');
?>