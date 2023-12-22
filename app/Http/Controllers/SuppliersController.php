<?php

namespace App\Http\Controllers;
use App\Models\Supplier;

use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index(){
        //
    }

    public function create(){
        // Create - Mostra la form per creare nuovi oggetti
        return view('suppliers.add');
    }

    public function store(Request $request) {
        //
    }

    public function show($id){
        // Read - Mostra un singolo oggetto (dettaglio)
    }

    public function edit($id){
        // Update - Mostra la form per modificare un oggetto
        
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
