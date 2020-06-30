@extends('base')
@section('main')
<div class="container py-4">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header"><i class="fas fa-trash"></i>&nbsp;Delete Record - Transaksi</div>          
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br /> 
                    @endif
                    @if(!empty($data))
                    <table class="table table-striped" style="font-style: Calibri;font-size:12px">
                        <tbody>
                            <tr>
                                <td><b>Tgl. Transaksi</b></td>
                                <td>: {{$data->tgl_transaksi}}</td>
                            </tr>
                            <tr>
                                <td width=150><b>Nama Konsumen</b></td>
                                <td>: {{$data->nama_konsumen}}</td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kendaraan</b></td>
                                <td>: {{$data->jenis_kendaraan}}</td>
                            </tr>
                            <tr>
                                <td><b>No. Polisi</b></td>
                                <td>: {{$data->no_polisi}}</td>
                            </tr>
                            <tr>
                                <td><b>Waktu Masuk</b></td>
                                <td>: {{date('H:i:s d M Y', strtotime($data->waktu_masuk))}}</td>
                            </tr>
                            <tr>
                                <td><b>Waktu Keluar</b></td>
                                <td>: {{date('H:i:s d M Y', strtotime($data->waktu_keluar))}}</td>
                            </tr>
                            <tr>
                                <td><b>Biaya</b></td>
                                <td>: {{$data->biaya}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p><b>Are you sure delete this record ?</b></p>
                    <table>
                        <tr>
                            <td><a href="{{ route('transaksi.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;Cancel</a></td>
                            <td>
                                <form action="{{ route('transaksi.destroy', $data->id_transaksi)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                 <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i>&nbsp;Delete</button>
                                </form>
                            </td>
                        <tr>
                    </table>    
                    @endif
                <div>
            <div>
        <div>
    </div>
</div>
@endsection