<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    //
    public function index() {
    	return view('staff.menu');
    }
    public function productpopup() {
    	return view('staff.productpopup');
    }
}
