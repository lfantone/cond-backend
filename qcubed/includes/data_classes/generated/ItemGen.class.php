<?php
	/**
	 * The abstract ItemGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Item subclass which
	 * extends this ItemGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Item class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdItem the value for intIdItem (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property string $Descripcion the value for strDescripcion (Not Null)
	 * @property string $Seccion the value for strSeccion (Not Null)
	 * @property integer $OrdenSeccion the value for intOrdenSeccion 
	 * @property integer $IdTipoDatoType the value for intIdTipoDatoType (Not Null)
	 * @property integer $IdPais the value for intIdPais (Not Null)
	 * @property Paises $IdPaisObject the value for the Paises object referenced by intIdPais (Not Null)
	 * @property-read FichasItemValor $_FichasItemValorAsId the value for the private _objFichasItemValorAsId (Read-Only) if set due to an expansion on the fichas_item_valor.id_item reverse relationship
	 * @property-read FichasItemValor[] $_FichasItemValorAsIdArray the value for the private _objFichasItemValorAsIdArray (Read-Only) if set due to an ExpandAsArray on the fichas_item_valor.id_item reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ItemGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column item.id_item
		 * @var integer intIdItem
		 */
		protected $intIdItem;
		const IdItemDefault = null;


		/**
		 * Protected member variable that maps to the database column item.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 255;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column item.descripcion
		 * @var string strDescripcion
		 */
		protected $strDescripcion;
		const DescripcionMaxLength = 255;
		const DescripcionDefault = null;


		/**
		 * Protected member variable that maps to the database column item.seccion
		 * @var string strSeccion
		 */
		protected $strSeccion;
		const SeccionMaxLength = 255;
		const SeccionDefault = null;


		/**
		 * Protected member variable that maps to the database column item.orden_seccion
		 * @var integer intOrdenSeccion
		 */
		protected $intOrdenSeccion;
		const OrdenSeccionDefault = null;


		/**
		 * Protected member variable that maps to the database column item.id_tipo_dato_type
		 * @var integer intIdTipoDatoType
		 */
		protected $intIdTipoDatoType;
		const IdTipoDatoTypeDefault = null;


		/**
		 * Protected member variable that maps to the database column item.id_pais
		 * @var integer intIdPais
		 */
		protected $intIdPais;
		const IdPaisDefault = null;


		/**
		 * Private member variable that stores a reference to a single FichasItemValorAsId object
		 * (of type FichasItemValor), if this Item object was restored with
		 * an expansion on the fichas_item_valor association table.
		 * @var FichasItemValor _objFichasItemValorAsId;
		 */
		private $_objFichasItemValorAsId;

		/**
		 * Private member variable that stores a reference to an array of FichasItemValorAsId objects
		 * (of type FichasItemValor[]), if this Item object was restored with
		 * an ExpandAsArray on the fichas_item_valor association table.
		 * @var FichasItemValor[] _objFichasItemValorAsIdArray;
		 */
		private $_objFichasItemValorAsIdArray = array();

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column item.id_pais.
		 *
		 * NOTE: Always use the IdPaisObject property getter to correctly retrieve this Paises object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Paises objIdPaisObject
		 */
		protected $objIdPaisObject;





		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a Item from PK Info
		 * @param integer $intIdItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Item
		 */
		public static function Load($intIdItem, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Item::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Item()->IdItem, $intIdItem)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Items
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Item[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Item::QueryArray to perform the LoadAll query
			try {
				return Item::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Items
		 * @return int
		 */
		public static function CountAll() {
			// Call Item::QueryCount to perform the CountAll query
			return Item::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCUBED QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcubed Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = Item::GetDatabase();

			// Create/Build out the QueryBuilder object with Item-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'item');
			Item::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('item');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcubed Query method to query for a single Item object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Item the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Item::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Item object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Item::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;					
				}
				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if(null === $objDbRow)
					return null;
				return Item::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Item objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Item[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Item::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Item::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Item objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Item::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

		public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Item::GetDatabase();

			$strQuery = Item::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/item', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Item::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Item
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'item';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_item', $strAliasPrefix . 'id_item');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'descripcion', $strAliasPrefix . 'descripcion');
			$objBuilder->AddSelectItem($strTableName, 'seccion', $strAliasPrefix . 'seccion');
			$objBuilder->AddSelectItem($strTableName, 'orden_seccion', $strAliasPrefix . 'orden_seccion');
			$objBuilder->AddSelectItem($strTableName, 'id_tipo_dato_type', $strAliasPrefix . 'id_tipo_dato_type');
			$objBuilder->AddSelectItem($strTableName, 'id_pais', $strAliasPrefix . 'id_pais');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Item from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Item::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Item
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id_item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdItem == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'item__';


						// Expanding reverse references: FichasItemValorAsId
						$strAlias = $strAliasPrefix . 'fichasitemvalorasid__id_fichas';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFichasItemValorAsIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFichasItemValorAsIdArray;
								$objChildItem = FichasItemValor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasitemvalorasid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFichasItemValorAsIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFichasItemValorAsIdArray[] = FichasItemValor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasitemvalorasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'item__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Item object
			$objToReturn = new Item();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_item', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_item'] : $strAliasPrefix . 'id_item';
			$objToReturn->intIdItem = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'descripcion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'descripcion'] : $strAliasPrefix . 'descripcion';
			$objToReturn->strDescripcion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'seccion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'seccion'] : $strAliasPrefix . 'seccion';
			$objToReturn->strSeccion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'orden_seccion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'orden_seccion'] : $strAliasPrefix . 'orden_seccion';
			$objToReturn->intOrdenSeccion = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_tipo_dato_type', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_tipo_dato_type'] : $strAliasPrefix . 'id_tipo_dato_type';
			$objToReturn->intIdTipoDatoType = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_pais', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_pais'] : $strAliasPrefix . 'id_pais';
			$objToReturn->intIdPais = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdItem != $objPreviousItem->IdItem) {
						continue;
					}
					if (array_diff($objPreviousItem->_objFichasItemValorAsIdArray, $objToReturn->_objFichasItemValorAsIdArray) != null) {
						continue;
					}

					// complete match - all primary key columns are the same
					return null;
				}
			}

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'item__';

			// Check for IdPaisObject Early Binding
			$strAlias = $strAliasPrefix . 'id_pais__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdPaisObject = Paises::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_pais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for FichasItemValorAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'fichasitemvalorasid__id_fichas';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFichasItemValorAsIdArray[] = FichasItemValor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasitemvalorasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFichasItemValorAsId = FichasItemValor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasitemvalorasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Items from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Item[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();
			
			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Item::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Item::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Item object,
		 * by IdItem Index(es)
		 * @param integer $intIdItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Item
		*/
		public static function LoadByIdItem($intIdItem, $objOptionalClauses = null) {
			return Item::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Item()->IdItem, $intIdItem)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single Item object,
		 * by Nombre, IdPais Index(es)
		 * @param string $strNombre
		 * @param integer $intIdPais
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Item
		*/
		public static function LoadByNombreIdPais($strNombre, $intIdPais, $objOptionalClauses = null) {
			return Item::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Item()->Nombre, $strNombre),
					QQ::Equal(QQN::Item()->IdPais, $intIdPais)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Item objects,
		 * by IdTipoDatoType Index(es)
		 * @param integer $intIdTipoDatoType
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Item[]
		*/
		public static function LoadArrayByIdTipoDatoType($intIdTipoDatoType, $objOptionalClauses = null) {
			// Call Item::QueryArray to perform the LoadArrayByIdTipoDatoType query
			try {
				return Item::QueryArray(
					QQ::Equal(QQN::Item()->IdTipoDatoType, $intIdTipoDatoType),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Items
		 * by IdTipoDatoType Index(es)
		 * @param integer $intIdTipoDatoType
		 * @return int
		*/
		public static function CountByIdTipoDatoType($intIdTipoDatoType) {
			// Call Item::QueryCount to perform the CountByIdTipoDatoType query
			return Item::QueryCount(
				QQ::Equal(QQN::Item()->IdTipoDatoType, $intIdTipoDatoType)
			);
		}
			
		/**
		 * Load an array of Item objects,
		 * by IdPais Index(es)
		 * @param integer $intIdPais
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Item[]
		*/
		public static function LoadArrayByIdPais($intIdPais, $objOptionalClauses = null) {
			// Call Item::QueryArray to perform the LoadArrayByIdPais query
			try {
				return Item::QueryArray(
					QQ::Equal(QQN::Item()->IdPais, $intIdPais),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Items
		 * by IdPais Index(es)
		 * @param integer $intIdPais
		 * @return int
		*/
		public static function CountByIdPais($intIdPais) {
			// Call Item::QueryCount to perform the CountByIdPais query
			return Item::QueryCount(
				QQ::Equal(QQN::Item()->IdPais, $intIdPais)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Item
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Item::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `item` (
							`nombre`,
							`descripcion`,
							`seccion`,
							`orden_seccion`,
							`id_tipo_dato_type`,
							`id_pais`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->strDescripcion) . ',
							' . $objDatabase->SqlVariable($this->strSeccion) . ',
							' . $objDatabase->SqlVariable($this->intOrdenSeccion) . ',
							' . $objDatabase->SqlVariable($this->intIdTipoDatoType) . ',
							' . $objDatabase->SqlVariable($this->intIdPais) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdItem = $objDatabase->InsertId('item', 'id_item');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`item`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							`descripcion` = ' . $objDatabase->SqlVariable($this->strDescripcion) . ',
							`seccion` = ' . $objDatabase->SqlVariable($this->strSeccion) . ',
							`orden_seccion` = ' . $objDatabase->SqlVariable($this->intOrdenSeccion) . ',
							`id_tipo_dato_type` = ' . $objDatabase->SqlVariable($this->intIdTipoDatoType) . ',
							`id_pais` = ' . $objDatabase->SqlVariable($this->intIdPais) . '
						WHERE
							`id_item` = ' . $objDatabase->SqlVariable($this->intIdItem) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this Item
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdItem)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Item with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Item::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`item`
				WHERE
					`id_item` = ' . $objDatabase->SqlVariable($this->intIdItem) . '');
		}

		/**
		 * Delete all Items
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Item::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`item`');
		}

		/**
		 * Truncate item table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Item::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `item`');
		}

		/**
		 * Reload this Item from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Item object.');

			// Reload the Object
			$objReloaded = Item::Load($this->intIdItem);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->strDescripcion = $objReloaded->strDescripcion;
			$this->strSeccion = $objReloaded->strSeccion;
			$this->intOrdenSeccion = $objReloaded->intOrdenSeccion;
			$this->IdTipoDatoType = $objReloaded->IdTipoDatoType;
			$this->IdPais = $objReloaded->IdPais;
		}



		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'IdItem':
					/**
					 * Gets the value for intIdItem (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdItem;

				case 'Nombre':
					/**
					 * Gets the value for strNombre (Not Null)
					 * @return string
					 */
					return $this->strNombre;

				case 'Descripcion':
					/**
					 * Gets the value for strDescripcion (Not Null)
					 * @return string
					 */
					return $this->strDescripcion;

				case 'Seccion':
					/**
					 * Gets the value for strSeccion (Not Null)
					 * @return string
					 */
					return $this->strSeccion;

				case 'OrdenSeccion':
					/**
					 * Gets the value for intOrdenSeccion 
					 * @return integer
					 */
					return $this->intOrdenSeccion;

				case 'IdTipoDatoType':
					/**
					 * Gets the value for intIdTipoDatoType (Not Null)
					 * @return integer
					 */
					return $this->intIdTipoDatoType;

				case 'IdPais':
					/**
					 * Gets the value for intIdPais (Not Null)
					 * @return integer
					 */
					return $this->intIdPais;


				///////////////////
				// Member Objects
				///////////////////
				case 'IdPaisObject':
					/**
					 * Gets the value for the Paises object referenced by intIdPais (Not Null)
					 * @return Paises
					 */
					try {
						if ((!$this->objIdPaisObject) && (!is_null($this->intIdPais)))
							$this->objIdPaisObject = Paises::Load($this->intIdPais);
						return $this->objIdPaisObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_FichasItemValorAsId':
					/**
					 * Gets the value for the private _objFichasItemValorAsId (Read-Only)
					 * if set due to an expansion on the fichas_item_valor.id_item reverse relationship
					 * @return FichasItemValor
					 */
					return $this->_objFichasItemValorAsId;

				case '_FichasItemValorAsIdArray':
					/**
					 * Gets the value for the private _objFichasItemValorAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the fichas_item_valor.id_item reverse relationship
					 * @return FichasItemValor[]
					 */
					return (array) $this->_objFichasItemValorAsIdArray;


				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Nombre':
					/**
					 * Sets the value for strNombre (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNombre = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Descripcion':
					/**
					 * Sets the value for strDescripcion (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescripcion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Seccion':
					/**
					 * Sets the value for strSeccion (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSeccion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OrdenSeccion':
					/**
					 * Sets the value for intOrdenSeccion 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intOrdenSeccion = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdTipoDatoType':
					/**
					 * Sets the value for intIdTipoDatoType (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intIdTipoDatoType = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdPais':
					/**
					 * Sets the value for intIdPais (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdPaisObject = null;
						return ($this->intIdPais = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'IdPaisObject':
					/**
					 * Sets the value for the Paises object referenced by intIdPais (Not Null)
					 * @param Paises $mixValue
					 * @return Paises
					 */
					if (is_null($mixValue)) {
						$this->intIdPais = null;
						$this->objIdPaisObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Paises object
						try {
							$mixValue = QType::Cast($mixValue, 'Paises');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Paises object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved IdPaisObject for this Item');

						// Update Local Member Variables
						$this->objIdPaisObject = $mixValue;
						$this->intIdPais = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////

			
		
		// Related Objects' Methods for FichasItemValorAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FichasItemValorsAsId as an array of FichasItemValor objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasItemValor[]
		*/ 
		public function GetFichasItemValorAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdItem)))
				return array();

			try {
				return FichasItemValor::LoadArrayByIdItem($this->intIdItem, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FichasItemValorsAsId
		 * @return int
		*/ 
		public function CountFichasItemValorsAsId() {
			if ((is_null($this->intIdItem)))
				return 0;

			return FichasItemValor::CountByIdItem($this->intIdItem);
		}

		/**
		 * Associates a FichasItemValorAsId
		 * @param FichasItemValor $objFichasItemValor
		 * @return void
		*/ 
		public function AssociateFichasItemValorAsId(FichasItemValor $objFichasItemValor) {
			if ((is_null($this->intIdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasItemValorAsId on this unsaved Item.');
			if ((is_null($objFichasItemValor->IdFichas)) || (is_null($objFichasItemValor->IdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasItemValorAsId on this Item with an unsaved FichasItemValor.');

			// Get the Database Object for this Class
			$objDatabase = Item::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_item_valor`
				SET
					`id_item` = ' . $objDatabase->SqlVariable($this->intIdItem) . '
				WHERE
					`id_fichas` = ' . $objDatabase->SqlVariable($objFichasItemValor->IdFichas) . ' AND
					`id_item` = ' . $objDatabase->SqlVariable($objFichasItemValor->IdItem) . '
			');
		}

		/**
		 * Unassociates a FichasItemValorAsId
		 * @param FichasItemValor $objFichasItemValor
		 * @return void
		*/ 
		public function UnassociateFichasItemValorAsId(FichasItemValor $objFichasItemValor) {
			if ((is_null($this->intIdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasItemValorAsId on this unsaved Item.');
			if ((is_null($objFichasItemValor->IdFichas)) || (is_null($objFichasItemValor->IdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasItemValorAsId on this Item with an unsaved FichasItemValor.');

			// Get the Database Object for this Class
			$objDatabase = Item::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_item_valor`
				SET
					`id_item` = null
				WHERE
					`id_fichas` = ' . $objDatabase->SqlVariable($objFichasItemValor->IdFichas) . ' AND
					`id_item` = ' . $objDatabase->SqlVariable($objFichasItemValor->IdItem) . ' AND
					`id_item` = ' . $objDatabase->SqlVariable($this->intIdItem) . '
			');
		}

		/**
		 * Unassociates all FichasItemValorsAsId
		 * @return void
		*/ 
		public function UnassociateAllFichasItemValorsAsId() {
			if ((is_null($this->intIdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasItemValorAsId on this unsaved Item.');

			// Get the Database Object for this Class
			$objDatabase = Item::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_item_valor`
				SET
					`id_item` = null
				WHERE
					`id_item` = ' . $objDatabase->SqlVariable($this->intIdItem) . '
			');
		}

		/**
		 * Deletes an associated FichasItemValorAsId
		 * @param FichasItemValor $objFichasItemValor
		 * @return void
		*/ 
		public function DeleteAssociatedFichasItemValorAsId(FichasItemValor $objFichasItemValor) {
			if ((is_null($this->intIdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasItemValorAsId on this unsaved Item.');
			if ((is_null($objFichasItemValor->IdFichas)) || (is_null($objFichasItemValor->IdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasItemValorAsId on this Item with an unsaved FichasItemValor.');

			// Get the Database Object for this Class
			$objDatabase = Item::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_item_valor`
				WHERE
					`id_fichas` = ' . $objDatabase->SqlVariable($objFichasItemValor->IdFichas) . ' AND
					`id_item` = ' . $objDatabase->SqlVariable($objFichasItemValor->IdItem) . ' AND
					`id_item` = ' . $objDatabase->SqlVariable($this->intIdItem) . '
			');
		}

		/**
		 * Deletes all associated FichasItemValorsAsId
		 * @return void
		*/ 
		public function DeleteAllFichasItemValorsAsId() {
			if ((is_null($this->intIdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasItemValorAsId on this unsaved Item.');

			// Get the Database Object for this Class
			$objDatabase = Item::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_item_valor`
				WHERE
					`id_item` = ' . $objDatabase->SqlVariable($this->intIdItem) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Item"><sequence>';
			$strToReturn .= '<element name="IdItem" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="Descripcion" type="xsd:string"/>';
			$strToReturn .= '<element name="Seccion" type="xsd:string"/>';
			$strToReturn .= '<element name="OrdenSeccion" type="xsd:int"/>';
			$strToReturn .= '<element name="IdTipoDatoType" type="xsd:int"/>';
			$strToReturn .= '<element name="IdPaisObject" type="xsd1:Paises"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Item', $strComplexTypeArray)) {
				$strComplexTypeArray['Item'] = Item::GetSoapComplexTypeXml();
				Paises::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Item::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Item();
			if (property_exists($objSoapObject, 'IdItem'))
				$objToReturn->intIdItem = $objSoapObject->IdItem;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'Descripcion'))
				$objToReturn->strDescripcion = $objSoapObject->Descripcion;
			if (property_exists($objSoapObject, 'Seccion'))
				$objToReturn->strSeccion = $objSoapObject->Seccion;
			if (property_exists($objSoapObject, 'OrdenSeccion'))
				$objToReturn->intOrdenSeccion = $objSoapObject->OrdenSeccion;
			if (property_exists($objSoapObject, 'IdTipoDatoType'))
				$objToReturn->intIdTipoDatoType = $objSoapObject->IdTipoDatoType;
			if ((property_exists($objSoapObject, 'IdPaisObject')) &&
				($objSoapObject->IdPaisObject))
				$objToReturn->IdPaisObject = Paises::GetObjectFromSoapObject($objSoapObject->IdPaisObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Item::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdPaisObject)
				$objObject->objIdPaisObject = Paises::GetSoapObjectFromObject($objObject->objIdPaisObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdPais = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeItem extends QQNode {
		protected $strTableName = 'item';
		protected $strPrimaryKey = 'id_item';
		protected $strClassName = 'Item';
		public function __get($strName) {
			switch ($strName) {
				case 'IdItem':
					return new QQNode('id_item', 'IdItem', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Descripcion':
					return new QQNode('descripcion', 'Descripcion', 'string', $this);
				case 'Seccion':
					return new QQNode('seccion', 'Seccion', 'string', $this);
				case 'OrdenSeccion':
					return new QQNode('orden_seccion', 'OrdenSeccion', 'integer', $this);
				case 'IdTipoDatoType':
					return new QQNode('id_tipo_dato_type', 'IdTipoDatoType', 'integer', $this);
				case 'IdPais':
					return new QQNode('id_pais', 'IdPais', 'integer', $this);
				case 'IdPaisObject':
					return new QQNodePaises('id_pais', 'IdPaisObject', 'integer', $this);
				case 'FichasItemValorAsId':
					return new QQReverseReferenceNodeFichasItemValor($this, 'fichasitemvalorasid', 'reverse_reference', 'id_item');

				case '_PrimaryKeyNode':
					return new QQNode('id_item', 'IdItem', 'integer', $this);
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

	class QQReverseReferenceNodeItem extends QQReverseReferenceNode {
		protected $strTableName = 'item';
		protected $strPrimaryKey = 'id_item';
		protected $strClassName = 'Item';
		public function __get($strName) {
			switch ($strName) {
				case 'IdItem':
					return new QQNode('id_item', 'IdItem', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Descripcion':
					return new QQNode('descripcion', 'Descripcion', 'string', $this);
				case 'Seccion':
					return new QQNode('seccion', 'Seccion', 'string', $this);
				case 'OrdenSeccion':
					return new QQNode('orden_seccion', 'OrdenSeccion', 'integer', $this);
				case 'IdTipoDatoType':
					return new QQNode('id_tipo_dato_type', 'IdTipoDatoType', 'integer', $this);
				case 'IdPais':
					return new QQNode('id_pais', 'IdPais', 'integer', $this);
				case 'IdPaisObject':
					return new QQNodePaises('id_pais', 'IdPaisObject', 'integer', $this);
				case 'FichasItemValorAsId':
					return new QQReverseReferenceNodeFichasItemValor($this, 'fichasitemvalorasid', 'reverse_reference', 'id_item');

				case '_PrimaryKeyNode':
					return new QQNode('id_item', 'IdItem', 'integer', $this);
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