<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(20);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        dd($request->all());

        return redirect()->route('posts.index')->with('success', 'Статья добавлена');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        return view('admin.posts.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        dd($request->all());

        return redirect()->route('posts.index')->with('success', 'Изменения сохранены');
    }

    public function destroy(string $id)
    {
        Tag::destroy($id);
        return redirect()->route('posts.index')->with('succes', 'Статья удалена');
    }
}
