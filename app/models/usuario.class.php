<?php
class Usuario
{
    private $erro = "";
    public function criarConta($POST)
    {
        $nome = trim($POST['nome']);
        $email = trim($POST['email']);
        $dataNasc = trim($POST['dataNasc']);
        $palavraPasse = trim($POST['palavraPasse']);
        $palavraPasse2 = trim($POST['palavraPasse2']);

        //usando expressões regulares para validar os dados do formulario
        if (empty($email) || !preg_match("/^[a-zA-Z_-]+@[a-zA-Z]+.[a-zA-Z]+$/", $email)) {
            $this->erro .= "Por favor Introduza um Email valido<br>";
        }


        if (empty($nome) || !preg_match("/^[a-zA-Z_-]+$/", $nome)) {
            $this->erro .= "Por favor Introduza um nome valido<br>";
        }

        if ($palavraPasse !== $palavraPasse2) {
            $this->erro .= "A palavra passe não é a mesma<br>";
        }

        if (strlen($palavraPasse) < 7) {
            $this->erro .= "A palavra passe precisa de mais de 7 caracteres<br>";
        }

        if ($this->erro == "") {
            //guardar se tudo estiver bem
            $nivel = "Cliente";
            $url_adress = $this->get_maiorTamanho_aleatorio(60);
        }


        // preg_match("/^[a-zA-Z_-]+@[a-zA-Z]+.[a-zA-Z]+$/", $email)


    }


    public function login($POST)
    {
    }

    public function getUsuario($url)
    {
    }


    private function get_maiorTamanho_aleatorio($tamanho) {

		$array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
		$text = "";

		$tamanho = rand(4,$tamanho);

		for($i=0;$i<$tamanho;$i++) {

			$aleatorio = rand(0,61);
			
			$text .= $array[$aleatorio];

		}

		return $text;
	}
}
