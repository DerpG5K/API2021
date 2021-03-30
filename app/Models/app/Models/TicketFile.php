<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'fileSource',
        'fileName',
        'fileType',
        'fileSize',
        'timestamp',
        'ticketId',
        'userId',
        'isCustomer'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ticketId');
    }
}
