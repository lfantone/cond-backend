<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Backup10122010 class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Backup10122010 object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a Backup10122010MetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Backup10122010 $Backup10122010 the actual Backup10122010 data class being edited
	 * property QLabel $IdModeloControl
	 * property-read QLabel $IdModeloLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QIntegerTextBox $IdMarcaControl
	 * property-read QLabel $IdMarcaLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class Backup10122010MetaControlGen extends QBaseClass {
		// General Variables
		protected $objBackup10122010;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Backup10122010's individual data fields
		protected $lblIdModelo;
		protected $txtNombre;
		protected $txtIdMarca;

		// Controls that allow the viewing of Backup10122010's individual data fields
		protected $lblNombre;
		protected $lblIdMarca;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * Backup10122010MetaControl to edit a single Backup10122010 object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Backup10122010 object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this Backup10122010MetaControl
		 * @param Backup10122010 $objBackup10122010 new or existing Backup10122010 object
		 */
		 public function __construct($objParentObject, Backup10122010 $objBackup10122010) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this Backup10122010MetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Backup10122010 object
			$this->objBackup10122010 = $objBackup10122010;

			// Figure out if we're Editing or Creating New
			if ($this->objBackup10122010->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this Backup10122010MetaControl
		 * @param integer $intIdModelo primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Backup10122010 object creation - defaults to CreateOrEdit
 		 * @return Backup10122010MetaControl
		 */
		public static function Create($objParentObject, $intIdModelo = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdModelo)) {
				$objBackup10122010 = Backup10122010::Load($intIdModelo);

				// Backup10122010 was found -- return it!
				if ($objBackup10122010)
					return new Backup10122010MetaControl($objParentObject, $objBackup10122010);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Backup10122010 object with PK arguments: ' . $intIdModelo);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new Backup10122010MetaControl($objParentObject, new Backup10122010());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this Backup10122010MetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Backup10122010 object creation - defaults to CreateOrEdit
		 * @return Backup10122010MetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdModelo = QApplication::PathInfo(0);
			return Backup10122010MetaControl::Create($objParentObject, $intIdModelo, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this Backup10122010MetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Backup10122010 object creation - defaults to CreateOrEdit
		 * @return Backup10122010MetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdModelo = QApplication::QueryString('intIdModelo');
			return Backup10122010MetaControl::Create($objParentObject, $intIdModelo, $intCreateType);
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
				$this->lblIdModelo->Text = $this->objBackup10122010->IdModelo;
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
			$this->txtNombre->Text = $this->objBackup10122010->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Backup10122010::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objBackup10122010->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdMarca
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdMarca_Create($strControlId = null) {
			$this->txtIdMarca = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdMarca->Name = QApplication::Translate('Id Marca');
			$this->txtIdMarca->Text = $this->objBackup10122010->IdMarca;
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
			$this->lblIdMarca->Text = $this->objBackup10122010->IdMarca;
			$this->lblIdMarca->Required = true;
			$this->lblIdMarca->Format = $strFormat;
			return $this->lblIdMarca;
		}



		/**
		 * Refresh this MetaControl with Data from the local Backup10122010 object.
		 * @param boolean $blnReload reload Backup10122010 from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objBackup10122010->Reload();

			if ($this->lblIdModelo) if ($this->blnEditMode) $this->lblIdModelo->Text = $this->objBackup10122010->IdModelo;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objBackup10122010->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objBackup10122010->Nombre;

			if ($this->txtIdMarca) $this->txtIdMarca->Text = $this->objBackup10122010->IdMarca;
			if ($this->lblIdMarca) $this->lblIdMarca->Text = $this->objBackup10122010->IdMarca;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC BACKUP10122010 OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Backup10122010 instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveBackup10122010() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objBackup10122010->Nombre = $this->txtNombre->Text;
				if ($this->txtIdMarca) $this->objBackup10122010->IdMarca = $this->txtIdMarca->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Backup10122010 object
				$this->objBackup10122010->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Backup10122010 instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteBackup10122010() {
			$this->objBackup10122010->Delete();
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
				case 'Backup10122010': return $this->objBackup10122010;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Backup10122010 fields -- will be created dynamically if not yet created
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
					// Controls that point to Backup10122010 fields
					case 'IdModeloControl':
						return ($this->lblIdModelo = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
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