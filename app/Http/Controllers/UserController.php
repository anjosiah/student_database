<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::all();
        return view('user.index', ['user' => $user]);
    }

    public function tambah()
    {
        return view('user.tambah');
    }
    public function add(Request $request)
    {
        UserModel::create($request->all());
        return redirect('/index');
    }
    public function ubah($nim)
    {
        $user = UserModel::find($nim);
        return view('user.ubah', ['user' => $user]);
    }

    public function edit(Request $request, $nim)
    {
        $user = UserModel::find($nim);
        $user->update($request->all());
        return redirect('/index');
    }

    public function delete($nim)
    {
        $user = UserModel::find($nim);
        $user->delete($user);
        return redirect('/index');
    }
}
