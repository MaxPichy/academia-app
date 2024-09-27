<?php
class Conexao{
        private static $instance;

        public static function novaConexao(){
            if (!isset(self::$instance)){
                try {
                    self::$instance = new PDO('mysql:host=localhost;dbname=academia','root','');
                    self :: $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    die("Erro ao conectar ao banco de dados: " .$e->getMessage());
                }
            }
            return self::$instance;
        }
    }

?>
