<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('dashboard.admin.companies.index', compact('companies'));
    }

    public function create()
    {
        return view('dashboard.admin.companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:companies',
        ]);

        Company::create($request->all());
        return redirect()->route('companies.index');
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('dashboard.admin.companies.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());
        return redirect()->route('companies.index');
    }

    public function destroy($id)
    {
        Company::destroy($id);
        return redirect()->route('companies.index');
    }
}
