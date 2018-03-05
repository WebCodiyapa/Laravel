<?php

namespace App\Http\Controllers;

use App\Events\UserActivity;
use App\Models\Pins;
use App\Models\UserFeedBack;
use Illuminate\Http\Request;

class PinController extends Controller
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
    public function single(Request $request, $id)
    {
        $name = Pins::query()->where('id', $id)->first()->name;
        event(new UserActivity('Visited the  ', $name));
        $reviewObj = UserFeedBack::query()
            ->join('users', 'feedback.user_id', '=', 'users.id')
            ->where('feedback.pin_id', '=', $id)->get();

        $pin = Pins::query()->select('pins.*')->where('pins.id', $id);
        if (\Auth::user()) {
            $pin->leftJoin('favorites', function ($join) {
                $join->on('favorites.pin_id', '=', 'pins.id')
                    ->where('favorites.user_id', '=', \Auth::user()->id);
            })
                ->addSelect(\DB::raw('IF(favorites.id, 1,0) as is_favorite'));
        }

        $pin = $pin->first();
        return view('frontend/pin/single', compact('reviewObj', 'pin'));
    }
}
