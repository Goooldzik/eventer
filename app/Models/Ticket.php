<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    /**
     * @var     string[]
     */
    protected $fillable = [
        'email', 'name', 'last_name'
    ];

    protected $dates = ['expire_at'];

    /**
     * @return  string
     */
    public function getRouteKeyName(): string
    {
        return 'ticket_number';
    }

    /**
     * @return  BelongsTo
     */
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
