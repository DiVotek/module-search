<?php

namespace Modules\Search\Models;

use App\Traits\HasTable;
use App\Traits\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Tag extends Model
{
    use HasFactory;
    use HasTable;
    use HasTimestamps;

    protected $fillable = ['name'];

    public static function getDb(): string
    {
        return 'tags';
    }

    public function taggable(): MorphTo
    {
        return $this->morphTo();
    }
}
