<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FichasInfo class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FichasInfo object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FichasInfoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FichasInfo $FichasInfo the actual FichasInfo data class being edited
	 * property QLabel $IdFichasInfoControl
	 * property-read QLabel $IdFichasInfoLabel
	 * property QListBox $IdFichasControl
	 * property-read QLabel $IdFichasLabel
	 * property QDateTimePicker $FechaControl
	 * property-read QLabel $FechaLabel
	 * property QTextBox $AccionControl
	 * property-read QLabel $AccionLabel
	 * property QTextBox $NotasControl
	 * property-read QLabel $NotasLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FichasInfoMetaControlGen extends QBaseClass {
		// General Variables
		protected $objFichasInfo;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of FichasInfo's individual data fields
		protected $lblIdFichasInfo;
		protected $lstIdFichasObject;
		protected $calFecha;
		protected $txtAccion;
		protected $txtNotas;

		// Controls that allow the viewing of FichasInfo's individual data fields
		protected $lblIdFichas;
		protected $lblFecha;
		protected $lblAccion;
		protected $lblNotas;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FichasInfoMetaControl to edit a single FichasInfo object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FichasInfo object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasInfoMetaControl
		 * @param FichasInfo $objFichasInfo new or existing FichasInfo object
		 */
		 public function __construct($objParentObject, FichasInfo $objFichasInfo) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FichasInfoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FichasInfo object
			$this->objFichasInfo = $objFichasInfo;

			// Figure out if we're Editing or Creating New
			if ($this->objFichasInfo->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasInfoMetaControl
		 * @param integer $intIdFichasInfo primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FichasInfo object creation - defaults to CreateOrEdit
 		 * @return FichasInfoMetaControl
		 */
		public static function Create($objParentObject, $intIdFichasInfo = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdFichasInfo)) {
				$objFichasInfo = FichasInfo::Load($intIdFichasInfo);

				// FichasInfo was found -- return it!
				if ($objFichasInfo)
					return new FichasInfoMetaControl($objParentObject, $objFichasInfo);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FichasInfo object with PK arguments: ' . $intIdFichasInfo);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FichasInfoMetaControl($objParentObject, new FichasInfo());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasInfoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasInfo object creation - defaults to CreateOrEdit
		 * @return FichasInfoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdFichasInfo = QApplication::PathInfo(0);
			return FichasInfoMetaControl::Create($objParentObject, $intIdFichasInfo, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasInfoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasInfo object creation - defaults to CreateOrEdit
		 * @return FichasInfoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdFichasInfo = QApplication::QueryString('intIdFichasInfo');
			return FichasInfoMetaControl::Create($objParentObject, $intIdFichasInfo, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdFichasInfo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdFichasInfo_Create($strControlId = null) {
			$this->lblIdFichasInfo = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdFichasInfo->Name = QApplication::Translate('Id Fichas Info');
			if ($this->blnEditMode)
				$this->lblIdFichasInfo->Text = $this->objFichasInfo->IdFichasInfo;
			else
				$this->lblIdFichasInfo->Text = 'N/A';
			return $this->lblIdFichasInfo;
		}

		/**
		 * Create and setup QListBox lstIdFichasObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstIdFichasObject_Create($strControlId = null) {
			$this->lstIdFichasObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdFichasObject->Name = QApplication::Translate('Id Fichas Object');
			$this->lstIdFichasObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdFichasObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objIdFichasObjectArray = Fichas::LoadAll();
			if ($objIdFichasObjectArray) foreach ($objIdFichasObjectArray as $objIdFichasObject) {
				$objListItem = new QListItem($objIdFichasObject->__toString(), $objIdFichasObject->Id);
				if (($this->objFichasInfo->IdFichasObject) && ($this->objFichasInfo->IdFichasObject->Id == $objIdFichasObject->Id))
					$objListItem->Selected = true;
				$this->lstIdFichasObject->AddItem($objListItem);
			}
			return $this->lstIdFichasObject;
		}

		/**
		 * Create and setup QLabel lblIdFichas
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdFichas_Create($strControlId = null) {
			$this->lblIdFichas = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdFichas->Name = QApplication::Translate('Id Fichas Object');
			$this->lblIdFichas->Text = ($this->objFichasInfo->IdFichasObject) ? $this->objFichasInfo->IdFichasObject->__toString() : null;
			$this->lblIdFichas->Required = true;
			return $this->lblIdFichas;
		}

		/**
		 * Create and setup QDateTimePicker calFecha
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFecha_Create($strControlId = null) {
			$this->calFecha = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFecha->Name = QApplication::Translate('Fecha');
			$this->calFecha->DateTime = $this->objFichasInfo->Fecha;
			$this->calFecha->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calFecha->Required = true;
			return $this->calFecha;
		}

		/**
		 * Create and setup QLabel lblFecha
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFecha_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFecha = new QLabel($this->objParentObject, $strControlId);
			$this->lblFecha->Name = QApplication::Translate('Fecha');
			$this->strFechaDateTimeFormat = $strDateTimeFormat;
			$this->lblFecha->Text = sprintf($this->objFichasInfo->Fecha) ? $this->objFichasInfo->Fecha->qFormat($this->strFechaDateTimeFormat) : null;
			$this->lblFecha->Required = true;
			return $this->lblFecha;
		}

		protected $strFechaDateTimeFormat;


		/**
		 * Create and setup QTextBox txtAccion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAccion_Create($strControlId = null) {
			$this->txtAccion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAccion->Name = QApplication::Translate('Accion');
			$this->txtAccion->Text = $this->objFichasInfo->Accion;
			return $this->txtAccion;
		}

		/**
		 * Create and setup QLabel lblAccion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAccion_Create($strControlId = null) {
			$this->lblAccion = new QLabel($this->objParentObject, $strControlId);
			$this->lblAccion->Name = QApplication::Translate('Accion');
			$this->lblAccion->Text = $this->objFichasInfo->Accion;
			return $this->lblAccion;
		}

		/**
		 * Create and setup QTextBox txtNotas
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNotas_Create($strControlId = null) {
			$this->txtNotas = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNotas->Name = QApplication::Translate('Notas');
			$this->txtNotas->Text = $this->objFichasInfo->Notas;
			$this->txtNotas->MaxLength = FichasInfo::NotasMaxLength;
			return $this->txtNotas;
		}

		/**
		 * Create and setup QLabel lblNotas
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNotas_Create($strControlId = null) {
			$this->lblNotas = new QLabel($this->objParentObject, $strControlId);
			$this->lblNotas->Name = QApplication::Translate('Notas');
			$this->lblNotas->Text = $this->objFichasInfo->Notas;
			return $this->lblNotas;
		}



		/**
		 * Refresh this MetaControl with Data from the local FichasInfo object.
		 * @param boolean $blnReload reload FichasInfo from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFichasInfo->Reload();

			if ($this->lblIdFichasInfo) if ($this->blnEditMode) $this->lblIdFichasInfo->Text = $this->objFichasInfo->IdFichasInfo;

			if ($this->lstIdFichasObject) {
					$this->lstIdFichasObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdFichasObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdFichasObjectArray = Fichas::LoadAll();
				if ($objIdFichasObjectArray) foreach ($objIdFichasObjectArray as $objIdFichasObject) {
					$objListItem = new QListItem($objIdFichasObject->__toString(), $objIdFichasObject->Id);
					if (($this->objFichasInfo->IdFichasObject) && ($this->objFichasInfo->IdFichasObject->Id == $objIdFichasObject->Id))
						$objListItem->Selected = true;
					$this->lstIdFichasObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdFichas) $this->lblIdFichas->Text = ($this->objFichasInfo->IdFichasObject) ? $this->objFichasInfo->IdFichasObject->__toString() : null;

			if ($this->calFecha) $this->calFecha->DateTime = $this->objFichasInfo->Fecha;
			if ($this->lblFecha) $this->lblFecha->Text = sprintf($this->objFichasInfo->Fecha) ? $this->objFichasInfo->Fecha->qFormat($this->strFechaDateTimeFormat) : null;

			if ($this->txtAccion) $this->txtAccion->Text = $this->objFichasInfo->Accion;
			if ($this->lblAccion) $this->lblAccion->Text = $this->objFichasInfo->Accion;

			if ($this->txtNotas) $this->txtNotas->Text = $this->objFichasInfo->Notas;
			if ($this->lblNotas) $this->lblNotas->Text = $this->objFichasInfo->Notas;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FICHASINFO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FichasInfo instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFichasInfo() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstIdFichasObject) $this->objFichasInfo->IdFichas = $this->lstIdFichasObject->SelectedValue;
				if ($this->calFecha) $this->objFichasInfo->Fecha = $this->calFecha->DateTime;
				if ($this->txtAccion) $this->objFichasInfo->Accion = $this->txtAccion->Text;
				if ($this->txtNotas) $this->objFichasInfo->Notas = $this->txtNotas->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FichasInfo object
				$this->objFichasInfo->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FichasInfo instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFichasInfo() {
			$this->objFichasInfo->Delete();
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
				case 'FichasInfo': return $this->objFichasInfo;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FichasInfo fields -- will be created dynamically if not yet created
				case 'IdFichasInfoControl':
					if (!$this->lblIdFichasInfo) return $this->lblIdFichasInfo_Create();
					return $this->lblIdFichasInfo;
				case 'IdFichasInfoLabel':
					if (!$this->lblIdFichasInfo) return $this->lblIdFichasInfo_Create();
					return $this->lblIdFichasInfo;
				case 'IdFichasControl':
					if (!$this->lstIdFichasObject) return $this->lstIdFichasObject_Create();
					return $this->lstIdFichasObject;
				case 'IdFichasLabel':
					if (!$this->lblIdFichas) return $this->lblIdFichas_Create();
					return $this->lblIdFichas;
				case 'FechaControl':
					if (!$this->calFecha) return $this->calFecha_Create();
					return $this->calFecha;
				case 'FechaLabel':
					if (!$this->lblFecha) return $this->lblFecha_Create();
					return $this->lblFecha;
				case 'AccionControl':
					if (!$this->txtAccion) return $this->txtAccion_Create();
					return $this->txtAccion;
				case 'AccionLabel':
					if (!$this->lblAccion) return $this->lblAccion_Create();
					return $this->lblAccion;
				case 'NotasControl':
					if (!$this->txtNotas) return $this->txtNotas_Create();
					return $this->txtNotas;
				case 'NotasLabel':
					if (!$this->lblNotas) return $this->lblNotas_Create();
					return $this->lblNotas;
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
					// Controls that point to FichasInfo fields
					case 'IdFichasInfoControl':
						return ($this->lblIdFichasInfo = QType::Cast($mixValue, 'QControl'));
					case 'IdFichasControl':
						return ($this->lstIdFichasObject = QType::Cast($mixValue, 'QControl'));
					case 'FechaControl':
						return ($this->calFecha = QType::Cast($mixValue, 'QControl'));
					case 'AccionControl':
						return ($this->txtAccion = QType::Cast($mixValue, 'QControl'));
					case 'NotasControl':
						return ($this->txtNotas = QType::Cast($mixValue, 'QControl'));
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