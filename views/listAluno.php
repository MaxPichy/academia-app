<?php 

    include("../includes/header.php");
    include("controllers/AlunoController.php");

    $aluno = new Aluno();
    $alunos = $aluno->listarAlunos();

?>

    <div class="container mt-5">
        <h2> Lista de Alunos </h2>

        <table class="table">
            <thead>
                <tr>
                    <td scope="col"> ID </td>
                    <td scope="col"> Nome </td>
                    <td scope="col"> Email </td>
                    <td scope="col"> Telefone </td>
                    <td scope="col"> Data de Nascimento </td>
                    <td scope="col"> Gênero </td>
                    <td scope="col"> Data de Cadastro </td>
                    <td scope="col"> Ação </td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($alunos as $aluno): ?>
                <tr>
                    <th scope="row"> <?php echo $aluno["id"]; ?> </th>
                    <td> <?php echo $aluno["nome"]; ?> </td>
                    <td> <?php echo $aluno["email"]; ?> </td>
                    <td> <?php echo $aluno["telefone"]; ?> </td>
                    <td> <?php echo $aluno["data_nascimento"]; ?> </td>
                    <td> <?php echo $aluno["genero"]; ?> </td>
                    <td> <?php echo $aluno["data_cadastro"]; ?> </td>
                    <td> 
                        <a href="editarAluno.php?id=<?php echo $aluno["id"]; ?>" class="btn btn-warning"> Editar </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

<?php
    include("../includes/footer.php");
?>