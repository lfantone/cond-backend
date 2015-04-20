<?php
	/**
	 * This is the "Meta" DataGrid class for the List functionality
	 * of the FichasBackup class.  This code-generated class
	 * contains a QDataGrid class which can be used by any QForm or QPanel,
	 * listing a collection of FichasBackup objects.  It includes
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
	class FichasBackupDataGridGen extends QDataGrid {
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
		 * way of adding a column to this FichasBackup datagrid.  The description of a column's
		 * content can be either a text string description of a simple field name
		 * in the FichasBackup object, or it can be any QQNode extending from QQN::FichasBackup().
		 * 
		 * MetaAddColumn will automatically pre-configure the column with the name, html
		 * and sort rules given the content being specified.
		 * 
		 * Any of these things can be overridden with OverrideParameters.
		 * 
		 * Finally, $mixContents can also be an array of contents, if displaying and/or
		 * sorting using two fields from the FichasBackup object.
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
		 * @param mixed $mixContent string or QQNode from FichasBackup
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
				$this->TotalItemCount = FichasBackup::CountAll();
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

			// Set the DataSource to be a Query result from FichasBackup, given the clauses above
			$this->DataSource = FichasBackup::LoadAll($objClauses);
		}


		/**
		 * Used internally by the Meta-based Add Column tools.
		 *
		 * Given a QQNode or a Text String, this will return a FichasBackup-based QQNode.
		 * It will also verify that it is a proper FichasBackup-based QQNode, and will throw an exception otherwise.
		 *
		 * @param mixed $mixContent
		 * @return QQNode
		 */
		protected function ResolveContentItem($mixContent) {
			if ($mixContent instanceof QQNode) {
				if (!$mixContent->_ParentNode)
					throw new QCallerException('Content QQNode cannot be a Top Level Node');
				if ($mixContent->_RootTableName == 'fichas_backup') {
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
					throw new QCallerException('Content QQNode has a root table of "' . $mixContent->_RootTableName . '". Must be a root of "fichas_backup".');
			} else if (is_string($mixContent)) switch ($mixContent) {
				case 'Id': return QQN::FichasBackup()->Id;
				case 'IdMarca': return QQN::FichasBackup()->IdMarca;
				case 'IdTipos': return QQN::FichasBackup()->IdTipos;
				case 'Modelo': return QQN::FichasBackup()->Modelo;
				case 'Descripcion': return QQN::FichasBackup()->Descripcion;
				case 'Precio': return QQN::FichasBackup()->Precio;
				case 'Combustible': return QQN::FichasBackup()->Combustible;
				case 'Cilindrada': return QQN::FichasBackup()->Cilindrada;
				case 'Cilindros': return QQN::FichasBackup()->Cilindros;
				case 'PotenciaMaxima': return QQN::FichasBackup()->PotenciaMaxima;
				case 'ParMotorTorque': return QQN::FichasBackup()->ParMotorTorque;
				case 'Posicion': return QQN::FichasBackup()->Posicion;
				case 'Alimentacion': return QQN::FichasBackup()->Alimentacion;
				case 'RelacionDeCompresion': return QQN::FichasBackup()->RelacionDeCompresion;
				case 'Valvulas': return QQN::FichasBackup()->Valvulas;
				case 'Tipo': return QQN::FichasBackup()->Tipo;
				case 'Marchas': return QQN::FichasBackup()->Marchas;
				case 'Traccion': return QQN::FichasBackup()->Traccion;
				case 'VelocidadMaxima': return QQN::FichasBackup()->VelocidadMaxima;
				case 'Aceleracion0100': return QQN::FichasBackup()->Aceleracion0100;
				case 'ConsumoUrbano': return QQN::FichasBackup()->ConsumoUrbano;
				case 'ConsumoInterurbano': return QQN::FichasBackup()->ConsumoInterurbano;
				case 'ConsumoMixto': return QQN::FichasBackup()->ConsumoMixto;
				case 'EmisionesCo2': return QQN::FichasBackup()->EmisionesCo2;
				case 'TipoCarroceria': return QQN::FichasBackup()->TipoCarroceria;
				case 'Puertas': return QQN::FichasBackup()->Puertas;
				case 'Plazas': return QQN::FichasBackup()->Plazas;
				case 'FilasDeAsientos': return QQN::FichasBackup()->FilasDeAsientos;
				case 'InfoEjes': return QQN::FichasBackup()->InfoEjes;
				case 'Peso': return QQN::FichasBackup()->Peso;
				case 'CapacidadBaul': return QQN::FichasBackup()->CapacidadBaul;
				case 'CapacidadTanque': return QQN::FichasBackup()->CapacidadTanque;
				case 'InfoCajaCarga': return QQN::FichasBackup()->InfoCajaCarga;
				case 'VolumenCajaCarga': return QQN::FichasBackup()->VolumenCajaCarga;
				case 'CapacidadCarga': return QQN::FichasBackup()->CapacidadCarga;
				case 'FrenosDelanteros': return QQN::FichasBackup()->FrenosDelanteros;
				case 'FrenosTraseros': return QQN::FichasBackup()->FrenosTraseros;
				case 'Llantas': return QQN::FichasBackup()->Llantas;
				case 'Neumaticos': return QQN::FichasBackup()->Neumaticos;
				case 'SuspensionDelantera': return QQN::FichasBackup()->SuspensionDelantera;
				case 'SuspensionTrasera': return QQN::FichasBackup()->SuspensionTrasera;
				case 'LucesAutomatico': return QQN::FichasBackup()->LucesAutomatico;
				case 'Climatizacion': return QQN::FichasBackup()->Climatizacion;
				case 'AlarmaLucesEncendidas': return QQN::FichasBackup()->AlarmaLucesEncendidas;
				case 'CritalesElectricos': return QQN::FichasBackup()->CritalesElectricos;
				case 'AperturaBaul': return QQN::FichasBackup()->AperturaBaul;
				case 'AperturaTanque': return QQN::FichasBackup()->AperturaTanque;
				case 'AsientosRegulablesAltura': return QQN::FichasBackup()->AsientosRegulablesAltura;
				case 'AsientoTraseroRebatible': return QQN::FichasBackup()->AsientoTraseroRebatible;
				case 'AsientosCalefaccionado': return QQN::FichasBackup()->AsientosCalefaccionado;
				case 'AsientosAjustesElectronicos': return QQN::FichasBackup()->AsientosAjustesElectronicos;
				case 'AsientosDelButacaDeportiva': return QQN::FichasBackup()->AsientosDelButacaDeportiva;
				case 'AsientoDelBipartido': return QQN::FichasBackup()->AsientoDelBipartido;
				case 'BotonStartStop': return QQN::FichasBackup()->BotonStartStop;
				case 'CambioSecuencialVolante': return QQN::FichasBackup()->CambioSecuencialVolante;
				case 'CierreCentralizado': return QQN::FichasBackup()->CierreCentralizado;
				case 'ComputadoraABordo': return QQN::FichasBackup()->ComputadoraABordo;
				case 'DireccionAsistida': return QQN::FichasBackup()->DireccionAsistida;
				case 'MandosAudioVolante': return QQN::FichasBackup()->MandosAudioVolante;
				case 'Reposabrazos': return QQN::FichasBackup()->Reposabrazos;
				case 'ControlCrucero': return QQN::FichasBackup()->ControlCrucero;
				case 'SensorLluvia': return QQN::FichasBackup()->SensorLluvia;
				case 'Tapizado': return QQN::FichasBackup()->Tapizado;
				case 'SalidasAire': return QQN::FichasBackup()->SalidasAire;
				case 'TechoCorredizo': return QQN::FichasBackup()->TechoCorredizo;
				case 'ComandoDistancia': return QQN::FichasBackup()->ComandoDistancia;
				case 'VolanteAjusteVertical': return QQN::FichasBackup()->VolanteAjusteVertical;
				case 'VolanteCuero': return QQN::FichasBackup()->VolanteCuero;
				case 'MoldurasColorCarroceria': return QQN::FichasBackup()->MoldurasColorCarroceria;
				case 'EspejosElectricos': return QQN::FichasBackup()->EspejosElectricos;
				case 'EspejosRebatiblesElectricamente': return QQN::FichasBackup()->EspejosRebatiblesElectricamente;
				case 'EspejosMemorias': return QQN::FichasBackup()->EspejosMemorias;
				case 'LavaFaros': return QQN::FichasBackup()->LavaFaros;
				case 'LavaLuneta': return QQN::FichasBackup()->LavaLuneta;
				case 'CobertorCajaCarga': return QQN::FichasBackup()->CobertorCajaCarga;
				case 'BarrasPortaequipajeTecho': return QQN::FichasBackup()->BarrasPortaequipajeTecho;
				case 'BarraAntivuelco': return QQN::FichasBackup()->BarraAntivuelco;
				case 'Estribos': return QQN::FichasBackup()->Estribos;
				case 'ConexionAuxiliar': return QQN::FichasBackup()->ConexionAuxiliar;
				case 'ConexionBluetooth': return QQN::FichasBackup()->ConexionBluetooth;
				case 'ControlPorVoz': return QQN::FichasBackup()->ControlPorVoz;
				case 'EntradaUsb': return QQN::FichasBackup()->EntradaUsb;
				case 'LectorTarjetasSd': return QQN::FichasBackup()->LectorTarjetasSd;
				case 'NavegadorGps': return QQN::FichasBackup()->NavegadorGps;
				case 'Parlantes': return QQN::FichasBackup()->Parlantes;
				case 'RadioAmfm': return QQN::FichasBackup()->RadioAmfm;
				case 'RadioSatelitalXm': return QQN::FichasBackup()->RadioSatelitalXm;
				case 'ReproductorCd': return QQN::FichasBackup()->ReproductorCd;
				case 'ReproductorDvd': return QQN::FichasBackup()->ReproductorDvd;
				case 'ReproductorMp3': return QQN::FichasBackup()->ReproductorMp3;
				case 'TomaCorriente12v': return QQN::FichasBackup()->TomaCorriente12v;
				case 'Airbags': return QQN::FichasBackup()->Airbags;
				case 'Alarma': return QQN::FichasBackup()->Alarma;
				case 'AsientoParaNinos': return QQN::FichasBackup()->AsientoParaNinos;
				case 'AsistenciasElectronicas': return QQN::FichasBackup()->AsistenciasElectronicas;
				case 'CamaraRetroceso': return QQN::FichasBackup()->CamaraRetroceso;
				case 'CinturonesInerciales': return QQN::FichasBackup()->CinturonesInerciales;
				case 'SensorDistanciaEstacionamiento': return QQN::FichasBackup()->SensorDistanciaEstacionamiento;
				case 'DesempaniadorEspejosExteriores': return QQN::FichasBackup()->DesempaniadorEspejosExteriores;
				case 'EncendidoAutoBalizasUrgencia': return QQN::FichasBackup()->EncendidoAutoBalizasUrgencia;
				case 'FarosAntiniebla': return QQN::FichasBackup()->FarosAntiniebla;
				case 'FarosXenon': return QQN::FichasBackup()->FarosXenon;
				case 'GanchosIsofixLatch': return QQN::FichasBackup()->GanchosIsofixLatch;
				case 'Garantia': return QQN::FichasBackup()->Garantia;
				case 'IndicadorPresionNeumaticos': return QQN::FichasBackup()->IndicadorPresionNeumaticos;
				case 'Lavafaros': return QQN::FichasBackup()->Lavafaros;
				case 'LucesAdaptativasCurvas': return QQN::FichasBackup()->LucesAdaptativasCurvas;
				case 'TercerApoyaCabezaTrasero': return QQN::FichasBackup()->TercerApoyaCabezaTrasero;
				case 'IdEstado': return QQN::FichasBackup()->IdEstado;
				default: throw new QCallerException('Simple Property not found in FichasBackupDataGrid content: ' . $mixContent);
			} else if ($mixContent instanceof QQAssociationNode)
				throw new QCallerException('Content QQNode cannot go through any "To Many" association nodes.');
			else
				throw new QCallerException('Invalid Content type');
		}
	}
?>