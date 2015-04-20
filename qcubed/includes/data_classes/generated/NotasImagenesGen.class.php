<?php
	/**
	 * The abstract NotasImagenesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NotasImagenes subclass which
	 * extends this NotasImagenesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NotasImagenes class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property integer $IdNota the value for intIdNota (Not Null)
	 * @property integer $IdImagen the value for intIdImagen (Not Null)
	 * @property integer $Predeterminada the value for intPredeterminada (Not Null)
	 * @property Imagenes $IdImagenObject the value for the Imagenes object referenced by intIdImagen (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NotasImagenesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column notas_imagenes.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column notas_imagenes.id_nota
		 * @var integer intIdNota
		 */
		protected $intIdNota;
		const IdNotaDefault = null;


		/**
		 * Protected member variable that maps to the database column notas_imagenes.id_imagen
		 * @var integer intIdImagen
		 */
		protected $intIdImagen;
		const IdImagenDefault = null;


		/**
		 * Protected member variable that maps to the database column notas_imagenes.predeterminada
		 * @var integer intPredeterminada
		 */
		protected $intPredeterminada;
		const PredeterminadaDefault = null;


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
		 * in the database column notas_imagenes.id_imagen.
		 *
		 * NOTE: Always use the IdImagenObject property getter to correctly retrieve this Imagenes object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Imagenes objIdImagenObject
		 */
		protected $objIdImagenObject;





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
		 * Load a NotasImagenes from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NotasImagenes
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NotasImagenes::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NotasImagenes()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NotasImageneses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NotasImagenes[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call NotasImagenes::QueryArray to perform the LoadAll query
			try {
				return NotasImagenes::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NotasImageneses
		 * @return int
		 */
		public static function CountAll() {
			// Call NotasImagenes::QueryCount to perform the CountAll query
			return NotasImagenes::QueryCount(QQ::All());
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
			$objDatabase = NotasImagenes::GetDatabase();

			// Create/Build out the QueryBuilder object with NotasImagenes-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'notas_imagenes');
			NotasImagenes::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('notas_imagenes');

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
		 * Static Qcubed Query method to query for a single NotasImagenes object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NotasImagenes the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NotasImagenes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new NotasImagenes object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NotasImagenes::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NotasImagenes::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NotasImagenes objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NotasImagenes[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NotasImagenes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NotasImagenes::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NotasImagenes objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NotasImagenes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NotasImagenes::GetDatabase();

			$strQuery = NotasImagenes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/notasimagenes', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NotasImagenes::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NotasImagenes
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'notas_imagenes';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'id_nota', $strAliasPrefix . 'id_nota');
			$objBuilder->AddSelectItem($strTableName, 'id_imagen', $strAliasPrefix . 'id_imagen');
			$objBuilder->AddSelectItem($strTableName, 'predeterminada', $strAliasPrefix . 'predeterminada');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NotasImagenes from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NotasImagenes::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NotasImagenes
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the NotasImagenes object
			$objToReturn = new NotasImagenes();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_nota', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_nota'] : $strAliasPrefix . 'id_nota';
			$objToReturn->intIdNota = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_imagen', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_imagen'] : $strAliasPrefix . 'id_imagen';
			$objToReturn->intIdImagen = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'predeterminada', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'predeterminada'] : $strAliasPrefix . 'predeterminada';
			$objToReturn->intPredeterminada = $objDbRow->GetColumn($strAliasName, 'Integer');

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
				$strAliasPrefix = 'notas_imagenes__';

			// Check for IdImagenObject Early Binding
			$strAlias = $strAliasPrefix . 'id_imagen__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdImagenObject = Imagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_imagen__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of NotasImageneses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NotasImagenes[]
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
					$objItem = NotasImagenes::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NotasImagenes::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NotasImagenes object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NotasImagenes
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return NotasImagenes::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NotasImagenes()->Id, $intId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of NotasImagenes objects,
		 * by IdImagen Index(es)
		 * @param integer $intIdImagen
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NotasImagenes[]
		*/
		public static function LoadArrayByIdImagen($intIdImagen, $objOptionalClauses = null) {
			// Call NotasImagenes::QueryArray to perform the LoadArrayByIdImagen query
			try {
				return NotasImagenes::QueryArray(
					QQ::Equal(QQN::NotasImagenes()->IdImagen, $intIdImagen),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NotasImageneses
		 * by IdImagen Index(es)
		 * @param integer $intIdImagen
		 * @return int
		*/
		public static function CountByIdImagen($intIdImagen) {
			// Call NotasImagenes::QueryCount to perform the CountByIdImagen query
			return NotasImagenes::QueryCount(
				QQ::Equal(QQN::NotasImagenes()->IdImagen, $intIdImagen)
			);
		}
			
		/**
		 * Load an array of NotasImagenes objects,
		 * by IdNota Index(es)
		 * @param integer $intIdNota
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NotasImagenes[]
		*/
		public static function LoadArrayByIdNota($intIdNota, $objOptionalClauses = null) {
			// Call NotasImagenes::QueryArray to perform the LoadArrayByIdNota query
			try {
				return NotasImagenes::QueryArray(
					QQ::Equal(QQN::NotasImagenes()->IdNota, $intIdNota),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NotasImageneses
		 * by IdNota Index(es)
		 * @param integer $intIdNota
		 * @return int
		*/
		public static function CountByIdNota($intIdNota) {
			// Call NotasImagenes::QueryCount to perform the CountByIdNota query
			return NotasImagenes::QueryCount(
				QQ::Equal(QQN::NotasImagenes()->IdNota, $intIdNota)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this NotasImagenes
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NotasImagenes::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `notas_imagenes` (
							`id_nota`,
							`id_imagen`,
							`predeterminada`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIdNota) . ',
							' . $objDatabase->SqlVariable($this->intIdImagen) . ',
							' . $objDatabase->SqlVariable($this->intPredeterminada) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('notas_imagenes', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`notas_imagenes`
						SET
							`id_nota` = ' . $objDatabase->SqlVariable($this->intIdNota) . ',
							`id_imagen` = ' . $objDatabase->SqlVariable($this->intIdImagen) . ',
							`predeterminada` = ' . $objDatabase->SqlVariable($this->intPredeterminada) . '
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
		 * Delete this NotasImagenes
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NotasImagenes with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NotasImagenes::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`notas_imagenes`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all NotasImageneses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NotasImagenes::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`notas_imagenes`');
		}

		/**
		 * Truncate notas_imagenes table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NotasImagenes::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `notas_imagenes`');
		}

		/**
		 * Reload this NotasImagenes from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NotasImagenes object.');

			// Reload the Object
			$objReloaded = NotasImagenes::Load($this->intId);

			// Update $this's local variables to match
			$this->intIdNota = $objReloaded->intIdNota;
			$this->IdImagen = $objReloaded->IdImagen;
			$this->intPredeterminada = $objReloaded->intPredeterminada;
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

				case 'IdImagen':
					/**
					 * Gets the value for intIdImagen (Not Null)
					 * @return integer
					 */
					return $this->intIdImagen;

				case 'Predeterminada':
					/**
					 * Gets the value for intPredeterminada (Not Null)
					 * @return integer
					 */
					return $this->intPredeterminada;


				///////////////////
				// Member Objects
				///////////////////
				case 'IdImagenObject':
					/**
					 * Gets the value for the Imagenes object referenced by intIdImagen (Not Null)
					 * @return Imagenes
					 */
					try {
						if ((!$this->objIdImagenObject) && (!is_null($this->intIdImagen)))
							$this->objIdImagenObject = Imagenes::Load($this->intIdImagen);
						return $this->objIdImagenObject;
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

				case 'IdImagen':
					/**
					 * Sets the value for intIdImagen (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdImagenObject = null;
						return ($this->intIdImagen = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Predeterminada':
					/**
					 * Sets the value for intPredeterminada (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPredeterminada = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'IdImagenObject':
					/**
					 * Sets the value for the Imagenes object referenced by intIdImagen (Not Null)
					 * @param Imagenes $mixValue
					 * @return Imagenes
					 */
					if (is_null($mixValue)) {
						$this->intIdImagen = null;
						$this->objIdImagenObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Imagenes object
						try {
							$mixValue = QType::Cast($mixValue, 'Imagenes');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Imagenes object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved IdImagenObject for this NotasImagenes');

						// Update Local Member Variables
						$this->objIdImagenObject = $mixValue;
						$this->intIdImagen = $mixValue->Id;

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
			$strToReturn = '<complexType name="NotasImagenes"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="IdNota" type="xsd:int"/>';
			$strToReturn .= '<element name="IdImagenObject" type="xsd1:Imagenes"/>';
			$strToReturn .= '<element name="Predeterminada" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NotasImagenes', $strComplexTypeArray)) {
				$strComplexTypeArray['NotasImagenes'] = NotasImagenes::GetSoapComplexTypeXml();
				Imagenes::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NotasImagenes::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NotasImagenes();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'IdNota'))
				$objToReturn->intIdNota = $objSoapObject->IdNota;
			if ((property_exists($objSoapObject, 'IdImagenObject')) &&
				($objSoapObject->IdImagenObject))
				$objToReturn->IdImagenObject = Imagenes::GetObjectFromSoapObject($objSoapObject->IdImagenObject);
			if (property_exists($objSoapObject, 'Predeterminada'))
				$objToReturn->intPredeterminada = $objSoapObject->Predeterminada;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NotasImagenes::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdImagenObject)
				$objObject->objIdImagenObject = Imagenes::GetSoapObjectFromObject($objObject->objIdImagenObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdImagen = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeNotasImagenes extends QQNode {
		protected $strTableName = 'notas_imagenes';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'NotasImagenes';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'IdNota':
					return new QQNode('id_nota', 'IdNota', 'integer', $this);
				case 'IdImagen':
					return new QQNode('id_imagen', 'IdImagen', 'integer', $this);
				case 'IdImagenObject':
					return new QQNodeImagenes('id_imagen', 'IdImagenObject', 'integer', $this);
				case 'Predeterminada':
					return new QQNode('predeterminada', 'Predeterminada', 'integer', $this);

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

	class QQReverseReferenceNodeNotasImagenes extends QQReverseReferenceNode {
		protected $strTableName = 'notas_imagenes';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'NotasImagenes';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'IdNota':
					return new QQNode('id_nota', 'IdNota', 'integer', $this);
				case 'IdImagen':
					return new QQNode('id_imagen', 'IdImagen', 'integer', $this);
				case 'IdImagenObject':
					return new QQNodeImagenes('id_imagen', 'IdImagenObject', 'integer', $this);
				case 'Predeterminada':
					return new QQNode('predeterminada', 'Predeterminada', 'integer', $this);

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