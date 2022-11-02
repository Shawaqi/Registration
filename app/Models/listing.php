<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listing extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'negeri',
        'daerah',
        'sekolah'
    ];

    public function listing()
    {
        $listings = listing::all();
        foreach ($listings as $listing)
        {
            $negeri = $listing->negeri;
        }
    }
}
