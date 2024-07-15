<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Township extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'city_id',
        'name',
        'description',
        'remark',
        'status',
        'created_by',
        'updated_by',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
