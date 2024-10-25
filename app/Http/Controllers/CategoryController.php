<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', ['categories'=> $categories]);
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $request ->validate([
            'name' => 'required|max:255',
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/category');
    }
}


