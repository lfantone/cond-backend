<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Fichas30062010 class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Fichas30062010 object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a Fichas30062010MetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Fichas30062010 $Fichas30062010 the actual Fichas30062010 data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $IdMarcaControl
	 * property-read QLabel $IdMarcaLabel
	 * property QIntegerTextBox $IdTiposControl
	 * property-read QLabel $IdTiposLabel
	 * property QIntegerTextBox $IdModeloControl
	 * property-read QLabel $IdModeloLabel
	 * property QIntegerTextBox $IdVersionControl
	 * property-read QLabel $IdVersionLabel
	 * property QTextBox $DescripcionControl
	 * property-read QLabel $DescripcionLabel
	 * property QTextBox $PrecioControl
	 * property-read QLabel $PrecioLabel
	 * property QIntegerTextBox $AnioControl
	 * property-read QLabel $AnioLabel
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
	 * property QTextBox $MotorShortControl
	 * property-read QLabel $MotorShortLabel
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
	 * property QTextBox $CapacidadCargaControl
	 * property-read QLabel $CapacidadCargaLabel
	 * property QTextBox $FrenosDelanterosControl
	 * property-read QLabel $FrenosDelanterosLabel
	 * property QTextBox $FrenosTraserosControl
	 * property-read QLabel $FrenosTraserosLabel
	 * property QTextBox $NeumaticosControl
	 * property-read QLabel $NeumaticosLabel
	 * property QTextBox $SuspensionDelanteraControl
	 * property-read QLabel $SuspensionDelanteraLabel
	 * property QTextBox $SuspensionTraseraControl
	 * property-read QLabel $SuspensionTraseraLabel
	 * property QIntegerTextBox $IdEstadoControl
	 * property-read QLabel $IdEstadoLabel
	 * property QCheckBox $ProcesadaControl
	 * property-read QLabel $ProcesadaLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class Fichas30062010MetaControlGen extends QBaseClass {
		// General Variables
		protected $objFichas30062010;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Fichas30062010's individual data fields
		protected $lblId;
		protected $txtIdMarca;
		protected $txtIdTipos;
		protected $txtIdModelo;
		protected $txtIdVersion;
		protected $txtDescripcion;
		protected $txtPrecio;
		protected $txtAnio;
		protected $txtCombustible;
		protected $txtCilindrada;
		protected $txtCilindros;
		protected $txtPotenciaMaxima;
		protected $txtParMotorTorque;
		protected $txtPosicion;
		protected $txtAlimentacion;
		protected $txtMotorShort;
		protected $txtValvulas;
		protected $txtTipo;
		protected $txtMarchas;
		protected $txtTraccion;
		protected $txtVelocidadMaxima;
		protected $txtAceleracion0100;
		protected $txtConsumoUrbano;
		protected $txtConsumoInterurbano;
		protected $txtConsumoMixto;
		protected $txtPuertas;
		protected $txtPlazas;
		protected $txtFilasDeAsientos;
		protected $txtInfoEjes;
		protected $txtPeso;
		protected $txtCapacidadBaul;
		protected $txtCapacidadTanque;
		protected $txtCapacidadCarga;
		protected $txtFrenosDelanteros;
		protected $txtFrenosTraseros;
		protected $txtNeumaticos;
		protected $txtSuspensionDelantera;
		protected $txtSuspensionTrasera;
		protected $txtIdEstado;
		protected $chkProcesada;

		// Controls that allow the viewing of Fichas30062010's individual data fields
		protected $lblIdMarca;
		protected $lblIdTipos;
		protected $lblIdModelo;
		protected $lblIdVersion;
		protected $lblDescripcion;
		protected $lblPrecio;
		protected $lblAnio;
		protected $lblCombustible;
		protected $lblCilindrada;
		protected $lblCilindros;
		protected $lblPotenciaMaxima;
		protected $lblParMotorTorque;
		protected $lblPosicion;
		protected $lblAlimentacion;
		protected $lblMotorShort;
		protected $lblValvulas;
		protected $lblTipo;
		protected $lblMarchas;
		protected $lblTraccion;
		protected $lblVelocidadMaxima;
		protected $lblAceleracion0100;
		protected $lblConsumoUrbano;
		protected $lblConsumoInterurbano;
		protected $lblConsumoMixto;
		protected $lblPuertas;
		protected $lblPlazas;
		protected $lblFilasDeAsientos;
		protected $lblInfoEjes;
		protected $lblPeso;
		protected $lblCapacidadBaul;
		protected $lblCapacidadTanque;
		protected $lblCapacidadCarga;
		protected $lblFrenosDelanteros;
		protected $lblFrenosTraseros;
		protected $lblNeumaticos;
		protected $lblSuspensionDelantera;
		protected $lblSuspensionTrasera;
		protected $lblIdEstado;
		protected $lblProcesada;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * Fichas30062010MetaControl to edit a single Fichas30062010 object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Fichas30062010 object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this Fichas30062010MetaControl
		 * @param Fichas30062010 $objFichas30062010 new or existing Fichas30062010 object
		 */
		 public function __construct($objParentObject, Fichas30062010 $objFichas30062010) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this Fichas30062010MetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Fichas30062010 object
			$this->objFichas30062010 = $objFichas30062010;

			// Figure out if we're Editing or Creating New
			if ($this->objFichas30062010->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this Fichas30062010MetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Fichas30062010 object creation - defaults to CreateOrEdit
 		 * @return Fichas30062010MetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objFichas30062010 = Fichas30062010::Load($intId);

				// Fichas30062010 was found -- return it!
				if ($objFichas30062010)
					return new Fichas30062010MetaControl($objParentObject, $objFichas30062010);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Fichas30062010 object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new Fichas30062010MetaControl($objParentObject, new Fichas30062010());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this Fichas30062010MetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Fichas30062010 object creation - defaults to CreateOrEdit
		 * @return Fichas30062010MetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return Fichas30062010MetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this Fichas30062010MetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Fichas30062010 object creation - defaults to CreateOrEdit
		 * @return Fichas30062010MetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return Fichas30062010MetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objFichas30062010->Id;
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
			$this->txtIdMarca->Text = $this->objFichas30062010->IdMarca;
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
			$this->lblIdMarca->Text = $this->objFichas30062010->IdMarca;
			$this->lblIdMarca->Required = true;
			$this->lblIdMarca->Format = $strFormat;
			return $this->lblIdMarca;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdTipos
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdTipos_Create($strControlId = null) {
			$this->txtIdTipos = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdTipos->Name = QApplication::Translate('Id Tipos');
			$this->txtIdTipos->Text = $this->objFichas30062010->IdTipos;
			$this->txtIdTipos->Required = true;
			return $this->txtIdTipos;
		}

		/**
		 * Create and setup QLabel lblIdTipos
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdTipos_Create($strControlId = null, $strFormat = null) {
			$this->lblIdTipos = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdTipos->Name = QApplication::Translate('Id Tipos');
			$this->lblIdTipos->Text = $this->objFichas30062010->IdTipos;
			$this->lblIdTipos->Required = true;
			$this->lblIdTipos->Format = $strFormat;
			return $this->lblIdTipos;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdModelo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdModelo_Create($strControlId = null) {
			$this->txtIdModelo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdModelo->Name = QApplication::Translate('Id Modelo');
			$this->txtIdModelo->Text = $this->objFichas30062010->IdModelo;
			$this->txtIdModelo->Required = true;
			return $this->txtIdModelo;
		}

		/**
		 * Create and setup QLabel lblIdModelo
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdModelo_Create($strControlId = null, $strFormat = null) {
			$this->lblIdModelo = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdModelo->Name = QApplication::Translate('Id Modelo');
			$this->lblIdModelo->Text = $this->objFichas30062010->IdModelo;
			$this->lblIdModelo->Required = true;
			$this->lblIdModelo->Format = $strFormat;
			return $this->lblIdModelo;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdVersion
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdVersion_Create($strControlId = null) {
			$this->txtIdVersion = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdVersion->Name = QApplication::Translate('Id Version');
			$this->txtIdVersion->Text = $this->objFichas30062010->IdVersion;
			$this->txtIdVersion->Required = true;
			return $this->txtIdVersion;
		}

		/**
		 * Create and setup QLabel lblIdVersion
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdVersion_Create($strControlId = null, $strFormat = null) {
			$this->lblIdVersion = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdVersion->Name = QApplication::Translate('Id Version');
			$this->lblIdVersion->Text = $this->objFichas30062010->IdVersion;
			$this->lblIdVersion->Required = true;
			$this->lblIdVersion->Format = $strFormat;
			return $this->lblIdVersion;
		}

		/**
		 * Create and setup QTextBox txtDescripcion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDescripcion_Create($strControlId = null) {
			$this->txtDescripcion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDescripcion->Name = QApplication::Translate('Descripcion');
			$this->txtDescripcion->Text = $this->objFichas30062010->Descripcion;
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
			$this->lblDescripcion->Text = $this->objFichas30062010->Descripcion;
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
			$this->txtPrecio->Text = $this->objFichas30062010->Precio;
			$this->txtPrecio->Required = true;
			$this->txtPrecio->MaxLength = Fichas30062010::PrecioMaxLength;
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
			$this->lblPrecio->Text = $this->objFichas30062010->Precio;
			$this->lblPrecio->Required = true;
			return $this->lblPrecio;
		}

		/**
		 * Create and setup QIntegerTextBox txtAnio
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtAnio_Create($strControlId = null) {
			$this->txtAnio = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtAnio->Name = QApplication::Translate('Anio');
			$this->txtAnio->Text = $this->objFichas30062010->Anio;
			return $this->txtAnio;
		}

		/**
		 * Create and setup QLabel lblAnio
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblAnio_Create($strControlId = null, $strFormat = null) {
			$this->lblAnio = new QLabel($this->objParentObject, $strControlId);
			$this->lblAnio->Name = QApplication::Translate('Anio');
			$this->lblAnio->Text = $this->objFichas30062010->Anio;
			$this->lblAnio->Format = $strFormat;
			return $this->lblAnio;
		}

		/**
		 * Create and setup QTextBox txtCombustible
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCombustible_Create($strControlId = null) {
			$this->txtCombustible = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCombustible->Name = QApplication::Translate('Combustible');
			$this->txtCombustible->Text = $this->objFichas30062010->Combustible;
			$this->txtCombustible->MaxLength = Fichas30062010::CombustibleMaxLength;
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
			$this->lblCombustible->Text = $this->objFichas30062010->Combustible;
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
			$this->txtCilindrada->Text = $this->objFichas30062010->Cilindrada;
			$this->txtCilindrada->MaxLength = Fichas30062010::CilindradaMaxLength;
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
			$this->lblCilindrada->Text = $this->objFichas30062010->Cilindrada;
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
			$this->txtCilindros->Text = $this->objFichas30062010->Cilindros;
			$this->txtCilindros->MaxLength = Fichas30062010::CilindrosMaxLength;
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
			$this->lblCilindros->Text = $this->objFichas30062010->Cilindros;
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
			$this->txtPotenciaMaxima->Text = $this->objFichas30062010->PotenciaMaxima;
			$this->txtPotenciaMaxima->MaxLength = Fichas30062010::PotenciaMaximaMaxLength;
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
			$this->lblPotenciaMaxima->Text = $this->objFichas30062010->PotenciaMaxima;
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
			$this->txtParMotorTorque->Text = $this->objFichas30062010->ParMotorTorque;
			$this->txtParMotorTorque->MaxLength = Fichas30062010::ParMotorTorqueMaxLength;
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
			$this->lblParMotorTorque->Text = $this->objFichas30062010->ParMotorTorque;
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
			$this->txtPosicion->Text = $this->objFichas30062010->Posicion;
			$this->txtPosicion->MaxLength = Fichas30062010::PosicionMaxLength;
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
			$this->lblPosicion->Text = $this->objFichas30062010->Posicion;
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
			$this->txtAlimentacion->Text = $this->objFichas30062010->Alimentacion;
			$this->txtAlimentacion->MaxLength = Fichas30062010::AlimentacionMaxLength;
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
			$this->lblAlimentacion->Text = $this->objFichas30062010->Alimentacion;
			return $this->lblAlimentacion;
		}

		/**
		 * Create and setup QTextBox txtMotorShort
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtMotorShort_Create($strControlId = null) {
			$this->txtMotorShort = new QTextBox($this->objParentObject, $strControlId);
			$this->txtMotorShort->Name = QApplication::Translate('Motor Short');
			$this->txtMotorShort->Text = $this->objFichas30062010->MotorShort;
			$this->txtMotorShort->MaxLength = Fichas30062010::MotorShortMaxLength;
			return $this->txtMotorShort;
		}

		/**
		 * Create and setup QLabel lblMotorShort
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMotorShort_Create($strControlId = null) {
			$this->lblMotorShort = new QLabel($this->objParentObject, $strControlId);
			$this->lblMotorShort->Name = QApplication::Translate('Motor Short');
			$this->lblMotorShort->Text = $this->objFichas30062010->MotorShort;
			return $this->lblMotorShort;
		}

		/**
		 * Create and setup QTextBox txtValvulas
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtValvulas_Create($strControlId = null) {
			$this->txtValvulas = new QTextBox($this->objParentObject, $strControlId);
			$this->txtValvulas->Name = QApplication::Translate('Valvulas');
			$this->txtValvulas->Text = $this->objFichas30062010->Valvulas;
			$this->txtValvulas->MaxLength = Fichas30062010::ValvulasMaxLength;
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
			$this->lblValvulas->Text = $this->objFichas30062010->Valvulas;
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
			$this->txtTipo->Text = $this->objFichas30062010->Tipo;
			$this->txtTipo->MaxLength = Fichas30062010::TipoMaxLength;
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
			$this->lblTipo->Text = $this->objFichas30062010->Tipo;
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
			$this->txtMarchas->Text = $this->objFichas30062010->Marchas;
			$this->txtMarchas->MaxLength = Fichas30062010::MarchasMaxLength;
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
			$this->lblMarchas->Text = $this->objFichas30062010->Marchas;
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
			$this->txtTraccion->Text = $this->objFichas30062010->Traccion;
			$this->txtTraccion->MaxLength = Fichas30062010::TraccionMaxLength;
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
			$this->lblTraccion->Text = $this->objFichas30062010->Traccion;
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
			$this->txtVelocidadMaxima->Text = $this->objFichas30062010->VelocidadMaxima;
			$this->txtVelocidadMaxima->MaxLength = Fichas30062010::VelocidadMaximaMaxLength;
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
			$this->lblVelocidadMaxima->Text = $this->objFichas30062010->VelocidadMaxima;
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
			$this->txtAceleracion0100->Text = $this->objFichas30062010->Aceleracion0100;
			$this->txtAceleracion0100->MaxLength = Fichas30062010::Aceleracion0100MaxLength;
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
			$this->lblAceleracion0100->Text = $this->objFichas30062010->Aceleracion0100;
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
			$this->txtConsumoUrbano->Text = $this->objFichas30062010->ConsumoUrbano;
			$this->txtConsumoUrbano->MaxLength = Fichas30062010::ConsumoUrbanoMaxLength;
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
			$this->lblConsumoUrbano->Text = $this->objFichas30062010->ConsumoUrbano;
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
			$this->txtConsumoInterurbano->Text = $this->objFichas30062010->ConsumoInterurbano;
			$this->txtConsumoInterurbano->MaxLength = Fichas30062010::ConsumoInterurbanoMaxLength;
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
			$this->lblConsumoInterurbano->Text = $this->objFichas30062010->ConsumoInterurbano;
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
			$this->txtConsumoMixto->Text = $this->objFichas30062010->ConsumoMixto;
			$this->txtConsumoMixto->MaxLength = Fichas30062010::ConsumoMixtoMaxLength;
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
			$this->lblConsumoMixto->Text = $this->objFichas30062010->ConsumoMixto;
			return $this->lblConsumoMixto;
		}

		/**
		 * Create and setup QTextBox txtPuertas
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPuertas_Create($strControlId = null) {
			$this->txtPuertas = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPuertas->Name = QApplication::Translate('Puertas');
			$this->txtPuertas->Text = $this->objFichas30062010->Puertas;
			$this->txtPuertas->MaxLength = Fichas30062010::PuertasMaxLength;
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
			$this->lblPuertas->Text = $this->objFichas30062010->Puertas;
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
			$this->txtPlazas->Text = $this->objFichas30062010->Plazas;
			$this->txtPlazas->MaxLength = Fichas30062010::PlazasMaxLength;
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
			$this->lblPlazas->Text = $this->objFichas30062010->Plazas;
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
			$this->txtFilasDeAsientos->Text = $this->objFichas30062010->FilasDeAsientos;
			$this->txtFilasDeAsientos->MaxLength = Fichas30062010::FilasDeAsientosMaxLength;
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
			$this->lblFilasDeAsientos->Text = $this->objFichas30062010->FilasDeAsientos;
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
			$this->txtInfoEjes->Text = $this->objFichas30062010->InfoEjes;
			$this->txtInfoEjes->MaxLength = Fichas30062010::InfoEjesMaxLength;
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
			$this->lblInfoEjes->Text = $this->objFichas30062010->InfoEjes;
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
			$this->txtPeso->Text = $this->objFichas30062010->Peso;
			$this->txtPeso->MaxLength = Fichas30062010::PesoMaxLength;
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
			$this->lblPeso->Text = $this->objFichas30062010->Peso;
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
			$this->txtCapacidadBaul->Text = $this->objFichas30062010->CapacidadBaul;
			$this->txtCapacidadBaul->MaxLength = Fichas30062010::CapacidadBaulMaxLength;
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
			$this->lblCapacidadBaul->Text = $this->objFichas30062010->CapacidadBaul;
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
			$this->txtCapacidadTanque->Text = $this->objFichas30062010->CapacidadTanque;
			$this->txtCapacidadTanque->MaxLength = Fichas30062010::CapacidadTanqueMaxLength;
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
			$this->lblCapacidadTanque->Text = $this->objFichas30062010->CapacidadTanque;
			return $this->lblCapacidadTanque;
		}

		/**
		 * Create and setup QTextBox txtCapacidadCarga
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCapacidadCarga_Create($strControlId = null) {
			$this->txtCapacidadCarga = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCapacidadCarga->Name = QApplication::Translate('Capacidad Carga');
			$this->txtCapacidadCarga->Text = $this->objFichas30062010->CapacidadCarga;
			$this->txtCapacidadCarga->MaxLength = Fichas30062010::CapacidadCargaMaxLength;
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
			$this->lblCapacidadCarga->Text = $this->objFichas30062010->CapacidadCarga;
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
			$this->txtFrenosDelanteros->Text = $this->objFichas30062010->FrenosDelanteros;
			$this->txtFrenosDelanteros->MaxLength = Fichas30062010::FrenosDelanterosMaxLength;
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
			$this->lblFrenosDelanteros->Text = $this->objFichas30062010->FrenosDelanteros;
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
			$this->txtFrenosTraseros->Text = $this->objFichas30062010->FrenosTraseros;
			$this->txtFrenosTraseros->MaxLength = Fichas30062010::FrenosTraserosMaxLength;
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
			$this->lblFrenosTraseros->Text = $this->objFichas30062010->FrenosTraseros;
			return $this->lblFrenosTraseros;
		}

		/**
		 * Create and setup QTextBox txtNeumaticos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNeumaticos_Create($strControlId = null) {
			$this->txtNeumaticos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNeumaticos->Name = QApplication::Translate('Neumaticos');
			$this->txtNeumaticos->Text = $this->objFichas30062010->Neumaticos;
			$this->txtNeumaticos->MaxLength = Fichas30062010::NeumaticosMaxLength;
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
			$this->lblNeumaticos->Text = $this->objFichas30062010->Neumaticos;
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
			$this->txtSuspensionDelantera->Text = $this->objFichas30062010->SuspensionDelantera;
			$this->txtSuspensionDelantera->MaxLength = Fichas30062010::SuspensionDelanteraMaxLength;
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
			$this->lblSuspensionDelantera->Text = $this->objFichas30062010->SuspensionDelantera;
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
			$this->txtSuspensionTrasera->Text = $this->objFichas30062010->SuspensionTrasera;
			$this->txtSuspensionTrasera->MaxLength = Fichas30062010::SuspensionTraseraMaxLength;
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
			$this->lblSuspensionTrasera->Text = $this->objFichas30062010->SuspensionTrasera;
			return $this->lblSuspensionTrasera;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdEstado_Create($strControlId = null) {
			$this->txtIdEstado = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdEstado->Name = QApplication::Translate('Id Estado');
			$this->txtIdEstado->Text = $this->objFichas30062010->IdEstado;
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
			$this->lblIdEstado->Text = $this->objFichas30062010->IdEstado;
			$this->lblIdEstado->Required = true;
			$this->lblIdEstado->Format = $strFormat;
			return $this->lblIdEstado;
		}

		/**
		 * Create and setup QCheckBox chkProcesada
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkProcesada_Create($strControlId = null) {
			$this->chkProcesada = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkProcesada->Name = QApplication::Translate('Procesada');
			$this->chkProcesada->Checked = $this->objFichas30062010->Procesada;
			return $this->chkProcesada;
		}

		/**
		 * Create and setup QLabel lblProcesada
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProcesada_Create($strControlId = null) {
			$this->lblProcesada = new QLabel($this->objParentObject, $strControlId);
			$this->lblProcesada->Name = QApplication::Translate('Procesada');
			$this->lblProcesada->Text = ($this->objFichas30062010->Procesada) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblProcesada;
		}



		/**
		 * Refresh this MetaControl with Data from the local Fichas30062010 object.
		 * @param boolean $blnReload reload Fichas30062010 from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFichas30062010->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objFichas30062010->Id;

			if ($this->txtIdMarca) $this->txtIdMarca->Text = $this->objFichas30062010->IdMarca;
			if ($this->lblIdMarca) $this->lblIdMarca->Text = $this->objFichas30062010->IdMarca;

			if ($this->txtIdTipos) $this->txtIdTipos->Text = $this->objFichas30062010->IdTipos;
			if ($this->lblIdTipos) $this->lblIdTipos->Text = $this->objFichas30062010->IdTipos;

			if ($this->txtIdModelo) $this->txtIdModelo->Text = $this->objFichas30062010->IdModelo;
			if ($this->lblIdModelo) $this->lblIdModelo->Text = $this->objFichas30062010->IdModelo;

			if ($this->txtIdVersion) $this->txtIdVersion->Text = $this->objFichas30062010->IdVersion;
			if ($this->lblIdVersion) $this->lblIdVersion->Text = $this->objFichas30062010->IdVersion;

			if ($this->txtDescripcion) $this->txtDescripcion->Text = $this->objFichas30062010->Descripcion;
			if ($this->lblDescripcion) $this->lblDescripcion->Text = $this->objFichas30062010->Descripcion;

			if ($this->txtPrecio) $this->txtPrecio->Text = $this->objFichas30062010->Precio;
			if ($this->lblPrecio) $this->lblPrecio->Text = $this->objFichas30062010->Precio;

			if ($this->txtAnio) $this->txtAnio->Text = $this->objFichas30062010->Anio;
			if ($this->lblAnio) $this->lblAnio->Text = $this->objFichas30062010->Anio;

			if ($this->txtCombustible) $this->txtCombustible->Text = $this->objFichas30062010->Combustible;
			if ($this->lblCombustible) $this->lblCombustible->Text = $this->objFichas30062010->Combustible;

			if ($this->txtCilindrada) $this->txtCilindrada->Text = $this->objFichas30062010->Cilindrada;
			if ($this->lblCilindrada) $this->lblCilindrada->Text = $this->objFichas30062010->Cilindrada;

			if ($this->txtCilindros) $this->txtCilindros->Text = $this->objFichas30062010->Cilindros;
			if ($this->lblCilindros) $this->lblCilindros->Text = $this->objFichas30062010->Cilindros;

			if ($this->txtPotenciaMaxima) $this->txtPotenciaMaxima->Text = $this->objFichas30062010->PotenciaMaxima;
			if ($this->lblPotenciaMaxima) $this->lblPotenciaMaxima->Text = $this->objFichas30062010->PotenciaMaxima;

			if ($this->txtParMotorTorque) $this->txtParMotorTorque->Text = $this->objFichas30062010->ParMotorTorque;
			if ($this->lblParMotorTorque) $this->lblParMotorTorque->Text = $this->objFichas30062010->ParMotorTorque;

			if ($this->txtPosicion) $this->txtPosicion->Text = $this->objFichas30062010->Posicion;
			if ($this->lblPosicion) $this->lblPosicion->Text = $this->objFichas30062010->Posicion;

			if ($this->txtAlimentacion) $this->txtAlimentacion->Text = $this->objFichas30062010->Alimentacion;
			if ($this->lblAlimentacion) $this->lblAlimentacion->Text = $this->objFichas30062010->Alimentacion;

			if ($this->txtMotorShort) $this->txtMotorShort->Text = $this->objFichas30062010->MotorShort;
			if ($this->lblMotorShort) $this->lblMotorShort->Text = $this->objFichas30062010->MotorShort;

			if ($this->txtValvulas) $this->txtValvulas->Text = $this->objFichas30062010->Valvulas;
			if ($this->lblValvulas) $this->lblValvulas->Text = $this->objFichas30062010->Valvulas;

			if ($this->txtTipo) $this->txtTipo->Text = $this->objFichas30062010->Tipo;
			if ($this->lblTipo) $this->lblTipo->Text = $this->objFichas30062010->Tipo;

			if ($this->txtMarchas) $this->txtMarchas->Text = $this->objFichas30062010->Marchas;
			if ($this->lblMarchas) $this->lblMarchas->Text = $this->objFichas30062010->Marchas;

			if ($this->txtTraccion) $this->txtTraccion->Text = $this->objFichas30062010->Traccion;
			if ($this->lblTraccion) $this->lblTraccion->Text = $this->objFichas30062010->Traccion;

			if ($this->txtVelocidadMaxima) $this->txtVelocidadMaxima->Text = $this->objFichas30062010->VelocidadMaxima;
			if ($this->lblVelocidadMaxima) $this->lblVelocidadMaxima->Text = $this->objFichas30062010->VelocidadMaxima;

			if ($this->txtAceleracion0100) $this->txtAceleracion0100->Text = $this->objFichas30062010->Aceleracion0100;
			if ($this->lblAceleracion0100) $this->lblAceleracion0100->Text = $this->objFichas30062010->Aceleracion0100;

			if ($this->txtConsumoUrbano) $this->txtConsumoUrbano->Text = $this->objFichas30062010->ConsumoUrbano;
			if ($this->lblConsumoUrbano) $this->lblConsumoUrbano->Text = $this->objFichas30062010->ConsumoUrbano;

			if ($this->txtConsumoInterurbano) $this->txtConsumoInterurbano->Text = $this->objFichas30062010->ConsumoInterurbano;
			if ($this->lblConsumoInterurbano) $this->lblConsumoInterurbano->Text = $this->objFichas30062010->ConsumoInterurbano;

			if ($this->txtConsumoMixto) $this->txtConsumoMixto->Text = $this->objFichas30062010->ConsumoMixto;
			if ($this->lblConsumoMixto) $this->lblConsumoMixto->Text = $this->objFichas30062010->ConsumoMixto;

			if ($this->txtPuertas) $this->txtPuertas->Text = $this->objFichas30062010->Puertas;
			if ($this->lblPuertas) $this->lblPuertas->Text = $this->objFichas30062010->Puertas;

			if ($this->txtPlazas) $this->txtPlazas->Text = $this->objFichas30062010->Plazas;
			if ($this->lblPlazas) $this->lblPlazas->Text = $this->objFichas30062010->Plazas;

			if ($this->txtFilasDeAsientos) $this->txtFilasDeAsientos->Text = $this->objFichas30062010->FilasDeAsientos;
			if ($this->lblFilasDeAsientos) $this->lblFilasDeAsientos->Text = $this->objFichas30062010->FilasDeAsientos;

			if ($this->txtInfoEjes) $this->txtInfoEjes->Text = $this->objFichas30062010->InfoEjes;
			if ($this->lblInfoEjes) $this->lblInfoEjes->Text = $this->objFichas30062010->InfoEjes;

			if ($this->txtPeso) $this->txtPeso->Text = $this->objFichas30062010->Peso;
			if ($this->lblPeso) $this->lblPeso->Text = $this->objFichas30062010->Peso;

			if ($this->txtCapacidadBaul) $this->txtCapacidadBaul->Text = $this->objFichas30062010->CapacidadBaul;
			if ($this->lblCapacidadBaul) $this->lblCapacidadBaul->Text = $this->objFichas30062010->CapacidadBaul;

			if ($this->txtCapacidadTanque) $this->txtCapacidadTanque->Text = $this->objFichas30062010->CapacidadTanque;
			if ($this->lblCapacidadTanque) $this->lblCapacidadTanque->Text = $this->objFichas30062010->CapacidadTanque;

			if ($this->txtCapacidadCarga) $this->txtCapacidadCarga->Text = $this->objFichas30062010->CapacidadCarga;
			if ($this->lblCapacidadCarga) $this->lblCapacidadCarga->Text = $this->objFichas30062010->CapacidadCarga;

			if ($this->txtFrenosDelanteros) $this->txtFrenosDelanteros->Text = $this->objFichas30062010->FrenosDelanteros;
			if ($this->lblFrenosDelanteros) $this->lblFrenosDelanteros->Text = $this->objFichas30062010->FrenosDelanteros;

			if ($this->txtFrenosTraseros) $this->txtFrenosTraseros->Text = $this->objFichas30062010->FrenosTraseros;
			if ($this->lblFrenosTraseros) $this->lblFrenosTraseros->Text = $this->objFichas30062010->FrenosTraseros;

			if ($this->txtNeumaticos) $this->txtNeumaticos->Text = $this->objFichas30062010->Neumaticos;
			if ($this->lblNeumaticos) $this->lblNeumaticos->Text = $this->objFichas30062010->Neumaticos;

			if ($this->txtSuspensionDelantera) $this->txtSuspensionDelantera->Text = $this->objFichas30062010->SuspensionDelantera;
			if ($this->lblSuspensionDelantera) $this->lblSuspensionDelantera->Text = $this->objFichas30062010->SuspensionDelantera;

			if ($this->txtSuspensionTrasera) $this->txtSuspensionTrasera->Text = $this->objFichas30062010->SuspensionTrasera;
			if ($this->lblSuspensionTrasera) $this->lblSuspensionTrasera->Text = $this->objFichas30062010->SuspensionTrasera;

			if ($this->txtIdEstado) $this->txtIdEstado->Text = $this->objFichas30062010->IdEstado;
			if ($this->lblIdEstado) $this->lblIdEstado->Text = $this->objFichas30062010->IdEstado;

			if ($this->chkProcesada) $this->chkProcesada->Checked = $this->objFichas30062010->Procesada;
			if ($this->lblProcesada) $this->lblProcesada->Text = ($this->objFichas30062010->Procesada) ? QApplication::Translate('Yes') : QApplication::Translate('No');

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FICHAS30062010 OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Fichas30062010 instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFichas30062010() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtIdMarca) $this->objFichas30062010->IdMarca = $this->txtIdMarca->Text;
				if ($this->txtIdTipos) $this->objFichas30062010->IdTipos = $this->txtIdTipos->Text;
				if ($this->txtIdModelo) $this->objFichas30062010->IdModelo = $this->txtIdModelo->Text;
				if ($this->txtIdVersion) $this->objFichas30062010->IdVersion = $this->txtIdVersion->Text;
				if ($this->txtDescripcion) $this->objFichas30062010->Descripcion = $this->txtDescripcion->Text;
				if ($this->txtPrecio) $this->objFichas30062010->Precio = $this->txtPrecio->Text;
				if ($this->txtAnio) $this->objFichas30062010->Anio = $this->txtAnio->Text;
				if ($this->txtCombustible) $this->objFichas30062010->Combustible = $this->txtCombustible->Text;
				if ($this->txtCilindrada) $this->objFichas30062010->Cilindrada = $this->txtCilindrada->Text;
				if ($this->txtCilindros) $this->objFichas30062010->Cilindros = $this->txtCilindros->Text;
				if ($this->txtPotenciaMaxima) $this->objFichas30062010->PotenciaMaxima = $this->txtPotenciaMaxima->Text;
				if ($this->txtParMotorTorque) $this->objFichas30062010->ParMotorTorque = $this->txtParMotorTorque->Text;
				if ($this->txtPosicion) $this->objFichas30062010->Posicion = $this->txtPosicion->Text;
				if ($this->txtAlimentacion) $this->objFichas30062010->Alimentacion = $this->txtAlimentacion->Text;
				if ($this->txtMotorShort) $this->objFichas30062010->MotorShort = $this->txtMotorShort->Text;
				if ($this->txtValvulas) $this->objFichas30062010->Valvulas = $this->txtValvulas->Text;
				if ($this->txtTipo) $this->objFichas30062010->Tipo = $this->txtTipo->Text;
				if ($this->txtMarchas) $this->objFichas30062010->Marchas = $this->txtMarchas->Text;
				if ($this->txtTraccion) $this->objFichas30062010->Traccion = $this->txtTraccion->Text;
				if ($this->txtVelocidadMaxima) $this->objFichas30062010->VelocidadMaxima = $this->txtVelocidadMaxima->Text;
				if ($this->txtAceleracion0100) $this->objFichas30062010->Aceleracion0100 = $this->txtAceleracion0100->Text;
				if ($this->txtConsumoUrbano) $this->objFichas30062010->ConsumoUrbano = $this->txtConsumoUrbano->Text;
				if ($this->txtConsumoInterurbano) $this->objFichas30062010->ConsumoInterurbano = $this->txtConsumoInterurbano->Text;
				if ($this->txtConsumoMixto) $this->objFichas30062010->ConsumoMixto = $this->txtConsumoMixto->Text;
				if ($this->txtPuertas) $this->objFichas30062010->Puertas = $this->txtPuertas->Text;
				if ($this->txtPlazas) $this->objFichas30062010->Plazas = $this->txtPlazas->Text;
				if ($this->txtFilasDeAsientos) $this->objFichas30062010->FilasDeAsientos = $this->txtFilasDeAsientos->Text;
				if ($this->txtInfoEjes) $this->objFichas30062010->InfoEjes = $this->txtInfoEjes->Text;
				if ($this->txtPeso) $this->objFichas30062010->Peso = $this->txtPeso->Text;
				if ($this->txtCapacidadBaul) $this->objFichas30062010->CapacidadBaul = $this->txtCapacidadBaul->Text;
				if ($this->txtCapacidadTanque) $this->objFichas30062010->CapacidadTanque = $this->txtCapacidadTanque->Text;
				if ($this->txtCapacidadCarga) $this->objFichas30062010->CapacidadCarga = $this->txtCapacidadCarga->Text;
				if ($this->txtFrenosDelanteros) $this->objFichas30062010->FrenosDelanteros = $this->txtFrenosDelanteros->Text;
				if ($this->txtFrenosTraseros) $this->objFichas30062010->FrenosTraseros = $this->txtFrenosTraseros->Text;
				if ($this->txtNeumaticos) $this->objFichas30062010->Neumaticos = $this->txtNeumaticos->Text;
				if ($this->txtSuspensionDelantera) $this->objFichas30062010->SuspensionDelantera = $this->txtSuspensionDelantera->Text;
				if ($this->txtSuspensionTrasera) $this->objFichas30062010->SuspensionTrasera = $this->txtSuspensionTrasera->Text;
				if ($this->txtIdEstado) $this->objFichas30062010->IdEstado = $this->txtIdEstado->Text;
				if ($this->chkProcesada) $this->objFichas30062010->Procesada = $this->chkProcesada->Checked;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Fichas30062010 object
				$this->objFichas30062010->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Fichas30062010 instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFichas30062010() {
			$this->objFichas30062010->Delete();
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
				case 'Fichas30062010': return $this->objFichas30062010;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Fichas30062010 fields -- will be created dynamically if not yet created
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
				case 'IdModeloControl':
					if (!$this->txtIdModelo) return $this->txtIdModelo_Create();
					return $this->txtIdModelo;
				case 'IdModeloLabel':
					if (!$this->lblIdModelo) return $this->lblIdModelo_Create();
					return $this->lblIdModelo;
				case 'IdVersionControl':
					if (!$this->txtIdVersion) return $this->txtIdVersion_Create();
					return $this->txtIdVersion;
				case 'IdVersionLabel':
					if (!$this->lblIdVersion) return $this->lblIdVersion_Create();
					return $this->lblIdVersion;
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
				case 'AnioControl':
					if (!$this->txtAnio) return $this->txtAnio_Create();
					return $this->txtAnio;
				case 'AnioLabel':
					if (!$this->lblAnio) return $this->lblAnio_Create();
					return $this->lblAnio;
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
				case 'MotorShortControl':
					if (!$this->txtMotorShort) return $this->txtMotorShort_Create();
					return $this->txtMotorShort;
				case 'MotorShortLabel':
					if (!$this->lblMotorShort) return $this->lblMotorShort_Create();
					return $this->lblMotorShort;
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
				case 'IdEstadoControl':
					if (!$this->txtIdEstado) return $this->txtIdEstado_Create();
					return $this->txtIdEstado;
				case 'IdEstadoLabel':
					if (!$this->lblIdEstado) return $this->lblIdEstado_Create();
					return $this->lblIdEstado;
				case 'ProcesadaControl':
					if (!$this->chkProcesada) return $this->chkProcesada_Create();
					return $this->chkProcesada;
				case 'ProcesadaLabel':
					if (!$this->lblProcesada) return $this->lblProcesada_Create();
					return $this->lblProcesada;
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
					// Controls that point to Fichas30062010 fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'IdMarcaControl':
						return ($this->txtIdMarca = QType::Cast($mixValue, 'QControl'));
					case 'IdTiposControl':
						return ($this->txtIdTipos = QType::Cast($mixValue, 'QControl'));
					case 'IdModeloControl':
						return ($this->txtIdModelo = QType::Cast($mixValue, 'QControl'));
					case 'IdVersionControl':
						return ($this->txtIdVersion = QType::Cast($mixValue, 'QControl'));
					case 'DescripcionControl':
						return ($this->txtDescripcion = QType::Cast($mixValue, 'QControl'));
					case 'PrecioControl':
						return ($this->txtPrecio = QType::Cast($mixValue, 'QControl'));
					case 'AnioControl':
						return ($this->txtAnio = QType::Cast($mixValue, 'QControl'));
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
					case 'MotorShortControl':
						return ($this->txtMotorShort = QType::Cast($mixValue, 'QControl'));
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
					case 'CapacidadCargaControl':
						return ($this->txtCapacidadCarga = QType::Cast($mixValue, 'QControl'));
					case 'FrenosDelanterosControl':
						return ($this->txtFrenosDelanteros = QType::Cast($mixValue, 'QControl'));
					case 'FrenosTraserosControl':
						return ($this->txtFrenosTraseros = QType::Cast($mixValue, 'QControl'));
					case 'NeumaticosControl':
						return ($this->txtNeumaticos = QType::Cast($mixValue, 'QControl'));
					case 'SuspensionDelanteraControl':
						return ($this->txtSuspensionDelantera = QType::Cast($mixValue, 'QControl'));
					case 'SuspensionTraseraControl':
						return ($this->txtSuspensionTrasera = QType::Cast($mixValue, 'QControl'));
					case 'IdEstadoControl':
						return ($this->txtIdEstado = QType::Cast($mixValue, 'QControl'));
					case 'ProcesadaControl':
						return ($this->chkProcesada = QType::Cast($mixValue, 'QControl'));
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