<?php

namespace Modules\Search\Admin\TagResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Modules\Search\Admin\TagResource;

class ListTags extends ListRecords
{
    protected static string $resource = TagResource::class;
}
