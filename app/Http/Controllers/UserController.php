<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
 
    public function index()
    {
        return view('dashboardview.table-user', [
           'user' => user::all(),
           'title' => 'User'
        ]);  
    }

    public function create(Request $request){
        User::create([
            'nama_user' => $request->nama_user,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect('/dashboard');

    }

    public function update(Request $request)
    {
        DB::table('users')->where('id',$request->id)->update([
            'nama_user' => $request->nama_user,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            ]);
            return redirect('/dashboard');
            // $data = User::findOrFail($request->id);
        
            // $data->update($request->all());
    }

    public function store(Request $request)
    {
        User::create([
            'nama_user' => $request->nama_user,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect('/login');
    }

    public function show($id)
    {
        return view('dashboardview.table-user', [
           'user' => User::where('id_role',$id)->get(),
           'title' => 'User'
        ]);  
    }

    public function editrole($id)
    {
        return view('dashboardview.edit.editroleuser', [
           'user' => User::find($id),
           'role' => Role::all(),
           'title' => User::find($id)->nama_user
        ]);  
    }

    public function updaterole(Request $request){
        DB::table('users')->where('id',$request->id)->update([
            'id_role' => $request->id_role
        ]);

        $request->session()->flash('update','Role Berhasil Diperbarui');

        return redirect('/dashboard-table-user');
    }


}


