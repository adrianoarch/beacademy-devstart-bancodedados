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
