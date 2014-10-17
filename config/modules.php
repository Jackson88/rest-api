<?php

/**
 * Register application modules
 */
$application->registerModules(array(
    'api' => array(
        'className' => 'RestApi\Api\Module',
        'path' => __DIR__ . '/../apps/api/Module.php'
    )
));
