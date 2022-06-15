<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;


class CategoryController extends AbstractController
{
    public function listCategoryAction() : void
    {
        $connection = Connection::getConnection();

        $result = $connection->prepare('SELECT * FROM tb_category');
        $result->execute();

        parent::render('category/listCategory', $result);
        // var_dump($result);
    }

    public function addCategoryAction() : void
    {
        if($_POST) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $connection = Connection::getConnection();
            $query = "INSERT INTO tb_category (name, description) VALUES ('{$name}', '{$description}')";

            $result = $connection->prepare($query);
            $result->execute();

            echo "Categoria adicionada com sucesso!";

            // header('Location: ./public/category/listCategory');
        }
        parent::render('category/addCategory');
    }

    public function editCategoryAction() : void
    {
        $id = $_GET['id'];

        $connection = Connection::getConnection();

        if($_POST) {
            $newname = $_POST['name'];
            $newdescription = $_POST['description'];
            $queryUpdate = "UPDATE tb_category SET name='{$newname}', description='{$newdescription}' WHERE id='{$id}'";

            $result = $connection->prepare($queryUpdate);
            $result->execute();

            echo "Categoria atualizada com sucesso!";
        }

        $query = "SELECT * FROM tb_category WHERE id='{$id}'";

        $result = $connection->prepare($query);
        $result->execute();

        $data = $result->fetch(\PDO::FETCH_ASSOC);

        parent::render('category/editCategory', $data);
    }

    public function deleteCategoryAction() : void
    {
        $connection = Connection::getConnection();
        $id = $_GET['id'];
        $query = "DELETE FROM tb_category WHERE id='{$id}'";

        $result = $connection->prepare($query);
        $result->execute();

        echo "Categoria excluída com sucesso!";
    }
}
