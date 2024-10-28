<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    public function getUpperCaseTicketCode()
    {
        return strtoupper($this->ticket_code);
    }
}
