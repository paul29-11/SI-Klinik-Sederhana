<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ruang extends Model
{
    use HasFactory;
    protected $table = "ruang";
    protected $fillable = ['id','nama', 'ket'];

    public function rekam(): HasMany
    {
        return $this->hasMany(rekam::class);
    }
}
