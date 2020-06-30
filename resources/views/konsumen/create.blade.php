@extends('base')
@section('main')
<div class='container py-4'>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header"><i class="fas fa-plus-circle"></i>&nbsp;Add Record - Konsumen</div>
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
                    <form method="post" action="{{ route('konsumen.post') }}">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="nama_konsumen">Name Konsumen:</label>
                            <input type="text" class="form-control" name="nama_konsumen" />
                        </div>
                        <div class="form-group">
                            <label for="jenis_kendaraan">Jenis Kendaraan:</label>
                            <select name="jenis_kendaraan" class="form-control"style="width:250px">
                                <option value="">--Pilih Jenis Kendaraan--</option>
                                <option value="Mobil">Mobil</option>
                                <option value="Motor">Motor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_polisi">No. Polisi:</label>
                            <input type="text" class="form-control" name="no_polisi" />
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tgl. Lahir:</label>
                            <input type="text" class="form-control" name="tgl_lahir" />
                        </div>
                        <div class="form-group">
                            <label for="kelamin">Kelamin:</label>
                            <select name="kelamin" class="form-control"style="width:250px">
                                <option value="">--Pilih Jenis Kelamin--</option>
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No. Hanphone:</label>
                            <input type="text" class="form-control" name="no_hp" />
                        </div>
                        <a href="{{ route('konsumen.list')}}" class="btn btn-secondary btn-sm" title="Back"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;Back</a>&nbsp;
                        <button type="submit" class="btn btn-success btn-sm" title="Save now"><i class="fas fa-save"></i>&nbsp;Save</button>
                    </form>
                <div>
            <div>
        <div>
    </div>
</div>
@endsection