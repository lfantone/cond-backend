<?php
require(__DATAGEN_META_CONTROLS__ . '/FichasMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * Fichas class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single Fichas object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a FichasMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My Application
 * @subpackage MetaControls
 */
class FichasMetaControl extends FichasMetaControlGen {


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
            $this->lblId->Text = $this->objFichas->Id;
        else
            $this->lblId->Text = 'N/A';
        return $this->lblId;
    }

    /**
     * Create and setup QListBox lstIdMarcaObject
     * @param string $strControlId optional ControlId to use
     * @return QListBox
     */
    public function lstIdMarcaObject_Create($strControlId = null) {
        $this->lstIdMarcaObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstIdMarcaObject->Name = QApplication::Translate('Marca');
        $this->lstIdMarcaObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstIdMarcaObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objIdMarcaObjectArray = Marcas::LoadAll();
        if ($objIdMarcaObjectArray) foreach ($objIdMarcaObjectArray as $objIdMarcaObject) {
                $objListItem = new QListItem($objIdMarcaObject->__toString(), $objIdMarcaObject->Id);
                if (($this->objFichas->IdMarcaObject) && ($this->objFichas->IdMarcaObject->Id == $objIdMarcaObject->Id))
                    $objListItem->Selected = true;
                $this->lstIdMarcaObject->AddItem($objListItem);
            }
        return $this->lstIdMarcaObject;
    }

    /**
     * Create and setup QLabel lblIdMarca
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblIdMarca_Create($strControlId = null) {
        $this->lblIdMarca = new QLabel($this->objParentObject, $strControlId);
        $this->lblIdMarca->Name = QApplication::Translate('Id Marca Object');
        $this->lblIdMarca->Text = ($this->objFichas->IdMarcaObject) ? $this->objFichas->IdMarcaObject->__toString() : null;
        $this->lblIdMarca->Required = true;
        return $this->lblIdMarca;
    }

    public function lstIdTiposObject_Create($strControlId = null) {
        $this->lstIdTiposObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstIdTiposObject->Name = QApplication::Translate('Tipo');
        $this->lstIdTiposObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstIdTiposObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objIdTiposObjectArray = Tipos::LoadAll();
        if ($objIdTiposObjectArray) foreach ($objIdTiposObjectArray as $objIdTiposObject) {
            $objListItem = new QListItem($objIdTiposObject->__toString(), $objIdTiposObject->Id);
            if (($this->objFichas->IdTiposObject) && ($this->objFichas->IdTiposObject->Id == $objIdTiposObject->Id))
                $objListItem->Selected = true;
            $this->lstIdTiposObject->AddItem($objListItem);
        }
        return $this->lstIdTiposObject;
    }

    /**
     * Create and setup QListBox lstIdModeloObject
     * @param string $strControlId optional ControlId to use
     * @return QListBox
     */
    public function lstIdModeloObject_Create($strControlId = null) {
        if (!$intIdPais = QApplication::QueryString('id_pais'))
            $intIdPais = 2;
        if ($this->objFichas->IdPais)
            $intIdPais = $this->objFichas->IdPais;
        $this->lstIdModeloObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstIdModeloObject->Name = QApplication::Translate('Modelo');
        $this->lstIdModeloObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstIdModeloObject->AddItem(QApplication::Translate('- Select One -'), null);
        #$objIdModeloObjectArray = Modelo::LoadAll();
        $objIdModeloObjectArray = Modelo::QueryArray(QQ::Equal(QQN::Modelo()->IdPais, $intIdPais));
        if ($objIdModeloObjectArray) foreach ($objIdModeloObjectArray as $objIdModeloObject) {
            
            $objListItem = new QListItem(($objIdModeloObject->IdPais == 3 ?'Mex':substr(utf8_encode($objIdModeloObject->IdPaisObject->Nombre),0,3)).' '. $objIdModeloObject->__toString(), $objIdModeloObject->IdModelo);
            if (($this->objFichas->IdModeloObject) && ($this->objFichas->IdModeloObject->IdModelo == $objIdModeloObject->IdModelo))
                $objListItem->Selected = true;
            $this->lstIdModeloObject->AddItem($objListItem);
        }
        return $this->lstIdModeloObject;
    }

    /**
     * Create and setup QListBox lstIdVersionObject
     * @param string $strControlId optional ControlId to use
     * @return QListBox
     */
    public function lstIdVersionObject_Create($strControlId = null) {
        $this->lstIdVersionObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstIdVersionObject->Name = QApplication::Translate('Version');
        $this->lstIdVersionObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstIdVersionObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objIdVersionObjectArray = Version::LoadAll();
        if ($objIdVersionObjectArray) foreach ($objIdVersionObjectArray as $objIdVersionObject) {
            $objListItem = new QListItem($objIdVersionObject->__toString(), $objIdVersionObject->IdVersion);
            if (($this->objFichas->IdVersionObject) && ($this->objFichas->IdVersionObject->IdVersion == $objIdVersionObject->IdVersion))
                $objListItem->Selected = true;
            $this->lstIdVersionObject->AddItem($objListItem);
        }
        return $this->lstIdVersionObject;
    }

	/**
	 * Create and setup QListBox lstIdPaisObject
	 * @param string $strControlId optional ControlId to use
	 * @return QListBox
	 */
	public function lstIdPaisObject_Create($strControlId = null) {
		$this->lstIdPaisObject = new QListBox($this->objParentObject, $strControlId);
		$this->lstIdPaisObject->Name = QApplication::Translate('Pais');
		$this->lstIdPaisObject->Required = true;
		if (!$this->blnEditMode)
			$this->lstIdPaisObject->AddItem(QApplication::Translate('- Select One -'), null);
		$objIdPaisObjectArray = Paises::LoadAll();
		if ($objIdPaisObjectArray) foreach ($objIdPaisObjectArray as $objIdPaisObject) {
			$objListItem = new QListItem($objIdPaisObject->__toString(), $objIdPaisObject->Id);
			if (($this->objFichas->IdPaisObject) && ($this->objFichas->IdPaisObject->Id == $objIdPaisObject->Id)) {
				$objListItem->Selected = true;
			} elseif ((int)QApplication::QueryString('id_pais') == $objIdPaisObject->Id) {
				$objListItem->Selected = true;
			}
			$this->lstIdPaisObject->AddItem($objListItem);
		}
		return $this->lstIdPaisObject;
	}

    
    /**
     * Create and setup QTextBox txtDescripcion
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtDescripcion_Create($strControlId = null) {
        $this->txtDescripcion = new QTextBox($this->objParentObject, $strControlId);
        $this->txtDescripcion->Name = QApplication::Translate('Descripcion');
        $this->txtDescripcion->Text = $this->objFichas->Descripcion;
        $this->txtDescripcion->Required = true;
        $this->txtDescripcion->TextMode = QTextMode::MultiLine;
        return $this->txtDescripcion;
    }

    /**
     * Create and setup QLabel lblDescripcion
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblDescripcion_Create($strControlId = null) {
        $this->lblDescripcion = new QLabel($this->objParentObject, $strControlId);
        $this->lblDescripcion->Name = QApplication::Translate('Descripcion');
        $this->lblDescripcion->Text = $this->objFichas->Descripcion;
        $this->lblDescripcion->Required = true;
        return $this->lblDescripcion;
    }

		
    /**
     * Create and setup QTextBox txtCombustible
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtCombustible_Create($strControlId = null) {
        $this->txtCombustible = new QTextBox($this->objParentObject, $strControlId);
        $this->txtCombustible->Name = QApplication::Translate('Combustible');
        $this->txtCombustible->Text = $this->objFichas->Combustible;
        $this->txtCombustible->Required = false;
        $this->txtCombustible->MaxLength = Fichas::CombustibleMaxLength;
        return $this->txtCombustible;
    }

    /**
     * Create and setup QLabel lblCombustible
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblCombustible_Create($strControlId = null) {
        $this->lblCombustible = new QLabel($this->objParentObject, $strControlId);
        $this->lblCombustible->Name = QApplication::Translate('Combustible');
        $this->lblCombustible->Text = $this->objFichas->Combustible;
        $this->lblCombustible->Required = false;
        return $this->lblCombustible;
    }

    /**
     * Create and setup QTextBox txtCilindrada
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtCilindrada_Create($strControlId = null) {
        $this->txtCilindrada = new QTextBox($this->objParentObject, $strControlId);
        $this->txtCilindrada->Name = QApplication::Translate('Cilindrada (Cm3 o Lts.)');
        $this->txtCilindrada->Text = $this->objFichas->Cilindrada;
        $this->txtCilindrada->Required = false;
        $this->txtCilindrada->MaxLength = Fichas::CilindradaMaxLength;
        return $this->txtCilindrada;
    }

    /**
     * Create and setup QLabel lblCilindrada
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblCilindrada_Create($strControlId = null) {
        $this->lblCilindrada = new QLabel($this->objParentObject, $strControlId);
        $this->lblCilindrada->Name = QApplication::Translate('Cilindrada');
        $this->lblCilindrada->Text = $this->objFichas->Cilindrada;
        $this->lblCilindrada->Required = false;
        return $this->lblCilindrada;
    }

    /**
     * Create and setup QTextBox txtCilindros
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtCilindros_Create($strControlId = null) {
        $this->txtCilindros = new QTextBox($this->objParentObject, $strControlId);
        $this->txtCilindros->Name = QApplication::Translate('Cilindros');
        $this->txtCilindros->Text = $this->objFichas->Cilindros;
        $this->txtCilindros->Required = false;
        $this->txtCilindros->MaxLength = Fichas::CilindrosMaxLength;
        return $this->txtCilindros;
    }

    /**
     * Create and setup QLabel lblCilindros
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblCilindros_Create($strControlId = null) {
        $this->lblCilindros = new QLabel($this->objParentObject, $strControlId);
        $this->lblCilindros->Name = QApplication::Translate('Cilindros');
        $this->lblCilindros->Text = $this->objFichas->Cilindros;
        $this->lblCilindros->Required = false;
        return $this->lblCilindros;
    }

    /**
     * Create and setup QTextBox txtPotenciaMaxima
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtPotenciaMaxima_Create($strControlId = null) {
        $this->txtPotenciaMaxima = new QTextBox($this->objParentObject, $strControlId);
        $this->txtPotenciaMaxima->Name = QApplication::Translate('Potencia Maxima (Cv) ');
        $this->txtPotenciaMaxima->Text = $this->objFichas->PotenciaMaxima;
        $this->txtPotenciaMaxima->Required = false;
        $this->txtPotenciaMaxima->MaxLength = Fichas::PotenciaMaximaMaxLength;
        return $this->txtPotenciaMaxima;
    }

    /**
     * Create and setup QLabel lblPotenciaMaxima
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblPotenciaMaxima_Create($strControlId = null) {
        $this->lblPotenciaMaxima = new QLabel($this->objParentObject, $strControlId);
        $this->lblPotenciaMaxima->Name = QApplication::Translate('Potencia Maxima');
        $this->lblPotenciaMaxima->Text = $this->objFichas->PotenciaMaxima;
        $this->lblPotenciaMaxima->Required = false;
        return $this->lblPotenciaMaxima;
    }

    /**
     * Create and setup QTextBox txtParMotorTorque
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtParMotorTorque_Create($strControlId = null) {
        $this->txtParMotorTorque = new QTextBox($this->objParentObject, $strControlId);
        $this->txtParMotorTorque->Name = QApplication::Translate('Par Motor/Torque (Nm/Rpm) ');
        $this->txtParMotorTorque->Text = $this->objFichas->ParMotorTorque;
        $this->txtParMotorTorque->Required = false;
        $this->txtParMotorTorque->MaxLength = Fichas::ParMotorTorqueMaxLength;
        return $this->txtParMotorTorque;
    }

    /**
     * Create and setup QLabel lblParMotorTorque
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblParMotorTorque_Create($strControlId = null) {
        $this->lblParMotorTorque = new QLabel($this->objParentObject, $strControlId);
        $this->lblParMotorTorque->Name = QApplication::Translate('Par Motor Torque');
        $this->lblParMotorTorque->Text = $this->objFichas->ParMotorTorque;
        $this->lblParMotorTorque->Required = false;
        return $this->lblParMotorTorque;
    }

    /**
     * Create and setup QTextBox txtPosicion
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtPosicion_Create($strControlId = null) {
        $this->txtPosicion = new QTextBox($this->objParentObject, $strControlId);
        $this->txtPosicion->Name = QApplication::Translate('Posici&oacute;n');
        $this->txtPosicion->Text = $this->objFichas->Posicion;
        $this->txtPosicion->Required = false;
        $this->txtPosicion->MaxLength = Fichas::PosicionMaxLength;
        return $this->txtPosicion;
    }

    /**
     * Create and setup QLabel lblPosicion
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblPosicion_Create($strControlId = null) {
        $this->lblPosicion = new QLabel($this->objParentObject, $strControlId);
        $this->lblPosicion->Name = QApplication::Translate('Posici&oacute;n');
        $this->lblPosicion->Text = $this->objFichas->Posicion;
        $this->lblPosicion->Required = false;
        return $this->lblPosicion;
    }

    /**
     * Create and setup QTextBox txtAlimentacion
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAlimentacion_Create($strControlId = null) {
        $this->txtAlimentacion = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAlimentacion->Name = QApplication::Translate('Alimentaci&oacute;n');
        $this->txtAlimentacion->Text = $this->objFichas->Alimentacion;
        $this->txtAlimentacion->Required = false;
        $this->txtAlimentacion->MaxLength = Fichas::AlimentacionMaxLength;
        return $this->txtAlimentacion;
    }

    /**
     * Create and setup QLabel lblAlimentacion
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAlimentacion_Create($strControlId = null) {
        $this->lblAlimentacion = new QLabel($this->objParentObject, $strControlId);
        $this->lblAlimentacion->Name = QApplication::Translate('Alimentacion');
        $this->lblAlimentacion->Text = $this->objFichas->Alimentacion;
        $this->lblAlimentacion->Required = false;
        return $this->lblAlimentacion;
    }

    /**
     * Create and setup QTextBox txtRelacionDeCompresion
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
//    public function txtRelacionDeCompresion_Create($strControlId = null) {
//        $this->txtRelacionDeCompresion = new QTextBox($this->objParentObject, $strControlId);
//        $this->txtRelacionDeCompresion->Name = QApplication::Translate('Relacion De Compresi&oacute;n');
//        $this->txtRelacionDeCompresion->Text = $this->objFichas->RelacionDeCompresion;
//        $this->txtRelacionDeCompresion->Required = false;
//        $this->txtRelacionDeCompresion->MaxLength = Fichas::RelacionDeCompresionMaxLength;
//        return $this->txtRelacionDeCompresion;
//    }
//
//    /**
//     * Create and setup QLabel lblRelacionDeCompresion
//     * @param string $strControlId optional ControlId to use
//     * @return QLabel
//     */
//    public function lblRelacionDeCompresion_Create($strControlId = null) {
//        $this->lblRelacionDeCompresion = new QLabel($this->objParentObject, $strControlId);
//        $this->lblRelacionDeCompresion->Name = QApplication::Translate('Relacion De Compresion');
//        $this->lblRelacionDeCompresion->Text = $this->objFichas->RelacionDeCompresion;
//        $this->lblRelacionDeCompresion->Required = false;
//        return $this->lblRelacionDeCompresion;
//    }

    /**
     * Create and setup QTextBox txtValvulas
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtValvulas_Create($strControlId = null) {
        $this->txtValvulas = new QTextBox($this->objParentObject, $strControlId);
        $this->txtValvulas->Name = QApplication::Translate('Valvulas');
        $this->txtValvulas->Text = $this->objFichas->Valvulas;
        $this->txtValvulas->Required = false;
        $this->txtValvulas->MaxLength = Fichas::ValvulasMaxLength;
        return $this->txtValvulas;
    }

    /**
     * Create and setup QLabel lblValvulas
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblValvulas_Create($strControlId = null) {
        $this->lblValvulas = new QLabel($this->objParentObject, $strControlId);
        $this->lblValvulas->Name = QApplication::Translate('Valvulas');
        $this->lblValvulas->Text = $this->objFichas->Valvulas;
        $this->lblValvulas->Required = false;
        return $this->lblValvulas;
    }

    /**
     * Create and setup QTextBox txtTipo
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtTipo_Create($strControlId = null) {
        $this->txtTipo = new QTextBox($this->objParentObject, $strControlId);
        $this->txtTipo->Name = QApplication::Translate('Tipo');
        $this->txtTipo->Text = $this->objFichas->Tipo;
        $this->txtTipo->Required = false;
        $this->txtTipo->MaxLength = Fichas::TipoMaxLength;
        return $this->txtTipo;
    }

    /**
     * Create and setup QLabel lblTipo
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblTipo_Create($strControlId = null) {
        $this->lblTipo = new QLabel($this->objParentObject, $strControlId);
        $this->lblTipo->Name = QApplication::Translate('Tipo');
        $this->lblTipo->Text = $this->objFichas->Tipo;
        $this->lblTipo->Required = false;
        return $this->lblTipo;
    }

    /**
     * Create and setup QTextBox txtMarchas
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtMarchas_Create($strControlId = null) {
        $this->txtMarchas = new QTextBox($this->objParentObject, $strControlId);
        $this->txtMarchas->Name = QApplication::Translate('Marchas');
        $this->txtMarchas->Text = $this->objFichas->Marchas;
        $this->txtMarchas->Required = false;
        $this->txtMarchas->MaxLength = Fichas::MarchasMaxLength;
        return $this->txtMarchas;
    }

    /**
     * Create and setup QLabel lblMarchas
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblMarchas_Create($strControlId = null) {
        $this->lblMarchas = new QLabel($this->objParentObject, $strControlId);
        $this->lblMarchas->Name = QApplication::Translate('Marchas');
        $this->lblMarchas->Text = $this->objFichas->Marchas;
        $this->lblMarchas->Required = false;
        return $this->lblMarchas;
    }

    /**
     * Create and setup QTextBox txtTraccion
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtTraccion_Create($strControlId = null) {
        $this->txtTraccion = new QTextBox($this->objParentObject, $strControlId);
        $this->txtTraccion->Name = QApplication::Translate('Traccion');
        $this->txtTraccion->Text = $this->objFichas->Traccion;
        $this->txtTraccion->Required = false;
        $this->txtTraccion->MaxLength = Fichas::TraccionMaxLength;
        return $this->txtTraccion;
    }

    /**
     * Create and setup QLabel lblTraccion
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblTraccion_Create($strControlId = null) {
        $this->lblTraccion = new QLabel($this->objParentObject, $strControlId);
        $this->lblTraccion->Name = QApplication::Translate('Traccion');
        $this->lblTraccion->Text = $this->objFichas->Traccion;
        $this->lblTraccion->Required = false;
        return $this->lblTraccion;
    }

    /**
     * Create and setup QTextBox txtVelocidadMaxima
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtVelocidadMaxima_Create($strControlId = null) {
        $this->txtVelocidadMaxima = new QTextBox($this->objParentObject, $strControlId);
        $this->txtVelocidadMaxima->Name = QApplication::Translate('Velocidad Maxima (Km/h) ');
        $this->txtVelocidadMaxima->Text = $this->objFichas->VelocidadMaxima;
        $this->txtVelocidadMaxima->Required = false;
        $this->txtVelocidadMaxima->MaxLength = Fichas::VelocidadMaximaMaxLength;
        return $this->txtVelocidadMaxima;
    }

    /**
     * Create and setup QLabel lblVelocidadMaxima
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblVelocidadMaxima_Create($strControlId = null) {
        $this->lblVelocidadMaxima = new QLabel($this->objParentObject, $strControlId);
        $this->lblVelocidadMaxima->Name = QApplication::Translate('Velocidad Maxima');
        $this->lblVelocidadMaxima->Text = $this->objFichas->VelocidadMaxima;
        $this->lblVelocidadMaxima->Required = false;
        return $this->lblVelocidadMaxima;
    }

    /**
     * Create and setup QTextBox txtAceleracion0100
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAceleracion0100_Create($strControlId = null) {
        $this->txtAceleracion0100 = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAceleracion0100->Name = QApplication::Translate('Aceleracion 0 a 100 km/h (Seg.) ');
        $this->txtAceleracion0100->Text = $this->objFichas->Aceleracion0100;
        $this->txtAceleracion0100->Required = false;
        $this->txtAceleracion0100->MaxLength = Fichas::Aceleracion0100MaxLength;
        return $this->txtAceleracion0100;
    }

    /**
     * Create and setup QLabel lblAceleracion0100
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAceleracion0100_Create($strControlId = null) {
        $this->lblAceleracion0100 = new QLabel($this->objParentObject, $strControlId);
        $this->lblAceleracion0100->Name = QApplication::Translate('Aceleracion 0100');
        $this->lblAceleracion0100->Text = $this->objFichas->Aceleracion0100;
        $this->lblAceleracion0100->Required = false;
        return $this->lblAceleracion0100;
    }

    /**
     * Create and setup QTextBox txtConsumoUrbano
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtConsumoUrbano_Create($strControlId = null) {
        $this->txtConsumoUrbano = new QTextBox($this->objParentObject, $strControlId);
        $this->txtConsumoUrbano->Name = QApplication::Translate('Consumo Urbano (Lts. c/100 Km)');
        $this->txtConsumoUrbano->Text = $this->objFichas->ConsumoUrbano;
        $this->txtConsumoUrbano->Required = false;
        $this->txtConsumoUrbano->MaxLength = Fichas::ConsumoUrbanoMaxLength;
        return $this->txtConsumoUrbano;
    }

    /**
     * Create and setup QLabel lblConsumoUrbano
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblConsumoUrbano_Create($strControlId = null) {
        $this->lblConsumoUrbano = new QLabel($this->objParentObject, $strControlId);
        $this->lblConsumoUrbano->Name = QApplication::Translate('Consumo Urbano');
        $this->lblConsumoUrbano->Text = $this->objFichas->ConsumoUrbano;
        $this->lblConsumoUrbano->Required = false;
        return $this->lblConsumoUrbano;
    }

    /**
     * Create and setup QTextBox txtConsumoInterurbano
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtConsumoInterurbano_Create($strControlId = null) {
        $this->txtConsumoInterurbano = new QTextBox($this->objParentObject, $strControlId);
        $this->txtConsumoInterurbano->Name = QApplication::Translate('Consumo Interurbano (Lts. c/100 Km)');
        $this->txtConsumoInterurbano->Text = $this->objFichas->ConsumoInterurbano;
        $this->txtConsumoInterurbano->Required = false;
        $this->txtConsumoInterurbano->MaxLength = Fichas::ConsumoInterurbanoMaxLength;
        return $this->txtConsumoInterurbano;
    }

    /**
     * Create and setup QLabel lblConsumoInterurbano
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblConsumoInterurbano_Create($strControlId = null) {
        $this->lblConsumoInterurbano = new QLabel($this->objParentObject, $strControlId);
        $this->lblConsumoInterurbano->Name = QApplication::Translate('Consumo Interurbano');
        $this->lblConsumoInterurbano->Text = $this->objFichas->ConsumoInterurbano;
        $this->lblConsumoInterurbano->Required = false;
        return $this->lblConsumoInterurbano;
    }

    /**
     * Create and setup QTextBox txtConsumoMixto
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtConsumoMixto_Create($strControlId = null) {
        $this->txtConsumoMixto = new QTextBox($this->objParentObject, $strControlId);
        $this->txtConsumoMixto->Name = QApplication::Translate('Consumo Mixto (Lts. c/100 Km)');
        $this->txtConsumoMixto->Text = $this->objFichas->ConsumoMixto;
        $this->txtConsumoMixto->Required = false;
        $this->txtConsumoMixto->MaxLength = Fichas::ConsumoMixtoMaxLength;
        return $this->txtConsumoMixto;
    }

    /**
     * Create and setup QLabel lblConsumoMixto
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblConsumoMixto_Create($strControlId = null) {
        $this->lblConsumoMixto = new QLabel($this->objParentObject, $strControlId);
        $this->lblConsumoMixto->Name = QApplication::Translate('Consumo Mixto');
        $this->lblConsumoMixto->Text = $this->objFichas->ConsumoMixto;
        $this->lblConsumoMixto->Required = false;
        return $this->lblConsumoMixto;
    }

    /**
     * Create and setup QTextBox txtEmisionesCo2
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
//    public function txtEmisionesCo2_Create($strControlId = null) {
//        $this->txtEmisionesCo2 = new QTextBox($this->objParentObject, $strControlId);
//        $this->txtEmisionesCo2->Name = QApplication::Translate('Emisiones de Co2');
//        $this->txtEmisionesCo2->Text = $this->objFichas->EmisionesCo2;
//        $this->txtEmisionesCo2->Required = false;
//        $this->txtEmisionesCo2->MaxLength = Fichas::EmisionesCo2MaxLength;
//        return $this->txtEmisionesCo2;
//    }
//
//    /**
//     * Create and setup QLabel lblEmisionesCo2
//     * @param string $strControlId optional ControlId to use
//     * @return QLabel
//     */
//    public function lblEmisionesCo2_Create($strControlId = null) {
//        $this->lblEmisionesCo2 = new QLabel($this->objParentObject, $strControlId);
//        $this->lblEmisionesCo2->Name = QApplication::Translate('Emisiones Co 2');
//        $this->lblEmisionesCo2->Text = $this->objFichas->EmisionesCo2;
//        $this->lblEmisionesCo2->Required = false;
//        return $this->lblEmisionesCo2;
//    }

    /**
     * Create and setup QTextBox txtPuertas
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtPuertas_Create($strControlId = null) {
        $this->txtPuertas = new QTextBox($this->objParentObject, $strControlId);
        $this->txtPuertas->Name = QApplication::Translate('Puertas');
        $this->txtPuertas->Text = $this->objFichas->Puertas;
        $this->txtPuertas->Required = false;
        $this->txtPuertas->MaxLength = Fichas::PuertasMaxLength;
        return $this->txtPuertas;
    }

    /**
     * Create and setup QLabel lblPuertas
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblPuertas_Create($strControlId = null) {
        $this->lblPuertas = new QLabel($this->objParentObject, $strControlId);
        $this->lblPuertas->Name = QApplication::Translate('Puertas');
        $this->lblPuertas->Text = $this->objFichas->Puertas;
        $this->lblPuertas->Required = false;
        return $this->lblPuertas;
    }

    /**
     * Create and setup QTextBox txtPlazas
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtPlazas_Create($strControlId = null) {
        $this->txtPlazas = new QTextBox($this->objParentObject, $strControlId);
        $this->txtPlazas->Name = QApplication::Translate('Plazas');
        $this->txtPlazas->Text = $this->objFichas->Plazas;
        $this->txtPlazas->Required = false;
        $this->txtPlazas->MaxLength = Fichas::PlazasMaxLength;
        return $this->txtPlazas;
    }

    /**
     * Create and setup QLabel lblPlazas
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblPlazas_Create($strControlId = null) {
        $this->lblPlazas = new QLabel($this->objParentObject, $strControlId);
        $this->lblPlazas->Name = QApplication::Translate('Plazas');
        $this->lblPlazas->Text = $this->objFichas->Plazas;
        $this->lblPlazas->Required = false;
        return $this->lblPlazas;
    }

    /**
     * Create and setup QTextBox txtFilasDeAsientos
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtFilasDeAsientos_Create($strControlId = null) {
        $this->txtFilasDeAsientos = new QTextBox($this->objParentObject, $strControlId);
        $this->txtFilasDeAsientos->Name = QApplication::Translate('Filas De Asientos');
        $this->txtFilasDeAsientos->Text = $this->objFichas->FilasDeAsientos;
        $this->txtFilasDeAsientos->Required = false;
        $this->txtFilasDeAsientos->MaxLength = Fichas::FilasDeAsientosMaxLength;
        return $this->txtFilasDeAsientos;
    }

    /**
     * Create and setup QLabel lblFilasDeAsientos
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblFilasDeAsientos_Create($strControlId = null) {
        $this->lblFilasDeAsientos = new QLabel($this->objParentObject, $strControlId);
        $this->lblFilasDeAsientos->Name = QApplication::Translate('Filas De Asientos');
        $this->lblFilasDeAsientos->Text = $this->objFichas->FilasDeAsientos;
        $this->lblFilasDeAsientos->Required = false;
        return $this->lblFilasDeAsientos;
    }

    /**
     * Create and setup QTextBox txtInfoEjes
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtInfoEjes_Create($strControlId = null) {
        $this->txtInfoEjes = new QTextBox($this->objParentObject, $strControlId);
        $this->txtInfoEjes->Name = QApplication::Translate('Largo/Ancho/Alto/Distancia entre ejes (mm)');
        $this->txtInfoEjes->Text = $this->objFichas->InfoEjes;
        $this->txtInfoEjes->Required = false;
        $this->txtInfoEjes->MaxLength = Fichas::InfoEjesMaxLength;
        return $this->txtInfoEjes;
    }

    /**
     * Create and setup QLabel lblInfoEjes
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblInfoEjes_Create($strControlId = null) {
        $this->lblInfoEjes = new QLabel($this->objParentObject, $strControlId);
        $this->lblInfoEjes->Name = QApplication::Translate('Largo/Ancho/Alto/Distancia entre ejes');
        $this->lblInfoEjes->Text = $this->objFichas->InfoEjes;
        $this->lblInfoEjes->Required = false;
        return $this->lblInfoEjes;
    }

    /**
     * Create and setup QTextBox txtPeso
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtPeso_Create($strControlId = null) {
        $this->txtPeso = new QTextBox($this->objParentObject, $strControlId);
        $this->txtPeso->Name = QApplication::Translate('Peso (Kg.)');
        $this->txtPeso->Text = $this->objFichas->Peso;
        $this->txtPeso->Required = false;
        $this->txtPeso->MaxLength = Fichas::PesoMaxLength;
        return $this->txtPeso;
    }

    /**
     * Create and setup QLabel lblPeso
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblPeso_Create($strControlId = null) {
        $this->lblPeso = new QLabel($this->objParentObject, $strControlId);
        $this->lblPeso->Name = QApplication::Translate('Peso');
        $this->lblPeso->Text = $this->objFichas->Peso;
        $this->lblPeso->Required = false;
        return $this->lblPeso;
    }

    /**
     * Create and setup QTextBox txtCapacidadBaul
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtCapacidadBaul_Create($strControlId = null) {
        $this->txtCapacidadBaul = new QTextBox($this->objParentObject, $strControlId);
        $this->txtCapacidadBaul->Name = QApplication::Translate('Capacidad del Baul (Dm3)');
        $this->txtCapacidadBaul->Text = $this->objFichas->CapacidadBaul;
        $this->txtCapacidadBaul->Required = false;
        $this->txtCapacidadBaul->MaxLength = Fichas::CapacidadBaulMaxLength;
        return $this->txtCapacidadBaul;
    }

    /**
     * Create and setup QLabel lblCapacidadBaul
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblCapacidadBaul_Create($strControlId = null) {
        $this->lblCapacidadBaul = new QLabel($this->objParentObject, $strControlId);
        $this->lblCapacidadBaul->Name = QApplication::Translate('Capacidad del Baul');
        $this->lblCapacidadBaul->Text = $this->objFichas->CapacidadBaul;
        $this->lblCapacidadBaul->Required = false;
        return $this->lblCapacidadBaul;
    }

    /**
     * Create and setup QTextBox txtCapacidadTanque
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtCapacidadTanque_Create($strControlId = null) {
        $this->txtCapacidadTanque = new QTextBox($this->objParentObject, $strControlId);
        $this->txtCapacidadTanque->Name = QApplication::Translate('Capacidad del tanque de combustible (Lts.)');
        $this->txtCapacidadTanque->Text = $this->objFichas->CapacidadTanque;
        $this->txtCapacidadTanque->Required = false;
        $this->txtCapacidadTanque->MaxLength = Fichas::CapacidadTanqueMaxLength;
        return $this->txtCapacidadTanque;
    }

    /**
     * Create and setup QLabel lblCapacidadTanque
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblCapacidadTanque_Create($strControlId = null) {
        $this->lblCapacidadTanque = new QLabel($this->objParentObject, $strControlId);
        $this->lblCapacidadTanque->Name = QApplication::Translate('Capacidad del tanque de combustible');
        $this->lblCapacidadTanque->Text = $this->objFichas->CapacidadTanque;
        $this->lblCapacidadTanque->Required = false;
        return $this->lblCapacidadTanque;
    }

    /**
     * Create and setup QTextBox txtInfoCajaCarga
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
//    public function txtInfoCajaCarga_Create($strControlId = null) {
//        $this->txtInfoCajaCarga = new QTextBox($this->objParentObject, $strControlId);
//        $this->txtInfoCajaCarga->Name = QApplication::Translate('Dimensiones de caja de cargas Largo/Ancho/Ancho entre caja de ruedas/Alto');
//        $this->txtInfoCajaCarga->Text = $this->objFichas->InfoCajaCarga;
//        $this->txtInfoCajaCarga->Required = false;
//        $this->txtInfoCajaCarga->MaxLength = Fichas::InfoCajaCargaMaxLength;
//        return $this->txtInfoCajaCarga;
//    }
//
//    /**
//     * Create and setup QLabel lblInfoCajaCarga
//     * @param string $strControlId optional ControlId to use
//     * @return QLabel
//     */
//    public function lblInfoCajaCarga_Create($strControlId = null) {
//        $this->lblInfoCajaCarga = new QLabel($this->objParentObject, $strControlId);
//        $this->lblInfoCajaCarga->Name = QApplication::Translate('Dimensiones de caja de cargas Largo/Ancho/Ancho entre caja de ruedas/Alto');
//        $this->lblInfoCajaCarga->Text = $this->objFichas->InfoCajaCarga;
//        $this->lblInfoCajaCarga->Required = false;
//        return $this->lblInfoCajaCarga;
//    }

    /**
     * Create and setup QTextBox txtVolumenCajaCarga
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
//    public function txtVolumenCajaCarga_Create($strControlId = null) {
//        $this->txtVolumenCajaCarga = new QTextBox($this->objParentObject, $strControlId);
//        $this->txtVolumenCajaCarga->Name = QApplication::Translate('Volumen de caja de carga ( m3 ) ');
//        $this->txtVolumenCajaCarga->Text = $this->objFichas->VolumenCajaCarga;
//        $this->txtVolumenCajaCarga->MaxLength = Fichas::VolumenCajaCargaMaxLength;
//        return $this->txtVolumenCajaCarga;
//    }
//
//    /**
//     * Create and setup QLabel lblVolumenCajaCarga
//     * @param string $strControlId optional ControlId to use
//     * @return QLabel
//     */
//    public function lblVolumenCajaCarga_Create($strControlId = null) {
//        $this->lblVolumenCajaCarga = new QLabel($this->objParentObject, $strControlId);
//        $this->lblVolumenCajaCarga->Name = QApplication::Translate('Volumen de caja de carga');
//        $this->lblVolumenCajaCarga->Text = $this->objFichas->VolumenCajaCarga;
//        return $this->lblVolumenCajaCarga;
//    }

    /**
     * Create and setup QTextBox txtCapacidadCarga
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtCapacidadCarga_Create($strControlId = null) {
        $this->txtCapacidadCarga = new QTextBox($this->objParentObject, $strControlId);
        $this->txtCapacidadCarga->Name = QApplication::Translate('Capacidad de Carga (Kg.)');
        $this->txtCapacidadCarga->Text = $this->objFichas->CapacidadCarga;
        $this->txtCapacidadCarga->Required = false;
        $this->txtCapacidadCarga->MaxLength = Fichas::CapacidadCargaMaxLength;
        return $this->txtCapacidadCarga;
    }

    /**
     * Create and setup QLabel lblCapacidadCarga
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblCapacidadCarga_Create($strControlId = null) {
        $this->lblCapacidadCarga = new QLabel($this->objParentObject, $strControlId);
        $this->lblCapacidadCarga->Name = QApplication::Translate('Capacidad de Carga');
        $this->lblCapacidadCarga->Text = $this->objFichas->CapacidadCarga;
        $this->lblCapacidadCarga->Required = false;
        return $this->lblCapacidadCarga;
    }

    /**
     * Create and setup QTextBox txtFrenosDelanteros
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtFrenosDelanteros_Create($strControlId = null) {
        $this->txtFrenosDelanteros = new QTextBox($this->objParentObject, $strControlId);
        $this->txtFrenosDelanteros->Name = QApplication::Translate('Frenos Delanteros');
        $this->txtFrenosDelanteros->Text = $this->objFichas->FrenosDelanteros;
        $this->txtFrenosDelanteros->Required = false;
        $this->txtFrenosDelanteros->MaxLength = Fichas::FrenosDelanterosMaxLength;
        return $this->txtFrenosDelanteros;
    }

    /**
     * Create and setup QLabel lblFrenosDelanteros
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblFrenosDelanteros_Create($strControlId = null) {
        $this->lblFrenosDelanteros = new QLabel($this->objParentObject, $strControlId);
        $this->lblFrenosDelanteros->Name = QApplication::Translate('Frenos Delanteros');
        $this->lblFrenosDelanteros->Text = $this->objFichas->FrenosDelanteros;
        $this->lblFrenosDelanteros->Required = false;
        return $this->lblFrenosDelanteros;
    }

    /**
     * Create and setup QTextBox txtFrenosTraseros
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtFrenosTraseros_Create($strControlId = null) {
        $this->txtFrenosTraseros = new QTextBox($this->objParentObject, $strControlId);
        $this->txtFrenosTraseros->Name = QApplication::Translate('Frenos Traseros');
        $this->txtFrenosTraseros->Text = $this->objFichas->FrenosTraseros;
        $this->txtFrenosTraseros->Required = false;
        $this->txtFrenosTraseros->MaxLength = Fichas::FrenosTraserosMaxLength;
        return $this->txtFrenosTraseros;
    }

    /**
     * Create and setup QLabel lblFrenosTraseros
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblFrenosTraseros_Create($strControlId = null) {
        $this->lblFrenosTraseros = new QLabel($this->objParentObject, $strControlId);
        $this->lblFrenosTraseros->Name = QApplication::Translate('Frenos Traseros');
        $this->lblFrenosTraseros->Text = $this->objFichas->FrenosTraseros;
        $this->lblFrenosTraseros->Required = false;
        return $this->lblFrenosTraseros;
    }

    /**
     * Create and setup QTextBox txtNeumaticos
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtNeumaticos_Create($strControlId = null) {
        $this->txtNeumaticos = new QTextBox($this->objParentObject, $strControlId);
        $this->txtNeumaticos->Name = QApplication::Translate('Neumaticos');
        $this->txtNeumaticos->Text = $this->objFichas->Neumaticos;
        $this->txtNeumaticos->Required = false;
        $this->txtNeumaticos->MaxLength = Fichas::NeumaticosMaxLength;
        return $this->txtNeumaticos;
    }

    /**
     * Create and setup QLabel lblNeumaticos
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblNeumaticos_Create($strControlId = null) {
        $this->lblNeumaticos = new QLabel($this->objParentObject, $strControlId);
        $this->lblNeumaticos->Name = QApplication::Translate('Neumaticos');
        $this->lblNeumaticos->Text = $this->objFichas->Neumaticos;
        $this->lblNeumaticos->Required = false;
        return $this->lblNeumaticos;
    }

    /**
     * Create and setup QTextBox txtSuspensionDelantera
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtSuspensionDelantera_Create($strControlId = null) {
        $this->txtSuspensionDelantera = new QTextBox($this->objParentObject, $strControlId);
        $this->txtSuspensionDelantera->Name = QApplication::Translate('Suspension Delantera');
        $this->txtSuspensionDelantera->Text = $this->objFichas->SuspensionDelantera;
        $this->txtSuspensionDelantera->Required = false;
        $this->txtSuspensionDelantera->MaxLength = Fichas::SuspensionDelanteraMaxLength;
        return $this->txtSuspensionDelantera;
    }

    /**
     * Create and setup QLabel lblSuspensionDelantera
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblSuspensionDelantera_Create($strControlId = null) {
        $this->lblSuspensionDelantera = new QLabel($this->objParentObject, $strControlId);
        $this->lblSuspensionDelantera->Name = QApplication::Translate('Suspension Delantera');
        $this->lblSuspensionDelantera->Text = $this->objFichas->SuspensionDelantera;
        $this->lblSuspensionDelantera->Required = false;
        return $this->lblSuspensionDelantera;
    }

    /**
     * Create and setup QTextBox txtSuspensionTrasera
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtSuspensionTrasera_Create($strControlId = null) {
        $this->txtSuspensionTrasera = new QTextBox($this->objParentObject, $strControlId);
        $this->txtSuspensionTrasera->Name = QApplication::Translate('Suspension Trasera');
        $this->txtSuspensionTrasera->Text = $this->objFichas->SuspensionTrasera;
        $this->txtSuspensionTrasera->Required = false;
        $this->txtSuspensionTrasera->MaxLength = Fichas::SuspensionTraseraMaxLength;
        return $this->txtSuspensionTrasera;
    }

    /**
     * Create and setup QLabel lblSuspensionTrasera
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblSuspensionTrasera_Create($strControlId = null) {
        $this->lblSuspensionTrasera = new QLabel($this->objParentObject, $strControlId);
        $this->lblSuspensionTrasera->Name = QApplication::Translate('Suspension Trasera');
        $this->lblSuspensionTrasera->Text = $this->objFichas->SuspensionTrasera;
        $this->lblSuspensionTrasera->Required = false;
        return $this->lblSuspensionTrasera;
    }

    /**
     * Create and setup QTextBox txtLucesAutomatico
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtLucesAutomatico_Create($strControlId = null) {
        $this->txtLucesAutomatico = new QTextBox($this->objParentObject, $strControlId);
        $this->txtLucesAutomatico->Name = QApplication::Translate('Accionamiento de luces automático');
        $this->txtLucesAutomatico->Text = $this->objFichas->LucesAutomatico;
        $this->txtLucesAutomatico->Required = false;
        $this->txtLucesAutomatico->MaxLength = Fichas::LucesAutomaticoMaxLength;
        return $this->txtLucesAutomatico;
    }

    /**
     * Create and setup QLabel lblLucesAutomatico
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblLucesAutomatico_Create($strControlId = null) {
        $this->lblLucesAutomatico = new QLabel($this->objParentObject, $strControlId);
        $this->lblLucesAutomatico->Name = QApplication::Translate('Accionamiento de luces automático');
        $this->lblLucesAutomatico->Text = $this->objFichas->LucesAutomatico;
        $this->lblLucesAutomatico->Required = false;
        return $this->lblLucesAutomatico;
    }

    /**
     * Create and setup QTextBox txtClimatizacion
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtClimatizacion_Create($strControlId = null) {
        $this->txtClimatizacion = new QTextBox($this->objParentObject, $strControlId);
        $this->txtClimatizacion->Name = QApplication::Translate('Climatizacion');
        $this->txtClimatizacion->Text = $this->objFichas->Climatizacion;
        $this->txtClimatizacion->MaxLength = Fichas::ClimatizacionMaxLength;
        return $this->txtClimatizacion;
    }

    /**
     * Create and setup QLabel lblClimatizacion
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblClimatizacion_Create($strControlId = null) {
        $this->lblClimatizacion = new QLabel($this->objParentObject, $strControlId);
        $this->lblClimatizacion->Name = QApplication::Translate('Climatizacion');
        $this->lblClimatizacion->Text = $this->objFichas->Climatizacion;
        return $this->lblClimatizacion;
    }

    /**
     * Create and setup QTextBox txtAlarmaLucesEncendidas
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAlarmaLucesEncendidas_Create($strControlId = null) {
        $this->txtAlarmaLucesEncendidas = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAlarmaLucesEncendidas->Name = QApplication::Translate('Alarma de Luces Encendidas');
        $this->txtAlarmaLucesEncendidas->Text = $this->objFichas->AlarmaLucesEncendidas;
        $this->txtAlarmaLucesEncendidas->MaxLength = Fichas::AlarmaLucesEncendidasMaxLength;
        return $this->txtAlarmaLucesEncendidas;
    }

    /**
     * Create and setup QLabel lblAlarmaLucesEncendidas
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAlarmaLucesEncendidas_Create($strControlId = null) {
        $this->lblAlarmaLucesEncendidas = new QLabel($this->objParentObject, $strControlId);
        $this->lblAlarmaLucesEncendidas->Name = QApplication::Translate('Alarma de Luces Encendidas');
        $this->lblAlarmaLucesEncendidas->Text = $this->objFichas->AlarmaLucesEncendidas;
        return $this->lblAlarmaLucesEncendidas;
    }

    /**
     * Create and setup QTextBox txtCritalesElectricos
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtCritalesElectricos_Create($strControlId = null) {
        $this->txtCritalesElectricos = new QTextBox($this->objParentObject, $strControlId);
        $this->txtCritalesElectricos->Name = QApplication::Translate('Alza cristales el&eacute;ctricos');
        $this->txtCritalesElectricos->Text = $this->objFichas->CritalesElectricos;
        $this->txtCritalesElectricos->Required = false;
        $this->txtCritalesElectricos->MaxLength = Fichas::CritalesElectricosMaxLength;
        return $this->txtCritalesElectricos;
    }

    /**
     * Create and setup QLabel lblCritalesElectricos
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblCritalesElectricos_Create($strControlId = null) {
        $this->lblCritalesElectricos = new QLabel($this->objParentObject, $strControlId);
        $this->lblCritalesElectricos->Name = QApplication::Translate('Alza cristales el&eacute;ctricos');
        $this->lblCritalesElectricos->Text = $this->objFichas->CritalesElectricos;
        $this->lblCritalesElectricos->Required = false;
        return $this->lblCritalesElectricos;
    }

    /**
     * Create and setup QTextBox txtAperturaBaul
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAperturaBaul_Create($strControlId = null) {
        $this->txtAperturaBaul = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAperturaBaul->Name = QApplication::Translate('Apertura de baúl desde el habitáculo');
        $this->txtAperturaBaul->Text = $this->objFichas->AperturaBaul;
        $this->txtAperturaBaul->Required = false;
        $this->txtAperturaBaul->MaxLength = Fichas::AperturaBaulMaxLength;
        return $this->txtAperturaBaul;
    }

    /**
     * Create and setup QLabel lblAperturaBaul
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAperturaBaul_Create($strControlId = null) {
        $this->lblAperturaBaul = new QLabel($this->objParentObject, $strControlId);
        $this->lblAperturaBaul->Name = QApplication::Translate('Apertura de baúl desde el habitáculo');
        $this->lblAperturaBaul->Text = $this->objFichas->AperturaBaul;
        $this->lblAperturaBaul->Required = false;
        return $this->lblAperturaBaul;
    }

    /**
     * Create and setup QTextBox txtAperturaTanque
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAperturaTanque_Create($strControlId = null) {
        $this->txtAperturaTanque = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAperturaTanque->Name = QApplication::Translate('Apertura de tanque de combustible desde el habit&aacute;culo');
        $this->txtAperturaTanque->Text = $this->objFichas->AperturaTanque;
        $this->txtAperturaTanque->Required = false;
        $this->txtAperturaTanque->MaxLength = Fichas::AperturaTanqueMaxLength;
        return $this->txtAperturaTanque;
    }

    /**
     * Create and setup QLabel lblAperturaTanque
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAperturaTanque_Create($strControlId = null) {
        $this->lblAperturaTanque = new QLabel($this->objParentObject, $strControlId);
        $this->lblAperturaTanque->Name = QApplication::Translate('Apertura Tanque');
        $this->lblAperturaTanque->Text = $this->objFichas->AperturaTanque;
        $this->lblAperturaTanque->Required = false;
        return $this->lblAperturaTanque;
    }

    /**
     * Create and setup QTextBox txtAsientosRegulablesAltura
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAsientosRegulablesAltura_Create($strControlId = null) {
        $this->txtAsientosRegulablesAltura = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAsientosRegulablesAltura->Name = QApplication::Translate('Asientos regulables en altura');
        $this->txtAsientosRegulablesAltura->Text = $this->objFichas->AsientosRegulablesAltura;
        $this->txtAsientosRegulablesAltura->Required = false;
        $this->txtAsientosRegulablesAltura->MaxLength = Fichas::AsientosRegulablesAlturaMaxLength;
        return $this->txtAsientosRegulablesAltura;
    }

    /**
     * Create and setup QLabel lblAsientosRegulablesAltura
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAsientosRegulablesAltura_Create($strControlId = null) {
        $this->lblAsientosRegulablesAltura = new QLabel($this->objParentObject, $strControlId);
        $this->lblAsientosRegulablesAltura->Name = QApplication::Translate('Asientos regulables en altura');
        $this->lblAsientosRegulablesAltura->Text = $this->objFichas->AsientosRegulablesAltura;
        $this->lblAsientosRegulablesAltura->Required = false;
        return $this->lblAsientosRegulablesAltura;
    }

    /**
     * Create and setup QTextBox txtAsientoTraseroRebatible
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAsientoTraseroRebatible_Create($strControlId = null) {
        $this->txtAsientoTraseroRebatible = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAsientoTraseroRebatible->Name = QApplication::Translate('Asiento Trasero Rebatible');
        $this->txtAsientoTraseroRebatible->Text = $this->objFichas->AsientoTraseroRebatible;
        $this->txtAsientoTraseroRebatible->Required = false;
        $this->txtAsientoTraseroRebatible->MaxLength = Fichas::AsientoTraseroRebatibleMaxLength;
        return $this->txtAsientoTraseroRebatible;
    }

    /**
     * Create and setup QLabel lblAsientoTraseroRebatible
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAsientoTraseroRebatible_Create($strControlId = null) {
        $this->lblAsientoTraseroRebatible = new QLabel($this->objParentObject, $strControlId);
        $this->lblAsientoTraseroRebatible->Name = QApplication::Translate('Asiento Trasero Rebatible');
        $this->lblAsientoTraseroRebatible->Text = $this->objFichas->AsientoTraseroRebatible;
        $this->lblAsientoTraseroRebatible->Required = false;
        return $this->lblAsientoTraseroRebatible;
    }

    /**
     * Create and setup QTextBox txtAsientosCalefaccionado
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAsientosCalefaccionado_Create($strControlId = null) {
        $this->txtAsientosCalefaccionado = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAsientosCalefaccionado->Name = QApplication::Translate('Asientos Calefaccionados');
        $this->txtAsientosCalefaccionado->Text = $this->objFichas->AsientosCalefaccionado;
        $this->txtAsientosCalefaccionado->Required = false;
        $this->txtAsientosCalefaccionado->MaxLength = Fichas::AsientosCalefaccionadoMaxLength;
        return $this->txtAsientosCalefaccionado;
    }

    /**
     * Create and setup QLabel lblAsientosCalefaccionado
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAsientosCalefaccionado_Create($strControlId = null) {
        $this->lblAsientosCalefaccionado = new QLabel($this->objParentObject, $strControlId);
        $this->lblAsientosCalefaccionado->Name = QApplication::Translate('Asientos Calefaccionados');
        $this->lblAsientosCalefaccionado->Text = $this->objFichas->AsientosCalefaccionado;
        $this->lblAsientosCalefaccionado->Required = false;
        return $this->lblAsientosCalefaccionado;
    }

    /**
     * Create and setup QTextBox txtAsientosAjustesElectronicos
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAsientosAjustesElectronicos_Create($strControlId = null) {
        $this->txtAsientosAjustesElectronicos = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAsientosAjustesElectronicos->Name = QApplication::Translate('Asientos con ajuste electronicos');
        $this->txtAsientosAjustesElectronicos->Text = $this->objFichas->AsientosAjustesElectronicos;
        $this->txtAsientosAjustesElectronicos->Required = false;
        $this->txtAsientosAjustesElectronicos->MaxLength = Fichas::AsientosAjustesElectronicosMaxLength;
        return $this->txtAsientosAjustesElectronicos;
    }

    /**
     * Create and setup QLabel lblAsientosAjustesElectronicos
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAsientosAjustesElectronicos_Create($strControlId = null) {
        $this->lblAsientosAjustesElectronicos = new QLabel($this->objParentObject, $strControlId);
        $this->lblAsientosAjustesElectronicos->Name = QApplication::Translate('Asientos con ajuste electronicos');
        $this->lblAsientosAjustesElectronicos->Text = $this->objFichas->AsientosAjustesElectronicos;
        $this->lblAsientosAjustesElectronicos->Required = false;
        return $this->lblAsientosAjustesElectronicos;
    }

    /**
     * Create and setup QTextBox txtAsientosDelButacaDeportiva
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAsientosDelButacaDeportiva_Create($strControlId = null) {
        $this->txtAsientosDelButacaDeportiva = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAsientosDelButacaDeportiva->Name = QApplication::Translate('Asientos delanteros con butaca deportiva');
        $this->txtAsientosDelButacaDeportiva->Text = $this->objFichas->AsientosDelButacaDeportiva;
        $this->txtAsientosDelButacaDeportiva->Required = false;
        $this->txtAsientosDelButacaDeportiva->MaxLength = Fichas::AsientosDelButacaDeportivaMaxLength;
        return $this->txtAsientosDelButacaDeportiva;
    }

    /**
     * Create and setup QLabel lblAsientosDelButacaDeportiva
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAsientosDelButacaDeportiva_Create($strControlId = null) {
        $this->lblAsientosDelButacaDeportiva = new QLabel($this->objParentObject, $strControlId);
        $this->lblAsientosDelButacaDeportiva->Name = QApplication::Translate('Asientos delanteros con butaca deportiva');
        $this->lblAsientosDelButacaDeportiva->Text = $this->objFichas->AsientosDelButacaDeportiva;
        $this->lblAsientosDelButacaDeportiva->Required = false;
        return $this->lblAsientosDelButacaDeportiva;
    }

    /**
     * Create and setup QTextBox txtAsientoDelBipartido
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAsientoDelBipartido_Create($strControlId = null) {
        $this->txtAsientoDelBipartido = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAsientoDelBipartido->Name = QApplication::Translate('Asiento delantero bipartido');
        $this->txtAsientoDelBipartido->Text = $this->objFichas->AsientoDelBipartido;
        $this->txtAsientoDelBipartido->Required = false;
        $this->txtAsientoDelBipartido->MaxLength = Fichas::AsientoDelBipartidoMaxLength;
        return $this->txtAsientoDelBipartido;
    }

    /**
     * Create and setup QLabel lblAsientoDelBipartido
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAsientoDelBipartido_Create($strControlId = null) {
        $this->lblAsientoDelBipartido = new QLabel($this->objParentObject, $strControlId);
        $this->lblAsientoDelBipartido->Name = QApplication::Translate('Asiento delantero bipartido');
        $this->lblAsientoDelBipartido->Text = $this->objFichas->AsientoDelBipartido;
        $this->lblAsientoDelBipartido->Required = false;
        return $this->lblAsientoDelBipartido;
    }

    /**
     * Create and setup QTextBox txtBotonStartStop
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtBotonStartStop_Create($strControlId = null) {
        $this->txtBotonStartStop = new QTextBox($this->objParentObject, $strControlId);
        $this->txtBotonStartStop->Name = QApplication::Translate('Boton Start/Stop');
        $this->txtBotonStartStop->Text = $this->objFichas->BotonStartStop;
        $this->txtBotonStartStop->Required = false;
        $this->txtBotonStartStop->MaxLength = Fichas::BotonStartStopMaxLength;
        return $this->txtBotonStartStop;
    }

    /**
     * Create and setup QLabel lblBotonStartStop
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblBotonStartStop_Create($strControlId = null) {
        $this->lblBotonStartStop = new QLabel($this->objParentObject, $strControlId);
        $this->lblBotonStartStop->Name = QApplication::Translate('Boton Start/Stop');
        $this->lblBotonStartStop->Text = $this->objFichas->BotonStartStop;
        $this->lblBotonStartStop->Required = false;
        return $this->lblBotonStartStop;
    }

    /**
     * Create and setup QTextBox txtCambioSecuencialVolante
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtCambioSecuencialVolante_Create($strControlId = null) {
        $this->txtCambioSecuencialVolante = new QTextBox($this->objParentObject, $strControlId);
        $this->txtCambioSecuencialVolante->Name = QApplication::Translate('Cambio secuencial en el volante');
        $this->txtCambioSecuencialVolante->Text = $this->objFichas->CambioSecuencialVolante;
        $this->txtCambioSecuencialVolante->Required = false;
        $this->txtCambioSecuencialVolante->MaxLength = Fichas::CambioSecuencialVolanteMaxLength;
        return $this->txtCambioSecuencialVolante;
    }

    /**
     * Create and setup QLabel lblCambioSecuencialVolante
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblCambioSecuencialVolante_Create($strControlId = null) {
        $this->lblCambioSecuencialVolante = new QLabel($this->objParentObject, $strControlId);
        $this->lblCambioSecuencialVolante->Name = QApplication::Translate('Cambio secuencial en el volante');
        $this->lblCambioSecuencialVolante->Text = $this->objFichas->CambioSecuencialVolante;
        $this->lblCambioSecuencialVolante->Required = false;
        return $this->lblCambioSecuencialVolante;
    }

    /**
     * Create and setup QTextBox txtCierreCentralizado
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtCierreCentralizado_Create($strControlId = null) {
        $this->txtCierreCentralizado = new QTextBox($this->objParentObject, $strControlId);
        $this->txtCierreCentralizado->Name = QApplication::Translate('Cierre Centralizado');
        $this->txtCierreCentralizado->Text = $this->objFichas->CierreCentralizado;
        $this->txtCierreCentralizado->Required = false;
        $this->txtCierreCentralizado->MaxLength = Fichas::CierreCentralizadoMaxLength;
        return $this->txtCierreCentralizado;
    }

    /**
     * Create and setup QLabel lblCierreCentralizado
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblCierreCentralizado_Create($strControlId = null) {
        $this->lblCierreCentralizado = new QLabel($this->objParentObject, $strControlId);
        $this->lblCierreCentralizado->Name = QApplication::Translate('Cierre Centralizado');
        $this->lblCierreCentralizado->Text = $this->objFichas->CierreCentralizado;
        $this->lblCierreCentralizado->Required = false;
        return $this->lblCierreCentralizado;
    }

    /**
     * Create and setup QTextBox txtComputadoraABordo
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtComputadoraABordo_Create($strControlId = null) {
        $this->txtComputadoraABordo = new QTextBox($this->objParentObject, $strControlId);
        $this->txtComputadoraABordo->Name = QApplication::Translate('Computadora A Bordo');
        $this->txtComputadoraABordo->Text = $this->objFichas->ComputadoraABordo;
        $this->txtComputadoraABordo->Required = false;
        $this->txtComputadoraABordo->MaxLength = Fichas::ComputadoraABordoMaxLength;
        return $this->txtComputadoraABordo;
    }

    /**
     * Create and setup QLabel lblComputadoraABordo
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblComputadoraABordo_Create($strControlId = null) {
        $this->lblComputadoraABordo = new QLabel($this->objParentObject, $strControlId);
        $this->lblComputadoraABordo->Name = QApplication::Translate('Computadora A Bordo');
        $this->lblComputadoraABordo->Text = $this->objFichas->ComputadoraABordo;
        $this->lblComputadoraABordo->Required = false;
        return $this->lblComputadoraABordo;
    }

    /**
     * Create and setup QTextBox txtDireccionAsistida
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtDireccionAsistida_Create($strControlId = null) {
        $this->txtDireccionAsistida = new QTextBox($this->objParentObject, $strControlId);
        $this->txtDireccionAsistida->Name = QApplication::Translate('Direccion Asistida');
        $this->txtDireccionAsistida->Text = $this->objFichas->DireccionAsistida;
        $this->txtDireccionAsistida->Required = false;
        $this->txtDireccionAsistida->MaxLength = Fichas::DireccionAsistidaMaxLength;
        return $this->txtDireccionAsistida;
    }

    /**
     * Create and setup QLabel lblDireccionAsistida
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblDireccionAsistida_Create($strControlId = null) {
        $this->lblDireccionAsistida = new QLabel($this->objParentObject, $strControlId);
        $this->lblDireccionAsistida->Name = QApplication::Translate('Direccion Asistida');
        $this->lblDireccionAsistida->Text = $this->objFichas->DireccionAsistida;
        $this->lblDireccionAsistida->Required = false;
        return $this->lblDireccionAsistida;
    }

    /**
     * Create and setup QTextBox txtMandosAudioVolante
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtMandosAudioVolante_Create($strControlId = null) {
        $this->txtMandosAudioVolante = new QTextBox($this->objParentObject, $strControlId);
        $this->txtMandosAudioVolante->Name = QApplication::Translate('Mandos de audio al volante');
        $this->txtMandosAudioVolante->Text = $this->objFichas->MandosAudioVolante;
        $this->txtMandosAudioVolante->Required = false;
        $this->txtMandosAudioVolante->MaxLength = Fichas::MandosAudioVolanteMaxLength;
        return $this->txtMandosAudioVolante;
    }

    /**
     * Create and setup QLabel lblMandosAudioVolante
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblMandosAudioVolante_Create($strControlId = null) {
        $this->lblMandosAudioVolante = new QLabel($this->objParentObject, $strControlId);
        $this->lblMandosAudioVolante->Name = QApplication::Translate('Mandos Audio Volante');
        $this->lblMandosAudioVolante->Text = $this->objFichas->MandosAudioVolante;
        $this->lblMandosAudioVolante->Required = false;
        return $this->lblMandosAudioVolante;
    }

    /**
     * Create and setup QTextBox txtReposabrazos
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtReposabrazos_Create($strControlId = null) {
        $this->txtReposabrazos = new QTextBox($this->objParentObject, $strControlId);
        $this->txtReposabrazos->Name = QApplication::Translate('Reposabrazos');
        $this->txtReposabrazos->Text = $this->objFichas->Reposabrazos;
        $this->txtReposabrazos->Required = false;
        $this->txtReposabrazos->MaxLength = Fichas::ReposabrazosMaxLength;
        return $this->txtReposabrazos;
    }

    /**
     * Create and setup QLabel lblReposabrazos
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblReposabrazos_Create($strControlId = null) {
        $this->lblReposabrazos = new QLabel($this->objParentObject, $strControlId);
        $this->lblReposabrazos->Name = QApplication::Translate('Reposabrazos');
        $this->lblReposabrazos->Text = $this->objFichas->Reposabrazos;
        $this->lblReposabrazos->Required = false;
        return $this->lblReposabrazos;
    }

    /**
     * Create and setup QTextBox txtControlCrucero
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtControlCrucero_Create($strControlId = null) {
        $this->txtControlCrucero = new QTextBox($this->objParentObject, $strControlId);
        $this->txtControlCrucero->Name = QApplication::Translate('Control Crucero');
        $this->txtControlCrucero->Text = $this->objFichas->ControlCrucero;
        $this->txtControlCrucero->Required = false;
        $this->txtControlCrucero->MaxLength = Fichas::ControlCruceroMaxLength;
        return $this->txtControlCrucero;
    }

    /**
     * Create and setup QLabel lblControlCrucero
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblControlCrucero_Create($strControlId = null) {
        $this->lblControlCrucero = new QLabel($this->objParentObject, $strControlId);
        $this->lblControlCrucero->Name = QApplication::Translate('Control Crucero');
        $this->lblControlCrucero->Text = $this->objFichas->ControlCrucero;
        $this->lblControlCrucero->Required = false;
        return $this->lblControlCrucero;
    }

    /**
     * Create and setup QTextBox txtSensorLluvia
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtSensorLluvia_Create($strControlId = null) {
        $this->txtSensorLluvia = new QTextBox($this->objParentObject, $strControlId);
        $this->txtSensorLluvia->Name = QApplication::Translate('Sensor de Lluvia');
        $this->txtSensorLluvia->Text = $this->objFichas->SensorLluvia;
        $this->txtSensorLluvia->Required = false;
        $this->txtSensorLluvia->MaxLength = Fichas::SensorLluviaMaxLength;
        return $this->txtSensorLluvia;
    }

    /**
     * Create and setup QLabel lblSensorLluvia
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblSensorLluvia_Create($strControlId = null) {
        $this->lblSensorLluvia = new QLabel($this->objParentObject, $strControlId);
        $this->lblSensorLluvia->Name = QApplication::Translate('Sensor de Lluvia');
        $this->lblSensorLluvia->Text = $this->objFichas->SensorLluvia;
        $this->lblSensorLluvia->Required = false;
        return $this->lblSensorLluvia;
    }

    /**
     * Create and setup QTextBox txtTapizado
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtTapizado_Create($strControlId = null) {
        $this->txtTapizado = new QTextBox($this->objParentObject, $strControlId);
        $this->txtTapizado->Name = QApplication::Translate('Tapizado');
        $this->txtTapizado->Text = $this->objFichas->Tapizado;
        $this->txtTapizado->Required = false;
        $this->txtTapizado->MaxLength = Fichas::TapizadoMaxLength;
        return $this->txtTapizado;
    }

    /**
     * Create and setup QLabel lblTapizado
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblTapizado_Create($strControlId = null) {
        $this->lblTapizado = new QLabel($this->objParentObject, $strControlId);
        $this->lblTapizado->Name = QApplication::Translate('Tapizado');
        $this->lblTapizado->Text = $this->objFichas->Tapizado;
        $this->lblTapizado->Required = false;
        return $this->lblTapizado;
    }

    /**
     * Create and setup QTextBox txtSalidasAire
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtSalidasAire_Create($strControlId = null) {
        $this->txtSalidasAire = new QTextBox($this->objParentObject, $strControlId);
        $this->txtSalidasAire->Name = QApplication::Translate('Salidas de Aire');
        $this->txtSalidasAire->Text = $this->objFichas->SalidasAire;
        $this->txtSalidasAire->Required = false;
        $this->txtSalidasAire->MaxLength = Fichas::SalidasAireMaxLength;
        return $this->txtSalidasAire;
    }

    /**
     * Create and setup QLabel lblSalidasAire
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblSalidasAire_Create($strControlId = null) {
        $this->lblSalidasAire = new QLabel($this->objParentObject, $strControlId);
        $this->lblSalidasAire->Name = QApplication::Translate('Salidas Aire');
        $this->lblSalidasAire->Text = $this->objFichas->SalidasAire;
        $this->lblSalidasAire->Required = false;
        return $this->lblSalidasAire;
    }

    /**
     * Create and setup QTextBox txtTechoCorredizo
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtTechoCorredizo_Create($strControlId = null) {
        $this->txtTechoCorredizo = new QTextBox($this->objParentObject, $strControlId);
        $this->txtTechoCorredizo->Name = QApplication::Translate('Techo Corredizo');
        $this->txtTechoCorredizo->Text = $this->objFichas->TechoCorredizo;
        $this->txtTechoCorredizo->Required = false;
        $this->txtTechoCorredizo->MaxLength = Fichas::TechoCorredizoMaxLength;
        return $this->txtTechoCorredizo;
    }

    /**
     * Create and setup QLabel lblTechoCorredizo
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblTechoCorredizo_Create($strControlId = null) {
        $this->lblTechoCorredizo = new QLabel($this->objParentObject, $strControlId);
        $this->lblTechoCorredizo->Name = QApplication::Translate('Techo Corredizo');
        $this->lblTechoCorredizo->Text = $this->objFichas->TechoCorredizo;
        $this->lblTechoCorredizo->Required = false;
        return $this->lblTechoCorredizo;
    }

    /**
     * Create and setup QTextBox txtComandoDistancia
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtComandoDistancia_Create($strControlId = null) {
        $this->txtComandoDistancia = new QTextBox($this->objParentObject, $strControlId);
        $this->txtComandoDistancia->Name = QApplication::Translate('Comando a Distancia');
        $this->txtComandoDistancia->Text = $this->objFichas->ComandoDistancia;
        $this->txtComandoDistancia->Required = false;
        $this->txtComandoDistancia->MaxLength = Fichas::ComandoDistanciaMaxLength;
        return $this->txtComandoDistancia;
    }

    /**
     * Create and setup QLabel lblComandoDistancia
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblComandoDistancia_Create($strControlId = null) {
        $this->lblComandoDistancia = new QLabel($this->objParentObject, $strControlId);
        $this->lblComandoDistancia->Name = QApplication::Translate('Comando a Distancia');
        $this->lblComandoDistancia->Text = $this->objFichas->ComandoDistancia;
        $this->lblComandoDistancia->Required = false;
        return $this->lblComandoDistancia;
    }

    /**
     * Create and setup QTextBox txtVolanteAjusteVertical
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtVolanteAjusteVertical_Create($strControlId = null) {
        $this->txtVolanteAjusteVertical = new QTextBox($this->objParentObject, $strControlId);
        $this->txtVolanteAjusteVertical->Name = QApplication::Translate('Volante con Ajuste Vertical');
        $this->txtVolanteAjusteVertical->Text = $this->objFichas->VolanteAjusteVertical;
        $this->txtVolanteAjusteVertical->Required = false;
        $this->txtVolanteAjusteVertical->MaxLength = Fichas::VolanteAjusteVerticalMaxLength;
        return $this->txtVolanteAjusteVertical;
    }

    /**
     * Create and setup QLabel lblVolanteAjusteVertical
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblVolanteAjusteVertical_Create($strControlId = null) {
        $this->lblVolanteAjusteVertical = new QLabel($this->objParentObject, $strControlId);
        $this->lblVolanteAjusteVertical->Name = QApplication::Translate('Volante Ajuste Vertical');
        $this->lblVolanteAjusteVertical->Text = $this->objFichas->VolanteAjusteVertical;
        $this->lblVolanteAjusteVertical->Required = false;
        return $this->lblVolanteAjusteVertical;
    }

    /**
     * Create and setup QTextBox txtVolanteCuero
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtVolanteCuero_Create($strControlId = null) {
        $this->txtVolanteCuero = new QTextBox($this->objParentObject, $strControlId);
        $this->txtVolanteCuero->Name = QApplication::Translate('Volante de Cuero');
        $this->txtVolanteCuero->Text = $this->objFichas->VolanteCuero;
        $this->txtVolanteCuero->Required = false;
        $this->txtVolanteCuero->MaxLength = Fichas::VolanteCueroMaxLength;
        return $this->txtVolanteCuero;
    }

    /**
     * Create and setup QLabel lblVolanteCuero
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblVolanteCuero_Create($strControlId = null) {
        $this->lblVolanteCuero = new QLabel($this->objParentObject, $strControlId);
        $this->lblVolanteCuero->Name = QApplication::Translate('Volante de Cuero');
        $this->lblVolanteCuero->Text = $this->objFichas->VolanteCuero;
        $this->lblVolanteCuero->Required = false;
        return $this->lblVolanteCuero;
    }

    /**
     * Create and setup QTextBox txtMoldurasColorCarroceria
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtMoldurasColorCarroceria_Create($strControlId = null) {
        $this->txtMoldurasColorCarroceria = new QTextBox($this->objParentObject, $strControlId);
        $this->txtMoldurasColorCarroceria->Name = QApplication::Translate('Molduras Color Carroceria');
        $this->txtMoldurasColorCarroceria->Text = $this->objFichas->MoldurasColorCarroceria;
        $this->txtMoldurasColorCarroceria->Required = false;
        $this->txtMoldurasColorCarroceria->MaxLength = Fichas::MoldurasColorCarroceriaMaxLength;
        return $this->txtMoldurasColorCarroceria;
    }

    /**
     * Create and setup QLabel lblMoldurasColorCarroceria
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblMoldurasColorCarroceria_Create($strControlId = null) {
        $this->lblMoldurasColorCarroceria = new QLabel($this->objParentObject, $strControlId);
        $this->lblMoldurasColorCarroceria->Name = QApplication::Translate('Molduras Color Carroceria');
        $this->lblMoldurasColorCarroceria->Text = $this->objFichas->MoldurasColorCarroceria;
        $this->lblMoldurasColorCarroceria->Required = false;
        return $this->lblMoldurasColorCarroceria;
    }

    /**
     * Create and setup QTextBox txtEspejosElectricos
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtEspejosElectricos_Create($strControlId = null) {
        $this->txtEspejosElectricos = new QTextBox($this->objParentObject, $strControlId);
        $this->txtEspejosElectricos->Name = QApplication::Translate('Espejos Electricos');
        $this->txtEspejosElectricos->Text = $this->objFichas->EspejosElectricos;
        $this->txtEspejosElectricos->Required = false;
        $this->txtEspejosElectricos->MaxLength = Fichas::EspejosElectricosMaxLength;
        return $this->txtEspejosElectricos;
    }

    /**
     * Create and setup QLabel lblEspejosElectricos
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblEspejosElectricos_Create($strControlId = null) {
        $this->lblEspejosElectricos = new QLabel($this->objParentObject, $strControlId);
        $this->lblEspejosElectricos->Name = QApplication::Translate('Espejos Electricos');
        $this->lblEspejosElectricos->Text = $this->objFichas->EspejosElectricos;
        $this->lblEspejosElectricos->Required = false;
        return $this->lblEspejosElectricos;
    }

    /**
     * Create and setup QTextBox txtEspejosRebatiblesElectricamente
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtEspejosRebatiblesElectricamente_Create($strControlId = null) {
        $this->txtEspejosRebatiblesElectricamente = new QTextBox($this->objParentObject, $strControlId);
        $this->txtEspejosRebatiblesElectricamente->Name = QApplication::Translate('Espejos Rebatibles Electricamente');
        $this->txtEspejosRebatiblesElectricamente->Text = $this->objFichas->EspejosRebatiblesElectricamente;
        $this->txtEspejosRebatiblesElectricamente->Required = false;
        $this->txtEspejosRebatiblesElectricamente->MaxLength = Fichas::EspejosRebatiblesElectricamenteMaxLength;
        return $this->txtEspejosRebatiblesElectricamente;
    }

    /**
     * Create and setup QLabel lblEspejosRebatiblesElectricamente
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblEspejosRebatiblesElectricamente_Create($strControlId = null) {
        $this->lblEspejosRebatiblesElectricamente = new QLabel($this->objParentObject, $strControlId);
        $this->lblEspejosRebatiblesElectricamente->Name = QApplication::Translate('Espejos Rebatibles Electricamente');
        $this->lblEspejosRebatiblesElectricamente->Text = $this->objFichas->EspejosRebatiblesElectricamente;
        $this->lblEspejosRebatiblesElectricamente->Required = false;
        return $this->lblEspejosRebatiblesElectricamente;
    }

    /**
     * Create and setup QTextBox txtEspejosMemorias
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtEspejosMemorias_Create($strControlId = null) {
        $this->txtEspejosMemorias = new QTextBox($this->objParentObject, $strControlId);
        $this->txtEspejosMemorias->Name = QApplication::Translate('Espejos con Memorias');
        $this->txtEspejosMemorias->Text = $this->objFichas->EspejosMemorias;
        $this->txtEspejosMemorias->Required = false;
        $this->txtEspejosMemorias->MaxLength = Fichas::EspejosMemoriasMaxLength;
        return $this->txtEspejosMemorias;
    }

    /**
     * Create and setup QLabel lblEspejosMemorias
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblEspejosMemorias_Create($strControlId = null) {
        $this->lblEspejosMemorias = new QLabel($this->objParentObject, $strControlId);
        $this->lblEspejosMemorias->Name = QApplication::Translate('Espejos Memorias');
        $this->lblEspejosMemorias->Text = $this->objFichas->EspejosMemorias;
        $this->lblEspejosMemorias->Required = false;
        return $this->lblEspejosMemorias;
    }

    /**
     * Create and setup QTextBox txtLavaFaros
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtLavaFaros_Create($strControlId = null) {
        $this->txtLavaFaros = new QTextBox($this->objParentObject, $strControlId);
        $this->txtLavaFaros->Name = QApplication::Translate('Lava Faros');
        $this->txtLavaFaros->Text = $this->objFichas->LavaFaros;
        $this->txtLavaFaros->Required = false;
        $this->txtLavaFaros->MaxLength = Fichas::LavaFarosMaxLength;
        return $this->txtLavaFaros;
    }

    /**
     * Create and setup QLabel lblLavaFaros
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblLavaFaros_Create($strControlId = null) {
        $this->lblLavaFaros = new QLabel($this->objParentObject, $strControlId);
        $this->lblLavaFaros->Name = QApplication::Translate('Lava Faros');
        $this->lblLavaFaros->Text = $this->objFichas->LavaFaros;
        $this->lblLavaFaros->Required = false;
        return $this->lblLavaFaros;
    }

    /**
     * Create and setup QTextBox txtLavaLuneta
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtLavaLuneta_Create($strControlId = null) {
        $this->txtLavaLuneta = new QTextBox($this->objParentObject, $strControlId);
        $this->txtLavaLuneta->Name = QApplication::Translate('Lava Luneta');
        $this->txtLavaLuneta->Text = $this->objFichas->LavaLuneta;
        $this->txtLavaLuneta->Required = false;
        $this->txtLavaLuneta->MaxLength = Fichas::LavaLunetaMaxLength;
        return $this->txtLavaLuneta;
    }

    /**
     * Create and setup QLabel lblLavaLuneta
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblLavaLuneta_Create($strControlId = null) {
        $this->lblLavaLuneta = new QLabel($this->objParentObject, $strControlId);
        $this->lblLavaLuneta->Name = QApplication::Translate('Lava Luneta');
        $this->lblLavaLuneta->Text = $this->objFichas->LavaLuneta;
        $this->lblLavaLuneta->Required = false;
        return $this->lblLavaLuneta;
    }

    /**
     * Create and setup QTextBox txtCobertorCajaCarga
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtCobertorCajaCarga_Create($strControlId = null) {
        $this->txtCobertorCajaCarga = new QTextBox($this->objParentObject, $strControlId);
        $this->txtCobertorCajaCarga->Name = QApplication::Translate('Cobertor de Caja de Carga');
        $this->txtCobertorCajaCarga->Text = $this->objFichas->CobertorCajaCarga;
        $this->txtCobertorCajaCarga->Required = false;
        $this->txtCobertorCajaCarga->MaxLength = Fichas::CobertorCajaCargaMaxLength;
        return $this->txtCobertorCajaCarga;
    }

    /**
     * Create and setup QLabel lblCobertorCajaCarga
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblCobertorCajaCarga_Create($strControlId = null) {
        $this->lblCobertorCajaCarga = new QLabel($this->objParentObject, $strControlId);
        $this->lblCobertorCajaCarga->Name = QApplication::Translate('Cobertor de Caja de Carga');
        $this->lblCobertorCajaCarga->Text = $this->objFichas->CobertorCajaCarga;
        $this->lblCobertorCajaCarga->Required = false;
        return $this->lblCobertorCajaCarga;
    }

    /**
     * Create and setup QTextBox txtBarrasPortaequipajeTecho
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtBarrasPortaequipajeTecho_Create($strControlId = null) {
        $this->txtBarrasPortaequipajeTecho = new QTextBox($this->objParentObject, $strControlId);
        $this->txtBarrasPortaequipajeTecho->Name = QApplication::Translate('Barras para portaequipajes en el techo');
        $this->txtBarrasPortaequipajeTecho->Text = $this->objFichas->BarrasPortaequipajeTecho;
        $this->txtBarrasPortaequipajeTecho->Required = false;
        $this->txtBarrasPortaequipajeTecho->MaxLength = Fichas::BarrasPortaequipajeTechoMaxLength;
        return $this->txtBarrasPortaequipajeTecho;
    }

    /**
     * Create and setup QLabel lblBarrasPortaequipajeTecho
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblBarrasPortaequipajeTecho_Create($strControlId = null) {
        $this->lblBarrasPortaequipajeTecho = new QLabel($this->objParentObject, $strControlId);
        $this->lblBarrasPortaequipajeTecho->Name = QApplication::Translate('Barras Portaequipaje Techo');
        $this->lblBarrasPortaequipajeTecho->Text = $this->objFichas->BarrasPortaequipajeTecho;
        $this->lblBarrasPortaequipajeTecho->Required = false;
        return $this->lblBarrasPortaequipajeTecho;
    }

    /**
     * Create and setup QTextBox txtBarraAntivuelco
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtBarraAntivuelco_Create($strControlId = null) {
        $this->txtBarraAntivuelco = new QTextBox($this->objParentObject, $strControlId);
        $this->txtBarraAntivuelco->Name = QApplication::Translate('Barra Antivuelco');
        $this->txtBarraAntivuelco->Text = $this->objFichas->BarraAntivuelco;
        $this->txtBarraAntivuelco->Required = false;
        $this->txtBarraAntivuelco->MaxLength = Fichas::BarraAntivuelcoMaxLength;
        return $this->txtBarraAntivuelco;
    }

    /**
     * Create and setup QLabel lblBarraAntivuelco
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblBarraAntivuelco_Create($strControlId = null) {
        $this->lblBarraAntivuelco = new QLabel($this->objParentObject, $strControlId);
        $this->lblBarraAntivuelco->Name = QApplication::Translate('Barra Antivuelco');
        $this->lblBarraAntivuelco->Text = $this->objFichas->BarraAntivuelco;
        $this->lblBarraAntivuelco->Required = false;
        return $this->lblBarraAntivuelco;
    }

    /**
     * Create and setup QTextBox txtEstribos
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtEstribos_Create($strControlId = null) {
        $this->txtEstribos = new QTextBox($this->objParentObject, $strControlId);
        $this->txtEstribos->Name = QApplication::Translate('Estribos');
        $this->txtEstribos->Text = $this->objFichas->Estribos;
        $this->txtEstribos->Required = false;
        $this->txtEstribos->MaxLength = Fichas::EstribosMaxLength;
        return $this->txtEstribos;
    }

    /**
     * Create and setup QLabel lblEstribos
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblEstribos_Create($strControlId = null) {
        $this->lblEstribos = new QLabel($this->objParentObject, $strControlId);
        $this->lblEstribos->Name = QApplication::Translate('Estribos');
        $this->lblEstribos->Text = $this->objFichas->Estribos;
        $this->lblEstribos->Required = false;
        return $this->lblEstribos;
    }

    /**
     * Create and setup QTextBox txtConexionAuxiliar
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtConexionAuxiliar_Create($strControlId = null) {
        $this->txtConexionAuxiliar = new QTextBox($this->objParentObject, $strControlId);
        $this->txtConexionAuxiliar->Name = QApplication::Translate('Conexion Auxiliar');
        $this->txtConexionAuxiliar->Text = $this->objFichas->ConexionAuxiliar;
        $this->txtConexionAuxiliar->Required = false;
        $this->txtConexionAuxiliar->MaxLength = Fichas::ConexionAuxiliarMaxLength;
        return $this->txtConexionAuxiliar;
    }

    /**
     * Create and setup QLabel lblConexionAuxiliar
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblConexionAuxiliar_Create($strControlId = null) {
        $this->lblConexionAuxiliar = new QLabel($this->objParentObject, $strControlId);
        $this->lblConexionAuxiliar->Name = QApplication::Translate('Conexion Auxiliar');
        $this->lblConexionAuxiliar->Text = $this->objFichas->ConexionAuxiliar;
        $this->lblConexionAuxiliar->Required = false;
        return $this->lblConexionAuxiliar;
    }

    /**
     * Create and setup QTextBox txtConexionBluetooth
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtConexionBluetooth_Create($strControlId = null) {
        $this->txtConexionBluetooth = new QTextBox($this->objParentObject, $strControlId);
        $this->txtConexionBluetooth->Name = QApplication::Translate('Conexion Bluetooth');
        $this->txtConexionBluetooth->Text = $this->objFichas->ConexionBluetooth;
        $this->txtConexionBluetooth->Required = false;
        $this->txtConexionBluetooth->MaxLength = Fichas::ConexionBluetoothMaxLength;
        return $this->txtConexionBluetooth;
    }

    /**
     * Create and setup QLabel lblConexionBluetooth
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblConexionBluetooth_Create($strControlId = null) {
        $this->lblConexionBluetooth = new QLabel($this->objParentObject, $strControlId);
        $this->lblConexionBluetooth->Name = QApplication::Translate('Conexion Bluetooth');
        $this->lblConexionBluetooth->Text = $this->objFichas->ConexionBluetooth;
        $this->lblConexionBluetooth->Required = false;
        return $this->lblConexionBluetooth;
    }

    /**
     * Create and setup QTextBox txtControlPorVoz
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtControlPorVoz_Create($strControlId = null) {
        $this->txtControlPorVoz = new QTextBox($this->objParentObject, $strControlId);
        $this->txtControlPorVoz->Name = QApplication::Translate('Control Por Voz');
        $this->txtControlPorVoz->Text = $this->objFichas->ControlPorVoz;
        $this->txtControlPorVoz->Required = false;
        $this->txtControlPorVoz->MaxLength = Fichas::ControlPorVozMaxLength;
        return $this->txtControlPorVoz;
    }

    /**
     * Create and setup QLabel lblControlPorVoz
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblControlPorVoz_Create($strControlId = null) {
        $this->lblControlPorVoz = new QLabel($this->objParentObject, $strControlId);
        $this->lblControlPorVoz->Name = QApplication::Translate('Control Por Voz');
        $this->lblControlPorVoz->Text = $this->objFichas->ControlPorVoz;
        $this->lblControlPorVoz->Required = false;
        return $this->lblControlPorVoz;
    }

    /**
     * Create and setup QTextBox txtEntradaUsb
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtEntradaUsb_Create($strControlId = null) {
        $this->txtEntradaUsb = new QTextBox($this->objParentObject, $strControlId);
        $this->txtEntradaUsb->Name = QApplication::Translate('Entrada para puerto USB');
        $this->txtEntradaUsb->Text = $this->objFichas->EntradaUsb;
        $this->txtEntradaUsb->Required = false;
        $this->txtEntradaUsb->MaxLength = Fichas::EntradaUsbMaxLength;
        return $this->txtEntradaUsb;
    }

    /**
     * Create and setup QLabel lblEntradaUsb
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblEntradaUsb_Create($strControlId = null) {
        $this->lblEntradaUsb = new QLabel($this->objParentObject, $strControlId);
        $this->lblEntradaUsb->Name = QApplication::Translate('Entrada Usb');
        $this->lblEntradaUsb->Text = $this->objFichas->EntradaUsb;
        $this->lblEntradaUsb->Required = false;
        return $this->lblEntradaUsb;
    }

    /**
     * Create and setup QTextBox txtLectorTarjetasSd
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtLectorTarjetasSd_Create($strControlId = null) {
        $this->txtLectorTarjetasSd = new QTextBox($this->objParentObject, $strControlId);
        $this->txtLectorTarjetasSd->Name = QApplication::Translate('Lector de Tarjetas Sd');
        $this->txtLectorTarjetasSd->Text = $this->objFichas->LectorTarjetasSd;
        $this->txtLectorTarjetasSd->Required = false;
        $this->txtLectorTarjetasSd->MaxLength = Fichas::LectorTarjetasSdMaxLength;
        return $this->txtLectorTarjetasSd;
    }

    /**
     * Create and setup QLabel lblLectorTarjetasSd
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblLectorTarjetasSd_Create($strControlId = null) {
        $this->lblLectorTarjetasSd = new QLabel($this->objParentObject, $strControlId);
        $this->lblLectorTarjetasSd->Name = QApplication::Translate('Lector Tarjetas Sd');
        $this->lblLectorTarjetasSd->Text = $this->objFichas->LectorTarjetasSd;
        $this->lblLectorTarjetasSd->Required = false;
        return $this->lblLectorTarjetasSd;
    }

    /**
     * Create and setup QTextBox txtNavegadorGps
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtNavegadorGps_Create($strControlId = null) {
        $this->txtNavegadorGps = new QTextBox($this->objParentObject, $strControlId);
        $this->txtNavegadorGps->Name = QApplication::Translate('Navegador Gps');
        $this->txtNavegadorGps->Text = $this->objFichas->NavegadorGps;
        $this->txtNavegadorGps->Required = false;
        $this->txtNavegadorGps->MaxLength = Fichas::NavegadorGpsMaxLength;
        return $this->txtNavegadorGps;
    }

    /**
     * Create and setup QLabel lblNavegadorGps
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblNavegadorGps_Create($strControlId = null) {
        $this->lblNavegadorGps = new QLabel($this->objParentObject, $strControlId);
        $this->lblNavegadorGps->Name = QApplication::Translate('Navegador Gps');
        $this->lblNavegadorGps->Text = $this->objFichas->NavegadorGps;
        $this->lblNavegadorGps->Required = false;
        return $this->lblNavegadorGps;
    }

    /**
     * Create and setup QTextBox txtParlantes
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtParlantes_Create($strControlId = null) {
        $this->txtParlantes = new QTextBox($this->objParentObject, $strControlId);
        $this->txtParlantes->Name = QApplication::Translate('Parlantes');
        $this->txtParlantes->Text = $this->objFichas->Parlantes;
        $this->txtParlantes->Required = false;
        $this->txtParlantes->MaxLength = Fichas::ParlantesMaxLength;
        return $this->txtParlantes;
    }

    /**
     * Create and setup QLabel lblParlantes
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblParlantes_Create($strControlId = null) {
        $this->lblParlantes = new QLabel($this->objParentObject, $strControlId);
        $this->lblParlantes->Name = QApplication::Translate('Parlantes');
        $this->lblParlantes->Text = $this->objFichas->Parlantes;
        $this->lblParlantes->Required = false;
        return $this->lblParlantes;
    }

    /**
     * Create and setup QTextBox txtRadioAmfm
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtRadioAmfm_Create($strControlId = null) {
        $this->txtRadioAmfm = new QTextBox($this->objParentObject, $strControlId);
        $this->txtRadioAmfm->Name = QApplication::Translate('Radio Am/fm');
        $this->txtRadioAmfm->Text = $this->objFichas->RadioAmfm;
        $this->txtRadioAmfm->Required = false;
        $this->txtRadioAmfm->MaxLength = Fichas::RadioAmfmMaxLength;
        return $this->txtRadioAmfm;
    }

    /**
     * Create and setup QLabel lblRadioAmfm
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblRadioAmfm_Create($strControlId = null) {
        $this->lblRadioAmfm = new QLabel($this->objParentObject, $strControlId);
        $this->lblRadioAmfm->Name = QApplication::Translate('Radio Amfm');
        $this->lblRadioAmfm->Text = $this->objFichas->RadioAmfm;
        $this->lblRadioAmfm->Required = false;
        return $this->lblRadioAmfm;
    }

    /**
     * Create and setup QTextBox txtRadioSatelitalXm
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtRadioSatelitalXm_Create($strControlId = null) {
        $this->txtRadioSatelitalXm = new QTextBox($this->objParentObject, $strControlId);
        $this->txtRadioSatelitalXm->Name = QApplication::Translate('Radio Satelital Xm');
        $this->txtRadioSatelitalXm->Text = $this->objFichas->RadioSatelitalXm;
        $this->txtRadioSatelitalXm->Required = false;
        $this->txtRadioSatelitalXm->MaxLength = Fichas::RadioSatelitalXmMaxLength;
        return $this->txtRadioSatelitalXm;
    }

    /**
     * Create and setup QLabel lblRadioSatelitalXm
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblRadioSatelitalXm_Create($strControlId = null) {
        $this->lblRadioSatelitalXm = new QLabel($this->objParentObject, $strControlId);
        $this->lblRadioSatelitalXm->Name = QApplication::Translate('Radio Satelital Xm');
        $this->lblRadioSatelitalXm->Text = $this->objFichas->RadioSatelitalXm;
        $this->lblRadioSatelitalXm->Required = false;
        return $this->lblRadioSatelitalXm;
    }

    /**
     * Create and setup QTextBox txtReproductorCd
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtReproductorCd_Create($strControlId = null) {
        $this->txtReproductorCd = new QTextBox($this->objParentObject, $strControlId);
        $this->txtReproductorCd->Name = QApplication::Translate('Reproductor Cd');
        $this->txtReproductorCd->Text = $this->objFichas->ReproductorCd;
        $this->txtReproductorCd->Required = false;
        $this->txtReproductorCd->MaxLength = Fichas::ReproductorCdMaxLength;
        return $this->txtReproductorCd;
    }

    /**
     * Create and setup QLabel lblReproductorCd
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblReproductorCd_Create($strControlId = null) {
        $this->lblReproductorCd = new QLabel($this->objParentObject, $strControlId);
        $this->lblReproductorCd->Name = QApplication::Translate('Reproductor Cd');
        $this->lblReproductorCd->Text = $this->objFichas->ReproductorCd;
        $this->lblReproductorCd->Required = false;
        return $this->lblReproductorCd;
    }

    /**
     * Create and setup QTextBox txtReproductorDvd
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtReproductorDvd_Create($strControlId = null) {
        $this->txtReproductorDvd = new QTextBox($this->objParentObject, $strControlId);
        $this->txtReproductorDvd->Name = QApplication::Translate('Reproductor de DVD');
        $this->txtReproductorDvd->Text = $this->objFichas->ReproductorDvd;
        $this->txtReproductorDvd->Required = false;
        $this->txtReproductorDvd->MaxLength = Fichas::ReproductorDvdMaxLength;
        return $this->txtReproductorDvd;
    }

    /**
     * Create and setup QLabel lblReproductorDvd
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblReproductorDvd_Create($strControlId = null) {
        $this->lblReproductorDvd = new QLabel($this->objParentObject, $strControlId);
        $this->lblReproductorDvd->Name = QApplication::Translate('Reproductor Dvd');
        $this->lblReproductorDvd->Text = $this->objFichas->ReproductorDvd;
        $this->lblReproductorDvd->Required = false;
        return $this->lblReproductorDvd;
    }

    /**
     * Create and setup QTextBox txtReproductorMp3
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtReproductorMp3_Create($strControlId = null) {
        $this->txtReproductorMp3 = new QTextBox($this->objParentObject, $strControlId);
        $this->txtReproductorMp3->Name = QApplication::Translate('Reproductor Mp3');
        $this->txtReproductorMp3->Text = $this->objFichas->ReproductorMp3;
        $this->txtReproductorMp3->Required = false;
        $this->txtReproductorMp3->MaxLength = Fichas::ReproductorMp3MaxLength;
        return $this->txtReproductorMp3;
    }

    /**
     * Create and setup QLabel lblReproductorMp3
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblReproductorMp3_Create($strControlId = null) {
        $this->lblReproductorMp3 = new QLabel($this->objParentObject, $strControlId);
        $this->lblReproductorMp3->Name = QApplication::Translate('Reproductor Mp3');
        $this->lblReproductorMp3->Text = $this->objFichas->ReproductorMp3;
        $this->lblReproductorMp3->Required = false;
        return $this->lblReproductorMp3;
    }

    /**
     * Create and setup QTextBox txtTomaCorriente12v
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtTomaCorriente12v_Create($strControlId = null) {
        $this->txtTomaCorriente12v = new QTextBox($this->objParentObject, $strControlId);
        $this->txtTomaCorriente12v->Name = QApplication::Translate('Toma Corriente de 12v');
        $this->txtTomaCorriente12v->Text = $this->objFichas->TomaCorriente12v;
        $this->txtTomaCorriente12v->Required = false;
        $this->txtTomaCorriente12v->MaxLength = Fichas::TomaCorriente12vMaxLength;
        return $this->txtTomaCorriente12v;
    }

    /**
     * Create and setup QLabel lblTomaCorriente12v
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblTomaCorriente12v_Create($strControlId = null) {
        $this->lblTomaCorriente12v = new QLabel($this->objParentObject, $strControlId);
        $this->lblTomaCorriente12v->Name = QApplication::Translate('Toma Corriente 12 v');
        $this->lblTomaCorriente12v->Text = $this->objFichas->TomaCorriente12v;
        $this->lblTomaCorriente12v->Required = false;
        return $this->lblTomaCorriente12v;
    }

    /**
     * Create and setup QTextBox txtAirbags
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAirbags_Create($strControlId = null) {
        $this->txtAirbags = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAirbags->Name = QApplication::Translate('Airbags');
        $this->txtAirbags->Text = $this->objFichas->Airbags;
        $this->txtAirbags->Required = false;
        $this->txtAirbags->MaxLength = Fichas::AirbagsMaxLength;
        return $this->txtAirbags;
    }

    /**
     * Create and setup QLabel lblAirbags
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAirbags_Create($strControlId = null) {
        $this->lblAirbags = new QLabel($this->objParentObject, $strControlId);
        $this->lblAirbags->Name = QApplication::Translate('Airbags');
        $this->lblAirbags->Text = $this->objFichas->Airbags;
        $this->lblAirbags->Required = false;
        return $this->lblAirbags;
    }

    /**
     * Create and setup QTextBox txtAlarma
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAlarma_Create($strControlId = null) {
        $this->txtAlarma = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAlarma->Name = QApplication::Translate('Alarma');
        $this->txtAlarma->Text = $this->objFichas->Alarma;
        $this->txtAlarma->Required = false;
        $this->txtAlarma->MaxLength = Fichas::AlarmaMaxLength;
        return $this->txtAlarma;
    }

    /**
     * Create and setup QLabel lblAlarma
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAlarma_Create($strControlId = null) {
        $this->lblAlarma = new QLabel($this->objParentObject, $strControlId);
        $this->lblAlarma->Name = QApplication::Translate('Alarma');
        $this->lblAlarma->Text = $this->objFichas->Alarma;
        $this->lblAlarma->Required = false;
        return $this->lblAlarma;
    }

    /**
     * Create and setup QTextBox txtAsientoParaNinos
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAsientoParaNinos_Create($strControlId = null) {
        $this->txtAsientoParaNinos = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAsientoParaNinos->Name = QApplication::Translate('Asiento Para Ni&ntilde;os');
        $this->txtAsientoParaNinos->Text = $this->objFichas->AsientoParaNinos;
        $this->txtAsientoParaNinos->Required = false;
        $this->txtAsientoParaNinos->MaxLength = Fichas::AsientoParaNinosMaxLength;
        return $this->txtAsientoParaNinos;
    }

    /**
     * Create and setup QLabel lblAsientoParaNinos
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAsientoParaNinos_Create($strControlId = null) {
        $this->lblAsientoParaNinos = new QLabel($this->objParentObject, $strControlId);
        $this->lblAsientoParaNinos->Name = QApplication::Translate('Asiento Para Ninos');
        $this->lblAsientoParaNinos->Text = $this->objFichas->AsientoParaNinos;
        $this->lblAsientoParaNinos->Required = false;
        return $this->lblAsientoParaNinos;
    }

    /**
     * Create and setup QTextBox txtAsistenciasElectronicas
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtAsistenciasElectronicas_Create($strControlId = null) {
        $this->txtAsistenciasElectronicas = new QTextBox($this->objParentObject, $strControlId);
        $this->txtAsistenciasElectronicas->Name = QApplication::Translate('Asistencias Electronicas');
        $this->txtAsistenciasElectronicas->Text = $this->objFichas->AsistenciasElectronicas;
        $this->txtAsistenciasElectronicas->Required = false;
        $this->txtAsistenciasElectronicas->MaxLength = Fichas::AsistenciasElectronicasMaxLength;
        return $this->txtAsistenciasElectronicas;
    }

    /**
     * Create and setup QLabel lblAsistenciasElectronicas
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblAsistenciasElectronicas_Create($strControlId = null) {
        $this->lblAsistenciasElectronicas = new QLabel($this->objParentObject, $strControlId);
        $this->lblAsistenciasElectronicas->Name = QApplication::Translate('Asistencias Electronicas');
        $this->lblAsistenciasElectronicas->Text = $this->objFichas->AsistenciasElectronicas;
        $this->lblAsistenciasElectronicas->Required = false;
        return $this->lblAsistenciasElectronicas;
    }

    /**
     * Create and setup QTextBox txtCamaraRetroceso
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtCamaraRetroceso_Create($strControlId = null) {
        $this->txtCamaraRetroceso = new QTextBox($this->objParentObject, $strControlId);
        $this->txtCamaraRetroceso->Name = QApplication::Translate('Camara de Retroceso');
        $this->txtCamaraRetroceso->Text = $this->objFichas->CamaraRetroceso;
        $this->txtCamaraRetroceso->Required = false;
        $this->txtCamaraRetroceso->MaxLength = Fichas::CamaraRetrocesoMaxLength;
        return $this->txtCamaraRetroceso;
    }

    /**
     * Create and setup QLabel lblCamaraRetroceso
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblCamaraRetroceso_Create($strControlId = null) {
        $this->lblCamaraRetroceso = new QLabel($this->objParentObject, $strControlId);
        $this->lblCamaraRetroceso->Name = QApplication::Translate('Camara Retroceso');
        $this->lblCamaraRetroceso->Text = $this->objFichas->CamaraRetroceso;
        $this->lblCamaraRetroceso->Required = false;
        return $this->lblCamaraRetroceso;
    }

    /**
     * Create and setup QTextBox txtCinturonesInerciales
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtCinturonesInerciales_Create($strControlId = null) {
        $this->txtCinturonesInerciales = new QTextBox($this->objParentObject, $strControlId);
        $this->txtCinturonesInerciales->Name = QApplication::Translate('Cinturones Inerciales');
        $this->txtCinturonesInerciales->Text = $this->objFichas->CinturonesInerciales;
        $this->txtCinturonesInerciales->MaxLength = Fichas::CinturonesInercialesMaxLength;
        return $this->txtCinturonesInerciales;
    }

    /**
     * Create and setup QLabel lblCinturonesInerciales
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblCinturonesInerciales_Create($strControlId = null) {
        $this->lblCinturonesInerciales = new QLabel($this->objParentObject, $strControlId);
        $this->lblCinturonesInerciales->Name = QApplication::Translate('Cinturones Inerciales');
        $this->lblCinturonesInerciales->Text = $this->objFichas->CinturonesInerciales;
        return $this->lblCinturonesInerciales;
    }

    /**
     * Create and setup QTextBox txtSensorDistanciaEstacionamiento
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtSensorDistanciaEstacionamiento_Create($strControlId = null) {
        $this->txtSensorDistanciaEstacionamiento = new QTextBox($this->objParentObject, $strControlId);
        $this->txtSensorDistanciaEstacionamiento->Name = QApplication::Translate('Sensor de Distancia de Estacionamiento');
        $this->txtSensorDistanciaEstacionamiento->Text = $this->objFichas->SensorDistanciaEstacionamiento;
        $this->txtSensorDistanciaEstacionamiento->Required = false;
        $this->txtSensorDistanciaEstacionamiento->MaxLength = Fichas::SensorDistanciaEstacionamientoMaxLength;
        return $this->txtSensorDistanciaEstacionamiento;
    }

    /**
     * Create and setup QLabel lblSensorDistanciaEstacionamiento
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblSensorDistanciaEstacionamiento_Create($strControlId = null) {
        $this->lblSensorDistanciaEstacionamiento = new QLabel($this->objParentObject, $strControlId);
        $this->lblSensorDistanciaEstacionamiento->Name = QApplication::Translate('Sensor Distancia Estacionamiento');
        $this->lblSensorDistanciaEstacionamiento->Text = $this->objFichas->SensorDistanciaEstacionamiento;
        $this->lblSensorDistanciaEstacionamiento->Required = false;
        return $this->lblSensorDistanciaEstacionamiento;
    }

    /**
     * Create and setup QTextBox txtDesempaniadorEspejosExteriores
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtDesempaniadorEspejosExteriores_Create($strControlId = null) {
        $this->txtDesempaniadorEspejosExteriores = new QTextBox($this->objParentObject, $strControlId);
        $this->txtDesempaniadorEspejosExteriores->Name = QApplication::Translate('Desempa&ntilde;ador de Espejos Exteriores');
        $this->txtDesempaniadorEspejosExteriores->Text = $this->objFichas->DesempaniadorEspejosExteriores;
        $this->txtDesempaniadorEspejosExteriores->Required = false;
        $this->txtDesempaniadorEspejosExteriores->MaxLength = Fichas::DesempaniadorEspejosExterioresMaxLength;
        return $this->txtDesempaniadorEspejosExteriores;
    }

    /**
     * Create and setup QLabel lblDesempaniadorEspejosExteriores
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblDesempaniadorEspejosExteriores_Create($strControlId = null) {
        $this->lblDesempaniadorEspejosExteriores = new QLabel($this->objParentObject, $strControlId);
        $this->lblDesempaniadorEspejosExteriores->Name = QApplication::Translate('Desempa&ntilde;ador Espejos Exteriores');
        $this->lblDesempaniadorEspejosExteriores->Text = $this->objFichas->DesempaniadorEspejosExteriores;
        $this->lblDesempaniadorEspejosExteriores->Required = false;
        return $this->lblDesempaniadorEspejosExteriores;
    }

    /**
     * Create and setup QTextBox txtEncendidoAutoBalizasUrgencia
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtEncendidoAutoBalizasUrgencia_Create($strControlId = null) {
        $this->txtEncendidoAutoBalizasUrgencia = new QTextBox($this->objParentObject, $strControlId);
        $this->txtEncendidoAutoBalizasUrgencia->Name = QApplication::Translate('Encendido Auto Balizas Urgencia');
        $this->txtEncendidoAutoBalizasUrgencia->Text = $this->objFichas->EncendidoAutoBalizasUrgencia;
        $this->txtEncendidoAutoBalizasUrgencia->Required = false;
        $this->txtEncendidoAutoBalizasUrgencia->MaxLength = Fichas::EncendidoAutoBalizasUrgenciaMaxLength;
        return $this->txtEncendidoAutoBalizasUrgencia;
    }

    /**
     * Create and setup QLabel lblEncendidoAutoBalizasUrgencia
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblEncendidoAutoBalizasUrgencia_Create($strControlId = null) {
        $this->lblEncendidoAutoBalizasUrgencia = new QLabel($this->objParentObject, $strControlId);
        $this->lblEncendidoAutoBalizasUrgencia->Name = QApplication::Translate('Encendido automático de balizas en frenada de urgencia');
        $this->lblEncendidoAutoBalizasUrgencia->Text = $this->objFichas->EncendidoAutoBalizasUrgencia;
        $this->lblEncendidoAutoBalizasUrgencia->Required = false;
        return $this->lblEncendidoAutoBalizasUrgencia;
    }

    /**
     * Create and setup QTextBox txtFarosAntiniebla
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtFarosAntiniebla_Create($strControlId = null) {
        $this->txtFarosAntiniebla = new QTextBox($this->objParentObject, $strControlId);
        $this->txtFarosAntiniebla->Name = QApplication::Translate('Faros Antiniebla');
        $this->txtFarosAntiniebla->Text = $this->objFichas->FarosAntiniebla;
        $this->txtFarosAntiniebla->Required = false;
        $this->txtFarosAntiniebla->MaxLength = Fichas::FarosAntinieblaMaxLength;
        return $this->txtFarosAntiniebla;
    }

    /**
     * Create and setup QLabel lblFarosAntiniebla
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblFarosAntiniebla_Create($strControlId = null) {
        $this->lblFarosAntiniebla = new QLabel($this->objParentObject, $strControlId);
        $this->lblFarosAntiniebla->Name = QApplication::Translate('Faros Antiniebla');
        $this->lblFarosAntiniebla->Text = $this->objFichas->FarosAntiniebla;
        $this->lblFarosAntiniebla->Required = false;
        return $this->lblFarosAntiniebla;
    }

    /**
     * Create and setup QTextBox txtFarosXenon
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtFarosXenon_Create($strControlId = null) {
        $this->txtFarosXenon = new QTextBox($this->objParentObject, $strControlId);
        $this->txtFarosXenon->Name = QApplication::Translate('Faros de Xenon');
        $this->txtFarosXenon->Text = $this->objFichas->FarosXenon;
        $this->txtFarosXenon->Required = false;
        $this->txtFarosXenon->MaxLength = Fichas::FarosXenonMaxLength;
        return $this->txtFarosXenon;
    }

    /**
     * Create and setup QLabel lblFarosXenon
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblFarosXenon_Create($strControlId = null) {
        $this->lblFarosXenon = new QLabel($this->objParentObject, $strControlId);
        $this->lblFarosXenon->Name = QApplication::Translate('Faros Xenon');
        $this->lblFarosXenon->Text = $this->objFichas->FarosXenon;
        $this->lblFarosXenon->Required = false;
        return $this->lblFarosXenon;
    }

    /**
     * Create and setup QTextBox txtGanchosIsofixLatch
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtGanchosIsofixLatch_Create($strControlId = null) {
        $this->txtGanchosIsofixLatch = new QTextBox($this->objParentObject, $strControlId);
        $this->txtGanchosIsofixLatch->Name = QApplication::Translate('Ganchos ISOFIX/Latch');
        $this->txtGanchosIsofixLatch->Text = $this->objFichas->GanchosIsofixLatch;
        $this->txtGanchosIsofixLatch->Required = false;
        $this->txtGanchosIsofixLatch->MaxLength = Fichas::GanchosIsofixLatchMaxLength;
        return $this->txtGanchosIsofixLatch;
    }

    /**
     * Create and setup QLabel lblGanchosIsofixLatch
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblGanchosIsofixLatch_Create($strControlId = null) {
        $this->lblGanchosIsofixLatch = new QLabel($this->objParentObject, $strControlId);
        $this->lblGanchosIsofixLatch->Name = QApplication::Translate('Ganchos Isofix Latch');
        $this->lblGanchosIsofixLatch->Text = $this->objFichas->GanchosIsofixLatch;
        $this->lblGanchosIsofixLatch->Required = false;
        return $this->lblGanchosIsofixLatch;
    }

    /**
     * Create and setup QTextBox txtGarantia
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtGarantia_Create($strControlId = null) {
        $this->txtGarantia = new QTextBox($this->objParentObject, $strControlId);
        $this->txtGarantia->Name = QApplication::Translate('Garantia');
        $this->txtGarantia->Text = $this->objFichas->Garantia;
        $this->txtGarantia->Required = false;
        $this->txtGarantia->MaxLength = Fichas::GarantiaMaxLength;
        return $this->txtGarantia;
    }

    /**
     * Create and setup QLabel lblGarantia
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblGarantia_Create($strControlId = null) {
        $this->lblGarantia = new QLabel($this->objParentObject, $strControlId);
        $this->lblGarantia->Name = QApplication::Translate('Garantia');
        $this->lblGarantia->Text = $this->objFichas->Garantia;
        $this->lblGarantia->Required = false;
        return $this->lblGarantia;
    }

    /**
     * Create and setup QTextBox txtIndicadorPresionNeumaticos
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtIndicadorPresionNeumaticos_Create($strControlId = null) {
        $this->txtIndicadorPresionNeumaticos = new QTextBox($this->objParentObject, $strControlId);
        $this->txtIndicadorPresionNeumaticos->Name = QApplication::Translate('Indicador de presión de neumáticos');
        $this->txtIndicadorPresionNeumaticos->Text = $this->objFichas->IndicadorPresionNeumaticos;
        $this->txtIndicadorPresionNeumaticos->Required = false;
        $this->txtIndicadorPresionNeumaticos->MaxLength = Fichas::IndicadorPresionNeumaticosMaxLength;
        return $this->txtIndicadorPresionNeumaticos;
    }

    /**
     * Create and setup QLabel lblIndicadorPresionNeumaticos
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblIndicadorPresionNeumaticos_Create($strControlId = null) {
        $this->lblIndicadorPresionNeumaticos = new QLabel($this->objParentObject, $strControlId);
        $this->lblIndicadorPresionNeumaticos->Name = QApplication::Translate('Indicador Presion Neumaticos');
        $this->lblIndicadorPresionNeumaticos->Text = $this->objFichas->IndicadorPresionNeumaticos;
        $this->lblIndicadorPresionNeumaticos->Required = false;
        return $this->lblIndicadorPresionNeumaticos;
    }

    /**
     * Create and setup QTextBox txtLavafaros
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtLavafaros_Create2($strControlId = null) {
        $this->txtLavafaros = new QTextBox($this->objParentObject, $strControlId);
        $this->txtLavafaros->Name = QApplication::Translate('Lavafaros');
        $this->txtLavafaros->Text = $this->objFichas->Lavafaros;
        $this->txtLavafaros->Required = false;
        $this->txtLavafaros->MaxLength = Fichas::LavafarosMaxLength;
        return $this->txtLavafaros;
    }

    /**
     * Create and setup QLabel lblLavafaros
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblLavafaros_Create2($strControlId = null) {
        $this->lblLavafaros = new QLabel($this->objParentObject, $strControlId);
        $this->lblLavafaros->Name = QApplication::Translate('Lavafaros');
        $this->lblLavafaros->Text = $this->objFichas->Lavafaros;
        $this->lblLavafaros->Required = false;
        return $this->lblLavafaros;
    }

    /**
     * Create and setup QTextBox txtLucesAdaptativasCurvas
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtLucesAdaptativasCurvas_Create($strControlId = null) {
        $this->txtLucesAdaptativasCurvas = new QTextBox($this->objParentObject, $strControlId);
        $this->txtLucesAdaptativasCurvas->Name = QApplication::Translate('Luces adaptativas a las curvas');
        $this->txtLucesAdaptativasCurvas->Text = $this->objFichas->LucesAdaptativasCurvas;
        $this->txtLucesAdaptativasCurvas->MaxLength = Fichas::LucesAdaptativasCurvasMaxLength;
        return $this->txtLucesAdaptativasCurvas;
    }

    /**
     * Create and setup QLabel lblLucesAdaptativasCurvas
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblLucesAdaptativasCurvas_Create($strControlId = null) {
        $this->lblLucesAdaptativasCurvas = new QLabel($this->objParentObject, $strControlId);
        $this->lblLucesAdaptativasCurvas->Name = QApplication::Translate('Luces Adaptativas Curvas');
        $this->lblLucesAdaptativasCurvas->Text = $this->objFichas->LucesAdaptativasCurvas;
        return $this->lblLucesAdaptativasCurvas;
    }

    /**
     * Create and setup QTextBox txtTercerApoyaCabezaTrasero
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtTercerApoyaCabezaTrasero_Create($strControlId = null) {
        $this->txtTercerApoyaCabezaTrasero = new QTextBox($this->objParentObject, $strControlId);
        $this->txtTercerApoyaCabezaTrasero->Name = QApplication::Translate('Tercer apoya cabezas trasero');
        $this->txtTercerApoyaCabezaTrasero->Text = $this->objFichas->TercerApoyaCabezaTrasero;
        $this->txtTercerApoyaCabezaTrasero->Required = false;
        $this->txtTercerApoyaCabezaTrasero->MaxLength = Fichas::TercerApoyaCabezaTraseroMaxLength;
        return $this->txtTercerApoyaCabezaTrasero;
    }

    /**
     * Create and setup QLabel lblTercerApoyaCabezaTrasero
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblTercerApoyaCabezaTrasero_Create($strControlId = null) {
        $this->lblTercerApoyaCabezaTrasero = new QLabel($this->objParentObject, $strControlId);
        $this->lblTercerApoyaCabezaTrasero->Name = QApplication::Translate('Tercer Apoya Cabeza Trasero');
        $this->lblTercerApoyaCabezaTrasero->Text = $this->objFichas->TercerApoyaCabezaTrasero;
        $this->lblTercerApoyaCabezaTrasero->Required = false;
        return $this->lblTercerApoyaCabezaTrasero;
    }

    /**
     * Create and setup QListBox lstIdEstadoObject
     * @param string $strControlId optional ControlId to use
     * @return QListBox
     */
    public function lstIdEstadoObject_Create($strControlId = null) {
        $this->lstIdEstadoObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstIdEstadoObject->Name = QApplication::Translate('Estado');
        $this->lstIdEstadoObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstIdEstadoObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objIdEstadoObjectArray = Estados::LoadAll();
        if ($objIdEstadoObjectArray) foreach ($objIdEstadoObjectArray as $objIdEstadoObject) {
                $objListItem = new QListItem($objIdEstadoObject->__toString(), $objIdEstadoObject->Id);
                if (($this->objFichas->IdEstadoObject) && ($this->objFichas->IdEstadoObject->Id == $objIdEstadoObject->Id))
                    $objListItem->Selected = true;
                $this->lstIdEstadoObject->AddItem($objListItem);
            }
        return $this->lstIdEstadoObject;
    }

    /**
     * Create and setup QLabel lblIdEstado
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */
    public function lblIdEstado_Create($strControlId = null) {
        $this->lblIdEstado = new QLabel($this->objParentObject, $strControlId);
        $this->lblIdEstado->Name = QApplication::Translate('Estado');
        $this->lblIdEstado->Text = ($this->objFichas->IdEstadoObject) ? $this->objFichas->IdEstadoObject->__toString() : null;
        $this->lblIdEstado->Required = false;
        return $this->lblIdEstado;
    }


    public function txtGenericRadioOrText_Create($strName, $strText = null, $strControlId = null, $intMaxLength = null) {
        $strTxtPropertyName = 'txt'.$strName;
        $this->$strTxtPropertyName = new QRadioButtonListOrTextBox($this->objParentObject, $strControlId);
        $this->$strTxtPropertyName->RadioButtonList->AddItem("Si", 1);
        $this->$strTxtPropertyName->RadioButtonList->AddItem("No", 0);
        $this->$strTxtPropertyName->Name = ($strText ? $strText : $strName);
        $this->$strTxtPropertyName->Text = $this->objFichas->$strName;
        $this->$strTxtPropertyName->Required = false;
        $this->$strTxtPropertyName->MaxLength = ($intMaxLength ? $intMaxLength : 50);
        return $this->$strTxtPropertyName;
    }


}
?>
