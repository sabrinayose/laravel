<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\facades\view;

class BookController extends Controller
{
    //index;
    public function index(){
        return "Ini adalah index book";
    }

    //view judul
    public function viewJudul1($judul){
        return "Judul buku yang anda baca adalah: ".$judul;
    }

    public function viewJudul($judul){
        $data = 
            array 
            ('judul' => $judul);
            return 
            View::make('book.book', $data);
    }
}
