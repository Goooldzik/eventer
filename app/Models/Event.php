<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * @var     string[]
     */
    protected $fillable = [
        'title', 'places', 'start_at'
    ];

    /**
     * @var     string[]
     */
    protected $dates = ['start_at', 'created_at', 'updated_at'];

    /**
     * @return  string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
