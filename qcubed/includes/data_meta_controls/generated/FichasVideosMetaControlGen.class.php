<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FichasVideos class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FichasVideos object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FichasVideosMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FichasVideos $FichasVideos the actual FichasVideos data class being edited
	 * property QLabel $IdFichaVideoControl
	 * property-read QLabel $IdFichaVideoLabel
	 * property QListBox $IdFichaControl
	 * property-read QLabel $IdFichaLabel
	 * property QListBox $IdVideoControl
	 * property-read QLabel $IdVideoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FichasVideosMetaControlGen extends QBaseClass {
		// General Variables
		protected $objFichasVideos;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of FichasVideos's individual data fields
		protected $lblIdFichaVideo;
		protected $lstIdFichaObject;
		protected $lstIdVideoObject;

		// Controls that allow the viewing of FichasVideos's individual data fields
		protected $lblIdFicha;
		protected $lblIdVideo;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FichasVideosMetaControl to edit a single FichasVideos object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FichasVideos object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasVideosMetaControl
		 * @param FichasVideos $objFichasVideos new or existing FichasVideos object
		 */
		 public function __construct($objParentObject, FichasVideos $objFichasVideos) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FichasVideosMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FichasVideos object
			$this->objFichasVideos = $objFichasVideos;

			// Figure out if we're Editing or Creating New
			if ($this->objFichasVideos->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasVideosMetaControl
		 * @param integer $intIdFichaVideo primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FichasVideos object creation - defaults to CreateOrEdit
 		 * @return FichasVideosMetaControl
		 */
		public static function Create($objParentObject, $intIdFichaVideo = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdFichaVideo)) {
				$objFichasVideos = FichasVideos::Load($intIdFichaVideo);

				// FichasVideos was found -- return it!
				if ($objFichasVideos)
					return new FichasVideosMetaControl($objParentObject, $objFichasVideos);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FichasVideos object with PK arguments: ' . $intIdFichaVideo);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FichasVideosMetaControl($objParentObject, new FichasVideos());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasVideosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasVideos object creation - defaults to CreateOrEdit
		 * @return FichasVideosMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdFichaVideo = QApplication::PathInfo(0);
			return FichasVideosMetaControl::Create($objParentObject, $intIdFichaVideo, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FichasVideosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FichasVideos object creation - defaults to CreateOrEdit
		 * @return FichasVideosMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdFichaVideo = QApplication::QueryString('intIdFichaVideo');
			return FichasVideosMetaControl::Create($objParentObject, $intIdFichaVideo, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdFichaVideo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdFichaVideo_Create($strControlId = null) {
			$this->lblIdFichaVideo = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdFichaVideo->Name = QApplication::Translate('Id Ficha Video');
			if ($this->blnEditMode)
				$this->lblIdFichaVideo->Text = $this->objFichasVideos->IdFichaVideo;
			else
				$this->lblIdFichaVideo->Text = 'N/A';
			return $this->lblIdFichaVideo;
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
				if (($this->objFichasVideos->IdFichaObject) && ($this->objFichasVideos->IdFichaObject->Id == $objIdFichaObject->Id))
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
			$this->lblIdFicha->Text = ($this->objFichasVideos->IdFichaObject) ? $this->objFichasVideos->IdFichaObject->__toString() : null;
			$this->lblIdFicha->Required = true;
			return $this->lblIdFicha;
		}

		/**
		 * Create and setup QListBox lstIdVideoObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstIdVideoObject_Create($strControlId = null) {
			$this->lstIdVideoObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdVideoObject->Name = QApplication::Translate('Id Video Object');
			$this->lstIdVideoObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdVideoObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objIdVideoObjectArray = Videos::LoadAll();
			if ($objIdVideoObjectArray) foreach ($objIdVideoObjectArray as $objIdVideoObject) {
				$objListItem = new QListItem($objIdVideoObject->__toString(), $objIdVideoObject->Id);
				if (($this->objFichasVideos->IdVideoObject) && ($this->objFichasVideos->IdVideoObject->Id == $objIdVideoObject->Id))
					$objListItem->Selected = true;
				$this->lstIdVideoObject->AddItem($objListItem);
			}
			return $this->lstIdVideoObject;
		}

		/**
		 * Create and setup QLabel lblIdVideo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdVideo_Create($strControlId = null) {
			$this->lblIdVideo = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdVideo->Name = QApplication::Translate('Id Video Object');
			$this->lblIdVideo->Text = ($this->objFichasVideos->IdVideoObject) ? $this->objFichasVideos->IdVideoObject->__toString() : null;
			$this->lblIdVideo->Required = true;
			return $this->lblIdVideo;
		}



		/**
		 * Refresh this MetaControl with Data from the local FichasVideos object.
		 * @param boolean $blnReload reload FichasVideos from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFichasVideos->Reload();

			if ($this->lblIdFichaVideo) if ($this->blnEditMode) $this->lblIdFichaVideo->Text = $this->objFichasVideos->IdFichaVideo;

			if ($this->lstIdFichaObject) {
					$this->lstIdFichaObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdFichaObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdFichaObjectArray = Fichas::LoadAll();
				if ($objIdFichaObjectArray) foreach ($objIdFichaObjectArray as $objIdFichaObject) {
					$objListItem = new QListItem($objIdFichaObject->__toString(), $objIdFichaObject->Id);
					if (($this->objFichasVideos->IdFichaObject) && ($this->objFichasVideos->IdFichaObject->Id == $objIdFichaObject->Id))
						$objListItem->Selected = true;
					$this->lstIdFichaObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdFicha) $this->lblIdFicha->Text = ($this->objFichasVideos->IdFichaObject) ? $this->objFichasVideos->IdFichaObject->__toString() : null;

			if ($this->lstIdVideoObject) {
					$this->lstIdVideoObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdVideoObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdVideoObjectArray = Videos::LoadAll();
				if ($objIdVideoObjectArray) foreach ($objIdVideoObjectArray as $objIdVideoObject) {
					$objListItem = new QListItem($objIdVideoObject->__toString(), $objIdVideoObject->Id);
					if (($this->objFichasVideos->IdVideoObject) && ($this->objFichasVideos->IdVideoObject->Id == $objIdVideoObject->Id))
						$objListItem->Selected = true;
					$this->lstIdVideoObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdVideo) $this->lblIdVideo->Text = ($this->objFichasVideos->IdVideoObject) ? $this->objFichasVideos->IdVideoObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FICHASVIDEOS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FichasVideos instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFichasVideos() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstIdFichaObject) $this->objFichasVideos->IdFicha = $this->lstIdFichaObject->SelectedValue;
				if ($this->lstIdVideoObject) $this->objFichasVideos->IdVideo = $this->lstIdVideoObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FichasVideos object
				$this->objFichasVideos->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FichasVideos instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFichasVideos() {
			$this->objFichasVideos->Delete();
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
				case 'FichasVideos': return $this->objFichasVideos;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FichasVideos fields -- will be created dynamically if not yet created
				case 'IdFichaVideoControl':
					if (!$this->lblIdFichaVideo) return $this->lblIdFichaVideo_Create();
					return $this->lblIdFichaVideo;
				case 'IdFichaVideoLabel':
					if (!$this->lblIdFichaVideo) return $this->lblIdFichaVideo_Create();
					return $this->lblIdFichaVideo;
				case 'IdFichaControl':
					if (!$this->lstIdFichaObject) return $this->lstIdFichaObject_Create();
					return $this->lstIdFichaObject;
				case 'IdFichaLabel':
					if (!$this->lblIdFicha) return $this->lblIdFicha_Create();
					return $this->lblIdFicha;
				case 'IdVideoControl':
					if (!$this->lstIdVideoObject) return $this->lstIdVideoObject_Create();
					return $this->lstIdVideoObject;
				case 'IdVideoLabel':
					if (!$this->lblIdVideo) return $this->lblIdVideo_Create();
					return $this->lblIdVideo;
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
					// Controls that point to FichasVideos fields
					case 'IdFichaVideoControl':
						return ($this->lblIdFichaVideo = QType::Cast($mixValue, 'QControl'));
					case 'IdFichaControl':
						return ($this->lstIdFichaObject = QType::Cast($mixValue, 'QControl'));
					case 'IdVideoControl':
						return ($this->lstIdVideoObject = QType::Cast($mixValue, 'QControl'));
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