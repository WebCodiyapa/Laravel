<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use App\Models\Pins;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAddPlace()
    {
        return view('frontend.pin.add_place');
    }

    public function postAddPlace()
    {
        return back();
    }
}
