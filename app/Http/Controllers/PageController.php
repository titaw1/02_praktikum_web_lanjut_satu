<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Nama : Tita Wijayanti, Nim : 1941720053';
    }
    public function articles($id){
        return 'Halaman Artikel dengan id '.$id;
    }

}
