<?php

/**
 * mp_forms extension for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2015-2016, terminal42 gmbh
 * @author     terminal42 gmbh <info@terminal42.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       https://github.com/terminal42/contao-mp_forms
 */

/**
 * Form fields
 */
$GLOBALS['TL_FFL']['mp_form_pageswitch'] = 'FormMPFormPageSwitch';
$GLOBALS['TL_FFL']['mp_form_placeholder'] = 'FormMPFormPlaceholder';

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['application']['mp_form_steps'] = 'MPFormsStepsModule';

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = ['MPForms', 'replaceTags'];
$GLOBALS['TL_HOOKS']['compileFormFields'][] = ['MPForms', 'compileFormFields'];
$GLOBALS['TL_HOOKS']['loadFormField'][]     = ['MPForms', 'loadValuesFromSession'];
$GLOBALS['TL_HOOKS']['prepareFormData'][]   = ['MPForms', 'prepareFormData'];
