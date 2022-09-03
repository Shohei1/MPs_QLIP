<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Difficulty extends Model
{
    use HasFactory;

    public function getLists()
    {
        $difficulties = Difficulty::orderBy('id', 'asc')->pluck('difficulty_name', 'id');

        return $difficulties;
    }
}