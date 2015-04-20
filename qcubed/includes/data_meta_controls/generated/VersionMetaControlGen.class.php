<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Version class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Version object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a VersionMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Version $Version the actual Version data class being edited
	 * property QLabel $IdVersionControl
	 * property-read QLabel $IdVersionLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QListBox $IdModeloControl
	 * property-read QLabel $IdModeloLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class VersionMetaControlGen extends QBaseClass {
		// General Variables
		protected $objVersion;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Version's individual data fields
		protected $lblIdVersion;
		protected $txtNombre;
		protected $lstIdModeloObject;

		// Controls that allow the viewing of Version's individual data fields
		protected $lblNombre;
		protected $lblIdModelo;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * VersionMetaControl to edit a single Version object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Version object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this VersionMetaControl
		 * @param Version $objVersion new or existing Version object
		 */
		 public function __construct($objParentObject, Version $objVersion) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this VersionMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Version object
			$this->objVersion = $objVersion;

			// Figure out if we're Editing or Creating New
			if ($this->objVersion->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this VersionMetaControl
		 * @param integer $intIdVersion primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Version object creation - defaults to CreateOrEdit
 		 * @return VersionMetaControl
		 */
		public static function Create($objParentObject, $intIdVersion = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdVersion)) {
				$objVersion = Version::Load($intIdVersion);

				// Version was found -- return it!
				if ($objVersion)
					return new VersionMetaControl($objParentObject, $objVersion);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Version object with PK arguments: ' . $intIdVersion);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new VersionMetaControl($objParentObject, new Version());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this VersionMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Version object creation - defaults to CreateOrEdit
		 * @return VersionMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdVersion = QApplication::PathInfo(0);
			return VersionMetaControl::Create($objParentObject, $intIdVersion, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this VersionMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Version object creation - defaults to CreateOrEdit
		 * @return VersionMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdVersion = QApplication::QueryString('intIdVersion');
			return VersionMetaControl::Create($objParentObject, $intIdVersion, $intCreateType);
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
				$this->lblIdVersion->Text = $this->objVersion->IdVersion;
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
			$this->txtNombre->Text = $this->objVersion->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Version::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objVersion->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QListBox lstIdModeloObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstIdModeloObject_Create($strControlId = null) {
			$this->lstIdModeloObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdModeloObject->Name = QApplication::Translate('Id Modelo Object');
			$this->lstIdModeloObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdModeloObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objIdModeloObjectArray = Modelo::LoadAll();
			if ($objIdModeloObjectArray) foreach ($objIdModeloObjectArray as $objIdModeloObject) {
				$objListItem = new QListItem($objIdModeloObject->__toString(), $objIdModeloObject->IdModelo);
				if (($this->objVersion->IdModeloObject) && ($this->objVersion->IdModeloObject->IdModelo == $objIdModeloObject->IdModelo))
					$objListItem->Selected = true;
				$this->lstIdModeloObject->AddItem($objListItem);
			}
			return $this->lstIdModeloObject;
		}

		/**
		 * Create and setup QLabel lblIdModelo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdModelo_Create($strControlId = null) {
			$this->lblIdModelo = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdModelo->Name = QApplication::Translate('Id Modelo Object');
			$this->lblIdModelo->Text = ($this->objVersion->IdModeloObject) ? $this->objVersion->IdModeloObject->__toString() : null;
			$this->lblIdModelo->Required = true;
			return $this->lblIdModelo;
		}



		/**
		 * Refresh this MetaControl with Data from the local Version object.
		 * @param boolean $blnReload reload Version from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objVersion->Reload();

			if ($this->lblIdVersion) if ($this->blnEditMode) $this->lblIdVersion->Text = $this->objVersion->IdVersion;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objVersion->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objVersion->Nombre;

			if ($this->lstIdModeloObject) {
					$this->lstIdModeloObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdModeloObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdModeloObjectArray = Modelo::LoadAll();
				if ($objIdModeloObjectArray) foreach ($objIdModeloObjectArray as $objIdModeloObject) {
					$objListItem = new QListItem($objIdModeloObject->__toString(), $objIdModeloObject->IdModelo);
					if (($this->objVersion->IdModeloObject) && ($this->objVersion->IdModeloObject->IdModelo == $objIdModeloObject->IdModelo))
						$objListItem->Selected = true;
					$this->lstIdModeloObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdModelo) $this->lblIdModelo->Text = ($this->objVersion->IdModeloObject) ? $this->objVersion->IdModeloObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC VERSION OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Version instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveVersion() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objVersion->Nombre = $this->txtNombre->Text;
				if ($this->lstIdModeloObject) $this->objVersion->IdModelo = $this->lstIdModeloObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Version object
				$this->objVersion->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Version instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteVersion() {
			$this->objVersion->Delete();
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
				case 'Version': return $this->objVersion;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Version fields -- will be created dynamically if not yet created
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
					if (!$this->lstIdModeloObject) return $this->lstIdModeloObject_Create();
					return $this->lstIdModeloObject;
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
					// Controls that point to Version fields
					case 'IdVersionControl':
						return ($this->lblIdVersion = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'IdModeloControl':
						return ($this->lstIdModeloObject = QType::Cast($mixValue, 'QControl'));
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