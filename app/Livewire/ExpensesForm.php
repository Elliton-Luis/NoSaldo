<?php

namespace App\Livewire;

use Livewire\Component;

class ExpensesForm extends Component
{
    protected $listeners = ['storeAccount'=>'render'];

    public $type;


    public function mount()
    {
        $this->type = null;
    }
    public function render()
    {

        return view('livewire.expenses-form');
    }

}
