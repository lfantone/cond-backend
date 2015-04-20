<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Imagenes class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Imagenes object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ImagenesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Imagenes $Imagenes the actual Imagenes data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $TituloControl
	 * property-read QLabel $TituloLabel
	 * property QDateTimePicker $FechaControl
	 * property-read QLabel $FechaLabel
	 * property QIntegerTextBox $EstadoControl
	 * property-read QLabel $EstadoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ImagenesMetaControlGen extends QBaseClass {
		// General Variables
		protected $objImagenes;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Imagenes's individual data fields
		protected $lblId;
		protected $txtTitulo;
		protected $calFecha;
		protected $txtEstado;

		// Controls that allow the viewing of Imagenes's individual data fields
		protected $lblTitulo;
		protected $lblFecha;
		protected $lblEstado;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ImagenesMetaControl to edit a single Imagenes object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Imagenes object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ImagenesMetaControl
		 * @param Imagenes $objImagenes new or existing Imagenes object
		 */
		 public function __construct($objParentObject, Imagenes $objImagenes) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ImagenesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Imagenes object
			$this->objImagenes = $objImagenes;

			// Figure out if we're Editing or Creating New
			if ($this->objImagenes->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ImagenesMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Imagenes object creation - defaults to CreateOrEdit
 		 * @return ImagenesMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objImagenes = Imagenes::Load($intId);

				// Imagenes was found -- return it!
				if ($objImagenes)
					return new ImagenesMetaControl($objParentObject, $objImagenes);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Imagenes object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ImagenesMetaControl($objParentObject, new Imagenes());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ImagenesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Imagenes object creation - defaults to CreateOrEdit
		 * @return ImagenesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ImagenesMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ImagenesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Imagenes object creation - defaults to CreateOrEdit
		 * @return ImagenesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ImagenesMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objImagenes->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtTitulo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTitulo_Create($strControlId = null) {
			$this->txtTitulo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTitulo->Name = QApplication::Translate('Titulo');
			$this->txtTitulo->Text = $this->objImagenes->Titulo;
			$this->txtTitulo->Required = true;
			$this->txtTitulo->MaxLength = Imagenes::TituloMaxLength;
			return $this->txtTitulo;
		}

		/**
		 * Create and setup QLabel lblTitulo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTitulo_Create($strControlId = null) {
			$this->lblTitulo = new QLabel($this->objParentObject, $strControlId);
			$this->lblTitulo->Name = QApplication::Translate('Titulo');
			$this->lblTitulo->Text = $this->objImagenes->Titulo;
			$this->lblTitulo->Required = true;
			return $this->lblTitulo;
		}

		/**
		 * Create and setup QDateTimePicker calFecha
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFecha_Create($strControlId = null) {
			$this->calFecha = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFecha->Name = QApplication::Translate('Fecha');
			$this->calFecha->DateTime = $this->objImagenes->Fecha;
			$this->calFecha->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calFecha->Required = true;
			return $this->calFecha;
		}

		/**
		 * Create and setup QLabel lblFecha
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFecha_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFecha = new QLabel($this->objParentObject, $strControlId);
			$this->lblFecha->Name = QApplication::Translate('Fecha');
			$this->strFechaDateTimeFormat = $strDateTimeFormat;
			$this->lblFecha->Text = sprintf($this->objImagenes->Fecha) ? $this->objImagenes->Fecha->qFormat($this->strFechaDateTimeFormat) : null;
			$this->lblFecha->Required = true;
			return $this->lblFecha;
		}

		protected $strFechaDateTimeFormat;


		/**
		 * Create and setup QIntegerTextBox txtEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtEstado_Create($strControlId = null) {
			$this->txtEstado = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtEstado->Name = QApplication::Translate('Estado');
			$this->txtEstado->Text = $this->objImagenes->Estado;
			$this->txtEstado->Required = true;
			return $this->txtEstado;
		}

		/**
		 * Create and setup QLabel lblEstado
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblEstado_Create($strControlId = null, $strFormat = null) {
			$this->lblEstado = new QLabel($this->objParentObject, $strControlId);
			$this->lblEstado->Name = QApplication::Translate('Estado');
			$this->lblEstado->Text = $this->objImagenes->Estado;
			$this->lblEstado->Required = true;
			$this->lblEstado->Format = $strFormat;
			return $this->lblEstado;
		}



		/**
		 * Refresh this MetaControl with Data from the local Imagenes object.
		 * @param boolean $blnReload reload Imagenes from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objImagenes->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objImagenes->Id;

			if ($this->txtTitulo) $this->txtTitulo->Text = $this->objImagenes->Titulo;
			if ($this->lblTitulo) $this->lblTitulo->Text = $this->objImagenes->Titulo;

			if ($this->calFecha) $this->calFecha->DateTime = $this->objImagenes->Fecha;
			if ($this->lblFecha) $this->lblFecha->Text = sprintf($this->objImagenes->Fecha) ? $this->objImagenes->Fecha->qFormat($this->strFechaDateTimeFormat) : null;

			if ($this->txtEstado) $this->txtEstado->Text = $this->objImagenes->Estado;
			if ($this->lblEstado) $this->lblEstado->Text = $this->objImagenes->Estado;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC IMAGENES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Imagenes instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveImagenes() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtTitulo) $this->objImagenes->Titulo = $this->txtTitulo->Text;
				if ($this->calFecha) $this->objImagenes->Fecha = $this->calFecha->DateTime;
				if ($this->txtEstado) $this->objImagenes->Estado = $this->txtEstado->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Imagenes object
				$this->objImagenes->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Imagenes instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteImagenes() {
			$this->objImagenes->Delete();
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
				case 'Imagenes': return $this->objImagenes;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Imagenes fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'TituloControl':
					if (!$this->txtTitulo) return $this->txtTitulo_Create();
					return $this->txtTitulo;
				case 'TituloLabel':
					if (!$this->lblTitulo) return $this->lblTitulo_Create();
					return $this->lblTitulo;
				case 'FechaControl':
					if (!$this->calFecha) return $this->calFecha_Create();
					return $this->calFecha;
				case 'FechaLabel':
					if (!$this->lblFecha) return $this->lblFecha_Create();
					return $this->lblFecha;
				case 'EstadoControl':
					if (!$this->txtEstado) return $this->txtEstado_Create();
					return $this->txtEstado;
				case 'EstadoLabel':
					if (!$this->lblEstado) return $this->lblEstado_Create();
					return $this->lblEstado;
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
					// Controls that point to Imagenes fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'TituloControl':
						return ($this->txtTitulo = QType::Cast($mixValue, 'QControl'));
					case 'FechaControl':
						return ($this->calFecha = QType::Cast($mixValue, 'QControl'));
					case 'EstadoControl':
						return ($this->txtEstado = QType::Cast($mixValue, 'QControl'));
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