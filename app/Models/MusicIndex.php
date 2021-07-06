<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicIndex extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'music_index';
}
