<?php

namespace Modules\Xender\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class XenderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'gender',
    ];

    protected static function newFactory()
    {
        return \Modules\Xender\Database\factories\XenderDetailFactory::new();
    }
}
