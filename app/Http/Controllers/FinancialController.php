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

    public function showWishlist(){
        return view('wishlist');
    }

    public function showGoals(){
        return view('goals');
    }

    public function showHistoric(){
        return view('historic');
    }

}
