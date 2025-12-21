<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'featured_image',
        'description',
        'body',
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(ProjectTag::class);
    }
}
