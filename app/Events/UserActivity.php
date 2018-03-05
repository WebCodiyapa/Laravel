<?php

namespace App\Events;

use App\Models\Pins;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserActivity
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($text, $slug = '')
    {
        $model = new Pins();
        if (\Auth::user()) {
            $endOfText = ucwords(str_replace('-', ' ', $slug)) . '.';
            $leadObj = \Auth::user();
//            activity()->causedBy($leadObj)->log($text . '' . $endOfText);
//            activity()->useLog($slug)->log($text . '' . $endOfText);
            activity()->performedOn($model)->useLog($slug)->log($text . '' . $endOfText);
        }
        return;
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
//        return new PrivateChannel('channel-name');
    }
}
