<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected static function boot() {
        parent::boot();

        static::created(function ($obj) {
            $obj->id = '000'.$obj->id;
            $obj->save();
        });
    }

    public function order() {
        return $this->hasMany(Order::class);
    }
}

