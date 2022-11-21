<?php

class Home extends Controller
{
    public function index()
    {
        $dados['titulo_pagina'] = "INICIO";
       $this->view("/index", $dados);
    } 
}


?>