<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($video) {
            if ($video->video) {
                Storage::disk('public')->delete($video->video);
            }

            if ($video->aktif) {
                $latestVideo = static::latest('created_at')->first();
                if ($latestVideo) {
                    $latestVideo->update(['aktif' => true]);
                }
            }
        });

        static::creating(function ($video) {

            static::query()->update(['aktif' => false]);
            $video->aktif = true;
        });
    }
}
