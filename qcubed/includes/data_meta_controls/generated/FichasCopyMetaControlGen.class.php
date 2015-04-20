<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FichasCopy class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FichasCopy object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FichasCopyMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FichasCopy $FichasCopy the actual FichasCopy data class being edited
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
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FichasCopyMetaControlGen extends QBaseClass {
		// General Variables
		protected $objFichasCopy;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of FichasCopy's individual data fields
		protected $lblId;
		protected $txtIdMarca;
		protected $txtIdTipos;
		protected $txtIdModelo;
		protected $txtIdVersion;
		protected $txtDescripcion;
		protected $txtPrecio;
		protected $txtCombustible;
		protected $txtCilindrada;
		protected $txtCilindros;
		protected $txtPotenciaMaxima;
		protected $txtParMotorTorque;
		protected $txtPosicion;
		protected $txtAlimentacion;
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

		// Controls that allow the viewing of FichasCopy's individual data fields
		protected $lblIdMarca;
		protected $lblIdTipos;
		protected $lblIdModelo;
		protected $lblIdVersion;
		protected $lblDescripcion;
		protected $lblPrecio;
		protected $lblCombustible;
		protected $lblCilindrada;
		protected $lblCilindros;
		protected $lblPotenciaMaxima;
		protected $lblParMotorTorque;
		protected $lblPosicion;
		protected $lblAlimentacion;
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

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FichasCopyMetaControl to edit a single FichasCopy object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FichasCopy object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasCopyMetaControl
		 * @param FichasCopy $objFichasCopy new or existing FichasCopy object
		 */
		 public function __construct($objParentObject, FichasCopy $objFichasCopy) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FichasCopyMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FichasCopy object
			$this->objFichasCopy = $objFichasCopy;

			// Figure out if we're Editing or Creating New
			if ($this->objFichasCopy->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasCopyMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FichasCopy object creation - defaults to CreateOrEdit
 		 * @return FichasCopyMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objFichasCopy = FichasCopy::Load($intId);

				// FichasCopy was found -- return it!
				if ($objFichasCopy)
					return new FichasCopyMetaControl($objParentObject, $objFichasCopy);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FichasCopy object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FichasCopyMetaControl($objParentObject, new FichasCopy());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasCopyMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasCopy object creation - defaults to CreateOrEdit
		 * @return FichasCopyMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return FichasCopyMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasCopyMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasCopy object creation - defaults to CreateOrEdit
		 * @return FichasCopyMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return FichasCopyMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objFichasCopy->Id;
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
			$this->txtIdMarca->Text = $this->objFichasCopy->IdMarca;
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
			$this->lblIdMarca->Text = $this->objFichasCopy->IdMarca;
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
			$this->txtIdTipos->Text = $this->objFichasCopy->IdTipos;
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
			$this->lblIdTipos->Text = $this->objFichasCopy->IdTipos;
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
			$this->txtIdModelo->Text = $this->objFichasCopy->IdModelo;
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
			$this->lblIdModelo->Text = $this->objFichasCopy->IdModelo;
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
			$this->txtIdVersion->Text = $this->objFichasCopy->IdVersion;
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
			$this->lblIdVersion->Text = $this->objFichasCopy->IdVersion;
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
			$this->txtDescripcion->Text = $this->objFichasCopy->Descripcion;
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
			$this->lblDescripcion->Text = $this->objFichasCopy->Descripcion;
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
			$this->txtPrecio->Text = $this->objFichasCopy->Precio;
			$this->txtPrecio->Required = true;
			$this->txtPrecio->MaxLength = FichasCopy::PrecioMaxLength;
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
			$this->lblPrecio->Text = $this->objFichasCopy->Precio;
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
			$this->txtCombustible->Text = $this->objFichasCopy->Combustible;
			$this->txtCombustible->MaxLength = FichasCopy::CombustibleMaxLength;
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
			$this->lblCombustible->Text = $this->objFichasCopy->Combustible;
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
			$this->txtCilindrada->Text = $this->objFichasCopy->Cilindrada;
			$this->txtCilindrada->MaxLength = FichasCopy::CilindradaMaxLength;
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
			$this->lblCilindrada->Text = $this->objFichasCopy->Cilindrada;
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
			$this->txtCilindros->Text = $this->objFichasCopy->Cilindros;
			$this->txtCilindros->MaxLength = FichasCopy::CilindrosMaxLength;
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
			$this->lblCilindros->Text = $this->objFichasCopy->Cilindros;
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
			$this->txtPotenciaMaxima->Text = $this->objFichasCopy->PotenciaMaxima;
			$this->txtPotenciaMaxima->MaxLength = FichasCopy::PotenciaMaximaMaxLength;
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
			$this->lblPotenciaMaxima->Text = $this->objFichasCopy->PotenciaMaxima;
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
			$this->txtParMotorTorque->Text = $this->objFichasCopy->ParMotorTorque;
			$this->txtParMotorTorque->MaxLength = FichasCopy::ParMotorTorqueMaxLength;
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
			$this->lblParMotorTorque->Text = $this->objFichasCopy->ParMotorTorque;
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
			$this->txtPosicion->Text = $this->objFichasCopy->Posicion;
			$this->txtPosicion->MaxLength = FichasCopy::PosicionMaxLength;
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
			$this->lblPosicion->Text = $this->objFichasCopy->Posicion;
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
			$this->txtAlimentacion->Text = $this->objFichasCopy->Alimentacion;
			$this->txtAlimentacion->MaxLength = FichasCopy::AlimentacionMaxLength;
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
			$this->lblAlimentacion->Text = $this->objFichasCopy->Alimentacion;
			return $this->lblAlimentacion;
		}

		/**
		 * Create and setup QTextBox txtValvulas
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtValvulas_Create($strControlId = null) {
			$this->txtValvulas = new QTextBox($this->objParentObject, $strControlId);
			$this->txtValvulas->Name = QApplication::Translate('Valvulas');
			$this->txtValvulas->Text = $this->objFichasCopy->Valvulas;
			$this->txtValvulas->MaxLength = FichasCopy::ValvulasMaxLength;
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
			$this->lblValvulas->Text = $this->objFichasCopy->Valvulas;
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
			$this->txtTipo->Text = $this->objFichasCopy->Tipo;
			$this->txtTipo->MaxLength = FichasCopy::TipoMaxLength;
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
			$this->lblTipo->Text = $this->objFichasCopy->Tipo;
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
			$this->txtMarchas->Text = $this->objFichasCopy->Marchas;
			$this->txtMarchas->MaxLength = FichasCopy::MarchasMaxLength;
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
			$this->lblMarchas->Text = $this->objFichasCopy->Marchas;
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
			$this->txtTraccion->Text = $this->objFichasCopy->Traccion;
			$this->txtTraccion->MaxLength = FichasCopy::TraccionMaxLength;
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
			$this->lblTraccion->Text = $this->objFichasCopy->Traccion;
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
			$this->txtVelocidadMaxima->Text = $this->objFichasCopy->VelocidadMaxima;
			$this->txtVelocidadMaxima->MaxLength = FichasCopy::VelocidadMaximaMaxLength;
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
			$this->lblVelocidadMaxima->Text = $this->objFichasCopy->VelocidadMaxima;
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
			$this->txtAceleracion0100->Text = $this->objFichasCopy->Aceleracion0100;
			$this->txtAceleracion0100->MaxLength = FichasCopy::Aceleracion0100MaxLength;
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
			$this->lblAceleracion0100->Text = $this->objFichasCopy->Aceleracion0100;
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
			$this->txtConsumoUrbano->Text = $this->objFichasCopy->ConsumoUrbano;
			$this->txtConsumoUrbano->MaxLength = FichasCopy::ConsumoUrbanoMaxLength;
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
			$this->lblConsumoUrbano->Text = $this->objFichasCopy->ConsumoUrbano;
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
			$this->txtConsumoInterurbano->Text = $this->objFichasCopy->ConsumoInterurbano;
			$this->txtConsumoInterurbano->MaxLength = FichasCopy::ConsumoInterurbanoMaxLength;
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
			$this->lblConsumoInterurbano->Text = $this->objFichasCopy->ConsumoInterurbano;
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
			$this->txtConsumoMixto->Text = $this->objFichasCopy->ConsumoMixto;
			$this->txtConsumoMixto->MaxLength = FichasCopy::ConsumoMixtoMaxLength;
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
			$this->lblConsumoMixto->Text = $this->objFichasCopy->ConsumoMixto;
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
			$this->txtPuertas->Text = $this->objFichasCopy->Puertas;
			$this->txtPuertas->MaxLength = FichasCopy::PuertasMaxLength;
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
			$this->lblPuertas->Text = $this->objFichasCopy->Puertas;
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
			$this->txtPlazas->Text = $this->objFichasCopy->Plazas;
			$this->txtPlazas->MaxLength = FichasCopy::PlazasMaxLength;
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
			$this->lblPlazas->Text = $this->objFichasCopy->Plazas;
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
			$this->txtFilasDeAsientos->Text = $this->objFichasCopy->FilasDeAsientos;
			$this->txtFilasDeAsientos->MaxLength = FichasCopy::FilasDeAsientosMaxLength;
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
			$this->lblFilasDeAsientos->Text = $this->objFichasCopy->FilasDeAsientos;
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
			$this->txtInfoEjes->Text = $this->objFichasCopy->InfoEjes;
			$this->txtInfoEjes->MaxLength = FichasCopy::InfoEjesMaxLength;
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
			$this->lblInfoEjes->Text = $this->objFichasCopy->InfoEjes;
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
			$this->txtPeso->Text = $this->objFichasCopy->Peso;
			$this->txtPeso->MaxLength = FichasCopy::PesoMaxLength;
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
			$this->lblPeso->Text = $this->objFichasCopy->Peso;
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
			$this->txtCapacidadBaul->Text = $this->objFichasCopy->CapacidadBaul;
			$this->txtCapacidadBaul->MaxLength = FichasCopy::CapacidadBaulMaxLength;
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
			$this->lblCapacidadBaul->Text = $this->objFichasCopy->CapacidadBaul;
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
			$this->txtCapacidadTanque->Text = $this->objFichasCopy->CapacidadTanque;
			$this->txtCapacidadTanque->MaxLength = FichasCopy::CapacidadTanqueMaxLength;
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
			$this->lblCapacidadTanque->Text = $this->objFichasCopy->CapacidadTanque;
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
			$this->txtCapacidadCarga->Text = $this->objFichasCopy->CapacidadCarga;
			$this->txtCapacidadCarga->MaxLength = FichasCopy::CapacidadCargaMaxLength;
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
			$this->lblCapacidadCarga->Text = $this->objFichasCopy->CapacidadCarga;
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
			$this->txtFrenosDelanteros->Text = $this->objFichasCopy->FrenosDelanteros;
			$this->txtFrenosDelanteros->MaxLength = FichasCopy::FrenosDelanterosMaxLength;
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
			$this->lblFrenosDelanteros->Text = $this->objFichasCopy->FrenosDelanteros;
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
			$this->txtFrenosTraseros->Text = $this->objFichasCopy->FrenosTraseros;
			$this->txtFrenosTraseros->MaxLength = FichasCopy::FrenosTraserosMaxLength;
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
			$this->lblFrenosTraseros->Text = $this->objFichasCopy->FrenosTraseros;
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
			$this->txtNeumaticos->Text = $this->objFichasCopy->Neumaticos;
			$this->txtNeumaticos->MaxLength = FichasCopy::NeumaticosMaxLength;
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
			$this->lblNeumaticos->Text = $this->objFichasCopy->Neumaticos;
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
			$this->txtSuspensionDelantera->Text = $this->objFichasCopy->SuspensionDelantera;
			$this->txtSuspensionDelantera->MaxLength = FichasCopy::SuspensionDelanteraMaxLength;
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
			$this->lblSuspensionDelantera->Text = $this->objFichasCopy->SuspensionDelantera;
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
			$this->txtSuspensionTrasera->Text = $this->objFichasCopy->SuspensionTrasera;
			$this->txtSuspensionTrasera->MaxLength = FichasCopy::SuspensionTraseraMaxLength;
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
			$this->lblSuspensionTrasera->Text = $this->objFichasCopy->SuspensionTrasera;
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
			$this->txtIdEstado->Text = $this->objFichasCopy->IdEstado;
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
			$this->lblIdEstado->Text = $this->objFichasCopy->IdEstado;
			$this->lblIdEstado->Required = true;
			$this->lblIdEstado->Format = $strFormat;
			return $this->lblIdEstado;
		}



		/**
		 * Refresh this MetaControl with Data from the local FichasCopy object.
		 * @param boolean $blnReload reload FichasCopy from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFichasCopy->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objFichasCopy->Id;

			if ($this->txtIdMarca) $this->txtIdMarca->Text = $this->objFichasCopy->IdMarca;
			if ($this->lblIdMarca) $this->lblIdMarca->Text = $this->objFichasCopy->IdMarca;

			if ($this->txtIdTipos) $this->txtIdTipos->Text = $this->objFichasCopy->IdTipos;
			if ($this->lblIdTipos) $this->lblIdTipos->Text = $this->objFichasCopy->IdTipos;

			if ($this->txtIdModelo) $this->txtIdModelo->Text = $this->objFichasCopy->IdModelo;
			if ($this->lblIdModelo) $this->lblIdModelo->Text = $this->objFichasCopy->IdModelo;

			if ($this->txtIdVersion) $this->txtIdVersion->Text = $this->objFichasCopy->IdVersion;
			if ($this->lblIdVersion) $this->lblIdVersion->Text = $this->objFichasCopy->IdVersion;

			if ($this->txtDescripcion) $this->txtDescripcion->Text = $this->objFichasCopy->Descripcion;
			if ($this->lblDescripcion) $this->lblDescripcion->Text = $this->objFichasCopy->Descripcion;

			if ($this->txtPrecio) $this->txtPrecio->Text = $this->objFichasCopy->Precio;
			if ($this->lblPrecio) $this->lblPrecio->Text = $this->objFichasCopy->Precio;

			if ($this->txtCombustible) $this->txtCombustible->Text = $this->objFichasCopy->Combustible;
			if ($this->lblCombustible) $this->lblCombustible->Text = $this->objFichasCopy->Combustible;

			if ($this->txtCilindrada) $this->txtCilindrada->Text = $this->objFichasCopy->Cilindrada;
			if ($this->lblCilindrada) $this->lblCilindrada->Text = $this->objFichasCopy->Cilindrada;

			if ($this->txtCilindros) $this->txtCilindros->Text = $this->objFichasCopy->Cilindros;
			if ($this->lblCilindros) $this->lblCilindros->Text = $this->objFichasCopy->Cilindros;

			if ($this->txtPotenciaMaxima) $this->txtPotenciaMaxima->Text = $this->objFichasCopy->PotenciaMaxima;
			if ($this->lblPotenciaMaxima) $this->lblPotenciaMaxima->Text = $this->objFichasCopy->PotenciaMaxima;

			if ($this->txtParMotorTorque) $this->txtParMotorTorque->Text = $this->objFichasCopy->ParMotorTorque;
			if ($this->lblParMotorTorque) $this->lblParMotorTorque->Text = $this->objFichasCopy->ParMotorTorque;

			if ($this->txtPosicion) $this->txtPosicion->Text = $this->objFichasCopy->Posicion;
			if ($this->lblPosicion) $this->lblPosicion->Text = $this->objFichasCopy->Posicion;

			if ($this->txtAlimentacion) $this->txtAlimentacion->Text = $this->objFichasCopy->Alimentacion;
			if ($this->lblAlimentacion) $this->lblAlimentacion->Text = $this->objFichasCopy->Alimentacion;

			if ($this->txtValvulas) $this->txtValvulas->Text = $this->objFichasCopy->Valvulas;
			if ($this->lblValvulas) $this->lblValvulas->Text = $this->objFichasCopy->Valvulas;

			if ($this->txtTipo) $this->txtTipo->Text = $this->objFichasCopy->Tipo;
			if ($this->lblTipo) $this->lblTipo->Text = $this->objFichasCopy->Tipo;

			if ($this->txtMarchas) $this->txtMarchas->Text = $this->objFichasCopy->Marchas;
			if ($this->lblMarchas) $this->lblMarchas->Text = $this->objFichasCopy->Marchas;

			if ($this->txtTraccion) $this->txtTraccion->Text = $this->objFichasCopy->Traccion;
			if ($this->lblTraccion) $this->lblTraccion->Text = $this->objFichasCopy->Traccion;

			if ($this->txtVelocidadMaxima) $this->txtVelocidadMaxima->Text = $this->objFichasCopy->VelocidadMaxima;
			if ($this->lblVelocidadMaxima) $this->lblVelocidadMaxima->Text = $this->objFichasCopy->VelocidadMaxima;

			if ($this->txtAceleracion0100) $this->txtAceleracion0100->Text = $this->objFichasCopy->Aceleracion0100;
			if ($this->lblAceleracion0100) $this->lblAceleracion0100->Text = $this->objFichasCopy->Aceleracion0100;

			if ($this->txtConsumoUrbano) $this->txtConsumoUrbano->Text = $this->objFichasCopy->ConsumoUrbano;
			if ($this->lblConsumoUrbano) $this->lblConsumoUrbano->Text = $this->objFichasCopy->ConsumoUrbano;

			if ($this->txtConsumoInterurbano) $this->txtConsumoInterurbano->Text = $this->objFichasCopy->ConsumoInterurbano;
			if ($this->lblConsumoInterurbano) $this->lblConsumoInterurbano->Text = $this->objFichasCopy->ConsumoInterurbano;

			if ($this->txtConsumoMixto) $this->txtConsumoMixto->Text = $this->objFichasCopy->ConsumoMixto;
			if ($this->lblConsumoMixto) $this->lblConsumoMixto->Text = $this->objFichasCopy->ConsumoMixto;

			if ($this->txtPuertas) $this->txtPuertas->Text = $this->objFichasCopy->Puertas;
			if ($this->lblPuertas) $this->lblPuertas->Text = $this->objFichasCopy->Puertas;

			if ($this->txtPlazas) $this->txtPlazas->Text = $this->objFichasCopy->Plazas;
			if ($this->lblPlazas) $this->lblPlazas->Text = $this->objFichasCopy->Plazas;

			if ($this->txtFilasDeAsientos) $this->txtFilasDeAsientos->Text = $this->objFichasCopy->FilasDeAsientos;
			if ($this->lblFilasDeAsientos) $this->lblFilasDeAsientos->Text = $this->objFichasCopy->FilasDeAsientos;

			if ($this->txtInfoEjes) $this->txtInfoEjes->Text = $this->objFichasCopy->InfoEjes;
			if ($this->lblInfoEjes) $this->lblInfoEjes->Text = $this->objFichasCopy->InfoEjes;

			if ($this->txtPeso) $this->txtPeso->Text = $this->objFichasCopy->Peso;
			if ($this->lblPeso) $this->lblPeso->Text = $this->objFichasCopy->Peso;

			if ($this->txtCapacidadBaul) $this->txtCapacidadBaul->Text = $this->objFichasCopy->CapacidadBaul;
			if ($this->lblCapacidadBaul) $this->lblCapacidadBaul->Text = $this->objFichasCopy->CapacidadBaul;

			if ($this->txtCapacidadTanque) $this->txtCapacidadTanque->Text = $this->objFichasCopy->CapacidadTanque;
			if ($this->lblCapacidadTanque) $this->lblCapacidadTanque->Text = $this->objFichasCopy->CapacidadTanque;

			if ($this->txtCapacidadCarga) $this->txtCapacidadCarga->Text = $this->objFichasCopy->CapacidadCarga;
			if ($this->lblCapacidadCarga) $this->lblCapacidadCarga->Text = $this->objFichasCopy->CapacidadCarga;

			if ($this->txtFrenosDelanteros) $this->txtFrenosDelanteros->Text = $this->objFichasCopy->FrenosDelanteros;
			if ($this->lblFrenosDelanteros) $this->lblFrenosDelanteros->Text = $this->objFichasCopy->FrenosDelanteros;

			if ($this->txtFrenosTraseros) $this->txtFrenosTraseros->Text = $this->objFichasCopy->FrenosTraseros;
			if ($this->lblFrenosTraseros) $this->lblFrenosTraseros->Text = $this->objFichasCopy->FrenosTraseros;

			if ($this->txtNeumaticos) $this->txtNeumaticos->Text = $this->objFichasCopy->Neumaticos;
			if ($this->lblNeumaticos) $this->lblNeumaticos->Text = $this->objFichasCopy->Neumaticos;

			if ($this->txtSuspensionDelantera) $this->txtSuspensionDelantera->Text = $this->objFichasCopy->SuspensionDelantera;
			if ($this->lblSuspensionDelantera) $this->lblSuspensionDelantera->Text = $this->objFichasCopy->SuspensionDelantera;

			if ($this->txtSuspensionTrasera) $this->txtSuspensionTrasera->Text = $this->objFichasCopy->SuspensionTrasera;
			if ($this->lblSuspensionTrasera) $this->lblSuspensionTrasera->Text = $this->objFichasCopy->SuspensionTrasera;

			if ($this->txtIdEstado) $this->txtIdEstado->Text = $this->objFichasCopy->IdEstado;
			if ($this->lblIdEstado) $this->lblIdEstado->Text = $this->objFichasCopy->IdEstado;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FICHASCOPY OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FichasCopy instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFichasCopy() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtIdMarca) $this->objFichasCopy->IdMarca = $this->txtIdMarca->Text;
				if ($this->txtIdTipos) $this->objFichasCopy->IdTipos = $this->txtIdTipos->Text;
				if ($this->txtIdModelo) $this->objFichasCopy->IdModelo = $this->txtIdModelo->Text;
				if ($this->txtIdVersion) $this->objFichasCopy->IdVersion = $this->txtIdVersion->Text;
				if ($this->txtDescripcion) $this->objFichasCopy->Descripcion = $this->txtDescripcion->Text;
				if ($this->txtPrecio) $this->objFichasCopy->Precio = $this->txtPrecio->Text;
				if ($this->txtCombustible) $this->objFichasCopy->Combustible = $this->txtCombustible->Text;
				if ($this->txtCilindrada) $this->objFichasCopy->Cilindrada = $this->txtCilindrada->Text;
				if ($this->txtCilindros) $this->objFichasCopy->Cilindros = $this->txtCilindros->Text;
				if ($this->txtPotenciaMaxima) $this->objFichasCopy->PotenciaMaxima = $this->txtPotenciaMaxima->Text;
				if ($this->txtParMotorTorque) $this->objFichasCopy->ParMotorTorque = $this->txtParMotorTorque->Text;
				if ($this->txtPosicion) $this->objFichasCopy->Posicion = $this->txtPosicion->Text;
				if ($this->txtAlimentacion) $this->objFichasCopy->Alimentacion = $this->txtAlimentacion->Text;
				if ($this->txtValvulas) $this->objFichasCopy->Valvulas = $this->txtValvulas->Text;
				if ($this->txtTipo) $this->objFichasCopy->Tipo = $this->txtTipo->Text;
				if ($this->txtMarchas) $this->objFichasCopy->Marchas = $this->txtMarchas->Text;
				if ($this->txtTraccion) $this->objFichasCopy->Traccion = $this->txtTraccion->Text;
				if ($this->txtVelocidadMaxima) $this->objFichasCopy->VelocidadMaxima = $this->txtVelocidadMaxima->Text;
				if ($this->txtAceleracion0100) $this->objFichasCopy->Aceleracion0100 = $this->txtAceleracion0100->Text;
				if ($this->txtConsumoUrbano) $this->objFichasCopy->ConsumoUrbano = $this->txtConsumoUrbano->Text;
				if ($this->txtConsumoInterurbano) $this->objFichasCopy->ConsumoInterurbano = $this->txtConsumoInterurbano->Text;
				if ($this->txtConsumoMixto) $this->objFichasCopy->ConsumoMixto = $this->txtConsumoMixto->Text;
				if ($this->txtPuertas) $this->objFichasCopy->Puertas = $this->txtPuertas->Text;
				if ($this->txtPlazas) $this->objFichasCopy->Plazas = $this->txtPlazas->Text;
				if ($this->txtFilasDeAsientos) $this->objFichasCopy->FilasDeAsientos = $this->txtFilasDeAsientos->Text;
				if ($this->txtInfoEjes) $this->objFichasCopy->InfoEjes = $this->txtInfoEjes->Text;
				if ($this->txtPeso) $this->objFichasCopy->Peso = $this->txtPeso->Text;
				if ($this->txtCapacidadBaul) $this->objFichasCopy->CapacidadBaul = $this->txtCapacidadBaul->Text;
				if ($this->txtCapacidadTanque) $this->objFichasCopy->CapacidadTanque = $this->txtCapacidadTanque->Text;
				if ($this->txtCapacidadCarga) $this->objFichasCopy->CapacidadCarga = $this->txtCapacidadCarga->Text;
				if ($this->txtFrenosDelanteros) $this->objFichasCopy->FrenosDelanteros = $this->txtFrenosDelanteros->Text;
				if ($this->txtFrenosTraseros) $this->objFichasCopy->FrenosTraseros = $this->txtFrenosTraseros->Text;
				if ($this->txtNeumaticos) $this->objFichasCopy->Neumaticos = $this->txtNeumaticos->Text;
				if ($this->txtSuspensionDelantera) $this->objFichasCopy->SuspensionDelantera = $this->txtSuspensionDelantera->Text;
				if ($this->txtSuspensionTrasera) $this->objFichasCopy->SuspensionTrasera = $this->txtSuspensionTrasera->Text;
				if ($this->txtIdEstado) $this->objFichasCopy->IdEstado = $this->txtIdEstado->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FichasCopy object
				$this->objFichasCopy->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FichasCopy instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFichasCopy() {
			$this->objFichasCopy->Delete();
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
				case 'FichasCopy': return $this->objFichasCopy;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FichasCopy fields -- will be created dynamically if not yet created
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
					// Controls that point to FichasCopy fields
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