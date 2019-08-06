<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturedService;
use App\Models\Review;

class HomepageController extends Controller
{
    public function index() {
        $featured_services = FeaturedService::all();
        $reviews = Review::where('rating', 5)->whereNotNull('comment')->limit(6)->get();
        return view('index', [
            'featured_services' => $featured_services,
            'reviews' => $reviews,
            'user_agent' => $this->user_agent()
        ]);
    }
    protected function user_agent() {
        $iPod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
        $iPhone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
        $iPad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
        $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
        if($iPad||$iPhone||$iPod){
            return 'ios';
        }else if($android){
            return 'android';
        }else{
            return 'pc';
        }
    }
}
