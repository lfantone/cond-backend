<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NotasArchivosOld class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NotasArchivosOld object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NotasArchivosOldMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read NotasArchivosOld $NotasArchivosOld the actual NotasArchivosOld data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $IdNotaControl
	 * property-read QLabel $IdNotaLabel
	 * property QIntegerTextBox $IdArchivoControl
	 * property-read QLabel $IdArchivoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NotasArchivosOldMetaControlGen extends QBaseClass {
		// General Variables
		protected $objNotasArchivosOld;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of NotasArchivosOld's individual data fields
		protected $lblId;
		protected $txtIdNota;
		protected $txtIdArchivo;

		// Controls that allow the viewing of NotasArchivosOld's individual data fields
		protected $lblIdNota;
		protected $lblIdArchivo;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NotasArchivosOldMetaControl to edit a single NotasArchivosOld object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NotasArchivosOld object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasArchivosOldMetaControl
		 * @param NotasArchivosOld $objNotasArchivosOld new or existing NotasArchivosOld object
		 */
		 public function __construct($objParentObject, NotasArchivosOld $objNotasArchivosOld) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NotasArchivosOldMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NotasArchivosOld object
			$this->objNotasArchivosOld = $objNotasArchivosOld;

			// Figure out if we're Editing or Creating New
			if ($this->objNotasArchivosOld->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasArchivosOldMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NotasArchivosOld object creation - defaults to CreateOrEdit
 		 * @return NotasArchivosOldMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objNotasArchivosOld = NotasArchivosOld::Load($intId);

				// NotasArchivosOld was found -- return it!
				if ($objNotasArchivosOld)
					return new NotasArchivosOldMetaControl($objParentObject, $objNotasArchivosOld);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NotasArchivosOld object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NotasArchivosOldMetaControl($objParentObject, new NotasArchivosOld());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasArchivosOldMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NotasArchivosOld object creation - defaults to CreateOrEdit
		 * @return NotasArchivosOldMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return NotasArchivosOldMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasArchivosOldMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NotasArchivosOld object creation - defaults to CreateOrEdit
		 * @return NotasArchivosOldMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return NotasArchivosOldMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objNotasArchivosOld->Id;
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
			$this->txtIdNota->Text = $this->objNotasArchivosOld->IdNota;
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
			$this->lblIdNota->Text = $this->objNotasArchivosOld->IdNota;
			$this->lblIdNota->Required = true;
			$this->lblIdNota->Format = $strFormat;
			return $this->lblIdNota;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdArchivo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdArchivo_Create($strControlId = null) {
			$this->txtIdArchivo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdArchivo->Name = QApplication::Translate('Id Archivo');
			$this->txtIdArchivo->Text = $this->objNotasArchivosOld->IdArchivo;
			$this->txtIdArchivo->Required = true;
			return $this->txtIdArchivo;
		}

		/**
		 * Create and setup QLabel lblIdArchivo
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdArchivo_Create($strControlId = null, $strFormat = null) {
			$this->lblIdArchivo = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdArchivo->Name = QApplication::Translate('Id Archivo');
			$this->lblIdArchivo->Text = $this->objNotasArchivosOld->IdArchivo;
			$this->lblIdArchivo->Required = true;
			$this->lblIdArchivo->Format = $strFormat;
			return $this->lblIdArchivo;
		}



		/**
		 * Refresh this MetaControl with Data from the local NotasArchivosOld object.
		 * @param boolean $blnReload reload NotasArchivosOld from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNotasArchivosOld->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objNotasArchivosOld->Id;

			if ($this->txtIdNota) $this->txtIdNota->Text = $this->objNotasArchivosOld->IdNota;
			if ($this->lblIdNota) $this->lblIdNota->Text = $this->objNotasArchivosOld->IdNota;

			if ($this->txtIdArchivo) $this->txtIdArchivo->Text = $this->objNotasArchivosOld->IdArchivo;
			if ($this->lblIdArchivo) $this->lblIdArchivo->Text = $this->objNotasArchivosOld->IdArchivo;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NOTASARCHIVOSOLD OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NotasArchivosOld instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNotasArchivosOld() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtIdNota) $this->objNotasArchivosOld->IdNota = $this->txtIdNota->Text;
				if ($this->txtIdArchivo) $this->objNotasArchivosOld->IdArchivo = $this->txtIdArchivo->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NotasArchivosOld object
				$this->objNotasArchivosOld->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NotasArchivosOld instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNotasArchivosOld() {
			$this->objNotasArchivosOld->Delete();
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
				case 'NotasArchivosOld': return $this->objNotasArchivosOld;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NotasArchivosOld fields -- will be created dynamically if not yet created
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
				case 'IdArchivoControl':
					if (!$this->txtIdArchivo) return $this->txtIdArchivo_Create();
					return $this->txtIdArchivo;
				case 'IdArchivoLabel':
					if (!$this->lblIdArchivo) return $this->lblIdArchivo_Create();
					return $this->lblIdArchivo;
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
					// Controls that point to NotasArchivosOld fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'IdNotaControl':
						return ($this->txtIdNota = QType::Cast($mixValue, 'QControl'));
					case 'IdArchivoControl':
						return ($this->txtIdArchivo = QType::Cast($mixValue, 'QControl'));
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