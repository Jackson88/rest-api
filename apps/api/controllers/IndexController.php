<?php

namespace RestApi\Api\Controllers;

class IndexController extends RestController
{

    /**
     * @Get("/get")
     */
    public function getAction()
    {
        return ['getAction'];
    }

    /**
     * @Post("/post")
     */
    public function postAction()
    {
        $this->setStatusCode(201);
        return ['postAction'];
    }

    /**
     * @Put("/put")
     */
    public function putAction()
    {
        $this->setStatusCode(201);
        return ['putAction'];
    }

    /**
     * @Delete("/delete")
     */
    public function deleteAction()
    {
        return ['putAction'];
    }

}

