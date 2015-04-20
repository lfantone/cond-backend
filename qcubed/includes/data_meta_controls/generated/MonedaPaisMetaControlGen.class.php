<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the MonedaPais class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single MonedaPais object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MonedaPaisMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read MonedaPais $MonedaPais the actual MonedaPais data class being edited
	 * property QIntegerTextBox $IdMonedaControl
	 * property-read QLabel $IdMonedaLabel
	 * property QIntegerTextBox $IdPaisControl
	 * property-read QLabel $IdPaisLabel
	 * property QIntegerTextBox $OrdenControl
	 * property-read QLabel $OrdenLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class MonedaPaisMetaControlGen extends QBaseClass {
		// General Variables
		protected $objMonedaPais;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of MonedaPais's individual data fields
		protected $txtIdMoneda;
		protected $txtIdPais;
		protected $txtOrden;

		// Controls that allow the viewing of MonedaPais's individual data fields
		protected $lblIdMoneda;
		protected $lblIdPais;
		protected $lblOrden;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * MonedaPaisMetaControl to edit a single MonedaPais object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single MonedaPais object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MonedaPaisMetaControl
		 * @param MonedaPais $objMonedaPais new or existing MonedaPais object
		 */
		 public function __construct($objParentObject, MonedaPais $objMonedaPais) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this MonedaPaisMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked MonedaPais object
			$this->objMonedaPais = $objMonedaPais;

			// Figure out if we're Editing or Creating New
			if ($this->objMonedaPais->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this MonedaPaisMetaControl
		 * @param integer $intIdMoneda primary key value
		 * @param integer $intIdPais primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing MonedaPais object creation - defaults to CreateOrEdit
 		 * @return MonedaPaisMetaControl
		 */
		public static function Create($objParentObject, $intIdMoneda = null, $intIdPais = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdMoneda) && strlen($intIdPais)) {
				$objMonedaPais = MonedaPais::Load($intIdMoneda, $intIdPais);

				// MonedaPais was found -- return it!
				if ($objMonedaPais)
					return new MonedaPaisMetaControl($objParentObject, $objMonedaPais);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a MonedaPais object with PK arguments: ' . $intIdMoneda . ', ' . $intIdPais);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new MonedaPaisMetaControl($objParentObject, new MonedaPais());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MonedaPaisMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing MonedaPais object creation - defaults to CreateOrEdit
		 * @return MonedaPaisMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdMoneda = QApplication::PathInfo(0);
			$intIdPais = QApplication::PathInfo(1);
			return MonedaPaisMetaControl::Create($objParentObject, $intIdMoneda, $intIdPais, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MonedaPaisMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing MonedaPais object creation - defaults to CreateOrEdit
		 * @return MonedaPaisMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdMoneda = QApplication::QueryString('intIdMoneda');
			$intIdPais = QApplication::QueryString('intIdPais');
			return MonedaPaisMetaControl::Create($objParentObject, $intIdMoneda, $intIdPais, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QIntegerTextBox txtIdMoneda
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdMoneda_Create($strControlId = null) {
			$this->txtIdMoneda = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdMoneda->Name = QApplication::Translate('Id Moneda');
			$this->txtIdMoneda->Text = $this->objMonedaPais->IdMoneda;
			$this->txtIdMoneda->Required = true;
			return $this->txtIdMoneda;
		}

		/**
		 * Create and setup QLabel lblIdMoneda
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdMoneda_Create($strControlId = null, $strFormat = null) {
			$this->lblIdMoneda = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdMoneda->Name = QApplication::Translate('Id Moneda');
			$this->lblIdMoneda->Text = $this->objMonedaPais->IdMoneda;
			$this->lblIdMoneda->Required = true;
			$this->lblIdMoneda->Format = $strFormat;
			return $this->lblIdMoneda;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdPais
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdPais_Create($strControlId = null) {
			$this->txtIdPais = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdPais->Name = QApplication::Translate('Id Pais');
			$this->txtIdPais->Text = $this->objMonedaPais->IdPais;
			$this->txtIdPais->Required = true;
			return $this->txtIdPais;
		}

		/**
		 * Create and setup QLabel lblIdPais
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdPais_Create($strControlId = null, $strFormat = null) {
			$this->lblIdPais = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdPais->Name = QApplication::Translate('Id Pais');
			$this->lblIdPais->Text = $this->objMonedaPais->IdPais;
			$this->lblIdPais->Required = true;
			$this->lblIdPais->Format = $strFormat;
			return $this->lblIdPais;
		}

		/**
		 * Create and setup QIntegerTextBox txtOrden
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtOrden_Create($strControlId = null) {
			$this->txtOrden = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtOrden->Name = QApplication::Translate('Orden');
			$this->txtOrden->Text = $this->objMonedaPais->Orden;
			$this->txtOrden->Required = true;
			return $this->txtOrden;
		}

		/**
		 * Create and setup QLabel lblOrden
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblOrden_Create($strControlId = null, $strFormat = null) {
			$this->lblOrden = new QLabel($this->objParentObject, $strControlId);
			$this->lblOrden->Name = QApplication::Translate('Orden');
			$this->lblOrden->Text = $this->objMonedaPais->Orden;
			$this->lblOrden->Required = true;
			$this->lblOrden->Format = $strFormat;
			return $this->lblOrden;
		}



		/**
		 * Refresh this MetaControl with Data from the local MonedaPais object.
		 * @param boolean $blnReload reload MonedaPais from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objMonedaPais->Reload();

			if ($this->txtIdMoneda) $this->txtIdMoneda->Text = $this->objMonedaPais->IdMoneda;
			if ($this->lblIdMoneda) $this->lblIdMoneda->Text = $this->objMonedaPais->IdMoneda;

			if ($this->txtIdPais) $this->txtIdPais->Text = $this->objMonedaPais->IdPais;
			if ($this->lblIdPais) $this->lblIdPais->Text = $this->objMonedaPais->IdPais;

			if ($this->txtOrden) $this->txtOrden->Text = $this->objMonedaPais->Orden;
			if ($this->lblOrden) $this->lblOrden->Text = $this->objMonedaPais->Orden;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC MONEDAPAIS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's MonedaPais instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveMonedaPais() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtIdMoneda) $this->objMonedaPais->IdMoneda = $this->txtIdMoneda->Text;
				if ($this->txtIdPais) $this->objMonedaPais->IdPais = $this->txtIdPais->Text;
				if ($this->txtOrden) $this->objMonedaPais->Orden = $this->txtOrden->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the MonedaPais object
				$this->objMonedaPais->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's MonedaPais instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteMonedaPais() {
			$this->objMonedaPais->Delete();
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
				case 'MonedaPais': return $this->objMonedaPais;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to MonedaPais fields -- will be created dynamically if not yet created
				case 'IdMonedaControl':
					if (!$this->txtIdMoneda) return $this->txtIdMoneda_Create();
					return $this->txtIdMoneda;
				case 'IdMonedaLabel':
					if (!$this->lblIdMoneda) return $this->lblIdMoneda_Create();
					return $this->lblIdMoneda;
				case 'IdPaisControl':
					if (!$this->txtIdPais) return $this->txtIdPais_Create();
					return $this->txtIdPais;
				case 'IdPaisLabel':
					if (!$this->lblIdPais) return $this->lblIdPais_Create();
					return $this->lblIdPais;
				case 'OrdenControl':
					if (!$this->txtOrden) return $this->txtOrden_Create();
					return $this->txtOrden;
				case 'OrdenLabel':
					if (!$this->lblOrden) return $this->lblOrden_Create();
					return $this->lblOrden;
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
					// Controls that point to MonedaPais fields
					case 'IdMonedaControl':
						return ($this->txtIdMoneda = QType::Cast($mixValue, 'QControl'));
					case 'IdPaisControl':
						return ($this->txtIdPais = QType::Cast($mixValue, 'QControl'));
					case 'OrdenControl':
						return ($this->txtOrden = QType::Cast($mixValue, 'QControl'));
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