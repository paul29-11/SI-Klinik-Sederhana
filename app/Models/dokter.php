<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class dokter extends Model
{
    use HasFactory;
    protected $table = "dokter";
    protected $fillable = ['id','nama', 'spesialis','alamat','no_hp'];

    public function rekam(): HasMany
    {
        return $this->hasMany(rekam::class);
    }
}
