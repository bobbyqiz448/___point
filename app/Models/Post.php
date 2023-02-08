<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Website;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
    ];

    /**
         * Get the website that owns the Post
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function website(): BelongsTo
        {
            return $this->belongsTo(Website::class, 'foreign_key', 'other_key');
        }
    
}
