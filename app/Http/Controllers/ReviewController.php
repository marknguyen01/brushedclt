<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    private $googleClient;
    public function __construct() {
      $this->middleware('admin.user');

      $this->googleClient = new \Google_Client();
      $this->googleClient->setApplicationName("Brushed");
      $this->googleClient->setAuthConfig(resource_path('configs/client_secret_264256167048-g31lc2la4l44mncfnjsvd8v8vlbmmudg.apps.googleusercontent.com.json'));
      $this->googleClient->setRedirectUri(route('review'));
      $this->googleClient->addScope('https://www.googleapis.com/auth/business.manage');
    }
    public function index(Request $request) {
      $authURL = null;

      if (isset($_REQUEST['logout'])) {
        $request->session()->forget('review_token');
      }

      if (isset($_GET['code'])) {
        $token = $this->googleClient->fetchAccessTokenWithAuthCode($_GET['code']);
        $this->googleClient->setAccessToken($token);
        $this->getReviews($token);
        // store in the session also
        $request->session()->put('review_token', $token);

      }
      else {
        $authURL = $this->googleClient->createAuthUrl();
      }

      $reviews = Review::all();

      return view('reviews/index', ['authURL' => $authURL, 'reviews' => $reviews]);
    }

    public function refresh(Request $request) {
      if ($request->session()->exists('review_token')) {
        $token = $request->session()->get('review_token');
        $this->googleClient->setAccessToken($token);
        $this->getReviews($token);
        if ($this->googleClient->isAccessTokenExpired()) {
          $request->session()->forget('review_token');
        }
      }
      return redirect(route('review'));
    }

    private function getReviews($token) {
      if(isset($token)) {
        $access_token = $token['access_token'];
        \Debugbar::info('Review token: ' . $access_token);
        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://mybusiness.googleapis.com/v4/accounts/105238611946560795430/locations/9296540455718259070/reviews',
        ['headers' => [
            'Authorization' => 'Bearer ' . $access_token,
            'Content-type' => 'application/json'
          ]
        ]);
        $review_array = json_decode($res->getBody(), true);

        $latest_record = Review::orderBy('created_at', 'desc')->first();
        foreach($review_array['reviews'] as $x) {
          if($latest_record) {
            if($latest_record->review_id != $x['reviewId']) {
              Review::create([
                'username' => $x['reviewer']['displayName'],
                'comment' => isset($x['comment']) ? $x['comment'] : '',
                'created_at' => new \DateTimeZone($x['createTime']),
                'rating' => $this->wordToDigit($x['starRating']),
                'profilePhoto' => $x['reviewer']['profilePhotoUrl'],
              ]);
            }
            else {
              break;
            }
          }
          else {
            Review::create([
              'username' => $x['reviewer']['displayName'],
              'comment' => isset($x['comment']) ? $x['comment'] : '',
              'created_at' => \DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $x['createTime'])->format('Y-m-d H:i:s'),
              'rating' => $this->wordToDigit($x['starRating']),
              'profilePhoto' => $x['reviewer']['profilePhotoUrl'],
            ]);
          }
        }
      }
      else echo 'no token';
    }

    private function wordToDigit($word) {
      switch(strtolower($word)) {
        case 'one':
          return 1;
          break;
        case 'two':
          return 2;
          break;
        case 'three':
          return 3;
          break;
        case 'four':
          return 4;
          break;
        case 'five':
          return 5;
          break;
      }
    }


}
