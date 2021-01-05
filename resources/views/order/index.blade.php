@extends('layouts.app')
@section('content')

@if(auth()->user()->status == 'user')


<div class="container-fluid"  id="get_data">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pengguna</th>
      <th scope="col">Nama Makanan</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Tracking</th>
      <th scope="col">Tanggal Order</th>
    </tr>
  </thead>
  @foreach($arry as $ar)
  <tbody>
    <tr>
      <th scope="row">{{$ar->id}}</th>
      <th scope="row">{{$ar->name}}</th>
      <td>{{$ar->name_food}}</td>
      <td>Rp.{{$ar->price}}</td>
      <td>{{$ar->description}}</td>
      <td>{{$ar->category}}</td>
      @if($ar->tracking == 'pending')
      <td>pesanan diterima, sedang di prosess
      <i class='fa fa-clock' style='font-size:30px;float:right;'></i>
      </td>
      @else
      <td>pesanan sudah selesai dibuat
      <i class='fa fa-check' style='font-size:30px;float:right;'></i>
      </td>
@endif

      <td>{{date('F j, Y H:i:s', strtotime($ar->tanggal_order))}}</td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</main>
@endif

@if(auth()->user()->status == 'admin')

<div  id="get_data">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pengguna</th>
      <th scope="col">Nama Makanan</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Tanggal Order</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  @foreach($adminfor as $arr)
  <tbody>
    <tr>
      <th scope="row">{{$arr->id}}</th>
      <th scope="row">{{$arr->name}}</th>
      <td>{{$arr->name_food}}</td>
      <td>Rp.{{$arr->price}}</td>
      <td>{{$arr->description}}</td>
      <td>{{$arr->category}}</td>
      <td>{{date('F j, Y H:i:s', strtotime($arr->tanggal_order))}}</td>
      <td>{{$arr->tracking}}
@if($arr->tracking == 'success')
<i class='fas fa-check' style='font-size:30px;float:right;' data-toggle="modal" data-target="#modalFood"></i>
     @else
     <a href="#"></a>
     <i class='fa fa-lock' style='font-size:30px;float:right;'></i>
     <a class="w-25 " href="/home/order/konfirmasi/{{$arr->order_id}}"><i><button class="btn btn-outline-info ">Confirm</button></i></a>
     @endif
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</div>
</main>
@endif
</div>

@endsection