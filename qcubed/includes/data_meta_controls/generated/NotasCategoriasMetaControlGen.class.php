<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NotasCategorias class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NotasCategorias object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NotasCategoriasMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read NotasCategorias $NotasCategorias the actual NotasCategorias data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $IdNotaControl
	 * property-read QLabel $IdNotaLabel
	 * property QListBox $IdCategoriaControl
	 * property-read QLabel $IdCategoriaLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NotasCategoriasMetaControlGen extends QBaseClass {
		// General Variables
		protected $objNotasCategorias;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of NotasCategorias's individual data fields
		protected $lblId;
		protected $txtIdNota;
		protected $lstIdCategoriaObject;

		// Controls that allow the viewing of NotasCategorias's individual data fields
		protected $lblIdNota;
		protected $lblIdCategoria;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NotasCategoriasMetaControl to edit a single NotasCategorias object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NotasCategorias object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasCategoriasMetaControl
		 * @param NotasCategorias $objNotasCategorias new or existing NotasCategorias object
		 */
		 public function __construct($objParentObject, NotasCategorias $objNotasCategorias) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NotasCategoriasMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NotasCategorias object
			$this->objNotasCategorias = $objNotasCategorias;

			// Figure out if we're Editing or Creating New
			if ($this->objNotasCategorias->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasCategoriasMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NotasCategorias object creation - defaults to CreateOrEdit
 		 * @return NotasCategoriasMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objNotasCategorias = NotasCategorias::Load($intId);

				// NotasCategorias was found -- return it!
				if ($objNotasCategorias)
					return new NotasCategoriasMetaControl($objParentObject, $objNotasCategorias);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NotasCategorias object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NotasCategoriasMetaControl($objParentObject, new NotasCategorias());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasCategoriasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NotasCategorias object creation - defaults to CreateOrEdit
		 * @return NotasCategoriasMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return NotasCategoriasMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasCategoriasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NotasCategorias object creation - defaults to CreateOrEdit
		 * @return NotasCategoriasMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return NotasCategoriasMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objNotasCategorias->Id;
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
			$this->txtIdNota->Text = $this->objNotasCategorias->IdNota;
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
			$this->lblIdNota->Text = $this->objNotasCategorias->IdNota;
			$this->lblIdNota->Required = true;
			$this->lblIdNota->Format = $strFormat;
			return $this->lblIdNota;
		}

		/**
		 * Create and setup QListBox lstIdCategoriaObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstIdCategoriaObject_Create($strControlId = null) {
			$this->lstIdCategoriaObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdCategoriaObject->Name = QApplication::Translate('Id Categoria Object');
			$this->lstIdCategoriaObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdCategoriaObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objIdCategoriaObjectArray = Categorias::LoadAll();
			if ($objIdCategoriaObjectArray) foreach ($objIdCategoriaObjectArray as $objIdCategoriaObject) {
				$objListItem = new QListItem($objIdCategoriaObject->__toString(), $objIdCategoriaObject->Id);
				if (($this->objNotasCategorias->IdCategoriaObject) && ($this->objNotasCategorias->IdCategoriaObject->Id == $objIdCategoriaObject->Id))
					$objListItem->Selected = true;
				$this->lstIdCategoriaObject->AddItem($objListItem);
			}
			return $this->lstIdCategoriaObject;
		}

		/**
		 * Create and setup QLabel lblIdCategoria
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdCategoria_Create($strControlId = null) {
			$this->lblIdCategoria = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdCategoria->Name = QApplication::Translate('Id Categoria Object');
			$this->lblIdCategoria->Text = ($this->objNotasCategorias->IdCategoriaObject) ? $this->objNotasCategorias->IdCategoriaObject->__toString() : null;
			$this->lblIdCategoria->Required = true;
			return $this->lblIdCategoria;
		}



		/**
		 * Refresh this MetaControl with Data from the local NotasCategorias object.
		 * @param boolean $blnReload reload NotasCategorias from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNotasCategorias->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objNotasCategorias->Id;

			if ($this->txtIdNota) $this->txtIdNota->Text = $this->objNotasCategorias->IdNota;
			if ($this->lblIdNota) $this->lblIdNota->Text = $this->objNotasCategorias->IdNota;

			if ($this->lstIdCategoriaObject) {
					$this->lstIdCategoriaObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdCategoriaObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdCategoriaObjectArray = Categorias::LoadAll();
				if ($objIdCategoriaObjectArray) foreach ($objIdCategoriaObjectArray as $objIdCategoriaObject) {
					$objListItem = new QListItem($objIdCategoriaObject->__toString(), $objIdCategoriaObject->Id);
					if (($this->objNotasCategorias->IdCategoriaObject) && ($this->objNotasCategorias->IdCategoriaObject->Id == $objIdCategoriaObject->Id))
						$objListItem->Selected = true;
					$this->lstIdCategoriaObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdCategoria) $this->lblIdCategoria->Text = ($this->objNotasCategorias->IdCategoriaObject) ? $this->objNotasCategorias->IdCategoriaObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NOTASCATEGORIAS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NotasCategorias instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNotasCategorias() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtIdNota) $this->objNotasCategorias->IdNota = $this->txtIdNota->Text;
				if ($this->lstIdCategoriaObject) $this->objNotasCategorias->IdCategoria = $this->lstIdCategoriaObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NotasCategorias object
				$this->objNotasCategorias->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NotasCategorias instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNotasCategorias() {
			$this->objNotasCategorias->Delete();
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
				case 'NotasCategorias': return $this->objNotasCategorias;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NotasCategorias fields -- will be created dynamically if not yet created
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
				case 'IdCategoriaControl':
					if (!$this->lstIdCategoriaObject) return $this->lstIdCategoriaObject_Create();
					return $this->lstIdCategoriaObject;
				case 'IdCategoriaLabel':
					if (!$this->lblIdCategoria) return $this->lblIdCategoria_Create();
					return $this->lblIdCategoria;
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
					// Controls that point to NotasCategorias fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'IdNotaControl':
						return ($this->txtIdNota = QType::Cast($mixValue, 'QControl'));
					case 'IdCategoriaControl':
						return ($this->lstIdCategoriaObject = QType::Cast($mixValue, 'QControl'));
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