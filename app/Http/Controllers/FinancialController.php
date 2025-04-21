<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function showExpenses(){
        return view('livewire.expenses-form');
    }
}
