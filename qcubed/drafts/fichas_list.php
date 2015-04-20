<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Fichas class.  It uses the code-generated
	 * FichasDataGrid control which has meta-methods to help with
	 * easily creating/defining Fichas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_list.php AND
	 * fichas_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FichasListForm extends QForm {
		// Local instance of the Meta DataGrid to list Fichases
		protected $dtgFichases;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			// Instantiate the Meta DataGrid
			$this->dtgFichases = new FichasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFichases->CssClass = 'datagrid';
			$this->dtgFichases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFichases->Paginator = new QPaginator($this->dtgFichases);
			$this->dtgFichases->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/fichas_edit.php';
			$this->dtgFichases->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for fichas's properties, or you
			// can traverse down QQN::fichas() to display fields that are down the hierarchy)
			$this->dtgFichases->MetaAddColumn('Id');
			$this->dtgFichases->MetaAddColumn(QQN::Fichas()->IdMarcaObject);
			$this->dtgFichases->MetaAddColumn(QQN::Fichas()->IdTiposObject);
			$this->dtgFichases->MetaAddColumn(QQN::Fichas()->IdModeloObject);
			$this->dtgFichases->MetaAddColumn(QQN::Fichas()->IdVersionObject);
			$this->dtgFichases->MetaAddColumn(QQN::Fichas()->IdPaisObject);
			$this->dtgFichases->MetaAddColumn('IdSeguro');
			$this->dtgFichases->MetaAddColumn('Descripcion');
			$this->dtgFichases->MetaAddColumn('Precio');
			$this->dtgFichases->MetaAddColumn('Anio');
			$this->dtgFichases->MetaAddColumn('Combustible');
			$this->dtgFichases->MetaAddColumn('Cilindrada');
			$this->dtgFichases->MetaAddColumn('Cilindros');
			$this->dtgFichases->MetaAddColumn('PotenciaMaxima');
			$this->dtgFichases->MetaAddColumn('ParMotorTorque');
			$this->dtgFichases->MetaAddColumn('Posicion');
			$this->dtgFichases->MetaAddColumn('Alimentacion');
			$this->dtgFichases->MetaAddColumn('MotorShort');
			$this->dtgFichases->MetaAddColumn('Valvulas');
			$this->dtgFichases->MetaAddColumn('Tipo');
			$this->dtgFichases->MetaAddColumn('Marchas');
			$this->dtgFichases->MetaAddColumn('Traccion');
			$this->dtgFichases->MetaAddColumn('VelocidadMaxima');
			$this->dtgFichases->MetaAddColumn('Aceleracion0100');
			$this->dtgFichases->MetaAddColumn('ConsumoUrbano');
			$this->dtgFichases->MetaAddColumn('ConsumoInterurbano');
			$this->dtgFichases->MetaAddColumn('ConsumoMixto');
			$this->dtgFichases->MetaAddColumn('Puertas');
			$this->dtgFichases->MetaAddColumn('Plazas');
			$this->dtgFichases->MetaAddColumn('FilasDeAsientos');
			$this->dtgFichases->MetaAddColumn('InfoEjes');
			$this->dtgFichases->MetaAddColumn('Peso');
			$this->dtgFichases->MetaAddColumn('CapacidadBaul');
			$this->dtgFichases->MetaAddColumn('CapacidadTanque');
			$this->dtgFichases->MetaAddColumn('CapacidadCarga');
			$this->dtgFichases->MetaAddColumn('FrenosDelanteros');
			$this->dtgFichases->MetaAddColumn('FrenosTraseros');
			$this->dtgFichases->MetaAddColumn('Neumaticos');
			$this->dtgFichases->MetaAddColumn('SuspensionDelantera');
			$this->dtgFichases->MetaAddColumn('SuspensionTrasera');
			$this->dtgFichases->MetaAddColumn(QQN::Fichas()->IdEstadoObject);
			$this->dtgFichases->MetaAddColumn('Procesada');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// fichas_list.tpl.php as the included HTML template file
	FichasListForm::Run('FichasListForm');
?>