<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'required',
        ]);

        DB::table('categories')->insert([
            "name" => $request["name"],
            "description" => $request["description"]
        ]);

        return redirect('/categories');
    }

    public function index()
    {
        $categories = DB::table('categories')->get();

        return view('categories.index', compact('categories'));
    }

    public function show(string $id)
    {
        $category = DB::table('categories')
            ->where('id', $id)->first();

        return view('categories.show', compact('category'));
    }

    public function edit(string $id)
    {
        $category = DB::table('categories')
            ->where('id', $id)->first();

        return view('categories.edit', compact('category'));
    }

    public function update(string $id, Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
            'description' => 'required',
        ]);

        DB::table('categories')
            ->where('id', $id)
            ->update([
                'name' => $request["name"],
                'description' => $request["description"]
            ]);

        return redirect('/categories');
    }

    public function destroy(string $id)
    {
        DB::table('categories')
            ->where('id', $id)->delete();

        return redirect('/categories');
    }
}
 