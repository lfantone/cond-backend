<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the MagazineNotas class.  It uses the code-generated
	 * MagazineNotasDataGrid control which has meta-methods to help with
	 * easily creating/defining MagazineNotas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both magazine_notas_list.php AND
	 * magazine_notas_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class MagazineNotasListForm extends QForm {
		// Local instance of the Meta DataGrid to list MagazineNotases
		protected $dtgMagazineNotases;

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
			$this->dtgMagazineNotases = new MagazineNotasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgMagazineNotases->CssClass = 'datagrid';
			$this->dtgMagazineNotases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgMagazineNotases->Paginator = new QPaginator($this->dtgMagazineNotases);
			$this->dtgMagazineNotases->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/magazine_notas_edit.php';
			$this->dtgMagazineNotases->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for magazine_notas's properties, or you
			// can traverse down QQN::magazine_notas() to display fields that are down the hierarchy)
			$this->dtgMagazineNotases->MetaAddColumn('Id');
			$this->dtgMagazineNotases->MetaAddColumn('Titulo');
			$this->dtgMagazineNotases->MetaAddColumn('Subtitulo');
			$this->dtgMagazineNotases->MetaAddColumn('Copete');
			$this->dtgMagazineNotases->MetaAddColumn('Contenido');
			$this->dtgMagazineNotases->MetaAddColumn('FechaCreada');
			$this->dtgMagazineNotases->MetaAddColumn('FechaPublicada');
			$this->dtgMagazineNotases->MetaAddColumn('Visitas');
			$this->dtgMagazineNotases->MetaAddColumn('IdAutor');
			$this->dtgMagazineNotases->MetaAddColumn('Estado');
			$this->dtgMagazineNotases->MetaAddColumn('FechaAPublicar');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// magazine_notas_list.tpl.php as the included HTML template file
	MagazineNotasListForm::Run('MagazineNotasListForm');
?>