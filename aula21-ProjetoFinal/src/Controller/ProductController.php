<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;
use Dompdf\Dompdf;

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

    public function editProductAction() : void
    {
        $connection = Connection::getConnection();

        $id = $_GET['id'];

        // $categories = $connection->prepare('SELECT * FROM tb_category');
        // $categories->execute();

        if($_POST) 
        {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $photo = $_POST['photo'];

            $query = "UPDATE tb_product SET 
                        name = '{$name}', description = '{$description}', price = '{$price}', photo = '{$photo}', quantity = '{$quantity}'  WHERE id = '{$id}'";

            $resultUpdate = $connection->prepare($query);
            $resultUpdate->execute();

            header('Location: /produtos');
        }

        $product = $connection->prepare("SELECT * FROM tb_product WHERE id ='{$id}'");
        $product->execute();
        
        parent::render('product/edit', [
            'product' => $product->fetch(\PDO::FETCH_ASSOC),
        ]);
    }

    public function deleteProductAction() : void
    {
        $id = $_GET['id'];
        $connection = Connection::getConnection();

        $query = "DELETE FROM tb_product WHERE id = {$id}";
        $preparacao = $connection->prepare($query);
        $preparacao->execute();

        parent::renderMessage('Produto excluído com sucesso!');
    }

    public function reportAction() : void
    {

        $connection = Connection::getConnection();
        $result = $connection->prepare('SELECT prod.id, prod.name, prod.quantity, cat.name as category FROM tb_product prod INNER JOIN tb_category cat ON prod.category_id = cat.id');
        $result->execute();


        $html = "<html>
                    <head>
                        <title>Relatório de Produtos</title>
                    </head>
                    <body>
                    <center>
                        <h1>Relatório de Produtos</h1>
                        <table border='1' width='100%'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Quantidade</th>
                                    <th>Categoria</th>
                                </tr>
                            </thead>
                            <tbody>";
        foreach ($result->fetchAll(\PDO::FETCH_ASSOC) as $product) {
            $html .= "<tr>
                        <td>{$product['id']}</td>
                        <td>{$product['name']}</td>
                        <td>{$product['quantity']}</td>
                        <td>{$product['category']}</td>
                    </tr>";
        }
        $html .= "</tbody>
                    </table>
                </body>
            </html>";

        $pdf = new Dompdf();
        $pdf->loadHtml($html);
        $pdf->render();
        $pdf->stream('relatorio.pdf', ['Attachment' => false]);

        // parent::render('product/report',);
    }
}