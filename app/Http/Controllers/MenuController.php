<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;

class MenuController extends Controller
{
    public function index() {
        $categories = Category::whereNull('category_id')->get();
        $services = Service::all();
        return view('menu\index', [
            'services' => $services,
            'categories' => $categories
        ]);
    }
}
