<?php
	/**
	 * The abstract FichasItemValorGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FichasItemValor subclass which
	 * extends this FichasItemValorGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FichasItemValor class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $IdFichas the value for intIdFichas (PK)
	 * @property integer $IdItem the value for intIdItem (PK)
	 * @property string $Valor the value for strValor (Not Null)
	 * @property Fichas $IdFichasObject the value for the Fichas object referenced by intIdFichas (PK)
	 * @property Item $IdItemObject the value for the Item object referenced by intIdItem (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FichasItemValorGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK column fichas_item_valor.id_fichas
		 * @var integer intIdFichas
		 */
		protected $intIdFichas;
		const IdFichasDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intIdFichas;
		 */
		protected $__intIdFichas;

		/**
		 * Protected member variable that maps to the database PK column fichas_item_valor.id_item
		 * @var integer intIdItem
		 */
		protected $intIdItem;
		const IdItemDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intIdItem;
		 */
		protected $__intIdItem;

		/**
		 * Protected member variable that maps to the database column fichas_item_valor.valor
		 * @var string strValor
		 */
		protected $strValor;
		const ValorMaxLength = 255;
		const ValorDefault = null;


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
		 * in the database column fichas_item_valor.id_fichas.
		 *
		 * NOTE: Always use the IdFichasObject property getter to correctly retrieve this Fichas object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Fichas objIdFichasObject
		 */
		protected $objIdFichasObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fichas_item_valor.id_item.
		 *
		 * NOTE: Always use the IdItemObject property getter to correctly retrieve this Item object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Item objIdItemObject
		 */
		protected $objIdItemObject;





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
		 * Load a FichasItemValor from PK Info
		 * @param integer $intIdFichas
		 * @param integer $intIdItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasItemValor
		 */
		public static function Load($intIdFichas, $intIdItem, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return FichasItemValor::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FichasItemValor()->IdFichas, $intIdFichas),
					QQ::Equal(QQN::FichasItemValor()->IdItem, $intIdItem)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all FichasItemValors
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasItemValor[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call FichasItemValor::QueryArray to perform the LoadAll query
			try {
				return FichasItemValor::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FichasItemValors
		 * @return int
		 */
		public static function CountAll() {
			// Call FichasItemValor::QueryCount to perform the CountAll query
			return FichasItemValor::QueryCount(QQ::All());
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
			$objDatabase = FichasItemValor::GetDatabase();

			// Create/Build out the QueryBuilder object with FichasItemValor-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'fichas_item_valor');
			FichasItemValor::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('fichas_item_valor');

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
		 * Static Qcubed Query method to query for a single FichasItemValor object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FichasItemValor the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasItemValor::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new FichasItemValor object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FichasItemValor::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FichasItemValor::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of FichasItemValor objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FichasItemValor[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasItemValor::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FichasItemValor::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of FichasItemValor objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasItemValor::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FichasItemValor::GetDatabase();

			$strQuery = FichasItemValor::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/fichasitemvalor', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = FichasItemValor::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FichasItemValor
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'fichas_item_valor';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_fichas', $strAliasPrefix . 'id_fichas');
			$objBuilder->AddSelectItem($strTableName, 'id_item', $strAliasPrefix . 'id_item');
			$objBuilder->AddSelectItem($strTableName, 'valor', $strAliasPrefix . 'valor');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FichasItemValor from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FichasItemValor::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FichasItemValor
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the FichasItemValor object
			$objToReturn = new FichasItemValor();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_fichas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_fichas'] : $strAliasPrefix . 'id_fichas';
			$objToReturn->intIdFichas = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intIdFichas = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_item', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_item'] : $strAliasPrefix . 'id_item';
			$objToReturn->intIdItem = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intIdItem = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'valor', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'valor'] : $strAliasPrefix . 'valor';
			$objToReturn->strValor = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdFichas != $objPreviousItem->IdFichas) {
						continue;
					}
					if ($objToReturn->IdItem != $objPreviousItem->IdItem) {
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
				$strAliasPrefix = 'fichas_item_valor__';

			// Check for IdFichasObject Early Binding
			$strAlias = $strAliasPrefix . 'id_fichas__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdFichasObject = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_fichas__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for IdItemObject Early Binding
			$strAlias = $strAliasPrefix . 'id_item__id_item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdItemObject = Item::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_item__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of FichasItemValors from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FichasItemValor[]
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
					$objItem = FichasItemValor::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FichasItemValor::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FichasItemValor object,
		 * by IdFichas, IdItem Index(es)
		 * @param integer $intIdFichas
		 * @param integer $intIdItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasItemValor
		*/
		public static function LoadByIdFichasIdItem($intIdFichas, $intIdItem, $objOptionalClauses = null) {
			return FichasItemValor::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FichasItemValor()->IdFichas, $intIdFichas),
					QQ::Equal(QQN::FichasItemValor()->IdItem, $intIdItem)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FichasItemValor objects,
		 * by IdItem Index(es)
		 * @param integer $intIdItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasItemValor[]
		*/
		public static function LoadArrayByIdItem($intIdItem, $objOptionalClauses = null) {
			// Call FichasItemValor::QueryArray to perform the LoadArrayByIdItem query
			try {
				return FichasItemValor::QueryArray(
					QQ::Equal(QQN::FichasItemValor()->IdItem, $intIdItem),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FichasItemValors
		 * by IdItem Index(es)
		 * @param integer $intIdItem
		 * @return int
		*/
		public static function CountByIdItem($intIdItem) {
			// Call FichasItemValor::QueryCount to perform the CountByIdItem query
			return FichasItemValor::QueryCount(
				QQ::Equal(QQN::FichasItemValor()->IdItem, $intIdItem)
			);
		}
			
		/**
		 * Load an array of FichasItemValor objects,
		 * by IdFichas Index(es)
		 * @param integer $intIdFichas
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasItemValor[]
		*/
		public static function LoadArrayByIdFichas($intIdFichas, $objOptionalClauses = null) {
			// Call FichasItemValor::QueryArray to perform the LoadArrayByIdFichas query
			try {
				return FichasItemValor::QueryArray(
					QQ::Equal(QQN::FichasItemValor()->IdFichas, $intIdFichas),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FichasItemValors
		 * by IdFichas Index(es)
		 * @param integer $intIdFichas
		 * @return int
		*/
		public static function CountByIdFichas($intIdFichas) {
			// Call FichasItemValor::QueryCount to perform the CountByIdFichas query
			return FichasItemValor::QueryCount(
				QQ::Equal(QQN::FichasItemValor()->IdFichas, $intIdFichas)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this FichasItemValor
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FichasItemValor::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `fichas_item_valor` (
							`id_fichas`,
							`id_item`,
							`valor`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIdFichas) . ',
							' . $objDatabase->SqlVariable($this->intIdItem) . ',
							' . $objDatabase->SqlVariable($this->strValor) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`fichas_item_valor`
						SET
							`id_fichas` = ' . $objDatabase->SqlVariable($this->intIdFichas) . ',
							`id_item` = ' . $objDatabase->SqlVariable($this->intIdItem) . ',
							`valor` = ' . $objDatabase->SqlVariable($this->strValor) . '
						WHERE
							`id_fichas` = ' . $objDatabase->SqlVariable($this->__intIdFichas) . ' AND
							`id_item` = ' . $objDatabase->SqlVariable($this->__intIdItem) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intIdFichas = $this->intIdFichas;
			$this->__intIdItem = $this->intIdItem;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this FichasItemValor
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdFichas)) || (is_null($this->intIdItem)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FichasItemValor with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FichasItemValor::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_item_valor`
				WHERE
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intIdFichas) . ' AND
					`id_item` = ' . $objDatabase->SqlVariable($this->intIdItem) . '');
		}

		/**
		 * Delete all FichasItemValors
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FichasItemValor::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_item_valor`');
		}

		/**
		 * Truncate fichas_item_valor table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FichasItemValor::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `fichas_item_valor`');
		}

		/**
		 * Reload this FichasItemValor from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FichasItemValor object.');

			// Reload the Object
			$objReloaded = FichasItemValor::Load($this->intIdFichas, $this->intIdItem);

			// Update $this's local variables to match
			$this->IdFichas = $objReloaded->IdFichas;
			$this->__intIdFichas = $this->intIdFichas;
			$this->IdItem = $objReloaded->IdItem;
			$this->__intIdItem = $this->intIdItem;
			$this->strValor = $objReloaded->strValor;
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
				case 'IdFichas':
					/**
					 * Gets the value for intIdFichas (PK)
					 * @return integer
					 */
					return $this->intIdFichas;

				case 'IdItem':
					/**
					 * Gets the value for intIdItem (PK)
					 * @return integer
					 */
					return $this->intIdItem;

				case 'Valor':
					/**
					 * Gets the value for strValor (Not Null)
					 * @return string
					 */
					return $this->strValor;


				///////////////////
				// Member Objects
				///////////////////
				case 'IdFichasObject':
					/**
					 * Gets the value for the Fichas object referenced by intIdFichas (PK)
					 * @return Fichas
					 */
					try {
						if ((!$this->objIdFichasObject) && (!is_null($this->intIdFichas)))
							$this->objIdFichasObject = Fichas::Load($this->intIdFichas);
						return $this->objIdFichasObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdItemObject':
					/**
					 * Gets the value for the Item object referenced by intIdItem (PK)
					 * @return Item
					 */
					try {
						if ((!$this->objIdItemObject) && (!is_null($this->intIdItem)))
							$this->objIdItemObject = Item::Load($this->intIdItem);
						return $this->objIdItemObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


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
				case 'IdFichas':
					/**
					 * Sets the value for intIdFichas (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdFichasObject = null;
						return ($this->intIdFichas = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdItem':
					/**
					 * Sets the value for intIdItem (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdItemObject = null;
						return ($this->intIdItem = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Valor':
					/**
					 * Sets the value for strValor (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strValor = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'IdFichasObject':
					/**
					 * Sets the value for the Fichas object referenced by intIdFichas (PK)
					 * @param Fichas $mixValue
					 * @return Fichas
					 */
					if (is_null($mixValue)) {
						$this->intIdFichas = null;
						$this->objIdFichasObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Fichas object
						try {
							$mixValue = QType::Cast($mixValue, 'Fichas');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Fichas object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved IdFichasObject for this FichasItemValor');

						// Update Local Member Variables
						$this->objIdFichasObject = $mixValue;
						$this->intIdFichas = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'IdItemObject':
					/**
					 * Sets the value for the Item object referenced by intIdItem (PK)
					 * @param Item $mixValue
					 * @return Item
					 */
					if (is_null($mixValue)) {
						$this->intIdItem = null;
						$this->objIdItemObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Item object
						try {
							$mixValue = QType::Cast($mixValue, 'Item');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Item object
						if (is_null($mixValue->IdItem))
							throw new QCallerException('Unable to set an unsaved IdItemObject for this FichasItemValor');

						// Update Local Member Variables
						$this->objIdItemObject = $mixValue;
						$this->intIdItem = $mixValue->IdItem;

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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="FichasItemValor"><sequence>';
			$strToReturn .= '<element name="IdFichasObject" type="xsd1:Fichas"/>';
			$strToReturn .= '<element name="IdItemObject" type="xsd1:Item"/>';
			$strToReturn .= '<element name="Valor" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FichasItemValor', $strComplexTypeArray)) {
				$strComplexTypeArray['FichasItemValor'] = FichasItemValor::GetSoapComplexTypeXml();
				Fichas::AlterSoapComplexTypeArray($strComplexTypeArray);
				Item::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FichasItemValor::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FichasItemValor();
			if ((property_exists($objSoapObject, 'IdFichasObject')) &&
				($objSoapObject->IdFichasObject))
				$objToReturn->IdFichasObject = Fichas::GetObjectFromSoapObject($objSoapObject->IdFichasObject);
			if ((property_exists($objSoapObject, 'IdItemObject')) &&
				($objSoapObject->IdItemObject))
				$objToReturn->IdItemObject = Item::GetObjectFromSoapObject($objSoapObject->IdItemObject);
			if (property_exists($objSoapObject, 'Valor'))
				$objToReturn->strValor = $objSoapObject->Valor;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FichasItemValor::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdFichasObject)
				$objObject->objIdFichasObject = Fichas::GetSoapObjectFromObject($objObject->objIdFichasObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdFichas = null;
			if ($objObject->objIdItemObject)
				$objObject->objIdItemObject = Item::GetSoapObjectFromObject($objObject->objIdItemObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdItem = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeFichasItemValor extends QQNode {
		protected $strTableName = 'fichas_item_valor';
		protected $strPrimaryKey = 'id_fichas';
		protected $strClassName = 'FichasItemValor';
		public function __get($strName) {
			switch ($strName) {
				case 'IdFichas':
					return new QQNode('id_fichas', 'IdFichas', 'integer', $this);
				case 'IdFichasObject':
					return new QQNodeFichas('id_fichas', 'IdFichasObject', 'integer', $this);
				case 'IdItem':
					return new QQNode('id_item', 'IdItem', 'integer', $this);
				case 'IdItemObject':
					return new QQNodeItem('id_item', 'IdItemObject', 'integer', $this);
				case 'Valor':
					return new QQNode('valor', 'Valor', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNodeFichas('id_fichas', 'IdFichas', 'integer', $this);
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

	class QQReverseReferenceNodeFichasItemValor extends QQReverseReferenceNode {
		protected $strTableName = 'fichas_item_valor';
		protected $strPrimaryKey = 'id_fichas';
		protected $strClassName = 'FichasItemValor';
		public function __get($strName) {
			switch ($strName) {
				case 'IdFichas':
					return new QQNode('id_fichas', 'IdFichas', 'integer', $this);
				case 'IdFichasObject':
					return new QQNodeFichas('id_fichas', 'IdFichasObject', 'integer', $this);
				case 'IdItem':
					return new QQNode('id_item', 'IdItem', 'integer', $this);
				case 'IdItemObject':
					return new QQNodeItem('id_item', 'IdItemObject', 'integer', $this);
				case 'Valor':
					return new QQNode('valor', 'Valor', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNodeFichas('id_fichas', 'IdFichas', 'integer', $this);
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