<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;

class CarouselSlider extends Component
{
    public $services;
    public $activeIndex = 0;

    public function mount()
    {
        $this->services = Service::active()
            ->select(['id', 'name', 'description', 'image', 'service_type'])
            ->get();
    }

    public function nextSlide()
    {
        $this->activeIndex = ($this->activeIndex + 1) % count($this->services);
    }

    public function previousSlide()
    {
        $this->activeIndex = ($this->activeIndex - 1 + count($this->services)) % count($this->services);
    }

    public function render()
    {
        return view('livewire.carousel-slider');
    }
}
