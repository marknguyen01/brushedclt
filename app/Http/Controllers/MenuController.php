<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;

class MenuController extends Controller
{
    public function index($name = null) {
        $all_categories = Category::whereNull('category_id')->get();
        $categories;
        if(!$name || $name == 'all') {
            $categories = $all_categories;
            $services = Service::all();
        }
        else {
            $name = ucwords(str_replace("-", " ", $name));
            $categories = Category::whereNull('category_id')->where('name', $name)->get();
            if(!$categories->isEmpty()) {
                $services = $categories->first()->services();
            }
            else abort(404);
        }
        return view('menu.index', [
            'services' => $services,
            'all_categories' => $all_categories,
            'active_category' => $name,
            'categories' => $categories,
        ]);
    }
}
