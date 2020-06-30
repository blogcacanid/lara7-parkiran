<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Konsumen;
use App\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transaksis = DB::table('transaksi')
            ->join('konsumen', 'konsumen.id_konsumen', '=', 'transaksi.id_konsumen')
            ->select('transaksi.id_transaksi','konsumen.nama_konsumen','konsumen.no_polisi',
                'transaksi.tgl_transaksi','transaksi.waktu_masuk','transaksi.waktu_keluar',
                'transaksi.biaya')
            ->paginate(5);
        return view('transaksi.list', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $konsumens = Konsumen::all();
        return view('transaksi.create', compact('konsumens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tgl_transaksi' => 'required',
            'id_konsumen'   => 'required',
            'waktu_masuk'   => 'required'
        ]);

        $data = new Transaksi([
            'tgl_transaksi' => $request->get('tgl_transaksi'),
            'id_konsumen'   => $request->get('id_konsumen'),
            'waktu_masuk'   => $request->get('waktu_masuk')
        ]);
        $data->save();
        return redirect('/transaksi')->with('success', 'Transaksi saved!');
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
        //
        $konsumens = Konsumen::all();
        //$data = Transaksi::find($id);
        $data = DB::table('transaksi')
           ->join('konsumen', 'konsumen.id_konsumen', '=', 'transaksi.id_konsumen')
           ->select('transaksi.id_transaksi','konsumen.id_konsumen','konsumen.nama_konsumen','konsumen.jenis_kendaraan', 
                'transaksi.tgl_transaksi','transaksi.waktu_masuk','transaksi.waktu_keluar','transaksi.biaya')
           ->where('transaksi.id_transaksi', '=', $id)->first();
        return view('transaksi.edit', compact('data','konsumens'));        
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
            'waktu_keluar'  => 'required',
            'biaya'         => 'required'
        ]);
        $data = Transaksi::find($id);
        $data->waktu_keluar = $request->get('waktu_keluar');
        $data->biaya        = $request->get('biaya');
        $data->save();
        return redirect('/transaksi')->with('success', 'Record updated!');
    }

    public function delete($id)
    {
        //$data = Konsumen::find($id);
        $data = DB::table('transaksi')
           ->join('konsumen', 'konsumen.id_konsumen', '=', 'transaksi.id_konsumen')
           ->select('transaksi.id_transaksi','konsumen.id_konsumen','konsumen.nama_konsumen','konsumen.no_polisi','konsumen.jenis_kendaraan', 
                'transaksi.tgl_transaksi','transaksi.waktu_masuk','transaksi.waktu_keluar','transaksi.biaya')
           ->where('transaksi.id_transaksi', '=', $id)->first();
        return view('transaksi.delete', compact('data'));        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Transaksi::find($id);
        $data->delete();
        return redirect('/transaksi')->with('success', 'Record deleted!');
    }
}
