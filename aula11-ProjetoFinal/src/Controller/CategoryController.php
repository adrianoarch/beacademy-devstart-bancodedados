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
        
        $cat = $result->fetchAll(\PDO::FETCH_ASSOC);

        var_dump($cat);

        parent::render('category/listCategory');
    }

    public function addCategoryAction() : void
    {
        parent::render('category/addCategory');
    }

    public function editCategoryAction() : void
    {
        parent::render('category/editCategory');
    }
}
