<?php
	require(__DATAGEN_META_CONTROLS__ . '/ModeloMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Modelo class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Modelo object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ModeloMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class ModeloMetaControl extends ModeloMetaControlGen {
		public function lstIdPaisObject_Create($strControlId = null) {
			$this->lstIdPaisObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdPaisObject->Name = QApplication::Translate('Id Pais Object');
			$this->lstIdPaisObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdPaisObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objIdPaisObjectArray = Paises::LoadAll();
			if ($objIdPaisObjectArray) foreach ($objIdPaisObjectArray as $objIdPaisObject) {
				$objListItem = new QListItem($objIdPaisObject->__toString(), $objIdPaisObject->Id);
				if (($this->objModelo->IdPaisObject) && ($this->objModelo->IdPaisObject->Id == $objIdPaisObject->Id))
					$objListItem->Selected = true;
				$this->lstIdPaisObject->AddItem($objListItem);
			}
			return $this->lstIdPaisObject;
		}


		public function lstIdMarcaObject_Create($strControlId = null) {
      if (!$intIdPais = QApplication::QueryString('id_pais'))
          $intIdPais = 2;
			$this->lstIdMarcaObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdMarcaObject->Name = QApplication::Translate('Id Marca Object');
			$this->lstIdMarcaObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdMarcaObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objIdMarcaObjectArray = Marcas::LoadAll();
			#$objIdMarcaObjectArray = Marcas::QueryArray(QQ::Equal(QQN::Marcas()->IdPais, $intIdPais));
			if ($objIdMarcaObjectArray) foreach ($objIdMarcaObjectArray as $objIdMarcaObject) {
				$objListItem = new QListItem($objIdMarcaObject->__toString(), $objIdMarcaObject->Id);
				if (($this->objModelo->IdMarcaObject) && ($this->objModelo->IdMarcaObject->Id == $objIdMarcaObject->Id))
					$objListItem->Selected = true;
				$this->lstIdMarcaObject->AddItem($objListItem);
			}
			return $this->lstIdMarcaObject;
		}

	}
?>
