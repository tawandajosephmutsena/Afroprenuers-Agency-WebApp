<x-filament-widgets::widget>
    <x-filament::card>
        <div class="grid gap-4 md:grid-cols-3">
            @foreach ($stats as $stat)
                <div class="flex items-center gap-4">
                    <div @class([
                        'p-2 rounded-lg',
                        match ($stat['color'] ?? null) {
                            'danger' => 'bg-danger-100 text-danger-600',
                            'primary' => 'bg-primary-100 text-primary-600',
                            'success' => 'bg-success-100 text-success-600',
                            'warning' => 'bg-warning-100 text-warning-600',
                            default => 'bg-gray-100 text-gray-600',
                        },
                    ])>
                        @if ($stat['icon'] ?? null)
                            <x-dynamic-component :component="$stat['icon']" class="h-6 w-6" />
                        @endif
                    </div>

                    <div>
                        <h2 class="text-sm font-medium text-gray-500">
                            {{ $stat['label'] }}
                        </h2>

                        <p class="text-3xl font-semibold">
                            {{ $stat['value'] }}
                        </p>

                        @if ($stat['description'] ?? null)
                            <p class="text-sm text-gray-500">
                                {{ $stat['description'] }}
                            </p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </x-filament::card>
</x-filament-widgets::widget>
