<?php

class Controller
{
    public function view($pasta, $dados = [])
    {
        if (file_exists("../app/views/" . THEME . $pasta . ".php")) {
            include "../app/views/" . THEME . $pasta . ".php";
        }
    }

    public function carregaModel($model)
    {
        if (file_exists("../app/models/" . strtolower($model) . ".php")) {
            include "../app/models/" . strtolower($model) . ".php";
            return $a = new $model();
        }
        return false;
    }
}
