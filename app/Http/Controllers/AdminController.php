<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $user = User::with('role')->get();
        $role = Role::all();
        return view('admin.index', [
            'title' => 'User',
            'user' => $user,
            'role' => $role,
        ]);
    }

    public function prodi(){
        return view('admin.prodi', [
            'title' => 'Prodi'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role_id' => 'required',
            'email' => 'required',
            'prodi' => 'required',
            'password' => 'required',
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->role_id = $request->input('role_id');
        $user->email = $request->input('email');
        $user->prodi_id = $request->input('prodi_id');
        $user->password = Hash::make($request->input('password'));
        $user->created_at = Carbon::now();
        $user->save();
        return back()->with('success', 'User berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'role_id' => 'required',
            'email' => 'required',
            'prodi' => 'required',
            'password' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->role_id = $request->input('role_id');
        $user->email = $request->input('email');
        $user->prodi_id = $request->input('prodi_id');
        $user->password = Hash::make($request->input('password'));
        $user->created_at = Carbon::now();
        $user->update();
        return back()->with('success', 'User berhasil diubah.');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return back()->with('success', 'User berhasil dihapus.');
    }
}
