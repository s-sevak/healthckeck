<?php

class Router {
    private $routes = [];

    public function bind($route, $handler) {
        $this->routes[$route] = $handler;
    }

    public function __invoke() {
        $request_uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $handler = $this->routes[$request_uri] ?? null;

            if ($handler !== null) {
                $handler();
            } else {
                http_response_code(404);
                echo 'Not Found';
            }
        } else {
            http_response_code(405);
            echo 'Method Not Allowed';
        }
    }
}
