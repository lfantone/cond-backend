<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class QXmlBase extends QBaseClass {
    protected $objParentObject;
    protected static $intNextControlId = 1;
    protected $strControlId;

    public function  __construct($objParentObject, $strControlId = null) {
        $this->objParentObject = $objParentObject;
        if (strlen($strControlId) == 0)
            $this->strControlId = $this->GenerateControlId();
        else {
            // Verify ControlId is only AlphaNumeric Characters
            $strMatches = array();
            $strPattern = '/[A-Za-z0-9]*/';
            preg_match($strPattern, $strControlId, $strMatches);
            if (count($strMatches) && ($strMatches[0] == $strControlId))
                $this->strControlId = $strControlId;
            else
                throw new QCallerException('ControlIDs must be only alphanumeric chacters: ' . $strControlId);
        }
    }


    public function GenerateControlId() {
        $strToReturn = sprintf('c%s', self::$intNextControlId);
        self::$intNextControlId++;
        return $strToReturn;
    }

    public function AddChildElement() { }

    protected function GetControlHtml() { }

    public function ParsePostData() { }

    public function Validate() { }

    public function Render($blnDisplayOutput = true) {
        if ($blnDisplayOutput)
            print $this->GetControlHtml();
        else
            return $this->GetControlHtml();
        //parent::Render($blnDisplayOutput);
    }
    
}

?>
