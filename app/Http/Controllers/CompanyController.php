<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Exports\CompaniesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\CompanyStoreRequest;
use App\Http\Requests\CompanyUpdateRequest;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        // $companies = Company::paginate(10); // Show 10 companies per page
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
        $company->status = $company->company_status === 'inactive' ? 'active' : 'inactive';
        $company->save();

        return redirect()->route('companies.index')->with('success', 'Company status updated successfully.');
    }

    public function export(CompaniesExport $export)
    {
        try {
            return Excel::download(new CompaniesExport, 'companies.xlsx');
        } catch (\Exception $e) {
            return redirect()->route('companies.index')->with('error', 'Failed to export companies. Please try again.');
        }    }
}
?>
