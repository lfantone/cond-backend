<?php
	/**
	 * The TipoDatoType class defined here contains
	 * code for the TipoDatoType enumerated type.  It represents
	 * the enumerated values found in the "tipo_dato_type" table
	 * in the database.
	 * 
	 * To use, you should use the TipoDatoType subclass which
	 * extends this TipoDatoTypeGen class.
	 * 
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the TipoDatoType class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 */
	abstract class TipoDatoTypeGen extends QBaseClass {
		const integer = 1;
		const text = 2;
		const longtext = 3;
		const longinteger = 4;
		const file = 5;
		const checkboxortext = 6;

		const MaxId = 6;

		public static $NameArray = array(
			1 => 'integer',
			2 => 'text',
			3 => 'longtext',
			4 => 'longinteger',
			5 => 'file',
			6 => 'checkboxortext');

		public static $TokenArray = array(
			1 => 'integer',
			2 => 'text',
			3 => 'longtext',
			4 => 'longinteger',
			5 => 'file',
			6 => 'checkboxortext');

		public static function ToString($intTipoDatoTypeId) {
			switch ($intTipoDatoTypeId) {
				case 1: return 'integer';
				case 2: return 'text';
				case 3: return 'longtext';
				case 4: return 'longinteger';
				case 5: return 'file';
				case 6: return 'checkboxortext';
				default:
					throw new QCallerException(sprintf('Invalid intTipoDatoTypeId: %s', $intTipoDatoTypeId));
			}
		}

		public static function ToToken($intTipoDatoTypeId) {
			switch ($intTipoDatoTypeId) {
				case 1: return 'integer';
				case 2: return 'text';
				case 3: return 'longtext';
				case 4: return 'longinteger';
				case 5: return 'file';
				case 6: return 'checkboxortext';
				default:
					throw new QCallerException(sprintf('Invalid intTipoDatoTypeId: %s', $intTipoDatoTypeId));
			}
		}

	}
?>