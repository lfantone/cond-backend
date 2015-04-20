<?php
require(__DATAGEN_META_CONTROLS__ . '/VersionMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * Version class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single Version object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a VersionMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My Application
 * @subpackage MetaControls
 */
class VersionMetaControl extends VersionMetaControlGen {
    protected $lstIdMarcaObject;
    public function lstIdMarcaObject_Create($strControlId = null) {
        if (!$intIdPais = QApplication::QueryString('id_pais'))
            $intIdPais = 2; 
        $this->lstIdMarcaObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstIdMarcaObject->Name = QApplication::Translate('Marca');
        $this->lstIdMarcaObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstIdMarcaObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objIdMarcaObjectArray = Marcas::LoadAll();
        #$objIdMarcaObjectArray = Marcas::QueryArray(QQ::Equal(QQN::Marcas()->IdPais, $intIdPais));
        if ($objIdMarcaObjectArray) foreach ($objIdMarcaObjectArray as $objIdMarcaObject) {
                $objListItem = new QListItem($objIdMarcaObject->__toString(), $objIdMarcaObject->Id);
                if (($this->objVersion->IdModeloObject->IdMarca) && ($this->objVersion->IdModeloObject->IdMarca == $objIdMarcaObject->Id))
                    $objListItem->Selected = true;
                $this->lstIdMarcaObject->AddItem($objListItem);
            }
        return $this->lstIdMarcaObject;
    }
		public function lstIdModeloObject_Create($strControlId = null) {
      if (!$intIdPais = QApplication::QueryString('id_pais'))
          $intIdPais = 2; 
			$this->lstIdModeloObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdModeloObject->Name = QApplication::Translate('Id Modelo Object');
			$this->lstIdModeloObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdModeloObject->AddItem(QApplication::Translate('- Select One -'), null);
			#$objIdModeloObjectArray = Modelo::LoadAll();
			$objIdModeloObjectArray = Modelo::QueryArray(QQ::Equal(QQN::Modelo()->IdPais, $intIdPais));
			if ($objIdModeloObjectArray) foreach ($objIdModeloObjectArray as $objIdModeloObject) {
				$objListItem = new QListItem(($objIdModeloObject->IdPais == 3 ?'Mex':substr(utf8_encode($objIdModeloObject->IdPaisObject->Nombre),0,3)).' '. $objIdModeloObject->__toString(), $objIdModeloObject->IdModelo);
				if (($this->objVersion->IdModeloObject) && ($this->objVersion->IdModeloObject->IdModelo == $objIdModeloObject->IdModelo))
					$objListItem->Selected = true;
				$this->lstIdModeloObject->AddItem($objListItem);
			}
			return $this->lstIdModeloObject;
		}

}
?>
