<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function product($id){
        return '<a href="https://www.educastudio.com/category/'.$id.'">https://www.educastudio.com/category/'.$id.'</a>';
    }
}
