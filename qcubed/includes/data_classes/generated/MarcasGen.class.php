<?php
	/**
	 * The abstract MarcasGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Marcas subclass which
	 * extends this MarcasGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Marcas class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property-read Fichas $_FichasAsIdMarca the value for the private _objFichasAsIdMarca (Read-Only) if set due to an expansion on the fichas.id_marca reverse relationship
	 * @property-read Fichas[] $_FichasAsIdMarcaArray the value for the private _objFichasAsIdMarcaArray (Read-Only) if set due to an ExpandAsArray on the fichas.id_marca reverse relationship
	 * @property-read Modelo $_ModeloAsIdMarca the value for the private _objModeloAsIdMarca (Read-Only) if set due to an expansion on the modelo.id_marca reverse relationship
	 * @property-read Modelo[] $_ModeloAsIdMarcaArray the value for the private _objModeloAsIdMarcaArray (Read-Only) if set due to an ExpandAsArray on the modelo.id_marca reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class MarcasGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column marcas.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column marcas.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 255;
		const NombreDefault = null;


		/**
		 * Private member variable that stores a reference to a single FichasAsIdMarca object
		 * (of type Fichas), if this Marcas object was restored with
		 * an expansion on the fichas association table.
		 * @var Fichas _objFichasAsIdMarca;
		 */
		private $_objFichasAsIdMarca;

		/**
		 * Private member variable that stores a reference to an array of FichasAsIdMarca objects
		 * (of type Fichas[]), if this Marcas object was restored with
		 * an ExpandAsArray on the fichas association table.
		 * @var Fichas[] _objFichasAsIdMarcaArray;
		 */
		private $_objFichasAsIdMarcaArray = array();

		/**
		 * Private member variable that stores a reference to a single ModeloAsIdMarca object
		 * (of type Modelo), if this Marcas object was restored with
		 * an expansion on the modelo association table.
		 * @var Modelo _objModeloAsIdMarca;
		 */
		private $_objModeloAsIdMarca;

		/**
		 * Private member variable that stores a reference to an array of ModeloAsIdMarca objects
		 * (of type Modelo[]), if this Marcas object was restored with
		 * an ExpandAsArray on the modelo association table.
		 * @var Modelo[] _objModeloAsIdMarcaArray;
		 */
		private $_objModeloAsIdMarcaArray = array();

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
		 * Load a Marcas from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Marcas
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Marcas::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Marcas()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Marcases
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Marcas[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Marcas::QueryArray to perform the LoadAll query
			try {
				return Marcas::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Marcases
		 * @return int
		 */
		public static function CountAll() {
			// Call Marcas::QueryCount to perform the CountAll query
			return Marcas::QueryCount(QQ::All());
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
			$objDatabase = Marcas::GetDatabase();

			// Create/Build out the QueryBuilder object with Marcas-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'marcas');
			Marcas::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('marcas');

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
//            echo $strQuery;

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
		 * Static Qcubed Query method to query for a single Marcas object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Marcas the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Marcas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Marcas object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Marcas::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Marcas::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Marcas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Marcas[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Marcas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Marcas::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Marcas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Marcas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Marcas::GetDatabase();

			$strQuery = Marcas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/marcas', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Marcas::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Marcas
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'marcas';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Marcas from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Marcas::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Marcas
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
							$strAliasPrefix = 'marcas__';


						// Expanding reverse references: FichasAsIdMarca
						$strAlias = $strAliasPrefix . 'fichasasidmarca__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFichasAsIdMarcaArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFichasAsIdMarcaArray;
								$objChildItem = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasidmarca__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFichasAsIdMarcaArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFichasAsIdMarcaArray[] = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasidmarca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ModeloAsIdMarca
						$strAlias = $strAliasPrefix . 'modeloasidmarca__id_modelo';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objModeloAsIdMarcaArray)) {
								$objPreviousChildItems = $objPreviousItem->_objModeloAsIdMarcaArray;
								$objChildItem = Modelo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'modeloasidmarca__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objModeloAsIdMarcaArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objModeloAsIdMarcaArray[] = Modelo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'modeloasidmarca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'marcas__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Marcas object
			$objToReturn = new Marcas();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
						continue;
					}
					if (array_diff($objPreviousItem->_objFichasAsIdMarcaArray, $objToReturn->_objFichasAsIdMarcaArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objModeloAsIdMarcaArray, $objToReturn->_objModeloAsIdMarcaArray) != null) {
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
				$strAliasPrefix = 'marcas__';




			// Check for FichasAsIdMarca Virtual Binding
			$strAlias = $strAliasPrefix . 'fichasasidmarca__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFichasAsIdMarcaArray[] = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasidmarca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFichasAsIdMarca = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasidmarca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ModeloAsIdMarca Virtual Binding
			$strAlias = $strAliasPrefix . 'modeloasidmarca__id_modelo';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objModeloAsIdMarcaArray[] = Modelo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'modeloasidmarca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objModeloAsIdMarca = Modelo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'modeloasidmarca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Marcases from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Marcas[]
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
					$objItem = Marcas::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Marcas::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Marcas object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Marcas
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Marcas::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Marcas()->Id, $intId)
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
		 * Save this Marcas
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `marcas` (
							`nombre`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('marcas', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`marcas`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . '
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
		 * Delete this Marcas
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Marcas with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`marcas`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all Marcases
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`marcas`');
		}

		/**
		 * Truncate marcas table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `marcas`');
		}

		/**
		 * Reload this Marcas from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Marcas object.');

			// Reload the Object
			$objReloaded = Marcas::Load($this->intId);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
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

				case 'Nombre':
					/**
					 * Gets the value for strNombre (Not Null)
					 * @return string
					 */
					return $this->strNombre;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_FichasAsIdMarca':
					/**
					 * Gets the value for the private _objFichasAsIdMarca (Read-Only)
					 * if set due to an expansion on the fichas.id_marca reverse relationship
					 * @return Fichas
					 */
					return $this->_objFichasAsIdMarca;

				case '_FichasAsIdMarcaArray':
					/**
					 * Gets the value for the private _objFichasAsIdMarcaArray (Read-Only)
					 * if set due to an ExpandAsArray on the fichas.id_marca reverse relationship
					 * @return Fichas[]
					 */
					return (array) $this->_objFichasAsIdMarcaArray;

				case '_ModeloAsIdMarca':
					/**
					 * Gets the value for the private _objModeloAsIdMarca (Read-Only)
					 * if set due to an expansion on the modelo.id_marca reverse relationship
					 * @return Modelo
					 */
					return $this->_objModeloAsIdMarca;

				case '_ModeloAsIdMarcaArray':
					/**
					 * Gets the value for the private _objModeloAsIdMarcaArray (Read-Only)
					 * if set due to an ExpandAsArray on the modelo.id_marca reverse relationship
					 * @return Modelo[]
					 */
					return (array) $this->_objModeloAsIdMarcaArray;


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

			
		
		// Related Objects' Methods for FichasAsIdMarca
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FichasesAsIdMarca as an array of Fichas objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fichas[]
		*/ 
		public function GetFichasAsIdMarcaArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Fichas::LoadArrayByIdMarca($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FichasesAsIdMarca
		 * @return int
		*/ 
		public function CountFichasesAsIdMarca() {
			if ((is_null($this->intId)))
				return 0;

			return Fichas::CountByIdMarca($this->intId);
		}

		/**
		 * Associates a FichasAsIdMarca
		 * @param Fichas $objFichas
		 * @return void
		*/ 
		public function AssociateFichasAsIdMarca(Fichas $objFichas) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasAsIdMarca on this unsaved Marcas.');
			if ((is_null($objFichas->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasAsIdMarca on this Marcas with an unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas`
				SET
					`id_marca` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichas->Id) . '
			');
		}

		/**
		 * Unassociates a FichasAsIdMarca
		 * @param Fichas $objFichas
		 * @return void
		*/ 
		public function UnassociateFichasAsIdMarca(Fichas $objFichas) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsIdMarca on this unsaved Marcas.');
			if ((is_null($objFichas->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsIdMarca on this Marcas with an unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas`
				SET
					`id_marca` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichas->Id) . ' AND
					`id_marca` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all FichasesAsIdMarca
		 * @return void
		*/ 
		public function UnassociateAllFichasesAsIdMarca() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsIdMarca on this unsaved Marcas.');

			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas`
				SET
					`id_marca` = null
				WHERE
					`id_marca` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FichasAsIdMarca
		 * @param Fichas $objFichas
		 * @return void
		*/ 
		public function DeleteAssociatedFichasAsIdMarca(Fichas $objFichas) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsIdMarca on this unsaved Marcas.');
			if ((is_null($objFichas->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsIdMarca on this Marcas with an unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichas->Id) . ' AND
					`id_marca` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated FichasesAsIdMarca
		 * @return void
		*/ 
		public function DeleteAllFichasesAsIdMarca() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsIdMarca on this unsaved Marcas.');

			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas`
				WHERE
					`id_marca` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for ModeloAsIdMarca
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ModelosAsIdMarca as an array of Modelo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Modelo[]
		*/ 
		public function GetModeloAsIdMarcaArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Modelo::LoadArrayByIdMarca($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ModelosAsIdMarca
		 * @return int
		*/ 
		public function CountModelosAsIdMarca() {
			if ((is_null($this->intId)))
				return 0;

			return Modelo::CountByIdMarca($this->intId);
		}

		/**
		 * Associates a ModeloAsIdMarca
		 * @param Modelo $objModelo
		 * @return void
		*/ 
		public function AssociateModeloAsIdMarca(Modelo $objModelo) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateModeloAsIdMarca on this unsaved Marcas.');
			if ((is_null($objModelo->IdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateModeloAsIdMarca on this Marcas with an unsaved Modelo.');

			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`modelo`
				SET
					`id_marca` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id_modelo` = ' . $objDatabase->SqlVariable($objModelo->IdModelo) . '
			');
		}

		/**
		 * Unassociates a ModeloAsIdMarca
		 * @param Modelo $objModelo
		 * @return void
		*/ 
		public function UnassociateModeloAsIdMarca(Modelo $objModelo) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModeloAsIdMarca on this unsaved Marcas.');
			if ((is_null($objModelo->IdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModeloAsIdMarca on this Marcas with an unsaved Modelo.');

			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`modelo`
				SET
					`id_marca` = null
				WHERE
					`id_modelo` = ' . $objDatabase->SqlVariable($objModelo->IdModelo) . ' AND
					`id_marca` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all ModelosAsIdMarca
		 * @return void
		*/ 
		public function UnassociateAllModelosAsIdMarca() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModeloAsIdMarca on this unsaved Marcas.');

			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`modelo`
				SET
					`id_marca` = null
				WHERE
					`id_marca` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ModeloAsIdMarca
		 * @param Modelo $objModelo
		 * @return void
		*/ 
		public function DeleteAssociatedModeloAsIdMarca(Modelo $objModelo) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModeloAsIdMarca on this unsaved Marcas.');
			if ((is_null($objModelo->IdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModeloAsIdMarca on this Marcas with an unsaved Modelo.');

			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`modelo`
				WHERE
					`id_modelo` = ' . $objDatabase->SqlVariable($objModelo->IdModelo) . ' AND
					`id_marca` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated ModelosAsIdMarca
		 * @return void
		*/ 
		public function DeleteAllModelosAsIdMarca() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModeloAsIdMarca on this unsaved Marcas.');

			// Get the Database Object for this Class
			$objDatabase = Marcas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`modelo`
				WHERE
					`id_marca` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Marcas"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Marcas', $strComplexTypeArray)) {
				$strComplexTypeArray['Marcas'] = Marcas::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Marcas::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Marcas();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Marcas::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeMarcas extends QQNode {
		protected $strTableName = 'marcas';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Marcas';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'FichasAsIdMarca':
					return new QQReverseReferenceNodeFichas($this, 'fichasasidmarca', 'reverse_reference', 'id_marca');
				case 'ModeloAsIdMarca':
					return new QQReverseReferenceNodeModelo($this, 'modeloasidmarca', 'reverse_reference', 'id_marca');

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

	class QQReverseReferenceNodeMarcas extends QQReverseReferenceNode {
		protected $strTableName = 'marcas';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Marcas';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'FichasAsIdMarca':
					return new QQReverseReferenceNodeFichas($this, 'fichasasidmarca', 'reverse_reference', 'id_marca');
				case 'ModeloAsIdMarca':
					return new QQReverseReferenceNodeModelo($this, 'modeloasidmarca', 'reverse_reference', 'id_marca');

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