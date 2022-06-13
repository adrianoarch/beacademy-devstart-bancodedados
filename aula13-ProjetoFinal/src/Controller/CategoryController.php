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
        parent::render('category/editCategory');
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
