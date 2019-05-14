<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturedService;

class HomepageController extends Controller
{
    public function index() {
        $featured_services = FeaturedService::paginate(3);
        return view('index', [
            'featured_services' => $featured_services,
        ]);
    }
}
