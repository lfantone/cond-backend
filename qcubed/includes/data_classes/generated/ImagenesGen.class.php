<?php
	/**
	 * The abstract ImagenesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Imagenes subclass which
	 * extends this ImagenesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Imagenes class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Titulo the value for strTitulo (Not Null)
	 * @property QDateTime $Fecha the value for dttFecha (Not Null)
	 * @property integer $Estado the value for intEstado (Not Null)
	 * @property-read FichasImagenes $_FichasImagenesAsIdImagen the value for the private _objFichasImagenesAsIdImagen (Read-Only) if set due to an expansion on the fichas_imagenes.id_imagen reverse relationship
	 * @property-read FichasImagenes[] $_FichasImagenesAsIdImagenArray the value for the private _objFichasImagenesAsIdImagenArray (Read-Only) if set due to an ExpandAsArray on the fichas_imagenes.id_imagen reverse relationship
	 * @property-read NotasImagenes $_NotasImagenesAsIdImagen the value for the private _objNotasImagenesAsIdImagen (Read-Only) if set due to an expansion on the notas_imagenes.id_imagen reverse relationship
	 * @property-read NotasImagenes[] $_NotasImagenesAsIdImagenArray the value for the private _objNotasImagenesAsIdImagenArray (Read-Only) if set due to an ExpandAsArray on the notas_imagenes.id_imagen reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ImagenesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column imagenes.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column imagenes.titulo
		 * @var string strTitulo
		 */
		protected $strTitulo;
		const TituloMaxLength = 255;
		const TituloDefault = null;


		/**
		 * Protected member variable that maps to the database column imagenes.fecha
		 * @var QDateTime dttFecha
		 */
		protected $dttFecha;
		const FechaDefault = null;


		/**
		 * Protected member variable that maps to the database column imagenes.estado
		 * @var integer intEstado
		 */
		protected $intEstado;
		const EstadoDefault = null;


		/**
		 * Private member variable that stores a reference to a single FichasImagenesAsIdImagen object
		 * (of type FichasImagenes), if this Imagenes object was restored with
		 * an expansion on the fichas_imagenes association table.
		 * @var FichasImagenes _objFichasImagenesAsIdImagen;
		 */
		private $_objFichasImagenesAsIdImagen;

		/**
		 * Private member variable that stores a reference to an array of FichasImagenesAsIdImagen objects
		 * (of type FichasImagenes[]), if this Imagenes object was restored with
		 * an ExpandAsArray on the fichas_imagenes association table.
		 * @var FichasImagenes[] _objFichasImagenesAsIdImagenArray;
		 */
		private $_objFichasImagenesAsIdImagenArray = array();

		/**
		 * Private member variable that stores a reference to a single NotasImagenesAsIdImagen object
		 * (of type NotasImagenes), if this Imagenes object was restored with
		 * an expansion on the notas_imagenes association table.
		 * @var NotasImagenes _objNotasImagenesAsIdImagen;
		 */
		private $_objNotasImagenesAsIdImagen;

		/**
		 * Private member variable that stores a reference to an array of NotasImagenesAsIdImagen objects
		 * (of type NotasImagenes[]), if this Imagenes object was restored with
		 * an ExpandAsArray on the notas_imagenes association table.
		 * @var NotasImagenes[] _objNotasImagenesAsIdImagenArray;
		 */
		private $_objNotasImagenesAsIdImagenArray = array();

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
		 * Load a Imagenes from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Imagenes
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Imagenes::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Imagenes()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Imageneses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Imagenes[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Imagenes::QueryArray to perform the LoadAll query
			try {
				return Imagenes::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Imageneses
		 * @return int
		 */
		public static function CountAll() {
			// Call Imagenes::QueryCount to perform the CountAll query
			return Imagenes::QueryCount(QQ::All());
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
			$objDatabase = Imagenes::GetDatabase();

			// Create/Build out the QueryBuilder object with Imagenes-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'imagenes');
			Imagenes::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('imagenes');

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
		 * Static Qcubed Query method to query for a single Imagenes object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Imagenes the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Imagenes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Imagenes object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Imagenes::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Imagenes::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Imagenes objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Imagenes[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Imagenes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Imagenes::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Imagenes objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Imagenes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Imagenes::GetDatabase();

			$strQuery = Imagenes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/imagenes', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Imagenes::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Imagenes
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'imagenes';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'titulo', $strAliasPrefix . 'titulo');
			$objBuilder->AddSelectItem($strTableName, 'fecha', $strAliasPrefix . 'fecha');
			$objBuilder->AddSelectItem($strTableName, 'estado', $strAliasPrefix . 'estado');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Imagenes from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Imagenes::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Imagenes
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
							$strAliasPrefix = 'imagenes__';


						// Expanding reverse references: FichasImagenesAsIdImagen
						$strAlias = $strAliasPrefix . 'fichasimagenesasidimagen__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFichasImagenesAsIdImagenArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFichasImagenesAsIdImagenArray;
								$objChildItem = FichasImagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasimagenesasidimagen__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFichasImagenesAsIdImagenArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFichasImagenesAsIdImagenArray[] = FichasImagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasimagenesasidimagen__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NotasImagenesAsIdImagen
						$strAlias = $strAliasPrefix . 'notasimagenesasidimagen__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNotasImagenesAsIdImagenArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNotasImagenesAsIdImagenArray;
								$objChildItem = NotasImagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'notasimagenesasidimagen__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNotasImagenesAsIdImagenArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNotasImagenesAsIdImagenArray[] = NotasImagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'notasimagenesasidimagen__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'imagenes__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Imagenes object
			$objToReturn = new Imagenes();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'titulo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'titulo'] : $strAliasPrefix . 'titulo';
			$objToReturn->strTitulo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha'] : $strAliasPrefix . 'fecha';
			$objToReturn->dttFecha = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'estado'] : $strAliasPrefix . 'estado';
			$objToReturn->intEstado = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
						continue;
					}
					if (array_diff($objPreviousItem->_objFichasImagenesAsIdImagenArray, $objToReturn->_objFichasImagenesAsIdImagenArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNotasImagenesAsIdImagenArray, $objToReturn->_objNotasImagenesAsIdImagenArray) != null) {
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
				$strAliasPrefix = 'imagenes__';




			// Check for FichasImagenesAsIdImagen Virtual Binding
			$strAlias = $strAliasPrefix . 'fichasimagenesasidimagen__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFichasImagenesAsIdImagenArray[] = FichasImagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasimagenesasidimagen__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFichasImagenesAsIdImagen = FichasImagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasimagenesasidimagen__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NotasImagenesAsIdImagen Virtual Binding
			$strAlias = $strAliasPrefix . 'notasimagenesasidimagen__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objNotasImagenesAsIdImagenArray[] = NotasImagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'notasimagenesasidimagen__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNotasImagenesAsIdImagen = NotasImagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'notasimagenesasidimagen__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Imageneses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Imagenes[]
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
					$objItem = Imagenes::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Imagenes::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Imagenes object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Imagenes
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Imagenes::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Imagenes()->Id, $intId)
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
		 * Save this Imagenes
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `imagenes` (
							`titulo`,
							`fecha`,
							`estado`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strTitulo) . ',
							' . $objDatabase->SqlVariable($this->dttFecha) . ',
							' . $objDatabase->SqlVariable($this->intEstado) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('imagenes', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`imagenes`
						SET
							`titulo` = ' . $objDatabase->SqlVariable($this->strTitulo) . ',
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
		 * Delete this Imagenes
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Imagenes with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`imagenes`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all Imageneses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`imagenes`');
		}

		/**
		 * Truncate imagenes table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `imagenes`');
		}

		/**
		 * Reload this Imagenes from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Imagenes object.');

			// Reload the Object
			$objReloaded = Imagenes::Load($this->intId);

			// Update $this's local variables to match
			$this->strTitulo = $objReloaded->strTitulo;
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

				case '_FichasImagenesAsIdImagen':
					/**
					 * Gets the value for the private _objFichasImagenesAsIdImagen (Read-Only)
					 * if set due to an expansion on the fichas_imagenes.id_imagen reverse relationship
					 * @return FichasImagenes
					 */
					return $this->_objFichasImagenesAsIdImagen;

				case '_FichasImagenesAsIdImagenArray':
					/**
					 * Gets the value for the private _objFichasImagenesAsIdImagenArray (Read-Only)
					 * if set due to an ExpandAsArray on the fichas_imagenes.id_imagen reverse relationship
					 * @return FichasImagenes[]
					 */
					return (array) $this->_objFichasImagenesAsIdImagenArray;

				case '_NotasImagenesAsIdImagen':
					/**
					 * Gets the value for the private _objNotasImagenesAsIdImagen (Read-Only)
					 * if set due to an expansion on the notas_imagenes.id_imagen reverse relationship
					 * @return NotasImagenes
					 */
					return $this->_objNotasImagenesAsIdImagen;

				case '_NotasImagenesAsIdImagenArray':
					/**
					 * Gets the value for the private _objNotasImagenesAsIdImagenArray (Read-Only)
					 * if set due to an ExpandAsArray on the notas_imagenes.id_imagen reverse relationship
					 * @return NotasImagenes[]
					 */
					return (array) $this->_objNotasImagenesAsIdImagenArray;


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

			
		
		// Related Objects' Methods for FichasImagenesAsIdImagen
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FichasImagenesesAsIdImagen as an array of FichasImagenes objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasImagenes[]
		*/ 
		public function GetFichasImagenesAsIdImagenArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FichasImagenes::LoadArrayByIdImagen($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FichasImagenesesAsIdImagen
		 * @return int
		*/ 
		public function CountFichasImagenesesAsIdImagen() {
			if ((is_null($this->intId)))
				return 0;

			return FichasImagenes::CountByIdImagen($this->intId);
		}

		/**
		 * Associates a FichasImagenesAsIdImagen
		 * @param FichasImagenes $objFichasImagenes
		 * @return void
		*/ 
		public function AssociateFichasImagenesAsIdImagen(FichasImagenes $objFichasImagenes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasImagenesAsIdImagen on this unsaved Imagenes.');
			if ((is_null($objFichasImagenes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasImagenesAsIdImagen on this Imagenes with an unsaved FichasImagenes.');

			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_imagenes`
				SET
					`id_imagen` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichasImagenes->Id) . '
			');
		}

		/**
		 * Unassociates a FichasImagenesAsIdImagen
		 * @param FichasImagenes $objFichasImagenes
		 * @return void
		*/ 
		public function UnassociateFichasImagenesAsIdImagen(FichasImagenes $objFichasImagenes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasImagenesAsIdImagen on this unsaved Imagenes.');
			if ((is_null($objFichasImagenes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasImagenesAsIdImagen on this Imagenes with an unsaved FichasImagenes.');

			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_imagenes`
				SET
					`id_imagen` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichasImagenes->Id) . ' AND
					`id_imagen` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all FichasImagenesesAsIdImagen
		 * @return void
		*/ 
		public function UnassociateAllFichasImagenesesAsIdImagen() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasImagenesAsIdImagen on this unsaved Imagenes.');

			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_imagenes`
				SET
					`id_imagen` = null
				WHERE
					`id_imagen` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FichasImagenesAsIdImagen
		 * @param FichasImagenes $objFichasImagenes
		 * @return void
		*/ 
		public function DeleteAssociatedFichasImagenesAsIdImagen(FichasImagenes $objFichasImagenes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasImagenesAsIdImagen on this unsaved Imagenes.');
			if ((is_null($objFichasImagenes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasImagenesAsIdImagen on this Imagenes with an unsaved FichasImagenes.');

			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_imagenes`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichasImagenes->Id) . ' AND
					`id_imagen` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated FichasImagenesesAsIdImagen
		 * @return void
		*/ 
		public function DeleteAllFichasImagenesesAsIdImagen() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasImagenesAsIdImagen on this unsaved Imagenes.');

			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_imagenes`
				WHERE
					`id_imagen` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for NotasImagenesAsIdImagen
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NotasImagenesesAsIdImagen as an array of NotasImagenes objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NotasImagenes[]
		*/ 
		public function GetNotasImagenesAsIdImagenArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return NotasImagenes::LoadArrayByIdImagen($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NotasImagenesesAsIdImagen
		 * @return int
		*/ 
		public function CountNotasImagenesesAsIdImagen() {
			if ((is_null($this->intId)))
				return 0;

			return NotasImagenes::CountByIdImagen($this->intId);
		}

		/**
		 * Associates a NotasImagenesAsIdImagen
		 * @param NotasImagenes $objNotasImagenes
		 * @return void
		*/ 
		public function AssociateNotasImagenesAsIdImagen(NotasImagenes $objNotasImagenes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNotasImagenesAsIdImagen on this unsaved Imagenes.');
			if ((is_null($objNotasImagenes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNotasImagenesAsIdImagen on this Imagenes with an unsaved NotasImagenes.');

			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`notas_imagenes`
				SET
					`id_imagen` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objNotasImagenes->Id) . '
			');
		}

		/**
		 * Unassociates a NotasImagenesAsIdImagen
		 * @param NotasImagenes $objNotasImagenes
		 * @return void
		*/ 
		public function UnassociateNotasImagenesAsIdImagen(NotasImagenes $objNotasImagenes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNotasImagenesAsIdImagen on this unsaved Imagenes.');
			if ((is_null($objNotasImagenes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNotasImagenesAsIdImagen on this Imagenes with an unsaved NotasImagenes.');

			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`notas_imagenes`
				SET
					`id_imagen` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objNotasImagenes->Id) . ' AND
					`id_imagen` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all NotasImagenesesAsIdImagen
		 * @return void
		*/ 
		public function UnassociateAllNotasImagenesesAsIdImagen() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNotasImagenesAsIdImagen on this unsaved Imagenes.');

			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`notas_imagenes`
				SET
					`id_imagen` = null
				WHERE
					`id_imagen` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated NotasImagenesAsIdImagen
		 * @param NotasImagenes $objNotasImagenes
		 * @return void
		*/ 
		public function DeleteAssociatedNotasImagenesAsIdImagen(NotasImagenes $objNotasImagenes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNotasImagenesAsIdImagen on this unsaved Imagenes.');
			if ((is_null($objNotasImagenes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNotasImagenesAsIdImagen on this Imagenes with an unsaved NotasImagenes.');

			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`notas_imagenes`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objNotasImagenes->Id) . ' AND
					`id_imagen` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated NotasImagenesesAsIdImagen
		 * @return void
		*/ 
		public function DeleteAllNotasImagenesesAsIdImagen() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNotasImagenesAsIdImagen on this unsaved Imagenes.');

			// Get the Database Object for this Class
			$objDatabase = Imagenes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`notas_imagenes`
				WHERE
					`id_imagen` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Imagenes"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Titulo" type="xsd:string"/>';
			$strToReturn .= '<element name="Fecha" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Estado" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Imagenes', $strComplexTypeArray)) {
				$strComplexTypeArray['Imagenes'] = Imagenes::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Imagenes::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Imagenes();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Titulo'))
				$objToReturn->strTitulo = $objSoapObject->Titulo;
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
				array_push($objArrayToReturn, Imagenes::GetSoapObjectFromObject($objObject, true));

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

	class QQNodeImagenes extends QQNode {
		protected $strTableName = 'imagenes';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Imagenes';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Titulo':
					return new QQNode('titulo', 'Titulo', 'string', $this);
				case 'Fecha':
					return new QQNode('fecha', 'Fecha', 'QDateTime', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'integer', $this);
				case 'FichasImagenesAsIdImagen':
					return new QQReverseReferenceNodeFichasImagenes($this, 'fichasimagenesasidimagen', 'reverse_reference', 'id_imagen');
				case 'NotasImagenesAsIdImagen':
					return new QQReverseReferenceNodeNotasImagenes($this, 'notasimagenesasidimagen', 'reverse_reference', 'id_imagen');

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

	class QQReverseReferenceNodeImagenes extends QQReverseReferenceNode {
		protected $strTableName = 'imagenes';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Imagenes';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Titulo':
					return new QQNode('titulo', 'Titulo', 'string', $this);
				case 'Fecha':
					return new QQNode('fecha', 'Fecha', 'QDateTime', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'integer', $this);
				case 'FichasImagenesAsIdImagen':
					return new QQReverseReferenceNodeFichasImagenes($this, 'fichasimagenesasidimagen', 'reverse_reference', 'id_imagen');
				case 'NotasImagenesAsIdImagen':
					return new QQReverseReferenceNodeNotasImagenes($this, 'notasimagenesasidimagen', 'reverse_reference', 'id_imagen');

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