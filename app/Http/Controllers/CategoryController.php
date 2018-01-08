<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index() {
        $categories = DB::table('categories')->get();
        return view('user.categories', ['categories' => $categories]);
    }

    public function show($id) {
        $category = DB::table('categories')->find($id);
        $posts = DB::table('posts')->where('category_id', '=', $id)->get();
        return view('user.category_posts', ['posts' => $posts, 'category' => $category]);
    }
}
