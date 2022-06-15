<div class="container my-5">
    <div class="row">
        <h1 class="fs-3 text-center mb-3">Editar produto</h1>
    </div>
    <?php
        extract($data);
    ?>

    <div class="row">
        <form action="" method="POST">
            <div>
                <label class="form-label" for="name">Nome</label>
                <input value="<?= $product['name'] ?>" type="text" class="form-control mb-3" id="name" name="name" placeholder="Nome do Produto">
            </div>
            
            <div>
                <label class="form-label" for="description">Descrição</label>
                <input value="<?= $product['description'] ?>" class="form-control mb-3" id="description" name="description" placeholder="Descreva o produto"></input>
            </div>

            <div class="">
                <label class="form-label" for="price">Preço</label>
                <input value="<?= $product['price'] ?>" type="text" class="form-control mb-3" id="price" name="price" placeholder="Preço">
            </div>

            <div>
                <label class="form-label" for="quantity">Quantidade</label>
                <input value="<?= $product['quantity'] ?>" type="text" class="form-control mb-3" id="quantity" name="quantity" placeholder="Quantidade inicial">
            </div>

            <div class="">
                <label class="form-label" for="photo">Foto</label>
                <input value="<?= $product['photo'] ?>" type="text" class="form-control mb-3" id="photo" name="photo" placeholder="Foto">
            </div>

            <button type="submit" class="btn btn-primary m-2">Atualizar</button>
            <a class="btn btn-primary m-2" href="../produtos">Retornar</a>

        </form>

    </div>
</div>