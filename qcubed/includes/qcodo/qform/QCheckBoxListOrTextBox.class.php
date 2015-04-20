<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class QCheckBoxListOrTextBox extends QTextBox {
    protected $objCheckBoxList;

    public function  __construct($objParentObject, $strControlId = null) {
        parent::__construct($objParentObject, $strControlId);
        $this->objCheckBoxList = new QCheckBoxList($this);
        $this->objCheckBoxList->RepeatColumns = 2;
        $this->objCheckBoxList->RepeatDirection = QRepeatDirection::Horizontal;
        $this->objCheckBoxList->AddItem("Si", 1);
        //$this->objCheckBoxList->AddItem("No", 0);
    }

    /////////////////////////
    // Public Properties: GET
    /////////////////////////
    public function __get($strName) {
        switch ($strName) {
            case "CheckBoxList":
                return $this->objCheckBoxList;
            default:
                try {
                    return parent::__get($strName);
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }


    public function __set($strName, $mixValue) {
        $this->blnModified = true;

        switch ($strName) {
            // APPEARANCE
            case "CheckBoxList":
                try {
                    $this->objCheckBoxList = QType::Cast($mixValue, 'QCheckBoxList');
                    break;
                } catch (QInvalidCastException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					break;
        }
    }

    public function RenderWithName($blnDisplayOutput = true) {
        ////////////////////
        // Call RenderHelper
        $this->RenderHelper(func_get_args(), __FUNCTION__);
        ////////////////////

        // Custom Render Functionality Here

        // Because this example RenderWithName will render a block-based element (e.g. a DIV), let's ensure
        // that IsBlockElement is set to true
        $this->blnIsBlockElement = true;

        // Render the Control's Dressing
        $strToReturn = '<div class="renderWithName">';

        // Render the Left side
        $strLeftClass = "left";
        if ($this->blnRequired)
            $strLeftClass .= ' required';
        if (!$this->blnEnabled)
            $strLeftClass .= ' disabled';

        if ($this->strInstructions)
            $strInstructions = '<br/><span class="instructions">' . $this->strInstructions . '</span>';
        else
            $strInstructions = '';

        $strToReturn .= sprintf('<div class="%s"><label for="%s">%s</label>%s</div>' , $strLeftClass, $this->strControlId, $this->strName, $strInstructions);

        // Render the Right side
        if ($this->strValidationError)
            $strMessage = sprintf('<span class="error">%s</span>', $this->strValidationError);
        else if ($this->strWarning)
            $strMessage = sprintf('<span class="error">%s</span>', $this->strWarning);
        else
            $strMessage = '';

        try {
            $strToReturn .= sprintf('<div class="right">%s%s%s%s%s</div>',
                $this->strHtmlBefore, $this->objCheckBoxList->Render(false), $this->GetControlHtml(), $this->strHtmlAfter, $strMessage);
        } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        $strToReturn .= '</div>';

        ////////////////////////////////////////////
        // Call RenderOutput, Returning its Contents
        return $this->RenderOutput($strToReturn, $blnDisplayOutput);
        ////////////////////////////////////////////
    }

    public function ParsePostData() {
        // Check to see if this Control's Value was passed in via the POST data
        if (array_key_exists($this->strControlId, $_POST)) {
            parent::ParsePostData();
        } elseif (array_key_exists($this->objCheckBoxList->strControlId, $_POST)) {
            $this->strText = $_POST[$this->objCheckBoxList->strControlId];
        }
    }

}
?>
