<?php
	/**
	 * The abstract EncuestasGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Encuestas subclass which
	 * extends this EncuestasGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Encuestas class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Titulo the value for strTitulo (Not Null)
	 * @property string $Opcion1 the value for strOpcion1 (Not Null)
	 * @property string $Opcion2 the value for strOpcion2 (Not Null)
	 * @property string $Opcion3 the value for strOpcion3 (Not Null)
	 * @property string $Opcion4 the value for strOpcion4 (Not Null)
	 * @property string $Opcion5 the value for strOpcion5 (Not Null)
	 * @property string $Opcion6 the value for strOpcion6 (Not Null)
	 * @property integer $Valor1 the value for intValor1 (Not Null)
	 * @property integer $Valor2 the value for intValor2 (Not Null)
	 * @property integer $Valor3 the value for intValor3 (Not Null)
	 * @property integer $Valor4 the value for intValor4 (Not Null)
	 * @property integer $Valor5 the value for intValor5 (Not Null)
	 * @property integer $Valor6 the value for intValor6 (Not Null)
	 * @property integer $Estado the value for intEstado (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class EncuestasGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column encuestas.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column encuestas.titulo
		 * @var string strTitulo
		 */
		protected $strTitulo;
		const TituloMaxLength = 255;
		const TituloDefault = null;


		/**
		 * Protected member variable that maps to the database column encuestas.opcion1
		 * @var string strOpcion1
		 */
		protected $strOpcion1;
		const Opcion1MaxLength = 255;
		const Opcion1Default = null;


		/**
		 * Protected member variable that maps to the database column encuestas.opcion2
		 * @var string strOpcion2
		 */
		protected $strOpcion2;
		const Opcion2MaxLength = 255;
		const Opcion2Default = null;


		/**
		 * Protected member variable that maps to the database column encuestas.opcion3
		 * @var string strOpcion3
		 */
		protected $strOpcion3;
		const Opcion3MaxLength = 255;
		const Opcion3Default = null;


		/**
		 * Protected member variable that maps to the database column encuestas.opcion4
		 * @var string strOpcion4
		 */
		protected $strOpcion4;
		const Opcion4MaxLength = 255;
		const Opcion4Default = null;


		/**
		 * Protected member variable that maps to the database column encuestas.opcion5
		 * @var string strOpcion5
		 */
		protected $strOpcion5;
		const Opcion5MaxLength = 255;
		const Opcion5Default = null;


		/**
		 * Protected member variable that maps to the database column encuestas.opcion6
		 * @var string strOpcion6
		 */
		protected $strOpcion6;
		const Opcion6MaxLength = 255;
		const Opcion6Default = null;


		/**
		 * Protected member variable that maps to the database column encuestas.valor1
		 * @var integer intValor1
		 */
		protected $intValor1;
		const Valor1Default = null;


		/**
		 * Protected member variable that maps to the database column encuestas.valor2
		 * @var integer intValor2
		 */
		protected $intValor2;
		const Valor2Default = null;


		/**
		 * Protected member variable that maps to the database column encuestas.valor3
		 * @var integer intValor3
		 */
		protected $intValor3;
		const Valor3Default = null;


		/**
		 * Protected member variable that maps to the database column encuestas.valor4
		 * @var integer intValor4
		 */
		protected $intValor4;
		const Valor4Default = null;


		/**
		 * Protected member variable that maps to the database column encuestas.valor5
		 * @var integer intValor5
		 */
		protected $intValor5;
		const Valor5Default = null;


		/**
		 * Protected member variable that maps to the database column encuestas.valor6
		 * @var integer intValor6
		 */
		protected $intValor6;
		const Valor6Default = null;


		/**
		 * Protected member variable that maps to the database column encuestas.estado
		 * @var integer intEstado
		 */
		protected $intEstado;
		const EstadoDefault = null;


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
		 * Load a Encuestas from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Encuestas
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Encuestas::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Encuestas()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Encuestases
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Encuestas[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Encuestas::QueryArray to perform the LoadAll query
			try {
				return Encuestas::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Encuestases
		 * @return int
		 */
		public static function CountAll() {
			// Call Encuestas::QueryCount to perform the CountAll query
			return Encuestas::QueryCount(QQ::All());
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
			$objDatabase = Encuestas::GetDatabase();

			// Create/Build out the QueryBuilder object with Encuestas-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'encuestas');
			Encuestas::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('encuestas');

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
		 * Static Qcubed Query method to query for a single Encuestas object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Encuestas the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Encuestas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Encuestas object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Encuestas::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Encuestas::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Encuestas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Encuestas[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Encuestas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Encuestas::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Encuestas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Encuestas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Encuestas::GetDatabase();

			$strQuery = Encuestas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/encuestas', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Encuestas::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Encuestas
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'encuestas';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'titulo', $strAliasPrefix . 'titulo');
			$objBuilder->AddSelectItem($strTableName, 'opcion1', $strAliasPrefix . 'opcion1');
			$objBuilder->AddSelectItem($strTableName, 'opcion2', $strAliasPrefix . 'opcion2');
			$objBuilder->AddSelectItem($strTableName, 'opcion3', $strAliasPrefix . 'opcion3');
			$objBuilder->AddSelectItem($strTableName, 'opcion4', $strAliasPrefix . 'opcion4');
			$objBuilder->AddSelectItem($strTableName, 'opcion5', $strAliasPrefix . 'opcion5');
			$objBuilder->AddSelectItem($strTableName, 'opcion6', $strAliasPrefix . 'opcion6');
			$objBuilder->AddSelectItem($strTableName, 'valor1', $strAliasPrefix . 'valor1');
			$objBuilder->AddSelectItem($strTableName, 'valor2', $strAliasPrefix . 'valor2');
			$objBuilder->AddSelectItem($strTableName, 'valor3', $strAliasPrefix . 'valor3');
			$objBuilder->AddSelectItem($strTableName, 'valor4', $strAliasPrefix . 'valor4');
			$objBuilder->AddSelectItem($strTableName, 'valor5', $strAliasPrefix . 'valor5');
			$objBuilder->AddSelectItem($strTableName, 'valor6', $strAliasPrefix . 'valor6');
			$objBuilder->AddSelectItem($strTableName, 'estado', $strAliasPrefix . 'estado');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Encuestas from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Encuestas::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Encuestas
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Encuestas object
			$objToReturn = new Encuestas();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'titulo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'titulo'] : $strAliasPrefix . 'titulo';
			$objToReturn->strTitulo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'opcion1', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'opcion1'] : $strAliasPrefix . 'opcion1';
			$objToReturn->strOpcion1 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'opcion2', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'opcion2'] : $strAliasPrefix . 'opcion2';
			$objToReturn->strOpcion2 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'opcion3', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'opcion3'] : $strAliasPrefix . 'opcion3';
			$objToReturn->strOpcion3 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'opcion4', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'opcion4'] : $strAliasPrefix . 'opcion4';
			$objToReturn->strOpcion4 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'opcion5', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'opcion5'] : $strAliasPrefix . 'opcion5';
			$objToReturn->strOpcion5 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'opcion6', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'opcion6'] : $strAliasPrefix . 'opcion6';
			$objToReturn->strOpcion6 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'valor1', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'valor1'] : $strAliasPrefix . 'valor1';
			$objToReturn->intValor1 = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'valor2', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'valor2'] : $strAliasPrefix . 'valor2';
			$objToReturn->intValor2 = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'valor3', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'valor3'] : $strAliasPrefix . 'valor3';
			$objToReturn->intValor3 = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'valor4', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'valor4'] : $strAliasPrefix . 'valor4';
			$objToReturn->intValor4 = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'valor5', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'valor5'] : $strAliasPrefix . 'valor5';
			$objToReturn->intValor5 = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'valor6', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'valor6'] : $strAliasPrefix . 'valor6';
			$objToReturn->intValor6 = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'estado'] : $strAliasPrefix . 'estado';
			$objToReturn->intEstado = $objDbRow->GetColumn($strAliasName, 'Integer');

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
				$strAliasPrefix = 'encuestas__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Encuestases from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Encuestas[]
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
					$objItem = Encuestas::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Encuestas::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Encuestas object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Encuestas
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Encuestas::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Encuestas()->Id, $intId)
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
		 * Save this Encuestas
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Encuestas::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `encuestas` (
							`titulo`,
							`opcion1`,
							`opcion2`,
							`opcion3`,
							`opcion4`,
							`opcion5`,
							`opcion6`,
							`valor1`,
							`valor2`,
							`valor3`,
							`valor4`,
							`valor5`,
							`valor6`,
							`estado`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strTitulo) . ',
							' . $objDatabase->SqlVariable($this->strOpcion1) . ',
							' . $objDatabase->SqlVariable($this->strOpcion2) . ',
							' . $objDatabase->SqlVariable($this->strOpcion3) . ',
							' . $objDatabase->SqlVariable($this->strOpcion4) . ',
							' . $objDatabase->SqlVariable($this->strOpcion5) . ',
							' . $objDatabase->SqlVariable($this->strOpcion6) . ',
							' . $objDatabase->SqlVariable($this->intValor1) . ',
							' . $objDatabase->SqlVariable($this->intValor2) . ',
							' . $objDatabase->SqlVariable($this->intValor3) . ',
							' . $objDatabase->SqlVariable($this->intValor4) . ',
							' . $objDatabase->SqlVariable($this->intValor5) . ',
							' . $objDatabase->SqlVariable($this->intValor6) . ',
							' . $objDatabase->SqlVariable($this->intEstado) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('encuestas', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`encuestas`
						SET
							`titulo` = ' . $objDatabase->SqlVariable($this->strTitulo) . ',
							`opcion1` = ' . $objDatabase->SqlVariable($this->strOpcion1) . ',
							`opcion2` = ' . $objDatabase->SqlVariable($this->strOpcion2) . ',
							`opcion3` = ' . $objDatabase->SqlVariable($this->strOpcion3) . ',
							`opcion4` = ' . $objDatabase->SqlVariable($this->strOpcion4) . ',
							`opcion5` = ' . $objDatabase->SqlVariable($this->strOpcion5) . ',
							`opcion6` = ' . $objDatabase->SqlVariable($this->strOpcion6) . ',
							`valor1` = ' . $objDatabase->SqlVariable($this->intValor1) . ',
							`valor2` = ' . $objDatabase->SqlVariable($this->intValor2) . ',
							`valor3` = ' . $objDatabase->SqlVariable($this->intValor3) . ',
							`valor4` = ' . $objDatabase->SqlVariable($this->intValor4) . ',
							`valor5` = ' . $objDatabase->SqlVariable($this->intValor5) . ',
							`valor6` = ' . $objDatabase->SqlVariable($this->intValor6) . ',
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
		 * Delete this Encuestas
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Encuestas with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Encuestas::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`encuestas`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all Encuestases
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Encuestas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`encuestas`');
		}

		/**
		 * Truncate encuestas table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Encuestas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `encuestas`');
		}

		/**
		 * Reload this Encuestas from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Encuestas object.');

			// Reload the Object
			$objReloaded = Encuestas::Load($this->intId);

			// Update $this's local variables to match
			$this->strTitulo = $objReloaded->strTitulo;
			$this->strOpcion1 = $objReloaded->strOpcion1;
			$this->strOpcion2 = $objReloaded->strOpcion2;
			$this->strOpcion3 = $objReloaded->strOpcion3;
			$this->strOpcion4 = $objReloaded->strOpcion4;
			$this->strOpcion5 = $objReloaded->strOpcion5;
			$this->strOpcion6 = $objReloaded->strOpcion6;
			$this->intValor1 = $objReloaded->intValor1;
			$this->intValor2 = $objReloaded->intValor2;
			$this->intValor3 = $objReloaded->intValor3;
			$this->intValor4 = $objReloaded->intValor4;
			$this->intValor5 = $objReloaded->intValor5;
			$this->intValor6 = $objReloaded->intValor6;
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

				case 'Opcion1':
					/**
					 * Gets the value for strOpcion1 (Not Null)
					 * @return string
					 */
					return $this->strOpcion1;

				case 'Opcion2':
					/**
					 * Gets the value for strOpcion2 (Not Null)
					 * @return string
					 */
					return $this->strOpcion2;

				case 'Opcion3':
					/**
					 * Gets the value for strOpcion3 (Not Null)
					 * @return string
					 */
					return $this->strOpcion3;

				case 'Opcion4':
					/**
					 * Gets the value for strOpcion4 (Not Null)
					 * @return string
					 */
					return $this->strOpcion4;

				case 'Opcion5':
					/**
					 * Gets the value for strOpcion5 (Not Null)
					 * @return string
					 */
					return $this->strOpcion5;

				case 'Opcion6':
					/**
					 * Gets the value for strOpcion6 (Not Null)
					 * @return string
					 */
					return $this->strOpcion6;

				case 'Valor1':
					/**
					 * Gets the value for intValor1 (Not Null)
					 * @return integer
					 */
					return $this->intValor1;

				case 'Valor2':
					/**
					 * Gets the value for intValor2 (Not Null)
					 * @return integer
					 */
					return $this->intValor2;

				case 'Valor3':
					/**
					 * Gets the value for intValor3 (Not Null)
					 * @return integer
					 */
					return $this->intValor3;

				case 'Valor4':
					/**
					 * Gets the value for intValor4 (Not Null)
					 * @return integer
					 */
					return $this->intValor4;

				case 'Valor5':
					/**
					 * Gets the value for intValor5 (Not Null)
					 * @return integer
					 */
					return $this->intValor5;

				case 'Valor6':
					/**
					 * Gets the value for intValor6 (Not Null)
					 * @return integer
					 */
					return $this->intValor6;

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

				case 'Opcion1':
					/**
					 * Sets the value for strOpcion1 (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strOpcion1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Opcion2':
					/**
					 * Sets the value for strOpcion2 (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strOpcion2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Opcion3':
					/**
					 * Sets the value for strOpcion3 (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strOpcion3 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Opcion4':
					/**
					 * Sets the value for strOpcion4 (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strOpcion4 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Opcion5':
					/**
					 * Sets the value for strOpcion5 (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strOpcion5 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Opcion6':
					/**
					 * Sets the value for strOpcion6 (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strOpcion6 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Valor1':
					/**
					 * Sets the value for intValor1 (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intValor1 = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Valor2':
					/**
					 * Sets the value for intValor2 (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intValor2 = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Valor3':
					/**
					 * Sets the value for intValor3 (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intValor3 = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Valor4':
					/**
					 * Sets the value for intValor4 (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intValor4 = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Valor5':
					/**
					 * Sets the value for intValor5 (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intValor5 = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Valor6':
					/**
					 * Sets the value for intValor6 (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intValor6 = QType::Cast($mixValue, QType::Integer));
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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Encuestas"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Titulo" type="xsd:string"/>';
			$strToReturn .= '<element name="Opcion1" type="xsd:string"/>';
			$strToReturn .= '<element name="Opcion2" type="xsd:string"/>';
			$strToReturn .= '<element name="Opcion3" type="xsd:string"/>';
			$strToReturn .= '<element name="Opcion4" type="xsd:string"/>';
			$strToReturn .= '<element name="Opcion5" type="xsd:string"/>';
			$strToReturn .= '<element name="Opcion6" type="xsd:string"/>';
			$strToReturn .= '<element name="Valor1" type="xsd:int"/>';
			$strToReturn .= '<element name="Valor2" type="xsd:int"/>';
			$strToReturn .= '<element name="Valor3" type="xsd:int"/>';
			$strToReturn .= '<element name="Valor4" type="xsd:int"/>';
			$strToReturn .= '<element name="Valor5" type="xsd:int"/>';
			$strToReturn .= '<element name="Valor6" type="xsd:int"/>';
			$strToReturn .= '<element name="Estado" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Encuestas', $strComplexTypeArray)) {
				$strComplexTypeArray['Encuestas'] = Encuestas::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Encuestas::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Encuestas();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Titulo'))
				$objToReturn->strTitulo = $objSoapObject->Titulo;
			if (property_exists($objSoapObject, 'Opcion1'))
				$objToReturn->strOpcion1 = $objSoapObject->Opcion1;
			if (property_exists($objSoapObject, 'Opcion2'))
				$objToReturn->strOpcion2 = $objSoapObject->Opcion2;
			if (property_exists($objSoapObject, 'Opcion3'))
				$objToReturn->strOpcion3 = $objSoapObject->Opcion3;
			if (property_exists($objSoapObject, 'Opcion4'))
				$objToReturn->strOpcion4 = $objSoapObject->Opcion4;
			if (property_exists($objSoapObject, 'Opcion5'))
				$objToReturn->strOpcion5 = $objSoapObject->Opcion5;
			if (property_exists($objSoapObject, 'Opcion6'))
				$objToReturn->strOpcion6 = $objSoapObject->Opcion6;
			if (property_exists($objSoapObject, 'Valor1'))
				$objToReturn->intValor1 = $objSoapObject->Valor1;
			if (property_exists($objSoapObject, 'Valor2'))
				$objToReturn->intValor2 = $objSoapObject->Valor2;
			if (property_exists($objSoapObject, 'Valor3'))
				$objToReturn->intValor3 = $objSoapObject->Valor3;
			if (property_exists($objSoapObject, 'Valor4'))
				$objToReturn->intValor4 = $objSoapObject->Valor4;
			if (property_exists($objSoapObject, 'Valor5'))
				$objToReturn->intValor5 = $objSoapObject->Valor5;
			if (property_exists($objSoapObject, 'Valor6'))
				$objToReturn->intValor6 = $objSoapObject->Valor6;
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
				array_push($objArrayToReturn, Encuestas::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeEncuestas extends QQNode {
		protected $strTableName = 'encuestas';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Encuestas';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Titulo':
					return new QQNode('titulo', 'Titulo', 'string', $this);
				case 'Opcion1':
					return new QQNode('opcion1', 'Opcion1', 'string', $this);
				case 'Opcion2':
					return new QQNode('opcion2', 'Opcion2', 'string', $this);
				case 'Opcion3':
					return new QQNode('opcion3', 'Opcion3', 'string', $this);
				case 'Opcion4':
					return new QQNode('opcion4', 'Opcion4', 'string', $this);
				case 'Opcion5':
					return new QQNode('opcion5', 'Opcion5', 'string', $this);
				case 'Opcion6':
					return new QQNode('opcion6', 'Opcion6', 'string', $this);
				case 'Valor1':
					return new QQNode('valor1', 'Valor1', 'integer', $this);
				case 'Valor2':
					return new QQNode('valor2', 'Valor2', 'integer', $this);
				case 'Valor3':
					return new QQNode('valor3', 'Valor3', 'integer', $this);
				case 'Valor4':
					return new QQNode('valor4', 'Valor4', 'integer', $this);
				case 'Valor5':
					return new QQNode('valor5', 'Valor5', 'integer', $this);
				case 'Valor6':
					return new QQNode('valor6', 'Valor6', 'integer', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'integer', $this);

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

	class QQReverseReferenceNodeEncuestas extends QQReverseReferenceNode {
		protected $strTableName = 'encuestas';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Encuestas';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Titulo':
					return new QQNode('titulo', 'Titulo', 'string', $this);
				case 'Opcion1':
					return new QQNode('opcion1', 'Opcion1', 'string', $this);
				case 'Opcion2':
					return new QQNode('opcion2', 'Opcion2', 'string', $this);
				case 'Opcion3':
					return new QQNode('opcion3', 'Opcion3', 'string', $this);
				case 'Opcion4':
					return new QQNode('opcion4', 'Opcion4', 'string', $this);
				case 'Opcion5':
					return new QQNode('opcion5', 'Opcion5', 'string', $this);
				case 'Opcion6':
					return new QQNode('opcion6', 'Opcion6', 'string', $this);
				case 'Valor1':
					return new QQNode('valor1', 'Valor1', 'integer', $this);
				case 'Valor2':
					return new QQNode('valor2', 'Valor2', 'integer', $this);
				case 'Valor3':
					return new QQNode('valor3', 'Valor3', 'integer', $this);
				case 'Valor4':
					return new QQNode('valor4', 'Valor4', 'integer', $this);
				case 'Valor5':
					return new QQNode('valor5', 'Valor5', 'integer', $this);
				case 'Valor6':
					return new QQNode('valor6', 'Valor6', 'integer', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'integer', $this);

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