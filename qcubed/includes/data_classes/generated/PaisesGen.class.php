<?php
	/**
	 * The abstract PaisesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Paises subclass which
	 * extends this PaisesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Paises class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property-read Fichas $_FichasAsIdPais the value for the private _objFichasAsIdPais (Read-Only) if set due to an expansion on the fichas.id_pais reverse relationship
	 * @property-read Fichas[] $_FichasAsIdPaisArray the value for the private _objFichasAsIdPaisArray (Read-Only) if set due to an ExpandAsArray on the fichas.id_pais reverse relationship
	 * @property-read FichasPaises $_FichasPaisesAsIdPais the value for the private _objFichasPaisesAsIdPais (Read-Only) if set due to an expansion on the fichas_paises.id_pais reverse relationship
	 * @property-read FichasPaises[] $_FichasPaisesAsIdPaisArray the value for the private _objFichasPaisesAsIdPaisArray (Read-Only) if set due to an ExpandAsArray on the fichas_paises.id_pais reverse relationship
	 * @property-read Item $_ItemAsIdPais the value for the private _objItemAsIdPais (Read-Only) if set due to an expansion on the item.id_pais reverse relationship
	 * @property-read Item[] $_ItemAsIdPaisArray the value for the private _objItemAsIdPaisArray (Read-Only) if set due to an ExpandAsArray on the item.id_pais reverse relationship
	 * @property-read Modelo $_ModeloAsIdPais the value for the private _objModeloAsIdPais (Read-Only) if set due to an expansion on the modelo.id_pais reverse relationship
	 * @property-read Modelo[] $_ModeloAsIdPaisArray the value for the private _objModeloAsIdPaisArray (Read-Only) if set due to an ExpandAsArray on the modelo.id_pais reverse relationship
	 * @property-read NotasPaises $_NotasPaisesAsIdPais the value for the private _objNotasPaisesAsIdPais (Read-Only) if set due to an expansion on the notas_paises.id_pais reverse relationship
	 * @property-read NotasPaises[] $_NotasPaisesAsIdPaisArray the value for the private _objNotasPaisesAsIdPaisArray (Read-Only) if set due to an ExpandAsArray on the notas_paises.id_pais reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class PaisesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column paises.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column paises.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 255;
		const NombreDefault = null;


		/**
		 * Private member variable that stores a reference to a single FichasAsIdPais object
		 * (of type Fichas), if this Paises object was restored with
		 * an expansion on the fichas association table.
		 * @var Fichas _objFichasAsIdPais;
		 */
		private $_objFichasAsIdPais;

		/**
		 * Private member variable that stores a reference to an array of FichasAsIdPais objects
		 * (of type Fichas[]), if this Paises object was restored with
		 * an ExpandAsArray on the fichas association table.
		 * @var Fichas[] _objFichasAsIdPaisArray;
		 */
		private $_objFichasAsIdPaisArray = array();

		/**
		 * Private member variable that stores a reference to a single FichasPaisesAsIdPais object
		 * (of type FichasPaises), if this Paises object was restored with
		 * an expansion on the fichas_paises association table.
		 * @var FichasPaises _objFichasPaisesAsIdPais;
		 */
		private $_objFichasPaisesAsIdPais;

		/**
		 * Private member variable that stores a reference to an array of FichasPaisesAsIdPais objects
		 * (of type FichasPaises[]), if this Paises object was restored with
		 * an ExpandAsArray on the fichas_paises association table.
		 * @var FichasPaises[] _objFichasPaisesAsIdPaisArray;
		 */
		private $_objFichasPaisesAsIdPaisArray = array();

		/**
		 * Private member variable that stores a reference to a single ItemAsIdPais object
		 * (of type Item), if this Paises object was restored with
		 * an expansion on the item association table.
		 * @var Item _objItemAsIdPais;
		 */
		private $_objItemAsIdPais;

		/**
		 * Private member variable that stores a reference to an array of ItemAsIdPais objects
		 * (of type Item[]), if this Paises object was restored with
		 * an ExpandAsArray on the item association table.
		 * @var Item[] _objItemAsIdPaisArray;
		 */
		private $_objItemAsIdPaisArray = array();

		/**
		 * Private member variable that stores a reference to a single ModeloAsIdPais object
		 * (of type Modelo), if this Paises object was restored with
		 * an expansion on the modelo association table.
		 * @var Modelo _objModeloAsIdPais;
		 */
		private $_objModeloAsIdPais;

		/**
		 * Private member variable that stores a reference to an array of ModeloAsIdPais objects
		 * (of type Modelo[]), if this Paises object was restored with
		 * an ExpandAsArray on the modelo association table.
		 * @var Modelo[] _objModeloAsIdPaisArray;
		 */
		private $_objModeloAsIdPaisArray = array();

		/**
		 * Private member variable that stores a reference to a single NotasPaisesAsIdPais object
		 * (of type NotasPaises), if this Paises object was restored with
		 * an expansion on the notas_paises association table.
		 * @var NotasPaises _objNotasPaisesAsIdPais;
		 */
		private $_objNotasPaisesAsIdPais;

		/**
		 * Private member variable that stores a reference to an array of NotasPaisesAsIdPais objects
		 * (of type NotasPaises[]), if this Paises object was restored with
		 * an ExpandAsArray on the notas_paises association table.
		 * @var NotasPaises[] _objNotasPaisesAsIdPaisArray;
		 */
		private $_objNotasPaisesAsIdPaisArray = array();

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
		 * Load a Paises from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Paises
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Paises::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Paises()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Paiseses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Paises[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Paises::QueryArray to perform the LoadAll query
			try {
				return Paises::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Paiseses
		 * @return int
		 */
		public static function CountAll() {
			// Call Paises::QueryCount to perform the CountAll query
			return Paises::QueryCount(QQ::All());
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
			$objDatabase = Paises::GetDatabase();

			// Create/Build out the QueryBuilder object with Paises-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'paises');
			Paises::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('paises');

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
		 * Static Qcubed Query method to query for a single Paises object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Paises the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Paises::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Paises object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Paises::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Paises::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Paises objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Paises[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Paises::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Paises::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Paises objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Paises::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Paises::GetDatabase();

			$strQuery = Paises::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/paises', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Paises::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Paises
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'paises';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Paises from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Paises::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Paises
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intId == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'paises__';


						// Expanding reverse references: FichasAsIdPais
						$strAlias = $strAliasPrefix . 'fichasasidpais__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFichasAsIdPaisArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFichasAsIdPaisArray;
								$objChildItem = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasidpais__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFichasAsIdPaisArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFichasAsIdPaisArray[] = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: FichasPaisesAsIdPais
						$strAlias = $strAliasPrefix . 'fichaspaisesasidpais__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFichasPaisesAsIdPaisArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFichasPaisesAsIdPaisArray;
								$objChildItem = FichasPaises::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichaspaisesasidpais__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFichasPaisesAsIdPaisArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFichasPaisesAsIdPaisArray[] = FichasPaises::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichaspaisesasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ItemAsIdPais
						$strAlias = $strAliasPrefix . 'itemasidpais__id_item';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objItemAsIdPaisArray)) {
								$objPreviousChildItems = $objPreviousItem->_objItemAsIdPaisArray;
								$objChildItem = Item::InstantiateDbRow($objDbRow, $strAliasPrefix . 'itemasidpais__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objItemAsIdPaisArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objItemAsIdPaisArray[] = Item::InstantiateDbRow($objDbRow, $strAliasPrefix . 'itemasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ModeloAsIdPais
						$strAlias = $strAliasPrefix . 'modeloasidpais__id_modelo';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objModeloAsIdPaisArray)) {
								$objPreviousChildItems = $objPreviousItem->_objModeloAsIdPaisArray;
								$objChildItem = Modelo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'modeloasidpais__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objModeloAsIdPaisArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objModeloAsIdPaisArray[] = Modelo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'modeloasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NotasPaisesAsIdPais
						$strAlias = $strAliasPrefix . 'notaspaisesasidpais__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNotasPaisesAsIdPaisArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNotasPaisesAsIdPaisArray;
								$objChildItem = NotasPaises::InstantiateDbRow($objDbRow, $strAliasPrefix . 'notaspaisesasidpais__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNotasPaisesAsIdPaisArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNotasPaisesAsIdPaisArray[] = NotasPaises::InstantiateDbRow($objDbRow, $strAliasPrefix . 'notaspaisesasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'paises__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Paises object
			$objToReturn = new Paises();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
						continue;
					}
					if (array_diff($objPreviousItem->_objFichasAsIdPaisArray, $objToReturn->_objFichasAsIdPaisArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objFichasPaisesAsIdPaisArray, $objToReturn->_objFichasPaisesAsIdPaisArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objItemAsIdPaisArray, $objToReturn->_objItemAsIdPaisArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objModeloAsIdPaisArray, $objToReturn->_objModeloAsIdPaisArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNotasPaisesAsIdPaisArray, $objToReturn->_objNotasPaisesAsIdPaisArray) != null) {
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
				$strAliasPrefix = 'paises__';




			// Check for FichasAsIdPais Virtual Binding
			$strAlias = $strAliasPrefix . 'fichasasidpais__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFichasAsIdPaisArray[] = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFichasAsIdPais = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for FichasPaisesAsIdPais Virtual Binding
			$strAlias = $strAliasPrefix . 'fichaspaisesasidpais__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFichasPaisesAsIdPaisArray[] = FichasPaises::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichaspaisesasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFichasPaisesAsIdPais = FichasPaises::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichaspaisesasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ItemAsIdPais Virtual Binding
			$strAlias = $strAliasPrefix . 'itemasidpais__id_item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objItemAsIdPaisArray[] = Item::InstantiateDbRow($objDbRow, $strAliasPrefix . 'itemasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objItemAsIdPais = Item::InstantiateDbRow($objDbRow, $strAliasPrefix . 'itemasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ModeloAsIdPais Virtual Binding
			$strAlias = $strAliasPrefix . 'modeloasidpais__id_modelo';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objModeloAsIdPaisArray[] = Modelo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'modeloasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objModeloAsIdPais = Modelo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'modeloasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NotasPaisesAsIdPais Virtual Binding
			$strAlias = $strAliasPrefix . 'notaspaisesasidpais__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objNotasPaisesAsIdPaisArray[] = NotasPaises::InstantiateDbRow($objDbRow, $strAliasPrefix . 'notaspaisesasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNotasPaisesAsIdPais = NotasPaises::InstantiateDbRow($objDbRow, $strAliasPrefix . 'notaspaisesasidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Paiseses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Paises[]
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
					$objItem = Paises::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Paises::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Paises object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Paises
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Paises::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Paises()->Id, $intId)
				),
				$objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Paises
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `paises` (
							`nombre`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('paises', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`paises`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
		 * Delete this Paises
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Paises with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`paises`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all Paiseses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`paises`');
		}

		/**
		 * Truncate paises table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `paises`');
		}

		/**
		 * Reload this Paises from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Paises object.');

			// Reload the Object
			$objReloaded = Paises::Load($this->intId);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
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
				case 'Id':
					/**
					 * Gets the value for intId (Read-Only PK)
					 * @return integer
					 */
					return $this->intId;

				case 'Nombre':
					/**
					 * Gets the value for strNombre (Not Null)
					 * @return string
					 */
					return $this->strNombre;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_FichasAsIdPais':
					/**
					 * Gets the value for the private _objFichasAsIdPais (Read-Only)
					 * if set due to an expansion on the fichas.id_pais reverse relationship
					 * @return Fichas
					 */
					return $this->_objFichasAsIdPais;

				case '_FichasAsIdPaisArray':
					/**
					 * Gets the value for the private _objFichasAsIdPaisArray (Read-Only)
					 * if set due to an ExpandAsArray on the fichas.id_pais reverse relationship
					 * @return Fichas[]
					 */
					return (array) $this->_objFichasAsIdPaisArray;

				case '_FichasPaisesAsIdPais':
					/**
					 * Gets the value for the private _objFichasPaisesAsIdPais (Read-Only)
					 * if set due to an expansion on the fichas_paises.id_pais reverse relationship
					 * @return FichasPaises
					 */
					return $this->_objFichasPaisesAsIdPais;

				case '_FichasPaisesAsIdPaisArray':
					/**
					 * Gets the value for the private _objFichasPaisesAsIdPaisArray (Read-Only)
					 * if set due to an ExpandAsArray on the fichas_paises.id_pais reverse relationship
					 * @return FichasPaises[]
					 */
					return (array) $this->_objFichasPaisesAsIdPaisArray;

				case '_ItemAsIdPais':
					/**
					 * Gets the value for the private _objItemAsIdPais (Read-Only)
					 * if set due to an expansion on the item.id_pais reverse relationship
					 * @return Item
					 */
					return $this->_objItemAsIdPais;

				case '_ItemAsIdPaisArray':
					/**
					 * Gets the value for the private _objItemAsIdPaisArray (Read-Only)
					 * if set due to an ExpandAsArray on the item.id_pais reverse relationship
					 * @return Item[]
					 */
					return (array) $this->_objItemAsIdPaisArray;

				case '_ModeloAsIdPais':
					/**
					 * Gets the value for the private _objModeloAsIdPais (Read-Only)
					 * if set due to an expansion on the modelo.id_pais reverse relationship
					 * @return Modelo
					 */
					return $this->_objModeloAsIdPais;

				case '_ModeloAsIdPaisArray':
					/**
					 * Gets the value for the private _objModeloAsIdPaisArray (Read-Only)
					 * if set due to an ExpandAsArray on the modelo.id_pais reverse relationship
					 * @return Modelo[]
					 */
					return (array) $this->_objModeloAsIdPaisArray;

				case '_NotasPaisesAsIdPais':
					/**
					 * Gets the value for the private _objNotasPaisesAsIdPais (Read-Only)
					 * if set due to an expansion on the notas_paises.id_pais reverse relationship
					 * @return NotasPaises
					 */
					return $this->_objNotasPaisesAsIdPais;

				case '_NotasPaisesAsIdPaisArray':
					/**
					 * Gets the value for the private _objNotasPaisesAsIdPaisArray (Read-Only)
					 * if set due to an ExpandAsArray on the notas_paises.id_pais reverse relationship
					 * @return NotasPaises[]
					 */
					return (array) $this->_objNotasPaisesAsIdPaisArray;


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


				///////////////////
				// Member Objects
				///////////////////
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

			
		
		// Related Objects' Methods for FichasAsIdPais
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FichasesAsIdPais as an array of Fichas objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fichas[]
		*/ 
		public function GetFichasAsIdPaisArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Fichas::LoadArrayByIdPais($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FichasesAsIdPais
		 * @return int
		*/ 
		public function CountFichasesAsIdPais() {
			if ((is_null($this->intId)))
				return 0;

			return Fichas::CountByIdPais($this->intId);
		}

		/**
		 * Associates a FichasAsIdPais
		 * @param Fichas $objFichas
		 * @return void
		*/ 
		public function AssociateFichasAsIdPais(Fichas $objFichas) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasAsIdPais on this unsaved Paises.');
			if ((is_null($objFichas->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasAsIdPais on this Paises with an unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas`
				SET
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichas->Id) . '
			');
		}

		/**
		 * Unassociates a FichasAsIdPais
		 * @param Fichas $objFichas
		 * @return void
		*/ 
		public function UnassociateFichasAsIdPais(Fichas $objFichas) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsIdPais on this unsaved Paises.');
			if ((is_null($objFichas->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsIdPais on this Paises with an unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas`
				SET
					`id_pais` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichas->Id) . ' AND
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all FichasesAsIdPais
		 * @return void
		*/ 
		public function UnassociateAllFichasesAsIdPais() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsIdPais on this unsaved Paises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas`
				SET
					`id_pais` = null
				WHERE
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FichasAsIdPais
		 * @param Fichas $objFichas
		 * @return void
		*/ 
		public function DeleteAssociatedFichasAsIdPais(Fichas $objFichas) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsIdPais on this unsaved Paises.');
			if ((is_null($objFichas->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsIdPais on this Paises with an unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichas->Id) . ' AND
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated FichasesAsIdPais
		 * @return void
		*/ 
		public function DeleteAllFichasesAsIdPais() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsIdPais on this unsaved Paises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas`
				WHERE
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for FichasPaisesAsIdPais
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FichasPaisesesAsIdPais as an array of FichasPaises objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasPaises[]
		*/ 
		public function GetFichasPaisesAsIdPaisArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FichasPaises::LoadArrayByIdPais($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FichasPaisesesAsIdPais
		 * @return int
		*/ 
		public function CountFichasPaisesesAsIdPais() {
			if ((is_null($this->intId)))
				return 0;

			return FichasPaises::CountByIdPais($this->intId);
		}

		/**
		 * Associates a FichasPaisesAsIdPais
		 * @param FichasPaises $objFichasPaises
		 * @return void
		*/ 
		public function AssociateFichasPaisesAsIdPais(FichasPaises $objFichasPaises) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasPaisesAsIdPais on this unsaved Paises.');
			if ((is_null($objFichasPaises->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasPaisesAsIdPais on this Paises with an unsaved FichasPaises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_paises`
				SET
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichasPaises->Id) . '
			');
		}

		/**
		 * Unassociates a FichasPaisesAsIdPais
		 * @param FichasPaises $objFichasPaises
		 * @return void
		*/ 
		public function UnassociateFichasPaisesAsIdPais(FichasPaises $objFichasPaises) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasPaisesAsIdPais on this unsaved Paises.');
			if ((is_null($objFichasPaises->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasPaisesAsIdPais on this Paises with an unsaved FichasPaises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_paises`
				SET
					`id_pais` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichasPaises->Id) . ' AND
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all FichasPaisesesAsIdPais
		 * @return void
		*/ 
		public function UnassociateAllFichasPaisesesAsIdPais() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasPaisesAsIdPais on this unsaved Paises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_paises`
				SET
					`id_pais` = null
				WHERE
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FichasPaisesAsIdPais
		 * @param FichasPaises $objFichasPaises
		 * @return void
		*/ 
		public function DeleteAssociatedFichasPaisesAsIdPais(FichasPaises $objFichasPaises) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasPaisesAsIdPais on this unsaved Paises.');
			if ((is_null($objFichasPaises->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasPaisesAsIdPais on this Paises with an unsaved FichasPaises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_paises`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichasPaises->Id) . ' AND
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated FichasPaisesesAsIdPais
		 * @return void
		*/ 
		public function DeleteAllFichasPaisesesAsIdPais() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasPaisesAsIdPais on this unsaved Paises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_paises`
				WHERE
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for ItemAsIdPais
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ItemsAsIdPais as an array of Item objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Item[]
		*/ 
		public function GetItemAsIdPaisArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Item::LoadArrayByIdPais($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ItemsAsIdPais
		 * @return int
		*/ 
		public function CountItemsAsIdPais() {
			if ((is_null($this->intId)))
				return 0;

			return Item::CountByIdPais($this->intId);
		}

		/**
		 * Associates a ItemAsIdPais
		 * @param Item $objItem
		 * @return void
		*/ 
		public function AssociateItemAsIdPais(Item $objItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateItemAsIdPais on this unsaved Paises.');
			if ((is_null($objItem->IdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateItemAsIdPais on this Paises with an unsaved Item.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`item`
				SET
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id_item` = ' . $objDatabase->SqlVariable($objItem->IdItem) . '
			');
		}

		/**
		 * Unassociates a ItemAsIdPais
		 * @param Item $objItem
		 * @return void
		*/ 
		public function UnassociateItemAsIdPais(Item $objItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateItemAsIdPais on this unsaved Paises.');
			if ((is_null($objItem->IdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateItemAsIdPais on this Paises with an unsaved Item.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`item`
				SET
					`id_pais` = null
				WHERE
					`id_item` = ' . $objDatabase->SqlVariable($objItem->IdItem) . ' AND
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all ItemsAsIdPais
		 * @return void
		*/ 
		public function UnassociateAllItemsAsIdPais() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateItemAsIdPais on this unsaved Paises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`item`
				SET
					`id_pais` = null
				WHERE
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ItemAsIdPais
		 * @param Item $objItem
		 * @return void
		*/ 
		public function DeleteAssociatedItemAsIdPais(Item $objItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateItemAsIdPais on this unsaved Paises.');
			if ((is_null($objItem->IdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateItemAsIdPais on this Paises with an unsaved Item.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`item`
				WHERE
					`id_item` = ' . $objDatabase->SqlVariable($objItem->IdItem) . ' AND
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated ItemsAsIdPais
		 * @return void
		*/ 
		public function DeleteAllItemsAsIdPais() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateItemAsIdPais on this unsaved Paises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`item`
				WHERE
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for ModeloAsIdPais
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ModelosAsIdPais as an array of Modelo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Modelo[]
		*/ 
		public function GetModeloAsIdPaisArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Modelo::LoadArrayByIdPais($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ModelosAsIdPais
		 * @return int
		*/ 
		public function CountModelosAsIdPais() {
			if ((is_null($this->intId)))
				return 0;

			return Modelo::CountByIdPais($this->intId);
		}

		/**
		 * Associates a ModeloAsIdPais
		 * @param Modelo $objModelo
		 * @return void
		*/ 
		public function AssociateModeloAsIdPais(Modelo $objModelo) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateModeloAsIdPais on this unsaved Paises.');
			if ((is_null($objModelo->IdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateModeloAsIdPais on this Paises with an unsaved Modelo.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`modelo`
				SET
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id_modelo` = ' . $objDatabase->SqlVariable($objModelo->IdModelo) . '
			');
		}

		/**
		 * Unassociates a ModeloAsIdPais
		 * @param Modelo $objModelo
		 * @return void
		*/ 
		public function UnassociateModeloAsIdPais(Modelo $objModelo) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModeloAsIdPais on this unsaved Paises.');
			if ((is_null($objModelo->IdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModeloAsIdPais on this Paises with an unsaved Modelo.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`modelo`
				SET
					`id_pais` = null
				WHERE
					`id_modelo` = ' . $objDatabase->SqlVariable($objModelo->IdModelo) . ' AND
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all ModelosAsIdPais
		 * @return void
		*/ 
		public function UnassociateAllModelosAsIdPais() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModeloAsIdPais on this unsaved Paises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`modelo`
				SET
					`id_pais` = null
				WHERE
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ModeloAsIdPais
		 * @param Modelo $objModelo
		 * @return void
		*/ 
		public function DeleteAssociatedModeloAsIdPais(Modelo $objModelo) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModeloAsIdPais on this unsaved Paises.');
			if ((is_null($objModelo->IdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModeloAsIdPais on this Paises with an unsaved Modelo.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`modelo`
				WHERE
					`id_modelo` = ' . $objDatabase->SqlVariable($objModelo->IdModelo) . ' AND
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated ModelosAsIdPais
		 * @return void
		*/ 
		public function DeleteAllModelosAsIdPais() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModeloAsIdPais on this unsaved Paises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`modelo`
				WHERE
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for NotasPaisesAsIdPais
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NotasPaisesesAsIdPais as an array of NotasPaises objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NotasPaises[]
		*/ 
		public function GetNotasPaisesAsIdPaisArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return NotasPaises::LoadArrayByIdPais($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NotasPaisesesAsIdPais
		 * @return int
		*/ 
		public function CountNotasPaisesesAsIdPais() {
			if ((is_null($this->intId)))
				return 0;

			return NotasPaises::CountByIdPais($this->intId);
		}

		/**
		 * Associates a NotasPaisesAsIdPais
		 * @param NotasPaises $objNotasPaises
		 * @return void
		*/ 
		public function AssociateNotasPaisesAsIdPais(NotasPaises $objNotasPaises) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNotasPaisesAsIdPais on this unsaved Paises.');
			if ((is_null($objNotasPaises->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNotasPaisesAsIdPais on this Paises with an unsaved NotasPaises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`notas_paises`
				SET
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objNotasPaises->Id) . '
			');
		}

		/**
		 * Unassociates a NotasPaisesAsIdPais
		 * @param NotasPaises $objNotasPaises
		 * @return void
		*/ 
		public function UnassociateNotasPaisesAsIdPais(NotasPaises $objNotasPaises) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNotasPaisesAsIdPais on this unsaved Paises.');
			if ((is_null($objNotasPaises->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNotasPaisesAsIdPais on this Paises with an unsaved NotasPaises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`notas_paises`
				SET
					`id_pais` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objNotasPaises->Id) . ' AND
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all NotasPaisesesAsIdPais
		 * @return void
		*/ 
		public function UnassociateAllNotasPaisesesAsIdPais() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNotasPaisesAsIdPais on this unsaved Paises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`notas_paises`
				SET
					`id_pais` = null
				WHERE
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated NotasPaisesAsIdPais
		 * @param NotasPaises $objNotasPaises
		 * @return void
		*/ 
		public function DeleteAssociatedNotasPaisesAsIdPais(NotasPaises $objNotasPaises) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNotasPaisesAsIdPais on this unsaved Paises.');
			if ((is_null($objNotasPaises->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNotasPaisesAsIdPais on this Paises with an unsaved NotasPaises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`notas_paises`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objNotasPaises->Id) . ' AND
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated NotasPaisesesAsIdPais
		 * @return void
		*/ 
		public function DeleteAllNotasPaisesesAsIdPais() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNotasPaisesAsIdPais on this unsaved Paises.');

			// Get the Database Object for this Class
			$objDatabase = Paises::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`notas_paises`
				WHERE
					`id_pais` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Paises"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Paises', $strComplexTypeArray)) {
				$strComplexTypeArray['Paises'] = Paises::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Paises::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Paises();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Paises::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodePaises extends QQNode {
		protected $strTableName = 'paises';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Paises';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'FichasAsIdPais':
					return new QQReverseReferenceNodeFichas($this, 'fichasasidpais', 'reverse_reference', 'id_pais');
				case 'FichasPaisesAsIdPais':
					return new QQReverseReferenceNodeFichasPaises($this, 'fichaspaisesasidpais', 'reverse_reference', 'id_pais');
				case 'ItemAsIdPais':
					return new QQReverseReferenceNodeItem($this, 'itemasidpais', 'reverse_reference', 'id_pais');
				case 'ModeloAsIdPais':
					return new QQReverseReferenceNodeModelo($this, 'modeloasidpais', 'reverse_reference', 'id_pais');
				case 'NotasPaisesAsIdPais':
					return new QQReverseReferenceNodeNotasPaises($this, 'notaspaisesasidpais', 'reverse_reference', 'id_pais');

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
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

	class QQReverseReferenceNodePaises extends QQReverseReferenceNode {
		protected $strTableName = 'paises';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Paises';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'FichasAsIdPais':
					return new QQReverseReferenceNodeFichas($this, 'fichasasidpais', 'reverse_reference', 'id_pais');
				case 'FichasPaisesAsIdPais':
					return new QQReverseReferenceNodeFichasPaises($this, 'fichaspaisesasidpais', 'reverse_reference', 'id_pais');
				case 'ItemAsIdPais':
					return new QQReverseReferenceNodeItem($this, 'itemasidpais', 'reverse_reference', 'id_pais');
				case 'ModeloAsIdPais':
					return new QQReverseReferenceNodeModelo($this, 'modeloasidpais', 'reverse_reference', 'id_pais');
				case 'NotasPaisesAsIdPais':
					return new QQReverseReferenceNodeNotasPaises($this, 'notaspaisesasidpais', 'reverse_reference', 'id_pais');

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
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