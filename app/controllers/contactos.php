<?php

class Contactos extends Controller
{
    public function index()
    {
        $dados['titulo_pagina'] = "Entre em contacto ";
       $this->view("/contactos", $dados);
    } 
}


?>