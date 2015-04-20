<?php
	/**
	 * The abstract FichasImagenesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FichasImagenes subclass which
	 * extends this FichasImagenesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FichasImagenes class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property integer $IdFicha the value for intIdFicha (Not Null)
	 * @property integer $IdImagen the value for intIdImagen (Not Null)
	 * @property boolean $ImagenPrincipal the value for blnImagenPrincipal 
	 * @property Fichas $IdFichaObject the value for the Fichas object referenced by intIdFicha (Not Null)
	 * @property Imagenes $IdImagenObject the value for the Imagenes object referenced by intIdImagen (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FichasImagenesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column fichas_imagenes.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_imagenes.id_ficha
		 * @var integer intIdFicha
		 */
		protected $intIdFicha;
		const IdFichaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_imagenes.id_imagen
		 * @var integer intIdImagen
		 */
		protected $intIdImagen;
		const IdImagenDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_imagenes.imagen_principal
		 * @var boolean blnImagenPrincipal
		 */
		protected $blnImagenPrincipal;
		const ImagenPrincipalDefault = null;


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
		 * in the database column fichas_imagenes.id_ficha.
		 *
		 * NOTE: Always use the IdFichaObject property getter to correctly retrieve this Fichas object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Fichas objIdFichaObject
		 */
		protected $objIdFichaObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fichas_imagenes.id_imagen.
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
		 * Load a FichasImagenes from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasImagenes
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return FichasImagenes::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FichasImagenes()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all FichasImageneses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasImagenes[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call FichasImagenes::QueryArray to perform the LoadAll query
			try {
				return FichasImagenes::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FichasImageneses
		 * @return int
		 */
		public static function CountAll() {
			// Call FichasImagenes::QueryCount to perform the CountAll query
			return FichasImagenes::QueryCount(QQ::All());
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
			$objDatabase = FichasImagenes::GetDatabase();

			// Create/Build out the QueryBuilder object with FichasImagenes-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'fichas_imagenes');
			FichasImagenes::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('fichas_imagenes');

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
		 * Static Qcubed Query method to query for a single FichasImagenes object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FichasImagenes the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasImagenes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new FichasImagenes object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FichasImagenes::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FichasImagenes::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of FichasImagenes objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FichasImagenes[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasImagenes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FichasImagenes::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of FichasImagenes objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasImagenes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FichasImagenes::GetDatabase();

			$strQuery = FichasImagenes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/fichasimagenes', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = FichasImagenes::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FichasImagenes
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'fichas_imagenes';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'id_ficha', $strAliasPrefix . 'id_ficha');
			$objBuilder->AddSelectItem($strTableName, 'id_imagen', $strAliasPrefix . 'id_imagen');
			$objBuilder->AddSelectItem($strTableName, 'imagen_principal', $strAliasPrefix . 'imagen_principal');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FichasImagenes from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FichasImagenes::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FichasImagenes
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the FichasImagenes object
			$objToReturn = new FichasImagenes();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_ficha', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_ficha'] : $strAliasPrefix . 'id_ficha';
			$objToReturn->intIdFicha = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_imagen', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_imagen'] : $strAliasPrefix . 'id_imagen';
			$objToReturn->intIdImagen = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'imagen_principal', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'imagen_principal'] : $strAliasPrefix . 'imagen_principal';
			$objToReturn->blnImagenPrincipal = $objDbRow->GetColumn($strAliasName, 'Bit');

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
				$strAliasPrefix = 'fichas_imagenes__';

			// Check for IdFichaObject Early Binding
			$strAlias = $strAliasPrefix . 'id_ficha__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdFichaObject = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_ficha__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for IdImagenObject Early Binding
			$strAlias = $strAliasPrefix . 'id_imagen__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdImagenObject = Imagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_imagen__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of FichasImageneses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FichasImagenes[]
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
					$objItem = FichasImagenes::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FichasImagenes::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FichasImagenes object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasImagenes
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return FichasImagenes::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FichasImagenes()->Id, $intId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FichasImagenes objects,
		 * by IdFicha Index(es)
		 * @param integer $intIdFicha
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasImagenes[]
		*/
		public static function LoadArrayByIdFicha($intIdFicha, $objOptionalClauses = null) {
			// Call FichasImagenes::QueryArray to perform the LoadArrayByIdFicha query
			try {
				return FichasImagenes::QueryArray(
					QQ::Equal(QQN::FichasImagenes()->IdFicha, $intIdFicha),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FichasImageneses
		 * by IdFicha Index(es)
		 * @param integer $intIdFicha
		 * @return int
		*/
		public static function CountByIdFicha($intIdFicha) {
			// Call FichasImagenes::QueryCount to perform the CountByIdFicha query
			return FichasImagenes::QueryCount(
				QQ::Equal(QQN::FichasImagenes()->IdFicha, $intIdFicha)
			);
		}
			
		/**
		 * Load an array of FichasImagenes objects,
		 * by IdImagen Index(es)
		 * @param integer $intIdImagen
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasImagenes[]
		*/
		public static function LoadArrayByIdImagen($intIdImagen, $objOptionalClauses = null) {
			// Call FichasImagenes::QueryArray to perform the LoadArrayByIdImagen query
			try {
				return FichasImagenes::QueryArray(
					QQ::Equal(QQN::FichasImagenes()->IdImagen, $intIdImagen),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FichasImageneses
		 * by IdImagen Index(es)
		 * @param integer $intIdImagen
		 * @return int
		*/
		public static function CountByIdImagen($intIdImagen) {
			// Call FichasImagenes::QueryCount to perform the CountByIdImagen query
			return FichasImagenes::QueryCount(
				QQ::Equal(QQN::FichasImagenes()->IdImagen, $intIdImagen)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this FichasImagenes
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FichasImagenes::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `fichas_imagenes` (
							`id_ficha`,
							`id_imagen`,
							`imagen_principal`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIdFicha) . ',
							' . $objDatabase->SqlVariable($this->intIdImagen) . ',
							' . $objDatabase->SqlVariable($this->blnImagenPrincipal) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('fichas_imagenes', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`fichas_imagenes`
						SET
							`id_ficha` = ' . $objDatabase->SqlVariable($this->intIdFicha) . ',
							`id_imagen` = ' . $objDatabase->SqlVariable($this->intIdImagen) . ',
							`imagen_principal` = ' . $objDatabase->SqlVariable($this->blnImagenPrincipal) . '
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
		 * Delete this FichasImagenes
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FichasImagenes with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FichasImagenes::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_imagenes`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all FichasImageneses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FichasImagenes::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_imagenes`');
		}

		/**
		 * Truncate fichas_imagenes table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FichasImagenes::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `fichas_imagenes`');
		}

		/**
		 * Reload this FichasImagenes from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FichasImagenes object.');

			// Reload the Object
			$objReloaded = FichasImagenes::Load($this->intId);

			// Update $this's local variables to match
			$this->IdFicha = $objReloaded->IdFicha;
			$this->IdImagen = $objReloaded->IdImagen;
			$this->blnImagenPrincipal = $objReloaded->blnImagenPrincipal;
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

				case 'IdFicha':
					/**
					 * Gets the value for intIdFicha (Not Null)
					 * @return integer
					 */
					return $this->intIdFicha;

				case 'IdImagen':
					/**
					 * Gets the value for intIdImagen (Not Null)
					 * @return integer
					 */
					return $this->intIdImagen;

				case 'ImagenPrincipal':
					/**
					 * Gets the value for blnImagenPrincipal 
					 * @return boolean
					 */
					return $this->blnImagenPrincipal;


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

				case 'ImagenPrincipal':
					/**
					 * Sets the value for blnImagenPrincipal 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnImagenPrincipal = QType::Cast($mixValue, QType::Boolean));
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
							throw new QCallerException('Unable to set an unsaved IdFichaObject for this FichasImagenes');

						// Update Local Member Variables
						$this->objIdFichaObject = $mixValue;
						$this->intIdFicha = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

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
							throw new QCallerException('Unable to set an unsaved IdImagenObject for this FichasImagenes');

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
			$strToReturn = '<complexType name="FichasImagenes"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="IdFichaObject" type="xsd1:Fichas"/>';
			$strToReturn .= '<element name="IdImagenObject" type="xsd1:Imagenes"/>';
			$strToReturn .= '<element name="ImagenPrincipal" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FichasImagenes', $strComplexTypeArray)) {
				$strComplexTypeArray['FichasImagenes'] = FichasImagenes::GetSoapComplexTypeXml();
				Fichas::AlterSoapComplexTypeArray($strComplexTypeArray);
				Imagenes::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FichasImagenes::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FichasImagenes();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'IdFichaObject')) &&
				($objSoapObject->IdFichaObject))
				$objToReturn->IdFichaObject = Fichas::GetObjectFromSoapObject($objSoapObject->IdFichaObject);
			if ((property_exists($objSoapObject, 'IdImagenObject')) &&
				($objSoapObject->IdImagenObject))
				$objToReturn->IdImagenObject = Imagenes::GetObjectFromSoapObject($objSoapObject->IdImagenObject);
			if (property_exists($objSoapObject, 'ImagenPrincipal'))
				$objToReturn->blnImagenPrincipal = $objSoapObject->ImagenPrincipal;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FichasImagenes::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdFichaObject)
				$objObject->objIdFichaObject = Fichas::GetSoapObjectFromObject($objObject->objIdFichaObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdFicha = null;
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

	class QQNodeFichasImagenes extends QQNode {
		protected $strTableName = 'fichas_imagenes';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FichasImagenes';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'IdFicha':
					return new QQNode('id_ficha', 'IdFicha', 'integer', $this);
				case 'IdFichaObject':
					return new QQNodeFichas('id_ficha', 'IdFichaObject', 'integer', $this);
				case 'IdImagen':
					return new QQNode('id_imagen', 'IdImagen', 'integer', $this);
				case 'IdImagenObject':
					return new QQNodeImagenes('id_imagen', 'IdImagenObject', 'integer', $this);
				case 'ImagenPrincipal':
					return new QQNode('imagen_principal', 'ImagenPrincipal', 'boolean', $this);

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

	class QQReverseReferenceNodeFichasImagenes extends QQReverseReferenceNode {
		protected $strTableName = 'fichas_imagenes';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FichasImagenes';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'IdFicha':
					return new QQNode('id_ficha', 'IdFicha', 'integer', $this);
				case 'IdFichaObject':
					return new QQNodeFichas('id_ficha', 'IdFichaObject', 'integer', $this);
				case 'IdImagen':
					return new QQNode('id_imagen', 'IdImagen', 'integer', $this);
				case 'IdImagenObject':
					return new QQNodeImagenes('id_imagen', 'IdImagenObject', 'integer', $this);
				case 'ImagenPrincipal':
					return new QQNode('imagen_principal', 'ImagenPrincipal', 'boolean', $this);

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