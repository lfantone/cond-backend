<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the ArchivosXml class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single ArchivosXml object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ArchivosXmlMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read ArchivosXml $ArchivosXml the actual ArchivosXml data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $IdEmpresaControl
	 * property-read QLabel $IdEmpresaLabel
	 * property QDateTimePicker $FechaControl
	 * property-read QLabel $FechaLabel
	 * property QIntegerTextBox $EstadoControl
	 * property-read QLabel $EstadoLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ArchivosXmlMetaControlGen extends QBaseClass {
		// General Variables
		protected $objArchivosXml;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of ArchivosXml's individual data fields
		protected $lblId;
		protected $txtIdEmpresa;
		protected $calFecha;
		protected $txtEstado;
		protected $txtNombre;

		// Controls that allow the viewing of ArchivosXml's individual data fields
		protected $lblIdEmpresa;
		protected $lblFecha;
		protected $lblEstado;
		protected $lblNombre;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ArchivosXmlMetaControl to edit a single ArchivosXml object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single ArchivosXml object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ArchivosXmlMetaControl
		 * @param ArchivosXml $objArchivosXml new or existing ArchivosXml object
		 */
		 public function __construct($objParentObject, ArchivosXml $objArchivosXml) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ArchivosXmlMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked ArchivosXml object
			$this->objArchivosXml = $objArchivosXml;

			// Figure out if we're Editing or Creating New
			if ($this->objArchivosXml->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ArchivosXmlMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing ArchivosXml object creation - defaults to CreateOrEdit
 		 * @return ArchivosXmlMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objArchivosXml = ArchivosXml::Load($intId);

				// ArchivosXml was found -- return it!
				if ($objArchivosXml)
					return new ArchivosXmlMetaControl($objParentObject, $objArchivosXml);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a ArchivosXml object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ArchivosXmlMetaControl($objParentObject, new ArchivosXml());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ArchivosXmlMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ArchivosXml object creation - defaults to CreateOrEdit
		 * @return ArchivosXmlMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ArchivosXmlMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ArchivosXmlMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ArchivosXml object creation - defaults to CreateOrEdit
		 * @return ArchivosXmlMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ArchivosXmlMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objArchivosXml->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdEmpresa
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdEmpresa_Create($strControlId = null) {
			$this->txtIdEmpresa = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdEmpresa->Name = QApplication::Translate('Id Empresa');
			$this->txtIdEmpresa->Text = $this->objArchivosXml->IdEmpresa;
			$this->txtIdEmpresa->Required = true;
			return $this->txtIdEmpresa;
		}

		/**
		 * Create and setup QLabel lblIdEmpresa
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdEmpresa_Create($strControlId = null, $strFormat = null) {
			$this->lblIdEmpresa = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdEmpresa->Name = QApplication::Translate('Id Empresa');
			$this->lblIdEmpresa->Text = $this->objArchivosXml->IdEmpresa;
			$this->lblIdEmpresa->Required = true;
			$this->lblIdEmpresa->Format = $strFormat;
			return $this->lblIdEmpresa;
		}

		/**
		 * Create and setup QDateTimePicker calFecha
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFecha_Create($strControlId = null) {
			$this->calFecha = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFecha->Name = QApplication::Translate('Fecha');
			$this->calFecha->DateTime = $this->objArchivosXml->Fecha;
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
			$this->lblFecha->Text = sprintf($this->objArchivosXml->Fecha) ? $this->objArchivosXml->Fecha->qFormat($this->strFechaDateTimeFormat) : null;
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
			$this->txtEstado->Text = $this->objArchivosXml->Estado;
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
			$this->lblEstado->Text = $this->objArchivosXml->Estado;
			$this->lblEstado->Required = true;
			$this->lblEstado->Format = $strFormat;
			return $this->lblEstado;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objArchivosXml->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = ArchivosXml::NombreMaxLength;
			return $this->txtNombre;
		}

		/**
		 * Create and setup QLabel lblNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNombre_Create($strControlId = null) {
			$this->lblNombre = new QLabel($this->objParentObject, $strControlId);
			$this->lblNombre->Name = QApplication::Translate('Nombre');
			$this->lblNombre->Text = $this->objArchivosXml->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}



		/**
		 * Refresh this MetaControl with Data from the local ArchivosXml object.
		 * @param boolean $blnReload reload ArchivosXml from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objArchivosXml->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objArchivosXml->Id;

			if ($this->txtIdEmpresa) $this->txtIdEmpresa->Text = $this->objArchivosXml->IdEmpresa;
			if ($this->lblIdEmpresa) $this->lblIdEmpresa->Text = $this->objArchivosXml->IdEmpresa;

			if ($this->calFecha) $this->calFecha->DateTime = $this->objArchivosXml->Fecha;
			if ($this->lblFecha) $this->lblFecha->Text = sprintf($this->objArchivosXml->Fecha) ? $this->objArchivosXml->Fecha->qFormat($this->strFechaDateTimeFormat) : null;

			if ($this->txtEstado) $this->txtEstado->Text = $this->objArchivosXml->Estado;
			if ($this->lblEstado) $this->lblEstado->Text = $this->objArchivosXml->Estado;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objArchivosXml->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objArchivosXml->Nombre;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ARCHIVOSXML OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's ArchivosXml instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveArchivosXml() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtIdEmpresa) $this->objArchivosXml->IdEmpresa = $this->txtIdEmpresa->Text;
				if ($this->calFecha) $this->objArchivosXml->Fecha = $this->calFecha->DateTime;
				if ($this->txtEstado) $this->objArchivosXml->Estado = $this->txtEstado->Text;
				if ($this->txtNombre) $this->objArchivosXml->Nombre = $this->txtNombre->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the ArchivosXml object
				$this->objArchivosXml->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's ArchivosXml instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteArchivosXml() {
			$this->objArchivosXml->Delete();
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
				case 'ArchivosXml': return $this->objArchivosXml;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to ArchivosXml fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdEmpresaControl':
					if (!$this->txtIdEmpresa) return $this->txtIdEmpresa_Create();
					return $this->txtIdEmpresa;
				case 'IdEmpresaLabel':
					if (!$this->lblIdEmpresa) return $this->lblIdEmpresa_Create();
					return $this->lblIdEmpresa;
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
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
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
					// Controls that point to ArchivosXml fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'IdEmpresaControl':
						return ($this->txtIdEmpresa = QType::Cast($mixValue, 'QControl'));
					case 'FechaControl':
						return ($this->calFecha = QType::Cast($mixValue, 'QControl'));
					case 'EstadoControl':
						return ($this->txtEstado = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
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