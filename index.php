<?php

require_once 'Router.php';

$router = new Router();

$router->bind('/healthcheck', require 'routes/healthcheck.php');

$router();
