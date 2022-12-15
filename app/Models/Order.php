<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];

    public function pelanggan() {
        return $this->belongsTo(Pelanggan::class);
    }

    public function menu() {
        return $this->belongsTo(Menu::class);
    }
}
