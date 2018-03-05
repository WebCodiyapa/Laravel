<?php

namespace App\Http\Controllers;

use App\Models\Pins;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend/welcome');
    }

    public function pin(Request $request)
    {
        $pin = $request->input('pin');
        $pinCollection = \App\Models\Pins::query()->select('pins.*')
            ->where('pins.name','like', '%'. $pin.'%')
            ->orWhere('pins.city', 'like', '%'. $pin.'%')
            ->orWhere('pins.address', 'like', '%'. $pin.'%');
        if (\Auth::user()) {
            $pinCollection->leftJoin('favorites', function ($join) {
                $join->on('favorites.pin_id', '=', 'pins.id')
                    ->where('favorites.user_id', '=', \Auth::user()->id);
            })
                ->addSelect(\DB::raw('IF(favorites.id, 1,0) as is_favorite'));
        }

        $pinObj = $pinCollection->get();
        return view('frontend/pin/index', compact('pinObj'));
    }
}
