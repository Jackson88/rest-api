<?php

namespace RestApi\Api\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;

class RestController extends Controller
{

    const DEFAULT_STATUS_CODE = 200;

    protected $statusCode;

    public function afterExecuteRoute(Dispatcher $dispatcher)
    {
        $this->prepareResponse($dispatcher->getReturnedValue());
    }

    protected function prepareResponse($payload)
    {

        $this->response->setContentType('application/json', 'UTF-8')
            ->setStatusCode($this->getStatusCode(), $this->getStatusCodeDescription());

        if ($payload)
        {
            $this->response->setJsonContent($payload);
        }
    }

    protected function setStatusCode($code)
    {
        $this->statusCode = $code;
    }

    protected function getStatusCode()
    {
        return $this->statusCode ? $this->statusCode : self::DEFAULT_STATUS_CODE;
    }

    protected function getStatusCodeDescription()
    {
        return $this->config->codes[$this->getStatusCode()];
    }

    public function route404Action()
    {
        $this->setStatusCode(404);
    }

    public function addHeader($header, $value)
    {
        $this->response->setHeader($header, $value);
    }

    public function getHeaders()
    {
        return $this->response->getHeaders();
    }
}
