<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Expenses;

class ExpensesForm extends Component
{
    protected $listeners = ['storeAccount'=>'render'];

    public $type;
    public $description;
    public $price;
    public $frequency;
    public $due_date;
    public $category;


    public function mount()
    {
        $this->type = null;
        $this->description = null;
        $this->price = null;
        $this->frequency = null;
        $this->due_date = null;
        $this->category = null;

    }
    public function render()
    {

        return view('livewire.expenses-form');
    }

    public function storeExpenses(){
        Expenses::create([
            'user_id'=>auth()->id(),
            'price'=>$this->price,
            'description'=>$this->description,
            'due_date'=>$this->due_date,
            'type'=>$this->type,
            'frequency'=>$this->frequency,
            'category'=>$this->category
        ]);
        $this->dispatch('storeExpenses');
        session()->flash('success','Despesa Criada com Sucesso');
        $this->reset();
    }

}
