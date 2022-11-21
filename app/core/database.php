<?php
class Database
{
    public static $conexao;

    public function __construct(){
      try{
        
        $string = DB_TYPE . ":host=". DB_HOST . ";dbname=" . DB_NOME;
        self::$conexao = new PDO($string, DB_USER, DB_PASSWORD);

      }catch (PDOException $e) {
        die($e->getMessage());
      }
    }

    //verifica se ainstancia da classe foi realizada caso não ela é instanciada
    public static function getInstance(){
        if(self::$conexao){
            return self::$conexao;
          } 
        return $instance = new self();
         
    }

    // Ler dados da BD
     public function lerbd( $query, $dados = array() )
    {
        $stm = self::$conexao->prepare($query);
        $resultado = $stm->execute($dados);

        if ($resultado) {   
        $dados= $stm->fetchAll(PDO::FETCH_OBJ);
        if (is_array($dados)) {
            return $dados;
        }
    }
        return false;
    }

    // Escrever na BD
     public function escreverbd( $query, $dados = array() )
    {
        $stm = self::$conexao->prepare($query);
        $resultado = $stm->execute($dados);

        if ($resultado) {   
        
            return true;
            
        } return false;
    }
       
    }


/* Testar se está conectado a BD 

$db = Database::getInstance();

$dados = $db->lerbd("describe usuario");

mostrar($dados);
*/