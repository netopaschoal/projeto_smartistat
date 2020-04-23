<?php

namespace App\Listeners;

use App\Events\AlarmeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Mail\AlertaTemperatura;
use Illuminate\Support\Facades\Mail;

class AlarmeEventListener
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
     * @param  AlarmeEvent  $event
     * @return void
     */
    public function handle(AlarmeEvent $event)
    {
        info("testando o listener");
        info("Email: ".$event->email);

        Mail::to($event->email)->send(new AlertaTemperatura("Neto"));
        
    }
}
