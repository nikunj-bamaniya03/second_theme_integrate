<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\HttpCache\Store;

class ManageAdminController extends Controller
{
    public function adminRegistered(StorePostRequest $StorePostRequest)
    {
        $StorePostRequest->validate([
            'first_name' => 'required|string|max:50',
            'last_name'  => 'required|string|max:50',
            'email'      => 'required|string|email|max:100|unique:admin',
            'password'   => 'required|string|min:8|confirmed',
        ]);

            DB::table('admin')->insert([
                'first_name' => $StorePostRequest->first_name,
                'last_name'  => $StorePostRequest->last_name,
                'email'      => $StorePostRequest->email,
                'password'   => bcrypt($StorePostRequest->password),
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return redirect()->route('login.form')->with('success', 'Admin registered successfully!');
        
    }
    
}
