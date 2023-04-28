<?php
abstract class Controller
{
    public function __construct(string $model)
    {
        include_once ROOT . "model/" . $model . ".php";
    }
    public function view(string $file, $data = null)
    {
        include_once  ROOT . 'view/' . get_class($this) . '/' . $file . '.php';
    }
    public function Redirect($path)
    {
    }
}
