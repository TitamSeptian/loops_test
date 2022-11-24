<?php

namespace App\Models;

use App\States\Subcribe\SubcribeState;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStates\HasStates;

class Subcribe extends Model
{
    use HasFactory;
    use HasStates;

    protected $casts = [
        'state' => SubcribeState::class,
    ];

    protected $guraded = [];
}
