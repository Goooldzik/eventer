<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content'
    ];

    /**
     * @return  string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
