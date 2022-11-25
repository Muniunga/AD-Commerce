<?php

class Verificar extends Controller
{
    public function index()
    {
        $dados['titulo_pagina'] = "Verificar";
       $this->view("/verificar", $dados);
    } 
}


?>