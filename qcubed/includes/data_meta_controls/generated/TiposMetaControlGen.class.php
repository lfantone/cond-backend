<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Tipos class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Tipos object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TiposMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Tipos $Tipos the actual Tipos data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class TiposMetaControlGen extends QBaseClass {
		// General Variables
		protected $objTipos;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Tipos's individual data fields
		protected $lblId;
		protected $txtNombre;

		// Controls that allow the viewing of Tipos's individual data fields
		protected $lblNombre;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * TiposMetaControl to edit a single Tipos object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Tipos object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TiposMetaControl
		 * @param Tipos $objTipos new or existing Tipos object
		 */
		 public function __construct($objParentObject, Tipos $objTipos) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this TiposMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Tipos object
			$this->objTipos = $objTipos;

			// Figure out if we're Editing or Creating New
			if ($this->objTipos->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this TiposMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Tipos object creation - defaults to CreateOrEdit
 		 * @return TiposMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objTipos = Tipos::Load($intId);

				// Tipos was found -- return it!
				if ($objTipos)
					return new TiposMetaControl($objParentObject, $objTipos);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Tipos object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new TiposMetaControl($objParentObject, new Tipos());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TiposMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Tipos object creation - defaults to CreateOrEdit
		 * @return TiposMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return TiposMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TiposMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Tipos object creation - defaults to CreateOrEdit
		 * @return TiposMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return TiposMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objTipos->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objTipos->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Tipos::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objTipos->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}



		/**
		 * Refresh this MetaControl with Data from the local Tipos object.
		 * @param boolean $blnReload reload Tipos from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objTipos->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objTipos->Id;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objTipos->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objTipos->Nombre;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC TIPOS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Tipos instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveTipos() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objTipos->Nombre = $this->txtNombre->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Tipos object
				$this->objTipos->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Tipos instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteTipos() {
			$this->objTipos->Delete();
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
				case 'Tipos': return $this->objTipos;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Tipos fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
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
					// Controls that point to Tipos fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
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