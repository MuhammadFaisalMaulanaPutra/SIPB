<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function show_create(){
        return view('createuser');

    }
    public function destroy($id)
    {
    
        $user = User::find($id);
        $user->delete();

        return redirect('/dashboard');
    }

    public function show_edit($id){
        // dd(User::findOrFail($id));
        return view ( 'edituser', [
            'user'=> User::findOrFail($id)
            // 'user'=> User::where('id',$id)->get()
            
        ]);

    }


}


