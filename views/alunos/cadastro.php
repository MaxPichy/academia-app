<?php
    include "../../includes/header.php";
?>
<div class="container mt-5">

    <h2> Cadastro de Aluno </h2>
    <form action="../../controllers/AlunoController.php?action=cadastrar" method="POST">

        <div class="mb-3">
            <label for="nome" class="form-label"> Nome: 
                <input type="text" class="form-control" id="nome" name="nome" required>
            </label>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label"> Email: 
                <input type="email" class="form-control" id="email" name="email" required>
            </label>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label"> Telefone: 
                <input type="text" class="form-control" id="telefone" name="telefone" required>
            </label>
        </div>

        <div class="mb-3">
            <label for="data_nascimento" class="form-label"> Data de Nascimento: 
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </label>
        </div>

        <div class="mb-3">
            <label for="genero" class="form-label"> Gênero: 
                <input type="text" class="form-control" id="genero" name="genero" required>
            </label>
        </div>

        <button type="submit" class="btn btn-primary"> Cadastrar </button>

    </form>
</div>
<?php
    include "../../includes/footer.php";
?>