<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Train extends Model
{
    use HasFactory;

    public function getFormattedDepartureDate()
    {
        return date('D F Y', strtotime($this->departure_date));
        /* return Carbon::createFromFormat('Y-m-d', $this->departure_date)->toFormattedDateString(); */
    }

    public function getFormattedArrivalDate()
    {
        return date('D F Y', strtotime($this->arrival_date));
        /* return Carbon::createFromFormat('D F Y', $this->arrival_date)->toFormattedDateString(); */
    }

    public function getFormattedDepartureTime()
    {
        return date('H:i', strtotime($this->departure_time));
    }

    public function getFormattedArrivalTime()
    {
        return date('H:i', strtotime($this->arrival_time));
    }
}