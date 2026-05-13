<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::paginate(2);
        return view('admin.tag.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        Tag::create($request->all());
        return redirect()->route('tag.index')->with('success', 'Тэг добавлен');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $tag = Tag::find($id);
        return view('admin.tag.edit', compact('tag'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $tag = Tag::find($id);

        $tag->update($request->all());
        return redirect()->route('tag.index')->with('success', 'Изменения сохранены');
    }

    public function destroy(string $id)
    {
        //$category = Category::find($id);
        //$category->delete();

        Tag::destroy($id);
        return redirect()->route('tag.index')->with('succes', 'Тег удален');
    }
}
