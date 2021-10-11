<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role=="1"){
            $room_admins = Room::all();
            return view('room.roomAdmin', ['room_admins'=> $room_admins]);
        }else{
            $room_user = Room::all();
            // return $db_user;

            return view('room.room', ['room_user'=> $room_user]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('room.roomCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        // return $request->file('gambar')->store('images','public');
        $request->validate([
            'nama' => 'required',
            'fasilitas' => 'required',
        ]);
        if($request->file('gambar')){
            $img_name =$request->file('gambar')->store('images','public');
        }
        $id = Room::create($request->all())->id;
        $dsh = Room::find($id);
        $dsh->gambar = $img_name;
        $dsh->update();
        return redirect()->route('room.index')-> with('success', 'Data Dashboard Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room_admins = Room::find($id);
        return view('room.edit', ['room_admins' => $room_admins]);
    }   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'fasilitas' => 'required',
        ]);

        if ($request->file('gambar') != null) {
            Storage::delete('public/' . $request->gambar);
            $img_name = $request->file('gambar')->store('images', 'public');
        } else {
            $img_name = $request->gambarlama;
        }
        Room::find($id)->update($request->all());
        // if($request->file('gambar')!=null)
        // {
        //     $gambar = $this->uploadFile($request,'gambar');
        // }else
        // {
        //      $gambar = $request->gambar_old;
        // }

       


        $rms = Room::find($id);
        $rms->gambar = $img_name;
        $rms->save();
        return redirect()->route('room.index')-> with('success', 'Dashboard user Berhasil DiUpdate');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room::find($id)->delete();
        return redirect()->route('room.index')->with('Success', 'Data Dashboard Berhasil Dihapus');
    }
}
