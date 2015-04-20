<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FichasNotas class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FichasNotas object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FichasNotasMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FichasNotas $FichasNotas the actual FichasNotas data class being edited
	 * property QLabel $IdFichaNotaControl
	 * property-read QLabel $IdFichaNotaLabel
	 * property QListBox $IdFichasControl
	 * property-read QLabel $IdFichasLabel
	 * property QIntegerTextBox $IdNotaControl
	 * property-read QLabel $IdNotaLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FichasNotasMetaControlGen extends QBaseClass {
		// General Variables
		protected $objFichasNotas;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of FichasNotas's individual data fields
		protected $lblIdFichaNota;
		protected $lstIdFichasObject;
		protected $txtIdNota;

		// Controls that allow the viewing of FichasNotas's individual data fields
		protected $lblIdFichas;
		protected $lblIdNota;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FichasNotasMetaControl to edit a single FichasNotas object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FichasNotas object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasNotasMetaControl
		 * @param FichasNotas $objFichasNotas new or existing FichasNotas object
		 */
		 public function __construct($objParentObject, FichasNotas $objFichasNotas) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FichasNotasMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FichasNotas object
			$this->objFichasNotas = $objFichasNotas;

			// Figure out if we're Editing or Creating New
			if ($this->objFichasNotas->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasNotasMetaControl
		 * @param integer $intIdFichaNota primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FichasNotas object creation - defaults to CreateOrEdit
 		 * @return FichasNotasMetaControl
		 */
		public static function Create($objParentObject, $intIdFichaNota = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdFichaNota)) {
				$objFichasNotas = FichasNotas::Load($intIdFichaNota);

				// FichasNotas was found -- return it!
				if ($objFichasNotas)
					return new FichasNotasMetaControl($objParentObject, $objFichasNotas);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FichasNotas object with PK arguments: ' . $intIdFichaNota);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FichasNotasMetaControl($objParentObject, new FichasNotas());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasNotasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasNotas object creation - defaults to CreateOrEdit
		 * @return FichasNotasMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdFichaNota = QApplication::PathInfo(0);
			return FichasNotasMetaControl::Create($objParentObject, $intIdFichaNota, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasNotasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasNotas object creation - defaults to CreateOrEdit
		 * @return FichasNotasMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdFichaNota = QApplication::QueryString('intIdFichaNota');
			return FichasNotasMetaControl::Create($objParentObject, $intIdFichaNota, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdFichaNota
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdFichaNota_Create($strControlId = null) {
			$this->lblIdFichaNota = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdFichaNota->Name = QApplication::Translate('Id Ficha Nota');
			if ($this->blnEditMode)
				$this->lblIdFichaNota->Text = $this->objFichasNotas->IdFichaNota;
			else
				$this->lblIdFichaNota->Text = 'N/A';
			return $this->lblIdFichaNota;
		}

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
				if (($this->objFichasNotas->IdFichasObject) && ($this->objFichasNotas->IdFichasObject->Id == $objIdFichasObject->Id))
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
			$this->lblIdFichas->Text = ($this->objFichasNotas->IdFichasObject) ? $this->objFichasNotas->IdFichasObject->__toString() : null;
			$this->lblIdFichas->Required = true;
			return $this->lblIdFichas;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdNota
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdNota_Create($strControlId = null) {
			$this->txtIdNota = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdNota->Name = QApplication::Translate('Id Nota');
			$this->txtIdNota->Text = $this->objFichasNotas->IdNota;
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
			$this->lblIdNota->Text = $this->objFichasNotas->IdNota;
			$this->lblIdNota->Required = true;
			$this->lblIdNota->Format = $strFormat;
			return $this->lblIdNota;
		}



		/**
		 * Refresh this MetaControl with Data from the local FichasNotas object.
		 * @param boolean $blnReload reload FichasNotas from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFichasNotas->Reload();

			if ($this->lblIdFichaNota) if ($this->blnEditMode) $this->lblIdFichaNota->Text = $this->objFichasNotas->IdFichaNota;

			if ($this->lstIdFichasObject) {
					$this->lstIdFichasObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdFichasObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdFichasObjectArray = Fichas::LoadAll();
				if ($objIdFichasObjectArray) foreach ($objIdFichasObjectArray as $objIdFichasObject) {
					$objListItem = new QListItem($objIdFichasObject->__toString(), $objIdFichasObject->Id);
					if (($this->objFichasNotas->IdFichasObject) && ($this->objFichasNotas->IdFichasObject->Id == $objIdFichasObject->Id))
						$objListItem->Selected = true;
					$this->lstIdFichasObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdFichas) $this->lblIdFichas->Text = ($this->objFichasNotas->IdFichasObject) ? $this->objFichasNotas->IdFichasObject->__toString() : null;

			if ($this->txtIdNota) $this->txtIdNota->Text = $this->objFichasNotas->IdNota;
			if ($this->lblIdNota) $this->lblIdNota->Text = $this->objFichasNotas->IdNota;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FICHASNOTAS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FichasNotas instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFichasNotas() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstIdFichasObject) $this->objFichasNotas->IdFichas = $this->lstIdFichasObject->SelectedValue;
				if ($this->txtIdNota) $this->objFichasNotas->IdNota = $this->txtIdNota->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FichasNotas object
				$this->objFichasNotas->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FichasNotas instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFichasNotas() {
			$this->objFichasNotas->Delete();
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
				case 'FichasNotas': return $this->objFichasNotas;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FichasNotas fields -- will be created dynamically if not yet created
				case 'IdFichaNotaControl':
					if (!$this->lblIdFichaNota) return $this->lblIdFichaNota_Create();
					return $this->lblIdFichaNota;
				case 'IdFichaNotaLabel':
					if (!$this->lblIdFichaNota) return $this->lblIdFichaNota_Create();
					return $this->lblIdFichaNota;
				case 'IdFichasControl':
					if (!$this->lstIdFichasObject) return $this->lstIdFichasObject_Create();
					return $this->lstIdFichasObject;
				case 'IdFichasLabel':
					if (!$this->lblIdFichas) return $this->lblIdFichas_Create();
					return $this->lblIdFichas;
				case 'IdNotaControl':
					if (!$this->txtIdNota) return $this->txtIdNota_Create();
					return $this->txtIdNota;
				case 'IdNotaLabel':
					if (!$this->lblIdNota) return $this->lblIdNota_Create();
					return $this->lblIdNota;
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
					// Controls that point to FichasNotas fields
					case 'IdFichaNotaControl':
						return ($this->lblIdFichaNota = QType::Cast($mixValue, 'QControl'));
					case 'IdFichasControl':
						return ($this->lstIdFichasObject = QType::Cast($mixValue, 'QControl'));
					case 'IdNotaControl':
						return ($this->txtIdNota = QType::Cast($mixValue, 'QControl'));
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