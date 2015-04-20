<?php
	require(__DATAGEN_META_CONTROLS__ . '/ModeloDataGridGen.class.php');

	/**
	 * This is the "Meta" DataGrid customizable subclass for the List functionality
	 * of the Modelo class.  This code-generated class extends
	 * from the generated Meta DataGrid class which contains a QDataGrid class which
	 * can be used by any QForm or QPanel, listing a collection of Modelo
	 * objects.  It includes functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create an instance of this DataGrid in a QForm or QPanel.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * 
	 */
	class ModeloDataGrid extends QFilteredDataGrid {
		
		public function __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			$this->SetDataBinder('MetaDataBinder', $this);
			//$this->UseAjax = true;
      //$this->addColumns();
		}
		
		public function MetaDataBinder() {
      if (!$intIdPais = QApplication::QueryString('id_pais')) {
          $intIdPais = 2;
      }

      $objCond = QQ::Equal(QQN::Modelo()->IdPais, $intIdPais);

			// Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
			if ($this->Paginator) {
				$this->TotalItemCount = Modelo::QueryCount($objCond);
			}

			// Setup the $objClauses Array
			$objClauses = array();

			// If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
			// the OrderByClause to the $objClauses array
			if ($objClause = $this->OrderByClause)
				array_push($objClauses, $objClause);

			// Add the LimitClause information, as well
			if ($objClause = $this->LimitClause)
				array_push($objClauses, $objClause);

			// Set the DataSource to be a Query result from Modelo, given the clauses above
			$this->DataSource = Modelo::QueryArray($this->Conditions, $objClauses);
		}
		
		
			/**
			 * Will add an "edit" link-based column, using a standard HREF link to redirect the user to a page
			 * that must be specified.
			 *
			 * @param string $strLinkUrl the URL to redirect the user to
			 * @param string $strLinkHtml the HTML of the link text
			 * @param string $strColumnTitle the HTML of the link text
			 * @param string $intArgumentType the method used to pass information to the edit page (defaults to PathInfo)
			 */
			public function MetaAddEditLinkColumn($strLinkUrl, $strLinkHtml = 'Edit', $strColumnTitle = 'Edit', $intArgumentType = QMetaControlArgumentType::PathInfo) {
				switch ($intArgumentType) {
					case QMetaControlArgumentType::QueryString:
						$strLinkUrl .= '?intIdModelo=<?=urlencode($_ITEM->IdModelo)?>';
						break;
					case QMetaControlArgumentType::PathInfo:
						$strLinkUrl .= '/<?=urlencode($_ITEM->IdModelo)?>';
						break;
					default:
						throw new QCallerException('Unable to pass arguments with this intArgumentType: ' . $intArgumentType);
				}

				$strHtml = '<a href="' . $strLinkUrl . '">' . $strLinkHtml . '</a>';
				$colEditColumn = new QDataGridColumn($strColumnTitle, $strHtml, 'HtmlEntities=False');
				$this->AddColumn($colEditColumn);
				return $colEditColumn;
			}
			
			
			public function MetaAddColumn($mixContent, $objOverrideParameters = null) {
				if (is_array($mixContent)) {
					$objNodeArray = array();

					try {
						foreach ($mixContent as $mixItem) {
							$objNodeArray[] = $this->ResolveContentItem($mixItem);
						}
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

					if (count($objNodeArray) == 0)
						throw new QCallerException('No content specified');

					// Create Various Arrays to be used by DGC
					$strNameArray = '';
					$strHtmlArray = '';
					$objSort = array();
					$objSortDescending = array();
					foreach ($objNodeArray as $objNode) {
						$strNameArray[] = QApplication::Translate(QConvertNotation::WordsFromCamelCase($objNode->_PropertyName));
						$strHtmlArray[] = $objNode->GetDataGridHtml();
						$objSort[] = $objNode->GetDataGridOrderByNode();
						$objSortDescending[] = $objNode->GetDataGridOrderByNode();
						$objSortDescending[] = false;
					}
					echo "hey";
					$objNewColumn = new QFilteredDataGridColumn(
						implode(', ', $strNameArray), 
						'<?=' . implode(' . ", " . ', $strHtmlArray) . '?>',
						array(
							'OrderByClause' => new QQOrderBy($objNodeArray),
							'ReverseOrderByClause' => new QQOrderBy($objSortDescending)
						)
					);
				} else {
					try {
						$objNode = $this->ResolveContentItem($mixContent);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

					$objNewColumn = new QFilteredDataGridColumn(
						QApplication::Translate(QConvertNotation::WordsFromCamelCase(str_replace(array('á','é','í','ó','ú'), array('a','e','i','o','u'), $objNode->_PropertyName))),
						'<?=' . str_replace(array('á','é','í','ó','ú'), array('a','e','i','o','u'), $objNode->GetDataGridHtml()) . '?>',
						array(
							'OrderByClause' => QQ::OrderBy($objNode->GetDataGridOrderByNode()),
							'ReverseOrderByClause' => QQ::OrderBy($objNode->GetDataGridOrderByNode(), false)
						)
					);
				}

				$objNode->SetFilteredDataGridColumnFilter($objNewColumn);

				$objOverrideArray = func_get_args();
				if (count($objOverrideArray) > 1)
					try {
						unset($objOverrideArray[0]);
						$objNewColumn->OverrideAttributes($objOverrideArray);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				$this->AddColumn($objNewColumn);
				return $objNewColumn;
			}
			
			
			protected function ResolveContentItem($mixContent) {
				if ($mixContent instanceof QQNode) {
					if (!$mixContent->_ParentNode)
						throw new QCallerException('Content QQNode cannot be a Top Level Node');
					if ($mixContent->_RootTableName == 'modelo') {
						if (($mixContent instanceof QQReverseReferenceNode) && !($mixContent->_PropertyName))
							throw new QCallerException('Content QQNode cannot go through any "To Many" association nodes.');
						$objCurrentNode = $mixContent;
						while ($objCurrentNode = $objCurrentNode->_ParentNode) {
							if (!($objCurrentNode instanceof QQNode))
								throw new QCallerException('Content QQNode cannot go through any "To Many" association nodes.');
							if (($objCurrentNode instanceof QQReverseReferenceNode) && !($objCurrentNode->_PropertyName))
								throw new QCallerException('Content QQNode cannot go through any "To Many" association nodes.');
						}
						return $mixContent;
					} else
						throw new QCallerException('Content QQNode has a root table of "' . $mixContent->_RootTableName . '". Must be a root of "modelo".');
				} else if (is_string($mixContent)) switch ($mixContent) {
					case 'IdModelo': return QQN::Modelo()->IdModelo;
					case 'Nombre': return QQN::Modelo()->Nombre;
					case 'IdMarca': return QQN::Modelo()->IdMarca;
					case 'IdMarcaObject': return QQN::Modelo()->IdMarcaObject;
					default: throw new QCallerException('Simple Property not found in ModeloDataGrid content: ' . $mixContent);
				} else if ($mixContent instanceof QQAssociationNode)
					throw new QCallerException('Content QQNode cannot go through any "To Many" association nodes.');
				else
					throw new QCallerException('Invalid Content type');
			}
			
			
		

	}
?>
