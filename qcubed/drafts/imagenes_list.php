<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Imagenes class.  It uses the code-generated
	 * ImagenesDataGrid control which has meta-methods to help with
	 * easily creating/defining Imagenes columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both imagenes_list.php AND
	 * imagenes_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ImagenesListForm extends QForm {
		// Local instance of the Meta DataGrid to list Imageneses
		protected $dtgImageneses;

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
			$this->dtgImageneses = new ImagenesDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgImageneses->CssClass = 'datagrid';
			$this->dtgImageneses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgImageneses->Paginator = new QPaginator($this->dtgImageneses);
			$this->dtgImageneses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/imagenes_edit.php';
			$this->dtgImageneses->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for imagenes's properties, or you
			// can traverse down QQN::imagenes() to display fields that are down the hierarchy)
			$this->dtgImageneses->MetaAddColumn('Id');
			$this->dtgImageneses->MetaAddColumn('Titulo');
			$this->dtgImageneses->MetaAddColumn('Fecha');
			$this->dtgImageneses->MetaAddColumn('Estado');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// imagenes_list.tpl.php as the included HTML template file
	ImagenesListForm::Run('ImagenesListForm');
?>