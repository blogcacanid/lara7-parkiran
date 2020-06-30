@extends('base')
@section('main')
<div class='container py-4'>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header"><i class="fas fa-plus-circle"></i>&nbsp;Add Transaksi</div>
                <div class="card-body" style="font-style: Calibri;font-size:13px">
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
                    <form method="post" action="{{ route('transaksi.post') }}">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="tgl_transaksi">Tgl. Transaksi:</label>
                            <input type="text" class="form-control" name="tgl_transaksi" value="{{ date('Y-m-d') }}" />
                        </div>
                        <div class="form-group">
                            <label for="id_konsumen">Name Konsumen:</label>
                            <select name="id_konsumen" class="form-control"style="width:250px">
                                <option value="">--Pilih Konsumen--</option>
                                @foreach ($konsumens as $data_konsumen)
                                    <option value="{{ $data_konsumen->id_konsumen }}">{{ $data_konsumen->nama_konsumen}} - {{ $data_konsumen->jenis_kendaraan}} - {{ $data_konsumen->no_polisi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="waktu_masuk">Waktu Masuk:</label>
                            <input type="text" class="form-control" name="waktu_masuk" value="{{ date('H:i:s') }}" disabled="" />
                        </div>
                        <a href="{{ route('transaksi.list')}}" class="btn btn-secondary btn-sm" title="Back"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;Back</a>&nbsp;
                        <button type="submit" class="btn btn-success btn-sm" title="Save now"><i class="fas fa-save"></i>&nbsp;Save</button>
                    </form>
                <div>
            <div>
        <div>
    </div>
</div>
@endsection