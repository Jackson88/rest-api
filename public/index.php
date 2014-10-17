<?php

use Phalcon\Mvc\Application;

try {

    /**
     * Include services
     */
    require __DIR__ . '/../config/services.php';

    /**
     * Include loaders
     */
    require __DIR__ . '/../config/loaders.php';

    /**
     * Handle the request
     */
    $application = new Application($di);

    $application->useImplicitView(false);

    /**
     * Include modules
     */
    require __DIR__ . '/../config/modules.php';

    echo $application->handle()->getContent();

} catch (Exception $e) {
    echo $e->getMessage() . " " . $e->getTraceAsString();
}
