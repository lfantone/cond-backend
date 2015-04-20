<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Autores class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Autores object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AutoresMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Autores $Autores the actual Autores data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QTextBox $EmailControl
	 * property-read QLabel $EmailLabel
	 * property QTextBox $PasswordControl
	 * property-read QLabel $PasswordLabel
	 * property QIntegerTextBox $IdGrupoControl
	 * property-read QLabel $IdGrupoLabel
	 * property QCheckBox $SuperadminControl
	 * property-read QLabel $SuperadminLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class AutoresMetaControlGen extends QBaseClass {
		// General Variables
		protected $objAutores;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Autores's individual data fields
		protected $lblId;
		protected $txtNombre;
		protected $txtEmail;
		protected $txtPassword;
		protected $txtIdGrupo;
		protected $chkSuperadmin;

		// Controls that allow the viewing of Autores's individual data fields
		protected $lblNombre;
		protected $lblEmail;
		protected $lblPassword;
		protected $lblIdGrupo;
		protected $lblSuperadmin;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * AutoresMetaControl to edit a single Autores object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Autores object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AutoresMetaControl
		 * @param Autores $objAutores new or existing Autores object
		 */
		 public function __construct($objParentObject, Autores $objAutores) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this AutoresMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Autores object
			$this->objAutores = $objAutores;

			// Figure out if we're Editing or Creating New
			if ($this->objAutores->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this AutoresMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Autores object creation - defaults to CreateOrEdit
 		 * @return AutoresMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objAutores = Autores::Load($intId);

				// Autores was found -- return it!
				if ($objAutores)
					return new AutoresMetaControl($objParentObject, $objAutores);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Autores object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new AutoresMetaControl($objParentObject, new Autores());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AutoresMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Autores object creation - defaults to CreateOrEdit
		 * @return AutoresMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return AutoresMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AutoresMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Autores object creation - defaults to CreateOrEdit
		 * @return AutoresMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return AutoresMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objAutores->Id;
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
			$this->txtNombre->Text = $this->objAutores->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Autores::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objAutores->Nombre;
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
			$this->txtEmail->Text = $this->objAutores->Email;
			$this->txtEmail->Required = true;
			$this->txtEmail->MaxLength = Autores::EmailMaxLength;
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
			$this->lblEmail->Text = $this->objAutores->Email;
			$this->lblEmail->Required = true;
			return $this->lblEmail;
		}

		/**
		 * Create and setup QTextBox txtPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPassword_Create($strControlId = null) {
			$this->txtPassword = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPassword->Name = QApplication::Translate('Password');
			$this->txtPassword->Text = $this->objAutores->Password;
			$this->txtPassword->Required = true;
			$this->txtPassword->MaxLength = Autores::PasswordMaxLength;
			return $this->txtPassword;
		}

		/**
		 * Create and setup QLabel lblPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPassword_Create($strControlId = null) {
			$this->lblPassword = new QLabel($this->objParentObject, $strControlId);
			$this->lblPassword->Name = QApplication::Translate('Password');
			$this->lblPassword->Text = $this->objAutores->Password;
			$this->lblPassword->Required = true;
			return $this->lblPassword;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdGrupo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdGrupo_Create($strControlId = null) {
			$this->txtIdGrupo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdGrupo->Name = QApplication::Translate('Id Grupo');
			$this->txtIdGrupo->Text = $this->objAutores->IdGrupo;
			$this->txtIdGrupo->Required = true;
			return $this->txtIdGrupo;
		}

		/**
		 * Create and setup QLabel lblIdGrupo
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdGrupo_Create($strControlId = null, $strFormat = null) {
			$this->lblIdGrupo = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdGrupo->Name = QApplication::Translate('Id Grupo');
			$this->lblIdGrupo->Text = $this->objAutores->IdGrupo;
			$this->lblIdGrupo->Required = true;
			$this->lblIdGrupo->Format = $strFormat;
			return $this->lblIdGrupo;
		}

		/**
		 * Create and setup QCheckBox chkSuperadmin
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkSuperadmin_Create($strControlId = null) {
			$this->chkSuperadmin = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkSuperadmin->Name = QApplication::Translate('Superadmin');
			$this->chkSuperadmin->Checked = $this->objAutores->Superadmin;
			return $this->chkSuperadmin;
		}

		/**
		 * Create and setup QLabel lblSuperadmin
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSuperadmin_Create($strControlId = null) {
			$this->lblSuperadmin = new QLabel($this->objParentObject, $strControlId);
			$this->lblSuperadmin->Name = QApplication::Translate('Superadmin');
			$this->lblSuperadmin->Text = ($this->objAutores->Superadmin) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblSuperadmin;
		}



		/**
		 * Refresh this MetaControl with Data from the local Autores object.
		 * @param boolean $blnReload reload Autores from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objAutores->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objAutores->Id;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objAutores->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objAutores->Nombre;

			if ($this->txtEmail) $this->txtEmail->Text = $this->objAutores->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objAutores->Email;

			if ($this->txtPassword) $this->txtPassword->Text = $this->objAutores->Password;
			if ($this->lblPassword) $this->lblPassword->Text = $this->objAutores->Password;

			if ($this->txtIdGrupo) $this->txtIdGrupo->Text = $this->objAutores->IdGrupo;
			if ($this->lblIdGrupo) $this->lblIdGrupo->Text = $this->objAutores->IdGrupo;

			if ($this->chkSuperadmin) $this->chkSuperadmin->Checked = $this->objAutores->Superadmin;
			if ($this->lblSuperadmin) $this->lblSuperadmin->Text = ($this->objAutores->Superadmin) ? QApplication::Translate('Yes') : QApplication::Translate('No');

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC AUTORES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Autores instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAutores() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objAutores->Nombre = $this->txtNombre->Text;
				if ($this->txtEmail) $this->objAutores->Email = $this->txtEmail->Text;
				if ($this->txtPassword) $this->objAutores->Password = $this->txtPassword->Text;
				if ($this->txtIdGrupo) $this->objAutores->IdGrupo = $this->txtIdGrupo->Text;
				if ($this->chkSuperadmin) $this->objAutores->Superadmin = $this->chkSuperadmin->Checked;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Autores object
				$this->objAutores->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Autores instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteAutores() {
			$this->objAutores->Delete();
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
				case 'Autores': return $this->objAutores;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Autores fields -- will be created dynamically if not yet created
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
				case 'PasswordControl':
					if (!$this->txtPassword) return $this->txtPassword_Create();
					return $this->txtPassword;
				case 'PasswordLabel':
					if (!$this->lblPassword) return $this->lblPassword_Create();
					return $this->lblPassword;
				case 'IdGrupoControl':
					if (!$this->txtIdGrupo) return $this->txtIdGrupo_Create();
					return $this->txtIdGrupo;
				case 'IdGrupoLabel':
					if (!$this->lblIdGrupo) return $this->lblIdGrupo_Create();
					return $this->lblIdGrupo;
				case 'SuperadminControl':
					if (!$this->chkSuperadmin) return $this->chkSuperadmin_Create();
					return $this->chkSuperadmin;
				case 'SuperadminLabel':
					if (!$this->lblSuperadmin) return $this->lblSuperadmin_Create();
					return $this->lblSuperadmin;
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
					// Controls that point to Autores fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QControl'));
					case 'PasswordControl':
						return ($this->txtPassword = QType::Cast($mixValue, 'QControl'));
					case 'IdGrupoControl':
						return ($this->txtIdGrupo = QType::Cast($mixValue, 'QControl'));
					case 'SuperadminControl':
						return ($this->chkSuperadmin = QType::Cast($mixValue, 'QControl'));
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