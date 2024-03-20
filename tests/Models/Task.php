<?php

namespace Mokhosh\FilamentKanban\Tests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Mokhosh\FilamentKanban\Tests\Enums\TaskStatus;
use SH\EloquentSortable\Sortable;
use SH\EloquentSortable\SortableTrait;

class Task extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;

    protected $guarded = [];

    protected $casts = [
        'status' => TaskStatus::class,
    ];

    public function team(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
