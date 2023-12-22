<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function create(){
        // Create - Mostra la form per creare nuovi oggetti
        return view('orders.add');
    }
}
