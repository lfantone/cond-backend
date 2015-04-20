<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Encuestas class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Encuestas object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a EncuestasMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Encuestas $Encuestas the actual Encuestas data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $TituloControl
	 * property-read QLabel $TituloLabel
	 * property QTextBox $Opcion1Control
	 * property-read QLabel $Opcion1Label
	 * property QTextBox $Opcion2Control
	 * property-read QLabel $Opcion2Label
	 * property QTextBox $Opcion3Control
	 * property-read QLabel $Opcion3Label
	 * property QTextBox $Opcion4Control
	 * property-read QLabel $Opcion4Label
	 * property QTextBox $Opcion5Control
	 * property-read QLabel $Opcion5Label
	 * property QTextBox $Opcion6Control
	 * property-read QLabel $Opcion6Label
	 * property QIntegerTextBox $Valor1Control
	 * property-read QLabel $Valor1Label
	 * property QIntegerTextBox $Valor2Control
	 * property-read QLabel $Valor2Label
	 * property QIntegerTextBox $Valor3Control
	 * property-read QLabel $Valor3Label
	 * property QIntegerTextBox $Valor4Control
	 * property-read QLabel $Valor4Label
	 * property QIntegerTextBox $Valor5Control
	 * property-read QLabel $Valor5Label
	 * property QIntegerTextBox $Valor6Control
	 * property-read QLabel $Valor6Label
	 * property QIntegerTextBox $EstadoControl
	 * property-read QLabel $EstadoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class EncuestasMetaControlGen extends QBaseClass {
		// General Variables
		protected $objEncuestas;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Encuestas's individual data fields
		protected $lblId;
		protected $txtTitulo;
		protected $txtOpcion1;
		protected $txtOpcion2;
		protected $txtOpcion3;
		protected $txtOpcion4;
		protected $txtOpcion5;
		protected $txtOpcion6;
		protected $txtValor1;
		protected $txtValor2;
		protected $txtValor3;
		protected $txtValor4;
		protected $txtValor5;
		protected $txtValor6;
		protected $txtEstado;

		// Controls that allow the viewing of Encuestas's individual data fields
		protected $lblTitulo;
		protected $lblOpcion1;
		protected $lblOpcion2;
		protected $lblOpcion3;
		protected $lblOpcion4;
		protected $lblOpcion5;
		protected $lblOpcion6;
		protected $lblValor1;
		protected $lblValor2;
		protected $lblValor3;
		protected $lblValor4;
		protected $lblValor5;
		protected $lblValor6;
		protected $lblEstado;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * EncuestasMetaControl to edit a single Encuestas object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Encuestas object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EncuestasMetaControl
		 * @param Encuestas $objEncuestas new or existing Encuestas object
		 */
		 public function __construct($objParentObject, Encuestas $objEncuestas) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this EncuestasMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Encuestas object
			$this->objEncuestas = $objEncuestas;

			// Figure out if we're Editing or Creating New
			if ($this->objEncuestas->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this EncuestasMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Encuestas object creation - defaults to CreateOrEdit
 		 * @return EncuestasMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objEncuestas = Encuestas::Load($intId);

				// Encuestas was found -- return it!
				if ($objEncuestas)
					return new EncuestasMetaControl($objParentObject, $objEncuestas);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Encuestas object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new EncuestasMetaControl($objParentObject, new Encuestas());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EncuestasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Encuestas object creation - defaults to CreateOrEdit
		 * @return EncuestasMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return EncuestasMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EncuestasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Encuestas object creation - defaults to CreateOrEdit
		 * @return EncuestasMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return EncuestasMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objEncuestas->Id;
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
			$this->txtTitulo->Text = $this->objEncuestas->Titulo;
			$this->txtTitulo->Required = true;
			$this->txtTitulo->MaxLength = Encuestas::TituloMaxLength;
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
			$this->lblTitulo->Text = $this->objEncuestas->Titulo;
			$this->lblTitulo->Required = true;
			return $this->lblTitulo;
		}

		/**
		 * Create and setup QTextBox txtOpcion1
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtOpcion1_Create($strControlId = null) {
			$this->txtOpcion1 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtOpcion1->Name = QApplication::Translate('Opcion 1');
			$this->txtOpcion1->Text = $this->objEncuestas->Opcion1;
			$this->txtOpcion1->Required = true;
			$this->txtOpcion1->MaxLength = Encuestas::Opcion1MaxLength;
			return $this->txtOpcion1;
		}

		/**
		 * Create and setup QLabel lblOpcion1
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOpcion1_Create($strControlId = null) {
			$this->lblOpcion1 = new QLabel($this->objParentObject, $strControlId);
			$this->lblOpcion1->Name = QApplication::Translate('Opcion 1');
			$this->lblOpcion1->Text = $this->objEncuestas->Opcion1;
			$this->lblOpcion1->Required = true;
			return $this->lblOpcion1;
		}

		/**
		 * Create and setup QTextBox txtOpcion2
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtOpcion2_Create($strControlId = null) {
			$this->txtOpcion2 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtOpcion2->Name = QApplication::Translate('Opcion 2');
			$this->txtOpcion2->Text = $this->objEncuestas->Opcion2;
			$this->txtOpcion2->Required = true;
			$this->txtOpcion2->MaxLength = Encuestas::Opcion2MaxLength;
			return $this->txtOpcion2;
		}

		/**
		 * Create and setup QLabel lblOpcion2
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOpcion2_Create($strControlId = null) {
			$this->lblOpcion2 = new QLabel($this->objParentObject, $strControlId);
			$this->lblOpcion2->Name = QApplication::Translate('Opcion 2');
			$this->lblOpcion2->Text = $this->objEncuestas->Opcion2;
			$this->lblOpcion2->Required = true;
			return $this->lblOpcion2;
		}

		/**
		 * Create and setup QTextBox txtOpcion3
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtOpcion3_Create($strControlId = null) {
			$this->txtOpcion3 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtOpcion3->Name = QApplication::Translate('Opcion 3');
			$this->txtOpcion3->Text = $this->objEncuestas->Opcion3;
			$this->txtOpcion3->Required = true;
			$this->txtOpcion3->MaxLength = Encuestas::Opcion3MaxLength;
			return $this->txtOpcion3;
		}

		/**
		 * Create and setup QLabel lblOpcion3
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOpcion3_Create($strControlId = null) {
			$this->lblOpcion3 = new QLabel($this->objParentObject, $strControlId);
			$this->lblOpcion3->Name = QApplication::Translate('Opcion 3');
			$this->lblOpcion3->Text = $this->objEncuestas->Opcion3;
			$this->lblOpcion3->Required = true;
			return $this->lblOpcion3;
		}

		/**
		 * Create and setup QTextBox txtOpcion4
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtOpcion4_Create($strControlId = null) {
			$this->txtOpcion4 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtOpcion4->Name = QApplication::Translate('Opcion 4');
			$this->txtOpcion4->Text = $this->objEncuestas->Opcion4;
			$this->txtOpcion4->Required = true;
			$this->txtOpcion4->MaxLength = Encuestas::Opcion4MaxLength;
			return $this->txtOpcion4;
		}

		/**
		 * Create and setup QLabel lblOpcion4
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOpcion4_Create($strControlId = null) {
			$this->lblOpcion4 = new QLabel($this->objParentObject, $strControlId);
			$this->lblOpcion4->Name = QApplication::Translate('Opcion 4');
			$this->lblOpcion4->Text = $this->objEncuestas->Opcion4;
			$this->lblOpcion4->Required = true;
			return $this->lblOpcion4;
		}

		/**
		 * Create and setup QTextBox txtOpcion5
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtOpcion5_Create($strControlId = null) {
			$this->txtOpcion5 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtOpcion5->Name = QApplication::Translate('Opcion 5');
			$this->txtOpcion5->Text = $this->objEncuestas->Opcion5;
			$this->txtOpcion5->Required = true;
			$this->txtOpcion5->MaxLength = Encuestas::Opcion5MaxLength;
			return $this->txtOpcion5;
		}

		/**
		 * Create and setup QLabel lblOpcion5
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOpcion5_Create($strControlId = null) {
			$this->lblOpcion5 = new QLabel($this->objParentObject, $strControlId);
			$this->lblOpcion5->Name = QApplication::Translate('Opcion 5');
			$this->lblOpcion5->Text = $this->objEncuestas->Opcion5;
			$this->lblOpcion5->Required = true;
			return $this->lblOpcion5;
		}

		/**
		 * Create and setup QTextBox txtOpcion6
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtOpcion6_Create($strControlId = null) {
			$this->txtOpcion6 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtOpcion6->Name = QApplication::Translate('Opcion 6');
			$this->txtOpcion6->Text = $this->objEncuestas->Opcion6;
			$this->txtOpcion6->Required = true;
			$this->txtOpcion6->MaxLength = Encuestas::Opcion6MaxLength;
			return $this->txtOpcion6;
		}

		/**
		 * Create and setup QLabel lblOpcion6
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOpcion6_Create($strControlId = null) {
			$this->lblOpcion6 = new QLabel($this->objParentObject, $strControlId);
			$this->lblOpcion6->Name = QApplication::Translate('Opcion 6');
			$this->lblOpcion6->Text = $this->objEncuestas->Opcion6;
			$this->lblOpcion6->Required = true;
			return $this->lblOpcion6;
		}

		/**
		 * Create and setup QIntegerTextBox txtValor1
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtValor1_Create($strControlId = null) {
			$this->txtValor1 = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtValor1->Name = QApplication::Translate('Valor 1');
			$this->txtValor1->Text = $this->objEncuestas->Valor1;
			$this->txtValor1->Required = true;
			return $this->txtValor1;
		}

		/**
		 * Create and setup QLabel lblValor1
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblValor1_Create($strControlId = null, $strFormat = null) {
			$this->lblValor1 = new QLabel($this->objParentObject, $strControlId);
			$this->lblValor1->Name = QApplication::Translate('Valor 1');
			$this->lblValor1->Text = $this->objEncuestas->Valor1;
			$this->lblValor1->Required = true;
			$this->lblValor1->Format = $strFormat;
			return $this->lblValor1;
		}

		/**
		 * Create and setup QIntegerTextBox txtValor2
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtValor2_Create($strControlId = null) {
			$this->txtValor2 = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtValor2->Name = QApplication::Translate('Valor 2');
			$this->txtValor2->Text = $this->objEncuestas->Valor2;
			$this->txtValor2->Required = true;
			return $this->txtValor2;
		}

		/**
		 * Create and setup QLabel lblValor2
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblValor2_Create($strControlId = null, $strFormat = null) {
			$this->lblValor2 = new QLabel($this->objParentObject, $strControlId);
			$this->lblValor2->Name = QApplication::Translate('Valor 2');
			$this->lblValor2->Text = $this->objEncuestas->Valor2;
			$this->lblValor2->Required = true;
			$this->lblValor2->Format = $strFormat;
			return $this->lblValor2;
		}

		/**
		 * Create and setup QIntegerTextBox txtValor3
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtValor3_Create($strControlId = null) {
			$this->txtValor3 = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtValor3->Name = QApplication::Translate('Valor 3');
			$this->txtValor3->Text = $this->objEncuestas->Valor3;
			$this->txtValor3->Required = true;
			return $this->txtValor3;
		}

		/**
		 * Create and setup QLabel lblValor3
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblValor3_Create($strControlId = null, $strFormat = null) {
			$this->lblValor3 = new QLabel($this->objParentObject, $strControlId);
			$this->lblValor3->Name = QApplication::Translate('Valor 3');
			$this->lblValor3->Text = $this->objEncuestas->Valor3;
			$this->lblValor3->Required = true;
			$this->lblValor3->Format = $strFormat;
			return $this->lblValor3;
		}

		/**
		 * Create and setup QIntegerTextBox txtValor4
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtValor4_Create($strControlId = null) {
			$this->txtValor4 = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtValor4->Name = QApplication::Translate('Valor 4');
			$this->txtValor4->Text = $this->objEncuestas->Valor4;
			$this->txtValor4->Required = true;
			return $this->txtValor4;
		}

		/**
		 * Create and setup QLabel lblValor4
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblValor4_Create($strControlId = null, $strFormat = null) {
			$this->lblValor4 = new QLabel($this->objParentObject, $strControlId);
			$this->lblValor4->Name = QApplication::Translate('Valor 4');
			$this->lblValor4->Text = $this->objEncuestas->Valor4;
			$this->lblValor4->Required = true;
			$this->lblValor4->Format = $strFormat;
			return $this->lblValor4;
		}

		/**
		 * Create and setup QIntegerTextBox txtValor5
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtValor5_Create($strControlId = null) {
			$this->txtValor5 = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtValor5->Name = QApplication::Translate('Valor 5');
			$this->txtValor5->Text = $this->objEncuestas->Valor5;
			$this->txtValor5->Required = true;
			return $this->txtValor5;
		}

		/**
		 * Create and setup QLabel lblValor5
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblValor5_Create($strControlId = null, $strFormat = null) {
			$this->lblValor5 = new QLabel($this->objParentObject, $strControlId);
			$this->lblValor5->Name = QApplication::Translate('Valor 5');
			$this->lblValor5->Text = $this->objEncuestas->Valor5;
			$this->lblValor5->Required = true;
			$this->lblValor5->Format = $strFormat;
			return $this->lblValor5;
		}

		/**
		 * Create and setup QIntegerTextBox txtValor6
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtValor6_Create($strControlId = null) {
			$this->txtValor6 = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtValor6->Name = QApplication::Translate('Valor 6');
			$this->txtValor6->Text = $this->objEncuestas->Valor6;
			$this->txtValor6->Required = true;
			return $this->txtValor6;
		}

		/**
		 * Create and setup QLabel lblValor6
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblValor6_Create($strControlId = null, $strFormat = null) {
			$this->lblValor6 = new QLabel($this->objParentObject, $strControlId);
			$this->lblValor6->Name = QApplication::Translate('Valor 6');
			$this->lblValor6->Text = $this->objEncuestas->Valor6;
			$this->lblValor6->Required = true;
			$this->lblValor6->Format = $strFormat;
			return $this->lblValor6;
		}

		/**
		 * Create and setup QIntegerTextBox txtEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtEstado_Create($strControlId = null) {
			$this->txtEstado = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtEstado->Name = QApplication::Translate('Estado');
			$this->txtEstado->Text = $this->objEncuestas->Estado;
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
			$this->lblEstado->Text = $this->objEncuestas->Estado;
			$this->lblEstado->Required = true;
			$this->lblEstado->Format = $strFormat;
			return $this->lblEstado;
		}



		/**
		 * Refresh this MetaControl with Data from the local Encuestas object.
		 * @param boolean $blnReload reload Encuestas from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objEncuestas->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objEncuestas->Id;

			if ($this->txtTitulo) $this->txtTitulo->Text = $this->objEncuestas->Titulo;
			if ($this->lblTitulo) $this->lblTitulo->Text = $this->objEncuestas->Titulo;

			if ($this->txtOpcion1) $this->txtOpcion1->Text = $this->objEncuestas->Opcion1;
			if ($this->lblOpcion1) $this->lblOpcion1->Text = $this->objEncuestas->Opcion1;

			if ($this->txtOpcion2) $this->txtOpcion2->Text = $this->objEncuestas->Opcion2;
			if ($this->lblOpcion2) $this->lblOpcion2->Text = $this->objEncuestas->Opcion2;

			if ($this->txtOpcion3) $this->txtOpcion3->Text = $this->objEncuestas->Opcion3;
			if ($this->lblOpcion3) $this->lblOpcion3->Text = $this->objEncuestas->Opcion3;

			if ($this->txtOpcion4) $this->txtOpcion4->Text = $this->objEncuestas->Opcion4;
			if ($this->lblOpcion4) $this->lblOpcion4->Text = $this->objEncuestas->Opcion4;

			if ($this->txtOpcion5) $this->txtOpcion5->Text = $this->objEncuestas->Opcion5;
			if ($this->lblOpcion5) $this->lblOpcion5->Text = $this->objEncuestas->Opcion5;

			if ($this->txtOpcion6) $this->txtOpcion6->Text = $this->objEncuestas->Opcion6;
			if ($this->lblOpcion6) $this->lblOpcion6->Text = $this->objEncuestas->Opcion6;

			if ($this->txtValor1) $this->txtValor1->Text = $this->objEncuestas->Valor1;
			if ($this->lblValor1) $this->lblValor1->Text = $this->objEncuestas->Valor1;

			if ($this->txtValor2) $this->txtValor2->Text = $this->objEncuestas->Valor2;
			if ($this->lblValor2) $this->lblValor2->Text = $this->objEncuestas->Valor2;

			if ($this->txtValor3) $this->txtValor3->Text = $this->objEncuestas->Valor3;
			if ($this->lblValor3) $this->lblValor3->Text = $this->objEncuestas->Valor3;

			if ($this->txtValor4) $this->txtValor4->Text = $this->objEncuestas->Valor4;
			if ($this->lblValor4) $this->lblValor4->Text = $this->objEncuestas->Valor4;

			if ($this->txtValor5) $this->txtValor5->Text = $this->objEncuestas->Valor5;
			if ($this->lblValor5) $this->lblValor5->Text = $this->objEncuestas->Valor5;

			if ($this->txtValor6) $this->txtValor6->Text = $this->objEncuestas->Valor6;
			if ($this->lblValor6) $this->lblValor6->Text = $this->objEncuestas->Valor6;

			if ($this->txtEstado) $this->txtEstado->Text = $this->objEncuestas->Estado;
			if ($this->lblEstado) $this->lblEstado->Text = $this->objEncuestas->Estado;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ENCUESTAS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Encuestas instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveEncuestas() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtTitulo) $this->objEncuestas->Titulo = $this->txtTitulo->Text;
				if ($this->txtOpcion1) $this->objEncuestas->Opcion1 = $this->txtOpcion1->Text;
				if ($this->txtOpcion2) $this->objEncuestas->Opcion2 = $this->txtOpcion2->Text;
				if ($this->txtOpcion3) $this->objEncuestas->Opcion3 = $this->txtOpcion3->Text;
				if ($this->txtOpcion4) $this->objEncuestas->Opcion4 = $this->txtOpcion4->Text;
				if ($this->txtOpcion5) $this->objEncuestas->Opcion5 = $this->txtOpcion5->Text;
				if ($this->txtOpcion6) $this->objEncuestas->Opcion6 = $this->txtOpcion6->Text;
				if ($this->txtValor1) $this->objEncuestas->Valor1 = $this->txtValor1->Text;
				if ($this->txtValor2) $this->objEncuestas->Valor2 = $this->txtValor2->Text;
				if ($this->txtValor3) $this->objEncuestas->Valor3 = $this->txtValor3->Text;
				if ($this->txtValor4) $this->objEncuestas->Valor4 = $this->txtValor4->Text;
				if ($this->txtValor5) $this->objEncuestas->Valor5 = $this->txtValor5->Text;
				if ($this->txtValor6) $this->objEncuestas->Valor6 = $this->txtValor6->Text;
				if ($this->txtEstado) $this->objEncuestas->Estado = $this->txtEstado->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Encuestas object
				$this->objEncuestas->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Encuestas instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteEncuestas() {
			$this->objEncuestas->Delete();
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
				case 'Encuestas': return $this->objEncuestas;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Encuestas fields -- will be created dynamically if not yet created
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
				case 'Opcion1Control':
					if (!$this->txtOpcion1) return $this->txtOpcion1_Create();
					return $this->txtOpcion1;
				case 'Opcion1Label':
					if (!$this->lblOpcion1) return $this->lblOpcion1_Create();
					return $this->lblOpcion1;
				case 'Opcion2Control':
					if (!$this->txtOpcion2) return $this->txtOpcion2_Create();
					return $this->txtOpcion2;
				case 'Opcion2Label':
					if (!$this->lblOpcion2) return $this->lblOpcion2_Create();
					return $this->lblOpcion2;
				case 'Opcion3Control':
					if (!$this->txtOpcion3) return $this->txtOpcion3_Create();
					return $this->txtOpcion3;
				case 'Opcion3Label':
					if (!$this->lblOpcion3) return $this->lblOpcion3_Create();
					return $this->lblOpcion3;
				case 'Opcion4Control':
					if (!$this->txtOpcion4) return $this->txtOpcion4_Create();
					return $this->txtOpcion4;
				case 'Opcion4Label':
					if (!$this->lblOpcion4) return $this->lblOpcion4_Create();
					return $this->lblOpcion4;
				case 'Opcion5Control':
					if (!$this->txtOpcion5) return $this->txtOpcion5_Create();
					return $this->txtOpcion5;
				case 'Opcion5Label':
					if (!$this->lblOpcion5) return $this->lblOpcion5_Create();
					return $this->lblOpcion5;
				case 'Opcion6Control':
					if (!$this->txtOpcion6) return $this->txtOpcion6_Create();
					return $this->txtOpcion6;
				case 'Opcion6Label':
					if (!$this->lblOpcion6) return $this->lblOpcion6_Create();
					return $this->lblOpcion6;
				case 'Valor1Control':
					if (!$this->txtValor1) return $this->txtValor1_Create();
					return $this->txtValor1;
				case 'Valor1Label':
					if (!$this->lblValor1) return $this->lblValor1_Create();
					return $this->lblValor1;
				case 'Valor2Control':
					if (!$this->txtValor2) return $this->txtValor2_Create();
					return $this->txtValor2;
				case 'Valor2Label':
					if (!$this->lblValor2) return $this->lblValor2_Create();
					return $this->lblValor2;
				case 'Valor3Control':
					if (!$this->txtValor3) return $this->txtValor3_Create();
					return $this->txtValor3;
				case 'Valor3Label':
					if (!$this->lblValor3) return $this->lblValor3_Create();
					return $this->lblValor3;
				case 'Valor4Control':
					if (!$this->txtValor4) return $this->txtValor4_Create();
					return $this->txtValor4;
				case 'Valor4Label':
					if (!$this->lblValor4) return $this->lblValor4_Create();
					return $this->lblValor4;
				case 'Valor5Control':
					if (!$this->txtValor5) return $this->txtValor5_Create();
					return $this->txtValor5;
				case 'Valor5Label':
					if (!$this->lblValor5) return $this->lblValor5_Create();
					return $this->lblValor5;
				case 'Valor6Control':
					if (!$this->txtValor6) return $this->txtValor6_Create();
					return $this->txtValor6;
				case 'Valor6Label':
					if (!$this->lblValor6) return $this->lblValor6_Create();
					return $this->lblValor6;
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
					// Controls that point to Encuestas fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'TituloControl':
						return ($this->txtTitulo = QType::Cast($mixValue, 'QControl'));
					case 'Opcion1Control':
						return ($this->txtOpcion1 = QType::Cast($mixValue, 'QControl'));
					case 'Opcion2Control':
						return ($this->txtOpcion2 = QType::Cast($mixValue, 'QControl'));
					case 'Opcion3Control':
						return ($this->txtOpcion3 = QType::Cast($mixValue, 'QControl'));
					case 'Opcion4Control':
						return ($this->txtOpcion4 = QType::Cast($mixValue, 'QControl'));
					case 'Opcion5Control':
						return ($this->txtOpcion5 = QType::Cast($mixValue, 'QControl'));
					case 'Opcion6Control':
						return ($this->txtOpcion6 = QType::Cast($mixValue, 'QControl'));
					case 'Valor1Control':
						return ($this->txtValor1 = QType::Cast($mixValue, 'QControl'));
					case 'Valor2Control':
						return ($this->txtValor2 = QType::Cast($mixValue, 'QControl'));
					case 'Valor3Control':
						return ($this->txtValor3 = QType::Cast($mixValue, 'QControl'));
					case 'Valor4Control':
						return ($this->txtValor4 = QType::Cast($mixValue, 'QControl'));
					case 'Valor5Control':
						return ($this->txtValor5 = QType::Cast($mixValue, 'QControl'));
					case 'Valor6Control':
						return ($this->txtValor6 = QType::Cast($mixValue, 'QControl'));
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