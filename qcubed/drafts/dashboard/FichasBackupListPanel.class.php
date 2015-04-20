<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the FichasBackup class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of FichasBackup objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this FichasBackupListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class FichasBackupListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list FichasBackups
		public $dtgFichasBackups;

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
			$this->Template = 'FichasBackupListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgFichasBackups = new FichasBackupDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFichasBackups->CssClass = 'datagrid';
			$this->dtgFichasBackups->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFichasBackups->Paginator = new QPaginator($this->dtgFichasBackups);
			$this->dtgFichasBackups->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgFichasBackups->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for fichas_backup's properties, or you
			// can traverse down QQN::fichas_backup() to display fields that are down the hierarchy)
			$this->dtgFichasBackups->MetaAddColumn('Id');
			$this->dtgFichasBackups->MetaAddColumn('IdMarca');
			$this->dtgFichasBackups->MetaAddColumn('IdTipos');
			$this->dtgFichasBackups->MetaAddColumn('Modelo');
			$this->dtgFichasBackups->MetaAddColumn('Descripcion');
			$this->dtgFichasBackups->MetaAddColumn('Precio');
			$this->dtgFichasBackups->MetaAddColumn('Combustible');
			$this->dtgFichasBackups->MetaAddColumn('Cilindrada');
			$this->dtgFichasBackups->MetaAddColumn('Cilindros');
			$this->dtgFichasBackups->MetaAddColumn('PotenciaMaxima');
			$this->dtgFichasBackups->MetaAddColumn('ParMotorTorque');
			$this->dtgFichasBackups->MetaAddColumn('Posicion');
			$this->dtgFichasBackups->MetaAddColumn('Alimentacion');
			$this->dtgFichasBackups->MetaAddColumn('RelacionDeCompresion');
			$this->dtgFichasBackups->MetaAddColumn('Valvulas');
			$this->dtgFichasBackups->MetaAddColumn('Tipo');
			$this->dtgFichasBackups->MetaAddColumn('Marchas');
			$this->dtgFichasBackups->MetaAddColumn('Traccion');
			$this->dtgFichasBackups->MetaAddColumn('VelocidadMaxima');
			$this->dtgFichasBackups->MetaAddColumn('Aceleracion0100');
			$this->dtgFichasBackups->MetaAddColumn('ConsumoUrbano');
			$this->dtgFichasBackups->MetaAddColumn('ConsumoInterurbano');
			$this->dtgFichasBackups->MetaAddColumn('ConsumoMixto');
			$this->dtgFichasBackups->MetaAddColumn('EmisionesCo2');
			$this->dtgFichasBackups->MetaAddColumn('TipoCarroceria');
			$this->dtgFichasBackups->MetaAddColumn('Puertas');
			$this->dtgFichasBackups->MetaAddColumn('Plazas');
			$this->dtgFichasBackups->MetaAddColumn('FilasDeAsientos');
			$this->dtgFichasBackups->MetaAddColumn('InfoEjes');
			$this->dtgFichasBackups->MetaAddColumn('Peso');
			$this->dtgFichasBackups->MetaAddColumn('CapacidadBaul');
			$this->dtgFichasBackups->MetaAddColumn('CapacidadTanque');
			$this->dtgFichasBackups->MetaAddColumn('InfoCajaCarga');
			$this->dtgFichasBackups->MetaAddColumn('VolumenCajaCarga');
			$this->dtgFichasBackups->MetaAddColumn('CapacidadCarga');
			$this->dtgFichasBackups->MetaAddColumn('FrenosDelanteros');
			$this->dtgFichasBackups->MetaAddColumn('FrenosTraseros');
			$this->dtgFichasBackups->MetaAddColumn('Llantas');
			$this->dtgFichasBackups->MetaAddColumn('Neumaticos');
			$this->dtgFichasBackups->MetaAddColumn('SuspensionDelantera');
			$this->dtgFichasBackups->MetaAddColumn('SuspensionTrasera');
			$this->dtgFichasBackups->MetaAddColumn('LucesAutomatico');
			$this->dtgFichasBackups->MetaAddColumn('Climatizacion');
			$this->dtgFichasBackups->MetaAddColumn('AlarmaLucesEncendidas');
			$this->dtgFichasBackups->MetaAddColumn('CritalesElectricos');
			$this->dtgFichasBackups->MetaAddColumn('AperturaBaul');
			$this->dtgFichasBackups->MetaAddColumn('AperturaTanque');
			$this->dtgFichasBackups->MetaAddColumn('AsientosRegulablesAltura');
			$this->dtgFichasBackups->MetaAddColumn('AsientoTraseroRebatible');
			$this->dtgFichasBackups->MetaAddColumn('AsientosCalefaccionado');
			$this->dtgFichasBackups->MetaAddColumn('AsientosAjustesElectronicos');
			$this->dtgFichasBackups->MetaAddColumn('AsientosDelButacaDeportiva');
			$this->dtgFichasBackups->MetaAddColumn('AsientoDelBipartido');
			$this->dtgFichasBackups->MetaAddColumn('BotonStartStop');
			$this->dtgFichasBackups->MetaAddColumn('CambioSecuencialVolante');
			$this->dtgFichasBackups->MetaAddColumn('CierreCentralizado');
			$this->dtgFichasBackups->MetaAddColumn('ComputadoraABordo');
			$this->dtgFichasBackups->MetaAddColumn('DireccionAsistida');
			$this->dtgFichasBackups->MetaAddColumn('MandosAudioVolante');
			$this->dtgFichasBackups->MetaAddColumn('Reposabrazos');
			$this->dtgFichasBackups->MetaAddColumn('ControlCrucero');
			$this->dtgFichasBackups->MetaAddColumn('SensorLluvia');
			$this->dtgFichasBackups->MetaAddColumn('Tapizado');
			$this->dtgFichasBackups->MetaAddColumn('SalidasAire');
			$this->dtgFichasBackups->MetaAddColumn('TechoCorredizo');
			$this->dtgFichasBackups->MetaAddColumn('ComandoDistancia');
			$this->dtgFichasBackups->MetaAddColumn('VolanteAjusteVertical');
			$this->dtgFichasBackups->MetaAddColumn('VolanteCuero');
			$this->dtgFichasBackups->MetaAddColumn('MoldurasColorCarroceria');
			$this->dtgFichasBackups->MetaAddColumn('EspejosElectricos');
			$this->dtgFichasBackups->MetaAddColumn('EspejosRebatiblesElectricamente');
			$this->dtgFichasBackups->MetaAddColumn('EspejosMemorias');
			$this->dtgFichasBackups->MetaAddColumn('LavaFaros');
			$this->dtgFichasBackups->MetaAddColumn('LavaLuneta');
			$this->dtgFichasBackups->MetaAddColumn('CobertorCajaCarga');
			$this->dtgFichasBackups->MetaAddColumn('BarrasPortaequipajeTecho');
			$this->dtgFichasBackups->MetaAddColumn('BarraAntivuelco');
			$this->dtgFichasBackups->MetaAddColumn('Estribos');
			$this->dtgFichasBackups->MetaAddColumn('ConexionAuxiliar');
			$this->dtgFichasBackups->MetaAddColumn('ConexionBluetooth');
			$this->dtgFichasBackups->MetaAddColumn('ControlPorVoz');
			$this->dtgFichasBackups->MetaAddColumn('EntradaUsb');
			$this->dtgFichasBackups->MetaAddColumn('LectorTarjetasSd');
			$this->dtgFichasBackups->MetaAddColumn('NavegadorGps');
			$this->dtgFichasBackups->MetaAddColumn('Parlantes');
			$this->dtgFichasBackups->MetaAddColumn('RadioAmfm');
			$this->dtgFichasBackups->MetaAddColumn('RadioSatelitalXm');
			$this->dtgFichasBackups->MetaAddColumn('ReproductorCd');
			$this->dtgFichasBackups->MetaAddColumn('ReproductorDvd');
			$this->dtgFichasBackups->MetaAddColumn('ReproductorMp3');
			$this->dtgFichasBackups->MetaAddColumn('TomaCorriente12v');
			$this->dtgFichasBackups->MetaAddColumn('Airbags');
			$this->dtgFichasBackups->MetaAddColumn('Alarma');
			$this->dtgFichasBackups->MetaAddColumn('AsientoParaNinos');
			$this->dtgFichasBackups->MetaAddColumn('AsistenciasElectronicas');
			$this->dtgFichasBackups->MetaAddColumn('CamaraRetroceso');
			$this->dtgFichasBackups->MetaAddColumn('CinturonesInerciales');
			$this->dtgFichasBackups->MetaAddColumn('SensorDistanciaEstacionamiento');
			$this->dtgFichasBackups->MetaAddColumn('DesempaniadorEspejosExteriores');
			$this->dtgFichasBackups->MetaAddColumn('EncendidoAutoBalizasUrgencia');
			$this->dtgFichasBackups->MetaAddColumn('FarosAntiniebla');
			$this->dtgFichasBackups->MetaAddColumn('FarosXenon');
			$this->dtgFichasBackups->MetaAddColumn('GanchosIsofixLatch');
			$this->dtgFichasBackups->MetaAddColumn('Garantia');
			$this->dtgFichasBackups->MetaAddColumn('IndicadorPresionNeumaticos');
			$this->dtgFichasBackups->MetaAddColumn('Lavafaros');
			$this->dtgFichasBackups->MetaAddColumn('LucesAdaptativasCurvas');
			$this->dtgFichasBackups->MetaAddColumn('TercerApoyaCabezaTrasero');
			$this->dtgFichasBackups->MetaAddColumn('IdEstado');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('FichasBackup');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new FichasBackupEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new FichasBackupEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>