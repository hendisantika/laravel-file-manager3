<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class CompanyController extends Controller
{
    public function index(): View
    {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }
}
