<?php
	// Load the QCubed Development Framework
	require('qcubed/includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Fichas class.  It uses the code-generated
	 * FichasDataGrid control which has meta-methods to help with
	 * easily creating/defining Fichas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 *
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_list.php AND
	 * fichas_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FichasListForm extends QForm {
		// Local instance of the Meta DataGrid to list Fichases
		protected $dtgFichases;

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
			$this->dtgFichases = new FichasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFichases->CssClass = 'datagrid';
			$this->dtgFichases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFichases->Paginator = new QPaginator($this->dtgFichases);
			$this->dtgFichases->ItemsPerPage = 50;
			$this->dtgFichases->Paginator->LabelForPrevious = "Anterior";
			$this->dtgFichases->Paginator->LabelForNext = "Proxima";
			$this->dtgFichases->Paginator->IndexCount = 9999;
            //$this->dtgFichases->
			$this->dtgFichases->LabelForNoneFound = QApplication::Translate('<b>Resultado:</b> No se encontro %s.');
			$this->dtgFichases->LabelForOneFound = QApplication::Translate('<b>Resultado:</b> 1 %s encontrada.');
			$this->dtgFichases->LabelForMultipleFound = QApplication::Translate('<b>Resultado:</b> %s %s encontradas.');
			$this->dtgFichases->LabelForPaginated = QApplication::Translate('<b>Resultado:</b>&nbsp;Viendo&nbsp;%s&nbsp;%s-%s&nbsp;de&nbsp;%s.');
			//$this->dtgFichases->ItemsPerPage = 20;

            // Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl =  __BACKEND_DIR__. '/fichas_edit.php';

/*
            $this->dtgFichases->MetaAddColumn('Combustible');
			$this->dtgFichases->MetaAddColumn('Cilindrada');
			$this->dtgFichases->MetaAddColumn('Cilindros');
			$this->dtgFichases->MetaAddColumn('PotenciaMaxima');
			$this->dtgFichases->MetaAddColumn('ParMotorTorque');
			$this->dtgFichases->MetaAddColumn('Posicion');
			$this->dtgFichases->MetaAddColumn('Alimentacion');
			$this->dtgFichases->MetaAddColumn('RelacionDeCompresion');
			$this->dtgFichases->MetaAddColumn('Valvulas');
			$this->dtgFichases->MetaAddColumn('Tipo');
			$this->dtgFichases->MetaAddColumn('Marchas');
			$this->dtgFichases->MetaAddColumn('Traccion');
			$this->dtgFichases->MetaAddColumn('VelocidadMaxima');
			$this->dtgFichases->MetaAddColumn('Aceleracion0100');
			$this->dtgFichases->MetaAddColumn('ConsumoUrbano');
			$this->dtgFichases->MetaAddColumn('ConsumoInterurbano');
			$this->dtgFichases->MetaAddColumn('ConsumoMixto');
			$this->dtgFichases->MetaAddColumn('EmisionesCo2');
			$this->dtgFichases->MetaAddColumn('TipoCarroceria');
			$this->dtgFichases->MetaAddColumn('Puertas');
			$this->dtgFichases->MetaAddColumn('Plazas');
			$this->dtgFichases->MetaAddColumn('FilasDeAsientos');
			$this->dtgFichases->MetaAddColumn('InfoEjes');
			$this->dtgFichases->MetaAddColumn('Peso');
			$this->dtgFichases->MetaAddColumn('CapacidadBaul');
			$this->dtgFichases->MetaAddColumn('CapacidadTanque');
			$this->dtgFichases->MetaAddColumn('InfoCajaCarga');
			$this->dtgFichases->MetaAddColumn('VolumenCajaCarga');
			$this->dtgFichases->MetaAddColumn('CapacidadCarga');
			$this->dtgFichases->MetaAddColumn('FrenosDelanteros');
			$this->dtgFichases->MetaAddColumn('FrenosTraseros');
			$this->dtgFichases->MetaAddColumn('Llantas');
			$this->dtgFichases->MetaAddColumn('Neumaticos');
			$this->dtgFichases->MetaAddColumn('SuspensionDelantera');
			$this->dtgFichases->MetaAddColumn('SuspensionTrasera');
			$this->dtgFichases->MetaAddColumn('LucesAutomatico');
			$this->dtgFichases->MetaAddColumn('Climatizacion');
			$this->dtgFichases->MetaAddColumn('AlarmaLucesEncendidas');
			$this->dtgFichases->MetaAddColumn('CritalesElectricos');
			$this->dtgFichases->MetaAddColumn('AperturaBaul');
			$this->dtgFichases->MetaAddColumn('AperturaTanque');
			$this->dtgFichases->MetaAddColumn('AsientosRegulablesAltura');
			$this->dtgFichases->MetaAddColumn('AsientoTraseroRebatible');
			$this->dtgFichases->MetaAddColumn('AsientosCalefaccionado');
			$this->dtgFichases->MetaAddColumn('AsientosAjustesElectronicos');
			$this->dtgFichases->MetaAddColumn('AsientosDelButacaDeportiva');
			$this->dtgFichases->MetaAddColumn('AsientoDelBipartido');
			$this->dtgFichases->MetaAddColumn('BotonStartStop');
			$this->dtgFichases->MetaAddColumn('CambioSecuencialVolante');
			$this->dtgFichases->MetaAddColumn('CierreCentralizado');
			$this->dtgFichases->MetaAddColumn('ComputadoraABordo');
			$this->dtgFichases->MetaAddColumn('DireccionAsistida');
			$this->dtgFichases->MetaAddColumn('MandosAudioVolante');
			$this->dtgFichases->MetaAddColumn('Reposabrazos');
			$this->dtgFichases->MetaAddColumn('ControlCrucero');
			$this->dtgFichases->MetaAddColumn('SensorLluvia');
			$this->dtgFichases->MetaAddColumn('Tapizado');
			$this->dtgFichases->MetaAddColumn('SalidasAire');
			$this->dtgFichases->MetaAddColumn('TechoCorredizo');
			$this->dtgFichases->MetaAddColumn('ComandoDistancia');
			$this->dtgFichases->MetaAddColumn('VolanteAjusteVertical');
			$this->dtgFichases->MetaAddColumn('VolanteCuero');
			$this->dtgFichases->MetaAddColumn('MoldurasColorCarroceria');
			$this->dtgFichases->MetaAddColumn('EspejosElectricos');
			$this->dtgFichases->MetaAddColumn('EspejosRebatiblesElectricamente');
			$this->dtgFichases->MetaAddColumn('EspejosMemorias');
			$this->dtgFichases->MetaAddColumn('LavaFaros');
			$this->dtgFichases->MetaAddColumn('LavaLuneta');
			$this->dtgFichases->MetaAddColumn('CobertorCajaCarga');
			$this->dtgFichases->MetaAddColumn('BarrasPortaequipajeTecho');
			$this->dtgFichases->MetaAddColumn('BarraAntivuelco');
			$this->dtgFichases->MetaAddColumn('Estribos');
			$this->dtgFichases->MetaAddColumn('ConexionAuxiliar');
			$this->dtgFichases->MetaAddColumn('ConexionBluetooth');
			$this->dtgFichases->MetaAddColumn('ControlPorVoz');
			$this->dtgFichases->MetaAddColumn('EntradaUsb');
			$this->dtgFichases->MetaAddColumn('LectorTarjetasSd');
			$this->dtgFichases->MetaAddColumn('NavegadorGps');
			$this->dtgFichases->MetaAddColumn('Parlantes');
			$this->dtgFichases->MetaAddColumn('RadioAmfm');
			$this->dtgFichases->MetaAddColumn('RadioSatelitalXm');
			$this->dtgFichases->MetaAddColumn('ReproductorCd');
			$this->dtgFichases->MetaAddColumn('ReproductorDvd');
			$this->dtgFichases->MetaAddColumn('ReproductorMp3');
			$this->dtgFichases->MetaAddColumn('TomaCorriente12v');
			$this->dtgFichases->MetaAddColumn('Airbags');
			$this->dtgFichases->MetaAddColumn('Alarma');
			$this->dtgFichases->MetaAddColumn('AsientoParaNinos');
			$this->dtgFichases->MetaAddColumn('AsistenciasElectronicas');
			$this->dtgFichases->MetaAddColumn('CamaraRetroceso');
			$this->dtgFichases->MetaAddColumn('CinturonesInerciales');
			$this->dtgFichases->MetaAddColumn('SensorDistanciaEstacionamiento');
			$this->dtgFichases->MetaAddColumn('DesempaniadorEspejosExteriores');
			$this->dtgFichases->MetaAddColumn('EncendidoAutoBalizasUrgencia');
			$this->dtgFichases->MetaAddColumn('FarosAntiniebla');
			$this->dtgFichases->MetaAddColumn('FarosXenon');
			$this->dtgFichases->MetaAddColumn('GanchosIsofixLatch');
			$this->dtgFichases->MetaAddColumn('Garantia');
			$this->dtgFichases->MetaAddColumn('IndicadorPresionNeumaticos');
			//$this->dtgFichases->MetaAddColumn('Lavafaros');
			$this->dtgFichases->MetaAddColumn('LucesAdaptativasCurvas');
			$this->dtgFichases->MetaAddColumn('TercerApoyaCabezaTrasero');
 * 
 */

		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// fichas_list.tpl.php as the included HTML template file
	FichasListForm::Run('FichasListForm');
?>
