<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return (new \Statamic\View\View)
            ->template('layouts.apps')
            ->layout('livewire.guest.header')
            ->with(['message' => 'Example Message']);
    }
}
