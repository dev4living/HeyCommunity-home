<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Auth;
use Hash, Validator;
use App\Tenant;

class TenantController extends Controller
{
    /**
     *
     */
    public function LogIn()
    {
        return view('tenants.log-in');
    }

    /**
     *
     */
    public function LogInHandler(Request $request)
    {
        $this->validate($request, [
            'email'         =>      'required|email',
            'password'      =>      'required|min:6',
        ]);

        $Tenant = Tenant::where(['email' => $request->email])->first();
        if ($Tenant && Hash::check($request->password, $Tenant->password)) {
            Auth::login($Tenant);
            return redirect()->route('dashboard.home');
        } else {
            $request->flash();
            return redirect()->back()->withErrors(['fail' => 'email or password error']);
        }
    }

    /**
     *
     */
    public function signUp()
    {
        return view('tenants.sign-up');
    }

    /**
     *
     */
    public function signUpHandler(Request $request)
    {
        $subDomain = $request->sub_domain . '.hey-community.com';
        $r = $request->merge(['sub_domain' => $subDomain]);

        $this->validate($request, [
            'site_name'         =>      'required|min:2|unique:tenants',
            'domain'            =>      'min:3|unique:tenants',
            'sub_domain'        =>      'required|min:3|unique:tenants',
            'email'             =>      'required|email|unique:tenants',
            'phone'             =>      'required|min:10000000000|integer|unique:tenants',
            'password'          =>      'required|min:6',
        ]);

        $Tenant = new Tenant();

        $Tenant->site_name      =   $request->site_name;
        $Tenant->sub_domain     =   $request->sub_domain;
        if ($request->domain) {
            $Tenant->domain     =   $request->domain;
        }
        $Tenant->email          =   $request->email;
        $Tenant->phone          =   $request->phone;
        $Tenant->password       =   Hash::make($request->password);

        if ($Tenant->save()) {
            Auth::login($Tenant);
            if ($request->ajax()) {
                return $Tenant;
            } else {
                return redirect()->route('home');
            }
        } else {
            abort(500, $Tenant);
        }
    }

    /**
     *
     */
    public function logOutHandler()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
