<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Notas class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Notas objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this NotasListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class NotasListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Notases
		public $dtgNotases;

		// Other public QControls in this panel
		public $btnCreateNew;
		public $pxyEdit;

		// Callback Method Names
		protected $strSetEditPanelMethod;
		protected $strCloseEditPanelMethod;
		
		public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Record Method Callbacks
			$this->strSetEditPanelMethod = $strSetEditPanelMethod;
			$this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

			// Setup the Template
			$this->Template = 'NotasListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgNotases = new NotasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNotases->CssClass = 'datagrid';
			$this->dtgNotases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNotases->Paginator = new QPaginator($this->dtgNotases);
			$this->dtgNotases->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgNotases->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

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

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Notas');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new NotasEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new NotasEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>