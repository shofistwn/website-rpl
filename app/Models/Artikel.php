<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $fillable = [
        'user_id',
        'foto',
        'judul',
        'slug',
        'kategori',
        'isi',
    ];

    protected static function boot()
    {
        parent::boot();
        static::created(function ($artikel) {
            $artikel->slug = $artikel->generateSlug($artikel->judul);
            $artikel->save();
        });
    }

    private function generateSlug($judul)
    {
        if (static::whereSlug($slug = Str::slug($judul))->exists()) {
            $max = static::wherejudul($judul)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
