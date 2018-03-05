<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use App\Models\Pins;
use Illuminate\Http\Request;

class UserFavotitesController extends Controller
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
    public function addToFavorite(Request $request, $id)
    {
        $user = \Auth::user()->id;


        Favorites::query()->create([
            'user_id' => $user,
            'pin_id' => $id
        ]);

        if ($request->ajax()) {
            return response()->json('OK');
        }

        return back();
    }

    public function removeFromFavorite(Request $request, $id)
    {
        Favorites::query()->where('user_id', \Auth::user()->id)->where('pin_id', $id)->delete();

        if ($request->ajax()) {
            return response()->json('OK');
        }
        return back();
    }
}
