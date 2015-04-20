<?php
	/**
	 * The abstract ModeloGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Modelo subclass which
	 * extends this ModeloGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Modelo class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdModelo the value for intIdModelo (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property integer $IdMarca the value for intIdMarca (Not Null)
	 * @property integer $IdPais the value for intIdPais (Not Null)
	 * @property Marcas $IdMarcaObject the value for the Marcas object referenced by intIdMarca (Not Null)
	 * @property Paises $IdPaisObject the value for the Paises object referenced by intIdPais (Not Null)
	 * @property-read Fichas $_FichasAsId the value for the private _objFichasAsId (Read-Only) if set due to an expansion on the fichas.id_modelo reverse relationship
	 * @property-read Fichas[] $_FichasAsIdArray the value for the private _objFichasAsIdArray (Read-Only) if set due to an ExpandAsArray on the fichas.id_modelo reverse relationship
	 * @property-read Version $_VersionAsId the value for the private _objVersionAsId (Read-Only) if set due to an expansion on the version.id_modelo reverse relationship
	 * @property-read Version[] $_VersionAsIdArray the value for the private _objVersionAsIdArray (Read-Only) if set due to an ExpandAsArray on the version.id_modelo reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ModeloGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column modelo.id_modelo
		 * @var integer intIdModelo
		 */
		protected $intIdModelo;
		const IdModeloDefault = null;


		/**
		 * Protected member variable that maps to the database column modelo.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 255;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column modelo.id_marca
		 * @var integer intIdMarca
		 */
		protected $intIdMarca;
		const IdMarcaDefault = null;


		/**
		 * Protected member variable that maps to the database column modelo.id_pais
		 * @var integer intIdPais
		 */
		protected $intIdPais;
		const IdPaisDefault = null;


		/**
		 * Private member variable that stores a reference to a single FichasAsId object
		 * (of type Fichas), if this Modelo object was restored with
		 * an expansion on the fichas association table.
		 * @var Fichas _objFichasAsId;
		 */
		private $_objFichasAsId;

		/**
		 * Private member variable that stores a reference to an array of FichasAsId objects
		 * (of type Fichas[]), if this Modelo object was restored with
		 * an ExpandAsArray on the fichas association table.
		 * @var Fichas[] _objFichasAsIdArray;
		 */
		private $_objFichasAsIdArray = array();

		/**
		 * Private member variable that stores a reference to a single VersionAsId object
		 * (of type Version), if this Modelo object was restored with
		 * an expansion on the version association table.
		 * @var Version _objVersionAsId;
		 */
		private $_objVersionAsId;

		/**
		 * Private member variable that stores a reference to an array of VersionAsId objects
		 * (of type Version[]), if this Modelo object was restored with
		 * an ExpandAsArray on the version association table.
		 * @var Version[] _objVersionAsIdArray;
		 */
		private $_objVersionAsIdArray = array();

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
		 * in the database column modelo.id_marca.
		 *
		 * NOTE: Always use the IdMarcaObject property getter to correctly retrieve this Marcas object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Marcas objIdMarcaObject
		 */
		protected $objIdMarcaObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column modelo.id_pais.
		 *
		 * NOTE: Always use the IdPaisObject property getter to correctly retrieve this Paises object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Paises objIdPaisObject
		 */
		protected $objIdPaisObject;





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
		 * Load a Modelo from PK Info
		 * @param integer $intIdModelo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Modelo
		 */
		public static function Load($intIdModelo, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Modelo::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Modelo()->IdModelo, $intIdModelo)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Modelos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Modelo[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Modelo::QueryArray to perform the LoadAll query
			try {
				return Modelo::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Modelos
		 * @return int
		 */
		public static function CountAll() {
			// Call Modelo::QueryCount to perform the CountAll query
			return Modelo::QueryCount(QQ::All());
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
			$objDatabase = Modelo::GetDatabase();

			// Create/Build out the QueryBuilder object with Modelo-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'modelo');
			Modelo::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('modelo');

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
		 * Static Qcubed Query method to query for a single Modelo object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Modelo the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Modelo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Modelo object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Modelo::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Modelo::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Modelo objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Modelo[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Modelo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Modelo::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Modelo objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Modelo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Modelo::GetDatabase();

			$strQuery = Modelo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/modelo', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Modelo::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Modelo
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'modelo';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_modelo', $strAliasPrefix . 'id_modelo');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'id_marca', $strAliasPrefix . 'id_marca');
			$objBuilder->AddSelectItem($strTableName, 'id_pais', $strAliasPrefix . 'id_pais');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Modelo from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Modelo::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Modelo
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id_modelo';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdModelo == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'modelo__';


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

						// Expanding reverse references: VersionAsId
						$strAlias = $strAliasPrefix . 'versionasid__id_version';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVersionAsIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVersionAsIdArray;
								$objChildItem = Version::InstantiateDbRow($objDbRow, $strAliasPrefix . 'versionasid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVersionAsIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVersionAsIdArray[] = Version::InstantiateDbRow($objDbRow, $strAliasPrefix . 'versionasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'modelo__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Modelo object
			$objToReturn = new Modelo();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_modelo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_modelo'] : $strAliasPrefix . 'id_modelo';
			$objToReturn->intIdModelo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_marca', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_marca'] : $strAliasPrefix . 'id_marca';
			$objToReturn->intIdMarca = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_pais', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_pais'] : $strAliasPrefix . 'id_pais';
			$objToReturn->intIdPais = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdModelo != $objPreviousItem->IdModelo) {
						continue;
					}
					if (array_diff($objPreviousItem->_objFichasAsIdArray, $objToReturn->_objFichasAsIdArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objVersionAsIdArray, $objToReturn->_objVersionAsIdArray) != null) {
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
				$strAliasPrefix = 'modelo__';

			// Check for IdMarcaObject Early Binding
			$strAlias = $strAliasPrefix . 'id_marca__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdMarcaObject = Marcas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_marca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for IdPaisObject Early Binding
			$strAlias = $strAliasPrefix . 'id_pais__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdPaisObject = Paises::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_pais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for FichasAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'fichasasid__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFichasAsIdArray[] = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFichasAsId = Fichas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VersionAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'versionasid__id_version';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objVersionAsIdArray[] = Version::InstantiateDbRow($objDbRow, $strAliasPrefix . 'versionasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVersionAsId = Version::InstantiateDbRow($objDbRow, $strAliasPrefix . 'versionasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Modelos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Modelo[]
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
					$objItem = Modelo::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Modelo::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Modelo object,
		 * by IdModelo Index(es)
		 * @param integer $intIdModelo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Modelo
		*/
		public static function LoadByIdModelo($intIdModelo, $objOptionalClauses = null) {
			return Modelo::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Modelo()->IdModelo, $intIdModelo)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Modelo objects,
		 * by IdMarca Index(es)
		 * @param integer $intIdMarca
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Modelo[]
		*/
		public static function LoadArrayByIdMarca($intIdMarca, $objOptionalClauses = null) {
			// Call Modelo::QueryArray to perform the LoadArrayByIdMarca query
			try {
				return Modelo::QueryArray(
					QQ::Equal(QQN::Modelo()->IdMarca, $intIdMarca),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Modelos
		 * by IdMarca Index(es)
		 * @param integer $intIdMarca
		 * @return int
		*/
		public static function CountByIdMarca($intIdMarca) {
			// Call Modelo::QueryCount to perform the CountByIdMarca query
			return Modelo::QueryCount(
				QQ::Equal(QQN::Modelo()->IdMarca, $intIdMarca)
			);
		}
			
		/**
		 * Load an array of Modelo objects,
		 * by IdPais Index(es)
		 * @param integer $intIdPais
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Modelo[]
		*/
		public static function LoadArrayByIdPais($intIdPais, $objOptionalClauses = null) {
			// Call Modelo::QueryArray to perform the LoadArrayByIdPais query
			try {
				return Modelo::QueryArray(
					QQ::Equal(QQN::Modelo()->IdPais, $intIdPais),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Modelos
		 * by IdPais Index(es)
		 * @param integer $intIdPais
		 * @return int
		*/
		public static function CountByIdPais($intIdPais) {
			// Call Modelo::QueryCount to perform the CountByIdPais query
			return Modelo::QueryCount(
				QQ::Equal(QQN::Modelo()->IdPais, $intIdPais)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Modelo
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `modelo` (
							`nombre`,
							`id_marca`,
							`id_pais`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->intIdMarca) . ',
							' . $objDatabase->SqlVariable($this->intIdPais) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdModelo = $objDatabase->InsertId('modelo', 'id_modelo');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`modelo`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							`id_marca` = ' . $objDatabase->SqlVariable($this->intIdMarca) . ',
							`id_pais` = ' . $objDatabase->SqlVariable($this->intIdPais) . '
						WHERE
							`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '
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
		 * Delete this Modelo
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdModelo)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Modelo with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`modelo`
				WHERE
					`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '');
		}

		/**
		 * Delete all Modelos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`modelo`');
		}

		/**
		 * Truncate modelo table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `modelo`');
		}

		/**
		 * Reload this Modelo from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Modelo object.');

			// Reload the Object
			$objReloaded = Modelo::Load($this->intIdModelo);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->IdMarca = $objReloaded->IdMarca;
			$this->IdPais = $objReloaded->IdPais;
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
				case 'IdModelo':
					/**
					 * Gets the value for intIdModelo (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdModelo;

				case 'Nombre':
					/**
					 * Gets the value for strNombre (Not Null)
					 * @return string
					 */
					return $this->strNombre;

				case 'IdMarca':
					/**
					 * Gets the value for intIdMarca (Not Null)
					 * @return integer
					 */
					return $this->intIdMarca;

				case 'IdPais':
					/**
					 * Gets the value for intIdPais (Not Null)
					 * @return integer
					 */
					return $this->intIdPais;


				///////////////////
				// Member Objects
				///////////////////
				case 'IdMarcaObject':
					/**
					 * Gets the value for the Marcas object referenced by intIdMarca (Not Null)
					 * @return Marcas
					 */
					try {
						if ((!$this->objIdMarcaObject) && (!is_null($this->intIdMarca)))
							$this->objIdMarcaObject = Marcas::Load($this->intIdMarca);
						return $this->objIdMarcaObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdPaisObject':
					/**
					 * Gets the value for the Paises object referenced by intIdPais (Not Null)
					 * @return Paises
					 */
					try {
						if ((!$this->objIdPaisObject) && (!is_null($this->intIdPais)))
							$this->objIdPaisObject = Paises::Load($this->intIdPais);
						return $this->objIdPaisObject;
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
					 * if set due to an expansion on the fichas.id_modelo reverse relationship
					 * @return Fichas
					 */
					return $this->_objFichasAsId;

				case '_FichasAsIdArray':
					/**
					 * Gets the value for the private _objFichasAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the fichas.id_modelo reverse relationship
					 * @return Fichas[]
					 */
					return (array) $this->_objFichasAsIdArray;

				case '_VersionAsId':
					/**
					 * Gets the value for the private _objVersionAsId (Read-Only)
					 * if set due to an expansion on the version.id_modelo reverse relationship
					 * @return Version
					 */
					return $this->_objVersionAsId;

				case '_VersionAsIdArray':
					/**
					 * Gets the value for the private _objVersionAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the version.id_modelo reverse relationship
					 * @return Version[]
					 */
					return (array) $this->_objVersionAsIdArray;


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

				case 'IdMarca':
					/**
					 * Sets the value for intIdMarca (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdMarcaObject = null;
						return ($this->intIdMarca = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdPais':
					/**
					 * Sets the value for intIdPais (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdPaisObject = null;
						return ($this->intIdPais = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'IdMarcaObject':
					/**
					 * Sets the value for the Marcas object referenced by intIdMarca (Not Null)
					 * @param Marcas $mixValue
					 * @return Marcas
					 */
					if (is_null($mixValue)) {
						$this->intIdMarca = null;
						$this->objIdMarcaObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Marcas object
						try {
							$mixValue = QType::Cast($mixValue, 'Marcas');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Marcas object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved IdMarcaObject for this Modelo');

						// Update Local Member Variables
						$this->objIdMarcaObject = $mixValue;
						$this->intIdMarca = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'IdPaisObject':
					/**
					 * Sets the value for the Paises object referenced by intIdPais (Not Null)
					 * @param Paises $mixValue
					 * @return Paises
					 */
					if (is_null($mixValue)) {
						$this->intIdPais = null;
						$this->objIdPaisObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Paises object
						try {
							$mixValue = QType::Cast($mixValue, 'Paises');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Paises object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved IdPaisObject for this Modelo');

						// Update Local Member Variables
						$this->objIdPaisObject = $mixValue;
						$this->intIdPais = $mixValue->Id;

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
			if ((is_null($this->intIdModelo)))
				return array();

			try {
				return Fichas::LoadArrayByIdModelo($this->intIdModelo, $objOptionalClauses);
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
			if ((is_null($this->intIdModelo)))
				return 0;

			return Fichas::CountByIdModelo($this->intIdModelo);
		}

		/**
		 * Associates a FichasAsId
		 * @param Fichas $objFichas
		 * @return void
		*/ 
		public function AssociateFichasAsId(Fichas $objFichas) {
			if ((is_null($this->intIdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasAsId on this unsaved Modelo.');
			if ((is_null($objFichas->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasAsId on this Modelo with an unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas`
				SET
					`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '
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
			if ((is_null($this->intIdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsId on this unsaved Modelo.');
			if ((is_null($objFichas->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsId on this Modelo with an unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas`
				SET
					`id_modelo` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichas->Id) . ' AND
					`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '
			');
		}

		/**
		 * Unassociates all FichasesAsId
		 * @return void
		*/ 
		public function UnassociateAllFichasesAsId() {
			if ((is_null($this->intIdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsId on this unsaved Modelo.');

			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas`
				SET
					`id_modelo` = null
				WHERE
					`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '
			');
		}

		/**
		 * Deletes an associated FichasAsId
		 * @param Fichas $objFichas
		 * @return void
		*/ 
		public function DeleteAssociatedFichasAsId(Fichas $objFichas) {
			if ((is_null($this->intIdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsId on this unsaved Modelo.');
			if ((is_null($objFichas->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsId on this Modelo with an unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichas->Id) . ' AND
					`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '
			');
		}

		/**
		 * Deletes all associated FichasesAsId
		 * @return void
		*/ 
		public function DeleteAllFichasesAsId() {
			if ((is_null($this->intIdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasAsId on this unsaved Modelo.');

			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas`
				WHERE
					`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '
			');
		}

			
		
		// Related Objects' Methods for VersionAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VersionsAsId as an array of Version objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Version[]
		*/ 
		public function GetVersionAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdModelo)))
				return array();

			try {
				return Version::LoadArrayByIdModelo($this->intIdModelo, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VersionsAsId
		 * @return int
		*/ 
		public function CountVersionsAsId() {
			if ((is_null($this->intIdModelo)))
				return 0;

			return Version::CountByIdModelo($this->intIdModelo);
		}

		/**
		 * Associates a VersionAsId
		 * @param Version $objVersion
		 * @return void
		*/ 
		public function AssociateVersionAsId(Version $objVersion) {
			if ((is_null($this->intIdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVersionAsId on this unsaved Modelo.');
			if ((is_null($objVersion->IdVersion)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVersionAsId on this Modelo with an unsaved Version.');

			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`version`
				SET
					`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '
				WHERE
					`id_version` = ' . $objDatabase->SqlVariable($objVersion->IdVersion) . '
			');
		}

		/**
		 * Unassociates a VersionAsId
		 * @param Version $objVersion
		 * @return void
		*/ 
		public function UnassociateVersionAsId(Version $objVersion) {
			if ((is_null($this->intIdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVersionAsId on this unsaved Modelo.');
			if ((is_null($objVersion->IdVersion)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVersionAsId on this Modelo with an unsaved Version.');

			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`version`
				SET
					`id_modelo` = null
				WHERE
					`id_version` = ' . $objDatabase->SqlVariable($objVersion->IdVersion) . ' AND
					`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '
			');
		}

		/**
		 * Unassociates all VersionsAsId
		 * @return void
		*/ 
		public function UnassociateAllVersionsAsId() {
			if ((is_null($this->intIdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVersionAsId on this unsaved Modelo.');

			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`version`
				SET
					`id_modelo` = null
				WHERE
					`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '
			');
		}

		/**
		 * Deletes an associated VersionAsId
		 * @param Version $objVersion
		 * @return void
		*/ 
		public function DeleteAssociatedVersionAsId(Version $objVersion) {
			if ((is_null($this->intIdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVersionAsId on this unsaved Modelo.');
			if ((is_null($objVersion->IdVersion)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVersionAsId on this Modelo with an unsaved Version.');

			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`version`
				WHERE
					`id_version` = ' . $objDatabase->SqlVariable($objVersion->IdVersion) . ' AND
					`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '
			');
		}

		/**
		 * Deletes all associated VersionsAsId
		 * @return void
		*/ 
		public function DeleteAllVersionsAsId() {
			if ((is_null($this->intIdModelo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVersionAsId on this unsaved Modelo.');

			// Get the Database Object for this Class
			$objDatabase = Modelo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`version`
				WHERE
					`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Modelo"><sequence>';
			$strToReturn .= '<element name="IdModelo" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="IdMarcaObject" type="xsd1:Marcas"/>';
			$strToReturn .= '<element name="IdPaisObject" type="xsd1:Paises"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Modelo', $strComplexTypeArray)) {
				$strComplexTypeArray['Modelo'] = Modelo::GetSoapComplexTypeXml();
				Marcas::AlterSoapComplexTypeArray($strComplexTypeArray);
				Paises::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Modelo::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Modelo();
			if (property_exists($objSoapObject, 'IdModelo'))
				$objToReturn->intIdModelo = $objSoapObject->IdModelo;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if ((property_exists($objSoapObject, 'IdMarcaObject')) &&
				($objSoapObject->IdMarcaObject))
				$objToReturn->IdMarcaObject = Marcas::GetObjectFromSoapObject($objSoapObject->IdMarcaObject);
			if ((property_exists($objSoapObject, 'IdPaisObject')) &&
				($objSoapObject->IdPaisObject))
				$objToReturn->IdPaisObject = Paises::GetObjectFromSoapObject($objSoapObject->IdPaisObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Modelo::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdMarcaObject)
				$objObject->objIdMarcaObject = Marcas::GetSoapObjectFromObject($objObject->objIdMarcaObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdMarca = null;
			if ($objObject->objIdPaisObject)
				$objObject->objIdPaisObject = Paises::GetSoapObjectFromObject($objObject->objIdPaisObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdPais = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeModelo extends QQNode {
		protected $strTableName = 'modelo';
		protected $strPrimaryKey = 'id_modelo';
		protected $strClassName = 'Modelo';
		public function __get($strName) {
			switch ($strName) {
				case 'IdModelo':
					return new QQNode('id_modelo', 'IdModelo', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'IdMarca':
					return new QQNode('id_marca', 'IdMarca', 'integer', $this);
				case 'IdMarcaObject':
					return new QQNodeMarcas('id_marca', 'IdMarcaObject', 'integer', $this);
				case 'IdPais':
					return new QQNode('id_pais', 'IdPais', 'integer', $this);
				case 'IdPaisObject':
					return new QQNodePaises('id_pais', 'IdPaisObject', 'integer', $this);
				case 'FichasAsId':
					return new QQReverseReferenceNodeFichas($this, 'fichasasid', 'reverse_reference', 'id_modelo');
				case 'VersionAsId':
					return new QQReverseReferenceNodeVersion($this, 'versionasid', 'reverse_reference', 'id_modelo');

				case '_PrimaryKeyNode':
					return new QQNode('id_modelo', 'IdModelo', 'integer', $this);
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

	class QQReverseReferenceNodeModelo extends QQReverseReferenceNode {
		protected $strTableName = 'modelo';
		protected $strPrimaryKey = 'id_modelo';
		protected $strClassName = 'Modelo';
		public function __get($strName) {
			switch ($strName) {
				case 'IdModelo':
					return new QQNode('id_modelo', 'IdModelo', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'IdMarca':
					return new QQNode('id_marca', 'IdMarca', 'integer', $this);
				case 'IdMarcaObject':
					return new QQNodeMarcas('id_marca', 'IdMarcaObject', 'integer', $this);
				case 'IdPais':
					return new QQNode('id_pais', 'IdPais', 'integer', $this);
				case 'IdPaisObject':
					return new QQNodePaises('id_pais', 'IdPaisObject', 'integer', $this);
				case 'FichasAsId':
					return new QQReverseReferenceNodeFichas($this, 'fichasasid', 'reverse_reference', 'id_modelo');
				case 'VersionAsId':
					return new QQReverseReferenceNodeVersion($this, 'versionasid', 'reverse_reference', 'id_modelo');

				case '_PrimaryKeyNode':
					return new QQNode('id_modelo', 'IdModelo', 'integer', $this);
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