<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RandomQuoteController extends Controller
{

    public function show(Request $request) {
      $name = $request->input('name');

      if( $name ) {
        $url = 'https://api.whatdoestrumpthink.com/api/v1/quotes/personalized?q=' . $name;
      } else {
        $url = 'https://api.whatdoestrumpthink.com/api/v1/quotes/random';
      }

      $client = new Client();
      $response = $client->request('GET', $url)->getBody()->getContents();

      //$quote = json_decode($response, true);

    	return view('welcome', [
        'quote' => $response,
        'name' => $name
      ]);
  }

}
