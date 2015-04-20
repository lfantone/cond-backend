<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Fichas30062010 class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Fichas30062010 objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this Fichas30062010ListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class Fichas30062010ListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Fichas30062010s
		public $dtgFichas30062010s;

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
			$this->Template = 'Fichas30062010ListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgFichas30062010s = new Fichas30062010DataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFichas30062010s->CssClass = 'datagrid';
			$this->dtgFichas30062010s->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFichas30062010s->Paginator = new QPaginator($this->dtgFichas30062010s);
			$this->dtgFichas30062010s->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgFichas30062010s->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for fichas_30062010's properties, or you
			// can traverse down QQN::fichas_30062010() to display fields that are down the hierarchy)
			$this->dtgFichas30062010s->MetaAddColumn('Id');
			$this->dtgFichas30062010s->MetaAddColumn('IdMarca');
			$this->dtgFichas30062010s->MetaAddColumn('IdTipos');
			$this->dtgFichas30062010s->MetaAddColumn('IdModelo');
			$this->dtgFichas30062010s->MetaAddColumn('IdVersion');
			$this->dtgFichas30062010s->MetaAddColumn('Descripcion');
			$this->dtgFichas30062010s->MetaAddColumn('Precio');
			$this->dtgFichas30062010s->MetaAddColumn('Anio');
			$this->dtgFichas30062010s->MetaAddColumn('Combustible');
			$this->dtgFichas30062010s->MetaAddColumn('Cilindrada');
			$this->dtgFichas30062010s->MetaAddColumn('Cilindros');
			$this->dtgFichas30062010s->MetaAddColumn('PotenciaMaxima');
			$this->dtgFichas30062010s->MetaAddColumn('ParMotorTorque');
			$this->dtgFichas30062010s->MetaAddColumn('Posicion');
			$this->dtgFichas30062010s->MetaAddColumn('Alimentacion');
			$this->dtgFichas30062010s->MetaAddColumn('MotorShort');
			$this->dtgFichas30062010s->MetaAddColumn('Valvulas');
			$this->dtgFichas30062010s->MetaAddColumn('Tipo');
			$this->dtgFichas30062010s->MetaAddColumn('Marchas');
			$this->dtgFichas30062010s->MetaAddColumn('Traccion');
			$this->dtgFichas30062010s->MetaAddColumn('VelocidadMaxima');
			$this->dtgFichas30062010s->MetaAddColumn('Aceleracion0100');
			$this->dtgFichas30062010s->MetaAddColumn('ConsumoUrbano');
			$this->dtgFichas30062010s->MetaAddColumn('ConsumoInterurbano');
			$this->dtgFichas30062010s->MetaAddColumn('ConsumoMixto');
			$this->dtgFichas30062010s->MetaAddColumn('Puertas');
			$this->dtgFichas30062010s->MetaAddColumn('Plazas');
			$this->dtgFichas30062010s->MetaAddColumn('FilasDeAsientos');
			$this->dtgFichas30062010s->MetaAddColumn('InfoEjes');
			$this->dtgFichas30062010s->MetaAddColumn('Peso');
			$this->dtgFichas30062010s->MetaAddColumn('CapacidadBaul');
			$this->dtgFichas30062010s->MetaAddColumn('CapacidadTanque');
			$this->dtgFichas30062010s->MetaAddColumn('CapacidadCarga');
			$this->dtgFichas30062010s->MetaAddColumn('FrenosDelanteros');
			$this->dtgFichas30062010s->MetaAddColumn('FrenosTraseros');
			$this->dtgFichas30062010s->MetaAddColumn('Neumaticos');
			$this->dtgFichas30062010s->MetaAddColumn('SuspensionDelantera');
			$this->dtgFichas30062010s->MetaAddColumn('SuspensionTrasera');
			$this->dtgFichas30062010s->MetaAddColumn('IdEstado');
			$this->dtgFichas30062010s->MetaAddColumn('Procesada');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Fichas30062010');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new Fichas30062010EditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new Fichas30062010EditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>