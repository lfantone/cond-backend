<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the ArchivosXml class.  It uses the code-generated
	 * ArchivosXmlDataGrid control which has meta-methods to help with
	 * easily creating/defining ArchivosXml columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both archivos_xml_list.php AND
	 * archivos_xml_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ArchivosXmlListForm extends QForm {
		// Local instance of the Meta DataGrid to list ArchivosXmls
		protected $dtgArchivosXmls;

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
			$this->dtgArchivosXmls = new ArchivosXmlDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgArchivosXmls->CssClass = 'datagrid';
			$this->dtgArchivosXmls->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgArchivosXmls->Paginator = new QPaginator($this->dtgArchivosXmls);
			$this->dtgArchivosXmls->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/archivos_xml_edit.php';
			$this->dtgArchivosXmls->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for archivos_xml's properties, or you
			// can traverse down QQN::archivos_xml() to display fields that are down the hierarchy)
			$this->dtgArchivosXmls->MetaAddColumn('Id');
			$this->dtgArchivosXmls->MetaAddColumn('IdEmpresa');
			$this->dtgArchivosXmls->MetaAddColumn('Fecha');
			$this->dtgArchivosXmls->MetaAddColumn('Estado');
			$this->dtgArchivosXmls->MetaAddColumn('Nombre');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// archivos_xml_list.tpl.php as the included HTML template file
	ArchivosXmlListForm::Run('ArchivosXmlListForm');
?>