<?php

declare(strict_types=1);

namespace App\Controllers\Admin\Pages;

use App\Controllers\Admin\AbstractAdminController;
use App\Preferences;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class PagesController extends AbstractAdminController
{
    /**
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return Response
     */
    public function listAction(Request $request, Response $response, array $args = []): Response
    {
        return $this->render($response, 'admin/list.twig', []);
    }
}
