<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyStoreRequest;
use App\Http\Requests\CompanyUpdateRequest;
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

    public function store(CompanyStoreRequest $request)
    {
        // $request->validated();

        Company::create([
            'name' => $request->company_name,
            'email' => $request->company_email,
            'password' => bcrypt($request->password),
            'expiration_date' => $request->company_subscribe,
        ]);
        // dd($request);

        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    public function edit(Company $company)
    {
        return view('dashboard.admin.companies.edit', compact('company'));
    }

    public function update(CompanyUpdateRequest $request, Company $company)
    {
        // $request->validated();

        $company->update($request->only(['name', 'email', 'expiration_date']));

        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }

    public function toggleStatus(Company $company)
    {
        $company->status = $company->company_status === 'inactive' ? 'inactive' : 'active';
        $company->save();

        return redirect()->route('companies.index')->with('success', 'Company status updated successfully.');
    }
}
?>
