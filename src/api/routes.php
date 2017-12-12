<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/categories', lbs\api\control\CatalogueController::class . ':home');
