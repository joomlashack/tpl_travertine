<?php
/**
 * @package     Travertine
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2018 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

if($this->params->get('backgroundImage', '')) {
    $backgroundImage = ' style="background-image:url(' . JURI::base() . $this->params->get('backgroundImage', '') . ');"';
}