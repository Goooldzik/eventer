<?php


namespace App\Helpers;


use Illuminate\Support\Str;

class Sluggable
{
    public static function generateSlug(string $title): string
    {
        return Randomizer::generateString() . Str::slug('-'.$title);
    }
}
