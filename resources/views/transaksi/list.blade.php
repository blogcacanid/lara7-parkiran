@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-12">
        <h3><i class="fas fa-list"></i>&nbsp;List Transaksi</h3>    
        <div>
            <a href="{{ route('transaksi.create')}}" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i>&nbsp;Add Record</a>
            <a style="margin: 2px;" href="{{ route('transaksi.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-refresh"></i>&nbsp;Refresh</a>
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
                  <th>NIP</th>
                  <th>Nama Konsumen</th>
                  <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($datas) && $datas->count())
                    @foreach($datas as $data)
                    <tr>
                        <td>
                            <a href="#" title="View"><span style="font-size: 1em; color: Mediumslateblue;"><i class="fas fa-eye"></i></span></a>&nbsp;
                            <a href="#" title="Edit"><span style="font-size: 1em; color: Dodgerblue;"><i class="fas fa-edit"></i></span></a>&nbsp;
                            <a href="#" title="Delete"><span style="font-size: 1em; color: Tomato;"><i class="fas fa-trash"></span></i></a>
                        </td>
                        <td>{{$data->nip}}</td>
                        <td>{{$data->nama_transaksi}}</td>
                        <td>{{$data->alamat}}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No record found...!!!</td>
                    </tr>
                @endif
            </tbody>
        </table>
        {!! $datas->links() !!}
    <div>
</div>
@endsection