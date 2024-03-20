<?php

namespace Mokhosh\FilamentKanban\Tests\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mokhosh\FilamentKanban\Tests\Enums\TaskStatus;
use SH\EloquentSortable\Sortable;
use SH\EloquentSortable\SortableTrait;

class UlidTask extends Model implements Sortable
{
    use HasFactory;
    use HasUlids;
    use SortableTrait;

    protected $guarded = [];

    protected $primaryKey = 'ulid';

    protected $casts = [
        'status' => TaskStatus::class,
    ];
}
