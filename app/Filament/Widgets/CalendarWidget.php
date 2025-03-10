<?php

namespace App\Filament\Widgets;

use Guava\Calendar\Widgets\CalendarWidget as BaseWidget;
use Guava\Calendar\ValueObjects\Event;
use Illuminate\Support\Collection;

class CalendarWidget extends BaseWidget
{
    protected string $calendarView = 'dayGridMonth';
    protected static ?int $sort = 8;
    protected bool $eventClickEnabled = true;
    protected bool $eventDragEnabled = true;
    protected bool $eventResizeEnabled = true;
    protected bool $dateSelectEnabled = true;

    public function getEvents(array $fetchInfo = []): Collection|array
    {
        return [
            Event::make()
                ->title('Example Event')
                ->start(today())
                ->end(today()->addDays(2))
                ->backgroundColor('#4CAF50')
                ->textColor('#ffffff'),

            Event::make()
                ->title('Another Event')
                ->start(today()->addDays(5))
                ->end(today()->addDays(7))
                ->backgroundColor('#2196F3')
                ->textColor('#ffffff')
                ->allDay(),
        ];
    }
}
