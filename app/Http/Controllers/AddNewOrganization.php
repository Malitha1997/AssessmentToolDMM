<?php

namespace App\Http\Controllers;

use App\Models\Govorganizationname;
use Illuminate\Http\Request;

class AddNewOrganization extends Controller
{
    public function create(){
        $org=Govorganizationname::all();
        $govOrgExist=Govorganizationname::exists();

        return view('Settings.addNewOrg',compact('org','govOrgExist'));
    }

    public function store(Request $request){
        request()->validate([
            'org_name'=>'string|required|unique:govorganizationnames,gov_org_name',
        ]);

        $org=new Govorganizationname;

        $org->gov_org_name=$request->org_name;

        $org->save();

        return redirect()->route('addOrganization');
    }
}
