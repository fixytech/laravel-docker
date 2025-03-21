<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceType extends Model
{
    protected $fillable = [
        'name'
    ];
    public function items()
    {
        return $this->hasMany(Item::class, 'id_device_type');
    }
}
