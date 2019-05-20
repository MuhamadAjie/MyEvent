<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Users;

class EOController extends Controller
{
    public function EORegist(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:6',
            'email' => 'required|min:6|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data = new Users();
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = ($request->password);
        $data->level = '2';
        $data->save();

        Session::put('username',$request->username);
        Session::put('level', $request->level);

        return redirect('/eo_home');
    }

    public function EOlogin(Request $request)
    {
        $username = $request->username;
        $password = ($request->password);
        $data = DB::table('users')->where(['username'=>$username])->first();
        if(($data) != null){ //apakah email tersebut ada atau tidak
            if($password == $data->password){
                Session::put('username',$data->username);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('eo_home');
            }else{
                return $password;
            }
          }  
        else{
            return '$data';

        }
    }
}
