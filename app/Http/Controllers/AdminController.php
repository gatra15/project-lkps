<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $user = User::with(['role','prodi'])->get();
        $role = Role::all();
        $prodi = ProgramStudi::all();
        return view('admin.index', [
            'title' => 'User',
            'user' => $user,
            'role' => $role,
            'prodi' => $prodi,
        ]);
    }

    public function store(Request $request)
    {
        // ddd($request);
        $request->validate([
            'name' => 'required',
            'role_id' => 'required',
            'email' => 'required',
            'prodi_id' => 'required',
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
            'prodi_id' => 'required',
            'password' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->role_id = $request->input('role_id');
        $user->email = $request->input('email');
        $user->prodi_id = $request->input('prodi_id');
        $user->password = Hash::make($request->input('password'));
        $user->updated_at = Carbon::now();
        $user->update();
        return back()->with('success', 'User berhasil diubah.');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return back()->with('error', 'User berhasil dihapus.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
