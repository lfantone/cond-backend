<?php
	// Load the QCubed Development Framework
	require('qcubed/includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the Notas class.  It uses the code-generated
	 * NotasMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Notas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both notas_edit.php AND
	 * notas_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class NotasEditForm extends QForm {
		// Local instance of the NotasMetaControl
		protected $mctNotas;

		// Controls for Notas's Data Fields
		protected $lblId;
		protected $txtTitulo;
		protected $txtSubtitulo;
		protected $txtCopete;
		protected $txtContenido;
		protected $calFechaCreada;
		protected $calFechaPublicada;
		protected $txtVisitas;
		protected $lstIdAutor;
		protected $txtEstado;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		protected $btnSave;
		protected $btnDelete;
		protected $btnCancel;
		
		// nuevos paneles
		
    protected $lstNotasPaises;
    protected $lstNotasMarcas;
    protected $lstNotasTipos;
    protected $lstCategoriasTipos;
    protected $lstNotasImagenes;
    protected $btnMostrarImagenes;
    
		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
      
      $this->lstNotasPaises = new QCheckBoxList($this);
      $this->lstNotasPaises->Name = "Paises";
      $objPaisesArray = Paises::LoadAll();
      foreach ($objPaisesArray as $objPais)
        $this->lstNotasPaises->AddItem($objPais->Nombre);
      
      
      $this->lstNotasMarcas = new QCheckBoxList($this);
      $this->lstNotasMarcas->Name = "Marcas";
      $objMarcasArray = Marcas::LoadAll();
      foreach ($objMarcasArray as $objMarca)
        $this->lstNotasMarcas->AddItem($objMarca->Nombre);
      
      $this->lstNotasTipos = new QCheckBoxList($this);
      $this->lstNotasTipos->Name = "Tipos";
      $objTiposArray = Tipos::LoadAll();
      foreach ($objTiposArray as $objTipo)
        $this->lstNotasTipos->AddItem(QApplication::HtmlEntities($objTipo->Nombre));
      
      $this->btnMostrarImagenes = new QLabel($this);
      $this->btnMostrarImagenes->Text = "Mostrar Imagenes";
      $this->btnMostrarImagenes->AddAction(new QClickEvent(), new QAjaxControlAction($this, "MostrarImagenes"));
      
      
      $this->lstCategoriasTipos = new QCheckBoxList($this);
      $this->lstCategoriasTipos->Name = "Categorias";
      $objCategoriasArray = Categorias::LoadAll();
      foreach ($objCategoriasArray as $objCategoria)
        $this->lstCategoriasTipos->AddItem(QApplication::HtmlEntities($objCategoria->Nombre));
      
      // Use the CreateFromPathInfo shortcut (this can also be done manually using the NotasMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctNotas = NotasMetaControl::CreateFromQueryString($this);

			// Call MetaControl's methods to create qcontrols based on Notas's data fields
			$this->lblId = $this->mctNotas->lblId_Create();
			$this->txtTitulo = $this->mctNotas->txtTitulo_Create();
			$this->txtSubtitulo = $this->mctNotas->txtSubtitulo_Create();
			$this->txtCopete = $this->mctNotas->txtCopete_Create();
			$this->txtContenido = $this->mctNotas->txtContenido_Create();
			$this->calFechaCreada = $this->mctNotas->calFechaCreada_Create();
			$this->calFechaPublicada = $this->mctNotas->calFechaPublicada_Create();
			$this->txtVisitas = $this->mctNotas->txtVisitas_Create();
			$this->lstIdAutor = $this->mctNotas->lstIdAutor_Create();
			$this->txtEstado = $this->mctNotas->txtEstado_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
			$this->btnSave->CausesValidation = true;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Notas') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctNotas->EditMode;
		}

		public function MostrarImagenes($strFormId, $strControlId, $strParameter) {
      $this->lstNotasImagenes = new QCheckBoxList($this);
      $this->lstNotasImagenes->Name = "Imagenes";
      $objImagenesArray = Imagenes::LoadAll();
      foreach ($objImagenesArray as $objImagen)
        $this->lstImagenesTipos->AddItem($objImagen->Nombre);
	 }
	
		/**
		 * This Form_Validate event handler allows you to specify any custom Form Validation rules.
		 * It will also Blink() on all invalid controls, as well as Focus() on the top-most invalid control.
		 */
		protected function Form_Validate() {
			// By default, we report that Custom Validations passed
			$blnToReturn = true;

			// Custom Validation Rules
			// TODO: Be sure to set $blnToReturn to false if any custom validation fails!

			$blnFocused = false;
			foreach ($this->GetErrorControls() as $objControl) {
				// Set Focus to the top-most invalid control
				if (!$blnFocused) {
					$objControl->Focus();
					$blnFocused = true;
				}

				// Blink on ALL invalid controls
				$objControl->Blink();
			}

			return $blnToReturn;
		}

		// Button Event Handlers

		protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the NotasMetaControl
			$this->mctNotas->SaveNotas();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the NotasMetaControl
			$this->mctNotas->DeleteNotas();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __BACKEND_DIR__ . '/notas_list.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// notas_edit.tpl.php as the included HTML template file
	NotasEditForm::Run('NotasEditForm');
?>