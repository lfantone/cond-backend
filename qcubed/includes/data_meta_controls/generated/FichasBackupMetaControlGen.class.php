<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FichasBackup class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FichasBackup object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FichasBackupMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FichasBackup $FichasBackup the actual FichasBackup data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $IdMarcaControl
	 * property-read QLabel $IdMarcaLabel
	 * property QTextBox $IdTiposControl
	 * property-read QLabel $IdTiposLabel
	 * property QTextBox $ModeloControl
	 * property-read QLabel $ModeloLabel
	 * property QTextBox $DescripcionControl
	 * property-read QLabel $DescripcionLabel
	 * property QTextBox $PrecioControl
	 * property-read QLabel $PrecioLabel
	 * property QTextBox $CombustibleControl
	 * property-read QLabel $CombustibleLabel
	 * property QTextBox $CilindradaControl
	 * property-read QLabel $CilindradaLabel
	 * property QTextBox $CilindrosControl
	 * property-read QLabel $CilindrosLabel
	 * property QTextBox $PotenciaMaximaControl
	 * property-read QLabel $PotenciaMaximaLabel
	 * property QTextBox $ParMotorTorqueControl
	 * property-read QLabel $ParMotorTorqueLabel
	 * property QTextBox $PosicionControl
	 * property-read QLabel $PosicionLabel
	 * property QTextBox $AlimentacionControl
	 * property-read QLabel $AlimentacionLabel
	 * property QTextBox $RelacionDeCompresionControl
	 * property-read QLabel $RelacionDeCompresionLabel
	 * property QTextBox $ValvulasControl
	 * property-read QLabel $ValvulasLabel
	 * property QTextBox $TipoControl
	 * property-read QLabel $TipoLabel
	 * property QTextBox $MarchasControl
	 * property-read QLabel $MarchasLabel
	 * property QTextBox $TraccionControl
	 * property-read QLabel $TraccionLabel
	 * property QTextBox $VelocidadMaximaControl
	 * property-read QLabel $VelocidadMaximaLabel
	 * property QTextBox $Aceleracion0100Control
	 * property-read QLabel $Aceleracion0100Label
	 * property QTextBox $ConsumoUrbanoControl
	 * property-read QLabel $ConsumoUrbanoLabel
	 * property QTextBox $ConsumoInterurbanoControl
	 * property-read QLabel $ConsumoInterurbanoLabel
	 * property QTextBox $ConsumoMixtoControl
	 * property-read QLabel $ConsumoMixtoLabel
	 * property QTextBox $EmisionesCo2Control
	 * property-read QLabel $EmisionesCo2Label
	 * property QTextBox $TipoCarroceriaControl
	 * property-read QLabel $TipoCarroceriaLabel
	 * property QTextBox $PuertasControl
	 * property-read QLabel $PuertasLabel
	 * property QTextBox $PlazasControl
	 * property-read QLabel $PlazasLabel
	 * property QTextBox $FilasDeAsientosControl
	 * property-read QLabel $FilasDeAsientosLabel
	 * property QTextBox $InfoEjesControl
	 * property-read QLabel $InfoEjesLabel
	 * property QTextBox $PesoControl
	 * property-read QLabel $PesoLabel
	 * property QTextBox $CapacidadBaulControl
	 * property-read QLabel $CapacidadBaulLabel
	 * property QTextBox $CapacidadTanqueControl
	 * property-read QLabel $CapacidadTanqueLabel
	 * property QTextBox $InfoCajaCargaControl
	 * property-read QLabel $InfoCajaCargaLabel
	 * property QTextBox $VolumenCajaCargaControl
	 * property-read QLabel $VolumenCajaCargaLabel
	 * property QTextBox $CapacidadCargaControl
	 * property-read QLabel $CapacidadCargaLabel
	 * property QTextBox $FrenosDelanterosControl
	 * property-read QLabel $FrenosDelanterosLabel
	 * property QTextBox $FrenosTraserosControl
	 * property-read QLabel $FrenosTraserosLabel
	 * property QTextBox $LlantasControl
	 * property-read QLabel $LlantasLabel
	 * property QTextBox $NeumaticosControl
	 * property-read QLabel $NeumaticosLabel
	 * property QTextBox $SuspensionDelanteraControl
	 * property-read QLabel $SuspensionDelanteraLabel
	 * property QTextBox $SuspensionTraseraControl
	 * property-read QLabel $SuspensionTraseraLabel
	 * property QTextBox $LucesAutomaticoControl
	 * property-read QLabel $LucesAutomaticoLabel
	 * property QTextBox $ClimatizacionControl
	 * property-read QLabel $ClimatizacionLabel
	 * property QTextBox $AlarmaLucesEncendidasControl
	 * property-read QLabel $AlarmaLucesEncendidasLabel
	 * property QTextBox $CritalesElectricosControl
	 * property-read QLabel $CritalesElectricosLabel
	 * property QTextBox $AperturaBaulControl
	 * property-read QLabel $AperturaBaulLabel
	 * property QTextBox $AperturaTanqueControl
	 * property-read QLabel $AperturaTanqueLabel
	 * property QTextBox $AsientosRegulablesAlturaControl
	 * property-read QLabel $AsientosRegulablesAlturaLabel
	 * property QTextBox $AsientoTraseroRebatibleControl
	 * property-read QLabel $AsientoTraseroRebatibleLabel
	 * property QTextBox $AsientosCalefaccionadoControl
	 * property-read QLabel $AsientosCalefaccionadoLabel
	 * property QTextBox $AsientosAjustesElectronicosControl
	 * property-read QLabel $AsientosAjustesElectronicosLabel
	 * property QTextBox $AsientosDelButacaDeportivaControl
	 * property-read QLabel $AsientosDelButacaDeportivaLabel
	 * property QTextBox $AsientoDelBipartidoControl
	 * property-read QLabel $AsientoDelBipartidoLabel
	 * property QTextBox $BotonStartStopControl
	 * property-read QLabel $BotonStartStopLabel
	 * property QTextBox $CambioSecuencialVolanteControl
	 * property-read QLabel $CambioSecuencialVolanteLabel
	 * property QTextBox $CierreCentralizadoControl
	 * property-read QLabel $CierreCentralizadoLabel
	 * property QTextBox $ComputadoraABordoControl
	 * property-read QLabel $ComputadoraABordoLabel
	 * property QTextBox $DireccionAsistidaControl
	 * property-read QLabel $DireccionAsistidaLabel
	 * property QTextBox $MandosAudioVolanteControl
	 * property-read QLabel $MandosAudioVolanteLabel
	 * property QTextBox $ReposabrazosControl
	 * property-read QLabel $ReposabrazosLabel
	 * property QTextBox $ControlCruceroControl
	 * property-read QLabel $ControlCruceroLabel
	 * property QTextBox $SensorLluviaControl
	 * property-read QLabel $SensorLluviaLabel
	 * property QTextBox $TapizadoControl
	 * property-read QLabel $TapizadoLabel
	 * property QTextBox $SalidasAireControl
	 * property-read QLabel $SalidasAireLabel
	 * property QTextBox $TechoCorredizoControl
	 * property-read QLabel $TechoCorredizoLabel
	 * property QTextBox $ComandoDistanciaControl
	 * property-read QLabel $ComandoDistanciaLabel
	 * property QTextBox $VolanteAjusteVerticalControl
	 * property-read QLabel $VolanteAjusteVerticalLabel
	 * property QTextBox $VolanteCueroControl
	 * property-read QLabel $VolanteCueroLabel
	 * property QTextBox $MoldurasColorCarroceriaControl
	 * property-read QLabel $MoldurasColorCarroceriaLabel
	 * property QTextBox $EspejosElectricosControl
	 * property-read QLabel $EspejosElectricosLabel
	 * property QTextBox $EspejosRebatiblesElectricamenteControl
	 * property-read QLabel $EspejosRebatiblesElectricamenteLabel
	 * property QTextBox $EspejosMemoriasControl
	 * property-read QLabel $EspejosMemoriasLabel
	 * property QTextBox $LavaFarosControl
	 * property-read QLabel $LavaFarosLabel
	 * property QTextBox $LavaLunetaControl
	 * property-read QLabel $LavaLunetaLabel
	 * property QTextBox $CobertorCajaCargaControl
	 * property-read QLabel $CobertorCajaCargaLabel
	 * property QTextBox $BarrasPortaequipajeTechoControl
	 * property-read QLabel $BarrasPortaequipajeTechoLabel
	 * property QTextBox $BarraAntivuelcoControl
	 * property-read QLabel $BarraAntivuelcoLabel
	 * property QTextBox $EstribosControl
	 * property-read QLabel $EstribosLabel
	 * property QTextBox $ConexionAuxiliarControl
	 * property-read QLabel $ConexionAuxiliarLabel
	 * property QTextBox $ConexionBluetoothControl
	 * property-read QLabel $ConexionBluetoothLabel
	 * property QTextBox $ControlPorVozControl
	 * property-read QLabel $ControlPorVozLabel
	 * property QTextBox $EntradaUsbControl
	 * property-read QLabel $EntradaUsbLabel
	 * property QTextBox $LectorTarjetasSdControl
	 * property-read QLabel $LectorTarjetasSdLabel
	 * property QTextBox $NavegadorGpsControl
	 * property-read QLabel $NavegadorGpsLabel
	 * property QTextBox $ParlantesControl
	 * property-read QLabel $ParlantesLabel
	 * property QTextBox $RadioAmfmControl
	 * property-read QLabel $RadioAmfmLabel
	 * property QTextBox $RadioSatelitalXmControl
	 * property-read QLabel $RadioSatelitalXmLabel
	 * property QTextBox $ReproductorCdControl
	 * property-read QLabel $ReproductorCdLabel
	 * property QTextBox $ReproductorDvdControl
	 * property-read QLabel $ReproductorDvdLabel
	 * property QTextBox $ReproductorMp3Control
	 * property-read QLabel $ReproductorMp3Label
	 * property QTextBox $TomaCorriente12vControl
	 * property-read QLabel $TomaCorriente12vLabel
	 * property QTextBox $AirbagsControl
	 * property-read QLabel $AirbagsLabel
	 * property QTextBox $AlarmaControl
	 * property-read QLabel $AlarmaLabel
	 * property QTextBox $AsientoParaNinosControl
	 * property-read QLabel $AsientoParaNinosLabel
	 * property QTextBox $AsistenciasElectronicasControl
	 * property-read QLabel $AsistenciasElectronicasLabel
	 * property QTextBox $CamaraRetrocesoControl
	 * property-read QLabel $CamaraRetrocesoLabel
	 * property QTextBox $CinturonesInercialesControl
	 * property-read QLabel $CinturonesInercialesLabel
	 * property QTextBox $SensorDistanciaEstacionamientoControl
	 * property-read QLabel $SensorDistanciaEstacionamientoLabel
	 * property QTextBox $DesempaniadorEspejosExterioresControl
	 * property-read QLabel $DesempaniadorEspejosExterioresLabel
	 * property QTextBox $EncendidoAutoBalizasUrgenciaControl
	 * property-read QLabel $EncendidoAutoBalizasUrgenciaLabel
	 * property QTextBox $FarosAntinieblaControl
	 * property-read QLabel $FarosAntinieblaLabel
	 * property QTextBox $FarosXenonControl
	 * property-read QLabel $FarosXenonLabel
	 * property QTextBox $GanchosIsofixLatchControl
	 * property-read QLabel $GanchosIsofixLatchLabel
	 * property QTextBox $GarantiaControl
	 * property-read QLabel $GarantiaLabel
	 * property QTextBox $IndicadorPresionNeumaticosControl
	 * property-read QLabel $IndicadorPresionNeumaticosLabel
	 * property QTextBox $LavafarosControl
	 * property-read QLabel $LavafarosLabel
	 * property QTextBox $LucesAdaptativasCurvasControl
	 * property-read QLabel $LucesAdaptativasCurvasLabel
	 * property QTextBox $TercerApoyaCabezaTraseroControl
	 * property-read QLabel $TercerApoyaCabezaTraseroLabel
	 * property QIntegerTextBox $IdEstadoControl
	 * property-read QLabel $IdEstadoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FichasBackupMetaControlGen extends QBaseClass {
		// General Variables
		protected $objFichasBackup;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of FichasBackup's individual data fields
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

		// Controls that allow the viewing of FichasBackup's individual data fields
		protected $lblIdMarca;
		protected $lblIdTipos;
		protected $lblModelo;
		protected $lblDescripcion;
		protected $lblPrecio;
		protected $lblCombustible;
		protected $lblCilindrada;
		protected $lblCilindros;
		protected $lblPotenciaMaxima;
		protected $lblParMotorTorque;
		protected $lblPosicion;
		protected $lblAlimentacion;
		protected $lblRelacionDeCompresion;
		protected $lblValvulas;
		protected $lblTipo;
		protected $lblMarchas;
		protected $lblTraccion;
		protected $lblVelocidadMaxima;
		protected $lblAceleracion0100;
		protected $lblConsumoUrbano;
		protected $lblConsumoInterurbano;
		protected $lblConsumoMixto;
		protected $lblEmisionesCo2;
		protected $lblTipoCarroceria;
		protected $lblPuertas;
		protected $lblPlazas;
		protected $lblFilasDeAsientos;
		protected $lblInfoEjes;
		protected $lblPeso;
		protected $lblCapacidadBaul;
		protected $lblCapacidadTanque;
		protected $lblInfoCajaCarga;
		protected $lblVolumenCajaCarga;
		protected $lblCapacidadCarga;
		protected $lblFrenosDelanteros;
		protected $lblFrenosTraseros;
		protected $lblLlantas;
		protected $lblNeumaticos;
		protected $lblSuspensionDelantera;
		protected $lblSuspensionTrasera;
		protected $lblLucesAutomatico;
		protected $lblClimatizacion;
		protected $lblAlarmaLucesEncendidas;
		protected $lblCritalesElectricos;
		protected $lblAperturaBaul;
		protected $lblAperturaTanque;
		protected $lblAsientosRegulablesAltura;
		protected $lblAsientoTraseroRebatible;
		protected $lblAsientosCalefaccionado;
		protected $lblAsientosAjustesElectronicos;
		protected $lblAsientosDelButacaDeportiva;
		protected $lblAsientoDelBipartido;
		protected $lblBotonStartStop;
		protected $lblCambioSecuencialVolante;
		protected $lblCierreCentralizado;
		protected $lblComputadoraABordo;
		protected $lblDireccionAsistida;
		protected $lblMandosAudioVolante;
		protected $lblReposabrazos;
		protected $lblControlCrucero;
		protected $lblSensorLluvia;
		protected $lblTapizado;
		protected $lblSalidasAire;
		protected $lblTechoCorredizo;
		protected $lblComandoDistancia;
		protected $lblVolanteAjusteVertical;
		protected $lblVolanteCuero;
		protected $lblMoldurasColorCarroceria;
		protected $lblEspejosElectricos;
		protected $lblEspejosRebatiblesElectricamente;
		protected $lblEspejosMemorias;
		protected $lblLavaFaros;
		protected $lblLavaLuneta;
		protected $lblCobertorCajaCarga;
		protected $lblBarrasPortaequipajeTecho;
		protected $lblBarraAntivuelco;
		protected $lblEstribos;
		protected $lblConexionAuxiliar;
		protected $lblConexionBluetooth;
		protected $lblControlPorVoz;
		protected $lblEntradaUsb;
		protected $lblLectorTarjetasSd;
		protected $lblNavegadorGps;
		protected $lblParlantes;
		protected $lblRadioAmfm;
		protected $lblRadioSatelitalXm;
		protected $lblReproductorCd;
		protected $lblReproductorDvd;
		protected $lblReproductorMp3;
		protected $lblTomaCorriente12v;
		protected $lblAirbags;
		protected $lblAlarma;
		protected $lblAsientoParaNinos;
		protected $lblAsistenciasElectronicas;
		protected $lblCamaraRetroceso;
		protected $lblCinturonesInerciales;
		protected $lblSensorDistanciaEstacionamiento;
		protected $lblDesempaniadorEspejosExteriores;
		protected $lblEncendidoAutoBalizasUrgencia;
		protected $lblFarosAntiniebla;
		protected $lblFarosXenon;
		protected $lblGanchosIsofixLatch;
		protected $lblGarantia;
		protected $lblIndicadorPresionNeumaticos;
		protected $lblLavafaros;
		protected $lblLucesAdaptativasCurvas;
		protected $lblTercerApoyaCabezaTrasero;
		protected $lblIdEstado;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FichasBackupMetaControl to edit a single FichasBackup object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FichasBackup object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasBackupMetaControl
		 * @param FichasBackup $objFichasBackup new or existing FichasBackup object
		 */
		 public function __construct($objParentObject, FichasBackup $objFichasBackup) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FichasBackupMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FichasBackup object
			$this->objFichasBackup = $objFichasBackup;

			// Figure out if we're Editing or Creating New
			if ($this->objFichasBackup->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to 
		 * edit, or if we are also allowed to create a new one, etc.
		 * 
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasBackupMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FichasBackup object creation - defaults to CreateOrEdit
 		 * @return FichasBackupMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objFichasBackup = FichasBackup::Load($intId);

				// FichasBackup was found -- return it!
				if ($objFichasBackup)
					return new FichasBackupMetaControl($objParentObject, $objFichasBackup);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FichasBackup object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FichasBackupMetaControl($objParentObject, new FichasBackup());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasBackupMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasBackup object creation - defaults to CreateOrEdit
		 * @return FichasBackupMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return FichasBackupMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasBackupMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasBackup object creation - defaults to CreateOrEdit
		 * @return FichasBackupMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return FichasBackupMetaControl::Create($objParentObject, $intId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblId_Create($strControlId = null) {
			$this->lblId = new QLabel($this->objParentObject, $strControlId);
			$this->lblId->Name = QApplication::Translate('Id');
			if ($this->blnEditMode)
				$this->lblId->Text = $this->objFichasBackup->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdMarca
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdMarca_Create($strControlId = null) {
			$this->txtIdMarca = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdMarca->Name = QApplication::Translate('Id Marca');
			$this->txtIdMarca->Text = $this->objFichasBackup->IdMarca;
			$this->txtIdMarca->Required = true;
			return $this->txtIdMarca;
		}

		/**
		 * Create and setup QLabel lblIdMarca
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdMarca_Create($strControlId = null, $strFormat = null) {
			$this->lblIdMarca = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdMarca->Name = QApplication::Translate('Id Marca');
			$this->lblIdMarca->Text = $this->objFichasBackup->IdMarca;
			$this->lblIdMarca->Required = true;
			$this->lblIdMarca->Format = $strFormat;
			return $this->lblIdMarca;
		}

		/**
		 * Create and setup QTextBox txtIdTipos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtIdTipos_Create($strControlId = null) {
			$this->txtIdTipos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtIdTipos->Name = QApplication::Translate('Id Tipos');
			$this->txtIdTipos->Text = $this->objFichasBackup->IdTipos;
			$this->txtIdTipos->Required = true;
			$this->txtIdTipos->MaxLength = FichasBackup::IdTiposMaxLength;
			return $this->txtIdTipos;
		}

		/**
		 * Create and setup QLabel lblIdTipos
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdTipos_Create($strControlId = null) {
			$this->lblIdTipos = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdTipos->Name = QApplication::Translate('Id Tipos');
			$this->lblIdTipos->Text = $this->objFichasBackup->IdTipos;
			$this->lblIdTipos->Required = true;
			return $this->lblIdTipos;
		}

		/**
		 * Create and setup QTextBox txtModelo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtModelo_Create($strControlId = null) {
			$this->txtModelo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtModelo->Name = QApplication::Translate('Modelo');
			$this->txtModelo->Text = $this->objFichasBackup->Modelo;
			$this->txtModelo->Required = true;
			$this->txtModelo->MaxLength = FichasBackup::ModeloMaxLength;
			return $this->txtModelo;
		}

		/**
		 * Create and setup QLabel lblModelo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblModelo_Create($strControlId = null) {
			$this->lblModelo = new QLabel($this->objParentObject, $strControlId);
			$this->lblModelo->Name = QApplication::Translate('Modelo');
			$this->lblModelo->Text = $this->objFichasBackup->Modelo;
			$this->lblModelo->Required = true;
			return $this->lblModelo;
		}

		/**
		 * Create and setup QTextBox txtDescripcion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDescripcion_Create($strControlId = null) {
			$this->txtDescripcion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDescripcion->Name = QApplication::Translate('Descripcion');
			$this->txtDescripcion->Text = $this->objFichasBackup->Descripcion;
			$this->txtDescripcion->Required = true;
			$this->txtDescripcion->TextMode = QTextMode::MultiLine;
			return $this->txtDescripcion;
		}

		/**
		 * Create and setup QLabel lblDescripcion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDescripcion_Create($strControlId = null) {
			$this->lblDescripcion = new QLabel($this->objParentObject, $strControlId);
			$this->lblDescripcion->Name = QApplication::Translate('Descripcion');
			$this->lblDescripcion->Text = $this->objFichasBackup->Descripcion;
			$this->lblDescripcion->Required = true;
			return $this->lblDescripcion;
		}

		/**
		 * Create and setup QTextBox txtPrecio
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPrecio_Create($strControlId = null) {
			$this->txtPrecio = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPrecio->Name = QApplication::Translate('Precio');
			$this->txtPrecio->Text = $this->objFichasBackup->Precio;
			$this->txtPrecio->Required = true;
			$this->txtPrecio->MaxLength = FichasBackup::PrecioMaxLength;
			return $this->txtPrecio;
		}

		/**
		 * Create and setup QLabel lblPrecio
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPrecio_Create($strControlId = null) {
			$this->lblPrecio = new QLabel($this->objParentObject, $strControlId);
			$this->lblPrecio->Name = QApplication::Translate('Precio');
			$this->lblPrecio->Text = $this->objFichasBackup->Precio;
			$this->lblPrecio->Required = true;
			return $this->lblPrecio;
		}

		/**
		 * Create and setup QTextBox txtCombustible
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCombustible_Create($strControlId = null) {
			$this->txtCombustible = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCombustible->Name = QApplication::Translate('Combustible');
			$this->txtCombustible->Text = $this->objFichasBackup->Combustible;
			$this->txtCombustible->MaxLength = FichasBackup::CombustibleMaxLength;
			return $this->txtCombustible;
		}

		/**
		 * Create and setup QLabel lblCombustible
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCombustible_Create($strControlId = null) {
			$this->lblCombustible = new QLabel($this->objParentObject, $strControlId);
			$this->lblCombustible->Name = QApplication::Translate('Combustible');
			$this->lblCombustible->Text = $this->objFichasBackup->Combustible;
			return $this->lblCombustible;
		}

		/**
		 * Create and setup QTextBox txtCilindrada
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCilindrada_Create($strControlId = null) {
			$this->txtCilindrada = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCilindrada->Name = QApplication::Translate('Cilindrada');
			$this->txtCilindrada->Text = $this->objFichasBackup->Cilindrada;
			$this->txtCilindrada->MaxLength = FichasBackup::CilindradaMaxLength;
			return $this->txtCilindrada;
		}

		/**
		 * Create and setup QLabel lblCilindrada
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCilindrada_Create($strControlId = null) {
			$this->lblCilindrada = new QLabel($this->objParentObject, $strControlId);
			$this->lblCilindrada->Name = QApplication::Translate('Cilindrada');
			$this->lblCilindrada->Text = $this->objFichasBackup->Cilindrada;
			return $this->lblCilindrada;
		}

		/**
		 * Create and setup QTextBox txtCilindros
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCilindros_Create($strControlId = null) {
			$this->txtCilindros = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCilindros->Name = QApplication::Translate('Cilindros');
			$this->txtCilindros->Text = $this->objFichasBackup->Cilindros;
			$this->txtCilindros->MaxLength = FichasBackup::CilindrosMaxLength;
			return $this->txtCilindros;
		}

		/**
		 * Create and setup QLabel lblCilindros
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCilindros_Create($strControlId = null) {
			$this->lblCilindros = new QLabel($this->objParentObject, $strControlId);
			$this->lblCilindros->Name = QApplication::Translate('Cilindros');
			$this->lblCilindros->Text = $this->objFichasBackup->Cilindros;
			return $this->lblCilindros;
		}

		/**
		 * Create and setup QTextBox txtPotenciaMaxima
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPotenciaMaxima_Create($strControlId = null) {
			$this->txtPotenciaMaxima = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPotenciaMaxima->Name = QApplication::Translate('Potencia Maxima');
			$this->txtPotenciaMaxima->Text = $this->objFichasBackup->PotenciaMaxima;
			$this->txtPotenciaMaxima->MaxLength = FichasBackup::PotenciaMaximaMaxLength;
			return $this->txtPotenciaMaxima;
		}

		/**
		 * Create and setup QLabel lblPotenciaMaxima
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPotenciaMaxima_Create($strControlId = null) {
			$this->lblPotenciaMaxima = new QLabel($this->objParentObject, $strControlId);
			$this->lblPotenciaMaxima->Name = QApplication::Translate('Potencia Maxima');
			$this->lblPotenciaMaxima->Text = $this->objFichasBackup->PotenciaMaxima;
			return $this->lblPotenciaMaxima;
		}

		/**
		 * Create and setup QTextBox txtParMotorTorque
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtParMotorTorque_Create($strControlId = null) {
			$this->txtParMotorTorque = new QTextBox($this->objParentObject, $strControlId);
			$this->txtParMotorTorque->Name = QApplication::Translate('Par Motor Torque');
			$this->txtParMotorTorque->Text = $this->objFichasBackup->ParMotorTorque;
			$this->txtParMotorTorque->MaxLength = FichasBackup::ParMotorTorqueMaxLength;
			return $this->txtParMotorTorque;
		}

		/**
		 * Create and setup QLabel lblParMotorTorque
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblParMotorTorque_Create($strControlId = null) {
			$this->lblParMotorTorque = new QLabel($this->objParentObject, $strControlId);
			$this->lblParMotorTorque->Name = QApplication::Translate('Par Motor Torque');
			$this->lblParMotorTorque->Text = $this->objFichasBackup->ParMotorTorque;
			return $this->lblParMotorTorque;
		}

		/**
		 * Create and setup QTextBox txtPosicion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPosicion_Create($strControlId = null) {
			$this->txtPosicion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPosicion->Name = QApplication::Translate('Posicion');
			$this->txtPosicion->Text = $this->objFichasBackup->Posicion;
			$this->txtPosicion->MaxLength = FichasBackup::PosicionMaxLength;
			return $this->txtPosicion;
		}

		/**
		 * Create and setup QLabel lblPosicion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPosicion_Create($strControlId = null) {
			$this->lblPosicion = new QLabel($this->objParentObject, $strControlId);
			$this->lblPosicion->Name = QApplication::Translate('Posicion');
			$this->lblPosicion->Text = $this->objFichasBackup->Posicion;
			return $this->lblPosicion;
		}

		/**
		 * Create and setup QTextBox txtAlimentacion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAlimentacion_Create($strControlId = null) {
			$this->txtAlimentacion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAlimentacion->Name = QApplication::Translate('Alimentacion');
			$this->txtAlimentacion->Text = $this->objFichasBackup->Alimentacion;
			$this->txtAlimentacion->MaxLength = FichasBackup::AlimentacionMaxLength;
			return $this->txtAlimentacion;
		}

		/**
		 * Create and setup QLabel lblAlimentacion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAlimentacion_Create($strControlId = null) {
			$this->lblAlimentacion = new QLabel($this->objParentObject, $strControlId);
			$this->lblAlimentacion->Name = QApplication::Translate('Alimentacion');
			$this->lblAlimentacion->Text = $this->objFichasBackup->Alimentacion;
			return $this->lblAlimentacion;
		}

		/**
		 * Create and setup QTextBox txtRelacionDeCompresion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtRelacionDeCompresion_Create($strControlId = null) {
			$this->txtRelacionDeCompresion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtRelacionDeCompresion->Name = QApplication::Translate('Relacion De Compresion');
			$this->txtRelacionDeCompresion->Text = $this->objFichasBackup->RelacionDeCompresion;
			$this->txtRelacionDeCompresion->MaxLength = FichasBackup::RelacionDeCompresionMaxLength;
			return $this->txtRelacionDeCompresion;
		}

		/**
		 * Create and setup QLabel lblRelacionDeCompresion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRelacionDeCompresion_Create($strControlId = null) {
			$this->lblRelacionDeCompresion = new QLabel($this->objParentObject, $strControlId);
			$this->lblRelacionDeCompresion->Name = QApplication::Translate('Relacion De Compresion');
			$this->lblRelacionDeCompresion->Text = $this->objFichasBackup->RelacionDeCompresion;
			return $this->lblRelacionDeCompresion;
		}

		/**
		 * Create and setup QTextBox txtValvulas
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtValvulas_Create($strControlId = null) {
			$this->txtValvulas = new QTextBox($this->objParentObject, $strControlId);
			$this->txtValvulas->Name = QApplication::Translate('Valvulas');
			$this->txtValvulas->Text = $this->objFichasBackup->Valvulas;
			$this->txtValvulas->MaxLength = FichasBackup::ValvulasMaxLength;
			return $this->txtValvulas;
		}

		/**
		 * Create and setup QLabel lblValvulas
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblValvulas_Create($strControlId = null) {
			$this->lblValvulas = new QLabel($this->objParentObject, $strControlId);
			$this->lblValvulas->Name = QApplication::Translate('Valvulas');
			$this->lblValvulas->Text = $this->objFichasBackup->Valvulas;
			return $this->lblValvulas;
		}

		/**
		 * Create and setup QTextBox txtTipo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTipo_Create($strControlId = null) {
			$this->txtTipo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTipo->Name = QApplication::Translate('Tipo');
			$this->txtTipo->Text = $this->objFichasBackup->Tipo;
			$this->txtTipo->MaxLength = FichasBackup::TipoMaxLength;
			return $this->txtTipo;
		}

		/**
		 * Create and setup QLabel lblTipo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTipo_Create($strControlId = null) {
			$this->lblTipo = new QLabel($this->objParentObject, $strControlId);
			$this->lblTipo->Name = QApplication::Translate('Tipo');
			$this->lblTipo->Text = $this->objFichasBackup->Tipo;
			return $this->lblTipo;
		}

		/**
		 * Create and setup QTextBox txtMarchas
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtMarchas_Create($strControlId = null) {
			$this->txtMarchas = new QTextBox($this->objParentObject, $strControlId);
			$this->txtMarchas->Name = QApplication::Translate('Marchas');
			$this->txtMarchas->Text = $this->objFichasBackup->Marchas;
			$this->txtMarchas->MaxLength = FichasBackup::MarchasMaxLength;
			return $this->txtMarchas;
		}

		/**
		 * Create and setup QLabel lblMarchas
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMarchas_Create($strControlId = null) {
			$this->lblMarchas = new QLabel($this->objParentObject, $strControlId);
			$this->lblMarchas->Name = QApplication::Translate('Marchas');
			$this->lblMarchas->Text = $this->objFichasBackup->Marchas;
			return $this->lblMarchas;
		}

		/**
		 * Create and setup QTextBox txtTraccion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTraccion_Create($strControlId = null) {
			$this->txtTraccion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTraccion->Name = QApplication::Translate('Traccion');
			$this->txtTraccion->Text = $this->objFichasBackup->Traccion;
			$this->txtTraccion->MaxLength = FichasBackup::TraccionMaxLength;
			return $this->txtTraccion;
		}

		/**
		 * Create and setup QLabel lblTraccion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTraccion_Create($strControlId = null) {
			$this->lblTraccion = new QLabel($this->objParentObject, $strControlId);
			$this->lblTraccion->Name = QApplication::Translate('Traccion');
			$this->lblTraccion->Text = $this->objFichasBackup->Traccion;
			return $this->lblTraccion;
		}

		/**
		 * Create and setup QTextBox txtVelocidadMaxima
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtVelocidadMaxima_Create($strControlId = null) {
			$this->txtVelocidadMaxima = new QTextBox($this->objParentObject, $strControlId);
			$this->txtVelocidadMaxima->Name = QApplication::Translate('Velocidad Maxima');
			$this->txtVelocidadMaxima->Text = $this->objFichasBackup->VelocidadMaxima;
			$this->txtVelocidadMaxima->MaxLength = FichasBackup::VelocidadMaximaMaxLength;
			return $this->txtVelocidadMaxima;
		}

		/**
		 * Create and setup QLabel lblVelocidadMaxima
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblVelocidadMaxima_Create($strControlId = null) {
			$this->lblVelocidadMaxima = new QLabel($this->objParentObject, $strControlId);
			$this->lblVelocidadMaxima->Name = QApplication::Translate('Velocidad Maxima');
			$this->lblVelocidadMaxima->Text = $this->objFichasBackup->VelocidadMaxima;
			return $this->lblVelocidadMaxima;
		}

		/**
		 * Create and setup QTextBox txtAceleracion0100
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAceleracion0100_Create($strControlId = null) {
			$this->txtAceleracion0100 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAceleracion0100->Name = QApplication::Translate('Aceleracion 0100');
			$this->txtAceleracion0100->Text = $this->objFichasBackup->Aceleracion0100;
			$this->txtAceleracion0100->MaxLength = FichasBackup::Aceleracion0100MaxLength;
			return $this->txtAceleracion0100;
		}

		/**
		 * Create and setup QLabel lblAceleracion0100
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAceleracion0100_Create($strControlId = null) {
			$this->lblAceleracion0100 = new QLabel($this->objParentObject, $strControlId);
			$this->lblAceleracion0100->Name = QApplication::Translate('Aceleracion 0100');
			$this->lblAceleracion0100->Text = $this->objFichasBackup->Aceleracion0100;
			return $this->lblAceleracion0100;
		}

		/**
		 * Create and setup QTextBox txtConsumoUrbano
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtConsumoUrbano_Create($strControlId = null) {
			$this->txtConsumoUrbano = new QTextBox($this->objParentObject, $strControlId);
			$this->txtConsumoUrbano->Name = QApplication::Translate('Consumo Urbano');
			$this->txtConsumoUrbano->Text = $this->objFichasBackup->ConsumoUrbano;
			$this->txtConsumoUrbano->MaxLength = FichasBackup::ConsumoUrbanoMaxLength;
			return $this->txtConsumoUrbano;
		}

		/**
		 * Create and setup QLabel lblConsumoUrbano
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblConsumoUrbano_Create($strControlId = null) {
			$this->lblConsumoUrbano = new QLabel($this->objParentObject, $strControlId);
			$this->lblConsumoUrbano->Name = QApplication::Translate('Consumo Urbano');
			$this->lblConsumoUrbano->Text = $this->objFichasBackup->ConsumoUrbano;
			return $this->lblConsumoUrbano;
		}

		/**
		 * Create and setup QTextBox txtConsumoInterurbano
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtConsumoInterurbano_Create($strControlId = null) {
			$this->txtConsumoInterurbano = new QTextBox($this->objParentObject, $strControlId);
			$this->txtConsumoInterurbano->Name = QApplication::Translate('Consumo Interurbano');
			$this->txtConsumoInterurbano->Text = $this->objFichasBackup->ConsumoInterurbano;
			$this->txtConsumoInterurbano->MaxLength = FichasBackup::ConsumoInterurbanoMaxLength;
			return $this->txtConsumoInterurbano;
		}

		/**
		 * Create and setup QLabel lblConsumoInterurbano
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblConsumoInterurbano_Create($strControlId = null) {
			$this->lblConsumoInterurbano = new QLabel($this->objParentObject, $strControlId);
			$this->lblConsumoInterurbano->Name = QApplication::Translate('Consumo Interurbano');
			$this->lblConsumoInterurbano->Text = $this->objFichasBackup->ConsumoInterurbano;
			return $this->lblConsumoInterurbano;
		}

		/**
		 * Create and setup QTextBox txtConsumoMixto
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtConsumoMixto_Create($strControlId = null) {
			$this->txtConsumoMixto = new QTextBox($this->objParentObject, $strControlId);
			$this->txtConsumoMixto->Name = QApplication::Translate('Consumo Mixto');
			$this->txtConsumoMixto->Text = $this->objFichasBackup->ConsumoMixto;
			$this->txtConsumoMixto->MaxLength = FichasBackup::ConsumoMixtoMaxLength;
			return $this->txtConsumoMixto;
		}

		/**
		 * Create and setup QLabel lblConsumoMixto
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblConsumoMixto_Create($strControlId = null) {
			$this->lblConsumoMixto = new QLabel($this->objParentObject, $strControlId);
			$this->lblConsumoMixto->Name = QApplication::Translate('Consumo Mixto');
			$this->lblConsumoMixto->Text = $this->objFichasBackup->ConsumoMixto;
			return $this->lblConsumoMixto;
		}

		/**
		 * Create and setup QTextBox txtEmisionesCo2
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmisionesCo2_Create($strControlId = null) {
			$this->txtEmisionesCo2 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmisionesCo2->Name = QApplication::Translate('Emisiones Co 2');
			$this->txtEmisionesCo2->Text = $this->objFichasBackup->EmisionesCo2;
			$this->txtEmisionesCo2->MaxLength = FichasBackup::EmisionesCo2MaxLength;
			return $this->txtEmisionesCo2;
		}

		/**
		 * Create and setup QLabel lblEmisionesCo2
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEmisionesCo2_Create($strControlId = null) {
			$this->lblEmisionesCo2 = new QLabel($this->objParentObject, $strControlId);
			$this->lblEmisionesCo2->Name = QApplication::Translate('Emisiones Co 2');
			$this->lblEmisionesCo2->Text = $this->objFichasBackup->EmisionesCo2;
			return $this->lblEmisionesCo2;
		}

		/**
		 * Create and setup QTextBox txtTipoCarroceria
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTipoCarroceria_Create($strControlId = null) {
			$this->txtTipoCarroceria = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTipoCarroceria->Name = QApplication::Translate('Tipo Carroceria');
			$this->txtTipoCarroceria->Text = $this->objFichasBackup->TipoCarroceria;
			$this->txtTipoCarroceria->MaxLength = FichasBackup::TipoCarroceriaMaxLength;
			return $this->txtTipoCarroceria;
		}

		/**
		 * Create and setup QLabel lblTipoCarroceria
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTipoCarroceria_Create($strControlId = null) {
			$this->lblTipoCarroceria = new QLabel($this->objParentObject, $strControlId);
			$this->lblTipoCarroceria->Name = QApplication::Translate('Tipo Carroceria');
			$this->lblTipoCarroceria->Text = $this->objFichasBackup->TipoCarroceria;
			return $this->lblTipoCarroceria;
		}

		/**
		 * Create and setup QTextBox txtPuertas
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPuertas_Create($strControlId = null) {
			$this->txtPuertas = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPuertas->Name = QApplication::Translate('Puertas');
			$this->txtPuertas->Text = $this->objFichasBackup->Puertas;
			$this->txtPuertas->MaxLength = FichasBackup::PuertasMaxLength;
			return $this->txtPuertas;
		}

		/**
		 * Create and setup QLabel lblPuertas
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPuertas_Create($strControlId = null) {
			$this->lblPuertas = new QLabel($this->objParentObject, $strControlId);
			$this->lblPuertas->Name = QApplication::Translate('Puertas');
			$this->lblPuertas->Text = $this->objFichasBackup->Puertas;
			return $this->lblPuertas;
		}

		/**
		 * Create and setup QTextBox txtPlazas
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPlazas_Create($strControlId = null) {
			$this->txtPlazas = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPlazas->Name = QApplication::Translate('Plazas');
			$this->txtPlazas->Text = $this->objFichasBackup->Plazas;
			$this->txtPlazas->MaxLength = FichasBackup::PlazasMaxLength;
			return $this->txtPlazas;
		}

		/**
		 * Create and setup QLabel lblPlazas
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPlazas_Create($strControlId = null) {
			$this->lblPlazas = new QLabel($this->objParentObject, $strControlId);
			$this->lblPlazas->Name = QApplication::Translate('Plazas');
			$this->lblPlazas->Text = $this->objFichasBackup->Plazas;
			return $this->lblPlazas;
		}

		/**
		 * Create and setup QTextBox txtFilasDeAsientos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFilasDeAsientos_Create($strControlId = null) {
			$this->txtFilasDeAsientos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFilasDeAsientos->Name = QApplication::Translate('Filas De Asientos');
			$this->txtFilasDeAsientos->Text = $this->objFichasBackup->FilasDeAsientos;
			$this->txtFilasDeAsientos->MaxLength = FichasBackup::FilasDeAsientosMaxLength;
			return $this->txtFilasDeAsientos;
		}

		/**
		 * Create and setup QLabel lblFilasDeAsientos
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFilasDeAsientos_Create($strControlId = null) {
			$this->lblFilasDeAsientos = new QLabel($this->objParentObject, $strControlId);
			$this->lblFilasDeAsientos->Name = QApplication::Translate('Filas De Asientos');
			$this->lblFilasDeAsientos->Text = $this->objFichasBackup->FilasDeAsientos;
			return $this->lblFilasDeAsientos;
		}

		/**
		 * Create and setup QTextBox txtInfoEjes
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtInfoEjes_Create($strControlId = null) {
			$this->txtInfoEjes = new QTextBox($this->objParentObject, $strControlId);
			$this->txtInfoEjes->Name = QApplication::Translate('Info Ejes');
			$this->txtInfoEjes->Text = $this->objFichasBackup->InfoEjes;
			$this->txtInfoEjes->MaxLength = FichasBackup::InfoEjesMaxLength;
			return $this->txtInfoEjes;
		}

		/**
		 * Create and setup QLabel lblInfoEjes
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblInfoEjes_Create($strControlId = null) {
			$this->lblInfoEjes = new QLabel($this->objParentObject, $strControlId);
			$this->lblInfoEjes->Name = QApplication::Translate('Info Ejes');
			$this->lblInfoEjes->Text = $this->objFichasBackup->InfoEjes;
			return $this->lblInfoEjes;
		}

		/**
		 * Create and setup QTextBox txtPeso
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPeso_Create($strControlId = null) {
			$this->txtPeso = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPeso->Name = QApplication::Translate('Peso');
			$this->txtPeso->Text = $this->objFichasBackup->Peso;
			$this->txtPeso->MaxLength = FichasBackup::PesoMaxLength;
			return $this->txtPeso;
		}

		/**
		 * Create and setup QLabel lblPeso
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPeso_Create($strControlId = null) {
			$this->lblPeso = new QLabel($this->objParentObject, $strControlId);
			$this->lblPeso->Name = QApplication::Translate('Peso');
			$this->lblPeso->Text = $this->objFichasBackup->Peso;
			return $this->lblPeso;
		}

		/**
		 * Create and setup QTextBox txtCapacidadBaul
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCapacidadBaul_Create($strControlId = null) {
			$this->txtCapacidadBaul = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCapacidadBaul->Name = QApplication::Translate('Capacidad Baul');
			$this->txtCapacidadBaul->Text = $this->objFichasBackup->CapacidadBaul;
			$this->txtCapacidadBaul->MaxLength = FichasBackup::CapacidadBaulMaxLength;
			return $this->txtCapacidadBaul;
		}

		/**
		 * Create and setup QLabel lblCapacidadBaul
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCapacidadBaul_Create($strControlId = null) {
			$this->lblCapacidadBaul = new QLabel($this->objParentObject, $strControlId);
			$this->lblCapacidadBaul->Name = QApplication::Translate('Capacidad Baul');
			$this->lblCapacidadBaul->Text = $this->objFichasBackup->CapacidadBaul;
			return $this->lblCapacidadBaul;
		}

		/**
		 * Create and setup QTextBox txtCapacidadTanque
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCapacidadTanque_Create($strControlId = null) {
			$this->txtCapacidadTanque = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCapacidadTanque->Name = QApplication::Translate('Capacidad Tanque');
			$this->txtCapacidadTanque->Text = $this->objFichasBackup->CapacidadTanque;
			$this->txtCapacidadTanque->MaxLength = FichasBackup::CapacidadTanqueMaxLength;
			return $this->txtCapacidadTanque;
		}

		/**
		 * Create and setup QLabel lblCapacidadTanque
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCapacidadTanque_Create($strControlId = null) {
			$this->lblCapacidadTanque = new QLabel($this->objParentObject, $strControlId);
			$this->lblCapacidadTanque->Name = QApplication::Translate('Capacidad Tanque');
			$this->lblCapacidadTanque->Text = $this->objFichasBackup->CapacidadTanque;
			return $this->lblCapacidadTanque;
		}

		/**
		 * Create and setup QTextBox txtInfoCajaCarga
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtInfoCajaCarga_Create($strControlId = null) {
			$this->txtInfoCajaCarga = new QTextBox($this->objParentObject, $strControlId);
			$this->txtInfoCajaCarga->Name = QApplication::Translate('Info Caja Carga');
			$this->txtInfoCajaCarga->Text = $this->objFichasBackup->InfoCajaCarga;
			$this->txtInfoCajaCarga->MaxLength = FichasBackup::InfoCajaCargaMaxLength;
			return $this->txtInfoCajaCarga;
		}

		/**
		 * Create and setup QLabel lblInfoCajaCarga
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblInfoCajaCarga_Create($strControlId = null) {
			$this->lblInfoCajaCarga = new QLabel($this->objParentObject, $strControlId);
			$this->lblInfoCajaCarga->Name = QApplication::Translate('Info Caja Carga');
			$this->lblInfoCajaCarga->Text = $this->objFichasBackup->InfoCajaCarga;
			return $this->lblInfoCajaCarga;
		}

		/**
		 * Create and setup QTextBox txtVolumenCajaCarga
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtVolumenCajaCarga_Create($strControlId = null) {
			$this->txtVolumenCajaCarga = new QTextBox($this->objParentObject, $strControlId);
			$this->txtVolumenCajaCarga->Name = QApplication::Translate('Volumen Caja Carga');
			$this->txtVolumenCajaCarga->Text = $this->objFichasBackup->VolumenCajaCarga;
			$this->txtVolumenCajaCarga->MaxLength = FichasBackup::VolumenCajaCargaMaxLength;
			return $this->txtVolumenCajaCarga;
		}

		/**
		 * Create and setup QLabel lblVolumenCajaCarga
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblVolumenCajaCarga_Create($strControlId = null) {
			$this->lblVolumenCajaCarga = new QLabel($this->objParentObject, $strControlId);
			$this->lblVolumenCajaCarga->Name = QApplication::Translate('Volumen Caja Carga');
			$this->lblVolumenCajaCarga->Text = $this->objFichasBackup->VolumenCajaCarga;
			return $this->lblVolumenCajaCarga;
		}

		/**
		 * Create and setup QTextBox txtCapacidadCarga
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCapacidadCarga_Create($strControlId = null) {
			$this->txtCapacidadCarga = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCapacidadCarga->Name = QApplication::Translate('Capacidad Carga');
			$this->txtCapacidadCarga->Text = $this->objFichasBackup->CapacidadCarga;
			$this->txtCapacidadCarga->MaxLength = FichasBackup::CapacidadCargaMaxLength;
			return $this->txtCapacidadCarga;
		}

		/**
		 * Create and setup QLabel lblCapacidadCarga
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCapacidadCarga_Create($strControlId = null) {
			$this->lblCapacidadCarga = new QLabel($this->objParentObject, $strControlId);
			$this->lblCapacidadCarga->Name = QApplication::Translate('Capacidad Carga');
			$this->lblCapacidadCarga->Text = $this->objFichasBackup->CapacidadCarga;
			return $this->lblCapacidadCarga;
		}

		/**
		 * Create and setup QTextBox txtFrenosDelanteros
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFrenosDelanteros_Create($strControlId = null) {
			$this->txtFrenosDelanteros = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFrenosDelanteros->Name = QApplication::Translate('Frenos Delanteros');
			$this->txtFrenosDelanteros->Text = $this->objFichasBackup->FrenosDelanteros;
			$this->txtFrenosDelanteros->MaxLength = FichasBackup::FrenosDelanterosMaxLength;
			return $this->txtFrenosDelanteros;
		}

		/**
		 * Create and setup QLabel lblFrenosDelanteros
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFrenosDelanteros_Create($strControlId = null) {
			$this->lblFrenosDelanteros = new QLabel($this->objParentObject, $strControlId);
			$this->lblFrenosDelanteros->Name = QApplication::Translate('Frenos Delanteros');
			$this->lblFrenosDelanteros->Text = $this->objFichasBackup->FrenosDelanteros;
			return $this->lblFrenosDelanteros;
		}

		/**
		 * Create and setup QTextBox txtFrenosTraseros
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFrenosTraseros_Create($strControlId = null) {
			$this->txtFrenosTraseros = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFrenosTraseros->Name = QApplication::Translate('Frenos Traseros');
			$this->txtFrenosTraseros->Text = $this->objFichasBackup->FrenosTraseros;
			$this->txtFrenosTraseros->MaxLength = FichasBackup::FrenosTraserosMaxLength;
			return $this->txtFrenosTraseros;
		}

		/**
		 * Create and setup QLabel lblFrenosTraseros
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFrenosTraseros_Create($strControlId = null) {
			$this->lblFrenosTraseros = new QLabel($this->objParentObject, $strControlId);
			$this->lblFrenosTraseros->Name = QApplication::Translate('Frenos Traseros');
			$this->lblFrenosTraseros->Text = $this->objFichasBackup->FrenosTraseros;
			return $this->lblFrenosTraseros;
		}

		/**
		 * Create and setup QTextBox txtLlantas
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLlantas_Create($strControlId = null) {
			$this->txtLlantas = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLlantas->Name = QApplication::Translate('Llantas');
			$this->txtLlantas->Text = $this->objFichasBackup->Llantas;
			$this->txtLlantas->MaxLength = FichasBackup::LlantasMaxLength;
			return $this->txtLlantas;
		}

		/**
		 * Create and setup QLabel lblLlantas
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLlantas_Create($strControlId = null) {
			$this->lblLlantas = new QLabel($this->objParentObject, $strControlId);
			$this->lblLlantas->Name = QApplication::Translate('Llantas');
			$this->lblLlantas->Text = $this->objFichasBackup->Llantas;
			return $this->lblLlantas;
		}

		/**
		 * Create and setup QTextBox txtNeumaticos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNeumaticos_Create($strControlId = null) {
			$this->txtNeumaticos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNeumaticos->Name = QApplication::Translate('Neumaticos');
			$this->txtNeumaticos->Text = $this->objFichasBackup->Neumaticos;
			$this->txtNeumaticos->MaxLength = FichasBackup::NeumaticosMaxLength;
			return $this->txtNeumaticos;
		}

		/**
		 * Create and setup QLabel lblNeumaticos
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNeumaticos_Create($strControlId = null) {
			$this->lblNeumaticos = new QLabel($this->objParentObject, $strControlId);
			$this->lblNeumaticos->Name = QApplication::Translate('Neumaticos');
			$this->lblNeumaticos->Text = $this->objFichasBackup->Neumaticos;
			return $this->lblNeumaticos;
		}

		/**
		 * Create and setup QTextBox txtSuspensionDelantera
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSuspensionDelantera_Create($strControlId = null) {
			$this->txtSuspensionDelantera = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSuspensionDelantera->Name = QApplication::Translate('Suspension Delantera');
			$this->txtSuspensionDelantera->Text = $this->objFichasBackup->SuspensionDelantera;
			$this->txtSuspensionDelantera->MaxLength = FichasBackup::SuspensionDelanteraMaxLength;
			return $this->txtSuspensionDelantera;
		}

		/**
		 * Create and setup QLabel lblSuspensionDelantera
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSuspensionDelantera_Create($strControlId = null) {
			$this->lblSuspensionDelantera = new QLabel($this->objParentObject, $strControlId);
			$this->lblSuspensionDelantera->Name = QApplication::Translate('Suspension Delantera');
			$this->lblSuspensionDelantera->Text = $this->objFichasBackup->SuspensionDelantera;
			return $this->lblSuspensionDelantera;
		}

		/**
		 * Create and setup QTextBox txtSuspensionTrasera
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSuspensionTrasera_Create($strControlId = null) {
			$this->txtSuspensionTrasera = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSuspensionTrasera->Name = QApplication::Translate('Suspension Trasera');
			$this->txtSuspensionTrasera->Text = $this->objFichasBackup->SuspensionTrasera;
			$this->txtSuspensionTrasera->MaxLength = FichasBackup::SuspensionTraseraMaxLength;
			return $this->txtSuspensionTrasera;
		}

		/**
		 * Create and setup QLabel lblSuspensionTrasera
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSuspensionTrasera_Create($strControlId = null) {
			$this->lblSuspensionTrasera = new QLabel($this->objParentObject, $strControlId);
			$this->lblSuspensionTrasera->Name = QApplication::Translate('Suspension Trasera');
			$this->lblSuspensionTrasera->Text = $this->objFichasBackup->SuspensionTrasera;
			return $this->lblSuspensionTrasera;
		}

		/**
		 * Create and setup QTextBox txtLucesAutomatico
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLucesAutomatico_Create($strControlId = null) {
			$this->txtLucesAutomatico = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLucesAutomatico->Name = QApplication::Translate('Luces Automatico');
			$this->txtLucesAutomatico->Text = $this->objFichasBackup->LucesAutomatico;
			$this->txtLucesAutomatico->MaxLength = FichasBackup::LucesAutomaticoMaxLength;
			return $this->txtLucesAutomatico;
		}

		/**
		 * Create and setup QLabel lblLucesAutomatico
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLucesAutomatico_Create($strControlId = null) {
			$this->lblLucesAutomatico = new QLabel($this->objParentObject, $strControlId);
			$this->lblLucesAutomatico->Name = QApplication::Translate('Luces Automatico');
			$this->lblLucesAutomatico->Text = $this->objFichasBackup->LucesAutomatico;
			return $this->lblLucesAutomatico;
		}

		/**
		 * Create and setup QTextBox txtClimatizacion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtClimatizacion_Create($strControlId = null) {
			$this->txtClimatizacion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtClimatizacion->Name = QApplication::Translate('Climatizacion');
			$this->txtClimatizacion->Text = $this->objFichasBackup->Climatizacion;
			$this->txtClimatizacion->MaxLength = FichasBackup::ClimatizacionMaxLength;
			return $this->txtClimatizacion;
		}

		/**
		 * Create and setup QLabel lblClimatizacion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblClimatizacion_Create($strControlId = null) {
			$this->lblClimatizacion = new QLabel($this->objParentObject, $strControlId);
			$this->lblClimatizacion->Name = QApplication::Translate('Climatizacion');
			$this->lblClimatizacion->Text = $this->objFichasBackup->Climatizacion;
			return $this->lblClimatizacion;
		}

		/**
		 * Create and setup QTextBox txtAlarmaLucesEncendidas
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAlarmaLucesEncendidas_Create($strControlId = null) {
			$this->txtAlarmaLucesEncendidas = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAlarmaLucesEncendidas->Name = QApplication::Translate('Alarma Luces Encendidas');
			$this->txtAlarmaLucesEncendidas->Text = $this->objFichasBackup->AlarmaLucesEncendidas;
			$this->txtAlarmaLucesEncendidas->MaxLength = FichasBackup::AlarmaLucesEncendidasMaxLength;
			return $this->txtAlarmaLucesEncendidas;
		}

		/**
		 * Create and setup QLabel lblAlarmaLucesEncendidas
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAlarmaLucesEncendidas_Create($strControlId = null) {
			$this->lblAlarmaLucesEncendidas = new QLabel($this->objParentObject, $strControlId);
			$this->lblAlarmaLucesEncendidas->Name = QApplication::Translate('Alarma Luces Encendidas');
			$this->lblAlarmaLucesEncendidas->Text = $this->objFichasBackup->AlarmaLucesEncendidas;
			return $this->lblAlarmaLucesEncendidas;
		}

		/**
		 * Create and setup QTextBox txtCritalesElectricos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCritalesElectricos_Create($strControlId = null) {
			$this->txtCritalesElectricos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCritalesElectricos->Name = QApplication::Translate('Critales Electricos');
			$this->txtCritalesElectricos->Text = $this->objFichasBackup->CritalesElectricos;
			$this->txtCritalesElectricos->MaxLength = FichasBackup::CritalesElectricosMaxLength;
			return $this->txtCritalesElectricos;
		}

		/**
		 * Create and setup QLabel lblCritalesElectricos
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCritalesElectricos_Create($strControlId = null) {
			$this->lblCritalesElectricos = new QLabel($this->objParentObject, $strControlId);
			$this->lblCritalesElectricos->Name = QApplication::Translate('Critales Electricos');
			$this->lblCritalesElectricos->Text = $this->objFichasBackup->CritalesElectricos;
			return $this->lblCritalesElectricos;
		}

		/**
		 * Create and setup QTextBox txtAperturaBaul
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAperturaBaul_Create($strControlId = null) {
			$this->txtAperturaBaul = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAperturaBaul->Name = QApplication::Translate('Apertura Baul');
			$this->txtAperturaBaul->Text = $this->objFichasBackup->AperturaBaul;
			$this->txtAperturaBaul->MaxLength = FichasBackup::AperturaBaulMaxLength;
			return $this->txtAperturaBaul;
		}

		/**
		 * Create and setup QLabel lblAperturaBaul
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAperturaBaul_Create($strControlId = null) {
			$this->lblAperturaBaul = new QLabel($this->objParentObject, $strControlId);
			$this->lblAperturaBaul->Name = QApplication::Translate('Apertura Baul');
			$this->lblAperturaBaul->Text = $this->objFichasBackup->AperturaBaul;
			return $this->lblAperturaBaul;
		}

		/**
		 * Create and setup QTextBox txtAperturaTanque
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAperturaTanque_Create($strControlId = null) {
			$this->txtAperturaTanque = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAperturaTanque->Name = QApplication::Translate('Apertura Tanque');
			$this->txtAperturaTanque->Text = $this->objFichasBackup->AperturaTanque;
			$this->txtAperturaTanque->MaxLength = FichasBackup::AperturaTanqueMaxLength;
			return $this->txtAperturaTanque;
		}

		/**
		 * Create and setup QLabel lblAperturaTanque
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAperturaTanque_Create($strControlId = null) {
			$this->lblAperturaTanque = new QLabel($this->objParentObject, $strControlId);
			$this->lblAperturaTanque->Name = QApplication::Translate('Apertura Tanque');
			$this->lblAperturaTanque->Text = $this->objFichasBackup->AperturaTanque;
			return $this->lblAperturaTanque;
		}

		/**
		 * Create and setup QTextBox txtAsientosRegulablesAltura
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAsientosRegulablesAltura_Create($strControlId = null) {
			$this->txtAsientosRegulablesAltura = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAsientosRegulablesAltura->Name = QApplication::Translate('Asientos Regulables Altura');
			$this->txtAsientosRegulablesAltura->Text = $this->objFichasBackup->AsientosRegulablesAltura;
			$this->txtAsientosRegulablesAltura->MaxLength = FichasBackup::AsientosRegulablesAlturaMaxLength;
			return $this->txtAsientosRegulablesAltura;
		}

		/**
		 * Create and setup QLabel lblAsientosRegulablesAltura
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAsientosRegulablesAltura_Create($strControlId = null) {
			$this->lblAsientosRegulablesAltura = new QLabel($this->objParentObject, $strControlId);
			$this->lblAsientosRegulablesAltura->Name = QApplication::Translate('Asientos Regulables Altura');
			$this->lblAsientosRegulablesAltura->Text = $this->objFichasBackup->AsientosRegulablesAltura;
			return $this->lblAsientosRegulablesAltura;
		}

		/**
		 * Create and setup QTextBox txtAsientoTraseroRebatible
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAsientoTraseroRebatible_Create($strControlId = null) {
			$this->txtAsientoTraseroRebatible = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAsientoTraseroRebatible->Name = QApplication::Translate('Asiento Trasero Rebatible');
			$this->txtAsientoTraseroRebatible->Text = $this->objFichasBackup->AsientoTraseroRebatible;
			$this->txtAsientoTraseroRebatible->MaxLength = FichasBackup::AsientoTraseroRebatibleMaxLength;
			return $this->txtAsientoTraseroRebatible;
		}

		/**
		 * Create and setup QLabel lblAsientoTraseroRebatible
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAsientoTraseroRebatible_Create($strControlId = null) {
			$this->lblAsientoTraseroRebatible = new QLabel($this->objParentObject, $strControlId);
			$this->lblAsientoTraseroRebatible->Name = QApplication::Translate('Asiento Trasero Rebatible');
			$this->lblAsientoTraseroRebatible->Text = $this->objFichasBackup->AsientoTraseroRebatible;
			return $this->lblAsientoTraseroRebatible;
		}

		/**
		 * Create and setup QTextBox txtAsientosCalefaccionado
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAsientosCalefaccionado_Create($strControlId = null) {
			$this->txtAsientosCalefaccionado = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAsientosCalefaccionado->Name = QApplication::Translate('Asientos Calefaccionado');
			$this->txtAsientosCalefaccionado->Text = $this->objFichasBackup->AsientosCalefaccionado;
			$this->txtAsientosCalefaccionado->MaxLength = FichasBackup::AsientosCalefaccionadoMaxLength;
			return $this->txtAsientosCalefaccionado;
		}

		/**
		 * Create and setup QLabel lblAsientosCalefaccionado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAsientosCalefaccionado_Create($strControlId = null) {
			$this->lblAsientosCalefaccionado = new QLabel($this->objParentObject, $strControlId);
			$this->lblAsientosCalefaccionado->Name = QApplication::Translate('Asientos Calefaccionado');
			$this->lblAsientosCalefaccionado->Text = $this->objFichasBackup->AsientosCalefaccionado;
			return $this->lblAsientosCalefaccionado;
		}

		/**
		 * Create and setup QTextBox txtAsientosAjustesElectronicos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAsientosAjustesElectronicos_Create($strControlId = null) {
			$this->txtAsientosAjustesElectronicos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAsientosAjustesElectronicos->Name = QApplication::Translate('Asientos Ajustes Electronicos');
			$this->txtAsientosAjustesElectronicos->Text = $this->objFichasBackup->AsientosAjustesElectronicos;
			$this->txtAsientosAjustesElectronicos->MaxLength = FichasBackup::AsientosAjustesElectronicosMaxLength;
			return $this->txtAsientosAjustesElectronicos;
		}

		/**
		 * Create and setup QLabel lblAsientosAjustesElectronicos
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAsientosAjustesElectronicos_Create($strControlId = null) {
			$this->lblAsientosAjustesElectronicos = new QLabel($this->objParentObject, $strControlId);
			$this->lblAsientosAjustesElectronicos->Name = QApplication::Translate('Asientos Ajustes Electronicos');
			$this->lblAsientosAjustesElectronicos->Text = $this->objFichasBackup->AsientosAjustesElectronicos;
			return $this->lblAsientosAjustesElectronicos;
		}

		/**
		 * Create and setup QTextBox txtAsientosDelButacaDeportiva
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAsientosDelButacaDeportiva_Create($strControlId = null) {
			$this->txtAsientosDelButacaDeportiva = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAsientosDelButacaDeportiva->Name = QApplication::Translate('Asientos Del Butaca Deportiva');
			$this->txtAsientosDelButacaDeportiva->Text = $this->objFichasBackup->AsientosDelButacaDeportiva;
			$this->txtAsientosDelButacaDeportiva->MaxLength = FichasBackup::AsientosDelButacaDeportivaMaxLength;
			return $this->txtAsientosDelButacaDeportiva;
		}

		/**
		 * Create and setup QLabel lblAsientosDelButacaDeportiva
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAsientosDelButacaDeportiva_Create($strControlId = null) {
			$this->lblAsientosDelButacaDeportiva = new QLabel($this->objParentObject, $strControlId);
			$this->lblAsientosDelButacaDeportiva->Name = QApplication::Translate('Asientos Del Butaca Deportiva');
			$this->lblAsientosDelButacaDeportiva->Text = $this->objFichasBackup->AsientosDelButacaDeportiva;
			return $this->lblAsientosDelButacaDeportiva;
		}

		/**
		 * Create and setup QTextBox txtAsientoDelBipartido
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAsientoDelBipartido_Create($strControlId = null) {
			$this->txtAsientoDelBipartido = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAsientoDelBipartido->Name = QApplication::Translate('Asiento Del Bipartido');
			$this->txtAsientoDelBipartido->Text = $this->objFichasBackup->AsientoDelBipartido;
			$this->txtAsientoDelBipartido->MaxLength = FichasBackup::AsientoDelBipartidoMaxLength;
			return $this->txtAsientoDelBipartido;
		}

		/**
		 * Create and setup QLabel lblAsientoDelBipartido
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAsientoDelBipartido_Create($strControlId = null) {
			$this->lblAsientoDelBipartido = new QLabel($this->objParentObject, $strControlId);
			$this->lblAsientoDelBipartido->Name = QApplication::Translate('Asiento Del Bipartido');
			$this->lblAsientoDelBipartido->Text = $this->objFichasBackup->AsientoDelBipartido;
			return $this->lblAsientoDelBipartido;
		}

		/**
		 * Create and setup QTextBox txtBotonStartStop
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtBotonStartStop_Create($strControlId = null) {
			$this->txtBotonStartStop = new QTextBox($this->objParentObject, $strControlId);
			$this->txtBotonStartStop->Name = QApplication::Translate('Boton Start Stop');
			$this->txtBotonStartStop->Text = $this->objFichasBackup->BotonStartStop;
			$this->txtBotonStartStop->MaxLength = FichasBackup::BotonStartStopMaxLength;
			return $this->txtBotonStartStop;
		}

		/**
		 * Create and setup QLabel lblBotonStartStop
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblBotonStartStop_Create($strControlId = null) {
			$this->lblBotonStartStop = new QLabel($this->objParentObject, $strControlId);
			$this->lblBotonStartStop->Name = QApplication::Translate('Boton Start Stop');
			$this->lblBotonStartStop->Text = $this->objFichasBackup->BotonStartStop;
			return $this->lblBotonStartStop;
		}

		/**
		 * Create and setup QTextBox txtCambioSecuencialVolante
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCambioSecuencialVolante_Create($strControlId = null) {
			$this->txtCambioSecuencialVolante = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCambioSecuencialVolante->Name = QApplication::Translate('Cambio Secuencial Volante');
			$this->txtCambioSecuencialVolante->Text = $this->objFichasBackup->CambioSecuencialVolante;
			$this->txtCambioSecuencialVolante->MaxLength = FichasBackup::CambioSecuencialVolanteMaxLength;
			return $this->txtCambioSecuencialVolante;
		}

		/**
		 * Create and setup QLabel lblCambioSecuencialVolante
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCambioSecuencialVolante_Create($strControlId = null) {
			$this->lblCambioSecuencialVolante = new QLabel($this->objParentObject, $strControlId);
			$this->lblCambioSecuencialVolante->Name = QApplication::Translate('Cambio Secuencial Volante');
			$this->lblCambioSecuencialVolante->Text = $this->objFichasBackup->CambioSecuencialVolante;
			return $this->lblCambioSecuencialVolante;
		}

		/**
		 * Create and setup QTextBox txtCierreCentralizado
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCierreCentralizado_Create($strControlId = null) {
			$this->txtCierreCentralizado = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCierreCentralizado->Name = QApplication::Translate('Cierre Centralizado');
			$this->txtCierreCentralizado->Text = $this->objFichasBackup->CierreCentralizado;
			$this->txtCierreCentralizado->MaxLength = FichasBackup::CierreCentralizadoMaxLength;
			return $this->txtCierreCentralizado;
		}

		/**
		 * Create and setup QLabel lblCierreCentralizado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCierreCentralizado_Create($strControlId = null) {
			$this->lblCierreCentralizado = new QLabel($this->objParentObject, $strControlId);
			$this->lblCierreCentralizado->Name = QApplication::Translate('Cierre Centralizado');
			$this->lblCierreCentralizado->Text = $this->objFichasBackup->CierreCentralizado;
			return $this->lblCierreCentralizado;
		}

		/**
		 * Create and setup QTextBox txtComputadoraABordo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtComputadoraABordo_Create($strControlId = null) {
			$this->txtComputadoraABordo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtComputadoraABordo->Name = QApplication::Translate('Computadora A Bordo');
			$this->txtComputadoraABordo->Text = $this->objFichasBackup->ComputadoraABordo;
			$this->txtComputadoraABordo->MaxLength = FichasBackup::ComputadoraABordoMaxLength;
			return $this->txtComputadoraABordo;
		}

		/**
		 * Create and setup QLabel lblComputadoraABordo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblComputadoraABordo_Create($strControlId = null) {
			$this->lblComputadoraABordo = new QLabel($this->objParentObject, $strControlId);
			$this->lblComputadoraABordo->Name = QApplication::Translate('Computadora A Bordo');
			$this->lblComputadoraABordo->Text = $this->objFichasBackup->ComputadoraABordo;
			return $this->lblComputadoraABordo;
		}

		/**
		 * Create and setup QTextBox txtDireccionAsistida
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDireccionAsistida_Create($strControlId = null) {
			$this->txtDireccionAsistida = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDireccionAsistida->Name = QApplication::Translate('Direccion Asistida');
			$this->txtDireccionAsistida->Text = $this->objFichasBackup->DireccionAsistida;
			$this->txtDireccionAsistida->MaxLength = FichasBackup::DireccionAsistidaMaxLength;
			return $this->txtDireccionAsistida;
		}

		/**
		 * Create and setup QLabel lblDireccionAsistida
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDireccionAsistida_Create($strControlId = null) {
			$this->lblDireccionAsistida = new QLabel($this->objParentObject, $strControlId);
			$this->lblDireccionAsistida->Name = QApplication::Translate('Direccion Asistida');
			$this->lblDireccionAsistida->Text = $this->objFichasBackup->DireccionAsistida;
			return $this->lblDireccionAsistida;
		}

		/**
		 * Create and setup QTextBox txtMandosAudioVolante
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtMandosAudioVolante_Create($strControlId = null) {
			$this->txtMandosAudioVolante = new QTextBox($this->objParentObject, $strControlId);
			$this->txtMandosAudioVolante->Name = QApplication::Translate('Mandos Audio Volante');
			$this->txtMandosAudioVolante->Text = $this->objFichasBackup->MandosAudioVolante;
			$this->txtMandosAudioVolante->MaxLength = FichasBackup::MandosAudioVolanteMaxLength;
			return $this->txtMandosAudioVolante;
		}

		/**
		 * Create and setup QLabel lblMandosAudioVolante
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMandosAudioVolante_Create($strControlId = null) {
			$this->lblMandosAudioVolante = new QLabel($this->objParentObject, $strControlId);
			$this->lblMandosAudioVolante->Name = QApplication::Translate('Mandos Audio Volante');
			$this->lblMandosAudioVolante->Text = $this->objFichasBackup->MandosAudioVolante;
			return $this->lblMandosAudioVolante;
		}

		/**
		 * Create and setup QTextBox txtReposabrazos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtReposabrazos_Create($strControlId = null) {
			$this->txtReposabrazos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtReposabrazos->Name = QApplication::Translate('Reposabrazos');
			$this->txtReposabrazos->Text = $this->objFichasBackup->Reposabrazos;
			$this->txtReposabrazos->MaxLength = FichasBackup::ReposabrazosMaxLength;
			return $this->txtReposabrazos;
		}

		/**
		 * Create and setup QLabel lblReposabrazos
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReposabrazos_Create($strControlId = null) {
			$this->lblReposabrazos = new QLabel($this->objParentObject, $strControlId);
			$this->lblReposabrazos->Name = QApplication::Translate('Reposabrazos');
			$this->lblReposabrazos->Text = $this->objFichasBackup->Reposabrazos;
			return $this->lblReposabrazos;
		}

		/**
		 * Create and setup QTextBox txtControlCrucero
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtControlCrucero_Create($strControlId = null) {
			$this->txtControlCrucero = new QTextBox($this->objParentObject, $strControlId);
			$this->txtControlCrucero->Name = QApplication::Translate('Control Crucero');
			$this->txtControlCrucero->Text = $this->objFichasBackup->ControlCrucero;
			$this->txtControlCrucero->MaxLength = FichasBackup::ControlCruceroMaxLength;
			return $this->txtControlCrucero;
		}

		/**
		 * Create and setup QLabel lblControlCrucero
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblControlCrucero_Create($strControlId = null) {
			$this->lblControlCrucero = new QLabel($this->objParentObject, $strControlId);
			$this->lblControlCrucero->Name = QApplication::Translate('Control Crucero');
			$this->lblControlCrucero->Text = $this->objFichasBackup->ControlCrucero;
			return $this->lblControlCrucero;
		}

		/**
		 * Create and setup QTextBox txtSensorLluvia
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSensorLluvia_Create($strControlId = null) {
			$this->txtSensorLluvia = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSensorLluvia->Name = QApplication::Translate('Sensor Lluvia');
			$this->txtSensorLluvia->Text = $this->objFichasBackup->SensorLluvia;
			$this->txtSensorLluvia->MaxLength = FichasBackup::SensorLluviaMaxLength;
			return $this->txtSensorLluvia;
		}

		/**
		 * Create and setup QLabel lblSensorLluvia
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSensorLluvia_Create($strControlId = null) {
			$this->lblSensorLluvia = new QLabel($this->objParentObject, $strControlId);
			$this->lblSensorLluvia->Name = QApplication::Translate('Sensor Lluvia');
			$this->lblSensorLluvia->Text = $this->objFichasBackup->SensorLluvia;
			return $this->lblSensorLluvia;
		}

		/**
		 * Create and setup QTextBox txtTapizado
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTapizado_Create($strControlId = null) {
			$this->txtTapizado = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTapizado->Name = QApplication::Translate('Tapizado');
			$this->txtTapizado->Text = $this->objFichasBackup->Tapizado;
			$this->txtTapizado->MaxLength = FichasBackup::TapizadoMaxLength;
			return $this->txtTapizado;
		}

		/**
		 * Create and setup QLabel lblTapizado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTapizado_Create($strControlId = null) {
			$this->lblTapizado = new QLabel($this->objParentObject, $strControlId);
			$this->lblTapizado->Name = QApplication::Translate('Tapizado');
			$this->lblTapizado->Text = $this->objFichasBackup->Tapizado;
			return $this->lblTapizado;
		}

		/**
		 * Create and setup QTextBox txtSalidasAire
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSalidasAire_Create($strControlId = null) {
			$this->txtSalidasAire = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSalidasAire->Name = QApplication::Translate('Salidas Aire');
			$this->txtSalidasAire->Text = $this->objFichasBackup->SalidasAire;
			$this->txtSalidasAire->MaxLength = FichasBackup::SalidasAireMaxLength;
			return $this->txtSalidasAire;
		}

		/**
		 * Create and setup QLabel lblSalidasAire
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSalidasAire_Create($strControlId = null) {
			$this->lblSalidasAire = new QLabel($this->objParentObject, $strControlId);
			$this->lblSalidasAire->Name = QApplication::Translate('Salidas Aire');
			$this->lblSalidasAire->Text = $this->objFichasBackup->SalidasAire;
			return $this->lblSalidasAire;
		}

		/**
		 * Create and setup QTextBox txtTechoCorredizo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTechoCorredizo_Create($strControlId = null) {
			$this->txtTechoCorredizo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTechoCorredizo->Name = QApplication::Translate('Techo Corredizo');
			$this->txtTechoCorredizo->Text = $this->objFichasBackup->TechoCorredizo;
			$this->txtTechoCorredizo->MaxLength = FichasBackup::TechoCorredizoMaxLength;
			return $this->txtTechoCorredizo;
		}

		/**
		 * Create and setup QLabel lblTechoCorredizo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTechoCorredizo_Create($strControlId = null) {
			$this->lblTechoCorredizo = new QLabel($this->objParentObject, $strControlId);
			$this->lblTechoCorredizo->Name = QApplication::Translate('Techo Corredizo');
			$this->lblTechoCorredizo->Text = $this->objFichasBackup->TechoCorredizo;
			return $this->lblTechoCorredizo;
		}

		/**
		 * Create and setup QTextBox txtComandoDistancia
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtComandoDistancia_Create($strControlId = null) {
			$this->txtComandoDistancia = new QTextBox($this->objParentObject, $strControlId);
			$this->txtComandoDistancia->Name = QApplication::Translate('Comando Distancia');
			$this->txtComandoDistancia->Text = $this->objFichasBackup->ComandoDistancia;
			$this->txtComandoDistancia->MaxLength = FichasBackup::ComandoDistanciaMaxLength;
			return $this->txtComandoDistancia;
		}

		/**
		 * Create and setup QLabel lblComandoDistancia
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblComandoDistancia_Create($strControlId = null) {
			$this->lblComandoDistancia = new QLabel($this->objParentObject, $strControlId);
			$this->lblComandoDistancia->Name = QApplication::Translate('Comando Distancia');
			$this->lblComandoDistancia->Text = $this->objFichasBackup->ComandoDistancia;
			return $this->lblComandoDistancia;
		}

		/**
		 * Create and setup QTextBox txtVolanteAjusteVertical
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtVolanteAjusteVertical_Create($strControlId = null) {
			$this->txtVolanteAjusteVertical = new QTextBox($this->objParentObject, $strControlId);
			$this->txtVolanteAjusteVertical->Name = QApplication::Translate('Volante Ajuste Vertical');
			$this->txtVolanteAjusteVertical->Text = $this->objFichasBackup->VolanteAjusteVertical;
			$this->txtVolanteAjusteVertical->MaxLength = FichasBackup::VolanteAjusteVerticalMaxLength;
			return $this->txtVolanteAjusteVertical;
		}

		/**
		 * Create and setup QLabel lblVolanteAjusteVertical
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblVolanteAjusteVertical_Create($strControlId = null) {
			$this->lblVolanteAjusteVertical = new QLabel($this->objParentObject, $strControlId);
			$this->lblVolanteAjusteVertical->Name = QApplication::Translate('Volante Ajuste Vertical');
			$this->lblVolanteAjusteVertical->Text = $this->objFichasBackup->VolanteAjusteVertical;
			return $this->lblVolanteAjusteVertical;
		}

		/**
		 * Create and setup QTextBox txtVolanteCuero
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtVolanteCuero_Create($strControlId = null) {
			$this->txtVolanteCuero = new QTextBox($this->objParentObject, $strControlId);
			$this->txtVolanteCuero->Name = QApplication::Translate('Volante Cuero');
			$this->txtVolanteCuero->Text = $this->objFichasBackup->VolanteCuero;
			$this->txtVolanteCuero->MaxLength = FichasBackup::VolanteCueroMaxLength;
			return $this->txtVolanteCuero;
		}

		/**
		 * Create and setup QLabel lblVolanteCuero
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblVolanteCuero_Create($strControlId = null) {
			$this->lblVolanteCuero = new QLabel($this->objParentObject, $strControlId);
			$this->lblVolanteCuero->Name = QApplication::Translate('Volante Cuero');
			$this->lblVolanteCuero->Text = $this->objFichasBackup->VolanteCuero;
			return $this->lblVolanteCuero;
		}

		/**
		 * Create and setup QTextBox txtMoldurasColorCarroceria
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtMoldurasColorCarroceria_Create($strControlId = null) {
			$this->txtMoldurasColorCarroceria = new QTextBox($this->objParentObject, $strControlId);
			$this->txtMoldurasColorCarroceria->Name = QApplication::Translate('Molduras Color Carroceria');
			$this->txtMoldurasColorCarroceria->Text = $this->objFichasBackup->MoldurasColorCarroceria;
			$this->txtMoldurasColorCarroceria->MaxLength = FichasBackup::MoldurasColorCarroceriaMaxLength;
			return $this->txtMoldurasColorCarroceria;
		}

		/**
		 * Create and setup QLabel lblMoldurasColorCarroceria
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMoldurasColorCarroceria_Create($strControlId = null) {
			$this->lblMoldurasColorCarroceria = new QLabel($this->objParentObject, $strControlId);
			$this->lblMoldurasColorCarroceria->Name = QApplication::Translate('Molduras Color Carroceria');
			$this->lblMoldurasColorCarroceria->Text = $this->objFichasBackup->MoldurasColorCarroceria;
			return $this->lblMoldurasColorCarroceria;
		}

		/**
		 * Create and setup QTextBox txtEspejosElectricos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEspejosElectricos_Create($strControlId = null) {
			$this->txtEspejosElectricos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEspejosElectricos->Name = QApplication::Translate('Espejos Electricos');
			$this->txtEspejosElectricos->Text = $this->objFichasBackup->EspejosElectricos;
			$this->txtEspejosElectricos->MaxLength = FichasBackup::EspejosElectricosMaxLength;
			return $this->txtEspejosElectricos;
		}

		/**
		 * Create and setup QLabel lblEspejosElectricos
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEspejosElectricos_Create($strControlId = null) {
			$this->lblEspejosElectricos = new QLabel($this->objParentObject, $strControlId);
			$this->lblEspejosElectricos->Name = QApplication::Translate('Espejos Electricos');
			$this->lblEspejosElectricos->Text = $this->objFichasBackup->EspejosElectricos;
			return $this->lblEspejosElectricos;
		}

		/**
		 * Create and setup QTextBox txtEspejosRebatiblesElectricamente
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEspejosRebatiblesElectricamente_Create($strControlId = null) {
			$this->txtEspejosRebatiblesElectricamente = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEspejosRebatiblesElectricamente->Name = QApplication::Translate('Espejos Rebatibles Electricamente');
			$this->txtEspejosRebatiblesElectricamente->Text = $this->objFichasBackup->EspejosRebatiblesElectricamente;
			$this->txtEspejosRebatiblesElectricamente->MaxLength = FichasBackup::EspejosRebatiblesElectricamenteMaxLength;
			return $this->txtEspejosRebatiblesElectricamente;
		}

		/**
		 * Create and setup QLabel lblEspejosRebatiblesElectricamente
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEspejosRebatiblesElectricamente_Create($strControlId = null) {
			$this->lblEspejosRebatiblesElectricamente = new QLabel($this->objParentObject, $strControlId);
			$this->lblEspejosRebatiblesElectricamente->Name = QApplication::Translate('Espejos Rebatibles Electricamente');
			$this->lblEspejosRebatiblesElectricamente->Text = $this->objFichasBackup->EspejosRebatiblesElectricamente;
			return $this->lblEspejosRebatiblesElectricamente;
		}

		/**
		 * Create and setup QTextBox txtEspejosMemorias
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEspejosMemorias_Create($strControlId = null) {
			$this->txtEspejosMemorias = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEspejosMemorias->Name = QApplication::Translate('Espejos Memorias');
			$this->txtEspejosMemorias->Text = $this->objFichasBackup->EspejosMemorias;
			$this->txtEspejosMemorias->MaxLength = FichasBackup::EspejosMemoriasMaxLength;
			return $this->txtEspejosMemorias;
		}

		/**
		 * Create and setup QLabel lblEspejosMemorias
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEspejosMemorias_Create($strControlId = null) {
			$this->lblEspejosMemorias = new QLabel($this->objParentObject, $strControlId);
			$this->lblEspejosMemorias->Name = QApplication::Translate('Espejos Memorias');
			$this->lblEspejosMemorias->Text = $this->objFichasBackup->EspejosMemorias;
			return $this->lblEspejosMemorias;
		}

		/**
		 * Create and setup QTextBox txtLavaFaros
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLavaFaros_Create($strControlId = null) {
			$this->txtLavaFaros = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLavaFaros->Name = QApplication::Translate('Lava Faros');
			$this->txtLavaFaros->Text = $this->objFichasBackup->LavaFaros;
			$this->txtLavaFaros->MaxLength = FichasBackup::LavaFarosMaxLength;
			return $this->txtLavaFaros;
		}

		/**
		 * Create and setup QLabel lblLavaFaros
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLavaFaros_Create($strControlId = null) {
			$this->lblLavaFaros = new QLabel($this->objParentObject, $strControlId);
			$this->lblLavaFaros->Name = QApplication::Translate('Lava Faros');
			$this->lblLavaFaros->Text = $this->objFichasBackup->LavaFaros;
			return $this->lblLavaFaros;
		}

		/**
		 * Create and setup QTextBox txtLavaLuneta
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLavaLuneta_Create($strControlId = null) {
			$this->txtLavaLuneta = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLavaLuneta->Name = QApplication::Translate('Lava Luneta');
			$this->txtLavaLuneta->Text = $this->objFichasBackup->LavaLuneta;
			$this->txtLavaLuneta->MaxLength = FichasBackup::LavaLunetaMaxLength;
			return $this->txtLavaLuneta;
		}

		/**
		 * Create and setup QLabel lblLavaLuneta
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLavaLuneta_Create($strControlId = null) {
			$this->lblLavaLuneta = new QLabel($this->objParentObject, $strControlId);
			$this->lblLavaLuneta->Name = QApplication::Translate('Lava Luneta');
			$this->lblLavaLuneta->Text = $this->objFichasBackup->LavaLuneta;
			return $this->lblLavaLuneta;
		}

		/**
		 * Create and setup QTextBox txtCobertorCajaCarga
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCobertorCajaCarga_Create($strControlId = null) {
			$this->txtCobertorCajaCarga = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCobertorCajaCarga->Name = QApplication::Translate('Cobertor Caja Carga');
			$this->txtCobertorCajaCarga->Text = $this->objFichasBackup->CobertorCajaCarga;
			$this->txtCobertorCajaCarga->MaxLength = FichasBackup::CobertorCajaCargaMaxLength;
			return $this->txtCobertorCajaCarga;
		}

		/**
		 * Create and setup QLabel lblCobertorCajaCarga
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCobertorCajaCarga_Create($strControlId = null) {
			$this->lblCobertorCajaCarga = new QLabel($this->objParentObject, $strControlId);
			$this->lblCobertorCajaCarga->Name = QApplication::Translate('Cobertor Caja Carga');
			$this->lblCobertorCajaCarga->Text = $this->objFichasBackup->CobertorCajaCarga;
			return $this->lblCobertorCajaCarga;
		}

		/**
		 * Create and setup QTextBox txtBarrasPortaequipajeTecho
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtBarrasPortaequipajeTecho_Create($strControlId = null) {
			$this->txtBarrasPortaequipajeTecho = new QTextBox($this->objParentObject, $strControlId);
			$this->txtBarrasPortaequipajeTecho->Name = QApplication::Translate('Barras Portaequipaje Techo');
			$this->txtBarrasPortaequipajeTecho->Text = $this->objFichasBackup->BarrasPortaequipajeTecho;
			$this->txtBarrasPortaequipajeTecho->MaxLength = FichasBackup::BarrasPortaequipajeTechoMaxLength;
			return $this->txtBarrasPortaequipajeTecho;
		}

		/**
		 * Create and setup QLabel lblBarrasPortaequipajeTecho
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblBarrasPortaequipajeTecho_Create($strControlId = null) {
			$this->lblBarrasPortaequipajeTecho = new QLabel($this->objParentObject, $strControlId);
			$this->lblBarrasPortaequipajeTecho->Name = QApplication::Translate('Barras Portaequipaje Techo');
			$this->lblBarrasPortaequipajeTecho->Text = $this->objFichasBackup->BarrasPortaequipajeTecho;
			return $this->lblBarrasPortaequipajeTecho;
		}

		/**
		 * Create and setup QTextBox txtBarraAntivuelco
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtBarraAntivuelco_Create($strControlId = null) {
			$this->txtBarraAntivuelco = new QTextBox($this->objParentObject, $strControlId);
			$this->txtBarraAntivuelco->Name = QApplication::Translate('Barra Antivuelco');
			$this->txtBarraAntivuelco->Text = $this->objFichasBackup->BarraAntivuelco;
			$this->txtBarraAntivuelco->MaxLength = FichasBackup::BarraAntivuelcoMaxLength;
			return $this->txtBarraAntivuelco;
		}

		/**
		 * Create and setup QLabel lblBarraAntivuelco
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblBarraAntivuelco_Create($strControlId = null) {
			$this->lblBarraAntivuelco = new QLabel($this->objParentObject, $strControlId);
			$this->lblBarraAntivuelco->Name = QApplication::Translate('Barra Antivuelco');
			$this->lblBarraAntivuelco->Text = $this->objFichasBackup->BarraAntivuelco;
			return $this->lblBarraAntivuelco;
		}

		/**
		 * Create and setup QTextBox txtEstribos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEstribos_Create($strControlId = null) {
			$this->txtEstribos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEstribos->Name = QApplication::Translate('Estribos');
			$this->txtEstribos->Text = $this->objFichasBackup->Estribos;
			$this->txtEstribos->MaxLength = FichasBackup::EstribosMaxLength;
			return $this->txtEstribos;
		}

		/**
		 * Create and setup QLabel lblEstribos
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEstribos_Create($strControlId = null) {
			$this->lblEstribos = new QLabel($this->objParentObject, $strControlId);
			$this->lblEstribos->Name = QApplication::Translate('Estribos');
			$this->lblEstribos->Text = $this->objFichasBackup->Estribos;
			return $this->lblEstribos;
		}

		/**
		 * Create and setup QTextBox txtConexionAuxiliar
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtConexionAuxiliar_Create($strControlId = null) {
			$this->txtConexionAuxiliar = new QTextBox($this->objParentObject, $strControlId);
			$this->txtConexionAuxiliar->Name = QApplication::Translate('Conexion Auxiliar');
			$this->txtConexionAuxiliar->Text = $this->objFichasBackup->ConexionAuxiliar;
			$this->txtConexionAuxiliar->MaxLength = FichasBackup::ConexionAuxiliarMaxLength;
			return $this->txtConexionAuxiliar;
		}

		/**
		 * Create and setup QLabel lblConexionAuxiliar
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblConexionAuxiliar_Create($strControlId = null) {
			$this->lblConexionAuxiliar = new QLabel($this->objParentObject, $strControlId);
			$this->lblConexionAuxiliar->Name = QApplication::Translate('Conexion Auxiliar');
			$this->lblConexionAuxiliar->Text = $this->objFichasBackup->ConexionAuxiliar;
			return $this->lblConexionAuxiliar;
		}

		/**
		 * Create and setup QTextBox txtConexionBluetooth
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtConexionBluetooth_Create($strControlId = null) {
			$this->txtConexionBluetooth = new QTextBox($this->objParentObject, $strControlId);
			$this->txtConexionBluetooth->Name = QApplication::Translate('Conexion Bluetooth');
			$this->txtConexionBluetooth->Text = $this->objFichasBackup->ConexionBluetooth;
			$this->txtConexionBluetooth->MaxLength = FichasBackup::ConexionBluetoothMaxLength;
			return $this->txtConexionBluetooth;
		}

		/**
		 * Create and setup QLabel lblConexionBluetooth
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblConexionBluetooth_Create($strControlId = null) {
			$this->lblConexionBluetooth = new QLabel($this->objParentObject, $strControlId);
			$this->lblConexionBluetooth->Name = QApplication::Translate('Conexion Bluetooth');
			$this->lblConexionBluetooth->Text = $this->objFichasBackup->ConexionBluetooth;
			return $this->lblConexionBluetooth;
		}

		/**
		 * Create and setup QTextBox txtControlPorVoz
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtControlPorVoz_Create($strControlId = null) {
			$this->txtControlPorVoz = new QTextBox($this->objParentObject, $strControlId);
			$this->txtControlPorVoz->Name = QApplication::Translate('Control Por Voz');
			$this->txtControlPorVoz->Text = $this->objFichasBackup->ControlPorVoz;
			$this->txtControlPorVoz->MaxLength = FichasBackup::ControlPorVozMaxLength;
			return $this->txtControlPorVoz;
		}

		/**
		 * Create and setup QLabel lblControlPorVoz
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblControlPorVoz_Create($strControlId = null) {
			$this->lblControlPorVoz = new QLabel($this->objParentObject, $strControlId);
			$this->lblControlPorVoz->Name = QApplication::Translate('Control Por Voz');
			$this->lblControlPorVoz->Text = $this->objFichasBackup->ControlPorVoz;
			return $this->lblControlPorVoz;
		}

		/**
		 * Create and setup QTextBox txtEntradaUsb
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEntradaUsb_Create($strControlId = null) {
			$this->txtEntradaUsb = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEntradaUsb->Name = QApplication::Translate('Entrada Usb');
			$this->txtEntradaUsb->Text = $this->objFichasBackup->EntradaUsb;
			$this->txtEntradaUsb->MaxLength = FichasBackup::EntradaUsbMaxLength;
			return $this->txtEntradaUsb;
		}

		/**
		 * Create and setup QLabel lblEntradaUsb
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEntradaUsb_Create($strControlId = null) {
			$this->lblEntradaUsb = new QLabel($this->objParentObject, $strControlId);
			$this->lblEntradaUsb->Name = QApplication::Translate('Entrada Usb');
			$this->lblEntradaUsb->Text = $this->objFichasBackup->EntradaUsb;
			return $this->lblEntradaUsb;
		}

		/**
		 * Create and setup QTextBox txtLectorTarjetasSd
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLectorTarjetasSd_Create($strControlId = null) {
			$this->txtLectorTarjetasSd = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLectorTarjetasSd->Name = QApplication::Translate('Lector Tarjetas Sd');
			$this->txtLectorTarjetasSd->Text = $this->objFichasBackup->LectorTarjetasSd;
			$this->txtLectorTarjetasSd->MaxLength = FichasBackup::LectorTarjetasSdMaxLength;
			return $this->txtLectorTarjetasSd;
		}

		/**
		 * Create and setup QLabel lblLectorTarjetasSd
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLectorTarjetasSd_Create($strControlId = null) {
			$this->lblLectorTarjetasSd = new QLabel($this->objParentObject, $strControlId);
			$this->lblLectorTarjetasSd->Name = QApplication::Translate('Lector Tarjetas Sd');
			$this->lblLectorTarjetasSd->Text = $this->objFichasBackup->LectorTarjetasSd;
			return $this->lblLectorTarjetasSd;
		}

		/**
		 * Create and setup QTextBox txtNavegadorGps
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNavegadorGps_Create($strControlId = null) {
			$this->txtNavegadorGps = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNavegadorGps->Name = QApplication::Translate('Navegador Gps');
			$this->txtNavegadorGps->Text = $this->objFichasBackup->NavegadorGps;
			$this->txtNavegadorGps->MaxLength = FichasBackup::NavegadorGpsMaxLength;
			return $this->txtNavegadorGps;
		}

		/**
		 * Create and setup QLabel lblNavegadorGps
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNavegadorGps_Create($strControlId = null) {
			$this->lblNavegadorGps = new QLabel($this->objParentObject, $strControlId);
			$this->lblNavegadorGps->Name = QApplication::Translate('Navegador Gps');
			$this->lblNavegadorGps->Text = $this->objFichasBackup->NavegadorGps;
			return $this->lblNavegadorGps;
		}

		/**
		 * Create and setup QTextBox txtParlantes
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtParlantes_Create($strControlId = null) {
			$this->txtParlantes = new QTextBox($this->objParentObject, $strControlId);
			$this->txtParlantes->Name = QApplication::Translate('Parlantes');
			$this->txtParlantes->Text = $this->objFichasBackup->Parlantes;
			$this->txtParlantes->MaxLength = FichasBackup::ParlantesMaxLength;
			return $this->txtParlantes;
		}

		/**
		 * Create and setup QLabel lblParlantes
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblParlantes_Create($strControlId = null) {
			$this->lblParlantes = new QLabel($this->objParentObject, $strControlId);
			$this->lblParlantes->Name = QApplication::Translate('Parlantes');
			$this->lblParlantes->Text = $this->objFichasBackup->Parlantes;
			return $this->lblParlantes;
		}

		/**
		 * Create and setup QTextBox txtRadioAmfm
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtRadioAmfm_Create($strControlId = null) {
			$this->txtRadioAmfm = new QTextBox($this->objParentObject, $strControlId);
			$this->txtRadioAmfm->Name = QApplication::Translate('Radio Amfm');
			$this->txtRadioAmfm->Text = $this->objFichasBackup->RadioAmfm;
			$this->txtRadioAmfm->MaxLength = FichasBackup::RadioAmfmMaxLength;
			return $this->txtRadioAmfm;
		}

		/**
		 * Create and setup QLabel lblRadioAmfm
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRadioAmfm_Create($strControlId = null) {
			$this->lblRadioAmfm = new QLabel($this->objParentObject, $strControlId);
			$this->lblRadioAmfm->Name = QApplication::Translate('Radio Amfm');
			$this->lblRadioAmfm->Text = $this->objFichasBackup->RadioAmfm;
			return $this->lblRadioAmfm;
		}

		/**
		 * Create and setup QTextBox txtRadioSatelitalXm
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtRadioSatelitalXm_Create($strControlId = null) {
			$this->txtRadioSatelitalXm = new QTextBox($this->objParentObject, $strControlId);
			$this->txtRadioSatelitalXm->Name = QApplication::Translate('Radio Satelital Xm');
			$this->txtRadioSatelitalXm->Text = $this->objFichasBackup->RadioSatelitalXm;
			$this->txtRadioSatelitalXm->MaxLength = FichasBackup::RadioSatelitalXmMaxLength;
			return $this->txtRadioSatelitalXm;
		}

		/**
		 * Create and setup QLabel lblRadioSatelitalXm
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRadioSatelitalXm_Create($strControlId = null) {
			$this->lblRadioSatelitalXm = new QLabel($this->objParentObject, $strControlId);
			$this->lblRadioSatelitalXm->Name = QApplication::Translate('Radio Satelital Xm');
			$this->lblRadioSatelitalXm->Text = $this->objFichasBackup->RadioSatelitalXm;
			return $this->lblRadioSatelitalXm;
		}

		/**
		 * Create and setup QTextBox txtReproductorCd
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtReproductorCd_Create($strControlId = null) {
			$this->txtReproductorCd = new QTextBox($this->objParentObject, $strControlId);
			$this->txtReproductorCd->Name = QApplication::Translate('Reproductor Cd');
			$this->txtReproductorCd->Text = $this->objFichasBackup->ReproductorCd;
			$this->txtReproductorCd->MaxLength = FichasBackup::ReproductorCdMaxLength;
			return $this->txtReproductorCd;
		}

		/**
		 * Create and setup QLabel lblReproductorCd
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReproductorCd_Create($strControlId = null) {
			$this->lblReproductorCd = new QLabel($this->objParentObject, $strControlId);
			$this->lblReproductorCd->Name = QApplication::Translate('Reproductor Cd');
			$this->lblReproductorCd->Text = $this->objFichasBackup->ReproductorCd;
			return $this->lblReproductorCd;
		}

		/**
		 * Create and setup QTextBox txtReproductorDvd
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtReproductorDvd_Create($strControlId = null) {
			$this->txtReproductorDvd = new QTextBox($this->objParentObject, $strControlId);
			$this->txtReproductorDvd->Name = QApplication::Translate('Reproductor Dvd');
			$this->txtReproductorDvd->Text = $this->objFichasBackup->ReproductorDvd;
			$this->txtReproductorDvd->MaxLength = FichasBackup::ReproductorDvdMaxLength;
			return $this->txtReproductorDvd;
		}

		/**
		 * Create and setup QLabel lblReproductorDvd
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReproductorDvd_Create($strControlId = null) {
			$this->lblReproductorDvd = new QLabel($this->objParentObject, $strControlId);
			$this->lblReproductorDvd->Name = QApplication::Translate('Reproductor Dvd');
			$this->lblReproductorDvd->Text = $this->objFichasBackup->ReproductorDvd;
			return $this->lblReproductorDvd;
		}

		/**
		 * Create and setup QTextBox txtReproductorMp3
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtReproductorMp3_Create($strControlId = null) {
			$this->txtReproductorMp3 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtReproductorMp3->Name = QApplication::Translate('Reproductor Mp 3');
			$this->txtReproductorMp3->Text = $this->objFichasBackup->ReproductorMp3;
			$this->txtReproductorMp3->MaxLength = FichasBackup::ReproductorMp3MaxLength;
			return $this->txtReproductorMp3;
		}

		/**
		 * Create and setup QLabel lblReproductorMp3
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReproductorMp3_Create($strControlId = null) {
			$this->lblReproductorMp3 = new QLabel($this->objParentObject, $strControlId);
			$this->lblReproductorMp3->Name = QApplication::Translate('Reproductor Mp 3');
			$this->lblReproductorMp3->Text = $this->objFichasBackup->ReproductorMp3;
			return $this->lblReproductorMp3;
		}

		/**
		 * Create and setup QTextBox txtTomaCorriente12v
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTomaCorriente12v_Create($strControlId = null) {
			$this->txtTomaCorriente12v = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTomaCorriente12v->Name = QApplication::Translate('Toma Corriente 12 v');
			$this->txtTomaCorriente12v->Text = $this->objFichasBackup->TomaCorriente12v;
			$this->txtTomaCorriente12v->MaxLength = FichasBackup::TomaCorriente12vMaxLength;
			return $this->txtTomaCorriente12v;
		}

		/**
		 * Create and setup QLabel lblTomaCorriente12v
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTomaCorriente12v_Create($strControlId = null) {
			$this->lblTomaCorriente12v = new QLabel($this->objParentObject, $strControlId);
			$this->lblTomaCorriente12v->Name = QApplication::Translate('Toma Corriente 12 v');
			$this->lblTomaCorriente12v->Text = $this->objFichasBackup->TomaCorriente12v;
			return $this->lblTomaCorriente12v;
		}

		/**
		 * Create and setup QTextBox txtAirbags
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAirbags_Create($strControlId = null) {
			$this->txtAirbags = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAirbags->Name = QApplication::Translate('Airbags');
			$this->txtAirbags->Text = $this->objFichasBackup->Airbags;
			$this->txtAirbags->MaxLength = FichasBackup::AirbagsMaxLength;
			return $this->txtAirbags;
		}

		/**
		 * Create and setup QLabel lblAirbags
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAirbags_Create($strControlId = null) {
			$this->lblAirbags = new QLabel($this->objParentObject, $strControlId);
			$this->lblAirbags->Name = QApplication::Translate('Airbags');
			$this->lblAirbags->Text = $this->objFichasBackup->Airbags;
			return $this->lblAirbags;
		}

		/**
		 * Create and setup QTextBox txtAlarma
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAlarma_Create($strControlId = null) {
			$this->txtAlarma = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAlarma->Name = QApplication::Translate('Alarma');
			$this->txtAlarma->Text = $this->objFichasBackup->Alarma;
			$this->txtAlarma->MaxLength = FichasBackup::AlarmaMaxLength;
			return $this->txtAlarma;
		}

		/**
		 * Create and setup QLabel lblAlarma
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAlarma_Create($strControlId = null) {
			$this->lblAlarma = new QLabel($this->objParentObject, $strControlId);
			$this->lblAlarma->Name = QApplication::Translate('Alarma');
			$this->lblAlarma->Text = $this->objFichasBackup->Alarma;
			return $this->lblAlarma;
		}

		/**
		 * Create and setup QTextBox txtAsientoParaNinos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAsientoParaNinos_Create($strControlId = null) {
			$this->txtAsientoParaNinos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAsientoParaNinos->Name = QApplication::Translate('Asiento Para Ninos');
			$this->txtAsientoParaNinos->Text = $this->objFichasBackup->AsientoParaNinos;
			$this->txtAsientoParaNinos->MaxLength = FichasBackup::AsientoParaNinosMaxLength;
			return $this->txtAsientoParaNinos;
		}

		/**
		 * Create and setup QLabel lblAsientoParaNinos
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAsientoParaNinos_Create($strControlId = null) {
			$this->lblAsientoParaNinos = new QLabel($this->objParentObject, $strControlId);
			$this->lblAsientoParaNinos->Name = QApplication::Translate('Asiento Para Ninos');
			$this->lblAsientoParaNinos->Text = $this->objFichasBackup->AsientoParaNinos;
			return $this->lblAsientoParaNinos;
		}

		/**
		 * Create and setup QTextBox txtAsistenciasElectronicas
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAsistenciasElectronicas_Create($strControlId = null) {
			$this->txtAsistenciasElectronicas = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAsistenciasElectronicas->Name = QApplication::Translate('Asistencias Electronicas');
			$this->txtAsistenciasElectronicas->Text = $this->objFichasBackup->AsistenciasElectronicas;
			$this->txtAsistenciasElectronicas->MaxLength = FichasBackup::AsistenciasElectronicasMaxLength;
			return $this->txtAsistenciasElectronicas;
		}

		/**
		 * Create and setup QLabel lblAsistenciasElectronicas
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAsistenciasElectronicas_Create($strControlId = null) {
			$this->lblAsistenciasElectronicas = new QLabel($this->objParentObject, $strControlId);
			$this->lblAsistenciasElectronicas->Name = QApplication::Translate('Asistencias Electronicas');
			$this->lblAsistenciasElectronicas->Text = $this->objFichasBackup->AsistenciasElectronicas;
			return $this->lblAsistenciasElectronicas;
		}

		/**
		 * Create and setup QTextBox txtCamaraRetroceso
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCamaraRetroceso_Create($strControlId = null) {
			$this->txtCamaraRetroceso = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCamaraRetroceso->Name = QApplication::Translate('Camara Retroceso');
			$this->txtCamaraRetroceso->Text = $this->objFichasBackup->CamaraRetroceso;
			$this->txtCamaraRetroceso->MaxLength = FichasBackup::CamaraRetrocesoMaxLength;
			return $this->txtCamaraRetroceso;
		}

		/**
		 * Create and setup QLabel lblCamaraRetroceso
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCamaraRetroceso_Create($strControlId = null) {
			$this->lblCamaraRetroceso = new QLabel($this->objParentObject, $strControlId);
			$this->lblCamaraRetroceso->Name = QApplication::Translate('Camara Retroceso');
			$this->lblCamaraRetroceso->Text = $this->objFichasBackup->CamaraRetroceso;
			return $this->lblCamaraRetroceso;
		}

		/**
		 * Create and setup QTextBox txtCinturonesInerciales
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCinturonesInerciales_Create($strControlId = null) {
			$this->txtCinturonesInerciales = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCinturonesInerciales->Name = QApplication::Translate('Cinturones Inerciales');
			$this->txtCinturonesInerciales->Text = $this->objFichasBackup->CinturonesInerciales;
			$this->txtCinturonesInerciales->MaxLength = FichasBackup::CinturonesInercialesMaxLength;
			return $this->txtCinturonesInerciales;
		}

		/**
		 * Create and setup QLabel lblCinturonesInerciales
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCinturonesInerciales_Create($strControlId = null) {
			$this->lblCinturonesInerciales = new QLabel($this->objParentObject, $strControlId);
			$this->lblCinturonesInerciales->Name = QApplication::Translate('Cinturones Inerciales');
			$this->lblCinturonesInerciales->Text = $this->objFichasBackup->CinturonesInerciales;
			return $this->lblCinturonesInerciales;
		}

		/**
		 * Create and setup QTextBox txtSensorDistanciaEstacionamiento
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSensorDistanciaEstacionamiento_Create($strControlId = null) {
			$this->txtSensorDistanciaEstacionamiento = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSensorDistanciaEstacionamiento->Name = QApplication::Translate('Sensor Distancia Estacionamiento');
			$this->txtSensorDistanciaEstacionamiento->Text = $this->objFichasBackup->SensorDistanciaEstacionamiento;
			$this->txtSensorDistanciaEstacionamiento->MaxLength = FichasBackup::SensorDistanciaEstacionamientoMaxLength;
			return $this->txtSensorDistanciaEstacionamiento;
		}

		/**
		 * Create and setup QLabel lblSensorDistanciaEstacionamiento
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSensorDistanciaEstacionamiento_Create($strControlId = null) {
			$this->lblSensorDistanciaEstacionamiento = new QLabel($this->objParentObject, $strControlId);
			$this->lblSensorDistanciaEstacionamiento->Name = QApplication::Translate('Sensor Distancia Estacionamiento');
			$this->lblSensorDistanciaEstacionamiento->Text = $this->objFichasBackup->SensorDistanciaEstacionamiento;
			return $this->lblSensorDistanciaEstacionamiento;
		}

		/**
		 * Create and setup QTextBox txtDesempaniadorEspejosExteriores
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDesempaniadorEspejosExteriores_Create($strControlId = null) {
			$this->txtDesempaniadorEspejosExteriores = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDesempaniadorEspejosExteriores->Name = QApplication::Translate('Desempaniador Espejos Exteriores');
			$this->txtDesempaniadorEspejosExteriores->Text = $this->objFichasBackup->DesempaniadorEspejosExteriores;
			$this->txtDesempaniadorEspejosExteriores->MaxLength = FichasBackup::DesempaniadorEspejosExterioresMaxLength;
			return $this->txtDesempaniadorEspejosExteriores;
		}

		/**
		 * Create and setup QLabel lblDesempaniadorEspejosExteriores
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDesempaniadorEspejosExteriores_Create($strControlId = null) {
			$this->lblDesempaniadorEspejosExteriores = new QLabel($this->objParentObject, $strControlId);
			$this->lblDesempaniadorEspejosExteriores->Name = QApplication::Translate('Desempaniador Espejos Exteriores');
			$this->lblDesempaniadorEspejosExteriores->Text = $this->objFichasBackup->DesempaniadorEspejosExteriores;
			return $this->lblDesempaniadorEspejosExteriores;
		}

		/**
		 * Create and setup QTextBox txtEncendidoAutoBalizasUrgencia
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEncendidoAutoBalizasUrgencia_Create($strControlId = null) {
			$this->txtEncendidoAutoBalizasUrgencia = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEncendidoAutoBalizasUrgencia->Name = QApplication::Translate('Encendido Auto Balizas Urgencia');
			$this->txtEncendidoAutoBalizasUrgencia->Text = $this->objFichasBackup->EncendidoAutoBalizasUrgencia;
			$this->txtEncendidoAutoBalizasUrgencia->MaxLength = FichasBackup::EncendidoAutoBalizasUrgenciaMaxLength;
			return $this->txtEncendidoAutoBalizasUrgencia;
		}

		/**
		 * Create and setup QLabel lblEncendidoAutoBalizasUrgencia
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEncendidoAutoBalizasUrgencia_Create($strControlId = null) {
			$this->lblEncendidoAutoBalizasUrgencia = new QLabel($this->objParentObject, $strControlId);
			$this->lblEncendidoAutoBalizasUrgencia->Name = QApplication::Translate('Encendido Auto Balizas Urgencia');
			$this->lblEncendidoAutoBalizasUrgencia->Text = $this->objFichasBackup->EncendidoAutoBalizasUrgencia;
			return $this->lblEncendidoAutoBalizasUrgencia;
		}

		/**
		 * Create and setup QTextBox txtFarosAntiniebla
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFarosAntiniebla_Create($strControlId = null) {
			$this->txtFarosAntiniebla = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFarosAntiniebla->Name = QApplication::Translate('Faros Antiniebla');
			$this->txtFarosAntiniebla->Text = $this->objFichasBackup->FarosAntiniebla;
			$this->txtFarosAntiniebla->MaxLength = FichasBackup::FarosAntinieblaMaxLength;
			return $this->txtFarosAntiniebla;
		}

		/**
		 * Create and setup QLabel lblFarosAntiniebla
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFarosAntiniebla_Create($strControlId = null) {
			$this->lblFarosAntiniebla = new QLabel($this->objParentObject, $strControlId);
			$this->lblFarosAntiniebla->Name = QApplication::Translate('Faros Antiniebla');
			$this->lblFarosAntiniebla->Text = $this->objFichasBackup->FarosAntiniebla;
			return $this->lblFarosAntiniebla;
		}

		/**
		 * Create and setup QTextBox txtFarosXenon
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFarosXenon_Create($strControlId = null) {
			$this->txtFarosXenon = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFarosXenon->Name = QApplication::Translate('Faros Xenon');
			$this->txtFarosXenon->Text = $this->objFichasBackup->FarosXenon;
			$this->txtFarosXenon->MaxLength = FichasBackup::FarosXenonMaxLength;
			return $this->txtFarosXenon;
		}

		/**
		 * Create and setup QLabel lblFarosXenon
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFarosXenon_Create($strControlId = null) {
			$this->lblFarosXenon = new QLabel($this->objParentObject, $strControlId);
			$this->lblFarosXenon->Name = QApplication::Translate('Faros Xenon');
			$this->lblFarosXenon->Text = $this->objFichasBackup->FarosXenon;
			return $this->lblFarosXenon;
		}

		/**
		 * Create and setup QTextBox txtGanchosIsofixLatch
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtGanchosIsofixLatch_Create($strControlId = null) {
			$this->txtGanchosIsofixLatch = new QTextBox($this->objParentObject, $strControlId);
			$this->txtGanchosIsofixLatch->Name = QApplication::Translate('Ganchos Isofix Latch');
			$this->txtGanchosIsofixLatch->Text = $this->objFichasBackup->GanchosIsofixLatch;
			$this->txtGanchosIsofixLatch->MaxLength = FichasBackup::GanchosIsofixLatchMaxLength;
			return $this->txtGanchosIsofixLatch;
		}

		/**
		 * Create and setup QLabel lblGanchosIsofixLatch
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblGanchosIsofixLatch_Create($strControlId = null) {
			$this->lblGanchosIsofixLatch = new QLabel($this->objParentObject, $strControlId);
			$this->lblGanchosIsofixLatch->Name = QApplication::Translate('Ganchos Isofix Latch');
			$this->lblGanchosIsofixLatch->Text = $this->objFichasBackup->GanchosIsofixLatch;
			return $this->lblGanchosIsofixLatch;
		}

		/**
		 * Create and setup QTextBox txtGarantia
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtGarantia_Create($strControlId = null) {
			$this->txtGarantia = new QTextBox($this->objParentObject, $strControlId);
			$this->txtGarantia->Name = QApplication::Translate('Garantia');
			$this->txtGarantia->Text = $this->objFichasBackup->Garantia;
			$this->txtGarantia->MaxLength = FichasBackup::GarantiaMaxLength;
			return $this->txtGarantia;
		}

		/**
		 * Create and setup QLabel lblGarantia
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblGarantia_Create($strControlId = null) {
			$this->lblGarantia = new QLabel($this->objParentObject, $strControlId);
			$this->lblGarantia->Name = QApplication::Translate('Garantia');
			$this->lblGarantia->Text = $this->objFichasBackup->Garantia;
			return $this->lblGarantia;
		}

		/**
		 * Create and setup QTextBox txtIndicadorPresionNeumaticos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtIndicadorPresionNeumaticos_Create($strControlId = null) {
			$this->txtIndicadorPresionNeumaticos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtIndicadorPresionNeumaticos->Name = QApplication::Translate('Indicador Presion Neumaticos');
			$this->txtIndicadorPresionNeumaticos->Text = $this->objFichasBackup->IndicadorPresionNeumaticos;
			$this->txtIndicadorPresionNeumaticos->MaxLength = FichasBackup::IndicadorPresionNeumaticosMaxLength;
			return $this->txtIndicadorPresionNeumaticos;
		}

		/**
		 * Create and setup QLabel lblIndicadorPresionNeumaticos
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIndicadorPresionNeumaticos_Create($strControlId = null) {
			$this->lblIndicadorPresionNeumaticos = new QLabel($this->objParentObject, $strControlId);
			$this->lblIndicadorPresionNeumaticos->Name = QApplication::Translate('Indicador Presion Neumaticos');
			$this->lblIndicadorPresionNeumaticos->Text = $this->objFichasBackup->IndicadorPresionNeumaticos;
			return $this->lblIndicadorPresionNeumaticos;
		}

		/**
		 * Create and setup QTextBox txtLavafaros
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLavafaros_Create($strControlId = null) {
			$this->txtLavafaros = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLavafaros->Name = QApplication::Translate('Lavafaros');
			$this->txtLavafaros->Text = $this->objFichasBackup->Lavafaros;
			$this->txtLavafaros->MaxLength = FichasBackup::LavafarosMaxLength;
			return $this->txtLavafaros;
		}

		/**
		 * Create and setup QLabel lblLavafaros
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLavafaros_Create($strControlId = null) {
			$this->lblLavafaros = new QLabel($this->objParentObject, $strControlId);
			$this->lblLavafaros->Name = QApplication::Translate('Lavafaros');
			$this->lblLavafaros->Text = $this->objFichasBackup->Lavafaros;
			return $this->lblLavafaros;
		}

		/**
		 * Create and setup QTextBox txtLucesAdaptativasCurvas
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLucesAdaptativasCurvas_Create($strControlId = null) {
			$this->txtLucesAdaptativasCurvas = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLucesAdaptativasCurvas->Name = QApplication::Translate('Luces Adaptativas Curvas');
			$this->txtLucesAdaptativasCurvas->Text = $this->objFichasBackup->LucesAdaptativasCurvas;
			$this->txtLucesAdaptativasCurvas->MaxLength = FichasBackup::LucesAdaptativasCurvasMaxLength;
			return $this->txtLucesAdaptativasCurvas;
		}

		/**
		 * Create and setup QLabel lblLucesAdaptativasCurvas
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLucesAdaptativasCurvas_Create($strControlId = null) {
			$this->lblLucesAdaptativasCurvas = new QLabel($this->objParentObject, $strControlId);
			$this->lblLucesAdaptativasCurvas->Name = QApplication::Translate('Luces Adaptativas Curvas');
			$this->lblLucesAdaptativasCurvas->Text = $this->objFichasBackup->LucesAdaptativasCurvas;
			return $this->lblLucesAdaptativasCurvas;
		}

		/**
		 * Create and setup QTextBox txtTercerApoyaCabezaTrasero
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTercerApoyaCabezaTrasero_Create($strControlId = null) {
			$this->txtTercerApoyaCabezaTrasero = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTercerApoyaCabezaTrasero->Name = QApplication::Translate('Tercer Apoya Cabeza Trasero');
			$this->txtTercerApoyaCabezaTrasero->Text = $this->objFichasBackup->TercerApoyaCabezaTrasero;
			$this->txtTercerApoyaCabezaTrasero->MaxLength = FichasBackup::TercerApoyaCabezaTraseroMaxLength;
			return $this->txtTercerApoyaCabezaTrasero;
		}

		/**
		 * Create and setup QLabel lblTercerApoyaCabezaTrasero
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTercerApoyaCabezaTrasero_Create($strControlId = null) {
			$this->lblTercerApoyaCabezaTrasero = new QLabel($this->objParentObject, $strControlId);
			$this->lblTercerApoyaCabezaTrasero->Name = QApplication::Translate('Tercer Apoya Cabeza Trasero');
			$this->lblTercerApoyaCabezaTrasero->Text = $this->objFichasBackup->TercerApoyaCabezaTrasero;
			return $this->lblTercerApoyaCabezaTrasero;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdEstado_Create($strControlId = null) {
			$this->txtIdEstado = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdEstado->Name = QApplication::Translate('Id Estado');
			$this->txtIdEstado->Text = $this->objFichasBackup->IdEstado;
			$this->txtIdEstado->Required = true;
			return $this->txtIdEstado;
		}

		/**
		 * Create and setup QLabel lblIdEstado
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdEstado_Create($strControlId = null, $strFormat = null) {
			$this->lblIdEstado = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdEstado->Name = QApplication::Translate('Id Estado');
			$this->lblIdEstado->Text = $this->objFichasBackup->IdEstado;
			$this->lblIdEstado->Required = true;
			$this->lblIdEstado->Format = $strFormat;
			return $this->lblIdEstado;
		}



		/**
		 * Refresh this MetaControl with Data from the local FichasBackup object.
		 * @param boolean $blnReload reload FichasBackup from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFichasBackup->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objFichasBackup->Id;

			if ($this->txtIdMarca) $this->txtIdMarca->Text = $this->objFichasBackup->IdMarca;
			if ($this->lblIdMarca) $this->lblIdMarca->Text = $this->objFichasBackup->IdMarca;

			if ($this->txtIdTipos) $this->txtIdTipos->Text = $this->objFichasBackup->IdTipos;
			if ($this->lblIdTipos) $this->lblIdTipos->Text = $this->objFichasBackup->IdTipos;

			if ($this->txtModelo) $this->txtModelo->Text = $this->objFichasBackup->Modelo;
			if ($this->lblModelo) $this->lblModelo->Text = $this->objFichasBackup->Modelo;

			if ($this->txtDescripcion) $this->txtDescripcion->Text = $this->objFichasBackup->Descripcion;
			if ($this->lblDescripcion) $this->lblDescripcion->Text = $this->objFichasBackup->Descripcion;

			if ($this->txtPrecio) $this->txtPrecio->Text = $this->objFichasBackup->Precio;
			if ($this->lblPrecio) $this->lblPrecio->Text = $this->objFichasBackup->Precio;

			if ($this->txtCombustible) $this->txtCombustible->Text = $this->objFichasBackup->Combustible;
			if ($this->lblCombustible) $this->lblCombustible->Text = $this->objFichasBackup->Combustible;

			if ($this->txtCilindrada) $this->txtCilindrada->Text = $this->objFichasBackup->Cilindrada;
			if ($this->lblCilindrada) $this->lblCilindrada->Text = $this->objFichasBackup->Cilindrada;

			if ($this->txtCilindros) $this->txtCilindros->Text = $this->objFichasBackup->Cilindros;
			if ($this->lblCilindros) $this->lblCilindros->Text = $this->objFichasBackup->Cilindros;

			if ($this->txtPotenciaMaxima) $this->txtPotenciaMaxima->Text = $this->objFichasBackup->PotenciaMaxima;
			if ($this->lblPotenciaMaxima) $this->lblPotenciaMaxima->Text = $this->objFichasBackup->PotenciaMaxima;

			if ($this->txtParMotorTorque) $this->txtParMotorTorque->Text = $this->objFichasBackup->ParMotorTorque;
			if ($this->lblParMotorTorque) $this->lblParMotorTorque->Text = $this->objFichasBackup->ParMotorTorque;

			if ($this->txtPosicion) $this->txtPosicion->Text = $this->objFichasBackup->Posicion;
			if ($this->lblPosicion) $this->lblPosicion->Text = $this->objFichasBackup->Posicion;

			if ($this->txtAlimentacion) $this->txtAlimentacion->Text = $this->objFichasBackup->Alimentacion;
			if ($this->lblAlimentacion) $this->lblAlimentacion->Text = $this->objFichasBackup->Alimentacion;

			if ($this->txtRelacionDeCompresion) $this->txtRelacionDeCompresion->Text = $this->objFichasBackup->RelacionDeCompresion;
			if ($this->lblRelacionDeCompresion) $this->lblRelacionDeCompresion->Text = $this->objFichasBackup->RelacionDeCompresion;

			if ($this->txtValvulas) $this->txtValvulas->Text = $this->objFichasBackup->Valvulas;
			if ($this->lblValvulas) $this->lblValvulas->Text = $this->objFichasBackup->Valvulas;

			if ($this->txtTipo) $this->txtTipo->Text = $this->objFichasBackup->Tipo;
			if ($this->lblTipo) $this->lblTipo->Text = $this->objFichasBackup->Tipo;

			if ($this->txtMarchas) $this->txtMarchas->Text = $this->objFichasBackup->Marchas;
			if ($this->lblMarchas) $this->lblMarchas->Text = $this->objFichasBackup->Marchas;

			if ($this->txtTraccion) $this->txtTraccion->Text = $this->objFichasBackup->Traccion;
			if ($this->lblTraccion) $this->lblTraccion->Text = $this->objFichasBackup->Traccion;

			if ($this->txtVelocidadMaxima) $this->txtVelocidadMaxima->Text = $this->objFichasBackup->VelocidadMaxima;
			if ($this->lblVelocidadMaxima) $this->lblVelocidadMaxima->Text = $this->objFichasBackup->VelocidadMaxima;

			if ($this->txtAceleracion0100) $this->txtAceleracion0100->Text = $this->objFichasBackup->Aceleracion0100;
			if ($this->lblAceleracion0100) $this->lblAceleracion0100->Text = $this->objFichasBackup->Aceleracion0100;

			if ($this->txtConsumoUrbano) $this->txtConsumoUrbano->Text = $this->objFichasBackup->ConsumoUrbano;
			if ($this->lblConsumoUrbano) $this->lblConsumoUrbano->Text = $this->objFichasBackup->ConsumoUrbano;

			if ($this->txtConsumoInterurbano) $this->txtConsumoInterurbano->Text = $this->objFichasBackup->ConsumoInterurbano;
			if ($this->lblConsumoInterurbano) $this->lblConsumoInterurbano->Text = $this->objFichasBackup->ConsumoInterurbano;

			if ($this->txtConsumoMixto) $this->txtConsumoMixto->Text = $this->objFichasBackup->ConsumoMixto;
			if ($this->lblConsumoMixto) $this->lblConsumoMixto->Text = $this->objFichasBackup->ConsumoMixto;

			if ($this->txtEmisionesCo2) $this->txtEmisionesCo2->Text = $this->objFichasBackup->EmisionesCo2;
			if ($this->lblEmisionesCo2) $this->lblEmisionesCo2->Text = $this->objFichasBackup->EmisionesCo2;

			if ($this->txtTipoCarroceria) $this->txtTipoCarroceria->Text = $this->objFichasBackup->TipoCarroceria;
			if ($this->lblTipoCarroceria) $this->lblTipoCarroceria->Text = $this->objFichasBackup->TipoCarroceria;

			if ($this->txtPuertas) $this->txtPuertas->Text = $this->objFichasBackup->Puertas;
			if ($this->lblPuertas) $this->lblPuertas->Text = $this->objFichasBackup->Puertas;

			if ($this->txtPlazas) $this->txtPlazas->Text = $this->objFichasBackup->Plazas;
			if ($this->lblPlazas) $this->lblPlazas->Text = $this->objFichasBackup->Plazas;

			if ($this->txtFilasDeAsientos) $this->txtFilasDeAsientos->Text = $this->objFichasBackup->FilasDeAsientos;
			if ($this->lblFilasDeAsientos) $this->lblFilasDeAsientos->Text = $this->objFichasBackup->FilasDeAsientos;

			if ($this->txtInfoEjes) $this->txtInfoEjes->Text = $this->objFichasBackup->InfoEjes;
			if ($this->lblInfoEjes) $this->lblInfoEjes->Text = $this->objFichasBackup->InfoEjes;

			if ($this->txtPeso) $this->txtPeso->Text = $this->objFichasBackup->Peso;
			if ($this->lblPeso) $this->lblPeso->Text = $this->objFichasBackup->Peso;

			if ($this->txtCapacidadBaul) $this->txtCapacidadBaul->Text = $this->objFichasBackup->CapacidadBaul;
			if ($this->lblCapacidadBaul) $this->lblCapacidadBaul->Text = $this->objFichasBackup->CapacidadBaul;

			if ($this->txtCapacidadTanque) $this->txtCapacidadTanque->Text = $this->objFichasBackup->CapacidadTanque;
			if ($this->lblCapacidadTanque) $this->lblCapacidadTanque->Text = $this->objFichasBackup->CapacidadTanque;

			if ($this->txtInfoCajaCarga) $this->txtInfoCajaCarga->Text = $this->objFichasBackup->InfoCajaCarga;
			if ($this->lblInfoCajaCarga) $this->lblInfoCajaCarga->Text = $this->objFichasBackup->InfoCajaCarga;

			if ($this->txtVolumenCajaCarga) $this->txtVolumenCajaCarga->Text = $this->objFichasBackup->VolumenCajaCarga;
			if ($this->lblVolumenCajaCarga) $this->lblVolumenCajaCarga->Text = $this->objFichasBackup->VolumenCajaCarga;

			if ($this->txtCapacidadCarga) $this->txtCapacidadCarga->Text = $this->objFichasBackup->CapacidadCarga;
			if ($this->lblCapacidadCarga) $this->lblCapacidadCarga->Text = $this->objFichasBackup->CapacidadCarga;

			if ($this->txtFrenosDelanteros) $this->txtFrenosDelanteros->Text = $this->objFichasBackup->FrenosDelanteros;
			if ($this->lblFrenosDelanteros) $this->lblFrenosDelanteros->Text = $this->objFichasBackup->FrenosDelanteros;

			if ($this->txtFrenosTraseros) $this->txtFrenosTraseros->Text = $this->objFichasBackup->FrenosTraseros;
			if ($this->lblFrenosTraseros) $this->lblFrenosTraseros->Text = $this->objFichasBackup->FrenosTraseros;

			if ($this->txtLlantas) $this->txtLlantas->Text = $this->objFichasBackup->Llantas;
			if ($this->lblLlantas) $this->lblLlantas->Text = $this->objFichasBackup->Llantas;

			if ($this->txtNeumaticos) $this->txtNeumaticos->Text = $this->objFichasBackup->Neumaticos;
			if ($this->lblNeumaticos) $this->lblNeumaticos->Text = $this->objFichasBackup->Neumaticos;

			if ($this->txtSuspensionDelantera) $this->txtSuspensionDelantera->Text = $this->objFichasBackup->SuspensionDelantera;
			if ($this->lblSuspensionDelantera) $this->lblSuspensionDelantera->Text = $this->objFichasBackup->SuspensionDelantera;

			if ($this->txtSuspensionTrasera) $this->txtSuspensionTrasera->Text = $this->objFichasBackup->SuspensionTrasera;
			if ($this->lblSuspensionTrasera) $this->lblSuspensionTrasera->Text = $this->objFichasBackup->SuspensionTrasera;

			if ($this->txtLucesAutomatico) $this->txtLucesAutomatico->Text = $this->objFichasBackup->LucesAutomatico;
			if ($this->lblLucesAutomatico) $this->lblLucesAutomatico->Text = $this->objFichasBackup->LucesAutomatico;

			if ($this->txtClimatizacion) $this->txtClimatizacion->Text = $this->objFichasBackup->Climatizacion;
			if ($this->lblClimatizacion) $this->lblClimatizacion->Text = $this->objFichasBackup->Climatizacion;

			if ($this->txtAlarmaLucesEncendidas) $this->txtAlarmaLucesEncendidas->Text = $this->objFichasBackup->AlarmaLucesEncendidas;
			if ($this->lblAlarmaLucesEncendidas) $this->lblAlarmaLucesEncendidas->Text = $this->objFichasBackup->AlarmaLucesEncendidas;

			if ($this->txtCritalesElectricos) $this->txtCritalesElectricos->Text = $this->objFichasBackup->CritalesElectricos;
			if ($this->lblCritalesElectricos) $this->lblCritalesElectricos->Text = $this->objFichasBackup->CritalesElectricos;

			if ($this->txtAperturaBaul) $this->txtAperturaBaul->Text = $this->objFichasBackup->AperturaBaul;
			if ($this->lblAperturaBaul) $this->lblAperturaBaul->Text = $this->objFichasBackup->AperturaBaul;

			if ($this->txtAperturaTanque) $this->txtAperturaTanque->Text = $this->objFichasBackup->AperturaTanque;
			if ($this->lblAperturaTanque) $this->lblAperturaTanque->Text = $this->objFichasBackup->AperturaTanque;

			if ($this->txtAsientosRegulablesAltura) $this->txtAsientosRegulablesAltura->Text = $this->objFichasBackup->AsientosRegulablesAltura;
			if ($this->lblAsientosRegulablesAltura) $this->lblAsientosRegulablesAltura->Text = $this->objFichasBackup->AsientosRegulablesAltura;

			if ($this->txtAsientoTraseroRebatible) $this->txtAsientoTraseroRebatible->Text = $this->objFichasBackup->AsientoTraseroRebatible;
			if ($this->lblAsientoTraseroRebatible) $this->lblAsientoTraseroRebatible->Text = $this->objFichasBackup->AsientoTraseroRebatible;

			if ($this->txtAsientosCalefaccionado) $this->txtAsientosCalefaccionado->Text = $this->objFichasBackup->AsientosCalefaccionado;
			if ($this->lblAsientosCalefaccionado) $this->lblAsientosCalefaccionado->Text = $this->objFichasBackup->AsientosCalefaccionado;

			if ($this->txtAsientosAjustesElectronicos) $this->txtAsientosAjustesElectronicos->Text = $this->objFichasBackup->AsientosAjustesElectronicos;
			if ($this->lblAsientosAjustesElectronicos) $this->lblAsientosAjustesElectronicos->Text = $this->objFichasBackup->AsientosAjustesElectronicos;

			if ($this->txtAsientosDelButacaDeportiva) $this->txtAsientosDelButacaDeportiva->Text = $this->objFichasBackup->AsientosDelButacaDeportiva;
			if ($this->lblAsientosDelButacaDeportiva) $this->lblAsientosDelButacaDeportiva->Text = $this->objFichasBackup->AsientosDelButacaDeportiva;

			if ($this->txtAsientoDelBipartido) $this->txtAsientoDelBipartido->Text = $this->objFichasBackup->AsientoDelBipartido;
			if ($this->lblAsientoDelBipartido) $this->lblAsientoDelBipartido->Text = $this->objFichasBackup->AsientoDelBipartido;

			if ($this->txtBotonStartStop) $this->txtBotonStartStop->Text = $this->objFichasBackup->BotonStartStop;
			if ($this->lblBotonStartStop) $this->lblBotonStartStop->Text = $this->objFichasBackup->BotonStartStop;

			if ($this->txtCambioSecuencialVolante) $this->txtCambioSecuencialVolante->Text = $this->objFichasBackup->CambioSecuencialVolante;
			if ($this->lblCambioSecuencialVolante) $this->lblCambioSecuencialVolante->Text = $this->objFichasBackup->CambioSecuencialVolante;

			if ($this->txtCierreCentralizado) $this->txtCierreCentralizado->Text = $this->objFichasBackup->CierreCentralizado;
			if ($this->lblCierreCentralizado) $this->lblCierreCentralizado->Text = $this->objFichasBackup->CierreCentralizado;

			if ($this->txtComputadoraABordo) $this->txtComputadoraABordo->Text = $this->objFichasBackup->ComputadoraABordo;
			if ($this->lblComputadoraABordo) $this->lblComputadoraABordo->Text = $this->objFichasBackup->ComputadoraABordo;

			if ($this->txtDireccionAsistida) $this->txtDireccionAsistida->Text = $this->objFichasBackup->DireccionAsistida;
			if ($this->lblDireccionAsistida) $this->lblDireccionAsistida->Text = $this->objFichasBackup->DireccionAsistida;

			if ($this->txtMandosAudioVolante) $this->txtMandosAudioVolante->Text = $this->objFichasBackup->MandosAudioVolante;
			if ($this->lblMandosAudioVolante) $this->lblMandosAudioVolante->Text = $this->objFichasBackup->MandosAudioVolante;

			if ($this->txtReposabrazos) $this->txtReposabrazos->Text = $this->objFichasBackup->Reposabrazos;
			if ($this->lblReposabrazos) $this->lblReposabrazos->Text = $this->objFichasBackup->Reposabrazos;

			if ($this->txtControlCrucero) $this->txtControlCrucero->Text = $this->objFichasBackup->ControlCrucero;
			if ($this->lblControlCrucero) $this->lblControlCrucero->Text = $this->objFichasBackup->ControlCrucero;

			if ($this->txtSensorLluvia) $this->txtSensorLluvia->Text = $this->objFichasBackup->SensorLluvia;
			if ($this->lblSensorLluvia) $this->lblSensorLluvia->Text = $this->objFichasBackup->SensorLluvia;

			if ($this->txtTapizado) $this->txtTapizado->Text = $this->objFichasBackup->Tapizado;
			if ($this->lblTapizado) $this->lblTapizado->Text = $this->objFichasBackup->Tapizado;

			if ($this->txtSalidasAire) $this->txtSalidasAire->Text = $this->objFichasBackup->SalidasAire;
			if ($this->lblSalidasAire) $this->lblSalidasAire->Text = $this->objFichasBackup->SalidasAire;

			if ($this->txtTechoCorredizo) $this->txtTechoCorredizo->Text = $this->objFichasBackup->TechoCorredizo;
			if ($this->lblTechoCorredizo) $this->lblTechoCorredizo->Text = $this->objFichasBackup->TechoCorredizo;

			if ($this->txtComandoDistancia) $this->txtComandoDistancia->Text = $this->objFichasBackup->ComandoDistancia;
			if ($this->lblComandoDistancia) $this->lblComandoDistancia->Text = $this->objFichasBackup->ComandoDistancia;

			if ($this->txtVolanteAjusteVertical) $this->txtVolanteAjusteVertical->Text = $this->objFichasBackup->VolanteAjusteVertical;
			if ($this->lblVolanteAjusteVertical) $this->lblVolanteAjusteVertical->Text = $this->objFichasBackup->VolanteAjusteVertical;

			if ($this->txtVolanteCuero) $this->txtVolanteCuero->Text = $this->objFichasBackup->VolanteCuero;
			if ($this->lblVolanteCuero) $this->lblVolanteCuero->Text = $this->objFichasBackup->VolanteCuero;

			if ($this->txtMoldurasColorCarroceria) $this->txtMoldurasColorCarroceria->Text = $this->objFichasBackup->MoldurasColorCarroceria;
			if ($this->lblMoldurasColorCarroceria) $this->lblMoldurasColorCarroceria->Text = $this->objFichasBackup->MoldurasColorCarroceria;

			if ($this->txtEspejosElectricos) $this->txtEspejosElectricos->Text = $this->objFichasBackup->EspejosElectricos;
			if ($this->lblEspejosElectricos) $this->lblEspejosElectricos->Text = $this->objFichasBackup->EspejosElectricos;

			if ($this->txtEspejosRebatiblesElectricamente) $this->txtEspejosRebatiblesElectricamente->Text = $this->objFichasBackup->EspejosRebatiblesElectricamente;
			if ($this->lblEspejosRebatiblesElectricamente) $this->lblEspejosRebatiblesElectricamente->Text = $this->objFichasBackup->EspejosRebatiblesElectricamente;

			if ($this->txtEspejosMemorias) $this->txtEspejosMemorias->Text = $this->objFichasBackup->EspejosMemorias;
			if ($this->lblEspejosMemorias) $this->lblEspejosMemorias->Text = $this->objFichasBackup->EspejosMemorias;

			if ($this->txtLavaFaros) $this->txtLavaFaros->Text = $this->objFichasBackup->LavaFaros;
			if ($this->lblLavaFaros) $this->lblLavaFaros->Text = $this->objFichasBackup->LavaFaros;

			if ($this->txtLavaLuneta) $this->txtLavaLuneta->Text = $this->objFichasBackup->LavaLuneta;
			if ($this->lblLavaLuneta) $this->lblLavaLuneta->Text = $this->objFichasBackup->LavaLuneta;

			if ($this->txtCobertorCajaCarga) $this->txtCobertorCajaCarga->Text = $this->objFichasBackup->CobertorCajaCarga;
			if ($this->lblCobertorCajaCarga) $this->lblCobertorCajaCarga->Text = $this->objFichasBackup->CobertorCajaCarga;

			if ($this->txtBarrasPortaequipajeTecho) $this->txtBarrasPortaequipajeTecho->Text = $this->objFichasBackup->BarrasPortaequipajeTecho;
			if ($this->lblBarrasPortaequipajeTecho) $this->lblBarrasPortaequipajeTecho->Text = $this->objFichasBackup->BarrasPortaequipajeTecho;

			if ($this->txtBarraAntivuelco) $this->txtBarraAntivuelco->Text = $this->objFichasBackup->BarraAntivuelco;
			if ($this->lblBarraAntivuelco) $this->lblBarraAntivuelco->Text = $this->objFichasBackup->BarraAntivuelco;

			if ($this->txtEstribos) $this->txtEstribos->Text = $this->objFichasBackup->Estribos;
			if ($this->lblEstribos) $this->lblEstribos->Text = $this->objFichasBackup->Estribos;

			if ($this->txtConexionAuxiliar) $this->txtConexionAuxiliar->Text = $this->objFichasBackup->ConexionAuxiliar;
			if ($this->lblConexionAuxiliar) $this->lblConexionAuxiliar->Text = $this->objFichasBackup->ConexionAuxiliar;

			if ($this->txtConexionBluetooth) $this->txtConexionBluetooth->Text = $this->objFichasBackup->ConexionBluetooth;
			if ($this->lblConexionBluetooth) $this->lblConexionBluetooth->Text = $this->objFichasBackup->ConexionBluetooth;

			if ($this->txtControlPorVoz) $this->txtControlPorVoz->Text = $this->objFichasBackup->ControlPorVoz;
			if ($this->lblControlPorVoz) $this->lblControlPorVoz->Text = $this->objFichasBackup->ControlPorVoz;

			if ($this->txtEntradaUsb) $this->txtEntradaUsb->Text = $this->objFichasBackup->EntradaUsb;
			if ($this->lblEntradaUsb) $this->lblEntradaUsb->Text = $this->objFichasBackup->EntradaUsb;

			if ($this->txtLectorTarjetasSd) $this->txtLectorTarjetasSd->Text = $this->objFichasBackup->LectorTarjetasSd;
			if ($this->lblLectorTarjetasSd) $this->lblLectorTarjetasSd->Text = $this->objFichasBackup->LectorTarjetasSd;

			if ($this->txtNavegadorGps) $this->txtNavegadorGps->Text = $this->objFichasBackup->NavegadorGps;
			if ($this->lblNavegadorGps) $this->lblNavegadorGps->Text = $this->objFichasBackup->NavegadorGps;

			if ($this->txtParlantes) $this->txtParlantes->Text = $this->objFichasBackup->Parlantes;
			if ($this->lblParlantes) $this->lblParlantes->Text = $this->objFichasBackup->Parlantes;

			if ($this->txtRadioAmfm) $this->txtRadioAmfm->Text = $this->objFichasBackup->RadioAmfm;
			if ($this->lblRadioAmfm) $this->lblRadioAmfm->Text = $this->objFichasBackup->RadioAmfm;

			if ($this->txtRadioSatelitalXm) $this->txtRadioSatelitalXm->Text = $this->objFichasBackup->RadioSatelitalXm;
			if ($this->lblRadioSatelitalXm) $this->lblRadioSatelitalXm->Text = $this->objFichasBackup->RadioSatelitalXm;

			if ($this->txtReproductorCd) $this->txtReproductorCd->Text = $this->objFichasBackup->ReproductorCd;
			if ($this->lblReproductorCd) $this->lblReproductorCd->Text = $this->objFichasBackup->ReproductorCd;

			if ($this->txtReproductorDvd) $this->txtReproductorDvd->Text = $this->objFichasBackup->ReproductorDvd;
			if ($this->lblReproductorDvd) $this->lblReproductorDvd->Text = $this->objFichasBackup->ReproductorDvd;

			if ($this->txtReproductorMp3) $this->txtReproductorMp3->Text = $this->objFichasBackup->ReproductorMp3;
			if ($this->lblReproductorMp3) $this->lblReproductorMp3->Text = $this->objFichasBackup->ReproductorMp3;

			if ($this->txtTomaCorriente12v) $this->txtTomaCorriente12v->Text = $this->objFichasBackup->TomaCorriente12v;
			if ($this->lblTomaCorriente12v) $this->lblTomaCorriente12v->Text = $this->objFichasBackup->TomaCorriente12v;

			if ($this->txtAirbags) $this->txtAirbags->Text = $this->objFichasBackup->Airbags;
			if ($this->lblAirbags) $this->lblAirbags->Text = $this->objFichasBackup->Airbags;

			if ($this->txtAlarma) $this->txtAlarma->Text = $this->objFichasBackup->Alarma;
			if ($this->lblAlarma) $this->lblAlarma->Text = $this->objFichasBackup->Alarma;

			if ($this->txtAsientoParaNinos) $this->txtAsientoParaNinos->Text = $this->objFichasBackup->AsientoParaNinos;
			if ($this->lblAsientoParaNinos) $this->lblAsientoParaNinos->Text = $this->objFichasBackup->AsientoParaNinos;

			if ($this->txtAsistenciasElectronicas) $this->txtAsistenciasElectronicas->Text = $this->objFichasBackup->AsistenciasElectronicas;
			if ($this->lblAsistenciasElectronicas) $this->lblAsistenciasElectronicas->Text = $this->objFichasBackup->AsistenciasElectronicas;

			if ($this->txtCamaraRetroceso) $this->txtCamaraRetroceso->Text = $this->objFichasBackup->CamaraRetroceso;
			if ($this->lblCamaraRetroceso) $this->lblCamaraRetroceso->Text = $this->objFichasBackup->CamaraRetroceso;

			if ($this->txtCinturonesInerciales) $this->txtCinturonesInerciales->Text = $this->objFichasBackup->CinturonesInerciales;
			if ($this->lblCinturonesInerciales) $this->lblCinturonesInerciales->Text = $this->objFichasBackup->CinturonesInerciales;

			if ($this->txtSensorDistanciaEstacionamiento) $this->txtSensorDistanciaEstacionamiento->Text = $this->objFichasBackup->SensorDistanciaEstacionamiento;
			if ($this->lblSensorDistanciaEstacionamiento) $this->lblSensorDistanciaEstacionamiento->Text = $this->objFichasBackup->SensorDistanciaEstacionamiento;

			if ($this->txtDesempaniadorEspejosExteriores) $this->txtDesempaniadorEspejosExteriores->Text = $this->objFichasBackup->DesempaniadorEspejosExteriores;
			if ($this->lblDesempaniadorEspejosExteriores) $this->lblDesempaniadorEspejosExteriores->Text = $this->objFichasBackup->DesempaniadorEspejosExteriores;

			if ($this->txtEncendidoAutoBalizasUrgencia) $this->txtEncendidoAutoBalizasUrgencia->Text = $this->objFichasBackup->EncendidoAutoBalizasUrgencia;
			if ($this->lblEncendidoAutoBalizasUrgencia) $this->lblEncendidoAutoBalizasUrgencia->Text = $this->objFichasBackup->EncendidoAutoBalizasUrgencia;

			if ($this->txtFarosAntiniebla) $this->txtFarosAntiniebla->Text = $this->objFichasBackup->FarosAntiniebla;
			if ($this->lblFarosAntiniebla) $this->lblFarosAntiniebla->Text = $this->objFichasBackup->FarosAntiniebla;

			if ($this->txtFarosXenon) $this->txtFarosXenon->Text = $this->objFichasBackup->FarosXenon;
			if ($this->lblFarosXenon) $this->lblFarosXenon->Text = $this->objFichasBackup->FarosXenon;

			if ($this->txtGanchosIsofixLatch) $this->txtGanchosIsofixLatch->Text = $this->objFichasBackup->GanchosIsofixLatch;
			if ($this->lblGanchosIsofixLatch) $this->lblGanchosIsofixLatch->Text = $this->objFichasBackup->GanchosIsofixLatch;

			if ($this->txtGarantia) $this->txtGarantia->Text = $this->objFichasBackup->Garantia;
			if ($this->lblGarantia) $this->lblGarantia->Text = $this->objFichasBackup->Garantia;

			if ($this->txtIndicadorPresionNeumaticos) $this->txtIndicadorPresionNeumaticos->Text = $this->objFichasBackup->IndicadorPresionNeumaticos;
			if ($this->lblIndicadorPresionNeumaticos) $this->lblIndicadorPresionNeumaticos->Text = $this->objFichasBackup->IndicadorPresionNeumaticos;

			if ($this->txtLavafaros) $this->txtLavafaros->Text = $this->objFichasBackup->Lavafaros;
			if ($this->lblLavafaros) $this->lblLavafaros->Text = $this->objFichasBackup->Lavafaros;

			if ($this->txtLucesAdaptativasCurvas) $this->txtLucesAdaptativasCurvas->Text = $this->objFichasBackup->LucesAdaptativasCurvas;
			if ($this->lblLucesAdaptativasCurvas) $this->lblLucesAdaptativasCurvas->Text = $this->objFichasBackup->LucesAdaptativasCurvas;

			if ($this->txtTercerApoyaCabezaTrasero) $this->txtTercerApoyaCabezaTrasero->Text = $this->objFichasBackup->TercerApoyaCabezaTrasero;
			if ($this->lblTercerApoyaCabezaTrasero) $this->lblTercerApoyaCabezaTrasero->Text = $this->objFichasBackup->TercerApoyaCabezaTrasero;

			if ($this->txtIdEstado) $this->txtIdEstado->Text = $this->objFichasBackup->IdEstado;
			if ($this->lblIdEstado) $this->lblIdEstado->Text = $this->objFichasBackup->IdEstado;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FICHASBACKUP OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FichasBackup instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFichasBackup() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtIdMarca) $this->objFichasBackup->IdMarca = $this->txtIdMarca->Text;
				if ($this->txtIdTipos) $this->objFichasBackup->IdTipos = $this->txtIdTipos->Text;
				if ($this->txtModelo) $this->objFichasBackup->Modelo = $this->txtModelo->Text;
				if ($this->txtDescripcion) $this->objFichasBackup->Descripcion = $this->txtDescripcion->Text;
				if ($this->txtPrecio) $this->objFichasBackup->Precio = $this->txtPrecio->Text;
				if ($this->txtCombustible) $this->objFichasBackup->Combustible = $this->txtCombustible->Text;
				if ($this->txtCilindrada) $this->objFichasBackup->Cilindrada = $this->txtCilindrada->Text;
				if ($this->txtCilindros) $this->objFichasBackup->Cilindros = $this->txtCilindros->Text;
				if ($this->txtPotenciaMaxima) $this->objFichasBackup->PotenciaMaxima = $this->txtPotenciaMaxima->Text;
				if ($this->txtParMotorTorque) $this->objFichasBackup->ParMotorTorque = $this->txtParMotorTorque->Text;
				if ($this->txtPosicion) $this->objFichasBackup->Posicion = $this->txtPosicion->Text;
				if ($this->txtAlimentacion) $this->objFichasBackup->Alimentacion = $this->txtAlimentacion->Text;
				if ($this->txtRelacionDeCompresion) $this->objFichasBackup->RelacionDeCompresion = $this->txtRelacionDeCompresion->Text;
				if ($this->txtValvulas) $this->objFichasBackup->Valvulas = $this->txtValvulas->Text;
				if ($this->txtTipo) $this->objFichasBackup->Tipo = $this->txtTipo->Text;
				if ($this->txtMarchas) $this->objFichasBackup->Marchas = $this->txtMarchas->Text;
				if ($this->txtTraccion) $this->objFichasBackup->Traccion = $this->txtTraccion->Text;
				if ($this->txtVelocidadMaxima) $this->objFichasBackup->VelocidadMaxima = $this->txtVelocidadMaxima->Text;
				if ($this->txtAceleracion0100) $this->objFichasBackup->Aceleracion0100 = $this->txtAceleracion0100->Text;
				if ($this->txtConsumoUrbano) $this->objFichasBackup->ConsumoUrbano = $this->txtConsumoUrbano->Text;
				if ($this->txtConsumoInterurbano) $this->objFichasBackup->ConsumoInterurbano = $this->txtConsumoInterurbano->Text;
				if ($this->txtConsumoMixto) $this->objFichasBackup->ConsumoMixto = $this->txtConsumoMixto->Text;
				if ($this->txtEmisionesCo2) $this->objFichasBackup->EmisionesCo2 = $this->txtEmisionesCo2->Text;
				if ($this->txtTipoCarroceria) $this->objFichasBackup->TipoCarroceria = $this->txtTipoCarroceria->Text;
				if ($this->txtPuertas) $this->objFichasBackup->Puertas = $this->txtPuertas->Text;
				if ($this->txtPlazas) $this->objFichasBackup->Plazas = $this->txtPlazas->Text;
				if ($this->txtFilasDeAsientos) $this->objFichasBackup->FilasDeAsientos = $this->txtFilasDeAsientos->Text;
				if ($this->txtInfoEjes) $this->objFichasBackup->InfoEjes = $this->txtInfoEjes->Text;
				if ($this->txtPeso) $this->objFichasBackup->Peso = $this->txtPeso->Text;
				if ($this->txtCapacidadBaul) $this->objFichasBackup->CapacidadBaul = $this->txtCapacidadBaul->Text;
				if ($this->txtCapacidadTanque) $this->objFichasBackup->CapacidadTanque = $this->txtCapacidadTanque->Text;
				if ($this->txtInfoCajaCarga) $this->objFichasBackup->InfoCajaCarga = $this->txtInfoCajaCarga->Text;
				if ($this->txtVolumenCajaCarga) $this->objFichasBackup->VolumenCajaCarga = $this->txtVolumenCajaCarga->Text;
				if ($this->txtCapacidadCarga) $this->objFichasBackup->CapacidadCarga = $this->txtCapacidadCarga->Text;
				if ($this->txtFrenosDelanteros) $this->objFichasBackup->FrenosDelanteros = $this->txtFrenosDelanteros->Text;
				if ($this->txtFrenosTraseros) $this->objFichasBackup->FrenosTraseros = $this->txtFrenosTraseros->Text;
				if ($this->txtLlantas) $this->objFichasBackup->Llantas = $this->txtLlantas->Text;
				if ($this->txtNeumaticos) $this->objFichasBackup->Neumaticos = $this->txtNeumaticos->Text;
				if ($this->txtSuspensionDelantera) $this->objFichasBackup->SuspensionDelantera = $this->txtSuspensionDelantera->Text;
				if ($this->txtSuspensionTrasera) $this->objFichasBackup->SuspensionTrasera = $this->txtSuspensionTrasera->Text;
				if ($this->txtLucesAutomatico) $this->objFichasBackup->LucesAutomatico = $this->txtLucesAutomatico->Text;
				if ($this->txtClimatizacion) $this->objFichasBackup->Climatizacion = $this->txtClimatizacion->Text;
				if ($this->txtAlarmaLucesEncendidas) $this->objFichasBackup->AlarmaLucesEncendidas = $this->txtAlarmaLucesEncendidas->Text;
				if ($this->txtCritalesElectricos) $this->objFichasBackup->CritalesElectricos = $this->txtCritalesElectricos->Text;
				if ($this->txtAperturaBaul) $this->objFichasBackup->AperturaBaul = $this->txtAperturaBaul->Text;
				if ($this->txtAperturaTanque) $this->objFichasBackup->AperturaTanque = $this->txtAperturaTanque->Text;
				if ($this->txtAsientosRegulablesAltura) $this->objFichasBackup->AsientosRegulablesAltura = $this->txtAsientosRegulablesAltura->Text;
				if ($this->txtAsientoTraseroRebatible) $this->objFichasBackup->AsientoTraseroRebatible = $this->txtAsientoTraseroRebatible->Text;
				if ($this->txtAsientosCalefaccionado) $this->objFichasBackup->AsientosCalefaccionado = $this->txtAsientosCalefaccionado->Text;
				if ($this->txtAsientosAjustesElectronicos) $this->objFichasBackup->AsientosAjustesElectronicos = $this->txtAsientosAjustesElectronicos->Text;
				if ($this->txtAsientosDelButacaDeportiva) $this->objFichasBackup->AsientosDelButacaDeportiva = $this->txtAsientosDelButacaDeportiva->Text;
				if ($this->txtAsientoDelBipartido) $this->objFichasBackup->AsientoDelBipartido = $this->txtAsientoDelBipartido->Text;
				if ($this->txtBotonStartStop) $this->objFichasBackup->BotonStartStop = $this->txtBotonStartStop->Text;
				if ($this->txtCambioSecuencialVolante) $this->objFichasBackup->CambioSecuencialVolante = $this->txtCambioSecuencialVolante->Text;
				if ($this->txtCierreCentralizado) $this->objFichasBackup->CierreCentralizado = $this->txtCierreCentralizado->Text;
				if ($this->txtComputadoraABordo) $this->objFichasBackup->ComputadoraABordo = $this->txtComputadoraABordo->Text;
				if ($this->txtDireccionAsistida) $this->objFichasBackup->DireccionAsistida = $this->txtDireccionAsistida->Text;
				if ($this->txtMandosAudioVolante) $this->objFichasBackup->MandosAudioVolante = $this->txtMandosAudioVolante->Text;
				if ($this->txtReposabrazos) $this->objFichasBackup->Reposabrazos = $this->txtReposabrazos->Text;
				if ($this->txtControlCrucero) $this->objFichasBackup->ControlCrucero = $this->txtControlCrucero->Text;
				if ($this->txtSensorLluvia) $this->objFichasBackup->SensorLluvia = $this->txtSensorLluvia->Text;
				if ($this->txtTapizado) $this->objFichasBackup->Tapizado = $this->txtTapizado->Text;
				if ($this->txtSalidasAire) $this->objFichasBackup->SalidasAire = $this->txtSalidasAire->Text;
				if ($this->txtTechoCorredizo) $this->objFichasBackup->TechoCorredizo = $this->txtTechoCorredizo->Text;
				if ($this->txtComandoDistancia) $this->objFichasBackup->ComandoDistancia = $this->txtComandoDistancia->Text;
				if ($this->txtVolanteAjusteVertical) $this->objFichasBackup->VolanteAjusteVertical = $this->txtVolanteAjusteVertical->Text;
				if ($this->txtVolanteCuero) $this->objFichasBackup->VolanteCuero = $this->txtVolanteCuero->Text;
				if ($this->txtMoldurasColorCarroceria) $this->objFichasBackup->MoldurasColorCarroceria = $this->txtMoldurasColorCarroceria->Text;
				if ($this->txtEspejosElectricos) $this->objFichasBackup->EspejosElectricos = $this->txtEspejosElectricos->Text;
				if ($this->txtEspejosRebatiblesElectricamente) $this->objFichasBackup->EspejosRebatiblesElectricamente = $this->txtEspejosRebatiblesElectricamente->Text;
				if ($this->txtEspejosMemorias) $this->objFichasBackup->EspejosMemorias = $this->txtEspejosMemorias->Text;
				if ($this->txtLavaFaros) $this->objFichasBackup->LavaFaros = $this->txtLavaFaros->Text;
				if ($this->txtLavaLuneta) $this->objFichasBackup->LavaLuneta = $this->txtLavaLuneta->Text;
				if ($this->txtCobertorCajaCarga) $this->objFichasBackup->CobertorCajaCarga = $this->txtCobertorCajaCarga->Text;
				if ($this->txtBarrasPortaequipajeTecho) $this->objFichasBackup->BarrasPortaequipajeTecho = $this->txtBarrasPortaequipajeTecho->Text;
				if ($this->txtBarraAntivuelco) $this->objFichasBackup->BarraAntivuelco = $this->txtBarraAntivuelco->Text;
				if ($this->txtEstribos) $this->objFichasBackup->Estribos = $this->txtEstribos->Text;
				if ($this->txtConexionAuxiliar) $this->objFichasBackup->ConexionAuxiliar = $this->txtConexionAuxiliar->Text;
				if ($this->txtConexionBluetooth) $this->objFichasBackup->ConexionBluetooth = $this->txtConexionBluetooth->Text;
				if ($this->txtControlPorVoz) $this->objFichasBackup->ControlPorVoz = $this->txtControlPorVoz->Text;
				if ($this->txtEntradaUsb) $this->objFichasBackup->EntradaUsb = $this->txtEntradaUsb->Text;
				if ($this->txtLectorTarjetasSd) $this->objFichasBackup->LectorTarjetasSd = $this->txtLectorTarjetasSd->Text;
				if ($this->txtNavegadorGps) $this->objFichasBackup->NavegadorGps = $this->txtNavegadorGps->Text;
				if ($this->txtParlantes) $this->objFichasBackup->Parlantes = $this->txtParlantes->Text;
				if ($this->txtRadioAmfm) $this->objFichasBackup->RadioAmfm = $this->txtRadioAmfm->Text;
				if ($this->txtRadioSatelitalXm) $this->objFichasBackup->RadioSatelitalXm = $this->txtRadioSatelitalXm->Text;
				if ($this->txtReproductorCd) $this->objFichasBackup->ReproductorCd = $this->txtReproductorCd->Text;
				if ($this->txtReproductorDvd) $this->objFichasBackup->ReproductorDvd = $this->txtReproductorDvd->Text;
				if ($this->txtReproductorMp3) $this->objFichasBackup->ReproductorMp3 = $this->txtReproductorMp3->Text;
				if ($this->txtTomaCorriente12v) $this->objFichasBackup->TomaCorriente12v = $this->txtTomaCorriente12v->Text;
				if ($this->txtAirbags) $this->objFichasBackup->Airbags = $this->txtAirbags->Text;
				if ($this->txtAlarma) $this->objFichasBackup->Alarma = $this->txtAlarma->Text;
				if ($this->txtAsientoParaNinos) $this->objFichasBackup->AsientoParaNinos = $this->txtAsientoParaNinos->Text;
				if ($this->txtAsistenciasElectronicas) $this->objFichasBackup->AsistenciasElectronicas = $this->txtAsistenciasElectronicas->Text;
				if ($this->txtCamaraRetroceso) $this->objFichasBackup->CamaraRetroceso = $this->txtCamaraRetroceso->Text;
				if ($this->txtCinturonesInerciales) $this->objFichasBackup->CinturonesInerciales = $this->txtCinturonesInerciales->Text;
				if ($this->txtSensorDistanciaEstacionamiento) $this->objFichasBackup->SensorDistanciaEstacionamiento = $this->txtSensorDistanciaEstacionamiento->Text;
				if ($this->txtDesempaniadorEspejosExteriores) $this->objFichasBackup->DesempaniadorEspejosExteriores = $this->txtDesempaniadorEspejosExteriores->Text;
				if ($this->txtEncendidoAutoBalizasUrgencia) $this->objFichasBackup->EncendidoAutoBalizasUrgencia = $this->txtEncendidoAutoBalizasUrgencia->Text;
				if ($this->txtFarosAntiniebla) $this->objFichasBackup->FarosAntiniebla = $this->txtFarosAntiniebla->Text;
				if ($this->txtFarosXenon) $this->objFichasBackup->FarosXenon = $this->txtFarosXenon->Text;
				if ($this->txtGanchosIsofixLatch) $this->objFichasBackup->GanchosIsofixLatch = $this->txtGanchosIsofixLatch->Text;
				if ($this->txtGarantia) $this->objFichasBackup->Garantia = $this->txtGarantia->Text;
				if ($this->txtIndicadorPresionNeumaticos) $this->objFichasBackup->IndicadorPresionNeumaticos = $this->txtIndicadorPresionNeumaticos->Text;
				if ($this->txtLavafaros) $this->objFichasBackup->Lavafaros = $this->txtLavafaros->Text;
				if ($this->txtLucesAdaptativasCurvas) $this->objFichasBackup->LucesAdaptativasCurvas = $this->txtLucesAdaptativasCurvas->Text;
				if ($this->txtTercerApoyaCabezaTrasero) $this->objFichasBackup->TercerApoyaCabezaTrasero = $this->txtTercerApoyaCabezaTrasero->Text;
				if ($this->txtIdEstado) $this->objFichasBackup->IdEstado = $this->txtIdEstado->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FichasBackup object
				$this->objFichasBackup->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FichasBackup instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFichasBackup() {
			$this->objFichasBackup->Delete();
		}		



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'FichasBackup': return $this->objFichasBackup;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FichasBackup fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdMarcaControl':
					if (!$this->txtIdMarca) return $this->txtIdMarca_Create();
					return $this->txtIdMarca;
				case 'IdMarcaLabel':
					if (!$this->lblIdMarca) return $this->lblIdMarca_Create();
					return $this->lblIdMarca;
				case 'IdTiposControl':
					if (!$this->txtIdTipos) return $this->txtIdTipos_Create();
					return $this->txtIdTipos;
				case 'IdTiposLabel':
					if (!$this->lblIdTipos) return $this->lblIdTipos_Create();
					return $this->lblIdTipos;
				case 'ModeloControl':
					if (!$this->txtModelo) return $this->txtModelo_Create();
					return $this->txtModelo;
				case 'ModeloLabel':
					if (!$this->lblModelo) return $this->lblModelo_Create();
					return $this->lblModelo;
				case 'DescripcionControl':
					if (!$this->txtDescripcion) return $this->txtDescripcion_Create();
					return $this->txtDescripcion;
				case 'DescripcionLabel':
					if (!$this->lblDescripcion) return $this->lblDescripcion_Create();
					return $this->lblDescripcion;
				case 'PrecioControl':
					if (!$this->txtPrecio) return $this->txtPrecio_Create();
					return $this->txtPrecio;
				case 'PrecioLabel':
					if (!$this->lblPrecio) return $this->lblPrecio_Create();
					return $this->lblPrecio;
				case 'CombustibleControl':
					if (!$this->txtCombustible) return $this->txtCombustible_Create();
					return $this->txtCombustible;
				case 'CombustibleLabel':
					if (!$this->lblCombustible) return $this->lblCombustible_Create();
					return $this->lblCombustible;
				case 'CilindradaControl':
					if (!$this->txtCilindrada) return $this->txtCilindrada_Create();
					return $this->txtCilindrada;
				case 'CilindradaLabel':
					if (!$this->lblCilindrada) return $this->lblCilindrada_Create();
					return $this->lblCilindrada;
				case 'CilindrosControl':
					if (!$this->txtCilindros) return $this->txtCilindros_Create();
					return $this->txtCilindros;
				case 'CilindrosLabel':
					if (!$this->lblCilindros) return $this->lblCilindros_Create();
					return $this->lblCilindros;
				case 'PotenciaMaximaControl':
					if (!$this->txtPotenciaMaxima) return $this->txtPotenciaMaxima_Create();
					return $this->txtPotenciaMaxima;
				case 'PotenciaMaximaLabel':
					if (!$this->lblPotenciaMaxima) return $this->lblPotenciaMaxima_Create();
					return $this->lblPotenciaMaxima;
				case 'ParMotorTorqueControl':
					if (!$this->txtParMotorTorque) return $this->txtParMotorTorque_Create();
					return $this->txtParMotorTorque;
				case 'ParMotorTorqueLabel':
					if (!$this->lblParMotorTorque) return $this->lblParMotorTorque_Create();
					return $this->lblParMotorTorque;
				case 'PosicionControl':
					if (!$this->txtPosicion) return $this->txtPosicion_Create();
					return $this->txtPosicion;
				case 'PosicionLabel':
					if (!$this->lblPosicion) return $this->lblPosicion_Create();
					return $this->lblPosicion;
				case 'AlimentacionControl':
					if (!$this->txtAlimentacion) return $this->txtAlimentacion_Create();
					return $this->txtAlimentacion;
				case 'AlimentacionLabel':
					if (!$this->lblAlimentacion) return $this->lblAlimentacion_Create();
					return $this->lblAlimentacion;
				case 'RelacionDeCompresionControl':
					if (!$this->txtRelacionDeCompresion) return $this->txtRelacionDeCompresion_Create();
					return $this->txtRelacionDeCompresion;
				case 'RelacionDeCompresionLabel':
					if (!$this->lblRelacionDeCompresion) return $this->lblRelacionDeCompresion_Create();
					return $this->lblRelacionDeCompresion;
				case 'ValvulasControl':
					if (!$this->txtValvulas) return $this->txtValvulas_Create();
					return $this->txtValvulas;
				case 'ValvulasLabel':
					if (!$this->lblValvulas) return $this->lblValvulas_Create();
					return $this->lblValvulas;
				case 'TipoControl':
					if (!$this->txtTipo) return $this->txtTipo_Create();
					return $this->txtTipo;
				case 'TipoLabel':
					if (!$this->lblTipo) return $this->lblTipo_Create();
					return $this->lblTipo;
				case 'MarchasControl':
					if (!$this->txtMarchas) return $this->txtMarchas_Create();
					return $this->txtMarchas;
				case 'MarchasLabel':
					if (!$this->lblMarchas) return $this->lblMarchas_Create();
					return $this->lblMarchas;
				case 'TraccionControl':
					if (!$this->txtTraccion) return $this->txtTraccion_Create();
					return $this->txtTraccion;
				case 'TraccionLabel':
					if (!$this->lblTraccion) return $this->lblTraccion_Create();
					return $this->lblTraccion;
				case 'VelocidadMaximaControl':
					if (!$this->txtVelocidadMaxima) return $this->txtVelocidadMaxima_Create();
					return $this->txtVelocidadMaxima;
				case 'VelocidadMaximaLabel':
					if (!$this->lblVelocidadMaxima) return $this->lblVelocidadMaxima_Create();
					return $this->lblVelocidadMaxima;
				case 'Aceleracion0100Control':
					if (!$this->txtAceleracion0100) return $this->txtAceleracion0100_Create();
					return $this->txtAceleracion0100;
				case 'Aceleracion0100Label':
					if (!$this->lblAceleracion0100) return $this->lblAceleracion0100_Create();
					return $this->lblAceleracion0100;
				case 'ConsumoUrbanoControl':
					if (!$this->txtConsumoUrbano) return $this->txtConsumoUrbano_Create();
					return $this->txtConsumoUrbano;
				case 'ConsumoUrbanoLabel':
					if (!$this->lblConsumoUrbano) return $this->lblConsumoUrbano_Create();
					return $this->lblConsumoUrbano;
				case 'ConsumoInterurbanoControl':
					if (!$this->txtConsumoInterurbano) return $this->txtConsumoInterurbano_Create();
					return $this->txtConsumoInterurbano;
				case 'ConsumoInterurbanoLabel':
					if (!$this->lblConsumoInterurbano) return $this->lblConsumoInterurbano_Create();
					return $this->lblConsumoInterurbano;
				case 'ConsumoMixtoControl':
					if (!$this->txtConsumoMixto) return $this->txtConsumoMixto_Create();
					return $this->txtConsumoMixto;
				case 'ConsumoMixtoLabel':
					if (!$this->lblConsumoMixto) return $this->lblConsumoMixto_Create();
					return $this->lblConsumoMixto;
				case 'EmisionesCo2Control':
					if (!$this->txtEmisionesCo2) return $this->txtEmisionesCo2_Create();
					return $this->txtEmisionesCo2;
				case 'EmisionesCo2Label':
					if (!$this->lblEmisionesCo2) return $this->lblEmisionesCo2_Create();
					return $this->lblEmisionesCo2;
				case 'TipoCarroceriaControl':
					if (!$this->txtTipoCarroceria) return $this->txtTipoCarroceria_Create();
					return $this->txtTipoCarroceria;
				case 'TipoCarroceriaLabel':
					if (!$this->lblTipoCarroceria) return $this->lblTipoCarroceria_Create();
					return $this->lblTipoCarroceria;
				case 'PuertasControl':
					if (!$this->txtPuertas) return $this->txtPuertas_Create();
					return $this->txtPuertas;
				case 'PuertasLabel':
					if (!$this->lblPuertas) return $this->lblPuertas_Create();
					return $this->lblPuertas;
				case 'PlazasControl':
					if (!$this->txtPlazas) return $this->txtPlazas_Create();
					return $this->txtPlazas;
				case 'PlazasLabel':
					if (!$this->lblPlazas) return $this->lblPlazas_Create();
					return $this->lblPlazas;
				case 'FilasDeAsientosControl':
					if (!$this->txtFilasDeAsientos) return $this->txtFilasDeAsientos_Create();
					return $this->txtFilasDeAsientos;
				case 'FilasDeAsientosLabel':
					if (!$this->lblFilasDeAsientos) return $this->lblFilasDeAsientos_Create();
					return $this->lblFilasDeAsientos;
				case 'InfoEjesControl':
					if (!$this->txtInfoEjes) return $this->txtInfoEjes_Create();
					return $this->txtInfoEjes;
				case 'InfoEjesLabel':
					if (!$this->lblInfoEjes) return $this->lblInfoEjes_Create();
					return $this->lblInfoEjes;
				case 'PesoControl':
					if (!$this->txtPeso) return $this->txtPeso_Create();
					return $this->txtPeso;
				case 'PesoLabel':
					if (!$this->lblPeso) return $this->lblPeso_Create();
					return $this->lblPeso;
				case 'CapacidadBaulControl':
					if (!$this->txtCapacidadBaul) return $this->txtCapacidadBaul_Create();
					return $this->txtCapacidadBaul;
				case 'CapacidadBaulLabel':
					if (!$this->lblCapacidadBaul) return $this->lblCapacidadBaul_Create();
					return $this->lblCapacidadBaul;
				case 'CapacidadTanqueControl':
					if (!$this->txtCapacidadTanque) return $this->txtCapacidadTanque_Create();
					return $this->txtCapacidadTanque;
				case 'CapacidadTanqueLabel':
					if (!$this->lblCapacidadTanque) return $this->lblCapacidadTanque_Create();
					return $this->lblCapacidadTanque;
				case 'InfoCajaCargaControl':
					if (!$this->txtInfoCajaCarga) return $this->txtInfoCajaCarga_Create();
					return $this->txtInfoCajaCarga;
				case 'InfoCajaCargaLabel':
					if (!$this->lblInfoCajaCarga) return $this->lblInfoCajaCarga_Create();
					return $this->lblInfoCajaCarga;
				case 'VolumenCajaCargaControl':
					if (!$this->txtVolumenCajaCarga) return $this->txtVolumenCajaCarga_Create();
					return $this->txtVolumenCajaCarga;
				case 'VolumenCajaCargaLabel':
					if (!$this->lblVolumenCajaCarga) return $this->lblVolumenCajaCarga_Create();
					return $this->lblVolumenCajaCarga;
				case 'CapacidadCargaControl':
					if (!$this->txtCapacidadCarga) return $this->txtCapacidadCarga_Create();
					return $this->txtCapacidadCarga;
				case 'CapacidadCargaLabel':
					if (!$this->lblCapacidadCarga) return $this->lblCapacidadCarga_Create();
					return $this->lblCapacidadCarga;
				case 'FrenosDelanterosControl':
					if (!$this->txtFrenosDelanteros) return $this->txtFrenosDelanteros_Create();
					return $this->txtFrenosDelanteros;
				case 'FrenosDelanterosLabel':
					if (!$this->lblFrenosDelanteros) return $this->lblFrenosDelanteros_Create();
					return $this->lblFrenosDelanteros;
				case 'FrenosTraserosControl':
					if (!$this->txtFrenosTraseros) return $this->txtFrenosTraseros_Create();
					return $this->txtFrenosTraseros;
				case 'FrenosTraserosLabel':
					if (!$this->lblFrenosTraseros) return $this->lblFrenosTraseros_Create();
					return $this->lblFrenosTraseros;
				case 'LlantasControl':
					if (!$this->txtLlantas) return $this->txtLlantas_Create();
					return $this->txtLlantas;
				case 'LlantasLabel':
					if (!$this->lblLlantas) return $this->lblLlantas_Create();
					return $this->lblLlantas;
				case 'NeumaticosControl':
					if (!$this->txtNeumaticos) return $this->txtNeumaticos_Create();
					return $this->txtNeumaticos;
				case 'NeumaticosLabel':
					if (!$this->lblNeumaticos) return $this->lblNeumaticos_Create();
					return $this->lblNeumaticos;
				case 'SuspensionDelanteraControl':
					if (!$this->txtSuspensionDelantera) return $this->txtSuspensionDelantera_Create();
					return $this->txtSuspensionDelantera;
				case 'SuspensionDelanteraLabel':
					if (!$this->lblSuspensionDelantera) return $this->lblSuspensionDelantera_Create();
					return $this->lblSuspensionDelantera;
				case 'SuspensionTraseraControl':
					if (!$this->txtSuspensionTrasera) return $this->txtSuspensionTrasera_Create();
					return $this->txtSuspensionTrasera;
				case 'SuspensionTraseraLabel':
					if (!$this->lblSuspensionTrasera) return $this->lblSuspensionTrasera_Create();
					return $this->lblSuspensionTrasera;
				case 'LucesAutomaticoControl':
					if (!$this->txtLucesAutomatico) return $this->txtLucesAutomatico_Create();
					return $this->txtLucesAutomatico;
				case 'LucesAutomaticoLabel':
					if (!$this->lblLucesAutomatico) return $this->lblLucesAutomatico_Create();
					return $this->lblLucesAutomatico;
				case 'ClimatizacionControl':
					if (!$this->txtClimatizacion) return $this->txtClimatizacion_Create();
					return $this->txtClimatizacion;
				case 'ClimatizacionLabel':
					if (!$this->lblClimatizacion) return $this->lblClimatizacion_Create();
					return $this->lblClimatizacion;
				case 'AlarmaLucesEncendidasControl':
					if (!$this->txtAlarmaLucesEncendidas) return $this->txtAlarmaLucesEncendidas_Create();
					return $this->txtAlarmaLucesEncendidas;
				case 'AlarmaLucesEncendidasLabel':
					if (!$this->lblAlarmaLucesEncendidas) return $this->lblAlarmaLucesEncendidas_Create();
					return $this->lblAlarmaLucesEncendidas;
				case 'CritalesElectricosControl':
					if (!$this->txtCritalesElectricos) return $this->txtCritalesElectricos_Create();
					return $this->txtCritalesElectricos;
				case 'CritalesElectricosLabel':
					if (!$this->lblCritalesElectricos) return $this->lblCritalesElectricos_Create();
					return $this->lblCritalesElectricos;
				case 'AperturaBaulControl':
					if (!$this->txtAperturaBaul) return $this->txtAperturaBaul_Create();
					return $this->txtAperturaBaul;
				case 'AperturaBaulLabel':
					if (!$this->lblAperturaBaul) return $this->lblAperturaBaul_Create();
					return $this->lblAperturaBaul;
				case 'AperturaTanqueControl':
					if (!$this->txtAperturaTanque) return $this->txtAperturaTanque_Create();
					return $this->txtAperturaTanque;
				case 'AperturaTanqueLabel':
					if (!$this->lblAperturaTanque) return $this->lblAperturaTanque_Create();
					return $this->lblAperturaTanque;
				case 'AsientosRegulablesAlturaControl':
					if (!$this->txtAsientosRegulablesAltura) return $this->txtAsientosRegulablesAltura_Create();
					return $this->txtAsientosRegulablesAltura;
				case 'AsientosRegulablesAlturaLabel':
					if (!$this->lblAsientosRegulablesAltura) return $this->lblAsientosRegulablesAltura_Create();
					return $this->lblAsientosRegulablesAltura;
				case 'AsientoTraseroRebatibleControl':
					if (!$this->txtAsientoTraseroRebatible) return $this->txtAsientoTraseroRebatible_Create();
					return $this->txtAsientoTraseroRebatible;
				case 'AsientoTraseroRebatibleLabel':
					if (!$this->lblAsientoTraseroRebatible) return $this->lblAsientoTraseroRebatible_Create();
					return $this->lblAsientoTraseroRebatible;
				case 'AsientosCalefaccionadoControl':
					if (!$this->txtAsientosCalefaccionado) return $this->txtAsientosCalefaccionado_Create();
					return $this->txtAsientosCalefaccionado;
				case 'AsientosCalefaccionadoLabel':
					if (!$this->lblAsientosCalefaccionado) return $this->lblAsientosCalefaccionado_Create();
					return $this->lblAsientosCalefaccionado;
				case 'AsientosAjustesElectronicosControl':
					if (!$this->txtAsientosAjustesElectronicos) return $this->txtAsientosAjustesElectronicos_Create();
					return $this->txtAsientosAjustesElectronicos;
				case 'AsientosAjustesElectronicosLabel':
					if (!$this->lblAsientosAjustesElectronicos) return $this->lblAsientosAjustesElectronicos_Create();
					return $this->lblAsientosAjustesElectronicos;
				case 'AsientosDelButacaDeportivaControl':
					if (!$this->txtAsientosDelButacaDeportiva) return $this->txtAsientosDelButacaDeportiva_Create();
					return $this->txtAsientosDelButacaDeportiva;
				case 'AsientosDelButacaDeportivaLabel':
					if (!$this->lblAsientosDelButacaDeportiva) return $this->lblAsientosDelButacaDeportiva_Create();
					return $this->lblAsientosDelButacaDeportiva;
				case 'AsientoDelBipartidoControl':
					if (!$this->txtAsientoDelBipartido) return $this->txtAsientoDelBipartido_Create();
					return $this->txtAsientoDelBipartido;
				case 'AsientoDelBipartidoLabel':
					if (!$this->lblAsientoDelBipartido) return $this->lblAsientoDelBipartido_Create();
					return $this->lblAsientoDelBipartido;
				case 'BotonStartStopControl':
					if (!$this->txtBotonStartStop) return $this->txtBotonStartStop_Create();
					return $this->txtBotonStartStop;
				case 'BotonStartStopLabel':
					if (!$this->lblBotonStartStop) return $this->lblBotonStartStop_Create();
					return $this->lblBotonStartStop;
				case 'CambioSecuencialVolanteControl':
					if (!$this->txtCambioSecuencialVolante) return $this->txtCambioSecuencialVolante_Create();
					return $this->txtCambioSecuencialVolante;
				case 'CambioSecuencialVolanteLabel':
					if (!$this->lblCambioSecuencialVolante) return $this->lblCambioSecuencialVolante_Create();
					return $this->lblCambioSecuencialVolante;
				case 'CierreCentralizadoControl':
					if (!$this->txtCierreCentralizado) return $this->txtCierreCentralizado_Create();
					return $this->txtCierreCentralizado;
				case 'CierreCentralizadoLabel':
					if (!$this->lblCierreCentralizado) return $this->lblCierreCentralizado_Create();
					return $this->lblCierreCentralizado;
				case 'ComputadoraABordoControl':
					if (!$this->txtComputadoraABordo) return $this->txtComputadoraABordo_Create();
					return $this->txtComputadoraABordo;
				case 'ComputadoraABordoLabel':
					if (!$this->lblComputadoraABordo) return $this->lblComputadoraABordo_Create();
					return $this->lblComputadoraABordo;
				case 'DireccionAsistidaControl':
					if (!$this->txtDireccionAsistida) return $this->txtDireccionAsistida_Create();
					return $this->txtDireccionAsistida;
				case 'DireccionAsistidaLabel':
					if (!$this->lblDireccionAsistida) return $this->lblDireccionAsistida_Create();
					return $this->lblDireccionAsistida;
				case 'MandosAudioVolanteControl':
					if (!$this->txtMandosAudioVolante) return $this->txtMandosAudioVolante_Create();
					return $this->txtMandosAudioVolante;
				case 'MandosAudioVolanteLabel':
					if (!$this->lblMandosAudioVolante) return $this->lblMandosAudioVolante_Create();
					return $this->lblMandosAudioVolante;
				case 'ReposabrazosControl':
					if (!$this->txtReposabrazos) return $this->txtReposabrazos_Create();
					return $this->txtReposabrazos;
				case 'ReposabrazosLabel':
					if (!$this->lblReposabrazos) return $this->lblReposabrazos_Create();
					return $this->lblReposabrazos;
				case 'ControlCruceroControl':
					if (!$this->txtControlCrucero) return $this->txtControlCrucero_Create();
					return $this->txtControlCrucero;
				case 'ControlCruceroLabel':
					if (!$this->lblControlCrucero) return $this->lblControlCrucero_Create();
					return $this->lblControlCrucero;
				case 'SensorLluviaControl':
					if (!$this->txtSensorLluvia) return $this->txtSensorLluvia_Create();
					return $this->txtSensorLluvia;
				case 'SensorLluviaLabel':
					if (!$this->lblSensorLluvia) return $this->lblSensorLluvia_Create();
					return $this->lblSensorLluvia;
				case 'TapizadoControl':
					if (!$this->txtTapizado) return $this->txtTapizado_Create();
					return $this->txtTapizado;
				case 'TapizadoLabel':
					if (!$this->lblTapizado) return $this->lblTapizado_Create();
					return $this->lblTapizado;
				case 'SalidasAireControl':
					if (!$this->txtSalidasAire) return $this->txtSalidasAire_Create();
					return $this->txtSalidasAire;
				case 'SalidasAireLabel':
					if (!$this->lblSalidasAire) return $this->lblSalidasAire_Create();
					return $this->lblSalidasAire;
				case 'TechoCorredizoControl':
					if (!$this->txtTechoCorredizo) return $this->txtTechoCorredizo_Create();
					return $this->txtTechoCorredizo;
				case 'TechoCorredizoLabel':
					if (!$this->lblTechoCorredizo) return $this->lblTechoCorredizo_Create();
					return $this->lblTechoCorredizo;
				case 'ComandoDistanciaControl':
					if (!$this->txtComandoDistancia) return $this->txtComandoDistancia_Create();
					return $this->txtComandoDistancia;
				case 'ComandoDistanciaLabel':
					if (!$this->lblComandoDistancia) return $this->lblComandoDistancia_Create();
					return $this->lblComandoDistancia;
				case 'VolanteAjusteVerticalControl':
					if (!$this->txtVolanteAjusteVertical) return $this->txtVolanteAjusteVertical_Create();
					return $this->txtVolanteAjusteVertical;
				case 'VolanteAjusteVerticalLabel':
					if (!$this->lblVolanteAjusteVertical) return $this->lblVolanteAjusteVertical_Create();
					return $this->lblVolanteAjusteVertical;
				case 'VolanteCueroControl':
					if (!$this->txtVolanteCuero) return $this->txtVolanteCuero_Create();
					return $this->txtVolanteCuero;
				case 'VolanteCueroLabel':
					if (!$this->lblVolanteCuero) return $this->lblVolanteCuero_Create();
					return $this->lblVolanteCuero;
				case 'MoldurasColorCarroceriaControl':
					if (!$this->txtMoldurasColorCarroceria) return $this->txtMoldurasColorCarroceria_Create();
					return $this->txtMoldurasColorCarroceria;
				case 'MoldurasColorCarroceriaLabel':
					if (!$this->lblMoldurasColorCarroceria) return $this->lblMoldurasColorCarroceria_Create();
					return $this->lblMoldurasColorCarroceria;
				case 'EspejosElectricosControl':
					if (!$this->txtEspejosElectricos) return $this->txtEspejosElectricos_Create();
					return $this->txtEspejosElectricos;
				case 'EspejosElectricosLabel':
					if (!$this->lblEspejosElectricos) return $this->lblEspejosElectricos_Create();
					return $this->lblEspejosElectricos;
				case 'EspejosRebatiblesElectricamenteControl':
					if (!$this->txtEspejosRebatiblesElectricamente) return $this->txtEspejosRebatiblesElectricamente_Create();
					return $this->txtEspejosRebatiblesElectricamente;
				case 'EspejosRebatiblesElectricamenteLabel':
					if (!$this->lblEspejosRebatiblesElectricamente) return $this->lblEspejosRebatiblesElectricamente_Create();
					return $this->lblEspejosRebatiblesElectricamente;
				case 'EspejosMemoriasControl':
					if (!$this->txtEspejosMemorias) return $this->txtEspejosMemorias_Create();
					return $this->txtEspejosMemorias;
				case 'EspejosMemoriasLabel':
					if (!$this->lblEspejosMemorias) return $this->lblEspejosMemorias_Create();
					return $this->lblEspejosMemorias;
				case 'LavaFarosControl':
					if (!$this->txtLavaFaros) return $this->txtLavaFaros_Create();
					return $this->txtLavaFaros;
				case 'LavaFarosLabel':
					if (!$this->lblLavaFaros) return $this->lblLavaFaros_Create();
					return $this->lblLavaFaros;
				case 'LavaLunetaControl':
					if (!$this->txtLavaLuneta) return $this->txtLavaLuneta_Create();
					return $this->txtLavaLuneta;
				case 'LavaLunetaLabel':
					if (!$this->lblLavaLuneta) return $this->lblLavaLuneta_Create();
					return $this->lblLavaLuneta;
				case 'CobertorCajaCargaControl':
					if (!$this->txtCobertorCajaCarga) return $this->txtCobertorCajaCarga_Create();
					return $this->txtCobertorCajaCarga;
				case 'CobertorCajaCargaLabel':
					if (!$this->lblCobertorCajaCarga) return $this->lblCobertorCajaCarga_Create();
					return $this->lblCobertorCajaCarga;
				case 'BarrasPortaequipajeTechoControl':
					if (!$this->txtBarrasPortaequipajeTecho) return $this->txtBarrasPortaequipajeTecho_Create();
					return $this->txtBarrasPortaequipajeTecho;
				case 'BarrasPortaequipajeTechoLabel':
					if (!$this->lblBarrasPortaequipajeTecho) return $this->lblBarrasPortaequipajeTecho_Create();
					return $this->lblBarrasPortaequipajeTecho;
				case 'BarraAntivuelcoControl':
					if (!$this->txtBarraAntivuelco) return $this->txtBarraAntivuelco_Create();
					return $this->txtBarraAntivuelco;
				case 'BarraAntivuelcoLabel':
					if (!$this->lblBarraAntivuelco) return $this->lblBarraAntivuelco_Create();
					return $this->lblBarraAntivuelco;
				case 'EstribosControl':
					if (!$this->txtEstribos) return $this->txtEstribos_Create();
					return $this->txtEstribos;
				case 'EstribosLabel':
					if (!$this->lblEstribos) return $this->lblEstribos_Create();
					return $this->lblEstribos;
				case 'ConexionAuxiliarControl':
					if (!$this->txtConexionAuxiliar) return $this->txtConexionAuxiliar_Create();
					return $this->txtConexionAuxiliar;
				case 'ConexionAuxiliarLabel':
					if (!$this->lblConexionAuxiliar) return $this->lblConexionAuxiliar_Create();
					return $this->lblConexionAuxiliar;
				case 'ConexionBluetoothControl':
					if (!$this->txtConexionBluetooth) return $this->txtConexionBluetooth_Create();
					return $this->txtConexionBluetooth;
				case 'ConexionBluetoothLabel':
					if (!$this->lblConexionBluetooth) return $this->lblConexionBluetooth_Create();
					return $this->lblConexionBluetooth;
				case 'ControlPorVozControl':
					if (!$this->txtControlPorVoz) return $this->txtControlPorVoz_Create();
					return $this->txtControlPorVoz;
				case 'ControlPorVozLabel':
					if (!$this->lblControlPorVoz) return $this->lblControlPorVoz_Create();
					return $this->lblControlPorVoz;
				case 'EntradaUsbControl':
					if (!$this->txtEntradaUsb) return $this->txtEntradaUsb_Create();
					return $this->txtEntradaUsb;
				case 'EntradaUsbLabel':
					if (!$this->lblEntradaUsb) return $this->lblEntradaUsb_Create();
					return $this->lblEntradaUsb;
				case 'LectorTarjetasSdControl':
					if (!$this->txtLectorTarjetasSd) return $this->txtLectorTarjetasSd_Create();
					return $this->txtLectorTarjetasSd;
				case 'LectorTarjetasSdLabel':
					if (!$this->lblLectorTarjetasSd) return $this->lblLectorTarjetasSd_Create();
					return $this->lblLectorTarjetasSd;
				case 'NavegadorGpsControl':
					if (!$this->txtNavegadorGps) return $this->txtNavegadorGps_Create();
					return $this->txtNavegadorGps;
				case 'NavegadorGpsLabel':
					if (!$this->lblNavegadorGps) return $this->lblNavegadorGps_Create();
					return $this->lblNavegadorGps;
				case 'ParlantesControl':
					if (!$this->txtParlantes) return $this->txtParlantes_Create();
					return $this->txtParlantes;
				case 'ParlantesLabel':
					if (!$this->lblParlantes) return $this->lblParlantes_Create();
					return $this->lblParlantes;
				case 'RadioAmfmControl':
					if (!$this->txtRadioAmfm) return $this->txtRadioAmfm_Create();
					return $this->txtRadioAmfm;
				case 'RadioAmfmLabel':
					if (!$this->lblRadioAmfm) return $this->lblRadioAmfm_Create();
					return $this->lblRadioAmfm;
				case 'RadioSatelitalXmControl':
					if (!$this->txtRadioSatelitalXm) return $this->txtRadioSatelitalXm_Create();
					return $this->txtRadioSatelitalXm;
				case 'RadioSatelitalXmLabel':
					if (!$this->lblRadioSatelitalXm) return $this->lblRadioSatelitalXm_Create();
					return $this->lblRadioSatelitalXm;
				case 'ReproductorCdControl':
					if (!$this->txtReproductorCd) return $this->txtReproductorCd_Create();
					return $this->txtReproductorCd;
				case 'ReproductorCdLabel':
					if (!$this->lblReproductorCd) return $this->lblReproductorCd_Create();
					return $this->lblReproductorCd;
				case 'ReproductorDvdControl':
					if (!$this->txtReproductorDvd) return $this->txtReproductorDvd_Create();
					return $this->txtReproductorDvd;
				case 'ReproductorDvdLabel':
					if (!$this->lblReproductorDvd) return $this->lblReproductorDvd_Create();
					return $this->lblReproductorDvd;
				case 'ReproductorMp3Control':
					if (!$this->txtReproductorMp3) return $this->txtReproductorMp3_Create();
					return $this->txtReproductorMp3;
				case 'ReproductorMp3Label':
					if (!$this->lblReproductorMp3) return $this->lblReproductorMp3_Create();
					return $this->lblReproductorMp3;
				case 'TomaCorriente12vControl':
					if (!$this->txtTomaCorriente12v) return $this->txtTomaCorriente12v_Create();
					return $this->txtTomaCorriente12v;
				case 'TomaCorriente12vLabel':
					if (!$this->lblTomaCorriente12v) return $this->lblTomaCorriente12v_Create();
					return $this->lblTomaCorriente12v;
				case 'AirbagsControl':
					if (!$this->txtAirbags) return $this->txtAirbags_Create();
					return $this->txtAirbags;
				case 'AirbagsLabel':
					if (!$this->lblAirbags) return $this->lblAirbags_Create();
					return $this->lblAirbags;
				case 'AlarmaControl':
					if (!$this->txtAlarma) return $this->txtAlarma_Create();
					return $this->txtAlarma;
				case 'AlarmaLabel':
					if (!$this->lblAlarma) return $this->lblAlarma_Create();
					return $this->lblAlarma;
				case 'AsientoParaNinosControl':
					if (!$this->txtAsientoParaNinos) return $this->txtAsientoParaNinos_Create();
					return $this->txtAsientoParaNinos;
				case 'AsientoParaNinosLabel':
					if (!$this->lblAsientoParaNinos) return $this->lblAsientoParaNinos_Create();
					return $this->lblAsientoParaNinos;
				case 'AsistenciasElectronicasControl':
					if (!$this->txtAsistenciasElectronicas) return $this->txtAsistenciasElectronicas_Create();
					return $this->txtAsistenciasElectronicas;
				case 'AsistenciasElectronicasLabel':
					if (!$this->lblAsistenciasElectronicas) return $this->lblAsistenciasElectronicas_Create();
					return $this->lblAsistenciasElectronicas;
				case 'CamaraRetrocesoControl':
					if (!$this->txtCamaraRetroceso) return $this->txtCamaraRetroceso_Create();
					return $this->txtCamaraRetroceso;
				case 'CamaraRetrocesoLabel':
					if (!$this->lblCamaraRetroceso) return $this->lblCamaraRetroceso_Create();
					return $this->lblCamaraRetroceso;
				case 'CinturonesInercialesControl':
					if (!$this->txtCinturonesInerciales) return $this->txtCinturonesInerciales_Create();
					return $this->txtCinturonesInerciales;
				case 'CinturonesInercialesLabel':
					if (!$this->lblCinturonesInerciales) return $this->lblCinturonesInerciales_Create();
					return $this->lblCinturonesInerciales;
				case 'SensorDistanciaEstacionamientoControl':
					if (!$this->txtSensorDistanciaEstacionamiento) return $this->txtSensorDistanciaEstacionamiento_Create();
					return $this->txtSensorDistanciaEstacionamiento;
				case 'SensorDistanciaEstacionamientoLabel':
					if (!$this->lblSensorDistanciaEstacionamiento) return $this->lblSensorDistanciaEstacionamiento_Create();
					return $this->lblSensorDistanciaEstacionamiento;
				case 'DesempaniadorEspejosExterioresControl':
					if (!$this->txtDesempaniadorEspejosExteriores) return $this->txtDesempaniadorEspejosExteriores_Create();
					return $this->txtDesempaniadorEspejosExteriores;
				case 'DesempaniadorEspejosExterioresLabel':
					if (!$this->lblDesempaniadorEspejosExteriores) return $this->lblDesempaniadorEspejosExteriores_Create();
					return $this->lblDesempaniadorEspejosExteriores;
				case 'EncendidoAutoBalizasUrgenciaControl':
					if (!$this->txtEncendidoAutoBalizasUrgencia) return $this->txtEncendidoAutoBalizasUrgencia_Create();
					return $this->txtEncendidoAutoBalizasUrgencia;
				case 'EncendidoAutoBalizasUrgenciaLabel':
					if (!$this->lblEncendidoAutoBalizasUrgencia) return $this->lblEncendidoAutoBalizasUrgencia_Create();
					return $this->lblEncendidoAutoBalizasUrgencia;
				case 'FarosAntinieblaControl':
					if (!$this->txtFarosAntiniebla) return $this->txtFarosAntiniebla_Create();
					return $this->txtFarosAntiniebla;
				case 'FarosAntinieblaLabel':
					if (!$this->lblFarosAntiniebla) return $this->lblFarosAntiniebla_Create();
					return $this->lblFarosAntiniebla;
				case 'FarosXenonControl':
					if (!$this->txtFarosXenon) return $this->txtFarosXenon_Create();
					return $this->txtFarosXenon;
				case 'FarosXenonLabel':
					if (!$this->lblFarosXenon) return $this->lblFarosXenon_Create();
					return $this->lblFarosXenon;
				case 'GanchosIsofixLatchControl':
					if (!$this->txtGanchosIsofixLatch) return $this->txtGanchosIsofixLatch_Create();
					return $this->txtGanchosIsofixLatch;
				case 'GanchosIsofixLatchLabel':
					if (!$this->lblGanchosIsofixLatch) return $this->lblGanchosIsofixLatch_Create();
					return $this->lblGanchosIsofixLatch;
				case 'GarantiaControl':
					if (!$this->txtGarantia) return $this->txtGarantia_Create();
					return $this->txtGarantia;
				case 'GarantiaLabel':
					if (!$this->lblGarantia) return $this->lblGarantia_Create();
					return $this->lblGarantia;
				case 'IndicadorPresionNeumaticosControl':
					if (!$this->txtIndicadorPresionNeumaticos) return $this->txtIndicadorPresionNeumaticos_Create();
					return $this->txtIndicadorPresionNeumaticos;
				case 'IndicadorPresionNeumaticosLabel':
					if (!$this->lblIndicadorPresionNeumaticos) return $this->lblIndicadorPresionNeumaticos_Create();
					return $this->lblIndicadorPresionNeumaticos;
				case 'LavafarosControl':
					if (!$this->txtLavafaros) return $this->txtLavafaros_Create();
					return $this->txtLavafaros;
				case 'LavafarosLabel':
					if (!$this->lblLavafaros) return $this->lblLavafaros_Create();
					return $this->lblLavafaros;
				case 'LucesAdaptativasCurvasControl':
					if (!$this->txtLucesAdaptativasCurvas) return $this->txtLucesAdaptativasCurvas_Create();
					return $this->txtLucesAdaptativasCurvas;
				case 'LucesAdaptativasCurvasLabel':
					if (!$this->lblLucesAdaptativasCurvas) return $this->lblLucesAdaptativasCurvas_Create();
					return $this->lblLucesAdaptativasCurvas;
				case 'TercerApoyaCabezaTraseroControl':
					if (!$this->txtTercerApoyaCabezaTrasero) return $this->txtTercerApoyaCabezaTrasero_Create();
					return $this->txtTercerApoyaCabezaTrasero;
				case 'TercerApoyaCabezaTraseroLabel':
					if (!$this->lblTercerApoyaCabezaTrasero) return $this->lblTercerApoyaCabezaTrasero_Create();
					return $this->lblTercerApoyaCabezaTrasero;
				case 'IdEstadoControl':
					if (!$this->txtIdEstado) return $this->txtIdEstado_Create();
					return $this->txtIdEstado;
				case 'IdEstadoLabel':
					if (!$this->lblIdEstado) return $this->lblIdEstado_Create();
					return $this->lblIdEstado;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			try {
				switch ($strName) {
					// Controls that point to FichasBackup fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'IdMarcaControl':
						return ($this->txtIdMarca = QType::Cast($mixValue, 'QControl'));
					case 'IdTiposControl':
						return ($this->txtIdTipos = QType::Cast($mixValue, 'QControl'));
					case 'ModeloControl':
						return ($this->txtModelo = QType::Cast($mixValue, 'QControl'));
					case 'DescripcionControl':
						return ($this->txtDescripcion = QType::Cast($mixValue, 'QControl'));
					case 'PrecioControl':
						return ($this->txtPrecio = QType::Cast($mixValue, 'QControl'));
					case 'CombustibleControl':
						return ($this->txtCombustible = QType::Cast($mixValue, 'QControl'));
					case 'CilindradaControl':
						return ($this->txtCilindrada = QType::Cast($mixValue, 'QControl'));
					case 'CilindrosControl':
						return ($this->txtCilindros = QType::Cast($mixValue, 'QControl'));
					case 'PotenciaMaximaControl':
						return ($this->txtPotenciaMaxima = QType::Cast($mixValue, 'QControl'));
					case 'ParMotorTorqueControl':
						return ($this->txtParMotorTorque = QType::Cast($mixValue, 'QControl'));
					case 'PosicionControl':
						return ($this->txtPosicion = QType::Cast($mixValue, 'QControl'));
					case 'AlimentacionControl':
						return ($this->txtAlimentacion = QType::Cast($mixValue, 'QControl'));
					case 'RelacionDeCompresionControl':
						return ($this->txtRelacionDeCompresion = QType::Cast($mixValue, 'QControl'));
					case 'ValvulasControl':
						return ($this->txtValvulas = QType::Cast($mixValue, 'QControl'));
					case 'TipoControl':
						return ($this->txtTipo = QType::Cast($mixValue, 'QControl'));
					case 'MarchasControl':
						return ($this->txtMarchas = QType::Cast($mixValue, 'QControl'));
					case 'TraccionControl':
						return ($this->txtTraccion = QType::Cast($mixValue, 'QControl'));
					case 'VelocidadMaximaControl':
						return ($this->txtVelocidadMaxima = QType::Cast($mixValue, 'QControl'));
					case 'Aceleracion0100Control':
						return ($this->txtAceleracion0100 = QType::Cast($mixValue, 'QControl'));
					case 'ConsumoUrbanoControl':
						return ($this->txtConsumoUrbano = QType::Cast($mixValue, 'QControl'));
					case 'ConsumoInterurbanoControl':
						return ($this->txtConsumoInterurbano = QType::Cast($mixValue, 'QControl'));
					case 'ConsumoMixtoControl':
						return ($this->txtConsumoMixto = QType::Cast($mixValue, 'QControl'));
					case 'EmisionesCo2Control':
						return ($this->txtEmisionesCo2 = QType::Cast($mixValue, 'QControl'));
					case 'TipoCarroceriaControl':
						return ($this->txtTipoCarroceria = QType::Cast($mixValue, 'QControl'));
					case 'PuertasControl':
						return ($this->txtPuertas = QType::Cast($mixValue, 'QControl'));
					case 'PlazasControl':
						return ($this->txtPlazas = QType::Cast($mixValue, 'QControl'));
					case 'FilasDeAsientosControl':
						return ($this->txtFilasDeAsientos = QType::Cast($mixValue, 'QControl'));
					case 'InfoEjesControl':
						return ($this->txtInfoEjes = QType::Cast($mixValue, 'QControl'));
					case 'PesoControl':
						return ($this->txtPeso = QType::Cast($mixValue, 'QControl'));
					case 'CapacidadBaulControl':
						return ($this->txtCapacidadBaul = QType::Cast($mixValue, 'QControl'));
					case 'CapacidadTanqueControl':
						return ($this->txtCapacidadTanque = QType::Cast($mixValue, 'QControl'));
					case 'InfoCajaCargaControl':
						return ($this->txtInfoCajaCarga = QType::Cast($mixValue, 'QControl'));
					case 'VolumenCajaCargaControl':
						return ($this->txtVolumenCajaCarga = QType::Cast($mixValue, 'QControl'));
					case 'CapacidadCargaControl':
						return ($this->txtCapacidadCarga = QType::Cast($mixValue, 'QControl'));
					case 'FrenosDelanterosControl':
						return ($this->txtFrenosDelanteros = QType::Cast($mixValue, 'QControl'));
					case 'FrenosTraserosControl':
						return ($this->txtFrenosTraseros = QType::Cast($mixValue, 'QControl'));
					case 'LlantasControl':
						return ($this->txtLlantas = QType::Cast($mixValue, 'QControl'));
					case 'NeumaticosControl':
						return ($this->txtNeumaticos = QType::Cast($mixValue, 'QControl'));
					case 'SuspensionDelanteraControl':
						return ($this->txtSuspensionDelantera = QType::Cast($mixValue, 'QControl'));
					case 'SuspensionTraseraControl':
						return ($this->txtSuspensionTrasera = QType::Cast($mixValue, 'QControl'));
					case 'LucesAutomaticoControl':
						return ($this->txtLucesAutomatico = QType::Cast($mixValue, 'QControl'));
					case 'ClimatizacionControl':
						return ($this->txtClimatizacion = QType::Cast($mixValue, 'QControl'));
					case 'AlarmaLucesEncendidasControl':
						return ($this->txtAlarmaLucesEncendidas = QType::Cast($mixValue, 'QControl'));
					case 'CritalesElectricosControl':
						return ($this->txtCritalesElectricos = QType::Cast($mixValue, 'QControl'));
					case 'AperturaBaulControl':
						return ($this->txtAperturaBaul = QType::Cast($mixValue, 'QControl'));
					case 'AperturaTanqueControl':
						return ($this->txtAperturaTanque = QType::Cast($mixValue, 'QControl'));
					case 'AsientosRegulablesAlturaControl':
						return ($this->txtAsientosRegulablesAltura = QType::Cast($mixValue, 'QControl'));
					case 'AsientoTraseroRebatibleControl':
						return ($this->txtAsientoTraseroRebatible = QType::Cast($mixValue, 'QControl'));
					case 'AsientosCalefaccionadoControl':
						return ($this->txtAsientosCalefaccionado = QType::Cast($mixValue, 'QControl'));
					case 'AsientosAjustesElectronicosControl':
						return ($this->txtAsientosAjustesElectronicos = QType::Cast($mixValue, 'QControl'));
					case 'AsientosDelButacaDeportivaControl':
						return ($this->txtAsientosDelButacaDeportiva = QType::Cast($mixValue, 'QControl'));
					case 'AsientoDelBipartidoControl':
						return ($this->txtAsientoDelBipartido = QType::Cast($mixValue, 'QControl'));
					case 'BotonStartStopControl':
						return ($this->txtBotonStartStop = QType::Cast($mixValue, 'QControl'));
					case 'CambioSecuencialVolanteControl':
						return ($this->txtCambioSecuencialVolante = QType::Cast($mixValue, 'QControl'));
					case 'CierreCentralizadoControl':
						return ($this->txtCierreCentralizado = QType::Cast($mixValue, 'QControl'));
					case 'ComputadoraABordoControl':
						return ($this->txtComputadoraABordo = QType::Cast($mixValue, 'QControl'));
					case 'DireccionAsistidaControl':
						return ($this->txtDireccionAsistida = QType::Cast($mixValue, 'QControl'));
					case 'MandosAudioVolanteControl':
						return ($this->txtMandosAudioVolante = QType::Cast($mixValue, 'QControl'));
					case 'ReposabrazosControl':
						return ($this->txtReposabrazos = QType::Cast($mixValue, 'QControl'));
					case 'ControlCruceroControl':
						return ($this->txtControlCrucero = QType::Cast($mixValue, 'QControl'));
					case 'SensorLluviaControl':
						return ($this->txtSensorLluvia = QType::Cast($mixValue, 'QControl'));
					case 'TapizadoControl':
						return ($this->txtTapizado = QType::Cast($mixValue, 'QControl'));
					case 'SalidasAireControl':
						return ($this->txtSalidasAire = QType::Cast($mixValue, 'QControl'));
					case 'TechoCorredizoControl':
						return ($this->txtTechoCorredizo = QType::Cast($mixValue, 'QControl'));
					case 'ComandoDistanciaControl':
						return ($this->txtComandoDistancia = QType::Cast($mixValue, 'QControl'));
					case 'VolanteAjusteVerticalControl':
						return ($this->txtVolanteAjusteVertical = QType::Cast($mixValue, 'QControl'));
					case 'VolanteCueroControl':
						return ($this->txtVolanteCuero = QType::Cast($mixValue, 'QControl'));
					case 'MoldurasColorCarroceriaControl':
						return ($this->txtMoldurasColorCarroceria = QType::Cast($mixValue, 'QControl'));
					case 'EspejosElectricosControl':
						return ($this->txtEspejosElectricos = QType::Cast($mixValue, 'QControl'));
					case 'EspejosRebatiblesElectricamenteControl':
						return ($this->txtEspejosRebatiblesElectricamente = QType::Cast($mixValue, 'QControl'));
					case 'EspejosMemoriasControl':
						return ($this->txtEspejosMemorias = QType::Cast($mixValue, 'QControl'));
					case 'LavaFarosControl':
						return ($this->txtLavaFaros = QType::Cast($mixValue, 'QControl'));
					case 'LavaLunetaControl':
						return ($this->txtLavaLuneta = QType::Cast($mixValue, 'QControl'));
					case 'CobertorCajaCargaControl':
						return ($this->txtCobertorCajaCarga = QType::Cast($mixValue, 'QControl'));
					case 'BarrasPortaequipajeTechoControl':
						return ($this->txtBarrasPortaequipajeTecho = QType::Cast($mixValue, 'QControl'));
					case 'BarraAntivuelcoControl':
						return ($this->txtBarraAntivuelco = QType::Cast($mixValue, 'QControl'));
					case 'EstribosControl':
						return ($this->txtEstribos = QType::Cast($mixValue, 'QControl'));
					case 'ConexionAuxiliarControl':
						return ($this->txtConexionAuxiliar = QType::Cast($mixValue, 'QControl'));
					case 'ConexionBluetoothControl':
						return ($this->txtConexionBluetooth = QType::Cast($mixValue, 'QControl'));
					case 'ControlPorVozControl':
						return ($this->txtControlPorVoz = QType::Cast($mixValue, 'QControl'));
					case 'EntradaUsbControl':
						return ($this->txtEntradaUsb = QType::Cast($mixValue, 'QControl'));
					case 'LectorTarjetasSdControl':
						return ($this->txtLectorTarjetasSd = QType::Cast($mixValue, 'QControl'));
					case 'NavegadorGpsControl':
						return ($this->txtNavegadorGps = QType::Cast($mixValue, 'QControl'));
					case 'ParlantesControl':
						return ($this->txtParlantes = QType::Cast($mixValue, 'QControl'));
					case 'RadioAmfmControl':
						return ($this->txtRadioAmfm = QType::Cast($mixValue, 'QControl'));
					case 'RadioSatelitalXmControl':
						return ($this->txtRadioSatelitalXm = QType::Cast($mixValue, 'QControl'));
					case 'ReproductorCdControl':
						return ($this->txtReproductorCd = QType::Cast($mixValue, 'QControl'));
					case 'ReproductorDvdControl':
						return ($this->txtReproductorDvd = QType::Cast($mixValue, 'QControl'));
					case 'ReproductorMp3Control':
						return ($this->txtReproductorMp3 = QType::Cast($mixValue, 'QControl'));
					case 'TomaCorriente12vControl':
						return ($this->txtTomaCorriente12v = QType::Cast($mixValue, 'QControl'));
					case 'AirbagsControl':
						return ($this->txtAirbags = QType::Cast($mixValue, 'QControl'));
					case 'AlarmaControl':
						return ($this->txtAlarma = QType::Cast($mixValue, 'QControl'));
					case 'AsientoParaNinosControl':
						return ($this->txtAsientoParaNinos = QType::Cast($mixValue, 'QControl'));
					case 'AsistenciasElectronicasControl':
						return ($this->txtAsistenciasElectronicas = QType::Cast($mixValue, 'QControl'));
					case 'CamaraRetrocesoControl':
						return ($this->txtCamaraRetroceso = QType::Cast($mixValue, 'QControl'));
					case 'CinturonesInercialesControl':
						return ($this->txtCinturonesInerciales = QType::Cast($mixValue, 'QControl'));
					case 'SensorDistanciaEstacionamientoControl':
						return ($this->txtSensorDistanciaEstacionamiento = QType::Cast($mixValue, 'QControl'));
					case 'DesempaniadorEspejosExterioresControl':
						return ($this->txtDesempaniadorEspejosExteriores = QType::Cast($mixValue, 'QControl'));
					case 'EncendidoAutoBalizasUrgenciaControl':
						return ($this->txtEncendidoAutoBalizasUrgencia = QType::Cast($mixValue, 'QControl'));
					case 'FarosAntinieblaControl':
						return ($this->txtFarosAntiniebla = QType::Cast($mixValue, 'QControl'));
					case 'FarosXenonControl':
						return ($this->txtFarosXenon = QType::Cast($mixValue, 'QControl'));
					case 'GanchosIsofixLatchControl':
						return ($this->txtGanchosIsofixLatch = QType::Cast($mixValue, 'QControl'));
					case 'GarantiaControl':
						return ($this->txtGarantia = QType::Cast($mixValue, 'QControl'));
					case 'IndicadorPresionNeumaticosControl':
						return ($this->txtIndicadorPresionNeumaticos = QType::Cast($mixValue, 'QControl'));
					case 'LavafarosControl':
						return ($this->txtLavafaros = QType::Cast($mixValue, 'QControl'));
					case 'LucesAdaptativasCurvasControl':
						return ($this->txtLucesAdaptativasCurvas = QType::Cast($mixValue, 'QControl'));
					case 'TercerApoyaCabezaTraseroControl':
						return ($this->txtTercerApoyaCabezaTrasero = QType::Cast($mixValue, 'QControl'));
					case 'IdEstadoControl':
						return ($this->txtIdEstado = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>