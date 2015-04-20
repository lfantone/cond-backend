<?php
	class QListBox extends QListBoxBase {
		///////////////////////////
		// ListBox Preferences
		///////////////////////////

		// Feel free to specify global display preferences/defaults for all QListBox controls
		protected $strCssClass = 'listbox';
//		protected $strFontNames = QFontFamily::Verdana;
//		protected $strFontSize = '12px';
//		protected $strWidth = '250px';
        protected $blnHtmlEntities = false;

		// For multiple-select based listboxes, you can define the way a "Reset" button should look
		protected function GetResetButtonHtml() {
			$strToReturn = sprintf(' <a href="#" onclick="__resetListBox(%s, %s); return false;" class="listboxReset">%s</a>',
				"'" . $this->Form->FormId . "'",
				"'" . $this->strControlId . "'",
				QApplication::Translate('Reset'));

			return $strToReturn;
		}

		protected function GetItemHtml($objItem, $intIndex) {
			// The Default Item Style
			$objStyle = $this->objItemStyle;

			// Apply any Style Override (if applicable)
			if ($objItem->ItemStyle) {
				$objStyle = $objStyle->ApplyOverride($objItem->ItemStyle);
			}

			$strToReturn = sprintf('<option value="%s" %s%s>%s</option>',
				$intIndex,
				($objItem->Selected) ? 'selected="selected"' : "",
				$objStyle->GetAttributes(),
				$this->blnHtmlEntities ? QApplication::HtmlEntities($objItem->Name) : $objItem->Name
			);

			return $strToReturn;
		}

        public function __get($strName) {
            switch ($strName) {
                case 'HtmlEntities':
                    return $this->blnHtmlEntities;
                default:
                    return parent::__get($strName);
            }
        }

        public function __set($strName, $mixValue) {
            switch ($strName) {
                case 'HtmlEntities':
                    return $this->blnHtmlEntities = (boolean)$mixValue;
                default:
                    return parent::__set($strName, $mixValue);
            }
        }

	}
?>