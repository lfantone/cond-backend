<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FichasItemValor class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FichasItemValor object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FichasItemValorMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FichasItemValor $FichasItemValor the actual FichasItemValor data class being edited
	 * property QListBox $IdFichasControl
	 * property-read QLabel $IdFichasLabel
	 * property QListBox $IdItemControl
	 * property-read QLabel $IdItemLabel
	 * property QTextBox $ValorControl
	 * property-read QLabel $ValorLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FichasItemValorMetaControlGen extends QBaseClass {
		// General Variables
		protected $objFichasItemValor;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of FichasItemValor's individual data fields
		protected $lstIdFichasObject;
		protected $lstIdItemObject;
		protected $txtValor;

		// Controls that allow the viewing of FichasItemValor's individual data fields
		protected $lblIdFichas;
		protected $lblIdItem;
		protected $lblValor;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FichasItemValorMetaControl to edit a single FichasItemValor object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FichasItemValor object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasItemValorMetaControl
		 * @param FichasItemValor $objFichasItemValor new or existing FichasItemValor object
		 */
		 public function __construct($objParentObject, FichasItemValor $objFichasItemValor) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FichasItemValorMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FichasItemValor object
			$this->objFichasItemValor = $objFichasItemValor;

			// Figure out if we're Editing or Creating New
			if ($this->objFichasItemValor->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasItemValorMetaControl
		 * @param integer $intIdFichas primary key value
		 * @param integer $intIdItem primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FichasItemValor object creation - defaults to CreateOrEdit
 		 * @return FichasItemValorMetaControl
		 */
		public static function Create($objParentObject, $intIdFichas = null, $intIdItem = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdFichas) && strlen($intIdItem)) {
				$objFichasItemValor = FichasItemValor::Load($intIdFichas, $intIdItem);

				// FichasItemValor was found -- return it!
				if ($objFichasItemValor)
					return new FichasItemValorMetaControl($objParentObject, $objFichasItemValor);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FichasItemValor object with PK arguments: ' . $intIdFichas . ', ' . $intIdItem);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FichasItemValorMetaControl($objParentObject, new FichasItemValor());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasItemValorMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasItemValor object creation - defaults to CreateOrEdit
		 * @return FichasItemValorMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdFichas = QApplication::PathInfo(0);
			$intIdItem = QApplication::PathInfo(1);
			return FichasItemValorMetaControl::Create($objParentObject, $intIdFichas, $intIdItem, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasItemValorMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasItemValor object creation - defaults to CreateOrEdit
		 * @return FichasItemValorMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdFichas = QApplication::QueryString('intIdFichas');
			$intIdItem = QApplication::QueryString('intIdItem');
			return FichasItemValorMetaControl::Create($objParentObject, $intIdFichas, $intIdItem, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QListBox lstIdFichasObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstIdFichasObject_Create($strControlId = null) {
			$this->lstIdFichasObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdFichasObject->Name = QApplication::Translate('Id Fichas Object');
			$this->lstIdFichasObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdFichasObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objIdFichasObjectArray = Fichas::LoadAll();
			if ($objIdFichasObjectArray) foreach ($objIdFichasObjectArray as $objIdFichasObject) {
				$objListItem = new QListItem($objIdFichasObject->__toString(), $objIdFichasObject->Id);
				if (($this->objFichasItemValor->IdFichasObject) && ($this->objFichasItemValor->IdFichasObject->Id == $objIdFichasObject->Id))
					$objListItem->Selected = true;
				$this->lstIdFichasObject->AddItem($objListItem);
			}
			return $this->lstIdFichasObject;
		}

		/**
		 * Create and setup QLabel lblIdFichas
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdFichas_Create($strControlId = null) {
			$this->lblIdFichas = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdFichas->Name = QApplication::Translate('Id Fichas Object');
			$this->lblIdFichas->Text = ($this->objFichasItemValor->IdFichasObject) ? $this->objFichasItemValor->IdFichasObject->__toString() : null;
			$this->lblIdFichas->Required = true;
			return $this->lblIdFichas;
		}

		/**
		 * Create and setup QListBox lstIdItemObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstIdItemObject_Create($strControlId = null) {
			$this->lstIdItemObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdItemObject->Name = QApplication::Translate('Id Item Object');
			$this->lstIdItemObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdItemObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objIdItemObjectArray = Item::LoadAll();
			if ($objIdItemObjectArray) foreach ($objIdItemObjectArray as $objIdItemObject) {
				$objListItem = new QListItem($objIdItemObject->__toString(), $objIdItemObject->IdItem);
				if (($this->objFichasItemValor->IdItemObject) && ($this->objFichasItemValor->IdItemObject->IdItem == $objIdItemObject->IdItem))
					$objListItem->Selected = true;
				$this->lstIdItemObject->AddItem($objListItem);
			}
			return $this->lstIdItemObject;
		}

		/**
		 * Create and setup QLabel lblIdItem
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdItem_Create($strControlId = null) {
			$this->lblIdItem = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdItem->Name = QApplication::Translate('Id Item Object');
			$this->lblIdItem->Text = ($this->objFichasItemValor->IdItemObject) ? $this->objFichasItemValor->IdItemObject->__toString() : null;
			$this->lblIdItem->Required = true;
			return $this->lblIdItem;
		}

		/**
		 * Create and setup QTextBox txtValor
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtValor_Create($strControlId = null) {
			$this->txtValor = new QTextBox($this->objParentObject, $strControlId);
			$this->txtValor->Name = QApplication::Translate('Valor');
			$this->txtValor->Text = $this->objFichasItemValor->Valor;
			$this->txtValor->Required = true;
			$this->txtValor->MaxLength = FichasItemValor::ValorMaxLength;
			return $this->txtValor;
		}

		/**
		 * Create and setup QLabel lblValor
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblValor_Create($strControlId = null) {
			$this->lblValor = new QLabel($this->objParentObject, $strControlId);
			$this->lblValor->Name = QApplication::Translate('Valor');
			$this->lblValor->Text = $this->objFichasItemValor->Valor;
			$this->lblValor->Required = true;
			return $this->lblValor;
		}



		/**
		 * Refresh this MetaControl with Data from the local FichasItemValor object.
		 * @param boolean $blnReload reload FichasItemValor from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFichasItemValor->Reload();

			if ($this->lstIdFichasObject) {
					$this->lstIdFichasObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdFichasObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdFichasObjectArray = Fichas::LoadAll();
				if ($objIdFichasObjectArray) foreach ($objIdFichasObjectArray as $objIdFichasObject) {
					$objListItem = new QListItem($objIdFichasObject->__toString(), $objIdFichasObject->Id);
					if (($this->objFichasItemValor->IdFichasObject) && ($this->objFichasItemValor->IdFichasObject->Id == $objIdFichasObject->Id))
						$objListItem->Selected = true;
					$this->lstIdFichasObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdFichas) $this->lblIdFichas->Text = ($this->objFichasItemValor->IdFichasObject) ? $this->objFichasItemValor->IdFichasObject->__toString() : null;

			if ($this->lstIdItemObject) {
					$this->lstIdItemObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdItemObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdItemObjectArray = Item::LoadAll();
				if ($objIdItemObjectArray) foreach ($objIdItemObjectArray as $objIdItemObject) {
					$objListItem = new QListItem($objIdItemObject->__toString(), $objIdItemObject->IdItem);
					if (($this->objFichasItemValor->IdItemObject) && ($this->objFichasItemValor->IdItemObject->IdItem == $objIdItemObject->IdItem))
						$objListItem->Selected = true;
					$this->lstIdItemObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdItem) $this->lblIdItem->Text = ($this->objFichasItemValor->IdItemObject) ? $this->objFichasItemValor->IdItemObject->__toString() : null;

			if ($this->txtValor) $this->txtValor->Text = $this->objFichasItemValor->Valor;
			if ($this->lblValor) $this->lblValor->Text = $this->objFichasItemValor->Valor;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FICHASITEMVALOR OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FichasItemValor instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFichasItemValor() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstIdFichasObject) $this->objFichasItemValor->IdFichas = $this->lstIdFichasObject->SelectedValue;
				if ($this->lstIdItemObject) $this->objFichasItemValor->IdItem = $this->lstIdItemObject->SelectedValue;
				if ($this->txtValor) $this->objFichasItemValor->Valor = $this->txtValor->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FichasItemValor object
				$this->objFichasItemValor->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FichasItemValor instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFichasItemValor() {
			$this->objFichasItemValor->Delete();
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
				case 'FichasItemValor': return $this->objFichasItemValor;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FichasItemValor fields -- will be created dynamically if not yet created
				case 'IdFichasControl':
					if (!$this->lstIdFichasObject) return $this->lstIdFichasObject_Create();
					return $this->lstIdFichasObject;
				case 'IdFichasLabel':
					if (!$this->lblIdFichas) return $this->lblIdFichas_Create();
					return $this->lblIdFichas;
				case 'IdItemControl':
					if (!$this->lstIdItemObject) return $this->lstIdItemObject_Create();
					return $this->lstIdItemObject;
				case 'IdItemLabel':
					if (!$this->lblIdItem) return $this->lblIdItem_Create();
					return $this->lblIdItem;
				case 'ValorControl':
					if (!$this->txtValor) return $this->txtValor_Create();
					return $this->txtValor;
				case 'ValorLabel':
					if (!$this->lblValor) return $this->lblValor_Create();
					return $this->lblValor;
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
					// Controls that point to FichasItemValor fields
					case 'IdFichasControl':
						return ($this->lstIdFichasObject = QType::Cast($mixValue, 'QControl'));
					case 'IdItemControl':
						return ($this->lstIdItemObject = QType::Cast($mixValue, 'QControl'));
					case 'ValorControl':
						return ($this->txtValor = QType::Cast($mixValue, 'QControl'));
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