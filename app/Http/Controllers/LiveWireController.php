<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livewire\Books;

class LiveWireController extends Controller
{
    /**
     * 
     * Get livewire page
     * 
     */
    public function index(){
        return view('livewire.index');
    }
}
