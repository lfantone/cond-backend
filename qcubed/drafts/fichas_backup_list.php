<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the FichasBackup class.  It uses the code-generated
	 * FichasBackupDataGrid control which has meta-methods to help with
	 * easily creating/defining FichasBackup columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_backup_list.php AND
	 * fichas_backup_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FichasBackupListForm extends QForm {
		// Local instance of the Meta DataGrid to list FichasBackups
		protected $dtgFichasBackups;

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
			$this->dtgFichasBackups = new FichasBackupDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFichasBackups->CssClass = 'datagrid';
			$this->dtgFichasBackups->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFichasBackups->Paginator = new QPaginator($this->dtgFichasBackups);
			$this->dtgFichasBackups->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/fichas_backup_edit.php';
			$this->dtgFichasBackups->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

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
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// fichas_backup_list.tpl.php as the included HTML template file
	FichasBackupListForm::Run('FichasBackupListForm');
?>