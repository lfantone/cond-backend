<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the FichasCopy class.  It uses the code-generated
	 * FichasCopyDataGrid control which has meta-methods to help with
	 * easily creating/defining FichasCopy columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_copy_list.php AND
	 * fichas_copy_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FichasCopyListForm extends QForm {
		// Local instance of the Meta DataGrid to list FichasCopies
		protected $dtgFichasCopies;

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
			$this->dtgFichasCopies = new FichasCopyDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFichasCopies->CssClass = 'datagrid';
			$this->dtgFichasCopies->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFichasCopies->Paginator = new QPaginator($this->dtgFichasCopies);
			$this->dtgFichasCopies->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/fichas_copy_edit.php';
			$this->dtgFichasCopies->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for fichas_copy's properties, or you
			// can traverse down QQN::fichas_copy() to display fields that are down the hierarchy)
			$this->dtgFichasCopies->MetaAddColumn('Id');
			$this->dtgFichasCopies->MetaAddColumn('IdMarca');
			$this->dtgFichasCopies->MetaAddColumn('IdTipos');
			$this->dtgFichasCopies->MetaAddColumn('IdModelo');
			$this->dtgFichasCopies->MetaAddColumn('IdVersion');
			$this->dtgFichasCopies->MetaAddColumn('Descripcion');
			$this->dtgFichasCopies->MetaAddColumn('Precio');
			$this->dtgFichasCopies->MetaAddColumn('Combustible');
			$this->dtgFichasCopies->MetaAddColumn('Cilindrada');
			$this->dtgFichasCopies->MetaAddColumn('Cilindros');
			$this->dtgFichasCopies->MetaAddColumn('PotenciaMaxima');
			$this->dtgFichasCopies->MetaAddColumn('ParMotorTorque');
			$this->dtgFichasCopies->MetaAddColumn('Posicion');
			$this->dtgFichasCopies->MetaAddColumn('Alimentacion');
			$this->dtgFichasCopies->MetaAddColumn('Valvulas');
			$this->dtgFichasCopies->MetaAddColumn('Tipo');
			$this->dtgFichasCopies->MetaAddColumn('Marchas');
			$this->dtgFichasCopies->MetaAddColumn('Traccion');
			$this->dtgFichasCopies->MetaAddColumn('VelocidadMaxima');
			$this->dtgFichasCopies->MetaAddColumn('Aceleracion0100');
			$this->dtgFichasCopies->MetaAddColumn('ConsumoUrbano');
			$this->dtgFichasCopies->MetaAddColumn('ConsumoInterurbano');
			$this->dtgFichasCopies->MetaAddColumn('ConsumoMixto');
			$this->dtgFichasCopies->MetaAddColumn('Puertas');
			$this->dtgFichasCopies->MetaAddColumn('Plazas');
			$this->dtgFichasCopies->MetaAddColumn('FilasDeAsientos');
			$this->dtgFichasCopies->MetaAddColumn('InfoEjes');
			$this->dtgFichasCopies->MetaAddColumn('Peso');
			$this->dtgFichasCopies->MetaAddColumn('CapacidadBaul');
			$this->dtgFichasCopies->MetaAddColumn('CapacidadTanque');
			$this->dtgFichasCopies->MetaAddColumn('CapacidadCarga');
			$this->dtgFichasCopies->MetaAddColumn('FrenosDelanteros');
			$this->dtgFichasCopies->MetaAddColumn('FrenosTraseros');
			$this->dtgFichasCopies->MetaAddColumn('Neumaticos');
			$this->dtgFichasCopies->MetaAddColumn('SuspensionDelantera');
			$this->dtgFichasCopies->MetaAddColumn('SuspensionTrasera');
			$this->dtgFichasCopies->MetaAddColumn('IdEstado');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// fichas_copy_list.tpl.php as the included HTML template file
	FichasCopyListForm::Run('FichasCopyListForm');
?>