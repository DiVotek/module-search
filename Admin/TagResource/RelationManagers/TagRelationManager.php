<?php

namespace Modules\Search\Admin\TagResource\RelationManagers;

use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Search\Admin\TagResource;

class TagRelationManager extends RelationManager
{
    protected static string $relationship = 'tags';

    public function form(Form $form): Form
    {
        return TagResource::form($form);
    }

    public function table(Table $table): Table
    {
        return TagResource::table($table)
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])->paginated(false);
    }
}
