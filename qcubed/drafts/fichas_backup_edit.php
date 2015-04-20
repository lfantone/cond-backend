<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
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
	class FichasBackupEditForm extends QForm {
		// Local instance of the FichasBackupMetaControl
		protected $mctFichasBackup;

		// Controls for FichasBackup's Data Fields
		protected $lblId;
		protected $txtIdMarca;
		protected $txtIdTipos;
		protected $txtModelo;
		protected $txtDescripcion;
		protected $txtPrecio;
		protected $txtCombustible;
		protected $txtCilindrada;
		protected $txtCilindros;
		protected $txtPotenciaMaxima;
		protected $txtParMotorTorque;
		protected $txtPosicion;
		protected $txtAlimentacion;
		protected $txtRelacionDeCompresion;
		protected $txtValvulas;
		protected $txtTipo;
		protected $txtMarchas;
		protected $txtTraccion;
		protected $txtVelocidadMaxima;
		protected $txtAceleracion0100;
		protected $txtConsumoUrbano;
		protected $txtConsumoInterurbano;
		protected $txtConsumoMixto;
		protected $txtEmisionesCo2;
		protected $txtTipoCarroceria;
		protected $txtPuertas;
		protected $txtPlazas;
		protected $txtFilasDeAsientos;
		protected $txtInfoEjes;
		protected $txtPeso;
		protected $txtCapacidadBaul;
		protected $txtCapacidadTanque;
		protected $txtInfoCajaCarga;
		protected $txtVolumenCajaCarga;
		protected $txtCapacidadCarga;
		protected $txtFrenosDelanteros;
		protected $txtFrenosTraseros;
		protected $txtLlantas;
		protected $txtNeumaticos;
		protected $txtSuspensionDelantera;
		protected $txtSuspensionTrasera;
		protected $txtLucesAutomatico;
		protected $txtClimatizacion;
		protected $txtAlarmaLucesEncendidas;
		protected $txtCritalesElectricos;
		protected $txtAperturaBaul;
		protected $txtAperturaTanque;
		protected $txtAsientosRegulablesAltura;
		protected $txtAsientoTraseroRebatible;
		protected $txtAsientosCalefaccionado;
		protected $txtAsientosAjustesElectronicos;
		protected $txtAsientosDelButacaDeportiva;
		protected $txtAsientoDelBipartido;
		protected $txtBotonStartStop;
		protected $txtCambioSecuencialVolante;
		protected $txtCierreCentralizado;
		protected $txtComputadoraABordo;
		protected $txtDireccionAsistida;
		protected $txtMandosAudioVolante;
		protected $txtReposabrazos;
		protected $txtControlCrucero;
		protected $txtSensorLluvia;
		protected $txtTapizado;
		protected $txtSalidasAire;
		protected $txtTechoCorredizo;
		protected $txtComandoDistancia;
		protected $txtVolanteAjusteVertical;
		protected $txtVolanteCuero;
		protected $txtMoldurasColorCarroceria;
		protected $txtEspejosElectricos;
		protected $txtEspejosRebatiblesElectricamente;
		protected $txtEspejosMemorias;
		protected $txtLavaFaros;
		protected $txtLavaLuneta;
		protected $txtCobertorCajaCarga;
		protected $txtBarrasPortaequipajeTecho;
		protected $txtBarraAntivuelco;
		protected $txtEstribos;
		protected $txtConexionAuxiliar;
		protected $txtConexionBluetooth;
		protected $txtControlPorVoz;
		protected $txtEntradaUsb;
		protected $txtLectorTarjetasSd;
		protected $txtNavegadorGps;
		protected $txtParlantes;
		protected $txtRadioAmfm;
		protected $txtRadioSatelitalXm;
		protected $txtReproductorCd;
		protected $txtReproductorDvd;
		protected $txtReproductorMp3;
		protected $txtTomaCorriente12v;
		protected $txtAirbags;
		protected $txtAlarma;
		protected $txtAsientoParaNinos;
		protected $txtAsistenciasElectronicas;
		protected $txtCamaraRetroceso;
		protected $txtCinturonesInerciales;
		protected $txtSensorDistanciaEstacionamiento;
		protected $txtDesempaniadorEspejosExteriores;
		protected $txtEncendidoAutoBalizasUrgencia;
		protected $txtFarosAntiniebla;
		protected $txtFarosXenon;
		protected $txtGanchosIsofixLatch;
		protected $txtGarantia;
		protected $txtIndicadorPresionNeumaticos;
		protected $txtLavafaros;
		protected $txtLucesAdaptativasCurvas;
		protected $txtTercerApoyaCabezaTrasero;
		protected $txtIdEstado;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		protected $btnSave;
		protected $btnDelete;
		protected $btnCancel;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			// Use the CreateFromPathInfo shortcut (this can also be done manually using the FichasBackupMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctFichasBackup = FichasBackupMetaControl::CreateFromPathInfo($this);

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
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
			$this->btnSave->CausesValidation = true;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('FichasBackup') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctFichasBackup->EditMode;
		}

		/**
		 * This Form_Validate event handler allows you to specify any custom Form Validation rules.
		 * It will also Blink() on all invalid controls, as well as Focus() on the top-most invalid control.
		 */
		protected function Form_Validate() {
			// By default, we report that Custom Validations passed
			$blnToReturn = true;

			// Custom Validation Rules
			// TODO: Be sure to set $blnToReturn to false if any custom validation fails!

			$blnFocused = false;
			foreach ($this->GetErrorControls() as $objControl) {
				// Set Focus to the top-most invalid control
				if (!$blnFocused) {
					$objControl->Focus();
					$blnFocused = true;
				}

				// Blink on ALL invalid controls
				$objControl->Blink();
			}

			return $blnToReturn;
		}

		// Button Event Handlers

		protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the FichasBackupMetaControl
			$this->mctFichasBackup->SaveFichasBackup();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the FichasBackupMetaControl
			$this->mctFichasBackup->DeleteFichasBackup();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/fichas_backup_list.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// fichas_backup_edit.tpl.php as the included HTML template file
	FichasBackupEditForm::Run('FichasBackupEditForm');
?>