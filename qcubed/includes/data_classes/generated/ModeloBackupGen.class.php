<?php
	/**
	 * The abstract ModeloBackupGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the ModeloBackup subclass which
	 * extends this ModeloBackupGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the ModeloBackup class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdModelo the value for intIdModelo (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property integer $IdMarca the value for intIdMarca (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ModeloBackupGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column modelo_backup.id_modelo
		 * @var integer intIdModelo
		 */
		protected $intIdModelo;
		const IdModeloDefault = null;


		/**
		 * Protected member variable that maps to the database column modelo_backup.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 255;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column modelo_backup.id_marca
		 * @var integer intIdMarca
		 */
		protected $intIdMarca;
		const IdMarcaDefault = null;


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
		 * Load a ModeloBackup from PK Info
		 * @param integer $intIdModelo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ModeloBackup
		 */
		public static function Load($intIdModelo, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return ModeloBackup::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::ModeloBackup()->IdModelo, $intIdModelo)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all ModeloBackups
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ModeloBackup[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call ModeloBackup::QueryArray to perform the LoadAll query
			try {
				return ModeloBackup::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all ModeloBackups
		 * @return int
		 */
		public static function CountAll() {
			// Call ModeloBackup::QueryCount to perform the CountAll query
			return ModeloBackup::QueryCount(QQ::All());
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
			$objDatabase = ModeloBackup::GetDatabase();

			// Create/Build out the QueryBuilder object with ModeloBackup-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'modelo_backup');
			ModeloBackup::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('modelo_backup');

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
		 * Static Qcubed Query method to query for a single ModeloBackup object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ModeloBackup the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ModeloBackup::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new ModeloBackup object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = ModeloBackup::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return ModeloBackup::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of ModeloBackup objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ModeloBackup[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ModeloBackup::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return ModeloBackup::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of ModeloBackup objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ModeloBackup::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = ModeloBackup::GetDatabase();

			$strQuery = ModeloBackup::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/modelobackup', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = ModeloBackup::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this ModeloBackup
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'modelo_backup';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_modelo', $strAliasPrefix . 'id_modelo');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'id_marca', $strAliasPrefix . 'id_marca');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a ModeloBackup from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this ModeloBackup::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return ModeloBackup
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the ModeloBackup object
			$objToReturn = new ModeloBackup();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_modelo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_modelo'] : $strAliasPrefix . 'id_modelo';
			$objToReturn->intIdModelo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_marca', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_marca'] : $strAliasPrefix . 'id_marca';
			$objToReturn->intIdMarca = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdModelo != $objPreviousItem->IdModelo) {
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
				$strAliasPrefix = 'modelo_backup__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of ModeloBackups from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return ModeloBackup[]
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
					$objItem = ModeloBackup::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = ModeloBackup::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single ModeloBackup object,
		 * by IdModelo Index(es)
		 * @param integer $intIdModelo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ModeloBackup
		*/
		public static function LoadByIdModelo($intIdModelo, $objOptionalClauses = null) {
			return ModeloBackup::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::ModeloBackup()->IdModelo, $intIdModelo)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ModeloBackup objects,
		 * by IdMarca Index(es)
		 * @param integer $intIdMarca
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ModeloBackup[]
		*/
		public static function LoadArrayByIdMarca($intIdMarca, $objOptionalClauses = null) {
			// Call ModeloBackup::QueryArray to perform the LoadArrayByIdMarca query
			try {
				return ModeloBackup::QueryArray(
					QQ::Equal(QQN::ModeloBackup()->IdMarca, $intIdMarca),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ModeloBackups
		 * by IdMarca Index(es)
		 * @param integer $intIdMarca
		 * @return int
		*/
		public static function CountByIdMarca($intIdMarca) {
			// Call ModeloBackup::QueryCount to perform the CountByIdMarca query
			return ModeloBackup::QueryCount(
				QQ::Equal(QQN::ModeloBackup()->IdMarca, $intIdMarca)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this ModeloBackup
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = ModeloBackup::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `modelo_backup` (
							`nombre`,
							`id_marca`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->intIdMarca) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdModelo = $objDatabase->InsertId('modelo_backup', 'id_modelo');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`modelo_backup`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							`id_marca` = ' . $objDatabase->SqlVariable($this->intIdMarca) . '
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
		 * Delete this ModeloBackup
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdModelo)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this ModeloBackup with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = ModeloBackup::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`modelo_backup`
				WHERE
					`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . '');
		}

		/**
		 * Delete all ModeloBackups
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = ModeloBackup::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`modelo_backup`');
		}

		/**
		 * Truncate modelo_backup table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = ModeloBackup::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `modelo_backup`');
		}

		/**
		 * Reload this ModeloBackup from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved ModeloBackup object.');

			// Reload the Object
			$objReloaded = ModeloBackup::Load($this->intIdModelo);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->intIdMarca = $objReloaded->intIdMarca;
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
						return ($this->intIdMarca = QType::Cast($mixValue, QType::Integer));
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
			$strToReturn = '<complexType name="ModeloBackup"><sequence>';
			$strToReturn .= '<element name="IdModelo" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="IdMarca" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('ModeloBackup', $strComplexTypeArray)) {
				$strComplexTypeArray['ModeloBackup'] = ModeloBackup::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, ModeloBackup::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new ModeloBackup();
			if (property_exists($objSoapObject, 'IdModelo'))
				$objToReturn->intIdModelo = $objSoapObject->IdModelo;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'IdMarca'))
				$objToReturn->intIdMarca = $objSoapObject->IdMarca;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, ModeloBackup::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeModeloBackup extends QQNode {
		protected $strTableName = 'modelo_backup';
		protected $strPrimaryKey = 'id_modelo';
		protected $strClassName = 'ModeloBackup';
		public function __get($strName) {
			switch ($strName) {
				case 'IdModelo':
					return new QQNode('id_modelo', 'IdModelo', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'IdMarca':
					return new QQNode('id_marca', 'IdMarca', 'integer', $this);

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

	class QQReverseReferenceNodeModeloBackup extends QQReverseReferenceNode {
		protected $strTableName = 'modelo_backup';
		protected $strPrimaryKey = 'id_modelo';
		protected $strClassName = 'ModeloBackup';
		public function __get($strName) {
			switch ($strName) {
				case 'IdModelo':
					return new QQNode('id_modelo', 'IdModelo', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'IdMarca':
					return new QQNode('id_marca', 'IdMarca', 'integer', $this);

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