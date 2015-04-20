<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NotasPaises class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NotasPaises object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NotasPaisesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read NotasPaises $NotasPaises the actual NotasPaises data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $IdNotaControl
	 * property-read QLabel $IdNotaLabel
	 * property QListBox $IdPaisControl
	 * property-read QLabel $IdPaisLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NotasPaisesMetaControlGen extends QBaseClass {
		// General Variables
		protected $objNotasPaises;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of NotasPaises's individual data fields
		protected $lblId;
		protected $txtIdNota;
		protected $lstIdPaisObject;

		// Controls that allow the viewing of NotasPaises's individual data fields
		protected $lblIdNota;
		protected $lblIdPais;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NotasPaisesMetaControl to edit a single NotasPaises object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NotasPaises object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasPaisesMetaControl
		 * @param NotasPaises $objNotasPaises new or existing NotasPaises object
		 */
		 public function __construct($objParentObject, NotasPaises $objNotasPaises) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NotasPaisesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NotasPaises object
			$this->objNotasPaises = $objNotasPaises;

			// Figure out if we're Editing or Creating New
			if ($this->objNotasPaises->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasPaisesMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NotasPaises object creation - defaults to CreateOrEdit
 		 * @return NotasPaisesMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objNotasPaises = NotasPaises::Load($intId);

				// NotasPaises was found -- return it!
				if ($objNotasPaises)
					return new NotasPaisesMetaControl($objParentObject, $objNotasPaises);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NotasPaises object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NotasPaisesMetaControl($objParentObject, new NotasPaises());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasPaisesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NotasPaises object creation - defaults to CreateOrEdit
		 * @return NotasPaisesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return NotasPaisesMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasPaisesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NotasPaises object creation - defaults to CreateOrEdit
		 * @return NotasPaisesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return NotasPaisesMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objNotasPaises->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdNota
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdNota_Create($strControlId = null) {
			$this->txtIdNota = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdNota->Name = QApplication::Translate('Id Nota');
			$this->txtIdNota->Text = $this->objNotasPaises->IdNota;
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
			$this->lblIdNota->Text = $this->objNotasPaises->IdNota;
			$this->lblIdNota->Required = true;
			$this->lblIdNota->Format = $strFormat;
			return $this->lblIdNota;
		}

		/**
		 * Create and setup QListBox lstIdPaisObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstIdPaisObject_Create($strControlId = null) {
			$this->lstIdPaisObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdPaisObject->Name = QApplication::Translate('Id Pais Object');
			$this->lstIdPaisObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdPaisObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objIdPaisObjectArray = Paises::LoadAll();
			if ($objIdPaisObjectArray) foreach ($objIdPaisObjectArray as $objIdPaisObject) {
				$objListItem = new QListItem($objIdPaisObject->__toString(), $objIdPaisObject->Id);
				if (($this->objNotasPaises->IdPaisObject) && ($this->objNotasPaises->IdPaisObject->Id == $objIdPaisObject->Id))
					$objListItem->Selected = true;
				$this->lstIdPaisObject->AddItem($objListItem);
			}
			return $this->lstIdPaisObject;
		}

		/**
		 * Create and setup QLabel lblIdPais
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdPais_Create($strControlId = null) {
			$this->lblIdPais = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdPais->Name = QApplication::Translate('Id Pais Object');
			$this->lblIdPais->Text = ($this->objNotasPaises->IdPaisObject) ? $this->objNotasPaises->IdPaisObject->__toString() : null;
			$this->lblIdPais->Required = true;
			return $this->lblIdPais;
		}



		/**
		 * Refresh this MetaControl with Data from the local NotasPaises object.
		 * @param boolean $blnReload reload NotasPaises from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNotasPaises->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objNotasPaises->Id;

			if ($this->txtIdNota) $this->txtIdNota->Text = $this->objNotasPaises->IdNota;
			if ($this->lblIdNota) $this->lblIdNota->Text = $this->objNotasPaises->IdNota;

			if ($this->lstIdPaisObject) {
					$this->lstIdPaisObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdPaisObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdPaisObjectArray = Paises::LoadAll();
				if ($objIdPaisObjectArray) foreach ($objIdPaisObjectArray as $objIdPaisObject) {
					$objListItem = new QListItem($objIdPaisObject->__toString(), $objIdPaisObject->Id);
					if (($this->objNotasPaises->IdPaisObject) && ($this->objNotasPaises->IdPaisObject->Id == $objIdPaisObject->Id))
						$objListItem->Selected = true;
					$this->lstIdPaisObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdPais) $this->lblIdPais->Text = ($this->objNotasPaises->IdPaisObject) ? $this->objNotasPaises->IdPaisObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NOTASPAISES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NotasPaises instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNotasPaises() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtIdNota) $this->objNotasPaises->IdNota = $this->txtIdNota->Text;
				if ($this->lstIdPaisObject) $this->objNotasPaises->IdPais = $this->lstIdPaisObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NotasPaises object
				$this->objNotasPaises->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NotasPaises instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNotasPaises() {
			$this->objNotasPaises->Delete();
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
				case 'NotasPaises': return $this->objNotasPaises;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NotasPaises fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdNotaControl':
					if (!$this->txtIdNota) return $this->txtIdNota_Create();
					return $this->txtIdNota;
				case 'IdNotaLabel':
					if (!$this->lblIdNota) return $this->lblIdNota_Create();
					return $this->lblIdNota;
				case 'IdPaisControl':
					if (!$this->lstIdPaisObject) return $this->lstIdPaisObject_Create();
					return $this->lstIdPaisObject;
				case 'IdPaisLabel':
					if (!$this->lblIdPais) return $this->lblIdPais_Create();
					return $this->lblIdPais;
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
					// Controls that point to NotasPaises fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'IdNotaControl':
						return ($this->txtIdNota = QType::Cast($mixValue, 'QControl'));
					case 'IdPaisControl':
						return ($this->lstIdPaisObject = QType::Cast($mixValue, 'QControl'));
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