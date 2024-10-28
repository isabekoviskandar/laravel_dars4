<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('company_control.company.index' , ['companies'=>$companies]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
