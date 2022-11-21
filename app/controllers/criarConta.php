<?php

class CriarConta extends Controller
{
    public function index()
    {
        $dados['titulo_pagina'] = "Criar Conta";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            mostrar($_POST);
            $usuario = $this->carregaModel("Usuario");
            $usuario->criarConta($_POST);
        }
        $this->view("/criarConta", $dados);
    }
}
