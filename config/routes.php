<?php

/**
 * @var $routes \Phalcon\Mvc\Router\Annotations
 */
$router->setDefaultModule("api");
$router->setDefaultNamespace("RestApi\Api\Controllers");

$router->notFound(array("controller" => "rest", "action" => "route404"));

$router->addModuleResource("api", "RestApi\Api\Controllers\Index");