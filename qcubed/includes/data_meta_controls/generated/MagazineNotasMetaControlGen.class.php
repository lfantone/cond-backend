<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the MagazineNotas class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single MagazineNotas object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MagazineNotasMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read MagazineNotas $MagazineNotas the actual MagazineNotas data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $TituloControl
	 * property-read QLabel $TituloLabel
	 * property QTextBox $SubtituloControl
	 * property-read QLabel $SubtituloLabel
	 * property QTextBox $CopeteControl
	 * property-read QLabel $CopeteLabel
	 * property QTextBox $ContenidoControl
	 * property-read QLabel $ContenidoLabel
	 * property QDateTimePicker $FechaCreadaControl
	 * property-read QLabel $FechaCreadaLabel
	 * property QDateTimePicker $FechaPublicadaControl
	 * property-read QLabel $FechaPublicadaLabel
	 * property QIntegerTextBox $VisitasControl
	 * property-read QLabel $VisitasLabel
	 * property QIntegerTextBox $IdAutorControl
	 * property-read QLabel $IdAutorLabel
	 * property QIntegerTextBox $EstadoControl
	 * property-read QLabel $EstadoLabel
	 * property QDateTimePicker $FechaAPublicarControl
	 * property-read QLabel $FechaAPublicarLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class MagazineNotasMetaControlGen extends QBaseClass {
		// General Variables
		protected $objMagazineNotas;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of MagazineNotas's individual data fields
		protected $lblId;
		protected $txtTitulo;
		protected $txtSubtitulo;
		protected $txtCopete;
		protected $txtContenido;
		protected $calFechaCreada;
		protected $calFechaPublicada;
		protected $txtVisitas;
		protected $txtIdAutor;
		protected $txtEstado;
		protected $calFechaAPublicar;

		// Controls that allow the viewing of MagazineNotas's individual data fields
		protected $lblTitulo;
		protected $lblSubtitulo;
		protected $lblCopete;
		protected $lblContenido;
		protected $lblFechaCreada;
		protected $lblFechaPublicada;
		protected $lblVisitas;
		protected $lblIdAutor;
		protected $lblEstado;
		protected $lblFechaAPublicar;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * MagazineNotasMetaControl to edit a single MagazineNotas object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single MagazineNotas object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MagazineNotasMetaControl
		 * @param MagazineNotas $objMagazineNotas new or existing MagazineNotas object
		 */
		 public function __construct($objParentObject, MagazineNotas $objMagazineNotas) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this MagazineNotasMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked MagazineNotas object
			$this->objMagazineNotas = $objMagazineNotas;

			// Figure out if we're Editing or Creating New
			if ($this->objMagazineNotas->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this MagazineNotasMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing MagazineNotas object creation - defaults to CreateOrEdit
 		 * @return MagazineNotasMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objMagazineNotas = MagazineNotas::Load($intId);

				// MagazineNotas was found -- return it!
				if ($objMagazineNotas)
					return new MagazineNotasMetaControl($objParentObject, $objMagazineNotas);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a MagazineNotas object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new MagazineNotasMetaControl($objParentObject, new MagazineNotas());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MagazineNotasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing MagazineNotas object creation - defaults to CreateOrEdit
		 * @return MagazineNotasMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return MagazineNotasMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MagazineNotasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing MagazineNotas object creation - defaults to CreateOrEdit
		 * @return MagazineNotasMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return MagazineNotasMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objMagazineNotas->Id;
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
			$this->txtTitulo->Text = $this->objMagazineNotas->Titulo;
			$this->txtTitulo->Required = true;
			$this->txtTitulo->MaxLength = MagazineNotas::TituloMaxLength;
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
			$this->lblTitulo->Text = $this->objMagazineNotas->Titulo;
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
			$this->txtSubtitulo->Text = $this->objMagazineNotas->Subtitulo;
			$this->txtSubtitulo->Required = true;
			$this->txtSubtitulo->MaxLength = MagazineNotas::SubtituloMaxLength;
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
			$this->lblSubtitulo->Text = $this->objMagazineNotas->Subtitulo;
			$this->lblSubtitulo->Required = true;
			return $this->lblSubtitulo;
		}

		/**
		 * Create and setup QTextBox txtCopete
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCopete_Create($strControlId = null) {
			$this->txtCopete = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCopete->Name = QApplication::Translate('Copete');
			$this->txtCopete->Text = $this->objMagazineNotas->Copete;
			$this->txtCopete->Required = true;
			$this->txtCopete->MaxLength = MagazineNotas::CopeteMaxLength;
			return $this->txtCopete;
		}

		/**
		 * Create and setup QLabel lblCopete
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCopete_Create($strControlId = null) {
			$this->lblCopete = new QLabel($this->objParentObject, $strControlId);
			$this->lblCopete->Name = QApplication::Translate('Copete');
			$this->lblCopete->Text = $this->objMagazineNotas->Copete;
			$this->lblCopete->Required = true;
			return $this->lblCopete;
		}

		/**
		 * Create and setup QTextBox txtContenido
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtContenido_Create($strControlId = null) {
			$this->txtContenido = new QTextBox($this->objParentObject, $strControlId);
			$this->txtContenido->Name = QApplication::Translate('Contenido');
			$this->txtContenido->Text = $this->objMagazineNotas->Contenido;
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
			$this->lblContenido->Text = $this->objMagazineNotas->Contenido;
			$this->lblContenido->Required = true;
			return $this->lblContenido;
		}

		/**
		 * Create and setup QDateTimePicker calFechaCreada
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaCreada_Create($strControlId = null) {
			$this->calFechaCreada = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaCreada->Name = QApplication::Translate('Fecha Creada');
			$this->calFechaCreada->DateTime = $this->objMagazineNotas->FechaCreada;
			$this->calFechaCreada->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calFechaCreada->Required = true;
			return $this->calFechaCreada;
		}

		/**
		 * Create and setup QLabel lblFechaCreada
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaCreada_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaCreada = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaCreada->Name = QApplication::Translate('Fecha Creada');
			$this->strFechaCreadaDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaCreada->Text = sprintf($this->objMagazineNotas->FechaCreada) ? $this->objMagazineNotas->FechaCreada->qFormat($this->strFechaCreadaDateTimeFormat) : null;
			$this->lblFechaCreada->Required = true;
			return $this->lblFechaCreada;
		}

		protected $strFechaCreadaDateTimeFormat;


		/**
		 * Create and setup QDateTimePicker calFechaPublicada
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaPublicada_Create($strControlId = null) {
			$this->calFechaPublicada = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaPublicada->Name = QApplication::Translate('Fecha Publicada');
			$this->calFechaPublicada->DateTime = $this->objMagazineNotas->FechaPublicada;
			$this->calFechaPublicada->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calFechaPublicada->Required = true;
			return $this->calFechaPublicada;
		}

		/**
		 * Create and setup QLabel lblFechaPublicada
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaPublicada_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaPublicada = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaPublicada->Name = QApplication::Translate('Fecha Publicada');
			$this->strFechaPublicadaDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaPublicada->Text = sprintf($this->objMagazineNotas->FechaPublicada) ? $this->objMagazineNotas->FechaPublicada->qFormat($this->strFechaPublicadaDateTimeFormat) : null;
			$this->lblFechaPublicada->Required = true;
			return $this->lblFechaPublicada;
		}

		protected $strFechaPublicadaDateTimeFormat;


		/**
		 * Create and setup QIntegerTextBox txtVisitas
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtVisitas_Create($strControlId = null) {
			$this->txtVisitas = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtVisitas->Name = QApplication::Translate('Visitas');
			$this->txtVisitas->Text = $this->objMagazineNotas->Visitas;
			$this->txtVisitas->Required = true;
			return $this->txtVisitas;
		}

		/**
		 * Create and setup QLabel lblVisitas
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblVisitas_Create($strControlId = null, $strFormat = null) {
			$this->lblVisitas = new QLabel($this->objParentObject, $strControlId);
			$this->lblVisitas->Name = QApplication::Translate('Visitas');
			$this->lblVisitas->Text = $this->objMagazineNotas->Visitas;
			$this->lblVisitas->Required = true;
			$this->lblVisitas->Format = $strFormat;
			return $this->lblVisitas;
		}

		/**
		 * Create and setup QIntegerTextBox txtIdAutor
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtIdAutor_Create($strControlId = null) {
			$this->txtIdAutor = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtIdAutor->Name = QApplication::Translate('Id Autor');
			$this->txtIdAutor->Text = $this->objMagazineNotas->IdAutor;
			$this->txtIdAutor->Required = true;
			return $this->txtIdAutor;
		}

		/**
		 * Create and setup QLabel lblIdAutor
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblIdAutor_Create($strControlId = null, $strFormat = null) {
			$this->lblIdAutor = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdAutor->Name = QApplication::Translate('Id Autor');
			$this->lblIdAutor->Text = $this->objMagazineNotas->IdAutor;
			$this->lblIdAutor->Required = true;
			$this->lblIdAutor->Format = $strFormat;
			return $this->lblIdAutor;
		}

		/**
		 * Create and setup QIntegerTextBox txtEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtEstado_Create($strControlId = null) {
			$this->txtEstado = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtEstado->Name = QApplication::Translate('Estado');
			$this->txtEstado->Text = $this->objMagazineNotas->Estado;
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
			$this->lblEstado->Text = $this->objMagazineNotas->Estado;
			$this->lblEstado->Required = true;
			$this->lblEstado->Format = $strFormat;
			return $this->lblEstado;
		}

		/**
		 * Create and setup QDateTimePicker calFechaAPublicar
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaAPublicar_Create($strControlId = null) {
			$this->calFechaAPublicar = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaAPublicar->Name = QApplication::Translate('Fecha A Publicar');
			$this->calFechaAPublicar->DateTime = $this->objMagazineNotas->FechaAPublicar;
			$this->calFechaAPublicar->DateTimePickerType = QDateTimePickerType::DateTime;
			return $this->calFechaAPublicar;
		}

		/**
		 * Create and setup QLabel lblFechaAPublicar
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaAPublicar_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaAPublicar = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaAPublicar->Name = QApplication::Translate('Fecha A Publicar');
			$this->strFechaAPublicarDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaAPublicar->Text = sprintf($this->objMagazineNotas->FechaAPublicar) ? $this->objMagazineNotas->FechaAPublicar->qFormat($this->strFechaAPublicarDateTimeFormat) : null;
			return $this->lblFechaAPublicar;
		}

		protected $strFechaAPublicarDateTimeFormat;




		/**
		 * Refresh this MetaControl with Data from the local MagazineNotas object.
		 * @param boolean $blnReload reload MagazineNotas from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objMagazineNotas->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objMagazineNotas->Id;

			if ($this->txtTitulo) $this->txtTitulo->Text = $this->objMagazineNotas->Titulo;
			if ($this->lblTitulo) $this->lblTitulo->Text = $this->objMagazineNotas->Titulo;

			if ($this->txtSubtitulo) $this->txtSubtitulo->Text = $this->objMagazineNotas->Subtitulo;
			if ($this->lblSubtitulo) $this->lblSubtitulo->Text = $this->objMagazineNotas->Subtitulo;

			if ($this->txtCopete) $this->txtCopete->Text = $this->objMagazineNotas->Copete;
			if ($this->lblCopete) $this->lblCopete->Text = $this->objMagazineNotas->Copete;

			if ($this->txtContenido) $this->txtContenido->Text = $this->objMagazineNotas->Contenido;
			if ($this->lblContenido) $this->lblContenido->Text = $this->objMagazineNotas->Contenido;

			if ($this->calFechaCreada) $this->calFechaCreada->DateTime = $this->objMagazineNotas->FechaCreada;
			if ($this->lblFechaCreada) $this->lblFechaCreada->Text = sprintf($this->objMagazineNotas->FechaCreada) ? $this->objMagazineNotas->FechaCreada->qFormat($this->strFechaCreadaDateTimeFormat) : null;

			if ($this->calFechaPublicada) $this->calFechaPublicada->DateTime = $this->objMagazineNotas->FechaPublicada;
			if ($this->lblFechaPublicada) $this->lblFechaPublicada->Text = sprintf($this->objMagazineNotas->FechaPublicada) ? $this->objMagazineNotas->FechaPublicada->qFormat($this->strFechaPublicadaDateTimeFormat) : null;

			if ($this->txtVisitas) $this->txtVisitas->Text = $this->objMagazineNotas->Visitas;
			if ($this->lblVisitas) $this->lblVisitas->Text = $this->objMagazineNotas->Visitas;

			if ($this->txtIdAutor) $this->txtIdAutor->Text = $this->objMagazineNotas->IdAutor;
			if ($this->lblIdAutor) $this->lblIdAutor->Text = $this->objMagazineNotas->IdAutor;

			if ($this->txtEstado) $this->txtEstado->Text = $this->objMagazineNotas->Estado;
			if ($this->lblEstado) $this->lblEstado->Text = $this->objMagazineNotas->Estado;

			if ($this->calFechaAPublicar) $this->calFechaAPublicar->DateTime = $this->objMagazineNotas->FechaAPublicar;
			if ($this->lblFechaAPublicar) $this->lblFechaAPublicar->Text = sprintf($this->objMagazineNotas->FechaAPublicar) ? $this->objMagazineNotas->FechaAPublicar->qFormat($this->strFechaAPublicarDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC MAGAZINENOTAS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's MagazineNotas instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveMagazineNotas() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtTitulo) $this->objMagazineNotas->Titulo = $this->txtTitulo->Text;
				if ($this->txtSubtitulo) $this->objMagazineNotas->Subtitulo = $this->txtSubtitulo->Text;
				if ($this->txtCopete) $this->objMagazineNotas->Copete = $this->txtCopete->Text;
				if ($this->txtContenido) $this->objMagazineNotas->Contenido = $this->txtContenido->Text;
				if ($this->calFechaCreada) $this->objMagazineNotas->FechaCreada = $this->calFechaCreada->DateTime;
				if ($this->calFechaPublicada) $this->objMagazineNotas->FechaPublicada = $this->calFechaPublicada->DateTime;
				if ($this->txtVisitas) $this->objMagazineNotas->Visitas = $this->txtVisitas->Text;
				if ($this->txtIdAutor) $this->objMagazineNotas->IdAutor = $this->txtIdAutor->Text;
				if ($this->txtEstado) $this->objMagazineNotas->Estado = $this->txtEstado->Text;
				if ($this->calFechaAPublicar) $this->objMagazineNotas->FechaAPublicar = $this->calFechaAPublicar->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the MagazineNotas object
				$this->objMagazineNotas->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's MagazineNotas instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteMagazineNotas() {
			$this->objMagazineNotas->Delete();
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
				case 'MagazineNotas': return $this->objMagazineNotas;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to MagazineNotas fields -- will be created dynamically if not yet created
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
				case 'CopeteControl':
					if (!$this->txtCopete) return $this->txtCopete_Create();
					return $this->txtCopete;
				case 'CopeteLabel':
					if (!$this->lblCopete) return $this->lblCopete_Create();
					return $this->lblCopete;
				case 'ContenidoControl':
					if (!$this->txtContenido) return $this->txtContenido_Create();
					return $this->txtContenido;
				case 'ContenidoLabel':
					if (!$this->lblContenido) return $this->lblContenido_Create();
					return $this->lblContenido;
				case 'FechaCreadaControl':
					if (!$this->calFechaCreada) return $this->calFechaCreada_Create();
					return $this->calFechaCreada;
				case 'FechaCreadaLabel':
					if (!$this->lblFechaCreada) return $this->lblFechaCreada_Create();
					return $this->lblFechaCreada;
				case 'FechaPublicadaControl':
					if (!$this->calFechaPublicada) return $this->calFechaPublicada_Create();
					return $this->calFechaPublicada;
				case 'FechaPublicadaLabel':
					if (!$this->lblFechaPublicada) return $this->lblFechaPublicada_Create();
					return $this->lblFechaPublicada;
				case 'VisitasControl':
					if (!$this->txtVisitas) return $this->txtVisitas_Create();
					return $this->txtVisitas;
				case 'VisitasLabel':
					if (!$this->lblVisitas) return $this->lblVisitas_Create();
					return $this->lblVisitas;
				case 'IdAutorControl':
					if (!$this->txtIdAutor) return $this->txtIdAutor_Create();
					return $this->txtIdAutor;
				case 'IdAutorLabel':
					if (!$this->lblIdAutor) return $this->lblIdAutor_Create();
					return $this->lblIdAutor;
				case 'EstadoControl':
					if (!$this->txtEstado) return $this->txtEstado_Create();
					return $this->txtEstado;
				case 'EstadoLabel':
					if (!$this->lblEstado) return $this->lblEstado_Create();
					return $this->lblEstado;
				case 'FechaAPublicarControl':
					if (!$this->calFechaAPublicar) return $this->calFechaAPublicar_Create();
					return $this->calFechaAPublicar;
				case 'FechaAPublicarLabel':
					if (!$this->lblFechaAPublicar) return $this->lblFechaAPublicar_Create();
					return $this->lblFechaAPublicar;
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
					// Controls that point to MagazineNotas fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'TituloControl':
						return ($this->txtTitulo = QType::Cast($mixValue, 'QControl'));
					case 'SubtituloControl':
						return ($this->txtSubtitulo = QType::Cast($mixValue, 'QControl'));
					case 'CopeteControl':
						return ($this->txtCopete = QType::Cast($mixValue, 'QControl'));
					case 'ContenidoControl':
						return ($this->txtContenido = QType::Cast($mixValue, 'QControl'));
					case 'FechaCreadaControl':
						return ($this->calFechaCreada = QType::Cast($mixValue, 'QControl'));
					case 'FechaPublicadaControl':
						return ($this->calFechaPublicada = QType::Cast($mixValue, 'QControl'));
					case 'VisitasControl':
						return ($this->txtVisitas = QType::Cast($mixValue, 'QControl'));
					case 'IdAutorControl':
						return ($this->txtIdAutor = QType::Cast($mixValue, 'QControl'));
					case 'EstadoControl':
						return ($this->txtEstado = QType::Cast($mixValue, 'QControl'));
					case 'FechaAPublicarControl':
						return ($this->calFechaAPublicar = QType::Cast($mixValue, 'QControl'));
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