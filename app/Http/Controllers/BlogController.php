<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * display the first page for blog
     *
     * @return  View
     */
    public function index() {
        return view('pages.blog.index');
    }

    public function category() {
        return view('pages.blog.category');
    }
}
