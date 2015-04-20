<?php
	require(__DATAGEN_META_CONTROLS__ . '/VersionDataGridGen.class.php');

	/**
	 * This is the "Meta" DataGrid customizable subclass for the List functionality
	 * of the Version class.  This code-generated class extends
	 * from the generated Meta DataGrid class which contains a QDataGrid class which
	 * can be used by any QForm or QPanel, listing a collection of Version
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
	class VersionDataGrid extends QFilteredDataGrid {
		
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
			
      $objCond = QQ::Equal(QQN::Version()->IdModeloObject->IdPais, $intIdPais);

			// Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
			if ($this->Paginator) {
				$this->TotalItemCount = Version::QueryCount($objCond);
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

			// Set the DataSource to be a Query result from Fichas, given the clauses above
			$this->DataSource = Version::QueryArray($this->Conditions, $objClauses);
			
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
			public function MetaAddCopyLinkColumn($strLinkUrl, $strLinkHtml = 'Copiar', $strColumnTitle = 'Copiar', $intArgumentType = QMetaControlArgumentType::PathInfo) {
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


			/**
			 * Similar to MetaAddColumn, except it creates a column for a Type-based IdVersion.  You MUST specify
			 * the name of the Type class that this will attempt to use $NameArray against.
			 * 
			 * Also, $mixContent cannot be an array.  Only a single field can be specified.
			 *
			 * @param mixed $mixContent string or QQNode from Version
			 * @param string $strTypeClassName the name of the TypeClass to use $NameArray against
			 * @param mixed $objOverrideParameters
			 */
			public function MetaAddTypeColumn($mixContent, $strTypeClassName, $objOverrideParameters = null) {
				// Validate TypeClassName
				if (!class_exists($strTypeClassName) || !property_exists($strTypeClassName, 'NameArray'))
					throw new QCallerException('Invalid TypeClass Name: ' . $strTypeClassName);

				// Validate Node
				try {
					$objNode = $this->ResolveContentItem($mixContent);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

				// Create the Column
				$strName = QConvertNotation::WordsFromCamelCase($objNode->_PropertyName);
				if (strtolower(substr($strName, strlen($strName) - 3)) == ' id')
					$strName = substr($strName, 0, strlen($strName) - 3);
				$strProperty = $objNode->GetDataGridHtml();
				$objNewColumn = new QFilteredDataGridColumn(
					QApplication::Translate($strName),
					sprintf('<?=(%s) ? %s::$NameArray[%s] : null;?>', $strProperty, $strTypeClassName, $strProperty),
					array(
						'OrderByClause' => QQ::OrderBy($objNode),
						'ReverseOrderByClause' => QQ::OrderBy($objNode, false)
					)
				);

				// Perform Overrides
				$objOverrideArray = func_get_args();
				if (count($objOverrideArray) > 2)
					try {
						unset($objOverrideArray[0]);
						unset($objOverrideArray[1]);
						$objNewColumn->OverrideAttributes($objOverrideArray);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				$this->AddColumn($objNewColumn);
				return $objNewColumn;
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
						$strLinkUrl .= '?intIdVersion=<?=urlencode($_ITEM->IdVersion)?>';
						break;
					case QMetaControlArgumentType::PathInfo:
						$strLinkUrl .= '/<?=urlencode($_ITEM->IdVersion)?>';
						break;
					default:
						throw new QCallerException('Unable to pass arguments with this intArgumentType: ' . $intArgumentType);
				}

				$strHtml = '<a href="' . $strLinkUrl . '">' . $strLinkHtml . '</a>';
					$colEditColumn = new QDataGridColumn($strColumnTitle, $strHtml, 'HtmlEntities=False');
				$this->AddColumn($colEditColumn);
				return $colEditColumn;
			}

			/**
			 * Will add an "edit" control proxy-based column, calling any actions on a given control proxy
			 * that must be specified.
			 *
			 * @param QControlProxy $pxyControl the control proxy to use
			 * @param string $strLinkHtml the HTML of the link text
			 * @param string $strColumnTitle the HTML of the link text
			 */
			public function MetaAddEditProxyColumn(QControlProxy $pxyControl, $strLinkHtml = 'Edit', $strColumnTitle = 'Edit') {
				$strHtml = '<a href="#" <?= $_FORM->GetControl("' . $pxyControl->ControlId . '")->RenderAsEvents($_ITEM->IdVersion, false); ?>>' . $strLinkHtml . '</a>';
				$colEditColumn = new QDataGridColumn($strColumnTitle, $strHtml, 'HtmlEntities=False');
				$this->AddColumn($colEditColumn);
				return $colEditColumn;
			}
			protected function ResolveContentItem($mixContent) {
				if ($mixContent instanceof QQNode) {
					if (!$mixContent->_ParentNode)
						throw new QCallerException('Content QQNode cannot be a Top Level Node');
					if ($mixContent->_RootTableName == 'version') {
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
						throw new QCallerException('Content QQNode has a root table of "' . $mixContent->_RootTableName . '". Must be a root of "version".');
				} else if (is_string($mixContent)) switch ($mixContent) {
					case 'IdVersion': return QQN::Version()->IdVersion;
					case 'Nombre': return QQN::Version()->IdNombre;
					case 'IdModelo': return QQN::Version()->IdModelo;
					case 'IdModeloObject': return QQN::Version()->IdModeloObject;
					default: throw new QCallerException('Simple Property not found in VersionDataGrid content: ' . $mixContent);
				} else if ($mixContent instanceof QQAssociationNode)
					throw new QCallerException('Content QQNode cannot go through any "To Many" association nodes.');
				else
					throw new QCallerException('Invalid Content type');
			}
		
		

	}
?>
