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
        return \App\Models\Event::query()
            ->get()
            ->map(function ($event) {
                return Event::make()
                    ->title($event->title)
                    ->description($event->description)
                    ->start($event->start)
                    ->end($event->end)
                    ->backgroundColor($event->background_color)
                    ->textColor($event->text_color)
                    ->allDay($event->all_day);
            });
    }
}
