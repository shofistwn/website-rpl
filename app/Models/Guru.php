<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $fillable = [
        'user_id',
        'foto',
        'nama',
        'alamat',
        'komli',
        'telepon'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
