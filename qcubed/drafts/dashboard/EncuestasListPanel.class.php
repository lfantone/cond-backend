<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Encuestas class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Encuestas objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this EncuestasListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class EncuestasListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Encuestases
		public $dtgEncuestases;

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
			$this->Template = 'EncuestasListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgEncuestases = new EncuestasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgEncuestases->CssClass = 'datagrid';
			$this->dtgEncuestases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgEncuestases->Paginator = new QPaginator($this->dtgEncuestases);
			$this->dtgEncuestases->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgEncuestases->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for encuestas's properties, or you
			// can traverse down QQN::encuestas() to display fields that are down the hierarchy)
			$this->dtgEncuestases->MetaAddColumn('Id');
			$this->dtgEncuestases->MetaAddColumn('Titulo');
			$this->dtgEncuestases->MetaAddColumn('Opcion1');
			$this->dtgEncuestases->MetaAddColumn('Opcion2');
			$this->dtgEncuestases->MetaAddColumn('Opcion3');
			$this->dtgEncuestases->MetaAddColumn('Opcion4');
			$this->dtgEncuestases->MetaAddColumn('Opcion5');
			$this->dtgEncuestases->MetaAddColumn('Opcion6');
			$this->dtgEncuestases->MetaAddColumn('Valor1');
			$this->dtgEncuestases->MetaAddColumn('Valor2');
			$this->dtgEncuestases->MetaAddColumn('Valor3');
			$this->dtgEncuestases->MetaAddColumn('Valor4');
			$this->dtgEncuestases->MetaAddColumn('Valor5');
			$this->dtgEncuestases->MetaAddColumn('Valor6');
			$this->dtgEncuestases->MetaAddColumn('Estado');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Encuestas');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new EncuestasEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new EncuestasEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>