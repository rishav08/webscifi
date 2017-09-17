<?php namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller {

    /*
    |---------------------------------------------------------------------------
    | Auth Controller
    |---------------------------------------------------------------------------
    |
    | Primary admin controller displaying dashboard stats
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * Admin Login
     *
     * @return Response
     */
    public function getIndex(){
        if( !Auth::guest() ) {
                return redirect('/home');
        }
        
        return view('login', []);
    }


    /**
     * Process Admin Login
     * 
     * @param Request $request
     * @return Response
     */
    public function postIndex(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        
        if(Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect()->intended('admin/dashboard');
        }
        
        return redirect()->back()->withInput()->withErrors('Invalid Login.');
    }


    /**
     * Logout of Admin
     */
    public function getLogout(){
        Auth::logout();
        
        return redirect('/admin');
    }
}



		