<?php

$basePath = __DIR__ . '/../../..';

// Composer won't autoload twice so this should have no performance hit
require $basePath . '/vendor/autoload.php';

// Laravel will not overwrite existing environment variables, so we'll pull in custom ones here
$dotenv = new Dotenv\Dotenv($basePath, '.env.dredd');
$dotenv->load();

require_once $basePath . '/server.php';