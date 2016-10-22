<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Auth;
use Hash, Validator;
use App\Tenant;

class HomeController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['logout']]);
        $this->middleware('guest', ['only' => ['loginHandler', 'storeTenant']]);
    }

    /**
     * Display index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Display feature page
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('home.login');
    }

    /**
     *
     */
    public function LoginHandler(Request $request)
    {
        $this->validate($request, [
            'email'         =>      'required|email',
            'password'      =>      'required|min:6',
        ]);

        $Tenant = Tenant::where(['email' => $request->email])->first();
        if ($Tenant && Hash::check($request->password, $Tenant->password)) {
            Auth::login($Tenant);
            return redirect()->to('/cloud');
        } else {
            $request->flash();
            return redirect()->back()->withErrors(['fail' => '管理员邮箱或管理员密码错误']);
        }
    }

    /**
     *
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    /**
     * Display feature page
     *
     * @return \Illuminate\Http\Response
     */
    public function cloud()
    {
        return view('home.cloud');
    }

    /**
     *
     */
    public function storeTenant(Request $request)
    {
        $oldSubDomain = $request->sub_domain;
        $subDomain = $request->sub_domain . '.hey-community.com';
        $r = $request->merge(['sub_domain' => $subDomain]);

        $validator = Validator::make($request->all(), [
            'site_name'         =>      'required|min:2|unique:tenants',
            'domain'            =>      'min:3|unique:tenants',
            'sub_domain'        =>      'required|min:3|unique:tenants',
            'sub_domain'        =>      'required|min:3',
            'email'             =>      'required|email|unique:tenants',
            'phone'             =>      'required|min:10000000000|integer|unique:tenants',
            'password'          =>      'required|min:6',
            'password_duplicate'=>      'required|min:6|same:password',
        ]);

        if ($validator->fails()) {
            $r = $request->merge(['sub_domain' => $oldSubDomain]);
            return redirect()->back()->withErrors($validator)->withInput();
        };


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
            return redirect()->route('home-cloud');
        } else {
            abort(500, $Tenant);
        }
    }

    /**
     * Display business page
     *
     * @return \Illuminate\Http\Response
     */
    public function business()
    {
        return view('home.business');
    }

    /**
     * Display open-sources page
     *
     * @return \Illuminate\Http\Response
     */
    public function openSources()
    {
        return view('home.open-sources');
    }

    /**
     * Display jobs page
     *
     * @return \Illuminate\Http\Response
     */
    public function jobs()
    {
        return view('home.jobs');
    }

    /**
     * Display about-us page
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs()
    {
        return view('home.about-us');
    }
}
