<?php

declare(strict_types=1);

namespace App\Controller;

class CategoryController extends AbstractController
{
    public function listCategoryAction() : void
    {
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
{
   
}