<?php

namespace App\Http\Controllers;

use App\Models\Pins;
use App\Models\ProfileSetting;
use App\Models\User;
use App\Models\UserFeedBack;
use App\Models\UserImage;
use Illuminate\Http\Request;

class ProfileController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewProfile()
    {
        $user = User::query()->where('id', '=', \Auth::user()->id)->first()->load('media');
        return view('frontend/profile/index', compact('user'));
    }

    public function getSetting(Request $request)
    {
        $setting = ProfileSetting::query()->where('user_id', '=', \Auth::user()->id)->first();
        return view('frontend/profile/setting', compact('setting'));
    }

    public function postSetting(Request $request)
    {
        ProfileSetting::query()->UpdateOrcreate(
            ['user_id' => \Auth::user()->id],
            [
                'reseive_around_me' => $request->input('reseive-around-me'),
                'loved_topics_update' => $request->input('loved-topics-update'),
                'show_my_position' => $request->input('show-my-position'),

            ]
        );
        return back();
    }

    public function invateFriend()
    {
        return view('frontend/profile/invate_friend');
    }

    public function helpContact()
    {
        return view('frontend/profile/contact');
    }

    public function writFeedback()
    {
        $visitedPinOgj = Pins::query()
            ->Join('activity_log', 'name', '=', 'log_name')
            ->where('activity_log.causer_id', '=', \Auth::user()->id)
            ->select('pins.name')
            ->groupby('pins.name')
            ->get();

        return view('frontend/profile/feedback', compact('visitedPinOgj'));
    }

    public function userSaveNote(Request $request)
    {

        $contributor = User::query()->where('id', '=', \Auth::user()->id)->first()->contributor;
        UserFeedBack::query()->updateOrCreate(
            ['user_id' => \Auth::user()->id],
            [
                'pin_id' => ($request->input('pin_id')) ? $request->input('pin_id') : 1,
                'comment' => $request->input('favorite_note'),
                'raiting' => $request->input('rating-circle'),

            ]);
        User::query()->where('id', \Auth::user()->id)->update([
            'contributor' => $contributor + 1,
        ]);
        return back();
    }

    public function UserFavorites()
    {
        $favorites = Pins::query()->select('pins.*')->join('favorites', 'pins.id', '=', 'favorites.pin_id')
            ->where('favorites.user_id', '=', \Auth::user()->id)
            ->addSelect(\DB::raw('IF(favorites.id, 1,0) as is_favorite'))->get();
//        dd($favorites);
        return view('frontend/profile/favorites', compact('favorites'));
    }

    public function getEdit()
    {
        $user = \Auth::user();
        return view('frontend/profile/edit', compact('user'));
    }

    public function editImage(Request $request)
    {


        $file = $request->file('logo');
        if (!$file) {
            return redirect()->back();
        }
        $ext = $request->file('logo')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $location = $request->location;
        $user_image = UserImage::query()->create([
            'user_id' => \Auth::user()->id,
            'name' => $name,
            'location' => $location,
        ]);
        $user_image->addMedia($file)->toMediaCollection('default', 'media');
        return back();
    }

    public function postEdit(Request $request)
    {

        User::query()->where('id', \Auth::user()->id)->update([
            'lastname' => $request->input('lastname'),
            'firstname' => $request->input('firstname'),
            'email' => $request->input('email'),
        ]);

        return back();
    }

}

