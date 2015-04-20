<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FichasImagenes class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FichasImagenes object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FichasImagenesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FichasImagenes $FichasImagenes the actual FichasImagenes data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $IdFichaControl
	 * property-read QLabel $IdFichaLabel
	 * property QListBox $IdImagenControl
	 * property-read QLabel $IdImagenLabel
	 * property QCheckBox $ImagenPrincipalControl
	 * property-read QLabel $ImagenPrincipalLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FichasImagenesMetaControlGen extends QBaseClass {
		// General Variables
		protected $objFichasImagenes;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of FichasImagenes's individual data fields
		protected $lblId;
		protected $lstIdFichaObject;
		protected $lstIdImagenObject;
		protected $chkImagenPrincipal;

		// Controls that allow the viewing of FichasImagenes's individual data fields
		protected $lblIdFicha;
		protected $lblIdImagen;
		protected $lblImagenPrincipal;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FichasImagenesMetaControl to edit a single FichasImagenes object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FichasImagenes object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasImagenesMetaControl
		 * @param FichasImagenes $objFichasImagenes new or existing FichasImagenes object
		 */
		 public function __construct($objParentObject, FichasImagenes $objFichasImagenes) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FichasImagenesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FichasImagenes object
			$this->objFichasImagenes = $objFichasImagenes;

			// Figure out if we're Editing or Creating New
			if ($this->objFichasImagenes->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasImagenesMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FichasImagenes object creation - defaults to CreateOrEdit
 		 * @return FichasImagenesMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objFichasImagenes = FichasImagenes::Load($intId);

				// FichasImagenes was found -- return it!
				if ($objFichasImagenes)
					return new FichasImagenesMetaControl($objParentObject, $objFichasImagenes);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FichasImagenes object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FichasImagenesMetaControl($objParentObject, new FichasImagenes());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasImagenesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasImagenes object creation - defaults to CreateOrEdit
		 * @return FichasImagenesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return FichasImagenesMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasImagenesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasImagenes object creation - defaults to CreateOrEdit
		 * @return FichasImagenesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return FichasImagenesMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objFichasImagenes->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstIdFichaObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstIdFichaObject_Create($strControlId = null) {
			$this->lstIdFichaObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdFichaObject->Name = QApplication::Translate('Id Ficha Object');
			$this->lstIdFichaObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdFichaObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objIdFichaObjectArray = Fichas::LoadAll();
			if ($objIdFichaObjectArray) foreach ($objIdFichaObjectArray as $objIdFichaObject) {
				$objListItem = new QListItem($objIdFichaObject->__toString(), $objIdFichaObject->Id);
				if (($this->objFichasImagenes->IdFichaObject) && ($this->objFichasImagenes->IdFichaObject->Id == $objIdFichaObject->Id))
					$objListItem->Selected = true;
				$this->lstIdFichaObject->AddItem($objListItem);
			}
			return $this->lstIdFichaObject;
		}

		/**
		 * Create and setup QLabel lblIdFicha
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdFicha_Create($strControlId = null) {
			$this->lblIdFicha = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdFicha->Name = QApplication::Translate('Id Ficha Object');
			$this->lblIdFicha->Text = ($this->objFichasImagenes->IdFichaObject) ? $this->objFichasImagenes->IdFichaObject->__toString() : null;
			$this->lblIdFicha->Required = true;
			return $this->lblIdFicha;
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
				if (($this->objFichasImagenes->IdImagenObject) && ($this->objFichasImagenes->IdImagenObject->Id == $objIdImagenObject->Id))
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
			$this->lblIdImagen->Text = ($this->objFichasImagenes->IdImagenObject) ? $this->objFichasImagenes->IdImagenObject->__toString() : null;
			$this->lblIdImagen->Required = true;
			return $this->lblIdImagen;
		}

		/**
		 * Create and setup QCheckBox chkImagenPrincipal
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkImagenPrincipal_Create($strControlId = null) {
			$this->chkImagenPrincipal = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkImagenPrincipal->Name = QApplication::Translate('Imagen Principal');
			$this->chkImagenPrincipal->Checked = $this->objFichasImagenes->ImagenPrincipal;
			return $this->chkImagenPrincipal;
		}

		/**
		 * Create and setup QLabel lblImagenPrincipal
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblImagenPrincipal_Create($strControlId = null) {
			$this->lblImagenPrincipal = new QLabel($this->objParentObject, $strControlId);
			$this->lblImagenPrincipal->Name = QApplication::Translate('Imagen Principal');
			$this->lblImagenPrincipal->Text = ($this->objFichasImagenes->ImagenPrincipal) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblImagenPrincipal;
		}



		/**
		 * Refresh this MetaControl with Data from the local FichasImagenes object.
		 * @param boolean $blnReload reload FichasImagenes from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFichasImagenes->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objFichasImagenes->Id;

			if ($this->lstIdFichaObject) {
					$this->lstIdFichaObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdFichaObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdFichaObjectArray = Fichas::LoadAll();
				if ($objIdFichaObjectArray) foreach ($objIdFichaObjectArray as $objIdFichaObject) {
					$objListItem = new QListItem($objIdFichaObject->__toString(), $objIdFichaObject->Id);
					if (($this->objFichasImagenes->IdFichaObject) && ($this->objFichasImagenes->IdFichaObject->Id == $objIdFichaObject->Id))
						$objListItem->Selected = true;
					$this->lstIdFichaObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdFicha) $this->lblIdFicha->Text = ($this->objFichasImagenes->IdFichaObject) ? $this->objFichasImagenes->IdFichaObject->__toString() : null;

			if ($this->lstIdImagenObject) {
					$this->lstIdImagenObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdImagenObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdImagenObjectArray = Imagenes::LoadAll();
				if ($objIdImagenObjectArray) foreach ($objIdImagenObjectArray as $objIdImagenObject) {
					$objListItem = new QListItem($objIdImagenObject->__toString(), $objIdImagenObject->Id);
					if (($this->objFichasImagenes->IdImagenObject) && ($this->objFichasImagenes->IdImagenObject->Id == $objIdImagenObject->Id))
						$objListItem->Selected = true;
					$this->lstIdImagenObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdImagen) $this->lblIdImagen->Text = ($this->objFichasImagenes->IdImagenObject) ? $this->objFichasImagenes->IdImagenObject->__toString() : null;

			if ($this->chkImagenPrincipal) $this->chkImagenPrincipal->Checked = $this->objFichasImagenes->ImagenPrincipal;
			if ($this->lblImagenPrincipal) $this->lblImagenPrincipal->Text = ($this->objFichasImagenes->ImagenPrincipal) ? QApplication::Translate('Yes') : QApplication::Translate('No');

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FICHASIMAGENES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FichasImagenes instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFichasImagenes() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstIdFichaObject) $this->objFichasImagenes->IdFicha = $this->lstIdFichaObject->SelectedValue;
				if ($this->lstIdImagenObject) $this->objFichasImagenes->IdImagen = $this->lstIdImagenObject->SelectedValue;
				if ($this->chkImagenPrincipal) $this->objFichasImagenes->ImagenPrincipal = $this->chkImagenPrincipal->Checked;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FichasImagenes object
				$this->objFichasImagenes->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FichasImagenes instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFichasImagenes() {
			$this->objFichasImagenes->Delete();
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
				case 'FichasImagenes': return $this->objFichasImagenes;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FichasImagenes fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdFichaControl':
					if (!$this->lstIdFichaObject) return $this->lstIdFichaObject_Create();
					return $this->lstIdFichaObject;
				case 'IdFichaLabel':
					if (!$this->lblIdFicha) return $this->lblIdFicha_Create();
					return $this->lblIdFicha;
				case 'IdImagenControl':
					if (!$this->lstIdImagenObject) return $this->lstIdImagenObject_Create();
					return $this->lstIdImagenObject;
				case 'IdImagenLabel':
					if (!$this->lblIdImagen) return $this->lblIdImagen_Create();
					return $this->lblIdImagen;
				case 'ImagenPrincipalControl':
					if (!$this->chkImagenPrincipal) return $this->chkImagenPrincipal_Create();
					return $this->chkImagenPrincipal;
				case 'ImagenPrincipalLabel':
					if (!$this->lblImagenPrincipal) return $this->lblImagenPrincipal_Create();
					return $this->lblImagenPrincipal;
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
					// Controls that point to FichasImagenes fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'IdFichaControl':
						return ($this->lstIdFichaObject = QType::Cast($mixValue, 'QControl'));
					case 'IdImagenControl':
						return ($this->lstIdImagenObject = QType::Cast($mixValue, 'QControl'));
					case 'ImagenPrincipalControl':
						return ($this->chkImagenPrincipal = QType::Cast($mixValue, 'QControl'));
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