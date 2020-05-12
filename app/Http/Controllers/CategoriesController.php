<?php

namespace App\Http\Controllers;

use App\Category;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        return new \App\Http\Resources\Category($category);
    }
}
