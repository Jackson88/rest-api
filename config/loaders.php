<?php

use Phalcon\Loader;

$loader = new Loader();

$loader->registerNamespaces(array(
    'RestApi\Api\Controllers' => __DIR__ . '/../apps/api/controllers/',
    'RestApi\Api\Models' => __DIR__ . '/../apps/api/models/',
    'RestApi\Api\Services' => __DIR__ . '/../apps/api/services/',
));

$loader->register();