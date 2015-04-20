<?php
	/**
	 * The abstract FichasInfoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FichasInfo subclass which
	 * extends this FichasInfoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FichasInfo class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdFichasInfo the value for intIdFichasInfo (Read-Only PK)
	 * @property integer $IdFichas the value for intIdFichas (Not Null)
	 * @property QDateTime $Fecha the value for dttFecha (Not Null)
	 * @property string $Accion the value for strAccion 
	 * @property string $Notas the value for strNotas 
	 * @property Fichas $IdFichasObject the value for the Fichas object referenced by intIdFichas (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FichasInfoGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column fichas_info.id_fichas_info
		 * @var integer intIdFichasInfo
		 */
		protected $intIdFichasInfo;
		const IdFichasInfoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_info.id_fichas
		 * @var integer intIdFichas
		 */
		protected $intIdFichas;
		const IdFichasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_info.fecha
		 * @var QDateTime dttFecha
		 */
		protected $dttFecha;
		const FechaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_info.accion
		 * @var string strAccion
		 */
		protected $strAccion;
		const AccionDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_info.notas
		 * @var string strNotas
		 */
		protected $strNotas;
		const NotasMaxLength = 255;
		const NotasDefault = null;


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
		 * in the database column fichas_info.id_fichas.
		 *
		 * NOTE: Always use the IdFichasObject property getter to correctly retrieve this Fichas object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Fichas objIdFichasObject
		 */
		protected $objIdFichasObject;





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
		 * Load a FichasInfo from PK Info
		 * @param integer $intIdFichasInfo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasInfo
		 */
		public static function Load($intIdFichasInfo, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return FichasInfo::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FichasInfo()->IdFichasInfo, $intIdFichasInfo)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all FichasInfos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasInfo[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call FichasInfo::QueryArray to perform the LoadAll query
			try {
				return FichasInfo::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FichasInfos
		 * @return int
		 */
		public static function CountAll() {
			// Call FichasInfo::QueryCount to perform the CountAll query
			return FichasInfo::QueryCount(QQ::All());
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
			$objDatabase = FichasInfo::GetDatabase();

			// Create/Build out the QueryBuilder object with FichasInfo-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'fichas_info');
			FichasInfo::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('fichas_info');

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
		 * Static Qcubed Query method to query for a single FichasInfo object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FichasInfo the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasInfo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new FichasInfo object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FichasInfo::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FichasInfo::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of FichasInfo objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FichasInfo[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasInfo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FichasInfo::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of FichasInfo objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasInfo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FichasInfo::GetDatabase();

			$strQuery = FichasInfo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/fichasinfo', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = FichasInfo::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FichasInfo
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'fichas_info';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_fichas_info', $strAliasPrefix . 'id_fichas_info');
			$objBuilder->AddSelectItem($strTableName, 'id_fichas', $strAliasPrefix . 'id_fichas');
			$objBuilder->AddSelectItem($strTableName, 'fecha', $strAliasPrefix . 'fecha');
			$objBuilder->AddSelectItem($strTableName, 'accion', $strAliasPrefix . 'accion');
			$objBuilder->AddSelectItem($strTableName, 'notas', $strAliasPrefix . 'notas');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FichasInfo from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FichasInfo::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FichasInfo
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the FichasInfo object
			$objToReturn = new FichasInfo();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_fichas_info', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_fichas_info'] : $strAliasPrefix . 'id_fichas_info';
			$objToReturn->intIdFichasInfo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_fichas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_fichas'] : $strAliasPrefix . 'id_fichas';
			$objToReturn->intIdFichas = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha'] : $strAliasPrefix . 'fecha';
			$objToReturn->dttFecha = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'accion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'accion'] : $strAliasPrefix . 'accion';
			$objToReturn->strAccion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'notas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'notas'] : $strAliasPrefix . 'notas';
			$objToReturn->strNotas = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdFichasInfo != $objPreviousItem->IdFichasInfo) {
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
				$strAliasPrefix = 'fichas_info__';

			// Check for IdFichasObject Early Binding
			$strAlias = $strAliasPrefix . 'id_fichas__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdFichasObject = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_fichas__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of FichasInfos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FichasInfo[]
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
					$objItem = FichasInfo::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FichasInfo::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FichasInfo object,
		 * by IdFichasInfo Index(es)
		 * @param integer $intIdFichasInfo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasInfo
		*/
		public static function LoadByIdFichasInfo($intIdFichasInfo, $objOptionalClauses = null) {
			return FichasInfo::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FichasInfo()->IdFichasInfo, $intIdFichasInfo)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FichasInfo objects,
		 * by IdFichas Index(es)
		 * @param integer $intIdFichas
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasInfo[]
		*/
		public static function LoadArrayByIdFichas($intIdFichas, $objOptionalClauses = null) {
			// Call FichasInfo::QueryArray to perform the LoadArrayByIdFichas query
			try {
				return FichasInfo::QueryArray(
					QQ::Equal(QQN::FichasInfo()->IdFichas, $intIdFichas),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FichasInfos
		 * by IdFichas Index(es)
		 * @param integer $intIdFichas
		 * @return int
		*/
		public static function CountByIdFichas($intIdFichas) {
			// Call FichasInfo::QueryCount to perform the CountByIdFichas query
			return FichasInfo::QueryCount(
				QQ::Equal(QQN::FichasInfo()->IdFichas, $intIdFichas)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this FichasInfo
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FichasInfo::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `fichas_info` (
							`id_fichas`,
							`fecha`,
							`accion`,
							`notas`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIdFichas) . ',
							' . $objDatabase->SqlVariable($this->dttFecha) . ',
							' . $objDatabase->SqlVariable($this->strAccion) . ',
							' . $objDatabase->SqlVariable($this->strNotas) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdFichasInfo = $objDatabase->InsertId('fichas_info', 'id_fichas_info');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`fichas_info`
						SET
							`id_fichas` = ' . $objDatabase->SqlVariable($this->intIdFichas) . ',
							`fecha` = ' . $objDatabase->SqlVariable($this->dttFecha) . ',
							`accion` = ' . $objDatabase->SqlVariable($this->strAccion) . ',
							`notas` = ' . $objDatabase->SqlVariable($this->strNotas) . '
						WHERE
							`id_fichas_info` = ' . $objDatabase->SqlVariable($this->intIdFichasInfo) . '
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
		 * Delete this FichasInfo
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdFichasInfo)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FichasInfo with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FichasInfo::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_info`
				WHERE
					`id_fichas_info` = ' . $objDatabase->SqlVariable($this->intIdFichasInfo) . '');
		}

		/**
		 * Delete all FichasInfos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FichasInfo::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_info`');
		}

		/**
		 * Truncate fichas_info table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FichasInfo::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `fichas_info`');
		}

		/**
		 * Reload this FichasInfo from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FichasInfo object.');

			// Reload the Object
			$objReloaded = FichasInfo::Load($this->intIdFichasInfo);

			// Update $this's local variables to match
			$this->IdFichas = $objReloaded->IdFichas;
			$this->dttFecha = $objReloaded->dttFecha;
			$this->strAccion = $objReloaded->strAccion;
			$this->strNotas = $objReloaded->strNotas;
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
				case 'IdFichasInfo':
					/**
					 * Gets the value for intIdFichasInfo (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdFichasInfo;

				case 'IdFichas':
					/**
					 * Gets the value for intIdFichas (Not Null)
					 * @return integer
					 */
					return $this->intIdFichas;

				case 'Fecha':
					/**
					 * Gets the value for dttFecha (Not Null)
					 * @return QDateTime
					 */
					return $this->dttFecha;

				case 'Accion':
					/**
					 * Gets the value for strAccion 
					 * @return string
					 */
					return $this->strAccion;

				case 'Notas':
					/**
					 * Gets the value for strNotas 
					 * @return string
					 */
					return $this->strNotas;


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

				case 'Fecha':
					/**
					 * Sets the value for dttFecha (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFecha = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Accion':
					/**
					 * Sets the value for strAccion 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAccion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Notas':
					/**
					 * Sets the value for strNotas 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNotas = QType::Cast($mixValue, QType::String));
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
							throw new QCallerException('Unable to set an unsaved IdFichasObject for this FichasInfo');

						// Update Local Member Variables
						$this->objIdFichasObject = $mixValue;
						$this->intIdFichas = $mixValue->Id;

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
			$strToReturn = '<complexType name="FichasInfo"><sequence>';
			$strToReturn .= '<element name="IdFichasInfo" type="xsd:int"/>';
			$strToReturn .= '<element name="IdFichasObject" type="xsd1:Fichas"/>';
			$strToReturn .= '<element name="Fecha" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Accion" type="xsd:string"/>';
			$strToReturn .= '<element name="Notas" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FichasInfo', $strComplexTypeArray)) {
				$strComplexTypeArray['FichasInfo'] = FichasInfo::GetSoapComplexTypeXml();
				Fichas::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FichasInfo::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FichasInfo();
			if (property_exists($objSoapObject, 'IdFichasInfo'))
				$objToReturn->intIdFichasInfo = $objSoapObject->IdFichasInfo;
			if ((property_exists($objSoapObject, 'IdFichasObject')) &&
				($objSoapObject->IdFichasObject))
				$objToReturn->IdFichasObject = Fichas::GetObjectFromSoapObject($objSoapObject->IdFichasObject);
			if (property_exists($objSoapObject, 'Fecha'))
				$objToReturn->dttFecha = new QDateTime($objSoapObject->Fecha);
			if (property_exists($objSoapObject, 'Accion'))
				$objToReturn->strAccion = $objSoapObject->Accion;
			if (property_exists($objSoapObject, 'Notas'))
				$objToReturn->strNotas = $objSoapObject->Notas;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FichasInfo::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdFichasObject)
				$objObject->objIdFichasObject = Fichas::GetSoapObjectFromObject($objObject->objIdFichasObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdFichas = null;
			if ($objObject->dttFecha)
				$objObject->dttFecha = $objObject->dttFecha->qFormat(QDateTime::FormatSoap);
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeFichasInfo extends QQNode {
		protected $strTableName = 'fichas_info';
		protected $strPrimaryKey = 'id_fichas_info';
		protected $strClassName = 'FichasInfo';
		public function __get($strName) {
			switch ($strName) {
				case 'IdFichasInfo':
					return new QQNode('id_fichas_info', 'IdFichasInfo', 'integer', $this);
				case 'IdFichas':
					return new QQNode('id_fichas', 'IdFichas', 'integer', $this);
				case 'IdFichasObject':
					return new QQNodeFichas('id_fichas', 'IdFichasObject', 'integer', $this);
				case 'Fecha':
					return new QQNode('fecha', 'Fecha', 'QDateTime', $this);
				case 'Accion':
					return new QQNode('accion', 'Accion', 'string', $this);
				case 'Notas':
					return new QQNode('notas', 'Notas', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_fichas_info', 'IdFichasInfo', 'integer', $this);
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

	class QQReverseReferenceNodeFichasInfo extends QQReverseReferenceNode {
		protected $strTableName = 'fichas_info';
		protected $strPrimaryKey = 'id_fichas_info';
		protected $strClassName = 'FichasInfo';
		public function __get($strName) {
			switch ($strName) {
				case 'IdFichasInfo':
					return new QQNode('id_fichas_info', 'IdFichasInfo', 'integer', $this);
				case 'IdFichas':
					return new QQNode('id_fichas', 'IdFichas', 'integer', $this);
				case 'IdFichasObject':
					return new QQNodeFichas('id_fichas', 'IdFichasObject', 'integer', $this);
				case 'Fecha':
					return new QQNode('fecha', 'Fecha', 'QDateTime', $this);
				case 'Accion':
					return new QQNode('accion', 'Accion', 'string', $this);
				case 'Notas':
					return new QQNode('notas', 'Notas', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_fichas_info', 'IdFichasInfo', 'integer', $this);
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