<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsType extends Model
{
    use HasFactory;

    public function Shortcuts()
    {
        return $this->hasMany('App\Models\Shortcut', 'os_id');
    }

    public function getLists()
    {
        $os_types = OsType::orderBy('id', 'asc')->pluck('name', 'id');

        return $os_types;
    }
}