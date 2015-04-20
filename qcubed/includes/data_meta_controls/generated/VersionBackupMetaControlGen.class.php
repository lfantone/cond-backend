<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the VersionBackup class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single VersionBackup object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a VersionBackupMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read VersionBackup $VersionBackup the actual VersionBackup data class being edited
	 * property QLabel $IdVersionControl
	 * property-read QLabel $IdVersionLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QIntegerTextBox $IdModeloControl
	 * property-read QLabel $IdModeloLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class VersionBackupMetaControlGen extends QBaseClass {
		// General Variables
		protected $objVersionBackup;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of VersionBackup's individual data fields
		protected $lblIdVersion;
		protected $txtNombre;
		protected $txtIdModelo;

		// Controls that allow the viewing of VersionBackup's individual data fields
		protected $lblNombre;
		protected $lblIdModelo;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * VersionBackupMetaControl to edit a single VersionBackup object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single VersionBackup object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this VersionBackupMetaControl
		 * @param VersionBackup $objVersionBackup new or existing VersionBackup object
		 */
		 public function __construct($objParentObject, VersionBackup $objVersionBackup) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this VersionBackupMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked VersionBackup object
			$this->objVersionBackup = $objVersionBackup;

			// Figure out if we're Editing or Creating New
			if ($this->objVersionBackup->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this VersionBackupMetaControl
		 * @param integer $intIdVersion primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing VersionBackup object creation - defaults to CreateOrEdit
 		 * @return VersionBackupMetaControl
		 */
		public static function Create($objParentObject, $intIdVersion = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdVersion)) {
				$objVersionBackup = VersionBackup::Load($intIdVersion);

				// VersionBackup was found -- return it!
				if ($objVersionBackup)
					return new VersionBackupMetaControl($objParentObject, $objVersionBackup);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a VersionBackup object with PK arguments: ' . $intIdVersion);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new VersionBackupMetaControl($objParentObject, new VersionBackup());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this VersionBackupMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing VersionBackup object creation - defaults to CreateOrEdit
		 * @return VersionBackupMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdVersion = QApplication::PathInfo(0);
			return VersionBackupMetaControl::Create($objParentObject, $intIdVersion, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this VersionBackupMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing VersionBackup object creation - defaults to CreateOrEdit
		 * @return VersionBackupMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdVersion = QApplication::QueryString('intIdVersion');
			return VersionBackupMetaControl::Create($objParentObject, $intIdVersion, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdVersion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdVersion_Create($strControlId = null) {
			$this->lblIdVersion = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdVersion->Name = QApplication::Translate('Id Version');
			if ($this->blnEditMode)
				$this->lblIdVersion->Text = $this->objVersionBackup->IdVersion;
			else
				$this->lblIdVersion->Text = 'N/A';
			return $this->lblIdVersion;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objVersionBackup->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = VersionBackup::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objVersionBackup->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdModelo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdModelo_Create($strControlId = null) {
			$this->txtIdModelo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdModelo->Name = QApplication::Translate('Id Modelo');
			$this->txtIdModelo->Text = $this->objVersionBackup->IdModelo;
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
			$this->lblIdModelo->Text = $this->objVersionBackup->IdModelo;
			$this->lblIdModelo->Required = true;
			$this->lblIdModelo->Format = $strFormat;
			return $this->lblIdModelo;
		}



		/**
		 * Refresh this MetaControl with Data from the local VersionBackup object.
		 * @param boolean $blnReload reload VersionBackup from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objVersionBackup->Reload();

			if ($this->lblIdVersion) if ($this->blnEditMode) $this->lblIdVersion->Text = $this->objVersionBackup->IdVersion;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objVersionBackup->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objVersionBackup->Nombre;

			if ($this->txtIdModelo) $this->txtIdModelo->Text = $this->objVersionBackup->IdModelo;
			if ($this->lblIdModelo) $this->lblIdModelo->Text = $this->objVersionBackup->IdModelo;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC VERSIONBACKUP OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's VersionBackup instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveVersionBackup() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objVersionBackup->Nombre = $this->txtNombre->Text;
				if ($this->txtIdModelo) $this->objVersionBackup->IdModelo = $this->txtIdModelo->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the VersionBackup object
				$this->objVersionBackup->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's VersionBackup instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteVersionBackup() {
			$this->objVersionBackup->Delete();
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
				case 'VersionBackup': return $this->objVersionBackup;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to VersionBackup fields -- will be created dynamically if not yet created
				case 'IdVersionControl':
					if (!$this->lblIdVersion) return $this->lblIdVersion_Create();
					return $this->lblIdVersion;
				case 'IdVersionLabel':
					if (!$this->lblIdVersion) return $this->lblIdVersion_Create();
					return $this->lblIdVersion;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'IdModeloControl':
					if (!$this->txtIdModelo) return $this->txtIdModelo_Create();
					return $this->txtIdModelo;
				case 'IdModeloLabel':
					if (!$this->lblIdModelo) return $this->lblIdModelo_Create();
					return $this->lblIdModelo;
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
					// Controls that point to VersionBackup fields
					case 'IdVersionControl':
						return ($this->lblIdVersion = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'IdModeloControl':
						return ($this->txtIdModelo = QType::Cast($mixValue, 'QControl'));
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