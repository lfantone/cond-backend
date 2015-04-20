<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Item class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Item objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this ItemListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class ItemListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Items
		public $dtgItems;

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
			$this->Template = 'ItemListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgItems = new ItemDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgItems->CssClass = 'datagrid';
			$this->dtgItems->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgItems->Paginator = new QPaginator($this->dtgItems);
			$this->dtgItems->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgItems->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for item's properties, or you
			// can traverse down QQN::item() to display fields that are down the hierarchy)
			$this->dtgItems->MetaAddColumn('IdItem');
			$this->dtgItems->MetaAddColumn('Nombre');
			$this->dtgItems->MetaAddColumn('Descripcion');
			$this->dtgItems->MetaAddColumn('Seccion');
			$this->dtgItems->MetaAddColumn('OrdenSeccion');
			$this->dtgItems->MetaAddTypeColumn('IdTipoDatoType', 'TipoDatoType');
			$this->dtgItems->MetaAddColumn(QQN::Item()->IdPaisObject);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Item');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new ItemEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new ItemEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>