<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Item class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Item object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ItemMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Item $Item the actual Item data class being edited
	 * property QLabel $IdItemControl
	 * property-read QLabel $IdItemLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QTextBox $DescripcionControl
	 * property-read QLabel $DescripcionLabel
	 * property QTextBox $SeccionControl
	 * property-read QLabel $SeccionLabel
	 * property QIntegerTextBox $OrdenSeccionControl
	 * property-read QLabel $OrdenSeccionLabel
	 * property QListBox $IdTipoDatoTypeControl
	 * property-read QLabel $IdTipoDatoTypeLabel
	 * property QListBox $IdPaisControl
	 * property-read QLabel $IdPaisLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ItemMetaControlGen extends QBaseClass {
		// General Variables
		protected $objItem;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Item's individual data fields
		protected $lblIdItem;
		protected $txtNombre;
		protected $txtDescripcion;
		protected $txtSeccion;
		protected $txtOrdenSeccion;
		protected $lstIdTipoDatoTypeObject;
		protected $lstIdPaisObject;

		// Controls that allow the viewing of Item's individual data fields
		protected $lblNombre;
		protected $lblDescripcion;
		protected $lblSeccion;
		protected $lblOrdenSeccion;
		protected $lblIdTipoDatoType;
		protected $lblIdPais;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ItemMetaControl to edit a single Item object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Item object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ItemMetaControl
		 * @param Item $objItem new or existing Item object
		 */
		 public function __construct($objParentObject, Item $objItem) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ItemMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Item object
			$this->objItem = $objItem;

			// Figure out if we're Editing or Creating New
			if ($this->objItem->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ItemMetaControl
		 * @param integer $intIdItem primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Item object creation - defaults to CreateOrEdit
 		 * @return ItemMetaControl
		 */
		public static function Create($objParentObject, $intIdItem = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdItem)) {
				$objItem = Item::Load($intIdItem);

				// Item was found -- return it!
				if ($objItem)
					return new ItemMetaControl($objParentObject, $objItem);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Item object with PK arguments: ' . $intIdItem);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ItemMetaControl($objParentObject, new Item());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ItemMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Item object creation - defaults to CreateOrEdit
		 * @return ItemMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdItem = QApplication::PathInfo(0);
			return ItemMetaControl::Create($objParentObject, $intIdItem, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ItemMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Item object creation - defaults to CreateOrEdit
		 * @return ItemMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdItem = QApplication::QueryString('intIdItem');
			return ItemMetaControl::Create($objParentObject, $intIdItem, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdItem
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdItem_Create($strControlId = null) {
			$this->lblIdItem = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdItem->Name = QApplication::Translate('Id Item');
			if ($this->blnEditMode)
				$this->lblIdItem->Text = $this->objItem->IdItem;
			else
				$this->lblIdItem->Text = 'N/A';
			return $this->lblIdItem;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objItem->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Item::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objItem->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QTextBox txtDescripcion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDescripcion_Create($strControlId = null) {
			$this->txtDescripcion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDescripcion->Name = QApplication::Translate('Descripcion');
			$this->txtDescripcion->Text = $this->objItem->Descripcion;
			$this->txtDescripcion->Required = true;
			$this->txtDescripcion->MaxLength = Item::DescripcionMaxLength;
			return $this->txtDescripcion;
		}

		/**
		 * Create and setup QLabel lblDescripcion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDescripcion_Create($strControlId = null) {
			$this->lblDescripcion = new QLabel($this->objParentObject, $strControlId);
			$this->lblDescripcion->Name = QApplication::Translate('Descripcion');
			$this->lblDescripcion->Text = $this->objItem->Descripcion;
			$this->lblDescripcion->Required = true;
			return $this->lblDescripcion;
		}

		/**
		 * Create and setup QTextBox txtSeccion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSeccion_Create($strControlId = null) {
			$this->txtSeccion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSeccion->Name = QApplication::Translate('Seccion');
			$this->txtSeccion->Text = $this->objItem->Seccion;
			$this->txtSeccion->Required = true;
			$this->txtSeccion->MaxLength = Item::SeccionMaxLength;
			return $this->txtSeccion;
		}

		/**
		 * Create and setup QLabel lblSeccion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSeccion_Create($strControlId = null) {
			$this->lblSeccion = new QLabel($this->objParentObject, $strControlId);
			$this->lblSeccion->Name = QApplication::Translate('Seccion');
			$this->lblSeccion->Text = $this->objItem->Seccion;
			$this->lblSeccion->Required = true;
			return $this->lblSeccion;
		}

		/**
		 * Create and setup QIntegerTextBox txtOrdenSeccion
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtOrdenSeccion_Create($strControlId = null) {
			$this->txtOrdenSeccion = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtOrdenSeccion->Name = QApplication::Translate('Orden Seccion');
			$this->txtOrdenSeccion->Text = $this->objItem->OrdenSeccion;
			return $this->txtOrdenSeccion;
		}

		/**
		 * Create and setup QLabel lblOrdenSeccion
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblOrdenSeccion_Create($strControlId = null, $strFormat = null) {
			$this->lblOrdenSeccion = new QLabel($this->objParentObject, $strControlId);
			$this->lblOrdenSeccion->Name = QApplication::Translate('Orden Seccion');
			$this->lblOrdenSeccion->Text = $this->objItem->OrdenSeccion;
			$this->lblOrdenSeccion->Format = $strFormat;
			return $this->lblOrdenSeccion;
		}

		/**
		 * Create and setup QListBox lstIdTipoDatoTypeObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstIdTipoDatoTypeObject_Create($strControlId = null) {
			$this->lstIdTipoDatoTypeObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdTipoDatoTypeObject->Name = QApplication::Translate('Id Tipo Dato Type Object');
			$this->lstIdTipoDatoTypeObject->Required = true;
			foreach (TipoDatoType::$NameArray as $intId => $strValue)
				$this->lstIdTipoDatoTypeObject->AddItem(new QListItem($strValue, $intId, $this->objItem->IdTipoDatoType == $intId));
			return $this->lstIdTipoDatoTypeObject;
		}

		/**
		 * Create and setup QLabel lblIdTipoDatoType
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdTipoDatoType_Create($strControlId = null) {
			$this->lblIdTipoDatoType = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdTipoDatoType->Name = QApplication::Translate('Id Tipo Dato Type Object');
			$this->lblIdTipoDatoType->Text = ($this->objItem->IdTipoDatoType) ? TipoDatoType::$NameArray[$this->objItem->IdTipoDatoType] : null;
			$this->lblIdTipoDatoType->Required = true;
			return $this->lblIdTipoDatoType;
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
				if (($this->objItem->IdPaisObject) && ($this->objItem->IdPaisObject->Id == $objIdPaisObject->Id))
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
			$this->lblIdPais->Text = ($this->objItem->IdPaisObject) ? $this->objItem->IdPaisObject->__toString() : null;
			$this->lblIdPais->Required = true;
			return $this->lblIdPais;
		}



		/**
		 * Refresh this MetaControl with Data from the local Item object.
		 * @param boolean $blnReload reload Item from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objItem->Reload();

			if ($this->lblIdItem) if ($this->blnEditMode) $this->lblIdItem->Text = $this->objItem->IdItem;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objItem->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objItem->Nombre;

			if ($this->txtDescripcion) $this->txtDescripcion->Text = $this->objItem->Descripcion;
			if ($this->lblDescripcion) $this->lblDescripcion->Text = $this->objItem->Descripcion;

			if ($this->txtSeccion) $this->txtSeccion->Text = $this->objItem->Seccion;
			if ($this->lblSeccion) $this->lblSeccion->Text = $this->objItem->Seccion;

			if ($this->txtOrdenSeccion) $this->txtOrdenSeccion->Text = $this->objItem->OrdenSeccion;
			if ($this->lblOrdenSeccion) $this->lblOrdenSeccion->Text = $this->objItem->OrdenSeccion;

			if ($this->lstIdTipoDatoTypeObject) $this->lstIdTipoDatoTypeObject->SelectedValue = $this->objItem->IdTipoDatoType;
			if ($this->lblIdTipoDatoType) $this->lblIdTipoDatoType->Text = ($this->objItem->IdTipoDatoType) ? TipoDatoType::$NameArray[$this->objItem->IdTipoDatoType] : null;

			if ($this->lstIdPaisObject) {
					$this->lstIdPaisObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdPaisObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdPaisObjectArray = Paises::LoadAll();
				if ($objIdPaisObjectArray) foreach ($objIdPaisObjectArray as $objIdPaisObject) {
					$objListItem = new QListItem($objIdPaisObject->__toString(), $objIdPaisObject->Id);
					if (($this->objItem->IdPaisObject) && ($this->objItem->IdPaisObject->Id == $objIdPaisObject->Id))
						$objListItem->Selected = true;
					$this->lstIdPaisObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdPais) $this->lblIdPais->Text = ($this->objItem->IdPaisObject) ? $this->objItem->IdPaisObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ITEM OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Item instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveItem() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objItem->Nombre = $this->txtNombre->Text;
				if ($this->txtDescripcion) $this->objItem->Descripcion = $this->txtDescripcion->Text;
				if ($this->txtSeccion) $this->objItem->Seccion = $this->txtSeccion->Text;
				if ($this->txtOrdenSeccion) $this->objItem->OrdenSeccion = $this->txtOrdenSeccion->Text;
				if ($this->lstIdTipoDatoTypeObject) $this->objItem->IdTipoDatoType = $this->lstIdTipoDatoTypeObject->SelectedValue;
				if ($this->lstIdPaisObject) $this->objItem->IdPais = $this->lstIdPaisObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Item object
				$this->objItem->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Item instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteItem() {
			$this->objItem->Delete();
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
				case 'Item': return $this->objItem;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Item fields -- will be created dynamically if not yet created
				case 'IdItemControl':
					if (!$this->lblIdItem) return $this->lblIdItem_Create();
					return $this->lblIdItem;
				case 'IdItemLabel':
					if (!$this->lblIdItem) return $this->lblIdItem_Create();
					return $this->lblIdItem;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'DescripcionControl':
					if (!$this->txtDescripcion) return $this->txtDescripcion_Create();
					return $this->txtDescripcion;
				case 'DescripcionLabel':
					if (!$this->lblDescripcion) return $this->lblDescripcion_Create();
					return $this->lblDescripcion;
				case 'SeccionControl':
					if (!$this->txtSeccion) return $this->txtSeccion_Create();
					return $this->txtSeccion;
				case 'SeccionLabel':
					if (!$this->lblSeccion) return $this->lblSeccion_Create();
					return $this->lblSeccion;
				case 'OrdenSeccionControl':
					if (!$this->txtOrdenSeccion) return $this->txtOrdenSeccion_Create();
					return $this->txtOrdenSeccion;
				case 'OrdenSeccionLabel':
					if (!$this->lblOrdenSeccion) return $this->lblOrdenSeccion_Create();
					return $this->lblOrdenSeccion;
				case 'IdTipoDatoTypeControl':
					if (!$this->lstIdTipoDatoTypeObject) return $this->lstIdTipoDatoTypeObject_Create();
					return $this->lstIdTipoDatoTypeObject;
				case 'IdTipoDatoTypeLabel':
					if (!$this->lblIdTipoDatoType) return $this->lblIdTipoDatoType_Create();
					return $this->lblIdTipoDatoType;
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
					// Controls that point to Item fields
					case 'IdItemControl':
						return ($this->lblIdItem = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'DescripcionControl':
						return ($this->txtDescripcion = QType::Cast($mixValue, 'QControl'));
					case 'SeccionControl':
						return ($this->txtSeccion = QType::Cast($mixValue, 'QControl'));
					case 'OrdenSeccionControl':
						return ($this->txtOrdenSeccion = QType::Cast($mixValue, 'QControl'));
					case 'IdTipoDatoTypeControl':
						return ($this->lstIdTipoDatoTypeObject = QType::Cast($mixValue, 'QControl'));
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