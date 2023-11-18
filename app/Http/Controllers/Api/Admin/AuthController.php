<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Services\AdminService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $adminService;
    public function __construct(AdminService $adminService)
    {
        $this->adminService =$adminService;
    }
    public function login(AdminLoginRequest $request)
    {
        $data = $this->adminService->login($request->all());
        return $data;
    }
}
