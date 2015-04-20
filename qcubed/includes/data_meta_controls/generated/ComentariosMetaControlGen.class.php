<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Comentarios class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Comentarios object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ComentariosMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Comentarios $Comentarios the actual Comentarios data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QTextBox $EmailControl
	 * property-read QLabel $EmailLabel
	 * property QTextBox $ComentariosControl
	 * property-read QLabel $ComentariosLabel
	 * property QIntegerTextBox $IdNotaControl
	 * property-read QLabel $IdNotaLabel
	 * property QDateTimePicker $FechaControl
	 * property-read QLabel $FechaLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ComentariosMetaControlGen extends QBaseClass {
		// General Variables
		protected $objComentarios;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Comentarios's individual data fields
		protected $lblId;
		protected $txtNombre;
		protected $txtEmail;
		protected $txtComentarios;
		protected $txtIdNota;
		protected $calFecha;

		// Controls that allow the viewing of Comentarios's individual data fields
		protected $lblNombre;
		protected $lblEmail;
		protected $lblComentarios;
		protected $lblIdNota;
		protected $lblFecha;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ComentariosMetaControl to edit a single Comentarios object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Comentarios object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComentariosMetaControl
		 * @param Comentarios $objComentarios new or existing Comentarios object
		 */
		 public function __construct($objParentObject, Comentarios $objComentarios) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ComentariosMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Comentarios object
			$this->objComentarios = $objComentarios;

			// Figure out if we're Editing or Creating New
			if ($this->objComentarios->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComentariosMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Comentarios object creation - defaults to CreateOrEdit
 		 * @return ComentariosMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objComentarios = Comentarios::Load($intId);

				// Comentarios was found -- return it!
				if ($objComentarios)
					return new ComentariosMetaControl($objParentObject, $objComentarios);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Comentarios object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ComentariosMetaControl($objParentObject, new Comentarios());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComentariosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Comentarios object creation - defaults to CreateOrEdit
		 * @return ComentariosMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ComentariosMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComentariosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Comentarios object creation - defaults to CreateOrEdit
		 * @return ComentariosMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ComentariosMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objComentarios->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objComentarios->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Comentarios::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objComentarios->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QTextBox txtEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmail_Create($strControlId = null) {
			$this->txtEmail = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmail->Name = QApplication::Translate('Email');
			$this->txtEmail->Text = $this->objComentarios->Email;
			$this->txtEmail->Required = true;
			$this->txtEmail->MaxLength = Comentarios::EmailMaxLength;
			return $this->txtEmail;
		}

		/**
		 * Create and setup QLabel lblEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEmail_Create($strControlId = null) {
			$this->lblEmail = new QLabel($this->objParentObject, $strControlId);
			$this->lblEmail->Name = QApplication::Translate('Email');
			$this->lblEmail->Text = $this->objComentarios->Email;
			$this->lblEmail->Required = true;
			return $this->lblEmail;
		}

		/**
		 * Create and setup QTextBox txtComentarios
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtComentarios_Create($strControlId = null) {
			$this->txtComentarios = new QTextBox($this->objParentObject, $strControlId);
			$this->txtComentarios->Name = QApplication::Translate('Comentarios');
			$this->txtComentarios->Text = $this->objComentarios->Comentarios;
			$this->txtComentarios->Required = true;
			$this->txtComentarios->TextMode = QTextMode::MultiLine;
			return $this->txtComentarios;
		}

		/**
		 * Create and setup QLabel lblComentarios
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblComentarios_Create($strControlId = null) {
			$this->lblComentarios = new QLabel($this->objParentObject, $strControlId);
			$this->lblComentarios->Name = QApplication::Translate('Comentarios');
			$this->lblComentarios->Text = $this->objComentarios->Comentarios;
			$this->lblComentarios->Required = true;
			return $this->lblComentarios;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdNota
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdNota_Create($strControlId = null) {
			$this->txtIdNota = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdNota->Name = QApplication::Translate('Id Nota');
			$this->txtIdNota->Text = $this->objComentarios->IdNota;
			$this->txtIdNota->Required = true;
			return $this->txtIdNota;
		}

		/**
		 * Create and setup QLabel lblIdNota
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdNota_Create($strControlId = null, $strFormat = null) {
			$this->lblIdNota = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdNota->Name = QApplication::Translate('Id Nota');
			$this->lblIdNota->Text = $this->objComentarios->IdNota;
			$this->lblIdNota->Required = true;
			$this->lblIdNota->Format = $strFormat;
			return $this->lblIdNota;
		}

		/**
		 * Create and setup QDateTimePicker calFecha
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFecha_Create($strControlId = null) {
			$this->calFecha = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFecha->Name = QApplication::Translate('Fecha');
			$this->calFecha->DateTime = $this->objComentarios->Fecha;
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
			$this->lblFecha->Text = sprintf($this->objComentarios->Fecha) ? $this->objComentarios->Fecha->qFormat($this->strFechaDateTimeFormat) : null;
			$this->lblFecha->Required = true;
			return $this->lblFecha;
		}

		protected $strFechaDateTimeFormat;




		/**
		 * Refresh this MetaControl with Data from the local Comentarios object.
		 * @param boolean $blnReload reload Comentarios from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objComentarios->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objComentarios->Id;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objComentarios->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objComentarios->Nombre;

			if ($this->txtEmail) $this->txtEmail->Text = $this->objComentarios->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objComentarios->Email;

			if ($this->txtComentarios) $this->txtComentarios->Text = $this->objComentarios->Comentarios;
			if ($this->lblComentarios) $this->lblComentarios->Text = $this->objComentarios->Comentarios;

			if ($this->txtIdNota) $this->txtIdNota->Text = $this->objComentarios->IdNota;
			if ($this->lblIdNota) $this->lblIdNota->Text = $this->objComentarios->IdNota;

			if ($this->calFecha) $this->calFecha->DateTime = $this->objComentarios->Fecha;
			if ($this->lblFecha) $this->lblFecha->Text = sprintf($this->objComentarios->Fecha) ? $this->objComentarios->Fecha->qFormat($this->strFechaDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC COMENTARIOS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Comentarios instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveComentarios() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objComentarios->Nombre = $this->txtNombre->Text;
				if ($this->txtEmail) $this->objComentarios->Email = $this->txtEmail->Text;
				if ($this->txtComentarios) $this->objComentarios->Comentarios = $this->txtComentarios->Text;
				if ($this->txtIdNota) $this->objComentarios->IdNota = $this->txtIdNota->Text;
				if ($this->calFecha) $this->objComentarios->Fecha = $this->calFecha->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Comentarios object
				$this->objComentarios->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Comentarios instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteComentarios() {
			$this->objComentarios->Delete();
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
				case 'Comentarios': return $this->objComentarios;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Comentarios fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'EmailControl':
					if (!$this->txtEmail) return $this->txtEmail_Create();
					return $this->txtEmail;
				case 'EmailLabel':
					if (!$this->lblEmail) return $this->lblEmail_Create();
					return $this->lblEmail;
				case 'ComentariosControl':
					if (!$this->txtComentarios) return $this->txtComentarios_Create();
					return $this->txtComentarios;
				case 'ComentariosLabel':
					if (!$this->lblComentarios) return $this->lblComentarios_Create();
					return $this->lblComentarios;
				case 'IdNotaControl':
					if (!$this->txtIdNota) return $this->txtIdNota_Create();
					return $this->txtIdNota;
				case 'IdNotaLabel':
					if (!$this->lblIdNota) return $this->lblIdNota_Create();
					return $this->lblIdNota;
				case 'FechaControl':
					if (!$this->calFecha) return $this->calFecha_Create();
					return $this->calFecha;
				case 'FechaLabel':
					if (!$this->lblFecha) return $this->lblFecha_Create();
					return $this->lblFecha;
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
					// Controls that point to Comentarios fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QControl'));
					case 'ComentariosControl':
						return ($this->txtComentarios = QType::Cast($mixValue, 'QControl'));
					case 'IdNotaControl':
						return ($this->txtIdNota = QType::Cast($mixValue, 'QControl'));
					case 'FechaControl':
						return ($this->calFecha = QType::Cast($mixValue, 'QControl'));
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