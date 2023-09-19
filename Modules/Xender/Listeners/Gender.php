<?php

namespace Modules\Xender\Listeners;
use App\Events\genderprocess;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Xender\Entities\XenderDetail;

class gender
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(genderprocess $event)
    {
        // dd($event);
        $phone = new XenderDetail();
        $phone->user_id = $event->data['id'];
        $phone->gender = $event->data['gender'];
        $phone->save();
    }
}
