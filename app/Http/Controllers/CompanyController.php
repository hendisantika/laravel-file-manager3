<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use Illuminate\Support\Facades\View;

class CompanyController extends Controller
{
    public function index(): View
    {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }

    public function create(): View
    {
        return view('companies.create');
    }

    public function store(StoreCompanyRequest $request): RedirectResponse
    {
        Company::create($request->validated());

        return to_route('companies.index');
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }
}
