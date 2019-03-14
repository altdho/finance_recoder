@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3>Edit Your Finance</h3>
    </div>
  </div>
  @if(session('status'))
  <div class="alert alert-success">
    <p>{{session('status')}}</p>
  </div>
  @endif

  <form action="{{route('financial.update', $financial->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-md-12">
        <strong>Nama :</strong>
        <input type="text" name="nama" class="form-control" value="{{$financial->nama}}" placeholder="Nama" required>
      </div>
      <div class="col-md-12">
        <strong>Keterangan :</strong>
          <textarea class="form-control" placeholder="Keterangan" name="katagori" required>{{$financial->katagori}}</textarea><br>
      </div>
      <div class="col-md-12">
        <strong>Total Harga :</strong>
          <input class="form-control" type="number" value="{{$financial->jumlah}}" name="jumlah" required></textarea><br>
      </div>
      <div class="col-md-12">
        <a href="{{route('financial.index')}}" class="btn btn-sm btn-success">Back</a>
        <button type="submit" class="btn btn-sm btn-primery">Submit</button>
      </div>
    </div>
  </form>
</div>
@endsection
