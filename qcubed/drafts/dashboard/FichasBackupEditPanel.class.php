<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the FichasBackup class.  It uses the code-generated
	 * FichasBackupMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a FichasBackup columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_backup_edit.php AND
	 * fichas_backup_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FichasBackupEditPanel extends QPanel {
		// Local instance of the FichasBackupMetaControl
		protected $mctFichasBackup;

		// Controls for FichasBackup's Data Fields
		public $lblId;
		public $txtIdMarca;
		public $txtIdTipos;
		public $txtModelo;
		public $txtDescripcion;
		public $txtPrecio;
		public $txtCombustible;
		public $txtCilindrada;
		public $txtCilindros;
		public $txtPotenciaMaxima;
		public $txtParMotorTorque;
		public $txtPosicion;
		public $txtAlimentacion;
		public $txtRelacionDeCompresion;
		public $txtValvulas;
		public $txtTipo;
		public $txtMarchas;
		public $txtTraccion;
		public $txtVelocidadMaxima;
		public $txtAceleracion0100;
		public $txtConsumoUrbano;
		public $txtConsumoInterurbano;
		public $txtConsumoMixto;
		public $txtEmisionesCo2;
		public $txtTipoCarroceria;
		public $txtPuertas;
		public $txtPlazas;
		public $txtFilasDeAsientos;
		public $txtInfoEjes;
		public $txtPeso;
		public $txtCapacidadBaul;
		public $txtCapacidadTanque;
		public $txtInfoCajaCarga;
		public $txtVolumenCajaCarga;
		public $txtCapacidadCarga;
		public $txtFrenosDelanteros;
		public $txtFrenosTraseros;
		public $txtLlantas;
		public $txtNeumaticos;
		public $txtSuspensionDelantera;
		public $txtSuspensionTrasera;
		public $txtLucesAutomatico;
		public $txtClimatizacion;
		public $txtAlarmaLucesEncendidas;
		public $txtCritalesElectricos;
		public $txtAperturaBaul;
		public $txtAperturaTanque;
		public $txtAsientosRegulablesAltura;
		public $txtAsientoTraseroRebatible;
		public $txtAsientosCalefaccionado;
		public $txtAsientosAjustesElectronicos;
		public $txtAsientosDelButacaDeportiva;
		public $txtAsientoDelBipartido;
		public $txtBotonStartStop;
		public $txtCambioSecuencialVolante;
		public $txtCierreCentralizado;
		public $txtComputadoraABordo;
		public $txtDireccionAsistida;
		public $txtMandosAudioVolante;
		public $txtReposabrazos;
		public $txtControlCrucero;
		public $txtSensorLluvia;
		public $txtTapizado;
		public $txtSalidasAire;
		public $txtTechoCorredizo;
		public $txtComandoDistancia;
		public $txtVolanteAjusteVertical;
		public $txtVolanteCuero;
		public $txtMoldurasColorCarroceria;
		public $txtEspejosElectricos;
		public $txtEspejosRebatiblesElectricamente;
		public $txtEspejosMemorias;
		public $txtLavaFaros;
		public $txtLavaLuneta;
		public $txtCobertorCajaCarga;
		public $txtBarrasPortaequipajeTecho;
		public $txtBarraAntivuelco;
		public $txtEstribos;
		public $txtConexionAuxiliar;
		public $txtConexionBluetooth;
		public $txtControlPorVoz;
		public $txtEntradaUsb;
		public $txtLectorTarjetasSd;
		public $txtNavegadorGps;
		public $txtParlantes;
		public $txtRadioAmfm;
		public $txtRadioSatelitalXm;
		public $txtReproductorCd;
		public $txtReproductorDvd;
		public $txtReproductorMp3;
		public $txtTomaCorriente12v;
		public $txtAirbags;
		public $txtAlarma;
		public $txtAsientoParaNinos;
		public $txtAsistenciasElectronicas;
		public $txtCamaraRetroceso;
		public $txtCinturonesInerciales;
		public $txtSensorDistanciaEstacionamiento;
		public $txtDesempaniadorEspejosExteriores;
		public $txtEncendidoAutoBalizasUrgencia;
		public $txtFarosAntiniebla;
		public $txtFarosXenon;
		public $txtGanchosIsofixLatch;
		public $txtGarantia;
		public $txtIndicadorPresionNeumaticos;
		public $txtLavafaros;
		public $txtLucesAdaptativasCurvas;
		public $txtTercerApoyaCabezaTrasero;
		public $txtIdEstado;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intId = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'FichasBackupEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the FichasBackupMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctFichasBackup = FichasBackupMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on FichasBackup's data fields
			$this->lblId = $this->mctFichasBackup->lblId_Create();
			$this->txtIdMarca = $this->mctFichasBackup->txtIdMarca_Create();
			$this->txtIdTipos = $this->mctFichasBackup->txtIdTipos_Create();
			$this->txtModelo = $this->mctFichasBackup->txtModelo_Create();
			$this->txtDescripcion = $this->mctFichasBackup->txtDescripcion_Create();
			$this->txtPrecio = $this->mctFichasBackup->txtPrecio_Create();
			$this->txtCombustible = $this->mctFichasBackup->txtCombustible_Create();
			$this->txtCilindrada = $this->mctFichasBackup->txtCilindrada_Create();
			$this->txtCilindros = $this->mctFichasBackup->txtCilindros_Create();
			$this->txtPotenciaMaxima = $this->mctFichasBackup->txtPotenciaMaxima_Create();
			$this->txtParMotorTorque = $this->mctFichasBackup->txtParMotorTorque_Create();
			$this->txtPosicion = $this->mctFichasBackup->txtPosicion_Create();
			$this->txtAlimentacion = $this->mctFichasBackup->txtAlimentacion_Create();
			$this->txtRelacionDeCompresion = $this->mctFichasBackup->txtRelacionDeCompresion_Create();
			$this->txtValvulas = $this->mctFichasBackup->txtValvulas_Create();
			$this->txtTipo = $this->mctFichasBackup->txtTipo_Create();
			$this->txtMarchas = $this->mctFichasBackup->txtMarchas_Create();
			$this->txtTraccion = $this->mctFichasBackup->txtTraccion_Create();
			$this->txtVelocidadMaxima = $this->mctFichasBackup->txtVelocidadMaxima_Create();
			$this->txtAceleracion0100 = $this->mctFichasBackup->txtAceleracion0100_Create();
			$this->txtConsumoUrbano = $this->mctFichasBackup->txtConsumoUrbano_Create();
			$this->txtConsumoInterurbano = $this->mctFichasBackup->txtConsumoInterurbano_Create();
			$this->txtConsumoMixto = $this->mctFichasBackup->txtConsumoMixto_Create();
			$this->txtEmisionesCo2 = $this->mctFichasBackup->txtEmisionesCo2_Create();
			$this->txtTipoCarroceria = $this->mctFichasBackup->txtTipoCarroceria_Create();
			$this->txtPuertas = $this->mctFichasBackup->txtPuertas_Create();
			$this->txtPlazas = $this->mctFichasBackup->txtPlazas_Create();
			$this->txtFilasDeAsientos = $this->mctFichasBackup->txtFilasDeAsientos_Create();
			$this->txtInfoEjes = $this->mctFichasBackup->txtInfoEjes_Create();
			$this->txtPeso = $this->mctFichasBackup->txtPeso_Create();
			$this->txtCapacidadBaul = $this->mctFichasBackup->txtCapacidadBaul_Create();
			$this->txtCapacidadTanque = $this->mctFichasBackup->txtCapacidadTanque_Create();
			$this->txtInfoCajaCarga = $this->mctFichasBackup->txtInfoCajaCarga_Create();
			$this->txtVolumenCajaCarga = $this->mctFichasBackup->txtVolumenCajaCarga_Create();
			$this->txtCapacidadCarga = $this->mctFichasBackup->txtCapacidadCarga_Create();
			$this->txtFrenosDelanteros = $this->mctFichasBackup->txtFrenosDelanteros_Create();
			$this->txtFrenosTraseros = $this->mctFichasBackup->txtFrenosTraseros_Create();
			$this->txtLlantas = $this->mctFichasBackup->txtLlantas_Create();
			$this->txtNeumaticos = $this->mctFichasBackup->txtNeumaticos_Create();
			$this->txtSuspensionDelantera = $this->mctFichasBackup->txtSuspensionDelantera_Create();
			$this->txtSuspensionTrasera = $this->mctFichasBackup->txtSuspensionTrasera_Create();
			$this->txtLucesAutomatico = $this->mctFichasBackup->txtLucesAutomatico_Create();
			$this->txtClimatizacion = $this->mctFichasBackup->txtClimatizacion_Create();
			$this->txtAlarmaLucesEncendidas = $this->mctFichasBackup->txtAlarmaLucesEncendidas_Create();
			$this->txtCritalesElectricos = $this->mctFichasBackup->txtCritalesElectricos_Create();
			$this->txtAperturaBaul = $this->mctFichasBackup->txtAperturaBaul_Create();
			$this->txtAperturaTanque = $this->mctFichasBackup->txtAperturaTanque_Create();
			$this->txtAsientosRegulablesAltura = $this->mctFichasBackup->txtAsientosRegulablesAltura_Create();
			$this->txtAsientoTraseroRebatible = $this->mctFichasBackup->txtAsientoTraseroRebatible_Create();
			$this->txtAsientosCalefaccionado = $this->mctFichasBackup->txtAsientosCalefaccionado_Create();
			$this->txtAsientosAjustesElectronicos = $this->mctFichasBackup->txtAsientosAjustesElectronicos_Create();
			$this->txtAsientosDelButacaDeportiva = $this->mctFichasBackup->txtAsientosDelButacaDeportiva_Create();
			$this->txtAsientoDelBipartido = $this->mctFichasBackup->txtAsientoDelBipartido_Create();
			$this->txtBotonStartStop = $this->mctFichasBackup->txtBotonStartStop_Create();
			$this->txtCambioSecuencialVolante = $this->mctFichasBackup->txtCambioSecuencialVolante_Create();
			$this->txtCierreCentralizado = $this->mctFichasBackup->txtCierreCentralizado_Create();
			$this->txtComputadoraABordo = $this->mctFichasBackup->txtComputadoraABordo_Create();
			$this->txtDireccionAsistida = $this->mctFichasBackup->txtDireccionAsistida_Create();
			$this->txtMandosAudioVolante = $this->mctFichasBackup->txtMandosAudioVolante_Create();
			$this->txtReposabrazos = $this->mctFichasBackup->txtReposabrazos_Create();
			$this->txtControlCrucero = $this->mctFichasBackup->txtControlCrucero_Create();
			$this->txtSensorLluvia = $this->mctFichasBackup->txtSensorLluvia_Create();
			$this->txtTapizado = $this->mctFichasBackup->txtTapizado_Create();
			$this->txtSalidasAire = $this->mctFichasBackup->txtSalidasAire_Create();
			$this->txtTechoCorredizo = $this->mctFichasBackup->txtTechoCorredizo_Create();
			$this->txtComandoDistancia = $this->mctFichasBackup->txtComandoDistancia_Create();
			$this->txtVolanteAjusteVertical = $this->mctFichasBackup->txtVolanteAjusteVertical_Create();
			$this->txtVolanteCuero = $this->mctFichasBackup->txtVolanteCuero_Create();
			$this->txtMoldurasColorCarroceria = $this->mctFichasBackup->txtMoldurasColorCarroceria_Create();
			$this->txtEspejosElectricos = $this->mctFichasBackup->txtEspejosElectricos_Create();
			$this->txtEspejosRebatiblesElectricamente = $this->mctFichasBackup->txtEspejosRebatiblesElectricamente_Create();
			$this->txtEspejosMemorias = $this->mctFichasBackup->txtEspejosMemorias_Create();
			$this->txtLavaFaros = $this->mctFichasBackup->txtLavaFaros_Create();
			$this->txtLavaLuneta = $this->mctFichasBackup->txtLavaLuneta_Create();
			$this->txtCobertorCajaCarga = $this->mctFichasBackup->txtCobertorCajaCarga_Create();
			$this->txtBarrasPortaequipajeTecho = $this->mctFichasBackup->txtBarrasPortaequipajeTecho_Create();
			$this->txtBarraAntivuelco = $this->mctFichasBackup->txtBarraAntivuelco_Create();
			$this->txtEstribos = $this->mctFichasBackup->txtEstribos_Create();
			$this->txtConexionAuxiliar = $this->mctFichasBackup->txtConexionAuxiliar_Create();
			$this->txtConexionBluetooth = $this->mctFichasBackup->txtConexionBluetooth_Create();
			$this->txtControlPorVoz = $this->mctFichasBackup->txtControlPorVoz_Create();
			$this->txtEntradaUsb = $this->mctFichasBackup->txtEntradaUsb_Create();
			$this->txtLectorTarjetasSd = $this->mctFichasBackup->txtLectorTarjetasSd_Create();
			$this->txtNavegadorGps = $this->mctFichasBackup->txtNavegadorGps_Create();
			$this->txtParlantes = $this->mctFichasBackup->txtParlantes_Create();
			$this->txtRadioAmfm = $this->mctFichasBackup->txtRadioAmfm_Create();
			$this->txtRadioSatelitalXm = $this->mctFichasBackup->txtRadioSatelitalXm_Create();
			$this->txtReproductorCd = $this->mctFichasBackup->txtReproductorCd_Create();
			$this->txtReproductorDvd = $this->mctFichasBackup->txtReproductorDvd_Create();
			$this->txtReproductorMp3 = $this->mctFichasBackup->txtReproductorMp3_Create();
			$this->txtTomaCorriente12v = $this->mctFichasBackup->txtTomaCorriente12v_Create();
			$this->txtAirbags = $this->mctFichasBackup->txtAirbags_Create();
			$this->txtAlarma = $this->mctFichasBackup->txtAlarma_Create();
			$this->txtAsientoParaNinos = $this->mctFichasBackup->txtAsientoParaNinos_Create();
			$this->txtAsistenciasElectronicas = $this->mctFichasBackup->txtAsistenciasElectronicas_Create();
			$this->txtCamaraRetroceso = $this->mctFichasBackup->txtCamaraRetroceso_Create();
			$this->txtCinturonesInerciales = $this->mctFichasBackup->txtCinturonesInerciales_Create();
			$this->txtSensorDistanciaEstacionamiento = $this->mctFichasBackup->txtSensorDistanciaEstacionamiento_Create();
			$this->txtDesempaniadorEspejosExteriores = $this->mctFichasBackup->txtDesempaniadorEspejosExteriores_Create();
			$this->txtEncendidoAutoBalizasUrgencia = $this->mctFichasBackup->txtEncendidoAutoBalizasUrgencia_Create();
			$this->txtFarosAntiniebla = $this->mctFichasBackup->txtFarosAntiniebla_Create();
			$this->txtFarosXenon = $this->mctFichasBackup->txtFarosXenon_Create();
			$this->txtGanchosIsofixLatch = $this->mctFichasBackup->txtGanchosIsofixLatch_Create();
			$this->txtGarantia = $this->mctFichasBackup->txtGarantia_Create();
			$this->txtIndicadorPresionNeumaticos = $this->mctFichasBackup->txtIndicadorPresionNeumaticos_Create();
			$this->txtLavafaros = $this->mctFichasBackup->txtLavafaros_Create();
			$this->txtLucesAdaptativasCurvas = $this->mctFichasBackup->txtLucesAdaptativasCurvas_Create();
			$this->txtTercerApoyaCabezaTrasero = $this->mctFichasBackup->txtTercerApoyaCabezaTrasero_Create();
			$this->txtIdEstado = $this->mctFichasBackup->txtIdEstado_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('FichasBackup'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctFichasBackup->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the FichasBackupMetaControl
			$this->mctFichasBackup->SaveFichasBackup();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the FichasBackupMetaControl
			$this->mctFichasBackup->DeleteFichasBackup();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}
	}
?>