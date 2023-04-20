<?php
// echo 'controller';
abstract class Controller
{
    public function __construct(string $model)
    {
    }
    public function view(string $file, $data = null)
    {
    }
    public function Redirect($path)
    {
    }
}
