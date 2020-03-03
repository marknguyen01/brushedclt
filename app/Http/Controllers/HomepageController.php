<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturedService;
use App\Models\Review;
use App\Models\TeamMember;

class HomepageController extends Controller
{
    public function index() {
        $featured_services = FeaturedService::all()->sortBy('order');
        $featured_services->each(function($s) {
          $s->href = route('menu', str_slug($s->category()->exists() ? $s->category->name : $s->name));
        });
        $reviews = Review::where('rating', 5)->whereNotNull('comment')->limit(6)->get();
        $team_members = TeamMember::all();
        return view('index', [
            'featured_services' => $featured_services->values(),
            'reviews' => $reviews,
            'team_members' => $team_members,
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
