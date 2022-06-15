<div class="container mt-3">
    <div class="row">
        <h1 class="fs-3 text-center">Produtos cadastrados</h1>
    </div>

    <div class="row mt-1">
        <div class="text-end mt-1" id="tableProducts">
            <a class="btn btn-secondary mb-2" href="/produtos/novo">Cadastrar Novo</a>
        </div>
        <table class="table table-hover table-striped align-middle">
            <thead class=table-dark>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Foto</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Quantidade</th>
                    <th>Criação</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody class="fs-sm-5">
                <?php 
                    while ($product = $data->fetch(\PDO::FETCH_ASSOC))
                    {
                     extract($product);

                     echo "
                            <tr>
                                <td>{$id}</td>
                                <td>{$name}</td>
                                <td>{$description}</td>
                                <td><img class='img-fluid' src='{$photo}' style='width:80px'></td>
                                <td>{$price}</td>
                                <td>{$category_id}</td>
                                <td>{$quantity}</td>
                                <td>{$created_at}</td>
                                <td>
                                <a class='btn btn-sm btn-warning m-1 text-center' href='produtos/editar?id={$id}'>Editar</a>
                                <a class='btn btn-sm btn-danger m-1 text-center' href='produtos/excluir?id={$id}' id='deleteProduct'>Excluir</a> 
                                </td>
                            </tr>
                     ";
                    }
                    ?>
        </table>
    </div>
</div>

