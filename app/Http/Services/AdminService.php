<?php
namespace App\Http\Services;
use App\Models\Admin;

class AdminService
{
    public function login($data)
    {
        if(auth('admin')->attempt(['email' => $data['email'], 'password' => $data['password']]))
        {
            $admin = auth('admin')->user();
            $admin->access_token = $admin->createToken('testing')->plainTextToken;
            return response(['success' => true,'data'=>$admin,'message'=>'The operation has been done'],200);

        }else{
            return response(['success' => false,'message' => 'Invalid Credentials.'],401);
        }
    }
}