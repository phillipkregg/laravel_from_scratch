<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostsController extends Controller
{
    public function Show($slug) {
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
