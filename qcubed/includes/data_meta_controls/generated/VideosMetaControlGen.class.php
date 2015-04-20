<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Videos class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Videos object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a VideosMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Videos $Videos the actual Videos data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $TituloControl
	 * property-read QLabel $TituloLabel
	 * property QTextBox $SubtituloControl
	 * property-read QLabel $SubtituloLabel
	 * property QTextBox $ContenidoControl
	 * property-read QLabel $ContenidoLabel
	 * property QDateTimePicker $FechaControl
	 * property-read QLabel $FechaLabel
	 * property QIntegerTextBox $EstadoControl
	 * property-read QLabel $EstadoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class VideosMetaControlGen extends QBaseClass {
		// General Variables
		protected $objVideos;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Videos's individual data fields
		protected $lblId;
		protected $txtTitulo;
		protected $txtSubtitulo;
		protected $txtContenido;
		protected $calFecha;
		protected $txtEstado;

		// Controls that allow the viewing of Videos's individual data fields
		protected $lblTitulo;
		protected $lblSubtitulo;
		protected $lblContenido;
		protected $lblFecha;
		protected $lblEstado;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * VideosMetaControl to edit a single Videos object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Videos object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this VideosMetaControl
		 * @param Videos $objVideos new or existing Videos object
		 */
		 public function __construct($objParentObject, Videos $objVideos) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this VideosMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Videos object
			$this->objVideos = $objVideos;

			// Figure out if we're Editing or Creating New
			if ($this->objVideos->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to 
		 * edit, or if we are also allowed to create a new one, etc.
		 * 
		 * @param mixed $objParentObject QForm or QPanel which will be using this VideosMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Videos object creation - defaults to CreateOrEdit
 		 * @return VideosMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objVideos = Videos::Load($intId);

				// Videos was found -- return it!
				if ($objVideos)
					return new VideosMetaControl($objParentObject, $objVideos);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Videos object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new VideosMetaControl($objParentObject, new Videos());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this VideosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Videos object creation - defaults to CreateOrEdit
		 * @return VideosMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return VideosMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this VideosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Videos object creation - defaults to CreateOrEdit
		 * @return VideosMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return VideosMetaControl::Create($objParentObject, $intId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblId_Create($strControlId = null) {
			$this->lblId = new QLabel($this->objParentObject, $strControlId);
			$this->lblId->Name = QApplication::Translate('Id');
			if ($this->blnEditMode)
				$this->lblId->Text = $this->objVideos->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtTitulo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTitulo_Create($strControlId = null) {
			$this->txtTitulo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTitulo->Name = QApplication::Translate('Titulo');
			$this->txtTitulo->Text = $this->objVideos->Titulo;
			$this->txtTitulo->Required = true;
			$this->txtTitulo->MaxLength = Videos::TituloMaxLength;
			return $this->txtTitulo;
		}

		/**
		 * Create and setup QLabel lblTitulo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTitulo_Create($strControlId = null) {
			$this->lblTitulo = new QLabel($this->objParentObject, $strControlId);
			$this->lblTitulo->Name = QApplication::Translate('Titulo');
			$this->lblTitulo->Text = $this->objVideos->Titulo;
			$this->lblTitulo->Required = true;
			return $this->lblTitulo;
		}

		/**
		 * Create and setup QTextBox txtSubtitulo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSubtitulo_Create($strControlId = null) {
			$this->txtSubtitulo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSubtitulo->Name = QApplication::Translate('Subtitulo');
			$this->txtSubtitulo->Text = $this->objVideos->Subtitulo;
			$this->txtSubtitulo->Required = true;
			$this->txtSubtitulo->MaxLength = Videos::SubtituloMaxLength;
			return $this->txtSubtitulo;
		}

		/**
		 * Create and setup QLabel lblSubtitulo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSubtitulo_Create($strControlId = null) {
			$this->lblSubtitulo = new QLabel($this->objParentObject, $strControlId);
			$this->lblSubtitulo->Name = QApplication::Translate('Subtitulo');
			$this->lblSubtitulo->Text = $this->objVideos->Subtitulo;
			$this->lblSubtitulo->Required = true;
			return $this->lblSubtitulo;
		}

		/**
		 * Create and setup QTextBox txtContenido
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtContenido_Create($strControlId = null) {
			$this->txtContenido = new QTextBox($this->objParentObject, $strControlId);
			$this->txtContenido->Name = QApplication::Translate('Contenido');
			$this->txtContenido->Text = $this->objVideos->Contenido;
			$this->txtContenido->Required = true;
			$this->txtContenido->TextMode = QTextMode::MultiLine;
			return $this->txtContenido;
		}

		/**
		 * Create and setup QLabel lblContenido
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblContenido_Create($strControlId = null) {
			$this->lblContenido = new QLabel($this->objParentObject, $strControlId);
			$this->lblContenido->Name = QApplication::Translate('Contenido');
			$this->lblContenido->Text = $this->objVideos->Contenido;
			$this->lblContenido->Required = true;
			return $this->lblContenido;
		}

		/**
		 * Create and setup QDateTimePicker calFecha
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFecha_Create($strControlId = null) {
			$this->calFecha = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFecha->Name = QApplication::Translate('Fecha');
			$this->calFecha->DateTime = $this->objVideos->Fecha;
			$this->calFecha->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calFecha->Required = true;
			return $this->calFecha;
		}

		/**
		 * Create and setup QLabel lblFecha
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFecha_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFecha = new QLabel($this->objParentObject, $strControlId);
			$this->lblFecha->Name = QApplication::Translate('Fecha');
			$this->strFechaDateTimeFormat = $strDateTimeFormat;
			$this->lblFecha->Text = sprintf($this->objVideos->Fecha) ? $this->objVideos->Fecha->qFormat($this->strFechaDateTimeFormat) : null;
			$this->lblFecha->Required = true;
			return $this->lblFecha;
		}

		protected $strFechaDateTimeFormat;


		/**
		 * Create and setup QIntegerTextBox txtEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtEstado_Create($strControlId = null) {
			$this->txtEstado = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtEstado->Name = QApplication::Translate('Estado');
			$this->txtEstado->Text = $this->objVideos->Estado;
			$this->txtEstado->Required = true;
			return $this->txtEstado;
		}

		/**
		 * Create and setup QLabel lblEstado
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblEstado_Create($strControlId = null, $strFormat = null) {
			$this->lblEstado = new QLabel($this->objParentObject, $strControlId);
			$this->lblEstado->Name = QApplication::Translate('Estado');
			$this->lblEstado->Text = $this->objVideos->Estado;
			$this->lblEstado->Required = true;
			$this->lblEstado->Format = $strFormat;
			return $this->lblEstado;
		}



		/**
		 * Refresh this MetaControl with Data from the local Videos object.
		 * @param boolean $blnReload reload Videos from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objVideos->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objVideos->Id;

			if ($this->txtTitulo) $this->txtTitulo->Text = $this->objVideos->Titulo;
			if ($this->lblTitulo) $this->lblTitulo->Text = $this->objVideos->Titulo;

			if ($this->txtSubtitulo) $this->txtSubtitulo->Text = $this->objVideos->Subtitulo;
			if ($this->lblSubtitulo) $this->lblSubtitulo->Text = $this->objVideos->Subtitulo;

			if ($this->txtContenido) $this->txtContenido->Text = $this->objVideos->Contenido;
			if ($this->lblContenido) $this->lblContenido->Text = $this->objVideos->Contenido;

			if ($this->calFecha) $this->calFecha->DateTime = $this->objVideos->Fecha;
			if ($this->lblFecha) $this->lblFecha->Text = sprintf($this->objVideos->Fecha) ? $this->objVideos->Fecha->qFormat($this->strFechaDateTimeFormat) : null;

			if ($this->txtEstado) $this->txtEstado->Text = $this->objVideos->Estado;
			if ($this->lblEstado) $this->lblEstado->Text = $this->objVideos->Estado;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC VIDEOS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Videos instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveVideos() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtTitulo) $this->objVideos->Titulo = $this->txtTitulo->Text;
				if ($this->txtSubtitulo) $this->objVideos->Subtitulo = $this->txtSubtitulo->Text;
				if ($this->txtContenido) $this->objVideos->Contenido = $this->txtContenido->Text;
				if ($this->calFecha) $this->objVideos->Fecha = $this->calFecha->DateTime;
				if ($this->txtEstado) $this->objVideos->Estado = $this->txtEstado->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Videos object
				$this->objVideos->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Videos instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteVideos() {
			$this->objVideos->Delete();
		}		



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'Videos': return $this->objVideos;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Videos fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'TituloControl':
					if (!$this->txtTitulo) return $this->txtTitulo_Create();
					return $this->txtTitulo;
				case 'TituloLabel':
					if (!$this->lblTitulo) return $this->lblTitulo_Create();
					return $this->lblTitulo;
				case 'SubtituloControl':
					if (!$this->txtSubtitulo) return $this->txtSubtitulo_Create();
					return $this->txtSubtitulo;
				case 'SubtituloLabel':
					if (!$this->lblSubtitulo) return $this->lblSubtitulo_Create();
					return $this->lblSubtitulo;
				case 'ContenidoControl':
					if (!$this->txtContenido) return $this->txtContenido_Create();
					return $this->txtContenido;
				case 'ContenidoLabel':
					if (!$this->lblContenido) return $this->lblContenido_Create();
					return $this->lblContenido;
				case 'FechaControl':
					if (!$this->calFecha) return $this->calFecha_Create();
					return $this->calFecha;
				case 'FechaLabel':
					if (!$this->lblFecha) return $this->lblFecha_Create();
					return $this->lblFecha;
				case 'EstadoControl':
					if (!$this->txtEstado) return $this->txtEstado_Create();
					return $this->txtEstado;
				case 'EstadoLabel':
					if (!$this->lblEstado) return $this->lblEstado_Create();
					return $this->lblEstado;
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
			try {
				switch ($strName) {
					// Controls that point to Videos fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'TituloControl':
						return ($this->txtTitulo = QType::Cast($mixValue, 'QControl'));
					case 'SubtituloControl':
						return ($this->txtSubtitulo = QType::Cast($mixValue, 'QControl'));
					case 'ContenidoControl':
						return ($this->txtContenido = QType::Cast($mixValue, 'QControl'));
					case 'FechaControl':
						return ($this->calFecha = QType::Cast($mixValue, 'QControl'));
					case 'EstadoControl':
						return ($this->txtEstado = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>