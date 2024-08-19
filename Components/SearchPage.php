<?php

namespace Modules\Search\Components;

use App\View\Components\PageComponent;

class SearchPage extends PageComponent
{
    public function __construct($entity)
    {
        $component = setting(config('settings.search.design'), 'Base');
        $component = 'template.' . strtolower(template()) . '.pages.search.' . strtolower($component);
        parent::__construct($entity, $component);
    }
}
