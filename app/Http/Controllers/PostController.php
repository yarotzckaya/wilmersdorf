<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index($id) {
        $post = DB::table('posts')->find($id);
        $cat_id = DB::table('categories')->where('id', '=', $post->category_id)->value('name'); // finds a category as an array and selects it's name

        return view('user.post', ['post' => $post, 'cat_id' => $cat_id]);
    }
}
