@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Detail Informasi</h3>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <strong>Nama :</strong> {{$financial->nama}}
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <strong>Keterangan :</strong> {{$financial->katagori}}
      </div>
    </div>
    <div class="col-md-12">
      <a href="{{route('financial.index')}}" class="btn btn-sm btn-success">Back</a>
    </div>
  </div>
</div>
@endsection
