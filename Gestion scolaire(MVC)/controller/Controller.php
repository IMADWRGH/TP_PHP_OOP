<?php
abstract class Controller
{
    public function __construct(string $model)
    {
        include_once ROOT . "model/" . $model . ".php";
    }
    public function view(string $file, $data = null)
    {
    }
    public function Redirect($path)
    {
    }
}
