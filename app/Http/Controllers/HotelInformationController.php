<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelInformationController extends Controller
{
    public function render(){
        return view("hotel/dash-hotel-information");
    }
}
