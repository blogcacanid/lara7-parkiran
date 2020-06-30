<?php

namespace App\Http\Controllers;
use App\Konsumen;

use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konsumens = Konsumen::paginate(5);
        return view('konsumen.list', compact('konsumens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konsumen.create'); 
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
            'nama_konsumen'  => 'required',
            'jenis_kendaraan' => 'required'
        ]);
        $data = new Konsumen([
            'nama_konsumen'     => $request->get('nama_konsumen'),
            'jenis_kendaraan'   => $request->get('jenis_kendaraan'),
            'no_polisi'         => $request->get('no_polisi'),
            'tgl_lahir'         => $request->get('tgl_lahir'),
            'kelamin'           => $request->get('kelamin'),
            'no_hp'             => $request->get('no_hp')
        ]);
        $data->save();
        return redirect('/konsumen-list')->with('success', 'konsumen created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Konsumen::find($id);
        return view('konsumen.edit', compact('data'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama_konsumen'  => 'required',
            'jenis_kendaraan' => 'required'
        ]);
        $data = Konsumen::find($id);
        $data->nama_konsumen    = $request->get('nama_konsumen');
        $data->jenis_kendaraan  = $request->get('jenis_kendaraan');
        $data->no_polisi        = $request->get('no_polisi');
        $data->tgl_lahir        = $request->get('tgl_lahir');
        $data->kelamin          = $request->get('kelamin');
        $data->no_hp            = $request->get('no_hp');
        $data->save();
        return redirect('/konsumen')->with('success', 'Record updated!');
    }

    public function delete($id)
    {
        $data = Konsumen::find($id);
        return view('konsumen.delete', compact('data'));        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Konsumen::find($id);
        $data->delete();
        return redirect('/konsumen')->with('success', 'Record deleted!');
        //
    }
}
