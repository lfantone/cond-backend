<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FichasPaises class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FichasPaises object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FichasPaisesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FichasPaises $FichasPaises the actual FichasPaises data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $IdFichaControl
	 * property-read QLabel $IdFichaLabel
	 * property QListBox $IdPaisControl
	 * property-read QLabel $IdPaisLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FichasPaisesMetaControlGen extends QBaseClass {
		// General Variables
		protected $objFichasPaises;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of FichasPaises's individual data fields
		protected $lblId;
		protected $txtIdFicha;
		protected $lstIdPaisObject;

		// Controls that allow the viewing of FichasPaises's individual data fields
		protected $lblIdFicha;
		protected $lblIdPais;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FichasPaisesMetaControl to edit a single FichasPaises object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FichasPaises object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasPaisesMetaControl
		 * @param FichasPaises $objFichasPaises new or existing FichasPaises object
		 */
		 public function __construct($objParentObject, FichasPaises $objFichasPaises) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FichasPaisesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FichasPaises object
			$this->objFichasPaises = $objFichasPaises;

			// Figure out if we're Editing or Creating New
			if ($this->objFichasPaises->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasPaisesMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FichasPaises object creation - defaults to CreateOrEdit
 		 * @return FichasPaisesMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objFichasPaises = FichasPaises::Load($intId);

				// FichasPaises was found -- return it!
				if ($objFichasPaises)
					return new FichasPaisesMetaControl($objParentObject, $objFichasPaises);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FichasPaises object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FichasPaisesMetaControl($objParentObject, new FichasPaises());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasPaisesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasPaises object creation - defaults to CreateOrEdit
		 * @return FichasPaisesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return FichasPaisesMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasPaisesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasPaises object creation - defaults to CreateOrEdit
		 * @return FichasPaisesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return FichasPaisesMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objFichasPaises->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdFicha
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdFicha_Create($strControlId = null) {
			$this->txtIdFicha = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdFicha->Name = QApplication::Translate('Id Ficha');
			$this->txtIdFicha->Text = $this->objFichasPaises->IdFicha;
			$this->txtIdFicha->Required = true;
			return $this->txtIdFicha;
		}

		/**
		 * Create and setup QLabel lblIdFicha
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdFicha_Create($strControlId = null, $strFormat = null) {
			$this->lblIdFicha = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdFicha->Name = QApplication::Translate('Id Ficha');
			$this->lblIdFicha->Text = $this->objFichasPaises->IdFicha;
			$this->lblIdFicha->Required = true;
			$this->lblIdFicha->Format = $strFormat;
			return $this->lblIdFicha;
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
				if (($this->objFichasPaises->IdPaisObject) && ($this->objFichasPaises->IdPaisObject->Id == $objIdPaisObject->Id))
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
			$this->lblIdPais->Text = ($this->objFichasPaises->IdPaisObject) ? $this->objFichasPaises->IdPaisObject->__toString() : null;
			$this->lblIdPais->Required = true;
			return $this->lblIdPais;
		}



		/**
		 * Refresh this MetaControl with Data from the local FichasPaises object.
		 * @param boolean $blnReload reload FichasPaises from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFichasPaises->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objFichasPaises->Id;

			if ($this->txtIdFicha) $this->txtIdFicha->Text = $this->objFichasPaises->IdFicha;
			if ($this->lblIdFicha) $this->lblIdFicha->Text = $this->objFichasPaises->IdFicha;

			if ($this->lstIdPaisObject) {
					$this->lstIdPaisObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdPaisObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdPaisObjectArray = Paises::LoadAll();
				if ($objIdPaisObjectArray) foreach ($objIdPaisObjectArray as $objIdPaisObject) {
					$objListItem = new QListItem($objIdPaisObject->__toString(), $objIdPaisObject->Id);
					if (($this->objFichasPaises->IdPaisObject) && ($this->objFichasPaises->IdPaisObject->Id == $objIdPaisObject->Id))
						$objListItem->Selected = true;
					$this->lstIdPaisObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdPais) $this->lblIdPais->Text = ($this->objFichasPaises->IdPaisObject) ? $this->objFichasPaises->IdPaisObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FICHASPAISES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FichasPaises instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFichasPaises() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtIdFicha) $this->objFichasPaises->IdFicha = $this->txtIdFicha->Text;
				if ($this->lstIdPaisObject) $this->objFichasPaises->IdPais = $this->lstIdPaisObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FichasPaises object
				$this->objFichasPaises->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FichasPaises instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFichasPaises() {
			$this->objFichasPaises->Delete();
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
				case 'FichasPaises': return $this->objFichasPaises;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FichasPaises fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdFichaControl':
					if (!$this->txtIdFicha) return $this->txtIdFicha_Create();
					return $this->txtIdFicha;
				case 'IdFichaLabel':
					if (!$this->lblIdFicha) return $this->lblIdFicha_Create();
					return $this->lblIdFicha;
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
					// Controls that point to FichasPaises fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'IdFichaControl':
						return ($this->txtIdFicha = QType::Cast($mixValue, 'QControl'));
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