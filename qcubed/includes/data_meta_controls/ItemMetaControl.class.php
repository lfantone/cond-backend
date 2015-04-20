<?php
require(__DATAGEN_META_CONTROLS__ . '/ItemMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * Item class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single Item object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a ItemMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My Application
 * @subpackage MetaControls
 */
class ItemMetaControl extends ItemMetaControlGen {

/**
 * This will save this object's Item instance,
 * updating only the fields which have had a control created for it.
 */
    public function SaveItem() {
        try {
        // Update any fields for controls that have been created
            //if ($this->txtNombre) $this->objItem->Nombre = $this->txtNombre->Text;
            if ($this->txtDescripcion) {
                $this->objItem->Descripcion = $this->txtDescripcion->Text;
                $strNombre = strtolower(substr($this->objItem->Descripcion, 0, 254));
                $strNombre = str_replace(array('á','é','í','ó','ú','ñ'), array('a','e','i','o','u','ni'), $strNombre);
                $strNombre = str_replace(array('!','-',' ','.','?',')', '(', ',',':', "'", "'",'+','&','$'), '_', $strNombre);
                $strNombre = preg_replace('/[^\w]+/', '', $strNombre);
                $this->objItem->Nombre = $strNombre;
            }
            if ($this->txtSeccion) $this->objItem->Seccion = $this->txtSeccion->SelectedValue;
            $this->objItem->IdTipoDatoType = TipoDatoType::checkboxortext;

            if ($this->lstIdPaisObject->SelectedValue) $this->objItem->IdPais = $this->lstIdPaisObject->SelectedValue;
            else $this->objItem->IdPais = 2;

            // Update any UniqueReverseReferences (if any) for controls that have been created for it

            // Save the Item object
            $this->objItem->Save();

        // Finally, update any ManyToManyReferences (if any)
        } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }
    /**
     * Create and setup QTextBox txtSeccion
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtSeccion_Create($strControlId = null) {
      $this->txtSeccion = new QListBox($this->objParentObject, $strControlId);
      $this->txtSeccion->Name = QApplication::Translate('Seccion');
            $objItemArray = Item::LoadAll();
            foreach ($objItemArray as $objItem) {
                $arrSeccion[] = $objItem->Seccion;
            }
            $arrSeccion = array_unique($arrSeccion);
            foreach ($arrSeccion as $strSeccion) {
                $this->txtSeccion->AddItem($strSeccion, $strSeccion, ($this->objItem->Seccion == $strSeccion));
            }
      //$this->txtSeccion->Text = $this->objItem->Seccion;
      $this->txtSeccion->Required = true;
      //$this->txtSeccion->MaxLength = Item::SeccionMaxLength;
      return $this->txtSeccion;
    }
    /**
     * Create and setup QListBox lstIdTipoDatoTypeObject
     * @param string $strControlId optional ControlId to use
     * @return QListBox
     */
    public function lstIdTipoDatoTypeObject_Create($strControlId = null) {
      $this->lstIdTipoDatoTypeObject = new QListBox($this->objParentObject, $strControlId);
      $this->lstIdTipoDatoTypeObject->Name = QApplication::Translate('Id Tipo Dato Type Object');
      //$this->lstIdTipoDatoTypeObject->Required = true;
      foreach (TipoDatoType::$NameArray as $intId => $strValue)
        $this->lstIdTipoDatoTypeObject->AddItem(new QListItem($strValue, $intId, $this->objItem->IdTipoDatoType == $intId));
      return $this->lstIdTipoDatoTypeObject;
    }
    /**
     * Create and setup QTextBox txtNombre
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtNombre_Create($strControlId = null) {
      $this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
      $this->txtNombre->Name = QApplication::Translate('Nombre');
      $this->txtNombre->Text = $this->objItem->Nombre;
      //$this->txtNombre->Required = true;
      $this->txtNombre->MaxLength = Item::NombreMaxLength;
      return $this->txtNombre;
    }

    public function lstIdPaisObject_Create($strControlId = null) {
      $this->lstIdPaisObject = new QListBox($this->objParentObject, $strControlId);
      $this->lstIdPaisObject->Name = QApplication::Translate('Id Pais Object');
      $this->lstIdPaisObject->Required = true;
      if (!$intIdPais = QApplication::QueryString('id_pais'))
          $intIdPais = 2;
      if (!$this->blnEditMode)
        $this->lstIdPaisObject->AddItem(QApplication::Translate('- Select One -'), null);
      $objIdPaisObjectArray = Paises::LoadAll();
      if ($objIdPaisObjectArray) foreach ($objIdPaisObjectArray as $objIdPaisObject) {
        $objListItem = new QListItem($objIdPaisObject->__toString(), $objIdPaisObject->Id);
        if (($this->objItem->IdPaisObject) && ($this->objItem->IdPaisObject->Id == $objIdPaisObject->Id))
          $objListItem->Selected = true;
        elseif (!$this->objItem->IdPaisObject && $objIdPaisObject->Id == $intIdPais)
          $objListItem->Selected = true;
        $this->lstIdPaisObject->AddItem($objListItem);
      }
      return $this->lstIdPaisObject;
    }

}
?>
