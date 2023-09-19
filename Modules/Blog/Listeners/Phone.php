<?php

namespace Modules\Blog\Listeners;
use App\Events\phoneprocess;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Blog\Entities\PhoneDetail;

class phone
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
    public function handle(phoneprocess $event)
    {

        $phone = new PhoneDetail();
        $phone->user_id = $event->data['id'];
        $phone->phone = $event->data['phone'];
        $phone->save();

    }
}
