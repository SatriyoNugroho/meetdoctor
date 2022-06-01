<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'doctor';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    //one to many
    public function specialist()
    {
        // 3 parameter (path model, field foreign keys, field primary key from table hasmany/onemany)
        return $this->belongsTo('App\Models\MasterData\Specialist', 'specialist_id', 'id');
    }

    //one to many
    public function appointment()
    {
        // 2 parameter (path model, field foreign keys)
        return $this->hasMany('App\Models\Operational\Appointment', 'doctor_id');
    }
}