<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Newsletter class.  It uses the code-generated
	 * NewsletterDataGrid control which has meta-methods to help with
	 * easily creating/defining Newsletter columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both newsletter_list.php AND
	 * newsletter_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class NewsletterListForm extends QForm {
		// Local instance of the Meta DataGrid to list Newsletters
		protected $dtgNewsletters;

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
			$this->dtgNewsletters = new NewsletterDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNewsletters->CssClass = 'datagrid';
			$this->dtgNewsletters->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNewsletters->Paginator = new QPaginator($this->dtgNewsletters);
			$this->dtgNewsletters->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/newsletter_edit.php';
			$this->dtgNewsletters->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for newsletter's properties, or you
			// can traverse down QQN::newsletter() to display fields that are down the hierarchy)
			$this->dtgNewsletters->MetaAddColumn('Id');
			$this->dtgNewsletters->MetaAddColumn('Email');
			$this->dtgNewsletters->MetaAddColumn('Fecha');
			$this->dtgNewsletters->MetaAddColumn('Estado');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// newsletter_list.tpl.php as the included HTML template file
	NewsletterListForm::Run('NewsletterListForm');
?>