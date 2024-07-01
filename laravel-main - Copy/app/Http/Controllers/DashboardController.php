<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Metode ini akan dipanggil ketika rute diakses
    public function index()
    {
        // Mengembalikan tampilan dashboard
        return view('dashboard');
    }
}
