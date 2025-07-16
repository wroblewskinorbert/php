<?php
declare(strict_types=1);

// echo __DIR__ . '/error_handling.php';
require_once __DIR__ . '/error_handling.php';
error_reporting(E_ALL);
set_exception_handler('exceptionHandler');
set_error_handler('errorHandler');

const INCLUDE_DIR = __DIR__ . '/includes';
const ROUTES_DIR = __DIR__ . '/routes';
const TEMPLATES_DIR = __DIR__ . '/templates';
const DB_DIR = __DIR__ . '/db';

require_once INCLUDE_DIR . '/router.php';
require_once INCLUDE_DIR . '/view.php';
require_once INCLUDE_DIR . '/db.php';
require_once INCLUDE_DIR . '/flash.php';

// ini_set('display_errors', '1');