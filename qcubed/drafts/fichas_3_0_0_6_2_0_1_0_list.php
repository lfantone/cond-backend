<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Fichas30062010 class.  It uses the code-generated
	 * Fichas30062010DataGrid control which has meta-methods to help with
	 * easily creating/defining Fichas30062010 columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_3_0_0_6_2_0_1_0_list.php AND
	 * fichas_3_0_0_6_2_0_1_0_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class Fichas30062010ListForm extends QForm {
		// Local instance of the Meta DataGrid to list Fichas30062010s
		protected $dtgFichas30062010s;

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
			$this->dtgFichas30062010s = new Fichas30062010DataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFichas30062010s->CssClass = 'datagrid';
			$this->dtgFichas30062010s->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFichas30062010s->Paginator = new QPaginator($this->dtgFichas30062010s);
			$this->dtgFichas30062010s->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/fichas_30062010_edit.php';
			$this->dtgFichas30062010s->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for fichas_30062010's properties, or you
			// can traverse down QQN::fichas_30062010() to display fields that are down the hierarchy)
			$this->dtgFichas30062010s->MetaAddColumn('Id');
			$this->dtgFichas30062010s->MetaAddColumn('IdMarca');
			$this->dtgFichas30062010s->MetaAddColumn('IdTipos');
			$this->dtgFichas30062010s->MetaAddColumn('IdModelo');
			$this->dtgFichas30062010s->MetaAddColumn('IdVersion');
			$this->dtgFichas30062010s->MetaAddColumn('Descripcion');
			$this->dtgFichas30062010s->MetaAddColumn('Precio');
			$this->dtgFichas30062010s->MetaAddColumn('Anio');
			$this->dtgFichas30062010s->MetaAddColumn('Combustible');
			$this->dtgFichas30062010s->MetaAddColumn('Cilindrada');
			$this->dtgFichas30062010s->MetaAddColumn('Cilindros');
			$this->dtgFichas30062010s->MetaAddColumn('PotenciaMaxima');
			$this->dtgFichas30062010s->MetaAddColumn('ParMotorTorque');
			$this->dtgFichas30062010s->MetaAddColumn('Posicion');
			$this->dtgFichas30062010s->MetaAddColumn('Alimentacion');
			$this->dtgFichas30062010s->MetaAddColumn('MotorShort');
			$this->dtgFichas30062010s->MetaAddColumn('Valvulas');
			$this->dtgFichas30062010s->MetaAddColumn('Tipo');
			$this->dtgFichas30062010s->MetaAddColumn('Marchas');
			$this->dtgFichas30062010s->MetaAddColumn('Traccion');
			$this->dtgFichas30062010s->MetaAddColumn('VelocidadMaxima');
			$this->dtgFichas30062010s->MetaAddColumn('Aceleracion0100');
			$this->dtgFichas30062010s->MetaAddColumn('ConsumoUrbano');
			$this->dtgFichas30062010s->MetaAddColumn('ConsumoInterurbano');
			$this->dtgFichas30062010s->MetaAddColumn('ConsumoMixto');
			$this->dtgFichas30062010s->MetaAddColumn('Puertas');
			$this->dtgFichas30062010s->MetaAddColumn('Plazas');
			$this->dtgFichas30062010s->MetaAddColumn('FilasDeAsientos');
			$this->dtgFichas30062010s->MetaAddColumn('InfoEjes');
			$this->dtgFichas30062010s->MetaAddColumn('Peso');
			$this->dtgFichas30062010s->MetaAddColumn('CapacidadBaul');
			$this->dtgFichas30062010s->MetaAddColumn('CapacidadTanque');
			$this->dtgFichas30062010s->MetaAddColumn('CapacidadCarga');
			$this->dtgFichas30062010s->MetaAddColumn('FrenosDelanteros');
			$this->dtgFichas30062010s->MetaAddColumn('FrenosTraseros');
			$this->dtgFichas30062010s->MetaAddColumn('Neumaticos');
			$this->dtgFichas30062010s->MetaAddColumn('SuspensionDelantera');
			$this->dtgFichas30062010s->MetaAddColumn('SuspensionTrasera');
			$this->dtgFichas30062010s->MetaAddColumn('IdEstado');
			$this->dtgFichas30062010s->MetaAddColumn('Procesada');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// fichas_3_0_0_6_2_0_1_0_list.tpl.php as the included HTML template file
	Fichas30062010ListForm::Run('Fichas30062010ListForm');
?>