<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'timestamp',
        'description',
        'logType',
        'lastChanged',
        'ticketId',
        'userId',
        'isCustomer'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ticketId');
    }
}
