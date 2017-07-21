<?php

/**
 * Load environment variables from .env file
 */
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

define('DB_HOST', getenv('DB_HOST'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_NAME', getenv('DB_NAME'));
