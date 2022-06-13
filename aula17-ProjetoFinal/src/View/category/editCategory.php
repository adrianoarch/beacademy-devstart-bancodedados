<h1>Editar Categoria</h1>

<div class="container">
    <form action="" method="POST">
        <div class="form-group">
            <label class="form-label" for="name">Nome</label>
            <input type="text" value="<?= $data['name']; ?>" class="form-control mb-3" id="name" name="name" placeholder="Nome da Categoria">
        </div>
        <div class="form-group">
            <label class="form-label" for="description">Descrição</label>
            <textarea class="form-control mb-3" id="description" name="description"><?= $data['description'];?></textarea>
        </div>

        <button type="submit" class="btn btn-primary m-2">Confirmar</button>
        <a class="btn btn-primary m-2" href="../categorias">Retornar</a>

    </form>
</div>