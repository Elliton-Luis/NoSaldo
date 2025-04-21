<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expenses;

class FinancialController extends Controller
{
    public function showExpenses(){
        return view('expenses');
    }

    public function showIncomes(){
        return view('incomes');
    }

    public function storeExpenses(Request $request){
        $dados = $request->except('_token');
        Expenses::create([
            'price'=>$dados['price'],
            'description'=>$dados['description'],
            'due_date'=>$dados['due_date'],
            'type'=>$dados['type']
        ]);
    }
}
