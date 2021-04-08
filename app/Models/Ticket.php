<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'subject',
        'description',
        'priority',
        'startDate',
        'endDate',
        'created_at',  // Default timestamp fields
        'updated_at',
        'lockedUntil',
        'lockedBy',
        'categoryId',
        'stateId',
        'userId',
        'isCustomer',
    ];

    public function status()
    {
        return $this->belongsTo(TicketState::class, 'stateId');
    }

    public function category()
    {
        return $this->belongsTo(TicketCategory::class, 'categoryId');
    }

    public function files()
    {
        return $this->hasMany(TicketFile::class, 'ticketId');
    }

    public function logs()
    {
        return $this->hasMany(TicketLog::class, 'ticketId');
    }
}
