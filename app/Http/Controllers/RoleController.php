<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardview.table-role', [
            'role' => Role::all(),
            'title' => 'Role'
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardview.create.role', [
            'title'     => 'Role'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'role' => 'required|max:50',
        ]);

        DB::table('role')->insert([
            'Role' => $validatedData['role'],
        ]);

        $request->session()->flash('success','Role Berhasil Ditambahkan');

        return redirect('/dashboard-table-role');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboardview.edit.role', [
            'role'      => Role::find($id),
            'title'     => 'Role'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'nama_role' => 'required',
        ]);

        DB::table('role')->where('id',$request->id)->update([
            'Role' => $validatedData['nama_role'],
        ]);

        $request->session()->flash('Update','Role Berhasil Diperbarui');

        return redirect('/dashboard-table-role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
