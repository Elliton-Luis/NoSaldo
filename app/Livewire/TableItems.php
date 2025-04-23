<?php

namespace App\Livewire;

use Livewire\Component;

class TableItems extends Component
{
    #[On('storeExpenses')] 
    public function render()
    {
        return view('livewire.table-items');
    }

    
}
