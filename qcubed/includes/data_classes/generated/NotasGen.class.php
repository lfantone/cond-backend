<?php
	/**
	 * The abstract NotasGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Notas subclass which
	 * extends this NotasGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Notas class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Titulo the value for strTitulo (Not Null)
	 * @property string $Subtitulo the value for strSubtitulo (Not Null)
	 * @property string $Copete the value for strCopete (Not Null)
	 * @property string $Contenido the value for strContenido (Not Null)
	 * @property string $ContenidoRtf the value for strContenidoRtf 
	 * @property QDateTime $FechaCreada the value for dttFechaCreada (Not Null)
	 * @property QDateTime $FechaPublicada the value for dttFechaPublicada (Not Null)
	 * @property integer $Visitas the value for intVisitas (Not Null)
	 * @property integer $IdAutor the value for intIdAutor (Not Null)
	 * @property integer $Estado the value for intEstado (Not Null)
	 * @property QDateTime $FechaAPublicar the value for dttFechaAPublicar 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NotasGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column notas.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column notas.titulo
		 * @var string strTitulo
		 */
		protected $strTitulo;
		const TituloMaxLength = 255;
		const TituloDefault = null;


		/**
		 * Protected member variable that maps to the database column notas.subtitulo
		 * @var string strSubtitulo
		 */
		protected $strSubtitulo;
		const SubtituloMaxLength = 255;
		const SubtituloDefault = null;


		/**
		 * Protected member variable that maps to the database column notas.copete
		 * @var string strCopete
		 */
		protected $strCopete;
		const CopeteMaxLength = 255;
		const CopeteDefault = null;


		/**
		 * Protected member variable that maps to the database column notas.contenido
		 * @var string strContenido
		 */
		protected $strContenido;
		const ContenidoDefault = null;


		/**
		 * Protected member variable that maps to the database column notas.contenido_rtf
		 * @var string strContenidoRtf
		 */
		protected $strContenidoRtf;
		const ContenidoRtfDefault = null;


		/**
		 * Protected member variable that maps to the database column notas.fecha_creada
		 * @var QDateTime dttFechaCreada
		 */
		protected $dttFechaCreada;
		const FechaCreadaDefault = null;


		/**
		 * Protected member variable that maps to the database column notas.fecha_publicada
		 * @var QDateTime dttFechaPublicada
		 */
		protected $dttFechaPublicada;
		const FechaPublicadaDefault = null;


		/**
		 * Protected member variable that maps to the database column notas.visitas
		 * @var integer intVisitas
		 */
		protected $intVisitas;
		const VisitasDefault = null;


		/**
		 * Protected member variable that maps to the database column notas.id_autor
		 * @var integer intIdAutor
		 */
		protected $intIdAutor;
		const IdAutorDefault = null;


		/**
		 * Protected member variable that maps to the database column notas.estado
		 * @var integer intEstado
		 */
		protected $intEstado;
		const EstadoDefault = null;


		/**
		 * Protected member variable that maps to the database column notas.fecha_a_publicar
		 * @var QDateTime dttFechaAPublicar
		 */
		protected $dttFechaAPublicar;
		const FechaAPublicarDefault = null;


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
		 * Load a Notas from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Notas
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Notas::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Notas()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Notases
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Notas[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Notas::QueryArray to perform the LoadAll query
			try {
				return Notas::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Notases
		 * @return int
		 */
		public static function CountAll() {
			// Call Notas::QueryCount to perform the CountAll query
			return Notas::QueryCount(QQ::All());
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
			$objDatabase = Notas::GetDatabase();

			// Create/Build out the QueryBuilder object with Notas-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'notas');
			Notas::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('notas');

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
		 * Static Qcubed Query method to query for a single Notas object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Notas the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Notas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Notas object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Notas::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Notas::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Notas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Notas[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Notas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Notas::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Notas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Notas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Notas::GetDatabase();

			$strQuery = Notas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/notas', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Notas::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Notas
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'notas';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'titulo', $strAliasPrefix . 'titulo');
			$objBuilder->AddSelectItem($strTableName, 'subtitulo', $strAliasPrefix . 'subtitulo');
			$objBuilder->AddSelectItem($strTableName, 'copete', $strAliasPrefix . 'copete');
			$objBuilder->AddSelectItem($strTableName, 'contenido', $strAliasPrefix . 'contenido');
			$objBuilder->AddSelectItem($strTableName, 'contenido_rtf', $strAliasPrefix . 'contenido_rtf');
			$objBuilder->AddSelectItem($strTableName, 'fecha_creada', $strAliasPrefix . 'fecha_creada');
			$objBuilder->AddSelectItem($strTableName, 'fecha_publicada', $strAliasPrefix . 'fecha_publicada');
			$objBuilder->AddSelectItem($strTableName, 'visitas', $strAliasPrefix . 'visitas');
			$objBuilder->AddSelectItem($strTableName, 'id_autor', $strAliasPrefix . 'id_autor');
			$objBuilder->AddSelectItem($strTableName, 'estado', $strAliasPrefix . 'estado');
			$objBuilder->AddSelectItem($strTableName, 'fecha_a_publicar', $strAliasPrefix . 'fecha_a_publicar');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Notas from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Notas::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Notas
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Notas object
			$objToReturn = new Notas();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'titulo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'titulo'] : $strAliasPrefix . 'titulo';
			$objToReturn->strTitulo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'subtitulo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'subtitulo'] : $strAliasPrefix . 'subtitulo';
			$objToReturn->strSubtitulo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'copete', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'copete'] : $strAliasPrefix . 'copete';
			$objToReturn->strCopete = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'contenido', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'contenido'] : $strAliasPrefix . 'contenido';
			$objToReturn->strContenido = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'contenido_rtf', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'contenido_rtf'] : $strAliasPrefix . 'contenido_rtf';
			$objToReturn->strContenidoRtf = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_creada', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_creada'] : $strAliasPrefix . 'fecha_creada';
			$objToReturn->dttFechaCreada = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_publicada', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_publicada'] : $strAliasPrefix . 'fecha_publicada';
			$objToReturn->dttFechaPublicada = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'visitas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'visitas'] : $strAliasPrefix . 'visitas';
			$objToReturn->intVisitas = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_autor', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_autor'] : $strAliasPrefix . 'id_autor';
			$objToReturn->intIdAutor = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'estado'] : $strAliasPrefix . 'estado';
			$objToReturn->intEstado = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_a_publicar', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_a_publicar'] : $strAliasPrefix . 'fecha_a_publicar';
			$objToReturn->dttFechaAPublicar = $objDbRow->GetColumn($strAliasName, 'DateTime');

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
				$strAliasPrefix = 'notas__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Notases from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Notas[]
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
					$objItem = Notas::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Notas::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Notas object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Notas
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Notas::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Notas()->Id, $intId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Notas objects,
		 * by IdAutor Index(es)
		 * @param integer $intIdAutor
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Notas[]
		*/
		public static function LoadArrayByIdAutor($intIdAutor, $objOptionalClauses = null) {
			// Call Notas::QueryArray to perform the LoadArrayByIdAutor query
			try {
				return Notas::QueryArray(
					QQ::Equal(QQN::Notas()->IdAutor, $intIdAutor),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Notases
		 * by IdAutor Index(es)
		 * @param integer $intIdAutor
		 * @return int
		*/
		public static function CountByIdAutor($intIdAutor) {
			// Call Notas::QueryCount to perform the CountByIdAutor query
			return Notas::QueryCount(
				QQ::Equal(QQN::Notas()->IdAutor, $intIdAutor)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Notas
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Notas::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `notas` (
							`titulo`,
							`subtitulo`,
							`copete`,
							`contenido`,
							`contenido_rtf`,
							`fecha_creada`,
							`fecha_publicada`,
							`visitas`,
							`id_autor`,
							`estado`,
							`fecha_a_publicar`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strTitulo) . ',
							' . $objDatabase->SqlVariable($this->strSubtitulo) . ',
							' . $objDatabase->SqlVariable($this->strCopete) . ',
							' . $objDatabase->SqlVariable($this->strContenido) . ',
							' . $objDatabase->SqlVariable($this->strContenidoRtf) . ',
							' . $objDatabase->SqlVariable($this->dttFechaCreada) . ',
							' . $objDatabase->SqlVariable($this->dttFechaPublicada) . ',
							' . $objDatabase->SqlVariable($this->intVisitas) . ',
							' . $objDatabase->SqlVariable($this->intIdAutor) . ',
							' . $objDatabase->SqlVariable($this->intEstado) . ',
							' . $objDatabase->SqlVariable($this->dttFechaAPublicar) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('notas', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`notas`
						SET
							`titulo` = ' . $objDatabase->SqlVariable($this->strTitulo) . ',
							`subtitulo` = ' . $objDatabase->SqlVariable($this->strSubtitulo) . ',
							`copete` = ' . $objDatabase->SqlVariable($this->strCopete) . ',
							`contenido` = ' . $objDatabase->SqlVariable($this->strContenido) . ',
							`contenido_rtf` = ' . $objDatabase->SqlVariable($this->strContenidoRtf) . ',
							`fecha_creada` = ' . $objDatabase->SqlVariable($this->dttFechaCreada) . ',
							`fecha_publicada` = ' . $objDatabase->SqlVariable($this->dttFechaPublicada) . ',
							`visitas` = ' . $objDatabase->SqlVariable($this->intVisitas) . ',
							`id_autor` = ' . $objDatabase->SqlVariable($this->intIdAutor) . ',
							`estado` = ' . $objDatabase->SqlVariable($this->intEstado) . ',
							`fecha_a_publicar` = ' . $objDatabase->SqlVariable($this->dttFechaAPublicar) . '
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
		 * Delete this Notas
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Notas with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Notas::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`notas`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all Notases
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Notas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`notas`');
		}

		/**
		 * Truncate notas table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Notas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `notas`');
		}

		/**
		 * Reload this Notas from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Notas object.');

			// Reload the Object
			$objReloaded = Notas::Load($this->intId);

			// Update $this's local variables to match
			$this->strTitulo = $objReloaded->strTitulo;
			$this->strSubtitulo = $objReloaded->strSubtitulo;
			$this->strCopete = $objReloaded->strCopete;
			$this->strContenido = $objReloaded->strContenido;
			$this->strContenidoRtf = $objReloaded->strContenidoRtf;
			$this->dttFechaCreada = $objReloaded->dttFechaCreada;
			$this->dttFechaPublicada = $objReloaded->dttFechaPublicada;
			$this->intVisitas = $objReloaded->intVisitas;
			$this->intIdAutor = $objReloaded->intIdAutor;
			$this->intEstado = $objReloaded->intEstado;
			$this->dttFechaAPublicar = $objReloaded->dttFechaAPublicar;
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

				case 'Copete':
					/**
					 * Gets the value for strCopete (Not Null)
					 * @return string
					 */
					return $this->strCopete;

				case 'Contenido':
					/**
					 * Gets the value for strContenido (Not Null)
					 * @return string
					 */
					return $this->strContenido;

				case 'ContenidoRtf':
					/**
					 * Gets the value for strContenidoRtf 
					 * @return string
					 */
					return $this->strContenidoRtf;

				case 'FechaCreada':
					/**
					 * Gets the value for dttFechaCreada (Not Null)
					 * @return QDateTime
					 */
					return $this->dttFechaCreada;

				case 'FechaPublicada':
					/**
					 * Gets the value for dttFechaPublicada (Not Null)
					 * @return QDateTime
					 */
					return $this->dttFechaPublicada;

				case 'Visitas':
					/**
					 * Gets the value for intVisitas (Not Null)
					 * @return integer
					 */
					return $this->intVisitas;

				case 'IdAutor':
					/**
					 * Gets the value for intIdAutor (Not Null)
					 * @return integer
					 */
					return $this->intIdAutor;

				case 'Estado':
					/**
					 * Gets the value for intEstado (Not Null)
					 * @return integer
					 */
					return $this->intEstado;

				case 'FechaAPublicar':
					/**
					 * Gets the value for dttFechaAPublicar 
					 * @return QDateTime
					 */
					return $this->dttFechaAPublicar;


				///////////////////
				// Member Objects
				///////////////////

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

				case 'Copete':
					/**
					 * Sets the value for strCopete (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCopete = QType::Cast($mixValue, QType::String));
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

				case 'ContenidoRtf':
					/**
					 * Sets the value for strContenidoRtf 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strContenidoRtf = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaCreada':
					/**
					 * Sets the value for dttFechaCreada (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaCreada = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaPublicada':
					/**
					 * Sets the value for dttFechaPublicada (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaPublicada = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Visitas':
					/**
					 * Sets the value for intVisitas (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intVisitas = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdAutor':
					/**
					 * Sets the value for intIdAutor (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intIdAutor = QType::Cast($mixValue, QType::Integer));
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

				case 'FechaAPublicar':
					/**
					 * Sets the value for dttFechaAPublicar 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaAPublicar = QType::Cast($mixValue, QType::DateTime));
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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Notas"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Titulo" type="xsd:string"/>';
			$strToReturn .= '<element name="Subtitulo" type="xsd:string"/>';
			$strToReturn .= '<element name="Copete" type="xsd:string"/>';
			$strToReturn .= '<element name="Contenido" type="xsd:string"/>';
			$strToReturn .= '<element name="ContenidoRtf" type="xsd:string"/>';
			$strToReturn .= '<element name="FechaCreada" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FechaPublicada" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Visitas" type="xsd:int"/>';
			$strToReturn .= '<element name="IdAutor" type="xsd:int"/>';
			$strToReturn .= '<element name="Estado" type="xsd:int"/>';
			$strToReturn .= '<element name="FechaAPublicar" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Notas', $strComplexTypeArray)) {
				$strComplexTypeArray['Notas'] = Notas::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Notas::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Notas();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Titulo'))
				$objToReturn->strTitulo = $objSoapObject->Titulo;
			if (property_exists($objSoapObject, 'Subtitulo'))
				$objToReturn->strSubtitulo = $objSoapObject->Subtitulo;
			if (property_exists($objSoapObject, 'Copete'))
				$objToReturn->strCopete = $objSoapObject->Copete;
			if (property_exists($objSoapObject, 'Contenido'))
				$objToReturn->strContenido = $objSoapObject->Contenido;
			if (property_exists($objSoapObject, 'ContenidoRtf'))
				$objToReturn->strContenidoRtf = $objSoapObject->ContenidoRtf;
			if (property_exists($objSoapObject, 'FechaCreada'))
				$objToReturn->dttFechaCreada = new QDateTime($objSoapObject->FechaCreada);
			if (property_exists($objSoapObject, 'FechaPublicada'))
				$objToReturn->dttFechaPublicada = new QDateTime($objSoapObject->FechaPublicada);
			if (property_exists($objSoapObject, 'Visitas'))
				$objToReturn->intVisitas = $objSoapObject->Visitas;
			if (property_exists($objSoapObject, 'IdAutor'))
				$objToReturn->intIdAutor = $objSoapObject->IdAutor;
			if (property_exists($objSoapObject, 'Estado'))
				$objToReturn->intEstado = $objSoapObject->Estado;
			if (property_exists($objSoapObject, 'FechaAPublicar'))
				$objToReturn->dttFechaAPublicar = new QDateTime($objSoapObject->FechaAPublicar);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Notas::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttFechaCreada)
				$objObject->dttFechaCreada = $objObject->dttFechaCreada->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttFechaPublicada)
				$objObject->dttFechaPublicada = $objObject->dttFechaPublicada->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttFechaAPublicar)
				$objObject->dttFechaAPublicar = $objObject->dttFechaAPublicar->qFormat(QDateTime::FormatSoap);
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeNotas extends QQNode {
		protected $strTableName = 'notas';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Notas';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Titulo':
					return new QQNode('titulo', 'Titulo', 'string', $this);
				case 'Subtitulo':
					return new QQNode('subtitulo', 'Subtitulo', 'string', $this);
				case 'Copete':
					return new QQNode('copete', 'Copete', 'string', $this);
				case 'Contenido':
					return new QQNode('contenido', 'Contenido', 'string', $this);
				case 'ContenidoRtf':
					return new QQNode('contenido_rtf', 'ContenidoRtf', 'string', $this);
				case 'FechaCreada':
					return new QQNode('fecha_creada', 'FechaCreada', 'QDateTime', $this);
				case 'FechaPublicada':
					return new QQNode('fecha_publicada', 'FechaPublicada', 'QDateTime', $this);
				case 'Visitas':
					return new QQNode('visitas', 'Visitas', 'integer', $this);
				case 'IdAutor':
					return new QQNode('id_autor', 'IdAutor', 'integer', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'integer', $this);
				case 'FechaAPublicar':
					return new QQNode('fecha_a_publicar', 'FechaAPublicar', 'QDateTime', $this);

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

	class QQReverseReferenceNodeNotas extends QQReverseReferenceNode {
		protected $strTableName = 'notas';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Notas';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Titulo':
					return new QQNode('titulo', 'Titulo', 'string', $this);
				case 'Subtitulo':
					return new QQNode('subtitulo', 'Subtitulo', 'string', $this);
				case 'Copete':
					return new QQNode('copete', 'Copete', 'string', $this);
				case 'Contenido':
					return new QQNode('contenido', 'Contenido', 'string', $this);
				case 'ContenidoRtf':
					return new QQNode('contenido_rtf', 'ContenidoRtf', 'string', $this);
				case 'FechaCreada':
					return new QQNode('fecha_creada', 'FechaCreada', 'QDateTime', $this);
				case 'FechaPublicada':
					return new QQNode('fecha_publicada', 'FechaPublicada', 'QDateTime', $this);
				case 'Visitas':
					return new QQNode('visitas', 'Visitas', 'integer', $this);
				case 'IdAutor':
					return new QQNode('id_autor', 'IdAutor', 'integer', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'integer', $this);
				case 'FechaAPublicar':
					return new QQNode('fecha_a_publicar', 'FechaAPublicar', 'QDateTime', $this);

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