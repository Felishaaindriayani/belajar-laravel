<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama'];
    public $timestamps = true;

    // relasi ke table telepon
    public function telepon()
    {
        return $this->hasOne(Telepon::class);
    }
}
