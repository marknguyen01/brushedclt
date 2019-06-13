<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturedService;

class HomepageController extends Controller
{
    public function index() {
        $featured_services = FeaturedService::all();
        $reviews = [
            [
                'name' => 'Gary D.',
                'description' => 'I had a pedicure done a couple weeks ago there. They did a really good job and making me feel comfortable and relaxed. My feet feel great! Thank you.',
                'rating' => 5,
                'image' => asset('img/user.png'),
            ],
            [
                'name' => 'Mendi W.',
                'description' => 'I had micro blading done and was very pleased with how they turned out. It only took about 30 minutes and was not painful at all. I would highly recommend having this done if you are unsatisfied with the way your eyebrows look. This procedure fills in your brows and looks very natural.',
                'rating' => 5,
                'image' => asset('img/user.png'),
            ],
            [
                'name' => 'Danielle E.',
                'description' => 'Very happy with our service. 4 of us, 2 adults and 2 children received pedicures. The nail tech were so nice and paid attention to detail. Very beautiful decor, asked if we wanted wine or a beverage. Chairs are beautiful and comfortable. Their utensils were in a sterile bag, the foot tubs were covered with a bag, super clean and professional. Will definitely be coming back.',
                'rating' => 5,
                'image' => asset('img/user.png'),
            ],
            [
                'name' => 'Alexis J.',
                'description' => 'Professional. Friendly staffs. Great prices too!!!',
                'rating' => 5,
                'image' => asset('img/user.png'),
            ],
        ];
        return view('index', [
            'featured_services' => $featured_services,
            'reviews' => $reviews,
        ]);
    }
}
