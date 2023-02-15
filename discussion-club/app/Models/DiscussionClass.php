<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscussionClass extends Model
{
    use HasFactory;

    protected $fillable=[
        'dClass-id',
        'topic-id',
        'name',
        'speaker-name',
        'description',
        'view-count'
    ];
}
