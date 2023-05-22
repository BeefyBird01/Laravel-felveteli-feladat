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
            return view('index',[
                'companies' => Company::all(),
            ]);
        
    }

    //show single company
    public function show(Company $company){
        return view('company',[
            'company' => $company
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

        Company::create($formFields);
        return redirect('/')->with('alert', 'Company created');
    }

    //delete company
    public function delete(Company $company){
        $company->delete();
        return redirect('/')->with('alert','Deleted Succesfully');
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

        $company->update($formFields);


        return redirect('/')->with('alert', 'Company updated');
    }
}
