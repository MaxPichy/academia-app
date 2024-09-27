<?php

    include "../bd/conexao.php";

    class Professor{

        private $db;

        public function __construct(){
            $this->db = Conexao::novaConexao();
        }

        public function listarProfessores(){
            $query = $this->db->query("SELECT * FROM professores");
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function cadastrarProfessor($nome, $email, $telefone, $data_nascimento, $especialidade, $genero){
            $cadProf = $this->db->prepare("INSERT INTO alunos(nome, email, telefone, data_nascimento, especialidade, genero) VALUES (?, ?, ?, ?, ?, ?)");
            $cadProf->execute([$nome, $email, $telefone, $data_nascimento, $especialidade, $genero]);
        }

    }

?>