<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class states extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function state()
    {
        states::create();
        $state = states::where('name' , $negeri)->first();
    }
}
