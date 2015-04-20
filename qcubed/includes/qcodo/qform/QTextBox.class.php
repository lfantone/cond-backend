<?php
	class QTextBox extends QTextBoxBase {
		///////////////////////////
		// TextBox Preferences
		///////////////////////////

		// Feel free to specify global display preferences/defaults for all QTextBox controls
		protected $strCssClass = 'textbox';
//		protected $strFontNames = QFontFamily::Verdana;
//		protected $strFontSize = '12px';
//		protected $strWidth = '250px';
        protected $blnHtmlEntities = false;

		protected function GetControlHtml() {
			$strStyle = $this->GetStyleAttributes();
			if ($strStyle)
				$strStyle = sprintf('style="%s"', $strStyle);

			switch ($this->strTextMode) {
				case QTextMode::MultiLine:
					$strToReturn = sprintf('<textarea name="%s" id="%s" %s%s>' . $this->strFormat . '</textarea>',
						$this->strControlId,
						$this->strControlId,
						$this->GetAttributes(),
						$strStyle,
						$this->blnHtmlEntities ? QApplication::HtmlEntities($this->strText) : $this->strText);
					break;
				case QTextMode::Password:
					$strToReturn = sprintf('<input type="password" name="%s" id="%s" value="' . $this->strFormat . '" %s%s />',
						$this->strControlId,
						$this->strControlId,
						$this->blnHtmlEntities ? QApplication::HtmlEntities($this->strText) : $this->strText,
						$this->GetAttributes(),
						$strStyle);
					break;
				case QTextMode::SingleLine:
				default:
					$strToReturn = sprintf('<input type="text" name="%s" id="%s" value="' . $this->strFormat . '" %s%s />',
						$this->strControlId,
						$this->strControlId,
						$this->blnHtmlEntities ? QApplication::HtmlEntities($this->strText) : $this->strText,
						$this->GetAttributes(),
						$strStyle);
			}

			return $strToReturn;
		}


		public function __set($strName, $mixValue) {
			$this->blnModified = true;

			switch ($strName) {
				// APPEARANCE
				case "HtmlEntities":
                    $this->blnHtmlEntities = QType::Cast($mixValue, QType::Boolean);
                break;
				case "Text":
                    $arrChars = array('á','é','í','ó','ú', 'ñ');
                    $arrEntities = array('&aacute;','&eacute;','&iacute;','&oacute;','&uacute;', '&ntilde;');
                    $mixValue = str_replace($arrChars, $arrEntities, $mixValue);
                    $this->strText = $mixValue;
                break;
				default:
					try {
						parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
                break;
            }
        }

		public function __get($strName) {
			switch ($strName) {
				// APPEARANCE
				case "HtmlEntities": return $this->blnHtmlEntities;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

	}
?>