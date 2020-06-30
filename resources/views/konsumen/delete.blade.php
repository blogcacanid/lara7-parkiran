@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8" style="font-style: Calibri;font-size:12px">
        <h3><i class="fas fa-trash"></i>&nbsp;Delete Konsumen</h3>    
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
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td width=200><b>Nama Konsumen</b></td>
                    <td>: {{$data->nama_konsumen}}</td>
                </tr>
                <tr>
                    <td><b>Jenis Kendaraan</b></td>
                    <td>: {{$data->jenis_kendaraan}}</td>
                </tr>
                <tr>
                    <td><b>no. Polisi</b></td>
                    <td>: {{$data->no_polisi}}</td>
                </tr>
            </tbody>
        </table>
        <p><b>Are you sure delete this record ?</b></p>
        <table>
            <tr>
                <td><a href="{{ route('konsumen.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;Cancel</a></td>
                <td>
                    <form action="{{ route('konsumen.destroy', $data->id_konsumen)}}" method="post">
                      @csrf
                      @method('DELETE')
                     <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i>&nbsp;Delete</button>
                    </form>
                </td>
            <tr>
        </table>    
    <div>
</div>
@endsection