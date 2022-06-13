<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<h1>Cadastrar Categorias</h1>

<div class="container">
<form action="" method="POST">
    <div class="form-group">
        <label class="form-label" for="name">Nome</label>
        <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Nome da Categoria">
    </div>
    <div class="form-group">
        <label class="form-label" for="description">Descrição</label>
        <textarea class="form-control mb-3" id="description" name="description">
        </textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
</form>
</div>