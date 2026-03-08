<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['address','phones','location','emails','facebook','instagram','linkedin','twitter','youtube'];
    
    protected $casts = [
        'emails' => 'array',
        'phones' => 'array',
    ];
    use HasFactory;
}
