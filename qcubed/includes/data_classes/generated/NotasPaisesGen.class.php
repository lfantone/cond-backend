<?php
	/**
	 * The abstract NotasPaisesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NotasPaises subclass which
	 * extends this NotasPaisesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NotasPaises class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property integer $IdNota the value for intIdNota (Not Null)
	 * @property integer $IdPais the value for intIdPais (Not Null)
	 * @property Paises $IdPaisObject the value for the Paises object referenced by intIdPais (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NotasPaisesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column notas_paises.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column notas_paises.id_nota
		 * @var integer intIdNota
		 */
		protected $intIdNota;
		const IdNotaDefault = null;


		/**
		 * Protected member variable that maps to the database column notas_paises.id_pais
		 * @var integer intIdPais
		 */
		protected $intIdPais;
		const IdPaisDefault = null;


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
		 * in the database column notas_paises.id_pais.
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
		 * Load a NotasPaises from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NotasPaises
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NotasPaises::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NotasPaises()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NotasPaiseses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NotasPaises[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call NotasPaises::QueryArray to perform the LoadAll query
			try {
				return NotasPaises::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NotasPaiseses
		 * @return int
		 */
		public static function CountAll() {
			// Call NotasPaises::QueryCount to perform the CountAll query
			return NotasPaises::QueryCount(QQ::All());
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
			$objDatabase = NotasPaises::GetDatabase();

			// Create/Build out the QueryBuilder object with NotasPaises-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'notas_paises');
			NotasPaises::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('notas_paises');

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
		 * Static Qcubed Query method to query for a single NotasPaises object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NotasPaises the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NotasPaises::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new NotasPaises object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NotasPaises::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NotasPaises::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NotasPaises objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NotasPaises[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NotasPaises::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NotasPaises::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NotasPaises objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NotasPaises::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NotasPaises::GetDatabase();

			$strQuery = NotasPaises::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/notaspaises', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NotasPaises::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NotasPaises
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'notas_paises';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'id_nota', $strAliasPrefix . 'id_nota');
			$objBuilder->AddSelectItem($strTableName, 'id_pais', $strAliasPrefix . 'id_pais');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NotasPaises from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NotasPaises::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NotasPaises
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the NotasPaises object
			$objToReturn = new NotasPaises();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_nota', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_nota'] : $strAliasPrefix . 'id_nota';
			$objToReturn->intIdNota = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_pais', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_pais'] : $strAliasPrefix . 'id_pais';
			$objToReturn->intIdPais = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
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
				$strAliasPrefix = 'notas_paises__';

			// Check for IdPaisObject Early Binding
			$strAlias = $strAliasPrefix . 'id_pais__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdPaisObject = Paises::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_pais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of NotasPaiseses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NotasPaises[]
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
					$objItem = NotasPaises::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NotasPaises::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NotasPaises object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NotasPaises
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return NotasPaises::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NotasPaises()->Id, $intId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of NotasPaises objects,
		 * by IdPais Index(es)
		 * @param integer $intIdPais
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NotasPaises[]
		*/
		public static function LoadArrayByIdPais($intIdPais, $objOptionalClauses = null) {
			// Call NotasPaises::QueryArray to perform the LoadArrayByIdPais query
			try {
				return NotasPaises::QueryArray(
					QQ::Equal(QQN::NotasPaises()->IdPais, $intIdPais),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NotasPaiseses
		 * by IdPais Index(es)
		 * @param integer $intIdPais
		 * @return int
		*/
		public static function CountByIdPais($intIdPais) {
			// Call NotasPaises::QueryCount to perform the CountByIdPais query
			return NotasPaises::QueryCount(
				QQ::Equal(QQN::NotasPaises()->IdPais, $intIdPais)
			);
		}
			
		/**
		 * Load an array of NotasPaises objects,
		 * by IdNota Index(es)
		 * @param integer $intIdNota
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NotasPaises[]
		*/
		public static function LoadArrayByIdNota($intIdNota, $objOptionalClauses = null) {
			// Call NotasPaises::QueryArray to perform the LoadArrayByIdNota query
			try {
				return NotasPaises::QueryArray(
					QQ::Equal(QQN::NotasPaises()->IdNota, $intIdNota),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NotasPaiseses
		 * by IdNota Index(es)
		 * @param integer $intIdNota
		 * @return int
		*/
		public static function CountByIdNota($intIdNota) {
			// Call NotasPaises::QueryCount to perform the CountByIdNota query
			return NotasPaises::QueryCount(
				QQ::Equal(QQN::NotasPaises()->IdNota, $intIdNota)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this NotasPaises
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NotasPaises::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `notas_paises` (
							`id_nota`,
							`id_pais`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIdNota) . ',
							' . $objDatabase->SqlVariable($this->intIdPais) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('notas_paises', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`notas_paises`
						SET
							`id_nota` = ' . $objDatabase->SqlVariable($this->intIdNota) . ',
							`id_pais` = ' . $objDatabase->SqlVariable($this->intIdPais) . '
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
		 * Delete this NotasPaises
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NotasPaises with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NotasPaises::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`notas_paises`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all NotasPaiseses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NotasPaises::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`notas_paises`');
		}

		/**
		 * Truncate notas_paises table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NotasPaises::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `notas_paises`');
		}

		/**
		 * Reload this NotasPaises from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NotasPaises object.');

			// Reload the Object
			$objReloaded = NotasPaises::Load($this->intId);

			// Update $this's local variables to match
			$this->intIdNota = $objReloaded->intIdNota;
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
				case 'Id':
					/**
					 * Gets the value for intId (Read-Only PK)
					 * @return integer
					 */
					return $this->intId;

				case 'IdNota':
					/**
					 * Gets the value for intIdNota (Not Null)
					 * @return integer
					 */
					return $this->intIdNota;

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
				case 'IdNota':
					/**
					 * Sets the value for intIdNota (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intIdNota = QType::Cast($mixValue, QType::Integer));
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
							throw new QCallerException('Unable to set an unsaved IdPaisObject for this NotasPaises');

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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NotasPaises"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="IdNota" type="xsd:int"/>';
			$strToReturn .= '<element name="IdPaisObject" type="xsd1:Paises"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NotasPaises', $strComplexTypeArray)) {
				$strComplexTypeArray['NotasPaises'] = NotasPaises::GetSoapComplexTypeXml();
				Paises::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NotasPaises::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NotasPaises();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'IdNota'))
				$objToReturn->intIdNota = $objSoapObject->IdNota;
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
				array_push($objArrayToReturn, NotasPaises::GetSoapObjectFromObject($objObject, true));

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

	class QQNodeNotasPaises extends QQNode {
		protected $strTableName = 'notas_paises';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'NotasPaises';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'IdNota':
					return new QQNode('id_nota', 'IdNota', 'integer', $this);
				case 'IdPais':
					return new QQNode('id_pais', 'IdPais', 'integer', $this);
				case 'IdPaisObject':
					return new QQNodePaises('id_pais', 'IdPaisObject', 'integer', $this);

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

	class QQReverseReferenceNodeNotasPaises extends QQReverseReferenceNode {
		protected $strTableName = 'notas_paises';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'NotasPaises';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'IdNota':
					return new QQNode('id_nota', 'IdNota', 'integer', $this);
				case 'IdPais':
					return new QQNode('id_pais', 'IdPais', 'integer', $this);
				case 'IdPaisObject':
					return new QQNodePaises('id_pais', 'IdPaisObject', 'integer', $this);

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