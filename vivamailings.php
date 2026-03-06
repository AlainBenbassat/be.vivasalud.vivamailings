<?php

require_once 'vivamailings.civix.php';
use CRM_Vivamailings_ExtensionUtil as E;

function vivamailings_civicrm_pre($op, $objectName, $id, &$params) {
  // disable URL tracking
  if ($objectName == 'Mailing') {
    if ($op == 'edit' || $op == 'create') {
      if (array_key_exists('url_tracking', $params)) {
        $params['url_tracking'] = 0;
      }
    }
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function vivamailings_civicrm_config(&$config) {
  _vivamailings_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function vivamailings_civicrm_install() {
  _vivamailings_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function vivamailings_civicrm_enable() {
  _vivamailings_civix_civicrm_enable();
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 *

 // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 *
function vivamailings_civicrm_navigationMenu(&$menu) {
  _vivamailings_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _vivamailings_civix_navigationMenu($menu);
} // */
