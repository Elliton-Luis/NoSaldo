<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Expenses;

class TableItems extends Component
{   
    public $last_expenses;

    public function mount(){
        $this->last_expenses = [];
        $this->getExpenses();
    }

    #[On('storeExpenses')] 
    public function getExpenses(){
        $this->last_expenses = Expenses::orderBy('created_at', 'desc')->take(4)->get()->toArray();
    }

    public function render()
    {
        return view('livewire.table-items', [
            'last_expenses' => $this->last_expenses
        ]);
    }
}
