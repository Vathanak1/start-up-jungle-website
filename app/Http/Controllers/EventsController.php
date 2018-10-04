<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    function events(){
        //get event 
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://www.eventbriteapi.com/v3/events/search/?location.address=phnompenh&token=SL2UDOOEU3U4TLMJISOQ');
        $events = json_decode($response->getBody()->getContents(), true); // :'(
    //    dd($events);
            return view('home.events')->with('events',$events);
    }
}
