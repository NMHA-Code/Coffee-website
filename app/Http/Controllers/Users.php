<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffUsers;

class Users extends Controller
{
    public function index()
    {
        $alluser = StaffUsers::all()->where("delered", 0);
        return view("users.index", [
            "alluser" => $alluser
        ]);
    }
    public function create()
    {
        return view("users.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'role' => 'required|string'
        ]);

        $staffUser = new StaffUsers();
        $staffUser->name = $request->name;
        $staffUser->password = $request->password;
        // dùng luôn cái có sẵn cho nhanh nhé

        $staffUser->token = \Illuminate\Support\Str::random(20);
        $staffUser->role = $request->role;
        $staffUser->save();
        return redirect('/users')->with("success", "Tao thanh cong");
    }
    public function destroy($id)
    {
        StaffUsers::findOrFail($id)->delete();
        return back()->with('success', 'Xóa thành công!');
    }
}
