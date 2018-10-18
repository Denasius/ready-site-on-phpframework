<?php

namespace application\core;


class View
{
    public $layout = 'default';
    public $path;
    public $route;

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = "{$route['controller']}/{$route['action']}";
    }

    public function render($title, $vars = []) {
        extract($vars);
        $path = 'application/views/'.$this->path.'.php';
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'application/views/layouts/'.$this->layout.'.php';
        }
    }

    public function redirect ( $url ) {
        header('Location: ' . $url);
        exit;
    }

    public static function errorCode ( $code ) {
        http_response_code( $code );
        if ( file_exists( "application/views/errors/{$code}.php" ) ) {
            require "application/views/errors/{$code}.php";
        }
    }

    public function message($title = '', $status, $message )
    {
        exit(json_encode(['title' => $title, 'status' => $status, 'message' => $message]));
    }

    public function redirectPage( $url ) {
        exit( json_encode( ['url' => $url] ) );
    }
}