<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'wa_number',
        'line_id',
        'github',
        'birth_place',
        'birth_date',
        'gender',
        'CV',
        'card',
        'group_name',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
