<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'detail_user';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    //one to many
    public function type_user()
    {
        // 3 parameter (path model, field foreign keys, field primary key from table hasmany/onemany)
        return $this->belongsTo('App\Models\MasterData\TypeUser', 'type_user_id', 'id');
    }


    //one to many
    public function user()
    {
        // 3 parameter (path model, field foreign keys, field primary key from table hasmany/onemany)
        return $this->belongsTo('App\Models\USer', 'user_id', 'id');
    }
}