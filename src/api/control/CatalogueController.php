<?php
namespace lbs\api\control;

use Slim\Http\Request;
use Slim\Http\Response;

class CatalogueController extends Controller
{
    public function home(Request $request, Response $response)
    {
        return $this->renderer->render($response, 'index.phtml');
    }
}