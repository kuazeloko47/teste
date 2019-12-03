<div class="row container">
    <?php
    include('db/MySQL.php');
    $MySQL = new MySQL();
    $query = "SELECT isbn,nm_livro,autor,descricao FROM livros WHERE is_ativo = 1";

    $comando = mysqli_query($MySQL->Conexao(), $query);
    foreach ($comando as $valor) :
        ?>

        <div class="col-md-4">
            <div class="jumbotron jumbotron-fluid">
                <h1 class="display-4"><?php echo $valor['nm_livro']; ?></h1>
                <p class="lead"><?php echo $valor['autor']; ?></p>
                <hr class="my-4">
                <p><?php echo $valor['descricao']; ?></p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Editar</a>
                <a class="btn btn-danger btn-lg" href="#" role="button">Excluir</a>
            </div>
        </div>

    <?php endforeach; ?>
</div>