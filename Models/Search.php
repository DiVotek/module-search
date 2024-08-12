<?php

namespace Modules\Search\Models;

use App\Traits\HasTable;
use App\Traits\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    use HasFactory;
    use HasTable;
    use HasTimestamps;

    protected $fillable = ['query'];

    public static function getDb(): string
    {
        return 'searches';
    }
}
