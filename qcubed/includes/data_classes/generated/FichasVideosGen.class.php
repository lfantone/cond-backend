<?php
	/**
	 * The abstract FichasVideosGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FichasVideos subclass which
	 * extends this FichasVideosGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FichasVideos class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdFichaVideo the value for intIdFichaVideo (Read-Only PK)
	 * @property integer $IdFicha the value for intIdFicha (Not Null)
	 * @property integer $IdVideo the value for intIdVideo (Not Null)
	 * @property Fichas $IdFichaObject the value for the Fichas object referenced by intIdFicha (Not Null)
	 * @property Videos $IdVideoObject the value for the Videos object referenced by intIdVideo (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FichasVideosGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column fichas_videos.id_ficha_video
		 * @var integer intIdFichaVideo
		 */
		protected $intIdFichaVideo;
		const IdFichaVideoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_videos.id_ficha
		 * @var integer intIdFicha
		 */
		protected $intIdFicha;
		const IdFichaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_videos.id_video
		 * @var integer intIdVideo
		 */
		protected $intIdVideo;
		const IdVideoDefault = null;


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
		 * in the database column fichas_videos.id_ficha.
		 *
		 * NOTE: Always use the IdFichaObject property getter to correctly retrieve this Fichas object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Fichas objIdFichaObject
		 */
		protected $objIdFichaObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fichas_videos.id_video.
		 *
		 * NOTE: Always use the IdVideoObject property getter to correctly retrieve this Videos object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Videos objIdVideoObject
		 */
		protected $objIdVideoObject;





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
		 * Load a FichasVideos from PK Info
		 * @param integer $intIdFichaVideo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasVideos
		 */
		public static function Load($intIdFichaVideo, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return FichasVideos::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FichasVideos()->IdFichaVideo, $intIdFichaVideo)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all FichasVideoses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasVideos[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call FichasVideos::QueryArray to perform the LoadAll query
			try {
				return FichasVideos::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FichasVideoses
		 * @return int
		 */
		public static function CountAll() {
			// Call FichasVideos::QueryCount to perform the CountAll query
			return FichasVideos::QueryCount(QQ::All());
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
			$objDatabase = FichasVideos::GetDatabase();

			// Create/Build out the QueryBuilder object with FichasVideos-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'fichas_videos');
			FichasVideos::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('fichas_videos');

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
		 * Static Qcubed Query method to query for a single FichasVideos object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FichasVideos the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasVideos::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new FichasVideos object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FichasVideos::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FichasVideos::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of FichasVideos objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FichasVideos[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasVideos::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FichasVideos::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of FichasVideos objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasVideos::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FichasVideos::GetDatabase();

			$strQuery = FichasVideos::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/fichasvideos', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = FichasVideos::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FichasVideos
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'fichas_videos';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_ficha_video', $strAliasPrefix . 'id_ficha_video');
			$objBuilder->AddSelectItem($strTableName, 'id_ficha', $strAliasPrefix . 'id_ficha');
			$objBuilder->AddSelectItem($strTableName, 'id_video', $strAliasPrefix . 'id_video');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FichasVideos from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FichasVideos::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FichasVideos
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the FichasVideos object
			$objToReturn = new FichasVideos();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_ficha_video', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_ficha_video'] : $strAliasPrefix . 'id_ficha_video';
			$objToReturn->intIdFichaVideo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_ficha', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_ficha'] : $strAliasPrefix . 'id_ficha';
			$objToReturn->intIdFicha = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_video', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_video'] : $strAliasPrefix . 'id_video';
			$objToReturn->intIdVideo = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdFichaVideo != $objPreviousItem->IdFichaVideo) {
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
				$strAliasPrefix = 'fichas_videos__';

			// Check for IdFichaObject Early Binding
			$strAlias = $strAliasPrefix . 'id_ficha__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdFichaObject = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_ficha__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for IdVideoObject Early Binding
			$strAlias = $strAliasPrefix . 'id_video__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdVideoObject = Videos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_video__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of FichasVideoses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FichasVideos[]
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
					$objItem = FichasVideos::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FichasVideos::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FichasVideos object,
		 * by IdFichaVideo Index(es)
		 * @param integer $intIdFichaVideo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasVideos
		*/
		public static function LoadByIdFichaVideo($intIdFichaVideo, $objOptionalClauses = null) {
			return FichasVideos::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FichasVideos()->IdFichaVideo, $intIdFichaVideo)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single FichasVideos object,
		 * by IdFicha, IdVideo Index(es)
		 * @param integer $intIdFicha
		 * @param integer $intIdVideo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasVideos
		*/
		public static function LoadByIdFichaIdVideo($intIdFicha, $intIdVideo, $objOptionalClauses = null) {
			return FichasVideos::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FichasVideos()->IdFicha, $intIdFicha),
					QQ::Equal(QQN::FichasVideos()->IdVideo, $intIdVideo)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FichasVideos objects,
		 * by IdFicha Index(es)
		 * @param integer $intIdFicha
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasVideos[]
		*/
		public static function LoadArrayByIdFicha($intIdFicha, $objOptionalClauses = null) {
			// Call FichasVideos::QueryArray to perform the LoadArrayByIdFicha query
			try {
				return FichasVideos::QueryArray(
					QQ::Equal(QQN::FichasVideos()->IdFicha, $intIdFicha),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FichasVideoses
		 * by IdFicha Index(es)
		 * @param integer $intIdFicha
		 * @return int
		*/
		public static function CountByIdFicha($intIdFicha) {
			// Call FichasVideos::QueryCount to perform the CountByIdFicha query
			return FichasVideos::QueryCount(
				QQ::Equal(QQN::FichasVideos()->IdFicha, $intIdFicha)
			);
		}
			
		/**
		 * Load an array of FichasVideos objects,
		 * by IdVideo Index(es)
		 * @param integer $intIdVideo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasVideos[]
		*/
		public static function LoadArrayByIdVideo($intIdVideo, $objOptionalClauses = null) {
			// Call FichasVideos::QueryArray to perform the LoadArrayByIdVideo query
			try {
				return FichasVideos::QueryArray(
					QQ::Equal(QQN::FichasVideos()->IdVideo, $intIdVideo),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FichasVideoses
		 * by IdVideo Index(es)
		 * @param integer $intIdVideo
		 * @return int
		*/
		public static function CountByIdVideo($intIdVideo) {
			// Call FichasVideos::QueryCount to perform the CountByIdVideo query
			return FichasVideos::QueryCount(
				QQ::Equal(QQN::FichasVideos()->IdVideo, $intIdVideo)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this FichasVideos
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FichasVideos::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `fichas_videos` (
							`id_ficha`,
							`id_video`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIdFicha) . ',
							' . $objDatabase->SqlVariable($this->intIdVideo) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdFichaVideo = $objDatabase->InsertId('fichas_videos', 'id_ficha_video');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`fichas_videos`
						SET
							`id_ficha` = ' . $objDatabase->SqlVariable($this->intIdFicha) . ',
							`id_video` = ' . $objDatabase->SqlVariable($this->intIdVideo) . '
						WHERE
							`id_ficha_video` = ' . $objDatabase->SqlVariable($this->intIdFichaVideo) . '
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
		 * Delete this FichasVideos
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdFichaVideo)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FichasVideos with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FichasVideos::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_videos`
				WHERE
					`id_ficha_video` = ' . $objDatabase->SqlVariable($this->intIdFichaVideo) . '');
		}

		/**
		 * Delete all FichasVideoses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FichasVideos::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_videos`');
		}

		/**
		 * Truncate fichas_videos table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FichasVideos::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `fichas_videos`');
		}

		/**
		 * Reload this FichasVideos from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FichasVideos object.');

			// Reload the Object
			$objReloaded = FichasVideos::Load($this->intIdFichaVideo);

			// Update $this's local variables to match
			$this->IdFicha = $objReloaded->IdFicha;
			$this->IdVideo = $objReloaded->IdVideo;
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
				case 'IdFichaVideo':
					/**
					 * Gets the value for intIdFichaVideo (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdFichaVideo;

				case 'IdFicha':
					/**
					 * Gets the value for intIdFicha (Not Null)
					 * @return integer
					 */
					return $this->intIdFicha;

				case 'IdVideo':
					/**
					 * Gets the value for intIdVideo (Not Null)
					 * @return integer
					 */
					return $this->intIdVideo;


				///////////////////
				// Member Objects
				///////////////////
				case 'IdFichaObject':
					/**
					 * Gets the value for the Fichas object referenced by intIdFicha (Not Null)
					 * @return Fichas
					 */
					try {
						if ((!$this->objIdFichaObject) && (!is_null($this->intIdFicha)))
							$this->objIdFichaObject = Fichas::Load($this->intIdFicha);
						return $this->objIdFichaObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdVideoObject':
					/**
					 * Gets the value for the Videos object referenced by intIdVideo (Not Null)
					 * @return Videos
					 */
					try {
						if ((!$this->objIdVideoObject) && (!is_null($this->intIdVideo)))
							$this->objIdVideoObject = Videos::Load($this->intIdVideo);
						return $this->objIdVideoObject;
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
				case 'IdFicha':
					/**
					 * Sets the value for intIdFicha (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdFichaObject = null;
						return ($this->intIdFicha = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdVideo':
					/**
					 * Sets the value for intIdVideo (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdVideoObject = null;
						return ($this->intIdVideo = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'IdFichaObject':
					/**
					 * Sets the value for the Fichas object referenced by intIdFicha (Not Null)
					 * @param Fichas $mixValue
					 * @return Fichas
					 */
					if (is_null($mixValue)) {
						$this->intIdFicha = null;
						$this->objIdFichaObject = null;
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
							throw new QCallerException('Unable to set an unsaved IdFichaObject for this FichasVideos');

						// Update Local Member Variables
						$this->objIdFichaObject = $mixValue;
						$this->intIdFicha = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'IdVideoObject':
					/**
					 * Sets the value for the Videos object referenced by intIdVideo (Not Null)
					 * @param Videos $mixValue
					 * @return Videos
					 */
					if (is_null($mixValue)) {
						$this->intIdVideo = null;
						$this->objIdVideoObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Videos object
						try {
							$mixValue = QType::Cast($mixValue, 'Videos');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Videos object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved IdVideoObject for this FichasVideos');

						// Update Local Member Variables
						$this->objIdVideoObject = $mixValue;
						$this->intIdVideo = $mixValue->Id;

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
			$strToReturn = '<complexType name="FichasVideos"><sequence>';
			$strToReturn .= '<element name="IdFichaVideo" type="xsd:int"/>';
			$strToReturn .= '<element name="IdFichaObject" type="xsd1:Fichas"/>';
			$strToReturn .= '<element name="IdVideoObject" type="xsd1:Videos"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FichasVideos', $strComplexTypeArray)) {
				$strComplexTypeArray['FichasVideos'] = FichasVideos::GetSoapComplexTypeXml();
				Fichas::AlterSoapComplexTypeArray($strComplexTypeArray);
				Videos::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FichasVideos::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FichasVideos();
			if (property_exists($objSoapObject, 'IdFichaVideo'))
				$objToReturn->intIdFichaVideo = $objSoapObject->IdFichaVideo;
			if ((property_exists($objSoapObject, 'IdFichaObject')) &&
				($objSoapObject->IdFichaObject))
				$objToReturn->IdFichaObject = Fichas::GetObjectFromSoapObject($objSoapObject->IdFichaObject);
			if ((property_exists($objSoapObject, 'IdVideoObject')) &&
				($objSoapObject->IdVideoObject))
				$objToReturn->IdVideoObject = Videos::GetObjectFromSoapObject($objSoapObject->IdVideoObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FichasVideos::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdFichaObject)
				$objObject->objIdFichaObject = Fichas::GetSoapObjectFromObject($objObject->objIdFichaObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdFicha = null;
			if ($objObject->objIdVideoObject)
				$objObject->objIdVideoObject = Videos::GetSoapObjectFromObject($objObject->objIdVideoObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdVideo = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeFichasVideos extends QQNode {
		protected $strTableName = 'fichas_videos';
		protected $strPrimaryKey = 'id_ficha_video';
		protected $strClassName = 'FichasVideos';
		public function __get($strName) {
			switch ($strName) {
				case 'IdFichaVideo':
					return new QQNode('id_ficha_video', 'IdFichaVideo', 'integer', $this);
				case 'IdFicha':
					return new QQNode('id_ficha', 'IdFicha', 'integer', $this);
				case 'IdFichaObject':
					return new QQNodeFichas('id_ficha', 'IdFichaObject', 'integer', $this);
				case 'IdVideo':
					return new QQNode('id_video', 'IdVideo', 'integer', $this);
				case 'IdVideoObject':
					return new QQNodeVideos('id_video', 'IdVideoObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_ficha_video', 'IdFichaVideo', 'integer', $this);
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

	class QQReverseReferenceNodeFichasVideos extends QQReverseReferenceNode {
		protected $strTableName = 'fichas_videos';
		protected $strPrimaryKey = 'id_ficha_video';
		protected $strClassName = 'FichasVideos';
		public function __get($strName) {
			switch ($strName) {
				case 'IdFichaVideo':
					return new QQNode('id_ficha_video', 'IdFichaVideo', 'integer', $this);
				case 'IdFicha':
					return new QQNode('id_ficha', 'IdFicha', 'integer', $this);
				case 'IdFichaObject':
					return new QQNodeFichas('id_ficha', 'IdFichaObject', 'integer', $this);
				case 'IdVideo':
					return new QQNode('id_video', 'IdVideo', 'integer', $this);
				case 'IdVideoObject':
					return new QQNodeVideos('id_video', 'IdVideoObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_ficha_video', 'IdFichaVideo', 'integer', $this);
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