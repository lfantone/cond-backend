<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Wallpapers class.  It uses the code-generated
	 * WallpapersDataGrid control which has meta-methods to help with
	 * easily creating/defining Wallpapers columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both wallpapers_list.php AND
	 * wallpapers_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class WallpapersListForm extends QForm {
		// Local instance of the Meta DataGrid to list Wallpaperses
		protected $dtgWallpaperses;

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
			$this->dtgWallpaperses = new WallpapersDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgWallpaperses->CssClass = 'datagrid';
			$this->dtgWallpaperses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgWallpaperses->Paginator = new QPaginator($this->dtgWallpaperses);
			$this->dtgWallpaperses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/wallpapers_edit.php';
			$this->dtgWallpaperses->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for wallpapers's properties, or you
			// can traverse down QQN::wallpapers() to display fields that are down the hierarchy)
			$this->dtgWallpaperses->MetaAddColumn('Id');
			$this->dtgWallpaperses->MetaAddColumn('Titulo');
			$this->dtgWallpaperses->MetaAddColumn('Estado');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// wallpapers_list.tpl.php as the included HTML template file
	WallpapersListForm::Run('WallpapersListForm');
?>