<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use App\Models\Product2;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        // Query the companies with optional search filtering
        $companies = Company::when($search, function($query) use ($search) {
            return $query->where('name', 'LIKE', "%{$search}%")
                         ->orWhere('phone', 'LIKE', "%{$search}%");
        })->paginate(5); // Adjust pagination as necessary
    
        return view('company_control.company.index', compact('companies', 'search'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company_control.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required|max:10',
            'name'=>'required|max:255',
            'phone'=>'required|max:100',
            'is_active'=>'required|max:5',
        ]);
        $company = new Company();
        $company->user_id = $request->input('user_id');
        $company->name = $request->input('name');
        $company->phone = $request->input('phone');
        $company->is_active = $request->input('is_active');
        $company->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('company_control.company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('company_control.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'is_active' => 'required|boolean'
        ]);
    
        $company->update($request->all());
    
        return redirect()->route('company.index')->with('success', 'Company updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        
        return redirect()->route('company.index')->with('success', 'Company deleted successfully.');
    }
}