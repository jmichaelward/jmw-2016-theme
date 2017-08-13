<?php
/**
 * Main theme functions file. Loads the site theme assets.
 *
 * @package jmw-2016
 */

use JMW2016\Theme;

require_once get_template_directory() . '/src/JMW2016/Theme.php';

(new Theme)->setup();
