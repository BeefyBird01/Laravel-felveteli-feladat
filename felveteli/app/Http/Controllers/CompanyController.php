<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //show all companies
    public function index(){        
        try{
            $companies = Company::all();
        }
        catch(\Exception $exception){
            return view('errors.error', ['errorMessage' => 'Could not load data from the database']);
        }
            return view('index',[
                'companies' => $companies
            ]);
        
    }

    //show single company
    public function show($companyId){
        try{
            $result = Company::findOrFail($companyId);
        }
        catch(\Exception $exception){
            return view('errors.error', ['errorMessage' => 'Company does not exist']);
        }
        return view('company',[
            'company' => $result
        ]);
    }

    //show create page
    public function create(){
        return view('create');
    }

    //create company
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required',Rule::unique('companies','name')],
            'email' => ['required', 'email'],
            'taxNumber' =>['required','size:9'],
            'phoneNumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'            
        ]);
        try{
            Company::create($formFields);
        }
        catch(\Exception $exception){
            return redirect()->route('companies')->with(['alert' => 'Failed to create company','type' =>'failed']);
        }

        
        return redirect()->route('companies')->with('alert', 'Company created');
    }

    //delete company
    public function delete(Company $company){
        try{
            $company->delete();
        }
        catch(\Exception $exception){
            return redirect()->route('companies')->with(['alert' => 'Failed to delete company','type' =>'failed']);
        }
        
        return redirect()->route('companies')->with('alert','Deleted Succesfully');
    }

    //edit company
    public function edit(Company $company){
        return view('edit', ['company' => $company]);
    }

    //update existing company
    public function update(Request $request, Company $company){
        $formFields = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'taxNumber' =>['required','size:9'],
            'phoneNumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'        
        ]);
        try{
            $company->update($formFields);
        }
        catch(\Exception $exception){
            return redirect()->route('companies')->with(['alert' => 'Failed to update company','type' =>'failed']);
        }
        return redirect()->route('companies')->with(['alert' => 'Company updated','type' =>'success']);
    }
}
