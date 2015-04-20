<?php
	require(__DATAGEN_META_CONTROLS__ . '/AutoresMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Autores class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Autores object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AutoresMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class AutoresMetaControl extends AutoresMetaControlGen {
		public function SaveAutores() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objAutores->Nombre = $this->txtNombre->Text;
				if ($this->txtEmail) $this->objAutores->Email = $this->txtEmail->Text;
				if ($this->txtPassword) $this->objAutores->Password = md5($this->txtPassword->Text);
				if ($this->txtIdGrupo) $this->objAutores->IdGrupo = $this->txtIdGrupo->Text;
				if ($this->chkSuperadmin) $this->objAutores->Superadmin = $this->chkSuperadmin->Checked;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Autores object
				$this->objAutores->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>
