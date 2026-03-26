<?php
defined('WP_UNINSTALL_PLUGIN') || exit;

delete_option('thumbnails');
delete_option('thumbnails_version');
