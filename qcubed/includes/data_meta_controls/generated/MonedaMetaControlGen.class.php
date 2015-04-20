<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Moneda class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Moneda object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MonedaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Moneda $Moneda the actual Moneda data class being edited
	 * property QLabel $IdMonedaControl
	 * property-read QLabel $IdMonedaLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class MonedaMetaControlGen extends QBaseClass {
		// General Variables
		protected $objMoneda;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Moneda's individual data fields
		protected $lblIdMoneda;
		protected $txtNombre;

		// Controls that allow the viewing of Moneda's individual data fields
		protected $lblNombre;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * MonedaMetaControl to edit a single Moneda object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Moneda object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MonedaMetaControl
		 * @param Moneda $objMoneda new or existing Moneda object
		 */
		 public function __construct($objParentObject, Moneda $objMoneda) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this MonedaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Moneda object
			$this->objMoneda = $objMoneda;

			// Figure out if we're Editing or Creating New
			if ($this->objMoneda->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this MonedaMetaControl
		 * @param integer $intIdMoneda primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Moneda object creation - defaults to CreateOrEdit
 		 * @return MonedaMetaControl
		 */
		public static function Create($objParentObject, $intIdMoneda = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdMoneda)) {
				$objMoneda = Moneda::Load($intIdMoneda);

				// Moneda was found -- return it!
				if ($objMoneda)
					return new MonedaMetaControl($objParentObject, $objMoneda);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Moneda object with PK arguments: ' . $intIdMoneda);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new MonedaMetaControl($objParentObject, new Moneda());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MonedaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Moneda object creation - defaults to CreateOrEdit
		 * @return MonedaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdMoneda = QApplication::PathInfo(0);
			return MonedaMetaControl::Create($objParentObject, $intIdMoneda, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MonedaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Moneda object creation - defaults to CreateOrEdit
		 * @return MonedaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdMoneda = QApplication::QueryString('intIdMoneda');
			return MonedaMetaControl::Create($objParentObject, $intIdMoneda, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdMoneda
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdMoneda_Create($strControlId = null) {
			$this->lblIdMoneda = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdMoneda->Name = QApplication::Translate('Id Moneda');
			if ($this->blnEditMode)
				$this->lblIdMoneda->Text = $this->objMoneda->IdMoneda;
			else
				$this->lblIdMoneda->Text = 'N/A';
			return $this->lblIdMoneda;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objMoneda->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Moneda::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objMoneda->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}



		/**
		 * Refresh this MetaControl with Data from the local Moneda object.
		 * @param boolean $blnReload reload Moneda from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objMoneda->Reload();

			if ($this->lblIdMoneda) if ($this->blnEditMode) $this->lblIdMoneda->Text = $this->objMoneda->IdMoneda;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objMoneda->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objMoneda->Nombre;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC MONEDA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Moneda instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveMoneda() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objMoneda->Nombre = $this->txtNombre->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Moneda object
				$this->objMoneda->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Moneda instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteMoneda() {
			$this->objMoneda->Delete();
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
				case 'Moneda': return $this->objMoneda;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Moneda fields -- will be created dynamically if not yet created
				case 'IdMonedaControl':
					if (!$this->lblIdMoneda) return $this->lblIdMoneda_Create();
					return $this->lblIdMoneda;
				case 'IdMonedaLabel':
					if (!$this->lblIdMoneda) return $this->lblIdMoneda_Create();
					return $this->lblIdMoneda;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
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
					// Controls that point to Moneda fields
					case 'IdMonedaControl':
						return ($this->lblIdMoneda = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
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