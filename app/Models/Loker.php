<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;

    protected $table = 'loker';
    protected $fillable = [
        'user_id',
        'nama_perusahaan',
        'alamat',
        'email',
        'loker',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
