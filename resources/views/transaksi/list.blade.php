@extends('base')
@section('main')
<div class="container py-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-list"></i>&nbsp;List Transaksi</div>          
                <div class="card-body">
                    <div>
                        <a href="{{ route('transaksi.create')}}" class="btn btn-success btn-sm mb-3"><i class="fas fa-plus-circle"></i>&nbsp;Add Record</a>
                    </div>
                    <div class="col-sm-12">
                        @if(session()->get('success'))
                            <div class="alert alert-success">
                              {{ session()->get('success') }}  
                            </div>
                        @endif
                    </div>    
                    <table class="table table-striped" style="font-style: Calibri;font-size:12px">
                        <thead>
                            <tr>
                              <th width="90">Actions</th>
                              <th>Tgl. Transaksi</th>
                              <th>Konsumen</th>
                              <th>No. Polisi</th>
                              <th>Waktu Masuk</th>
                              <th>Waktu Keluar</th>
                              <th>Biaya</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($transaksis) && $transaksis->count())
                                @foreach($transaksis as $data)
                                <tr>
                                    <td>
                                        <a href="{{ route('transaksi.edit', $data-> id_transaksi)}}" title="Edit"><span style="font-size: 1em; color: Dodgerblue;"><i class="fas fa-edit"></i></span></a>&nbsp;
                                        <a href="{{ route('transaksi.delete', $data-> id_transaksi)}}" title="Delete"><span style="font-size: 1em; color: Tomato;"><i class="fas fa-trash"></span></i></a>
                                    </td>
                                    <td>{{$data->tgl_transaksi}}</td>
                                    <td>{{$data->nama_konsumen}}</td>
                                    <td>{{$data->no_polisi}}</td>
                                    <td>{{date('H:i', strtotime($data->waktu_masuk))}}</td>
                                    <td>
                                        @php
                                        if ($data->waktu_keluar == '')
                                        {
                                            $waktu_Keluar = '';
                                        }
                                        else
                                        {
                                            $waktu_Keluar = date('H:i', strtotime($data->waktu_keluar));
                                        }
                                        @endphp
                                        {{$waktu_Keluar}}
                                    </td>
                                    <td>{{$data->biaya}}</td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">No record found...!!!</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {!! $transaksis->links() !!}
                <div>
            <div>
        <div>
    </div>
</div>
@endsection