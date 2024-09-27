<?php

    include_once "../models/Aluno.php";

    if(isset($_GET["action"]) && $_GET["action"] === "cadastrar") {
        $controller = new AlunoController();
        $controller->cadastrar();
    } else {
        echo "Nenhuma ação foi passada! <br>";
    }

    class AlunoController {
        
        #Função de cadastro de aluno
        public function cadastrar(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $data_nascimento = $_POST['data_nascimento'];
                $genero = $_POST['genero'];

                if ($nome && $email && $telefone && $data_nascimento && $genero) {
                    $alunoModel = new Aluno();
                    $alunoModel->cadastrarAluno($nome, $email, $telefone, $data_nascimento, $genero);
                }
            }
        }

        #Função de listar aluno
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

?>