<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieRegistration extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'movie_registration';
    public $timestamps = false;
    protected $fillable = [
        'biodata_id',
        'tiket_id',
        'status',
        'registration_at',
    ];

    public function biodata()
    {    
        return $this->belongsTo('App\Models\Biodata', 'biodata_id', 'id');
    }

}
