@extends('base')
@section('main')
<div class='container py-4'>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header"><i class="fas fa-edit"></i>&nbsp;Edit Record - Transaksi</div>
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

                    @php
                    $jns_kendaraan = 'Mobil';
                    $jam_masuk = $data['waktu_masuk'];
                    $jam_keluar = date('H:i:s');
                    if ($jns_kendaraan == 'Mobil')
                    {
                        $tarif_awal = 5000;
                        $tarif_berikutnya = 1000;
                    }
                    else
                    {
                        $tarif_awal = 2000;
                        $tarif_berikutnya = 500;
                    }
                    $biaya = $tarif_awal;
                    @endphp

                    <form method="post" action="{{ route('transaksi.update',$data['id_transaksi']) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="tgl_transaksi">Tgl. Transaksi</label>
                            <input type="date" class="form-control" name="tgl_transaksi" value="{{ $data['tgl_transaksi'] }}" readonly="true" />
                        </div>
                        <div class="form-group">
                            <label for="id_konsumen">Nama Konsumen:</label>
                            <select name="id_konsumen" class="form-control" readonly="true" />
                            @foreach($konsumens as $konsumen)
                                <option value="{{ $konsumen->id_konsumen }}" {{$data->id_konsumen == $konsumen->id_konsumen  ? 'selected' : '' }}>{{ $konsumen->nama_konsumen}} - {{ $konsumen->jenis_kendaraan}} - {{ $konsumen->no_polisi}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="waktu_masuk">Waktu Masuk:</label>
                            <input type="time" class="form-control" name="waktu_masuk" value="{{ $data['waktu_masuk'] }}" readonly="true" />
                        </div>
                        <div class="form-group">
                            <label for="waktu_keluar">Waktu Keluar:</label>
                            <input type="time" class="form-control" name="waktu_keluar" value="{{ $jam_keluar }}" />
                        </div>
                        <div class="form-group">
                            <label for="biaya">Biaya</label>
                            <input type="text" class="form-control" name="biaya" value="{{ $biaya }}" />
                        </div>
                        <a href="{{ route('transaksi.list')}}" class="btn btn-secondary btn-sm" title="Back"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;Back</a>&nbsp;
                        <button type="submit" class="btn btn-primary btn-sm" title="Update now"><i class="fas fa-save"></i>&nbsp;Update</button>
                    </form>
                <div>
            <div>
        <div>
    </div>
</div>
@endsection