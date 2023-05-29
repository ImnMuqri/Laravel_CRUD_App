<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class companycontroller extends Controller
{
    public function index(){
        return view ('companies.index');
    }
    public function list(){
        return view ('companies.companieslist',['companies'=> Company::get()]);
    }
    public function create(){
        return view ('companies.createcompany');
    }
    public function store(Request $request){
        
        //validate data
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'website'=> 'required',
            'image'=> 'required| mimes: jpeg,png,gif,jpg|max:10000',
        ]);

        //upload image
        $imageName = time().'.'.$request->file('image')->extension();
        $request->image->move(public_path('companies'), $imageName);

        $company = new Company;
        $company->image = $imageName;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website; 

        $company->save();

        return redirect()->route('companies.companieslist')->withSuccess('New Company Successfully Added');
    }

    public function edit($id){
         $company = Company::findOrFail($id);
        return view ('companies.edit',['companies'=> $company]);
    }

    public function update( Request $request, $id){
        //validate data
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'website'=> 'required',
            'image'=> 'nullable| mimes: jpeg,png,gif,jpg|max:10000',
        ]);

        $company = Company::where('id',$id)->first();
        
        if(isset($request->image)){
        //upload image
        $imageName = time().'.'.$request->file('image')->extension();
        $request->image->move(public_path('companies'), $imageName);
        $company->image = $imageName; 
        }

        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website; 

        $company->save();

        return redirect()->route('companies.companieslist')->withSuccess('Company Updated');
    }
    
    public function destroy($id){
        $company = Company::where('id',$id)->first();
        $company->delete();
        return back()->withSuccess('Company Deleted');
    }

    public function show($id){
        $company = Company::where('id',$id)->first();
        return view ('companies.show',['companies'=>$company]);
    }

}
