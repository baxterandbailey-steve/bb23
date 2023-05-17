<?php

/**
 * Functions and definitions
 *
 * @package BBWP
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

////---------- Required includes ----------////

require_once get_template_directory() . '/functions/wp-setup.php';
require_once get_template_directory() . '/functions/wp-enqueue.php';
require_once get_template_directory() . '/functions/wp-clean.php';
require_once get_template_directory() . '/functions/wp-posts.php';
require_once get_template_directory() . '/functions/acf.php';
