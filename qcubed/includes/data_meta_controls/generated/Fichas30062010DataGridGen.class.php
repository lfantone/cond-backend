<?php
	/**
	 * This is the "Meta" DataGrid class for the List functionality
	 * of the Fichas30062010 class.  This code-generated class
	 * contains a QDataGrid class which can be used by any QForm or QPanel,
	 * listing a collection of Fichas30062010 objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create an instance of this DataGrid in a QForm or QPanel.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * 
	 */
	class Fichas30062010DataGridGen extends QDataGrid {
		/**
		 * Standard DataGrid constructor which also pre-configures the DataBinder
		 * to its own SimpleDataBinder.  Also pre-configures UseAjax to true.
		 *
		 * @param mixed $objParentObject either a QPanel or QForm which would be this DataGrid's parent
		 * @param string $strControlId optional explicitly-defined ControlId for this DataGrid
		 */
		public function __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			$this->SetDataBinder('MetaDataBinder', $this);
			$this->UseAjax = true;
		}


		/**
		 * Given the description of the Column's contents, this is a simple, express
		 * way of adding a column to this Fichas30062010 datagrid.  The description of a column's
		 * content can be either a text string description of a simple field name
		 * in the Fichas30062010 object, or it can be any QQNode extending from QQN::Fichas30062010().
		 * 
		 * MetaAddColumn will automatically pre-configure the column with the name, html
		 * and sort rules given the content being specified.
		 * 
		 * Any of these things can be overridden with OverrideParameters.
		 * 
		 * Finally, $mixContents can also be an array of contents, if displaying and/or
		 * sorting using two fields from the Fichas30062010 object.
		 *
		 * @param mixed $mixContents
		 * @param string $objOverrideParameters[]
		 * @return QDataGridColumn
		 */
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

				$objNewColumn = new QDataGridColumn(
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

				$objNewColumn = new QDataGridColumn(
					QApplication::Translate(QConvertNotation::WordsFromCamelCase($objNode->_PropertyName)),
					'<?=' . $objNode->GetDataGridHtml() . '?>',
					array(
						'OrderByClause' => QQ::OrderBy($objNode->GetDataGridOrderByNode()),
						'ReverseOrderByClause' => QQ::OrderBy($objNode->GetDataGridOrderByNode(), false)
					)
				);
			}

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
		 * @param mixed $mixContent string or QQNode from Fichas30062010
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
			$objNewColumn = new QDataGridColumn(
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


		/**
		 * Default / simple DataBinder for this Meta DataGrid.  This can easily be overridden
		 * by calling SetDataBinder() on this DataGrid with another DataBinder of your choice.
		 *
		 * If a paginator is set on this DataBinder, it will use it.  If not, then no pagination will be used.
		 * It will also perform any sorting (if applicable).
		 */
		public function MetaDataBinder() {
			// Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
			if ($this->Paginator) {
				$this->TotalItemCount = Fichas30062010::CountAll();
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

			// Set the DataSource to be a Query result from Fichas30062010, given the clauses above
			$this->DataSource = Fichas30062010::LoadAll($objClauses);
		}


		/**
		 * Used internally by the Meta-based Add Column tools.
		 *
		 * Given a QQNode or a Text String, this will return a Fichas30062010-based QQNode.
		 * It will also verify that it is a proper Fichas30062010-based QQNode, and will throw an exception otherwise.
		 *
		 * @param mixed $mixContent
		 * @return QQNode
		 */
		protected function ResolveContentItem($mixContent) {
			if ($mixContent instanceof QQNode) {
				if (!$mixContent->_ParentNode)
					throw new QCallerException('Content QQNode cannot be a Top Level Node');
				if ($mixContent->_RootTableName == 'fichas_30062010') {
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
					throw new QCallerException('Content QQNode has a root table of "' . $mixContent->_RootTableName . '". Must be a root of "fichas_30062010".');
			} else if (is_string($mixContent)) switch ($mixContent) {
				case 'Id': return QQN::Fichas30062010()->Id;
				case 'IdMarca': return QQN::Fichas30062010()->IdMarca;
				case 'IdTipos': return QQN::Fichas30062010()->IdTipos;
				case 'IdModelo': return QQN::Fichas30062010()->IdModelo;
				case 'IdVersion': return QQN::Fichas30062010()->IdVersion;
				case 'Descripcion': return QQN::Fichas30062010()->Descripcion;
				case 'Precio': return QQN::Fichas30062010()->Precio;
				case 'Anio': return QQN::Fichas30062010()->Anio;
				case 'Combustible': return QQN::Fichas30062010()->Combustible;
				case 'Cilindrada': return QQN::Fichas30062010()->Cilindrada;
				case 'Cilindros': return QQN::Fichas30062010()->Cilindros;
				case 'PotenciaMaxima': return QQN::Fichas30062010()->PotenciaMaxima;
				case 'ParMotorTorque': return QQN::Fichas30062010()->ParMotorTorque;
				case 'Posicion': return QQN::Fichas30062010()->Posicion;
				case 'Alimentacion': return QQN::Fichas30062010()->Alimentacion;
				case 'MotorShort': return QQN::Fichas30062010()->MotorShort;
				case 'Valvulas': return QQN::Fichas30062010()->Valvulas;
				case 'Tipo': return QQN::Fichas30062010()->Tipo;
				case 'Marchas': return QQN::Fichas30062010()->Marchas;
				case 'Traccion': return QQN::Fichas30062010()->Traccion;
				case 'VelocidadMaxima': return QQN::Fichas30062010()->VelocidadMaxima;
				case 'Aceleracion0100': return QQN::Fichas30062010()->Aceleracion0100;
				case 'ConsumoUrbano': return QQN::Fichas30062010()->ConsumoUrbano;
				case 'ConsumoInterurbano': return QQN::Fichas30062010()->ConsumoInterurbano;
				case 'ConsumoMixto': return QQN::Fichas30062010()->ConsumoMixto;
				case 'Puertas': return QQN::Fichas30062010()->Puertas;
				case 'Plazas': return QQN::Fichas30062010()->Plazas;
				case 'FilasDeAsientos': return QQN::Fichas30062010()->FilasDeAsientos;
				case 'InfoEjes': return QQN::Fichas30062010()->InfoEjes;
				case 'Peso': return QQN::Fichas30062010()->Peso;
				case 'CapacidadBaul': return QQN::Fichas30062010()->CapacidadBaul;
				case 'CapacidadTanque': return QQN::Fichas30062010()->CapacidadTanque;
				case 'CapacidadCarga': return QQN::Fichas30062010()->CapacidadCarga;
				case 'FrenosDelanteros': return QQN::Fichas30062010()->FrenosDelanteros;
				case 'FrenosTraseros': return QQN::Fichas30062010()->FrenosTraseros;
				case 'Neumaticos': return QQN::Fichas30062010()->Neumaticos;
				case 'SuspensionDelantera': return QQN::Fichas30062010()->SuspensionDelantera;
				case 'SuspensionTrasera': return QQN::Fichas30062010()->SuspensionTrasera;
				case 'IdEstado': return QQN::Fichas30062010()->IdEstado;
				case 'Procesada': return QQN::Fichas30062010()->Procesada;
				default: throw new QCallerException('Simple Property not found in Fichas30062010DataGrid content: ' . $mixContent);
			} else if ($mixContent instanceof QQAssociationNode)
				throw new QCallerException('Content QQNode cannot go through any "To Many" association nodes.');
			else
				throw new QCallerException('Invalid Content type');
		}
	}
?>