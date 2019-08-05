<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Request $request) {
      if(\Auth::user()) {
        $authURL = null;
        $client = new \Google_Client();
        $client->setApplicationName("Brushed");
        $client->setAuthConfig(resource_path('configs/client_secret_264256167048-g31lc2la4l44mncfnjsvd8v8vlbmmudg.apps.googleusercontent.com.json'));
        $client->setRedirectUri(route('review'));
        $client->addScope('https://www.googleapis.com/auth/business.manage');

        if (isset($_REQUEST['logout'])) {
          $request->session()->forget('review_token');
        }

        if (isset($_GET['code'])) {
          $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
          $client->setAccessToken($token);
          $this->getReviews($token);
          // store in the session also
          $request->session()->put('review_token', $token);
          // redirect back to the example
          header('Location: ' . filter_var(route('review'), FILTER_SANITIZE_URL));
        }

        // set the access token as part of the client
        if ($request->session()->exists('review_token')) {
          $client->setAccessToken($request->session()->get('review_token'));
          $this->getReviews($request->session()->get('review_token'));
          if ($client->isAccessTokenExpired()) {
            $request->session()->forget('review_token');
          }
        }
        else {
          $authURL = $client->createAuthUrl();
        }

        return view('reviews/index', ['authURL' => $authURL]);
      }
      else {
        return redirect('admin/login');
      }
    }

    private function getReviews($token) {
      if(isset($token)) {
        $access_token = $token['access_token'];
        \Debugbar::info($access_token);
        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://mybusiness.googleapis.com/v4/accounts/105238611946560795430/locations/9296540455718259070/reviews',
        ['headers' => [
            'Authorization' => 'Bearer ' . $access_token,
            'Content-type' => 'application/json'
          ]
        ]);
      }
      else echo 'no token';
    }
}
