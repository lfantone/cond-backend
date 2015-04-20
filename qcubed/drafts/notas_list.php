<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Notas class.  It uses the code-generated
	 * NotasDataGrid control which has meta-methods to help with
	 * easily creating/defining Notas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both notas_list.php AND
	 * notas_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class NotasListForm extends QForm {
		// Local instance of the Meta DataGrid to list Notases
		protected $dtgNotases;

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
			$this->dtgNotases = new NotasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNotases->CssClass = 'datagrid';
			$this->dtgNotases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNotases->Paginator = new QPaginator($this->dtgNotases);
			$this->dtgNotases->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/notas_edit.php';
			$this->dtgNotases->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for notas's properties, or you
			// can traverse down QQN::notas() to display fields that are down the hierarchy)
			$this->dtgNotases->MetaAddColumn('Id');
			$this->dtgNotases->MetaAddColumn('Titulo');
			$this->dtgNotases->MetaAddColumn('Subtitulo');
			$this->dtgNotases->MetaAddColumn('Copete');
			$this->dtgNotases->MetaAddColumn('Contenido');
			$this->dtgNotases->MetaAddColumn('ContenidoRtf');
			$this->dtgNotases->MetaAddColumn('FechaCreada');
			$this->dtgNotases->MetaAddColumn('FechaPublicada');
			$this->dtgNotases->MetaAddColumn('Visitas');
			$this->dtgNotases->MetaAddColumn('IdAutor');
			$this->dtgNotases->MetaAddColumn('Estado');
			$this->dtgNotases->MetaAddColumn('FechaAPublicar');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// notas_list.tpl.php as the included HTML template file
	NotasListForm::Run('NotasListForm');
?>