<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\Event;
use Carbon\Carbon;
class AgendaController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('event_date', 'desc')->get();

        $oldEvents = Event::where('event_date', '<=', Carbon::yesterday())->orderBy('event_date', 'asc')->get();
        $newEvents = Event::where('event_date', '>', Carbon::yesterday())->orderBy('event_date', 'asc')->get();
        $activeEvents = Event::where('active', '=', 'true')->get();

        $events = $newEvents->merge($oldEvents);

        $now = Carbon::today();
        foreach($events as $event){
            $eventDate = new Carbon($event->event_date);
            //check the diff in days from the performance to now
            if(!isset($closestEventDays)){
                $closestEventDays = $now->diffInDays($eventDate);
                $closestEventId = $event->id;
            }
            elseif($now->diffInDays($eventDate) < $closestEventDays){
                $closestEventId = $event->id;
                $closestEventDays = $now->diffInDays($eventDate);
            }
        }

        setlocale(LC_TIME, 'nl_NL');

        foreach($events as $event){
            $date = Carbon::parse($event->event_date);
            $formattedDate = $date->formatLocalized('%A %d %B %Y');
            $event->setDateString($formattedDate);
        }
        
        return view('frontend.agenda.index', compact('events', 'closestEventId'));
    }
}
