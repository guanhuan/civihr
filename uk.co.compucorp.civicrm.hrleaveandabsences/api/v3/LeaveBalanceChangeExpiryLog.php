<?php

/**
 * LeaveBalanceChangeExpiryLog.get API
 *
 * @param array $params
 *
 * @return array API result descriptor
 *
 * @throws API_Exception
 */
function civicrm_api3_leave_balance_change_expiry_log_get($params) {
  return _civicrm_api3_basic_get(_civicrm_api3_get_BAO(__FUNCTION__), $params);
}
