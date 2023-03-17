<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pasien extends Model
{
    use HasFactory;
    protected $table = "pasien";
    protected $fillable = ['id','nama', 'jk','alamat','no_hp'];

    public function rekam(): HasMany
    {
        return $this->hasMany(rekam::class);
    }
    
}
