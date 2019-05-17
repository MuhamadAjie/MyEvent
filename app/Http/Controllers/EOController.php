<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EOController extends Controller
{
    public function EORegist(Request $request)
    {
        DB::table('users')->insert([
            'name'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
            'level'=>'2'
        ]);

        return redirect('/eo_home');
    }
}
