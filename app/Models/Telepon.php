<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    use HasFactory;

    protected $fillable = ['id','nomor_telepon','pengguna_id'];
    public $timestamps = true;

    public function pengguna()
    {
        return $this->BelongsTo(Pengguna::class, 'pengguna_id');
    }
}
