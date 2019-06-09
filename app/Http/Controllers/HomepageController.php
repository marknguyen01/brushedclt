<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturedService;

class HomepageController extends Controller
{
    public function index() {
        $featured_services = FeaturedService::paginate(4);
        $reviews = [
            [
                'name' => 'John Doe',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco consectetur laboris nisi ut aliquip ex ea commodo consequat.',
                'rating' => 3,
                'image' => asset('img/no_image.png'),
            ],
            [
                'name' => 'Mark Johnson',
                'description' => 'test',
                'rating' => 5,
                'image' => asset('img/no_image.png'),
            ],
            [
                'name' => 'Ashley',
                'description' => 'Nothing here',
                'rating' => 5,
                'image' => asset('img/no_image.png'),
            ],
            [
                'name' => 'Jay',
                'description' => 'Test',
                'rating' => 5,
                'image' => asset('img/no_image.png'),
            ],
        ];
        return view('index', [
            'featured_services' => $featured_services,
            'reviews' => $reviews,
        ]);
    }
}
