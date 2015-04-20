<?php
require(__DATAGEN_META_CONTROLS__ . '/FichasDataGridGen.class.php');

/**
 * This is the "Meta" DataGrid customizable subclass for the List functionality
 * of the Fichas class.  This code-generated class extends
 * from the generated Meta DataGrid class which contains a QDataGrid class which
 * can be used by any QForm or QPanel, listing a collection of Fichas
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
class FichasDataGrid extends QFilteredDataGrid {
		public function __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			$this->SetDataBinder('MetaDataBinder', $this);
			//$this->UseAjax = true;
      $this->addColumns();
		}

		/**
		 * Default / simple DataBinder for this Meta DataGrid.  This can easily be overridden
		 * by calling SetDataBinder() on this DataGrid with another DataBinder of your choice.
		 *
		 * If a paginator is set on this DataBinder, it will use it.  If not, then no pagination will be used.
		 * It will also perform any sorting (if applicable).
		 */
		public function MetaDataBinder() {
      if (!$intIdPais = QApplication::QueryString('id_pais')) {
          $intIdPais = 2;
      }


			// Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
			if ($this->Paginator) {
				$this->TotalItemCount = Fichas::QueryCount(QQ::Equal(QQN::Fichas()->IdPais, $intIdPais));
			}

      if ($this->Conditions instanceof QQCondition) {
          $objCond = QQ::AndCondition($this->Conditions, QQ::Equal(QQN::Fichas()->IdPais, $intIdPais));
      } elseif (is_array($this->Conditions)) {
          $o = QQ::AndCondition($this->Conditions);
          $objCond = QQ::AndCondition($o, QQ::Equal(QQN::Fichas()->IdPais, $intIdPais))
      } else
          $objCond = QQ::Equal(QQN::Fichas()->IdPais, $intIdPais);
      }

/*
      if (isset($this->Conditions) && $this->Conditions instanceof QQCondition)
          $this->Conditions = QQ::AndCondition($this->Conditions, QQ::Equal(QQN::Fichas()->IdPais, $intIdPais));
      elseif (is_array($this->Conditions))
          array_push($this->Conditions, QQ::AndCondition($this->Conditions, QQ::Equal(QQN::Fichas()->IdPais, $intIdPais)));
      else
          $this->Conditions = QQ::Equal(QQN::Fichas()->IdPais, $intIdPais);
*/

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
			$this->DataSource = Fichas::QueryArray($objCond, $objClauses);
//var_dump($this->Conditions); exit;
		}


    public function addColumns() {
			$strEditPageUrl =  __BACKEND_DIR__. '/fichas_edit.php';

			$this->MetaAddEditLinkColumn($strEditPageUrl,  'Editar',  'Editar', QMetaControlArgumentType::QueryString);
			$this->MetaAddCopyLinkColumn($strEditPageUrl,  'Copiar y crear nuevo',  'Copiar y crear nuevo', QMetaControlArgumentType::QueryString);
			$this->MetaAddEditLinkColumn(__BACKEND_DIR__. '/fichas_xml.php',  'Generar XML',  'Generar XML', QMetaControlArgumentType::QueryString);


			// Create the Other Columns (note that you can use strings for fichas's properties, or you
			// can traverse down QQN::fichas() to display fields that are down the hierarchy)
			$this->MetaAddColumn('Id');
			$this->MetaAddColumn(QQN::Fichas()->IdMarcaObject->Nombre)->Name = "Marca";
			$this->MetaAddColumn(QQN::Fichas()->IdTiposObject->Nombre)->Name = "Tipo";
			$this->MetaAddColumn(QQN::Fichas()->IdModeloObject->Nombre)->Name = "Modelo";
			$this->MetaAddColumn(QQN::Fichas()->IdVersionObject->Nombre)->Name = "Version";
			//$this->MetaAddColumn('Descripcion');
			$this->MetaAddColumn('Precio');
			$this->MetaAddColumn(QQN::Fichas()->IdEstadoObject)->Name = "Estado";
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
        switch ($intArgumentType) {
            case QMetaControlArgumentType::QueryString:
                $strLinkUrl .= '?intIdToCopy=<?=urlencode($_ITEM->Id)?>';
                break;
            case QMetaControlArgumentType::PathInfo:
                $strLinkUrl .= '/<?=urlencode($_ITEM->Id)?>';
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
					QApplication::Translate(QConvertNotation::WordsFromCamelCase($objNode->_PropertyName)),
					'<?=' . $objNode->GetDataGridHtml() . '?>',
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
		 * Similar to MetaAddColumn, except it creates a column for a Type-based Id.  You MUST specify
		 * the name of the Type class that this will attempt to use $NameArray against.
		 * 
		 * Also, $mixContent cannot be an array.  Only a single field can be specified.
		 *
		 * @param mixed $mixContent string or QQNode from Fichas
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
					$strLinkUrl .= '?intId=<?=urlencode($_ITEM->Id)?>';
					break;
				case QMetaControlArgumentType::PathInfo:
					$strLinkUrl .= '/<?=urlencode($_ITEM->Id)?>';
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
			$strHtml = '<a href="#" <?= $_FORM->GetControl("' . $pxyControl->ControlId . '")->RenderAsEvents($_ITEM->Id, false); ?>>' . $strLinkHtml . '</a>';
			$colEditColumn = new QDataGridColumn($strColumnTitle, $strHtml, 'HtmlEntities=False');
			$this->AddColumn($colEditColumn);
			return $colEditColumn;
		}
		protected function ResolveContentItem($mixContent) {
			if ($mixContent instanceof QQNode) {
				if (!$mixContent->_ParentNode)
					throw new QCallerException('Content QQNode cannot be a Top Level Node');
				if ($mixContent->_RootTableName == 'fichas') {
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
					throw new QCallerException('Content QQNode has a root table of "' . $mixContent->_RootTableName . '". Must be a root of "fichas".');
			} else if (is_string($mixContent)) switch ($mixContent) {
				case 'Id': return QQN::Fichas()->Id;
				case 'IdMarca': return QQN::Fichas()->IdMarca;
				case 'IdMarcaObject': return QQN::Fichas()->IdMarcaObject;
				case 'IdTipos': return QQN::Fichas()->IdTipos;
				case 'IdTiposObject': return QQN::Fichas()->IdTiposObject;
				case 'IdModelo': return QQN::Fichas()->IdModelo;
				case 'IdModeloObject': return QQN::Fichas()->IdModeloObject;
				case 'IdVersion': return QQN::Fichas()->IdVersion;
				case 'IdVersionObject': return QQN::Fichas()->IdVersionObject;
				case 'Descripcion': return QQN::Fichas()->Descripcion;
				case 'Precio': return QQN::Fichas()->Precio;
				case 'Anio': return QQN::Fichas()->Anio;
				case 'Combustible': return QQN::Fichas()->Combustible;
				case 'Cilindrada': return QQN::Fichas()->Cilindrada;
				case 'Cilindros': return QQN::Fichas()->Cilindros;
				case 'PotenciaMaxima': return QQN::Fichas()->PotenciaMaxima;
				case 'ParMotorTorque': return QQN::Fichas()->ParMotorTorque;
				case 'Posicion': return QQN::Fichas()->Posicion;
				case 'Alimentacion': return QQN::Fichas()->Alimentacion;
				case 'Valvulas': return QQN::Fichas()->Valvulas;
				case 'Tipo': return QQN::Fichas()->Tipo;
				case 'Marchas': return QQN::Fichas()->Marchas;
				case 'Traccion': return QQN::Fichas()->Traccion;
				case 'VelocidadMaxima': return QQN::Fichas()->VelocidadMaxima;
				case 'Aceleracion0100': return QQN::Fichas()->Aceleracion0100;
				case 'ConsumoUrbano': return QQN::Fichas()->ConsumoUrbano;
				case 'ConsumoInterurbano': return QQN::Fichas()->ConsumoInterurbano;
				case 'ConsumoMixto': return QQN::Fichas()->ConsumoMixto;
				case 'Puertas': return QQN::Fichas()->Puertas;
				case 'Plazas': return QQN::Fichas()->Plazas;
				case 'FilasDeAsientos': return QQN::Fichas()->FilasDeAsientos;
				case 'InfoEjes': return QQN::Fichas()->InfoEjes;
				case 'Peso': return QQN::Fichas()->Peso;
				case 'CapacidadBaul': return QQN::Fichas()->CapacidadBaul;
				case 'CapacidadTanque': return QQN::Fichas()->CapacidadTanque;
				case 'CapacidadCarga': return QQN::Fichas()->CapacidadCarga;
				case 'FrenosDelanteros': return QQN::Fichas()->FrenosDelanteros;
				case 'FrenosTraseros': return QQN::Fichas()->FrenosTraseros;
				case 'Neumaticos': return QQN::Fichas()->Neumaticos;
				case 'SuspensionDelantera': return QQN::Fichas()->SuspensionDelantera;
				case 'SuspensionTrasera': return QQN::Fichas()->SuspensionTrasera;
				case 'IdEstado': return QQN::Fichas()->IdEstado;
				case 'IdEstadoObject': return QQN::Fichas()->IdEstadoObject;
				case 'Procesada': return QQN::Fichas()->Procesada;
				default: throw new QCallerException('Simple Property not found in FichasDataGrid content: ' . $mixContent);
			} else if ($mixContent instanceof QQAssociationNode)
				throw new QCallerException('Content QQNode cannot go through any "To Many" association nodes.');
			else
				throw new QCallerException('Invalid Content type');
		}
}
?>
