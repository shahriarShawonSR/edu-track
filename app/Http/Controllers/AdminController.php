<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminInsertRequest;

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
        $data['header_title'] = "Add New Admin";
        return view('admin.admin.add', $data);
    }
    public function insert(AdminInsertRequest $request)
    {
        // return $request;
        $request->validated();
        $user = new User();
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->user_type = 1;
        $user->save();
        return redirect('admin/list')->with('success', 'Admin Successfully created');
    }
    public function edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        if (!empty($data['getRecord'])) {
            $data['header_title'] = "Edit Admin";
            return view('admin.admin.edit', $data);
        } else {
            abort(404);
        }
    }
    public function update(Request $request, $id)
    {
        $user = User::getSingle($id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        if (!empty($user->password)) {
            $user->password = Hash::make($request->password);
        } else {
        }
        $user->save();
        return redirect('admin/list')->with('success', 'Admin Successfully Update');
    }
    public function delete($id){
        $user = User::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect('admin/list')->with('success', 'Admin Successfully Delete');
    }
}
