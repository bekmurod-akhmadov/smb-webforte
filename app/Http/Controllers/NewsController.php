<?php


namespace App\Http\Controllers;


class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }

    public function show($id)
    {
        return view('news.show');
    }
}
