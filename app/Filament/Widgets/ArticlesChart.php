<?php
namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Article;

class ArticlesChart extends ChartWidget
{
    protected static ?string $heading = 'Daily Publication Trend';
    protected static ?int $sort = 7;

    protected function getType(): string
    {
        return 'line'; // Chart type: 'line', 'bar', 'pie', etc.
    }

    protected function getData(): array
    {
        $trendData = Article::query()
            ->where('is_published', true)
            ->selectRaw('DATE(published_at) as day') // Use DATE() for SQLite
            ->selectRaw('COUNT(*) as count')
            ->groupBy('day')
            ->orderBy('day')
            ->pluck('count', 'day');

        return [
            'labels' => $trendData->keys()->toArray(), // Days as labels
            'datasets' => [
                [
                    'label' => 'Published Articles',
                    'data' => $trendData->values()->toArray(), // Counts as data
                    'backgroundColor' => '#4CAF50', // Optional: Line color
                ],
            ],
        ];
    }
}
