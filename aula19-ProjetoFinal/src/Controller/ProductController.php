<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class ProductController extends AbstractController
{
    public function listAction() : void
    {
        $connection = Connection::getConnection();

        $result = $connection->prepare('SELECT * FROM tb_product');
        $result->execute();

        // var_dump($result->fetchAll(\PDO::FETCH_ASSOC));

        parent::render('product/list', $result);
    }

    public function addAction() : void
    {
        $connection = Connection::getConnection();

        if ($_POST) {

            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $photo = $_POST['photo'];
            $categoryId = $_POST['category'];
            $createdAt = date('Y-m-d H:i:s');

            $query = "INSERT INTO tb_product (name, description, price, quantity, photo, category_id, created_at) 
            VALUES ('{$name}', '{$description}', '{$price}', '{$quantity}', '{$photo}', '{$categoryId}', '{$createdAt}')";

            $preparacao = $connection->prepare($query);
            $preparacao->execute();

            header('Location: /produtos');
            exit;
        }

        $result = $connection->prepare('SELECT * FROM tb_category');
        $result->execute();

        parent::render('product/add', $result);
    }

    public function editAction() : void
    {
        parent::render('product/edit');
    }

    public function deleteProductAction() : void
    {
        $id = $_GET['id'];
        $connection = Connection::getConnection();

        $query = "DELETE FROM tb_product WHERE id = {$id}";
        $preparacao = $connection->prepare($query);
        $preparacao->execute();

        $message = 'Produto excluído com sucesso!';

        include '../src/View/product/delete.php';

        parent::render('product/delete', $message);
    }
}