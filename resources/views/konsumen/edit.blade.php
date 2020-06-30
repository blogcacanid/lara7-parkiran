@extends('base')
@section('main')
<div class='container py-4'>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header"><i class="fas fa-edit"></i>&nbsp;Edit Record</div>
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
                    <form method="post" action="{{ route('konsumen.update', $data['id_konsumen']) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="nama_konsumen">Nama Konsumen:</label>
                            <input type="text" class="form-control" name="nama_konsumen" value="{{ $data['nama_konsumen'] }}" />
                        </div>
                        <div class="form-group">
                            <label for="jenis_kendaraan">Jenis Kendaraan:</label>
                            <input type="text" class="form-control" name="jenis_kendaraan" value="{{ $data['jenis_kendaraan'] }}" />
                            <select name="jenis_kendaraan" class="form-control"style="width:250px">
                                <option value="">--Pilih Jenis Kendaraan--</option>
                                <option value="Mobil">Mobil</option>
                                <option value="Motor">Motor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_polisi">No. Polisi:</label>
                            <input type="text" class="form-control" name="no_polisi" value="{{ $data['no_polisi'] }}" />
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tgl. Lahir:</label>
                            <input type="text" class="form-control" name="tgl_lahir" value="{{ $data['tgl_lahir'] }}" />
                        </div>
                        <div class="form-group">
                            <label for="kelamin">Kelamin:</label>
                            <input type="text" class="form-control" name="kelamin" value="{{ $data['kelamin'] }}" />
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No. Handphone:</label>
                            <input type="text" class="form-control" name="no_hp" value="{{ $data['no_hp'] }}" />
                        </div>
                        <a href="{{ route('konsumen.list')}}" class="btn btn-secondary btn-sm" title="Back"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;Back</a>&nbsp;
                        <button type="submit" class="btn btn-primary btn-sm" title="Update now"><i class="fas fa-save"></i>&nbsp;Update</button>
                    </form>
                <div>
            <div>
        <div>
    </div>
</div>
@endsection