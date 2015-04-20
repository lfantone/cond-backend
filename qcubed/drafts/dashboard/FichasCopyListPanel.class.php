<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the FichasCopy class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of FichasCopy objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this FichasCopyListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class FichasCopyListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list FichasCopies
		public $dtgFichasCopies;

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
			$this->Template = 'FichasCopyListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgFichasCopies = new FichasCopyDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFichasCopies->CssClass = 'datagrid';
			$this->dtgFichasCopies->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFichasCopies->Paginator = new QPaginator($this->dtgFichasCopies);
			$this->dtgFichasCopies->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgFichasCopies->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for fichas_copy's properties, or you
			// can traverse down QQN::fichas_copy() to display fields that are down the hierarchy)
			$this->dtgFichasCopies->MetaAddColumn('Id');
			$this->dtgFichasCopies->MetaAddColumn('IdMarca');
			$this->dtgFichasCopies->MetaAddColumn('IdTipos');
			$this->dtgFichasCopies->MetaAddColumn('IdModelo');
			$this->dtgFichasCopies->MetaAddColumn('IdVersion');
			$this->dtgFichasCopies->MetaAddColumn('Descripcion');
			$this->dtgFichasCopies->MetaAddColumn('Precio');
			$this->dtgFichasCopies->MetaAddColumn('Combustible');
			$this->dtgFichasCopies->MetaAddColumn('Cilindrada');
			$this->dtgFichasCopies->MetaAddColumn('Cilindros');
			$this->dtgFichasCopies->MetaAddColumn('PotenciaMaxima');
			$this->dtgFichasCopies->MetaAddColumn('ParMotorTorque');
			$this->dtgFichasCopies->MetaAddColumn('Posicion');
			$this->dtgFichasCopies->MetaAddColumn('Alimentacion');
			$this->dtgFichasCopies->MetaAddColumn('Valvulas');
			$this->dtgFichasCopies->MetaAddColumn('Tipo');
			$this->dtgFichasCopies->MetaAddColumn('Marchas');
			$this->dtgFichasCopies->MetaAddColumn('Traccion');
			$this->dtgFichasCopies->MetaAddColumn('VelocidadMaxima');
			$this->dtgFichasCopies->MetaAddColumn('Aceleracion0100');
			$this->dtgFichasCopies->MetaAddColumn('ConsumoUrbano');
			$this->dtgFichasCopies->MetaAddColumn('ConsumoInterurbano');
			$this->dtgFichasCopies->MetaAddColumn('ConsumoMixto');
			$this->dtgFichasCopies->MetaAddColumn('Puertas');
			$this->dtgFichasCopies->MetaAddColumn('Plazas');
			$this->dtgFichasCopies->MetaAddColumn('FilasDeAsientos');
			$this->dtgFichasCopies->MetaAddColumn('InfoEjes');
			$this->dtgFichasCopies->MetaAddColumn('Peso');
			$this->dtgFichasCopies->MetaAddColumn('CapacidadBaul');
			$this->dtgFichasCopies->MetaAddColumn('CapacidadTanque');
			$this->dtgFichasCopies->MetaAddColumn('CapacidadCarga');
			$this->dtgFichasCopies->MetaAddColumn('FrenosDelanteros');
			$this->dtgFichasCopies->MetaAddColumn('FrenosTraseros');
			$this->dtgFichasCopies->MetaAddColumn('Neumaticos');
			$this->dtgFichasCopies->MetaAddColumn('SuspensionDelantera');
			$this->dtgFichasCopies->MetaAddColumn('SuspensionTrasera');
			$this->dtgFichasCopies->MetaAddColumn('IdEstado');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('FichasCopy');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new FichasCopyEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new FichasCopyEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>