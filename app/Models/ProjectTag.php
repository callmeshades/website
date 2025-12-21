<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProjectTag extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectTagFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'hex_color',
    ];

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }
}
