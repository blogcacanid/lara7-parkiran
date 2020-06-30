@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-12" style="font-style: Calibri;font-size:12px">
        <h3><i class="fas fa-list"></i>&nbsp;List Konsumen</h3>    
        <div>
            <a href="{{ route('konsumen.add')}}" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i>&nbsp;Add Record</a>
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
                  <th>Nama Konsumen</th>
                  <th>Jenis Kendaraan</th>
                  <th>No. Polisi</th>
                  <th>Tgl. Lahir</th>
                  <th>No. Handphone</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($konsumens) && $konsumens->count())
                    @foreach($konsumens as $data)
                    <tr>
                        <td>
                            <a href="{{ route('konsumen.edit', $data-> id_konsumen)}}" title="Edit"><span style="font-size: 1em; color: Dodgerblue;"><i class="fas fa-edit"></i></span></a>&nbsp;
                            <a href="{{ route('konsumen.delete', $data-> id_konsumen)}}" title="Delete"><span style="font-size: 1em; color: Tomato;"><i class="fas fa-trash"></span></i></a>
                        </td>
                        <td>{{$data->nama_konsumen}}</td>
                        <td>{{$data->jenis_kendaraan}}</td>
                        <td>{{$data->no_polisi}}</td>
                        <td>{{$data->tgl_lahir}}</td>
                        <td>{{$data->no_hp}}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6">No record found...!!!</td>
                    </tr>
                @endif
            </tbody>
        </table>
        {!! $konsumens->links() !!}
    <div>
</div>
@endsection