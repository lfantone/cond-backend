<?php
	/**
	 * The abstract VideosGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Videos subclass which
	 * extends this VideosGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Videos class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Titulo the value for strTitulo (Not Null)
	 * @property string $Subtitulo the value for strSubtitulo (Not Null)
	 * @property string $Contenido the value for strContenido (Not Null)
	 * @property QDateTime $Fecha the value for dttFecha (Not Null)
	 * @property integer $Estado the value for intEstado (Not Null)
	 * @property-read FichasVideos $_FichasVideosAsIdVideo the value for the private _objFichasVideosAsIdVideo (Read-Only) if set due to an expansion on the fichas_videos.id_video reverse relationship
	 * @property-read FichasVideos[] $_FichasVideosAsIdVideoArray the value for the private _objFichasVideosAsIdVideoArray (Read-Only) if set due to an ExpandAsArray on the fichas_videos.id_video reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class VideosGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column videos.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column videos.titulo
		 * @var string strTitulo
		 */
		protected $strTitulo;
		const TituloMaxLength = 255;
		const TituloDefault = null;


		/**
		 * Protected member variable that maps to the database column videos.subtitulo
		 * @var string strSubtitulo
		 */
		protected $strSubtitulo;
		const SubtituloMaxLength = 255;
		const SubtituloDefault = null;


		/**
		 * Protected member variable that maps to the database column videos.contenido
		 * @var string strContenido
		 */
		protected $strContenido;
		const ContenidoDefault = null;


		/**
		 * Protected member variable that maps to the database column videos.fecha
		 * @var QDateTime dttFecha
		 */
		protected $dttFecha;
		const FechaDefault = null;


		/**
		 * Protected member variable that maps to the database column videos.estado
		 * @var integer intEstado
		 */
		protected $intEstado;
		const EstadoDefault = null;


		/**
		 * Private member variable that stores a reference to a single FichasVideosAsIdVideo object
		 * (of type FichasVideos), if this Videos object was restored with
		 * an expansion on the fichas_videos association table.
		 * @var FichasVideos _objFichasVideosAsIdVideo;
		 */
		private $_objFichasVideosAsIdVideo;

		/**
		 * Private member variable that stores a reference to an array of FichasVideosAsIdVideo objects
		 * (of type FichasVideos[]), if this Videos object was restored with
		 * an ExpandAsArray on the fichas_videos association table.
		 * @var FichasVideos[] _objFichasVideosAsIdVideoArray;
		 */
		private $_objFichasVideosAsIdVideoArray = array();

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
		 * Load a Videos from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Videos
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Videos::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Videos()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Videoses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Videos[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Videos::QueryArray to perform the LoadAll query
			try {
				return Videos::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Videoses
		 * @return int
		 */
		public static function CountAll() {
			// Call Videos::QueryCount to perform the CountAll query
			return Videos::QueryCount(QQ::All());
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
			$objDatabase = Videos::GetDatabase();

			// Create/Build out the QueryBuilder object with Videos-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'videos');
			Videos::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('videos');

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
		 * Static Qcubed Query method to query for a single Videos object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Videos the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Videos::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Videos object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Videos::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Videos::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Videos objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Videos[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Videos::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Videos::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Videos objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Videos::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Videos::GetDatabase();

			$strQuery = Videos::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/videos', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Videos::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Videos
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'videos';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'titulo', $strAliasPrefix . 'titulo');
			$objBuilder->AddSelectItem($strTableName, 'subtitulo', $strAliasPrefix . 'subtitulo');
			$objBuilder->AddSelectItem($strTableName, 'contenido', $strAliasPrefix . 'contenido');
			$objBuilder->AddSelectItem($strTableName, 'fecha', $strAliasPrefix . 'fecha');
			$objBuilder->AddSelectItem($strTableName, 'estado', $strAliasPrefix . 'estado');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Videos from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Videos::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Videos
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
							$strAliasPrefix = 'videos__';


						// Expanding reverse references: FichasVideosAsIdVideo
						$strAlias = $strAliasPrefix . 'fichasvideosasidvideo__id_ficha_video';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFichasVideosAsIdVideoArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFichasVideosAsIdVideoArray;
								$objChildItem = FichasVideos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasvideosasidvideo__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFichasVideosAsIdVideoArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFichasVideosAsIdVideoArray[] = FichasVideos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasvideosasidvideo__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'videos__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Videos object
			$objToReturn = new Videos();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'titulo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'titulo'] : $strAliasPrefix . 'titulo';
			$objToReturn->strTitulo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'subtitulo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'subtitulo'] : $strAliasPrefix . 'subtitulo';
			$objToReturn->strSubtitulo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'contenido', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'contenido'] : $strAliasPrefix . 'contenido';
			$objToReturn->strContenido = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha'] : $strAliasPrefix . 'fecha';
			$objToReturn->dttFecha = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'estado'] : $strAliasPrefix . 'estado';
			$objToReturn->intEstado = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
						continue;
					}
					if (array_diff($objPreviousItem->_objFichasVideosAsIdVideoArray, $objToReturn->_objFichasVideosAsIdVideoArray) != null) {
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
				$strAliasPrefix = 'videos__';




			// Check for FichasVideosAsIdVideo Virtual Binding
			$strAlias = $strAliasPrefix . 'fichasvideosasidvideo__id_ficha_video';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFichasVideosAsIdVideoArray[] = FichasVideos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasvideosasidvideo__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFichasVideosAsIdVideo = FichasVideos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasvideosasidvideo__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Videoses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Videos[]
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
					$objItem = Videos::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Videos::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Videos object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Videos
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Videos::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Videos()->Id, $intId)
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
		 * Save this Videos
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Videos::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `videos` (
							`titulo`,
							`subtitulo`,
							`contenido`,
							`fecha`,
							`estado`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strTitulo) . ',
							' . $objDatabase->SqlVariable($this->strSubtitulo) . ',
							' . $objDatabase->SqlVariable($this->strContenido) . ',
							' . $objDatabase->SqlVariable($this->dttFecha) . ',
							' . $objDatabase->SqlVariable($this->intEstado) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('videos', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`videos`
						SET
							`titulo` = ' . $objDatabase->SqlVariable($this->strTitulo) . ',
							`subtitulo` = ' . $objDatabase->SqlVariable($this->strSubtitulo) . ',
							`contenido` = ' . $objDatabase->SqlVariable($this->strContenido) . ',
							`fecha` = ' . $objDatabase->SqlVariable($this->dttFecha) . ',
							`estado` = ' . $objDatabase->SqlVariable($this->intEstado) . '
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
		 * Delete this Videos
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Videos with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Videos::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`videos`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all Videoses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Videos::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`videos`');
		}

		/**
		 * Truncate videos table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Videos::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `videos`');
		}

		/**
		 * Reload this Videos from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Videos object.');

			// Reload the Object
			$objReloaded = Videos::Load($this->intId);

			// Update $this's local variables to match
			$this->strTitulo = $objReloaded->strTitulo;
			$this->strSubtitulo = $objReloaded->strSubtitulo;
			$this->strContenido = $objReloaded->strContenido;
			$this->dttFecha = $objReloaded->dttFecha;
			$this->intEstado = $objReloaded->intEstado;
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

				case 'Titulo':
					/**
					 * Gets the value for strTitulo (Not Null)
					 * @return string
					 */
					return $this->strTitulo;

				case 'Subtitulo':
					/**
					 * Gets the value for strSubtitulo (Not Null)
					 * @return string
					 */
					return $this->strSubtitulo;

				case 'Contenido':
					/**
					 * Gets the value for strContenido (Not Null)
					 * @return string
					 */
					return $this->strContenido;

				case 'Fecha':
					/**
					 * Gets the value for dttFecha (Not Null)
					 * @return QDateTime
					 */
					return $this->dttFecha;

				case 'Estado':
					/**
					 * Gets the value for intEstado (Not Null)
					 * @return integer
					 */
					return $this->intEstado;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_FichasVideosAsIdVideo':
					/**
					 * Gets the value for the private _objFichasVideosAsIdVideo (Read-Only)
					 * if set due to an expansion on the fichas_videos.id_video reverse relationship
					 * @return FichasVideos
					 */
					return $this->_objFichasVideosAsIdVideo;

				case '_FichasVideosAsIdVideoArray':
					/**
					 * Gets the value for the private _objFichasVideosAsIdVideoArray (Read-Only)
					 * if set due to an ExpandAsArray on the fichas_videos.id_video reverse relationship
					 * @return FichasVideos[]
					 */
					return (array) $this->_objFichasVideosAsIdVideoArray;


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
				case 'Titulo':
					/**
					 * Sets the value for strTitulo (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTitulo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Subtitulo':
					/**
					 * Sets the value for strSubtitulo (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSubtitulo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Contenido':
					/**
					 * Sets the value for strContenido (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strContenido = QType::Cast($mixValue, QType::String));
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

				case 'Estado':
					/**
					 * Sets the value for intEstado (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intEstado = QType::Cast($mixValue, QType::Integer));
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

			
		
		// Related Objects' Methods for FichasVideosAsIdVideo
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FichasVideosesAsIdVideo as an array of FichasVideos objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasVideos[]
		*/ 
		public function GetFichasVideosAsIdVideoArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FichasVideos::LoadArrayByIdVideo($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FichasVideosesAsIdVideo
		 * @return int
		*/ 
		public function CountFichasVideosesAsIdVideo() {
			if ((is_null($this->intId)))
				return 0;

			return FichasVideos::CountByIdVideo($this->intId);
		}

		/**
		 * Associates a FichasVideosAsIdVideo
		 * @param FichasVideos $objFichasVideos
		 * @return void
		*/ 
		public function AssociateFichasVideosAsIdVideo(FichasVideos $objFichasVideos) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasVideosAsIdVideo on this unsaved Videos.');
			if ((is_null($objFichasVideos->IdFichaVideo)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasVideosAsIdVideo on this Videos with an unsaved FichasVideos.');

			// Get the Database Object for this Class
			$objDatabase = Videos::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_videos`
				SET
					`id_video` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id_ficha_video` = ' . $objDatabase->SqlVariable($objFichasVideos->IdFichaVideo) . '
			');
		}

		/**
		 * Unassociates a FichasVideosAsIdVideo
		 * @param FichasVideos $objFichasVideos
		 * @return void
		*/ 
		public function UnassociateFichasVideosAsIdVideo(FichasVideos $objFichasVideos) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasVideosAsIdVideo on this unsaved Videos.');
			if ((is_null($objFichasVideos->IdFichaVideo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasVideosAsIdVideo on this Videos with an unsaved FichasVideos.');

			// Get the Database Object for this Class
			$objDatabase = Videos::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_videos`
				SET
					`id_video` = null
				WHERE
					`id_ficha_video` = ' . $objDatabase->SqlVariable($objFichasVideos->IdFichaVideo) . ' AND
					`id_video` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all FichasVideosesAsIdVideo
		 * @return void
		*/ 
		public function UnassociateAllFichasVideosesAsIdVideo() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasVideosAsIdVideo on this unsaved Videos.');

			// Get the Database Object for this Class
			$objDatabase = Videos::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_videos`
				SET
					`id_video` = null
				WHERE
					`id_video` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FichasVideosAsIdVideo
		 * @param FichasVideos $objFichasVideos
		 * @return void
		*/ 
		public function DeleteAssociatedFichasVideosAsIdVideo(FichasVideos $objFichasVideos) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasVideosAsIdVideo on this unsaved Videos.');
			if ((is_null($objFichasVideos->IdFichaVideo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasVideosAsIdVideo on this Videos with an unsaved FichasVideos.');

			// Get the Database Object for this Class
			$objDatabase = Videos::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_videos`
				WHERE
					`id_ficha_video` = ' . $objDatabase->SqlVariable($objFichasVideos->IdFichaVideo) . ' AND
					`id_video` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated FichasVideosesAsIdVideo
		 * @return void
		*/ 
		public function DeleteAllFichasVideosesAsIdVideo() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasVideosAsIdVideo on this unsaved Videos.');

			// Get the Database Object for this Class
			$objDatabase = Videos::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_videos`
				WHERE
					`id_video` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Videos"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Titulo" type="xsd:string"/>';
			$strToReturn .= '<element name="Subtitulo" type="xsd:string"/>';
			$strToReturn .= '<element name="Contenido" type="xsd:string"/>';
			$strToReturn .= '<element name="Fecha" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Estado" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Videos', $strComplexTypeArray)) {
				$strComplexTypeArray['Videos'] = Videos::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Videos::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Videos();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Titulo'))
				$objToReturn->strTitulo = $objSoapObject->Titulo;
			if (property_exists($objSoapObject, 'Subtitulo'))
				$objToReturn->strSubtitulo = $objSoapObject->Subtitulo;
			if (property_exists($objSoapObject, 'Contenido'))
				$objToReturn->strContenido = $objSoapObject->Contenido;
			if (property_exists($objSoapObject, 'Fecha'))
				$objToReturn->dttFecha = new QDateTime($objSoapObject->Fecha);
			if (property_exists($objSoapObject, 'Estado'))
				$objToReturn->intEstado = $objSoapObject->Estado;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Videos::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttFecha)
				$objObject->dttFecha = $objObject->dttFecha->qFormat(QDateTime::FormatSoap);
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeVideos extends QQNode {
		protected $strTableName = 'videos';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Videos';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Titulo':
					return new QQNode('titulo', 'Titulo', 'string', $this);
				case 'Subtitulo':
					return new QQNode('subtitulo', 'Subtitulo', 'string', $this);
				case 'Contenido':
					return new QQNode('contenido', 'Contenido', 'string', $this);
				case 'Fecha':
					return new QQNode('fecha', 'Fecha', 'QDateTime', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'integer', $this);
				case 'FichasVideosAsIdVideo':
					return new QQReverseReferenceNodeFichasVideos($this, 'fichasvideosasidvideo', 'reverse_reference', 'id_video');

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

	class QQReverseReferenceNodeVideos extends QQReverseReferenceNode {
		protected $strTableName = 'videos';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Videos';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Titulo':
					return new QQNode('titulo', 'Titulo', 'string', $this);
				case 'Subtitulo':
					return new QQNode('subtitulo', 'Subtitulo', 'string', $this);
				case 'Contenido':
					return new QQNode('contenido', 'Contenido', 'string', $this);
				case 'Fecha':
					return new QQNode('fecha', 'Fecha', 'QDateTime', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'integer', $this);
				case 'FichasVideosAsIdVideo':
					return new QQReverseReferenceNodeFichasVideos($this, 'fichasvideosasidvideo', 'reverse_reference', 'id_video');

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