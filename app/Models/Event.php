<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $eventDateString = "";

    protected $table = 'events';

    protected $fillable = ['name', 'description', 'gift', 'cost', 'event_date',
    'background_image', 'event_time', 'eventbrite_url'];

    public function convertDate()
    {
        return explode(" ", $this->event_date);
    }

    public function getDateString()
    {
        $args = func_get_args();

        if(count($args) == 0)
        {
            return $eventDateString;
        }
        $formattedString = "";
        $dateArray = explode(" ", $this->eventDateString);

        foreach($args as $arg)
        {
            $formattedString = $formattedString . $dateArray[$arg] . " ";
        }
        return trim($formattedString);
    }

    public function setDateString($value)
    {
        $this->eventDateString = $value;
    }
}
