<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class MainController extends Controller
{
    public function index() 
    {
        $tag = new Tag();
        $tag->title = 'гав';
        $tag->save();
        return view ('admin.index');
    }
}
