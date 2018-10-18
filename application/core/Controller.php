<?php

namespace application\core;
use application\core\View;

abstract class Controller
{
    public $route;
    public $view;
    public $acl;
    public $model;
    public function __construct( $route )
    {
        $this->route = $route;
        if ( !$this->checkAcl() ) {
            View::errorCode(403);
        }
        $this->view = new View($route);
        // 3. в конструкторе подключаем модель
        $this->model = $this->loadModel($route['controller']);
    }

    //1. для загрузки моделей на страницы будем пользоваться ф-цией автозагрузки, которая будет загружать соответствующие модели для каждой страницы
    public function loadModel ( $modelName ) {
        // 2. формируем путь к моделям. Так как мы не знаем заранее, к какой модели мы подключимся, то формируем путь с обратным слешем
        $path = 'application\models\\' . ucfirst( $modelName );
        if ( class_exists( $path ) ) {
            //4. проверяем на налисчие класса, и если такой существует создаем его экземпляр
            return new $path;
        }
    }

    public function checkAcl ()
    {
        $this->acl = require 'application/accessControl/' . $this->route['controller'] . '.php';
        if ( $this->isAcl( 'all' ) ) {
            return true;
        }
        return false;
    }

    public function isAcl ( $key ) {
         return in_array( $this->route['action'], $this->acl[$key] );
    }
}