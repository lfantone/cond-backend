<?php
// This class will render a List of HTML Checkboxes (inhereting from ListControl).
// By definition, checkbox lists are multiple-select ListControls.
// * "TextAlign" specifies if each ListItem's Name should be displayed to the left or to the right of the checkbox.
// * "CellPadding" specified the HTML Table's CellPadding
// * "CellSpacing" specified the HTML Table's CellSpacing
// * "RepeatColumn" specifies how many columns should be rendered in the HTML Table
// * "RepeatDirection" specifies which direction should the list go first...

// So assuming you have a list of 10 items, and you have RepeatColumn set to 3:
//	RepeatDirection::Horizontal would render as:
//	1	2	3
//	4	5	6
//	7	8	9
//	10
//
//	RepeatDirection::Vertical would render as:
//	1	5	8
//	2	6	9
//	3	7	10
//	4

class QCheckBoxListImages extends QCheckBoxList {

    protected $objImagesArray = array();

    public function AddItem($mixListItemOrName, $strImgSource, $strValue = null, $blnSelected = null, $strItemGroup = null, $strOverrideParameters = null) {
        $this->blnModified = true;
        if (gettype($mixListItemOrName) == QType::Object)
            $objListItem = QType::Cast($mixListItemOrName, "QListItem");
        elseif ($strOverrideParameters)
            // The OverrideParameters can only be included if they are not null, because OverrideAttributes in QBaseClass can't except a NULL Value
            $objListItem = new QListItem($mixListItemOrName, $strValue, $blnSelected, $strItemGroup, $strOverrideParameters);
        else
            $objListItem = new QListItem($mixListItemOrName, $strValue, $blnSelected, $strItemGroup);

        array_push($this->objItemsArray, $objListItem);
        array_push($this->objImagesArray, $strImgSource);

    }

    protected function GetControlHtml() {
        if ((!$this->objItemsArray) || (count($this->objItemsArray) == 0))
            return "";

        if ($this->intTabIndex)
            $strTabIndex = sprintf('tabindex="%s" ', $this->intTabIndex);
        else
            $strTabIndex = "";

        if ($this->strToolTip)
            $strToolTip = sprintf('title="%s" ', $this->strToolTip);
        else
            $strToolTip = "";

        if ($this->strCssClass)
            $strCssClass = sprintf('class="%s" ', $this->strCssClass);
        else
            $strCssClass = "";

        if ($this->strAccessKey)
            $strAccessKey = sprintf('accesskey="%s" ', $this->strAccessKey);
        else
            $strAccessKey = "";

        $strStyle = $this->GetStyleAttributes();
        if (strlen($strStyle) > 0)
            $strStyle = sprintf('style="%s" ', $strStyle);

        $strCustomAttributes = $this->GetCustomAttributes();

        $strActions = $this->GetActionAttributes();

        if ($this->intCellPadding >= 0)
            $strCellPadding = sprintf('cellpadding="%s" ', $this->intCellPadding);
        else
            $strCellPadding = "";

        if ($this->intCellSpacing >= 0)
            $strCellSpacing = sprintf('cellspacing="%s" ', $this->intCellSpacing);
        else
            $strCellSpacing = "";

        // Generate Table HTML
        $strToReturn = sprintf('<table id="%s" %s%sborder="0" %s%s%s%s%s>',
            $this->strControlId,
            $strCellPadding,
            $strCellSpacing,
            $strAccessKey,
            $strToolTip,
            $strCssClass,
            $strStyle,
            $strCustomAttributes);

        if ($this->ItemCount > 0) {
        // Figure out the number of ROWS for this table
            $intRowCount = floor($this->ItemCount / $this->intRepeatColumns);
            $intWidowCount = ($this->ItemCount % $this->intRepeatColumns);
            if ($intWidowCount > 0)
                $intRowCount++;

            // Iterate through Table Rows
            for ($intRowIndex = 0; $intRowIndex < $intRowCount; $intRowIndex++) {
                $strToReturn .= '<tr>';

                // Figure out the number of COLUMNS for this particular ROW
                if (($intRowIndex == $intRowCount - 1) && ($intWidowCount > 0))
                // on the last row for a table with widowed-columns, ColCount is the number of widows
                    $intColCount = $intWidowCount;
                else
                // otherwise, ColCount is simply intRepeatColumns
                    $intColCount = $this->intRepeatColumns;

                // Iterate through Table Columns
                for ($intColIndex = 0; $intColIndex < $intColCount; $intColIndex++) {
                    if ($this->strRepeatDirection == QRepeatDirection::Horizontal)
                        $intIndex = $intColIndex + $this->intRepeatColumns * $intRowIndex;
                    else
                        $intIndex = (floor($this->ItemCount / $this->intRepeatColumns) * $intColIndex)
                            + min(($this->ItemCount % $this->intRepeatColumns), $intColIndex)
                            + $intRowIndex;

                    if ($this->objItemsArray[$intIndex]->Selected)
                        $strChecked = 'checked="checked" ';
                    else
                        $strChecked = "";

                    if ($this->blnEnabled) {
                        $strDisabledStart = '';
                        $strDisabledEnd = '';
                        $strDisabled = '';
                    } else {
                        $strDisabledStart = '<span disabled="disabled">';
                        $strDisabledEnd = '</span>';
                        $strDisabled = 'disabled="disabled" ';
                    }

                    if ($this->strTextAlign == QTextAlign::Left) {
                        $strToReturn .= sprintf('<td>%s<label for="%s[%s]">%s</label></td><td><input id="%s[%s]" name="%s[%s]" type="checkbox" %s%s%s%s />%s</td><td><img src="%s" alt="%s" title="%s" width="100" height="70" /></td>',
                            $strDisabledStart,
                            $this->strControlId,
                            $intIndex,
                            ($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->objItemsArray[$intIndex]->Name) : $this->objItemsArray[$intIndex]->Name,
                            $this->strControlId,
                            $intIndex,
                            $this->strControlId,
                            $intIndex,
                            $strDisabled,
                            $strChecked,
                            $strActions,
                            $strTabIndex,
                            $strDisabledEnd,
                            $this->objImagesArray[$intIndex],
                            ($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->objItemsArray[$intIndex]->Name) : $this->objItemsArray[$intIndex]->Name,
                            ($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->objItemsArray[$intIndex]->Name) : $this->objItemsArray[$intIndex]->Name
                            );

                    } else {
                        $strToReturn .= sprintf('<td>%s<input id="%s[%s]" name="%s[%s]" type="checkbox" %s%s%s%s /></td><td><label for="%s[%s]">%s</label></td><td>%s<img src="%s" alt="%s" title="%s" width="100" height="70" /></td>',
                            $strDisabledStart,
                            $this->strControlId,
                            $intIndex,
                            $this->strControlId,
                            $intIndex,
                            $strDisabled,
                            $strChecked,
                            $strActions,
                            $strTabIndex,
                            $this->strControlId,
                            $intIndex,
                            ($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->objItemsArray[$intIndex]->Name) : $this->objItemsArray[$intIndex]->Name,
                            $strDisabledEnd,
                            $this->objImagesArray[$intIndex],
                            ($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->objItemsArray[$intIndex]->Name) : $this->objItemsArray[$intIndex]->Name,
                            ($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->objItemsArray[$intIndex]->Name) : $this->objItemsArray[$intIndex]->Name
                            );
                    }
                }

                $strToReturn .= '</tr>';
            }
        }

        $strToReturn .= '</table>';

        return $strToReturn;
    }

}
?>