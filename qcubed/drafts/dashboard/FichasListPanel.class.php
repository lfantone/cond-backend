<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Fichas class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Fichas objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this FichasListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class FichasListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Fichases
		public $dtgFichases;

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
			$this->Template = 'FichasListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgFichases = new FichasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFichases->CssClass = 'datagrid';
			$this->dtgFichases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFichases->Paginator = new QPaginator($this->dtgFichases);
			$this->dtgFichases->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgFichases->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for fichas's properties, or you
			// can traverse down QQN::fichas() to display fields that are down the hierarchy)
			$this->dtgFichases->MetaAddColumn('Id');
			$this->dtgFichases->MetaAddColumn(QQN::Fichas()->IdMarcaObject);
			$this->dtgFichases->MetaAddColumn(QQN::Fichas()->IdTiposObject);
			$this->dtgFichases->MetaAddColumn(QQN::Fichas()->IdModeloObject);
			$this->dtgFichases->MetaAddColumn(QQN::Fichas()->IdVersionObject);
			$this->dtgFichases->MetaAddColumn(QQN::Fichas()->IdPaisObject);
			$this->dtgFichases->MetaAddColumn('IdSeguro');
			$this->dtgFichases->MetaAddColumn('Descripcion');
			$this->dtgFichases->MetaAddColumn('Precio');
			$this->dtgFichases->MetaAddColumn('Anio');
			$this->dtgFichases->MetaAddColumn('Combustible');
			$this->dtgFichases->MetaAddColumn('Cilindrada');
			$this->dtgFichases->MetaAddColumn('Cilindros');
			$this->dtgFichases->MetaAddColumn('PotenciaMaxima');
			$this->dtgFichases->MetaAddColumn('ParMotorTorque');
			$this->dtgFichases->MetaAddColumn('Posicion');
			$this->dtgFichases->MetaAddColumn('Alimentacion');
			$this->dtgFichases->MetaAddColumn('MotorShort');
			$this->dtgFichases->MetaAddColumn('Valvulas');
			$this->dtgFichases->MetaAddColumn('Tipo');
			$this->dtgFichases->MetaAddColumn('Marchas');
			$this->dtgFichases->MetaAddColumn('Traccion');
			$this->dtgFichases->MetaAddColumn('VelocidadMaxima');
			$this->dtgFichases->MetaAddColumn('Aceleracion0100');
			$this->dtgFichases->MetaAddColumn('ConsumoUrbano');
			$this->dtgFichases->MetaAddColumn('ConsumoInterurbano');
			$this->dtgFichases->MetaAddColumn('ConsumoMixto');
			$this->dtgFichases->MetaAddColumn('Puertas');
			$this->dtgFichases->MetaAddColumn('Plazas');
			$this->dtgFichases->MetaAddColumn('FilasDeAsientos');
			$this->dtgFichases->MetaAddColumn('InfoEjes');
			$this->dtgFichases->MetaAddColumn('Peso');
			$this->dtgFichases->MetaAddColumn('CapacidadBaul');
			$this->dtgFichases->MetaAddColumn('CapacidadTanque');
			$this->dtgFichases->MetaAddColumn('CapacidadCarga');
			$this->dtgFichases->MetaAddColumn('FrenosDelanteros');
			$this->dtgFichases->MetaAddColumn('FrenosTraseros');
			$this->dtgFichases->MetaAddColumn('Neumaticos');
			$this->dtgFichases->MetaAddColumn('SuspensionDelantera');
			$this->dtgFichases->MetaAddColumn('SuspensionTrasera');
			$this->dtgFichases->MetaAddColumn(QQN::Fichas()->IdEstadoObject);
			$this->dtgFichases->MetaAddColumn('Procesada');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Fichas');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new FichasEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new FichasEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>