<?php
	/**
	 * The abstract FichasGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Fichas subclass which
	 * extends this FichasGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Fichas class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property integer $IdMarca the value for intIdMarca (Not Null)
	 * @property integer $IdTipos the value for intIdTipos (Not Null)
	 * @property integer $IdModelo the value for intIdModelo (Not Null)
	 * @property integer $IdVersion the value for intIdVersion (Not Null)
	 * @property integer $IdPais the value for intIdPais (Not Null)
	 * @property string $IdSeguro the value for strIdSeguro 
	 * @property string $Descripcion the value for strDescripcion (Not Null)
	 * @property string $Precio the value for strPrecio (Not Null)
	 * @property integer $Anio the value for intAnio 
	 * @property string $Combustible the value for strCombustible 
	 * @property string $Cilindrada the value for strCilindrada 
	 * @property string $Cilindros the value for strCilindros 
	 * @property string $PotenciaMaxima the value for strPotenciaMaxima 
	 * @property string $ParMotorTorque the value for strParMotorTorque 
	 * @property string $Posicion the value for strPosicion 
	 * @property string $Alimentacion the value for strAlimentacion 
	 * @property string $MotorShort the value for strMotorShort 
	 * @property string $Valvulas the value for strValvulas 
	 * @property string $Tipo the value for strTipo 
	 * @property string $Marchas the value for strMarchas 
	 * @property string $Traccion the value for strTraccion 
	 * @property string $VelocidadMaxima the value for strVelocidadMaxima 
	 * @property string $Aceleracion0100 the value for strAceleracion0100 
	 * @property string $ConsumoUrbano the value for strConsumoUrbano 
	 * @property string $ConsumoInterurbano the value for strConsumoInterurbano 
	 * @property string $ConsumoMixto the value for strConsumoMixto 
	 * @property string $Puertas the value for strPuertas 
	 * @property string $Plazas the value for strPlazas 
	 * @property string $FilasDeAsientos the value for strFilasDeAsientos 
	 * @property string $InfoEjes the value for strInfoEjes 
	 * @property string $Peso the value for strPeso 
	 * @property string $CapacidadBaul the value for strCapacidadBaul 
	 * @property string $CapacidadTanque the value for strCapacidadTanque 
	 * @property string $CapacidadCarga the value for strCapacidadCarga 
	 * @property string $FrenosDelanteros the value for strFrenosDelanteros 
	 * @property string $FrenosTraseros the value for strFrenosTraseros 
	 * @property string $Neumaticos the value for strNeumaticos 
	 * @property string $SuspensionDelantera the value for strSuspensionDelantera 
	 * @property string $SuspensionTrasera the value for strSuspensionTrasera 
	 * @property integer $IdEstado the value for intIdEstado (Not Null)
	 * @property boolean $Procesada the value for blnProcesada 
	 * @property Marcas $IdMarcaObject the value for the Marcas object referenced by intIdMarca (Not Null)
	 * @property Tipos $IdTiposObject the value for the Tipos object referenced by intIdTipos (Not Null)
	 * @property Modelo $IdModeloObject the value for the Modelo object referenced by intIdModelo (Not Null)
	 * @property Version $IdVersionObject the value for the Version object referenced by intIdVersion (Not Null)
	 * @property Paises $IdPaisObject the value for the Paises object referenced by intIdPais (Not Null)
	 * @property Estados $IdEstadoObject the value for the Estados object referenced by intIdEstado (Not Null)
	 * @property-read FichasImagenes $_FichasImagenesAsIdFicha the value for the private _objFichasImagenesAsIdFicha (Read-Only) if set due to an expansion on the fichas_imagenes.id_ficha reverse relationship
	 * @property-read FichasImagenes[] $_FichasImagenesAsIdFichaArray the value for the private _objFichasImagenesAsIdFichaArray (Read-Only) if set due to an ExpandAsArray on the fichas_imagenes.id_ficha reverse relationship
	 * @property-read FichasInfo $_FichasInfoAsId the value for the private _objFichasInfoAsId (Read-Only) if set due to an expansion on the fichas_info.id_fichas reverse relationship
	 * @property-read FichasInfo[] $_FichasInfoAsIdArray the value for the private _objFichasInfoAsIdArray (Read-Only) if set due to an ExpandAsArray on the fichas_info.id_fichas reverse relationship
	 * @property-read FichasItemValor $_FichasItemValorAsId the value for the private _objFichasItemValorAsId (Read-Only) if set due to an expansion on the fichas_item_valor.id_fichas reverse relationship
	 * @property-read FichasItemValor[] $_FichasItemValorAsIdArray the value for the private _objFichasItemValorAsIdArray (Read-Only) if set due to an ExpandAsArray on the fichas_item_valor.id_fichas reverse relationship
	 * @property-read FichasNotas $_FichasNotasAsId the value for the private _objFichasNotasAsId (Read-Only) if set due to an expansion on the fichas_notas.id_fichas reverse relationship
	 * @property-read FichasNotas[] $_FichasNotasAsIdArray the value for the private _objFichasNotasAsIdArray (Read-Only) if set due to an ExpandAsArray on the fichas_notas.id_fichas reverse relationship
	 * @property-read FichasVideos $_FichasVideosAsIdFicha the value for the private _objFichasVideosAsIdFicha (Read-Only) if set due to an expansion on the fichas_videos.id_ficha reverse relationship
	 * @property-read FichasVideos[] $_FichasVideosAsIdFichaArray the value for the private _objFichasVideosAsIdFichaArray (Read-Only) if set due to an ExpandAsArray on the fichas_videos.id_ficha reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */

	
	include_once("classes/mysql.php");
	
	class FichasGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column fichas.id
		 * @var integer intId
		 */
		protected $intId;
		protected $db;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.id_marca
		 * @var integer intIdMarca
		 */
		protected $intIdMarca;
		const IdMarcaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.id_tipos
		 * @var integer intIdTipos
		 */
		protected $intIdTipos;
		const IdTiposDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.id_modelo
		 * @var integer intIdModelo
		 */
		protected $intIdModelo;
		const IdModeloDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.id_version
		 * @var integer intIdVersion
		 */
		protected $intIdVersion;
		const IdVersionDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.id_pais
		 * @var integer intIdPais
		 */
		protected $intIdPais;
		const IdPaisDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.id_seguro
		 * @var string strIdSeguro
		 */
		protected $strIdSeguro;
		const IdSeguroMaxLength = 255;
		const IdSeguroDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.id_seguro
		 * @var string strIdSeguro
		 */
		protected $strIdServicio;
		const IdServicioMaxLength = 255;
		const IdServicioDefault = null;

		
		/**
		 * Protected member variable that maps to the database column fichas.id_seguro
		 * @var string strIdSeguro
		 */
		protected $strMoneda;
		const IdMonedaMaxLength = 10;
		const IdMonedaDefault = null;
		
		/**
		 * Protected member variable that maps to the database column fichas.descripcion
		 * @var string strDescripcion
		 */
		protected $strDescripcion;
		const DescripcionDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.precio
		 * @var string strPrecio
		 */
		protected $strPrecio;
		const PrecioMaxLength = 50;
		const PrecioDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.anio
		 * @var integer intAnio
		 */
		protected $intAnio;
		const AnioDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.combustible
		 * @var string strCombustible
		 */
		protected $strCombustible;
		const CombustibleMaxLength = 50;
		const CombustibleDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.cilindrada
		 * @var string strCilindrada
		 */
		protected $strCilindrada;
		const CilindradaMaxLength = 50;
		const CilindradaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.cilindros
		 * @var string strCilindros
		 */
		protected $strCilindros;
		const CilindrosMaxLength = 50;
		const CilindrosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.potencia_maxima
		 * @var string strPotenciaMaxima
		 */
		protected $strPotenciaMaxima;
		const PotenciaMaximaMaxLength = 50;
		const PotenciaMaximaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.par_motor_torque
		 * @var string strParMotorTorque
		 */
		protected $strParMotorTorque;
		const ParMotorTorqueMaxLength = 50;
		const ParMotorTorqueDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.posicion
		 * @var string strPosicion
		 */
		protected $strPosicion;
		const PosicionMaxLength = 50;
		const PosicionDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.alimentacion
		 * @var string strAlimentacion
		 */
		protected $strAlimentacion;
		const AlimentacionMaxLength = 50;
		const AlimentacionDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.motor_short
		 * @var string strMotorShort
		 */
		protected $strMotorShort;
		const MotorShortMaxLength = 50;
		const MotorShortDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.valvulas
		 * @var string strValvulas
		 */
		protected $strValvulas;
		const ValvulasMaxLength = 50;
		const ValvulasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.tipo
		 * @var string strTipo
		 */
		protected $strTipo;
		const TipoMaxLength = 50;
		const TipoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.marchas
		 * @var string strMarchas
		 */
		protected $strMarchas;
		const MarchasMaxLength = 50;
		const MarchasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.traccion
		 * @var string strTraccion
		 */
		protected $strTraccion;
		const TraccionMaxLength = 50;
		const TraccionDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.velocidad_maxima
		 * @var string strVelocidadMaxima
		 */
		protected $strVelocidadMaxima;
		const VelocidadMaximaMaxLength = 50;
		const VelocidadMaximaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.aceleracion_0_100
		 * @var string strAceleracion0100
		 */
		protected $strAceleracion0100;
		const Aceleracion0100MaxLength = 50;
		const Aceleracion0100Default = null;


		/**
		 * Protected member variable that maps to the database column fichas.consumo_urbano
		 * @var string strConsumoUrbano
		 */
		protected $strConsumoUrbano;
		const ConsumoUrbanoMaxLength = 50;
		const ConsumoUrbanoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.consumo_interurbano
		 * @var string strConsumoInterurbano
		 */
		protected $strConsumoInterurbano;
		const ConsumoInterurbanoMaxLength = 50;
		const ConsumoInterurbanoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.consumo_mixto
		 * @var string strConsumoMixto
		 */
		protected $strConsumoMixto;
		const ConsumoMixtoMaxLength = 50;
		const ConsumoMixtoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.puertas
		 * @var string strPuertas
		 */
		protected $strPuertas;
		const PuertasMaxLength = 50;
		const PuertasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.plazas
		 * @var string strPlazas
		 */
		protected $strPlazas;
		const PlazasMaxLength = 50;
		const PlazasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.filas_de_asientos
		 * @var string strFilasDeAsientos
		 */
		protected $strFilasDeAsientos;
		const FilasDeAsientosMaxLength = 50;
		const FilasDeAsientosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.info_ejes
		 * @var string strInfoEjes
		 */
		protected $strInfoEjes;
		const InfoEjesMaxLength = 50;
		const InfoEjesDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.peso
		 * @var string strPeso
		 */
		protected $strPeso;
		const PesoMaxLength = 50;
		const PesoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.capacidad_baul
		 * @var string strCapacidadBaul
		 */
		protected $strCapacidadBaul;
		const CapacidadBaulMaxLength = 50;
		const CapacidadBaulDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.capacidad_tanque
		 * @var string strCapacidadTanque
		 */
		protected $strCapacidadTanque;
		const CapacidadTanqueMaxLength = 50;
		const CapacidadTanqueDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.capacidad_carga
		 * @var string strCapacidadCarga
		 */
		protected $strCapacidadCarga;
		const CapacidadCargaMaxLength = 50;
		const CapacidadCargaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.frenos_delanteros
		 * @var string strFrenosDelanteros
		 */
		protected $strFrenosDelanteros;
		const FrenosDelanterosMaxLength = 50;
		const FrenosDelanterosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.frenos_traseros
		 * @var string strFrenosTraseros
		 */
		protected $strFrenosTraseros;
		const FrenosTraserosMaxLength = 50;
		const FrenosTraserosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.neumaticos
		 * @var string strNeumaticos
		 */
		protected $strNeumaticos;
		const NeumaticosMaxLength = 50;
		const NeumaticosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.suspension_delantera
		 * @var string strSuspensionDelantera
		 */
		protected $strSuspensionDelantera;
		const SuspensionDelanteraMaxLength = 50;
		const SuspensionDelanteraDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.suspension_trasera
		 * @var string strSuspensionTrasera
		 */
		protected $strSuspensionTrasera;
		const SuspensionTraseraMaxLength = 50;
		const SuspensionTraseraDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.id_estado
		 * @var integer intIdEstado
		 */
		protected $intIdEstado;
		const IdEstadoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas.procesada
		 * @var boolean blnProcesada
		 */
		protected $blnProcesada;
		const ProcesadaDefault = null;


		/**
		 * Private member variable that stores a reference to a single FichasImagenesAsIdFicha object
		 * (of type FichasImagenes), if this Fichas object was restored with
		 * an expansion on the fichas_imagenes association table.
		 * @var FichasImagenes _objFichasImagenesAsIdFicha;
		 */
		private $_objFichasImagenesAsIdFicha;

		/**
		 * Private member variable that stores a reference to an array of FichasImagenesAsIdFicha objects
		 * (of type FichasImagenes[]), if this Fichas object was restored with
		 * an ExpandAsArray on the fichas_imagenes association table.
		 * @var FichasImagenes[] _objFichasImagenesAsIdFichaArray;
		 */
		private $_objFichasImagenesAsIdFichaArray = array();

		/**
		 * Private member variable that stores a reference to a single FichasInfoAsId object
		 * (of type FichasInfo), if this Fichas object was restored with
		 * an expansion on the fichas_info association table.
		 * @var FichasInfo _objFichasInfoAsId;
		 */
		private $_objFichasInfoAsId;

		/**
		 * Private member variable that stores a reference to an array of FichasInfoAsId objects
		 * (of type FichasInfo[]), if this Fichas object was restored with
		 * an ExpandAsArray on the fichas_info association table.
		 * @var FichasInfo[] _objFichasInfoAsIdArray;
		 */
		private $_objFichasInfoAsIdArray = array();

		/**
		 * Private member variable that stores a reference to a single FichasItemValorAsId object
		 * (of type FichasItemValor), if this Fichas object was restored with
		 * an expansion on the fichas_item_valor association table.
		 * @var FichasItemValor _objFichasItemValorAsId;
		 */
		private $_objFichasItemValorAsId;

		/**
		 * Private member variable that stores a reference to an array of FichasItemValorAsId objects
		 * (of type FichasItemValor[]), if this Fichas object was restored with
		 * an ExpandAsArray on the fichas_item_valor association table.
		 * @var FichasItemValor[] _objFichasItemValorAsIdArray;
		 */
		private $_objFichasItemValorAsIdArray = array();

		/**
		 * Private member variable that stores a reference to a single FichasNotasAsId object
		 * (of type FichasNotas), if this Fichas object was restored with
		 * an expansion on the fichas_notas association table.
		 * @var FichasNotas _objFichasNotasAsId;
		 */
		private $_objFichasNotasAsId;

		/**
		 * Private member variable that stores a reference to an array of FichasNotasAsId objects
		 * (of type FichasNotas[]), if this Fichas object was restored with
		 * an ExpandAsArray on the fichas_notas association table.
		 * @var FichasNotas[] _objFichasNotasAsIdArray;
		 */
		private $_objFichasNotasAsIdArray = array();

		/**
		 * Private member variable that stores a reference to a single FichasVideosAsIdFicha object
		 * (of type FichasVideos), if this Fichas object was restored with
		 * an expansion on the fichas_videos association table.
		 * @var FichasVideos _objFichasVideosAsIdFicha;
		 */
		private $_objFichasVideosAsIdFicha;

		/**
		 * Private member variable that stores a reference to an array of FichasVideosAsIdFicha objects
		 * (of type FichasVideos[]), if this Fichas object was restored with
		 * an ExpandAsArray on the fichas_videos association table.
		 * @var FichasVideos[] _objFichasVideosAsIdFichaArray;
		 */
		private $_objFichasVideosAsIdFichaArray = array();

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
		 * in the database column fichas.id_marca.
		 *
		 * NOTE: Always use the IdMarcaObject property getter to correctly retrieve this Marcas object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Marcas objIdMarcaObject
		 */
		protected $objIdMarcaObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fichas.id_tipos.
		 *
		 * NOTE: Always use the IdTiposObject property getter to correctly retrieve this Tipos object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Tipos objIdTiposObject
		 */
		protected $objIdTiposObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fichas.id_modelo.
		 *
		 * NOTE: Always use the IdModeloObject property getter to correctly retrieve this Modelo object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Modelo objIdModeloObject
		 */
		protected $objIdModeloObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fichas.id_version.
		 *
		 * NOTE: Always use the IdVersionObject property getter to correctly retrieve this Version object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Version objIdVersionObject
		 */
		protected $objIdVersionObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fichas.id_pais.
		 *
		 * NOTE: Always use the IdPaisObject property getter to correctly retrieve this Paises object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Paises objIdPaisObject
		 */
		protected $objIdPaisObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fichas.id_estado.
		 *
		 * NOTE: Always use the IdEstadoObject property getter to correctly retrieve this Estados object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Estados objIdEstadoObject
		 */
		protected $objIdEstadoObject;





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
		 * Load a Fichas from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fichas
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Fichas::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Fichas()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Fichases
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fichas[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Fichas::QueryArray to perform the LoadAll query
			try {
				return Fichas::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Fichases
		 * @return int
		 */
		public static function CountAll() {
			// Call Fichas::QueryCount to perform the CountAll query
			return Fichas::QueryCount(QQ::All());
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
			$objDatabase = Fichas::GetDatabase();

			// Create/Build out the QueryBuilder object with Fichas-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'fichas');
			Fichas::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('fichas');

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
		 * Static Qcubed Query method to query for a single Fichas object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Fichas the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Fichas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Fichas object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Fichas::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Fichas::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Fichas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Fichas[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Fichas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Fichas::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Fichas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Fichas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Fichas::GetDatabase();

			$strQuery = Fichas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/fichas', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Fichas::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Fichas
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'fichas';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'id_marca', $strAliasPrefix . 'id_marca');
			$objBuilder->AddSelectItem($strTableName, 'id_tipos', $strAliasPrefix . 'id_tipos');
			$objBuilder->AddSelectItem($strTableName, 'id_modelo', $strAliasPrefix . 'id_modelo');
			$objBuilder->AddSelectItem($strTableName, 'id_version', $strAliasPrefix . 'id_version');
			$objBuilder->AddSelectItem($strTableName, 'id_pais', $strAliasPrefix . 'id_pais');
			$objBuilder->AddSelectItem($strTableName, 'id_seguro', $strAliasPrefix . 'id_seguro');
			$objBuilder->AddSelectItem($strTableName, 'descripcion', $strAliasPrefix . 'descripcion');
			$objBuilder->AddSelectItem($strTableName, 'precio', $strAliasPrefix . 'precio');
			$objBuilder->AddSelectItem($strTableName, 'moneda', $strAliasPrefix . 'moneda');			
			$objBuilder->AddSelectItem($strTableName, 'anio', $strAliasPrefix . 'anio');
			$objBuilder->AddSelectItem($strTableName, 'combustible', $strAliasPrefix . 'combustible');
			$objBuilder->AddSelectItem($strTableName, 'cilindrada', $strAliasPrefix . 'cilindrada');
			$objBuilder->AddSelectItem($strTableName, 'cilindros', $strAliasPrefix . 'cilindros');
			$objBuilder->AddSelectItem($strTableName, 'potencia_maxima', $strAliasPrefix . 'potencia_maxima');
			$objBuilder->AddSelectItem($strTableName, 'par_motor_torque', $strAliasPrefix . 'par_motor_torque');
			$objBuilder->AddSelectItem($strTableName, 'posicion', $strAliasPrefix . 'posicion');
			$objBuilder->AddSelectItem($strTableName, 'alimentacion', $strAliasPrefix . 'alimentacion');
			$objBuilder->AddSelectItem($strTableName, 'motor_short', $strAliasPrefix . 'motor_short');
			$objBuilder->AddSelectItem($strTableName, 'valvulas', $strAliasPrefix . 'valvulas');
			$objBuilder->AddSelectItem($strTableName, 'tipo', $strAliasPrefix . 'tipo');
			$objBuilder->AddSelectItem($strTableName, 'marchas', $strAliasPrefix . 'marchas');
			$objBuilder->AddSelectItem($strTableName, 'traccion', $strAliasPrefix . 'traccion');
			$objBuilder->AddSelectItem($strTableName, 'velocidad_maxima', $strAliasPrefix . 'velocidad_maxima');
			$objBuilder->AddSelectItem($strTableName, 'aceleracion_0_100', $strAliasPrefix . 'aceleracion_0_100');
			$objBuilder->AddSelectItem($strTableName, 'consumo_urbano', $strAliasPrefix . 'consumo_urbano');
			$objBuilder->AddSelectItem($strTableName, 'consumo_interurbano', $strAliasPrefix . 'consumo_interurbano');
			$objBuilder->AddSelectItem($strTableName, 'consumo_mixto', $strAliasPrefix . 'consumo_mixto');
			$objBuilder->AddSelectItem($strTableName, 'puertas', $strAliasPrefix . 'puertas');
			$objBuilder->AddSelectItem($strTableName, 'plazas', $strAliasPrefix . 'plazas');
			$objBuilder->AddSelectItem($strTableName, 'filas_de_asientos', $strAliasPrefix . 'filas_de_asientos');
			$objBuilder->AddSelectItem($strTableName, 'info_ejes', $strAliasPrefix . 'info_ejes');
			$objBuilder->AddSelectItem($strTableName, 'peso', $strAliasPrefix . 'peso');
			$objBuilder->AddSelectItem($strTableName, 'capacidad_baul', $strAliasPrefix . 'capacidad_baul');
			$objBuilder->AddSelectItem($strTableName, 'capacidad_tanque', $strAliasPrefix . 'capacidad_tanque');
			$objBuilder->AddSelectItem($strTableName, 'capacidad_carga', $strAliasPrefix . 'capacidad_carga');
			$objBuilder->AddSelectItem($strTableName, 'frenos_delanteros', $strAliasPrefix . 'frenos_delanteros');
			$objBuilder->AddSelectItem($strTableName, 'frenos_traseros', $strAliasPrefix . 'frenos_traseros');
			$objBuilder->AddSelectItem($strTableName, 'neumaticos', $strAliasPrefix . 'neumaticos');
			$objBuilder->AddSelectItem($strTableName, 'suspension_delantera', $strAliasPrefix . 'suspension_delantera');
			$objBuilder->AddSelectItem($strTableName, 'suspension_trasera', $strAliasPrefix . 'suspension_trasera');
			$objBuilder->AddSelectItem($strTableName, 'id_estado', $strAliasPrefix . 'id_estado');
			$objBuilder->AddSelectItem($strTableName, 'procesada', $strAliasPrefix . 'procesada');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Fichas from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Fichas::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Fichas
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
							$strAliasPrefix = 'fichas__';


						// Expanding reverse references: FichasImagenesAsIdFicha
						$strAlias = $strAliasPrefix . 'fichasimagenesasidficha__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFichasImagenesAsIdFichaArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFichasImagenesAsIdFichaArray;
								$objChildItem = FichasImagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasimagenesasidficha__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFichasImagenesAsIdFichaArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFichasImagenesAsIdFichaArray[] = FichasImagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasimagenesasidficha__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: FichasInfoAsId
						$strAlias = $strAliasPrefix . 'fichasinfoasid__id_fichas_info';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFichasInfoAsIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFichasInfoAsIdArray;
								$objChildItem = FichasInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasinfoasid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFichasInfoAsIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFichasInfoAsIdArray[] = FichasInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasinfoasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: FichasItemValorAsId
						$strAlias = $strAliasPrefix . 'fichasitemvalorasid__id_fichas';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFichasItemValorAsIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFichasItemValorAsIdArray;
								$objChildItem = FichasItemValor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasitemvalorasid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFichasItemValorAsIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFichasItemValorAsIdArray[] = FichasItemValor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasitemvalorasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: FichasNotasAsId
						$strAlias = $strAliasPrefix . 'fichasnotasasid__id_ficha_nota';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFichasNotasAsIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFichasNotasAsIdArray;
								$objChildItem = FichasNotas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasnotasasid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFichasNotasAsIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFichasNotasAsIdArray[] = FichasNotas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasnotasasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: FichasVideosAsIdFicha
						$strAlias = $strAliasPrefix . 'fichasvideosasidficha__id_ficha_video';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFichasVideosAsIdFichaArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFichasVideosAsIdFichaArray;
								$objChildItem = FichasVideos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasvideosasidficha__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFichasVideosAsIdFichaArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFichasVideosAsIdFichaArray[] = FichasVideos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasvideosasidficha__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'fichas__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Fichas object
			$objToReturn = new Fichas();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_marca', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_marca'] : $strAliasPrefix . 'id_marca';
			$objToReturn->intIdMarca = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_tipos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_tipos'] : $strAliasPrefix . 'id_tipos';
			$objToReturn->intIdTipos = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_modelo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_modelo'] : $strAliasPrefix . 'id_modelo';
			$objToReturn->intIdModelo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_version', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_version'] : $strAliasPrefix . 'id_version';
			$objToReturn->intIdVersion = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_pais', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_pais'] : $strAliasPrefix . 'id_pais';
			$objToReturn->intIdPais = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_seguro', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_seguro'] : $strAliasPrefix . 'id_seguro';
			$objToReturn->strIdSeguro = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'descripcion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'descripcion'] : $strAliasPrefix . 'descripcion';
			$objToReturn->strDescripcion = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'moneda', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'moneda'] : $strAliasPrefix . 'moneda';
			$objToReturn->strMoneda = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'precio', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'precio'] : $strAliasPrefix . 'precio';
			$objToReturn->strPrecio = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'anio', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'anio'] : $strAliasPrefix . 'anio';
			$objToReturn->intAnio = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'combustible', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'combustible'] : $strAliasPrefix . 'combustible';
			$objToReturn->strCombustible = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'cilindrada', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cilindrada'] : $strAliasPrefix . 'cilindrada';
			$objToReturn->strCilindrada = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'cilindros', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cilindros'] : $strAliasPrefix . 'cilindros';
			$objToReturn->strCilindros = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'potencia_maxima', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'potencia_maxima'] : $strAliasPrefix . 'potencia_maxima';
			$objToReturn->strPotenciaMaxima = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'par_motor_torque', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'par_motor_torque'] : $strAliasPrefix . 'par_motor_torque';
			$objToReturn->strParMotorTorque = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'posicion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'posicion'] : $strAliasPrefix . 'posicion';
			$objToReturn->strPosicion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'alimentacion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'alimentacion'] : $strAliasPrefix . 'alimentacion';
			$objToReturn->strAlimentacion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'motor_short', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'motor_short'] : $strAliasPrefix . 'motor_short';
			$objToReturn->strMotorShort = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'valvulas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'valvulas'] : $strAliasPrefix . 'valvulas';
			$objToReturn->strValvulas = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'tipo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tipo'] : $strAliasPrefix . 'tipo';
			$objToReturn->strTipo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'marchas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'marchas'] : $strAliasPrefix . 'marchas';
			$objToReturn->strMarchas = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'traccion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'traccion'] : $strAliasPrefix . 'traccion';
			$objToReturn->strTraccion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'velocidad_maxima', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'velocidad_maxima'] : $strAliasPrefix . 'velocidad_maxima';
			$objToReturn->strVelocidadMaxima = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'aceleracion_0_100', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'aceleracion_0_100'] : $strAliasPrefix . 'aceleracion_0_100';
			$objToReturn->strAceleracion0100 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'consumo_urbano', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'consumo_urbano'] : $strAliasPrefix . 'consumo_urbano';
			$objToReturn->strConsumoUrbano = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'consumo_interurbano', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'consumo_interurbano'] : $strAliasPrefix . 'consumo_interurbano';
			$objToReturn->strConsumoInterurbano = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'consumo_mixto', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'consumo_mixto'] : $strAliasPrefix . 'consumo_mixto';
			$objToReturn->strConsumoMixto = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'puertas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'puertas'] : $strAliasPrefix . 'puertas';
			$objToReturn->strPuertas = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'plazas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'plazas'] : $strAliasPrefix . 'plazas';
			$objToReturn->strPlazas = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'filas_de_asientos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'filas_de_asientos'] : $strAliasPrefix . 'filas_de_asientos';
			$objToReturn->strFilasDeAsientos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'info_ejes', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'info_ejes'] : $strAliasPrefix . 'info_ejes';
			$objToReturn->strInfoEjes = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'peso', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'peso'] : $strAliasPrefix . 'peso';
			$objToReturn->strPeso = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'capacidad_baul', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'capacidad_baul'] : $strAliasPrefix . 'capacidad_baul';
			$objToReturn->strCapacidadBaul = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'capacidad_tanque', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'capacidad_tanque'] : $strAliasPrefix . 'capacidad_tanque';
			$objToReturn->strCapacidadTanque = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'capacidad_carga', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'capacidad_carga'] : $strAliasPrefix . 'capacidad_carga';
			$objToReturn->strCapacidadCarga = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'frenos_delanteros', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'frenos_delanteros'] : $strAliasPrefix . 'frenos_delanteros';
			$objToReturn->strFrenosDelanteros = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'frenos_traseros', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'frenos_traseros'] : $strAliasPrefix . 'frenos_traseros';
			$objToReturn->strFrenosTraseros = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'neumaticos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'neumaticos'] : $strAliasPrefix . 'neumaticos';
			$objToReturn->strNeumaticos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'suspension_delantera', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'suspension_delantera'] : $strAliasPrefix . 'suspension_delantera';
			$objToReturn->strSuspensionDelantera = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'suspension_trasera', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'suspension_trasera'] : $strAliasPrefix . 'suspension_trasera';
			$objToReturn->strSuspensionTrasera = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_estado'] : $strAliasPrefix . 'id_estado';
			$objToReturn->intIdEstado = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'procesada', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'procesada'] : $strAliasPrefix . 'procesada';
			$objToReturn->blnProcesada = $objDbRow->GetColumn($strAliasName, 'Bit');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
						continue;
					}
					if (array_diff($objPreviousItem->_objFichasImagenesAsIdFichaArray, $objToReturn->_objFichasImagenesAsIdFichaArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objFichasInfoAsIdArray, $objToReturn->_objFichasInfoAsIdArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objFichasItemValorAsIdArray, $objToReturn->_objFichasItemValorAsIdArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objFichasNotasAsIdArray, $objToReturn->_objFichasNotasAsIdArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objFichasVideosAsIdFichaArray, $objToReturn->_objFichasVideosAsIdFichaArray) != null) {
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
				$strAliasPrefix = 'fichas__';

			// Check for IdMarcaObject Early Binding
			$strAlias = $strAliasPrefix . 'id_marca__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdMarcaObject = Marcas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_marca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for IdTiposObject Early Binding
			$strAlias = $strAliasPrefix . 'id_tipos__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdTiposObject = Tipos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_tipos__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for IdModeloObject Early Binding
			$strAlias = $strAliasPrefix . 'id_modelo__id_modelo';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdModeloObject = Modelo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_modelo__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for IdVersionObject Early Binding
			$strAlias = $strAliasPrefix . 'id_version__id_version';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdVersionObject = Version::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_version__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for IdPaisObject Early Binding
			$strAlias = $strAliasPrefix . 'id_pais__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdPaisObject = Paises::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_pais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for IdEstadoObject Early Binding
			$strAlias = $strAliasPrefix . 'id_estado__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdEstadoObject = Estados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_estado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for FichasImagenesAsIdFicha Virtual Binding
			$strAlias = $strAliasPrefix . 'fichasimagenesasidficha__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFichasImagenesAsIdFichaArray[] = FichasImagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasimagenesasidficha__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFichasImagenesAsIdFicha = FichasImagenes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasimagenesasidficha__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for FichasInfoAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'fichasinfoasid__id_fichas_info';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFichasInfoAsIdArray[] = FichasInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasinfoasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFichasInfoAsId = FichasInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasinfoasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for FichasItemValorAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'fichasitemvalorasid__id_fichas';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFichasItemValorAsIdArray[] = FichasItemValor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasitemvalorasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFichasItemValorAsId = FichasItemValor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasitemvalorasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for FichasNotasAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'fichasnotasasid__id_ficha_nota';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFichasNotasAsIdArray[] = FichasNotas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasnotasasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFichasNotasAsId = FichasNotas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasnotasasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for FichasVideosAsIdFicha Virtual Binding
			$strAlias = $strAliasPrefix . 'fichasvideosasidficha__id_ficha_video';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFichasVideosAsIdFichaArray[] = FichasVideos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasvideosasidficha__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFichasVideosAsIdFicha = FichasVideos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fichasvideosasidficha__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Fichases from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Fichas[]
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
					$objItem = Fichas::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Fichas::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Fichas object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fichas
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Fichas::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Fichas()->Id, $intId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Fichas objects,
		 * by IdMarca Index(es)
		 * @param integer $intIdMarca
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fichas[]
		*/
		public static function LoadArrayByIdMarca($intIdMarca, $objOptionalClauses = null) {
			// Call Fichas::QueryArray to perform the LoadArrayByIdMarca query
			try {
				return Fichas::QueryArray(
					QQ::Equal(QQN::Fichas()->IdMarca, $intIdMarca),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Fichases
		 * by IdMarca Index(es)
		 * @param integer $intIdMarca
		 * @return int
		*/
		public static function CountByIdMarca($intIdMarca) {
			// Call Fichas::QueryCount to perform the CountByIdMarca query
			return Fichas::QueryCount(
				QQ::Equal(QQN::Fichas()->IdMarca, $intIdMarca)
			);
		}
			
		/**
		 * Load an array of Fichas objects,
		 * by IdEstado Index(es)
		 * @param integer $intIdEstado
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fichas[]
		*/
		public static function LoadArrayByIdEstado($intIdEstado, $objOptionalClauses = null) {
			// Call Fichas::QueryArray to perform the LoadArrayByIdEstado query
			try {
				return Fichas::QueryArray(
					QQ::Equal(QQN::Fichas()->IdEstado, $intIdEstado),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Fichases
		 * by IdEstado Index(es)
		 * @param integer $intIdEstado
		 * @return int
		*/
		public static function CountByIdEstado($intIdEstado) {
			// Call Fichas::QueryCount to perform the CountByIdEstado query
			return Fichas::QueryCount(
				QQ::Equal(QQN::Fichas()->IdEstado, $intIdEstado)
			);
		}
			
		/**
		 * Load an array of Fichas objects,
		 * by IdTipos Index(es)
		 * @param integer $intIdTipos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fichas[]
		*/
		public static function LoadArrayByIdTipos($intIdTipos, $objOptionalClauses = null) {
			// Call Fichas::QueryArray to perform the LoadArrayByIdTipos query
			try {
				return Fichas::QueryArray(
					QQ::Equal(QQN::Fichas()->IdTipos, $intIdTipos),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Fichases
		 * by IdTipos Index(es)
		 * @param integer $intIdTipos
		 * @return int
		*/
		public static function CountByIdTipos($intIdTipos) {
			// Call Fichas::QueryCount to perform the CountByIdTipos query
			return Fichas::QueryCount(
				QQ::Equal(QQN::Fichas()->IdTipos, $intIdTipos)
			);
		}
			
		/**
		 * Load an array of Fichas objects,
		 * by IdVersion Index(es)
		 * @param integer $intIdVersion
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fichas[]
		*/
		public static function LoadArrayByIdVersion($intIdVersion, $objOptionalClauses = null) {
			// Call Fichas::QueryArray to perform the LoadArrayByIdVersion query
			try {
				return Fichas::QueryArray(
					QQ::Equal(QQN::Fichas()->IdVersion, $intIdVersion),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Fichases
		 * by IdVersion Index(es)
		 * @param integer $intIdVersion
		 * @return int
		*/
		public static function CountByIdVersion($intIdVersion) {
			// Call Fichas::QueryCount to perform the CountByIdVersion query
			return Fichas::QueryCount(
				QQ::Equal(QQN::Fichas()->IdVersion, $intIdVersion)
			);
		}
			
		/**
		 * Load an array of Fichas objects,
		 * by IdModelo Index(es)
		 * @param integer $intIdModelo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fichas[]
		*/
		public static function LoadArrayByIdModelo($intIdModelo, $objOptionalClauses = null) {
			// Call Fichas::QueryArray to perform the LoadArrayByIdModelo query
			try {
				return Fichas::QueryArray(
					QQ::Equal(QQN::Fichas()->IdModelo, $intIdModelo),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Fichases
		 * by IdModelo Index(es)
		 * @param integer $intIdModelo
		 * @return int
		*/
		public static function CountByIdModelo($intIdModelo) {
			// Call Fichas::QueryCount to perform the CountByIdModelo query
			return Fichas::QueryCount(
				QQ::Equal(QQN::Fichas()->IdModelo, $intIdModelo)
			);
		}
			
		/**
		 * Load an array of Fichas objects,
		 * by IdPais Index(es)
		 * @param integer $intIdPais
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fichas[]
		*/
		public static function LoadArrayByIdPais($intIdPais, $objOptionalClauses = null) {
			// Call Fichas::QueryArray to perform the LoadArrayByIdPais query
			try {
				return Fichas::QueryArray(
					QQ::Equal(QQN::Fichas()->IdPais, $intIdPais),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Fichases
		 * by IdPais Index(es)
		 * @param integer $intIdPais
		 * @return int
		*/
		public static function CountByIdPais($intIdPais) {
			// Call Fichas::QueryCount to perform the CountByIdPais query
			return Fichas::QueryCount(
				QQ::Equal(QQN::Fichas()->IdPais, $intIdPais)
			);
		}
			
		/**
		 * Load an array of Fichas objects,
		 * by IdSeguro Index(es)
		 * @param string $strIdSeguro
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fichas[]
		*/
		public static function LoadArrayByIdSeguro($strIdSeguro, $objOptionalClauses = null) {
			// Call Fichas::QueryArray to perform the LoadArrayByIdSeguro query
			try {
				return Fichas::QueryArray(
					QQ::Equal(QQN::Fichas()->IdSeguro, $strIdSeguro),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Fichases
		 * by IdSeguro Index(es)
		 * @param string $strIdSeguro
		 * @return int
		*/
		public static function CountByIdSeguro($strIdSeguro) {
			// Call Fichas::QueryCount to perform the CountByIdSeguro query
			return Fichas::QueryCount(
				QQ::Equal(QQN::Fichas()->IdSeguro, $strIdSeguro)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Fichas
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
		
			$database = new db_mysql();
			$database->connect();
			$this->db = $database;

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `fichas` (
							`id_marca`,
							`id_tipos`,
							`id_modelo`,
							`id_version`,
							`id_pais`,
							`id_seguro`,
							`descripcion`,
							`precio`,
							`moneda`,							
							`anio`,
							`combustible`,
							`cilindrada`,
							`cilindros`,
							`potencia_maxima`,
							`par_motor_torque`,
							`posicion`,
							`alimentacion`,
							`motor_short`,
							`valvulas`,
							`tipo`,
							`marchas`,
							`traccion`,
							`velocidad_maxima`,
							`aceleracion_0_100`,
							`consumo_urbano`,
							`consumo_interurbano`,
							`consumo_mixto`,
							`puertas`,
							`plazas`,
							`filas_de_asientos`,
							`info_ejes`,
							`peso`,
							`capacidad_baul`,
							`capacidad_tanque`,
							`capacidad_carga`,
							`frenos_delanteros`,
							`frenos_traseros`,
							`neumaticos`,
							`suspension_delantera`,
							`suspension_trasera`,
							`id_estado`,
							`procesada`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIdMarca) . ',
							' . $objDatabase->SqlVariable($this->intIdTipos) . ',
							' . $objDatabase->SqlVariable($this->intIdModelo) . ',
							' . $objDatabase->SqlVariable($this->intIdVersion) . ',
							' . $objDatabase->SqlVariable($this->intIdPais) . ',
							' . $objDatabase->SqlVariable($this->strIdSeguro) . ',
							' . $objDatabase->SqlVariable($this->strDescripcion) . ',
							' . $objDatabase->SqlVariable($this->strPrecio) . ',
							' . $objDatabase->SqlVariable($this->strMoneda) . ',								
							' . $objDatabase->SqlVariable($this->intAnio) . ',
							' . $objDatabase->SqlVariable($this->strCombustible) . ',
							' . $objDatabase->SqlVariable($this->strCilindrada) . ',
							' . $objDatabase->SqlVariable($this->strCilindros) . ',
							' . $objDatabase->SqlVariable($this->strPotenciaMaxima) . ',
							' . $objDatabase->SqlVariable($this->strParMotorTorque) . ',
							' . $objDatabase->SqlVariable($this->strPosicion) . ',
							' . $objDatabase->SqlVariable($this->strAlimentacion) . ',
							' . $objDatabase->SqlVariable($this->strMotorShort) . ',
							' . $objDatabase->SqlVariable($this->strValvulas) . ',
							' . $objDatabase->SqlVariable($this->strTipo) . ',
							' . $objDatabase->SqlVariable($this->strMarchas) . ',
							' . $objDatabase->SqlVariable($this->strTraccion) . ',
							' . $objDatabase->SqlVariable($this->strVelocidadMaxima) . ',
							' . $objDatabase->SqlVariable($this->strAceleracion0100) . ',
							' . $objDatabase->SqlVariable($this->strConsumoUrbano) . ',
							' . $objDatabase->SqlVariable($this->strConsumoInterurbano) . ',
							' . $objDatabase->SqlVariable($this->strConsumoMixto) . ',
							' . $objDatabase->SqlVariable($this->strPuertas) . ',
							' . $objDatabase->SqlVariable($this->strPlazas) . ',
							' . $objDatabase->SqlVariable($this->strFilasDeAsientos) . ',
							' . $objDatabase->SqlVariable($this->strInfoEjes) . ',
							' . $objDatabase->SqlVariable($this->strPeso) . ',
							' . $objDatabase->SqlVariable($this->strCapacidadBaul) . ',
							' . $objDatabase->SqlVariable($this->strCapacidadTanque) . ',
							' . $objDatabase->SqlVariable($this->strCapacidadCarga) . ',
							' . $objDatabase->SqlVariable($this->strFrenosDelanteros) . ',
							' . $objDatabase->SqlVariable($this->strFrenosTraseros) . ',
							' . $objDatabase->SqlVariable($this->strNeumaticos) . ',
							' . $objDatabase->SqlVariable($this->strSuspensionDelantera) . ',
							' . $objDatabase->SqlVariable($this->strSuspensionTrasera) . ',
							' . $objDatabase->SqlVariable($this->intIdEstado) . ',
							' . $objDatabase->SqlVariable($this->blnProcesada) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('fichas', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`fichas`
						SET
							`id_marca` = ' . $objDatabase->SqlVariable($this->intIdMarca) . ',
							`id_tipos` = ' . $objDatabase->SqlVariable($this->intIdTipos) . ',
							`id_modelo` = ' . $objDatabase->SqlVariable($this->intIdModelo) . ',
							`id_version` = ' . $objDatabase->SqlVariable($this->intIdVersion) . ',
							`id_pais` = ' . $objDatabase->SqlVariable($this->intIdPais) . ',
							`id_seguro` = ' . $objDatabase->SqlVariable($this->strIdSeguro) . ',
							`descripcion` = ' . $objDatabase->SqlVariable($this->strDescripcion) . ',
							`precio` = ' . $objDatabase->SqlVariable($this->strPrecio) . ',
							`moneda` = ' . $objDatabase->SqlVariable($this->strMoneda) . ',								
							`precio_desde` = ' . $objDatabase->SqlVariable($_POST['precio_desde']) . ',																
							`anio` = ' . $objDatabase->SqlVariable($this->intAnio) . ',
							`combustible` = ' . $objDatabase->SqlVariable($this->strCombustible) . ',
							`cilindrada` = ' . $objDatabase->SqlVariable($this->strCilindrada) . ',
							`cilindros` = ' . $objDatabase->SqlVariable($this->strCilindros) . ',
							`potencia_maxima` = ' . $objDatabase->SqlVariable($this->strPotenciaMaxima) . ',
							`par_motor_torque` = ' . $objDatabase->SqlVariable($this->strParMotorTorque) . ',
							`posicion` = ' . $objDatabase->SqlVariable($this->strPosicion) . ',
							`alimentacion` = ' . $objDatabase->SqlVariable($this->strAlimentacion) . ',
							`motor_short` = ' . $objDatabase->SqlVariable($this->strMotorShort) . ',
							`valvulas` = ' . $objDatabase->SqlVariable($this->strValvulas) . ',
							`tipo` = ' . $objDatabase->SqlVariable($this->strTipo) . ',
							`marchas` = ' . $objDatabase->SqlVariable($this->strMarchas) . ',
							`traccion` = ' . $objDatabase->SqlVariable($this->strTraccion) . ',
							`velocidad_maxima` = ' . $objDatabase->SqlVariable($this->strVelocidadMaxima) . ',
							`aceleracion_0_100` = ' . $objDatabase->SqlVariable($this->strAceleracion0100) . ',
							`consumo_urbano` = ' . $objDatabase->SqlVariable($this->strConsumoUrbano) . ',
							`consumo_interurbano` = ' . $objDatabase->SqlVariable($this->strConsumoInterurbano) . ',
							`consumo_mixto` = ' . $objDatabase->SqlVariable($this->strConsumoMixto) . ',
							`puertas` = ' . $objDatabase->SqlVariable($this->strPuertas) . ',
							`plazas` = ' . $objDatabase->SqlVariable($this->strPlazas) . ',
							`filas_de_asientos` = ' . $objDatabase->SqlVariable($this->strFilasDeAsientos) . ',
							`info_ejes` = ' . $objDatabase->SqlVariable($this->strInfoEjes) . ',
							`peso` = ' . $objDatabase->SqlVariable($this->strPeso) . ',
							`capacidad_baul` = ' . $objDatabase->SqlVariable($this->strCapacidadBaul) . ',
							`capacidad_tanque` = ' . $objDatabase->SqlVariable($this->strCapacidadTanque) . ',
							`capacidad_carga` = ' . $objDatabase->SqlVariable($this->strCapacidadCarga) . ',
							`frenos_delanteros` = ' . $objDatabase->SqlVariable($this->strFrenosDelanteros) . ',
							`frenos_traseros` = ' . $objDatabase->SqlVariable($this->strFrenosTraseros) . ',
							`neumaticos` = ' . $objDatabase->SqlVariable($this->strNeumaticos) . ',
							`suspension_delantera` = ' . $objDatabase->SqlVariable($this->strSuspensionDelantera) . ',
							`suspension_trasera` = ' . $objDatabase->SqlVariable($this->strSuspensionTrasera) . ',
							`id_estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . ',
							`procesada` = ' . $objDatabase->SqlVariable($this->blnProcesada) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
					');
					
					$database = $this->db;
					
					
										
					
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
		 * Delete this Fichas
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Fichas with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all Fichases
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas`');
		}

		/**
		 * Truncate fichas table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `fichas`');
		}

		/**
		 * Reload this Fichas from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Fichas object.');

			// Reload the Object
			$objReloaded = Fichas::Load($this->intId);

			// Update $this's local variables to match
			$this->IdMarca = $objReloaded->IdMarca;
			$this->IdTipos = $objReloaded->IdTipos;
			$this->IdModelo = $objReloaded->IdModelo;
			$this->IdVersion = $objReloaded->IdVersion;
			$this->IdPais = $objReloaded->IdPais;
			$this->strIdSeguro = $objReloaded->strIdSeguro;
			$this->strDescripcion = $objReloaded->strDescripcion;
			$this->strPrecio = $objReloaded->strPrecio;
			$this->strMoneda = $objReloaded->strMoneda;			
			$this->intAnio = $objReloaded->intAnio;
			$this->strCombustible = $objReloaded->strCombustible;
			$this->strCilindrada = $objReloaded->strCilindrada;
			$this->strCilindros = $objReloaded->strCilindros;
			$this->strPotenciaMaxima = $objReloaded->strPotenciaMaxima;
			$this->strParMotorTorque = $objReloaded->strParMotorTorque;
			$this->strPosicion = $objReloaded->strPosicion;
			$this->strAlimentacion = $objReloaded->strAlimentacion;
			$this->strMotorShort = $objReloaded->strMotorShort;
			$this->strValvulas = $objReloaded->strValvulas;
			$this->strTipo = $objReloaded->strTipo;
			$this->strMarchas = $objReloaded->strMarchas;
			$this->strTraccion = $objReloaded->strTraccion;
			$this->strVelocidadMaxima = $objReloaded->strVelocidadMaxima;
			$this->strAceleracion0100 = $objReloaded->strAceleracion0100;
			$this->strConsumoUrbano = $objReloaded->strConsumoUrbano;
			$this->strConsumoInterurbano = $objReloaded->strConsumoInterurbano;
			$this->strConsumoMixto = $objReloaded->strConsumoMixto;
			$this->strPuertas = $objReloaded->strPuertas;
			$this->strPlazas = $objReloaded->strPlazas;
			$this->strFilasDeAsientos = $objReloaded->strFilasDeAsientos;
			$this->strInfoEjes = $objReloaded->strInfoEjes;
			$this->strPeso = $objReloaded->strPeso;
			$this->strCapacidadBaul = $objReloaded->strCapacidadBaul;
			$this->strCapacidadTanque = $objReloaded->strCapacidadTanque;
			$this->strCapacidadCarga = $objReloaded->strCapacidadCarga;
			$this->strFrenosDelanteros = $objReloaded->strFrenosDelanteros;
			$this->strFrenosTraseros = $objReloaded->strFrenosTraseros;
			$this->strNeumaticos = $objReloaded->strNeumaticos;
			$this->strSuspensionDelantera = $objReloaded->strSuspensionDelantera;
			$this->strSuspensionTrasera = $objReloaded->strSuspensionTrasera;
			$this->IdEstado = $objReloaded->IdEstado;
			$this->blnProcesada = $objReloaded->blnProcesada;
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

				case 'IdMarca':
					/**
					 * Gets the value for intIdMarca (Not Null)
					 * @return integer
					 */
					return $this->intIdMarca;

				case 'IdTipos':
					/**
					 * Gets the value for intIdTipos (Not Null)
					 * @return integer
					 */
					return $this->intIdTipos;

				case 'IdModelo':
					/**
					 * Gets the value for intIdModelo (Not Null)
					 * @return integer
					 */
					return $this->intIdModelo;

				case 'IdVersion':
					/**
					 * Gets the value for intIdVersion (Not Null)
					 * @return integer
					 */
					return $this->intIdVersion;

				case 'IdPais':
					/**
					 * Gets the value for intIdPais (Not Null)
					 * @return integer
					 */
					return $this->intIdPais;

				case 'IdSeguro':
					/**
					 * Gets the value for strIdSeguro 
					 * @return string
					 */
					return $this->strIdSeguro;
					
				case 'IdServicio':
					/**
					 * Gets the value for strIdSeguro 
					 * @return string
					 */
					return $this->strIdServicio;
					

				case 'Descripcion':
					/**
					 * Gets the value for strDescripcion (Not Null)
					 * @return string
					 */
					return $this->strDescripcion;

				case 'Precio':
					/**
					 * Gets the value for strPrecio (Not Null)
					 * @return string
					 */
					return $this->strPrecio;
					
				case 'Moneda':
					/**
					 * Gets the value for strPrecio (Not Null)
					 * @return string
					 */
					return $this->strMoneda;
					

				case 'Anio':
					/**
					 * Gets the value for intAnio 
					 * @return integer
					 */
					return $this->intAnio;

				case 'Combustible':
					/**
					 * Gets the value for strCombustible 
					 * @return string
					 */
					return $this->strCombustible;

				case 'Cilindrada':
					/**
					 * Gets the value for strCilindrada 
					 * @return string
					 */
					return $this->strCilindrada;

				case 'Cilindros':
					/**
					 * Gets the value for strCilindros 
					 * @return string
					 */
					return $this->strCilindros;

				case 'PotenciaMaxima':
					/**
					 * Gets the value for strPotenciaMaxima 
					 * @return string
					 */
					return $this->strPotenciaMaxima;

				case 'ParMotorTorque':
					/**
					 * Gets the value for strParMotorTorque 
					 * @return string
					 */
					return $this->strParMotorTorque;

				case 'Posicion':
					/**
					 * Gets the value for strPosicion 
					 * @return string
					 */
					return $this->strPosicion;

				case 'Alimentacion':
					/**
					 * Gets the value for strAlimentacion 
					 * @return string
					 */
					return $this->strAlimentacion;

				case 'MotorShort':
					/**
					 * Gets the value for strMotorShort 
					 * @return string
					 */
					return $this->strMotorShort;

				case 'Valvulas':
					/**
					 * Gets the value for strValvulas 
					 * @return string
					 */
					return $this->strValvulas;

				case 'Tipo':
					/**
					 * Gets the value for strTipo 
					 * @return string
					 */
					return $this->strTipo;

				case 'Marchas':
					/**
					 * Gets the value for strMarchas 
					 * @return string
					 */
					return $this->strMarchas;

				case 'Traccion':
					/**
					 * Gets the value for strTraccion 
					 * @return string
					 */
					return $this->strTraccion;

				case 'VelocidadMaxima':
					/**
					 * Gets the value for strVelocidadMaxima 
					 * @return string
					 */
					return $this->strVelocidadMaxima;

				case 'Aceleracion0100':
					/**
					 * Gets the value for strAceleracion0100 
					 * @return string
					 */
					return $this->strAceleracion0100;

				case 'ConsumoUrbano':
					/**
					 * Gets the value for strConsumoUrbano 
					 * @return string
					 */
					return $this->strConsumoUrbano;

				case 'ConsumoInterurbano':
					/**
					 * Gets the value for strConsumoInterurbano 
					 * @return string
					 */
					return $this->strConsumoInterurbano;

				case 'ConsumoMixto':
					/**
					 * Gets the value for strConsumoMixto 
					 * @return string
					 */
					return $this->strConsumoMixto;

				case 'Puertas':
					/**
					 * Gets the value for strPuertas 
					 * @return string
					 */
					return $this->strPuertas;

				case 'Plazas':
					/**
					 * Gets the value for strPlazas 
					 * @return string
					 */
					return $this->strPlazas;

				case 'FilasDeAsientos':
					/**
					 * Gets the value for strFilasDeAsientos 
					 * @return string
					 */
					return $this->strFilasDeAsientos;

				case 'InfoEjes':
					/**
					 * Gets the value for strInfoEjes 
					 * @return string
					 */
					return $this->strInfoEjes;

				case 'Peso':
					/**
					 * Gets the value for strPeso 
					 * @return string
					 */
					return $this->strPeso;

				case 'CapacidadBaul':
					/**
					 * Gets the value for strCapacidadBaul 
					 * @return string
					 */
					return $this->strCapacidadBaul;

				case 'CapacidadTanque':
					/**
					 * Gets the value for strCapacidadTanque 
					 * @return string
					 */
					return $this->strCapacidadTanque;

				case 'CapacidadCarga':
					/**
					 * Gets the value for strCapacidadCarga 
					 * @return string
					 */
					return $this->strCapacidadCarga;

				case 'FrenosDelanteros':
					/**
					 * Gets the value for strFrenosDelanteros 
					 * @return string
					 */
					return $this->strFrenosDelanteros;

				case 'FrenosTraseros':
					/**
					 * Gets the value for strFrenosTraseros 
					 * @return string
					 */
					return $this->strFrenosTraseros;

				case 'Neumaticos':
					/**
					 * Gets the value for strNeumaticos 
					 * @return string
					 */
					return $this->strNeumaticos;

				case 'SuspensionDelantera':
					/**
					 * Gets the value for strSuspensionDelantera 
					 * @return string
					 */
					return $this->strSuspensionDelantera;

				case 'SuspensionTrasera':
					/**
					 * Gets the value for strSuspensionTrasera 
					 * @return string
					 */
					return $this->strSuspensionTrasera;

				case 'IdEstado':
					/**
					 * Gets the value for intIdEstado (Not Null)
					 * @return integer
					 */
					return $this->intIdEstado;

				case 'Procesada':
					/**
					 * Gets the value for blnProcesada 
					 * @return boolean
					 */
					return $this->blnProcesada;


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

				case 'IdTiposObject':
					/**
					 * Gets the value for the Tipos object referenced by intIdTipos (Not Null)
					 * @return Tipos
					 */
					try {
						if ((!$this->objIdTiposObject) && (!is_null($this->intIdTipos)))
							$this->objIdTiposObject = Tipos::Load($this->intIdTipos);
						return $this->objIdTiposObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdModeloObject':
					/**
					 * Gets the value for the Modelo object referenced by intIdModelo (Not Null)
					 * @return Modelo
					 */
					try {
						if ((!$this->objIdModeloObject) && (!is_null($this->intIdModelo)))
							$this->objIdModeloObject = Modelo::Load($this->intIdModelo);
						return $this->objIdModeloObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdVersionObject':
					/**
					 * Gets the value for the Version object referenced by intIdVersion (Not Null)
					 * @return Version
					 */
					try {
						if ((!$this->objIdVersionObject) && (!is_null($this->intIdVersion)))
							$this->objIdVersionObject = Version::Load($this->intIdVersion);
						return $this->objIdVersionObject;
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

				case 'IdEstadoObject':
					/**
					 * Gets the value for the Estados object referenced by intIdEstado (Not Null)
					 * @return Estados
					 */
					try {
						if ((!$this->objIdEstadoObject) && (!is_null($this->intIdEstado)))
							$this->objIdEstadoObject = Estados::Load($this->intIdEstado);
						return $this->objIdEstadoObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_FichasImagenesAsIdFicha':
					/**
					 * Gets the value for the private _objFichasImagenesAsIdFicha (Read-Only)
					 * if set due to an expansion on the fichas_imagenes.id_ficha reverse relationship
					 * @return FichasImagenes
					 */
					return $this->_objFichasImagenesAsIdFicha;

				case '_FichasImagenesAsIdFichaArray':
					/**
					 * Gets the value for the private _objFichasImagenesAsIdFichaArray (Read-Only)
					 * if set due to an ExpandAsArray on the fichas_imagenes.id_ficha reverse relationship
					 * @return FichasImagenes[]
					 */
					return (array) $this->_objFichasImagenesAsIdFichaArray;

				case '_FichasInfoAsId':
					/**
					 * Gets the value for the private _objFichasInfoAsId (Read-Only)
					 * if set due to an expansion on the fichas_info.id_fichas reverse relationship
					 * @return FichasInfo
					 */
					return $this->_objFichasInfoAsId;

				case '_FichasInfoAsIdArray':
					/**
					 * Gets the value for the private _objFichasInfoAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the fichas_info.id_fichas reverse relationship
					 * @return FichasInfo[]
					 */
					return (array) $this->_objFichasInfoAsIdArray;

				case '_FichasItemValorAsId':
					/**
					 * Gets the value for the private _objFichasItemValorAsId (Read-Only)
					 * if set due to an expansion on the fichas_item_valor.id_fichas reverse relationship
					 * @return FichasItemValor
					 */
					return $this->_objFichasItemValorAsId;

				case '_FichasItemValorAsIdArray':
					/**
					 * Gets the value for the private _objFichasItemValorAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the fichas_item_valor.id_fichas reverse relationship
					 * @return FichasItemValor[]
					 */
					return (array) $this->_objFichasItemValorAsIdArray;

				case '_FichasNotasAsId':
					/**
					 * Gets the value for the private _objFichasNotasAsId (Read-Only)
					 * if set due to an expansion on the fichas_notas.id_fichas reverse relationship
					 * @return FichasNotas
					 */
					return $this->_objFichasNotasAsId;

				case '_FichasNotasAsIdArray':
					/**
					 * Gets the value for the private _objFichasNotasAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the fichas_notas.id_fichas reverse relationship
					 * @return FichasNotas[]
					 */
					return (array) $this->_objFichasNotasAsIdArray;

				case '_FichasVideosAsIdFicha':
					/**
					 * Gets the value for the private _objFichasVideosAsIdFicha (Read-Only)
					 * if set due to an expansion on the fichas_videos.id_ficha reverse relationship
					 * @return FichasVideos
					 */
					return $this->_objFichasVideosAsIdFicha;

				case '_FichasVideosAsIdFichaArray':
					/**
					 * Gets the value for the private _objFichasVideosAsIdFichaArray (Read-Only)
					 * if set due to an ExpandAsArray on the fichas_videos.id_ficha reverse relationship
					 * @return FichasVideos[]
					 */
					return (array) $this->_objFichasVideosAsIdFichaArray;


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

				case 'IdTipos':
					/**
					 * Sets the value for intIdTipos (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdTiposObject = null;
						return ($this->intIdTipos = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdModelo':
					/**
					 * Sets the value for intIdModelo (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdModeloObject = null;
						return ($this->intIdModelo = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdVersion':
					/**
					 * Sets the value for intIdVersion (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdVersionObject = null;
						return ($this->intIdVersion = QType::Cast($mixValue, QType::Integer));
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

				case 'IdSeguro':
					/**
					 * Sets the value for strIdSeguro 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strIdSeguro = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					
				case 'IdServicio':
					/**
					 * Sets the value for strIdSeguro 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strIdServicio = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					

				case 'Descripcion':
					/**
					 * Sets the value for strDescripcion (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescripcion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Precio':
					/**
					 * Sets the value for strPrecio (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPrecio = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					
				case 'Moneda':
					/**
					 * Sets the value for strPrecio (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMoneda = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					

				case 'Anio':
					/**
					 * Sets the value for intAnio 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intAnio = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Combustible':
					/**
					 * Sets the value for strCombustible 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCombustible = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Cilindrada':
					/**
					 * Sets the value for strCilindrada 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCilindrada = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Cilindros':
					/**
					 * Sets the value for strCilindros 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCilindros = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PotenciaMaxima':
					/**
					 * Sets the value for strPotenciaMaxima 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPotenciaMaxima = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ParMotorTorque':
					/**
					 * Sets the value for strParMotorTorque 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strParMotorTorque = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Posicion':
					/**
					 * Sets the value for strPosicion 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPosicion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Alimentacion':
					/**
					 * Sets the value for strAlimentacion 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAlimentacion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MotorShort':
					/**
					 * Sets the value for strMotorShort 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMotorShort = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Valvulas':
					/**
					 * Sets the value for strValvulas 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strValvulas = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tipo':
					/**
					 * Sets the value for strTipo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTipo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Marchas':
					/**
					 * Sets the value for strMarchas 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMarchas = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Traccion':
					/**
					 * Sets the value for strTraccion 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTraccion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'VelocidadMaxima':
					/**
					 * Sets the value for strVelocidadMaxima 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strVelocidadMaxima = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Aceleracion0100':
					/**
					 * Sets the value for strAceleracion0100 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAceleracion0100 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ConsumoUrbano':
					/**
					 * Sets the value for strConsumoUrbano 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strConsumoUrbano = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ConsumoInterurbano':
					/**
					 * Sets the value for strConsumoInterurbano 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strConsumoInterurbano = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ConsumoMixto':
					/**
					 * Sets the value for strConsumoMixto 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strConsumoMixto = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Puertas':
					/**
					 * Sets the value for strPuertas 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPuertas = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Plazas':
					/**
					 * Sets the value for strPlazas 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPlazas = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FilasDeAsientos':
					/**
					 * Sets the value for strFilasDeAsientos 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFilasDeAsientos = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'InfoEjes':
					/**
					 * Sets the value for strInfoEjes 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strInfoEjes = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Peso':
					/**
					 * Sets the value for strPeso 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPeso = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CapacidadBaul':
					/**
					 * Sets the value for strCapacidadBaul 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCapacidadBaul = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CapacidadTanque':
					/**
					 * Sets the value for strCapacidadTanque 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCapacidadTanque = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CapacidadCarga':
					/**
					 * Sets the value for strCapacidadCarga 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCapacidadCarga = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FrenosDelanteros':
					/**
					 * Sets the value for strFrenosDelanteros 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFrenosDelanteros = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FrenosTraseros':
					/**
					 * Sets the value for strFrenosTraseros 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFrenosTraseros = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Neumaticos':
					/**
					 * Sets the value for strNeumaticos 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNeumaticos = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SuspensionDelantera':
					/**
					 * Sets the value for strSuspensionDelantera 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSuspensionDelantera = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SuspensionTrasera':
					/**
					 * Sets the value for strSuspensionTrasera 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSuspensionTrasera = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdEstado':
					/**
					 * Sets the value for intIdEstado (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdEstadoObject = null;
						return ($this->intIdEstado = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Procesada':
					/**
					 * Sets the value for blnProcesada 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnProcesada = QType::Cast($mixValue, QType::Boolean));
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
							throw new QCallerException('Unable to set an unsaved IdMarcaObject for this Fichas');

						// Update Local Member Variables
						$this->objIdMarcaObject = $mixValue;
						$this->intIdMarca = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'IdTiposObject':
					/**
					 * Sets the value for the Tipos object referenced by intIdTipos (Not Null)
					 * @param Tipos $mixValue
					 * @return Tipos
					 */
					if (is_null($mixValue)) {
						$this->intIdTipos = null;
						$this->objIdTiposObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Tipos object
						try {
							$mixValue = QType::Cast($mixValue, 'Tipos');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Tipos object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved IdTiposObject for this Fichas');

						// Update Local Member Variables
						$this->objIdTiposObject = $mixValue;
						$this->intIdTipos = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'IdModeloObject':
					/**
					 * Sets the value for the Modelo object referenced by intIdModelo (Not Null)
					 * @param Modelo $mixValue
					 * @return Modelo
					 */
					if (is_null($mixValue)) {
						$this->intIdModelo = null;
						$this->objIdModeloObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Modelo object
						try {
							$mixValue = QType::Cast($mixValue, 'Modelo');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Modelo object
						if (is_null($mixValue->IdModelo))
							throw new QCallerException('Unable to set an unsaved IdModeloObject for this Fichas');

						// Update Local Member Variables
						$this->objIdModeloObject = $mixValue;
						$this->intIdModelo = $mixValue->IdModelo;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'IdVersionObject':
					/**
					 * Sets the value for the Version object referenced by intIdVersion (Not Null)
					 * @param Version $mixValue
					 * @return Version
					 */
					if (is_null($mixValue)) {
						$this->intIdVersion = null;
						$this->objIdVersionObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Version object
						try {
							$mixValue = QType::Cast($mixValue, 'Version');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Version object
						if (is_null($mixValue->IdVersion))
							throw new QCallerException('Unable to set an unsaved IdVersionObject for this Fichas');

						// Update Local Member Variables
						$this->objIdVersionObject = $mixValue;
						$this->intIdVersion = $mixValue->IdVersion;

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
							throw new QCallerException('Unable to set an unsaved IdPaisObject for this Fichas');

						// Update Local Member Variables
						$this->objIdPaisObject = $mixValue;
						$this->intIdPais = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'IdEstadoObject':
					/**
					 * Sets the value for the Estados object referenced by intIdEstado (Not Null)
					 * @param Estados $mixValue
					 * @return Estados
					 */
					if (is_null($mixValue)) {
						$this->intIdEstado = null;
						$this->objIdEstadoObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Estados object
						try {
							$mixValue = QType::Cast($mixValue, 'Estados');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Estados object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved IdEstadoObject for this Fichas');

						// Update Local Member Variables
						$this->objIdEstadoObject = $mixValue;
						$this->intIdEstado = $mixValue->Id;

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

			
		
		// Related Objects' Methods for FichasImagenesAsIdFicha
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FichasImagenesesAsIdFicha as an array of FichasImagenes objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasImagenes[]
		*/ 
		public function GetFichasImagenesAsIdFichaArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FichasImagenes::LoadArrayByIdFicha($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FichasImagenesesAsIdFicha
		 * @return int
		*/ 
		public function CountFichasImagenesesAsIdFicha() {
			if ((is_null($this->intId)))
				return 0;

			return FichasImagenes::CountByIdFicha($this->intId);
		}

		/**
		 * Associates a FichasImagenesAsIdFicha
		 * @param FichasImagenes $objFichasImagenes
		 * @return void
		*/ 
		public function AssociateFichasImagenesAsIdFicha(FichasImagenes $objFichasImagenes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasImagenesAsIdFicha on this unsaved Fichas.');
			if ((is_null($objFichasImagenes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasImagenesAsIdFicha on this Fichas with an unsaved FichasImagenes.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_imagenes`
				SET
					`id_ficha` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichasImagenes->Id) . '
			');
		}

		/**
		 * Unassociates a FichasImagenesAsIdFicha
		 * @param FichasImagenes $objFichasImagenes
		 * @return void
		*/ 
		public function UnassociateFichasImagenesAsIdFicha(FichasImagenes $objFichasImagenes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasImagenesAsIdFicha on this unsaved Fichas.');
			if ((is_null($objFichasImagenes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasImagenesAsIdFicha on this Fichas with an unsaved FichasImagenes.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_imagenes`
				SET
					`id_ficha` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichasImagenes->Id) . ' AND
					`id_ficha` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all FichasImagenesesAsIdFicha
		 * @return void
		*/ 
		public function UnassociateAllFichasImagenesesAsIdFicha() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasImagenesAsIdFicha on this unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_imagenes`
				SET
					`id_ficha` = null
				WHERE
					`id_ficha` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FichasImagenesAsIdFicha
		 * @param FichasImagenes $objFichasImagenes
		 * @return void
		*/ 
		public function DeleteAssociatedFichasImagenesAsIdFicha(FichasImagenes $objFichasImagenes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasImagenesAsIdFicha on this unsaved Fichas.');
			if ((is_null($objFichasImagenes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasImagenesAsIdFicha on this Fichas with an unsaved FichasImagenes.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_imagenes`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFichasImagenes->Id) . ' AND
					`id_ficha` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated FichasImagenesesAsIdFicha
		 * @return void
		*/ 
		public function DeleteAllFichasImagenesesAsIdFicha() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasImagenesAsIdFicha on this unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_imagenes`
				WHERE
					`id_ficha` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for FichasInfoAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FichasInfosAsId as an array of FichasInfo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasInfo[]
		*/ 
		public function GetFichasInfoAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FichasInfo::LoadArrayByIdFichas($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FichasInfosAsId
		 * @return int
		*/ 
		public function CountFichasInfosAsId() {
			if ((is_null($this->intId)))
				return 0;

			return FichasInfo::CountByIdFichas($this->intId);
		}

		/**
		 * Associates a FichasInfoAsId
		 * @param FichasInfo $objFichasInfo
		 * @return void
		*/ 
		public function AssociateFichasInfoAsId(FichasInfo $objFichasInfo) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasInfoAsId on this unsaved Fichas.');
			if ((is_null($objFichasInfo->IdFichasInfo)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasInfoAsId on this Fichas with an unsaved FichasInfo.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_info`
				SET
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id_fichas_info` = ' . $objDatabase->SqlVariable($objFichasInfo->IdFichasInfo) . '
			');
		}

		/**
		 * Unassociates a FichasInfoAsId
		 * @param FichasInfo $objFichasInfo
		 * @return void
		*/ 
		public function UnassociateFichasInfoAsId(FichasInfo $objFichasInfo) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasInfoAsId on this unsaved Fichas.');
			if ((is_null($objFichasInfo->IdFichasInfo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasInfoAsId on this Fichas with an unsaved FichasInfo.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_info`
				SET
					`id_fichas` = null
				WHERE
					`id_fichas_info` = ' . $objDatabase->SqlVariable($objFichasInfo->IdFichasInfo) . ' AND
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all FichasInfosAsId
		 * @return void
		*/ 
		public function UnassociateAllFichasInfosAsId() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasInfoAsId on this unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_info`
				SET
					`id_fichas` = null
				WHERE
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FichasInfoAsId
		 * @param FichasInfo $objFichasInfo
		 * @return void
		*/ 
		public function DeleteAssociatedFichasInfoAsId(FichasInfo $objFichasInfo) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasInfoAsId on this unsaved Fichas.');
			if ((is_null($objFichasInfo->IdFichasInfo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasInfoAsId on this Fichas with an unsaved FichasInfo.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_info`
				WHERE
					`id_fichas_info` = ' . $objDatabase->SqlVariable($objFichasInfo->IdFichasInfo) . ' AND
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated FichasInfosAsId
		 * @return void
		*/ 
		public function DeleteAllFichasInfosAsId() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasInfoAsId on this unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_info`
				WHERE
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for FichasItemValorAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FichasItemValorsAsId as an array of FichasItemValor objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasItemValor[]
		*/ 
		public function GetFichasItemValorAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FichasItemValor::LoadArrayByIdFichas($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FichasItemValorsAsId
		 * @return int
		*/ 
		public function CountFichasItemValorsAsId() {
			if ((is_null($this->intId)))
				return 0;

			return FichasItemValor::CountByIdFichas($this->intId);
		}

		/**
		 * Associates a FichasItemValorAsId
		 * @param FichasItemValor $objFichasItemValor
		 * @return void
		*/ 
		public function AssociateFichasItemValorAsId(FichasItemValor $objFichasItemValor) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasItemValorAsId on this unsaved Fichas.');
			if ((is_null($objFichasItemValor->IdFichas)) || (is_null($objFichasItemValor->IdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasItemValorAsId on this Fichas with an unsaved FichasItemValor.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_item_valor`
				SET
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id_fichas` = ' . $objDatabase->SqlVariable($objFichasItemValor->IdFichas) . ' AND
					`id_item` = ' . $objDatabase->SqlVariable($objFichasItemValor->IdItem) . '
			');
		}

		/**
		 * Unassociates a FichasItemValorAsId
		 * @param FichasItemValor $objFichasItemValor
		 * @return void
		*/ 
		public function UnassociateFichasItemValorAsId(FichasItemValor $objFichasItemValor) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasItemValorAsId on this unsaved Fichas.');
			if ((is_null($objFichasItemValor->IdFichas)) || (is_null($objFichasItemValor->IdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasItemValorAsId on this Fichas with an unsaved FichasItemValor.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_item_valor`
				SET
					`id_fichas` = null
				WHERE
					`id_fichas` = ' . $objDatabase->SqlVariable($objFichasItemValor->IdFichas) . ' AND
					`id_item` = ' . $objDatabase->SqlVariable($objFichasItemValor->IdItem) . ' AND
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all FichasItemValorsAsId
		 * @return void
		*/ 
		public function UnassociateAllFichasItemValorsAsId() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasItemValorAsId on this unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_item_valor`
				SET
					`id_fichas` = null
				WHERE
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FichasItemValorAsId
		 * @param FichasItemValor $objFichasItemValor
		 * @return void
		*/ 
		public function DeleteAssociatedFichasItemValorAsId(FichasItemValor $objFichasItemValor) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasItemValorAsId on this unsaved Fichas.');
			if ((is_null($objFichasItemValor->IdFichas)) || (is_null($objFichasItemValor->IdItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasItemValorAsId on this Fichas with an unsaved FichasItemValor.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_item_valor`
				WHERE
					`id_fichas` = ' . $objDatabase->SqlVariable($objFichasItemValor->IdFichas) . ' AND
					`id_item` = ' . $objDatabase->SqlVariable($objFichasItemValor->IdItem) . ' AND
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated FichasItemValorsAsId
		 * @return void
		*/ 
		public function DeleteAllFichasItemValorsAsId() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasItemValorAsId on this unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_item_valor`
				WHERE
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for FichasNotasAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FichasNotasesAsId as an array of FichasNotas objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasNotas[]
		*/ 
		public function GetFichasNotasAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FichasNotas::LoadArrayByIdFichas($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FichasNotasesAsId
		 * @return int
		*/ 
		public function CountFichasNotasesAsId() {
			if ((is_null($this->intId)))
				return 0;

			return FichasNotas::CountByIdFichas($this->intId);
		}

		/**
		 * Associates a FichasNotasAsId
		 * @param FichasNotas $objFichasNotas
		 * @return void
		*/ 
		public function AssociateFichasNotasAsId(FichasNotas $objFichasNotas) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasNotasAsId on this unsaved Fichas.');
			if ((is_null($objFichasNotas->IdFichaNota)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasNotasAsId on this Fichas with an unsaved FichasNotas.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_notas`
				SET
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id_ficha_nota` = ' . $objDatabase->SqlVariable($objFichasNotas->IdFichaNota) . '
			');
		}

		/**
		 * Unassociates a FichasNotasAsId
		 * @param FichasNotas $objFichasNotas
		 * @return void
		*/ 
		public function UnassociateFichasNotasAsId(FichasNotas $objFichasNotas) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasNotasAsId on this unsaved Fichas.');
			if ((is_null($objFichasNotas->IdFichaNota)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasNotasAsId on this Fichas with an unsaved FichasNotas.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_notas`
				SET
					`id_fichas` = null
				WHERE
					`id_ficha_nota` = ' . $objDatabase->SqlVariable($objFichasNotas->IdFichaNota) . ' AND
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all FichasNotasesAsId
		 * @return void
		*/ 
		public function UnassociateAllFichasNotasesAsId() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasNotasAsId on this unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_notas`
				SET
					`id_fichas` = null
				WHERE
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FichasNotasAsId
		 * @param FichasNotas $objFichasNotas
		 * @return void
		*/ 
		public function DeleteAssociatedFichasNotasAsId(FichasNotas $objFichasNotas) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasNotasAsId on this unsaved Fichas.');
			if ((is_null($objFichasNotas->IdFichaNota)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasNotasAsId on this Fichas with an unsaved FichasNotas.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_notas`
				WHERE
					`id_ficha_nota` = ' . $objDatabase->SqlVariable($objFichasNotas->IdFichaNota) . ' AND
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated FichasNotasesAsId
		 * @return void
		*/ 
		public function DeleteAllFichasNotasesAsId() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasNotasAsId on this unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_notas`
				WHERE
					`id_fichas` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for FichasVideosAsIdFicha
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FichasVideosesAsIdFicha as an array of FichasVideos objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasVideos[]
		*/ 
		public function GetFichasVideosAsIdFichaArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FichasVideos::LoadArrayByIdFicha($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FichasVideosesAsIdFicha
		 * @return int
		*/ 
		public function CountFichasVideosesAsIdFicha() {
			if ((is_null($this->intId)))
				return 0;

			return FichasVideos::CountByIdFicha($this->intId);
		}

		/**
		 * Associates a FichasVideosAsIdFicha
		 * @param FichasVideos $objFichasVideos
		 * @return void
		*/ 
		public function AssociateFichasVideosAsIdFicha(FichasVideos $objFichasVideos) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasVideosAsIdFicha on this unsaved Fichas.');
			if ((is_null($objFichasVideos->IdFichaVideo)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFichasVideosAsIdFicha on this Fichas with an unsaved FichasVideos.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_videos`
				SET
					`id_ficha` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id_ficha_video` = ' . $objDatabase->SqlVariable($objFichasVideos->IdFichaVideo) . '
			');
		}

		/**
		 * Unassociates a FichasVideosAsIdFicha
		 * @param FichasVideos $objFichasVideos
		 * @return void
		*/ 
		public function UnassociateFichasVideosAsIdFicha(FichasVideos $objFichasVideos) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasVideosAsIdFicha on this unsaved Fichas.');
			if ((is_null($objFichasVideos->IdFichaVideo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasVideosAsIdFicha on this Fichas with an unsaved FichasVideos.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_videos`
				SET
					`id_ficha` = null
				WHERE
					`id_ficha_video` = ' . $objDatabase->SqlVariable($objFichasVideos->IdFichaVideo) . ' AND
					`id_ficha` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all FichasVideosesAsIdFicha
		 * @return void
		*/ 
		public function UnassociateAllFichasVideosesAsIdFicha() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasVideosAsIdFicha on this unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fichas_videos`
				SET
					`id_ficha` = null
				WHERE
					`id_ficha` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FichasVideosAsIdFicha
		 * @param FichasVideos $objFichasVideos
		 * @return void
		*/ 
		public function DeleteAssociatedFichasVideosAsIdFicha(FichasVideos $objFichasVideos) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasVideosAsIdFicha on this unsaved Fichas.');
			if ((is_null($objFichasVideos->IdFichaVideo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasVideosAsIdFicha on this Fichas with an unsaved FichasVideos.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_videos`
				WHERE
					`id_ficha_video` = ' . $objDatabase->SqlVariable($objFichasVideos->IdFichaVideo) . ' AND
					`id_ficha` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated FichasVideosesAsIdFicha
		 * @return void
		*/ 
		public function DeleteAllFichasVideosesAsIdFicha() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFichasVideosAsIdFicha on this unsaved Fichas.');

			// Get the Database Object for this Class
			$objDatabase = Fichas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_videos`
				WHERE
					`id_ficha` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Fichas"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="IdMarcaObject" type="xsd1:Marcas"/>';
			$strToReturn .= '<element name="IdTiposObject" type="xsd1:Tipos"/>';
			$strToReturn .= '<element name="IdModeloObject" type="xsd1:Modelo"/>';
			$strToReturn .= '<element name="IdVersionObject" type="xsd1:Version"/>';
			$strToReturn .= '<element name="IdPaisObject" type="xsd1:Paises"/>';
			$strToReturn .= '<element name="IdSeguro" type="xsd:string"/>';
			$strToReturn .= '<element name="Descripcion" type="xsd:string"/>';
			$strToReturn .= '<element name="Precio" type="xsd:string"/>';
			$strToReturn .= '<element name="Anio" type="xsd:int"/>';
			$strToReturn .= '<element name="Combustible" type="xsd:string"/>';
			$strToReturn .= '<element name="Cilindrada" type="xsd:string"/>';
			$strToReturn .= '<element name="Cilindros" type="xsd:string"/>';
			$strToReturn .= '<element name="PotenciaMaxima" type="xsd:string"/>';
			$strToReturn .= '<element name="ParMotorTorque" type="xsd:string"/>';
			$strToReturn .= '<element name="Posicion" type="xsd:string"/>';
			$strToReturn .= '<element name="Alimentacion" type="xsd:string"/>';
			$strToReturn .= '<element name="MotorShort" type="xsd:string"/>';
			$strToReturn .= '<element name="Valvulas" type="xsd:string"/>';
			$strToReturn .= '<element name="Tipo" type="xsd:string"/>';
			$strToReturn .= '<element name="Marchas" type="xsd:string"/>';
			$strToReturn .= '<element name="Traccion" type="xsd:string"/>';
			$strToReturn .= '<element name="VelocidadMaxima" type="xsd:string"/>';
			$strToReturn .= '<element name="Aceleracion0100" type="xsd:string"/>';
			$strToReturn .= '<element name="ConsumoUrbano" type="xsd:string"/>';
			$strToReturn .= '<element name="ConsumoInterurbano" type="xsd:string"/>';
			$strToReturn .= '<element name="ConsumoMixto" type="xsd:string"/>';
			$strToReturn .= '<element name="Puertas" type="xsd:string"/>';
			$strToReturn .= '<element name="Plazas" type="xsd:string"/>';
			$strToReturn .= '<element name="FilasDeAsientos" type="xsd:string"/>';
			$strToReturn .= '<element name="InfoEjes" type="xsd:string"/>';
			$strToReturn .= '<element name="Peso" type="xsd:string"/>';
			$strToReturn .= '<element name="CapacidadBaul" type="xsd:string"/>';
			$strToReturn .= '<element name="CapacidadTanque" type="xsd:string"/>';
			$strToReturn .= '<element name="CapacidadCarga" type="xsd:string"/>';
			$strToReturn .= '<element name="FrenosDelanteros" type="xsd:string"/>';
			$strToReturn .= '<element name="FrenosTraseros" type="xsd:string"/>';
			$strToReturn .= '<element name="Neumaticos" type="xsd:string"/>';
			$strToReturn .= '<element name="SuspensionDelantera" type="xsd:string"/>';
			$strToReturn .= '<element name="SuspensionTrasera" type="xsd:string"/>';
			$strToReturn .= '<element name="IdEstadoObject" type="xsd1:Estados"/>';
			$strToReturn .= '<element name="Procesada" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Fichas', $strComplexTypeArray)) {
				$strComplexTypeArray['Fichas'] = Fichas::GetSoapComplexTypeXml();
				Marcas::AlterSoapComplexTypeArray($strComplexTypeArray);
				Tipos::AlterSoapComplexTypeArray($strComplexTypeArray);
				Modelo::AlterSoapComplexTypeArray($strComplexTypeArray);
				Version::AlterSoapComplexTypeArray($strComplexTypeArray);
				Paises::AlterSoapComplexTypeArray($strComplexTypeArray);
				Estados::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Fichas::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Fichas();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'IdMarcaObject')) &&
				($objSoapObject->IdMarcaObject))
				$objToReturn->IdMarcaObject = Marcas::GetObjectFromSoapObject($objSoapObject->IdMarcaObject);
			if ((property_exists($objSoapObject, 'IdTiposObject')) &&
				($objSoapObject->IdTiposObject))
				$objToReturn->IdTiposObject = Tipos::GetObjectFromSoapObject($objSoapObject->IdTiposObject);
			if ((property_exists($objSoapObject, 'IdModeloObject')) &&
				($objSoapObject->IdModeloObject))
				$objToReturn->IdModeloObject = Modelo::GetObjectFromSoapObject($objSoapObject->IdModeloObject);
			if ((property_exists($objSoapObject, 'IdVersionObject')) &&
				($objSoapObject->IdVersionObject))
				$objToReturn->IdVersionObject = Version::GetObjectFromSoapObject($objSoapObject->IdVersionObject);
			if ((property_exists($objSoapObject, 'IdPaisObject')) &&
				($objSoapObject->IdPaisObject))
				$objToReturn->IdPaisObject = Paises::GetObjectFromSoapObject($objSoapObject->IdPaisObject);
			if (property_exists($objSoapObject, 'IdSeguro'))
				$objToReturn->strIdSeguro = $objSoapObject->IdSeguro;
			if (property_exists($objSoapObject, 'Descripcion'))
				$objToReturn->strDescripcion = $objSoapObject->Descripcion;
			if (property_exists($objSoapObject, 'Precio'))
				$objToReturn->strPrecio = $objSoapObject->Precio;
			if (property_exists($objSoapObject, 'Anio'))
				$objToReturn->intAnio = $objSoapObject->Anio;
			if (property_exists($objSoapObject, 'Combustible'))
				$objToReturn->strCombustible = $objSoapObject->Combustible;
			if (property_exists($objSoapObject, 'Cilindrada'))
				$objToReturn->strCilindrada = $objSoapObject->Cilindrada;
			if (property_exists($objSoapObject, 'Cilindros'))
				$objToReturn->strCilindros = $objSoapObject->Cilindros;
			if (property_exists($objSoapObject, 'PotenciaMaxima'))
				$objToReturn->strPotenciaMaxima = $objSoapObject->PotenciaMaxima;
			if (property_exists($objSoapObject, 'ParMotorTorque'))
				$objToReturn->strParMotorTorque = $objSoapObject->ParMotorTorque;
			if (property_exists($objSoapObject, 'Posicion'))
				$objToReturn->strPosicion = $objSoapObject->Posicion;
			if (property_exists($objSoapObject, 'Alimentacion'))
				$objToReturn->strAlimentacion = $objSoapObject->Alimentacion;
			if (property_exists($objSoapObject, 'MotorShort'))
				$objToReturn->strMotorShort = $objSoapObject->MotorShort;
			if (property_exists($objSoapObject, 'Valvulas'))
				$objToReturn->strValvulas = $objSoapObject->Valvulas;
			if (property_exists($objSoapObject, 'Tipo'))
				$objToReturn->strTipo = $objSoapObject->Tipo;
			if (property_exists($objSoapObject, 'Marchas'))
				$objToReturn->strMarchas = $objSoapObject->Marchas;
			if (property_exists($objSoapObject, 'Traccion'))
				$objToReturn->strTraccion = $objSoapObject->Traccion;
			if (property_exists($objSoapObject, 'VelocidadMaxima'))
				$objToReturn->strVelocidadMaxima = $objSoapObject->VelocidadMaxima;
			if (property_exists($objSoapObject, 'Aceleracion0100'))
				$objToReturn->strAceleracion0100 = $objSoapObject->Aceleracion0100;
			if (property_exists($objSoapObject, 'ConsumoUrbano'))
				$objToReturn->strConsumoUrbano = $objSoapObject->ConsumoUrbano;
			if (property_exists($objSoapObject, 'ConsumoInterurbano'))
				$objToReturn->strConsumoInterurbano = $objSoapObject->ConsumoInterurbano;
			if (property_exists($objSoapObject, 'ConsumoMixto'))
				$objToReturn->strConsumoMixto = $objSoapObject->ConsumoMixto;
			if (property_exists($objSoapObject, 'Puertas'))
				$objToReturn->strPuertas = $objSoapObject->Puertas;
			if (property_exists($objSoapObject, 'Plazas'))
				$objToReturn->strPlazas = $objSoapObject->Plazas;
			if (property_exists($objSoapObject, 'FilasDeAsientos'))
				$objToReturn->strFilasDeAsientos = $objSoapObject->FilasDeAsientos;
			if (property_exists($objSoapObject, 'InfoEjes'))
				$objToReturn->strInfoEjes = $objSoapObject->InfoEjes;
			if (property_exists($objSoapObject, 'Peso'))
				$objToReturn->strPeso = $objSoapObject->Peso;
			if (property_exists($objSoapObject, 'CapacidadBaul'))
				$objToReturn->strCapacidadBaul = $objSoapObject->CapacidadBaul;
			if (property_exists($objSoapObject, 'CapacidadTanque'))
				$objToReturn->strCapacidadTanque = $objSoapObject->CapacidadTanque;
			if (property_exists($objSoapObject, 'CapacidadCarga'))
				$objToReturn->strCapacidadCarga = $objSoapObject->CapacidadCarga;
			if (property_exists($objSoapObject, 'FrenosDelanteros'))
				$objToReturn->strFrenosDelanteros = $objSoapObject->FrenosDelanteros;
			if (property_exists($objSoapObject, 'FrenosTraseros'))
				$objToReturn->strFrenosTraseros = $objSoapObject->FrenosTraseros;
			if (property_exists($objSoapObject, 'Neumaticos'))
				$objToReturn->strNeumaticos = $objSoapObject->Neumaticos;
			if (property_exists($objSoapObject, 'SuspensionDelantera'))
				$objToReturn->strSuspensionDelantera = $objSoapObject->SuspensionDelantera;
			if (property_exists($objSoapObject, 'SuspensionTrasera'))
				$objToReturn->strSuspensionTrasera = $objSoapObject->SuspensionTrasera;
			if ((property_exists($objSoapObject, 'IdEstadoObject')) &&
				($objSoapObject->IdEstadoObject))
				$objToReturn->IdEstadoObject = Estados::GetObjectFromSoapObject($objSoapObject->IdEstadoObject);
			if (property_exists($objSoapObject, 'Procesada'))
				$objToReturn->blnProcesada = $objSoapObject->Procesada;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Fichas::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdMarcaObject)
				$objObject->objIdMarcaObject = Marcas::GetSoapObjectFromObject($objObject->objIdMarcaObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdMarca = null;
			if ($objObject->objIdTiposObject)
				$objObject->objIdTiposObject = Tipos::GetSoapObjectFromObject($objObject->objIdTiposObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdTipos = null;
			if ($objObject->objIdModeloObject)
				$objObject->objIdModeloObject = Modelo::GetSoapObjectFromObject($objObject->objIdModeloObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdModelo = null;
			if ($objObject->objIdVersionObject)
				$objObject->objIdVersionObject = Version::GetSoapObjectFromObject($objObject->objIdVersionObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdVersion = null;
			if ($objObject->objIdPaisObject)
				$objObject->objIdPaisObject = Paises::GetSoapObjectFromObject($objObject->objIdPaisObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdPais = null;
			if ($objObject->objIdEstadoObject)
				$objObject->objIdEstadoObject = Estados::GetSoapObjectFromObject($objObject->objIdEstadoObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdEstado = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeFichas extends QQNode {
		protected $strTableName = 'fichas';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Fichas';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'IdMarca':
					return new QQNode('id_marca', 'IdMarca', 'integer', $this);
				case 'IdMarcaObject':
					return new QQNodeMarcas('id_marca', 'IdMarcaObject', 'integer', $this);
				case 'IdTipos':
					return new QQNode('id_tipos', 'IdTipos', 'integer', $this);
				case 'IdTiposObject':
					return new QQNodeTipos('id_tipos', 'IdTiposObject', 'integer', $this);
				case 'IdModelo':
					return new QQNode('id_modelo', 'IdModelo', 'integer', $this);
				case 'IdModeloObject':
					return new QQNodeModelo('id_modelo', 'IdModeloObject', 'integer', $this);
				case 'IdVersion':
					return new QQNode('id_version', 'IdVersion', 'integer', $this);
				case 'IdVersionObject':
					return new QQNodeVersion('id_version', 'IdVersionObject', 'integer', $this);
				case 'IdPais':
					return new QQNode('id_pais', 'IdPais', 'integer', $this);
				case 'IdPaisObject':
					return new QQNodePaises('id_pais', 'IdPaisObject', 'integer', $this);
				case 'IdSeguro':
					return new QQNode('id_seguro', 'IdSeguro', 'string', $this);
				case 'IdServicio':
					return new QQNode('id_servicio', 'IdServicio', 'string', $this);
					
				case 'Descripcion':
					return new QQNode('descripcion', 'Descripcion', 'string', $this);
				case 'Precio':
					return new QQNode('precio', 'Precio', 'string', $this);
				case 'Anio':
					return new QQNode('anio', 'Anio', 'integer', $this);
				case 'Combustible':
					return new QQNode('combustible', 'Combustible', 'string', $this);
				case 'Cilindrada':
					return new QQNode('cilindrada', 'Cilindrada', 'string', $this);
				case 'Cilindros':
					return new QQNode('cilindros', 'Cilindros', 'string', $this);
				case 'PotenciaMaxima':
					return new QQNode('potencia_maxima', 'PotenciaMaxima', 'string', $this);
				case 'ParMotorTorque':
					return new QQNode('par_motor_torque', 'ParMotorTorque', 'string', $this);
				case 'Posicion':
					return new QQNode('posicion', 'Posicion', 'string', $this);
				case 'Alimentacion':
					return new QQNode('alimentacion', 'Alimentacion', 'string', $this);
				case 'MotorShort':
					return new QQNode('motor_short', 'MotorShort', 'string', $this);
				case 'Valvulas':
					return new QQNode('valvulas', 'Valvulas', 'string', $this);
				case 'Tipo':
					return new QQNode('tipo', 'Tipo', 'string', $this);
				case 'Marchas':
					return new QQNode('marchas', 'Marchas', 'string', $this);
				case 'Traccion':
					return new QQNode('traccion', 'Traccion', 'string', $this);
				case 'VelocidadMaxima':
					return new QQNode('velocidad_maxima', 'VelocidadMaxima', 'string', $this);
				case 'Aceleracion0100':
					return new QQNode('aceleracion_0_100', 'Aceleracion0100', 'string', $this);
				case 'ConsumoUrbano':
					return new QQNode('consumo_urbano', 'ConsumoUrbano', 'string', $this);
				case 'ConsumoInterurbano':
					return new QQNode('consumo_interurbano', 'ConsumoInterurbano', 'string', $this);
				case 'ConsumoMixto':
					return new QQNode('consumo_mixto', 'ConsumoMixto', 'string', $this);
				case 'Puertas':
					return new QQNode('puertas', 'Puertas', 'string', $this);
				case 'Plazas':
					return new QQNode('plazas', 'Plazas', 'string', $this);
				case 'FilasDeAsientos':
					return new QQNode('filas_de_asientos', 'FilasDeAsientos', 'string', $this);
				case 'InfoEjes':
					return new QQNode('info_ejes', 'InfoEjes', 'string', $this);
				case 'Peso':
					return new QQNode('peso', 'Peso', 'string', $this);
				case 'CapacidadBaul':
					return new QQNode('capacidad_baul', 'CapacidadBaul', 'string', $this);
				case 'CapacidadTanque':
					return new QQNode('capacidad_tanque', 'CapacidadTanque', 'string', $this);
				case 'CapacidadCarga':
					return new QQNode('capacidad_carga', 'CapacidadCarga', 'string', $this);
				case 'FrenosDelanteros':
					return new QQNode('frenos_delanteros', 'FrenosDelanteros', 'string', $this);
				case 'FrenosTraseros':
					return new QQNode('frenos_traseros', 'FrenosTraseros', 'string', $this);
				case 'Neumaticos':
					return new QQNode('neumaticos', 'Neumaticos', 'string', $this);
				case 'SuspensionDelantera':
					return new QQNode('suspension_delantera', 'SuspensionDelantera', 'string', $this);
				case 'SuspensionTrasera':
					return new QQNode('suspension_trasera', 'SuspensionTrasera', 'string', $this);
				case 'IdEstado':
					return new QQNode('id_estado', 'IdEstado', 'integer', $this);
				case 'IdEstadoObject':
					return new QQNodeEstados('id_estado', 'IdEstadoObject', 'integer', $this);
				case 'Procesada':
					return new QQNode('procesada', 'Procesada', 'boolean', $this);
				case 'FichasImagenesAsIdFicha':
					return new QQReverseReferenceNodeFichasImagenes($this, 'fichasimagenesasidficha', 'reverse_reference', 'id_ficha');
				case 'FichasInfoAsId':
					return new QQReverseReferenceNodeFichasInfo($this, 'fichasinfoasid', 'reverse_reference', 'id_fichas');
				case 'FichasItemValorAsId':
					return new QQReverseReferenceNodeFichasItemValor($this, 'fichasitemvalorasid', 'reverse_reference', 'id_fichas');
				case 'FichasNotasAsId':
					return new QQReverseReferenceNodeFichasNotas($this, 'fichasnotasasid', 'reverse_reference', 'id_fichas');
				case 'FichasVideosAsIdFicha':
					return new QQReverseReferenceNodeFichasVideos($this, 'fichasvideosasidficha', 'reverse_reference', 'id_ficha');

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

	class QQReverseReferenceNodeFichas extends QQReverseReferenceNode {
		protected $strTableName = 'fichas';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Fichas';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'IdMarca':
					return new QQNode('id_marca', 'IdMarca', 'integer', $this);
				case 'IdMarcaObject':
					return new QQNodeMarcas('id_marca', 'IdMarcaObject', 'integer', $this);
				case 'IdTipos':
					return new QQNode('id_tipos', 'IdTipos', 'integer', $this);
				case 'IdTiposObject':
					return new QQNodeTipos('id_tipos', 'IdTiposObject', 'integer', $this);
				case 'IdModelo':
					return new QQNode('id_modelo', 'IdModelo', 'integer', $this);
				case 'IdModeloObject':
					return new QQNodeModelo('id_modelo', 'IdModeloObject', 'integer', $this);
				case 'IdVersion':
					return new QQNode('id_version', 'IdVersion', 'integer', $this);
				case 'IdVersionObject':
					return new QQNodeVersion('id_version', 'IdVersionObject', 'integer', $this);
				case 'IdPais':
					return new QQNode('id_pais', 'IdPais', 'integer', $this);
				case 'IdPaisObject':
					return new QQNodePaises('id_pais', 'IdPaisObject', 'integer', $this);
				case 'IdSeguro':
					return new QQNode('id_seguro', 'IdSeguro', 'string', $this);
				case 'IdServicio':
					return new QQNode('id_servicio', 'IdServicio', 'string', $this);					
				case 'Descripcion':
					return new QQNode('descripcion', 'Descripcion', 'string', $this);
				case 'Precio':
					return new QQNode('precio', 'Precio', 'string', $this);
				case 'Anio':
					return new QQNode('anio', 'Anio', 'integer', $this);
				case 'Combustible':
					return new QQNode('combustible', 'Combustible', 'string', $this);
				case 'Cilindrada':
					return new QQNode('cilindrada', 'Cilindrada', 'string', $this);
				case 'Cilindros':
					return new QQNode('cilindros', 'Cilindros', 'string', $this);
				case 'PotenciaMaxima':
					return new QQNode('potencia_maxima', 'PotenciaMaxima', 'string', $this);
				case 'ParMotorTorque':
					return new QQNode('par_motor_torque', 'ParMotorTorque', 'string', $this);
				case 'Posicion':
					return new QQNode('posicion', 'Posicion', 'string', $this);
				case 'Alimentacion':
					return new QQNode('alimentacion', 'Alimentacion', 'string', $this);
				case 'MotorShort':
					return new QQNode('motor_short', 'MotorShort', 'string', $this);
				case 'Valvulas':
					return new QQNode('valvulas', 'Valvulas', 'string', $this);
				case 'Tipo':
					return new QQNode('tipo', 'Tipo', 'string', $this);
				case 'Marchas':
					return new QQNode('marchas', 'Marchas', 'string', $this);
				case 'Traccion':
					return new QQNode('traccion', 'Traccion', 'string', $this);
				case 'VelocidadMaxima':
					return new QQNode('velocidad_maxima', 'VelocidadMaxima', 'string', $this);
				case 'Aceleracion0100':
					return new QQNode('aceleracion_0_100', 'Aceleracion0100', 'string', $this);
				case 'ConsumoUrbano':
					return new QQNode('consumo_urbano', 'ConsumoUrbano', 'string', $this);
				case 'ConsumoInterurbano':
					return new QQNode('consumo_interurbano', 'ConsumoInterurbano', 'string', $this);
				case 'ConsumoMixto':
					return new QQNode('consumo_mixto', 'ConsumoMixto', 'string', $this);
				case 'Puertas':
					return new QQNode('puertas', 'Puertas', 'string', $this);
				case 'Plazas':
					return new QQNode('plazas', 'Plazas', 'string', $this);
				case 'FilasDeAsientos':
					return new QQNode('filas_de_asientos', 'FilasDeAsientos', 'string', $this);
				case 'InfoEjes':
					return new QQNode('info_ejes', 'InfoEjes', 'string', $this);
				case 'Peso':
					return new QQNode('peso', 'Peso', 'string', $this);
				case 'CapacidadBaul':
					return new QQNode('capacidad_baul', 'CapacidadBaul', 'string', $this);
				case 'CapacidadTanque':
					return new QQNode('capacidad_tanque', 'CapacidadTanque', 'string', $this);
				case 'CapacidadCarga':
					return new QQNode('capacidad_carga', 'CapacidadCarga', 'string', $this);
				case 'FrenosDelanteros':
					return new QQNode('frenos_delanteros', 'FrenosDelanteros', 'string', $this);
				case 'FrenosTraseros':
					return new QQNode('frenos_traseros', 'FrenosTraseros', 'string', $this);
				case 'Neumaticos':
					return new QQNode('neumaticos', 'Neumaticos', 'string', $this);
				case 'SuspensionDelantera':
					return new QQNode('suspension_delantera', 'SuspensionDelantera', 'string', $this);
				case 'SuspensionTrasera':
					return new QQNode('suspension_trasera', 'SuspensionTrasera', 'string', $this);
				case 'IdEstado':
					return new QQNode('id_estado', 'IdEstado', 'integer', $this);
				case 'IdEstadoObject':
					return new QQNodeEstados('id_estado', 'IdEstadoObject', 'integer', $this);
				case 'Procesada':
					return new QQNode('procesada', 'Procesada', 'boolean', $this);
				case 'FichasImagenesAsIdFicha':
					return new QQReverseReferenceNodeFichasImagenes($this, 'fichasimagenesasidficha', 'reverse_reference', 'id_ficha');
				case 'FichasInfoAsId':
					return new QQReverseReferenceNodeFichasInfo($this, 'fichasinfoasid', 'reverse_reference', 'id_fichas');
				case 'FichasItemValorAsId':
					return new QQReverseReferenceNodeFichasItemValor($this, 'fichasitemvalorasid', 'reverse_reference', 'id_fichas');
				case 'FichasNotasAsId':
					return new QQReverseReferenceNodeFichasNotas($this, 'fichasnotasasid', 'reverse_reference', 'id_fichas');
				case 'FichasVideosAsIdFicha':
					return new QQReverseReferenceNodeFichasVideos($this, 'fichasvideosasidficha', 'reverse_reference', 'id_ficha');

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