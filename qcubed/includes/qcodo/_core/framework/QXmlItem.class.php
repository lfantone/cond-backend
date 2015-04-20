<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class QXmlItem extends QXmlBase {

    protected $objChildArray = array();
    protected $arrAttributes = array();
    protected $strText;
    protected $strName;
    protected $strEncoding = 'UTF-8';

    /**
     *
     * @param QControl $objParentObject
     * @param string $strControlId
     */
    public function  __construct($objParentObject, $strControlId = null) {
        parent::__construct($objParentObject, $strControlId);
    }

    public function AddChildElement($strName, $strValue = null) {
        $objXmlItem = new QXmlItem($this->objParentObject);
        $objXmlItem->Name = $strName;
        if ($strValue) {
            $arrChars = array('á','é','í','ó','ú', 'ñ');
            $arrEntities = array('&aacute;','&eacute;','&iacute;','&oacute;','&uacute;', '&ntilde;');
            $strValue = str_replace($arrChars, $arrEntities, $strValue);
        }
        $objXmlItem->Text = $strValue;
        array_push($this->objChildArray, $objXmlItem);
        return $objXmlItem;
    }

    /**
     *
     * @return string
     */
    public function GetXmlNode() {
        $strToReturn = '';
        $strTextChildElements = '';
        if ($this->GetChildElements()) {
            foreach ($this->GetChildElements() as $objChilControl) {
                $strTextChildElements .= $objChilControl->GetXmlNode();
            }
        }
        $strAttrs = $this->GetAttributes();

        $this->CleanVars();

        if (strlen($this->strText))
            $strToReturn = '<'.$this->strName.($strAttrs?' '.$strAttrs:'').'>'.'<![CDATA['.$this->strText.']]></'.$this->strName.'>'."\n";
        elseif (strlen($strTextChildElements))
            $strToReturn = '<'.$this->strName.($strAttrs?' '.$strAttrs:'').'>'.$strTextChildElements.'</'.$this->strName.'>'."\n";
        else
            $strToReturn = '<'.$this->strName.($strAttrs?' '.$strAttrs:'').'/>'."\n";
        return $strToReturn;
    }

    public function CleanVars() {
        $this->strName = str_replace(
            array('&aacute;','&eacute;','&iacute;','&oacute;','&acute;','&ntilde;'),
            array("a", 'e', 'i', 'o', 'u', 'n'),
            $this->strName);
        $this->strName = preg_replace('/([^a-zA-Z0-9_]+)/', '', $this->strName);
        //if (preg_match('/^([0-9])/', $subject))
        $this->strName = preg_replace('/([^a-zA-Z0-9_]+)/', '', $this->strName);
        $this->strText = str_replace('&amp','&',$this->strText);
    }

    public function GetChildElements() {
        if (is_array($this->objChildArray) && count($this->objChildArray)) {
            return $this->objChildArray;
        }
        return false;
    }

    public function AddAttribute($strName, $strValue) {
        if (!array_key_exists($strName, $this->arrAttributes)) {
            array_push($this->arrAttributes, array($strName, $strValue));
        } else {
            throw new QCallerException(sprintf("ERROR: Ya existe el atributo '%s' en el tag '%s'", $strName, $this->strName));;
        }
    }

    protected function GetControlHtml() {
        return sprintf('<?xml version="1.0" encoding="%s"?>', $this->strEncoding).$this->GetXmlNode();
    }

    protected function GetAttributes() {
        $strToReturn = '';
        if (is_array($this->arrAttributes) && count($this->arrAttributes)) {
            foreach ($this->arrAttributes as $arrAttribute) {
                $strToReturn .= $arrAttribute[0].'="'.$arrAttribute[1].'" ';
            }
            return $strToReturn;
        }
        return false;
    }

    public function __set($strName, $mixValue) {
        switch ($strName) {
            case 'Name':
                // TODO Castear, no se permiten espacios
                return $this->strName = $mixValue;
            case 'Text':
                return $this->strText = $mixValue;
        }
    }

    public function __get($strName) {
        switch ($strName) {
            case 'Name':
                // TODO Castear, no se permiten espacios
                return $this->strName;
            case 'Text':
                return $this->strText;
        }
    }

}

?>

