<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;

    protected $fillable =[
        'birthday',
        'annualInn'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
