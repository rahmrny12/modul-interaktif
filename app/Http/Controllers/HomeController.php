<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Module;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('students.home', compact('categories'));
    }

    public function show($id)
    {
        $module = Module::find($id);

        return view('students.module', compact('module'));
    }
}
