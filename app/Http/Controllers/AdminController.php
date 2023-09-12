<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminList()
    {
        $data['header_title'] = "Admin List";
        $data['getUsers'] = User::getAdmin();
        return view('admin.admin.list', $data);
    }
    public function adminAdd()
    {
        $data['header_title'] = "Add new Admin";
        return view('admin.admin.add', $data);
    }
    public function insert(Request $request)
    {
        $user = new User();
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->user_type = 1;
        $user->save();
        return redirect('admin/admin/list')->with('success', 'Admin Successfully created');
    }
}
