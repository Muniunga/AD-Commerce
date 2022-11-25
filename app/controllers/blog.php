<?php

class Blog extends Controller
{
    public function index()
    {
        $dados['titulo_pagina'] = "Blog";
       $this->view("/blog", $dados);
    } 
}


?>