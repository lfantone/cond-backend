<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NotasMarcas class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NotasMarcas object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NotasMarcasMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read NotasMarcas $NotasMarcas the actual NotasMarcas data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $IdNotaControl
	 * property-read QLabel $IdNotaLabel
	 * property QIntegerTextBox $IdMarcaControl
	 * property-read QLabel $IdMarcaLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NotasMarcasMetaControlGen extends QBaseClass {
		// General Variables
		protected $objNotasMarcas;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of NotasMarcas's individual data fields
		protected $lblId;
		protected $txtIdNota;
		protected $txtIdMarca;

		// Controls that allow the viewing of NotasMarcas's individual data fields
		protected $lblIdNota;
		protected $lblIdMarca;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NotasMarcasMetaControl to edit a single NotasMarcas object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NotasMarcas object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasMarcasMetaControl
		 * @param NotasMarcas $objNotasMarcas new or existing NotasMarcas object
		 */
		 public function __construct($objParentObject, NotasMarcas $objNotasMarcas) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NotasMarcasMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NotasMarcas object
			$this->objNotasMarcas = $objNotasMarcas;

			// Figure out if we're Editing or Creating New
			if ($this->objNotasMarcas->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasMarcasMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NotasMarcas object creation - defaults to CreateOrEdit
 		 * @return NotasMarcasMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objNotasMarcas = NotasMarcas::Load($intId);

				// NotasMarcas was found -- return it!
				if ($objNotasMarcas)
					return new NotasMarcasMetaControl($objParentObject, $objNotasMarcas);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NotasMarcas object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NotasMarcasMetaControl($objParentObject, new NotasMarcas());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasMarcasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NotasMarcas object creation - defaults to CreateOrEdit
		 * @return NotasMarcasMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return NotasMarcasMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasMarcasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NotasMarcas object creation - defaults to CreateOrEdit
		 * @return NotasMarcasMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return NotasMarcasMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objNotasMarcas->Id;
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
			$this->txtIdNota->Text = $this->objNotasMarcas->IdNota;
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
			$this->lblIdNota->Text = $this->objNotasMarcas->IdNota;
			$this->lblIdNota->Required = true;
			$this->lblIdNota->Format = $strFormat;
			return $this->lblIdNota;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdMarca
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdMarca_Create($strControlId = null) {
			$this->txtIdMarca = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdMarca->Name = QApplication::Translate('Id Marca');
			$this->txtIdMarca->Text = $this->objNotasMarcas->IdMarca;
			$this->txtIdMarca->Required = true;
			return $this->txtIdMarca;
		}

		/**
		 * Create and setup QLabel lblIdMarca
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdMarca_Create($strControlId = null, $strFormat = null) {
			$this->lblIdMarca = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdMarca->Name = QApplication::Translate('Id Marca');
			$this->lblIdMarca->Text = $this->objNotasMarcas->IdMarca;
			$this->lblIdMarca->Required = true;
			$this->lblIdMarca->Format = $strFormat;
			return $this->lblIdMarca;
		}



		/**
		 * Refresh this MetaControl with Data from the local NotasMarcas object.
		 * @param boolean $blnReload reload NotasMarcas from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNotasMarcas->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objNotasMarcas->Id;

			if ($this->txtIdNota) $this->txtIdNota->Text = $this->objNotasMarcas->IdNota;
			if ($this->lblIdNota) $this->lblIdNota->Text = $this->objNotasMarcas->IdNota;

			if ($this->txtIdMarca) $this->txtIdMarca->Text = $this->objNotasMarcas->IdMarca;
			if ($this->lblIdMarca) $this->lblIdMarca->Text = $this->objNotasMarcas->IdMarca;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NOTASMARCAS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NotasMarcas instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNotasMarcas() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtIdNota) $this->objNotasMarcas->IdNota = $this->txtIdNota->Text;
				if ($this->txtIdMarca) $this->objNotasMarcas->IdMarca = $this->txtIdMarca->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NotasMarcas object
				$this->objNotasMarcas->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NotasMarcas instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNotasMarcas() {
			$this->objNotasMarcas->Delete();
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
				case 'NotasMarcas': return $this->objNotasMarcas;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NotasMarcas fields -- will be created dynamically if not yet created
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
				case 'IdMarcaControl':
					if (!$this->txtIdMarca) return $this->txtIdMarca_Create();
					return $this->txtIdMarca;
				case 'IdMarcaLabel':
					if (!$this->lblIdMarca) return $this->lblIdMarca_Create();
					return $this->lblIdMarca;
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
					// Controls that point to NotasMarcas fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'IdNotaControl':
						return ($this->txtIdNota = QType::Cast($mixValue, 'QControl'));
					case 'IdMarcaControl':
						return ($this->txtIdMarca = QType::Cast($mixValue, 'QControl'));
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