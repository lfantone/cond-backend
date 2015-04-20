<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Comentarios class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Comentarios objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this ComentariosListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class ComentariosListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Comentarioses
		public $dtgComentarioses;

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
			$this->Template = 'ComentariosListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgComentarioses = new ComentariosDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgComentarioses->CssClass = 'datagrid';
			$this->dtgComentarioses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgComentarioses->Paginator = new QPaginator($this->dtgComentarioses);
			$this->dtgComentarioses->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgComentarioses->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for comentarios's properties, or you
			// can traverse down QQN::comentarios() to display fields that are down the hierarchy)
			$this->dtgComentarioses->MetaAddColumn('Id');
			$this->dtgComentarioses->MetaAddColumn('Nombre');
			$this->dtgComentarioses->MetaAddColumn('Email');
			$this->dtgComentarioses->MetaAddColumn('Comentarios');
			$this->dtgComentarioses->MetaAddColumn('IdNota');
			$this->dtgComentarioses->MetaAddColumn('Fecha');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Comentarios');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new ComentariosEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new ComentariosEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>