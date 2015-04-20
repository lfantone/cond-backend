<?php
	require(__DATAGEN_META_CONTROLS__ . '/ItemDataGridGen.class.php');

	/**
	 * This is the "Meta" DataGrid customizable subclass for the List functionality
	 * of the Item class.  This code-generated class extends
	 * from the generated Meta DataGrid class which contains a QDataGrid class which
	 * can be used by any QForm or QPanel, listing a collection of Item
	 * objects.  It includes functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create an instance of this DataGrid in a QForm or QPanel.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * 
	 */
	class ItemDataGrid extends ItemDataGridGen {

    public function MetaDataBinder() {
      if (!$intIdPais = QApplication::QueryString('id_pais'))
          $intIdPais = 2;
      
      $objCond = QQ::Equal(QQN::Item()->IdPais, $intIdPais);

      // Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
      if ($this->Paginator) {
        $this->TotalItemCount = Item::QueryCount($objCond);
      }

      // Setup the $objClauses Array
      $objClauses = array();

      // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
      // the OrderByClause to the $objClauses array
      if ($objClause = $this->OrderByClause)
        array_push($objClauses, $objClause);

      // Add the LimitClause information, as well
      if ($objClause = $this->LimitClause)
        array_push($objClauses, $objClause);

      // Set the DataSource to be a Query result from Item, given the clauses above
      $this->DataSource = Item::QueryArray($objCond, $objClauses);
    }



	}
?>
