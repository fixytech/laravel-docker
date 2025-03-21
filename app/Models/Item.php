<?php

namespace App\Models;

use App\Models\DeviceType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    protected $fillable = [
        'name',
        'id_device_type',
        'description',
    ];
    public function deviceType(): BelongsTo
    {
        return $this->belongsTo(DeviceType::class, 'id_device_type');
    }
}
