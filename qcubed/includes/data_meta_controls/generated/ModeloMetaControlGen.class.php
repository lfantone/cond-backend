<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Modelo class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Modelo object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ModeloMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Modelo $Modelo the actual Modelo data class being edited
	 * property QLabel $IdModeloControl
	 * property-read QLabel $IdModeloLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QListBox $IdMarcaControl
	 * property-read QLabel $IdMarcaLabel
	 * property QListBox $IdPaisControl
	 * property-read QLabel $IdPaisLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ModeloMetaControlGen extends QBaseClass {
		// General Variables
		protected $objModelo;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Modelo's individual data fields
		protected $lblIdModelo;
		protected $txtNombre;
		protected $lstIdMarcaObject;
		protected $lstIdPaisObject;

		// Controls that allow the viewing of Modelo's individual data fields
		protected $lblNombre;
		protected $lblIdMarca;
		protected $lblIdPais;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ModeloMetaControl to edit a single Modelo object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Modelo object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ModeloMetaControl
		 * @param Modelo $objModelo new or existing Modelo object
		 */
		 public function __construct($objParentObject, Modelo $objModelo) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ModeloMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Modelo object
			$this->objModelo = $objModelo;

			// Figure out if we're Editing or Creating New
			if ($this->objModelo->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ModeloMetaControl
		 * @param integer $intIdModelo primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Modelo object creation - defaults to CreateOrEdit
 		 * @return ModeloMetaControl
		 */
		public static function Create($objParentObject, $intIdModelo = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdModelo)) {
				$objModelo = Modelo::Load($intIdModelo);

				// Modelo was found -- return it!
				if ($objModelo)
					return new ModeloMetaControl($objParentObject, $objModelo);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Modelo object with PK arguments: ' . $intIdModelo);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ModeloMetaControl($objParentObject, new Modelo());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ModeloMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Modelo object creation - defaults to CreateOrEdit
		 * @return ModeloMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdModelo = QApplication::PathInfo(0);
			return ModeloMetaControl::Create($objParentObject, $intIdModelo, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ModeloMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Modelo object creation - defaults to CreateOrEdit
		 * @return ModeloMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdModelo = QApplication::QueryString('intIdModelo');
			return ModeloMetaControl::Create($objParentObject, $intIdModelo, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdModelo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdModelo_Create($strControlId = null) {
			$this->lblIdModelo = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdModelo->Name = QApplication::Translate('Id Modelo');
			if ($this->blnEditMode)
				$this->lblIdModelo->Text = $this->objModelo->IdModelo;
			else
				$this->lblIdModelo->Text = 'N/A';
			return $this->lblIdModelo;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objModelo->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Modelo::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objModelo->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QListBox lstIdMarcaObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstIdMarcaObject_Create($strControlId = null) {
			$this->lstIdMarcaObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdMarcaObject->Name = QApplication::Translate('Id Marca Object');
			$this->lstIdMarcaObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdMarcaObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objIdMarcaObjectArray = Marcas::LoadAll();
			if ($objIdMarcaObjectArray) foreach ($objIdMarcaObjectArray as $objIdMarcaObject) {
				$objListItem = new QListItem($objIdMarcaObject->__toString(), $objIdMarcaObject->Id);
				if (($this->objModelo->IdMarcaObject) && ($this->objModelo->IdMarcaObject->Id == $objIdMarcaObject->Id))
					$objListItem->Selected = true;
				$this->lstIdMarcaObject->AddItem($objListItem);
			}
			return $this->lstIdMarcaObject;
		}

		/**
		 * Create and setup QLabel lblIdMarca
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdMarca_Create($strControlId = null) {
			$this->lblIdMarca = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdMarca->Name = QApplication::Translate('Id Marca Object');
			$this->lblIdMarca->Text = ($this->objModelo->IdMarcaObject) ? $this->objModelo->IdMarcaObject->__toString() : null;
			$this->lblIdMarca->Required = true;
			return $this->lblIdMarca;
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
				if (($this->objModelo->IdPaisObject) && ($this->objModelo->IdPaisObject->Id == $objIdPaisObject->Id))
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
			$this->lblIdPais->Text = ($this->objModelo->IdPaisObject) ? $this->objModelo->IdPaisObject->__toString() : null;
			$this->lblIdPais->Required = true;
			return $this->lblIdPais;
		}



		/**
		 * Refresh this MetaControl with Data from the local Modelo object.
		 * @param boolean $blnReload reload Modelo from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objModelo->Reload();

			if ($this->lblIdModelo) if ($this->blnEditMode) $this->lblIdModelo->Text = $this->objModelo->IdModelo;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objModelo->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objModelo->Nombre;

			if ($this->lstIdMarcaObject) {
					$this->lstIdMarcaObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdMarcaObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdMarcaObjectArray = Marcas::LoadAll();
				if ($objIdMarcaObjectArray) foreach ($objIdMarcaObjectArray as $objIdMarcaObject) {
					$objListItem = new QListItem($objIdMarcaObject->__toString(), $objIdMarcaObject->Id);
					if (($this->objModelo->IdMarcaObject) && ($this->objModelo->IdMarcaObject->Id == $objIdMarcaObject->Id))
						$objListItem->Selected = true;
					$this->lstIdMarcaObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdMarca) $this->lblIdMarca->Text = ($this->objModelo->IdMarcaObject) ? $this->objModelo->IdMarcaObject->__toString() : null;

			if ($this->lstIdPaisObject) {
					$this->lstIdPaisObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdPaisObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdPaisObjectArray = Paises::LoadAll();
				if ($objIdPaisObjectArray) foreach ($objIdPaisObjectArray as $objIdPaisObject) {
					$objListItem = new QListItem($objIdPaisObject->__toString(), $objIdPaisObject->Id);
					if (($this->objModelo->IdPaisObject) && ($this->objModelo->IdPaisObject->Id == $objIdPaisObject->Id))
						$objListItem->Selected = true;
					$this->lstIdPaisObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdPais) $this->lblIdPais->Text = ($this->objModelo->IdPaisObject) ? $this->objModelo->IdPaisObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC MODELO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Modelo instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveModelo() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objModelo->Nombre = $this->txtNombre->Text;
				if ($this->lstIdMarcaObject) $this->objModelo->IdMarca = $this->lstIdMarcaObject->SelectedValue;
				if ($this->lstIdPaisObject) $this->objModelo->IdPais = $this->lstIdPaisObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Modelo object
				$this->objModelo->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Modelo instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteModelo() {
			$this->objModelo->Delete();
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
				case 'Modelo': return $this->objModelo;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Modelo fields -- will be created dynamically if not yet created
				case 'IdModeloControl':
					if (!$this->lblIdModelo) return $this->lblIdModelo_Create();
					return $this->lblIdModelo;
				case 'IdModeloLabel':
					if (!$this->lblIdModelo) return $this->lblIdModelo_Create();
					return $this->lblIdModelo;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'IdMarcaControl':
					if (!$this->lstIdMarcaObject) return $this->lstIdMarcaObject_Create();
					return $this->lstIdMarcaObject;
				case 'IdMarcaLabel':
					if (!$this->lblIdMarca) return $this->lblIdMarca_Create();
					return $this->lblIdMarca;
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
					// Controls that point to Modelo fields
					case 'IdModeloControl':
						return ($this->lblIdModelo = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'IdMarcaControl':
						return ($this->lstIdMarcaObject = QType::Cast($mixValue, 'QControl'));
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