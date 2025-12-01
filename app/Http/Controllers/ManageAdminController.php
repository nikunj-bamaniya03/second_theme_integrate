<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageAdminController extends Controller
{
    public function admin_register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name'  => 'required|string|max:50',
            'email'      => 'required|string|email|max:100|unique:admin',
            'password'   => 'required|string|min:8|confirmed',
        ]);

            DB::table('admin')->insert([
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'email'      => $request->email,
                'password'   => bcrypt($request->password),
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return redirect()->route('admin_login_form')->with('success', 'Admin registered successfully!');
        
    }
    
}
