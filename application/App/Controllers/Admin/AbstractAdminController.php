<?php

namespace App\Controllers\Admin;

use App\Controllers\AbstractTwigController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AbstractAdminController extends AbstractTwigController
{
    /**
     * Action for display one
     *
     */
    public function indexAction()
    {
    }

    /**
     * Action for display list of models
     *
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return Response
     */
    public function listAction(Request $request, Response $response, array $args = []): Response
    {
        return $response;
    }

    /**
     * Action to create model
     *
     */
    public function createAction()
    {
    }

    /**
     * Action to update model
     *
     */
    public function updateAction()
    {
    }

    /**
     * Action to delete model
     *
     */
    public function deleteAction()
    {
    }
}