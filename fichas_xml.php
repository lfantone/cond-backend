<?php
// Load the QCubed Development Framework
require('qcubed/includes/prepend.inc.php');

require ('XmlConduciendoPanel.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
 * of the Fichas class.  It uses the code-generated
 * FichasMetaControl class, which has meta-methods to help with
 * easily creating/defining controls to modify the fields of a Fichas columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_edit.php AND
 * fichas_edit.tpl.php out of this Form Drafts directory.
 *
 * @package My Application
 * @subpackage Drafts
 */
class FichasXmlForm extends QForm {
    protected $intIdFichas;
    protected $objXmlPanel;

    protected function Form_Run() {
        // Security check for ALLOW_REMOTE_ADMIN
        // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
        QApplication::CheckRemoteAdmin();
    }
    
    protected function Form_Create() {

        if (QApplication::QueryString('intId')) {
            $this->intIdFichas = QApplication::QueryString('intId');
        } else {
            throw new QCallerException("ERROR: Se necesita el ID de la ficha para generar el XML.");
        }

        $this->objXmlPanel = new XmlConduciendoPanel($this, $this->intIdFichas);

    }

}

FichasXmlForm::Run('FichasXmlForm');

