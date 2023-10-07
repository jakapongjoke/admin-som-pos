<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\RedirectResponse;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    
    // public function __construct(Guard $auth)
    // {
    //     $this->auth = $auth;
    // }



    protected function unauthenticated($request, array $guards)
    {
        // echo $request->company_name; // ค่ามา
        // return redirect(route('company-user-login-page',['company_name','ananta']),301);

        // exit;
    echo ("<script LANGUAGE='JavaScript'>
    window.location.href='http://ananta.som-pos.test:8000/staff-login';
    </script>");
    }
    protected function redirectTo($request)
    {
        
    return redirect()->to('https://google.com');


        // return redirect()->route('company-user-login-page',['company_name', 'ananta'])->with(['company_name', 'ananta']);

        // return route('/');
        // return '/staff-login';
        // if (! $request->expectsJson()) {
        //     return route('home');
        // }
    }
}
