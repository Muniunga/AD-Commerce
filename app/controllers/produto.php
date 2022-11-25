<?php

class Produto extends Controller
{
    public function index()
    {
        $dados['titulo_pagina'] = "Produto detalhes";
       $this->view("/produto", $dados);
    } 
}


?>