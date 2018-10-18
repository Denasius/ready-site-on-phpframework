<?php
// 5. Создаем абстрактный класс Model для работы с базой данных и создаем необходимые модели для каждого контроллера
namespace application\core;
use application\libs\Db;

abstract class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new Db;
    }

}