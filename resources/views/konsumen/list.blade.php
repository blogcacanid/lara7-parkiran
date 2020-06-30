@extends('base')
@section('main')
<div class="container py-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-list"></i>&nbsp;List Konsumen</div>          
                <div class="card-body">
                    <div>
                        <a href="{{ route('konsumen.add')}}" class="btn btn-success btn-sm mb-3"><i class="fas fa-plus-circle"></i>&nbsp;Add Record</a>
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
                                    <td>{{ date('d M Y', strtotime($data->tgl_lahir)) }}</td>
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
            <div>
        <div>
    </div>
</div>
@endsection