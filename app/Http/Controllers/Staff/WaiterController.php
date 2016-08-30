<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Spot;

class WaiterController extends Controller
{

    public function index() {
    	$spots = Spot::all();
    	return view('staff.waiter', ["spots" => $spots]);
    }

    public function openSpot(Request $request) {
    	$spotId = $request->input('spotId');
    	echo $spotId;
    }
}
