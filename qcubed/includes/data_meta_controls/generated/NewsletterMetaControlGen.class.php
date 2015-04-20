<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Newsletter class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Newsletter object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NewsletterMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Newsletter $Newsletter the actual Newsletter data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $EmailControl
	 * property-read QLabel $EmailLabel
	 * property QDateTimePicker $FechaControl
	 * property-read QLabel $FechaLabel
	 * property QIntegerTextBox $EstadoControl
	 * property-read QLabel $EstadoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NewsletterMetaControlGen extends QBaseClass {
		// General Variables
		protected $objNewsletter;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Newsletter's individual data fields
		protected $lblId;
		protected $txtEmail;
		protected $calFecha;
		protected $txtEstado;

		// Controls that allow the viewing of Newsletter's individual data fields
		protected $lblEmail;
		protected $lblFecha;
		protected $lblEstado;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NewsletterMetaControl to edit a single Newsletter object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Newsletter object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NewsletterMetaControl
		 * @param Newsletter $objNewsletter new or existing Newsletter object
		 */
		 public function __construct($objParentObject, Newsletter $objNewsletter) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NewsletterMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Newsletter object
			$this->objNewsletter = $objNewsletter;

			// Figure out if we're Editing or Creating New
			if ($this->objNewsletter->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NewsletterMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Newsletter object creation - defaults to CreateOrEdit
 		 * @return NewsletterMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objNewsletter = Newsletter::Load($intId);

				// Newsletter was found -- return it!
				if ($objNewsletter)
					return new NewsletterMetaControl($objParentObject, $objNewsletter);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Newsletter object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NewsletterMetaControl($objParentObject, new Newsletter());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NewsletterMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Newsletter object creation - defaults to CreateOrEdit
		 * @return NewsletterMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return NewsletterMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NewsletterMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Newsletter object creation - defaults to CreateOrEdit
		 * @return NewsletterMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return NewsletterMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objNewsletter->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmail_Create($strControlId = null) {
			$this->txtEmail = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmail->Name = QApplication::Translate('Email');
			$this->txtEmail->Text = $this->objNewsletter->Email;
			$this->txtEmail->Required = true;
			$this->txtEmail->MaxLength = Newsletter::EmailMaxLength;
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
			$this->lblEmail->Text = $this->objNewsletter->Email;
			$this->lblEmail->Required = true;
			return $this->lblEmail;
		}

		/**
		 * Create and setup QDateTimePicker calFecha
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFecha_Create($strControlId = null) {
			$this->calFecha = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFecha->Name = QApplication::Translate('Fecha');
			$this->calFecha->DateTime = $this->objNewsletter->Fecha;
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
			$this->lblFecha->Text = sprintf($this->objNewsletter->Fecha) ? $this->objNewsletter->Fecha->qFormat($this->strFechaDateTimeFormat) : null;
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
			$this->txtEstado->Text = $this->objNewsletter->Estado;
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
			$this->lblEstado->Text = $this->objNewsletter->Estado;
			$this->lblEstado->Required = true;
			$this->lblEstado->Format = $strFormat;
			return $this->lblEstado;
		}



		/**
		 * Refresh this MetaControl with Data from the local Newsletter object.
		 * @param boolean $blnReload reload Newsletter from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNewsletter->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objNewsletter->Id;

			if ($this->txtEmail) $this->txtEmail->Text = $this->objNewsletter->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objNewsletter->Email;

			if ($this->calFecha) $this->calFecha->DateTime = $this->objNewsletter->Fecha;
			if ($this->lblFecha) $this->lblFecha->Text = sprintf($this->objNewsletter->Fecha) ? $this->objNewsletter->Fecha->qFormat($this->strFechaDateTimeFormat) : null;

			if ($this->txtEstado) $this->txtEstado->Text = $this->objNewsletter->Estado;
			if ($this->lblEstado) $this->lblEstado->Text = $this->objNewsletter->Estado;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NEWSLETTER OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Newsletter instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNewsletter() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtEmail) $this->objNewsletter->Email = $this->txtEmail->Text;
				if ($this->calFecha) $this->objNewsletter->Fecha = $this->calFecha->DateTime;
				if ($this->txtEstado) $this->objNewsletter->Estado = $this->txtEstado->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Newsletter object
				$this->objNewsletter->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Newsletter instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNewsletter() {
			$this->objNewsletter->Delete();
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
				case 'Newsletter': return $this->objNewsletter;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Newsletter fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'EmailControl':
					if (!$this->txtEmail) return $this->txtEmail_Create();
					return $this->txtEmail;
				case 'EmailLabel':
					if (!$this->lblEmail) return $this->lblEmail_Create();
					return $this->lblEmail;
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
					// Controls that point to Newsletter fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QControl'));
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