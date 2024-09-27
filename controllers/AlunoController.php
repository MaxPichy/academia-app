<?php

    include_once "../controllers/Controller.php";
    $msg = "vazio";

    class AlunoController extends Controller {
        
        #Função de cadastro de aluno
        public function cadastrar(){
            global $msg;

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $data_nascimento = $_POST["data_nascimento"];
            $genero = $_POST["genero"];

            $alunoModel = new Aluno();

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $alunoModel = $this->model("Aluno");
                $alunoModel->cadastrarAluno($nome, $email, $telefone, $data_nascimento, $genero);
            } else {
                $this->view("alunos/cadastro");
            }

            $msg = 2;
        }

        #Função de listar aluo
        public function listar(){
            $alunoModel = $this->model("Aluno");
            $alunos = $alunoModel->listarAlunos();
            $this->view("alunos/listar", ["alunos" => $alunos]);
        }

        #Função de registrar
        public function registrarTreino($alunoId, $treinoId){
            $treinoModel = $this->model("Treino");
            $treinoModel->registrarTreino($alunoId, $treinoId);
            header("Location: /aluno/treinos/" .$alunoId);
        }

    }

    print_r($msg);

?>