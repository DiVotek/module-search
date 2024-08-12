<?php

namespace Modules\Search\Admin\SearchResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Modules\Search\Admin\SearchResource;

class ListSearches extends ListRecords
{
    protected static string $resource = SearchResource::class;
}
