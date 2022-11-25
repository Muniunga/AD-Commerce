<?php
class Usuario
{
    private $erro = "";
    public function criarConta($POST)
    {
        $dados = array();
        $dados['nome'] = trim($POST['nome']);
        $dados['email'] = trim($POST['email']);
        $dados['dataNasc'] = trim($POST['dataNasc']);
        $dados['palavraPasse'] = trim($POST['palavraPasse']);
        $palavraPasse2 = trim($POST['palavraPasse2']);

        //usando expressões regulares para validar os dados do formulario
        if (empty($dados['email']) || !preg_match("/^[a-zA-Z_-]+@[a-zA-Z]+.[a-zA-Z]+$/", $dados['email'])) {
            $this->erro .= "Por favor Introduza um Email valido<br>";
        }


        if (empty($dados['nome']) || !preg_match("/^[a-zA-Z_-]+$/", $dados['nome'])) {
            $this->erro .= "Por favor Introduza um nome valido<br>";
        }

        if ($dados['palavraPasse'] !==  $palavraPasse2) {
            $this->erro .= "A palavra passe não é a mesma<br>";
        }

        if (strlen($dados['palavraPasse']) < 7) {
            $this->erro .= "A palavra passe precisa de mais de 7 caracteres<br>";
        }

        if ($this->erro == "") {
            //guardar se tudo estiver bem
            $dados['nivel'] = "Cliente";
            $dados['url_adress'] = $this->get_maiorTamanho_aleatorio(60);
            $dados['data'] = date("Y-m-d H:i:s");

            $query = "insert into usuario (urlAdress, nome, email, palavraPasse, dataNasc, nivel, Genero, data) values (:urlAdress, :nome, :email, :palavraPasse, :dataNasc, :nivel, :Genero, :data)";
            $db = Database::getInstance();
            $resultado = $db->escreverbd($query,$dados);

            if($resultado){

				header("Location: " . ROTA . "login.php");
				die;
			}
     

        }

        $_SESSION['erro'] = $this->erro;
        // preg_match("/^[a-zA-Z_-]+@[a-zA-Z]+.[a-zA-Z]+$/", $email):


    }


    public function login($POST)
    {
    }

    public function getUsuario($url)
    {
    }


    private function get_maiorTamanho_aleatorio($tamanho)
    {

        $array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $text = "";

        $tamanho = rand(7, $tamanho);

        for ($i = 0; $i < $tamanho; $i++) {

            $aleatorio = rand(0, 61);

            $text .= $array[$aleatorio];
        }

        return $text;
    }
}
