<?php

class Shop extends Controller
{
    public function index()
    {
        $dados['titulo_pagina'] = "Shop";
       $this->view("/shop", $dados);
    } 
}


?>