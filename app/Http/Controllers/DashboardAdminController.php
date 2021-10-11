<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashboardAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return DashboardAdmin::all();
        if (auth()->user()->role=="1"){
            $dashboard_admins = DashboardAdmin::all();
            return view('dashboard.dashboardadm', ['dashboard_admins'=> $dashboard_admins]);
        }else{
            $db_user = DashboardAdmin::all();
            // return $db_user;
            return view('dashboard.dashboard', ['db_user'=> $db_user]);
        }
    }

    public function listdb()
    {
        $db_list = DashboardAdmin::all();
        return view('dashboard.dashboard-index', ['db_list'=> $db_list]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create-dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);
        if($request->file('gambar')){
            $img_name =$request->file('gambar')->store('images','public');
        }
        $id = DashboardAdmin::create($request->all())->id;
        $dsh = DashboardAdmin::find($id);
        $dsh->gambar = $img_name;
        $dsh->update();
        return redirect()->route('listdb')-> with('success', 'Data Dashboard Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboardadm  $dashboardadm
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboardadm $dashboardadm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboardadm  $dashboardadm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db_list = DashboardAdmin::find($id);
        return view('dashboard.edit', ['db_list' => $db_list]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DashboardAdmin  $dashboardadm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($request->file('gambar') != null) {
            Storage::delete('public/' . $request->gambar);
            $img_name = $request->file('gambar')->store('images', 'public');
        } else {
            $img_name = $request->gambarlama;
        }
        DashboardAdmin::find($id)->update($request->all());
        // if($request->file('gambar')!=null)
        // {
        //     $gambar = $this->uploadFile($request,'gambar');
        // }else
        // {
        //      $gambar = $request->gambar_old;
        // }

       


        $dsh = DashboardAdmin::find($id);
        $dsh->gambar = $img_name;
        $dsh->save();
        return redirect()->route('listdb')-> with('success', 'Dashboard user Berhasil DiUpdate');;
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboardadm  $dashboardadm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DashboardAdmin::find($id)->delete();
        return redirect()->route('listdb')->with('Success', 'Data Dashboard Berhasil Dihapus');
    }

    public function uploadFile(Request $request,$oke)
    {
            $result ='';
            $file = $request->file($oke);
            $name = $file->getClientOriginalName();
            // $tmp_name = $file['tmp_name'];

            $extension = explode('.',$name);
            $extension = strtolower(end($extension));

            $key = rand().'-'.$oke;
            $tmp_file_name = "{$key}.{$extension}";
            $tmp_file_path = "images/dashboard/";
            $file->move($tmp_file_path,$tmp_file_name);
            // if(move_uploaded_file($tmp_name, $tmp_file_path)){
            $result = 'images/dashboard'.'/'.$tmp_file_name;
            // }
        return $result;
    }
}
