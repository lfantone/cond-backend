<?php
	/**
	 * The abstract FichasNotasGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FichasNotas subclass which
	 * extends this FichasNotasGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FichasNotas class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdFichaNota the value for intIdFichaNota (Read-Only PK)
	 * @property integer $IdFichas the value for intIdFichas (Not Null)
	 * @property integer $IdNota the value for intIdNota (Not Null)
	 * @property Fichas $IdFichasObject the value for the Fichas object referenced by intIdFichas (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FichasNotasGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column fichas_notas.id_ficha_nota
		 * @var integer intIdFichaNota
		 */
		protected $intIdFichaNota;
		const IdFichaNotaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_notas.id_fichas
		 * @var integer intIdFichas
		 */
		protected $intIdFichas;
		const IdFichasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_notas.id_nota
		 * @var integer intIdNota
		 */
		protected $intIdNota;
		const IdNotaDefault = null;


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
		 * in the database column fichas_notas.id_fichas.
		 *
		 * NOTE: Always use the IdFichasObject property getter to correctly retrieve this Fichas object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Fichas objIdFichasObject
		 */
		protected $objIdFichasObject;
    
    protected $objIdNotasObject;





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
		 * Load a FichasNotas from PK Info
		 * @param integer $intIdFichaNota
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasNotas
		 */
		public static function Load($intIdFichaNota, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return FichasNotas::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FichasNotas()->IdFichaNota, $intIdFichaNota)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all FichasNotases
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasNotas[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call FichasNotas::QueryArray to perform the LoadAll query
			try {
				return FichasNotas::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FichasNotases
		 * @return int
		 */
		public static function CountAll() {
			// Call FichasNotas::QueryCount to perform the CountAll query
			return FichasNotas::QueryCount(QQ::All());
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
			$objDatabase = FichasNotas::GetDatabase();

			// Create/Build out the QueryBuilder object with FichasNotas-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'fichas_notas');
			FichasNotas::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('fichas_notas');

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
		 * Static Qcubed Query method to query for a single FichasNotas object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FichasNotas the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasNotas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new FichasNotas object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FichasNotas::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FichasNotas::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of FichasNotas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FichasNotas[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasNotas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FichasNotas::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of FichasNotas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasNotas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FichasNotas::GetDatabase();

			$strQuery = FichasNotas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/fichasnotas', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = FichasNotas::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FichasNotas
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'fichas_notas';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_ficha_nota', $strAliasPrefix . 'id_ficha_nota');
			$objBuilder->AddSelectItem($strTableName, 'id_fichas', $strAliasPrefix . 'id_fichas');
			$objBuilder->AddSelectItem($strTableName, 'id_nota', $strAliasPrefix . 'id_nota');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FichasNotas from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FichasNotas::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FichasNotas
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the FichasNotas object
			$objToReturn = new FichasNotas();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_ficha_nota', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_ficha_nota'] : $strAliasPrefix . 'id_ficha_nota';
			$objToReturn->intIdFichaNota = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_fichas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_fichas'] : $strAliasPrefix . 'id_fichas';
			$objToReturn->intIdFichas = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_nota', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_nota'] : $strAliasPrefix . 'id_nota';
			$objToReturn->intIdNota = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdFichaNota != $objPreviousItem->IdFichaNota) {
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
				$strAliasPrefix = 'fichas_notas__';

			// Check for IdFichasObject Early Binding
			$strAlias = $strAliasPrefix . 'id_fichas__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdFichasObject = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_fichas__', $strExpandAsArrayNodes, null, $strColumnAliasArray);


      
			// Check for IdNotasObject Early Binding
			$strAlias = $strAliasPrefix . 'id_nota__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdNotasObject = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_nota__', $strExpandAsArrayNodes, null, $strColumnAliasArray);


			return $objToReturn;
		}

		/**
		 * Instantiate an array of FichasNotases from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FichasNotas[]
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
					$objItem = FichasNotas::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FichasNotas::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FichasNotas object,
		 * by IdFichaNota Index(es)
		 * @param integer $intIdFichaNota
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasNotas
		*/
		public static function LoadByIdFichaNota($intIdFichaNota, $objOptionalClauses = null) {
			return FichasNotas::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FichasNotas()->IdFichaNota, $intIdFichaNota)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FichasNotas objects,
		 * by IdFichas Index(es)
		 * @param integer $intIdFichas
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasNotas[]
		*/
		public static function LoadArrayByIdFichas($intIdFichas, $objOptionalClauses = null) {
			// Call FichasNotas::QueryArray to perform the LoadArrayByIdFichas query
			try {
				return FichasNotas::QueryArray(
					QQ::Equal(QQN::FichasNotas()->IdFichas, $intIdFichas),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FichasNotases
		 * by IdFichas Index(es)
		 * @param integer $intIdFichas
		 * @return int
		*/
		public static function CountByIdFichas($intIdFichas) {
			// Call FichasNotas::QueryCount to perform the CountByIdFichas query
			return FichasNotas::QueryCount(
				QQ::Equal(QQN::FichasNotas()->IdFichas, $intIdFichas)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this FichasNotas
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FichasNotas::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `fichas_notas` (
							`id_fichas`,
							`id_nota`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIdFichas) . ',
							' . $objDatabase->SqlVariable($this->intIdNota) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdFichaNota = $objDatabase->InsertId('fichas_notas', 'id_ficha_nota');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`fichas_notas`
						SET
							`id_fichas` = ' . $objDatabase->SqlVariable($this->intIdFichas) . ',
							`id_nota` = ' . $objDatabase->SqlVariable($this->intIdNota) . '
						WHERE
							`id_ficha_nota` = ' . $objDatabase->SqlVariable($this->intIdFichaNota) . '
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
		 * Delete this FichasNotas
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdFichaNota)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FichasNotas with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FichasNotas::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_notas`
				WHERE
					`id_ficha_nota` = ' . $objDatabase->SqlVariable($this->intIdFichaNota) . '');
		}

		/**
		 * Delete all FichasNotases
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FichasNotas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_notas`');
		}

		/**
		 * Truncate fichas_notas table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FichasNotas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `fichas_notas`');
		}

		/**
		 * Reload this FichasNotas from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FichasNotas object.');

			// Reload the Object
			$objReloaded = FichasNotas::Load($this->intIdFichaNota);

			// Update $this's local variables to match
			$this->IdFichas = $objReloaded->IdFichas;
			$this->intIdNota = $objReloaded->intIdNota;
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
				case 'IdFichaNota':
					/**
					 * Gets the value for intIdFichaNota (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdFichaNota;

				case 'IdFichas':
					/**
					 * Gets the value for intIdFichas (Not Null)
					 * @return integer
					 */
					return $this->intIdFichas;

				case 'IdNota':
					/**
					 * Gets the value for intIdNota (Not Null)
					 * @return integer
					 */
					return $this->intIdNota;


				///////////////////
				// Member Objects
				///////////////////
				case 'IdFichasObject':
					/**
					 * Gets the value for the Fichas object referenced by intIdFichas (Not Null)
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

				case 'IdNotasObject':
					/**
					 * Gets the value for the Fichas object referenced by intIdFichas (Not Null)
					 * @return Fichas
					 */
					try {
						if ((!$this->objIdNotasObject) && (!is_null($this->intIdNota)))
							$this->objIdNotasObject = Notas::Load($this->intIdNota);
						return $this->objIdNotasObject;
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
					 * Sets the value for intIdFichas (Not Null)
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

				case 'IdNota':
					/**
					 * Sets the value for intIdNota (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
            $this->objIdNotasObject = null;
						return ($this->intIdNota = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'IdFichasObject':
					/**
					 * Sets the value for the Fichas object referenced by intIdFichas (Not Null)
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
							throw new QCallerException('Unable to set an unsaved IdFichasObject for this FichasNotas');

						// Update Local Member Variables
						$this->objIdFichasObject = $mixValue;
						$this->intIdFichas = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;
          
			case 'IdNotasObject':
					/**
					 * Sets the value for the Fichas object referenced by intIdFichas (Not Null)
					 * @param Fichas $mixValue
					 * @return Fichas
					 */
					if (is_null($mixValue)) {
						$this->intIdNota = null;
						$this->objIdNotasObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Fichas object
						try {
							$mixValue = QType::Cast($mixValue, 'Notas');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Fichas object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved IdFichasObject for this FichasNotas');

						// Update Local Member Variables
						$this->objIdNotasObject = $mixValue;
						$this->intIdNota = $mixValue->Id;

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
			$strToReturn = '<complexType name="FichasNotas"><sequence>';
			$strToReturn .= '<element name="IdFichaNota" type="xsd:int"/>';
			$strToReturn .= '<element name="IdFichasObject" type="xsd1:Fichas"/>';
			$strToReturn .= '<element name="IdNota" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FichasNotas', $strComplexTypeArray)) {
				$strComplexTypeArray['FichasNotas'] = FichasNotas::GetSoapComplexTypeXml();
				Fichas::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FichasNotas::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FichasNotas();
			if (property_exists($objSoapObject, 'IdFichaNota'))
				$objToReturn->intIdFichaNota = $objSoapObject->IdFichaNota;
			if ((property_exists($objSoapObject, 'IdFichasObject')) &&
				($objSoapObject->IdFichasObject))
				$objToReturn->IdFichasObject = Fichas::GetObjectFromSoapObject($objSoapObject->IdFichasObject);
			if (property_exists($objSoapObject, 'IdNota'))
				$objToReturn->intIdNota = $objSoapObject->IdNota;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FichasNotas::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdFichasObject)
				$objObject->objIdFichasObject = Fichas::GetSoapObjectFromObject($objObject->objIdFichasObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdFichas = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeFichasNotas extends QQNode {
		protected $strTableName = 'fichas_notas';
		protected $strPrimaryKey = 'id_ficha_nota';
		protected $strClassName = 'FichasNotas';
		public function __get($strName) {
			switch ($strName) {
				case 'IdFichaNota':
					return new QQNode('id_ficha_nota', 'IdFichaNota', 'integer', $this);
				case 'IdFichas':
					return new QQNode('id_fichas', 'IdFichas', 'integer', $this);
				case 'IdFichasObject':
					return new QQNodeFichas('id_fichas', 'IdFichasObject', 'integer', $this);
				case 'IdNota':
					return new QQNode('id_nota', 'IdNota', 'integer', $this);
				case 'IdNotasObject':
					return new QQNodeNotas('id_nota', 'IdNotasObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_ficha_nota', 'IdFichaNota', 'integer', $this);
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

	class QQReverseReferenceNodeFichasNotas extends QQReverseReferenceNode {
		protected $strTableName = 'fichas_notas';
		protected $strPrimaryKey = 'id_ficha_nota';
		protected $strClassName = 'FichasNotas';
		public function __get($strName) {
			switch ($strName) {
				case 'IdFichaNota':
					return new QQNode('id_ficha_nota', 'IdFichaNota', 'integer', $this);
				case 'IdFichas':
					return new QQNode('id_fichas', 'IdFichas', 'integer', $this);
				case 'IdFichasObject':
					return new QQNodeFichas('id_fichas', 'IdFichasObject', 'integer', $this);
				case 'IdNota':
					return new QQNode('id_nota', 'IdNota', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_ficha_nota', 'IdFichaNota', 'integer', $this);
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