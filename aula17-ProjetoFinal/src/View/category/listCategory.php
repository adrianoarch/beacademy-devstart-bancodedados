<div class="container mt-3">
    <div class="row">
        <h1 class="fs-3 text-center">Categorias cadastradas</h1>
    </div>

    <div class="row mt-1">
        <table class="table table-hover table-striped">
            <thead class=table-dark>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($category = $data->fetch(\PDO::FETCH_ASSOC)){
                     extract($category);

                    echo '<tr>';
                    echo "<td>$id</td>";
                    echo "<td>$name</td>";
                    echo "<td>$description</td>";
                    echo "<td> 
                    <a class='btn btn-warning me-3' href='categorias/editar?id={$id}'>Editar</a>
                    <a class='btn btn-danger' href='categorias/excluir?id={$id}'>Excluir</a> 
                    </td>";
                    echo '</tr>';
                    }
                    ?>
        </table>
        <div class="text-center mt-3">
        <a class="btn btn-primary " href="/categorias/nova">Cadastrar Nova</a>
        </div>
    </div>
</div>