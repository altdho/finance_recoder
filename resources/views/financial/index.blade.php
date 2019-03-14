@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-1-12">
      <h3>Your Finance</h3>
    </div>
    <div class="col-sm-2">
      <a class="btn btn-sm btn-success" href="{{route('financial.create')}}">Create New Finance</a>
    </div>
  </div>

  @if(session('status'))
  <div class="alert alert-success">
    <p>{{session('status')}}</p>
  </div>
  @endif

  <table class="table table-hover table-sm">
    <tr>
      <th width = "50px"><b>No.</b></th>
      <th width = "200  px"><b>Nama</b></th>
      <th>Keterangan</th>
      <th width = "300px"><b>Total Harga</b></th>
      <th width = "300px"><b>Action</b></th>
    </tr>
  @foreach ($financials as $financial)

    <tr>
      <td><b>{{++$i}}.</b></td>
      <td><b>{{$financial->nama}}</b></td>
      <td><b>{{$financial->katagori}}</b></td>
      <td><b>{{$financial->jumlah}}</b></td>
      <td>
        <a class="btn btn-sm btn-success" href="{{route('financial.show', $financial->id)}}">Show</a>
        <a class="btn btn-sm btn-success" href="{{route('financial.edit', $financial->id)}}">Edit</a>
        <form action="{{route('financial.destroy', $financial->id)}}" method="post" style="display: inline-block;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger"  onclick="return confirm('Are you sure to delete this data from your list ?')">Delete</button>
        </form>
      </td>
    </tr>
  @endforeach
  </table>
  {{$financials->links() }}
</div>
@endsection
