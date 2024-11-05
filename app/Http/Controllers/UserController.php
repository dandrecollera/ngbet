<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request){
        $data = [];

        $data['users'] = DB::table('main_users')
            ->get()
            ->toArray();

        return view('home', $data);
    }

    public function createAccount(Request $request){
        $inputs = $request->input();


        $mainuserid = DB::table('main_users')
            ->insert([
                'username' => $inputs['username'],
                'password' => $inputs['password'],
            ]);

        return redirect('/?a=1');
    }

    public function updateAccount(Request $request){
        $inputs = $request->input();

        $mainuserid = DB::table('main_users')
            ->where('id', $inputs['id'])
            ->update([
                'username' => $inputs['username'],
                'password' => $inputs['password'],
            ]);

        return redirect('/?a=1');
    }

    public function deleteAccount(Request $request){
        $inputs = $request->input();

        $mainuserid = DB::table('main_users')
            ->where('id', $inputs['id'])
            ->delete();

        return redirect('/?a=1');
    }
}
