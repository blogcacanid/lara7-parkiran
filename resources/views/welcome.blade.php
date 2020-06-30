@extends('base')
@section('main')

<div class="container py-4">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <!-- <div class="card-header text-white" style="background-color: #00AA9E;">Welcome</div>           -->
                <div class="card-header"><i class="fas fa-home"></i>&nbsp;Welcome</div>          
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Program Parkiran</h6>
                    <p class="card-text">Program Aplikasi Parkiran menggunakan Laravel 7</p>
                    <a href="{{ route('konsumen.list')}}" class="btn btn-primary btn-sm" title="Konsumen">Konsumen</a>&nbsp;
                    <a href="{{ route('transaksi.list')}}" class="btn btn-primary btn-sm" title="Transaksi">Transaksi</a>&nbsp;
                </div>          
            </div>
        </div>

    </div>


</div>
@endsection