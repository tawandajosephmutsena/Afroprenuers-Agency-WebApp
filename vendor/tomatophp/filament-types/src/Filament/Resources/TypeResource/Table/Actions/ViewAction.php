<?php

namespace TomatoPHP\FilamentTypes\Filament\Resources\TypeResource\Table\Actions;

use Filament\Tables;

class ViewAction extends Action
{
    public static function make(): Tables\Actions\Action
    {
        return Tables\Actions\ViewAction::make()
            ->iconButton()
            ->tooltip(__('filament-actions::view.single.label'));
    }
}
