<?php

class Login extends Controller
{
    public function index()
    {
        $dados['titulo_pagina'] = "Login";
       $this->view("/login", $dados);
    } 
}


?>