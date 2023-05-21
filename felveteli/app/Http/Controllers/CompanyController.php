<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
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
                'companies' => Company::all()
            ]);
        
    }

    //show single
    public function show(Company $company){
        return view('company',[
            'company' => $company
        ]);
    }
}
