<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NotasTipos class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NotasTipos object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NotasTiposMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read NotasTipos $NotasTipos the actual NotasTipos data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $IdNotaControl
	 * property-read QLabel $IdNotaLabel
	 * property QIntegerTextBox $IdTipoControl
	 * property-read QLabel $IdTipoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NotasTiposMetaControlGen extends QBaseClass {
		// General Variables
		protected $objNotasTipos;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of NotasTipos's individual data fields
		protected $lblId;
		protected $txtIdNota;
		protected $txtIdTipo;

		// Controls that allow the viewing of NotasTipos's individual data fields
		protected $lblIdNota;
		protected $lblIdTipo;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NotasTiposMetaControl to edit a single NotasTipos object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NotasTipos object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasTiposMetaControl
		 * @param NotasTipos $objNotasTipos new or existing NotasTipos object
		 */
		 public function __construct($objParentObject, NotasTipos $objNotasTipos) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NotasTiposMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NotasTipos object
			$this->objNotasTipos = $objNotasTipos;

			// Figure out if we're Editing or Creating New
			if ($this->objNotasTipos->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasTiposMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NotasTipos object creation - defaults to CreateOrEdit
 		 * @return NotasTiposMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objNotasTipos = NotasTipos::Load($intId);

				// NotasTipos was found -- return it!
				if ($objNotasTipos)
					return new NotasTiposMetaControl($objParentObject, $objNotasTipos);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NotasTipos object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NotasTiposMetaControl($objParentObject, new NotasTipos());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasTiposMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NotasTipos object creation - defaults to CreateOrEdit
		 * @return NotasTiposMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return NotasTiposMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasTiposMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NotasTipos object creation - defaults to CreateOrEdit
		 * @return NotasTiposMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return NotasTiposMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objNotasTipos->Id;
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
			$this->txtIdNota->Text = $this->objNotasTipos->IdNota;
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
			$this->lblIdNota->Text = $this->objNotasTipos->IdNota;
			$this->lblIdNota->Required = true;
			$this->lblIdNota->Format = $strFormat;
			return $this->lblIdNota;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdTipo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdTipo_Create($strControlId = null) {
			$this->txtIdTipo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdTipo->Name = QApplication::Translate('Id Tipo');
			$this->txtIdTipo->Text = $this->objNotasTipos->IdTipo;
			$this->txtIdTipo->Required = true;
			return $this->txtIdTipo;
		}

		/**
		 * Create and setup QLabel lblIdTipo
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdTipo_Create($strControlId = null, $strFormat = null) {
			$this->lblIdTipo = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdTipo->Name = QApplication::Translate('Id Tipo');
			$this->lblIdTipo->Text = $this->objNotasTipos->IdTipo;
			$this->lblIdTipo->Required = true;
			$this->lblIdTipo->Format = $strFormat;
			return $this->lblIdTipo;
		}



		/**
		 * Refresh this MetaControl with Data from the local NotasTipos object.
		 * @param boolean $blnReload reload NotasTipos from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNotasTipos->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objNotasTipos->Id;

			if ($this->txtIdNota) $this->txtIdNota->Text = $this->objNotasTipos->IdNota;
			if ($this->lblIdNota) $this->lblIdNota->Text = $this->objNotasTipos->IdNota;

			if ($this->txtIdTipo) $this->txtIdTipo->Text = $this->objNotasTipos->IdTipo;
			if ($this->lblIdTipo) $this->lblIdTipo->Text = $this->objNotasTipos->IdTipo;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NOTASTIPOS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NotasTipos instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNotasTipos() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtIdNota) $this->objNotasTipos->IdNota = $this->txtIdNota->Text;
				if ($this->txtIdTipo) $this->objNotasTipos->IdTipo = $this->txtIdTipo->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NotasTipos object
				$this->objNotasTipos->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NotasTipos instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNotasTipos() {
			$this->objNotasTipos->Delete();
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
				case 'NotasTipos': return $this->objNotasTipos;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NotasTipos fields -- will be created dynamically if not yet created
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
				case 'IdTipoControl':
					if (!$this->txtIdTipo) return $this->txtIdTipo_Create();
					return $this->txtIdTipo;
				case 'IdTipoLabel':
					if (!$this->lblIdTipo) return $this->lblIdTipo_Create();
					return $this->lblIdTipo;
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
					// Controls that point to NotasTipos fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'IdNotaControl':
						return ($this->txtIdNota = QType::Cast($mixValue, 'QControl'));
					case 'IdTipoControl':
						return ($this->txtIdTipo = QType::Cast($mixValue, 'QControl'));
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