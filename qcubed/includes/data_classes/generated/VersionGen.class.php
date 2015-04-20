<?php
	/**
	 * The abstract VersionGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Version subclass which
	 * extends this VersionGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Version class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdVersion the value for intIdVersion (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property integer $IdModelo the value for intIdModelo (Not Null)
	 * @property Modelo $IdModeloObject the value for the Modelo object referenced by intIdModelo (Not Null)
	 * @property-read Fichas $_FichasAsId the value for the private _objFichasAsId (Read-Only) if set due to an expansion on the fichas.id_version reverse relationship
	 * @property-read Fichas[] $_FichasAsIdArray the value for the private _objFichasAsIdArray (Read-Only) if set due to an ExpandAsArray on the fichas.id_version reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class VersionGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column version.id_version
		 * @var integer intIdVersion
		 */
		protected $intIdVersion;
		const IdVersionDefault = null;


		/**
		 * Protected member variable that maps to the database column version.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 255;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column version.id_modelo
		 * @var integer intIdModelo
		 */
		protected $intIdModelo;
		const IdModeloDefault = null;


		/**
		 * Private member variable that stores a reference to a single FichasAsId object
		 * (of type Fichas), if this Version object was restored with
		 * an expansion on the fichas association table.
		 * @var Fichas _objFichasAsId;
		 */
		private $_objFichasAsId;

		/**
		 * Private member variable that stores a reference to an array of FichasAsId objects
		 * (of type Fichas[]), if this Version object was restored with
		 * an ExpandAsArray on the fichas association table.
		 * @var Fichas[] _objFichasAsIdArray;
		 */
		private $_objFichasAsIdArray = array();

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
		 * in the database column version.id_modelo.
		 *
		 * NOTE: Always use the IdModeloObject property getter to correctly retrieve this Modelo object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Modelo objIdModeloObject
		 */
		protected $objIdModeloObject;





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
		 * Load a Version from PK Info
		 * @param integer $intIdVersion
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Version
		 */
		public static function Load($intIdVersion, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Version::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Version()->IdVersion, $intIdVersion)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Versions
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Version[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Version::QueryArray to perform the LoadAll query
			try {
				return Version::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Versions
		 * @return int
		 */
		public static function CountAll() {
			// Call Version::QueryCount to perform the CountAll query
			return Version::QueryCount(QQ::All());
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
			$objDatabase = Version::GetDatabase();

			// Create/Build out the QueryBuilder object with Version-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'version');
			Version::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('version');

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
		 * Static Qcubed Query method to query for a single Version object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Version the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Version::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Version object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Version::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Version::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Version objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Version[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Version::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Version::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Version objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Version::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Version::GetDatabase();

			$strQuery = Version::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/version', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Version::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Version
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'version';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_version', $strAliasPrefix . 'id_version');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'id_modelo', $strAliasPrefix . 'id_modelo');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Version from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Version::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Version
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id_version';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdVersion == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'version__';


						// Expanding reverse references: FichasAsId
						$strAlias = $strAliasPrefix . 'fichasasid__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFichasAsIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFichasAsIdArray;
								$objChildItem = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFichasAsIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFichasAsIdArray[] = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'version__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Version object
			$objToReturn = new Version();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_version', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_version'] : $strAliasPrefix . 'id_version';
			$objToReturn->intIdVersion = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_modelo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_modelo'] : $strAliasPrefix . 'id_modelo';
			$objToReturn->intIdModelo = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdVersion != $objPreviousItem->IdVersion) {
						continue;
					}
					if (array_diff($objPreviousItem->_objFichasAsIdArray, $objToReturn->_objFichasAsIdArray) != null) {
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
				$strAliasPrefix = 'version__';

			// Check for IdModeloObject Early Binding
			$strAlias = $strAliasPrefix . 'id_modelo__id_modelo';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdModeloObject = Modelo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_modelo__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for FichasAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'fichasasid__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFichasAsIdArray[] = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFichasAsId = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Versions from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Version[]
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
					$objItem = Version::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Version::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Version object,
		 * by IdVersion Index(es)
		 * @param integer $intIdVersion
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Version
		*/
		public static function LoadByIdVersion($intIdVersion, $objOptionalClauses = null) {
			return Version::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Version()->IdVersion, $intIdVersion)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Version objects,
		 * by IdModelo Index(es)
		 * @param integer $intIdModelo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Version[]
		*/
		public static function LoadArrayByIdModelo($intIdModelo, $objOptionalClauses = null) {
			// Call Version::QueryArray to perform the LoadArrayByIdModelo query
			try {
				return Version::QueryArray(
					QQ::Equal(QQN::Version()->IdModelo, $intIdModelo),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Versions
		 * by IdModelo Index(es)
		 * @param integer $intIdModelo
		 * @return int
		*/
		public static function CountByIdModelo($intIdModelo) {
			// Call Version::QueryCount to perform the CountByIdModelo query
			return Version::QueryCount(
				QQ::Equal(QQN::Version()->IdModelo, $intIdModelo)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Version
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Version::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `version` (
							`nombre`,
							`id_modelo`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->intIdModelo) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdVersion = $objDatabase->InsertId('version', 'id_version');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`version`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '
						WHERE
							`id_version` = ' . $objDatabase->SqlVariable($this->intIdVersion) . '
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
		 * Delete this Version
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdVersion)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Version with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Version::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`version`
				WHERE
					`id_version` = ' . $objDatabase->SqlVariable($this->intIdVersion) . '');
		}

		/**
		 * Delete all Versions
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Version::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`version`');
		}

		/**
		 * Truncate version table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Version::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `version`');
		}

		/**
		 * Reload this Version from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Version object.');

			// Reload the Object
			$objReloaded = Version::Load($this->intIdVersion);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->IdModelo = $objReloaded->IdModelo;
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
				case 'IdVersion':
					/**
					 * Gets the value for intIdVersion (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdVersion;

				case 'Nombre':
					/**
					 * Gets the value for strNombre (Not Null)
					 * @return string
					 */
					return $this->strNombre;

				case 'IdModelo':
					/**
					 * Gets the value for intIdModelo (Not Null)
					 * @return integer
					 */
					return $this->intIdModelo;


				///////////////////
				// Member Objects
				///////////////////
				case 'IdModeloObject':
					/**
					 * Gets the value for the Modelo object referenced by intIdModelo (Not Null)
					 * @return Modelo
					 */
					try {
						if ((!$this->objIdModeloObject) && (!is_null($this->intIdModelo)))
							$this->objIdModeloObject = Modelo::Load($this->intIdModelo);
						return $this->objIdModeloObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_FichasAsId':
					/**
					 * Gets the value for the private _objFichasAsId (Read-Only)
					 * if set due to an expansion on the fichas.id_version reverse relationship
					 * @return Fichas
					 */
					return $this->_objFichasAsId;

				case '_FichasAsIdArray':
					/**
					 * Gets the value for the private _objFichasAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the fichas.id_version reverse relationship
					 * @return Fichas[]
					 */
					return (array) $this->_objFichasAsIdArray;


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

				case 'IdModelo':
					/**
					 * Sets the value for intIdModelo (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdModeloObject = null;
						return ($this->intIdModelo = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'IdModeloObject':
					/**
					 * Sets the value for the Modelo object referenced by intIdModelo (Not Null)
					 * @param Modelo $mixValue
					 * @return Modelo
					 */
					if (is_null($mixValue)) {
						$this->intIdModelo = null;
						$this->objIdModeloObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Modelo object
						try {
							$mixValue = QType::Cast($mixValue, 'Modelo');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Modelo object
						if (is_null($mixValue->IdModelo))
							throw new QCallerException('Unable to set an unsaved IdModeloObject for this Version');

						// Update Local Member Variables
						$this->objIdModeloObject = $mixValue;
						$this->intIdModelo = $mixValue->IdModelo;

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

			
		
		// Related Objects' Methods for FichasAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FichasesAsId as an array of Fichas objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fichas[]
		*/ 
		public function GetFichasAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdVersion)))
				return array();

			try {
				return Fichas::LoadArrayByIdVersion($this->intIdVersion, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FichasesAsId
		 * @return int
		*/ 
		public function CountFichasesAsId() {
			if ((is_null($this->intIdVersion)))
				return 0;

			return Fichas::CountByIdVersion($this->intIdVersion);
		}

		/**
		 * Associates a FichasAsId
		 * @param Fichas $objFichas
		 * @return void
		*/ 
		public function AssociateFichasAsId(Fichas $objFichas) {
			if ((is_null($this->intIdVersion)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasAsId on this unsaved Version.');
			if ((is_null($objFichas->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasAsId on this Version with an unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Version::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas`
				SET
					`id_version` = ' . $objDatabase->SqlVariable($this->intIdVersion) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichas->Id) . '
			');
		}

		/**
		 * Unassociates a FichasAsId
		 * @param Fichas $objFichas
		 * @return void
		*/ 
		public function UnassociateFichasAsId(Fichas $objFichas) {
			if ((is_null($this->intIdVersion)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsId on this unsaved Version.');
			if ((is_null($objFichas->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsId on this Version with an unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Version::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas`
				SET
					`id_version` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichas->Id) . ' AND
					`id_version` = ' . $objDatabase->SqlVariable($this->intIdVersion) . '
			');
		}

		/**
		 * Unassociates all FichasesAsId
		 * @return void
		*/ 
		public function UnassociateAllFichasesAsId() {
			if ((is_null($this->intIdVersion)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsId on this unsaved Version.');

			// Get the Database Object for this Class
			$objDatabase = Version::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas`
				SET
					`id_version` = null
				WHERE
					`id_version` = ' . $objDatabase->SqlVariable($this->intIdVersion) . '
			');
		}

		/**
		 * Deletes an associated FichasAsId
		 * @param Fichas $objFichas
		 * @return void
		*/ 
		public function DeleteAssociatedFichasAsId(Fichas $objFichas) {
			if ((is_null($this->intIdVersion)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsId on this unsaved Version.');
			if ((is_null($objFichas->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsId on this Version with an unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Version::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichas->Id) . ' AND
					`id_version` = ' . $objDatabase->SqlVariable($this->intIdVersion) . '
			');
		}

		/**
		 * Deletes all associated FichasesAsId
		 * @return void
		*/ 
		public function DeleteAllFichasesAsId() {
			if ((is_null($this->intIdVersion)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsId on this unsaved Version.');

			// Get the Database Object for this Class
			$objDatabase = Version::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas`
				WHERE
					`id_version` = ' . $objDatabase->SqlVariable($this->intIdVersion) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Version"><sequence>';
			$strToReturn .= '<element name="IdVersion" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="IdModeloObject" type="xsd1:Modelo"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Version', $strComplexTypeArray)) {
				$strComplexTypeArray['Version'] = Version::GetSoapComplexTypeXml();
				Modelo::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Version::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Version();
			if (property_exists($objSoapObject, 'IdVersion'))
				$objToReturn->intIdVersion = $objSoapObject->IdVersion;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if ((property_exists($objSoapObject, 'IdModeloObject')) &&
				($objSoapObject->IdModeloObject))
				$objToReturn->IdModeloObject = Modelo::GetObjectFromSoapObject($objSoapObject->IdModeloObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Version::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdModeloObject)
				$objObject->objIdModeloObject = Modelo::GetSoapObjectFromObject($objObject->objIdModeloObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdModelo = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeVersion extends QQNode {
		protected $strTableName = 'version';
		protected $strPrimaryKey = 'id_version';
		protected $strClassName = 'Version';
		public function __get($strName) {
			switch ($strName) {
				case 'IdVersion':
					return new QQNode('id_version', 'IdVersion', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'IdModelo':
					return new QQNode('id_modelo', 'IdModelo', 'integer', $this);
				case 'IdModeloObject':
					return new QQNodeModelo('id_modelo', 'IdModeloObject', 'integer', $this);
				case 'FichasAsId':
					return new QQReverseReferenceNodeFichas($this, 'fichasasid', 'reverse_reference', 'id_version');

				case '_PrimaryKeyNode':
					return new QQNode('id_version', 'IdVersion', 'integer', $this);
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

	class QQReverseReferenceNodeVersion extends QQReverseReferenceNode {
		protected $strTableName = 'version';
		protected $strPrimaryKey = 'id_version';
		protected $strClassName = 'Version';
		public function __get($strName) {
			switch ($strName) {
				case 'IdVersion':
					return new QQNode('id_version', 'IdVersion', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'IdModelo':
					return new QQNode('id_modelo', 'IdModelo', 'integer', $this);
				case 'IdModeloObject':
					return new QQNodeModelo('id_modelo', 'IdModeloObject', 'integer', $this);
				case 'FichasAsId':
					return new QQReverseReferenceNodeFichas($this, 'fichasasid', 'reverse_reference', 'id_version');

				case '_PrimaryKeyNode':
					return new QQNode('id_version', 'IdVersion', 'integer', $this);
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