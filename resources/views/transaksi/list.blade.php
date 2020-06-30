@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-12" style="font-style: Calibri;font-size:12px">
        <h3><i class="fas fa-list"></i>&nbsp;List Transaksi</h3>    
        <div>
            <a href="{{ route('transaksi.create')}}" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i>&nbsp;Add Record</a>
        </div>
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                  {{ session()->get('success') }}  
                </div>
            @endif
        </div>    
        <table class="table table-striped">
            <thead>
                <tr>
                  <th width="90">Actions</th>
                  <th>Tgl. Transaksi</th>
                  <th>Konsumen</th>
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
                        <td>{{$data->id_konsumen}}</td>
                        <td>{{$data->waktu_masuk}}</td>
                        <td>{{$data->waktu_keluar}}</td>
                        <td>{{$data->waktu_biaya}}</td>
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
</div>
@endsection