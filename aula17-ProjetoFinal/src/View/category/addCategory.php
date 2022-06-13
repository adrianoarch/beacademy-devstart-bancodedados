<div class="container my-3">
    <div class="row">
        <h1 class="fs-3 text-center mb-3">Cadastrar nova categoria</h1>
    </div>


    <form action="" method="POST">
        <div class="form-floating">
            <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Nome da Categoria">
            <label for="name">Nome</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control mb-3" id="description" name="description" style="resize:none"></textarea>
            <label for="description">Descrição</label>
            
        </div>
        <button type="submit" class="btn btn-primary m-2">Cadastrar</button>
        <a class="btn btn-primary m-2" href="../categorias">Retornar</a>
    </form>

</div>