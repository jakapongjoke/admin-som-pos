<?php

namespace App\Http\Controllers;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use Illuminate\Http\Request;

use Exception;

use Illuminate\Support\Facades\Auth;
use App\Services\CompanyService as CompanyService;
use App\Services\CompanyUserService as CompanyUserService;


use Redirect;
class CompanyUserController extends Controller
{
    public function __construct(CompanyService $company,CompanyUserService $CompanyUserService)
    {
        $this->company = $company ;
        $this->companyUserService = $CompanyUserService ;
    
    }

    protected function redirectTo(Request $request)
{
    return redirect('/staff-login');
}
public function authenticate(Request $request)
{
    return redirect('/ccc');
}
    public function username()
    {
        return 'username';
    }
    protected function guard()
    {
        return Auth::guard('company_users');
    }
    // public function __construct()
    // {
    //     $this->middleware('guest:company_users')->except('logout');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.staff.login',['data'=>$request->all()]);
    }
    
    public function dashboard(Request $request)
    {
       if(Auth::guard('company_users')->check()){
        return view('customer.backoffice.staff.dashboard');

        // echo; 
       }else{
        return view('customer.backoffice.staff.login');       }
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function login(Request $request,$company_name)
    {
      
        return view('company.staff.login');

    }

    public function handleLogin(Request $request,$company_name)
    {
        $company_id = $this->company->getCompanyID($company_name);
     
        $credentials = $request->validate([
            'username' => ['required','string'],
            'password' => ['required'],
        ]);
     
        $login = $this->companyUserService->CompanyUserLogin($request->username,$request->password,$company_id);

        if($login===true){
             $request->session()->regenerate();

        return redirect()->intended('/staff-dashboard');
        }else{
           
            return Redirect::back()->withErrors(['msg' => $login['message']]);

            
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()
            ->route('user.login');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Auth::guard('company_users')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
