<?php

    include_once "../controllers/Controller.php";
    include_once "../models/Aluno.php";
    $msg = "vazio";

    if(isset($_GET["action"]) && $_GET["action"] === "cadastrar") {
        $controller = new AlunoController();
        $controller->cadastrar();
    } else {
        echo "Nenhuma ação foi passada! <br>";
    }

    class AlunoController extends Controller {
        
        #Função de cadastro de aluno
        public function cadastrar(){
            global $msg;

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $data_nascimento = $_POST["data_nascimento"];
            $genero = $_POST["genero"];

            // var_dump($nome, $email, $telefone, $data_nascimento, $genero);

            if($nome && $email && $telefone && $data_nascimento && $genero){
                $alunoModel = new Aluno();

                try{
                    $alunoModel->cadastrarAluno($nome, $email, $telefone, $data_nascimento, $genero);
                    echo "Aluno cadastrado com sucesso! <br>";
                } catch (Exception $e) {
                    echo "Erro ao cadastrar aluno: " .$e->getMessage();
                }
            } else {
                echo "Dados Inválidos. <br>";
            }
            

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