<?php

namespace App\Livewire;

use Livewire\Component;

class Reviews extends Component
{
    public $cardIndex = 0;

    public function scrollLeft()
    {
        if ($this->cardIndex === 0) {
            $this->cardIndex = 3;
        } else {
            --$this->cardIndex;
        }
    }

    public function scrollRight()
    {
        if ($this->cardIndex === 3) {
            $this->cardIndex = 0;
        } else {
            ++$this->cardIndex;
        }
    }

    public function render()
    {
        return view('livewire.reviews');
    }
}
