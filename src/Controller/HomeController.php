<?php

namespace App\Controller;

use Copper\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @return Response
     */
    public function getIndex(): Response
    {
        return $this->viewResponse(ROUTE_index);
    }
}