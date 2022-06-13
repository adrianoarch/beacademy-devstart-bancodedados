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
        parent::render('product/add');
    }

    public function editAction() : void
    {
        parent::render('product/edit');
    }
}