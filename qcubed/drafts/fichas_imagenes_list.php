<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the FichasImagenes class.  It uses the code-generated
	 * FichasImagenesDataGrid control which has meta-methods to help with
	 * easily creating/defining FichasImagenes columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_imagenes_list.php AND
	 * fichas_imagenes_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FichasImagenesListForm extends QForm {
		// Local instance of the Meta DataGrid to list FichasImageneses
		protected $dtgFichasImageneses;

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
			$this->dtgFichasImageneses = new FichasImagenesDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFichasImageneses->CssClass = 'datagrid';
			$this->dtgFichasImageneses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFichasImageneses->Paginator = new QPaginator($this->dtgFichasImageneses);
			$this->dtgFichasImageneses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/fichas_imagenes_edit.php';
			$this->dtgFichasImageneses->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for fichas_imagenes's properties, or you
			// can traverse down QQN::fichas_imagenes() to display fields that are down the hierarchy)
			$this->dtgFichasImageneses->MetaAddColumn('Id');
			$this->dtgFichasImageneses->MetaAddColumn(QQN::FichasImagenes()->IdFichaObject);
			$this->dtgFichasImageneses->MetaAddColumn(QQN::FichasImagenes()->IdImagenObject);
			$this->dtgFichasImageneses->MetaAddColumn('ImagenPrincipal');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// fichas_imagenes_list.tpl.php as the included HTML template file
	FichasImagenesListForm::Run('FichasImagenesListForm');
?>