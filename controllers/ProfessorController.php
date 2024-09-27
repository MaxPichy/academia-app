<?php

    include "../models/Professor.php";

    if(isset($_GET["action"]) && $_GET["action"] == "cadastrar") {
        $controller = new ProfessorController();
        $controller->cadastrar();

        class ProfessorController{

            public function cadastrar(){
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nome = $_POST["nome"];
                    $email = $_POST["email"];
                    $telefone = $_POST["telefone"];
                    $data_nascimento = $_POST["data_nascimento"];
                    $especialidade = $_POST["especialidade"];
                    $genero = $_POST["genero"];

                    if($nome && $email && $telefone && $data_nascimento && $especialidade && $genero) {
                        $profModel = new Professor();
                        $profModel->cadastrarProfessor($nome, $email, $telefone, $data_nascimento, $especialidade, $genero);
                    }

                }
            }
        }
    }

?>