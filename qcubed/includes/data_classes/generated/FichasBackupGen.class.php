<?php
	/**
	 * The abstract FichasBackupGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FichasBackup subclass which
	 * extends this FichasBackupGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FichasBackup class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property integer $IdMarca the value for intIdMarca (Not Null)
	 * @property string $IdTipos the value for strIdTipos (Not Null)
	 * @property string $Modelo the value for strModelo (Not Null)
	 * @property string $Descripcion the value for strDescripcion (Not Null)
	 * @property string $Precio the value for strPrecio (Not Null)
	 * @property string $Combustible the value for strCombustible 
	 * @property string $Cilindrada the value for strCilindrada 
	 * @property string $Cilindros the value for strCilindros 
	 * @property string $PotenciaMaxima the value for strPotenciaMaxima 
	 * @property string $ParMotorTorque the value for strParMotorTorque 
	 * @property string $Posicion the value for strPosicion 
	 * @property string $Alimentacion the value for strAlimentacion 
	 * @property string $RelacionDeCompresion the value for strRelacionDeCompresion 
	 * @property string $Valvulas the value for strValvulas 
	 * @property string $Tipo the value for strTipo 
	 * @property string $Marchas the value for strMarchas 
	 * @property string $Traccion the value for strTraccion 
	 * @property string $VelocidadMaxima the value for strVelocidadMaxima 
	 * @property string $Aceleracion0100 the value for strAceleracion0100 
	 * @property string $ConsumoUrbano the value for strConsumoUrbano 
	 * @property string $ConsumoInterurbano the value for strConsumoInterurbano 
	 * @property string $ConsumoMixto the value for strConsumoMixto 
	 * @property string $EmisionesCo2 the value for strEmisionesCo2 
	 * @property string $TipoCarroceria the value for strTipoCarroceria 
	 * @property string $Puertas the value for strPuertas 
	 * @property string $Plazas the value for strPlazas 
	 * @property string $FilasDeAsientos the value for strFilasDeAsientos 
	 * @property string $InfoEjes the value for strInfoEjes 
	 * @property string $Peso the value for strPeso 
	 * @property string $CapacidadBaul the value for strCapacidadBaul 
	 * @property string $CapacidadTanque the value for strCapacidadTanque 
	 * @property string $InfoCajaCarga the value for strInfoCajaCarga 
	 * @property string $VolumenCajaCarga the value for strVolumenCajaCarga 
	 * @property string $CapacidadCarga the value for strCapacidadCarga 
	 * @property string $FrenosDelanteros the value for strFrenosDelanteros 
	 * @property string $FrenosTraseros the value for strFrenosTraseros 
	 * @property string $Llantas the value for strLlantas 
	 * @property string $Neumaticos the value for strNeumaticos 
	 * @property string $SuspensionDelantera the value for strSuspensionDelantera 
	 * @property string $SuspensionTrasera the value for strSuspensionTrasera 
	 * @property string $LucesAutomatico the value for strLucesAutomatico 
	 * @property string $Climatizacion the value for strClimatizacion 
	 * @property string $AlarmaLucesEncendidas the value for strAlarmaLucesEncendidas 
	 * @property string $CritalesElectricos the value for strCritalesElectricos 
	 * @property string $AperturaBaul the value for strAperturaBaul 
	 * @property string $AperturaTanque the value for strAperturaTanque 
	 * @property string $AsientosRegulablesAltura the value for strAsientosRegulablesAltura 
	 * @property string $AsientoTraseroRebatible the value for strAsientoTraseroRebatible 
	 * @property string $AsientosCalefaccionado the value for strAsientosCalefaccionado 
	 * @property string $AsientosAjustesElectronicos the value for strAsientosAjustesElectronicos 
	 * @property string $AsientosDelButacaDeportiva the value for strAsientosDelButacaDeportiva 
	 * @property string $AsientoDelBipartido the value for strAsientoDelBipartido 
	 * @property string $BotonStartStop the value for strBotonStartStop 
	 * @property string $CambioSecuencialVolante the value for strCambioSecuencialVolante 
	 * @property string $CierreCentralizado the value for strCierreCentralizado 
	 * @property string $ComputadoraABordo the value for strComputadoraABordo 
	 * @property string $DireccionAsistida the value for strDireccionAsistida 
	 * @property string $MandosAudioVolante the value for strMandosAudioVolante 
	 * @property string $Reposabrazos the value for strReposabrazos 
	 * @property string $ControlCrucero the value for strControlCrucero 
	 * @property string $SensorLluvia the value for strSensorLluvia 
	 * @property string $Tapizado the value for strTapizado 
	 * @property string $SalidasAire the value for strSalidasAire 
	 * @property string $TechoCorredizo the value for strTechoCorredizo 
	 * @property string $ComandoDistancia the value for strComandoDistancia 
	 * @property string $VolanteAjusteVertical the value for strVolanteAjusteVertical 
	 * @property string $VolanteCuero the value for strVolanteCuero 
	 * @property string $MoldurasColorCarroceria the value for strMoldurasColorCarroceria 
	 * @property string $EspejosElectricos the value for strEspejosElectricos 
	 * @property string $EspejosRebatiblesElectricamente the value for strEspejosRebatiblesElectricamente 
	 * @property string $EspejosMemorias the value for strEspejosMemorias 
	 * @property string $LavaFaros the value for strLavaFaros 
	 * @property string $LavaLuneta the value for strLavaLuneta 
	 * @property string $CobertorCajaCarga the value for strCobertorCajaCarga 
	 * @property string $BarrasPortaequipajeTecho the value for strBarrasPortaequipajeTecho 
	 * @property string $BarraAntivuelco the value for strBarraAntivuelco 
	 * @property string $Estribos the value for strEstribos 
	 * @property string $ConexionAuxiliar the value for strConexionAuxiliar 
	 * @property string $ConexionBluetooth the value for strConexionBluetooth 
	 * @property string $ControlPorVoz the value for strControlPorVoz 
	 * @property string $EntradaUsb the value for strEntradaUsb 
	 * @property string $LectorTarjetasSd the value for strLectorTarjetasSd 
	 * @property string $NavegadorGps the value for strNavegadorGps 
	 * @property string $Parlantes the value for strParlantes 
	 * @property string $RadioAmfm the value for strRadioAmfm 
	 * @property string $RadioSatelitalXm the value for strRadioSatelitalXm 
	 * @property string $ReproductorCd the value for strReproductorCd 
	 * @property string $ReproductorDvd the value for strReproductorDvd 
	 * @property string $ReproductorMp3 the value for strReproductorMp3 
	 * @property string $TomaCorriente12v the value for strTomaCorriente12v 
	 * @property string $Airbags the value for strAirbags 
	 * @property string $Alarma the value for strAlarma 
	 * @property string $AsientoParaNinos the value for strAsientoParaNinos 
	 * @property string $AsistenciasElectronicas the value for strAsistenciasElectronicas 
	 * @property string $CamaraRetroceso the value for strCamaraRetroceso 
	 * @property string $CinturonesInerciales the value for strCinturonesInerciales 
	 * @property string $SensorDistanciaEstacionamiento the value for strSensorDistanciaEstacionamiento 
	 * @property string $DesempaniadorEspejosExteriores the value for strDesempaniadorEspejosExteriores 
	 * @property string $EncendidoAutoBalizasUrgencia the value for strEncendidoAutoBalizasUrgencia 
	 * @property string $FarosAntiniebla the value for strFarosAntiniebla 
	 * @property string $FarosXenon the value for strFarosXenon 
	 * @property string $GanchosIsofixLatch the value for strGanchosIsofixLatch 
	 * @property string $Garantia the value for strGarantia 
	 * @property string $IndicadorPresionNeumaticos the value for strIndicadorPresionNeumaticos 
	 * @property string $Lavafaros the value for strLavafaros 
	 * @property string $LucesAdaptativasCurvas the value for strLucesAdaptativasCurvas 
	 * @property string $TercerApoyaCabezaTrasero the value for strTercerApoyaCabezaTrasero 
	 * @property integer $IdEstado the value for intIdEstado (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FichasBackupGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column fichas_backup.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.id_marca
		 * @var integer intIdMarca
		 */
		protected $intIdMarca;
		const IdMarcaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.id_tipos
		 * @var string strIdTipos
		 */
		protected $strIdTipos;
		const IdTiposMaxLength = 11;
		const IdTiposDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.modelo
		 * @var string strModelo
		 */
		protected $strModelo;
		const ModeloMaxLength = 255;
		const ModeloDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.descripcion
		 * @var string strDescripcion
		 */
		protected $strDescripcion;
		const DescripcionDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.precio
		 * @var string strPrecio
		 */
		protected $strPrecio;
		const PrecioMaxLength = 50;
		const PrecioDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.combustible
		 * @var string strCombustible
		 */
		protected $strCombustible;
		const CombustibleMaxLength = 50;
		const CombustibleDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.cilindrada
		 * @var string strCilindrada
		 */
		protected $strCilindrada;
		const CilindradaMaxLength = 50;
		const CilindradaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.cilindros
		 * @var string strCilindros
		 */
		protected $strCilindros;
		const CilindrosMaxLength = 50;
		const CilindrosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.potencia_maxima
		 * @var string strPotenciaMaxima
		 */
		protected $strPotenciaMaxima;
		const PotenciaMaximaMaxLength = 50;
		const PotenciaMaximaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.par_motor_torque
		 * @var string strParMotorTorque
		 */
		protected $strParMotorTorque;
		const ParMotorTorqueMaxLength = 50;
		const ParMotorTorqueDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.posicion
		 * @var string strPosicion
		 */
		protected $strPosicion;
		const PosicionMaxLength = 50;
		const PosicionDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.alimentacion
		 * @var string strAlimentacion
		 */
		protected $strAlimentacion;
		const AlimentacionMaxLength = 50;
		const AlimentacionDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.relacion_de_compresion
		 * @var string strRelacionDeCompresion
		 */
		protected $strRelacionDeCompresion;
		const RelacionDeCompresionMaxLength = 50;
		const RelacionDeCompresionDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.valvulas
		 * @var string strValvulas
		 */
		protected $strValvulas;
		const ValvulasMaxLength = 50;
		const ValvulasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.tipo
		 * @var string strTipo
		 */
		protected $strTipo;
		const TipoMaxLength = 50;
		const TipoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.marchas
		 * @var string strMarchas
		 */
		protected $strMarchas;
		const MarchasMaxLength = 50;
		const MarchasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.traccion
		 * @var string strTraccion
		 */
		protected $strTraccion;
		const TraccionMaxLength = 50;
		const TraccionDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.velocidad_maxima
		 * @var string strVelocidadMaxima
		 */
		protected $strVelocidadMaxima;
		const VelocidadMaximaMaxLength = 50;
		const VelocidadMaximaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.aceleracion_0_100
		 * @var string strAceleracion0100
		 */
		protected $strAceleracion0100;
		const Aceleracion0100MaxLength = 50;
		const Aceleracion0100Default = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.consumo_urbano
		 * @var string strConsumoUrbano
		 */
		protected $strConsumoUrbano;
		const ConsumoUrbanoMaxLength = 50;
		const ConsumoUrbanoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.consumo_interurbano
		 * @var string strConsumoInterurbano
		 */
		protected $strConsumoInterurbano;
		const ConsumoInterurbanoMaxLength = 50;
		const ConsumoInterurbanoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.consumo_mixto
		 * @var string strConsumoMixto
		 */
		protected $strConsumoMixto;
		const ConsumoMixtoMaxLength = 50;
		const ConsumoMixtoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.emisiones_co2
		 * @var string strEmisionesCo2
		 */
		protected $strEmisionesCo2;
		const EmisionesCo2MaxLength = 50;
		const EmisionesCo2Default = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.tipo_carroceria
		 * @var string strTipoCarroceria
		 */
		protected $strTipoCarroceria;
		const TipoCarroceriaMaxLength = 50;
		const TipoCarroceriaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.puertas
		 * @var string strPuertas
		 */
		protected $strPuertas;
		const PuertasMaxLength = 50;
		const PuertasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.plazas
		 * @var string strPlazas
		 */
		protected $strPlazas;
		const PlazasMaxLength = 50;
		const PlazasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.filas_de_asientos
		 * @var string strFilasDeAsientos
		 */
		protected $strFilasDeAsientos;
		const FilasDeAsientosMaxLength = 50;
		const FilasDeAsientosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.info_ejes
		 * @var string strInfoEjes
		 */
		protected $strInfoEjes;
		const InfoEjesMaxLength = 50;
		const InfoEjesDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.peso
		 * @var string strPeso
		 */
		protected $strPeso;
		const PesoMaxLength = 50;
		const PesoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.capacidad_baul
		 * @var string strCapacidadBaul
		 */
		protected $strCapacidadBaul;
		const CapacidadBaulMaxLength = 50;
		const CapacidadBaulDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.capacidad_tanque
		 * @var string strCapacidadTanque
		 */
		protected $strCapacidadTanque;
		const CapacidadTanqueMaxLength = 50;
		const CapacidadTanqueDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.info_caja_carga
		 * @var string strInfoCajaCarga
		 */
		protected $strInfoCajaCarga;
		const InfoCajaCargaMaxLength = 50;
		const InfoCajaCargaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.volumen_caja_carga
		 * @var string strVolumenCajaCarga
		 */
		protected $strVolumenCajaCarga;
		const VolumenCajaCargaMaxLength = 50;
		const VolumenCajaCargaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.capacidad_carga
		 * @var string strCapacidadCarga
		 */
		protected $strCapacidadCarga;
		const CapacidadCargaMaxLength = 50;
		const CapacidadCargaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.frenos_delanteros
		 * @var string strFrenosDelanteros
		 */
		protected $strFrenosDelanteros;
		const FrenosDelanterosMaxLength = 50;
		const FrenosDelanterosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.frenos_traseros
		 * @var string strFrenosTraseros
		 */
		protected $strFrenosTraseros;
		const FrenosTraserosMaxLength = 50;
		const FrenosTraserosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.llantas
		 * @var string strLlantas
		 */
		protected $strLlantas;
		const LlantasMaxLength = 50;
		const LlantasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.neumaticos
		 * @var string strNeumaticos
		 */
		protected $strNeumaticos;
		const NeumaticosMaxLength = 50;
		const NeumaticosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.suspension_delantera
		 * @var string strSuspensionDelantera
		 */
		protected $strSuspensionDelantera;
		const SuspensionDelanteraMaxLength = 50;
		const SuspensionDelanteraDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.suspension_trasera
		 * @var string strSuspensionTrasera
		 */
		protected $strSuspensionTrasera;
		const SuspensionTraseraMaxLength = 50;
		const SuspensionTraseraDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.luces_automatico
		 * @var string strLucesAutomatico
		 */
		protected $strLucesAutomatico;
		const LucesAutomaticoMaxLength = 50;
		const LucesAutomaticoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.climatizacion
		 * @var string strClimatizacion
		 */
		protected $strClimatizacion;
		const ClimatizacionMaxLength = 50;
		const ClimatizacionDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.alarma_luces_encendidas
		 * @var string strAlarmaLucesEncendidas
		 */
		protected $strAlarmaLucesEncendidas;
		const AlarmaLucesEncendidasMaxLength = 50;
		const AlarmaLucesEncendidasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.critales_electricos
		 * @var string strCritalesElectricos
		 */
		protected $strCritalesElectricos;
		const CritalesElectricosMaxLength = 50;
		const CritalesElectricosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.apertura_baul
		 * @var string strAperturaBaul
		 */
		protected $strAperturaBaul;
		const AperturaBaulMaxLength = 50;
		const AperturaBaulDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.apertura_tanque
		 * @var string strAperturaTanque
		 */
		protected $strAperturaTanque;
		const AperturaTanqueMaxLength = 50;
		const AperturaTanqueDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.asientos_regulables_altura
		 * @var string strAsientosRegulablesAltura
		 */
		protected $strAsientosRegulablesAltura;
		const AsientosRegulablesAlturaMaxLength = 50;
		const AsientosRegulablesAlturaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.asiento_trasero_rebatible
		 * @var string strAsientoTraseroRebatible
		 */
		protected $strAsientoTraseroRebatible;
		const AsientoTraseroRebatibleMaxLength = 50;
		const AsientoTraseroRebatibleDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.asientos_calefaccionado
		 * @var string strAsientosCalefaccionado
		 */
		protected $strAsientosCalefaccionado;
		const AsientosCalefaccionadoMaxLength = 50;
		const AsientosCalefaccionadoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.asientos_ajustes_electronicos
		 * @var string strAsientosAjustesElectronicos
		 */
		protected $strAsientosAjustesElectronicos;
		const AsientosAjustesElectronicosMaxLength = 50;
		const AsientosAjustesElectronicosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.asientos_del_butaca_deportiva
		 * @var string strAsientosDelButacaDeportiva
		 */
		protected $strAsientosDelButacaDeportiva;
		const AsientosDelButacaDeportivaMaxLength = 50;
		const AsientosDelButacaDeportivaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.asiento_del_bipartido
		 * @var string strAsientoDelBipartido
		 */
		protected $strAsientoDelBipartido;
		const AsientoDelBipartidoMaxLength = 50;
		const AsientoDelBipartidoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.boton_start_stop
		 * @var string strBotonStartStop
		 */
		protected $strBotonStartStop;
		const BotonStartStopMaxLength = 50;
		const BotonStartStopDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.cambio_secuencial_volante
		 * @var string strCambioSecuencialVolante
		 */
		protected $strCambioSecuencialVolante;
		const CambioSecuencialVolanteMaxLength = 50;
		const CambioSecuencialVolanteDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.cierre_centralizado
		 * @var string strCierreCentralizado
		 */
		protected $strCierreCentralizado;
		const CierreCentralizadoMaxLength = 50;
		const CierreCentralizadoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.computadora_a_bordo
		 * @var string strComputadoraABordo
		 */
		protected $strComputadoraABordo;
		const ComputadoraABordoMaxLength = 50;
		const ComputadoraABordoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.direccion_asistida
		 * @var string strDireccionAsistida
		 */
		protected $strDireccionAsistida;
		const DireccionAsistidaMaxLength = 50;
		const DireccionAsistidaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.mandos_audio_volante
		 * @var string strMandosAudioVolante
		 */
		protected $strMandosAudioVolante;
		const MandosAudioVolanteMaxLength = 50;
		const MandosAudioVolanteDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.reposabrazos
		 * @var string strReposabrazos
		 */
		protected $strReposabrazos;
		const ReposabrazosMaxLength = 50;
		const ReposabrazosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.control_crucero
		 * @var string strControlCrucero
		 */
		protected $strControlCrucero;
		const ControlCruceroMaxLength = 50;
		const ControlCruceroDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.sensor_lluvia
		 * @var string strSensorLluvia
		 */
		protected $strSensorLluvia;
		const SensorLluviaMaxLength = 50;
		const SensorLluviaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.tapizado
		 * @var string strTapizado
		 */
		protected $strTapizado;
		const TapizadoMaxLength = 50;
		const TapizadoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.salidas_aire
		 * @var string strSalidasAire
		 */
		protected $strSalidasAire;
		const SalidasAireMaxLength = 50;
		const SalidasAireDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.techo_corredizo
		 * @var string strTechoCorredizo
		 */
		protected $strTechoCorredizo;
		const TechoCorredizoMaxLength = 50;
		const TechoCorredizoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.comando_distancia
		 * @var string strComandoDistancia
		 */
		protected $strComandoDistancia;
		const ComandoDistanciaMaxLength = 50;
		const ComandoDistanciaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.volante_ajuste_vertical
		 * @var string strVolanteAjusteVertical
		 */
		protected $strVolanteAjusteVertical;
		const VolanteAjusteVerticalMaxLength = 50;
		const VolanteAjusteVerticalDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.volante_cuero
		 * @var string strVolanteCuero
		 */
		protected $strVolanteCuero;
		const VolanteCueroMaxLength = 50;
		const VolanteCueroDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.molduras_color_carroceria
		 * @var string strMoldurasColorCarroceria
		 */
		protected $strMoldurasColorCarroceria;
		const MoldurasColorCarroceriaMaxLength = 50;
		const MoldurasColorCarroceriaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.espejos_electricos
		 * @var string strEspejosElectricos
		 */
		protected $strEspejosElectricos;
		const EspejosElectricosMaxLength = 50;
		const EspejosElectricosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.espejos_rebatibles_electricamente
		 * @var string strEspejosRebatiblesElectricamente
		 */
		protected $strEspejosRebatiblesElectricamente;
		const EspejosRebatiblesElectricamenteMaxLength = 50;
		const EspejosRebatiblesElectricamenteDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.espejos_memorias
		 * @var string strEspejosMemorias
		 */
		protected $strEspejosMemorias;
		const EspejosMemoriasMaxLength = 50;
		const EspejosMemoriasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.lava_faros
		 * @var string strLavaFaros
		 */
		protected $strLavaFaros;
		const LavaFarosMaxLength = 50;
		const LavaFarosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.lava_luneta
		 * @var string strLavaLuneta
		 */
		protected $strLavaLuneta;
		const LavaLunetaMaxLength = 50;
		const LavaLunetaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.cobertor_caja_carga
		 * @var string strCobertorCajaCarga
		 */
		protected $strCobertorCajaCarga;
		const CobertorCajaCargaMaxLength = 50;
		const CobertorCajaCargaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.barras_portaequipaje_techo
		 * @var string strBarrasPortaequipajeTecho
		 */
		protected $strBarrasPortaequipajeTecho;
		const BarrasPortaequipajeTechoMaxLength = 50;
		const BarrasPortaequipajeTechoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.barra_antivuelco
		 * @var string strBarraAntivuelco
		 */
		protected $strBarraAntivuelco;
		const BarraAntivuelcoMaxLength = 50;
		const BarraAntivuelcoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.estribos
		 * @var string strEstribos
		 */
		protected $strEstribos;
		const EstribosMaxLength = 50;
		const EstribosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.conexion_auxiliar
		 * @var string strConexionAuxiliar
		 */
		protected $strConexionAuxiliar;
		const ConexionAuxiliarMaxLength = 50;
		const ConexionAuxiliarDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.conexion_bluetooth
		 * @var string strConexionBluetooth
		 */
		protected $strConexionBluetooth;
		const ConexionBluetoothMaxLength = 50;
		const ConexionBluetoothDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.control_por_voz
		 * @var string strControlPorVoz
		 */
		protected $strControlPorVoz;
		const ControlPorVozMaxLength = 50;
		const ControlPorVozDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.entrada_usb
		 * @var string strEntradaUsb
		 */
		protected $strEntradaUsb;
		const EntradaUsbMaxLength = 50;
		const EntradaUsbDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.lector_tarjetas_sd
		 * @var string strLectorTarjetasSd
		 */
		protected $strLectorTarjetasSd;
		const LectorTarjetasSdMaxLength = 50;
		const LectorTarjetasSdDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.navegador_gps
		 * @var string strNavegadorGps
		 */
		protected $strNavegadorGps;
		const NavegadorGpsMaxLength = 50;
		const NavegadorGpsDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.parlantes
		 * @var string strParlantes
		 */
		protected $strParlantes;
		const ParlantesMaxLength = 50;
		const ParlantesDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.radio_amfm
		 * @var string strRadioAmfm
		 */
		protected $strRadioAmfm;
		const RadioAmfmMaxLength = 50;
		const RadioAmfmDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.radio_satelital_xm
		 * @var string strRadioSatelitalXm
		 */
		protected $strRadioSatelitalXm;
		const RadioSatelitalXmMaxLength = 50;
		const RadioSatelitalXmDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.reproductor_cd
		 * @var string strReproductorCd
		 */
		protected $strReproductorCd;
		const ReproductorCdMaxLength = 50;
		const ReproductorCdDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.reproductor_dvd
		 * @var string strReproductorDvd
		 */
		protected $strReproductorDvd;
		const ReproductorDvdMaxLength = 50;
		const ReproductorDvdDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.reproductor_mp3
		 * @var string strReproductorMp3
		 */
		protected $strReproductorMp3;
		const ReproductorMp3MaxLength = 50;
		const ReproductorMp3Default = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.toma_corriente_12v
		 * @var string strTomaCorriente12v
		 */
		protected $strTomaCorriente12v;
		const TomaCorriente12vMaxLength = 50;
		const TomaCorriente12vDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.airbags
		 * @var string strAirbags
		 */
		protected $strAirbags;
		const AirbagsMaxLength = 50;
		const AirbagsDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.alarma
		 * @var string strAlarma
		 */
		protected $strAlarma;
		const AlarmaMaxLength = 50;
		const AlarmaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.asiento_para_ninos
		 * @var string strAsientoParaNinos
		 */
		protected $strAsientoParaNinos;
		const AsientoParaNinosMaxLength = 50;
		const AsientoParaNinosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.asistencias_electronicas
		 * @var string strAsistenciasElectronicas
		 */
		protected $strAsistenciasElectronicas;
		const AsistenciasElectronicasMaxLength = 50;
		const AsistenciasElectronicasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.camara_retroceso
		 * @var string strCamaraRetroceso
		 */
		protected $strCamaraRetroceso;
		const CamaraRetrocesoMaxLength = 50;
		const CamaraRetrocesoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.cinturones_inerciales
		 * @var string strCinturonesInerciales
		 */
		protected $strCinturonesInerciales;
		const CinturonesInercialesMaxLength = 50;
		const CinturonesInercialesDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.sensor_distancia_estacionamiento
		 * @var string strSensorDistanciaEstacionamiento
		 */
		protected $strSensorDistanciaEstacionamiento;
		const SensorDistanciaEstacionamientoMaxLength = 50;
		const SensorDistanciaEstacionamientoDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.desempaniador_espejos_exteriores
		 * @var string strDesempaniadorEspejosExteriores
		 */
		protected $strDesempaniadorEspejosExteriores;
		const DesempaniadorEspejosExterioresMaxLength = 50;
		const DesempaniadorEspejosExterioresDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.encendido_auto_balizas_urgencia
		 * @var string strEncendidoAutoBalizasUrgencia
		 */
		protected $strEncendidoAutoBalizasUrgencia;
		const EncendidoAutoBalizasUrgenciaMaxLength = 50;
		const EncendidoAutoBalizasUrgenciaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.faros_antiniebla
		 * @var string strFarosAntiniebla
		 */
		protected $strFarosAntiniebla;
		const FarosAntinieblaMaxLength = 50;
		const FarosAntinieblaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.faros_xenon
		 * @var string strFarosXenon
		 */
		protected $strFarosXenon;
		const FarosXenonMaxLength = 50;
		const FarosXenonDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.ganchos_isofix_latch
		 * @var string strGanchosIsofixLatch
		 */
		protected $strGanchosIsofixLatch;
		const GanchosIsofixLatchMaxLength = 50;
		const GanchosIsofixLatchDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.garantia
		 * @var string strGarantia
		 */
		protected $strGarantia;
		const GarantiaMaxLength = 50;
		const GarantiaDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.indicador_presion_neumaticos
		 * @var string strIndicadorPresionNeumaticos
		 */
		protected $strIndicadorPresionNeumaticos;
		const IndicadorPresionNeumaticosMaxLength = 50;
		const IndicadorPresionNeumaticosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.lavafaros
		 * @var string strLavafaros
		 */
		protected $strLavafaros;
		const LavafarosMaxLength = 50;
		const LavafarosDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.luces_adaptativas_curvas
		 * @var string strLucesAdaptativasCurvas
		 */
		protected $strLucesAdaptativasCurvas;
		const LucesAdaptativasCurvasMaxLength = 50;
		const LucesAdaptativasCurvasDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.tercer_apoya_cabeza_trasero
		 * @var string strTercerApoyaCabezaTrasero
		 */
		protected $strTercerApoyaCabezaTrasero;
		const TercerApoyaCabezaTraseroMaxLength = 50;
		const TercerApoyaCabezaTraseroDefault = null;


		/**
		 * Protected member variable that maps to the database column fichas_backup.id_estado
		 * @var integer intIdEstado
		 */
		protected $intIdEstado;
		const IdEstadoDefault = null;


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
		 * Load a FichasBackup from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasBackup
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return FichasBackup::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FichasBackup()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all FichasBackups
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasBackup[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call FichasBackup::QueryArray to perform the LoadAll query
			try {
				return FichasBackup::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FichasBackups
		 * @return int
		 */
		public static function CountAll() {
			// Call FichasBackup::QueryCount to perform the CountAll query
			return FichasBackup::QueryCount(QQ::All());
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
			$objDatabase = FichasBackup::GetDatabase();

			// Create/Build out the QueryBuilder object with FichasBackup-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'fichas_backup');
			FichasBackup::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('fichas_backup');

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
		 * Static Qcubed Query method to query for a single FichasBackup object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FichasBackup the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasBackup::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new FichasBackup object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FichasBackup::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FichasBackup::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of FichasBackup objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FichasBackup[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasBackup::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FichasBackup::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of FichasBackup objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FichasBackup::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FichasBackup::GetDatabase();

			$strQuery = FichasBackup::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/fichasbackup', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = FichasBackup::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FichasBackup
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'fichas_backup';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'id_marca', $strAliasPrefix . 'id_marca');
			$objBuilder->AddSelectItem($strTableName, 'id_tipos', $strAliasPrefix . 'id_tipos');
			$objBuilder->AddSelectItem($strTableName, 'modelo', $strAliasPrefix . 'modelo');
			$objBuilder->AddSelectItem($strTableName, 'descripcion', $strAliasPrefix . 'descripcion');
			$objBuilder->AddSelectItem($strTableName, 'precio', $strAliasPrefix . 'precio');
			$objBuilder->AddSelectItem($strTableName, 'combustible', $strAliasPrefix . 'combustible');
			$objBuilder->AddSelectItem($strTableName, 'cilindrada', $strAliasPrefix . 'cilindrada');
			$objBuilder->AddSelectItem($strTableName, 'cilindros', $strAliasPrefix . 'cilindros');
			$objBuilder->AddSelectItem($strTableName, 'potencia_maxima', $strAliasPrefix . 'potencia_maxima');
			$objBuilder->AddSelectItem($strTableName, 'par_motor_torque', $strAliasPrefix . 'par_motor_torque');
			$objBuilder->AddSelectItem($strTableName, 'posicion', $strAliasPrefix . 'posicion');
			$objBuilder->AddSelectItem($strTableName, 'alimentacion', $strAliasPrefix . 'alimentacion');
			$objBuilder->AddSelectItem($strTableName, 'relacion_de_compresion', $strAliasPrefix . 'relacion_de_compresion');
			$objBuilder->AddSelectItem($strTableName, 'valvulas', $strAliasPrefix . 'valvulas');
			$objBuilder->AddSelectItem($strTableName, 'tipo', $strAliasPrefix . 'tipo');
			$objBuilder->AddSelectItem($strTableName, 'marchas', $strAliasPrefix . 'marchas');
			$objBuilder->AddSelectItem($strTableName, 'traccion', $strAliasPrefix . 'traccion');
			$objBuilder->AddSelectItem($strTableName, 'velocidad_maxima', $strAliasPrefix . 'velocidad_maxima');
			$objBuilder->AddSelectItem($strTableName, 'aceleracion_0_100', $strAliasPrefix . 'aceleracion_0_100');
			$objBuilder->AddSelectItem($strTableName, 'consumo_urbano', $strAliasPrefix . 'consumo_urbano');
			$objBuilder->AddSelectItem($strTableName, 'consumo_interurbano', $strAliasPrefix . 'consumo_interurbano');
			$objBuilder->AddSelectItem($strTableName, 'consumo_mixto', $strAliasPrefix . 'consumo_mixto');
			$objBuilder->AddSelectItem($strTableName, 'emisiones_co2', $strAliasPrefix . 'emisiones_co2');
			$objBuilder->AddSelectItem($strTableName, 'tipo_carroceria', $strAliasPrefix . 'tipo_carroceria');
			$objBuilder->AddSelectItem($strTableName, 'puertas', $strAliasPrefix . 'puertas');
			$objBuilder->AddSelectItem($strTableName, 'plazas', $strAliasPrefix . 'plazas');
			$objBuilder->AddSelectItem($strTableName, 'filas_de_asientos', $strAliasPrefix . 'filas_de_asientos');
			$objBuilder->AddSelectItem($strTableName, 'info_ejes', $strAliasPrefix . 'info_ejes');
			$objBuilder->AddSelectItem($strTableName, 'peso', $strAliasPrefix . 'peso');
			$objBuilder->AddSelectItem($strTableName, 'capacidad_baul', $strAliasPrefix . 'capacidad_baul');
			$objBuilder->AddSelectItem($strTableName, 'capacidad_tanque', $strAliasPrefix . 'capacidad_tanque');
			$objBuilder->AddSelectItem($strTableName, 'info_caja_carga', $strAliasPrefix . 'info_caja_carga');
			$objBuilder->AddSelectItem($strTableName, 'volumen_caja_carga', $strAliasPrefix . 'volumen_caja_carga');
			$objBuilder->AddSelectItem($strTableName, 'capacidad_carga', $strAliasPrefix . 'capacidad_carga');
			$objBuilder->AddSelectItem($strTableName, 'frenos_delanteros', $strAliasPrefix . 'frenos_delanteros');
			$objBuilder->AddSelectItem($strTableName, 'frenos_traseros', $strAliasPrefix . 'frenos_traseros');
			$objBuilder->AddSelectItem($strTableName, 'llantas', $strAliasPrefix . 'llantas');
			$objBuilder->AddSelectItem($strTableName, 'neumaticos', $strAliasPrefix . 'neumaticos');
			$objBuilder->AddSelectItem($strTableName, 'suspension_delantera', $strAliasPrefix . 'suspension_delantera');
			$objBuilder->AddSelectItem($strTableName, 'suspension_trasera', $strAliasPrefix . 'suspension_trasera');
			$objBuilder->AddSelectItem($strTableName, 'luces_automatico', $strAliasPrefix . 'luces_automatico');
			$objBuilder->AddSelectItem($strTableName, 'climatizacion', $strAliasPrefix . 'climatizacion');
			$objBuilder->AddSelectItem($strTableName, 'alarma_luces_encendidas', $strAliasPrefix . 'alarma_luces_encendidas');
			$objBuilder->AddSelectItem($strTableName, 'critales_electricos', $strAliasPrefix . 'critales_electricos');
			$objBuilder->AddSelectItem($strTableName, 'apertura_baul', $strAliasPrefix . 'apertura_baul');
			$objBuilder->AddSelectItem($strTableName, 'apertura_tanque', $strAliasPrefix . 'apertura_tanque');
			$objBuilder->AddSelectItem($strTableName, 'asientos_regulables_altura', $strAliasPrefix . 'asientos_regulables_altura');
			$objBuilder->AddSelectItem($strTableName, 'asiento_trasero_rebatible', $strAliasPrefix . 'asiento_trasero_rebatible');
			$objBuilder->AddSelectItem($strTableName, 'asientos_calefaccionado', $strAliasPrefix . 'asientos_calefaccionado');
			$objBuilder->AddSelectItem($strTableName, 'asientos_ajustes_electronicos', $strAliasPrefix . 'asientos_ajustes_electronicos');
			$objBuilder->AddSelectItem($strTableName, 'asientos_del_butaca_deportiva', $strAliasPrefix . 'asientos_del_butaca_deportiva');
			$objBuilder->AddSelectItem($strTableName, 'asiento_del_bipartido', $strAliasPrefix . 'asiento_del_bipartido');
			$objBuilder->AddSelectItem($strTableName, 'boton_start_stop', $strAliasPrefix . 'boton_start_stop');
			$objBuilder->AddSelectItem($strTableName, 'cambio_secuencial_volante', $strAliasPrefix . 'cambio_secuencial_volante');
			$objBuilder->AddSelectItem($strTableName, 'cierre_centralizado', $strAliasPrefix . 'cierre_centralizado');
			$objBuilder->AddSelectItem($strTableName, 'computadora_a_bordo', $strAliasPrefix . 'computadora_a_bordo');
			$objBuilder->AddSelectItem($strTableName, 'direccion_asistida', $strAliasPrefix . 'direccion_asistida');
			$objBuilder->AddSelectItem($strTableName, 'mandos_audio_volante', $strAliasPrefix . 'mandos_audio_volante');
			$objBuilder->AddSelectItem($strTableName, 'reposabrazos', $strAliasPrefix . 'reposabrazos');
			$objBuilder->AddSelectItem($strTableName, 'control_crucero', $strAliasPrefix . 'control_crucero');
			$objBuilder->AddSelectItem($strTableName, 'sensor_lluvia', $strAliasPrefix . 'sensor_lluvia');
			$objBuilder->AddSelectItem($strTableName, 'tapizado', $strAliasPrefix . 'tapizado');
			$objBuilder->AddSelectItem($strTableName, 'salidas_aire', $strAliasPrefix . 'salidas_aire');
			$objBuilder->AddSelectItem($strTableName, 'techo_corredizo', $strAliasPrefix . 'techo_corredizo');
			$objBuilder->AddSelectItem($strTableName, 'comando_distancia', $strAliasPrefix . 'comando_distancia');
			$objBuilder->AddSelectItem($strTableName, 'volante_ajuste_vertical', $strAliasPrefix . 'volante_ajuste_vertical');
			$objBuilder->AddSelectItem($strTableName, 'volante_cuero', $strAliasPrefix . 'volante_cuero');
			$objBuilder->AddSelectItem($strTableName, 'molduras_color_carroceria', $strAliasPrefix . 'molduras_color_carroceria');
			$objBuilder->AddSelectItem($strTableName, 'espejos_electricos', $strAliasPrefix . 'espejos_electricos');
			$objBuilder->AddSelectItem($strTableName, 'espejos_rebatibles_electricamente', $strAliasPrefix . 'espejos_rebatibles_electricamente');
			$objBuilder->AddSelectItem($strTableName, 'espejos_memorias', $strAliasPrefix . 'espejos_memorias');
			$objBuilder->AddSelectItem($strTableName, 'lava_faros', $strAliasPrefix . 'lava_faros');
			$objBuilder->AddSelectItem($strTableName, 'lava_luneta', $strAliasPrefix . 'lava_luneta');
			$objBuilder->AddSelectItem($strTableName, 'cobertor_caja_carga', $strAliasPrefix . 'cobertor_caja_carga');
			$objBuilder->AddSelectItem($strTableName, 'barras_portaequipaje_techo', $strAliasPrefix . 'barras_portaequipaje_techo');
			$objBuilder->AddSelectItem($strTableName, 'barra_antivuelco', $strAliasPrefix . 'barra_antivuelco');
			$objBuilder->AddSelectItem($strTableName, 'estribos', $strAliasPrefix . 'estribos');
			$objBuilder->AddSelectItem($strTableName, 'conexion_auxiliar', $strAliasPrefix . 'conexion_auxiliar');
			$objBuilder->AddSelectItem($strTableName, 'conexion_bluetooth', $strAliasPrefix . 'conexion_bluetooth');
			$objBuilder->AddSelectItem($strTableName, 'control_por_voz', $strAliasPrefix . 'control_por_voz');
			$objBuilder->AddSelectItem($strTableName, 'entrada_usb', $strAliasPrefix . 'entrada_usb');
			$objBuilder->AddSelectItem($strTableName, 'lector_tarjetas_sd', $strAliasPrefix . 'lector_tarjetas_sd');
			$objBuilder->AddSelectItem($strTableName, 'navegador_gps', $strAliasPrefix . 'navegador_gps');
			$objBuilder->AddSelectItem($strTableName, 'parlantes', $strAliasPrefix . 'parlantes');
			$objBuilder->AddSelectItem($strTableName, 'radio_amfm', $strAliasPrefix . 'radio_amfm');
			$objBuilder->AddSelectItem($strTableName, 'radio_satelital_xm', $strAliasPrefix . 'radio_satelital_xm');
			$objBuilder->AddSelectItem($strTableName, 'reproductor_cd', $strAliasPrefix . 'reproductor_cd');
			$objBuilder->AddSelectItem($strTableName, 'reproductor_dvd', $strAliasPrefix . 'reproductor_dvd');
			$objBuilder->AddSelectItem($strTableName, 'reproductor_mp3', $strAliasPrefix . 'reproductor_mp3');
			$objBuilder->AddSelectItem($strTableName, 'toma_corriente_12v', $strAliasPrefix . 'toma_corriente_12v');
			$objBuilder->AddSelectItem($strTableName, 'airbags', $strAliasPrefix . 'airbags');
			$objBuilder->AddSelectItem($strTableName, 'alarma', $strAliasPrefix . 'alarma');
			$objBuilder->AddSelectItem($strTableName, 'asiento_para_ninos', $strAliasPrefix . 'asiento_para_ninos');
			$objBuilder->AddSelectItem($strTableName, 'asistencias_electronicas', $strAliasPrefix . 'asistencias_electronicas');
			$objBuilder->AddSelectItem($strTableName, 'camara_retroceso', $strAliasPrefix . 'camara_retroceso');
			$objBuilder->AddSelectItem($strTableName, 'cinturones_inerciales', $strAliasPrefix . 'cinturones_inerciales');
			$objBuilder->AddSelectItem($strTableName, 'sensor_distancia_estacionamiento', $strAliasPrefix . 'sensor_distancia_estacionamiento');
			$objBuilder->AddSelectItem($strTableName, 'desempaniador_espejos_exteriores', $strAliasPrefix . 'desempaniador_espejos_exteriores');
			$objBuilder->AddSelectItem($strTableName, 'encendido_auto_balizas_urgencia', $strAliasPrefix . 'encendido_auto_balizas_urgencia');
			$objBuilder->AddSelectItem($strTableName, 'faros_antiniebla', $strAliasPrefix . 'faros_antiniebla');
			$objBuilder->AddSelectItem($strTableName, 'faros_xenon', $strAliasPrefix . 'faros_xenon');
			$objBuilder->AddSelectItem($strTableName, 'ganchos_isofix_latch', $strAliasPrefix . 'ganchos_isofix_latch');
			$objBuilder->AddSelectItem($strTableName, 'garantia', $strAliasPrefix . 'garantia');
			$objBuilder->AddSelectItem($strTableName, 'indicador_presion_neumaticos', $strAliasPrefix . 'indicador_presion_neumaticos');
			$objBuilder->AddSelectItem($strTableName, 'lavafaros', $strAliasPrefix . 'lavafaros');
			$objBuilder->AddSelectItem($strTableName, 'luces_adaptativas_curvas', $strAliasPrefix . 'luces_adaptativas_curvas');
			$objBuilder->AddSelectItem($strTableName, 'tercer_apoya_cabeza_trasero', $strAliasPrefix . 'tercer_apoya_cabeza_trasero');
			$objBuilder->AddSelectItem($strTableName, 'id_estado', $strAliasPrefix . 'id_estado');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FichasBackup from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FichasBackup::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FichasBackup
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the FichasBackup object
			$objToReturn = new FichasBackup();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_marca', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_marca'] : $strAliasPrefix . 'id_marca';
			$objToReturn->intIdMarca = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_tipos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_tipos'] : $strAliasPrefix . 'id_tipos';
			$objToReturn->strIdTipos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'modelo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'modelo'] : $strAliasPrefix . 'modelo';
			$objToReturn->strModelo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'descripcion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'descripcion'] : $strAliasPrefix . 'descripcion';
			$objToReturn->strDescripcion = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'precio', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'precio'] : $strAliasPrefix . 'precio';
			$objToReturn->strPrecio = $objDbRow->GetColumn($strAliasName, 'VarChar');
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
			$strAliasName = array_key_exists($strAliasPrefix . 'relacion_de_compresion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'relacion_de_compresion'] : $strAliasPrefix . 'relacion_de_compresion';
			$objToReturn->strRelacionDeCompresion = $objDbRow->GetColumn($strAliasName, 'VarChar');
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
			$strAliasName = array_key_exists($strAliasPrefix . 'emisiones_co2', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'emisiones_co2'] : $strAliasPrefix . 'emisiones_co2';
			$objToReturn->strEmisionesCo2 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'tipo_carroceria', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tipo_carroceria'] : $strAliasPrefix . 'tipo_carroceria';
			$objToReturn->strTipoCarroceria = $objDbRow->GetColumn($strAliasName, 'VarChar');
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
			$strAliasName = array_key_exists($strAliasPrefix . 'info_caja_carga', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'info_caja_carga'] : $strAliasPrefix . 'info_caja_carga';
			$objToReturn->strInfoCajaCarga = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'volumen_caja_carga', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'volumen_caja_carga'] : $strAliasPrefix . 'volumen_caja_carga';
			$objToReturn->strVolumenCajaCarga = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'capacidad_carga', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'capacidad_carga'] : $strAliasPrefix . 'capacidad_carga';
			$objToReturn->strCapacidadCarga = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'frenos_delanteros', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'frenos_delanteros'] : $strAliasPrefix . 'frenos_delanteros';
			$objToReturn->strFrenosDelanteros = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'frenos_traseros', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'frenos_traseros'] : $strAliasPrefix . 'frenos_traseros';
			$objToReturn->strFrenosTraseros = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'llantas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'llantas'] : $strAliasPrefix . 'llantas';
			$objToReturn->strLlantas = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'neumaticos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'neumaticos'] : $strAliasPrefix . 'neumaticos';
			$objToReturn->strNeumaticos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'suspension_delantera', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'suspension_delantera'] : $strAliasPrefix . 'suspension_delantera';
			$objToReturn->strSuspensionDelantera = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'suspension_trasera', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'suspension_trasera'] : $strAliasPrefix . 'suspension_trasera';
			$objToReturn->strSuspensionTrasera = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'luces_automatico', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'luces_automatico'] : $strAliasPrefix . 'luces_automatico';
			$objToReturn->strLucesAutomatico = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'climatizacion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'climatizacion'] : $strAliasPrefix . 'climatizacion';
			$objToReturn->strClimatizacion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'alarma_luces_encendidas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'alarma_luces_encendidas'] : $strAliasPrefix . 'alarma_luces_encendidas';
			$objToReturn->strAlarmaLucesEncendidas = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'critales_electricos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'critales_electricos'] : $strAliasPrefix . 'critales_electricos';
			$objToReturn->strCritalesElectricos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'apertura_baul', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'apertura_baul'] : $strAliasPrefix . 'apertura_baul';
			$objToReturn->strAperturaBaul = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'apertura_tanque', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'apertura_tanque'] : $strAliasPrefix . 'apertura_tanque';
			$objToReturn->strAperturaTanque = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'asientos_regulables_altura', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'asientos_regulables_altura'] : $strAliasPrefix . 'asientos_regulables_altura';
			$objToReturn->strAsientosRegulablesAltura = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'asiento_trasero_rebatible', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'asiento_trasero_rebatible'] : $strAliasPrefix . 'asiento_trasero_rebatible';
			$objToReturn->strAsientoTraseroRebatible = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'asientos_calefaccionado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'asientos_calefaccionado'] : $strAliasPrefix . 'asientos_calefaccionado';
			$objToReturn->strAsientosCalefaccionado = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'asientos_ajustes_electronicos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'asientos_ajustes_electronicos'] : $strAliasPrefix . 'asientos_ajustes_electronicos';
			$objToReturn->strAsientosAjustesElectronicos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'asientos_del_butaca_deportiva', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'asientos_del_butaca_deportiva'] : $strAliasPrefix . 'asientos_del_butaca_deportiva';
			$objToReturn->strAsientosDelButacaDeportiva = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'asiento_del_bipartido', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'asiento_del_bipartido'] : $strAliasPrefix . 'asiento_del_bipartido';
			$objToReturn->strAsientoDelBipartido = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'boton_start_stop', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'boton_start_stop'] : $strAliasPrefix . 'boton_start_stop';
			$objToReturn->strBotonStartStop = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'cambio_secuencial_volante', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cambio_secuencial_volante'] : $strAliasPrefix . 'cambio_secuencial_volante';
			$objToReturn->strCambioSecuencialVolante = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'cierre_centralizado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cierre_centralizado'] : $strAliasPrefix . 'cierre_centralizado';
			$objToReturn->strCierreCentralizado = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'computadora_a_bordo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'computadora_a_bordo'] : $strAliasPrefix . 'computadora_a_bordo';
			$objToReturn->strComputadoraABordo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'direccion_asistida', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'direccion_asistida'] : $strAliasPrefix . 'direccion_asistida';
			$objToReturn->strDireccionAsistida = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'mandos_audio_volante', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'mandos_audio_volante'] : $strAliasPrefix . 'mandos_audio_volante';
			$objToReturn->strMandosAudioVolante = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'reposabrazos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'reposabrazos'] : $strAliasPrefix . 'reposabrazos';
			$objToReturn->strReposabrazos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'control_crucero', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'control_crucero'] : $strAliasPrefix . 'control_crucero';
			$objToReturn->strControlCrucero = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'sensor_lluvia', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'sensor_lluvia'] : $strAliasPrefix . 'sensor_lluvia';
			$objToReturn->strSensorLluvia = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'tapizado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tapizado'] : $strAliasPrefix . 'tapizado';
			$objToReturn->strTapizado = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'salidas_aire', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'salidas_aire'] : $strAliasPrefix . 'salidas_aire';
			$objToReturn->strSalidasAire = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'techo_corredizo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'techo_corredizo'] : $strAliasPrefix . 'techo_corredizo';
			$objToReturn->strTechoCorredizo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'comando_distancia', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'comando_distancia'] : $strAliasPrefix . 'comando_distancia';
			$objToReturn->strComandoDistancia = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'volante_ajuste_vertical', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'volante_ajuste_vertical'] : $strAliasPrefix . 'volante_ajuste_vertical';
			$objToReturn->strVolanteAjusteVertical = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'volante_cuero', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'volante_cuero'] : $strAliasPrefix . 'volante_cuero';
			$objToReturn->strVolanteCuero = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'molduras_color_carroceria', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'molduras_color_carroceria'] : $strAliasPrefix . 'molduras_color_carroceria';
			$objToReturn->strMoldurasColorCarroceria = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'espejos_electricos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'espejos_electricos'] : $strAliasPrefix . 'espejos_electricos';
			$objToReturn->strEspejosElectricos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'espejos_rebatibles_electricamente', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'espejos_rebatibles_electricamente'] : $strAliasPrefix . 'espejos_rebatibles_electricamente';
			$objToReturn->strEspejosRebatiblesElectricamente = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'espejos_memorias', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'espejos_memorias'] : $strAliasPrefix . 'espejos_memorias';
			$objToReturn->strEspejosMemorias = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'lava_faros', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'lava_faros'] : $strAliasPrefix . 'lava_faros';
			$objToReturn->strLavaFaros = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'lava_luneta', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'lava_luneta'] : $strAliasPrefix . 'lava_luneta';
			$objToReturn->strLavaLuneta = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'cobertor_caja_carga', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cobertor_caja_carga'] : $strAliasPrefix . 'cobertor_caja_carga';
			$objToReturn->strCobertorCajaCarga = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'barras_portaequipaje_techo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'barras_portaequipaje_techo'] : $strAliasPrefix . 'barras_portaequipaje_techo';
			$objToReturn->strBarrasPortaequipajeTecho = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'barra_antivuelco', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'barra_antivuelco'] : $strAliasPrefix . 'barra_antivuelco';
			$objToReturn->strBarraAntivuelco = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'estribos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'estribos'] : $strAliasPrefix . 'estribos';
			$objToReturn->strEstribos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'conexion_auxiliar', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'conexion_auxiliar'] : $strAliasPrefix . 'conexion_auxiliar';
			$objToReturn->strConexionAuxiliar = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'conexion_bluetooth', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'conexion_bluetooth'] : $strAliasPrefix . 'conexion_bluetooth';
			$objToReturn->strConexionBluetooth = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'control_por_voz', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'control_por_voz'] : $strAliasPrefix . 'control_por_voz';
			$objToReturn->strControlPorVoz = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'entrada_usb', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'entrada_usb'] : $strAliasPrefix . 'entrada_usb';
			$objToReturn->strEntradaUsb = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'lector_tarjetas_sd', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'lector_tarjetas_sd'] : $strAliasPrefix . 'lector_tarjetas_sd';
			$objToReturn->strLectorTarjetasSd = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'navegador_gps', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'navegador_gps'] : $strAliasPrefix . 'navegador_gps';
			$objToReturn->strNavegadorGps = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'parlantes', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'parlantes'] : $strAliasPrefix . 'parlantes';
			$objToReturn->strParlantes = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'radio_amfm', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'radio_amfm'] : $strAliasPrefix . 'radio_amfm';
			$objToReturn->strRadioAmfm = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'radio_satelital_xm', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'radio_satelital_xm'] : $strAliasPrefix . 'radio_satelital_xm';
			$objToReturn->strRadioSatelitalXm = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'reproductor_cd', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'reproductor_cd'] : $strAliasPrefix . 'reproductor_cd';
			$objToReturn->strReproductorCd = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'reproductor_dvd', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'reproductor_dvd'] : $strAliasPrefix . 'reproductor_dvd';
			$objToReturn->strReproductorDvd = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'reproductor_mp3', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'reproductor_mp3'] : $strAliasPrefix . 'reproductor_mp3';
			$objToReturn->strReproductorMp3 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'toma_corriente_12v', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'toma_corriente_12v'] : $strAliasPrefix . 'toma_corriente_12v';
			$objToReturn->strTomaCorriente12v = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'airbags', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'airbags'] : $strAliasPrefix . 'airbags';
			$objToReturn->strAirbags = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'alarma', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'alarma'] : $strAliasPrefix . 'alarma';
			$objToReturn->strAlarma = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'asiento_para_ninos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'asiento_para_ninos'] : $strAliasPrefix . 'asiento_para_ninos';
			$objToReturn->strAsientoParaNinos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'asistencias_electronicas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'asistencias_electronicas'] : $strAliasPrefix . 'asistencias_electronicas';
			$objToReturn->strAsistenciasElectronicas = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'camara_retroceso', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'camara_retroceso'] : $strAliasPrefix . 'camara_retroceso';
			$objToReturn->strCamaraRetroceso = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'cinturones_inerciales', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cinturones_inerciales'] : $strAliasPrefix . 'cinturones_inerciales';
			$objToReturn->strCinturonesInerciales = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'sensor_distancia_estacionamiento', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'sensor_distancia_estacionamiento'] : $strAliasPrefix . 'sensor_distancia_estacionamiento';
			$objToReturn->strSensorDistanciaEstacionamiento = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'desempaniador_espejos_exteriores', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'desempaniador_espejos_exteriores'] : $strAliasPrefix . 'desempaniador_espejos_exteriores';
			$objToReturn->strDesempaniadorEspejosExteriores = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'encendido_auto_balizas_urgencia', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'encendido_auto_balizas_urgencia'] : $strAliasPrefix . 'encendido_auto_balizas_urgencia';
			$objToReturn->strEncendidoAutoBalizasUrgencia = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'faros_antiniebla', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'faros_antiniebla'] : $strAliasPrefix . 'faros_antiniebla';
			$objToReturn->strFarosAntiniebla = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'faros_xenon', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'faros_xenon'] : $strAliasPrefix . 'faros_xenon';
			$objToReturn->strFarosXenon = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'ganchos_isofix_latch', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ganchos_isofix_latch'] : $strAliasPrefix . 'ganchos_isofix_latch';
			$objToReturn->strGanchosIsofixLatch = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'garantia', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'garantia'] : $strAliasPrefix . 'garantia';
			$objToReturn->strGarantia = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'indicador_presion_neumaticos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'indicador_presion_neumaticos'] : $strAliasPrefix . 'indicador_presion_neumaticos';
			$objToReturn->strIndicadorPresionNeumaticos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'lavafaros', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'lavafaros'] : $strAliasPrefix . 'lavafaros';
			$objToReturn->strLavafaros = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'luces_adaptativas_curvas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'luces_adaptativas_curvas'] : $strAliasPrefix . 'luces_adaptativas_curvas';
			$objToReturn->strLucesAdaptativasCurvas = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'tercer_apoya_cabeza_trasero', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tercer_apoya_cabeza_trasero'] : $strAliasPrefix . 'tercer_apoya_cabeza_trasero';
			$objToReturn->strTercerApoyaCabezaTrasero = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_estado'] : $strAliasPrefix . 'id_estado';
			$objToReturn->intIdEstado = $objDbRow->GetColumn($strAliasName, 'Integer');

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
				$strAliasPrefix = 'fichas_backup__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of FichasBackups from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FichasBackup[]
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
					$objItem = FichasBackup::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FichasBackup::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FichasBackup object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasBackup
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return FichasBackup::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FichasBackup()->Id, $intId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FichasBackup objects,
		 * by IdMarca Index(es)
		 * @param integer $intIdMarca
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasBackup[]
		*/
		public static function LoadArrayByIdMarca($intIdMarca, $objOptionalClauses = null) {
			// Call FichasBackup::QueryArray to perform the LoadArrayByIdMarca query
			try {
				return FichasBackup::QueryArray(
					QQ::Equal(QQN::FichasBackup()->IdMarca, $intIdMarca),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FichasBackups
		 * by IdMarca Index(es)
		 * @param integer $intIdMarca
		 * @return int
		*/
		public static function CountByIdMarca($intIdMarca) {
			// Call FichasBackup::QueryCount to perform the CountByIdMarca query
			return FichasBackup::QueryCount(
				QQ::Equal(QQN::FichasBackup()->IdMarca, $intIdMarca)
			);
		}
			
		/**
		 * Load an array of FichasBackup objects,
		 * by IdEstado Index(es)
		 * @param integer $intIdEstado
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasBackup[]
		*/
		public static function LoadArrayByIdEstado($intIdEstado, $objOptionalClauses = null) {
			// Call FichasBackup::QueryArray to perform the LoadArrayByIdEstado query
			try {
				return FichasBackup::QueryArray(
					QQ::Equal(QQN::FichasBackup()->IdEstado, $intIdEstado),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FichasBackups
		 * by IdEstado Index(es)
		 * @param integer $intIdEstado
		 * @return int
		*/
		public static function CountByIdEstado($intIdEstado) {
			// Call FichasBackup::QueryCount to perform the CountByIdEstado query
			return FichasBackup::QueryCount(
				QQ::Equal(QQN::FichasBackup()->IdEstado, $intIdEstado)
			);
		}
			
		/**
		 * Load an array of FichasBackup objects,
		 * by IdTipos Index(es)
		 * @param string $strIdTipos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FichasBackup[]
		*/
		public static function LoadArrayByIdTipos($strIdTipos, $objOptionalClauses = null) {
			// Call FichasBackup::QueryArray to perform the LoadArrayByIdTipos query
			try {
				return FichasBackup::QueryArray(
					QQ::Equal(QQN::FichasBackup()->IdTipos, $strIdTipos),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FichasBackups
		 * by IdTipos Index(es)
		 * @param string $strIdTipos
		 * @return int
		*/
		public static function CountByIdTipos($strIdTipos) {
			// Call FichasBackup::QueryCount to perform the CountByIdTipos query
			return FichasBackup::QueryCount(
				QQ::Equal(QQN::FichasBackup()->IdTipos, $strIdTipos)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this FichasBackup
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FichasBackup::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `fichas_backup` (
							`id_marca`,
							`id_tipos`,
							`modelo`,
							`descripcion`,
							`precio`,
							`combustible`,
							`cilindrada`,
							`cilindros`,
							`potencia_maxima`,
							`par_motor_torque`,
							`posicion`,
							`alimentacion`,
							`relacion_de_compresion`,
							`valvulas`,
							`tipo`,
							`marchas`,
							`traccion`,
							`velocidad_maxima`,
							`aceleracion_0_100`,
							`consumo_urbano`,
							`consumo_interurbano`,
							`consumo_mixto`,
							`emisiones_co2`,
							`tipo_carroceria`,
							`puertas`,
							`plazas`,
							`filas_de_asientos`,
							`info_ejes`,
							`peso`,
							`capacidad_baul`,
							`capacidad_tanque`,
							`info_caja_carga`,
							`volumen_caja_carga`,
							`capacidad_carga`,
							`frenos_delanteros`,
							`frenos_traseros`,
							`llantas`,
							`neumaticos`,
							`suspension_delantera`,
							`suspension_trasera`,
							`luces_automatico`,
							`climatizacion`,
							`alarma_luces_encendidas`,
							`critales_electricos`,
							`apertura_baul`,
							`apertura_tanque`,
							`asientos_regulables_altura`,
							`asiento_trasero_rebatible`,
							`asientos_calefaccionado`,
							`asientos_ajustes_electronicos`,
							`asientos_del_butaca_deportiva`,
							`asiento_del_bipartido`,
							`boton_start_stop`,
							`cambio_secuencial_volante`,
							`cierre_centralizado`,
							`computadora_a_bordo`,
							`direccion_asistida`,
							`mandos_audio_volante`,
							`reposabrazos`,
							`control_crucero`,
							`sensor_lluvia`,
							`tapizado`,
							`salidas_aire`,
							`techo_corredizo`,
							`comando_distancia`,
							`volante_ajuste_vertical`,
							`volante_cuero`,
							`molduras_color_carroceria`,
							`espejos_electricos`,
							`espejos_rebatibles_electricamente`,
							`espejos_memorias`,
							`lava_faros`,
							`lava_luneta`,
							`cobertor_caja_carga`,
							`barras_portaequipaje_techo`,
							`barra_antivuelco`,
							`estribos`,
							`conexion_auxiliar`,
							`conexion_bluetooth`,
							`control_por_voz`,
							`entrada_usb`,
							`lector_tarjetas_sd`,
							`navegador_gps`,
							`parlantes`,
							`radio_amfm`,
							`radio_satelital_xm`,
							`reproductor_cd`,
							`reproductor_dvd`,
							`reproductor_mp3`,
							`toma_corriente_12v`,
							`airbags`,
							`alarma`,
							`asiento_para_ninos`,
							`asistencias_electronicas`,
							`camara_retroceso`,
							`cinturones_inerciales`,
							`sensor_distancia_estacionamiento`,
							`desempaniador_espejos_exteriores`,
							`encendido_auto_balizas_urgencia`,
							`faros_antiniebla`,
							`faros_xenon`,
							`ganchos_isofix_latch`,
							`garantia`,
							`indicador_presion_neumaticos`,
							`lavafaros`,
							`luces_adaptativas_curvas`,
							`tercer_apoya_cabeza_trasero`,
							`id_estado`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIdMarca) . ',
							' . $objDatabase->SqlVariable($this->strIdTipos) . ',
							' . $objDatabase->SqlVariable($this->strModelo) . ',
							' . $objDatabase->SqlVariable($this->strDescripcion) . ',
							' . $objDatabase->SqlVariable($this->strPrecio) . ',
							' . $objDatabase->SqlVariable($this->strCombustible) . ',
							' . $objDatabase->SqlVariable($this->strCilindrada) . ',
							' . $objDatabase->SqlVariable($this->strCilindros) . ',
							' . $objDatabase->SqlVariable($this->strPotenciaMaxima) . ',
							' . $objDatabase->SqlVariable($this->strParMotorTorque) . ',
							' . $objDatabase->SqlVariable($this->strPosicion) . ',
							' . $objDatabase->SqlVariable($this->strAlimentacion) . ',
							' . $objDatabase->SqlVariable($this->strRelacionDeCompresion) . ',
							' . $objDatabase->SqlVariable($this->strValvulas) . ',
							' . $objDatabase->SqlVariable($this->strTipo) . ',
							' . $objDatabase->SqlVariable($this->strMarchas) . ',
							' . $objDatabase->SqlVariable($this->strTraccion) . ',
							' . $objDatabase->SqlVariable($this->strVelocidadMaxima) . ',
							' . $objDatabase->SqlVariable($this->strAceleracion0100) . ',
							' . $objDatabase->SqlVariable($this->strConsumoUrbano) . ',
							' . $objDatabase->SqlVariable($this->strConsumoInterurbano) . ',
							' . $objDatabase->SqlVariable($this->strConsumoMixto) . ',
							' . $objDatabase->SqlVariable($this->strEmisionesCo2) . ',
							' . $objDatabase->SqlVariable($this->strTipoCarroceria) . ',
							' . $objDatabase->SqlVariable($this->strPuertas) . ',
							' . $objDatabase->SqlVariable($this->strPlazas) . ',
							' . $objDatabase->SqlVariable($this->strFilasDeAsientos) . ',
							' . $objDatabase->SqlVariable($this->strInfoEjes) . ',
							' . $objDatabase->SqlVariable($this->strPeso) . ',
							' . $objDatabase->SqlVariable($this->strCapacidadBaul) . ',
							' . $objDatabase->SqlVariable($this->strCapacidadTanque) . ',
							' . $objDatabase->SqlVariable($this->strInfoCajaCarga) . ',
							' . $objDatabase->SqlVariable($this->strVolumenCajaCarga) . ',
							' . $objDatabase->SqlVariable($this->strCapacidadCarga) . ',
							' . $objDatabase->SqlVariable($this->strFrenosDelanteros) . ',
							' . $objDatabase->SqlVariable($this->strFrenosTraseros) . ',
							' . $objDatabase->SqlVariable($this->strLlantas) . ',
							' . $objDatabase->SqlVariable($this->strNeumaticos) . ',
							' . $objDatabase->SqlVariable($this->strSuspensionDelantera) . ',
							' . $objDatabase->SqlVariable($this->strSuspensionTrasera) . ',
							' . $objDatabase->SqlVariable($this->strLucesAutomatico) . ',
							' . $objDatabase->SqlVariable($this->strClimatizacion) . ',
							' . $objDatabase->SqlVariable($this->strAlarmaLucesEncendidas) . ',
							' . $objDatabase->SqlVariable($this->strCritalesElectricos) . ',
							' . $objDatabase->SqlVariable($this->strAperturaBaul) . ',
							' . $objDatabase->SqlVariable($this->strAperturaTanque) . ',
							' . $objDatabase->SqlVariable($this->strAsientosRegulablesAltura) . ',
							' . $objDatabase->SqlVariable($this->strAsientoTraseroRebatible) . ',
							' . $objDatabase->SqlVariable($this->strAsientosCalefaccionado) . ',
							' . $objDatabase->SqlVariable($this->strAsientosAjustesElectronicos) . ',
							' . $objDatabase->SqlVariable($this->strAsientosDelButacaDeportiva) . ',
							' . $objDatabase->SqlVariable($this->strAsientoDelBipartido) . ',
							' . $objDatabase->SqlVariable($this->strBotonStartStop) . ',
							' . $objDatabase->SqlVariable($this->strCambioSecuencialVolante) . ',
							' . $objDatabase->SqlVariable($this->strCierreCentralizado) . ',
							' . $objDatabase->SqlVariable($this->strComputadoraABordo) . ',
							' . $objDatabase->SqlVariable($this->strDireccionAsistida) . ',
							' . $objDatabase->SqlVariable($this->strMandosAudioVolante) . ',
							' . $objDatabase->SqlVariable($this->strReposabrazos) . ',
							' . $objDatabase->SqlVariable($this->strControlCrucero) . ',
							' . $objDatabase->SqlVariable($this->strSensorLluvia) . ',
							' . $objDatabase->SqlVariable($this->strTapizado) . ',
							' . $objDatabase->SqlVariable($this->strSalidasAire) . ',
							' . $objDatabase->SqlVariable($this->strTechoCorredizo) . ',
							' . $objDatabase->SqlVariable($this->strComandoDistancia) . ',
							' . $objDatabase->SqlVariable($this->strVolanteAjusteVertical) . ',
							' . $objDatabase->SqlVariable($this->strVolanteCuero) . ',
							' . $objDatabase->SqlVariable($this->strMoldurasColorCarroceria) . ',
							' . $objDatabase->SqlVariable($this->strEspejosElectricos) . ',
							' . $objDatabase->SqlVariable($this->strEspejosRebatiblesElectricamente) . ',
							' . $objDatabase->SqlVariable($this->strEspejosMemorias) . ',
							' . $objDatabase->SqlVariable($this->strLavaFaros) . ',
							' . $objDatabase->SqlVariable($this->strLavaLuneta) . ',
							' . $objDatabase->SqlVariable($this->strCobertorCajaCarga) . ',
							' . $objDatabase->SqlVariable($this->strBarrasPortaequipajeTecho) . ',
							' . $objDatabase->SqlVariable($this->strBarraAntivuelco) . ',
							' . $objDatabase->SqlVariable($this->strEstribos) . ',
							' . $objDatabase->SqlVariable($this->strConexionAuxiliar) . ',
							' . $objDatabase->SqlVariable($this->strConexionBluetooth) . ',
							' . $objDatabase->SqlVariable($this->strControlPorVoz) . ',
							' . $objDatabase->SqlVariable($this->strEntradaUsb) . ',
							' . $objDatabase->SqlVariable($this->strLectorTarjetasSd) . ',
							' . $objDatabase->SqlVariable($this->strNavegadorGps) . ',
							' . $objDatabase->SqlVariable($this->strParlantes) . ',
							' . $objDatabase->SqlVariable($this->strRadioAmfm) . ',
							' . $objDatabase->SqlVariable($this->strRadioSatelitalXm) . ',
							' . $objDatabase->SqlVariable($this->strReproductorCd) . ',
							' . $objDatabase->SqlVariable($this->strReproductorDvd) . ',
							' . $objDatabase->SqlVariable($this->strReproductorMp3) . ',
							' . $objDatabase->SqlVariable($this->strTomaCorriente12v) . ',
							' . $objDatabase->SqlVariable($this->strAirbags) . ',
							' . $objDatabase->SqlVariable($this->strAlarma) . ',
							' . $objDatabase->SqlVariable($this->strAsientoParaNinos) . ',
							' . $objDatabase->SqlVariable($this->strAsistenciasElectronicas) . ',
							' . $objDatabase->SqlVariable($this->strCamaraRetroceso) . ',
							' . $objDatabase->SqlVariable($this->strCinturonesInerciales) . ',
							' . $objDatabase->SqlVariable($this->strSensorDistanciaEstacionamiento) . ',
							' . $objDatabase->SqlVariable($this->strDesempaniadorEspejosExteriores) . ',
							' . $objDatabase->SqlVariable($this->strEncendidoAutoBalizasUrgencia) . ',
							' . $objDatabase->SqlVariable($this->strFarosAntiniebla) . ',
							' . $objDatabase->SqlVariable($this->strFarosXenon) . ',
							' . $objDatabase->SqlVariable($this->strGanchosIsofixLatch) . ',
							' . $objDatabase->SqlVariable($this->strGarantia) . ',
							' . $objDatabase->SqlVariable($this->strIndicadorPresionNeumaticos) . ',
							' . $objDatabase->SqlVariable($this->strLavafaros) . ',
							' . $objDatabase->SqlVariable($this->strLucesAdaptativasCurvas) . ',
							' . $objDatabase->SqlVariable($this->strTercerApoyaCabezaTrasero) . ',
							' . $objDatabase->SqlVariable($this->intIdEstado) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('fichas_backup', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`fichas_backup`
						SET
							`id_marca` = ' . $objDatabase->SqlVariable($this->intIdMarca) . ',
							`id_tipos` = ' . $objDatabase->SqlVariable($this->strIdTipos) . ',
							`modelo` = ' . $objDatabase->SqlVariable($this->strModelo) . ',
							`descripcion` = ' . $objDatabase->SqlVariable($this->strDescripcion) . ',
							`precio` = ' . $objDatabase->SqlVariable($this->strPrecio) . ',
							`combustible` = ' . $objDatabase->SqlVariable($this->strCombustible) . ',
							`cilindrada` = ' . $objDatabase->SqlVariable($this->strCilindrada) . ',
							`cilindros` = ' . $objDatabase->SqlVariable($this->strCilindros) . ',
							`potencia_maxima` = ' . $objDatabase->SqlVariable($this->strPotenciaMaxima) . ',
							`par_motor_torque` = ' . $objDatabase->SqlVariable($this->strParMotorTorque) . ',
							`posicion` = ' . $objDatabase->SqlVariable($this->strPosicion) . ',
							`alimentacion` = ' . $objDatabase->SqlVariable($this->strAlimentacion) . ',
							`relacion_de_compresion` = ' . $objDatabase->SqlVariable($this->strRelacionDeCompresion) . ',
							`valvulas` = ' . $objDatabase->SqlVariable($this->strValvulas) . ',
							`tipo` = ' . $objDatabase->SqlVariable($this->strTipo) . ',
							`marchas` = ' . $objDatabase->SqlVariable($this->strMarchas) . ',
							`traccion` = ' . $objDatabase->SqlVariable($this->strTraccion) . ',
							`velocidad_maxima` = ' . $objDatabase->SqlVariable($this->strVelocidadMaxima) . ',
							`aceleracion_0_100` = ' . $objDatabase->SqlVariable($this->strAceleracion0100) . ',
							`consumo_urbano` = ' . $objDatabase->SqlVariable($this->strConsumoUrbano) . ',
							`consumo_interurbano` = ' . $objDatabase->SqlVariable($this->strConsumoInterurbano) . ',
							`consumo_mixto` = ' . $objDatabase->SqlVariable($this->strConsumoMixto) . ',
							`emisiones_co2` = ' . $objDatabase->SqlVariable($this->strEmisionesCo2) . ',
							`tipo_carroceria` = ' . $objDatabase->SqlVariable($this->strTipoCarroceria) . ',
							`puertas` = ' . $objDatabase->SqlVariable($this->strPuertas) . ',
							`plazas` = ' . $objDatabase->SqlVariable($this->strPlazas) . ',
							`filas_de_asientos` = ' . $objDatabase->SqlVariable($this->strFilasDeAsientos) . ',
							`info_ejes` = ' . $objDatabase->SqlVariable($this->strInfoEjes) . ',
							`peso` = ' . $objDatabase->SqlVariable($this->strPeso) . ',
							`capacidad_baul` = ' . $objDatabase->SqlVariable($this->strCapacidadBaul) . ',
							`capacidad_tanque` = ' . $objDatabase->SqlVariable($this->strCapacidadTanque) . ',
							`info_caja_carga` = ' . $objDatabase->SqlVariable($this->strInfoCajaCarga) . ',
							`volumen_caja_carga` = ' . $objDatabase->SqlVariable($this->strVolumenCajaCarga) . ',
							`capacidad_carga` = ' . $objDatabase->SqlVariable($this->strCapacidadCarga) . ',
							`frenos_delanteros` = ' . $objDatabase->SqlVariable($this->strFrenosDelanteros) . ',
							`frenos_traseros` = ' . $objDatabase->SqlVariable($this->strFrenosTraseros) . ',
							`llantas` = ' . $objDatabase->SqlVariable($this->strLlantas) . ',
							`neumaticos` = ' . $objDatabase->SqlVariable($this->strNeumaticos) . ',
							`suspension_delantera` = ' . $objDatabase->SqlVariable($this->strSuspensionDelantera) . ',
							`suspension_trasera` = ' . $objDatabase->SqlVariable($this->strSuspensionTrasera) . ',
							`luces_automatico` = ' . $objDatabase->SqlVariable($this->strLucesAutomatico) . ',
							`climatizacion` = ' . $objDatabase->SqlVariable($this->strClimatizacion) . ',
							`alarma_luces_encendidas` = ' . $objDatabase->SqlVariable($this->strAlarmaLucesEncendidas) . ',
							`critales_electricos` = ' . $objDatabase->SqlVariable($this->strCritalesElectricos) . ',
							`apertura_baul` = ' . $objDatabase->SqlVariable($this->strAperturaBaul) . ',
							`apertura_tanque` = ' . $objDatabase->SqlVariable($this->strAperturaTanque) . ',
							`asientos_regulables_altura` = ' . $objDatabase->SqlVariable($this->strAsientosRegulablesAltura) . ',
							`asiento_trasero_rebatible` = ' . $objDatabase->SqlVariable($this->strAsientoTraseroRebatible) . ',
							`asientos_calefaccionado` = ' . $objDatabase->SqlVariable($this->strAsientosCalefaccionado) . ',
							`asientos_ajustes_electronicos` = ' . $objDatabase->SqlVariable($this->strAsientosAjustesElectronicos) . ',
							`asientos_del_butaca_deportiva` = ' . $objDatabase->SqlVariable($this->strAsientosDelButacaDeportiva) . ',
							`asiento_del_bipartido` = ' . $objDatabase->SqlVariable($this->strAsientoDelBipartido) . ',
							`boton_start_stop` = ' . $objDatabase->SqlVariable($this->strBotonStartStop) . ',
							`cambio_secuencial_volante` = ' . $objDatabase->SqlVariable($this->strCambioSecuencialVolante) . ',
							`cierre_centralizado` = ' . $objDatabase->SqlVariable($this->strCierreCentralizado) . ',
							`computadora_a_bordo` = ' . $objDatabase->SqlVariable($this->strComputadoraABordo) . ',
							`direccion_asistida` = ' . $objDatabase->SqlVariable($this->strDireccionAsistida) . ',
							`mandos_audio_volante` = ' . $objDatabase->SqlVariable($this->strMandosAudioVolante) . ',
							`reposabrazos` = ' . $objDatabase->SqlVariable($this->strReposabrazos) . ',
							`control_crucero` = ' . $objDatabase->SqlVariable($this->strControlCrucero) . ',
							`sensor_lluvia` = ' . $objDatabase->SqlVariable($this->strSensorLluvia) . ',
							`tapizado` = ' . $objDatabase->SqlVariable($this->strTapizado) . ',
							`salidas_aire` = ' . $objDatabase->SqlVariable($this->strSalidasAire) . ',
							`techo_corredizo` = ' . $objDatabase->SqlVariable($this->strTechoCorredizo) . ',
							`comando_distancia` = ' . $objDatabase->SqlVariable($this->strComandoDistancia) . ',
							`volante_ajuste_vertical` = ' . $objDatabase->SqlVariable($this->strVolanteAjusteVertical) . ',
							`volante_cuero` = ' . $objDatabase->SqlVariable($this->strVolanteCuero) . ',
							`molduras_color_carroceria` = ' . $objDatabase->SqlVariable($this->strMoldurasColorCarroceria) . ',
							`espejos_electricos` = ' . $objDatabase->SqlVariable($this->strEspejosElectricos) . ',
							`espejos_rebatibles_electricamente` = ' . $objDatabase->SqlVariable($this->strEspejosRebatiblesElectricamente) . ',
							`espejos_memorias` = ' . $objDatabase->SqlVariable($this->strEspejosMemorias) . ',
							`lava_faros` = ' . $objDatabase->SqlVariable($this->strLavaFaros) . ',
							`lava_luneta` = ' . $objDatabase->SqlVariable($this->strLavaLuneta) . ',
							`cobertor_caja_carga` = ' . $objDatabase->SqlVariable($this->strCobertorCajaCarga) . ',
							`barras_portaequipaje_techo` = ' . $objDatabase->SqlVariable($this->strBarrasPortaequipajeTecho) . ',
							`barra_antivuelco` = ' . $objDatabase->SqlVariable($this->strBarraAntivuelco) . ',
							`estribos` = ' . $objDatabase->SqlVariable($this->strEstribos) . ',
							`conexion_auxiliar` = ' . $objDatabase->SqlVariable($this->strConexionAuxiliar) . ',
							`conexion_bluetooth` = ' . $objDatabase->SqlVariable($this->strConexionBluetooth) . ',
							`control_por_voz` = ' . $objDatabase->SqlVariable($this->strControlPorVoz) . ',
							`entrada_usb` = ' . $objDatabase->SqlVariable($this->strEntradaUsb) . ',
							`lector_tarjetas_sd` = ' . $objDatabase->SqlVariable($this->strLectorTarjetasSd) . ',
							`navegador_gps` = ' . $objDatabase->SqlVariable($this->strNavegadorGps) . ',
							`parlantes` = ' . $objDatabase->SqlVariable($this->strParlantes) . ',
							`radio_amfm` = ' . $objDatabase->SqlVariable($this->strRadioAmfm) . ',
							`radio_satelital_xm` = ' . $objDatabase->SqlVariable($this->strRadioSatelitalXm) . ',
							`reproductor_cd` = ' . $objDatabase->SqlVariable($this->strReproductorCd) . ',
							`reproductor_dvd` = ' . $objDatabase->SqlVariable($this->strReproductorDvd) . ',
							`reproductor_mp3` = ' . $objDatabase->SqlVariable($this->strReproductorMp3) . ',
							`toma_corriente_12v` = ' . $objDatabase->SqlVariable($this->strTomaCorriente12v) . ',
							`airbags` = ' . $objDatabase->SqlVariable($this->strAirbags) . ',
							`alarma` = ' . $objDatabase->SqlVariable($this->strAlarma) . ',
							`asiento_para_ninos` = ' . $objDatabase->SqlVariable($this->strAsientoParaNinos) . ',
							`asistencias_electronicas` = ' . $objDatabase->SqlVariable($this->strAsistenciasElectronicas) . ',
							`camara_retroceso` = ' . $objDatabase->SqlVariable($this->strCamaraRetroceso) . ',
							`cinturones_inerciales` = ' . $objDatabase->SqlVariable($this->strCinturonesInerciales) . ',
							`sensor_distancia_estacionamiento` = ' . $objDatabase->SqlVariable($this->strSensorDistanciaEstacionamiento) . ',
							`desempaniador_espejos_exteriores` = ' . $objDatabase->SqlVariable($this->strDesempaniadorEspejosExteriores) . ',
							`encendido_auto_balizas_urgencia` = ' . $objDatabase->SqlVariable($this->strEncendidoAutoBalizasUrgencia) . ',
							`faros_antiniebla` = ' . $objDatabase->SqlVariable($this->strFarosAntiniebla) . ',
							`faros_xenon` = ' . $objDatabase->SqlVariable($this->strFarosXenon) . ',
							`ganchos_isofix_latch` = ' . $objDatabase->SqlVariable($this->strGanchosIsofixLatch) . ',
							`garantia` = ' . $objDatabase->SqlVariable($this->strGarantia) . ',
							`indicador_presion_neumaticos` = ' . $objDatabase->SqlVariable($this->strIndicadorPresionNeumaticos) . ',
							`lavafaros` = ' . $objDatabase->SqlVariable($this->strLavafaros) . ',
							`luces_adaptativas_curvas` = ' . $objDatabase->SqlVariable($this->strLucesAdaptativasCurvas) . ',
							`tercer_apoya_cabeza_trasero` = ' . $objDatabase->SqlVariable($this->strTercerApoyaCabezaTrasero) . ',
							`id_estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . '
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
		 * Delete this FichasBackup
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FichasBackup with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FichasBackup::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_backup`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all FichasBackups
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FichasBackup::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fichas_backup`');
		}

		/**
		 * Truncate fichas_backup table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FichasBackup::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `fichas_backup`');
		}

		/**
		 * Reload this FichasBackup from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FichasBackup object.');

			// Reload the Object
			$objReloaded = FichasBackup::Load($this->intId);

			// Update $this's local variables to match
			$this->intIdMarca = $objReloaded->intIdMarca;
			$this->strIdTipos = $objReloaded->strIdTipos;
			$this->strModelo = $objReloaded->strModelo;
			$this->strDescripcion = $objReloaded->strDescripcion;
			$this->strPrecio = $objReloaded->strPrecio;
			$this->strCombustible = $objReloaded->strCombustible;
			$this->strCilindrada = $objReloaded->strCilindrada;
			$this->strCilindros = $objReloaded->strCilindros;
			$this->strPotenciaMaxima = $objReloaded->strPotenciaMaxima;
			$this->strParMotorTorque = $objReloaded->strParMotorTorque;
			$this->strPosicion = $objReloaded->strPosicion;
			$this->strAlimentacion = $objReloaded->strAlimentacion;
			$this->strRelacionDeCompresion = $objReloaded->strRelacionDeCompresion;
			$this->strValvulas = $objReloaded->strValvulas;
			$this->strTipo = $objReloaded->strTipo;
			$this->strMarchas = $objReloaded->strMarchas;
			$this->strTraccion = $objReloaded->strTraccion;
			$this->strVelocidadMaxima = $objReloaded->strVelocidadMaxima;
			$this->strAceleracion0100 = $objReloaded->strAceleracion0100;
			$this->strConsumoUrbano = $objReloaded->strConsumoUrbano;
			$this->strConsumoInterurbano = $objReloaded->strConsumoInterurbano;
			$this->strConsumoMixto = $objReloaded->strConsumoMixto;
			$this->strEmisionesCo2 = $objReloaded->strEmisionesCo2;
			$this->strTipoCarroceria = $objReloaded->strTipoCarroceria;
			$this->strPuertas = $objReloaded->strPuertas;
			$this->strPlazas = $objReloaded->strPlazas;
			$this->strFilasDeAsientos = $objReloaded->strFilasDeAsientos;
			$this->strInfoEjes = $objReloaded->strInfoEjes;
			$this->strPeso = $objReloaded->strPeso;
			$this->strCapacidadBaul = $objReloaded->strCapacidadBaul;
			$this->strCapacidadTanque = $objReloaded->strCapacidadTanque;
			$this->strInfoCajaCarga = $objReloaded->strInfoCajaCarga;
			$this->strVolumenCajaCarga = $objReloaded->strVolumenCajaCarga;
			$this->strCapacidadCarga = $objReloaded->strCapacidadCarga;
			$this->strFrenosDelanteros = $objReloaded->strFrenosDelanteros;
			$this->strFrenosTraseros = $objReloaded->strFrenosTraseros;
			$this->strLlantas = $objReloaded->strLlantas;
			$this->strNeumaticos = $objReloaded->strNeumaticos;
			$this->strSuspensionDelantera = $objReloaded->strSuspensionDelantera;
			$this->strSuspensionTrasera = $objReloaded->strSuspensionTrasera;
			$this->strLucesAutomatico = $objReloaded->strLucesAutomatico;
			$this->strClimatizacion = $objReloaded->strClimatizacion;
			$this->strAlarmaLucesEncendidas = $objReloaded->strAlarmaLucesEncendidas;
			$this->strCritalesElectricos = $objReloaded->strCritalesElectricos;
			$this->strAperturaBaul = $objReloaded->strAperturaBaul;
			$this->strAperturaTanque = $objReloaded->strAperturaTanque;
			$this->strAsientosRegulablesAltura = $objReloaded->strAsientosRegulablesAltura;
			$this->strAsientoTraseroRebatible = $objReloaded->strAsientoTraseroRebatible;
			$this->strAsientosCalefaccionado = $objReloaded->strAsientosCalefaccionado;
			$this->strAsientosAjustesElectronicos = $objReloaded->strAsientosAjustesElectronicos;
			$this->strAsientosDelButacaDeportiva = $objReloaded->strAsientosDelButacaDeportiva;
			$this->strAsientoDelBipartido = $objReloaded->strAsientoDelBipartido;
			$this->strBotonStartStop = $objReloaded->strBotonStartStop;
			$this->strCambioSecuencialVolante = $objReloaded->strCambioSecuencialVolante;
			$this->strCierreCentralizado = $objReloaded->strCierreCentralizado;
			$this->strComputadoraABordo = $objReloaded->strComputadoraABordo;
			$this->strDireccionAsistida = $objReloaded->strDireccionAsistida;
			$this->strMandosAudioVolante = $objReloaded->strMandosAudioVolante;
			$this->strReposabrazos = $objReloaded->strReposabrazos;
			$this->strControlCrucero = $objReloaded->strControlCrucero;
			$this->strSensorLluvia = $objReloaded->strSensorLluvia;
			$this->strTapizado = $objReloaded->strTapizado;
			$this->strSalidasAire = $objReloaded->strSalidasAire;
			$this->strTechoCorredizo = $objReloaded->strTechoCorredizo;
			$this->strComandoDistancia = $objReloaded->strComandoDistancia;
			$this->strVolanteAjusteVertical = $objReloaded->strVolanteAjusteVertical;
			$this->strVolanteCuero = $objReloaded->strVolanteCuero;
			$this->strMoldurasColorCarroceria = $objReloaded->strMoldurasColorCarroceria;
			$this->strEspejosElectricos = $objReloaded->strEspejosElectricos;
			$this->strEspejosRebatiblesElectricamente = $objReloaded->strEspejosRebatiblesElectricamente;
			$this->strEspejosMemorias = $objReloaded->strEspejosMemorias;
			$this->strLavaFaros = $objReloaded->strLavaFaros;
			$this->strLavaLuneta = $objReloaded->strLavaLuneta;
			$this->strCobertorCajaCarga = $objReloaded->strCobertorCajaCarga;
			$this->strBarrasPortaequipajeTecho = $objReloaded->strBarrasPortaequipajeTecho;
			$this->strBarraAntivuelco = $objReloaded->strBarraAntivuelco;
			$this->strEstribos = $objReloaded->strEstribos;
			$this->strConexionAuxiliar = $objReloaded->strConexionAuxiliar;
			$this->strConexionBluetooth = $objReloaded->strConexionBluetooth;
			$this->strControlPorVoz = $objReloaded->strControlPorVoz;
			$this->strEntradaUsb = $objReloaded->strEntradaUsb;
			$this->strLectorTarjetasSd = $objReloaded->strLectorTarjetasSd;
			$this->strNavegadorGps = $objReloaded->strNavegadorGps;
			$this->strParlantes = $objReloaded->strParlantes;
			$this->strRadioAmfm = $objReloaded->strRadioAmfm;
			$this->strRadioSatelitalXm = $objReloaded->strRadioSatelitalXm;
			$this->strReproductorCd = $objReloaded->strReproductorCd;
			$this->strReproductorDvd = $objReloaded->strReproductorDvd;
			$this->strReproductorMp3 = $objReloaded->strReproductorMp3;
			$this->strTomaCorriente12v = $objReloaded->strTomaCorriente12v;
			$this->strAirbags = $objReloaded->strAirbags;
			$this->strAlarma = $objReloaded->strAlarma;
			$this->strAsientoParaNinos = $objReloaded->strAsientoParaNinos;
			$this->strAsistenciasElectronicas = $objReloaded->strAsistenciasElectronicas;
			$this->strCamaraRetroceso = $objReloaded->strCamaraRetroceso;
			$this->strCinturonesInerciales = $objReloaded->strCinturonesInerciales;
			$this->strSensorDistanciaEstacionamiento = $objReloaded->strSensorDistanciaEstacionamiento;
			$this->strDesempaniadorEspejosExteriores = $objReloaded->strDesempaniadorEspejosExteriores;
			$this->strEncendidoAutoBalizasUrgencia = $objReloaded->strEncendidoAutoBalizasUrgencia;
			$this->strFarosAntiniebla = $objReloaded->strFarosAntiniebla;
			$this->strFarosXenon = $objReloaded->strFarosXenon;
			$this->strGanchosIsofixLatch = $objReloaded->strGanchosIsofixLatch;
			$this->strGarantia = $objReloaded->strGarantia;
			$this->strIndicadorPresionNeumaticos = $objReloaded->strIndicadorPresionNeumaticos;
			$this->strLavafaros = $objReloaded->strLavafaros;
			$this->strLucesAdaptativasCurvas = $objReloaded->strLucesAdaptativasCurvas;
			$this->strTercerApoyaCabezaTrasero = $objReloaded->strTercerApoyaCabezaTrasero;
			$this->intIdEstado = $objReloaded->intIdEstado;
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
					 * Gets the value for strIdTipos (Not Null)
					 * @return string
					 */
					return $this->strIdTipos;

				case 'Modelo':
					/**
					 * Gets the value for strModelo (Not Null)
					 * @return string
					 */
					return $this->strModelo;

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

				case 'RelacionDeCompresion':
					/**
					 * Gets the value for strRelacionDeCompresion 
					 * @return string
					 */
					return $this->strRelacionDeCompresion;

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

				case 'EmisionesCo2':
					/**
					 * Gets the value for strEmisionesCo2 
					 * @return string
					 */
					return $this->strEmisionesCo2;

				case 'TipoCarroceria':
					/**
					 * Gets the value for strTipoCarroceria 
					 * @return string
					 */
					return $this->strTipoCarroceria;

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

				case 'InfoCajaCarga':
					/**
					 * Gets the value for strInfoCajaCarga 
					 * @return string
					 */
					return $this->strInfoCajaCarga;

				case 'VolumenCajaCarga':
					/**
					 * Gets the value for strVolumenCajaCarga 
					 * @return string
					 */
					return $this->strVolumenCajaCarga;

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

				case 'Llantas':
					/**
					 * Gets the value for strLlantas 
					 * @return string
					 */
					return $this->strLlantas;

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

				case 'LucesAutomatico':
					/**
					 * Gets the value for strLucesAutomatico 
					 * @return string
					 */
					return $this->strLucesAutomatico;

				case 'Climatizacion':
					/**
					 * Gets the value for strClimatizacion 
					 * @return string
					 */
					return $this->strClimatizacion;

				case 'AlarmaLucesEncendidas':
					/**
					 * Gets the value for strAlarmaLucesEncendidas 
					 * @return string
					 */
					return $this->strAlarmaLucesEncendidas;

				case 'CritalesElectricos':
					/**
					 * Gets the value for strCritalesElectricos 
					 * @return string
					 */
					return $this->strCritalesElectricos;

				case 'AperturaBaul':
					/**
					 * Gets the value for strAperturaBaul 
					 * @return string
					 */
					return $this->strAperturaBaul;

				case 'AperturaTanque':
					/**
					 * Gets the value for strAperturaTanque 
					 * @return string
					 */
					return $this->strAperturaTanque;

				case 'AsientosRegulablesAltura':
					/**
					 * Gets the value for strAsientosRegulablesAltura 
					 * @return string
					 */
					return $this->strAsientosRegulablesAltura;

				case 'AsientoTraseroRebatible':
					/**
					 * Gets the value for strAsientoTraseroRebatible 
					 * @return string
					 */
					return $this->strAsientoTraseroRebatible;

				case 'AsientosCalefaccionado':
					/**
					 * Gets the value for strAsientosCalefaccionado 
					 * @return string
					 */
					return $this->strAsientosCalefaccionado;

				case 'AsientosAjustesElectronicos':
					/**
					 * Gets the value for strAsientosAjustesElectronicos 
					 * @return string
					 */
					return $this->strAsientosAjustesElectronicos;

				case 'AsientosDelButacaDeportiva':
					/**
					 * Gets the value for strAsientosDelButacaDeportiva 
					 * @return string
					 */
					return $this->strAsientosDelButacaDeportiva;

				case 'AsientoDelBipartido':
					/**
					 * Gets the value for strAsientoDelBipartido 
					 * @return string
					 */
					return $this->strAsientoDelBipartido;

				case 'BotonStartStop':
					/**
					 * Gets the value for strBotonStartStop 
					 * @return string
					 */
					return $this->strBotonStartStop;

				case 'CambioSecuencialVolante':
					/**
					 * Gets the value for strCambioSecuencialVolante 
					 * @return string
					 */
					return $this->strCambioSecuencialVolante;

				case 'CierreCentralizado':
					/**
					 * Gets the value for strCierreCentralizado 
					 * @return string
					 */
					return $this->strCierreCentralizado;

				case 'ComputadoraABordo':
					/**
					 * Gets the value for strComputadoraABordo 
					 * @return string
					 */
					return $this->strComputadoraABordo;

				case 'DireccionAsistida':
					/**
					 * Gets the value for strDireccionAsistida 
					 * @return string
					 */
					return $this->strDireccionAsistida;

				case 'MandosAudioVolante':
					/**
					 * Gets the value for strMandosAudioVolante 
					 * @return string
					 */
					return $this->strMandosAudioVolante;

				case 'Reposabrazos':
					/**
					 * Gets the value for strReposabrazos 
					 * @return string
					 */
					return $this->strReposabrazos;

				case 'ControlCrucero':
					/**
					 * Gets the value for strControlCrucero 
					 * @return string
					 */
					return $this->strControlCrucero;

				case 'SensorLluvia':
					/**
					 * Gets the value for strSensorLluvia 
					 * @return string
					 */
					return $this->strSensorLluvia;

				case 'Tapizado':
					/**
					 * Gets the value for strTapizado 
					 * @return string
					 */
					return $this->strTapizado;

				case 'SalidasAire':
					/**
					 * Gets the value for strSalidasAire 
					 * @return string
					 */
					return $this->strSalidasAire;

				case 'TechoCorredizo':
					/**
					 * Gets the value for strTechoCorredizo 
					 * @return string
					 */
					return $this->strTechoCorredizo;

				case 'ComandoDistancia':
					/**
					 * Gets the value for strComandoDistancia 
					 * @return string
					 */
					return $this->strComandoDistancia;

				case 'VolanteAjusteVertical':
					/**
					 * Gets the value for strVolanteAjusteVertical 
					 * @return string
					 */
					return $this->strVolanteAjusteVertical;

				case 'VolanteCuero':
					/**
					 * Gets the value for strVolanteCuero 
					 * @return string
					 */
					return $this->strVolanteCuero;

				case 'MoldurasColorCarroceria':
					/**
					 * Gets the value for strMoldurasColorCarroceria 
					 * @return string
					 */
					return $this->strMoldurasColorCarroceria;

				case 'EspejosElectricos':
					/**
					 * Gets the value for strEspejosElectricos 
					 * @return string
					 */
					return $this->strEspejosElectricos;

				case 'EspejosRebatiblesElectricamente':
					/**
					 * Gets the value for strEspejosRebatiblesElectricamente 
					 * @return string
					 */
					return $this->strEspejosRebatiblesElectricamente;

				case 'EspejosMemorias':
					/**
					 * Gets the value for strEspejosMemorias 
					 * @return string
					 */
					return $this->strEspejosMemorias;

				case 'LavaFaros':
					/**
					 * Gets the value for strLavaFaros 
					 * @return string
					 */
					return $this->strLavaFaros;

				case 'LavaLuneta':
					/**
					 * Gets the value for strLavaLuneta 
					 * @return string
					 */
					return $this->strLavaLuneta;

				case 'CobertorCajaCarga':
					/**
					 * Gets the value for strCobertorCajaCarga 
					 * @return string
					 */
					return $this->strCobertorCajaCarga;

				case 'BarrasPortaequipajeTecho':
					/**
					 * Gets the value for strBarrasPortaequipajeTecho 
					 * @return string
					 */
					return $this->strBarrasPortaequipajeTecho;

				case 'BarraAntivuelco':
					/**
					 * Gets the value for strBarraAntivuelco 
					 * @return string
					 */
					return $this->strBarraAntivuelco;

				case 'Estribos':
					/**
					 * Gets the value for strEstribos 
					 * @return string
					 */
					return $this->strEstribos;

				case 'ConexionAuxiliar':
					/**
					 * Gets the value for strConexionAuxiliar 
					 * @return string
					 */
					return $this->strConexionAuxiliar;

				case 'ConexionBluetooth':
					/**
					 * Gets the value for strConexionBluetooth 
					 * @return string
					 */
					return $this->strConexionBluetooth;

				case 'ControlPorVoz':
					/**
					 * Gets the value for strControlPorVoz 
					 * @return string
					 */
					return $this->strControlPorVoz;

				case 'EntradaUsb':
					/**
					 * Gets the value for strEntradaUsb 
					 * @return string
					 */
					return $this->strEntradaUsb;

				case 'LectorTarjetasSd':
					/**
					 * Gets the value for strLectorTarjetasSd 
					 * @return string
					 */
					return $this->strLectorTarjetasSd;

				case 'NavegadorGps':
					/**
					 * Gets the value for strNavegadorGps 
					 * @return string
					 */
					return $this->strNavegadorGps;

				case 'Parlantes':
					/**
					 * Gets the value for strParlantes 
					 * @return string
					 */
					return $this->strParlantes;

				case 'RadioAmfm':
					/**
					 * Gets the value for strRadioAmfm 
					 * @return string
					 */
					return $this->strRadioAmfm;

				case 'RadioSatelitalXm':
					/**
					 * Gets the value for strRadioSatelitalXm 
					 * @return string
					 */
					return $this->strRadioSatelitalXm;

				case 'ReproductorCd':
					/**
					 * Gets the value for strReproductorCd 
					 * @return string
					 */
					return $this->strReproductorCd;

				case 'ReproductorDvd':
					/**
					 * Gets the value for strReproductorDvd 
					 * @return string
					 */
					return $this->strReproductorDvd;

				case 'ReproductorMp3':
					/**
					 * Gets the value for strReproductorMp3 
					 * @return string
					 */
					return $this->strReproductorMp3;

				case 'TomaCorriente12v':
					/**
					 * Gets the value for strTomaCorriente12v 
					 * @return string
					 */
					return $this->strTomaCorriente12v;

				case 'Airbags':
					/**
					 * Gets the value for strAirbags 
					 * @return string
					 */
					return $this->strAirbags;

				case 'Alarma':
					/**
					 * Gets the value for strAlarma 
					 * @return string
					 */
					return $this->strAlarma;

				case 'AsientoParaNinos':
					/**
					 * Gets the value for strAsientoParaNinos 
					 * @return string
					 */
					return $this->strAsientoParaNinos;

				case 'AsistenciasElectronicas':
					/**
					 * Gets the value for strAsistenciasElectronicas 
					 * @return string
					 */
					return $this->strAsistenciasElectronicas;

				case 'CamaraRetroceso':
					/**
					 * Gets the value for strCamaraRetroceso 
					 * @return string
					 */
					return $this->strCamaraRetroceso;

				case 'CinturonesInerciales':
					/**
					 * Gets the value for strCinturonesInerciales 
					 * @return string
					 */
					return $this->strCinturonesInerciales;

				case 'SensorDistanciaEstacionamiento':
					/**
					 * Gets the value for strSensorDistanciaEstacionamiento 
					 * @return string
					 */
					return $this->strSensorDistanciaEstacionamiento;

				case 'DesempaniadorEspejosExteriores':
					/**
					 * Gets the value for strDesempaniadorEspejosExteriores 
					 * @return string
					 */
					return $this->strDesempaniadorEspejosExteriores;

				case 'EncendidoAutoBalizasUrgencia':
					/**
					 * Gets the value for strEncendidoAutoBalizasUrgencia 
					 * @return string
					 */
					return $this->strEncendidoAutoBalizasUrgencia;

				case 'FarosAntiniebla':
					/**
					 * Gets the value for strFarosAntiniebla 
					 * @return string
					 */
					return $this->strFarosAntiniebla;

				case 'FarosXenon':
					/**
					 * Gets the value for strFarosXenon 
					 * @return string
					 */
					return $this->strFarosXenon;

				case 'GanchosIsofixLatch':
					/**
					 * Gets the value for strGanchosIsofixLatch 
					 * @return string
					 */
					return $this->strGanchosIsofixLatch;

				case 'Garantia':
					/**
					 * Gets the value for strGarantia 
					 * @return string
					 */
					return $this->strGarantia;

				case 'IndicadorPresionNeumaticos':
					/**
					 * Gets the value for strIndicadorPresionNeumaticos 
					 * @return string
					 */
					return $this->strIndicadorPresionNeumaticos;

				case 'Lavafaros':
					/**
					 * Gets the value for strLavafaros 
					 * @return string
					 */
					return $this->strLavafaros;

				case 'LucesAdaptativasCurvas':
					/**
					 * Gets the value for strLucesAdaptativasCurvas 
					 * @return string
					 */
					return $this->strLucesAdaptativasCurvas;

				case 'TercerApoyaCabezaTrasero':
					/**
					 * Gets the value for strTercerApoyaCabezaTrasero 
					 * @return string
					 */
					return $this->strTercerApoyaCabezaTrasero;

				case 'IdEstado':
					/**
					 * Gets the value for intIdEstado (Not Null)
					 * @return integer
					 */
					return $this->intIdEstado;


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

				case 'IdTipos':
					/**
					 * Sets the value for strIdTipos (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strIdTipos = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Modelo':
					/**
					 * Sets the value for strModelo (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strModelo = QType::Cast($mixValue, QType::String));
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

				case 'RelacionDeCompresion':
					/**
					 * Sets the value for strRelacionDeCompresion 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRelacionDeCompresion = QType::Cast($mixValue, QType::String));
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

				case 'EmisionesCo2':
					/**
					 * Sets the value for strEmisionesCo2 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmisionesCo2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TipoCarroceria':
					/**
					 * Sets the value for strTipoCarroceria 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTipoCarroceria = QType::Cast($mixValue, QType::String));
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

				case 'InfoCajaCarga':
					/**
					 * Sets the value for strInfoCajaCarga 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strInfoCajaCarga = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'VolumenCajaCarga':
					/**
					 * Sets the value for strVolumenCajaCarga 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strVolumenCajaCarga = QType::Cast($mixValue, QType::String));
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

				case 'Llantas':
					/**
					 * Sets the value for strLlantas 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLlantas = QType::Cast($mixValue, QType::String));
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

				case 'LucesAutomatico':
					/**
					 * Sets the value for strLucesAutomatico 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLucesAutomatico = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Climatizacion':
					/**
					 * Sets the value for strClimatizacion 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strClimatizacion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AlarmaLucesEncendidas':
					/**
					 * Sets the value for strAlarmaLucesEncendidas 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAlarmaLucesEncendidas = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CritalesElectricos':
					/**
					 * Sets the value for strCritalesElectricos 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCritalesElectricos = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AperturaBaul':
					/**
					 * Sets the value for strAperturaBaul 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAperturaBaul = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AperturaTanque':
					/**
					 * Sets the value for strAperturaTanque 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAperturaTanque = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AsientosRegulablesAltura':
					/**
					 * Sets the value for strAsientosRegulablesAltura 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAsientosRegulablesAltura = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AsientoTraseroRebatible':
					/**
					 * Sets the value for strAsientoTraseroRebatible 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAsientoTraseroRebatible = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AsientosCalefaccionado':
					/**
					 * Sets the value for strAsientosCalefaccionado 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAsientosCalefaccionado = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AsientosAjustesElectronicos':
					/**
					 * Sets the value for strAsientosAjustesElectronicos 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAsientosAjustesElectronicos = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AsientosDelButacaDeportiva':
					/**
					 * Sets the value for strAsientosDelButacaDeportiva 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAsientosDelButacaDeportiva = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AsientoDelBipartido':
					/**
					 * Sets the value for strAsientoDelBipartido 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAsientoDelBipartido = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BotonStartStop':
					/**
					 * Sets the value for strBotonStartStop 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBotonStartStop = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CambioSecuencialVolante':
					/**
					 * Sets the value for strCambioSecuencialVolante 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCambioSecuencialVolante = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CierreCentralizado':
					/**
					 * Sets the value for strCierreCentralizado 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCierreCentralizado = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ComputadoraABordo':
					/**
					 * Sets the value for strComputadoraABordo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strComputadoraABordo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DireccionAsistida':
					/**
					 * Sets the value for strDireccionAsistida 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDireccionAsistida = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MandosAudioVolante':
					/**
					 * Sets the value for strMandosAudioVolante 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMandosAudioVolante = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Reposabrazos':
					/**
					 * Sets the value for strReposabrazos 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strReposabrazos = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ControlCrucero':
					/**
					 * Sets the value for strControlCrucero 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strControlCrucero = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SensorLluvia':
					/**
					 * Sets the value for strSensorLluvia 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSensorLluvia = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tapizado':
					/**
					 * Sets the value for strTapizado 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTapizado = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SalidasAire':
					/**
					 * Sets the value for strSalidasAire 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSalidasAire = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TechoCorredizo':
					/**
					 * Sets the value for strTechoCorredizo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTechoCorredizo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ComandoDistancia':
					/**
					 * Sets the value for strComandoDistancia 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strComandoDistancia = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'VolanteAjusteVertical':
					/**
					 * Sets the value for strVolanteAjusteVertical 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strVolanteAjusteVertical = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'VolanteCuero':
					/**
					 * Sets the value for strVolanteCuero 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strVolanteCuero = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MoldurasColorCarroceria':
					/**
					 * Sets the value for strMoldurasColorCarroceria 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMoldurasColorCarroceria = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'EspejosElectricos':
					/**
					 * Sets the value for strEspejosElectricos 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEspejosElectricos = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'EspejosRebatiblesElectricamente':
					/**
					 * Sets the value for strEspejosRebatiblesElectricamente 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEspejosRebatiblesElectricamente = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'EspejosMemorias':
					/**
					 * Sets the value for strEspejosMemorias 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEspejosMemorias = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LavaFaros':
					/**
					 * Sets the value for strLavaFaros 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLavaFaros = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LavaLuneta':
					/**
					 * Sets the value for strLavaLuneta 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLavaLuneta = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CobertorCajaCarga':
					/**
					 * Sets the value for strCobertorCajaCarga 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCobertorCajaCarga = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BarrasPortaequipajeTecho':
					/**
					 * Sets the value for strBarrasPortaequipajeTecho 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBarrasPortaequipajeTecho = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BarraAntivuelco':
					/**
					 * Sets the value for strBarraAntivuelco 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBarraAntivuelco = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Estribos':
					/**
					 * Sets the value for strEstribos 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEstribos = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ConexionAuxiliar':
					/**
					 * Sets the value for strConexionAuxiliar 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strConexionAuxiliar = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ConexionBluetooth':
					/**
					 * Sets the value for strConexionBluetooth 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strConexionBluetooth = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ControlPorVoz':
					/**
					 * Sets the value for strControlPorVoz 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strControlPorVoz = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'EntradaUsb':
					/**
					 * Sets the value for strEntradaUsb 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEntradaUsb = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LectorTarjetasSd':
					/**
					 * Sets the value for strLectorTarjetasSd 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLectorTarjetasSd = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NavegadorGps':
					/**
					 * Sets the value for strNavegadorGps 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNavegadorGps = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Parlantes':
					/**
					 * Sets the value for strParlantes 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strParlantes = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RadioAmfm':
					/**
					 * Sets the value for strRadioAmfm 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRadioAmfm = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RadioSatelitalXm':
					/**
					 * Sets the value for strRadioSatelitalXm 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRadioSatelitalXm = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReproductorCd':
					/**
					 * Sets the value for strReproductorCd 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strReproductorCd = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReproductorDvd':
					/**
					 * Sets the value for strReproductorDvd 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strReproductorDvd = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReproductorMp3':
					/**
					 * Sets the value for strReproductorMp3 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strReproductorMp3 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TomaCorriente12v':
					/**
					 * Sets the value for strTomaCorriente12v 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTomaCorriente12v = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Airbags':
					/**
					 * Sets the value for strAirbags 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAirbags = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Alarma':
					/**
					 * Sets the value for strAlarma 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAlarma = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AsientoParaNinos':
					/**
					 * Sets the value for strAsientoParaNinos 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAsientoParaNinos = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AsistenciasElectronicas':
					/**
					 * Sets the value for strAsistenciasElectronicas 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAsistenciasElectronicas = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CamaraRetroceso':
					/**
					 * Sets the value for strCamaraRetroceso 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCamaraRetroceso = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CinturonesInerciales':
					/**
					 * Sets the value for strCinturonesInerciales 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCinturonesInerciales = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SensorDistanciaEstacionamiento':
					/**
					 * Sets the value for strSensorDistanciaEstacionamiento 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSensorDistanciaEstacionamiento = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DesempaniadorEspejosExteriores':
					/**
					 * Sets the value for strDesempaniadorEspejosExteriores 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDesempaniadorEspejosExteriores = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'EncendidoAutoBalizasUrgencia':
					/**
					 * Sets the value for strEncendidoAutoBalizasUrgencia 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEncendidoAutoBalizasUrgencia = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FarosAntiniebla':
					/**
					 * Sets the value for strFarosAntiniebla 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFarosAntiniebla = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FarosXenon':
					/**
					 * Sets the value for strFarosXenon 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFarosXenon = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'GanchosIsofixLatch':
					/**
					 * Sets the value for strGanchosIsofixLatch 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGanchosIsofixLatch = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Garantia':
					/**
					 * Sets the value for strGarantia 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGarantia = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IndicadorPresionNeumaticos':
					/**
					 * Sets the value for strIndicadorPresionNeumaticos 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strIndicadorPresionNeumaticos = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Lavafaros':
					/**
					 * Sets the value for strLavafaros 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLavafaros = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LucesAdaptativasCurvas':
					/**
					 * Sets the value for strLucesAdaptativasCurvas 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLucesAdaptativasCurvas = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TercerApoyaCabezaTrasero':
					/**
					 * Sets the value for strTercerApoyaCabezaTrasero 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTercerApoyaCabezaTrasero = QType::Cast($mixValue, QType::String));
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
						return ($this->intIdEstado = QType::Cast($mixValue, QType::Integer));
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
			$strToReturn = '<complexType name="FichasBackup"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="IdMarca" type="xsd:int"/>';
			$strToReturn .= '<element name="IdTipos" type="xsd:string"/>';
			$strToReturn .= '<element name="Modelo" type="xsd:string"/>';
			$strToReturn .= '<element name="Descripcion" type="xsd:string"/>';
			$strToReturn .= '<element name="Precio" type="xsd:string"/>';
			$strToReturn .= '<element name="Combustible" type="xsd:string"/>';
			$strToReturn .= '<element name="Cilindrada" type="xsd:string"/>';
			$strToReturn .= '<element name="Cilindros" type="xsd:string"/>';
			$strToReturn .= '<element name="PotenciaMaxima" type="xsd:string"/>';
			$strToReturn .= '<element name="ParMotorTorque" type="xsd:string"/>';
			$strToReturn .= '<element name="Posicion" type="xsd:string"/>';
			$strToReturn .= '<element name="Alimentacion" type="xsd:string"/>';
			$strToReturn .= '<element name="RelacionDeCompresion" type="xsd:string"/>';
			$strToReturn .= '<element name="Valvulas" type="xsd:string"/>';
			$strToReturn .= '<element name="Tipo" type="xsd:string"/>';
			$strToReturn .= '<element name="Marchas" type="xsd:string"/>';
			$strToReturn .= '<element name="Traccion" type="xsd:string"/>';
			$strToReturn .= '<element name="VelocidadMaxima" type="xsd:string"/>';
			$strToReturn .= '<element name="Aceleracion0100" type="xsd:string"/>';
			$strToReturn .= '<element name="ConsumoUrbano" type="xsd:string"/>';
			$strToReturn .= '<element name="ConsumoInterurbano" type="xsd:string"/>';
			$strToReturn .= '<element name="ConsumoMixto" type="xsd:string"/>';
			$strToReturn .= '<element name="EmisionesCo2" type="xsd:string"/>';
			$strToReturn .= '<element name="TipoCarroceria" type="xsd:string"/>';
			$strToReturn .= '<element name="Puertas" type="xsd:string"/>';
			$strToReturn .= '<element name="Plazas" type="xsd:string"/>';
			$strToReturn .= '<element name="FilasDeAsientos" type="xsd:string"/>';
			$strToReturn .= '<element name="InfoEjes" type="xsd:string"/>';
			$strToReturn .= '<element name="Peso" type="xsd:string"/>';
			$strToReturn .= '<element name="CapacidadBaul" type="xsd:string"/>';
			$strToReturn .= '<element name="CapacidadTanque" type="xsd:string"/>';
			$strToReturn .= '<element name="InfoCajaCarga" type="xsd:string"/>';
			$strToReturn .= '<element name="VolumenCajaCarga" type="xsd:string"/>';
			$strToReturn .= '<element name="CapacidadCarga" type="xsd:string"/>';
			$strToReturn .= '<element name="FrenosDelanteros" type="xsd:string"/>';
			$strToReturn .= '<element name="FrenosTraseros" type="xsd:string"/>';
			$strToReturn .= '<element name="Llantas" type="xsd:string"/>';
			$strToReturn .= '<element name="Neumaticos" type="xsd:string"/>';
			$strToReturn .= '<element name="SuspensionDelantera" type="xsd:string"/>';
			$strToReturn .= '<element name="SuspensionTrasera" type="xsd:string"/>';
			$strToReturn .= '<element name="LucesAutomatico" type="xsd:string"/>';
			$strToReturn .= '<element name="Climatizacion" type="xsd:string"/>';
			$strToReturn .= '<element name="AlarmaLucesEncendidas" type="xsd:string"/>';
			$strToReturn .= '<element name="CritalesElectricos" type="xsd:string"/>';
			$strToReturn .= '<element name="AperturaBaul" type="xsd:string"/>';
			$strToReturn .= '<element name="AperturaTanque" type="xsd:string"/>';
			$strToReturn .= '<element name="AsientosRegulablesAltura" type="xsd:string"/>';
			$strToReturn .= '<element name="AsientoTraseroRebatible" type="xsd:string"/>';
			$strToReturn .= '<element name="AsientosCalefaccionado" type="xsd:string"/>';
			$strToReturn .= '<element name="AsientosAjustesElectronicos" type="xsd:string"/>';
			$strToReturn .= '<element name="AsientosDelButacaDeportiva" type="xsd:string"/>';
			$strToReturn .= '<element name="AsientoDelBipartido" type="xsd:string"/>';
			$strToReturn .= '<element name="BotonStartStop" type="xsd:string"/>';
			$strToReturn .= '<element name="CambioSecuencialVolante" type="xsd:string"/>';
			$strToReturn .= '<element name="CierreCentralizado" type="xsd:string"/>';
			$strToReturn .= '<element name="ComputadoraABordo" type="xsd:string"/>';
			$strToReturn .= '<element name="DireccionAsistida" type="xsd:string"/>';
			$strToReturn .= '<element name="MandosAudioVolante" type="xsd:string"/>';
			$strToReturn .= '<element name="Reposabrazos" type="xsd:string"/>';
			$strToReturn .= '<element name="ControlCrucero" type="xsd:string"/>';
			$strToReturn .= '<element name="SensorLluvia" type="xsd:string"/>';
			$strToReturn .= '<element name="Tapizado" type="xsd:string"/>';
			$strToReturn .= '<element name="SalidasAire" type="xsd:string"/>';
			$strToReturn .= '<element name="TechoCorredizo" type="xsd:string"/>';
			$strToReturn .= '<element name="ComandoDistancia" type="xsd:string"/>';
			$strToReturn .= '<element name="VolanteAjusteVertical" type="xsd:string"/>';
			$strToReturn .= '<element name="VolanteCuero" type="xsd:string"/>';
			$strToReturn .= '<element name="MoldurasColorCarroceria" type="xsd:string"/>';
			$strToReturn .= '<element name="EspejosElectricos" type="xsd:string"/>';
			$strToReturn .= '<element name="EspejosRebatiblesElectricamente" type="xsd:string"/>';
			$strToReturn .= '<element name="EspejosMemorias" type="xsd:string"/>';
			$strToReturn .= '<element name="LavaFaros" type="xsd:string"/>';
			$strToReturn .= '<element name="LavaLuneta" type="xsd:string"/>';
			$strToReturn .= '<element name="CobertorCajaCarga" type="xsd:string"/>';
			$strToReturn .= '<element name="BarrasPortaequipajeTecho" type="xsd:string"/>';
			$strToReturn .= '<element name="BarraAntivuelco" type="xsd:string"/>';
			$strToReturn .= '<element name="Estribos" type="xsd:string"/>';
			$strToReturn .= '<element name="ConexionAuxiliar" type="xsd:string"/>';
			$strToReturn .= '<element name="ConexionBluetooth" type="xsd:string"/>';
			$strToReturn .= '<element name="ControlPorVoz" type="xsd:string"/>';
			$strToReturn .= '<element name="EntradaUsb" type="xsd:string"/>';
			$strToReturn .= '<element name="LectorTarjetasSd" type="xsd:string"/>';
			$strToReturn .= '<element name="NavegadorGps" type="xsd:string"/>';
			$strToReturn .= '<element name="Parlantes" type="xsd:string"/>';
			$strToReturn .= '<element name="RadioAmfm" type="xsd:string"/>';
			$strToReturn .= '<element name="RadioSatelitalXm" type="xsd:string"/>';
			$strToReturn .= '<element name="ReproductorCd" type="xsd:string"/>';
			$strToReturn .= '<element name="ReproductorDvd" type="xsd:string"/>';
			$strToReturn .= '<element name="ReproductorMp3" type="xsd:string"/>';
			$strToReturn .= '<element name="TomaCorriente12v" type="xsd:string"/>';
			$strToReturn .= '<element name="Airbags" type="xsd:string"/>';
			$strToReturn .= '<element name="Alarma" type="xsd:string"/>';
			$strToReturn .= '<element name="AsientoParaNinos" type="xsd:string"/>';
			$strToReturn .= '<element name="AsistenciasElectronicas" type="xsd:string"/>';
			$strToReturn .= '<element name="CamaraRetroceso" type="xsd:string"/>';
			$strToReturn .= '<element name="CinturonesInerciales" type="xsd:string"/>';
			$strToReturn .= '<element name="SensorDistanciaEstacionamiento" type="xsd:string"/>';
			$strToReturn .= '<element name="DesempaniadorEspejosExteriores" type="xsd:string"/>';
			$strToReturn .= '<element name="EncendidoAutoBalizasUrgencia" type="xsd:string"/>';
			$strToReturn .= '<element name="FarosAntiniebla" type="xsd:string"/>';
			$strToReturn .= '<element name="FarosXenon" type="xsd:string"/>';
			$strToReturn .= '<element name="GanchosIsofixLatch" type="xsd:string"/>';
			$strToReturn .= '<element name="Garantia" type="xsd:string"/>';
			$strToReturn .= '<element name="IndicadorPresionNeumaticos" type="xsd:string"/>';
			$strToReturn .= '<element name="Lavafaros" type="xsd:string"/>';
			$strToReturn .= '<element name="LucesAdaptativasCurvas" type="xsd:string"/>';
			$strToReturn .= '<element name="TercerApoyaCabezaTrasero" type="xsd:string"/>';
			$strToReturn .= '<element name="IdEstado" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FichasBackup', $strComplexTypeArray)) {
				$strComplexTypeArray['FichasBackup'] = FichasBackup::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FichasBackup::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FichasBackup();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'IdMarca'))
				$objToReturn->intIdMarca = $objSoapObject->IdMarca;
			if (property_exists($objSoapObject, 'IdTipos'))
				$objToReturn->strIdTipos = $objSoapObject->IdTipos;
			if (property_exists($objSoapObject, 'Modelo'))
				$objToReturn->strModelo = $objSoapObject->Modelo;
			if (property_exists($objSoapObject, 'Descripcion'))
				$objToReturn->strDescripcion = $objSoapObject->Descripcion;
			if (property_exists($objSoapObject, 'Precio'))
				$objToReturn->strPrecio = $objSoapObject->Precio;
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
			if (property_exists($objSoapObject, 'RelacionDeCompresion'))
				$objToReturn->strRelacionDeCompresion = $objSoapObject->RelacionDeCompresion;
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
			if (property_exists($objSoapObject, 'EmisionesCo2'))
				$objToReturn->strEmisionesCo2 = $objSoapObject->EmisionesCo2;
			if (property_exists($objSoapObject, 'TipoCarroceria'))
				$objToReturn->strTipoCarroceria = $objSoapObject->TipoCarroceria;
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
			if (property_exists($objSoapObject, 'InfoCajaCarga'))
				$objToReturn->strInfoCajaCarga = $objSoapObject->InfoCajaCarga;
			if (property_exists($objSoapObject, 'VolumenCajaCarga'))
				$objToReturn->strVolumenCajaCarga = $objSoapObject->VolumenCajaCarga;
			if (property_exists($objSoapObject, 'CapacidadCarga'))
				$objToReturn->strCapacidadCarga = $objSoapObject->CapacidadCarga;
			if (property_exists($objSoapObject, 'FrenosDelanteros'))
				$objToReturn->strFrenosDelanteros = $objSoapObject->FrenosDelanteros;
			if (property_exists($objSoapObject, 'FrenosTraseros'))
				$objToReturn->strFrenosTraseros = $objSoapObject->FrenosTraseros;
			if (property_exists($objSoapObject, 'Llantas'))
				$objToReturn->strLlantas = $objSoapObject->Llantas;
			if (property_exists($objSoapObject, 'Neumaticos'))
				$objToReturn->strNeumaticos = $objSoapObject->Neumaticos;
			if (property_exists($objSoapObject, 'SuspensionDelantera'))
				$objToReturn->strSuspensionDelantera = $objSoapObject->SuspensionDelantera;
			if (property_exists($objSoapObject, 'SuspensionTrasera'))
				$objToReturn->strSuspensionTrasera = $objSoapObject->SuspensionTrasera;
			if (property_exists($objSoapObject, 'LucesAutomatico'))
				$objToReturn->strLucesAutomatico = $objSoapObject->LucesAutomatico;
			if (property_exists($objSoapObject, 'Climatizacion'))
				$objToReturn->strClimatizacion = $objSoapObject->Climatizacion;
			if (property_exists($objSoapObject, 'AlarmaLucesEncendidas'))
				$objToReturn->strAlarmaLucesEncendidas = $objSoapObject->AlarmaLucesEncendidas;
			if (property_exists($objSoapObject, 'CritalesElectricos'))
				$objToReturn->strCritalesElectricos = $objSoapObject->CritalesElectricos;
			if (property_exists($objSoapObject, 'AperturaBaul'))
				$objToReturn->strAperturaBaul = $objSoapObject->AperturaBaul;
			if (property_exists($objSoapObject, 'AperturaTanque'))
				$objToReturn->strAperturaTanque = $objSoapObject->AperturaTanque;
			if (property_exists($objSoapObject, 'AsientosRegulablesAltura'))
				$objToReturn->strAsientosRegulablesAltura = $objSoapObject->AsientosRegulablesAltura;
			if (property_exists($objSoapObject, 'AsientoTraseroRebatible'))
				$objToReturn->strAsientoTraseroRebatible = $objSoapObject->AsientoTraseroRebatible;
			if (property_exists($objSoapObject, 'AsientosCalefaccionado'))
				$objToReturn->strAsientosCalefaccionado = $objSoapObject->AsientosCalefaccionado;
			if (property_exists($objSoapObject, 'AsientosAjustesElectronicos'))
				$objToReturn->strAsientosAjustesElectronicos = $objSoapObject->AsientosAjustesElectronicos;
			if (property_exists($objSoapObject, 'AsientosDelButacaDeportiva'))
				$objToReturn->strAsientosDelButacaDeportiva = $objSoapObject->AsientosDelButacaDeportiva;
			if (property_exists($objSoapObject, 'AsientoDelBipartido'))
				$objToReturn->strAsientoDelBipartido = $objSoapObject->AsientoDelBipartido;
			if (property_exists($objSoapObject, 'BotonStartStop'))
				$objToReturn->strBotonStartStop = $objSoapObject->BotonStartStop;
			if (property_exists($objSoapObject, 'CambioSecuencialVolante'))
				$objToReturn->strCambioSecuencialVolante = $objSoapObject->CambioSecuencialVolante;
			if (property_exists($objSoapObject, 'CierreCentralizado'))
				$objToReturn->strCierreCentralizado = $objSoapObject->CierreCentralizado;
			if (property_exists($objSoapObject, 'ComputadoraABordo'))
				$objToReturn->strComputadoraABordo = $objSoapObject->ComputadoraABordo;
			if (property_exists($objSoapObject, 'DireccionAsistida'))
				$objToReturn->strDireccionAsistida = $objSoapObject->DireccionAsistida;
			if (property_exists($objSoapObject, 'MandosAudioVolante'))
				$objToReturn->strMandosAudioVolante = $objSoapObject->MandosAudioVolante;
			if (property_exists($objSoapObject, 'Reposabrazos'))
				$objToReturn->strReposabrazos = $objSoapObject->Reposabrazos;
			if (property_exists($objSoapObject, 'ControlCrucero'))
				$objToReturn->strControlCrucero = $objSoapObject->ControlCrucero;
			if (property_exists($objSoapObject, 'SensorLluvia'))
				$objToReturn->strSensorLluvia = $objSoapObject->SensorLluvia;
			if (property_exists($objSoapObject, 'Tapizado'))
				$objToReturn->strTapizado = $objSoapObject->Tapizado;
			if (property_exists($objSoapObject, 'SalidasAire'))
				$objToReturn->strSalidasAire = $objSoapObject->SalidasAire;
			if (property_exists($objSoapObject, 'TechoCorredizo'))
				$objToReturn->strTechoCorredizo = $objSoapObject->TechoCorredizo;
			if (property_exists($objSoapObject, 'ComandoDistancia'))
				$objToReturn->strComandoDistancia = $objSoapObject->ComandoDistancia;
			if (property_exists($objSoapObject, 'VolanteAjusteVertical'))
				$objToReturn->strVolanteAjusteVertical = $objSoapObject->VolanteAjusteVertical;
			if (property_exists($objSoapObject, 'VolanteCuero'))
				$objToReturn->strVolanteCuero = $objSoapObject->VolanteCuero;
			if (property_exists($objSoapObject, 'MoldurasColorCarroceria'))
				$objToReturn->strMoldurasColorCarroceria = $objSoapObject->MoldurasColorCarroceria;
			if (property_exists($objSoapObject, 'EspejosElectricos'))
				$objToReturn->strEspejosElectricos = $objSoapObject->EspejosElectricos;
			if (property_exists($objSoapObject, 'EspejosRebatiblesElectricamente'))
				$objToReturn->strEspejosRebatiblesElectricamente = $objSoapObject->EspejosRebatiblesElectricamente;
			if (property_exists($objSoapObject, 'EspejosMemorias'))
				$objToReturn->strEspejosMemorias = $objSoapObject->EspejosMemorias;
			if (property_exists($objSoapObject, 'LavaFaros'))
				$objToReturn->strLavaFaros = $objSoapObject->LavaFaros;
			if (property_exists($objSoapObject, 'LavaLuneta'))
				$objToReturn->strLavaLuneta = $objSoapObject->LavaLuneta;
			if (property_exists($objSoapObject, 'CobertorCajaCarga'))
				$objToReturn->strCobertorCajaCarga = $objSoapObject->CobertorCajaCarga;
			if (property_exists($objSoapObject, 'BarrasPortaequipajeTecho'))
				$objToReturn->strBarrasPortaequipajeTecho = $objSoapObject->BarrasPortaequipajeTecho;
			if (property_exists($objSoapObject, 'BarraAntivuelco'))
				$objToReturn->strBarraAntivuelco = $objSoapObject->BarraAntivuelco;
			if (property_exists($objSoapObject, 'Estribos'))
				$objToReturn->strEstribos = $objSoapObject->Estribos;
			if (property_exists($objSoapObject, 'ConexionAuxiliar'))
				$objToReturn->strConexionAuxiliar = $objSoapObject->ConexionAuxiliar;
			if (property_exists($objSoapObject, 'ConexionBluetooth'))
				$objToReturn->strConexionBluetooth = $objSoapObject->ConexionBluetooth;
			if (property_exists($objSoapObject, 'ControlPorVoz'))
				$objToReturn->strControlPorVoz = $objSoapObject->ControlPorVoz;
			if (property_exists($objSoapObject, 'EntradaUsb'))
				$objToReturn->strEntradaUsb = $objSoapObject->EntradaUsb;
			if (property_exists($objSoapObject, 'LectorTarjetasSd'))
				$objToReturn->strLectorTarjetasSd = $objSoapObject->LectorTarjetasSd;
			if (property_exists($objSoapObject, 'NavegadorGps'))
				$objToReturn->strNavegadorGps = $objSoapObject->NavegadorGps;
			if (property_exists($objSoapObject, 'Parlantes'))
				$objToReturn->strParlantes = $objSoapObject->Parlantes;
			if (property_exists($objSoapObject, 'RadioAmfm'))
				$objToReturn->strRadioAmfm = $objSoapObject->RadioAmfm;
			if (property_exists($objSoapObject, 'RadioSatelitalXm'))
				$objToReturn->strRadioSatelitalXm = $objSoapObject->RadioSatelitalXm;
			if (property_exists($objSoapObject, 'ReproductorCd'))
				$objToReturn->strReproductorCd = $objSoapObject->ReproductorCd;
			if (property_exists($objSoapObject, 'ReproductorDvd'))
				$objToReturn->strReproductorDvd = $objSoapObject->ReproductorDvd;
			if (property_exists($objSoapObject, 'ReproductorMp3'))
				$objToReturn->strReproductorMp3 = $objSoapObject->ReproductorMp3;
			if (property_exists($objSoapObject, 'TomaCorriente12v'))
				$objToReturn->strTomaCorriente12v = $objSoapObject->TomaCorriente12v;
			if (property_exists($objSoapObject, 'Airbags'))
				$objToReturn->strAirbags = $objSoapObject->Airbags;
			if (property_exists($objSoapObject, 'Alarma'))
				$objToReturn->strAlarma = $objSoapObject->Alarma;
			if (property_exists($objSoapObject, 'AsientoParaNinos'))
				$objToReturn->strAsientoParaNinos = $objSoapObject->AsientoParaNinos;
			if (property_exists($objSoapObject, 'AsistenciasElectronicas'))
				$objToReturn->strAsistenciasElectronicas = $objSoapObject->AsistenciasElectronicas;
			if (property_exists($objSoapObject, 'CamaraRetroceso'))
				$objToReturn->strCamaraRetroceso = $objSoapObject->CamaraRetroceso;
			if (property_exists($objSoapObject, 'CinturonesInerciales'))
				$objToReturn->strCinturonesInerciales = $objSoapObject->CinturonesInerciales;
			if (property_exists($objSoapObject, 'SensorDistanciaEstacionamiento'))
				$objToReturn->strSensorDistanciaEstacionamiento = $objSoapObject->SensorDistanciaEstacionamiento;
			if (property_exists($objSoapObject, 'DesempaniadorEspejosExteriores'))
				$objToReturn->strDesempaniadorEspejosExteriores = $objSoapObject->DesempaniadorEspejosExteriores;
			if (property_exists($objSoapObject, 'EncendidoAutoBalizasUrgencia'))
				$objToReturn->strEncendidoAutoBalizasUrgencia = $objSoapObject->EncendidoAutoBalizasUrgencia;
			if (property_exists($objSoapObject, 'FarosAntiniebla'))
				$objToReturn->strFarosAntiniebla = $objSoapObject->FarosAntiniebla;
			if (property_exists($objSoapObject, 'FarosXenon'))
				$objToReturn->strFarosXenon = $objSoapObject->FarosXenon;
			if (property_exists($objSoapObject, 'GanchosIsofixLatch'))
				$objToReturn->strGanchosIsofixLatch = $objSoapObject->GanchosIsofixLatch;
			if (property_exists($objSoapObject, 'Garantia'))
				$objToReturn->strGarantia = $objSoapObject->Garantia;
			if (property_exists($objSoapObject, 'IndicadorPresionNeumaticos'))
				$objToReturn->strIndicadorPresionNeumaticos = $objSoapObject->IndicadorPresionNeumaticos;
			if (property_exists($objSoapObject, 'Lavafaros'))
				$objToReturn->strLavafaros = $objSoapObject->Lavafaros;
			if (property_exists($objSoapObject, 'LucesAdaptativasCurvas'))
				$objToReturn->strLucesAdaptativasCurvas = $objSoapObject->LucesAdaptativasCurvas;
			if (property_exists($objSoapObject, 'TercerApoyaCabezaTrasero'))
				$objToReturn->strTercerApoyaCabezaTrasero = $objSoapObject->TercerApoyaCabezaTrasero;
			if (property_exists($objSoapObject, 'IdEstado'))
				$objToReturn->intIdEstado = $objSoapObject->IdEstado;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FichasBackup::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeFichasBackup extends QQNode {
		protected $strTableName = 'fichas_backup';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FichasBackup';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'IdMarca':
					return new QQNode('id_marca', 'IdMarca', 'integer', $this);
				case 'IdTipos':
					return new QQNode('id_tipos', 'IdTipos', 'string', $this);
				case 'Modelo':
					return new QQNode('modelo', 'Modelo', 'string', $this);
				case 'Descripcion':
					return new QQNode('descripcion', 'Descripcion', 'string', $this);
				case 'Precio':
					return new QQNode('precio', 'Precio', 'string', $this);
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
				case 'RelacionDeCompresion':
					return new QQNode('relacion_de_compresion', 'RelacionDeCompresion', 'string', $this);
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
				case 'EmisionesCo2':
					return new QQNode('emisiones_co2', 'EmisionesCo2', 'string', $this);
				case 'TipoCarroceria':
					return new QQNode('tipo_carroceria', 'TipoCarroceria', 'string', $this);
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
				case 'InfoCajaCarga':
					return new QQNode('info_caja_carga', 'InfoCajaCarga', 'string', $this);
				case 'VolumenCajaCarga':
					return new QQNode('volumen_caja_carga', 'VolumenCajaCarga', 'string', $this);
				case 'CapacidadCarga':
					return new QQNode('capacidad_carga', 'CapacidadCarga', 'string', $this);
				case 'FrenosDelanteros':
					return new QQNode('frenos_delanteros', 'FrenosDelanteros', 'string', $this);
				case 'FrenosTraseros':
					return new QQNode('frenos_traseros', 'FrenosTraseros', 'string', $this);
				case 'Llantas':
					return new QQNode('llantas', 'Llantas', 'string', $this);
				case 'Neumaticos':
					return new QQNode('neumaticos', 'Neumaticos', 'string', $this);
				case 'SuspensionDelantera':
					return new QQNode('suspension_delantera', 'SuspensionDelantera', 'string', $this);
				case 'SuspensionTrasera':
					return new QQNode('suspension_trasera', 'SuspensionTrasera', 'string', $this);
				case 'LucesAutomatico':
					return new QQNode('luces_automatico', 'LucesAutomatico', 'string', $this);
				case 'Climatizacion':
					return new QQNode('climatizacion', 'Climatizacion', 'string', $this);
				case 'AlarmaLucesEncendidas':
					return new QQNode('alarma_luces_encendidas', 'AlarmaLucesEncendidas', 'string', $this);
				case 'CritalesElectricos':
					return new QQNode('critales_electricos', 'CritalesElectricos', 'string', $this);
				case 'AperturaBaul':
					return new QQNode('apertura_baul', 'AperturaBaul', 'string', $this);
				case 'AperturaTanque':
					return new QQNode('apertura_tanque', 'AperturaTanque', 'string', $this);
				case 'AsientosRegulablesAltura':
					return new QQNode('asientos_regulables_altura', 'AsientosRegulablesAltura', 'string', $this);
				case 'AsientoTraseroRebatible':
					return new QQNode('asiento_trasero_rebatible', 'AsientoTraseroRebatible', 'string', $this);
				case 'AsientosCalefaccionado':
					return new QQNode('asientos_calefaccionado', 'AsientosCalefaccionado', 'string', $this);
				case 'AsientosAjustesElectronicos':
					return new QQNode('asientos_ajustes_electronicos', 'AsientosAjustesElectronicos', 'string', $this);
				case 'AsientosDelButacaDeportiva':
					return new QQNode('asientos_del_butaca_deportiva', 'AsientosDelButacaDeportiva', 'string', $this);
				case 'AsientoDelBipartido':
					return new QQNode('asiento_del_bipartido', 'AsientoDelBipartido', 'string', $this);
				case 'BotonStartStop':
					return new QQNode('boton_start_stop', 'BotonStartStop', 'string', $this);
				case 'CambioSecuencialVolante':
					return new QQNode('cambio_secuencial_volante', 'CambioSecuencialVolante', 'string', $this);
				case 'CierreCentralizado':
					return new QQNode('cierre_centralizado', 'CierreCentralizado', 'string', $this);
				case 'ComputadoraABordo':
					return new QQNode('computadora_a_bordo', 'ComputadoraABordo', 'string', $this);
				case 'DireccionAsistida':
					return new QQNode('direccion_asistida', 'DireccionAsistida', 'string', $this);
				case 'MandosAudioVolante':
					return new QQNode('mandos_audio_volante', 'MandosAudioVolante', 'string', $this);
				case 'Reposabrazos':
					return new QQNode('reposabrazos', 'Reposabrazos', 'string', $this);
				case 'ControlCrucero':
					return new QQNode('control_crucero', 'ControlCrucero', 'string', $this);
				case 'SensorLluvia':
					return new QQNode('sensor_lluvia', 'SensorLluvia', 'string', $this);
				case 'Tapizado':
					return new QQNode('tapizado', 'Tapizado', 'string', $this);
				case 'SalidasAire':
					return new QQNode('salidas_aire', 'SalidasAire', 'string', $this);
				case 'TechoCorredizo':
					return new QQNode('techo_corredizo', 'TechoCorredizo', 'string', $this);
				case 'ComandoDistancia':
					return new QQNode('comando_distancia', 'ComandoDistancia', 'string', $this);
				case 'VolanteAjusteVertical':
					return new QQNode('volante_ajuste_vertical', 'VolanteAjusteVertical', 'string', $this);
				case 'VolanteCuero':
					return new QQNode('volante_cuero', 'VolanteCuero', 'string', $this);
				case 'MoldurasColorCarroceria':
					return new QQNode('molduras_color_carroceria', 'MoldurasColorCarroceria', 'string', $this);
				case 'EspejosElectricos':
					return new QQNode('espejos_electricos', 'EspejosElectricos', 'string', $this);
				case 'EspejosRebatiblesElectricamente':
					return new QQNode('espejos_rebatibles_electricamente', 'EspejosRebatiblesElectricamente', 'string', $this);
				case 'EspejosMemorias':
					return new QQNode('espejos_memorias', 'EspejosMemorias', 'string', $this);
				case 'LavaFaros':
					return new QQNode('lava_faros', 'LavaFaros', 'string', $this);
				case 'LavaLuneta':
					return new QQNode('lava_luneta', 'LavaLuneta', 'string', $this);
				case 'CobertorCajaCarga':
					return new QQNode('cobertor_caja_carga', 'CobertorCajaCarga', 'string', $this);
				case 'BarrasPortaequipajeTecho':
					return new QQNode('barras_portaequipaje_techo', 'BarrasPortaequipajeTecho', 'string', $this);
				case 'BarraAntivuelco':
					return new QQNode('barra_antivuelco', 'BarraAntivuelco', 'string', $this);
				case 'Estribos':
					return new QQNode('estribos', 'Estribos', 'string', $this);
				case 'ConexionAuxiliar':
					return new QQNode('conexion_auxiliar', 'ConexionAuxiliar', 'string', $this);
				case 'ConexionBluetooth':
					return new QQNode('conexion_bluetooth', 'ConexionBluetooth', 'string', $this);
				case 'ControlPorVoz':
					return new QQNode('control_por_voz', 'ControlPorVoz', 'string', $this);
				case 'EntradaUsb':
					return new QQNode('entrada_usb', 'EntradaUsb', 'string', $this);
				case 'LectorTarjetasSd':
					return new QQNode('lector_tarjetas_sd', 'LectorTarjetasSd', 'string', $this);
				case 'NavegadorGps':
					return new QQNode('navegador_gps', 'NavegadorGps', 'string', $this);
				case 'Parlantes':
					return new QQNode('parlantes', 'Parlantes', 'string', $this);
				case 'RadioAmfm':
					return new QQNode('radio_amfm', 'RadioAmfm', 'string', $this);
				case 'RadioSatelitalXm':
					return new QQNode('radio_satelital_xm', 'RadioSatelitalXm', 'string', $this);
				case 'ReproductorCd':
					return new QQNode('reproductor_cd', 'ReproductorCd', 'string', $this);
				case 'ReproductorDvd':
					return new QQNode('reproductor_dvd', 'ReproductorDvd', 'string', $this);
				case 'ReproductorMp3':
					return new QQNode('reproductor_mp3', 'ReproductorMp3', 'string', $this);
				case 'TomaCorriente12v':
					return new QQNode('toma_corriente_12v', 'TomaCorriente12v', 'string', $this);
				case 'Airbags':
					return new QQNode('airbags', 'Airbags', 'string', $this);
				case 'Alarma':
					return new QQNode('alarma', 'Alarma', 'string', $this);
				case 'AsientoParaNinos':
					return new QQNode('asiento_para_ninos', 'AsientoParaNinos', 'string', $this);
				case 'AsistenciasElectronicas':
					return new QQNode('asistencias_electronicas', 'AsistenciasElectronicas', 'string', $this);
				case 'CamaraRetroceso':
					return new QQNode('camara_retroceso', 'CamaraRetroceso', 'string', $this);
				case 'CinturonesInerciales':
					return new QQNode('cinturones_inerciales', 'CinturonesInerciales', 'string', $this);
				case 'SensorDistanciaEstacionamiento':
					return new QQNode('sensor_distancia_estacionamiento', 'SensorDistanciaEstacionamiento', 'string', $this);
				case 'DesempaniadorEspejosExteriores':
					return new QQNode('desempaniador_espejos_exteriores', 'DesempaniadorEspejosExteriores', 'string', $this);
				case 'EncendidoAutoBalizasUrgencia':
					return new QQNode('encendido_auto_balizas_urgencia', 'EncendidoAutoBalizasUrgencia', 'string', $this);
				case 'FarosAntiniebla':
					return new QQNode('faros_antiniebla', 'FarosAntiniebla', 'string', $this);
				case 'FarosXenon':
					return new QQNode('faros_xenon', 'FarosXenon', 'string', $this);
				case 'GanchosIsofixLatch':
					return new QQNode('ganchos_isofix_latch', 'GanchosIsofixLatch', 'string', $this);
				case 'Garantia':
					return new QQNode('garantia', 'Garantia', 'string', $this);
				case 'IndicadorPresionNeumaticos':
					return new QQNode('indicador_presion_neumaticos', 'IndicadorPresionNeumaticos', 'string', $this);
				case 'Lavafaros':
					return new QQNode('lavafaros', 'Lavafaros', 'string', $this);
				case 'LucesAdaptativasCurvas':
					return new QQNode('luces_adaptativas_curvas', 'LucesAdaptativasCurvas', 'string', $this);
				case 'TercerApoyaCabezaTrasero':
					return new QQNode('tercer_apoya_cabeza_trasero', 'TercerApoyaCabezaTrasero', 'string', $this);
				case 'IdEstado':
					return new QQNode('id_estado', 'IdEstado', 'integer', $this);

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

	class QQReverseReferenceNodeFichasBackup extends QQReverseReferenceNode {
		protected $strTableName = 'fichas_backup';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FichasBackup';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'IdMarca':
					return new QQNode('id_marca', 'IdMarca', 'integer', $this);
				case 'IdTipos':
					return new QQNode('id_tipos', 'IdTipos', 'string', $this);
				case 'Modelo':
					return new QQNode('modelo', 'Modelo', 'string', $this);
				case 'Descripcion':
					return new QQNode('descripcion', 'Descripcion', 'string', $this);
				case 'Precio':
					return new QQNode('precio', 'Precio', 'string', $this);
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
				case 'RelacionDeCompresion':
					return new QQNode('relacion_de_compresion', 'RelacionDeCompresion', 'string', $this);
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
				case 'EmisionesCo2':
					return new QQNode('emisiones_co2', 'EmisionesCo2', 'string', $this);
				case 'TipoCarroceria':
					return new QQNode('tipo_carroceria', 'TipoCarroceria', 'string', $this);
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
				case 'InfoCajaCarga':
					return new QQNode('info_caja_carga', 'InfoCajaCarga', 'string', $this);
				case 'VolumenCajaCarga':
					return new QQNode('volumen_caja_carga', 'VolumenCajaCarga', 'string', $this);
				case 'CapacidadCarga':
					return new QQNode('capacidad_carga', 'CapacidadCarga', 'string', $this);
				case 'FrenosDelanteros':
					return new QQNode('frenos_delanteros', 'FrenosDelanteros', 'string', $this);
				case 'FrenosTraseros':
					return new QQNode('frenos_traseros', 'FrenosTraseros', 'string', $this);
				case 'Llantas':
					return new QQNode('llantas', 'Llantas', 'string', $this);
				case 'Neumaticos':
					return new QQNode('neumaticos', 'Neumaticos', 'string', $this);
				case 'SuspensionDelantera':
					return new QQNode('suspension_delantera', 'SuspensionDelantera', 'string', $this);
				case 'SuspensionTrasera':
					return new QQNode('suspension_trasera', 'SuspensionTrasera', 'string', $this);
				case 'LucesAutomatico':
					return new QQNode('luces_automatico', 'LucesAutomatico', 'string', $this);
				case 'Climatizacion':
					return new QQNode('climatizacion', 'Climatizacion', 'string', $this);
				case 'AlarmaLucesEncendidas':
					return new QQNode('alarma_luces_encendidas', 'AlarmaLucesEncendidas', 'string', $this);
				case 'CritalesElectricos':
					return new QQNode('critales_electricos', 'CritalesElectricos', 'string', $this);
				case 'AperturaBaul':
					return new QQNode('apertura_baul', 'AperturaBaul', 'string', $this);
				case 'AperturaTanque':
					return new QQNode('apertura_tanque', 'AperturaTanque', 'string', $this);
				case 'AsientosRegulablesAltura':
					return new QQNode('asientos_regulables_altura', 'AsientosRegulablesAltura', 'string', $this);
				case 'AsientoTraseroRebatible':
					return new QQNode('asiento_trasero_rebatible', 'AsientoTraseroRebatible', 'string', $this);
				case 'AsientosCalefaccionado':
					return new QQNode('asientos_calefaccionado', 'AsientosCalefaccionado', 'string', $this);
				case 'AsientosAjustesElectronicos':
					return new QQNode('asientos_ajustes_electronicos', 'AsientosAjustesElectronicos', 'string', $this);
				case 'AsientosDelButacaDeportiva':
					return new QQNode('asientos_del_butaca_deportiva', 'AsientosDelButacaDeportiva', 'string', $this);
				case 'AsientoDelBipartido':
					return new QQNode('asiento_del_bipartido', 'AsientoDelBipartido', 'string', $this);
				case 'BotonStartStop':
					return new QQNode('boton_start_stop', 'BotonStartStop', 'string', $this);
				case 'CambioSecuencialVolante':
					return new QQNode('cambio_secuencial_volante', 'CambioSecuencialVolante', 'string', $this);
				case 'CierreCentralizado':
					return new QQNode('cierre_centralizado', 'CierreCentralizado', 'string', $this);
				case 'ComputadoraABordo':
					return new QQNode('computadora_a_bordo', 'ComputadoraABordo', 'string', $this);
				case 'DireccionAsistida':
					return new QQNode('direccion_asistida', 'DireccionAsistida', 'string', $this);
				case 'MandosAudioVolante':
					return new QQNode('mandos_audio_volante', 'MandosAudioVolante', 'string', $this);
				case 'Reposabrazos':
					return new QQNode('reposabrazos', 'Reposabrazos', 'string', $this);
				case 'ControlCrucero':
					return new QQNode('control_crucero', 'ControlCrucero', 'string', $this);
				case 'SensorLluvia':
					return new QQNode('sensor_lluvia', 'SensorLluvia', 'string', $this);
				case 'Tapizado':
					return new QQNode('tapizado', 'Tapizado', 'string', $this);
				case 'SalidasAire':
					return new QQNode('salidas_aire', 'SalidasAire', 'string', $this);
				case 'TechoCorredizo':
					return new QQNode('techo_corredizo', 'TechoCorredizo', 'string', $this);
				case 'ComandoDistancia':
					return new QQNode('comando_distancia', 'ComandoDistancia', 'string', $this);
				case 'VolanteAjusteVertical':
					return new QQNode('volante_ajuste_vertical', 'VolanteAjusteVertical', 'string', $this);
				case 'VolanteCuero':
					return new QQNode('volante_cuero', 'VolanteCuero', 'string', $this);
				case 'MoldurasColorCarroceria':
					return new QQNode('molduras_color_carroceria', 'MoldurasColorCarroceria', 'string', $this);
				case 'EspejosElectricos':
					return new QQNode('espejos_electricos', 'EspejosElectricos', 'string', $this);
				case 'EspejosRebatiblesElectricamente':
					return new QQNode('espejos_rebatibles_electricamente', 'EspejosRebatiblesElectricamente', 'string', $this);
				case 'EspejosMemorias':
					return new QQNode('espejos_memorias', 'EspejosMemorias', 'string', $this);
				case 'LavaFaros':
					return new QQNode('lava_faros', 'LavaFaros', 'string', $this);
				case 'LavaLuneta':
					return new QQNode('lava_luneta', 'LavaLuneta', 'string', $this);
				case 'CobertorCajaCarga':
					return new QQNode('cobertor_caja_carga', 'CobertorCajaCarga', 'string', $this);
				case 'BarrasPortaequipajeTecho':
					return new QQNode('barras_portaequipaje_techo', 'BarrasPortaequipajeTecho', 'string', $this);
				case 'BarraAntivuelco':
					return new QQNode('barra_antivuelco', 'BarraAntivuelco', 'string', $this);
				case 'Estribos':
					return new QQNode('estribos', 'Estribos', 'string', $this);
				case 'ConexionAuxiliar':
					return new QQNode('conexion_auxiliar', 'ConexionAuxiliar', 'string', $this);
				case 'ConexionBluetooth':
					return new QQNode('conexion_bluetooth', 'ConexionBluetooth', 'string', $this);
				case 'ControlPorVoz':
					return new QQNode('control_por_voz', 'ControlPorVoz', 'string', $this);
				case 'EntradaUsb':
					return new QQNode('entrada_usb', 'EntradaUsb', 'string', $this);
				case 'LectorTarjetasSd':
					return new QQNode('lector_tarjetas_sd', 'LectorTarjetasSd', 'string', $this);
				case 'NavegadorGps':
					return new QQNode('navegador_gps', 'NavegadorGps', 'string', $this);
				case 'Parlantes':
					return new QQNode('parlantes', 'Parlantes', 'string', $this);
				case 'RadioAmfm':
					return new QQNode('radio_amfm', 'RadioAmfm', 'string', $this);
				case 'RadioSatelitalXm':
					return new QQNode('radio_satelital_xm', 'RadioSatelitalXm', 'string', $this);
				case 'ReproductorCd':
					return new QQNode('reproductor_cd', 'ReproductorCd', 'string', $this);
				case 'ReproductorDvd':
					return new QQNode('reproductor_dvd', 'ReproductorDvd', 'string', $this);
				case 'ReproductorMp3':
					return new QQNode('reproductor_mp3', 'ReproductorMp3', 'string', $this);
				case 'TomaCorriente12v':
					return new QQNode('toma_corriente_12v', 'TomaCorriente12v', 'string', $this);
				case 'Airbags':
					return new QQNode('airbags', 'Airbags', 'string', $this);
				case 'Alarma':
					return new QQNode('alarma', 'Alarma', 'string', $this);
				case 'AsientoParaNinos':
					return new QQNode('asiento_para_ninos', 'AsientoParaNinos', 'string', $this);
				case 'AsistenciasElectronicas':
					return new QQNode('asistencias_electronicas', 'AsistenciasElectronicas', 'string', $this);
				case 'CamaraRetroceso':
					return new QQNode('camara_retroceso', 'CamaraRetroceso', 'string', $this);
				case 'CinturonesInerciales':
					return new QQNode('cinturones_inerciales', 'CinturonesInerciales', 'string', $this);
				case 'SensorDistanciaEstacionamiento':
					return new QQNode('sensor_distancia_estacionamiento', 'SensorDistanciaEstacionamiento', 'string', $this);
				case 'DesempaniadorEspejosExteriores':
					return new QQNode('desempaniador_espejos_exteriores', 'DesempaniadorEspejosExteriores', 'string', $this);
				case 'EncendidoAutoBalizasUrgencia':
					return new QQNode('encendido_auto_balizas_urgencia', 'EncendidoAutoBalizasUrgencia', 'string', $this);
				case 'FarosAntiniebla':
					return new QQNode('faros_antiniebla', 'FarosAntiniebla', 'string', $this);
				case 'FarosXenon':
					return new QQNode('faros_xenon', 'FarosXenon', 'string', $this);
				case 'GanchosIsofixLatch':
					return new QQNode('ganchos_isofix_latch', 'GanchosIsofixLatch', 'string', $this);
				case 'Garantia':
					return new QQNode('garantia', 'Garantia', 'string', $this);
				case 'IndicadorPresionNeumaticos':
					return new QQNode('indicador_presion_neumaticos', 'IndicadorPresionNeumaticos', 'string', $this);
				case 'Lavafaros':
					return new QQNode('lavafaros', 'Lavafaros', 'string', $this);
				case 'LucesAdaptativasCurvas':
					return new QQNode('luces_adaptativas_curvas', 'LucesAdaptativasCurvas', 'string', $this);
				case 'TercerApoyaCabezaTrasero':
					return new QQNode('tercer_apoya_cabeza_trasero', 'TercerApoyaCabezaTrasero', 'string', $this);
				case 'IdEstado':
					return new QQNode('id_estado', 'IdEstado', 'integer', $this);

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