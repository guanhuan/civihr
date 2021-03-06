<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from xml/schema/CRM/HRLeaveAndAbsences/LeavePeriodEntitlementLog.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:5e8e565d77ab7de370a19c219759ffc0)
 */

/**
 * Database access object for the LeavePeriodEntitlementLog entity.
 */
class CRM_HRLeaveAndAbsences_DAO_LeavePeriodEntitlementLog extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_hrleaveandabsences_leave_period_entitlement_log';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Unique LeavePeriodEntitlementLog ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * FK to LeavePeriodEntitlement
   *
   * @var int unsigned
   */
  public $entitlement_id;

  /**
   * FK to Contact. The contact that represents the user who made changes to this entitlement
   *
   * @var int unsigned
   */
  public $editor_id;

  /**
   * The entitlement amount for this Period Entitlement until created_date value
   *
   * @var float
   */
  public $entitlement_amount;

  /**
   * The comment added by the user about the calculation for this entitlement
   *
   * @var text
   */
  public $comment;

  /**
   * The date and time this entitlement was updated
   *
   * @var datetime
   */
  public $created_date;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_hrleaveandabsences_leave_period_entitlement_log';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'entitlement_id', 'civicrm_hrleaveandabsences_leave_period_entitlement', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'editor_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'Unique LeavePeriodEntitlementLog ID',
          'required' => TRUE,
          'table_name' => 'civicrm_hrleaveandabsences_leave_period_entitlement_log',
          'entity' => 'LeavePeriodEntitlementLog',
          'bao' => 'CRM_HRLeaveAndAbsences_DAO_LeavePeriodEntitlementLog',
          'localizable' => 0,
        ],
        'entitlement_id' => [
          'name' => 'entitlement_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'FK to LeavePeriodEntitlement',
          'required' => TRUE,
          'table_name' => 'civicrm_hrleaveandabsences_leave_period_entitlement_log',
          'entity' => 'LeavePeriodEntitlementLog',
          'bao' => 'CRM_HRLeaveAndAbsences_DAO_LeavePeriodEntitlementLog',
          'localizable' => 0,
          'FKClassName' => 'CRM_HRLeaveAndAbsences_DAO_LeavePeriodEntitlement',
        ],
        'editor_id' => [
          'name' => 'editor_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'FK to Contact. The contact that represents the user who made changes to this entitlement',
          'required' => TRUE,
          'table_name' => 'civicrm_hrleaveandabsences_leave_period_entitlement_log',
          'entity' => 'LeavePeriodEntitlementLog',
          'bao' => 'CRM_HRLeaveAndAbsences_DAO_LeavePeriodEntitlementLog',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ],
        'entitlement_amount' => [
          'name' => 'entitlement_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Entitlement Amount'),
          'description' => 'The entitlement amount for this Period Entitlement until created_date value',
          'required' => TRUE,
          'precision' => [
            20,
            2
          ],
          'table_name' => 'civicrm_hrleaveandabsences_leave_period_entitlement_log',
          'entity' => 'LeavePeriodEntitlementLog',
          'bao' => 'CRM_HRLeaveAndAbsences_DAO_LeavePeriodEntitlementLog',
          'localizable' => 0,
        ],
        'comment' => [
          'name' => 'comment',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Comment'),
          'description' => 'The comment added by the user about the calculation for this entitlement',
          'table_name' => 'civicrm_hrleaveandabsences_leave_period_entitlement_log',
          'entity' => 'LeavePeriodEntitlementLog',
          'bao' => 'CRM_HRLeaveAndAbsences_DAO_LeavePeriodEntitlementLog',
          'localizable' => 0,
        ],
        'created_date' => [
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Created Date'),
          'description' => 'The date and time this entitlement was updated',
          'table_name' => 'civicrm_hrleaveandabsences_leave_period_entitlement_log',
          'entity' => 'LeavePeriodEntitlementLog',
          'bao' => 'CRM_HRLeaveAndAbsences_DAO_LeavePeriodEntitlementLog',
          'localizable' => 0,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'hrleaveandabsences_leave_period_entitlement_log', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'hrleaveandabsences_leave_period_entitlement_log', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
