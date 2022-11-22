<?php

class Controller
{
    public function view($pasta, $dados = [])
    {
        if (file_exists("../app/views/" . THEME . $pasta . ".php")) {
            include "../app/views/" . THEME . $pasta . ".php";
        }
    }

    public function load_model($model)
    {
        if (file_exists("../app/models/" . $model . ".class.php")) {
            include "../app/models/" . $model . ".class.php";
            return $b = new $model();
        }
        return false;
    }

   
} 
