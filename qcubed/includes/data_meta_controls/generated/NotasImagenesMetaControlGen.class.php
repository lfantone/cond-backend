<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NotasImagenes class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NotasImagenes object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NotasImagenesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read NotasImagenes $NotasImagenes the actual NotasImagenes data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $IdNotaControl
	 * property-read QLabel $IdNotaLabel
	 * property QListBox $IdImagenControl
	 * property-read QLabel $IdImagenLabel
	 * property QIntegerTextBox $PredeterminadaControl
	 * property-read QLabel $PredeterminadaLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NotasImagenesMetaControlGen extends QBaseClass {
		// General Variables
		protected $objNotasImagenes;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of NotasImagenes's individual data fields
		protected $lblId;
		protected $txtIdNota;
		protected $lstIdImagenObject;
		protected $txtPredeterminada;

		// Controls that allow the viewing of NotasImagenes's individual data fields
		protected $lblIdNota;
		protected $lblIdImagen;
		protected $lblPredeterminada;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NotasImagenesMetaControl to edit a single NotasImagenes object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NotasImagenes object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasImagenesMetaControl
		 * @param NotasImagenes $objNotasImagenes new or existing NotasImagenes object
		 */
		 public function __construct($objParentObject, NotasImagenes $objNotasImagenes) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NotasImagenesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NotasImagenes object
			$this->objNotasImagenes = $objNotasImagenes;

			// Figure out if we're Editing or Creating New
			if ($this->objNotasImagenes->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasImagenesMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NotasImagenes object creation - defaults to CreateOrEdit
 		 * @return NotasImagenesMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objNotasImagenes = NotasImagenes::Load($intId);

				// NotasImagenes was found -- return it!
				if ($objNotasImagenes)
					return new NotasImagenesMetaControl($objParentObject, $objNotasImagenes);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NotasImagenes object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NotasImagenesMetaControl($objParentObject, new NotasImagenes());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasImagenesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NotasImagenes object creation - defaults to CreateOrEdit
		 * @return NotasImagenesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return NotasImagenesMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NotasImagenesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NotasImagenes object creation - defaults to CreateOrEdit
		 * @return NotasImagenesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return NotasImagenesMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objNotasImagenes->Id;
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
			$this->txtIdNota->Text = $this->objNotasImagenes->IdNota;
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
			$this->lblIdNota->Text = $this->objNotasImagenes->IdNota;
			$this->lblIdNota->Required = true;
			$this->lblIdNota->Format = $strFormat;
			return $this->lblIdNota;
		}

		/**
		 * Create and setup QListBox lstIdImagenObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstIdImagenObject_Create($strControlId = null) {
			$this->lstIdImagenObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdImagenObject->Name = QApplication::Translate('Id Imagen Object');
			$this->lstIdImagenObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdImagenObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objIdImagenObjectArray = Imagenes::LoadAll();
			if ($objIdImagenObjectArray) foreach ($objIdImagenObjectArray as $objIdImagenObject) {
				$objListItem = new QListItem($objIdImagenObject->__toString(), $objIdImagenObject->Id);
				if (($this->objNotasImagenes->IdImagenObject) && ($this->objNotasImagenes->IdImagenObject->Id == $objIdImagenObject->Id))
					$objListItem->Selected = true;
				$this->lstIdImagenObject->AddItem($objListItem);
			}
			return $this->lstIdImagenObject;
		}

		/**
		 * Create and setup QLabel lblIdImagen
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdImagen_Create($strControlId = null) {
			$this->lblIdImagen = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdImagen->Name = QApplication::Translate('Id Imagen Object');
			$this->lblIdImagen->Text = ($this->objNotasImagenes->IdImagenObject) ? $this->objNotasImagenes->IdImagenObject->__toString() : null;
			$this->lblIdImagen->Required = true;
			return $this->lblIdImagen;
		}

		/**
		 * Create and setup QIntegerTextBox txtPredeterminada
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtPredeterminada_Create($strControlId = null) {
			$this->txtPredeterminada = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtPredeterminada->Name = QApplication::Translate('Predeterminada');
			$this->txtPredeterminada->Text = $this->objNotasImagenes->Predeterminada;
			$this->txtPredeterminada->Required = true;
			return $this->txtPredeterminada;
		}

		/**
		 * Create and setup QLabel lblPredeterminada
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblPredeterminada_Create($strControlId = null, $strFormat = null) {
			$this->lblPredeterminada = new QLabel($this->objParentObject, $strControlId);
			$this->lblPredeterminada->Name = QApplication::Translate('Predeterminada');
			$this->lblPredeterminada->Text = $this->objNotasImagenes->Predeterminada;
			$this->lblPredeterminada->Required = true;
			$this->lblPredeterminada->Format = $strFormat;
			return $this->lblPredeterminada;
		}



		/**
		 * Refresh this MetaControl with Data from the local NotasImagenes object.
		 * @param boolean $blnReload reload NotasImagenes from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNotasImagenes->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objNotasImagenes->Id;

			if ($this->txtIdNota) $this->txtIdNota->Text = $this->objNotasImagenes->IdNota;
			if ($this->lblIdNota) $this->lblIdNota->Text = $this->objNotasImagenes->IdNota;

			if ($this->lstIdImagenObject) {
					$this->lstIdImagenObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdImagenObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdImagenObjectArray = Imagenes::LoadAll();
				if ($objIdImagenObjectArray) foreach ($objIdImagenObjectArray as $objIdImagenObject) {
					$objListItem = new QListItem($objIdImagenObject->__toString(), $objIdImagenObject->Id);
					if (($this->objNotasImagenes->IdImagenObject) && ($this->objNotasImagenes->IdImagenObject->Id == $objIdImagenObject->Id))
						$objListItem->Selected = true;
					$this->lstIdImagenObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdImagen) $this->lblIdImagen->Text = ($this->objNotasImagenes->IdImagenObject) ? $this->objNotasImagenes->IdImagenObject->__toString() : null;

			if ($this->txtPredeterminada) $this->txtPredeterminada->Text = $this->objNotasImagenes->Predeterminada;
			if ($this->lblPredeterminada) $this->lblPredeterminada->Text = $this->objNotasImagenes->Predeterminada;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NOTASIMAGENES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NotasImagenes instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNotasImagenes() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtIdNota) $this->objNotasImagenes->IdNota = $this->txtIdNota->Text;
				if ($this->lstIdImagenObject) $this->objNotasImagenes->IdImagen = $this->lstIdImagenObject->SelectedValue;
				if ($this->txtPredeterminada) $this->objNotasImagenes->Predeterminada = $this->txtPredeterminada->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NotasImagenes object
				$this->objNotasImagenes->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NotasImagenes instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNotasImagenes() {
			$this->objNotasImagenes->Delete();
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
				case 'NotasImagenes': return $this->objNotasImagenes;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NotasImagenes fields -- will be created dynamically if not yet created
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
				case 'IdImagenControl':
					if (!$this->lstIdImagenObject) return $this->lstIdImagenObject_Create();
					return $this->lstIdImagenObject;
				case 'IdImagenLabel':
					if (!$this->lblIdImagen) return $this->lblIdImagen_Create();
					return $this->lblIdImagen;
				case 'PredeterminadaControl':
					if (!$this->txtPredeterminada) return $this->txtPredeterminada_Create();
					return $this->txtPredeterminada;
				case 'PredeterminadaLabel':
					if (!$this->lblPredeterminada) return $this->lblPredeterminada_Create();
					return $this->lblPredeterminada;
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
					// Controls that point to NotasImagenes fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'IdNotaControl':
						return ($this->txtIdNota = QType::Cast($mixValue, 'QControl'));
					case 'IdImagenControl':
						return ($this->lstIdImagenObject = QType::Cast($mixValue, 'QControl'));
					case 'PredeterminadaControl':
						return ($this->txtPredeterminada = QType::Cast($mixValue, 'QControl'));
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