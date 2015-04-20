<?php
	// Load the QCubed Development Framework
require('qcubed/includes/prepend.inc.php');

class BackupDbForm extends QForm {
    protected $intIdPais;
    protected $objXmlPanel;


    protected function Form_Run() {
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {

    }
}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// fichas_list.tpl.php as the included HTML template file
BackupDbForm::Run('BackupDbForm');
?>
