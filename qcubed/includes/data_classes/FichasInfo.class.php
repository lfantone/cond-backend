<?php
  require(__DATAGEN_CLASSES__ . '/FichasInfoGen.class.php');

  /**
   * The FichasInfo class defined here contains any
   * customized code for the FichasInfo class in the
   * Object Relational Model.  It represents the "fichas_info" table 
   * in the database, and extends from the code generated abstract FichasInfoGen
   * class, which contains all the basic CRUD-type functionality as well as
   * basic methods to handle relationships and index-based loading.
   * 
   * @package My Application
   * @subpackage DataObjects
   * 
   */
  class FichasInfo extends FichasInfoGen {
    /**
     * Default "to string" handler
     * Allows pages to _p()/echo()/print() this object, and to define the default
     * way this object would be outputted.
     *
     * Can also be called directly via $objFichasInfo->__toString().
     *
     * @return string a nicely formatted string representation of this object
     */
    public function __toString() {
      return sprintf('FichasInfo Object %s',  $this->intIdFichasInfo);
    }


        /**
     * Override method to perform a property "Get"
     * This will get the value of $strName
     *
     * @param string $strName Name of the property to get
     * @return mixed
     */
    public function __get($strName) {
      switch ($strName) {
        ///////////////////
        // Member Variables
        ///////////////////
        case 'IdFichasInfo':
          /**
           * Gets the value for intIdFichasInfo (Read-Only PK)
           * @return integer
           */
          return $this->intIdFichasInfo;

        case 'IdFichas':
          /**
           * Gets the value for intIdFichas (Not Null)
           * @return integer
           */
          return $this->intIdFichas;

        case 'Fecha':
          /**
           * Gets the value for dttFecha (Not Null)
           * @return QDateTime
           */
          return $this->dttFecha;

        case 'Accion':
          /**
           * Gets the value for strAccion
           * @return string
           */
          return $this->strAccion;

        case 'Notas':
          /**
           * Gets the value for strNotas
           * @return string
           */
          return $this->strNotas;


        ///////////////////
        // Member Objects
        ///////////////////
        case 'IdFichasObject':
          /**
           * Gets the value for the Fichas object referenced by intIdFichas (Not Null)
           * @return Fichas
           */
          try {
            if ((!$this->objIdFichasObject) && (!is_null($this->intIdFichas)))
              $this->objIdFichasObject = Fichas::Load($this->intIdFichas);
            return $this->objIdFichasObject;
          } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
          }


        ////////////////////////////
        // Virtual Object References (Many to Many and Reverse References)
        // (If restored via a "Many-to" expansion)
        ////////////////////////////


        case '__Restored':
          return $this->__blnRestored;

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
      switch ($strName) {
        ///////////////////
        // Member Variables
        ///////////////////
        case 'IdFichas':
          /**
           * Sets the value for intIdFichas (Not Null)
           * @param integer $mixValue
           * @return integer
           */
          try {
            $this->objIdFichasObject = null;
            return ($this->intIdFichas = QType::Cast($mixValue, QType::Integer));
          } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
          }

        case 'Fecha':
          /**
           * Sets the value for dttFecha (Not Null)
           * @param QDateTime $mixValue
           * @return QDateTime
           */
          try {
            return ($this->dttFecha = $mixValue);
          } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
          }

        case 'Accion':
          /**
           * Sets the value for strAccion
           * @param string $mixValue
           * @return string
           */
          try {
            return ($this->strAccion = QType::Cast($mixValue, QType::String));
          } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
          }

        case 'Notas':
          /**
           * Sets the value for strNotas
           * @param string $mixValue
           * @return string
           */
          try {
            return ($this->strNotas = QType::Cast($mixValue, QType::String));
          } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
          }


        ///////////////////
        // Member Objects
        ///////////////////
        case 'IdFichasObject':
          /**
           * Sets the value for the Fichas object referenced by intIdFichas (Not Null)
           * @param Fichas $mixValue
           * @return Fichas
           */
          if (is_null($mixValue)) {
            $this->intIdFichas = null;
            $this->objIdFichasObject = null;
            return null;
          } else {
            // Make sure $mixValue actually is a Fichas object
            try {
              $mixValue = QType::Cast($mixValue, 'Fichas');
            } catch (QInvalidCastException $objExc) {
              $objExc->IncrementOffset();
              throw $objExc;
            }

            // Make sure $mixValue is a SAVED Fichas object
            if (is_null($mixValue->Id))
              throw new QCallerException('Unable to set an unsaved IdFichasObject for this FichasInfo');

            // Update Local Member Variables
            $this->objIdFichasObject = $mixValue;
            $this->intIdFichas = $mixValue->Id;

            // Return $mixValue
            return $mixValue;
          }
          break;

        default:
          try {
            return parent::__set($strName, $mixValue);
          } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
          }
      }
    }

    // Override or Create New Load/Count methods
    // (For obvious reasons, these methods are commented out...
    // but feel free to use these as a starting point)
/*
    public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
      // This will return an array of FichasInfo objects
      return FichasInfo::QueryArray(
        QQ::AndCondition(
          QQ::Equal(QQN::FichasInfo()->Param1, $strParam1),
          QQ::GreaterThan(QQN::FichasInfo()->Param2, $intParam2)
        ),
        $objOptionalClauses
      );
    }

    public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
      // This will return a single FichasInfo object
      return FichasInfo::QuerySingle(
        QQ::AndCondition(
          QQ::Equal(QQN::FichasInfo()->Param1, $strParam1),
          QQ::GreaterThan(QQN::FichasInfo()->Param2, $intParam2)
        ),
        $objOptionalClauses
      );
    }

    public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
      // This will return a count of FichasInfo objects
      return FichasInfo::QueryCount(
        QQ::AndCondition(
          QQ::Equal(QQN::FichasInfo()->Param1, $strParam1),
          QQ::Equal(QQN::FichasInfo()->Param2, $intParam2)
        ),
        $objOptionalClauses
      );
    }

    public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
      // Performing the load manually (instead of using QCubed Query)

      // Get the Database Object for this Class
      $objDatabase = FichasInfo::GetDatabase();

      // Properly Escape All Input Parameters using Database->SqlVariable()
      $strParam1 = $objDatabase->SqlVariable($strParam1);
      $intParam2 = $objDatabase->SqlVariable($intParam2);

      // Setup the SQL Query
      $strQuery = sprintf('
        SELECT
          `fichas_info`.*
        FROM
          `fichas_info` AS `fichas_info`
        WHERE
          param_1 = %s AND
          param_2 < %s',
        $strParam1, $intParam2);

      // Perform the Query and Instantiate the Result
      $objDbResult = $objDatabase->Query($strQuery);
      return FichasInfo::InstantiateDbResult($objDbResult);
    }
*/




    // Override or Create New Properties and Variables
    // For performance reasons, these variables and __set and __get override methods
    // are commented out.  But if you wish to implement or override any
    // of the data generated properties, please feel free to uncomment them.
/*
    protected $strSomeNewProperty;

    public function __get($strName) {
      switch ($strName) {
        case 'SomeNewProperty': return $this->strSomeNewProperty;

        default:
          try {
            return parent::__get($strName);
          } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
          }
      }
    }

    public function __set($strName, $mixValue) {
      switch ($strName) {
        case 'SomeNewProperty':
          try {
            return ($this->strSomeNewProperty = QType::Cast($mixValue, QType::String));
          } catch (QInvalidCastException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
          }

        default:
          try {
            return (parent::__set($strName, $mixValue));
          } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
          }
      }
    }
*/
  }
?>
